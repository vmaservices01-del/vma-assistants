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
<section id="hero-section" class="relative w-full min-h-screen flex items-center justify-center bg-[#0a1931] py-20 px-6 overflow-hidden">
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[1000px] h-[600px] bg-[var(--primary)]/10 blur-[120px] rounded-full -z-0"></div>

    <div class="relative z-10 max-w-4xl mx-auto text-center">
        <!-- Dynamic Badge -->
        <span class="inline-block px-5 py-2 rounded-full bg-[var(--primary)]/10 text-[var(--primary)] text-[11px] font-bold uppercase tracking-[0.12em] mb-10 border border-[var(--primary)]/20 animate-fade-in">
            ✦ CARE BEYOND THE CLINIC
        </span>

        <h1 class="text-2xl md:text-3xl lg:text-5xl max-w-2xl capitalize  mx-auto font-extrabold text-white leading-[1.1] tracking-tight mb-8 text-balance">
            Reliable Virtual Chronic Care Management  <br class="hidden md:block"> 
            <span class="text-white">for Better Patient Outcomes</span>
        </h1>

        <p class="max-w-2xl mx-auto text-lg text-slate-300 mb-12 text-[16px]">
            Support long-term patient health with structured monitoring, follow-ups, and coordinated care designed to reduce complications and improve quality of life.
        </p>

        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-16">
            <button class="w-full sm:w-auto px-10 py-4 bg-[var(--primary)] hover:opacity-90 text-white font-bold rounded-xl transition-all shadow-lg shadow-[var(--primary)]/20 flex items-center justify-center gap-2 group border border-[var(--primary)]/20">
                Start CCM Support
                <span class="group-hover:translate-x-1 transition-transform">→</span>
            </button>
            <button class="w-full sm:w-auto px-10 py-4 bg-white text-[#0a1931] font-bold rounded-xl hover:bg-slate-100 transition-all shadow-lg">
                 View Pricing
            </button>
        </div>

        <!-- Trust Checklist Bar (Dark) -->
        <div class="mt-16 max-w-4xl mx-auto">
            <div class="flex flex-wrap items-center justify-center gap-x-10 gap-y-4 mb-6">
                <div class="flex items-center gap-2.5">
                    <div class="flex-shrink-0 w-5 h-5 rounded-full bg-emerald-500/10 flex items-center justify-center border border-emerald-500/20">
                        <svg class="w-3 h-3 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                    </div>
                    <span class="text-sm font-medium text-slate-300 tracking-wide">No payment until onboarding</span>
                </div>
                <div class="hidden md:block w-px h-4 bg-white/10"></div>
                <div class="flex items-center gap-2.5">
                    <div class="flex-shrink-0 w-5 h-5 rounded-full bg-emerald-500/10 flex items-center justify-center border border-emerald-500/20">
                        <svg class="w-3 h-3 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                    </div>
                    <span class="text-sm font-medium text-slate-300 tracking-wide">HIPAA compliant chronic care workflows</span>
                </div>
                <div class="hidden md:block w-px h-4 bg-white/10"></div>
                <div class="flex items-center gap-2.5">
                    <div class="flex-shrink-0 w-5 h-5 rounded-full bg-emerald-500/10 flex items-center justify-center border border-emerald-500/20">
                        <svg class="w-3 h-3 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                    </div>
                    <span class="text-sm font-medium text-slate-300 tracking-wide">Dedicated care coordination support</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 2: LOGO TICKER -->
