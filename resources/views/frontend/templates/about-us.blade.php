@extends('frontend.layouts.app')

@section('content')   
<!-- GLOBAL THEME SETTINGS -->
<style>
    :root {
        /* Global Hex Color Definitions */
        --theme-teal: #0ca594;
        --theme-teal-hover: #0b9384;
        --theme-purple: #7c3aed;
        --theme-purple-hover: #6d28d9;
        --theme-blue: #2563eb;
    }
</style>

<!-- SECTION 1: RELATIONSHIP MANAGERS -->
<section class="relative w-full min-h-screen flex items-center justify-center bg-[#050811] py-20 lg:py-28 px-4 sm:px-6 lg:px-8 overflow-hidden"
         style="--primary: var(--theme-teal); --primary-hover: var(--theme-teal-hover);">
    
    <!-- Grid Overlay -->
    <div class="absolute inset-0 bg-[radial-gradient(rgba(255,255,255,0.015)_1.2px,transparent_1.2px)] [background-size:24px_24px] pointer-events-none z-0"></div>
    
    <!-- Centered Spotlight Glow (Opacity derived dynamically via opacity layer) -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] rounded-full pointer-events-none z-0" 
         style="background: radial-gradient(circle, var(--primary) 0%, transparent 70%); opacity: 0.16;"></div>
    
    <!-- Main Content Container -->
    <div class="max-w-4xl w-full flex flex-col items-center text-center relative z-10">
        
        <!-- Top Pill Badge (Derived background/border/text opacity) -->
        <div class="inline-flex items-center gap-2 px-4 py-1.5 bg-[var(--primary)]/5 text-[var(--primary)] rounded-full text-[10px] md:text-[11px] font-bold border border-[var(--primary)]/20 tracking-wider uppercase mb-7">
            <span class="w-1.5 h-1.5 rounded-full bg-[var(--primary)] shadow-[0_0_8px_var(--primary)]"></span>
            RELATIONSHIP MANAGERS
        </div>

        <!-- Main Headline -->
        <h2 class="text-3xl sm:text-4xl md:text-[44px] font-extrabold text-white leading-[1.15] tracking-tight max-w-3xl mb-6 font-sans capitalize">
            You should never have to solve business<br>
            challenges on your own.
        </h2>

        <!-- Subtitle Paragraph -->
        <p class="text-slate-400 text-sm md:text-[15px] leading-relaxed text-center max-w-2xl mb-10 font-sans">
            Every VMA client is supported by a dedicated Relationship Manager who understands your industry, your business goals, and your operational priorities. With years of experience assisting organizations across multiple sectors, they provide practical guidance, proactive communication, and dependable support. One trusted partner. Always available. Every step of your journey.
        </p>

        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-16">
    
            <a href="/contact" class="w-full sm:w-auto px-10 py-4 bg-[var(--primary)] hover:opacity-90 text-white font-bold rounded-xl transition-all shadow-lg shadow-[var(--primary)]/20 flex items-center justify-center gap-2 group border border-[var(--primary)]/20 decoration-transparent">
               Book a Consultation
                <span class="group-hover:translate-x-1 transition-transform">→</span>
            </a>

            <a href="/how-it-works" class="w-full sm:w-auto px-10 py-4 bg-white text-[#0a1931] font-bold rounded-xl hover:bg-slate-100 transition-all shadow-lg flex items-center justify-center decoration-transparent">
                Meet Our Team
            </a>
            
        </div>

        <!-- Bottom Features Bar -->
        <div class="w-full max-w-[820px] border border-slate-800/80 bg-white/[0.015] px-6 py-5 rounded-[24px] md:rounded-full flex flex-col items-center gap-3">
            
            <!-- Row 1: Horizontal on desktop, stacked on mobile -->
            <div class="flex flex-col md:flex-row items-center justify-center gap-4 md:gap-0 text-slate-400 text-[12.5px] font-medium leading-none tracking-wide text-center">
                
                <span class="inline-flex items-center gap-2 md:pr-5">
                    <span class="text-[var(--primary)] font-bold">✓</span> Dedicated to your industry
                </span>
                
                <!-- Separators -->
                <span class="hidden md:inline text-slate-800 mr-5">|</span>
                
                <span class="inline-flex items-center gap-2 md:pr-5">
                    <span class="text-[var(--primary)] font-bold">✓</span> Supporting both your business and your workforce
                </span>
                
                <span class="hidden md:inline text-slate-800 mr-5">|</span>
                
                <span class="inline-flex items-center gap-2 md:pr-5">
                    <span class="text-[var(--primary)] font-bold">✓</span>  Direct phone & email communication
                </span>
                
                <span class="hidden md:inline text-slate-800">|</span>
                
                
            </div>
            
            <!-- Row 2: Centered underneath on desktop, stacked on mobile -->
            <div class="flex items-center gap-2 text-slate-400 text-[12.5px] font-medium leading-none tracking-wide">
                <span class="text-[var(--primary)] font-bold">✓</span> Included with every engagement
            </div>

        </div>

    </div>
</section>


