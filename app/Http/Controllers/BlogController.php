<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Page;


class BlogController extends Controller
{
    public function index(Request $request)
    {
        $query = Post::query(); // Change this to your model name, e.g., Page or Post

        // 1. Filter by Category if selected
        if ($request->has('category')) {
            $query->where('category', $request->category);
        }

        // 2. Paginate 6 per page
        $pages = $query->latest()->paginate(6);

        $page = Page::where('slug', 'blog')->firstOrFail();
        $seo = [
            'title'       => $page->seo_title ?? $page->seo_title . ' | VMA Service Inc Blog',
            'description' => $page->seo_description ?? $page->seo_description,
            'keywords'    => $page->seo_keywords ?? 'VMA blog, facility maintenance tips',
            'schema'      => $page->schema_json ?? null
        ];

        // If the request is AJAX (for Load More), return only the posts partial
        if ($request->ajax()) {
            return view('frontend.blog.partials.list', compact('pages'))->render();
        }

        return view('frontend.blog.index', compact('pages', 'seo'));
    }


    public function show($slug)
    {
        $page = Post::where('slug', $slug)->firstOrFail();

        $seo = [
            'title'       => $page->seo_title ?? $page->title . ' | VMA Service Inc Blog',
            'description' => $page->seo_description ?? $page->excerpt,
            'keywords'    => $page->seo_keywords ?? $page->keywords,
            'schema'      => $page->schema_json ?? null
        ];

        // DYNAMIC: Filter by the current post's category
        $relatedPosts = Post::where('category', $page->category)
                            ->where('id', '!=', $page->id) // Don't show the current post
                            ->latest() // Show newest first
                            ->limit(4)
                            ->get();

        return view('frontend.blog.show', compact('page', 'relatedPosts', 'seo'));
    }
}
