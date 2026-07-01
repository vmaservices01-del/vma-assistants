@extends('frontend.layouts.app')

@section('content')   


<section class="relative w-full min-h-screen flex items-center justify-center bg-white py-20 lg:py-28 px-4 sm:px-6 lg:px-8 overflow-hidden">
    
    <!-- Light-Themed Grid Overlay -->
    <div class="absolute inset-0 bg-[radial-gradient(rgba(0,0,0,0.02)_1.2px,transparent_1.2px)] [background-size:24px_24px] pointer-events-none z-0"></div>
    
    <!-- Centered Ambient Spotlight Glow (Adjusted opacity for white background) -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] rounded-full pointer-events-none z-0" 
         style="background: radial-gradient(circle, color-mix(in srgb, var(--primary-color) 4%, transparent) 0%, transparent 70%);"></div>
    
    <!-- Main Content Container -->
    <div class="max-w-4xl w-full flex flex-col items-center text-center relative z-10">
        
        <!-- Top Pill Badge -->
        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-[10px] md:text-[11px] font-bold border tracking-wider uppercase mb-7 text-primary"
             style="background-color: color-mix(in srgb, var(--primary-color) 6%, transparent); border-color: color-mix(in srgb, var(--primary-color) 20%, transparent);">
            <span class="w-1.5 h-1.5 rounded-full bg-primary" style="box-shadow: 0 0 8px var(--primary-color);"></span>
            Why Edge
        </div>

        <!-- Main Headline (White background friendly typography) -->
        <h2 class="text-3xl sm:text-4xl md:text-[44px] font-extrabold text-[#0F172A] leading-[1.15] tracking-tight max-w-3xl mb-6 font-sans">
            The <span class="text-primary">Secure Remote</span><br>
            Workforce Platform
        </h2>

        <!-- Subtitle Paragraph -->
        <p class="text-slate-500 text-sm md:text-[15px] leading-relaxed text-center max-w-2xl mb-10 font-sans">
            An all-in-one infrastructure for scaling compliant operations — combining people, process, and governance-driven technology.
        </p>

        <!-- Action Buttons -->
        <div class="flex flex-col sm:flex-row gap-4 mb-16 w-full justify-center">
            <!-- Solid CTA Button -->
            <button class="bg-primary hover:opacity-95 text-white font-bold py-3.5 px-8 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-0.5 flex items-center justify-center gap-2 group font-sans"
                    style="shadow: 0 4px 14px color-mix(in srgb, var(--primary-color) 25%, transparent);">
                Book a Demo <span class="transition-transform duration-300 group-hover:translate-x-1">→</span>
            </button>
            <!-- Secondary Outline Button -->
            <button class="bg-white hover:bg-slate-50 text-slate-800 border border-slate-200/80 font-bold py-3.5 px-8 rounded-lg shadow-sm transition-all duration-300 transform hover:-translate-y-0.5 font-sans">
                Explore the Platform
            </button>
        </div>

        <!-- Bottom Features Bar (Light Theme colors) -->
        <div class="w-full max-w-[820px] border border-slate-200 bg-slate-50/50 px-6 py-5 rounded-[24px] md:rounded-full flex flex-col items-center gap-3">
            
            <!-- Row 1: Horizontal on desktop, stacked on mobile -->
            <div class="flex flex-col md:flex-row items-center justify-center gap-4 md:gap-0 text-slate-500 text-[12.5px] font-medium leading-none tracking-wide text-center">
                
                <span class="inline-flex items-center gap-2 md:pr-5">
                    <span class="text-primary font-bold">✓</span> 6 platform pillars
                </span>
                
                <!-- Separators -->
                <span class="hidden md:inline text-slate-300 mr-5">|</span>
                
                <span class="inline-flex items-center gap-2 md:pr-5">
                    <span class="text-primary font-bold">✓</span> 1 flat fee, all included
                </span>
                
                <span class="hidden md:inline text-slate-300 mr-5">|</span>
                
                <span class="inline-flex items-center gap-2 md:pr-5">
                    <span class="text-primary font-bold">✓</span> SOC 2 & HIPAA compliant
                </span>
                
                <span class="hidden md:inline text-slate-300">|</span>
                
            </div>
            
            <!-- Row 2: Centered underneath on desktop, stacked on mobile -->
            <div class="flex items-center gap-2 text-slate-500 text-[12.5px] font-medium leading-none tracking-wide">
                <span class="text-primary font-bold">✓</span> $0 replacement guarantee
            </div>

        </div>

    </div>
