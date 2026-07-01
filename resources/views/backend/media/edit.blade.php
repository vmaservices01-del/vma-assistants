@extends('backend.layouts.app')

@section('content')
<div class="container mx-auto px-6 py-8">
    <!-- Back Button -->
    <a href="{{ route('backend.media.index') }}" class="text-sm text-gray-500 hover:text-gray-900 transition mb-6 flex items-center">
        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M15 19l-7-7 7-7"></path></svg>
        Back to Library
    </a>

    <form action="{{ route('backend.media.update', $media->id) }}" method="POST" class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        @csrf @method('PUT')

        <!-- Column 1: Image Preview -->
        <div class="lg:col-span-1">
            <div class="bg-white p-4 rounded-2xl shadow-sm border border-gray-200">
                <img src="{{ asset('storage/'.$media->file_path) }}" class="rounded-lg mb-4 shadow-sm" width="200" height="200">
                <div class="text-xs text-gray-500 break-all bg-gray-50 p-3 rounded border">
                    <span class="block font-bold mb-1 uppercase">File Path:</span>
                    {{ $media->file_path }}
                </div>
            </div>
        </div>

        <!-- Column 2: Metadata Form -->
        <div class="lg:col-span-2 bg-white p-8 rounded-2xl shadow-sm border border-gray-200">
            <h2 class="text-xl font-bold mb-6 text-gray-800">Edit Media Details</h2>
            
            <div class="space-y-6">
                <!-- Title & Alt Text -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Image Title</label>
                        <input type="text" name="title" value="{{ old('title', $media->title) }}" 
                               class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Alt Text (SEO)</label>
                        <input type="text" name="alt_text" value="{{ old('alt_text', $media->alt_text) }}" 
                               class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                    </div>
                </div>

                <!-- Page Attachment -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Attach to Page</label>
                    <select name="page_id" class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                        <option value="">-- No Page Attached --</option>
                        @foreach($pages as $page)
                            <option value="{{ $page->id }}" {{ $media->page_id == $page->id ? 'selected' : '' }}>
                                {{ $page->title }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Description -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Description / Caption</label>
                    <textarea name="description" rows="4" 
                              class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">{{ old('description', $media->description) }}</textarea>
                </div>

                <!-- Actions -->
                <div class="pt-4 flex items-center justify-between">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 px-3 rounded-lg font-bold transition shadow-lg shadow-blue-200">
                        Save Metadata
                    </button>
                    
                    <a href="#" class="text-red-500 hover:text-red-700 font-semibold text-sm">Delete Media</a>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection