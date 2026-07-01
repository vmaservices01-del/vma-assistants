@php
    // If $seo isn't defined (which happens on 404), create a default one
    $seo = $seo ?? [
        'title' => 'Page Not Found | VMA Service Inc',
        'description' => 'The page you are looking for does not exist.',
        'keywords' => '404, not found',
        'schema' => null
    ];
@endphp

@extends('frontend.layouts.app')

@section('content')
<section class="min-h-[70vh] flex items-center justify-center py-20 bg-white font-['Inter',sans-serif] overflow-hidden">
    <!-- Decorative Background Glows -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-[var(--primary)]/5 blur-[120px] rounded-full -z-0"></div>

    <div class="relative z-10 container mx-auto px-6 text-center">
        <!-- 404 Number with Gradient/Glow -->
        <h1 class="text-[120px] md:text-[180px] font-black leading-none tracking-tighter text-transparent bg-clip-text bg-gradient-to-b from-[var(--primary)] to-blue-900 opacity-20 select-none">
            404
        </h1>
        
        <!-- Content Box -->
        <div class="mt-[-60px] md:mt-[-90px]">
            <h2 class="text-3xl md:text-5xl font-extrabold text-[#002d5b] mb-6 tracking-tight">
                Oops! Page not found.
            </h2>
            <p class="max-w-lg mx-auto text-slate-500 text-lg md:text-xl leading-relaxed mb-10">
                The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.
            </p>
            
            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="{{ url('/') }}" 
                   class="w-full sm:w-auto px-8 py-4 bg-[var(--primary)] text-white font-bold rounded-full shadow-lg shadow-[var(--primary)]/20 hover:shadow-xl hover:-translate-y-0.5 transition-all duration-300">
                    Back to Homepage
                </a>
                <a href="{{ url('/contact') }}" 
                   class="w-full sm:w-auto px-8 py-4 bg-white text-slate-600 border border-slate-200 font-bold rounded-full hover:bg-slate-50 transition-all">
                    Contact Support
                </a>
            </div>
        </div>
        
    </div>
</section>

<style>
    /* Ensure the footer is pushed to the bottom if content is short */
    main {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }
    section {
        flex-grow: 1;
    }
</style>
@endsection