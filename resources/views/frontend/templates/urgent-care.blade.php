@extends('frontend.layouts.app')

@section('content')   

    <!-- Content -->

<!-- Main Hero Wrapper: min-h-screen makes it fill the whole first screen -->
<section class="relative w-full min-h-screen flex items-center bg-white overflow-hidden py-12 lg:py-0">
    
    <!-- Content Container: max-w-7xl handles side spacing -->
    <div class="max-w-6xl mx-auto px-6 lg:px-8 w-full grid lg:grid-cols-2 gap-12 items-center">
        
        <!-- LEFT SIDE: Content -->
        <div class="flex flex-col justify-center">
            <!-- Green Badge -->
            <div class="inline-flex items-center gap-2 px-4 py-1.5 bg-[#f0fdf4] text-[#059669] rounded-full text-xs font-semibold border border-[#dcfce7] mb-6 w-fit">
                <span class="w-1.5 h-1.5 rounded-full bg-[#10b981]"></span>
                10+ healthcare practices hired VMA urgent care support team
            </div>

            <!-- Heading -->
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-[1.05] tracking-tight text-[#0F172A] mb-6 font-gnarly capitalize">
                Let urgent care teams  <br>
                focus on patients, <span class="text-[#7C3AED]">not paperwork.</span>
            </h1>

            <!-- Description -->
            <p class="text-slate-500 text-[16px] leading-relaxed mb-8 max-w-lg font-sans">
                VMA supports urgent care clinics with fast, reliable clinical documentation, patient intake coordination, insurance verification, and real-time administrative support. VMA improves patient experience while ensuring your operations run smoothly.
            </p>

            <!-- Buttons -->
             <div class="flex flex-col sm:flex-row gap-3 mb-10">
                <button class="bg-primary transition-all duration-300 hover:opacity-80 text-white font-bold py-3.5 px-6 rounded-lg shadow-md">Get Started Today →</button>
                <button class="bg-white border border-gray-200 hover:bg-gray-50 text-gray-900 font-bold py-3.5 px-6 rounded-lg transition-all">Learn More</button>
            </div>

            <!-- Trust Footer -->
            <div class="flex flex-wrap items-center gap-y-4 text-[13px] text-slate-500 font-medium">
                <div class="flex items-center pl-2 pr-2 lg:px-4 border-r border-slate-200">
                    <div class="flex h-5 w-5 items-center justify-center rounded-full bg-emerald-50 text-emerald-500 mr-2 border border-emerald-100">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" /></svg>
                    </div>
                    No long-term contracts
                </div>
                <div class="flex items-center pl-2 pr-2 lg:px-4 border-r border-slate-200">
                    <div class="flex h-5 w-5 items-center justify-center rounded-full bg-emerald-50 text-emerald-500 mr-2 border border-emerald-100">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" /></svg>
                    </div>
                   No prior payments
                </div>
                <div class="flex items-center pl-2 pr-2 lg:px-4">
                    <div class="flex h-5 w-5 items-center justify-center rounded-full bg-emerald-50 text-emerald-500 mr-2 border border-emerald-100">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" /></svg>
                    </div>
                    GDPR Compliant
                </div>
            </div>
        </div>

        <!-- RIGHT SIDE: The Card Grid -->
        <div class="relative w-full hidden lg:flex items-center justify-center">
            <!-- Floating Badge -->
            <div class="absolute -left-4 bottom-1/4 bg-white px-5 py-3 rounded-2xl shadow-2xl z-10 animate-bounce text-sm font-bold text-[#7C3AED] border border-slate-50">
                Matched in 7 days
            </div>

            <div class="grid grid-cols-2 gap-6 scale-90 xl:scale-100 origin-center">
                
                <!-- Card 1: Mint -->
                <div class="bg-white rounded-[32px] overflow-hidden shadow-xl border border-slate-50 animate-float" style="animation-delay: 0.1s">
                    <div class="h-20 bg-[#C6F6D5] flex items-center justify-center">
                        <svg class="w-6 h-6 text-slate-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>
                    </div>
                    <div class="p-5">
                        <h4 class="font-bold text-slate-900 text-sm">Arsalan A.</h4>
                        <p class="text-[10px] text-slate-400 mb-3">Customer Support Specialist</p>
                        <div class="flex gap-1">
                            <span class="text-[9px] font-bold px-1.5 py-0.5 bg-violet-50 text-violet-600 rounded">AMS360</span>
                            <span class="text-[9px] font-bold px-1.5 py-0.5 bg-emerald-50 text-emerald-600 rounded flex items-center gap-0.5">✓ Certified</span>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Sky -->
                <div class="bg-white rounded-[32px] overflow-hidden shadow-xl border border-slate-50 animate-float mt-10" style="animation-delay: 0.5s">
                    <div class="h-20 bg-[#E0F2FE] flex items-center justify-center">
                        <svg class="w-6 h-6 text-slate-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" /></svg>
                    </div>
                    <div class="p-5">
                        <h4 class="font-bold text-slate-900 text-sm">Aaila T.</h4>
                        <p class="text-[10px] text-slate-400 mb-3">Operations Coordinator</p>
                        <div class="flex gap-1">
                            <span class="text-[9px] font-bold px-1.5 py-0.5 bg-violet-50 text-violet-600 rounded">Applied Epic</span>
                            <span class="text-[9px] font-bold px-1.5 py-0.5 bg-emerald-50 text-emerald-600 rounded flex items-center gap-0.5">✓ Certified</span>
                        </div>
                    </div>
                </div>

                <!-- Card 3: Amber -->
                <div class="bg-white rounded-[32px] overflow-hidden shadow-xl border border-slate-50 animate-float -mt-4" style="animation-delay: 0.3s">
                    <div class="h-20 bg-[#FEF3C7] flex items-center justify-center">
                        <svg class="w-6 h-6 text-slate-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /></svg>
                    </div>
                    <div class="p-5">
                        <h4 class="font-bold text-slate-900 text-sm">Lizhet S.</h4>
                        <p class="text-[10px] text-slate-400 mb-3">Customer Support Specialist</p>
                        <div class="flex gap-1">
                            <span class="text-[9px] font-bold px-1.5 py-0.5 bg-emerald-50 text-emerald-600 rounded flex items-center gap-0.5">✓ Certified</span>
                        </div>
                    </div>
                </div>

                <!-- Card 4: Lavender -->
                <div class="bg-white rounded-[32px] overflow-hidden shadow-xl border border-slate-50 animate-float mt-6" style="animation-delay: 0.7s">
                    <div class="h-20 bg-[#EDE9FE] flex items-center justify-center">
                        <svg class="w-6 h-6 text-slate-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M7 15h1m4 0h1m-7 4h12a2 2 0 002-2V5a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                    </div>
                    <div class="p-5">
                        <h4 class="font-bold text-slate-900 text-sm">Ahmed K.</h4>
                        <p class="text-[10px] text-slate-400 mb-3">Operations Coordinator</p>
                        <div class="flex gap-1">
                            <span class="text-[9px] font-bold px-1.5 py-0.5 bg-violet-50 text-violet-600 rounded">QQCatalyst</span>
                            <span class="text-[9px] font-bold px-1.5 py-0.5 bg-emerald-50 text-emerald-600 rounded flex items-center gap-0.5">✓ Certified</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Background Decoration (Optional, to match the light-purple tint in image) -->
    <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-l from-violet-50/50 to-transparent -z-10"></div>
</section>

<section class="max-w-6xl mx-auto px-6 py-20 text-center">
    <!-- Badge -->
    <div class="inline-flex px-3 py-1 mb-6 text-[11px] font-bold text-primary uppercase tracking-widest bg-indigo-50/50 rounded-full border border-indigo-100">
       URGENT CARE SUPPORT SOLUTIONS FOR HEALTHCARE TEAMS
    </div>

    <!-- Title & Desc -->
    <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 tracking-tighter mb-4 capitalize">
        Reliable Support built for Urgent Care Environments
    </h2>
    <p class="text-gray-500 mb-10 max-w-lg mx-auto leading-relaxed">
        VMA professionals scale medical operations with experience in EHR systems, ICD-10, and CPT processes to support your workflow. 
    </p>

    <!-- Browse Button -->
    <button class="mb-16 border-2 border-gray-200 hover:border-gray-300 px-6 py-3 rounded-xl font-semibold transition-all">
       Explore Urgent Care Services →
    </button>

    <!-- Grid: 3 Columns -->
    <div class="grid md:grid-cols-3 gap-6 text-left">
        @php
            $roles = [
                [
                    'title' => 'Healthcare Assistant',
                    'desc' => 'Handles day-to-day operational tasks to help healthcare practices run more smoothly.',
                    'url' => '/roles/healthcare-assistant',
                    'icon' => 'M4 9a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V9Z M9 7V5a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v2 M12 11v4 M10 13h4' // Medical kit / Briefcase
                ],
                [
                    'title' => 'Healthcare Coordinator',
                    'desc' => 'Assists with patient communication, scheduling, and operational support for healthcare teams.',
                    'url' => '/roles/healthcare-coordinator',
                    'icon' => 'M8 2v4 M16 2v4 M3 10h18 M5 4h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z M9 16l2 2 4-4' // Calendar scheduler with checkmark
                ],
                [
                    'title' => 'HIPAA Compliance Support',
                    'desc' => 'Helps maintain secure documentation processes aligned with healthcare compliance standards.',
                    'url' => '/roles/hipaa-compliance-support',
                    'icon' => 'M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z M9 11l2 2 4-4' // Shield with checkmark
                ],
                [
                    'title' => 'Remote Patient Support',
                    'desc' => 'Provides administrative assistance and communication support for patient care operations.',
                    'url' => '/roles/remote-patient-support',
                    'icon' => 'M3 18v-6a9 9 0 0 1 18 0v6 M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3 M3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3' // Headset/Support
                ],
                [
                    'title' => 'Medical Records Specialist',
                    'desc' => 'Organizes, reviews, and maintains patient files with accuracy and confidentiality.',
                    'url' => '/roles/medical-records-specialist',
                    'icon' => 'M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z M2 10h20 M12 12v4 M10 14h4' // Medical Folder with cross
                ],
                [
                    'title' => 'Prior Authorized Assistant',
                    'desc' => 'Supports authorization workflows and documentation for faster patient processing.',
                    'url' => '/roles/prior-authorization-assistant',
                    'icon' => 'M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z M14 2v6h6 M9 15l2 2 4-4' // Authorized/Approved document with checkmark
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

<section class="px-6 py-20 bg-gray-50 antialiased">
    <div class="max-w-6xl mx-auto">
        
        <!-- Section Header -->
        <div class="text-center mb-16">
            <span class="inline-block px-5 py-2 rounded-full bg-[var(--primary)]/10 text-[var(--primary)] text-[11px] font-bold uppercase tracking-[0.12em] mb-10 border border-[var(--primary)]/20">
                EHR Ready Talent
            </span>
            <h2 class="text-[#111827] text-[26px] md:text-[36px] font-[900] leading-[1.1] tracking-[-0.04em] mb-6 capitalize">
               Certified in the EHR systems your urgent care  <span class="text-[var(--primary)]">already uses</span>
            </h2>
            <p class="text-black text-[14px] md:text-[16px] leading-relaxed max-w-2xl mx-auto font-normal">
                Stop wasting time on training delays. VMA’s 4-week intensive program prepares vetted urgent care support professionals trained in high-volume patient handling, documentation accuracy, and rapid clinical workflows. We integrate seamlessly so your clinic never slows down.
            </p>
        </div>

        <!-- EHR Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @php
                $ehrList = [
                    [
                        'title' => 'Epic',
                        'desc' => 'Charting, Orders, Emergency Intake, InBasket',
                        'icon' => 'clipboard-document-list'
                    ],
                    [
                        'title' => 'athenahealth',
                        'desc' => 'Urgent care workflows, billing, patient communication',
                        'icon' => 'heart'
                    ],
                    [
                        'title' => 'eClinicalWorks',
                        'desc' => 'Scheduling, clinical documentation, billing support',
                        'icon' => 'calendar-days'
                    ],
                    [
                        'title' => 'CareCloud',
                        'desc' => 'Revenue cycle, telehealth, practice management',
                        'icon' => 'cloud'
                    ],
                    [
                        'title' => 'Tebra (Kareo)',
                        'desc' => 'Billing, patient engagement, scheduling',
                        'icon' => 'currency-dollar'
                    ],
                    [
                        'title' => 'RingCentral',
                        'desc' => 'Call handling, triage coordination, communications',
                        'icon' => 'phone'
                    ],
                    [
                        'title' => 'Availity / NaviNet',
                        'desc' => 'Eligibility checks, authorizations, claims processing',
                        'icon' => 'shield-check'
                    ],
                    [
                        'title' => 'Phreesia',
                        'desc' => 'Patient intake, digital check-in, analytics',
                        'icon' => 'user-plus'
                    ],
                ];
            @endphp

            @foreach($ehrList as $ehr)
                <div class="bg-white border border-gray-100 rounded-[24px] p-8 flex flex-col items-center text-center shadow-[0_4px_20px_rgba(0,0,0,0.01)] transition-all duration-300 hover:shadow-xl hover:shadow-[var(--primary)]/5 hover:-translate-y-1 group">
                    
                    <!-- Dynamic Icon Container -->
                    <!-- Dynamic Icon Container -->
                <div class="mb-6 text-[var(--primary)] transition-transform duration-300 group-hover:scale-110">

                    @if($ehr['icon'] == 'clipboard-document-list')
                        <!-- Epic -->
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a3 3 0 006 0M9 5a3 3 0 016 0M9 12h6M9 16h6" />
                        </svg>

                    @elseif($ehr['icon'] == 'heart')
                        <!-- Athenahealth -->
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M4.318 6.318a4.5 4.5 0 016.364 0L12 7.636l1.318-1.318a4.5 4.5 0 116.364 6.364L12 20.364 4.318 12.682a4.5 4.5 0 010-6.364z" />
                        </svg>

                    @elseif($ehr['icon'] == 'calendar-days')
                        <!-- eClinicalWorks -->
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>

                    @elseif($ehr['icon'] == 'cloud')
                        <!-- CareCloud -->
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M3 15a4 4 0 014-4h1a5 5 0 019.9-1A4 4 0 0118 19H7a4 4 0 01-4-4z" />
                        </svg>

                    @elseif($ehr['icon'] == 'currency-dollar')
                        <!-- Tebra / Kareo -->
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-10V6m0 12v2m9-8a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>

                    @elseif($ehr['icon'] == 'phone')
                        <!-- RingCentral -->
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>

                    @elseif($ehr['icon'] == 'shield-check')
                        <!-- Availity / NaviNet -->
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11 5.176-.71 9-5.409 9-11 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>

                    @elseif($ehr['icon'] == 'user-plus')
                        <!-- Phreesia -->
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M18 9v6m3-3h-6M12 7a4 4 0 110 8 4 4 0 010-8zm0 10c-4.418 0-8 1.79-8 4h16c0-2.21-3.582-4-8-4z" />
                        </svg>

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

        <!-- Call to Action Button -->
        <div class="mt-20 text-center">
            <a href="#" 
               class="inline-block px-12 py-4 rounded-2xl text-white font-bold text-[17px] shadow-lg transition-all duration-300 hover:scale-105 hover:brightness-110 active:scale-95"
               style="background-color: var(--primary);">
                Learn More
            </a>
        </div>

    </div>
</section>

<!-- SECTION 4: ONE FLAT FEE -->
<section class="max-w-6xl mx-auto py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-12 animate-fade-in">
            <span class="inline-block px-5 py-2 rounded-full bg-[var(--primary)]/10 text-[var(--primary)] text-[11px] font-bold uppercase tracking-[0.12em] mb-6 border border-[var(--primary)]/20">
                Your Plan Includes
            </span>
            <h2 class="text-[26px] md:text-[36px] font-extrabold text-slate-900 mb-2 tracking-tight capitalize">
                One simple plan. <span class="text-[var(--primary)]">Everything covered.</span>
            </h2>
            <p class="text-slate-500 text-md max-w-2xl mx-auto leading-relaxed">
                VMA provides complete affordable virtual assistant services designed specifically for urgent care providers with fast-paced, high-volume operational needs.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @php
                $fees = [
                    [
                        'title' => 'Onboarding Support',
                        'desc' => 'Fully managed onboarding for your dedicated urgent care virtual assistant.',
                        'icon' => 'M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2 M9 11a4 4 0 1 0 0-8 4 4 0 0 0 0 8 M19 8v6 M16 11h6' // User Plus (Adding Assistant)
                    ],
                    [
                        'title' => 'Workflow Monitoring',
                        'desc' => 'Structured quality checks to ensure accuracy, speed, and consistency in urgent care workflows.',
                        'icon' => 'M3 12h3l3-9 4 18 3-10 3 1h3' // Activity / EKG Wave (Real-time tracking)
                    ],
                    [
                        'title' => 'Claims Follow-Ups',
                        'desc' => 'Proactive claim tracking, submission support, and denial resolution for faster reimbursement.',
                        'icon' => 'M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z M14 2v6h6 M12 11v6 M15 13H9.5a1.5 1.5 0 0 0 0 3h3a1.5 1.5 0 0 1 0 3H9' // Billing Invoice with Dollar symbol
                    ],                    
                    [
                        'title' => 'Service Agreements',
                        'desc' => 'Simple agreements with continuous operational and client support.',
                        'icon' => 'M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z M14 2v6h6 M8 12h8 M8 16h5 M16 15l3-3-2-2-3 3v2h2z' // Document contract with signature/pen
                    ],
                    [
                        'title' => 'Data Protection & HIPAA',
                        'desc' => 'HIPAA-ready processes designed for secure urgent care administrative operations.',
                        'icon' => 'M19 11H5a2 2 0 0 0-2 2v7a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7a2 2 0 0 0-2-2z M7 11V7a5 5 0 0 1 10 0v4' // Classic Padlock
                    ],
                    [
                        'title' => 'Front Desk Patient Handling',
                        'desc' => 'Fast, accurate patient intake handling to reduce waiting times and improve patient flow.',
                        'icon' => 'M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2 M9 11a4 4 0 1 0 0-8 4 4 0 0 0 0 8 M16 11l2 2 4-4' // User check (Patient intake)
                    ],
                    [
                        'title' => 'Eligibility & Coverage Checks',
                        'desc' => 'Real-time insurance verification for seamless patient processing.',
                        'icon' => 'M21 4H3a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h18a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2z M1 10h22 M4 15h2 M8 15h4' // Insurance/ID Card
                    ],
                    [
                        'title' => 'Medical Record Support',
                        'desc' => 'Accurate, timely documentation assistance for urgent care physicians.',
                        'icon' => 'M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2 M9 5a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2 M9 11l2 2 4-4 M8 16h8' // Clinical Clipboard Checklist
                    ],                    
                    [
                        'title' => 'Regulatory Compliance',
                        'desc' => 'Strict adherence to HIPAA standards ensuring safe handling of all patient information.',
                        'icon' => 'M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z M9 11l2 2 4-4' // Shield with Compliance Checkmark
                    ]
                ];
            @endphp

            @foreach($fees as $fee)
            <div class="bg-white border border-slate-100 rounded-[2rem] p-6 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col items-center text-center">
                <div class="mb-6 text-[var(--primary)]">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $fee['icon'] }}"></path></svg>
                </div>
                <h3 class="text-[18px] font-bold text-slate-900 mb-4">{{ $fee['title'] }}</h3>
                <p class="text-sm text-slate-500 leading-relaxed mb-8 italic">{{ $fee['desc'] }}</p>
                <span class="mt-auto inline-flex items-center gap-1.5 px-4 py-1.5 rounded-full bg-emerald-50 text-emerald-600 text-xs font-bold border border-emerald-100">
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                    Included
                </span>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="max-w-6xl mx-auto px-6 py-12">
    @php
        $customerBenefits = [
            'Improves patient intake speed and accuracy',
            'Reduces documentation delays and clinician overload',
            'Streamlines high-volume workflow management',
            'Enhances billing accuracy and reimbursement speed',
            'Supports insurance verification and coordination',
        ];

        $talentBenefits = [
            'Shorter wait times and faster triage processing',
            'Smoother visit documentation and record updates',
            'Faster insurance approvals and eligibility checks',
            'Improved communication across care teams',
            'Consistent, reliable operational support',
        ];
    @endphp
    <!-- Main Card with Gradient and Dot Pattern -->
    <div class="relative w-full rounded-[40px] overflow-hidden p-8 md:p-12 lg:p-18 bg-gradient-to-br from-[#0d8276] via-[#115e59] to-[#4c1d95] text-white">
        
        <!-- Dot Pattern Overlay -->
        <div class="absolute inset-0 opacity-10 pointer-events-none" 
             style="background-image: radial-gradient(circle, #ffffff 1px, transparent 1px); 
                    background-size: 28px 28px;
                    -webkit-mask-image: linear-gradient(to bottom right, transparent 20%, black 90%);
                    mask-image: linear-gradient(to bottom right, transparent 20%, black 90%);">
        </div>

        <!-- Content Wrapper -->
        <div class="relative z-10">
            <!-- Badge -->
            <div class="inline-block px-4 py-1.5 rounded-full border border-white/30 text-[10px] font-bold tracking-widest uppercase mb-10">
                URGENT CARE OPERATIONS BRIDGE
            </div>

            <!-- Heading -->
            <h2 class="text-3xl md:text-4xl font-bold font-gnarly leading-[1.1] mb-6 max-w-3xl capitalize">
                One support partner managing every step. <br>
                That’s the difference.
            </h2>

            <!-- Paragraph -->
            <p class="text-white/70 text-[14px] max-w-3xl leading-relaxed mb-10 font-sans">
                Our urgent care operations manager is not just a point of contact. They act as the single bridge between your clinic and our support team, ensuring seamless coordination, faster resolutions, and real-time operational alignment. When there’s a bottleneck, they fix it. When there’s patient flow pressure, they optimize it. When there’s an opportunity, they scale it.
            </p>

            <!-- Bottom Comparison Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
                
                <!-- For You (Customer) -->
                <div class="lg:col-span-5">
                    <h3 class="text-white/50 text-[14px] font-bold tracking-widest uppercase mb-6">FOR YOUR URGENT CARE CENTER</h3>
                    <ul class="space-y-2">
                        @foreach($customerBenefits as $benefit)
                            <li class="text-[13px] font-medium text-[#ffffffbf]">{{ $benefit }}</li>
                        @endforeach
                    </ul>
                </div>

                <!-- Your RM (Center Icon) -->
                <div class="lg:col-span-2 flex flex-col items-center justify-center py-6">
                    <div class="w-16 h-16 rounded-full border border-white/30 flex items-center justify-center mb-3 group hover:border-white transition-colors">
                        <svg class="w-8 h-8 text-white/80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    <span class="text-white/60 text-xs font-bold uppercase tracking-wider">Your RM</span>
                </div>

                <!-- For Your Talent -->
                <div class="lg:col-span-5">
                    <h3 class="text-white/50 text-[14px] font-bold tracking-widest uppercase mb-6">FOR YOUR PATIENTS & OPERATIONS</h3>
                    <ul class="space-y-2">
                        @foreach($talentBenefits as $benefit)
                            <li class="text-[13px] font-medium text-[#ffffffbf]">{{ $benefit }}</li>
                        @endforeach
                    </ul>
                </div>

            </div>
        </div>
    </div>
</section>

@php
    $challenges = [
        [
            'title' => 'Claim Delays Are Increasing',
            'desc' => 'We identify root causes of delayed claims, correct recurring errors, and improve submission accuracy to ensure faster reimbursements. This helps reduce backlog and ensures a smoother revenue cycle with fewer interruptions.',
            'icon' => 'currency'
        ],
        [
            'title' => 'Patient Intake Is Overloaded',
            'desc' => 'We streamline intake processes, reduce front-desk burden, and ensure faster patient flow during peak hours. Our support improves check-in speed and minimizes waiting times for patients.',
            'icon' => 'users'
        ],
        [
            'title' => 'Documentation Is Slowing Physicians Down',
            'desc' => 'Our scribes and documentation specialists reduce charting delays so clinicians can focus on treatment, not typing. This improves accuracy while freeing up valuable clinical time.',
            'icon' => 'clipboard'
        ],    
        [
            'title' => 'Insurance Verification Issues',
            'desc' => 'We handle eligibility checks and coverage validation before treatment begins to reduce billing complications. This prevents claim rejections and ensures smoother patient processing.',
            'icon' => 'shield'
        ],
        [
            'title' => 'High Patient Volume Is Straining Staff',
            'desc' => 'We support scaling operations with structured workflows designed for urgent care surges. This helps maintain efficiency even during peak demand periods.',
            'icon' => 'office'
        ],
        [
            'title' => 'Accounts Receivable Are Increasing',
            'desc' => 'We follow up on unpaid claims, manage aging receivables, and improve cash flow consistency. This ensures better financial stability and faster payment recovery.',
            'icon' => 'currency'
        ],
        [
            'title' => 'Prior Authorization Delays',
            'desc' => 'We coordinate with payers to reduce delays in treatment approvals and improve patient experience. This helps avoid treatment interruptions and administrative bottlenecks.',
            'icon' => 'check'
        ],
        [
            'title' => 'Revenue Performance Is Declining',
            'desc' => 'We analyze workflow inefficiencies and optimize billing and operational processes to strengthen financial outcomes. This improves overall revenue cycle performance and operational efficiency.',
            'icon' => 'trending'
        ],
    ];
@endphp

<section class="max-w-6xl mx-auto px-6 py-20">
    
    <!-- Heading Center -->
    <div class="text-center mb-16">
        <!-- Badge using arbitrary values -->
        <div class="inline-block px-4 py-1.5 rounded-full text-[10px] font-bold tracking-widest uppercase border mb-8 bg-[var(--secondary)] text-white border-[var(--primary)]/20">
           WHAT OUR URGENT CARE SUPPORT TEAM HANDLES
        </div>

        <h2 class="text-4xl md:text-5xl font-bold font-gnarly text-slate-900 leading-[1.1] mb-6 capitalize">
            Every operational challenge that  <br>
            slows down urgent care clinics <span class="text-[var(--primary)]">solved.</span>
        </h2>
        
        <p class="text-slate-500 text-sm md:text-base max-w-2xl mx-auto leading-relaxed">
            From patient overload and documentation delays to insurance verification and billing backlogs, urgent care centers face constant pressure. Our specialists handle these challenges so your clinical team can focus on immediate patient care.
        </p>
    </div>

    <!-- The Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @foreach($challenges as $item)
            <!-- Hover effect using dynamic border color -->
            <div class="group p-8 md:p-10 bg-white border border-slate-100 rounded-[32px] transition-all duration-300 hover:border-[var(--primary)]/30 hover:shadow-xl hover:shadow-[var(--primary)]/5">
                
                <div class="flex items-start gap-6">
                    <!-- Icon using dynamic primary color -->
                    <div class="shrink-0 w-6 h-6 text-[var(--primary)]">

                        @if($item['icon'] == 'currency')
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8V6m0 12v-2m9-4a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>

                        @elseif($item['icon'] == 'users')
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5V4H2v16h5m10 0v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6"/>
                            </svg>

                        @elseif($item['icon'] == 'clipboard')
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2"/>
                            </svg>

                        @elseif($item['icon'] == 'shield')
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11 5.176-.71 9-5.409 9-11 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        @elseif($item['icon'] == 'office')
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 21h18M5 21V7l7-4 7 4v14M9 9h.01M9 13h.01M15 9h.01M15 13h.01M10 21v-4h4v4"/>
                            </svg>
                        @elseif($item['icon'] == 'check')
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6-2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>   
                        @elseif($item['icon'] == 'medical')
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4v16m8-8H4"/>
                            </svg>     
                        @elseif($item['icon'] == 'trending')
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                            </svg>
                        @endif

                    </div>
                    
                    <!-- Text Content -->
                    <div>
                        <!-- Title turns primary on group hover -->
                        <h3 class="text-lg font-bold text-slate-900 mb-3 transition-colors group-hover:text-[var(--primary)]">
                            {{ $item['title'] }}
                        </h3>
                        <p class="text-[14px] text-slate-500 leading-relaxed font-sans">
                            {{ $item['desc'] }}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>

<section class="max-w-6xl mx-auto px-6 py-12">
    
    <!-- Main Card Container -->
    <div class="w-full rounded-[40px] p-8 md:p-16 text-center" 
         style="background-color: var(--secondary); border: 1px solid color-mix(in srgb, var(--primary), transparent 90%);">
        
        <!-- Header -->
        <h2 class="text-2xl md:text-3xl font-bold font-gnarly mb-4 text-white">
            Already a VMA Client?
        </h2>
        
        <p class="text-[13px] md:text-[14px] leading-relaxed max-w-2xl mx-auto mb-10 text-white">
            Your dedicated urgent care support team is your single point of contact for documentation, intake coordination, billing support, and workflow optimization. Reach out anytime.
        </p>

        <!-- Inner Info Boxes -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 max-w-4xl mx-auto mb-10 text-left">
            
            <!-- Box 1 -->
            <div class="bg-white/60 backdrop-blur-sm rounded-2xl p-6 border border-white/40 shadow-sm transition-transform hover:scale-[1.02] duration-300">
                <p class="text-[13px] md:text-[14px] font-medium leading-relaxed text-black">
                   Need faster patient intake flow? We optimize front-desk and triage coordination to reduce waiting times.
                </p>
            </div>

            <!-- Box 2 -->
            <div class="bg-white/60 backdrop-blur-sm rounded-2xl p-6 border border-white/40 shadow-sm transition-transform hover:scale-[1.02] duration-300">
                <p class="text-[13px] md:text-[14px] font-medium leading-relaxed text-black">
                    Expanding your urgent care center? We scale operational support with your growth to ensure smooth daily operations.
                </p>
            </div>

        </div>

        <!-- Footer Text -->
        <p class="text-[13px] font-bold mb-6 uppercase tracking-wider text-white" >
            TALK TO OUR URGENT CARE SPECIALISTS OR GET IN TOUCH BELOW.
        </p>

        <!-- Dynamic Button -->
        <a href="#" 
           class="inline-block px-10 py-4 rounded-2xl font-bold text-white shadow-lg transition-all hover:brightness-110 active:scale-95"
           style="background-color: var(--primary);">
            Get in Touch
        </a>

    </div>
</section>

<section class="py-24 px-6 bg-primary antialiased text-center">
    <div class="max-w-4xl mx-auto">
        
        <!-- Limited Spot Badge -->
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-white/10 bg-white/5 mb-10">
            <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
            <span class="text-white/90 text-[13px] font-medium tracking-wide">
                Few onboarding spots remaining
            </span>
        </div>

        <!-- Main Heading -->
        <h2 class="text-white text-[42px] md:text-[46px] font-extrabold leading-[1.1] tracking-[-0.03em] mb-6 capitalize">
            Meet your next hire<br>
            in <span class="bg-gradient-to-r from-[#000] via-[#000] to-[#000] bg-clip-text text-transparent">just 7 days</span>
        </h2>

        <!-- Subheading -->
        <p class="text-white/80 text-[13px] md:text-[16px] leading-relaxed max-w-2xl mx-auto mb-8 font-normal">
            Book a demo to see matched, pre-vetted urgent care support professionals tailored to your clinic’s needs.

            <br class="hidden md:block">
            No overheads. No commitments. No risk.
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
        <div class="max-w-2xl mx-auto flex flex-wrap justify-center items-center gap-x-4 gap-y-4">
            @php
                $benefits = [
                    'Pay only when you hire',
                    'No long-term lock-in',
                    'Free replacement if needed',
                    'Quick, easy demo',
                    'Cancel anytime'
                ];
            @endphp

            @foreach($benefits as $benefit)
                <div class="flex items-center gap-2 text-gray-500 text-white text-[14px]">
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