<!-- SECTION 2: BY THE NUMBERS -->
<section class="w-full bg-white py-12 px-4 sm:px-6 lg:px-8 flex justify-center items-center"
         style="--primary-green: var(--theme-teal); --primary-blue: var(--theme-blue);">
    <div class="max-w-6xl w-full flex flex-col items-center">
        
        <!-- Header Label -->
        <span class="text-[10px] md:text-[11px] font-bold tracking-widest text-slate-400 uppercase mb-5">
            By the Numbers
        </span>

        <!-- Statistics Card Wrapper -->
        <div class="w-full bg-white border border-slate-100 rounded-[24px] md:rounded-[32px] shadow-[0_8px_30px_rgba(0,0,0,0.02)] overflow-hidden">
            
            <!-- Grid Layout (Handles borders dynamically from vertical stack on mobile to horizontal row on desktop) -->
            <div class="grid grid-cols-1 md:grid-cols-5 text-center">
                
                <!-- Stat 1: 500+ -->
                <div class="py-8 md:py-10 px-4 flex flex-col items-center justify-center border-b md:border-b-0 md:border-r border-slate-100/80">
                    <span class="text-3xl md:text-[38px] font-black text-[#0F172A] tracking-tight mb-2">
                        500+
                    </span>
                    <span class="text-xs md:text-[13px] font-medium text-slate-400">
                        Businesses served
                    </span>
                </div>

                <!-- Stat 2: 1,000+ (Dynamic Green Accent) -->
                <div class="py-8 md:py-10 px-4 flex flex-col items-center justify-center border-b md:border-b-0 md:border-r border-slate-100/80">
                    <span class="text-3xl md:text-[38px] font-black text-[var(--primary-green)] tracking-tight mb-2">
                        1,000+
                    </span>
                    <span class="text-xs md:text-[13px] font-medium text-slate-400">
                        Professionals placed
                    </span>
                </div>

                <!-- Stat 3: 97% (Dynamic Blue Accent) -->
                <div class="py-8 md:py-10 px-4 flex flex-col items-center justify-center border-b md:border-b-0 md:border-r border-slate-100/80">
                    <span class="text-3xl md:text-[38px] font-black text-[var(--primary-blue)] tracking-tight mb-2">
                        97%
                    </span>
                    <span class="text-xs md:text-[13px] font-medium text-slate-400">
                        Retention rate
                    </span>
                </div>

                <!-- Stat 4: 3 -->
                <div class="py-8 md:py-10 px-4 flex flex-col items-center justify-center border-b md:border-b-0 md:border-r border-slate-100/80">
                    <span class="text-3xl md:text-[38px] font-black text-[#0F172A] tracking-tight mb-2">
                        3
                    </span>
                    <span class="text-xs md:text-[13px] font-medium text-slate-400">
                        Industry verticals
                    </span>
                </div>

                <!-- Stat 5: 2022 -->
                <div class="py-8 md:py-10 px-4 flex flex-col items-center justify-center">
                    <span class="text-3xl md:text-[38px] font-black text-[#0F172A] tracking-tight mb-2">
                        2022
                    </span>
                    <span class="text-xs md:text-[13px] font-medium text-slate-400">
                        Year founded
                    </span>
                </div>

            </div>
        </div>

    </div>
</section>


<!-- SECTION 3: OUR STORY -->
<section class="w-full bg-white py-16 lg:py-24 px-6 lg:px-8 flex justify-center items-center"
         style="--primary: var(--theme-purple); --primary-hover: var(--theme-purple-hover); --primary-badge: var(--theme-purple-badge-bg); --primary-border: var(--theme-purple-badge-border);">
    <!-- Grid: 1 column on mobile/tablet, asymmetric 12-column grid on desktop -->
    <div class="max-w-6xl w-full grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start">
        
        <!-- LEFT COLUMN: Story Content (Spans 7 of 12 columns on desktop) -->
        <div class="lg:col-span-7 flex flex-col">
            
            <!-- Our Story Pill Badge (Uses same generic class mapping, rendering purple locally) -->
            <div class="inline-flex items-center justify-center px-4 py-1.5 bg-[var(--primary)]/5 text-[var(--primary)] rounded-full text-xs font-bold border border-[var(--primary)]/20 tracking-wider uppercase mb-6 w-fit font-sans">
                Our Story
            </div>
            
            <!-- Headline -->
            <h2 class="text-3xl sm:text-4xl md:text-[42px] font-extrabold text-[#0F172A] leading-[1.15] tracking-tight mb-8 font-sans capitalize">
                Built to simplify workforce management <br class="hidden sm:inline"> for growing businesses.
            </h2>
            
            <!-- Paragraph Group -->
            <div class="space-y-6 text-[14px] md:text-[15px] leading-relaxed text-slate-500 font-sans">
                <p>
                    When organizations began embracing remote operations, finding dependable talent became increasingly difficult. Many companies struggled with inconsistent hiring, limited support, and fragmented workforce solutions.
                </p>
                <p>
                    VMA was founded to solve those challenges by creating a complete workforce management ecosystem tailored for healthcare, finance, legal, customer service, technology, and professional services. Our approach combines operational excellence, compliance, and long-term partnership to help businesses build reliable remote teams with confidence.
                </p>
                <p>
                    Today, organizations across multiple industries rely on VMA to recruit, train, onboard, and manage exceptional professionals. For many clients, partnering with VMA has transformed the way they hire, scale, and retain talent. Their continued success is the foundation of ours.
                </p>
            </div>
        </div>
        
        <!-- RIGHT COLUMN: Testimonial Card (Uses opacity modifiers to derive values from purple primary) -->
        <div class="lg:col-span-5 w-full bg-[var(--primary)]/[0.06] border border-[var(--primary)]/20 rounded-[32px] p-8 md:p-10 flex flex-col relative">
            
            <!-- Double Quote Graphic -->
            <div class="text-[var(--primary)]/20 mb-6">
                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M14.017 21v-7.391c0-5.704 3.748-9.762 9-10.161v2.72c-2.887.762-4.69 2.651-4.731 5.441H23v9.391h-8.983zm-14 0v-7.391c0-5.704 3.748-9.762 9-10.161v2.72c-2.887.762-4.69 2.651-4.731 5.441H9v9.391H.017z"/>
                </svg>
            </div>
            
            <!-- Quote Text -->
            <p class="text-[15px] md:text-[16px] leading-[1.65] text-slate-700 font-sans mb-8">
                <span class="font-extrabold text-[#0F172A]">Partnering with VMA completely changed the way we build remote teams.</span>
                <span class="italic text-slate-500">Their guidance, expertise, and commitment made every stage of hiring simple and stress-free.</span>
                <span class="font-extrabold text-[#0F172A]">Having a knowledgeable team beside us has been invaluable.</span>
            </p>
            
            <!-- Divider Line -->
            <div class="border-t border-purple-200/50 my-6"></div>
            
            <!-- Author Profile -->
            <div class="flex items-center gap-4">
                <!-- Avatar circle -->
                <div class="flex-shrink-0 w-11 h-11 bg-[var(--primary)] rounded-full flex items-center justify-center text-white text-sm font-bold tracking-wider font-sans">
                    IW
                </div>
                <!-- Identity -->
                <div class="flex flex-col text-left font-sans">
                    <span class="font-bold text-[#0F172A] text-sm md:text-base leading-none mb-1">Sarah Mitchell</span>
                    <span class="text-xs md:text-sm text-slate-400 font-medium leading-none">Chief Executive Officer, BrightPath Solutions</span>
                </div>
            </div>
            
        </div>

    </div>
