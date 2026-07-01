@extends('frontend.layouts.app')

@section('content')   

    <!-- Content -->

<style>
    @keyframes infinite-scroll {
        from { transform: translateX(0); }
        to { transform: translateX(-50%); }
    }
    .animate-infinite-scroll {
        animation: infinite-scroll 25s linear infinite;
    }
    .animate-infinite-scroll:hover {
        animation-play-state: paused;
    }
</style>

<!-- SECTION 1: HERO SECTION -->
<section id="hero-section" class="relative w-full min-h-[70vh] flex items-center justify-center bg-[var(--primary)] py-24 px-6 overflow-hidden">
    
    <!-- Sophisticated Background Glows -->
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[80%] h-[500px] bg-[var(--primary)]/10 blur-[120px] rounded-full -z-0 pointer-events-none"></div>
    <div class="absolute -bottom-24 -right-24 w-96 h-96 bg-blue-600/10 blur-[100px] rounded-full pointer-events-none"></div>

    <div class="relative z-10 max-w-5xl mx-auto flex flex-col items-center text-center">
        
        <!-- Refined Glassmorphism Badge -->
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/[0.03] border border-white/10 backdrop-blur-md mb-10 transition-all hover:bg-white/[0.08] cursor-default group">
            <span class="text-amber-400">✦</span>
            <span class="text-white/80 text-[11px] font-bold uppercase tracking-[0.2em]">Well- Reviewed on Trust Pilot</span>
            <div class="flex gap-0.5 ml-1">
                @for ($i = 0; $i < 5; $i++)
                    <svg class="w-2.5 h-2.5 text-emerald-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                @endfor
            </div>
        </div>

        <!-- Heading with Premium Spacing -->
        <h1 class="text-2xl md:text-3xl lg:text-5xl font-bold text-white leading-[1] tracking-tighter mb-8 font-gnarly text-balance capitalize">
            Our Healthcare Specialties
        </h1>

        <!-- Description with Better Readability -->
        <p class="max-w-2xl mx-auto text-white text-lg md:text-xl leading-relaxed mb-12 font-sans font-normal ">
           Choose from our expert team of healthcare support professionals – <span class="text-white">Virtual Clinics</span>, <span class="text-white">Receptionists</span>, and <span class="text-white">Care Coordinators</span>.
        </p>

        <!-- Centered Interactive Button -->
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <button class="relative group overflow-hidden px-10 py-4 bg-[var(--primary)] text-white font-bold rounded-2xl transition-all shadow-2xl shadow-[var(--primary)]/40 flex items-center justify-center gap-3 active:scale-95 border border-[var(--primary)]/20">
                <!-- Hover Glow -->
                <div class="absolute inset-0 bg-white/20 translate-y-full group-hover:translate-y-0 transition-transform duration-300"></div>
                
                <span class="relative">Book A Free Consultation</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 relative group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                </svg>
            </button>
        </div>

    </div>
</section>

