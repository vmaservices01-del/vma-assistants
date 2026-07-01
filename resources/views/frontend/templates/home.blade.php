@extends('frontend.layouts.app')

@section('content')   

    <!-- Content -->

<section id="hero-section" class="w-full flex items-center min-h-[calc(100vh-100px)] py-12 lg:py-14">
    <div class="max-w-[1200px] mx-auto px-6 grid lg:grid-cols-2 gap-8 lg:gap-16 items-center">
        
        <!-- Left Side -->
        <div class="max-w-xl">
                <div x-data="{
                    messages: [
                        '100+ businesses just hired through VMA',
                        'Certified remote experts for Healthcare teams',
                        'Launch compliant, secure capacity in 7 days'
                    ],
                    currentIndex: 0
                }" 
                x-init="setInterval(() => { currentIndex = (currentIndex + 1) % messages.length }, 10000)"
                class="inline-flex items-center gap-2 px-4 py-2 bg-[#05966912] text-[#059669] rounded-full text-xs font-semibold border border-green-100 mb-4 ">
                
                <span class="w-3 h-3 rounded-full bg-green-500"></span>
                
                <!-- Using Alpine text interpolation to switch messages -->
                <span x-text="messages[currentIndex]" 
                      x-transition:enter="transition ease-out duration-500" 
                      x-transition:enter-start="opacity-0 transform translate-y-2" 
                      x-transition:enter-end="opacity-100 transform translate-y-0">
                </span>
            </div>

            <h1 class="text-4xl md:text-5xl lg:text-6xl text-capitalize font-extrabold tracking-tighter capitalize text-gray-900 leading-[1] mb-6">
                Stop Worrying About Documentation.<br>
                <span class="text-primary">Start Focusing On Patient Care.</span>
            </h1>

            <p class="text-gray-500 text-[16px] leading-relaxed mb-8 max-w-lg">
                VMA helps healthcare providers streamline operations with fast medical transcription services and reliable virtual medical assistant support. Stay compliant, reduce workload, and scale your practice with ease. 
            </p>

            <div class="flex flex-col sm:flex-row gap-3">
                <button class="bg-primary transition-all duration-300 hover:opacity-80 text-white font-bold py-3.5 px-6 rounded-lg shadow-md">Get Started →</button>
                <button class="bg-white border border-gray-200 hover:bg-gray-50 text-gray-900 font-bold py-3.5 px-6 rounded-lg transition-all">See How It Works</button>
            </div>

            <div class="mt-6 flex flex-wrap items-center gap-y-3 text-[13px] md:text-[14px] text-black font-medium ">
    
            <!-- Row 1 Item 1 -->
            <div class="flex items-center pr-2 pr-sm-2  border-r border-slate-200">
                <div class="flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-black/10 text-primary mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-3 h-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                    </svg>
                </div>
                <span class="text-[13px]">No upfront commitment</span>
            </div>

            <!-- Row 1 Item 2 -->
            <div class="flex items-center px-2 pr-sm-2 border-r border-slate-200">
                <div class="flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-black/10 text-primary mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-3 h-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                    </svg>
                </div>
                <span class="text-[13px]">HIPAA compliant </span>
            </div>

            <!-- Row 1 Item 3 -->
            <div class="flex items-center px-2 pr-sm-2 md:border-r-0 lg:border-r lg:border-slate-200">
                <div class="flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-black/10 text-primary mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-3 h-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                    </svg>
                </div>
                <span class="text-[13px]">Flexible terms, no lock-in</span>
            </div>

            <!-- Row 2 Item 1 -->
            <!-- <div class="flex items-center pr-2 border-r border-slate-200 lg:ml-0">
                <div class="flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-black/10 text-primary mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-3 h-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                    </svg>
                </div>
                <span class="text-[13px]">Zero-cost replacements guarantee</span>
            </div> -->

            <!-- Row 2 Item 2 -->
            <!-- <div class="flex items-center px-2">
                <span class="text-[13px]">4.5★ Trustpilot reviews</span>
            </div> -->

        </div>
        </div>

        <!-- Right Side Container -->
        <div class="relative w-full max-w-[450px] mx-auto h-[500px] hidden lg:block" 
             x-data="{ 
                active: 1, 
                init() { 
                    setInterval(() => { this.active = this.active === 3 ? 1 : this.active + 1 }, 5000) 
                } 
             }">
            
            <!-- Box 1: Fatima (Active: 1) -->
            <div class="absolute right-0 top-0 w-64 bg-white rounded-[40px] p-8 shadow-2xl border border-gray-50 animate-float transition-all duration-500 cursor-pointer"
                 :class="active === 1 ? 'z-50 scale-105 shadow-blue-900/10' : 'z-20 scale-100 opacity-90'"
                 @mouseenter="active = 1"
                 class="hover:z-[60] hover:scale-110">
                <div class="w-full h-40 bg-slate-50 rounded-3xl mb-4 flex items-center justify-center overflow-hidden">
                     <!-- Placeholder for img -->
                     <img src="/fatima.jpg" class="w-full h-full object-cover" alt="Fatima">
                </div>
                <h3 class="font-bold text-slate-900">Fatima A.</h3>
                <p class="text-xs text-slate-400 font-medium">Administrative Assistant</p>
            </div>

            <!-- Box 2: Shezil (Active: 2) -->
            <div class="absolute right-12 top-24 w-64 bg-white rounded-[40px] p-8 shadow-2xl border border-gray-50 animate-float transition-all duration-500 cursor-pointer"
                 style="animation-delay: 1s;"
                 :class="active === 2 ? 'z-50 scale-105 shadow-blue-900/10' : 'z-30 scale-100 opacity-90'"
                 @mouseenter="active = 2"
                 class="hover:z-[60] hover:scale-110">
                <div class="w-full h-40 bg-slate-50 rounded-3xl mb-4 flex items-center justify-center overflow-hidden">
                     <img src="/shezil.jpg" class="w-full h-full object-cover" alt="Shezil">
                </div>
                <h3 class="font-bold text-slate-900">Shezil R.</h3>
                <p class="text-xs text-slate-400 font-medium">Patient Care Coordinator</p>
            </div>

            <!-- Box 3: Arsalan (Active: 3) -->
            <div class="absolute right-24 top-48 w-64 bg-white rounded-[40px] p-8 shadow-2xl border border-gray-50 animate-float transition-all duration-500 cursor-pointer"
                 style="animation-delay: 2s;"
                 :class="active === 3 ? 'z-50 scale-105 shadow-blue-900/10' : 'z-40 scale-100 opacity-90'"
                 @mouseenter="active = 3"
                 class="hover:z-[60] hover:scale-110">
                <div class="w-full h-40 bg-slate-50 rounded-3xl mb-4 flex items-center justify-center overflow-hidden">
                     <img src="/arsalan.jpg" class="w-full h-full object-cover" alt="Arsalan">
                </div>
                <h3 class="font-bold text-slate-900">Arsalan K.</h3>
                <p class="text-xs text-slate-400 font-medium">Appointment Scheduler</p>
            </div>
            
            <!-- Animated Badge -->
            <div class="absolute -right-4 bottom-12 bg-white border border-slate-50 px-6 py-3 rounded-2xl font-bold shadow-2xl z-[100] text-sm text-[#7C3AED] animate-bounce">
                Matched in 5 days <span class="text-amber-500">⚡</span>
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