</section>

<section class="relative w-full bg-white py-16 lg:py-24 px-6 lg:px-8 flex justify-center items-center">
    <div class="max-w-6xl w-full flex flex-col items-center">
        
        <!-- Top Pill Badge -->
        <div class="inline-flex items-center justify-center px-4 py-1.5 bg-[var(--primary-color)]/[0.06] text-primary rounded-full text-[10px] md:text-[11px] font-bold border border-primary/20 tracking-wider uppercase mb-8">
            THE CHALLENGES OF TRADITIONAL HIRING
        </div>

        <!-- Main Headline -->
        <h2 class="text-3xl sm:text-4xl md:text-[40px] font-extrabold text-center text-[#0F172A] leading-[1.2] tracking-tight mb-5 font-sans capitalize">
            Hiring alone means managing <br class="hidden sm:inline">
            <span class="text-primary">every challenge yourself.</span>
        </h2>

        <!-- Subtitle Description -->
        <p class="text-slate-500 text-center text-sm md:text-base max-w-2xl mx-auto leading-relaxed mb-16 font-sans">
            Traditional hiring provides an employee but little ongoing support. When unexpected situations arise, businesses are often left handling recruitment, onboarding, training, and performance issues without experienced guidance.
        </p>

        <!-- Cards Grid Area -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 w-full">
            
            <!-- Card 1: Performance issues? -->
            <div class="bg-white rounded-[24px] border border-slate-200/60 p-8 flex flex-col items-start text-left border-t-[3.5px] border-t-[var(--primary-color)] shadow-[0_4px_20px_rgba(0,0,0,0.015)]">
                <div class="flex items-center gap-3 mb-5">
                    <!-- Accent vertical line on the left -->
                    <div class="w-[3px] h-6 bg-[var(--primary-color)]/30 rounded-full"></div>
                    <!-- Icon circle container -->
                    <div class="flex items-center justify-center w-10 h-10 rounded-xl bg-[var(--primary-color)]/[0.08] text-primary">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 14s1.5-2 4-2 4 2 4 2M9 9h.01M15 9h.01"/>
                        </svg>
                    </div>
                </div>
                <h3 class="font-bold text-[#0F172A] text-[15px] mb-2 tracking-tight capitalize">Performance concerns?</h3>
                <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans">
                    Identifying the root cause of declining productivity takes time and expertise. Without professional support, solving workplace challenges becomes difficult and costly.
                </p>
            </div>

            <!-- Card 2: Communication breakdown? -->
            <div class="bg-white rounded-[24px] border border-slate-200/60 p-8 flex flex-col items-start text-left border-t-[3.5px] border-t-[var(--primary-color)] shadow-[0_4px_20px_rgba(0,0,0,0.015)]">
                <div class="flex items-center gap-3 mb-5">
                    <div class="w-[3px] h-6 bg-[var(--primary-color)]/30 rounded-full"></div>
                    <div class="flex items-center justify-center w-10 h-10 rounded-xl bg-[var(--primary-color)]/[0.08] text-primary">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                        </svg>
                    </div>
                </div>
                <h3 class="font-bold text-[#0F172A] text-[15px] mb-2 tracking-tight capitalize">Communication difficulties?</h3>
                <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans">
                    Managing conversations between leadership, employees, and departments can quickly become overwhelming without an experienced advisor to facilitate solutions.
                </p>
            </div>

            <!-- Card 3: Ready to scale? -->
            <div class="bg-white rounded-[24px] border border-slate-200/60 p-8 flex flex-col items-start text-left border-t-[3.5px] border-t-[var(--primary-color)] shadow-[0_4px_20px_rgba(0,0,0,0.015)]">
                <div class="flex items-center gap-3 mb-5">
                    <div class="w-[3px] h-6 bg-[var(--primary-color)]/30 rounded-full"></div>
                    <div class="flex items-center justify-center w-10 h-10 rounded-xl bg-[var(--primary-color)]/[0.08] text-primary">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                        </svg>
                    </div>
                </div>
                <h3 class="font-bold text-[#0F172A] text-[15px] mb-2 tracking-tight capitalize">Planning to grow?</h3>
                <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans">
                    Hiring additional employees requires recruiting, interviewing, onboarding, compliance, and operational planning all demanding significant internal resources.
                </p>
            </div>

            <!-- Card 4: Talent needs training? -->
            <div class="bg-white rounded-[24px] border border-slate-200/60 p-8 flex flex-col items-start text-left border-t-[3.5px] border-t-[var(--primary-color)] shadow-[0_4px_20px_rgba(0,0,0,0.015)]">
                <div class="flex items-center gap-3 mb-5">
                    <div class="w-[3px] h-6 bg-[var(--primary-color)]/30 rounded-full"></div>
                    <div class="flex items-center justify-center w-10 h-10 rounded-xl bg-[var(--primary-color)]/[0.08] text-primary">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                        </svg>
                    </div>
                </div>
                <h3 class="font-bold text-[#0F172A] text-[15px] mb-2 tracking-tight capitalize">Employee replacement?</h3>
                <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans">
                    When a team member leaves, businesses frequently have to restart the hiring process, resulting in delays and unnecessary expenses.
                </p>
            </div>

            <!-- Card 5: Something goes wrong? -->
            <div class="bg-white rounded-[24px] border border-slate-200/60 p-8 flex flex-col items-start text-left border-t-[3.5px] border-t-[var(--primary-color)] shadow-[0_4px_20px_rgba(0,0,0,0.015)]">
                <div class="flex items-center gap-3 mb-5">
                    <div class="w-[3px] h-6 bg-[var(--primary-color)]/30 rounded-full"></div>
                    <div class="flex items-center justify-center w-10 h-10 rounded-xl bg-[var(--primary-color)]/[0.08] text-primary">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                </div>
                <h3 class="font-bold text-[#0F172A] text-[15px] mb-2 tracking-tight capitalize">Skills development</h3>
                <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans">
                    Internal training programs require dedicated resources, experienced trainers, and continuous improvement something many organizations lack.
                </p>
            </div>

            <!-- Card 6: Don't know what other practices do? -->
            <div class="bg-white rounded-[24px] border border-slate-200/60 p-8 flex flex-col items-start text-left border-t-[3.5px] border-t-[var(--primary-color)] shadow-[0_4px_20px_rgba(0,0,0,0.015)]">
                <div class="flex items-center gap-3 mb-5">
                    <div class="w-[3px] h-6 bg-[var(--primary-color)]/30 rounded-full"></div>
                    <div class="flex items-center justify-center w-10 h-10 rounded-xl bg-[var(--primary-color)]/[0.08] text-primary">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                </div>
                <h3 class="font-bold text-[#0F172A] text-[15px] mb-2 tracking-tight capitalize">Unexpected issues?</h3>
                <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans">
                    Equipment failures, attendance concerns, operational disruptions, or compliance questions often require immediate support that businesses may not have internally.
                </p>
            </div>

        </div>

    </div>
