@extends('frontend.layouts.app')


@section('content')
<section id="hero-section" class="w-full flex items-center min-h-[calc(100vh-100px)] py-12 lg:py-14">
    <div class="max-w-[1200px] mx-auto px-6 grid lg:grid-cols-2 gap-8 lg:gap-16 items-center">
        
        <!-- Left Side -->
        <div class="max-w-xl">
                <div x-data="{
                    messages: [
                        '70 more businesses just hired through Edge',
                        'Certified remote experts for Healthcare teams',
                        'Launch compliant, secure capacity in 7 days'
                    ],
                    currentIndex: 0
                }" 
                x-init="setInterval(() => { currentIndex = (currentIndex + 1) % messages.length }, 10000)"
                class="inline-flex items-center gap-2 px-3 py-1 bg-green-50 text-green-700 rounded-full text-xs font-semibold border border-green-100 mb-4 transition-all duration-500 animate-pulse">
                
                <span class="w-2 h-2 rounded-full bg-green-500"></span>
                
                <!-- Using Alpine text interpolation to switch messages -->
                <span x-text="messages[currentIndex]" 
                      x-transition:enter="transition ease-out duration-500" 
                      x-transition:enter-start="opacity-0 transform translate-y-2" 
                      x-transition:enter-end="opacity-100 transform translate-y-0">
                </span>
            </div>

            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold tracking-tighter text-gray-900 leading-[1] mb-6">
                Stop searching for talent.<br>
                <span class="text-primary">Start building your team.</span>
            </h1>

            <p class="text-gray-500 text-[16px] leading-relaxed mb-8 max-w-lg">
                Edge builds, certifies, and supports secure remote professionals for healthcare, dental, and insurance. Launch compliant, industry-aligned capacity in as little as 7 days.
            </p>

            <div class="flex flex-col sm:flex-row gap-3">
                <button class="bg-primary transition-all duration-300 hover:opacity-80 text-white font-bold py-3.5 px-6 rounded-lg shadow-md">Book a Demo →</button>
                <button class="bg-white border border-gray-200 hover:bg-gray-50 text-gray-900 font-bold py-3.5 px-6 rounded-lg transition-all">See How It Works</button>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-y-3 gap-x-6 text-sm mt-5 text-gray-600">
                <div class="flex items-center gap-2"><span class="text-green-500">✔</span> No payment until you hire</div>
                <div class="flex items-center gap-2"><span class="text-green-500">✔</span> No contract lock-in</div>
                <div class="flex items-center gap-2"><span class="text-green-500">✔</span> HIPAA compliant</div>
                <div class="flex items-center gap-2"><span class="text-green-500">✔</span> $0 replacement guarantee</div>
                <div class="flex items-center gap-2"><span class="text-green-500">✔</span> 4.5★ Trustpilot reviews</div>
            </div>
        </div>

        <!-- Right Side -->
        <div class="relative w-full max-w-[450px] mx-auto h-[450px] hidden lg:block">
            
            <!-- Box 1: Top Right (Main Focus) -->
            <div class="absolute right-0 top-0 w-64 bg-white rounded-3xl p-4 shadow-2xl border border-gray-100 z-30 animate-float">
                <img src="/fatima.jpg" class="w-full h-40 object-cover rounded-2xl mb-3" alt="Person">
                <h3 class="font-bold text-sm">Fatima A.</h3>
                <p class="text-xs text-gray-400">Patient Care Assistant</p>
            </div>

            <!-- Box 2: Middle (Offset) -->
            <div class="absolute right-12 top-20 w-64 bg-white rounded-3xl p-4 shadow-xl border border-gray-100 z-20 animate-float" style="animation-delay: 1s;">
                <img src="/shezil.jpg" class="w-full h-40 object-cover rounded-2xl mb-3" alt="Person">
                <h3 class="font-bold text-sm">Shezil R.</h3>
                <p class="text-xs text-gray-400">Treatment Coordinator</p>
            </div>

            <!-- Box 3: Bottom (Deep offset) -->
            <div class="absolute right-24 top-40 w-64 bg-white rounded-3xl p-4 shadow-lg border border-gray-100 z-10 animate-float" style="animation-delay: 2s;">
                <img src="/arsalan.jpg" class="w-full h-40 object-cover rounded-2xl mb-3" alt="Person">
                <h3 class="font-bold text-sm">Arsalan K.</h3>
                <p class="text-xs text-gray-400">Insurance Auditor</p>
            </div>
            
            <!-- Animated Badge -->
            <div class="absolute right-0 bottom-20 bg-white border border-gray-100 px-5 py-3 rounded-full font-bold shadow-lg z-40 text-xs animate-pulse">
                Matched in 7 days ⚡
            </div>
        </div>
    </div>

    <!-- Arrow Button - Fixed Position at bottom center -->
    <div class="absolute bottom-0 left-1/2 -translate-x-1/2" id="next-section" >
        <a href="#next-section" class="text-gray-400 hover:text-indigo-600 transition-colors animate-bounce">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
        </a>
    </div>