<section class="py-12 bg-white" id="next-section">
    <!-- Header Text -->
    <div class="text-center mb-10">
        <h2 class="text-xs font-bold text-[13px] leading-relaxed text-gray-400 tracking-[0.2em] uppercase capitalize">
            TRUSTED BY HEALTHCARE PROVIDERS AND MEDICAL ORGANIZATIONS
        </h2>
    </div>

    <!-- Container - Width limited so only 5 fit at once -->
    <div class="group w-full max-w-[1200px] mx-auto overflow-hidden [mask-image:_linear-gradient(to_right,transparent_0,_black_128px,_black_calc(100%-128px),transparent_100%)]">
        
        <ul class="flex items-center animate-infinite-scroll">
            <!-- Set items to 1/5th width (20% each) to ensure 5 show at once -->
            <li class="w-1/2 md:w-1/5 flex-shrink-0 px-8"><img src="https://edge-webapp.s3.amazonaws.com/wp-content/uploads/2025/02/17181011/Northwest_Dental.png" class="h-10 w-full object-contain grayscale hover:grayscale-0 transition-all duration-300" alt="Logo"></li>
            <li class="w-1/2 md:w-1/5 flex-shrink-0 px-8"><img src="https://edge-webapp.s3.amazonaws.com/wp-content/uploads/2025/02/17181012/DHR-Health.png" class="h-10 w-full object-contain grayscale hover:grayscale-0 transition-all duration-300" alt="Logo"></li>
            <li class="w-1/2 md:w-1/5 flex-shrink-0 px-8"><img src="https://edge-webapp.s3.amazonaws.com/wp-content/uploads/2025/02/17181011/Navaderm.png" class="h-10 w-full object-contain grayscale hover:grayscale-0 transition-all duration-300" alt="Logo"></li>
            <li class="w-1/2 md:w-1/5 flex-shrink-0 px-8"><img src="https://edge-webapp.s3.amazonaws.com/wp-content/uploads/2025/02/17181012/Allied_Physicians.png" class="h-10 w-full object-contain grayscale hover:grayscale-0 transition-all duration-300" alt="Logo"></li>
            <li class="w-1/2 md:w-1/5 flex-shrink-0 px-8"><img src="https://edge-webapp.s3.amazonaws.com/wp-content/uploads/2025/02/17181011/Simmerer_Insurance.png" class="h-10 w-full object-contain grayscale hover:grayscale-0 transition-all duration-300" alt="Logo"></li>

            <!-- Duplicated 5 Logos (The "cloned" set for continuous flow) -->
            <li class="w-1/2 md:w-1/5 flex-shrink-0 px-8"><img src="https://edge-webapp.s3.amazonaws.com/wp-content/uploads/2025/02/17181011/Northwest_Dental.png" class="h-10 w-full object-contain grayscale hover:grayscale-0 transition-all duration-300" alt="Logo"></li>
            <li class="w-1/2 md:w-1/5 flex-shrink-0 px-8"><img src="https://edge-webapp.s3.amazonaws.com/wp-content/uploads/2025/02/17181012/DHR-Health.png" class="h-10 w-full object-contain grayscale hover:grayscale-0 transition-all duration-300" alt="Logo"></li>
            <li class="w-1/2 md:w-1/5 flex-shrink-0 px-8"><img src="https://edge-webapp.s3.amazonaws.com/wp-content/uploads/2025/02/17181011/Navaderm.png" class="h-10 w-full object-contain grayscale hover:grayscale-0 transition-all duration-300" alt="Logo"></li>
            <li class="w-1/2 md:w-1/5 flex-shrink-0 px-8"><img src="https://edge-webapp.s3.amazonaws.com/wp-content/uploads/2025/02/17181012/Allied_Physicians.png" class="h-10 w-full object-contain grayscale hover:grayscale-0 transition-all duration-300" alt="Logo"></li>
            <li class="w-1/2 md:w-1/5 flex-shrink-0 px-8"><img src="https://edge-webapp.s3.amazonaws.com/wp-content/uploads/2025/02/17181011/Simmerer_Insurance.png" class="h-10 w-full object-contain grayscale hover:grayscale-0 transition-all duration-300" alt="Logo"></li>
        </ul>
    </div>

    <!-- Subtext -->
    <div class="text-center mt-10 px-6">
        <p class="text-gray-500 text-[15px] leading-relaxed max-w-lg mx-auto">Built for efficiency, accuracy, and speed to help you deliver better care without the administrative burden.</p>
    </div>
