@extends('backend.layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-sm border border-gray-200 p-8">
        
        <!-- Header -->
        <div class="flex items-center justify-between mb-8">
            <h2 class="text-2xl font-bold text-gray-900">Create New Page</h2>
            <a href="{{ route('backend.pages.index') }}" class="text-sm text-gray-500 hover:text-gray-900 transition">
                &larr; Back to list
            </a>
        </div>

        <form action="{{ route('backend.pages.store') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
            @csrf

            <!-- Section 1: Page Basics -->
            <div>
                <h3 class="text-lg font-semibold text-gray-800 mb-4 border-b pb-2">Basic Information</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Page Title</label>
                        <input type="text" name="title" class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">URL Slug</label>
                        <input type="text" name="slug" class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" placeholder="e.g. about-us" required>
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
                    
                    <div class="mb-4">
                        <label for="category" class="block text-sm font-medium text-gray-700">Page Type / Category</label>
                        <select name="category" id="category" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 @error('category') is-invalid @enderror" required>
                            <option value="page" {{ old('category') == 'page' ? 'selected' : '' }}>General Page (About, Contact, etc.)</option>
                            <option value="service" {{ old('category') == 'service' ? 'selected' : '' }}>Inner Service Page (/services/...)</option>
                        </select>
                        @error('category')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                
               <!--  <div class="mt-4">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Page Content</label>
                    <textarea name="content" rows="8" class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"></textarea>
                </div> -->
            </div>

            <!-- Section 2: SEO Settings -->
            <div class="mt-4">
                <h3 class="text-lg font-semibold text-gray-800 mb-4 border-b pt-7 pb-2">SEO Settings</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">SEO Meta Title</label>
                        <input type="text" name="seo_title" class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">SEO Primary Keywords</label>
                        <input type="text" name="seo_keywords" class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                    </div>
                </div>
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                        <textarea name="seo_description" rows="2" class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"></textarea>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Schema JSON-LD</label>
                        <textarea name="schema_json" rows="3" class="w-full border-gray-300 rounded-lg font-mono text-sm focus:ring-blue-500 focus:border-blue-500"></textarea>
                    </div>
                </div>
            </div>

            <!-- Section 3: Image SEO -->
            <div>
                <h3 class="text-lg font-semibold text-gray-800 mb-4 border-b pb-2">Primary Image SEO</h3>
                <div class="space-y-4">
                    <input type="file" name="image" class="w-full border border-gray-300 p-2 rounded-lg bg-gray-50">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <input type="text" name="image_alt" placeholder="Alt Tag" class="w-full border-gray-300 rounded-lg text-sm">
                        <input type="text" name="image_title" placeholder="Image Title" class="w-full border-gray-300 rounded-lg text-sm">
                        <input type="text" name="image_description" placeholder="Caption/Description" class="w-full border-gray-300 rounded-lg text-sm">
                    </div>
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

            <!-- Submit -->
            <div class="pt-6 border-t flex justify-end">
                <button type="submit" class="bg-blue-600 text-white px-8 py-3 rounded-xl font-bold hover:bg-blue-700 transition shadow-lg shadow-blue-200">
                    Create & Publish Page
                </button>
            </div>
        </form>
    </div>
</div>
@endsection