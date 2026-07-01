@extends('backend.layouts.app')

@section('content')
<div class="container mx-auto px-4 py-6">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Manage Pages & SEO</h2>
        <a href="{{ route('backend.pages.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
            + Create New Page
        </a>
    </div>

    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left">
                <thead class="bg-gray-800 text-white uppercase text-xs">
                    <tr>
                        <th class="p-4">ID</th>
                        <th class="p-4">Title</th>
                        <th class="p-4">URL Slug</th>
                        <th class="p-4">SEO Title</th>
                        <th class="p-4">Created At</th>
                        <th class="p-4 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach($pages as $page)
                    <tr class="hover:bg-gray-50 transition">
                        <td class="p-4">{{ $page->id }}</td>
                        <td class="p-4 font-bold">{{ $page->title }}</td>
                        <td class="p-4 text-blue-600">/{{ $page->slug }}</td>
                        <td class="p-4 text-gray-600">{{ $page->seo_title ?? 'N/A' }}</td>
                        <td class="p-4">{{ $page->created_at->format('M d, Y') }}</td>
                        <td class="p-4 text-right">
                            <div class="flex items-center justify-end gap-3">
                                 <!-- 1. Dynamic View Link -->
                                @php
                                    // Determine the correct route based on category
                                    $viewUrl = route('page.show', $page->slug); // Default
                                    
                                    if ($page->category === 'service') {
                                        $viewUrl = route('services.show', $page->slug);
                                    } 
                                @endphp
                                <!-- View -->
                                <a href="{{ $viewUrl }}" target="_blank" class="text-green-600 hover:text-green-800">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                </a>
                                <!-- Edit -->
                                <a href="{{ route('backend.pages.edit', $page->id) }}" class="text-blue-600 hover:text-blue-800">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                                </a>
                                <!-- Delete -->
                                <form action="{{ route('backend.pages.destroy', $page->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-800">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>   
        <div class="p-4 border-t">
            {{ $pages->links() }}
        </div>
    </div>
</div>
@endsection