</section>

<section class="max-w-6xl mx-auto px-6 py-20 text-center">
    <!-- Badge -->
    <div class="inline-flex px-3 py-1 mb-6 text-[11px] font-bold text-primary uppercase tracking-widest bg-indigo-50/50 rounded-full border border-indigo-100">
        Accelerated Hiring for Healthcare Teams
    </div>

    <!-- Title & Desc -->
    <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 tracking-tighter mb-4 capitalize">
        Smart Support For Healthcare Teams 
    </h2>
    <p class="text-gray-500 mb-10 max-w-lg mx-auto leading-relaxed">
        VMA professionals scale medical operations with experience in EHR systems, ICD-10, and CPT processes to support your workflow. 
    </p>

    <!-- Browse Button -->
    <button class="mb-16 border-2 border-gray-200 hover:border-gray-300 px-6 py-3 rounded-xl font-semibold transition-all">
        Explore Medical Roles →
    </button>

    <!-- Grid: 3 Columns -->
    <div class="grid md:grid-cols-3 gap-6 text-left">
        @php
            $roles = [
                [
                    'title' => 'Medical Receptionist', 
                    'desc' => 'Manages appointment scheduling, handles calls, and responds to patient queries efficiently.', 
                    'url' => '/roles/receptionist',
                    'icon' => 'M 22 16.92 v 3 a 2 2 0 0 1 -2.18 2 a 19.79 19.79 0 0 1 -8.63 -3.07 a 19.5 19.79 0 0 1 -6 -6 a 19.79 19.79 0 0 1 -3.07 -8.67 A 2 2 0 0 1 4.11 2 h 3 a 2 2 0 0 1 2 1.72 a 12.06 12.06 0 0 0 .57 2.4 a 2 2 0 0 1 -.45 2.11 L 8.09 9.91 a 16 16 0 0 0 6 6 l 1.27 -1.27 a 2 2 0 0 1 2.11 -.45 a 12.06 12.06 0 0 0 2.4 .57 A 2 2 0 0 1 22 16.92 z' // Phone Call Receiver
                ],
                [
                    'title' => 'Administrative Assistant', 
                    'desc' => 'Supports administrative and clinical tasks remotely to keep your operations running smoothly.', 
                    'url' => '/roles/scribe',
                    'icon' => 'M 4 21 h 16 a 2 2 0 0 0 2 -2 V 5 a 2 2 0 0 0 -2 -2 H 4 a 2 2 0 0 0 -2 2 v 14 a 2 2 0 0 0 2 2 z M 2 10 h 20 M 12 6 v 6 M 10 9 h 4' // Desktop monitor UI with medical cross
                ],
                [
                    'title' => 'Medical Coder', 
                    'desc' => 'Applies accurate coding to diagnoses and procedures for streamlined billing and records.', 
                    'url' => '/roles/coder',
                    'icon' => 'M 14 2 H 6 a 2 2 0 0 0 -2 2 v 16 a 2 2 0 0 0 2 2 h 12 a 2 2 0 0 0 2 -2 V 8 z M 14 2 v 6 h 6 M 8 13 l -2 2 l 2 2 M 16 13 l 2 -2 l -2 -2 M 13 12 l -2 6' // File Code (< >)
                ],
                [
                    'title' => 'Medical Scribe', 
                    'desc' => 'Captures patient interactions in real-time for both virtual and in-person consultations.', 
                    'url' => '/roles/scribe',
                    'icon' => 'M 12 20 h 9 M 16.5 3.5 a 2.121 2.121 0 0 1 3 3 L 7 19 l -4 1 l 1 -4 L 16.5 3.5 z' // Pencil writing/Scribing
                ],
                [
                    'title' => 'Medical Transcriptionist', 
                    'desc' => 'Converts voice recordings into precise medical documents with quick turnaround times.', 
                    'url' => '/roles/scribe',
                    'icon' => 'M 12 1 a 3 3 0 0 0 -3 3 v 8 a 3 3 0 0 0 6 0 V 4 a 3 3 0 0 0 -3 -3 z M 19 10 v 2 a 7 7 0 0 1 -14 0 v -2 M 12 19 v 4 M 8 23 h 8' // Audio microphone
                ],
                
                [
                    'title' => 'Compliance Specialist', 
                    'desc' => 'Ensures accurate, organized, and compliant patient records across all documentation.', 
                    'url' => '/roles/scribe',
                    'icon' => 'M 19 11 H 5 a 2 2 0 0 0 -2 2 v 7 a 2 2 0 0 0 2 2 h 14 a 2 2 0 0 0 2 -2 v -7 a 2 2 0 0 0 -2 -2 z M 7 11 V 7 a 5 5 0 0 1 10 0 v 4' // Padlock Security
                ]
            ];
        @endphp

        @foreach($roles as $role)
            <!-- Parent Card (the "group") -->
            <div style="--primary: {{ $page->primary_color ?? '#4f46e5' }};" 
                 class="relative bg-white p-8 rounded-3xl border border-gray-100 shadow-sm transition-all overflow-hidden hover:shadow-lg group flex flex-col justify-between hover:-translate-y-1">
                
                <!-- Hover Active Indicator (Dynamic BG) -->
                <div class="absolute top-0 left-0 right-0 h-0.5 bg-transparent group-hover:bg-[var(--primary)] transition-colors duration-300 rounded-t-3xl"></div>
                
                <!-- Content Wrapper -->
                <div>
                    <!-- Icon (Dynamic Stroke on Hover) -->
                    <div class="mb-6">
                        <svg class="w-8 h-8 text-gray-400 group-hover:text-[var(--primary)] transition-colors duration-300" 
                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="{{ $role['icon'] }}" />
                        </svg>
                    </div>
                    
                    <h3 class="text-xl font-bold text-gray-900 mb-3">{{ $role['title'] }}</h3>
                    <p class="text-gray-500 text-[13px] leading-relaxed mb-6">{{ $role['desc'] }}</p>
                </div>

                <!-- Button (Dynamic Text Color) -->
                <a href="{{ $role['url'] }}" 
                   class="inline-flex items-center font-bold text-sm transition-all duration-300 hover:opacity-80 text-[var(--primary)]">
                    Learn More 
                    <span class="ml-1 group-hover:translate-x-1 transition-transform">→</span>
                </a>
            </div>
        @endforeach
    </div>
