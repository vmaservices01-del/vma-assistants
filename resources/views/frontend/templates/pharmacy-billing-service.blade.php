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
                20+ healthcare practices hired VMA  pharmacy billing team
            </div>

            <!-- Heading -->
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-[1.05] tracking-tight text-[#0F172A] mb-6 font-gnarly capitalize">
                Let pharmacies<br>
                focus on <span class="text-[#7C3AED]">patient care.</span>
            </h1>

            <!-- Description -->
            <p class="text-slate-500 text-[16px] leading-relaxed mb-8 max-w-lg font-sans">
                VMA handles the claims processing, denials management, and reimbursement optimization so you can focus on what matters most, your patients. Maximize your pharmacy's revenue while reducing administrative burden.
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
                    No Prior Payments
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
        PHARMACY BILLING SOLUTIONS FOR HEALTHCARE TEAMS
    </div>

    <!-- Title & Desc -->
    <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 tracking-tighter mb-4 capitalize">
        Smart Pharmacy Billing Support For Healthcare Teams 
    </h2>
    <p class="text-gray-500 mb-10 max-w-lg mx-auto leading-relaxed">
       VMA pharmacy billing experts streamline claims processing, insurance verification, prior authorizations, and reimbursement workflows to improve operational efficiency and revenue performance. 
    </p>

    <!-- Browse Button -->
    <button class="mb-16 border-2 border-gray-200 hover:border-gray-300 px-6 py-3 rounded-xl font-semibold transition-all">
        Explore Pharmacy Billing Services →
    </button>

    <!-- Grid: 3 Columns -->
    <div class="grid md:grid-cols-3 gap-6 text-left">
        @php
            $roles = [
                [
                    'title' => 'Medical Transcriptionist', 
                    'desc' => 'Converts recorded medical notes into clear, accurate, and organized documentation.', 
                    'url' => '/roles/receptionist',
                    'icon' => 'M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z M19 10v2a7 7 0 0 1-14 0v-2 M12 19v4 M8 23h8' // Microphone for transcribing audio notes
                ],
                [
                    'title' => 'Virtual Medical Assistant', 
                    'desc' => 'Supports scheduling, coordination, and daily administrative healthcare tasks remotely.', 
                    'url' => '/roles/coder',
                    'icon' => 'M20 16V4a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v12m-2 4h20a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2 M12 6v6 M10 9h4' // Remote monitor UI with medical cross
                ],
                [
                    'title' => 'Medical Scribe', 
                    'desc' => 'Records patient visits and updates documentation during virtual or in-person consultations.', 
                    'url' => '/roles/scribe',
                    'icon' => 'M12 20h9 M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z' // Writing pen/pencil updating files
                ],
                [
                    'title' => 'Documentation Specialist', 
                    'desc' => 'Maintains accurate patient records while supporting compliant clinical workflows.', 
                    'url' => '/roles/scribe',
                    'icon' => 'M12 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z M14 2v6h6 M16 13H8 M16 17H8 M10 9H8' // Structured document page with text rows
                ],
                [
                    'title' => 'EMR Assistant', 
                    'desc' => 'Updates and manages electronic medical records with accuracy and efficiency.', 
                    'url' => '/roles/scribe',
                    'icon' => 'M4 21h16a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2z M2 10h20 M6 6h1 M10 6h1 M14 6h1' // Digital dashboard/EMR screen layout
                ],
                [
                    'title' => 'Medical Billing Assistant', 
                    'desc' => 'Helps organize billing information, coding details, and insurance-related documentation.', 
                    'url' => '/roles/scribe',
                    'icon' => 'M4 21V3a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v18l-3-2-3 2-3-2-3 2-3-2-3 2z M9 7h6 M9 11h6 M9 15h3' // Bill invoice statement sheet
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
            <h2 class="text-[#111827] text-[26px] md:text-[36px] font-[900] leading-[1.1] tracking-[-0.04em] mb-6">
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
                    [
                        'title' => 'Epic',
                        'desc' => 'Charting, Order Entry, InBasket, Haiku',
                        'icon' => 'building'
                    ],
                    [
                        'title' => 'athenahealth',
                        'desc' => 'Workflows, Collections, Patient Communications',
                        'icon' => 'building'
                    ],
                    [
                        'title' => 'eClinicalWorks',
                        'desc' => 'Scheduling, Billing, Portal Management',
                        'icon' => 'building'
                    ],
                    [
                        'title' => 'CareCloud',
                        'desc' => 'RCM, Telehealth, Practice Management',
                        'icon' => 'building'
                    ],
                    [
                        'title' => 'Tebra (Kareo)',
                        'desc' => 'Billing, Engagement, Patient Scheduling',
                        'icon' => 'building'
                    ],
                    [
                        'title' => 'RingCentral',
                        'desc' => 'VOIP, Communications, Call Routing',
                        'icon' => 'phone'
                    ],
                    [
                        'title' => 'Availity / NaviNet',
                        'desc' => 'Eligibility, Authorizations, Claims Processing',
                        'icon' => 'lock'
                    ],
                    [
                        'title' => 'Phreesia',
                        'desc' => 'Intake, Digital Payments, Patient Analytics',
                        'icon' => 'chart'
                    ],
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
               VMA provides complete affordable virtual assistant services designed to support healthcare providers with reliable infrastructure and trained professionals.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @php
                $fees = [
                    [
                        'title' => 'Admin Support',
                        'desc' => 'Fully managed onboarding for your dedicated virtual assistant for healthcare.',
                        'icon' => 'M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.1a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6z' // Admin / Settings Gear
                    ],
                    [
                        'title' => 'Performance Review',
                        'desc' => 'Structured workflows to ensure consistent delivery and efficiency.',
                        'icon' => 'M23 6l-9.5 9.5-5-5L1 18 M17 6h6v6' // Performance Trend line upwards
                    ],
                    [
                        'title' => 'Security & Privacy',
                        'desc' => 'HIPAA-ready processes for secure remote healthcare administrative services.',
                        'icon' => 'M19 11H5a2 2 0 0 0-2 2v7a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7a2 2 0 0 0-2-2z M7 11V7a5 5 0 0 1 10 0v4' // Padlock
                    ],
                    [
                        'title' => 'Contracts & Support',
                        'desc' => 'Simple agreements and ongoing support for smooth operations.',
                        'icon' => 'M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z M14 2v6h6 M8 12h8 M8 16h5 M16 15l3-3-2-2-3 3v2h2z' // Contract Document with edit pen
                    ],
                    [
                        'title' => 'Claims Processing',
                        'desc' => 'Accurate and timely pharmacy claim submissions to ensure faster reimbursements.',
                        'icon' => 'M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z M14 2v6h6 M12 11v6 M15 13H9.5a1.5 1.5 0 0 0 0 3h3a1.5 1.5 0 0 1 0 3H9' // Invoice statement sheet with Dollar sign
                    ],
                    [
                        'title' => 'Insurance Verification',
                        'desc' => 'Efficient eligibility checks and coverage verification for smooth billing operations.',
                        'icon' => 'M21 4H3a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h18a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2z M1 10h22 M4 15h2 M8 15h4' // Coverage ID / Verification Card
                    ],
                    [
                        'title' => 'Denial Management',
                        'desc' => 'Proactive claim tracking, denial resolution, and payment follow-ups to maximize revenue.',
                        'icon' => 'M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z M14 2v6h6 M16.5 15a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z M19 19l-3.5-3.5' // Document Audit / Magnifying glass review
                    ],
                    [
                        'title' => 'HIPPA-Compliant',
                        'desc' => 'HIPAA-compliant billing processes with detailed financial reporting and operational transparency.',
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
            'Improves claim submission accuracy & reimbursement rates',
            'Reduces billing errors and rejected claims',
            'Streamlines pharmacy revenue cycle operations',
            'Provides transparent reporting & financial insights',
            'Supports insurance coordination & payer communication',
        ];

        $talentBenefits = [
            'Speeds up insurance verification & approvals',
            'Ensures smoother prescription billing workflows',
            'Helps resolve claim and payment concerns quickly',
            'Maintains HIPAA-compliant billing processes',
            'Delivers reliable ongoing billing support & follow-ups',
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
                PHARMACY BILLING BRIDGE
            </div>

            <!-- Heading -->
            <h2 class="text-[26px] md:text-[36px] font-bold font-gnarly leading-[1.1] mb-6 max-w-2xl capitalize">
                One billing partner that manages every step.<br>
                That's the difference.
            </h2>

            <!-- Paragraph -->
            <p class="text-white/70 text-[14px] max-w-3xl leading-relaxed mb-10 font-sans">
                Our Pharmacy Billing Service account manager isn’t just your billing contact. They serve as the single point of contact for both your pharmacy and our billing team, a bridge between both sides. When there’s a concern, they already have context from both perspectives. When there’s a discrepancy, they resolve it. When there’s an opportunity, they coordinate and optimize the revenue cycle.
            </p>

            <!-- Bottom Comparison Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
                
                <!-- For You (Customer) -->
                <div class="lg:col-span-5">
                    <h3 class="text-white/50 text-[14px] font-bold tracking-widest uppercase mb-6">FOR YOUR PHARMACY</h3>
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
                    <span class="text-white/60 text-xs font-bold uppercase tracking-wider">Your VM</span>
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
            'title' => 'Claim Denials Are Increasing',
            'desc' => 'Our pharmacy billing specialists investigate the root cause of denials, identify recurring issues, and implement corrective actions to improve first-pass claim acceptance and reimbursement rates.',
            'icon' => '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>'
        ],
        [
            'title' => 'Insurance Verification Challenges',
            'desc' => 'Coverage discrepancies and eligibility issues can delay payments. Our team verifies patient benefits, confirms coverage details, and resolves insurance-related billing obstacles before claims are submitted.',
            'icon' => '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>'
        ],
        [
            'title' => 'Your Prescription Volume Is Growing',
            'desc' => 'As your pharmacy expands, billing complexity increases. We help manage higher claim volumes, streamline workflows, and ensure your revenue cycle scales efficiently alongside your business.',
            'icon' => '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>'
        ],
        [
            'title' => 'Billing Staff Need Additional Support',
            'desc' => 'Whether it\'s new payer requirements, pharmacy billing regulations, or software updates, our specialists provide the expertise needed to keep billing operations accurate and compliant.',
            'icon' => '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/></svg>'
        ],
        [
            'title' => 'Outstanding Accounts Receivable Are Rising',
            'desc' => 'Unpaid claims can significantly impact cash flow. Our team actively follows up on aging accounts, appeals denied claims, and works to accelerate reimbursements.',
            'icon' => '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8V7m0 1v8m0 0v1m0-1a9 9 0 110-18 9 9 0 010 18z"/></svg>'
        ],
        [
            'title' => 'You Need Help Recovering Lost Revenue',
            'desc' => 'Our pharmacy billing experts identify underpayments, missed reimbursements, and billing errors, helping recover revenue that might otherwise remain uncollected.',
            'icon' => '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v8m4-4H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>'
        ],
        [
            'title' => 'Prior Authorization Delays',
            'desc' => 'Medication approvals can slow patient care and reimbursement. We coordinate prior authorization processes, communicate with payers, and help minimize treatment delays.',
            'icon' => '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>'
        ],
        [
            'title' => 'You\'re Unsure Why Revenue Is Falling',
            'desc' => 'Our billing specialists analyze your pharmacy\'s revenue cycle, uncover inefficiencies, and provide actionable recommendations to improve collections, reduce denials, and strengthen financial performance.',
            'icon' => '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>'
        ],
    ];
@endphp

<section class="max-w-6xl mx-auto px-6 py-20">
    
    <!-- Heading Center -->
    <div class="text-center mb-16">
        <!-- Badge using arbitrary values -->
        <div class="inline-block px-4 py-1.5 rounded-full text-[10px] font-bold tracking-widest uppercase border mb-8 bg-[var(--secondary)] text-white border-[var(--primary)]/20">
            WHAT OUR PHARMACY BILLING TEAM HANDLES
        </div>

        <h2 class="text-[26px] md:text-[36px] font-bold font-gnarly text-slate-900 leading-[1.1] mb-6 capitalize">
            Every billing challenge that can slow down<br>
            your pharmacy operations <span class="text-[var(--primary)]">taken care of.</span>
        </h2>
        
        <p class="text-slate-500 text-sm md:text-base max-w-2xl mx-auto leading-relaxed">
            From claim rejections and payment delays to insurance issues and follow-ups, these are everyday challenges pharmacies face. Instead of managing them on your own, our pharmacy billing specialists handle them efficiently so you can focus on patient care. 
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
                        {!! $item['icon'] !!}
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
        <h2 class="text-[26px] md:text-[36px] font-bold font-gnarly mb-4 text-white">
            Already a VMA Client?
        </h2>
        
        <p class="text-[13px] md:text-[14px] leading-relaxed max-w-2xl mx-auto mb-10 text-white">
            Your dedicated billing team is your single point of contact for anything — claim submissions, denial management, or revenue cycle guidance. Reach out anytime.
        </p>

        <!-- Inner Info Boxes -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 max-w-4xl mx-auto mb-10 text-left">
            
            <!-- Box 1 -->
            <div class="bg-white/60 backdrop-blur-sm rounded-2xl p-6 border border-white/40 shadow-sm transition-transform hover:scale-[1.02] duration-300">
                <p class="text-[13px] md:text-[14px] font-medium leading-relaxed text-black">
                   Need help reducing claim denials? Our billing specialists identify the cause and implement corrective actions.
                </p>
            </div>

            <!-- Box 2 -->
            <div class="bg-white/60 backdrop-blur-sm rounded-2xl p-6 border border-white/40 shadow-sm transition-transform hover:scale-[1.02] duration-300">
                <p class="text-[13px] md:text-[14px] font-medium leading-relaxed text-black">
                    Expanding your pharmacy operations? Our team scales billing support to match your growth.
                </p>
            </div>

        </div>

        <!-- Footer Text -->
        <p class="text-[13px] font-bold mb-6 uppercase tracking-wider text-white">
            TALK TO OUR BILLING SPECIALISTS OR GET IN TOUCH BELOW.
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
        <h2 class="text-white text-[26px] md:text-[36px] font-extrabold leading-[1.1] tracking-[-0.03em] mb-6 capitalize">
            Hire your next hire<br>
            in <span class="bg-gradient-to-r from-[#000] via-[#000] to-[#000] bg-clip-text text-transparent">just 7 days</span>
        </h2>

        <!-- Subheading -->
        <p class="text-white/80 text-[13px] md:text-[16px] leading-relaxed max-w-2xl mx-auto mb-8 font-normal">
            Book a Demo to see matched, pre-vetted candidates for your needs.

            <br class="hidden md:block">
            No overheads. No commitments. No risk.
        </p>

        <!-- CTA Button -->
        <div class="mb-6">
            <a href="#" class="inline-flex items-center gap-2 bg-white text-black px-8 py-4 rounded-xl font-bold text-[17px] transition-transform hover:scale-105">
                Request a Demo 
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
                    'Guaranteed replacement',
                    'Fast 15-min demo',
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