<section class="max-w-6xl mx-auto py-14 bg-white border-b border-slate-50">
    <div class="text-center mb-10">
        <h2 class="text-xs font-bold text-[13px] leading-relaxed text-gray-400 tracking-[0.2em] uppercase">
            Trusted by clinics, physicians, and care networks
        </h2>
    </div>
    <div class="group w-full max-w-[1200px] mx-auto overflow-hidden [mask-image:_linear-gradient(to_right,transparent_0,_black_128px,_black_calc(100%-128px),transparent_100%)]">
        <ul class="flex items-center animate-infinite-scroll">
            <li class="w-1/5 flex-shrink-0 px-8"><img src="https://edge-webapp.s3.amazonaws.com/wp-content/uploads/2025/02/17181011/Northwest_Dental.png" class="h-8 w-full object-contain grayscale opacity-60 hover:opacity-100 hover:grayscale-0 transition-all duration-300"></li>
            <li class="w-1/5 flex-shrink-0 px-8"><img src="https://edge-webapp.s3.amazonaws.com/wp-content/uploads/2025/02/17181012/DHR-Health.png" class="h-8 w-full object-contain grayscale opacity-60 hover:opacity-100 hover:grayscale-0 transition-all duration-300"></li>
            <li class="w-1/5 flex-shrink-0 px-8"><img src="https://edge-webapp.s3.amazonaws.com/wp-content/uploads/2025/02/17181011/Navaderm.png" class="h-8 w-full object-contain grayscale opacity-60 hover:opacity-100 hover:grayscale-0 transition-all duration-300"></li>
            <li class="w-1/5 flex-shrink-0 px-8"><img src="https://edge-webapp.s3.amazonaws.com/wp-content/uploads/2025/02/17181012/Allied_Physicians.png" class="h-8 w-full object-contain grayscale opacity-60 hover:opacity-100 hover:grayscale-0 transition-all duration-300"></li>
            <li class="w-1/5 flex-shrink-0 px-8"><img src="https://edge-webapp.s3.amazonaws.com/wp-content/uploads/2025/02/17181011/Simmerer_Insurance.png" class="h-8 w-full object-contain grayscale opacity-60 hover:opacity-100 hover:grayscale-0 transition-all duration-300"></li>
            <!-- Duplicate for loop -->
            <li class="w-1/5 flex-shrink-0 px-8"><img src="https://edge-webapp.s3.amazonaws.com/wp-content/uploads/2025/02/17181011/Northwest_Dental.png" class="h-8 w-full object-contain grayscale opacity-60 hover:opacity-100 hover:grayscale-0 transition-all duration-300"></li>
            <li class="w-1/5 flex-shrink-0 px-8"><img src="https://edge-webapp.s3.amazonaws.com/wp-content/uploads/2025/02/17181012/DHR-Health.png" class="h-8 w-full object-contain grayscale opacity-60 hover:opacity-100 hover:grayscale-0 transition-all duration-300"></li>
            <li class="w-1/5 flex-shrink-0 px-8"><img src="https://edge-webapp.s3.amazonaws.com/wp-content/uploads/2025/02/17181011/Navaderm.png" class="h-8 w-full object-contain grayscale opacity-60 hover:opacity-100 hover:grayscale-0 transition-all duration-300"></li>
            <li class="w-1/5 flex-shrink-0 px-8"><img src="https://edge-webapp.s3.amazonaws.com/wp-content/uploads/2025/02/17181012/Allied_Physicians.png" class="h-8 w-full object-contain grayscale opacity-60 hover:opacity-100 hover:grayscale-0 transition-all duration-300"></li>
            <li class="w-1/5 flex-shrink-0 px-8"><img src="https://edge-webapp.s3.amazonaws.com/wp-content/uploads/2025/02/17181011/Simmerer_Insurance.png" class="h-8 w-full object-contain grayscale opacity-60 hover:opacity-100 hover:grayscale-0 transition-all duration-300"></li>
        </ul>
    </div>
</section>

