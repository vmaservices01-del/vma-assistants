@extends('backend.layouts.app')

@section('content')
<div class="bg-gray-50 min-h-screen pb-12">
    <!-- Top Sticky Header -->
    <div class="sticky top-0 z-10 bg-white border-b border-gray-200 mb-8 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex items-center justify-between">
            <div>
                <h2 class="text-xl font-bold text-gray-900">Edit Blog Post</h2>
                <p class="text-xs text-gray-500">Currently editing: <span class="text-indigo-600 font-bold">{{ $page->title }}</span></p>
            </div>
            <div class="flex items-center gap-4">
                <a href="{{ route('backend.blogs.index') }}" class="text-sm font-medium text-gray-500 hover:text-gray-700 transition">Cancel</a>
                <button type="submit" form="edit-post-form" class="bg-indigo-600 text-white px-6 py-2.5 rounded-xl font-bold hover:bg-indigo-700 transition shadow-md shadow-indigo-100">
                    Update Article
                </button>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <form action="{{ route('backend.blogs.update', $page->id) }}" method="POST" enctype="multipart/form-data" id="edit-post-form" class="flex flex-col lg:flex-row gap-8">
            @csrf
            @method('PUT')

            <!-- LEFT COLUMN: Content & SEO -->
            <div class="flex-1 space-y-6">
                
                <!-- Card 1: General Information -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-6">
                    <h3 class="text-xs font-black text-gray-400 uppercase tracking-widest mb-4">General Information</h3>
                    <div class="space-y-6">
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-1">Blog Title</label>
                            <input type="text" name="title" value="{{ $page->title }}" class="w-full border-gray-200 rounded-xl focus:ring-indigo-500 text-lg font-bold py-3 bg-gray-50 px-4" required>
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-1">Short Excerpt</label>
                            <textarea name="excerpt" rows="2" class="w-full border-gray-200 rounded-xl focus:ring-indigo-500 text-sm bg-gray-50 px-4 py-2">{{ $page->excerpt }}</textarea>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Main Editor -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-6">
                    <h3 class="text-xs font-black text-gray-400 uppercase tracking-widest mb-4">Article Content</h3>
                    <div class="prose max-w-none">
                        <textarea id="editor" name="content" class="w-full">{{ $page->content }}</textarea>
                    </div>
                </div>

                <!-- Card 3: SEO Settings -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden">
                    <div class="p-4 border-b border-gray-100 bg-gray-50 flex items-center justify-between">
                        <h3 class="text-xs font-black text-gray-500 uppercase tracking-widest">Search Engine Optimization</h3>
                        <span class="text-[10px] bg-green-100 text-green-700 px-2 py-0.5 rounded-full font-bold">SEO Active</span>
                    </div>
                    <div class="p-6 space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-1">SEO Meta Title</label>
                                <input type="text" name="seo_title" value="{{ $page->seo_title }}" class="w-full border-gray-200 rounded-lg focus:ring-indigo-500 px-3 py-2 text-sm">
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-1">Keywords</label>
                                <input type="text" name="keywords" value="{{ $page->keywords }}" class="w-full border-gray-200 rounded-lg focus:ring-indigo-500 px-3 py-2 text-sm">
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-1">Meta Description</label>
                            <textarea name="seo_description" rows="3" class="w-full border-gray-200 rounded-lg focus:ring-indigo-500 px-3 py-2 text-sm">{{ $page->seo_description }}</textarea>
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-1">JSON Schema (Advanced)</label>
                            <textarea name="schema" rows="4" class="w-full border-gray-200 rounded-lg font-mono text-xs bg-gray-900 text-gray-300 p-4">{{ $page->schema }}</textarea>
                        </div>
                    </div>
                </div>
            </div>

            <!-- RIGHT COLUMN: Sidebar -->
            <div class="w-full lg:w-80 space-y-6">
                
                <!-- Category Sidebar Card -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-6 text-center">
                    <h3 class="text-xs font-black text-gray-400 uppercase tracking-widest mb-4 text-left">Post Category</h3>
                    <select name="category" class="w-full border-gray-200 rounded-xl text-sm px-3 py-2.5 bg-gray-50 focus:ring-indigo-500">
                        @foreach(['Medical', 'Dentistry', 'Insurance', 'Insights','Others'] as $cat)
                            <option value="{{ $cat }}" {{ $page->category == $cat ? 'selected' : '' }}>{{ $cat }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Featured Image Sidebar Card -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-6 text-center">
                    <h3 class="text-xs font-black text-gray-400 uppercase tracking-widest mb-4 text-left">Featured Image</h3>
                    <div class="space-y-4">
                        @if($page->featured_image)
                            <div class="relative group">
                                <img src="{{ asset('storage/'.$page->featured_image) }}" class="w-full h-40 object-cover rounded-xl shadow-sm border border-gray-100">
                                <div class="absolute inset-0 bg-black/40 rounded-xl opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                                    <span class="text-white text-[10px] font-bold uppercase tracking-widest">Current Image</span>
                                </div>
                            </div>
                        @endif
                        <div class="border-2 border-dashed border-gray-200 rounded-xl p-4 bg-gray-50 hover:bg-gray-100 transition cursor-pointer">
                            <input type="file" name="featured_image" class="w-full text-[10px] file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-[10px] file:font-bold file:bg-indigo-50 file:text-indigo-700">
                        </div>
                    </div>
                </div>

                <!-- Meta Info Sidebar Card -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-6">
                    <div class="space-y-3">
                        <div class="flex justify-between text-[10px] font-bold uppercase tracking-tighter">
                            <span class="text-gray-400">Published:</span>
                            <span class="text-gray-900">{{ $page->created_at->format('M d, Y') }}</span>
                        </div>
                        <div class="flex justify-between text-[10px] font-bold uppercase tracking-tighter">
                            <span class="text-gray-400">Last Edited:</span>
                            <span class="text-indigo-600">{{ $page->updated_at->diffForHumans() }}</span>
                        </div>
                    </div>
                </div>

            </div>
        </form>
    </div>
</div>

<!-- Scripts -->
<script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
<script>
ClassicEditor
    .create(document.querySelector('#editor'), {
        toolbar: {
            items: [
                'heading',
                'fontFamily',
                'fontSize',
                'bold',
                'italic',
                'link',
                'bulletedList',
                'numberedList',
                'blockQuote',
                'undo',
                'redo'
            ]
        },

        fontFamily: {
            options: [
                'default',
                'Arial, Helvetica, sans-serif',
                'Georgia, serif',
                'Courier New, Courier, monospace',
                'Poppins, sans-serif'
            ]
        },

        fontSize: {
            options: [
                10,
                12,
                14,
                'default',
                18,
                20,
                24,
                32
            ]
        },

        heading: {
            options: [
                { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' }
            ]
        }
    })
    .catch(error => {
        console.error(error);
    });
</script>
@endsection