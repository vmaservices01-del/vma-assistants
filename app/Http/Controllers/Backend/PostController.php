<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage; // Required for deleting images

class PostController extends Controller {

    public function index() {
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        return view('backend.blogs.index', compact('posts'));
    }

    public function create() {
        return view('backend.blogs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
        ]);

        $imagePath = null;

        if ($request->hasFile('featured_image')) {
            $imagePath = $request->file('featured_image')->store('blogs', 'public');
        }

        \App\Models\Post::create([
            'title' => $request->title,
            'slug' => $request->slug ?? \Str::slug($request->title),
            'content' => $request->content,
            'category' => $request->category,
            'excerpt' => $request->excerpt,
            'seo_title' => $request->seo_title,
            'seo_keywords' => $request->seo_keywords,
            'seo_description' => $request->seo_description,
            'status' => $request->status,
            'featured_image' => $imagePath,
        ]);

        return redirect()->route('backend.blogs.index')->with('success', 'Blog created!');
    }

    public function edit($id) {
        $post = Post::findOrFail($id);
        return view('backend.blogs.edit', ['page' => $post]); // Passing as 'page' for the layout SEO
    }

    public function update(Request $request, $id) {
        $post = Post::findOrFail($id);

        $post->title = $request->title;
        $post->slug = Str::slug($request->title); 
        $post->excerpt = $request->excerpt;
        $post->category = $request->category;
        $post->content = $request->content;
        $post->seo_title = $request->seo_title;
        $post->seo_description = $request->seo_description;
        $post->keywords = $request->keywords;
        $post->schema = $request->schema;

        if($request->hasFile('featured_image')) {
            if($post->featured_image) {
                Storage::delete('public/' . $post->featured_image);
            }
            $path = $request->file('featured_image')->store('blogs', 'public');
            $post->featured_image = $path;
        }

        $post->save();
        return redirect()->route('backend.blogs.index')->with('success', 'Blog updated!');
    }

    public function destroy($id) {
        $post = Post::findOrFail($id);
        if($post->featured_image) {
            Storage::delete('public/' . $post->featured_image);
        }
        $post->delete();
        return redirect()->back()->with('success', 'Post deleted successfully');
    }
}