<!-- SECTION 3: RECEPTIONIST GRID -->
<section class="py-20 bg-gray-50">
    <div class="max-w-6xl mx-auto px-6">
        <div class="text-center max-w-4xl mx-auto mb-16">
            <span class="inline-block px-5 py-2 rounded-full bg-[var(--primary)]/10 text-[var(--primary)] text-[11px] font-bold uppercase tracking-[0.12em] mb-6 border border-[var(--primary)]/20">
                What We Provide
            </span>
            <h2 class="text-[26px] md:text-[36px] font-extrabold text-slate-900 mb-4 tracking-tight capitalize">How Virtual Chronic Care Management Works</h2>
            <p class="text-slate-500 text-lg">Specialized care coordination teams supporting providers with continuous patient engagement, monitoring, and documentation for chronic conditions.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-6">
            @php
                $cards = [

                    [
                        'title' => 'Chronic Condition Monitoring',
                        'icon' => 'M 3 12 h 3 l 3 -9 l 4 18 l 3 -10 l 3 1 h 3', // EKG Activity wave (tracking status)
                        'desc' => 'Ongoing tracking of patient health status for chronic conditions such as diabetes, hypertension, and COPD.'
                    ],

                    [
                        'title' => 'Care Plan Coordination',
                        'icon' => 'M 9 5 H 7 a 2 2 0 0 0 -2 2 v 12 a 2 2 0 0 0 2 2 h 10 a 2 2 0 0 0 2 -2 V 7 a 2 2 0 0 0 -2 -2 h -2 M 9 5 a 2 2 0 0 0 2 2 h 2 a 2 2 0 0 0 2 -2 M 9 5 a 2 2 0 1 2 -2 h 2 a 2 2 0 1 2 2 M 9 14 l 2 2 4 -4', // Care Plan Clipboard Checklist
                        'desc' => 'Support in organizing, updating, and maintaining personalized care plans tailored to patient needs.'
                    ],

                    [
                        'title' => 'Remote Patient Engagement',
                        'icon' => 'M 21 15 a 2 2 0 0 1 -2 2 H 7 l -4 4 V 5 a 2 2 0 0 1 2 -2 h 14 a 2 2 0 0 1 2 2 z', // Chat Bubble / Outreach
                        'desc' => 'Regular patient outreach and follow-ups to encourage adherence to treatment plans and provider recommendations.'
                    ],

                    [
                        'title' => 'Medication Follow-Up',
                        'icon' => 'M 17.59 6.41 a 5 5 0 0 0 -7.07 0 L 6.41 10.51 a 5 5 0 0 0 0 7.07 l 0 0 a 5 5 0 0 0 7.07 0 l 4.11 -4.1 a 5 5 0 0 0 0 -7.07 z M 8.5 15.5 l 7 -7', // Pill Capsule
                        'desc' => 'Prescription follow-ups, medication reminders, and compliance monitoring to support better health outcomes.'
                    ],

                    [
                        'title' => 'Clinical Document Support',
                        'icon' => 'M 14 2 H 6 a 2 2 0 0 0 -2 2 v 16 a 2 2 0 0 0 2 2 h 12 a 2 2 0 0 0 2 -2 V 8 z M 14 2 v 6 h 6 M 8 12 h 8 M 8 16 h 5', // Document Page
                        'desc' => 'Accurate documentation of patient interactions, care activities, and monitoring services for compliance and reporting.'
                    ],

                ];
            @endphp

            @foreach($cards as $card)
            <div class="group bg-white p-4 rounded-[2.5rem] border border-slate-100 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 text-center flex flex-col items-center">
                <div class="w-14 h-14 bg-[var(--primary)] rounded-2xl flex items-center justify-center mb-4 shadow-lg shadow-[var(--primary)]/20 group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $card['icon'] }}"></path>
                    </svg>
                </div>
                <h3 class="text-[16px] font-bold text-slate-900 mb-3 px-2 group-hover:text-[var(--primary)] transition-colors">{{ $card['title'] }}</h3>
                <p class="text-sm text-slate-500 leading-relaxed">{{ $card['desc'] }}</p>
            </div>
            @endforeach
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
               One Care System. <span class="text-[var(--primary)]">Full Chronic Support.</span>
            </h2>
            <p class="text-slate-500 text-md max-w-2xl mx-auto leading-relaxed">
                A structured virtual chronic care management solution designed to enhance patient engagement, reduce hospital readmissions, and improve long-term outcomes.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @php
                $fees = [

                    [
                        'title' => 'Dedicated Care Coordination Team',
                        'icon' => 'M 17 21 v -2 a 4 4 0 0 0 -4 -4 H 5 a 4 4 0 0 0 -4 4 v 2 M 9 11 a 4 4 0 1 0 0 -8 a 4 4 0 1 0 0 8 M 23 21 v -2 a 4 4 0 0 0 -3 -3.87 M 16 3.13 a 4 4 0 0 1 0 7.75', // Team of professionals (Users)
                        'desc' => 'Trained professionals managing ongoing patient communication, care coordination, and support services.',
                        'badge' => 'Included'
                    ],

                    [
                        'title' => 'Remote Monitoring Assistance',
                        'icon' => 'M 3 12 h 3 l 3 -9 l 4 18 l 3 -10 l 3 1 h 3', // EKG Activity wave (tracking status)
                        'desc' => 'Continuous patient status tracking, monitoring support, and reporting to help improve care outcomes.',
                        'badge' => 'Included'
                    ],

                    [
                        'title' => 'HIPAA-Compliant Care Handling',
                        'icon' => 'M 19 11 H 5 a 2 2 0 0 0 -2 2 v 7 a 2 2 0 0 0 2 2 h 14 a 2 2 0 0 0 2 -2 v -7 a 2 2 0 0 0 -2 -2 z M 7 11 V 7 a 5 5 0 0 1 10 0 v 4', // Padlock
                        'desc' => 'Secure management of patient data, communications, and care activities under strict compliance standards.',
                        'badge' => 'Included'
                    ],

                    [
                        'title' => 'Ongoing Follow-Up Management',
                        'icon' => 'M 12 22 a 10 10 0 1 0 0 -20 a 10 10 0 0 0 0 20 z M 12 6 v 6 l 4 2', // Ongoing timer/follow-up clock
                        'desc' => 'Regular patient outreach, care continuity tracking, and follow-up coordination to support treatment adherence.',
                        'badge' => 'Included'
                    ],

                ];
            @endphp

            @foreach($fees as $fee)
            <div class="bg-white border border-slate-100 rounded-[2rem] p-6 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col items-center text-center">
                <div class="mb-6 text-[var(--primary)]">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $fee['icon'] }}"></path>
                    </svg>
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