@php
    $specialties = [
        [
            'title' => 'Internal Medicine',
            'desc' => 'Comprehensive acute and chronic disease management for complex adult patient care.',
            'icon' => 'M4.8 2.3A.3.3 0 1 0 5 2H4a2 2 0 0 0-2 2v5a6 6 0 0 0 6 6v0a6 6 0 0 0 6-6V4a2 2 0 0 0-2-2h-1a.3.3 0 1 0 .2.3 M8 15v1a6 6 0 0 0 6 6v0a6 6 0 0 0 6-6v-4 M20 12a2 2 0 1 0 0-4 2 2 0 0 0 0 4 M14 12h-4' // Stethoscope
        ],
        [
            'title' => 'Cardiology',
            'desc' => 'Expert cardiovascular care with patient management, procedure scheduling, and specialist follow-up.',
            'icon' => 'M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z' // Heart
        ],
        [
            'title' => 'Oncology',
            'desc' => 'Specialized cancer care coordination with chemotherapy scheduling and comprehensive patient education.',
            'icon' => 'M12 12c-2.333-3.667-4-5-4-7a4 4 0 1 1 8 0c0 2-1.667 3.333-4 7z M12 12l-5 8 M12 12l5 8' // Cancer Ribbon
        ],
        [
            'title' => 'Orthopedic Surgery',
            'desc' => 'Expert musculoskeletal care with surgical scheduling, post-operative management, and rehabilitation guidance.',
            'icon' => 'M17 10c.7-.7 1.69 0 2.5 0a2.5 2.5 0 1 0 0-5 .5.5 0 0 1-.5-.5 2.5 2.5 0 1 0-5 0c0 .81.7 1.8 0 2.5l-7 7c-.7.7-1.69 0-2.5 0a2.5 2.5 0 0 0 0 5c.28 0 .5.22.5.5a2.5 2.5 0 1 0 5 0c0-.81-.7-1.8 0-2.5l7-7Z' // Bone
        ],
        [
            'title' => 'Physical Medicine & Rehabilitation',
            'desc' => 'Comprehensive physical therapy coordination and rehabilitation planning for optimal functional recovery.',
            'icon' => 'M17.596 12.768a2 2 0 1 0 2.829-2.829l-3.535-3.536a2 2 0 1 0-2.829 2.829 M6.404 11.232a2 2 0 1 0-2.829 2.829l3.535 3.536a2 2 0 1 0 2.829-2.829 M8.525 15.475l6.95-6.95' // Dumbbell
        ],
        [
            'title' => 'Pediatrics',
            'desc' => 'Specialized pediatric care including vaccination schedules, development tracking, and family coordination.',
            'icon' => 'M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z' // Smiley Face
        ],
        [
            'title' => 'Physical Therapy',
            'desc' => 'Dedicated therapy scheduling, patient progress tracking, and customized treatment plan implementation.',
            'icon' => 'M13.5 3a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 11l-3-2-2 2-2-1.5V11L11 9l2 2v6h2v-6z' // Active/Exercise figure
        ],
        [
            'title' => 'Primary Care',
            'desc' => 'Full-service family medicine support including preventive care, chronic disease, and wellness.',
            'icon' => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2' // Medical Clipboard
        ],
        [
            'title' => 'Cardiology',
            'desc' => 'Advanced cardiovascular support with diagnostic testing, medication management, and patient education.',
            'icon' => 'M22 12h-4l-3 9L9 3l-3 9H2' // EKG Pulse/Activity
        ],
        [
            'title' => 'Pain Management',
            'desc' => 'Specialized acute and chronic pain management with coordinated multi-modal treatment approaches.',
            'icon' => 'M8.5 14.5A2.5 2.5 0 0 0 11 12c0-1.38-.5-2-1-3-1.072-2.143-.224-4.054 2-6 .5 2.5 2 4.9 4 6.5 2 1.6 3 3.5 3 5.5a7 7 0 1 1-14 0c0-1.153.433-2.294 1-3a2.5 2.5 0 0 0 2.5 2.5z' // Flame (representing pain/warmth therapy)
        ],
        [
            'title' => 'Urology',
            'desc' => 'Specialized urological care including condition management, procedure scheduling, and patient follow-up.',
            'icon' => 'M12 22a7 7 0 0 0 7-7c0-4.3-7-13-7-13S5 10.7 5 15a7 7 0 0 0 7 7z' // Droplet (urinary/hydration tracking)
        ],
        [
            'title' => 'Dermatology',
            'desc' => 'Expert skin condition support with procedure coordination and dermatological treatment planning.',
            'icon' => 'M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.937A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .962 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.582a.5.5 0 0 1 0 .962L15.5 14.063A2 2 0 0 0 14.063 15.5L12.481 21.635a.5.5 0 0 1-.962 0L9.937 15.5z M20 3v4 M18 5h4 M5 17v4 M3 19h4' // Sparkles (for clear, healthy skin)
        ],
        [
            'title' => 'Behavioral Health',
            'desc' => 'Compassionate mental health support with psychiatric coordination, therapy scheduling, and wellness programs.',
            'icon' => 'M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z' // Chat bubble with conversation dots
        ],
        [
            'title' => 'Gastroenterology',
            'desc' => 'Specialized GI care including endoscopy scheduling, digestive health management, and coordination.',
            'icon' => 'M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 3.5 1 8a7 7 0 0 1-7.17 9.9M19 2c-2.26 4.33-5.27 7.14-8 10' // Organic Leaf (Digestion & Metabolic health)
        ],
        [
            'title' => 'Urgent Care',
            'desc' => 'Rapid-response support for urgent situations, emergency coordination, and acute care management.',
            'icon' => 'M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z M12 7v10 M7 12h10' // Medical Shield with Cross
        ],
        [
            'title' => 'Wound Care',
            'desc' => 'Specialized wound management including treatment planning, dressing coordination, and progress monitoring.',
            'icon' => 'M18 6a3 3 0 0 0-4.24 0l-7.78 7.78a3 3 0 0 0 0 4.24l2 2a3 3 0 0 0 4.24 0l7.78-7.78a3 3 0 0 0 0-4.24l-2-2z M9.5 14.5l5-5' // Band-aid/Plaster
        ],
        [
            'title' => 'Psychiatry',
            'desc' => 'Expert psychiatric care with medication coordination, mental health assessments, and wellness monitoring.',
            'icon' => 'M12 18V5 M15 13a4.17 4.17 0 0 1-3-4 4.17 4.17 0 0 1-3 4 M17.598 6.5A3 3 0 1 0 12 5a3 3 0 1 0-5.598 1.5 M17.997 5.125a4 4 0 0 1 2.526 5.77 M18 18a4 4 0 0 0 2-7.464 M19.967 17.483A4 4 0 1 1 12 18a4 4 0 1 1-7.967-.517 M6 18a4 4 0 0 1-2-7.464 M6.003 5.125a4 4 0 0 0-2.526 5.77' // Brain hemispheres
        ],
        [
            'title' => 'Dentistry',
            'desc' => 'Comprehensive dental support with appointment scheduling, treatment planning, and patient education.',
            'icon' => 'M12 6c-1-1.5-3-2-5-2-2 0-3.5 1.5-3.5 3.5 0 2 1 4.5 2.5 6.5L7 19c-.5 1-.5 2 0 2.5s1 .5 1.5-.5L11 16l1-1.5 1 1.5 2.5 5c.5 1 1 1 1.5.5s.5-1.5 0-2.5l-1-5c1.5-2 2.5-4.5 2.5-6.5 0-2-1.5-3-3.5-3-2 0-4 .5-5 2z' // Anatomical Tooth molar
        ],
        [
            'title' => 'Radiology',
            'desc' => 'Diagnostic imaging support including test scheduling, result coordination, and interpretation assistance.',
            'icon' => 'M3 7V5a2 2 0 0 1 2-2h2 M17 3h2a2 2 0 0 1 2 2v2 M21 17v2a2 2 0 0 1-2 2h-2 M7 21H5a2 2 0 0 1-2-2v-2 M8 12h8 M12 8v8' // Scan Frame with medical cross target
        ],
        [
            'title' => 'General Surgery',
            'desc' => 'Comprehensive surgical support with pre-operative preparation, procedure scheduling, and post-operative care.',
            'icon' => 'M6 20a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z M18 20a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z M8.2 16.2L15 4 M15.8 16.2L9 4 M12 11a1 1 0 1 0 0-2 1 1 0 0 0 0 2z' // Surgical Scissors
        ],
    ];
