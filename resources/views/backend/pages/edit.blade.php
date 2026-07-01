@extends('backend.layouts.app')

@section('content')
<div class="bg-white p-8 rounded-lg shadow max-w-5xl mx-auto">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">Edit Page: {{ $page->title }}</h2>
        <a href="{{ route('backend.pages.index') }}" class="text-gray-500 hover:underline">&larr; Back to Pages</a>
    </div>

    <!-- Note the PUT method directive -->
    <form action="{{ route('backend.pages.update', $page->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        @method('PUT')

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block font-medium">Page Title</label>
                <input type="text" name="title" value="{{ old('title', $page->title) }}" class="w-full border rounded p-2" required>
            </div>
            <div>
                <label class="block font-medium">Custom URL Slug</label>
                <input type="text" name="slug" value="{{ old('slug', $page->slug) }}" class="w-full border rounded p-2" required>
            </div>
        </div>

       <div class="mb-4">
            <label for="template" class="block text-sm font-medium text-gray-700">Page Template</label>
            <select name="template" id="template" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                <option value="">Default Template</option>
                @foreach($templates as $template)
                    <option value="{{ $template }}" 
                        {{ (isset($page) && $page->template == $template) ? 'selected' : '' }}>
                        {{ ucfirst(str_replace('-', ' ', $template)) }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Category Selection -->
        <div class="form-group mb-4">
            <label for="category" class="font-weight-bold">Page Type / Category</label>
            <select name="category" id="category" class="form-control" required>
                <option value="page" {{ $page->category == 'page' ? 'selected' : '' }}>General Page (About, Contact, etc.)</option>
                <option value="service" {{ $page->category == 'service' ? 'selected' : '' }}>Inner Service Page (/services/...)</option>
            </select>
            <small class="text-muted">This determines the URL structure of the page.</small>
        </div>

        <hr>

        <h3 class="text-xl font-bold text-gray-700">SEO Settings</h3>
        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block font-medium">SEO Meta Title</label>
                <input type="text" name="seo_title" value="{{ old('seo_title', $page->seo_title) }}" class="w-full border rounded p-2">
            </div>
            <div>
                <label class="block font-medium">SEO Primary Keywords</label>
                <input type="text" name="seo_keywords" value="{{ old('seo_keywords', $page->seo_keywords) }}" class="w-full border rounded p-2">
            </div>
        </div>
        <div>
            <label class="block font-medium">SEO Meta Description</label>
            <textarea name="seo_description" rows="2" class="w-full border rounded p-2">{{ old('seo_description', $page->seo_description) }}</textarea>
        </div>
        <div>
            <label class="block font-medium">Schema.org JSON-LD</label>
            <textarea name="schema_json" rows="3" class="w-full border rounded p-2 font-mono text-sm">{{ old('schema_json', $page->schema_json) }}</textarea>
        </div>

        <hr>

        <h3 class="text-xl font-bold text-gray-700">Primary Image & SEO</h3>
        
        @php $image = $page->images->first(); @endphp
        
        @if($image)
            <div class="mb-4 p-4 border rounded bg-gray-50 flex items-center space-x-4">
                <img src="{{ asset('storage/' . $image->image_path) }}" alt="Current Image" class="h-20 w-20 object-cover rounded shadow">
                <span class="text-sm text-gray-500">Current Image. Uploading a new one will replace this.</span>
            </div>
        @endif

        <div>
            <label class="block font-medium">Upload New Image (Optional)</label>
            <input type="file" name="image" class="w-full border rounded p-2">
        </div>
        <div class="grid grid-cols-3 gap-4">
            <div>
                <label class="block font-medium">Image Alt Tag</label>
                <input type="text" name="image_alt" value="{{ old('image_alt', $image->alt_tag ?? '') }}" class="w-full border rounded p-2">
            </div>
            <div>
                <label class="block font-medium">Image Title Attribute</label>
                <input type="text" name="image_title" value="{{ old('image_title', $image->image_title ?? '') }}" class="w-full border rounded p-2">
            </div>
            <div>
                <label class="block font-medium">Image Description</label>
                <input type="text" name="image_description" value="{{ old('image_description', $image->image_description ?? '') }}" class="w-full border rounded p-2">
            </div>
        </div>

        <div class="mt-4">
            <h3 class="text-lg font-semibold text-gray-800 mb-4 border-b pb-2">Color Setting</h3>
            <div class="space-y-4">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label>Primary Color</label>
                        <input type="color" name="primary_color" value="{{ $page->primary_color ?? '#7C3AED' }}" class="w-full h-10 rounded">
                    </div>
                    <div>
                        <label>Secondary Color</label>
                        <input type="color" name="secondary_color" value="{{ $page->secondary_color ?? '#0B1221' }}" class="w-full h-10 rounded">
                    </div>
                </div>
            </div>
         </div>

        <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded hover:bg-blue-700 font-bold">
            Update Page & SEO
        </button>
    </form>
</div>
@endsection