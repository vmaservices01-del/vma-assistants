<?php
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function index()
    {
        $pages = Page::latest()->paginate(10);
        return view('backend.pages.index', compact('pages'));
    }

    public function create()
    {
        $templates = $this->getFrontendTemplates();
        return view('backend.pages.create', compact('templates'));
    }

    public function edit(Page $page)
    {
        $templates = $this->getFrontendTemplates();
        $page->load('images');

        return view('backend.pages.edit', compact('page', 'templates'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:pages,slug',
            'category' => 'required|in:page,service',
            'template' => 'nullable|string',
            'primary_color' => 'nullable|string|max:7', // Validate hex code
            'secondary_color' => 'nullable|string|max:7',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048'
        ]);

        $page = Page::create([
            'title' => $request->title,
            'slug' => Str::slug($request->slug),
            'category' => $request->category,
            'template' => $request->template,
            'primary_color' => $request->primary_color ?? '#7C3AED',
            'secondary_color' => $request->secondary_color ?? '#0B1221',
            'content' => $request->content,
            'seo_title' => $request->seo_title,
            'seo_description' => $request->seo_description,
            'seo_keywords' => $request->seo_keywords,
            'schema_json' => $request->schema_json,
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('pages', 'public');
            $page->images()->create([
                'image_path' => $path,
                'alt_tag' => $request->image_alt,
                'image_title' => $request->image_title,
                'image_description' => $request->image_description,
            ]);
        }

        return redirect()->route('backend.pages.index')->with('success', 'Page Created Successfully');
    }

   public function show($slug)
    {
        // Find the page by slug
        $page = Page::where('slug', $slug)->where('category', 'page')->firstOrFail();

        $seo = [
            'title' => $page->seo_title ?? 'Default Title',
            'description' => $page->seo_description ?? 'Default Description',
            'keywords' => $page->seo_keywords ?? 'default, keywords',
            'schema' => $page->schema_json ?? null
        ];

        // 1. Define the default view
        $view = 'frontend.templates.default'; 

        // 2. If a template is assigned in the DB, check if the file exists
        if (!empty($page->template)) {
            $templatePath = "frontend.templates.{$page->template}";
            
            if (view()->exists($templatePath)) {
                $view = $templatePath;
            }
        }

        // 3. Return the determined view with page data
        return view($view, compact('page', 'seo'));
    }

    public function update(Request $request, Page $page)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:pages,slug,' . $page->id,
            'template' => 'nullable|string',
            'category' => 'required|in:page,service',
            'primary_color' => 'nullable|string|max:7',
            'secondary_color' => 'nullable|string|max:7',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048'
        ]);

        $page->update([
            'title' => $request->title,
            'slug' => Str::slug($request->slug),
            'category' => $request->category,
            'template' => $request->template,
            'primary_color' => $request->primary_color,
            'secondary_color' => $request->secondary_color,
            'content' => $request->content,
            'seo_title' => $request->seo_title,
            'seo_description' => $request->seo_description,
            'seo_keywords' => $request->seo_keywords,
            'schema_json' => $request->schema_json,
        ]);

        // Handle Image Update
        $imageRecord = $page->images()->first();
        if ($request->hasFile('image')) {
            if ($imageRecord && Storage::disk('public')->exists($imageRecord->image_path)) {
                Storage::disk('public')->delete($imageRecord->image_path);
            }
            $path = $request->file('image')->store('pages', 'public');
            $page->images()->updateOrCreate(
                ['page_id' => $page->id],
                [
                    'image_path' => $path,
                    'alt_tag' => $request->image_alt,
                    'image_title' => $request->image_title,
                    'image_description' => $request->image_description,
                ]
            );
        } elseif ($imageRecord) {
            $imageRecord->update([
                'alt_tag' => $request->image_alt,
                'image_title' => $request->image_title,
                'image_description' => $request->image_description,
            ]);
        }

        return redirect()->route('backend.pages.index')->with('success', 'Page Updated Successfully');
    }

    public function destroy(Page $page)
    {
        // Delete all associated images from storage
        foreach ($page->images as $image) {
            if (Storage::disk('public')->exists($image->image_path)) {
                Storage::disk('public')->delete($image->image_path);
            }
        }

        // Delete the page (Database cascade will handle the image rows)
        $page->delete();

        return redirect()->route('backend.pages.index')->with('success', 'Page Deleted Successfully');
    }


    public function homepage()
    {
        // Fetch the page designated as home
        $page = Page::where('slug', 'home')->firstOrFail();

        $seo = [
            'title' => $page->seo_title ?? 'Default Title',
            'description' => $page->seo_description ?? 'Default Description',
            'keywords' => $page->seo_keywords ?? 'default, keywords',
            'schema' => $page->schema_json ?? null
        ];

        // If a template is assigned, use it. Otherwise, use a default fallback.
        $viewPath = $page->template ? "frontend.templates.{$page->template}" : "frontend.templates.default";

        // Check if the file actually exists before rendering
        if (view()->exists($viewPath)) {
            return view($viewPath, compact('page', 'seo'));
        }

        abort(404, "Template {$viewPath} not found.");
    }

    public function showService($slug)
    {
        // 1. Find the page by slug and ensure it is a 'service'
        $page = Page::where('slug', $slug)
                    ->where('category', 'service')
                    ->firstOrFail();

        // 32 Prepare SEO Data
        $seo = [
            'title'       => $page->seo_title ?? $page->title . ' | VMA Service Inc',
            'description' => $page->seo_description ?? $page->excerpt,
            'keywords'    => $page->seo_keywords ?? '',
            'schema'      => $page->schema_json ?? null
        ];

        // 4. Determine which Frontend Template to use
        // Default fallback if no template is selected
        $view = 'frontend.templates.default'; 

        if (!empty($page->template)) {
            // Build path: frontend/templates/your-template-name
            $templatePath = "frontend.templates.{$page->template}";
            
            // Check if the physical file exists before trying to load it
            if (view()->exists($templatePath)) {
                $view = $templatePath;
            }
        }
        
        return view($view, compact('page', 'seo'));
    }

    // Helper function to get templates from resources/views/frontend
    private function getFrontendTemplates()
    {
        $path = resource_path('views/frontend/templates');
        
        // Ensure directory exists
        if (!File::isDirectory($path)) {
            return [];
        }

        $files = File::files($path);
        $templates = [];

        foreach ($files as $file) {
            $filename = $file->getFilename();
            if (str_ends_with($filename, '.blade.php')) {
                // Remove .blade.php to get the internal name (e.g., 'homepage')
                $name = str_replace('.blade.php', '', $filename);
                $templates[] = $name;
            }
        }

        return $templates;
    }
}