<style>
    .feature-img-container {
        /* This ensures the image maintains a professional size relative to text */
        max-width: 480px;
        width: 100%;
        margin: 0 auto;
    }

    .rounded-feature {
        border-radius: 2.5rem;
    }
</style>

<section class="py-20 bg-white overflow-hidden">
    <div class="max-w-6xl mx-auto px-6 space-y-32">
        
        <!-- Feature 1: Text Left, Proportional Image Right -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-20 items-center">
            <!-- Text Column (Spans 7) -->
            <div class="lg:col-span-7 order-2 lg:order-1">
                <h2 class="text-[26px] md:text-[36px] font-extrabold text-slate-900 mb-8 tracking-tight leading-[1.15] text-balance">
                    Smarter Monitoring. <span class="text-[var(--primary)]">Healthier Patients. </span>
                </h2>
                <div class="space-y-6 max-w-2xl">
                    <p class="text-slate-500 text-[16px] leading-relaxed">
                        Chronic conditions require consistent attention beyond clinical visits. Our virtual chronic care management services help providers maintain regular engagement with patients, reducing complications and improving long-term health outcomes.
                    </p>
                    <p class="text-slate-500 text-[16px] leading-relaxed">
                        With outsourced chronic care management for clinics and physicians, your team can extend care without increasing internal workload.

                    </p>
                </div>
            </div>

            <!-- Image Column (Spans 5) -->
            <div class="lg:col-span-5 order-1 lg:order-2">
                <div class="feature-img-container relative group">
                    <!-- Subtle Glow -->
                    <div class="absolute -inset-4 bg-[var(--primary)]/5 rounded-[3rem] blur-2xl -z-10 group-hover:bg-[var(--primary)]/10 transition-colors"></div>
                    
                    <div class="rounded-feature overflow-hidden shadow-2xl shadow-slate-200">
                        <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?auto=format&fit=crop&q=80&w=600" 
                             alt="Healthcare Support" 
                             class="w-full h-full object-cover aspect-[4/5] transition-transform duration-700 group-hover:scale-105">
                    </div>
                </div>
            </div>
        </div>

        <!-- Feature 2: Proportional Image Left, Text Right -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-20 items-center">
            <!-- Image Column (Spans 5) -->
            <div class="lg:col-span-5 order-1 lg:order-1">
                <div class="feature-img-container relative group">
                    <!-- Subtle Glow -->
                    <div class="absolute -inset-4 bg-[var(--primary)]/5 rounded-[3rem] blur-2xl -z-10 group-hover:bg-[var(--primary)]/10 transition-colors"></div>

                    <div class="rounded-feature overflow-hidden shadow-2xl shadow-slate-200">
                        <img src="https://images.unsplash.com/photo-1551076805-e1869033e561?auto=format&fit=crop&q=80&w=600" 
                             alt="Privacy and Comfort" 
                             class="w-full h-full object-cover aspect-[4/5] transition-transform duration-700 group-hover:scale-105">
                    </div>
                </div>
            </div>

            <!-- Text Column (Spans 7) -->
            <div class="lg:col-span-7 order-2 lg:order-2">
                <h2 class="text-[26px] md:text-[36px] font-extrabold text-slate-900 mb-8 tracking-tight leading-[1.15] text-balance capitalize">
                    Ongoing support. <span class="text-[var(--primary)]">Always secure. .</span>
                </h2>
                <div class="space-y-6 max-w-2xl">
                    <p class="text-slate-500 text-[16px] leading-relaxed">
                        Patient privacy and safety remain central to every interaction. As a HIPAA compliant chronic care management company, we ensure all communication, monitoring, and documentation processes are handled securely and responsibly.
                    </p>
                    <p class="text-slate-500 text-[16px] leading-relaxed">
                       From remote patient monitoring and chronic care support services to structured follow-ups, every process is designed to improve care quality while maintaining compliance.
                </div>
            </div>
        </div>

    </div>