</section>

<section class="py-24 px-6 bg-gray-50 text-center">
    <!-- Outer Wrapper -->
    <div class="max-w-1xl mx-auto">
        
        <!-- Badge -->
        <div class="inline-flex items-center gap-1.5 px-4 py-1.5 bg-emerald-50/50 text-emerald-600 rounded-full text-[12px] font-bold border border-emerald-100 mb-3">
            <span class="text-xs text-[13px] leading-relaxed">✔</span> Built for teams new to remote staffing
        </div>

        <!-- Headline - Matching your spacing and size -->
        <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 tracking-tight leading-[1.1] mb-6 capitalize">
            If this is your first time hiring remote support, <br>
            <span class="text-primary">that’s exactly who we designed this for.</span>
        </h2>

        <!-- Paragraph - Adjusted to create the 4-line flow -->
        <p class="text-gray-500 text-[15px] leading-6 md:leading-6 max-w-lg mx-auto">            
            Many of our clients had never worked with a remote staffing partner before. That’s why we’ve created a system with built-in compliance, clear security practices, and organized workflows to know how your extended team is performing.
        </p>
        
    </div>
</section>

<section class="max-w-6xl mx-auto px-6 py-24">
    <!-- Header Area -->
    <div class="text-center mb-16">
        <div class="inline-flex items-center px-4 py-1.5 mb-8 text-[11px] font-bold text-primary uppercase tracking-widest bg-indigo-50/50 rounded-full border border-indigo-100">
            A Secure Remote Workforce Solution
        </div>
        <h2 class="text-gray-900 tracking-[-0.5px] mb-3 font-extrabold leading-[1.12] 
           text-[clamp(1.9rem,4vw,2.7rem)] capitalize">
            Make your team work like a system  <br class="hidden md:block">
            <span class="text-primary">Less coordination, no daily hassle </span>
        </h2>
        <p class="text-gray-500 text-base max-w-md mx-auto">
            From coverage and performance to compliance, everything is managed within one unified layer.
        </p>
    </div>

    <!-- 2x3 Grid for Cards -->
    <div class="grid md:grid-cols-2 gap-10">
        @php
            $features = [
                ['icon' => 'user', 'title' => 'Quickly Scale Your Teams Output', 'desc' => 'Get matched with vetted experts who understand your specific workflows before they even start.', 'tag' => 'Hiring completed in about a week'],
                ['icon' => 'star', 'title' => 'Immediate Integration with Your Tech Stack', 'desc' => 'VMA talent comes prepared with experience in Athena, Epic, Weave, Telox, and other essential software.', 'tag' => 'Operative on the first day'],
                ['icon' => 'credit-card', 'title' => 'Secure and Stable Operations', 'desc' => 'All tasks are performed on managed hardware with constant monitoring, reliable connectivity, and emergency power.', 'tag' => 'Guaranteed 99.9% system availability'],
                ['icon' => 'book', 'title' => 'Eliminate Technical Burden', 'desc' => 'VMA handle the hardware, secure connections, and device management so your IT team doesnot have to.', 'tag' => 'Requires no technical installation from you'],
                ['icon' => 'user', 'title' => 'Hands-Off HR Management', 'desc' => 'Let us take care of the heavy lifting, from payroll and benefits to background screenings and contracts.', 'tag' => 'Removes the admin workload'],
                ['icon' => 'shield', 'title' => 'Built-In Regulatory Standards', 'desc' => 'Full compliance with HIPAA, SOC 2, and ISO 27001 is standard, featuring active encryption and ongoing oversight.', 'tag' => 'Ready for any audit immediately']
            ];
        @endphp

        @foreach($features as $feature)
            <!-- 1. Added "group" class to the parent div for hover detection -->
            <div style="--primary: {{ $page->primary_color ?? '#4f46e5' }};"  class="relative bg-white p-8 rounded-3xl border border-gray-100 overflow-hidden group hover:shadow-md hover:-translate-y-1">
    
               <!-- Hover Active Indicator (Dynamic BG) -->
                <div class="absolute top-0 left-0 right-0 h-0.5 bg-transparent group-hover:bg-[var(--primary)] transition-colors duration-300 rounded-t-3xl"></div>

                <div>
                    <!-- Icon Box -->
                    <div class="w-12 h-12 flex items-center justify-center bg-indigo-50 text-primary rounded-xl mb-6">
                        <span class="text-lg">○</span> 
                    </div>
                    
                    <!-- 3. Applied the custom h3 styling -->
                    <h3 class="text-[0.95rem] font-bold text-gray-900 mb-[6px]">
                        {{ $feature['title'] }}
                    </h3>
                    
                    <p class="text-gray-500 text-sm leading-relaxed mb-8">{{ $feature['desc'] }}</p>
                </div>

                <!-- Green Tag -->
                <div class="inline-flex items-center text-xs font-semibold text-emerald-700 bg-emerald-50 px-4 py-2 rounded-full border border-emerald-100 w-fit">
                    <span class="mr-2">✓</span> {{ $feature['tag'] }}
                </div>
            </div>
        @endforeach
    </div>
