@foreach($pages as $page)
<div class="bg-white rounded-[2.5rem] shadow-sm border border-gray-100 overflow-hidden flex flex-col hover:shadow-xl transition-shadow duration-300 post-item">
    <!-- Image -->
    <div class="relative h-64 overflow-hidden">
        @if($page->featured_image)
            <img src="{{ asset('storage/'.$page->featured_image) }}" class="w-full h-full object-cover">
        @else
            <div class="w-full h-full bg-indigo-50 flex items-center justify-center font-bold text-indigo-200">VMA</div>
        @endif
    </div>

    <!-- Content -->
    <div class="p-8 flex flex-col flex-1">
        <div class="flex items-center gap-3 mb-4">
            <span class="text-[10px] font-black text-indigo-600 uppercase tracking-widest bg-indigo-50 px-3 py-1 rounded-md">
                {{ $page->category ?? 'General' }}
            </span>
            <span class="text-[11px] font-bold text-gray-400">3 minutes</span>
        </div>
        <h2 class="text-xl font-extrabold text-gray-900 mb-3 leading-tight">{{ $page->title }}</h2>
        <p class="text-gray-500 text-sm leading-relaxed mb-6 flex-1">{{ Str::limit($page->excerpt, 120) }}</p>
        <div class="mt-auto">
            <a href="{{ route('blog.show', $page->slug) }}" class="inline-flex items-center text-sm font-black text-gray-900 hover:text-indigo-600 transition-colors group">
                Read More 
                <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
        </div>
    </div>
</div>
@endforeach