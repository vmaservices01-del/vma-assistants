@extends('frontend.layouts.app')

@section('content')   

    <!-- Content -->

<section id="hero-section" class="w-full flex items-center min-h-[calc(100vh-100px)] py-12 lg:py-14">
    <div class="max-w-[1200px] mx-auto px-6 grid lg:grid-cols-2 gap-8 lg:gap-16 items-center">
        
        <!-- Left Side -->
        <div class="max-w-xl">
                    <!-- Professional Dynamic Badge -->
                        <div x-data="{
                    messages: [
                        'Compliant & secure capacity ready now', 
                        'Launch remote healthcare support in 7 days', 
                        'Certified Medical Transcriptionists available'
                    ],
                    currentIndex: 0,
                    init() { 
                        setInterval(() => { this.currentIndex = (this.currentIndex + 1) % this.messages.length }, 5000) 
                    }
                }" 
                class="inline-flex items-center gap-3 px-4 py-2 bg-indigo-50/40 border border-indigo-100/60 rounded-full mb-10 w-fit group shadow-sm shadow-indigo-100/20 transition-all hover:bg-indigo-50">
                
                <!-- Status Indicator: Uses your Primary Lilac for the 'Active' dot -->
                <div class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#7C3AED] opacity-40"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-[#7C3AED]"></span>
                </div>

                <!-- Ticker Container -->
                <div class="relative h-5 overflow-hidden min-w-[250px] sm:min-w-[280px]">
                    <template x-for="(msg, index) in messages" :key="index">
                        <span 
                            x-show="currentIndex === index"
                            x-text="msg"
                            x-transition:enter="transition ease-out duration-500"
                            x-transition:enter-start="opacity-0 translate-y-4"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease-in duration-300 absolute"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 -translate-y-4"
                            class="block text-[11px] sm:text-[12px] font-bold text-indigo-900/80 tracking-tight whitespace-nowrap uppercase"
                        ></span>
                    </template>
                </div>
            </div>

            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold tracking-tighter leading-[1] mb-6 capitalize">
                 <span class="text-gray-900">Prioritize your patients.</span><br>
                <span class="text-primary">Minimize operational workload.</span>
            </h1>

            <p class="text-black text-[16px] leading-relaxed mb-8 max-w-lg">
               VMA recruits, trains, and manages reliable remote healthcare professionals including medical transcriptionists, virtual medical assistants, and documentation specialists. Our team is experienced with leading EHR platforms to support smooth day-to-day operations.
            </p>

            <div class="flex flex-col sm:flex-row gap-3">
                <button class="bg-primary transition-all duration-300 hover:opacity-80 text-white font-bold py-3.5 px-6 rounded-lg transition-all shadow-md">Schedule a Consultation →</button>
                <button class="bg-white border border-gray-200 hover:bg-gray-50 text-black font-medium py-3.5 px-6 rounded-lg transition-all">Explore Support Roles</button>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-y-3 gap-x-6 text-sm mt-5 text-black">
                <div class="flex items-center gap-2"><span class="text-green-500">✔</span> No charges until you onboard</div>
                <div class="flex items-center gap-2"><span class="text-green-500">✔</span> Secure workflows from Day 1</div>
                <div class="flex items-center gap-2"><span class="text-green-500">✔</span> HIPAA compliant transcription</div>
                <div class="flex items-center gap-2"><span class="text-green-500">✔</span> Built for any sized clinic</div>
            </div>
        </div>

        <!-- Right Side -->
        <!-- Right Side: The Image + Animations -->
      	<div class="relative order-1 lg:order-2 flex justify-center items-center mb-16 lg:mb-0">
            
            <!-- Main Container for Image and Badges -->
            <div class="relative w-full max-w-[500px]">
                
                <!-- Background Decorative Glow -->
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[350px] h-[350px] bg-[var(--primary)]/10 rounded-full blur-[100px] -z-10 animate-pulse"></div>

                <!-- YOUR IMAGE FROM STORAGE -->
                <div class="relative z-20 transition-transform duration-700 hover:scale-[1.02]">
                    <img src="{{ asset('storage/media/X72701IIV8sbfOlH6SkQiwuydgYUBp6rFXp7cgGu.png') }}" 
                         alt="Clinical Professional" 
                         class="w-full h-auto drop-shadow-[0_20px_50px_rgba(0,0,0,0.15)]">
                </div>

                <!-- Floating Card 2: Practices Count -->
                <div class="absolute -left-8 bottom-[20%] bg-white/95 backdrop-blur-md p-5 rounded-[24px] shadow-[0_15px_40px_rgba(0,0,0,0.12)] border border-white/40 animate-float-slow z-30">
                   <div class="flex items-center gap-4">
                        <div class="flex -space-x-3">
                            <div class="w-10 h-10 rounded-full border-2 border-white bg-indigo-100 flex items-center justify-center text-[10px] font-bold">DR</div>
                            <div class="w-10 h-10 rounded-full border-2 border-white bg-emerald-100 flex items-center justify-center text-[10px] font-bold">AK</div>
                        </div>
                        <div>
                            <div class="text-[11px] text-black font-bold uppercase tracking-wider leading-none mb-1">Trusted remote staffing by</div>
                            <div class="text-[18px] font-[900] text-black leading-none tracking-tight">500+ Clinics</div>
                        </div>
                   </div>
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