</section>

<!-- SUPPORT COMPARISON SECTION -->
<section class="w-full py-16 lg:py-24 px-4 sm:px-6 lg:px-8 flex bg-[#fafafa] justify-center items-center">
    <div class="max-w-[1100px] w-full flex flex-col items-center">
        
        <!-- Top Pill Badge -->
        <div class="inline-flex items-center justify-center px-4 py-1.5 bg-[var(--primary-color)]/[0.06] text-primary rounded-full text-[10px] md:text-[11px] font-bold border border-primary/20 tracking-wider uppercase mb-6">
            Support Comparison
        </div>

        <!-- Main Headline -->
        <h2 class="text-3xl sm:text-4xl md:text-[40px] font-extrabold text-center text-[#0F172A] leading-[1.2] tracking-tight mb-5 font-sans capitalize">
            Do you want worker or lasting workforce<br class="hidden sm:inline">
            <span class="text-primary">partnerships, by VMA.</span>
        </h2>

        <!-- Subtitle Paragraph -->
        <p class="text-[13.5px] md:text-[14px] leading-relaxed text-slate-500 text-center max-w-[680px] mb-14 font-sans">
            Whenever challenges arise, you deserve more than a staffing provider you deserve an experienced partner committed to your long-term success.
        </p>

        <!-- Responsive Table Container Wrapper -->
        <div class="w-full overflow-x-auto rounded-[16px] border border-slate-200/80 shadow-[0_4px_30px_rgba(0,0,0,0.015)]">
            <table class="w-full min-w-[800px] text-left border-collapse table-fixed">
                <colgroup>
                    <col class="w-[30%]">
                    <col class="w-[35%]">
                    <col class="w-[35%]">
                </colgroup>
                <thead>
                    <tr class="border-b border-slate-100">
                        <!-- Column 1: Feature Row Headers -->
                        <th class="p-5 text-sm font-semibold text-slate-400 font-sans"></th>
                        
                        <!-- Column 2: VMA Highlighted Header (Matches var(--primary-color) translucent tint) -->
                        <th class="p-5 text-xs font-extrabold uppercase tracking-widest text-primary bg-[var(--primary-color)]/[0.03] font-sans">
                            VMA
                        </th>
                        
                        <!-- Column 3: Traditional Hiring Header -->
                        <th class="p-5 text-xs font-bold uppercase tracking-widest text-slate-400 font-sans">
                            Traditional Hiring
                        </th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    
                    <!-- Row 1: Point of contact -->
                    <tr>
                        <td class="p-5 text-[13.5px] font-bold text-[#0F172A] font-sans">Primary Contact</td>
                        <td class="p-5 text-[13.5px] font-semibold text-primary bg-[var(--primary-color)]/[0.03] font-sans">
                            <span class="text-primary font-black mr-2">✓</span> Dedicated RM
                        </td>
                        <td class="p-5 text-[13.5px] text-slate-500 font-sans">
                            <span class="text-red-400 font-bold mr-2">✕</span> General recruiter
                        </td>
                    </tr>

                    <!-- Row 2: Serves both sides -->
                    <tr>
                        <td class="p-5 text-[13.5px] font-bold text-[#0F172A] font-sans capitalize">Business & employee support</td>
                        <td class="p-5 text-[13.5px] font-semibold text-primary bg-[var(--primary-color)]/[0.03] font-sans">
                            <span class="text-primary font-black mr-2">✓</span> Supports both
                        </td>
                        <td class="p-5 text-[13.5px] text-slate-500 font-sans">
                            <span class="text-red-400 font-bold mr-2">✕</span> Limited involvement
                        </td>
                    </tr>

                    <!-- Row 3: Industry expertise -->
                    <tr>
                        <td class="p-5 text-[13.5px] font-bold text-[#0F172A] font-sans capitalize">Industry expertise</td>
                        <td class="p-5 text-[13.5px] font-semibold text-primary bg-[var(--primary-color)]/[0.03] font-sans">
                            <span class="text-primary font-black mr-2">✓</span> Specialists matched to your sector
                        </td>
                        <td class="p-5 text-[13.5px] text-slate-500 font-sans">
                            <span class="text-red-400 font-bold mr-2">✕</span> General knowledge
                        </td>
                    </tr>

                    <!-- Row 4: Replacement support -->
                    <tr>
                        <td class="p-5 text-[13.5px] font-bold text-[#0F172A] font-sans capitalize">Replacement support</td>
                        <td class="p-5 text-[13.5px] font-semibold text-primary bg-[var(--primary-color)]/[0.03] font-sans">
                            <span class="text-primary font-black mr-2">✓</span> Included when applicable
                        </td>
                        <td class="p-5 text-[13.5px] text-slate-500 font-sans">
                            <span class="text-red-400 font-bold mr-2">✕</span> Usually starts over
                        </td>
                    </tr>

                    <!-- Row 5: How you reach them -->
                    <tr>
                        <td class="p-5 text-[13.5px] font-bold text-[#0F172A] font-sans">Communication</td>
                        <td class="p-5 text-[13.5px] font-semibold text-primary bg-[var(--primary-color)]/[0.03] font-sans">
                            <span class="text-primary font-black mr-2">✓</span> Direct phone & email
                        </td>
                        <td class="p-5 text-[13.5px] text-slate-500 font-sans">
                            <span class="text-amber-500 font-extrabold mr-2">—</span>Limited contact
                        </td>
                    </tr>

                     <!-- Row 5: How you reach them -->
                    <tr>
                        <td class="p-5 text-[13.5px] font-bold text-[#0F172A] font-sans capitalize">Strategic guidance</td>
                        <td class="p-5 text-[13.5px] font-semibold text-primary bg-[var(--primary-color)]/[0.03] font-sans">
                            <span class="text-primary font-black mr-2">✓</span> Ongoing workforce advice
                        </td>
                        <td class="p-5 text-[13.5px] text-slate-500 font-sans">
                            <span class="text-amber-500 font-extrabold mr-2">—</span>Rarely available
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>

    </div>