</section>

<section class="px-6 py-20 bg-gray-50 antialiased">
    <div class="max-w-6xl mx-auto">
        
        <!-- Section Header -->
        <div class="text-center mb-16">
            <span class="inline-block px-5 py-2 rounded-full bg-[var(--primary)]/10 text-[var(--primary)] text-[11px] font-bold uppercase tracking-[0.12em] mb-10 border border-[var(--primary)]/20">
                DIGITAL CARE COORDINATION SYSTEMS
            </span>
            <h2 class="text-[#111827] text-[26px] md:text-[36px] font-[900] leading-[1.1] tracking-[-0.04em] mb-6 capitalize">
                Coordination Support for the Platforms <span class="text-[var(--primary)]">You Already Use</span>
            </h2>
            <p class="text-black text-[14px] md:text-[16px] leading-relaxed max-w-2xl mx-auto font-normal">
                Our virtual chronic care management specialists are trained to work across leading healthcare and remote monitoring systems.
            </p>
        </div>

        <!-- EHR Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @php
                $ehrList = [

                    [
                        'title' => 'Epic Systems',
                        'desc' => 'Care coordination, chronic condition tracking, and patient management workflows.',
                        'icon' => 'building'
                    ],

                    [
                        'title' => 'Athenahealth',
                        'desc' => 'Patient communication, care management, and CCM workflow support.',
                        'icon' => 'building'
                    ],

                    [
                        'title' => 'eClinicalWorks',
                        'desc' => 'Clinical documentation, care planning, and patient monitoring support.',
                        'icon' => 'building'
                    ],

                    [
                        'title' => 'CareCloud',
                        'desc' => 'Chronic care billing, care coordination, and practice management support.',
                        'icon' => 'building'
                    ],

                    [
                        'title' => 'Teladoc Health',
                        'desc' => 'Remote patient engagement, virtual care, and telehealth coordination.',
                        'icon' => 'building'
                    ],

                    [
                        'title' => 'RPM Dashboards',
                        'desc' => 'Remote patient monitoring integration, data tracking, and reporting support.',
                        'icon' => 'chart'
                    ],

                    [
                        'title' => 'NextGen Healthcare',
                        'desc' => 'Chronic care documentation, patient tracking, and compliance reporting.',
                        'icon' => 'building'
                    ],

                    [
                        'title' => 'RingCentral',
                        'desc' => 'Patient communication, outreach campaigns, and follow-up coordination.',
                        'icon' => 'phone'
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

<section class="py-20 px-6 bg-white antialiased">
    <div class="max-w-6xl mx-auto">
        
        <!-- Header Section -->
        <div class="text-center mb-20">
            <h2 class="text-[#111827]  text-[26px] md:text-[36px] font-[900] leading-[1.1] tracking-[-0.04em] mb-6">
                Why Choose VMA Chronic Care Management Services
            </h2>
            <p class="text-black text-[14px] md:text-[16px] leading-relaxed max-w-md mx-auto font-normal">
                Solve your most pressing workforce challenges with fast, easy access to bilingual, trained talent.
            </p>
        </div>

        <!-- Features Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-12 gap-y-16">
            @php
                $features = [

                    [
                        'title' => 'Healthcare-Focused Care Expertise',
                        'desc' => 'Specialized teams trained to support chronic disease management across diverse patient populations and care settings.'
                    ],

                    [
                        'title' => 'Improved Patient Engagement',
                        'desc' => 'Consistent patient outreach and follow-ups help improve treatment adherence and reduce missed care opportunities.'
                    ],

                    [
                        'title' => 'HIPAA-Compliant Operations',
                        'desc' => 'Secure handling of patient data, communications, and documentation under strict HIPAA-compliant processes.'
                    ],

                    [
                        'title' => 'Reduced Provider Workload',
                        'desc' => 'Free clinical teams from time-consuming care coordination, monitoring, and administrative responsibilities.'
                    ],

                    [
                        'title' => 'Scalable Care Support Model',
                        'desc' => 'Flexible care management services designed for independent practices, clinics, and large healthcare organizations.'
                    ],

                    [
                        'title' => 'No Upfront Commitment',
                        'desc' => 'Get started when you are ready with no advance payment required before onboarding and implementation.'
                    ],

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
                Get CCM Support 
            </a>
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
                    <h2 class=" text-[26px] md:text-[36px] font-[900] leading-[1.1] tracking-[-0.04em] text-[#002d5b] mb-4 tracking-tight">
                        Plan Your Free Consultation Call
                    </h2>
                    <p class="text-slate-500 text-[16px] mb-10">
                        Let’s discuss how our virtual chronic care management services can help your practice improve patient outcomes and reduce care gaps.
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
                                <option>Eligibility and Benefits Verification</option>
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
                            By submitting this form, you agree to our Privacy Policy and consent to receive SMS and email updates. You can opt out anytime.
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
                Limited Time to Hire
            </span>
        </div>

        <!-- Main Heading -->
        <h2 class="text-white text-[42px] md:text-[46px] font-extrabold leading-[1.1] tracking-[-0.03em] mb-6 capitalize">
            Get your chronic care management team <br>
            in <span class="bg-gradient-to-r from-[#000] via-[#000] to-[#000] bg-clip-text text-transparent"> just 7 days</span>
        </h2>

        <!-- Subheading -->
        <p class="text-white/80 text-[13px] md:text-[16px] leading-relaxed max-w-2xl mx-auto mb-8 font-normal">
           Book a quick demo for virtual care coordination specialists support.<br class="hidden md:block">
           No contracts. No hidden fees. No risk.
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
        <div class="flex flex-wrap justify-center items-center gap-x-4 gap-y-4">
            @php
                $benefits = [
                    'Pay only after onboarding',
                    'Free replacement support',
                    'Fast setup in 7 days',
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