<section class="max-w-6xl mx-auto px-6 py-20 text-center">
    <!-- Badge -->
    <div class="inline-flex px-3 py-1 mb-6 text-[9px] font-bold text-primary uppercase tracking-widest bg-indigo-50/50 rounded-full border border-indigo-100">
       Scale faster. Practice better. 
    </div>

    <!-- Title & Desc -->
    <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 tracking-tighter mb-4 capitalize">
        Expand healthcare operations with reliable support.
    </h2>
    <p class="text-black mb-10 max-w-lg mx-auto leading-relaxed">
        VMA professionals are trained in EHR workflows, medical documentation, ICD-10 processes, and clinical coordination.
    </p>

    <!-- Browse Button -->
    <button class="mb-16 border-2 border-gray-200 hover:border-gray-300 px-6 py-3 rounded-xl font-semibold transition-all">
        View Healthcare Roles →
    </button>

    <!-- Grid: 3 Columns -->
    <div class="grid md:grid-cols-3 gap-6 text-left">
        @php
            $roles = [
                [
                    'title' => 'Medical Transcriptionist', 
                    'desc' => 'Converts recorded medical notes into clear, accurate, and organized documentation.', 
                    'url' => '/roles/receptionist',
                    'icon' => 'M 12 1 a 3 3 0 0 0 -3 3 v 8 a 3 3 0 0 0 6 0 V 4 a 3 3 0 0 0 -3 -3 z M 19 10 v 2 a 7 7 0 0 1 -14 0 v -2 M 12 19 v 4 M 8 23 h 8' // Microphone (audio transcription)
                ],
                [
                    'title' => 'Virtual Medical Assistant', 
                    'desc' => 'Supports scheduling, coordination, and daily administrative healthcare tasks remotely.', 
                    'url' => '/roles/coder',
                    'icon' => 'M 4 21 h 16 a 2 2 0 0 0 2 -2 V 5 a 2 2 0 0 0 -2 -2 H 4 a 2 2 0 0 0 -2 2 v 14 a 2 2 0 0 0 2 2 z M 2 10 h 20 M 12 6 v 6 M 10 9 h 4' // Remote desktop support with medical cross
                ],
                [
                    'title' => 'Medical Scribe', 
                    'desc' => 'Records patient visits and updates documentation during virtual or in-person consultations.', 
                    'url' => '/roles/scribe',
                    'icon' => 'M 12 20 h 9 M 16.5 3.5 a 2.121 2.121 0 0 1 3 3 L 7 19 l -4 1 l 1 -4 L 16.5 3.5 z' // Pencil writing/Scribing
                ],
                [
                    'title' => 'Clinical Documentation Specialist', 
                    'desc' => 'Maintains accurate patient records while supporting compliant clinical workflows.', 
                    'url' => '/roles/scribe',
                    'icon' => 'M 14 2 H 6 a 2 2 0 0 0 -2 2 v 16 a 2 2 0 0 0 2 2 h 12 a 2 2 0 0 0 2 -2 V 8 z M 14 2 v 6 h 6 M 16 13 H 8 M 16 17 H 8 M 10 9 H 8' // Structured clinical document page
                ],
                [
                    'title' => 'EMR Documentation Assistant', 
                    'desc' => 'Updates and manages electronic medical records with accuracy and efficiency.', 
                    'url' => '/roles/scribe',
                    'icon' => 'M 4 21 h 16 a 2 2 0 0 0 2 -2 V 5 a 2 2 0 0 0 -2 -2 H 4 a 2 2 0 0 0 -2 2 v 14 a 2 2 0 0 0 2 2 z M 2 10 h 20 M 6 6 h 1 M 10 6 h 1 M 14 6 h 1' // EMR Software dashboard monitor screen
                ],  
                [
                    'title' => 'Remote Patient Support Assistant', 
                    'desc' => 'Provides administrative assistance and communication support for patient care operations.', 
                    'url' => '/roles/scribe',
                    'icon' => 'M 21 15 a 2 2 0 0 1 -2 2 H 7 l -4 4 V 5 a 2 2 0 0 1 2 -2 h 14 a 2 2 0 0 1 2 2 z' // Chat bubble messaging
                ],              
                [
                    'title' => 'Healthcare Coordinator', 
                    'desc' => 'Assists with patient communication, scheduling, and operational support for healthcare teams.', 
                    'url' => '/roles/receptionist',
                    'icon' => 'M 8 2 v 4 M 16 2 v 4 M 3 10 h 18 M 5 4 h 14 a 2 2 0 0 1 2 2 v 14 a 2 2 0 0 1 -2 2 H 5 a 2 2 0 0 1 -2 -2 V 6 a 2 2 0 0 1 2 -2 z M 9 16 l 2 2 4 -4' // Coordination Calendar Checklist
                ],
                [
                    'title' => 'HIPAA Compliance Support', 
                    'desc' => 'Helps maintain secure documentation processes aligned with healthcare compliance standards.', 
                    'url' => '/roles/coder',
                    'icon' => 'M 19 11 H 5 a 2 2 0 0 0 -2 2 v 7 a 2 2 0 0 0 2 2 h 14 a 2 2 0 0 0 2 -2 v -7 a 2 2 0 0 0 -2 -2 z M 7 11 V 7 a 5 5 0 0 1 10 0 v 4' // Padlock security
                ],
                [
                    'title' => 'Medical Billing Assistant', 
                    'desc' => 'Helps organize billing information, coding details, and insurance-related documentation.', 
                    'url' => '/roles/scribe',
                    'icon' => 'M 14 2 H 6 a 2 2 0 0 0 -2 2 v 16 a 2 2 0 0 0 2 2 h 12 a 2 2 0 0 0 2 -2 V 8 z M 14 2 v 6 h 6 M 8 12 h 8 M 8 16 h 5' // Statement invoice sheet
                ],                
                [
                    'title' => 'Medical Records Specialist', 
                    'desc' => 'Organizes, reviews, and maintains patient files with accuracy and confidentiality.', 
                    'url' => '/roles/scribe',
                    'icon' => 'M 22 19 a 2 2 0 0 1 -2 2 H 4 a 2 2 0 0 1 -2 -2 V 5 a 2 2 0 0 1 2 -2 h 5 l 2 3 h 9 a 2 2 0 0 1 2 2 z M 2 10 h 20' // File Folder
                ],
                [
                    'title' => 'Prior Authorization Assistant', 
                    'desc' => 'Supports authorization workflows and documentation for faster patient processing.', 
                    'url' => '/roles/scribe',
                    'icon' => 'M 21 2 L 11 12 M 21 2 v 6 M 21 2 h -6 M 11 12 a 5 5 0 1 0 -7.07 7.07 a 5 5 0 0 0 7.07 -7.07 z' // Key (Approvals/Authorizations)
                ],
                [
                    'title' => 'Healthcare Administrative Assistant', 
                    'desc' => 'Handles day-to-day operational tasks to help healthcare practices run more smoothly.', 
                    'url' => '/roles/receptionist',
                    'icon' => 'M 8 2 v 4 M 16 2 v 4 M 3 10 h 18 M 5 4 h 14 a 2 2 0 0 1 2 2 v 14 a 2 2 0 0 1 -2 2 H 5 a 2 2 0 0 1 -2 -2 V 6 a 2 2 0 0 1 2 -2 z M 9 16 l 2 2 4 -4', // Duplicate of Healthcare Coordinator (Coordination calendar)
                ],
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
                    <p class="text-black text-[13px] leading-relaxed mb-6">{{ $role['desc'] }}</p>
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

<section class="max-w-6xl mx-auto px-6 py-20 bg-white antialiased">
    <div class="max-w-7xl mx-auto">
        
        <!-- Section Header -->
        <div class="text-center mb-16">
            <span class="inline-block px-5 py-2 rounded-full bg-[var(--primary)]/10 text-[var(--primary)] text-[11px] font-bold uppercase tracking-[0.12em] mb-10 border border-[var(--primary)]/20">
                EHR Ready Talent
            </span>
            <h2 class="text-[#111827] text-[30px] md:text-[42px] font-[900] leading-[1.1] tracking-[-0.04em] mb-6">
               Certified in the EHR  <span class="text-[var(--primary)]">You Already Use</span>
            </h2>
            <p class="text-black text-[14px] md:text-[16px] leading-relaxed max-w-2xl mx-auto font-normal">
                Stop wasting time on software training. VMA 4-week intensive training program provides vetted and certified in high-volume documentation and  complex billing cycles. We hit the ground running so your clinic never misses a beat.
            </p>
        </div>

        <!-- EHR Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @php
                $ehrList = [
                    ['title' => 'Epic', 'desc' => 'Charting, Order Entry, InBasket, Haiku.', 'icon' => 'building'],
                    ['title' => 'athenahealth', 'desc' => 'Workflows, Collections, Patient Communications.', 'icon' => 'building'],
                    ['title' => 'eClinicalWorks', 'desc' => 'Scheduling, Billing, Portal Management.', 'icon' => 'building'],
                    ['title' => 'CareCloud', 'desc' => 'RCM, Telehealth, Practice Management.', 'icon' => 'building'],
                    ['title' => 'Tebra (Kareo)', 'desc' => 'Billing, Engagement, Patient Scheduling.', 'icon' => 'building'],
                    ['title' => 'RingCentral', 'desc' => 'VOIP, Communications, Call Routing.', 'icon' => 'phone'],
                    ['title' => 'Availity / NaviNet', 'desc' => 'Eligibility, Authorizations, Claims Processing.', 'icon' => 'lock'],
                    ['title' => 'Phreesia', 'desc' => 'Intake, Digital Payments, Patient Analytics.', 'icon' => 'chart'],
                ];
            @endphp

            @foreach($ehrList as $ehr)
                <div class="bg-white border border-gray-100 rounded-[24px] p-8 flex flex-col items-center text-center shadow-[0_4px_20px_rgba(0,0,0,0.01)] transition-all duration-300 hover:shadow-xl hover:shadow-[var(--primary)]/5 hover:-translate-y-1 group">
                    
                    <!-- Dynamic Icon Container -->
                    <div class="mb-6 text-[var(--primary)] transition-transform duration-300 group-hover:scale-110">
                        @if($ehr['icon'] == 'building')
                            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" /></svg>
                        @elseif($ehr['icon'] == 'phone')
                            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /></svg>
                        @elseif($ehr['icon'] == 'lock')
                            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 00-2 2zm10-10V7a4 4 0 00-8 0v4h8z" /></svg>
                        @else
                            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" /></svg>
                        @endif
                    </div>

                    <!-- Title -->
                    <h3 class="text-[#111827] text-[18px] font-bold mb-2 tracking-tight">{{ $ehr['title'] }}</h3>
                    
                    <!-- Description -->
                    <p class="text-black text-[12px] leading-relaxed font-normal">
                        {{ $ehr['desc'] }}
                    </p>
                </div>
            @endforeach
        </div>

    </div>
</section>

<section class="max-w-6xl mx-auto py-20 px-6 bg-white antialiased" x-data="{ activeTab: 'ar-management' }">
    <div class="max-w-6xl mx-auto">
        
        <!-- Section Header -->
        <div class="text-center mb-16 lg:mb-20">
            <span class="inline-block px-4 py-1.5 rounded-full text-[11px] font-bold uppercase tracking-[0.2em] mb-6"
                  style="color: var(--primary); background-color: color-mix(in srgb, var(--primary), transparent 90%);">
                VMA Services
            </span>
            <h2 class="text-[#111827] text-[30px] md:text-[42px] font-[900] leading-[1.1] tracking-[-0.04em] max-w-3xl mx-auto">
                Complete Dental Revenue <br class="hidden md:block"> Cycle Management
            </h2>
        </div>

        <div class="flex flex-col lg:flex-row items-start gap-12 lg:gap-20">
            
            <!-- Left Side: Professional Navigation Pills -->
            <div class="w-full lg:w-[35%] flex flex-col gap-3">
                @php
                    $services = [
                        ['id' => 'rcm', 'label' => 'End-to-End RCM Services'],
                        ['id' => 'medical-billing', 'label' => 'Medical Billing'],
                        ['id' => 'ar-management', 'label' => 'AR Management'],
                        ['id' => 'credentialing', 'label' => 'Credentialing Services'],
                    ];
                @endphp

                @foreach($services as $service)
                    <button 
                        @click="activeTab = '{{ $service['id'] }}'"
                        class="w-full text-center lg:text-left px-8 py-5 rounded-full text-[13px] font-[800] uppercase tracking-widest transition-all duration-300 border"
                        :style="activeTab === '{{ $service['id'] }}' 
                                ? 'background-color: var(--primary); border-color: var(--primary); color: white;' 
                                : 'background-color: #F9FAFB; border-color: #F3F4F6; color: #6B7280;'"
                        :class="activeTab === '{{ $service['id'] }}' ? 'shadow-xl shadow-[var(--primary)]/20 scale-[1.02] z-10' : 'hover:bg-gray-100 hover:border-gray-200'"
                    >
                        {{ $service['label'] }}
                    </button>
                @endforeach
            </div>

            <!-- Right Side: Content Area with Unique Data -->
            <div class="w-full lg:w-[65%] min-h-[400px] rounded-[2rem] border border-gray-50 p-2 md:p-8 shadow-[var(--primary)]/20 bg-gray-50">
                
                <!-- 1. End-to-End RCM -->
                <div x-show="activeTab === 'rcm'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4">
                    <h3 class="text-[#111827] text-[20px] md:text-[26px] font-[700] leading-tight mb-6 tracking-tight">Seamless Revenue Operations </h3>
                    <p class="text-black text-[16px] leading-relaxed mb-8 font-normal">We handle the full lifecycle of your claims to  maximize your collection rate and minimize administrative friction.</p>
                    <ul class="space-y-5">
                        <li class="flex items-start gap-4"><span class="mt-2 w-2 h-2 rounded-full flex-shrink-0" style="background-color: var(--primary);"></span><p class="text-black font-normal">Outsource medical transcription services for accurate clinical coding.</p></li>
                        <li class="flex items-start gap-4"><span class="mt-2 w-2 h-2 rounded-full flex-shrink-0" style="background-color: var(--primary);"></span><p class="text-black font-normal">Real-time monitoring of claim status and patient eligibility.</p></li>
                        <li class="flex items-start gap-4"><span class="mt-2 w-2 h-2 rounded-full flex-shrink-0" style="background-color: var(--primary);"></span><p class="text-black font-normal">Comprehensive financial auditing to plug revenue leaks.</p></li>
                    </ul>
                </div>

                <!-- 2. Medical Billing -->
                <div x-show="activeTab === 'medical-billing'" x-cloak x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4">
                    <h3 class="text-[#111827] text-[20px] md:text-[26px] font-[700] leading-tight mb-6 tracking-tight">Precision Billing for Better Cash Flow </h3>
                    <p class="text-black text-[16px] leading-relaxed mb-8 font-normal">We offer affordable medical transcription services and billing expertise that eliminate errors before they lead to denials.</p>
                    <ul class="space-y-5">
                        <li class="flex items-start gap-4"><span class="mt-2 w-2 h-2 rounded-full flex-shrink-0" style="background-color: var(--primary);"></span><p class="text-black font-normal">Meticulous dental coding and clean claim submission.</p></li>
                        <li class="flex items-start gap-4"><span class="mt-2 w-2 h-2 rounded-full flex-shrink-0" style="background-color: var(--primary);"></span><p class="text-black font-normal">Reliable medical transcription company standards for documentation.</p></li>
                        <li class="flex items-start gap-4"><span class="mt-2 w-2 h-2 rounded-full flex-shrink-0" style="background-color: var(--primary);"></span><p class="text-black font-normal">Transparent billing practices that build patient trust.</p></li>
                    </ul>
                </div>

                <!-- 3. AR Management -->
                <div x-show="activeTab === 'ar-management'" x-cloak x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4">
                    <h3 class="text-[#111827] text-[20px] md:text-[26px] font-[700] leading-tight mb-6 tracking-tight">Superior AR Recovery Services </h3>
                    <p class="text-black text-[16px] leading-relaxed mb-8 font-normal">We boost revenue by clearing your aging backlog and speeding up payouts through persistent, professional outreach.</p>
                    <ul class="space-y-5">
                        <li class="flex items-start gap-4"><span class="mt-2 w-2 h-2 rounded-full flex-shrink-0" style="background-color: var(--primary);"></span><p class="text-black font-normal">Targeted action on stalled or short-paid dental insurance filings.</p></li>
                        <li class="flex items-start gap-4"><span class="mt-2 w-2 h-2 rounded-full flex-shrink-0" style="background-color: var(--primary);"></span><p class="text-black font-normal">Decisive cutting of overdue claims in 30/60/90+ day cycles.</p></li>
                        <li class="flex items-start gap-4"><span class="mt-2 w-2 h-2 rounded-full flex-shrink-0" style="background-color: var(--primary);"></span><p class="text-black font-normal">Regular data insights on payment cycles and remaining balances.</p></li>
                    </ul>
                </div>

                <!-- 4. Credentialing -->
                <div x-show="activeTab === 'credentialing'" x-cloak x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4">
                    <h3 class="text-[#111827] text-[20px] md:text-[26px] font-[700] leading-tight mb-6 tracking-tight">Stay Compliant and Accessible </h3>
                    <p class="text-black text-[16px] leading-relaxed mb-8 font-normal">Don’t let paperwork keep you out of network. When you hire virtual medical assistants through the VMA program, we manage the tedious credentialing process for you.</p>
                    <ul class="space-y-5">
                        <li class="flex items-start gap-4"><span class="mt-2 w-2 h-2 rounded-full flex-shrink-0" style="background-color: var(--primary);"></span><p class="text-black font-normal">New and existing provider re-credentialing.</p></li>
                        <li class="flex items-start gap-4"><span class="mt-2 w-2 h-2 rounded-full flex-shrink-0" style="background-color: var(--primary);"></span><p class="text-black font-normal">Maintenance of CAQH profiles and primary source verification.</p></li>
                        <li class="flex items-start gap-4"><span class="mt-2 w-2 h-2 rounded-full flex-shrink-0" style="background-color: var(--primary);"></span><p class="text-black font-normal">Medical transcription services for clinics and transcription services</p></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</section>

<style>
    [x-cloak] { display: none !important; }
</style>

<section class="py-20 px-6 bg-[#F9FAFB] antialiased">
    <div class="max-w-6xl mx-auto">
        
        <!-- Top Header Text -->
        <div class="max-w-sm mx-auto text-center mb-12">
            <p class="text-black text-[14px] md:text-[16px] leading-relaxed font-normal">
              When you partner with VMA, you’re joining a proven platform designed for growth. Healthcare, dental, and insurance organizations rely on minimal overhead with top-tier care.
            </p>
        </div>

        <!-- Stats Card -->
        <div class="bg-white rounded-[2rem] border border-gray-100 shadow-sm flex flex-col md:flex-row items-stretch overflow-hidden">
            
            @php
                $stats = [
                    [
                        'target' => 950,
                        'suffix' => '',
                        'prefix' => '',
                        'label' => 'Empowering practices with 950+ expert remote hires with VMA.',
                        'color' => '#10B981', // Emerald Green
                    ],
                    [
                        'target' => 42,
                        'suffix' => 'M',
                        'prefix' => '$',
                        'label' => 'Edge has saved clients $50M+ in staffing costs - and counting.',
                        'color' => 'var(--primary)', // Dynamic Primary
                    ],
                    [
                        'target' => 500,
                        'suffix' => '',
                        'prefix' => '',
                        'label' => 'Over 500 businesses trust Edge with their remote staffing needs.',
                        'color' => '#3B82F6', // Blue
                    ]
                ];
            @endphp

            @foreach($stats as $index => $stat)
                <div class="flex-1 py-12 px-10 flex flex-col items-center justify-center text-center {{ !$loop->last ? 'border-b md:border-b-0 md:border-r border-gray-100' : '' }}"
                     x-data="{ 
                        current: 0, 
                        target: {{ $stat['target'] }}, 
                        time: 2000,
                        init() {
                            let start = null;
                            const step = (timestamp) => {
                                if (!start) start = timestamp;
                                const progress = Math.min((timestamp - start) / this.time, 1);
                                this.current = Math.floor(progress * this.target);
                                if (progress < 1) {
                                    window.requestAnimationFrame(step);
                                }
                            };
                            window.requestAnimationFrame(step);
                        }
                     }">
                    
                    <!-- Counter Number -->
                    <div class="text-[36px] md:text-[40px] font-[700] leading-none mb-4 tracking-tighter" 
                         style="color: {{ $stat['color'] }};">
                        <span>{{ $stat['prefix'] }}</span><span x-text="current.toLocaleString()">0</span><span>{{ $stat['suffix'] }}</span>
                    </div>

                    <!-- Label -->
                    <p class="text-black text-[14px] md:text-[15px] leading-relaxed max-w-[240px] font-normal">
                        {{ $stat['label'] }}
                    </p>
                </div>
            @endforeach

        </div>
    </div>
