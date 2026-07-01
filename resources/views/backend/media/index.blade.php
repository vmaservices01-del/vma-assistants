@extends('backend.layouts.app')

@section('content')
<div class="container mx-auto px-6 py-8">
    <!-- Header -->
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
        <div>
            <h2 class="text-2xl font-bold text-gray-800">Media Library</h2>
            <p class="text-sm text-gray-500">Manage all your assets and their SEO metadata.</p>
        </div>
        <form action="{{ route('backend.media.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label class="cursor-pointer bg-blue-600 hover:bg-blue-700 text-white px-6 py-4 rounded-lg font-bold transition flex items-center shadow-lg shadow-blue-200">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                Upload Image
                <input type="file" name="file" class="hidden" onchange="this.form.submit()">
            </label>
        </form>
    </div>

    <!-- Data Table -->
    <div class="bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead class="bg-gray-50 border-b border-gray-200 text-xs uppercase font-bold text-gray-500">
                    <tr>
                        <th class="px-6 py-4">Image</th>
                        <th class="px-6 py-4">Title</th>
                        <th class="px-6 py-4">Alt Text (SEO)</th>
                        <th class="px-6 py-4">Attached To</th>
                        <th class="px-6 py-4 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @foreach($media as $m)
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-4">
                            <img src="{{ asset('storage/'.$m->file_path) }}" class="w-9 h-9 object-cover rounded-lg border shadow-sm">
                        </td>
                        <td class="px-6 py-4 font-semibold text-gray-900">{{ $m->title ?? 'Untitled' }}</td>
                        <td class="px-6 py-4 text-sm text-gray-600 font-mono">{{ $m->alt_text ?? '—' }}</td>
                        <td class="px-6 py-4">
                            @if($m->page)
                                <span class="bg-blue-50 text-blue-700 text-xs font-bold px-2.5 py-1 rounded-md border border-blue-100">
                                    {{ $m->page->title }}
                                </span>
                            @else
                                <span class="text-gray-400 text-xs italic">Unattached</span>
                            @endif
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="{{ route('backend.media.edit', $m->id) }}" 
                               class="inline-flex items-center justify-center w-8 h-8 rounded-lg bg-gray-100 hover:bg-gray-200 text-gray-700 transition">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- Pagination -->
        <div class="px-6 py-4 border-t border-gray-100">
            {{ $media->links() }}
        </div>
    </div>
</div>
@endsection