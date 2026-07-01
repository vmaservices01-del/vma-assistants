@extends('backend.layouts.app')

@section('content')
<div class="bg-gray-50 min-h-screen pb-12">
    <!-- Header -->
    <div class="sticky top-0 z-10 bg-white border-b border-gray-200 mb-8 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex items-center justify-between">
            <div>
                <h2 class="text-xl font-bold text-gray-900">Create New Article</h2>
            </div>
            <div class="flex items-center gap-4">
                <a href="{{ route('backend.blogs.index') }}" class="text-sm font-medium text-gray-500 hover:text-gray-700">Cancel</a>
                <button type="submit" form="post-form" class="bg-indigo-600 text-white px-6 py-2.5 rounded-xl font-bold shadow-md">
                    Publish Article
                </button>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <form action="{{ route('backend.blogs.store') }}" method="POST" enctype="multipart/form-data" id="post-form" class="flex flex-col lg:flex-row gap-8">
            @csrf

            <!-- LEFT COLUMN -->
            <div class="flex-1 space-y-6">
                <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-6">
                    <div class="space-y-4">
                        <div>
                            <label class="block text-xs font-black text-gray-400 uppercase mb-2">Title</label>
                            <input type="text" name="title" id="title_input" class="w-full border-gray-200 rounded-xl py-3 px-4 bg-gray-50" required>
                        </div>
                        <div>
                            <label class="block text-xs font-black text-gray-400 uppercase mb-2">Slug</label>
                            <input type="text" name="slug" id="slug_input" class="w-full border-gray-200 rounded-xl py-2 px-3 bg-gray-100" readonly>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-6">
                    <label class="block text-xs font-black text-gray-400 uppercase mb-2">Category</label>
                    <select name="category" class="w-full border-gray-200 rounded-xl py-2 px-3 bg-gray-50">
                        <option value="Medical">Medical</option>
                        <option value="Dentistry">Dentistry</option>
                        <option value="Insurance">Insurance</option>
                        <option value="Insights">Insights</option>
                        <option value="Others">Others</option>
                    </select>
                </div>

                <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-6">
                    <label class="block text-xs font-black text-gray-400 uppercase mb-2">Excerpt</label>
                    <textarea name="excerpt" rows="2" class="w-full border-gray-200 rounded-xl bg-gray-50 px-4 py-2" required></textarea>
                </div>

                <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-6">
                    <label class="block text-xs font-black text-gray-400 uppercase mb-2">Content</label>
                    <textarea id="editor" rows="4" class="w-full border-gray-200 rounded-xl bg-gray-50 px-4 py-2" name="content"></textarea>
                </div>

                <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-6 space-y-4">
                    <h3 class="text-xs font-black text-gray-400 uppercase">SEO Settings</h3>
                    <input type="text" name="seo_title" placeholder="SEO Title" class="w-full border-gray-200 rounded-lg p-2 text-sm">
                    <input type="text" name="seo_keywords" placeholder="Keywords" class="w-full border-gray-200 rounded-lg p-2 text-sm">
                    <textarea name="seo_description" placeholder="Meta Description" class="w-full border-gray-200 rounded-lg p-2 text-sm" rows="3"></textarea>
                    <textarea name="schema_json" placeholder="JSON Schema" class="w-full border-gray-200 rounded-xl bg-gray-50 px-4 py-2" rows="4"></textarea>
                </div>
            </div>

            <!-- RIGHT COLUMN -->
            <div class="w-full lg:w-80 space-y-6">
                <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-6 text-center">
                    <h3 class="text-xs font-black text-gray-400 uppercase mb-4 text-left">Featured Image</h3>
                    <input type="file" name="featured_image" class="w-full text-xs">
                </div>

                <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-6">
                    <label class="block text-xs font-black text-gray-400 uppercase mb-2">Status</label>
                    <select name="status" class="w-full border-gray-200 rounded-xl py-2 px-3 bg-gray-50">
                        <option value="draft">Draft</option>
                        <option value="published">Published</option>
                    </select>
                </div>
            </div>
        </form>
    </div>
</div>

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