</section>

<section class="py-20 px-6 bg-white antialiased">
    <div class="max-w-6xl mx-auto">
        
        <!-- Header Section -->
        <div class="text-center mb-20">
            <h2 class="text-[#111827] text-[30px] md:text-[36px] font-[700] leading-[1.2] tracking-[-0.04em] mb-6">
                Why Partner With VMA Assitant
            </h2>
            <p class="text-black text-[14px] md:text-[16px] leading-relaxed max-w-md mx-auto font-normal">
                Solve your most pressing operational challenges with fast, easy access to specialized, bilingual medical talent.
            </p>
        </div>

        <!-- Features Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-12 gap-y-16">
            @php
                $features = [
                    [
                        'title' => 'Top-Tier Talent',
                        'desc' => 'With a strict selection process, our team is rigorously vetted and ready to excel. Hire virtual medical assistants who bring professional expertise to your practice from day one.'
                    ],
                    [
                        'title' => 'Risk-Free Hiring',
                        'desc' => 'No hidden fees, no long-term commitments. You only pay when you’ve found the right fit. We make finding a reliable medical transcription company partner simple and stress-free.'
                    ],
                    [
                        'title' => 'Payroll & Benefits',
                        'desc' => 'From recruitment to payroll, we manage the administrative details. This allows you to focus on growth while we provide affordable medical transcription services and support.'
                    ],
                    [
                        'title' => 'Pre-Vetted & Trained',
                        'desc' => 'Work with specialists from our exclusive talent pipeline. Our staff is pre-vetted to provide high-quality medical transcription services for clinics with zero learning curve.'
                    ],
                    [
                        'title' => 'Compliance You Trust',
                        'desc' => 'We maintain full compliance with HIPAA and global data security standards. Rest easy knowing your transcription services for doctors are handled with total privacy and security.'
                    ],
                    [
                        'title' => 'Cost-Effective Hiring',
                        'desc' => 'Reduce your overhead significantly. Outsource medical transcription services and staffing at up to 70% less than the cost of typical in-house administrative hires.'
                    ]
                ];
            @endphp

            @foreach($features as $feature)
                <div class="flex flex-col items-center text-center">
                    <!-- Dynamic Outline Circle Icon -->
                    <div class="w-8 h-8 rounded-full border-2 mb-6 flex items-center justify-center transition-transform duration-300 hover:scale-110"
                         style="border-color: var(--primary);">
                        <!-- Simple Dot or Icon can go here, image shows a hollow circle -->
                        <div class="w-2 h-2 rounded-full" style="background-color: var(--primary);"></div>
                    </div>

                    <!-- Title (Dynamic Color) -->
                    <h3 class="text-[17px] font-bold mb-3 tracking-tight" style="color: var(--primary);">
                        {{ $feature['title'] }}
                    </h3>

                    <!-- Description -->
                    <p class="text-black text-[14px] leading-relaxed font-normal px-4">
                        {{ $feature['desc'] }}
                    </p>
                </div>
            @endforeach
        </div>

        <!-- Call to Action Button -->
        <div class="mt-20 text-center">
            <a href="#" 
               class="inline-block px-12 py-4 rounded-2xl text-white font-bold text-[17px] shadow-lg transition-all duration-300 hover:scale-105 hover:brightness-110 active:scale-95"
               style="background-color: var(--primary);">
                Hire Now
            </a>
        </div>

    </div>
