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

            <h1 class="text-4xl md:text-4xl lg:text-5xl text-capitalize font-extrabold tracking-tighter capitalize text-gray-900 leading-[1] mb-6">
                Hire Remote Healthcare Professionals.<br>
                <span class="text-primary">Increase Efficiency & Deliver Better Patient Experiences</span>
            </h1>

            <p class="text-gray-500 text-[16px] leading-relaxed mb-8 max-w-lg">
                VMA helps healthcare organizations build reliable remote teams with trained professionals for patient care monitoring, administrative support, appointment scheduling, medical billing and coding, credentialing, accounts receivable, and more. Get your team up and running in as little as 5 days.
            </p>

            <div class="flex flex-col sm:flex-row items-left justify-left gap-4 mb-16">
    
                <a href="/contact" class="w-full sm:w-auto px-10 py-4 bg-[var(--primary)] hover:opacity-90 text-white font-bold rounded-xl transition-all shadow-lg shadow-[var(--primary)]/20 flex items-center justify-center gap-2 group border border-[var(--primary)]/20 decoration-transparent">
                    Get Started
                    <span class="group-hover:translate-x-1 transition-transform">→</span>
                </a>

                <a href="/how-it-works" class="w-full sm:w-auto px-10 py-4 bg-white text-[#0a1931] font-bold rounded-xl hover:bg-slate-100 transition-all shadow-lg flex items-center justify-center decoration-transparent">
                    See How it Works
                </a>
                
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

            <div class="flex items-center">
                <div class="flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-black/10 text-primary mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-3 h-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                    </svg>
                </div>
                <span class="text-[13px]">Zero-cost replacements guarantee</span>
            </div>
        </div>
        </div>

        <!-- Right Side Container -->
        <!-- Right Side Container -->
        <div class="relative w-full max-w-[450px] mx-auto h-[500px] hidden lg:block" 
             x-data="{ 
                active: 1, 
                init() { 
                    setInterval(() => { this.active = this.active === 3 ? 1 : this.active + 1 }, 5000) 
                } 
             }">
            
            <!-- Box 1: Fatima (Active: 1) -->
            <div class="absolute right-0 top-0 w-64 bg-white rounded-[40px] p-8 shadow-2xl border border-gray-50 animate-float transition-all duration-500 cursor-pointer hover:z-[15] hover:scale-110"
                 :class="active === 1 ? 'z-[10] scale-105 shadow-blue-900/10' : 'z-[1] scale-100 opacity-90'"
                 @mouseenter="active = 1">
                <div class="w-full h-40 bg-slate-50 rounded-3xl mb-4 flex items-center justify-center overflow-hidden">
                     <!-- High-res professional portrait (light/white studio bg) -->
                     <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=80&w=400&auto=format&fit=crop" class="w-full h-full object-cover object-top" alt="Fatima">
                </div>
                <h3 class="font-bold text-slate-900">Fatima A.</h3>
                <p class="text-xs text-slate-400 font-medium">Administrative Assistant</p>
            </div>

            <!-- Box 2: Shezil (Active: 2) -->
            <div class="absolute right-12 top-24 w-64 bg-white rounded-[40px] p-8 shadow-2xl border border-gray-50 animate-float transition-all duration-500 cursor-pointer hover:z-[15] hover:scale-110"
                 style="animation-delay: 1s;"
                 :class="active === 2 ? 'z-[10] scale-105 shadow-blue-900/10' : 'z-[2] scale-100 opacity-90'"
                 @mouseenter="active = 2">
                <div class="w-full h-40 bg-slate-50 rounded-3xl mb-4 flex items-center justify-center overflow-hidden">
                     <!-- Changed to object-center and used a perfectly centered portrait -->
                     <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?q=80&w=400&auto=format&fit=crop" 
                          class="w-full h-full object-cover object-center" 
                          alt="Shezil">
                </div>
                <h3 class="font-bold text-slate-900">Shezil R.</h3>
                <p class="text-xs text-slate-400 font-medium">Patient Care Coordinator</p>
            </div>

            <!-- Box 3: Arsalan (Active: 3) -->
            <div class="absolute right-24 top-48 w-64 bg-white rounded-[40px] p-8 shadow-2xl border border-gray-50 animate-float transition-all duration-500 cursor-pointer hover:z-[15] hover:scale-110"
                 style="animation-delay: 2s;"
                 :class="active === 3 ? 'z-[10] scale-105 shadow-blue-900/10' : 'z-[3] scale-100 opacity-90'"
                 @mouseenter="active = 3">
                <div class="w-full h-40 bg-slate-50 rounded-3xl mb-4 flex items-center justify-center overflow-hidden">
                     <!-- High-res professional portrait (light/white studio bg) -->
                     <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=400&auto=format&fit=crop" class="w-full h-full object-cover object-top" alt="Arsalan">
                </div>
                <h3 class="font-bold text-slate-900">Arsalan K.</h3>
                <p class="text-xs text-slate-400 font-medium">Appointment Scheduler</p>
            </div>
            
            <!-- Animated Badge -->
            <div class="absolute -right-4 bottom-12 bg-white border border-slate-50 px-6 py-3 rounded-2xl font-bold shadow-2xl z-[20] text-sm text-[#7C3AED] animate-bounce">
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