@endphp

<section class="max-w-7xl mx-auto px-6 py-20">
    
    <!-- Header Section -->
    <div class="text-center mb-16">
        <span class="text-[11px] font-bold uppercase tracking-[0.2em] text-[var(--primary)] bg-[var(--primary)]/5 px-4 py-1.5 rounded-full border border-[var(--primary)]/10 mb-6 inline-block">
            Healthcare Specialties
        </span>

        <h2 class="text-[26px] md:text-[36px] font-bold font-gnarly text-slate-900 leading-[1.1] mb-8 text-balance capitalize">
            Virtual Medical Assistant for <br class="hidden md:block"> All Healthcare Specialties
        </h2>

        <p class="text-slate-500 text-[15px] max-w-3xl mx-auto leading-relaxed font-sans">
            Whether you practice family medicine, cardiology, dermatology, orthopedics, or any other specialty, our virtual scribes handle documentation with precision. Enjoy streamlined records completed on schedule, freeing you to concentrate entirely on patient care instead of paperwork.
        </p>
    </div>

    <!-- Specialties Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-5">
        @foreach($specialties as $item)
            <div class="group relative bg-[#f9fbf9] border border-slate-100 p-8 rounded-[32px] text-center transition-all duration-500 hover:bg-white hover:shadow-2xl hover:shadow-[var(--primary)]/10 hover:-translate-y-2 h-full flex flex-col">

                <!-- Icon -->
                <div class="mx-auto w-14 h-14 bg-[var(--primary)] text-white rounded-full flex items-center justify-center mb-6 shadow-lg shadow-[var(--primary)] transition-transform duration-500 group-hover:rotate-[360deg]">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $item['icon'] }}"></path>
                    </svg>
                </div>

                <!-- Title -->
                <h3 class="text-[17px] font-bold text-slate-900 mb-3 group-hover:text-[var(--primary)] transition-colors min-h-[56px] flex items-center justify-center">
                    {{ $item['title'] }}
                </h3>

                <!-- Description -->
                <p class="text-[13px] text-slate-500 leading-relaxed font-sans min-h-[120px] flex items-start justify-center">
                    {{ $item['desc'] }}
                </p>

                <!-- Bottom Indicator -->
                <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-1 bg-[var(--primary)] rounded-full transition-all duration-500 group-hover:w-12"></div>
            </div>
        @endforeach
    </div>