</section>

<!-- 4-COLUMN COMPLIANCE SECTION -->
<section class="w-full bg-primary py-16 lg:py-20 px-4 sm:px-6 lg:px-8 flex justify-center items-center">
    
    <!-- 4-Column Grid (Responsive across all screen sizes) -->
    <div class="max-w-6xl w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        
        <!-- Card 1: HIPAA -->
        <div class="rounded-2xl p-6 md:p-8 flex flex-col items-center text-center border transition-all duration-300"
             style="background-color: color-mix(in srgb, var(--secondary-color) 50%, #000); border-color: color-mix(in srgb, var(--primary-color) 12%, transparent);"
             onmouseenter="this.style.borderColor='color-mix(in srgb, var(--primary-color) 35%, transparent)'"
             onmouseleave="this.style.borderColor='color-mix(in srgb, var(--primary-color) 12%, transparent)'">
            <!-- Building/Campus Icon -->
            <div class="text-white mb-4">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                </svg>
            </div>
            <!-- Dynamic Link Title -->
            <span href="#" class="text-xs md:text-sm font-bold tracking-tight text-primary hover:underline mb-2 block font-sans">
                HIPAA — HHS.gov
            </span>
            <!-- Description -->
            <p class="text-[11.5px] leading-relaxed text-slate-300 font-sans">
                Full ePHI handling controls. BAA signed before any talent touches your data.
            </p>
        </div>

        <!-- Card 2: SOC 2 -->
        <div class="rounded-2xl p-6 md:p-8 flex flex-col items-center text-center border transition-all duration-300"
             style="background-color: color-mix(in srgb, var(--secondary-color) 50%, #000); border-color: color-mix(in srgb, var(--primary-color) 12%, transparent);"
             onmouseenter="this.style.borderColor='color-mix(in srgb, var(--primary-color) 35%, transparent)'"
             onmouseleave="this.style.borderColor='color-mix(in srgb, var(--primary-color) 12%, transparent)'">
            <!-- Lock Icon -->
            <div class="text-white mb-4">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                </svg>
            </div>
            <span href="#" class="text-xs md:text-sm font-bold tracking-tight text-primary hover:underline mb-2 block font-sans">
                SOC 2 Type II — AICPA
            </span>
            <p class="text-[11.5px] leading-relaxed text-slate-300 font-sans">
                Independently audited. Continuous monitoring of security, availability & confidentiality.
            </p>
        </div>

        <!-- Card 3: ISO 27001 -->
        <div class="rounded-2xl p-6 md:p-8 flex flex-col items-center text-center border transition-all duration-300"
             style="background-color: color-mix(in srgb, var(--secondary-color) 50%, #000); border-color: color-mix(in srgb, var(--primary-color) 12%, transparent);"
             onmouseenter="this.style.borderColor='color-mix(in srgb, var(--primary-color) 35%, transparent)'"
             onmouseleave="this.style.borderColor='color-mix(in srgb, var(--primary-color) 12%, transparent)'">
            <!-- Globe Icon -->
            <div class="text-white mb-4">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="10" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10M12 2a15.3 15.3 0 00-4 10 15.3 15.3 0 004 10M2 12h20" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <span class="text-xs md:text-sm font-bold tracking-tight text-primary hover:underline mb-2 block font-sans">
                ISO 27001 — ISO.org
            </span>
            <p class="text-[11.5px] leading-relaxed text-slate-300 font-sans">
                Global gold standard for information security management systems.
            </p>
        </div>

        <!-- Card 4: GDPR -->
        <div class="rounded-2xl p-6 md:p-8 flex flex-col items-center text-center border transition-all duration-300"
             style="background-color: color-mix(in srgb, var(--secondary-color) 50%, #000); border-color: color-mix(in srgb, var(--primary-color) 12%, transparent);"
             onmouseenter="this.style.borderColor='color-mix(in srgb, var(--primary-color) 35%, transparent)'"
             onmouseleave="this.style.borderColor='color-mix(in srgb, var(--primary-color) 12%, transparent)'">
            <!-- Globe Icon -->
            <div class="text-white mb-4">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="10" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10M12 2a15.3 15.3 0 00-4 10 15.3 15.3 0 004 10M2 12h20" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <span class="text-xs md:text-sm font-bold tracking-tight text-primary hover:underline mb-2 block font-sans">
                GDPR — gdpr.eu
            </span>
            <p class="text-[11.5px] leading-relaxed text-slate-300 font-sans">
                Full compliance with EU data privacy regulations. Data Processing Addendum available.
            </p>
        </div>

    </div>