</section>

<section class="w-full bg-white py-16 lg:py-24 px-6 lg:px-8 flex justify-center items-center">
    <div class="max-w-[850px] w-full flex flex-col items-center">
        
        <!-- Top Pill Badge (Dynamic using your primary variables) -->
        <div class="inline-flex items-center justify-center px-4 py-1.5 bg-[var(--primary-color)]/[0.06] text-primary rounded-full text-[10px] md:text-[11px] font-bold border border-primary/20 tracking-wider uppercase mb-6 font-sans">
            Our Journey
        </div>

        <!-- Main Headline -->
        <h2 class="text-3xl sm:text-4xl md:text-[40px] font-extrabold text-center text-[#0F172A] leading-[1.2] tracking-tight mb-16 font-sans capitalize">
            From a vision to hundreds of successful<br>
            <span class="text-primary">partnerships</span>
        </h2>

        <!-- Vertical Timeline Area -->
        <div class="w-full flex flex-col">
            
            <!-- Step 1: 2022 -->
            <!-- Using items-stretch to let the connector line span the full height of the card dynamically -->
            <div class="group flex gap-5 md:gap-8 items-stretch relative mb-8 last:mb-0">
                <!-- Left side: Circle and timeline line segment -->
                <div class="flex flex-col items-center relative">
                    <!-- Circle (Purple / Primary variant) -->
                    <div class="flex items-center justify-center w-10 h-10 md:w-11 md:h-11 rounded-full text-white text-xs md:text-sm font-bold flex-shrink-0 bg-indigo-600 shadow-[0_0_12px_rgba(79,70,229,0.2)] z-10 font-sans">
                        20
                    </div>
                    <!-- Connector line (only visible if not the last group item) -->
                    <div class="absolute top-10 md:top-11 bottom-0 w-[2px] bg-slate-100 -mb-8 z-0 group-last:hidden"></div>
                </div>
                <!-- Right side: Content Card -->
                <div class="flex-1 bg-white rounded-[24px] border border-slate-200/60 p-6 md:p-8 text-left shadow-[0_4px_20px_rgba(0,0,0,0.015)] hover:border-slate-300 transition-colors duration-300">
                    <span class="text-[10px] md:text-xs font-bold tracking-wider text-slate-400 uppercase mb-2 block font-sans">
                        2020 — THE BEGINNING
                    </span>
                    <h3 class="text-[16px] md:text-lg font-bold text-[#0F172A] mb-3 tracking-tight font-sans">
                        VMA is established
                    </h3>
                    <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans">
                        Founded with a mission to simplify workforce management through reliable remote staffing, professional training, and long-term client partnerships.
                    </p>
                </div>
            </div>

            <!-- Step 2: 2023 -->
            <div class="group flex gap-5 md:gap-8 items-stretch relative mb-8 last:mb-0">
                <!-- Left side -->
                <div class="flex flex-col items-center relative">
                    <!-- Circle (Vibrant Blue / Dynamic Primary) -->
                    <div class="flex items-center justify-center w-10 h-10 md:w-11 md:h-11 rounded-full text-white text-xs md:text-sm font-bold flex-shrink-0 bg-blue-600 shadow-[0_0_12px_rgba(37,99,235,0.2)] z-10 font-sans">
                        21
                    </div>
                    <div class="absolute top-10 md:top-11 bottom-0 w-[2px] bg-slate-100 -mb-8 z-0 group-last:hidden"></div>
                </div>
                <!-- Right side: Content Card -->
                <div class="flex-1 bg-white rounded-[24px] border border-slate-200/60 p-6 md:p-8 text-left shadow-[0_4px_20px_rgba(0,0,0,0.015)] hover:border-slate-300 transition-colors duration-300">
                    <span class="text-[10px] md:text-xs font-bold tracking-wider text-slate-400 uppercase mb-2 block font-sans">
                        2021 — EXPANSION
                    </span>
                    <h3 class="text-[16px] md:text-lg font-bold text-[#0F172A] mb-3 tracking-tight font-sans">
                        Businesses begin choosing VMA
                    </h3>
                    <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans">
                        Growing client success leads to expanded recruitment capabilities, enhanced onboarding systems, and stronger operational processes.
                    </p>
                </div>
            </div>

            <!-- Step 3: 2024 -->
            <div class="group flex gap-5 md:gap-8 items-stretch relative mb-8 last:mb-0">
                <!-- Left side -->
                <div class="flex flex-col items-center relative">
                    <!-- Circle (Vibrant Green) -->
                    <div class="flex items-center justify-center w-10 h-10 md:w-11 md:h-11 rounded-full text-white text-xs md:text-sm font-bold flex-shrink-0 bg-emerald-600 shadow-[0_0_12px_rgba(16,185,129,0.2)] z-10 font-sans">
                        23
                    </div>
                    <div class="absolute top-10 md:top-11 bottom-0 w-[2px] bg-slate-100 -mb-8 z-0 group-last:hidden"></div>
                </div>
                <!-- Right side: Content Card -->
                <div class="flex-1 bg-white rounded-[24px] border border-slate-200/60 p-6 md:p-8 text-left shadow-[0_4px_20px_rgba(0,0,0,0.015)] hover:border-slate-300 transition-colors duration-300">
                    <span class="text-[10px] md:text-xs font-bold tracking-wider text-slate-400 uppercase mb-2 block font-sans">
                       2023 — GROWTH
                    </span>
                    <h3 class="text-[16px] md:text-lg font-bold text-[#0F172A] mb-3 tracking-tight font-sans">
                        Hundreds of organizations supported
                    </h3>
                    <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans">
                        VMA expands its workforce network, strengthens compliance standards, and introduces advanced workforce management solutions for multiple industries.
                    </p>
                </div>
            </div>

            <!-- Step 4: 2025 -->
            <div class="group flex gap-5 md:gap-8 items-stretch relative mb-8 last:mb-0">
                <!-- Left side -->
                <div class="flex flex-col items-center relative">
                    <!-- Circle (Amber/Orange) -->
                    <div class="flex items-center justify-center w-10 h-10 md:w-11 md:h-11 rounded-full text-white text-xs md:text-sm font-bold flex-shrink-0 bg-amber-600 shadow-[0_0_12px_rgba(217,119,6,0.2)] z-10 font-sans">
                        26
                    </div>
                    <div class="absolute top-10 md:top-11 bottom-0 w-[2px] bg-slate-100 -mb-8 z-0 group-last:hidden"></div>
                </div>
                <!-- Right side: Content Card -->
                <div class="flex-1 bg-white rounded-[24px] border border-slate-200/60 p-6 md:p-8 text-left shadow-[0_4px_20px_rgba(0,0,0,0.015)] hover:border-slate-300 transition-colors duration-300 font-sans">
                    <span class="text-[10px] md:text-xs font-bold tracking-wider text-slate-400 uppercase mb-2 block">
                        2026 — THE FUTURE
                    </span>
                    <h3 class="text-[16px] md:text-lg font-bold text-[#0F172A] mb-3 tracking-tight">
                        Building tomorrow's workforce solutions
                    </h3>
                    <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans">
                       Continuing to invest in technology, professional development, and scalable workforce services that help organizations grow with confidence.
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>