</section>

<section class="max-w-7xl mx-auto px-6 py-20">
    
    <!-- Banner Container -->
    <div class="relative w-full min-h-[340px] rounded-[40px] overflow-hidden bg-[var(--primary)] flex flex-col lg:flex-row items-center">
        
        <!-- Professional Background Glow -->
        <div class="absolute inset-0 pointer-events-none overflow-hidden">
            <div class="absolute -right-20 top-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-white/10 blur-[100px] rounded-full"></div>
            <div class="absolute right-[10%] top-1/2 -translate-y-1/2 w-[300px] h-[300px] bg-white/5 blur-[60px] rounded-full"></div>
        </div>

        <!-- Left Side: Content -->
        <div class="relative z-10 w-full lg:w-3/5 p-10 md:p-16 lg:pl-20 text-center lg:text-left">
            <h2 class="text-[26px] md:text-[36px] font-medium text-white leading-[1.2] mb-10 font-sans capitalize">
                Discover what our <br class="hidden sm:block"> 
                <span class="font-gnarly font-bold">See How Our Healthcare Virtual Assistant </span> <br class="hidden sm:block"> 
                Transforms <span class="italic font-light"> Your Practice</span>
            </h2>

            <a href="#" class="inline-flex items-center gap-2 px-10 py-4 bg-white text-[var(--primary)] font-bold rounded-full shadow-xl shadow-black/10 hover:bg-slate-50 transition-all hover:scale-105 active:scale-95 group">
                Get Started Today
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
            </a>
        </div>

        <!-- Right Side: Image -->
        <!-- Note: Replace '/nurse.png' with your actual image path -->
        <div class="relative lg:absolute bottom-0 right-0 lg:right-10 w-full lg:w-2/5 flex justify-center lg:justify-end items-end h-full pointer-events-none">
            <img src="{{ asset('storage/media/promo.webp') }}" 
                 alt="Healthcare Professional" 
                 class="w-auto h-[380px] lg:h-[420px] object-contain object-bottom drop-shadow-[0_20px_50px_rgba(0,0,0,0.3)]">
        </div>

    </div>
</section>

@php
    $testimonials = [
        [
            'quote' => 'VMA Services was the best choice I made. They have been Very Responsive and our after-hours telephone service for over two years. They provide service to three offices in Montana.',
            'author' => 'Monty Moni',
            'role' => 'CEO, Keen IT Solution',
            'image' => asset('storage/media/promo.webp'), // Change to your paths
            'avatar' => asset('storage/media/avatar1.webp')
        ],
        [
            'quote' => 'The virtual assistants provided by Edge are top-tier. They integrated seamlessly into our workflow and the cost-to-value ratio is unbeatable for our growing clinic.',
            'author' => 'Dr. Jenny Fen',
            'role' => 'Medical Director, Healthcare Solutions',
            'image' => asset('storage/media/promo.webp'),
            'avatar' => asset('storage/media/avatar2.webp')
        ],
        [
            'quote' => 'Scaling our documentation team used to take months. With their RM support, we were able to add 4 certified scribes in just two weeks. Truly a game changer for us.',
            'author' => 'Dr. Robert Chen',
            'role' => 'Director, City Medical Group',
            'image' => asset('storage/media/promo.webp'),
            'avatar' => asset('storage/media/avatar3.webp')
        ],
    ];