</section>

    

<div class="w-full flex items-center min-h-[calc(100vh-100px)] py-12 lg:py-14">
    <div class="container mx-auto px-4 max-w-7xl">

        <div class="text-center mb-10">
            <h1 class="text-4xl md:text-5xl font-black text-gray-900 mb-6">
                Latest from the <span class="text-indigo-600">blog</span>
            </h1>

            <!-- 1. Dynamic Pill Filters -->
            <div class="flex flex-wrap justify-center gap-3 mb-8">
                @php $currentCat = request('category'); @endphp
                
                <a href="{{ route('blog.index') }}" 
                   class="px-6 py-2 rounded-full text-sm font-bold shadow-sm transition {{ !$currentCat ? 'bg-indigo-600 text-white' : 'bg-white text-gray-600 border border-gray-200' }}">
                    All
                </a>

                @foreach(['Dentistry', 'Medical', 'Insurance', 'Insights', 'Others'] as $cat)
                <a href="{{ route('blog.index', ['category' => $cat]) }}" 
                   class="px-6 py-2 rounded-full text-sm font-bold transition {{ $currentCat == $cat ? 'bg-indigo-600 text-white' : 'bg-white text-gray-600 border border-gray-200 hover:bg-gray-50' }}">
                    {{ $cat }}
                </a>
                @endforeach
            </div>

            <div class="text-left">
                <p class="text-xs font-bold text-gray-400 uppercase tracking-widest">
                    Showing <span id="post-count">{{ $pages->count() }}</span> of {{ $pages->total() }} posts
                </p>
            </div>
        </div>

        <!-- 2. The Grid Container -->
        <div id="blog-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @include('frontend.blog.partials.list')
        </div>

        <!-- 3. Load More Button -->
        @if($pages->hasMorePages())
        <div class="mt-16 flex justify-center" id="load-more-section">
            <button id="load-more-btn" 
                    data-url="{{ $pages->nextPageUrl() }}" 
                    class="px-10 py-4 bg-white border-2 border-indigo-600 text-indigo-600 rounded-full font-black text-sm uppercase tracking-widest hover:bg-indigo-600 hover:text-white transition-all duration-300 shadow-lg">
                Load More Articles
            </button>
        </div>
        @endif
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).on('click', '#load-more-btn', function() {
        let btn = $(this);
        let url = btn.data('url');
        
        btn.html('Loading...');

        $.ajax({
            url: url,
            type: 'GET',
            success: function(data) {
                if (data.trim().length == 0) {
                    $('#load-more-section').fadeOut();
                    return;
                }
                
                // Append the new posts
                $('#blog-container').append(data);
                
                // Update post counter
                let currentCount = $('.post-item').length;
                $('#post-count').text(currentCount);

                // Update the URL for the next page
                let nextPage = url.split('page=')[0] + 'page=' + (parseInt(url.split('page=')[1]) + 1);
                btn.data('url', nextPage);
                btn.html('Load More Articles');

                // Hide button if no more pages (Simple check)
                if(currentCount >= {{ $pages->total() }}) {
                    $('#load-more-section').fadeOut();
                }
            }
        });
    });
</script>

<style>
    /* Professional Layout Adjustments */
    @media (min-width: 1024px) {
        #blog-container > div:nth-child(3n-1) { margin-top: 2.5rem; }
        #blog-container > div:nth-child(3n) { margin-top: 0rem; }
    }
</style>
@endsection