</section>

<section class="py-20 px-6 bg-gray-50">
    <div class="max-w-6xl mx-auto">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <div class="inline-flex items-center px-4 py-1 mb-10 text-[11px] font-bold text-primary uppercase tracking-widest bg-indigo-50 rounded-full border border-indigo-100">
                How it works
            </div>
           <h2 class="text-3xl md:text-5xl font-extrabold tracking-[-1.5px] text-gray-800 leading-[1.05] mb-6 word-spacing-[6px]">
              Consult. Match. Onboard. <br>
                <span class="text-primary font-extrabold tracking-[-1.5px] word-spacing-[6px]">
                   All in 7 days.
                </span>
            </h2>
            <p class="text-black text-[15px]">The fastest path from consult to hire. Your first consultation on the first day.</p>
        </div>

        <!-- Grid -->
        <div class="grid md:grid-cols-3 gap-10">
            @php
                $steps = [
                    ['num' => '1', 'title' => 'Tell us what you need', 'desc' => 'Book a Demo to share your practice’s specific goals and EHR platforms. VMA  identifies the perfect matches for your clinic so you can hire virtual medical assistants with total confidence. ', 'day' => 'Day 1'],
                    ['num' => '2', 'title' => 'Interview & Select', 'desc' => 'Review pre-vetted candidates and interview on your schedule. Whether you need reliable medical transcription company support or RCM experts, there are no fees until you find the perfect fit. ', 'day' => 'Days 2-5'],
                    ['num' => '3', 'title' => 'They start. We handle the rest.', 'desc' => 'They begin, and we manage the equipment, payroll, and HIPAA compliance. You get affordable medical transcription services and a dedicated Success Manager to ensure a fully managed experience. ', 'day' => 'Day 7']
                ];
            @endphp

            @foreach($steps as $step)
                <div class="relative flex flex-col items-center text-center">
                    <!-- Circle Number Box -->
                    <div class="w-12 h-12 rounded-full bg-primary text-white flex items-center justify-center font-bold text-lg mb-8 shadow-md">
                        {{ $step['num'] }}
                    </div>

                    <!-- Heading -->
                    <h3 class="text-lg font-bold text-gray-900 mb-3">{{ $step['title'] }}</h3>
                    
                    <!-- Paragraph with precise line height -->
                    <p class="text-black text-[14px] leading-6 mb-8 px-2">
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