@endphp

<section class="max-w-7xl w-full mx-auto px-6 py-24 bg-[#fcfdfd]">
    
    <!-- Header -->
    <div class="text-center mb-16">
        <span class="text-[11px] font-bold uppercase tracking-[0.25em] text-[var(--primary)] mb-4 inline-block">
            Proven Results
        </span>
        <h2 class="text-[26px] md:text-[36px] font-bold font-gnarly text-slate-900 leading-[1.1] capitalize">
            Customers Reviews
        </h2>
    </div>

    <!-- Testimonial Slider Wrapper -->
    <div x-data="{ 
            active: 0, 
            total: {{ count($testimonials) }},
            next() { this.active = (this.active + 1) % this.total },
            prev() { this.active = (this.active - 1 + this.total) % this.total }
        }" 
        class="relative w-full max-w-6xl mx-auto group">
        
        <!-- Main Card -->
        <div class="relative overflow-hidden rounded-[40px] bg-white border border-slate-100 shadow-2xl shadow-slate-200/40">
            
            @foreach($testimonials as $index => $item)
            <div x-show="active === {{ $index }}" 
                 x-transition:enter="transition ease-out duration-700"
                 x-transition:enter-start="opacity-0 translate-x-8"
                 x-transition:enter-end="opacity-100 translate-x-0"
                 class="flex flex-col lg:flex-row min-h-[550px]">
                
                <!-- Left: Professional Image -->
                <div class="w-full lg:w-1/2 h-72 lg:h-auto overflow-hidden relative">
                    <img src="{{ $item['image'] }}" alt="Client Workspace" class="w-full h-full object-cover">
                    <!-- Subtle Overlay -->
                    <div class="absolute inset-0 bg-slate-900/10"></div>
                </div>

                <!-- Right: Content -->
                <div class="w-full lg:w-1/2 p-10 md:p-16 lg:p-20 flex flex-col justify-center relative bg-white">
                    
                    <!-- Top Info: Counter & Quote -->
                    <div class="flex justify-between items-start mb-12">
                       
                        <svg class="w-12 h-12 text-[var(--primary)]/10 fill-current" viewBox="0 0 24 24">
                            <path d="M14.017 21L14.017 18C14.017 16.8954 14.9124 16 16.017 16H19.017C19.5693 16 20.017 15.5523 20.017 15V9C20.017 8.44772 19.5693 8 19.017 8H15.017C14.4647 8 14.017 8.44772 14.017 9V11M10.017 21L10.017 18C10.017 16.8954 9.12157 16 8.017 16H5.01701C4.46472 16 4.01701 15.5523 4.01701 15V9C4.01701 8.44772 4.46472 8 5.01701 8H9.017C9.56928 8 10.017 8.44772 10.017 9V11" />
                        </svg>
                    </div>

                    <!-- Testimonial Text -->
                    <blockquote class="text-xl md:text-2xl font-medium text-slate-800 leading-[1.6] mb-12 italic">
                        "{{ $item['quote'] }}"
                    </blockquote>

                    <!-- Author Details -->
                    <div class="flex items-center gap-5">
                        <div class="relative">
                            <img src="{{ $item['avatar'] }}" alt="{{ $item['author'] }}" class="w-14 h-14 rounded-full object-cover ring-4 ring-slate-50">
                            <div class="absolute -bottom-1 -right-1 w-5 h-5 bg-[var(--primary)] rounded-full border-2 border-white flex items-center justify-center">
                                <svg class="w-2 h-2 text-white fill-current" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                            </div>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-slate-900 leading-tight">{{ $item['author'] }}</h4>
                            <p class="text-[13px] text-slate-500 font-semibold uppercase tracking-wider">{{ $item['role'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            <!-- ARROW NAVIGATION (Inside Card) -->
            <div class="absolute bottom-10 right-10 lg:bottom-16 lg:right-16 hidden md:flex gap-3 z-30">
                <button @click="prev()" class="w-12 h-12 rounded-full border border-slate-200 flex items-center justify-center text-slate-400 hover:bg-[var(--primary)] hover:text-white hover:border-[var(--primary)] transition-all duration-300">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                </button>
                <button @click="next()" class="w-12 h-12 rounded-full border border-slate-200 flex items-center justify-center text-slate-400 hover:bg-[var(--primary)] hover:text-white hover:border-[var(--primary)] transition-all duration-300">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                </button>
            </div>
        </div>

        <!-- DOT NAVIGATION (Below Card) -->
        <div class="flex justify-center gap-3 mt-12">
            @foreach($testimonials as $idx => $dot)
            <button @click="active = {{ $idx }}" 
                    :class="active === {{ $idx }} ? 'bg-[var(--primary)] w-10' : 'bg-slate-200 w-3'"
                    class="h-2 rounded-full transition-all duration-500 hover:bg-slate-300"></button>
            @endforeach
        </div>

        <!-- Auto-Play Logic -->
        <div x-init="setInterval(() => { active = (active + 1) % total }, 12000)"></div>
    </div>
</section>

<!-- SECTION 4: ONE FLAT FEE -->
<section class="max-w-6xl mx-auto py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-12 animate-fade-in">
            <span class="inline-block px-5 py-2 rounded-full bg-[var(--primary)]/10 text-[var(--primary)] text-[11px] font-bold uppercase tracking-[0.12em] mb-6 border border-[var(--primary)]/20">
                What's Included
            </span>
            <h2 class="text-[26px] md:text-[36px] font-extrabold text-slate-900 mb-2 tracking-tight capitalize">
                One flat fee. <span class="text-[var(--primary)]">Everything below.</span>
            </h2>
            <p class="text-slate-500 text-md max-w-2xl mx-auto leading-relaxed">
               Simple, transparent pricing with no hidden fees. Unlimited support for your growing healthcare practice.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @php 
                $fees = [
                    [
                        'title' => 'Scalability & IT',
                        'desc' => 'Intelligent, scalable solutions that grow with your healthcare practice.',
                        'icon' => 'M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z'
                    ],
                    [
                        'title' => 'Payroll & Benefits',
                        'desc' => 'Comprehensive payroll management integrated into your virtual assistant service.',
                        'icon' => 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z'
                    ],
                    [
                        'title' => 'Privacy & Compliance',
                        'desc' => 'Automated inventory tracking and healthcare compliance management.',
                        'icon' => 'M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z'
                    ],
                    [
                        'title' => 'Legal & Contracts',
                        'desc' => 'Expert contract management and legal support for healthcare operations.',
                        'icon' => 'M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2'
                    ]
                ];
            @endphp

            @foreach($fees as $fee)
            <div class="bg-white border border-slate-100 rounded-[2rem] p-6 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col items-center text-center">
                <div class="mb-6 text-[var(--primary)]">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $fee['icon'] }}"></path></svg>
                </div>
                <h3 class="text-[18px] font-bold text-slate-900 mb-4">{{ $fee['title'] }}</h3>
                <p class="text-sm text-slate-500 leading-relaxed mb-8 italic">Full enterprise-grade infrastructure managed by our team.</p>
                <span class="mt-auto inline-flex items-center gap-1.5 px-4 py-1.5 rounded-full bg-emerald-50 text-emerald-600 text-xs font-bold border border-emerald-100">
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                    Included
                </span>
            </div>
            @endforeach
        </div>
    </div>
</section>

<style>
    .form-input {
        @apply w-full px-5 py-3.5 rounded-2xl border border-slate-200 focus:border-[var(--primary)] focus:ring-2 focus:ring-[var(--primary)]/10 outline-none transition-all text-slate-700 placeholder:text-slate-400;
    }
</style>

<section class="py-24 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">
            
            <!-- Left Side: Form (7 Columns) -->
            <div class="lg:col-span-7">
                <div class="max-w-xl">
                    <h2 class=" text-[26px] md:text-[36px] font-[900] leading-[1.1] tracking-[-0.04em] text-[#002d5b] mb-4 tracking-tight capitalize">
                        Schedule A Discovery Call
                    </h2>
                    <p class="text-slate-500 text-[16px] mb-10">
                        Let’s connect for a quick chat to understand your practice’s needs and see how we can support you. 
                    </p>

                    @if(session('success'))
                        <div class="mb-6 p-4 bg-emerald-50 text-emerald-700 rounded-2xl border border-emerald-100 font-bold">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="mb-6 p-4 bg-red-50 border border-red-200 text-red-700 rounded-2xl">
                            <ul class="list-disc pl-5">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('backend.discovery.submit') }}" method="POST" class="space-y-4">
                        @csrf
                        <!-- Row 1: Names -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <input type="text" name="first_name" placeholder="First name*" 
                                    class="w-full bg-slate-50/50 border border-slate-200 rounded-2xl px-5 py-3.5 text-slate-700 font-medium transition-all form-input-focus" required>
                            </div>
                            <div>
                                <input type="text" name="last_name" placeholder="Last name*" 
                                    class="w-full bg-slate-50/50 border border-slate-200 rounded-2xl px-5 py-3.5 text-slate-700 font-medium transition-all form-input-focus" required>
                            </div>
                        </div>

                        <!-- Row 2: Email -->
                        <input type="email" name="email" placeholder="Email*" 
                            class="w-full bg-slate-50/50 border border-slate-200 rounded-2xl px-5 py-3.5 text-slate-700 font-medium transition-all form-input-focus" required>

                        <!-- Row 3: Country & Dynamic Phone Prefix -->
                        <div class="grid grid-cols-1 sm:grid-cols-12 gap-4" 
                             x-data="{ 
                                dialCode: '+1',
                                countries: [
                                    { name: 'United States', code: '+1' },
                                    { name: 'Canada', code: '+1' },
                                    { name: 'United Kingdom', code: '+44' },
                                    { name: 'Australia', code: '+61' },
                                    { name: 'India', code: '+91' },
                                    { name: 'Germany', code: '+49' },
                                    { name: 'France', code: '+33' },
                                    { name: 'UAE', code: '+971' },
                                    { name: 'Singapore', code: '+65' }
                                ],
                                updateCode(e) {
                                    // Find the selected option and get its data-code
                                    this.dialCode = e.target.selectedOptions[0].getAttribute('data-code');
                                }
                             }">
                            
                            <!-- Country Selector -->
                            <div class="sm:col-span-5 relative">
                                <select name="country" 
                                        @change="updateCode($event)"
                                        class="appearance-none w-full bg-slate-50/50 border border-slate-200 rounded-2xl px-5 py-3.5 text-slate-700 font-medium transition-all form-input-focus">
                                    <template x-for="country in countries" :key="country.name">
                                        <option :value="country.name" :data-code="country.code" x-text="country.name"></option>
                                    </template>
                                </select>                               
                            </div>

                            <!-- Phone Number Input with Dynamic Prefix -->
                            <div class="sm:col-span-7 flex gap-2">
                                <!-- Dynamic Dial Code Box -->
                                <div class="w-full bg-slate-50/50 border border-slate-200 rounded-2xl px-5 py-3.5 text-slate-700 font-medium transition-all form-input-focus" 
                                     x-text="dialCode">
                                </div>
                                
                                <!-- Hidden input to save the dial code to the DB -->
                                <input type="hidden" name="dial_code" :value="dialCode">

                                <input type="tel" name="phone" placeholder="Phone number*" 
                                    class="w-full bg-slate-50/50 border border-slate-200 rounded-2xl px-5 py-3.5 text-slate-700 font-medium transition-all form-input-focus" required>
                            </div>
                        </div>

                        <!-- Row 4: Practice Name -->
                        <input type="text" name="practice_name" placeholder="Practice name*" 
                            class="w-full bg-slate-50/50 border border-slate-200 rounded-2xl px-5 py-3.5 text-slate-700 font-medium transition-all form-input-focus" required>

                        <!-- Row 5: Industry -->
                        <div class="relative">
                            <select name="industry" class="appearance-none w-full bg-slate-50/50 border border-slate-200 rounded-2xl px-5 py-3.5 text-slate-600 font-medium transition-all form-input-focus cursor-pointer" required>
                                <option value="" disabled selected>Services*</option>
                                <option>Front Desk Expert</option>
                                <option>Virtual Medical Scribes</option>
                                <option>Medical Receptionist</option>
                                <option>Remote Patient Monitoring</option>
                                <option>Virtual Chronic Care Management</option>
                                <option>Provider & Payers Credentialing</option>
                                <option>Pre-Authorization Services</option>
                                <option>Eligibility and Benefits Verificatio</option>
                                <option>Account Receivable (AR) Services</option>
                                <option>Virtual Administrative Assistant</option>
                            </select>                            
                        </div>

                        <!-- Row 6: Referral -->
                        <div class="relative">
                            <select name="referral" class="appearance-none w-full bg-slate-50/50 border border-slate-200 rounded-2xl px-5 py-3.5 text-slate-600 font-medium transition-all form-input-focus cursor-pointer" required>
                                <option value="" disabled selected>Where did you hear about us?*</option>
                                <option>Google</option>
                                <option>LinkedIn</option>
                                <option>Referral</option>
                            </select>                           
                        </div>

                        <!-- Disclaimer Text -->
                        <p class="text-[11px] leading-relaxed text-slate-400 mt-6">
                            By submitting this form, you agree to our Privacy Policy and consent to receive email and text messages. You can unsubscribe at any time.
                        </p>

                        <!-- Dynamic Submit Button -->
                        <button type="submit" 
                            class="w-full bg-[var(--primary)] text-white font-extrabold text-lg py-4 rounded-full shadow-lg shadow-[var(--primary)]/30 hover:shadow-xl hover:-translate-y-0.5 transition-all duration-300 active:scale-95">
                            Submit
                        </button>
                    </form>
                </div>
            </div>

            <!-- Right Side: Image (5 Columns) -->
            <div class="lg:col-span-5 hidden lg:block">
                <div class="relative group">
                    <!-- Background Glow -->
                    <div class="absolute -inset-4 bg-[var(--primary)]/5 rounded-[4rem] blur-3xl -z-10"></div>
                    
                    <div class="rounded-[3.5rem] overflow-hidden shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?auto=format&fit=crop&q=80&w=800" 
                             alt="Discovery Call Representative" 
                             class="w-full h-auto object-cover aspect-[4/5] scale-105 group-hover:scale-100 transition-transform duration-700">
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="py-20 px-6 bg-primary antialiased text-center">
    <div class="max-w-4xl mx-auto">
        
        <!-- Limited Spot Badge -->
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-white/10 bg-white/5 mb-10">
            <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
            <span class="text-white/90 text-[13px] font-medium tracking-wide">
               Few onboarding spots remaining 
            </span>
        </div>

        <!-- Main Heading -->
        <h2 class="text-white text-[26px] md:text-[36px] font-extrabold leading-[1.1] tracking-[-0.03em] mb-6 capitalize">
           Meet your next hire <br>
            is <span class="bg-gradient-to-r from-[#000] via-[#000] to-[#000] bg-clip-text text-transparent">7 days away</span>
        </h2>

        <!-- Subheading -->
        <p class="text-white/80 text-[13px] md:text-[16px] leading-relaxed max-w-2xl mx-auto mb-8 font-normal">
            Book a Demo to see matched, pre-vetted candidates for your needs.<br class="hidden md:block">
            No overheads. No commitments. No risk.
        </p>

        <!-- CTA Button -->
        <div class="mb-6">
            <a href="#" class="inline-flex items-center gap-2 bg-white text-black px-8 py-4 rounded-xl font-bold text-[17px] transition-transform hover:scale-105">
                Book a Demo 
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </a>
        </div>

        <!-- Benefits List -->
        <div class="flex flex-wrap justify-center items-center gap-x-4 gap-y-4">
            @php
                $benefits = [
                    'No payment until you hire',
                    'No contract lock-in',
                    'Replacement guarantee',
                    'Quick demo',
                    'Cancel anytime'
                ];
            @endphp

            @foreach($benefits as $benefit)
                <div class="flex items-center gap-2 text-gray-500 text-white font-medium text-[14px]">
                    <svg class="w-3 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                    </svg>
                    {{ $benefit }}
                </div>
            @endforeach
        </div>

    </div>
</section>
@endsection