@extends('frontend.layouts.app')

@section('content')
<!-- Inter Font for Professional Look -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<style>
    /* Styling for dynamic HTML content from $page->content */
    .prose-content h2 { @apply text-xl md:text-2xl font-bold text-slate-900 mt-10 mb-4; }
    .prose-content h3 { @apply text-xl font-semibold text-slate-800 mt-8 mb-3; }
    .prose-content p { @apply text-lg text-slate-600 leading-relaxed mb-6; }
    .prose-content ul { @apply list-disc list-inside mb-6 text-slate-600 space-y-2; }
    .prose-content li { @apply text-lg; }
</style>

<article class="bg-white font-['Inter'] antialiased">
    <!-- Main Grid Container -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-20">
        
        <div class="flex flex-col lg:flex-row gap-12 lg:gap-16">
            
            <!-- Left Column: Main Article (2/3 width) -->
            <div class="w-full lg:w-2/3">
                
                <!-- Meta Category & Reading Time -->
                <div class="flex items-center space-x-4 mb-6">
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-indigo-50 text-indigo-600 uppercase tracking-widest">
                        Medical
                    </span>
                    <span class="text-sm text-slate-400 font-medium">
                        5 min read • {{ $page->updated_at->format('M d, Y') }}
                    </span>
                </div>

                <!-- Title -->
                <h1 class="text-3xl md:text-3xl lg:text-4xl font-extrabold text-slate-900 leading-[1.1] tracking-tight mb-8">
                    {{ $page->title }}
                </h1>

                <!-- Excerpt / Lead Paragraph -->
                <div class="border-l-4 border-indigo-500 pl-6 mb-10">
                    <p class="text-sm md:text-xl text-slate-500 leading-relaxed italic">
                        {{ $page->excerpt }}
                    </p>
                </div>

                <!-- Featured Image -->
                @if($page->featured_image)
                <div class="mb-12 rounded-3xl overflow-hidden shadow-2xl shadow-slate-200">
                    <img src="{{ asset('storage/'.$page->featured_image) }}" 
                         alt="{{ $page->title }}" 
                         class="w-full h-auto object-cover max-h-[500px]">
                </div>
                @endif

                <!-- Dynamic Content -->
                <div class="prose-content">
                    {!! $page->content !!}
                </div>

                <!-- Tags / Keywords -->
                @if($page->keywords)
                <div class="mt-12 pt-8 border-t border-slate-100 flex flex-wrap gap-2">
                    @foreach(explode(',', $page->keywords) as $tag)
                        <span class="px-4 py-2 bg-slate-50 text-slate-500 text-sm font-medium rounded-lg border border-slate-200">
                            #{{ trim($tag) }}
                        </span>
                    @endforeach
                </div>
                @endif
            </div>

            <!-- Right Column: Sidebar (1/3 width) -->
            <aside class="w-full lg:w-1/3">
                <div class="lg:sticky lg:top-10 space-y-10">
                    
                    <!-- Sidebar Section: Table of Contents -->
                    <div>
                        <h4 class="text-xs font-bold text-slate-400 uppercase tracking-widest border-b border-slate-100 pb-3 mb-4">
                            On This Page
                        </h4>
                        <nav class="flex flex-col space-y-3">
                            <a href="#" class="text-slate-600 hover:text-indigo-600 transition-colors text-sm font-medium">Administrative Capacity Crisis</a>
                            <a href="#" class="text-slate-600 hover:text-indigo-600 transition-colors text-sm font-medium">Why Care Delivery is Slowing</a>
                            <a href="#" class="text-slate-600 hover:text-indigo-600 transition-colors text-sm font-medium">The Default Response</a>
                            <a href="#" class="text-slate-600 hover:text-indigo-600 transition-colors text-sm font-medium">Future of Capacity Engineering</a>
                        </nav>
                    </div>

                    <!-- Sidebar Section: Call to Action Card -->
                    <div class="bg-slate-50 rounded-2xl p-8 border border-slate-200 shadow-sm">
                        <p class="text-indigo-600 text-xs font-bold uppercase tracking-widest mb-2">Part of our guide</p>
                        <h3 class="text-xl font-bold text-slate-900 mb-4 leading-snug">Remote Healthcare Staffing Mastery</h3>
                        <div class="w-12 h-0.5 bg-slate-200 mb-6"></div>
                        <p class="text-slate-500 text-sm mb-8 leading-relaxed">
                            Talk to our experts about scaling your administrative capacity with remote clinical talent.
                        </p>
                        <a href="#" class="block w-full py-4 bg-indigo-600 text-white text-center font-bold rounded-xl hover:bg-indigo-700 transition-all shadow-lg shadow-indigo-100">
                            Book a Demo
                        </a>
                        <div class="mt-4 text-center">
                            <a href="#" class="text-xs text-slate-400 hover:text-indigo-600 font-medium transition-colors">Pricing & ROI Calculator</a>
                        </div>
                    </div>

                   <!-- Sidebar Section: More from category -->
                    @if($relatedPosts->isNotEmpty())
                    <div>
                        <h4 class="text-xs font-bold text-slate-400 uppercase tracking-widest border-b border-slate-100 pb-3 mb-6">
                            More From {{ $page->category }}
                        </h4>
                        
                        @foreach($relatedPosts as $related)
                            <a href="{{ route('blog.show', $related->slug) }}" class="group flex items-start gap-4 mb-6 cursor-pointer no-underline">
                                <!-- Thumbnail -->
                                <div class="w-16 h-16 bg-slate-100 rounded-lg flex-shrink-0 overflow-hidden border border-slate-100">
                                    @if($related->featured_image)
                                        <img src="{{ asset('storage/'.$related->featured_image) }}" 
                                             alt="{{ $related->title }}" 
                                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                                    @else
                                        <!-- Fallback if no image exists -->
                                        <div class="w-full h-full flex items-center justify-center bg-indigo-50 text-indigo-300">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.587-1.587a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                            </svg>
                                        </div>
                                    @endif
                                </div>

                                <!-- Text -->
                                <div class="flex-1">
                                    <h5 class="text-sm font-bold text-slate-900 leading-snug group-hover:text-indigo-600 transition-colors line-clamp-2">
                                        {{ $related->title }}
                                    </h5>
                                    <p class="text-[10px] uppercase tracking-wider text-slate-400 mt-1 font-semibold">
                                        {{ $related->updated_at->format('M d, Y') }}
                                    </p>
                                </div>
                            </a>
                        @endforeach
                    </div>
                    @endif
                </div>
            </aside>

        </div>
    </div>
</article>
@endsection