<!-- SECTION 2: LOGO TICKER -->
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
            <li class="w-1/2 md:w-1/4 flex-shrink-0 px-8"><img src="{{ asset('storage/media/D0IWUCKlfIN2B7ru7kkDF36htzoi3kJjiyD0Gn2X.webp') }}" class="h-20 w-full object-contain grayscale hover:grayscale-0 transition-all duration-300" alt="Logo"></li>
            <li class="w-1/2 md:w-1/4 flex-shrink-0 px-8"><img src="{{ asset('storage/media/WAc7RiBMw34XQirhMT373U9xfekN8W5KXsxZBpCr.webp') }}" class="h-20 w-full object-contain grayscale hover:grayscale-0 transition-all duration-300" alt="Logo"></li>
            <li class="w-1/2 md:w-1/4 flex-shrink-0 px-8"><img src="{{ asset('storage/media/BrLQUqJbpIWzf83XIopM6zKU1dUxravZWY94zpjn.webp') }}" class="h-20 w-full object-contain grayscale hover:grayscale-0 transition-all duration-300" alt="Logo"></li>
            <li class="w-1/2 md:w-1/4 flex-shrink-0 px-8"><img src="{{ asset('storage/media/TcR3QfnKhnHAJyAq3NOlDuy7Sq1oj4G0owO50DLR.webp') }}" class="h-20 w-full object-contain grayscale hover:grayscale-0 transition-all duration-300" alt="Logo"></li>
            <li class="w-1/2 md:w-1/4 flex-shrink-0 px-8"><img src="{{ asset('storage/media/Cs9xaywMjCMdqJELzjw7rWuu2nbEUvAMjKsuYkLc.webp') }}" class="h-20 w-full object-contain grayscale hover:grayscale-0 transition-all duration-300" alt="Logo"></li>
            <li class="w-1/2 md:w-1/4 flex-shrink-0 px-8"><img src="{{ asset('storage/media/rNJ6gBO6TrKIwDqcMgHJaWrAN4UBWBMK7scB0Bxg.webp') }}" class="h-20 w-full object-contain grayscale hover:grayscale-0 transition-all duration-300" alt="Logo"></li>

            <!-- Set items to 1/5th width (20% each) to ensure 5 show at once -->
            <li class="w-1/2 md:w-1/4 flex-shrink-0 px-8"><img src="{{ asset('storage/media/D0IWUCKlfIN2B7ru7kkDF36htzoi3kJjiyD0Gn2X.webp') }}" class="h-20 w-full object-contain grayscale hover:grayscale-0 transition-all duration-300" alt="Logo"></li>
            <li class="w-1/2 md:w-1/4 flex-shrink-0 px-8"><img src="{{ asset('storage/media/WAc7RiBMw34XQirhMT373U9xfekN8W5KXsxZBpCr.webp') }}" class="h-20 w-full object-contain grayscale hover:grayscale-0 transition-all duration-300" alt="Logo"></li>
            <li class="w-1/2 md:w-1/4 flex-shrink-0 px-8"><img src="{{ asset('storage/media/BrLQUqJbpIWzf83XIopM6zKU1dUxravZWY94zpjn.webp') }}" class="h-20 w-full object-contain grayscale hover:grayscale-0 transition-all duration-300" alt="Logo"></li>
            <li class="w-1/2 md:w-1/4 flex-shrink-0 px-8"><img src="{{ asset('storage/media/TcR3QfnKhnHAJyAq3NOlDuy7Sq1oj4G0owO50DLR.webp') }}" class="h-20 w-full object-contain grayscale hover:grayscale-0 transition-all duration-300" alt="Logo"></li>
            <li class="w-1/2 md:w-1/4 flex-shrink-0 px-8"><img src="{{ asset('storage/media/Cs9xaywMjCMdqJELzjw7rWuu2nbEUvAMjKsuYkLc.webp') }}" class="h-20 w-full object-contain grayscale hover:grayscale-0 transition-all duration-300" alt="Logo"></li>
            <li class="w-1/2 md:w-1/4 flex-shrink-0 px-8"><img src="{{ asset('storage/media/rNJ6gBO6TrKIwDqcMgHJaWrAN4UBWBMK7scB0Bxg.webp') }}" class="h-20 w-full object-contain grayscale hover:grayscale-0 transition-all duration-300" alt="Logo"></li>
        </ul>
    </div>

    <!-- Subtext -->
    <div class="text-center mt-10 px-6">
        <p class="text-gray-500 text-[15px] leading-relaxed max-w-lg mx-auto">Built for efficiency, accuracy, and speed to help you deliver better care without the administrative burden.</p>
    </div>