<section class="w-full bg-white py-16 lg:py-24 px-6 lg:px-8 flex justify-center items-center">
    <div class="max-w-6xl w-full flex flex-col items-center">
        
        <!-- Top Pill Badge -->
        <div class="inline-flex items-center justify-center px-4 py-1.5 bg-[var(--primary-color)]/[0.06] text-primary rounded-full text-[10px] md:text-[11px] font-bold border border-primary/20 tracking-wider uppercase mb-6 font-sans">
            THE COMPLETE SOLUTION
        </div>

        <!-- Main Headline -->
        <h2 class="text-3xl sm:text-4xl md:text-[40px] font-extrabold text-center text-[#0F172A] leading-[1.2] tracking-tight mb-5 font-sans capitalize">
            Beyond only recruitment. A Solution for<br>
            <span class="text-primary">Remote Hiring in Medical businesses.</span>
        </h2>

        <!-- Subtitle Description -->
        <p class="text-slate-500 text-center text-sm md:text-base max-w-2xl mx-auto leading-relaxed mb-16 font-sans">
            Everything businesses need to recruit, manage, develop, and retain exceptional remote professionals delivered through one trusted partner.
        </p>

        <!-- 8-Card Grid Layout -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 w-full mb-12">
            
            <!-- Card 1: Talent Network -->
            <div class="bg-white rounded-[24px] border border-slate-200/60 p-6 md:p-8 flex flex-col items-center text-center shadow-[0_4px_20px_rgba(0,0,0,0.01)] hover:shadow-md hover:border-primary/25 transition-all duration-300">
                <div class="text-primary mb-5">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </div>
                <h3 class="font-bold text-[#0F172A] text-[15px] mb-3 tracking-tight font-sans">Talent Acquisition</h3>
                <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans">
                    Access highly qualified professionals who are carefully screened, trained, and matched to your business requirements.
                </p>
            </div>

            <!-- Card 2: Edge Edu -->
            <div class="bg-white rounded-[24px] border border-slate-200/60 p-6 md:p-8 flex flex-col items-center text-center shadow-[0_4px_20px_rgba(0,0,0,0.01)] hover:shadow-md hover:border-primary/25 transition-all duration-300">
                <div class="text-primary mb-5">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479L12 21l-6.824-3.943a12.083 12.083 0 01.665-6.479L12 14z"/>
                    </svg>
                </div>
                <h3 class="font-bold text-[#0F172A] text-[15px] mb-3 tracking-tight font-sans">Professional Training</h3>
                <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans">
                    Comprehensive onboarding programs, technical learning, compliance education, and continuous professional development.
                </p>
            </div>

            <!-- Card 3: Secured Campuses -->
            <div class="bg-white rounded-[24px] border border-slate-200/60 p-6 md:p-8 flex flex-col items-center text-center shadow-[0_4px_20px_rgba(0,0,0,0.01)] hover:shadow-md hover:border-primary/25 transition-all duration-300">
                <div class="text-primary mb-5">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                </div>
                <h3 class="font-bold text-[#0F172A] text-[15px] mb-3 tracking-tight font-sans">Secured Campuses</h3>
                <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans">
                    Managed workspaces with biometric entry, managed equipment, backup power, and redundant internet.
                </p>
            </div>

            <!-- Card 4: Equipment & IT -->
            <div class="bg-white rounded-[24px] border border-slate-200/60 p-6 md:p-8 flex flex-col items-center text-center shadow-[0_4px_20px_rgba(0,0,0,0.01)] hover:shadow-md hover:border-primary/25 transition-all duration-300">
                <div class="text-primary mb-5">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 17L9 20h6l-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                </div>
                <h3 class="font-bold text-[#0F172A] text-[15px] mb-3 tracking-tight font-sans">Secure Operations</h3>
                <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans">
                    Reliable infrastructure, secure systems, protected work environments, and dependable operational support.
                </p>
            </div>

            <!-- Card 5: Payroll & Benefits -->
            <div class="bg-white rounded-[24px] border border-slate-200/60 p-6 md:p-8 flex flex-col items-center text-center shadow-[0_4px_20px_rgba(0,0,0,0.01)] hover:shadow-md hover:border-primary/25 transition-all duration-300">
                <div class="text-primary mb-5">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="font-bold text-[#0F172A] text-[15px] mb-3 tracking-tight font-sans">Technology & Equipment</h3>
                <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans">
                    Professionally managed devices, secure connectivity, software configuration, and ongoing technical assistance.
                </p>
            </div>

            <!-- Card 6: Legal & Compliance -->
            <div class="bg-white rounded-[24px] border border-slate-200/60 p-6 md:p-8 flex flex-col items-center text-center shadow-[0_4px_20px_rgba(0,0,0,0.01)] hover:shadow-md hover:border-primary/25 transition-all duration-300">
                <div class="text-primary mb-5">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7V4m0 0a2 2 0 10-4 0v3m4-3a2 2 0 114 0v3M12 3v18M18 7l3 9a5.002 5.002 0 006.001 0M18 7l-3 9M18 7V4m0 0a2 2 0 10-4 0v3m4-3a2 2 0 114 0v3"/>
                    </svg>
                </div>
                <h3 class="font-bold text-[#0F172A] text-[15px] mb-3 tracking-tight font-sans">Payroll & Administration</h3>
                <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans">
                    Salary processing, attendance management, tax coordination, benefits administration, and accurate payroll services.
                </p>
            </div>

            <!-- Card 7: HR & People Ops -->
            <div class="bg-white rounded-[24px] border border-slate-200/60 p-6 md:p-8 flex flex-col items-center text-center shadow-[0_4px_20px_rgba(0,0,0,0.01)] hover:shadow-md hover:border-primary/25 transition-all duration-300">
                <div class="text-primary mb-5">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </div>
                <h3 class="font-bold text-[#0F172A] text-[15px] mb-3 tracking-tight font-sans">Legal & Regulatory Compliance</h3>
                <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans">
                    Employment documentation, policy management, regulatory compliance, contractual support, and risk mitigation.
                </p>
            </div>

            <!-- Card 8: Edge Platform -->
            <div class="bg-white rounded-[24px] border border-slate-200/60 p-6 md:p-8 flex flex-col items-center text-center shadow-[0_4px_20px_rgba(0,0,0,0.01)] hover:shadow-md hover:border-primary/25 transition-all duration-300">
                <div class="text-primary mb-5">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                    </svg>
                </div>
                <h3 class="font-bold text-[#0F172A] text-[15px] mb-3 tracking-tight font-sans">Human Resources</h3>
                <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans">
                    Employee engagement, performance management, conflict resolution, recruitment coordination, and workforce development.
                </p>
            </div>

            <!-- Card 8: Edge Platform -->
            <div class="bg-white rounded-[24px] border border-slate-200/60 p-6 md:p-8 flex flex-col items-center text-center shadow-[0_4px_20px_rgba(0,0,0,0.01)] hover:shadow-md hover:border-primary/25 transition-all duration-300">
                <div class="text-primary mb-5">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                    </svg>
                </div>
                <h3 class="font-bold text-[#0F172A] text-[15px] mb-3 tracking-tight font-sans">Workforce Platform</h3>
                <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans">
                    Real-time reporting, productivity dashboards, communication tools, workforce insights, and operational analytics.
                </p>
            </div>

        </div>


        <div class="w-full bg-white py-12 px-4 sm:px-6 lg:px-8 flex justify-center items-center">
    
            <!-- Outer Translucent Card (Rounded, centered, and color-aligned) -->
            <div class="max-w-[1100px] w-full border rounded-[36px] px-8 py-10 md:px-14 md:py-12 lg:px-16 lg:py-14 flex flex-col lg:flex-row justify-between items-center gap-8 text-center"
                style="background-color: color-mix(in srgb, var(--primary-color) 4%, transparent); border-color: color-mix(in srgb, var(--primary-color) 12%, transparent);">
                
                <!-- Left Side: Center-Aligned Text Column on all devices -->
                <div class="flex flex-col items-center text-center flex-1 w-full">
                    <h3 class="text-lg sm:text-xl md:text-[16px] font-bold text-[#0F172A] tracking-tight mb-2.5 font-sans leading-snug capitalize">
                        Ready to build a stronger workforce with VMA?
                    </h3>
                    <p class="text-[13px] md:text-[13.5px] text-slate-500 font-medium font-sans">
                        Book a consultation today and discover how our workforce management ecosystem helps businesses recruit, support, and retain exceptional remote professionals.
                    </p>
                </div>

                <!-- Right Side: CTA Button and Helper Text -->
                <div class="flex flex-col sm:flex-row items-center gap-5 sm:gap-6 w-full lg:w-auto justify-center lg:justify-end">
                    <!-- CTA Button -->
                    <a href="/contact" class="bg-primary hover:opacity-95 text-white font-bold py-3.5 px-7 rounded-[14px] shadow-[0_4px_14px_rgba(124,58,237,0.25)] transition-all inline-flex items-center justify-center gap-2.5 whitespace-nowrap text-sm w-full sm:w-auto font-sans"
                        style="shadow: 0 4px 14px color-mix(in srgb, var(--primary-color) 25%, transparent);">
                            Book a Consultation  
                            <!-- Ultra-clean Inline SVG Chevron -->
                            <svg class="w-3 h-3 text-white flex-shrink-0" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                    </a>                    
                    <!-- Helper Info -->
                    <div class="text-[11px] md:text-[12px] text-slate-400 text-center sm:text-left leading-normal whitespace-nowrap font-medium font-sans">
                        No payment until you hire.<br>No contract.
                    </div>
                </div>

            </div>
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
        <h2 class="text-white text-[42px] md:text-[46px] font-extrabold leading-[1.1] tracking-[-0.03em] mb-6 capitalize capitalize">
            Meet Your Next Hire <br>
            in <span class="bg-gradient-to-r from-[#000] via-[#000] to-[#000] bg-clip-text text-transparent">Just 7 Days</span>
        </h2>

        <!-- Subheading -->
        <p class="text-white/80 text-[13px] md:text-[16px] leading-relaxed max-w-2xl mx-auto mb-8 font-normal">
             Book a Demo to see matched, pre-vetted candidates tailored to your business needs.
            <br class="hidden md:block">
            No overheads. No commitments. No risk.
        </p>

        <!-- CTA Button -->
        <div class="mb-6">
            <a href="/contact" class="inline-flex items-center gap-2 bg-white text-black px-8 py-4 rounded-xl font-bold text-[17px] transition-transform hover:scale-105">
                Book a Consultation
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
                    'No long-term commitment',
                    'Free replacement if needed',
                    'Quick, easy demo',
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