</section>

<section class="w-full bg-[#f8fafc] py-16 lg:py-24 px-6 lg:px-8 flex justify-center items-center">
    <div class="max-w-6xl w-full flex flex-col items-center">
        
        <!-- Top Pill Badge (Dynamic background/border/text using primary variables) -->
        <div class="inline-flex items-center justify-center px-4 py-1.5 bg-[var(--primary-color)]/[0.06] text-primary rounded-full text-[10px] md:text-[11px] font-bold border border-primary/20 tracking-wider uppercase mb-6 font-sans">
            Proven Results
        </div>

        <!-- Main Headline -->
        <h2 class="text-3xl sm:text-4xl md:text-[40px] font-extrabold text-center text-[#0F172A] leading-[1.2] tracking-tight mb-5 font-sans">
            Teams scale confidently with <br class="hidden sm:inline">
            Edge
        </h2>

        <!-- Italic Subtitle Quote -->
        <p class="text-slate-500 text-center text-sm md:text-base max-w-xl mx-auto italic leading-relaxed mb-16 font-sans">
            "You cannot run a successful practice without consistent employees. Edge has stabilized that aspect for us."
        </p>

        <!-- 4-Card Responsive Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 w-full">
            
            <!-- Card 1: 97% -->
            <div class="bg-white rounded-[24px] border border-slate-200/60 p-8 flex flex-col items-center text-center shadow-[0_4px_20px_rgba(0,0,0,0.01)] hover:shadow-md hover:border-primary/25 transition-all duration-300">
                <span class="text-4xl md:text-[44px] font-black text-primary tracking-tight mb-4 font-sans">
                    97%
                </span>
                <span class="text-[13px] md:text-sm leading-relaxed text-slate-500 font-sans max-w-[180px]">
                    Retention rate of Edge Talent
                </span>
            </div>

            <!-- Card 2: 53% -->
            <div class="bg-white rounded-[24px] border border-slate-200/60 p-8 flex flex-col items-center text-center shadow-[0_4px_20px_rgba(0,0,0,0.01)] hover:shadow-md hover:border-primary/25 transition-all duration-300">
                <span class="text-4xl md:text-[44px] font-black text-primary tracking-tight mb-4 font-sans">
                    53%
                </span>
                <span class="text-[13px] md:text-sm leading-relaxed text-slate-500 font-sans max-w-[180px]">
                    Faster hiring time
                </span>
            </div>

            <!-- Card 3: 71% -->
            <div class="bg-white rounded-[24px] border border-slate-200/60 p-8 flex flex-col items-center text-center shadow-[0_4px_20px_rgba(0,0,0,0.01)] hover:shadow-md hover:border-primary/25 transition-all duration-300">
                <span class="text-4xl md:text-[44px] font-black text-primary tracking-tight mb-4 font-sans">
                    71%
                </span>
                <span class="text-[13px] md:text-sm leading-relaxed text-slate-500 font-sans max-w-[180px]">
                    Increase in operational efficiency
                </span>
            </div>

            <!-- Card 4: $2.4M -->
            <div class="bg-white rounded-[24px] border border-slate-200/60 p-8 flex flex-col items-center text-center shadow-[0_4px_20px_rgba(0,0,0,0.01)] hover:shadow-md hover:border-primary/25 transition-all duration-300">
                <span class="text-4xl md:text-[44px] font-black text-primary tracking-tight mb-4 font-sans">
                    $2.4M
                </span>
                <span class="text-[13px] md:text-sm leading-relaxed text-slate-500 font-sans max-w-[180px]">
                    Annualized savings on admin talent
                </span>
            </div>

        </div>

    </div>