<section class="py-20 px-6 bg-white antialiased">
    <div class="max-w-6xl mx-auto">
        
        <!-- Top Badge -->
        <div class="text-center mb-10">
            <span class="inline-block px-5 py-2 rounded-full text-[11px] font-bold uppercase tracking-[0.15em] border"
                  style="color:white; background-color: var(--primary);  border-color: var(--primary);">
                VMA Assistants VS. ALTERNATIVES
            </span>
        </div>

        <!-- Heading -->
        <div class="text-center mb-16">
            <h2 class="text-[#111827] text-[26px] md:text-[36px] font-[900] leading-[1.1] tracking-[-0.04em] capitalize">
                Long-term commitment,  <span style="color: var(--primary);">not a short-term fix.</span>
            </h2>
        </div>

        <!-- Comparison Table Wrapper -->
        <div class="overflow-x-auto pb-4">
            <div class="min-w-[760px] bg-white rounded-[2rem] border border-gray-100 shadow-sm overflow-hidden">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="border-b border-gray-50">
                            <th class="py-8 px-10 text-[11px] font-bold text-black uppercase tracking-widest w-1/2">What You Get</th>
                            <th class="py-8 px-6 text-center text-[11px] font-bold uppercase tracking-widest" style="color: var(--primary);">VMA</th>
                            <th class="py-8 px-6 text-center text-[11px] font-bold text-black uppercase tracking-widest">TRADITIONAL STAFFING</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-50">
                        @php
                            $rows = [
                                ['label' => 'Certified on Epic / athena / eCW', 'edge' => 'check', 'agency' => 'cross'],
                                ['label' => 'ICD-10 / CPT coding trained', 'edge' => 'check', 'agency' => 'dash'],
                                ['label' => 'Full-time, dedicated to one practice', 'edge' => 'check', 'agency' => 'dash'],
                                ['label' => 'HIPAA + BAA + SOC 2 Type II', 'edge' => 'check', 'agency' => 'cross'],
                                ['label' => 'Secure campus + managed equipment', 'edge' => 'check', 'agency' => 'cross'],
                                ['label' => 'Payroll, HR, benefits included', 'edge' => 'check', 'agency' => 'cross'],
                                ['label' => '97%+ retention rate', 'edge' => 'check', 'agency' => 'cross'],
                            ];
                        @endphp

                        @foreach($rows as $row)
                        <tr>
                            <td class="py-6 px-10 text-black text-[14px] font-medium">{{ $row['label'] }}</td>
                            
                            <!-- Edge Column -->
                            <td class="py-6 px-6 text-center">
                                <div class="flex justify-center">
                                    <div class="w-7 h-7 rounded-full bg-emerald-50 flex items-center justify-center text-emerald-500">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3"><path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    </div>
                                </div>
                            </td>

                            <!-- Agency Column -->
                            <td class="py-6 px-6 text-center">
                                <div class="flex justify-center">
                                    @if($row['agency'] == 'cross')
                                        <div class="w-7 h-7 rounded-full bg-red-50 flex items-center justify-center text-red-400">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3"><path d="M6 18L18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </div>
                                    @else
                                        <div class="w-7 h-7 rounded-full bg-orange-50 flex items-center justify-center text-orange-300 font-black text-xs">
                                            -
                                        </div>
                                    @endif
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Mobile Hint (Only visible on small screens) -->
        <p class="lg:hidden text-center text-gray-400 text-[12px] mt-4">← Swipe to compare →</p>

    </div>