</section>

<section class="max-w-6xl mx-auto px-6 py-20 text-center antialiased">
    <!-- Badge -->
    <div class="inline-flex px-3 py-1 mb-6 text-[11px] font-bold text-primary uppercase tracking-widest bg-indigo-50/50 rounded-full border border-indigo-100">
        Accelerated Hiring for Healthcare Teams
    </div>

    <!-- Title & Desc -->
    <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 tracking-tighter mb-4 capitalize">
        SMART SUPPORT FOR HEALTHCARE TEAMS  
    </h2>
    <p class="text-gray-500 mb-10 max-w-lg mx-auto leading-relaxed">
        VMA professionals are backed by expertise in EHR systems, ICD-10, and CPT processes, and integrate into your workflow to support efficient healthcare operations. 
    </p>

    <!-- Grid: 3 Columns -->
    <div class="grid md:grid-cols-3 gap-6 text-left" id="services-grid">
        @php
            $roles = [
                [
                    'title' => 'Front Desk Expert', 
                    'desc' => 'Manages initial patient intake, verifies registration data, and coordinates clinic front-office scheduling.', 
                    'url' => '/services/front-desk-expert',
                    'icon' => 'M 2 18 h 20 M 12 4 v 4 M 12 8 a 8 8 0 0 0 -8 8 h 16 a 8 8 0 0 0 -8 -8 z' // Concierge Service Bell
                ],
                [
                    'title' => 'Virtual Medical Scribes', 
                    'desc' => 'Accurately documents patient encounters, updates EHR charts in real-time, and assists during live consultations.', 
                    'url' => '/services/virtual-medical-scribing',
                    'icon' => 'M 12 20 h 9 M 16.5 3.5 a 2.121 2.121 0 0 1 3 3 L 7 19 l -4 1 l 1 -4 L 16.5 3.5 z' // Pencil writing/Scribing
                ],
                [
                    'title' => 'Virtual Medical Receptionist', 
                    'desc' => 'Handles inbound patient calls, manages complex calendar scheduling, and answers general clinic inquiries.', 
                    'url' => '/services/medical-receptionist',
                    'icon' => 'M 22 16.92 v 3 a 2 2 0 0 1 -2.18 2 a 19.79 19.79 0 0 1 -8.63 -3.07 a 19.5 19.5 0 0 1 -6 -6 a 19.79 19.79 0 0 1 -3.07 -8.67 A 2 2 0 0 1 4.11 2 h 3 a 2 2 0 0 1 2 1.72 a 12.06 12.06 0 0 0 .57 2.4 a 2 2 0 0 1 -.45 2.11 L 8.09 9.91 a 16 16 0 0 0 6 6 l 1.27 -1.27 a 2 2 0 0 1 2.11 -.45 a 12.06 12.06 0 0 0 2.4 .57 A 2 2 0 0 1 22 16.92 z' // Phone Receiver
                ],
                [
                    'title' => 'Remote Patient Monitoring', 
                    'desc' => 'Tracks physiological data from home devices, alerts providers of vital changes, and ensures patient compliance.', 
                    'url' => '/services/remote-patient-monitoring',
                    'icon' => 'M 22 12 h -4 l -3 9 L 9 3 l -3 9 H 2' // EKG Pulse line
                ],
                [
                    'title' => 'Virtual Chronic Care Management', 
                    'desc' => 'Coordinates continuous monthly outreach, tracks care plans, and monitors progress for patients with chronic illnesses.', 
                    'url' => '/services/virtual-chronic-care-management',
                    'icon' => 'M 20.84 4.61 a 5.5 5.5 0 0 0 -7.78 0 L 12 5.67 l -1.06 -1.06 a 5.5 5.5 0 0 0 -7.78 7.78 l 1.06 1.06 L 12 21.23 l 7.78 -7.78 1.06 -1.06 a 5.5 5.5 0 0 0 0 -7.78 z' // Heart Shape
                ],
                [
                    'title' => 'Provider and Payer Credentialing', 
                    'desc' => 'Monitors patient health remotely to support timely interventions and improve care outcomes.', 
                    'url' => '/services/provider-and-payers-credentialing',
                    'icon' => 'M 16 4 h 2 a 2 2 0 0 1 2 2 v 14 a 2 2 0 0 1 -2 2 H 6 a 2 2 0 0 1 -2 -2 V 6 a 2 2 0 0 1 2 -2 h 2 M 9 2 h 6 M 9 14 l 2 2 l 4 -4' // Clipboard Check
                ],
                [
                    'title' => 'Pre Authorization Service', 
                    'desc' => 'Submits prior authorizations to insurance payers, coordinates medical necessity appeals, and prevents denials.', 
                    'url' => '/services/pre-authorization-services',
                    'icon' => 'M 14.5 2 H 6 a 2 2 0 0 0 -2 2 v 16 a 2 2 0 0 0 2 2 h 12 a 2 2 0 0 0 2 -2 V 7.5 L 14.5 2 z M 14 2 v 5 h 5 M 10 13 a 3 3 0 1 0 0 -6 a 3 3 0 0 0 0 6 z M 19 19 l -3.5 -3.5' // File Search / Audit Document
                ],
                [
                    'title' => 'Medical Billing and Coding', 
                    'desc' => 'Translates medical records into ICD-10 and CPT codes, submits claims, and maximizes reimbursement velocity.', 
                    'url' => '/services/medical-billing-and-coding',
                    'icon' => 'M 14 2 H 6 a 2 2 0 0 0 -2 2 v 16 a 2 2 0 0 0 2 2 h 12 a 2 2 0 0 0 2 -2 V 8 z M 14 2 v 6 h 6 M 8 13 l -2 2 l 2 2 M 16 13 l 2 -2 l -2 -2 M 13 12 l -2 6' // File Code (< >)
                ],
                [
                    'title' => 'Eligibility and Benefits Verifications', 
                    'desc' => 'Validates patient coverage, co-pays, and deductibles with insurance portals prior to scheduled appointments.', 
                    'url' => '/services/eligibility-and-benefits-verification',
                    'icon' => 'M 12 22 s 8 -4 8 -10 V 5 l -8 -3 l -8 3 v 7 c 0 6 8 10 8 10 z M 9 11 l 2 2 l 4 -4' // Shield Check
                ],
                [
                    'title' => 'Account Receivable Service', 
                    'desc' => 'Audits outstanding claims, manages secondary billing submissions, and negotiates recovery of aged accounts.', 
                    'url' => '/services/account-receivable-services',
                    'icon' => 'M 22 11 V 3 h -8 M 22 3 L 12 13 l -4 -4 L 2 17' // Trending Up Chart
                ],
                [
                    'title' => 'Virtual Administrative Service', 
                    'desc' => 'Delivers comprehensive email management, database records organization, and daily operational support.', 
                    'url' => '/services/virtual-administrative-assistant',
                    'icon' => 'M 22 19 a 2 2 0 0 1 -2 2 H 4 a 2 2 0 0 1 -2 -2 V 5 a 2 2 0 0 1 2 -2 h 5 l 2 3 h 7 a 2 2 0 0 1 2 2 z' // Folder/Database Organizer
                ]
            ];
        @endphp

        @foreach($roles as $role)
            <!-- Parent Card (Adds class "hidden" to items starting from index 6) -->
            <div style="--primary: {{ $page->primary_color ?? '#4f46e5' }};" 
                 class="service-card relative bg-white p-8 rounded-3xl border border-gray-100 shadow-sm transition-all overflow-hidden hover:shadow-lg group flex flex-col justify-between hover:-translate-y-1 {{ $loop->index >= 6 ? 'hidden' : '' }}">
                
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
                   class="inline-flex items-center font-bold text-sm transition-all duration-300 hover:opacity-80 text-[var(--primary)] decoration-transparent">
                    Learn More 
                    <span class="ml-1 group-hover:translate-x-1 transition-transform">→</span>
                </a>
            </div>
        @endforeach
    </div>

    <!-- View More Button -->
    <div class="text-center mt-12">
        <button id="view-more-services-btn" class="inline-flex items-center justify-center px-8 py-3 rounded-full border border-gray-200 text-[#111827] hover:bg-gray-50 text-[14px] font-bold transition-all duration-300 shadow-sm cursor-pointer">
            View More Services
        </button>
    </div>