</section>

<section class="relative w-full overflow-hidden bg-white py-6 md:py-1give 0">
    
    <!-- Top Ticker (White BG, Slides Left, Rotated 2deg) -->
    <div class="rotate-[2deg] md:rotate-[1deg] absolute top-10 md:top-20 w-[120vw] -left-[10vw] z-10">
        <div class="bg-gray-100 py-3 md:py-4 shadow-sm border-y border-gray-200">
            <div class="flex animate-left whitespace-nowrap">
                @for ($i = 0; $i < 3; $i++)
                    <div class="flex items-center text-lg md:text-2xl font-bold text-gray-700">
                        <span class="mx-6">Grow your business with virtual assistants</span>
                        <span class="mx-6 text-gray-400">•</span>
                        <span class="mx-6">Trusted remote staffing partners</span>
                        <span class="mx-6 text-gray-400">•</span>
                    </div>
                @endfor
            </div>
        </div>
    </div>

    <!-- Bottom Ticker (Blue BG, Slides Right, Rotated -2deg) -->
    <div class="rotate-[-2deg] md:rotate-[-1deg] absolute top-28 md:top-40 w-[120vw] -left-[10vw] z-20">
        <div class="bg-primary py-3 md:py-4 shadow-xl">
            <div class="flex animate-right whitespace-nowrap">
                @for ($i = 0; $i < 3; $i++)
                    <div class="flex items-center text-lg md:text-2xl font-bold text-white">
                        <span class="mx-6">Start building your dream team today</span>
                        <span class="mx-6 text-blue-300">•</span>
                        <span class="mx-6">Secure compliant operations</span>
                        <span class="mx-6 text-blue-300">•</span>
                    </div>
                @endfor
            </div>
        </div>
    </div>
    
    <!-- Spacing Div: Keeps the layout pushed so content doesn't overlap tickers -->
    <div class="h-60 md:h-80"></div>
</section>