</section>

<section class="relative w-full min-h-screen flex items-center justify-center bg-[#050811] py-20 lg:py-28 px-4 sm:px-6 lg:px-8 overflow-hidden">
    
    <!-- Grid Overlay -->
    <div class="absolute inset-0 bg-[radial-gradient(rgba(255,255,255,0.015)_1.2px,transparent_1.2px)] [background-size:24px_24px] pointer-events-none z-0"></div>
    
    <!-- Centered Spotlight Glow (Dynamically colored to match your primary theme color) -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] rounded-full pointer-events-none z-0" 
         style="background: radial-gradient(circle, color-mix(in srgb, var(--primary-color) 16%, transparent) 0%, transparent 70%);"></div>
    
    <!-- Main Content Container (Elevated to z-10 to stay above the grid and spotlight) -->
    <div class="max-w-4xl w-full flex flex-col items-center text-center relative z-10">
        
        <!-- Top Pill Badge -->
        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-[10px] md:text-[11px] font-bold border tracking-wider uppercase mb-7 text-primary"
             style="background-color: color-mix(in srgb, var(--primary-color) 6%, transparent); border-color: color-mix(in srgb, var(--primary-color) 20%, transparent);">
            <span class="w-1.5 h-1.5 rounded-full bg-primary" style="box-shadow: 0 0 8px var(--primary-color);"></span>
            Relationship Managers
        </div>

        <!-- Main Headline -->
        <h2 class="text-3xl sm:text-4xl md:text-[44px] font-extrabold text-white leading-[1.15] tracking-tight max-w-3xl mb-6 font-sans">
            You shouldn't have to figure<br>
            it out alone.
        </h2>

        <!-- Subtitle Paragraph -->
        <p class="text-slate-400 text-sm md:text-[15px] leading-relaxed text-center max-w-2xl mb-10 font-sans">
            Every Edge customer gets a dedicated Relationship Manager — an industry expert who knows your business, knows your team, and has navigated your exact challenges across dozens of companies like yours. One person. Always in your corner. On both sides of the relationship.
        </p>

        <!-- Action Buttons -->
        <div class="flex flex-col sm:flex-row gap-4 mb-16 w-full justify-center">
            <!-- Dynamic solid background and hover shadow -->
            <button class="bg-primary hover:opacity-95 text-white font-bold py-3.5 px-8 rounded-lg transition-all duration-300 transform hover:-translate-y-0.5 flex items-center justify-center gap-2 group font-sans"
                    style="box-shadow: 0 4px 20px color-mix(in srgb, var(--primary-color) 25%, transparent);">
                Book a Demo <span class="transition-transform duration-300 group-hover:translate-x-1">→</span>
            </button>
            <button class="bg-white hover:bg-slate-100 text-[#0f172a] font-bold py-3.5 px-8 rounded-lg transition-all duration-300 transform hover:-translate-y-0.5 hover:shadow-[0_6px_20px_rgba(255,255,255,0.1)] font-sans">
                See What RMs Do
            </button>
        </div>

        <!-- Bottom Features Bar -->
        <div class="w-full max-w-[820px] border bg-white/[0.015] px-6 py-5 rounded-[24px] md:rounded-full flex flex-col items-center gap-3"
             style="border-color: color-mix(in srgb, var(--primary-color) 15%, transparent);">
            
            <!-- Row 1: Horizontal on desktop, stacked on mobile -->
            <div class="flex flex-col md:flex-row items-center justify-center gap-4 md:gap-0 text-slate-400 text-[12.5px] font-medium leading-none tracking-wide text-center">
                
                <span class="inline-flex items-center gap-2 md:pr-5">
                    <span class="text-primary font-bold">✓</span> Dedicated to your industry
                </span>
                
                <!-- Separators -->
                <span class="hidden md:inline text-slate-800 mr-5">|</span>
                
                <span class="inline-flex items-center gap-2 md:pr-5">
                    <span class="text-primary font-bold">✓</span> Serves both you & your talent
                </span>
                
                <span class="hidden md:inline text-slate-800 mr-5">|</span>
                
                <span class="inline-flex items-center gap-2 md:pr-5">
                    <span class="text-primary font-bold">✓</span> Phone & email — no tickets
                </span>
                
                <span class="hidden md:inline text-slate-800">|</span>
                
            </div>
            
            <!-- Row 2: Centered underneath on desktop, stacked on mobile -->
            <div class="flex items-center gap-2 text-slate-400 text-[12.5px] font-medium leading-none tracking-wide">
                <span class="text-primary font-bold">✓</span> Included in every engagement
            </div>

        </div>

    </div>