</section>

<!-- Progressive Loader Script -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const viewMoreBtn = document.getElementById('view-more-services-btn');
        const increment = 3; // Reveals 3 more cards on each click (keeps a balanced 3-column layout)

        if (viewMoreBtn) {
            viewMoreBtn.addEventListener('click', function () {
                // Find all currently hidden service cards
                const hiddenCards = document.querySelectorAll('.service-card.hidden');

                // Reveal the next batch
                for (let i = 0; i < Math.min(increment, hiddenCards.length); i++) {
                    hiddenCards[i].classList.remove('hidden');
                }

                // Hide the button if no more hidden cards remain
                if (document.querySelectorAll('.service-card.hidden').length === 0) {
                    viewMoreBtn.style.display = 'none';
                }
            });
        }
    });
</script>

<section class="py-24 px-6 bg-gray-50 text-center">
    <!-- Outer Wrapper -->
    <div class="max-w-1xl mx-auto">
        
        <!-- Badge -->
        <div class="inline-flex items-center gap-1.5 px-4 py-1.5 bg-emerald-50/50 text-emerald-600 rounded-full text-[12px] font-bold border border-emerald-100 mb-3">
            <span class="text-xs text-[13px] leading-relaxed">✔</span> Built for teams new to remote staffing
        </div>

        <!-- Headline - Matching your spacing and size -->
        <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 tracking-tight leading-[1.1] mb-6 capitalize">
            Hiring remote healthcare professionals for the first time? <br>
            <span class="text-primary">You're in the right place.</span>
        </h2>

        <!-- Paragraph - Adjusted to create the 4-line flow -->
        <p class="text-gray-500 text-[15px] leading-6 md:leading-6 max-w-lg mx-auto">            
            From your first hire to a growing remote team, we make every step straightforward with secure processes, reliable support, and a seamless onboarding experience. 
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
            Built for Better Healthcare Operations  <br class="hidden md:block">
            <span class="text-primary">Less administration. More time for patient care. </span>
        </h2>
        <p class="text-gray-500 text-base max-w-md mx-auto">
             VMA simplify operations with structured workflows, built-in compliance, and complete visibility across your remote team.
        </p>
    </div>

    <!-- 2x3 Grid for Cards -->
    <div class="grid md:grid-cols-3 gap-10">
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
                    ['num' => '1', 'title' => 'Tell Us What You Need', 'desc' => 'Share your staffing requirements, roles, and workflow. VMA will identify qualified remote healthcare professionals that match your needs.', 'day' => 'Day 1'],
                    ['num' => '2', 'title' => 'Review Your Top Candidates', 'desc' => 'Meet pre-screened professionals, interview at your convenience, and move forward with the right fit.', 'day' => 'Days 2-3'],
                    ['num' => '3', 'title' => 'Get Your Team Started', 'desc' => 'VMA handles onboarding, equipment, and payroll, so your team can get to work from day one.', 'day' => 'Day 7']
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
                    VMA doesn’t just find people; it certifies them. Through our 2-week "VMA  Edu" program, your new hire learns tools and rules before their first day.
                </p>

                <!-- Stats Grid -->
                <div class="grid grid-cols-2 gap-4">
                    @php
                        $stats = [
                            ['val' => 'Top 1-3%', 'label' => 'Only the best make it in.'],
                            ['val' => '2-Week Training', 'label' => 'They’re experts before day one.'],
                            ['val' => '98.7% Retention Rate', 'label' => 'Our team members stick around.'],
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
                            @foreach(['Ecw', 'Epic', 'Athena Health', 'Advance MD', 'Nextgen', 'Ring Central'] as $tag)
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
                            @foreach(['HIPAA', 'BAA', 'SOC 2 Type II', 'ISO 27001', 'GDPR standards'] as $tag)
                                <span class="px-2 py-1 rounded-full bg-[#ECFDF5] text-[#059669] text-[12px] font-medium border border-[#D1FAE5]">
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

<section class="max-w-6xl mx-auto px-6 py-20 bg-white antialiased">
    <div class="max-w-7xl mx-auto text-center">
        
        <!-- Transparent Pricing Pill Badge -->
        <span class="inline-block px-5 py-2 rounded-full bg-[var(--primary,#7c3aed)]/10 text-[var(--primary,#7c3aed)] text-[11px] font-bold uppercase tracking-[0.12em] mb-8 border border-[var(--primary,#7c3aed)]/20">
            Subscription Plan
        </span>

        <!-- Main Heading -->
        <h2 class="text-[#111827] text-[32px] sm:text-[42px] md:text-[50px] font-[900] leading-[1.1] tracking-[-0.04em] mb-4 capitalize">
            Pricing without the surprises. Pay what you see!<span class="text-[var(--primary,#7c3aed)]"> With VMA</span>  
        </h2>

        <!-- Subheading -->
        <p class="text-gray-500 text-[15px] md:text-[17px] leading-relaxed max-w-2xl mx-auto mb-16 font-medium">
            Transparent Costs. Trusted Partnership.
        </p>

        <!-- Pricing Cards Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            
            @php
                $fees = [
                    ['amount' => '$1,500', 'label' => 'Startup Fees'],
                    ['amount' => '$2,800', 'label' => 'Hardware Overhead'],
                    ['amount' => '$3,500', 'label' => 'Talent Acquisition'],
                    ['amount' => '$1,200', 'label' => 'Certification Cost'],
                ];
            @endphp

            @foreach($fees as $fee)
                <div class="bg-[#F8F9FA] border border-gray-100 rounded-[24px] py-10 px-6 flex flex-col items-center justify-center transition-all duration-300 hover:shadow-xl hover:shadow-[#10B981]/5 hover:-translate-y-1 group">
                    
                    <!-- Fee Amount -->
                    <span class="text-primary text-[40px] md:text-[46px] font-[900] leading-none mb-3 tracking-tight transition-transform duration-300 group-hover:scale-105">
                        {{ $fee['amount'] }}
                    </span>
                    
                    <!-- Fee Label -->
                    <span class="text-gray-500 text-[14px] font-semibold tracking-wide">
                        {{ $fee['label'] }}
                    </span>
                    
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
            Hire your next Healthcare Team <br>
            in <span class="bg-gradient-to-r from-[#000] via-[#000] to-[#000] bg-clip-text text-transparent">just 5 days</span>
        </h2>

        <!-- Subheading -->
        <p class="text-white/80 text-[13px] md:text-[16px] leading-relaxed max-w-2xl mx-auto mb-8 font-normal">
            Connect with remote medical professionals and get your team up.
            <br class="hidden md:block">
            Fast. Flexible. Trusted. 
        </p>

        <!-- CTA Button -->
        <div class="mb-6">
            <a href="/contact" class="inline-flex items-center gap-2 bg-white text-black px-8 py-4 rounded-xl font-bold text-[17px] transition-transform hover:scale-105">
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