</section>

<section class="py-20 px-6 bg-primary antialiased text-center">
    <div class="max-w-4xl mx-auto">
        
        <!-- Limited Spot Badge -->
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-white/10 bg-white/5 mb-10">
            <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
            <span class="text-white/90 text-[13px] font-medium tracking-wide">
                Only a few onboarding slots left.
            </span>
        </div>

        <!-- Main Heading -->
        <h2 class="text-white text-[42px] md:text-[46px] font-extrabold leading-[1.1] tracking-[-0.03em] mb-6 capitalize">
            Meet your new team member by  <br>
            <span class="bg-gradient-to-r from-[#000] via-[#000] to-[#000] bg-clip-text text-transparent">next week.</span>
        </h2>

        <!-- Subheading -->
        <p class="text-white text-[13px] md:text-[16px] leading-relaxed max-w-2xl mx-auto mb-8 font-normal">
            Book a Consultation. Meet your perfect match at zero cost, zero risk and total transparency. Free Preview with no pre-hire contract.
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
        <div class="max-w-3xl mx-auto flex flex-wrap justify-center items-center gap-x-4 gap-y-4">
            @php
                $benefits = [
                    'Pay only when you hire.',
                    'No long-term contract lock-in.',
                    'Guaranteed talent replacement included.',
                    'See a quick, live demo.',
                    'Flexible service, cancel anytime.'
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