<section class="py-20 px-6 bg-gray-50">
    <div class="max-w-6xl mx-auto">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <div class="inline-flex items-center px-4 py-1 mb-10 text-[11px] font-bold text-primary uppercase tracking-widest bg-indigo-50 rounded-full border border-indigo-100">
                How it works
            </div>
           <h2 class="text-3xl md:text-5xl font-extrabold tracking-[-1.5px] text-gray-900 leading-[1.05] mb-6 word-spacing-[6px] capitalize">
                Seven days to hire. <br>
                <span class="text-primary font-extrabold tracking-[-1.5px] word-spacing-[6px]">
                    Fuel your business fire.
                </span>
            </h2>
            <p class="text-gray-500 text-[15px]">A quick chat to a fully equipped new remote hiring</p>
        </div>

        <!-- Grid -->
        <div class="grid md:grid-cols-3 gap-10">
            @php
                $steps = [
                    ['num' => '1', 'title' => ' Let’s talk about your needs', 'desc' => 'Start with a demo to share roles and the technology. VMA hunts for the perfect certified candidates.', 'day' => 'Day 1'],
                    ['num' => '2', 'title' => 'Meet your top matches', 'desc' => 'Evaluate pre-vetted pros in your schedule. Donot pay a cent until you find the right fit.', 'day' => 'Days 2-5'],
                    ['num' => '3', 'title' => 'Welcome them aboard', 'desc' => 'Focus on the work, not the admin. Hardware and payroll handled, a manager to keep things running.', 'day' => 'Day 7']
                ];
            @endphp

            @foreach($steps as $step)
                <div class="relative flex flex-col items-center text-center">
                    <!-- Circle Number Box -->
                    <div class="w-12 h-12 rounded-full bg-primary text-white flex items-center justify-center font-bold text-lg mb-8 shadow-md">
                        {{ $step['num'] }}
                    </div>

                    <!-- Heading -->
                    <h3 class="text-lg font-bold text-gray-900 mb-3 capitalize">{{ $step['title'] }}</h3>
                    
                    <!-- Paragraph with precise line height -->
                    <p class="text-gray-500 text-[14px] leading-6 mb-8 px-2">
                        {{ $step['desc'] }}
                    </p>
                    
                    <!-- Badge -->
                    <div class="px-3 py-1 rounded-full bg-white border border-gray-200 text-primary text-[11px] font-bold shadow-sm">
                        {{ $step['day'] }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Main Wrapper -->
<section class="py-24 px-6 bg-white antialiased">
    <div class="max-w-6xl mx-auto">
        
        <!-- Header Section -->
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-1.5 rounded-full bg-[#F3E8FF] text-primary text-[11px] font-bold uppercase tracking-[0.1em] mb-10">
                The Trust Layer
            </span>
            <h2 class="text-[#111827] text-[26px] md:text-[46px] font-extrabold leading-[1.1] tracking-[-0.03em] mb-4 capitalize">
                Compliance first.   <br>
                <span class="text-primary">Excellence always.</span>
            </h2>
        </div>

        <!-- Main Card Container -->
        <div class="flex flex-col lg:flex-row bg-white rounded-[32px] border border-[#F3F4F6] overflow-hidden shadow-[0_4px_20px_rgba(0,0,0,0.02)]">
            
            <!-- Left Panel (Lavender Background) -->
            <div class="lg:w-[52%] bg-[#F5F3FF] p-8 md:p-14">
                <h3 class="text-[#111827] text-[18px] md:text-[20px] font-extrabold leading-tight mb-5 tracking-tight">
                    Don't hire a "maybe." Get certified one.
                </h3>
                <p class="text-[#6B7280] text-[15px] leading-relaxed mb-6 max-w-[440px]">
                    VMA doesn’t just find people; it certifies them. Through our 4-week "VMA  Edu" program, your new hire learns tools and rules before their first day.
                </p>

                <!-- Stats Grid -->
                <div class="grid grid-cols-2 gap-4">
                    @php
                        $stats = [
                            ['val' => 'Top 2-4%', 'label' => 'Only the best make it in.'],
                            ['val' => '4-Week Training', 'label' => 'They’re experts before day one.'],
                            ['val' => '97.3% Retention Rate', 'label' => 'Our team members stick around.'],
                            ['val' => '4-Step Evaluation', 'label' => 'We screen every detail.'],
                        ];
                    @endphp

                    @foreach($stats as $stat)
                        <div class="bg-white rounded-2xl p-3 shadow-sm border border-[#F3F4F6]">
                            <div class="text-primary text-[20px] font-extrabold mb-1 tracking-tight">
                                {{ $stat['val'] }}
                            </div>
                            <div class="text-[#9CA3AF] text-[12px] font-medium">
                                {{ $stat['label'] }}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Right Panel (White Background) -->
            <div class="lg:w-[48%] bg-white p-8 md:p-8 border-l border-[#F3F4F6]">
                <div class="space-y-3">
                    
                    <!-- Platform Certifications -->
                    <div class="bg-[#fafafa] p-4 rounded-lg">
                        <h4 class="text-[#9CA3AF] text-[11px] font-bold uppercase tracking-[0.05em] mb-2">VMA Certifications</h4>
                        <div class="flex flex-wrap gap-1">
                            @foreach(['Athena Health', 'Epic', 'Weave', 'Tebra', 'RingCentral', 'CareCloud'] as $tag)
                                <span class="px-2 py-1 rounded-full bg-[#7c3aed0f] text-primary text-[12px] font-medium border border-[#EDE9FE]">
                                    {{ $tag }}
                                </span>
                            @endforeach
                        </div>
                    </div>

                    <!-- Compliance & Security -->
                    <div class="bg-[#fafafa] p-4 rounded-lg">
                        <h4 class="text-[#9CA3AF] text-[11px] font-bold uppercase tracking-[0.05em] mb-2">Security Checks</h4>
                        <div class="flex flex-wrap gap-2">
                            @foreach(['HIPAA', 'BAA', 'SOC 2 Type II', 'ISO 27001', 'GDPR'] as $tag)
                                <span class="px-2 py-1 rounded-full bg-[#ECFDF5] text-[#059669] text-[12px] font-medium border border-[#D1FAE5]">
                                    {{ $tag }}
                                </span>
                            @endforeach
                        </div>
                    </div>

                    <!-- Infrastructure -->
                    <div class="bg-[#fafafa] p-4 rounded-lg">
                        <h4 class="text-[#9CA3AF] text-[11px] font-bold uppercase tracking-[0.05em] mb-2">Foundation</h4>
                        <div class="flex flex-wrap gap-2">
                            @foreach(['Proactive Infrastructure', 'Enterprise VPN', 'Monitoring Workstations', 'Secure Hardware'] as $tag)
                                <span class="px-2 py-1 rounded-full bg-[#7c3aed0f] text-primary text-[12px] font-medium border border-[#F3F4F6]">
                                    {{ $tag }}
                                </span>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<hr>

<section class="py-24 px-6 bg-white antialiased">
    <div class="max-w-6xl mx-auto">
        
        <!-- Header -->
        <div class="text-center mb-16">
            <span class="inline-block px-5 py-2 rounded-full bg-[var(--primary)]/10 text-[var(--primary)] text-[11px] font-bold uppercase tracking-[0.12em] mb-10 border border-[var(--primary)]/20">
                Subscription Plan
            </span>
            <h2 class="text-[#111827] text-[40px] md:text-[46px] font-extrabold leading-tight tracking-tight mb-4 capitalize">
                Pricing without the surprises.<br> <span class="text-[var(--primary)]"> Pay what you see!</span> with VMA
            </h2>
            <p class="text-[#6B7280] text-[17px] font-medium">
                One flat monthly fee. No surprises.
            </p>
        </div>

        <!-- Fees Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @php
                $fees = [
                    ['label' => 'Startup Fees', 'value' => 1500],
                    ['label' => 'Hardware Overhead', 'value' => 2800],
                    ['label' => 'Talent Acquisition', 'value' => 3500],
                    ['label' => 'Certification Cost', 'value' => 1200]
                ];
            @endphp

            @foreach($fees as $fee)
                <div x-data="{ 
                        displayValue: 0, 
                        targetValue: {{ $fee['value'] }},
                        init() {
                            let observer = new IntersectionObserver((entries) => {
                                if (entries[0].isIntersecting) {
                                    this.animate();
                                    observer.disconnect(); // Only animate once
                                }
                            }, { threshold: 0.5 });
                            observer.observe($el);
                        },
                        animate() {
                            let start = 0;
                            let end = this.targetValue;
                            let duration = 2000; // 2 seconds
                            let startTime = null;

                            const step = (timestamp) => {
                                if (!startTime) startTime = timestamp;
                                let progress = Math.min((timestamp - startTime) / duration, 1);
                                this.displayValue = Math.floor(progress * (end - start) + start);
                                if (progress < 1) {
                                    window.requestAnimationFrame(step);
                                }
                            };
                            window.requestAnimationFrame(step);
                        }
                    }"
                    class="bg-white border border-slate-100 rounded-[32px] py-16 flex flex-col items-center justify-center shadow-[0_10px_30px_rgba(0,0,0,0.02)] transition-all duration-500 hover:shadow-xl hover:-translate-y-1">
                    
                    <div class="text-[var(--primary)] text-4xl md:text-5xl font-black mb-2 tracking-tighter flex items-center">
                        <span class="mr-1">$</span>
                        <span x-text="displayValue.toLocaleString()">0</span>
                    </div>
                    
                    <div class="text-slate-400 text-[13px] font-bold uppercase tracking-widest text-center px-4">
                        {{ $fee['label'] }}
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>

<section class="py-24 px-6 bg-white antialiased">
    <div class="max-w-6xl mx-auto">
        
        <!-- Header Section -->
        <div class="text-center mb-16">
            <span class="inline-block px-5 py-2 rounded-full bg-[#F5F3FF] text-primary text-[11px] font-bold uppercase tracking-[0.12em] mb-10 border border-[#EDE9FE]">
                OUR HAPPY PARTNERS
            </span>
            <h2 class="text-[#111827] text-[40px] md:text-[46px] font-extrabold leading-[1.1] tracking-[-0.03em] capitalize">
                Skip our sales talk. <br>
                Hear from the teams <span class="text-primary"> we’ve helped grow.</span>
            </h2>
        </div>

        <!-- Testimonials Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @php
                $testimonials = [
                    [
                        'quote' => '"VMA provides a <span class="font-bold text-gray-900">white-glove experience</span> that goes way beyond a typical agency. The talent they find is truly world-class."',
                        'name' => 'Dr. Sarah Jenkins ',
                        'title' => 'Horizon Medical Group',
                        'initials' => 'SJ',
                        'badge' => '↑ 47% Efficiency Boost',
                        'badge_color' => 'purple'
                    ],
                    [
                        'quote' => '"<span class="font-bold text-gray-900">Hiring through VMA</span>, was the turning point for us. We wouldn’t be hitting these growth milestones without them."',
                        'name' => 'Marcus Thorne',
                        'title' => 'Founder, Thorne Financial',
                        'initials' => 'MT',
                        'badge' => '↑ 34% Annual growth',
                        'badge_color' => 'green'
                    ],
                    [
                        'quote' => '"The best part is the complete <span class="font-bold text-gray-900">peace of mind.</span> I’ve finally stopped the stressful search for local talent."',
                        'name' => 'Dr. Elena Rodriguez',
                        'title' => ' Wellness Specialists',
                        'initials' => 'ER',
                        'badge' => '↓ 51% staffing cost',
                        'badge_color' => 'green'
                    ],
                    [
                        'quote' => '"My VMA hire is easily <span class="font-bold text-gray-900">the top performer</span> on my team. Their dedication to quality and work ethic is incredible."',
                        'name' => 'Dr. James Miller',
                        'title' => 'Riverside Dental Care',
                        'initials' => 'JM',
                        'badge' => '↓ 90% drop in Overdue A/R',
                        'badge_color' => 'purple'
                    ],
                    [
                        'quote' => '"They’ve created such an <span class="font-bold text-gray-900">open, supportive culture.</span> It feels like a real partnership rather than just a vendor."',
                        'name' => 'Lisa Vance',
                        'title' => 'Operations Director, Sterling Insurance',
                        'initials' => 'LV',
                        'badge' => '✓ Strong Team Partnership',
                        'badge_color' => 'purple'
                    ],
                    [
                        'quote' => '"We’ve gained <span class="font-bold text-gray-900">top-tier talent</span> at a price point that actually lets us scale our business effectively."',
                        'name' => 'Innovate Media',
                        'title' => 'Enterprise Client',
                        'initials' => 'IM',
                        'badge' => '✓ Full Team Expansion',
                        'badge_color' => 'green'
                    ]
                ];
            @endphp

            @foreach($testimonials as $item)
                <div class="bg-white border border-[#F3F4F6] rounded-[24px] p-8 flex flex-col shadow-[0_4px_20px_rgba(0,0,0,0.01)]">
                    <!-- Star Rating -->
                    <div class="flex gap-1 mb-5">
                        @for($i = 0; $i < 5; $i++)
                            <svg class="w-4 h-4 text-[#F59E0B]" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                        @endfor
                    </div>

                    <!-- Quote Content -->
                    <div class="text-[#4B5563] text-[14px] leading-[1.6] mb-4 min-h-[80px]">
                        {!! $item['quote'] !!}
                    </div>

                    <div class="mt-auto pt-6 border-t border-[#F3F4F6]">
                        <div class="flex items-center gap-3 mb-4">
                            <!-- Avatar -->
                            <div class="w-10 h-10 rounded-full bg-primary flex items-center justify-center text-white text-[13px] font-bold">
                                {{ $item['initials'] }}
                            </div>
                            <!-- Name/Title -->
                            <div>
                                <h4 class="text-[#111827] text-[14px] font-bold leading-tight">{{ $item['name'] }}</h4>
                                <p class="text-[#9CA3AF] text-[12px] font-medium">{{ $item['title'] }}</p>
                            </div>
                        </div>

                        <!-- Result Badge -->
                        <span class="inline-flex px-3 py-1 rounded-full text-[12px] font-bold tracking-tight 
                            {{ $item['badge_color'] === 'purple' ? 'bg-[#F5F3FF] text-[#7C3AED]' : 'bg-[#ECFDF5] text-[#10B981]' }}">
                            {{ $item['badge'] }}
                        </span>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>

<section class="py-24 px-6 bg-primary antialiased text-center">
    <div class="max-w-4xl mx-auto">
        
        <!-- Limited Spot Badge -->
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-white/10 bg-white/5 mb-10">
            <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
            <span class="text-white/90 text-[13px] font-medium tracking-wide">
                Limited spots available this month
            </span>
        </div>

        <!-- Main Heading -->
        <h2 class="text-white text-[42px] md:text-[46px] font-extrabold leading-[1.1] tracking-[-0.03em] mb-6 capitalize">
            Hire your next expert<br>
            in <span class="bg-gradient-to-r from-[#000] via-[#000] to-[#000] bg-clip-text text-transparent">just 7 days</span>
        </h2>

        <!-- Subheading -->
        <p class="text-white/80 text-[13px] md:text-[16px] leading-relaxed max-w-2xl mx-auto mb-8 font-normal">
            Ready to scale? Book a demo to see certified talent ready for your industry. 

            <br class="hidden md:block">
            Zero cost, zero contracts, zero risk.
        </p>

        <!-- CTA Button -->
        <div class="mb-6">
            <a href="#" class="inline-flex items-center gap-2 bg-white text-black px-8 py-4 rounded-xl font-bold text-[17px] transition-transform hover:scale-105">
                Secure Your Spot
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </a>
        </div>

        <!-- Benefits List -->
        <div class="flex flex-wrap justify-center items-center gap-x-4 gap-y-4">
            @php
                $benefits = [
                    'Pay only when you hire',
                    'No long-term lock-in',
                    'Guaranteed replacement',
                    'Fast 15-min demo',
                    'Cancel anytime'
                ];
            @endphp

            @foreach($benefits as $benefit)
                <div class="flex items-center gap-2 text-gray-500 text-white font-medium">
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