<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Media;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;

class MediaController extends Controller
{
    public function index()
    {
        $media = Media::latest()->paginate(20);
        return view('backend.media.index', compact('media'));
    }

    public function store(Request $request) 
    {
        $request->validate([
            // Changed: removed 'image', added 'file', and made sure 'svg' is in 'mimes'
            'file' => 'required|file|mimes:jpeg,png,jpg,webp,svg|max:2048',
        ]);

        // This saves the file to: storage/app/public/media/
        $path = $request->file('file')->store('media', 'public');

        \App\Models\Media::create([
            'file_path' => $path, // This saves as "media/filename.jpg"
            'title' => $request->file('file')->getClientOriginalName(),
        ]);

        return back()->with('success', 'Media uploaded successfully!');
    }

    
    public function update(Request $request, $id)
    {
        // 1. First, perform the validation
        $request->validate([
            'title'       => 'required|string|max:255',
            'alt_text'    => 'required|string|max:255',
            'description' => 'nullable|string',
            'page_id'     => 'nullable|exists:pages,id', // Ensure page exists if selected
        ]);

        // 2. Find the record
        $item = \App\Models\Media::findOrFail($id);

        // 3. Update only the data fields
        $item->update([
            'title'       => $request->title,
            'alt_text'    => $request->alt_text,
            'description' => $request->description,
            'page_id'     => $request->page_id,
        ]);

        return redirect()->route('backend.media.index')
                         ->with('success', 'Media updated successfully!');
    }

    public function edit($id)
    {
        // 1. Get the specific media item
        $media = \App\Models\Media::findOrFail($id);
        
        // 2. Get ALL pages to populate the "Attach to Page" dropdown
        $pages = \App\Models\Page::all();
        
        // 3. Pass BOTH to the view
        return view('backend.media.edit', compact('media', 'pages'));
    }

}