</section>

<section class="max-w-6xl mx-auto px-6 py-12">
    @php
        $customerBenefits = [
            'Improves claim submission accuracy and reimbursement rates',
            'Reduces billing errors and rejected claims',
            'Streamlines physician revenue cycle operations',
            'Provides transparent reporting and financial insights',
            'Supports insurance coordination and payer communication',
        ];

        $talentBenefits = [
            'Speeds up insurance verification and approvals',
            'Ensures smoother patient billing workflows',
            'Helps resolve claim and payment concerns quickly',
            'Maintains HIPAA-compliant billing processes',
            'Delivers reliable ongoing billing support and follow-ups',
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
                PHYSICIAN BILLING BRIDGE
            </div>

            <!-- Heading -->
            <h2 class="text-3xl md:text-4xl font-bold font-gnarly leading-[1.1] mb-6 max-w-3xl capitalize">
                One billing partner that manages every step.<br>
                That's the difference.
            </h2>

            <!-- Paragraph -->
            <p class="text-white/70 text-[14px] max-w-3xl leading-relaxed mb-10 font-sans">
                Our Physician Billing Service account manager isn’t just your billing contact. They serve as the single point of contact for both your practice and our billing team, a bridge between both sides. When there’s a concern, they already have context from both perspectives. When there’s a discrepancy, they resolve it. When there’s an opportunity, they coordinate and optimize the revenue cycle.
            </p>

            <!-- Bottom Comparison Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
                
                <!-- For You (Customer) -->
                <div class="lg:col-span-5">
                    <h3 class="text-white/50 text-[14px] font-bold tracking-widest uppercase mb-6">FOR YOUR PRACTICE</h3>
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
                    <span class="text-white/60 text-xs font-bold uppercase tracking-wider">Your VMA</span>
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
                VMA provides complete affordable hospital billing support services designed to help healthcare facilities improve operational efficiency with reliable infrastructure and trained professionals.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @php
                $fees = [
                    [
                        'title' => 'Hospital Onboarding',
                        'desc' => 'Fully managed onboarding for your dedicated hospital billing support team.',
                        'included' => true,
                        // Add-user / Onboarding icon
                        'icon' => 'M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z',
                    ],
                    [
                        'title' => 'Workflow Delivery',
                        'desc' => 'Structured workflows to ensure consistent delivery and operational efficiency.',
                        'included' => true,
                        // Workflow branching process tree icon
                        'icon' => 'M4 4h5v4H4V4zm11 0h5v4h-5V4zm-11 11h5v4H4v-4zm11 0h5v4h-5v-4zM9 6h6m-3 0v9M6 8v7m12-7v7',
                    ],
                    [
                        'title' => 'Security Compliance',
                        'desc' => 'HIPAA-ready processes for secure hospital billing and administrative operations.',
                        'included' => true,
                        // Shield-check icon
                        'icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z',
                    ],
                    [
                        'title' => 'Operational Support',
                        'desc' => 'Simple agreements and ongoing support for smooth hospital billing operations.',
                        'included' => true,
                        // Support headset icon
                        'icon' => 'M18.436 17H19a2 2 0 002-2v-3a2 2 0 00-2-2h-.564M5.564 10H5a2 2 0 00-2 2v3a2 2 0 002 2h.564M12 21a9.003 9.003 0 009-9v-1a9 9 0 00-18 0v1a9.003 9.003 0 009 9z',
                    ],
                    [
                        'title' => 'Claims Administration',
                        'desc' => 'Accurate and timely hospital claim submissions to ensure faster reimbursements.',
                        'included' => true,
                        // Claims document sheet icon
                        'icon' => 'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z',
                    ],
                    [
                        'title' => 'Coverage Verification',
                        'desc' => 'Efficient eligibility checks and coverage verification for smooth billing operations.',
                        'included' => true,
                        // Eye / Verification scan icon
                        'icon' => 'M15 12a3 3 0 11-6 0 3 3 0 016 0z M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z',
                    ],
                    [
                        'title' => 'Revenue Optimization',
                        'desc' => 'Proactive claim tracking, denial resolution, and payment follow-ups to maximize revenue.',
                        'included' => true,
                        // Rising trend chart icon
                        'icon' => 'M13 7h8m0 0v8m0-8l-8 8-4-4-6 6',
                    ],
                    [
                        'title' => 'Financial Reporting',
                        'desc' => 'HIPAA-compliant billing processes with detailed financial reporting and operational transparency.',
                        'included' => true,
                        // Financial bar-graph report document icon
                        'icon' => 'M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z',
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
                <h3 class="text-[18px] font-bold text-slate-900 mb-2">{{ $fee['title'] }}</h3>
                <p class="text-sm text-slate-500 leading-relaxed mb-6">{{ $fee['desc'] }}</p>
                <span class="mt-auto inline-flex items-center gap-1.5 px-4 py-1.5 rounded-full bg-emerald-50 text-emerald-600 text-xs font-bold border border-emerald-100">
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                    </svg>
                    Included
                </span>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="w-full bg-white py-16 lg:py-24 px-4 sm:px-6 lg:px-8 flex justify-center items-center">
    <div class="max-w-5xl w-full flex flex-col items-center">
        
        <!-- Top Pill Badge (Dynamic background/border/text) -->
        <div class="inline-flex items-center justify-center px-4 py-1.5 bg-[var(--primary-color)]/[0.06] text-primary rounded-full text-[10px] md:text-[11px] font-bold border border-primary/20 tracking-wider uppercase mb-6 font-sans">
            Trust & Security
        </div>

        <!-- Main Headline -->
        <h2 class="text-3xl sm:text-4xl md:text-[40px] font-extrabold text-center text-[#0F172A] leading-[1.2] tracking-tight mb-5 font-sans">
            Built-in Compliance & Security
        </h2>

        <!-- Subtitle Paragraph -->
        <p class="text-slate-500 text-center text-sm md:text-base max-w-2xl mx-auto leading-relaxed mb-10 font-sans">
            Continuously protecting your data from day one and on an ongoing basis. No breaches, no worries — just reliable protection.
        </p>

        <!-- Compliance Badges Flex Row -->
        <div class="flex flex-wrap gap-2.5 sm:gap-3 justify-center mb-16 max-w-4xl">
            
            <!-- Badge 1: HIPAA -->
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full text-[12px] md:text-sm font-semibold border text-primary font-sans"
                 style="background-color: color-mix(in srgb, var(--primary-color) 4%, transparent); border-color: color-mix(in srgb, var(--primary-color) 15%, transparent);">
                <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                </svg>
                HIPAA
            </div>

            <!-- Badge 2: SOC 2 Type II -->
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full text-[12px] md:text-sm font-semibold border text-primary font-sans"
                 style="background-color: color-mix(in srgb, var(--primary-color) 4%, transparent); border-color: color-mix(in srgb, var(--primary-color) 15%, transparent);">
                <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                </svg>
                SOC 2 Type II
            </div>

            <!-- Badge 3: ISO 27001 -->
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full text-[12px] md:text-sm font-semibold border text-primary font-sans"
                 style="background-color: color-mix(in srgb, var(--primary-color) 4%, transparent); border-color: color-mix(in srgb, var(--primary-color) 15%, transparent);">
                <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                </svg>
                ISO 27001
            </div>

            <!-- Badge 4: ISO 9001 -->
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full text-[12px] md:text-sm font-semibold border text-primary font-sans"
                 style="background-color: color-mix(in srgb, var(--primary-color) 4%, transparent); border-color: color-mix(in srgb, var(--primary-color) 15%, transparent);">
                <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                </svg>
                ISO 9001
            </div>

            <!-- Badge 5: GDPR -->
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full text-[12px] md:text-sm font-semibold border text-primary font-sans"
                 style="background-color: color-mix(in srgb, var(--primary-color) 4%, transparent); border-color: color-mix(in srgb, var(--primary-color) 15%, transparent);">
                <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                </svg>
                GDPR
            </div>

            <!-- Badge 6: NIST 800-53 -->
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full text-[12px] md:text-sm font-semibold border text-primary font-sans"
                 style="background-color: color-mix(in srgb, var(--primary-color) 4%, transparent); border-color: color-mix(in srgb, var(--primary-color) 15%, transparent);">
                <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                </svg>
                NIST 800-53
            </div>

        </div>

        <!-- 2-Column Responsive Information Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 w-full">
            
            <!-- Card 1: People & Compliance -->
            <div class="bg-white rounded-[24px] border border-slate-200/60 p-8 flex flex-col text-left shadow-[0_4px_24px_rgba(0,0,0,0.01)] hover:border-slate-300 transition-colors duration-300">
                <div class="flex items-center gap-4 mb-6">
                    <!-- Icon Container (Soft dynamic primary background mix) -->
                    <div class="flex items-center justify-center w-11 h-11 rounded-xl text-primary flex-shrink-0"
                         style="background-color: color-mix(in srgb, var(--primary-color) 8%, transparent);">
                        <!-- Users/Team Icon -->
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <h3 class="font-extrabold text-[#0F172A] text-base md:text-lg tracking-tight font-sans">
                        People & Compliance
                    </h3>
                </div>
                
                <ul class="space-y-4">
                    <li class="flex items-start gap-3 text-[13.5px] md:text-[14px] leading-relaxed text-slate-500 font-sans">
                        <span class="text-primary font-black mt-1.5">•</span>
                        Ongoing HIPAA training with quarterly certification
                    </li>
                    <li class="flex items-start gap-3 text-[13.5px] md:text-[14px] leading-relaxed text-slate-500 font-sans">
                        <span class="text-primary font-black mt-1.5">•</span>
                        Business Associate Agreement (BAA)
                    </li>
                    <li class="flex items-start gap-3 text-[13.5px] md:text-[14px] leading-relaxed text-slate-500 font-sans">
                        <span class="text-primary font-black mt-1.5">•</span>
                        Binding NDAs and confidentiality agreements
                    </li>
                    <li class="flex items-start gap-3 text-[13.5px] md:text-[14px] leading-relaxed text-slate-500 font-sans">
                        <span class="text-primary font-black mt-1.5">•</span>
                        Biometric access controls at all Edge campuses
                    </li>
                </ul>
            </div>

            <!-- Card 2: Systems & Technology -->
            <div class="bg-white rounded-[24px] border border-slate-200/60 p-8 flex flex-col text-left shadow-[0_4px_24px_rgba(0,0,0,0.01)] hover:border-slate-300 transition-colors duration-300">
                <div class="flex items-center gap-4 mb-6">
                    <!-- Icon Container (Soft dynamic primary background mix) -->
                    <div class="flex items-center justify-center w-11 h-11 rounded-xl text-primary flex-shrink-0"
                         style="background-color: color-mix(in srgb, var(--primary-color) 8%, transparent);">
                        <!-- Shield Icon -->
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h3 class="font-extrabold text-[#0F172A] text-base md:text-lg tracking-tight font-sans">
                        Systems & Technology
                    </h3>
                </div>
                
                <ul class="space-y-4">
                    <li class="flex items-start gap-3 text-[13.5px] md:text-[14px] leading-relaxed text-slate-500 font-sans">
                        <span class="text-primary font-black mt-1.5">•</span>
                        Advanced endpoint security on every device
                    </li>
                    <li class="flex items-start gap-3 text-[13.5px] md:text-[14px] leading-relaxed text-slate-500 font-sans">
                        <span class="text-primary font-black mt-1.5">•</span>
                        Secure HIPAA-compliant VPN
                    </li>
                    <li class="flex items-start gap-3 text-[13.5px] md:text-[14px] leading-relaxed text-slate-500 font-sans">
                        <span class="text-primary font-black mt-1.5">•</span>
                        Multi-factor authentication across all platforms
                    </li>
                    <li class="flex items-start gap-3 text-[13.5px] md:text-[14px] leading-relaxed text-slate-500 font-sans">
                        <span class="text-primary font-black mt-1.5">•</span>
                        Regular independent third-party audits
                    </li>
                </ul>
            </div>

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