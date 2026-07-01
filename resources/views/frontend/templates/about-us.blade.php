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
            <!-- Dynamic solid background and hover background -->
            <button class="bg-[var(--primary)] hover:bg-[var(--primary-hover)] text-white font-bold py-3.5 px-8 rounded-lg shadow-[0_4px_20px_rgba(12,165,148,0.2)] hover:shadow-[0_6px_24px_rgba(12,165,148,0.3)] transition-all duration-300 transform hover:-translate-y-0.5 flex items-center justify-center gap-2 group">
                Book a Demo <span class="transition-transform duration-300 group-hover:translate-x-1">→</span>
            </button>
            <button class="bg-white hover:bg-slate-100 text-[#0f172a] font-bold py-3.5 px-8 rounded-lg transition-all duration-300 transform hover:-translate-y-0.5 hover:shadow-[0_6px_20px_rgba(255,255,255,0.1)]">
                See What RMs Do
            </button>
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
                    <span class="text-[var(--primary)] font-bold">✓</span> Serves both you & your talent
                </span>
                
                <span class="hidden md:inline text-slate-800 mr-5">|</span>
                
                <span class="inline-flex items-center gap-2 md:pr-5">
                    <span class="text-[var(--primary)] font-bold">✓</span> Phone & email — no tickets
                </span>
                
                <span class="hidden md:inline text-slate-800">|</span>
                
            </div>
            
            <!-- Row 2: Centered underneath on desktop, stacked on mobile -->
            <div class="flex items-center gap-2 text-slate-400 text-[12.5px] font-medium leading-none tracking-wide">
                <span class="text-[var(--primary)] font-bold">✓</span> Included in every engagement
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
            <h2 class="text-3xl sm:text-4xl md:text-[42px] font-extrabold text-[#0F172A] leading-[1.15] tracking-tight mb-8 font-sans">
                Built for regulated <br class="hidden sm:inline"> industries
            </h2>
            
            <!-- Paragraph Group -->
            <div class="space-y-6 text-[14px] md:text-[15px] leading-relaxed text-slate-500 font-sans">
                <p>
                    In 2022, remote hiring was booming — but only for tech. Software companies had their pick of global talent platforms. Meanwhile, dental offices, medical practices, and insurance agencies were stuck in a local hiring crisis: <span class="font-bold text-[#0F172A]">unfilled positions, rising costs, and no real solutions.</span>
                </p>
                <p>
                    Edge was founded to change that. We built the first complete hiring ecosystem specifically for medical, dental, and insurance — industries where <span class="font-bold text-[#0F172A]">HIPAA compliance, industry-specific training, and professional reliability</span> aren't nice-to-haves. They're non-negotiable.
                </p>
                <p>
                    Today, over 500 businesses trust Edge to hire, train, equip, and manage their remote teams. For 97% of them, <span class="font-bold text-[#0F172A]">we were their first experience with remote staffing.</span> That trust is everything to us.
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
                For <span class="font-extrabold text-[#0F172A]">97% of our customers, this is the first time they've ever hired remotely.</span>
                <span class="italic text-slate-500">That trust is something we take seriously, and it's the core of everything we do. Edge was built to remove the barriers of global hiring while ensuring that businesses can operate with</span>
                <span class="font-extrabold text-[#0F172A]">confidence.</span>
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
                    <span class="font-bold text-[#0F172A] text-sm md:text-base leading-none mb-1">Iffi Wahla</span>
                    <span class="text-xs md:text-sm text-slate-400 font-medium leading-none">CEO & Founder, Edge</span>
                </div>
            </div>
            
        </div>

    </div>
</section>

<section class="relative w-full bg-white py-16 lg:py-24 px-6 lg:px-8 flex justify-center items-center">
    <div class="max-w-6xl w-full flex flex-col items-center">
        
        <!-- Top Pill Badge -->
        <div class="inline-flex items-center justify-center px-4 py-1.5 bg-[var(--primary-color)]/[0.06] text-primary rounded-full text-[10px] md:text-[11px] font-bold border border-primary/20 tracking-wider uppercase mb-8">
            The Reality of Traditional Hiring
        </div>

        <!-- Main Headline -->
        <h2 class="text-3xl sm:text-4xl md:text-[40px] font-extrabold text-center text-[#0F172A] leading-[1.2] tracking-tight mb-5 font-sans">
            When you hire locally, every problem <br class="hidden sm:inline">
            <span class="text-primary">is yours to solve alone.</span>
        </h2>

        <!-- Subtitle Description -->
        <p class="text-slate-500 text-center text-sm md:text-base max-w-2xl mx-auto leading-relaxed mb-16 font-sans">
            Traditional hiring gives you an employee — but no support system. When the inevitable challenges come up, there's no one to call, no one who's seen this before, and no one whose job it is to help you through it.
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
                <h3 class="font-bold text-[#0F172A] text-[15px] mb-2 tracking-tight">Performance issues?</h3>
                <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans">
                    You have to figure out if it's a training problem, a motivation problem, or a bad fit — by yourself. No advisor. No playbook. No second opinion.
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
                <h3 class="font-bold text-[#0F172A] text-[15px] mb-2 tracking-tight">Communication breakdown?</h3>
                <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans">
                    When there's friction between you and an employee, you're the manager, the mediator, and the HR department — all at once.
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
                <h3 class="font-bold text-[#0F172A] text-[15px] mb-2 tracking-tight">Ready to scale?</h3>
                <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans">
                    Need three more people? You're back to job boards, interviews, and onboarding from scratch. Nobody's helping you plan or execute.
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
                <h3 class="font-bold text-[#0F172A] text-[15px] mb-2 tracking-tight">Talent needs training?</h3>
                <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans">
                    You either train them yourself, find an external program, or hope they figure it out. There's no built-in training infrastructure.
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
                <h3 class="font-bold text-[#0F172A] text-[15px] mb-2 tracking-tight">Something goes wrong?</h3>
                <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans">
                    Equipment fails, attendance drops, quality slips — you're the one scrambling to fix it, pulling you away from running your business.
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
                <h3 class="font-bold text-[#0F172A] text-[15px] mb-2 tracking-tight">Don't know what other practices do?</h3>
                <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans">
                    When you hit a challenge, you have no way to know how dozens of other businesses in your industry solved the same thing last month.
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
        <h2 class="text-3xl sm:text-4xl md:text-[40px] font-extrabold text-center text-[#0F172A] leading-[1.2] tracking-tight mb-5 font-sans">
            Traditional hiring gives you an employee.<br class="hidden sm:inline">
            <span class="text-primary">Edge gives you a partner.</span>
        </h2>

        <!-- Subtitle Paragraph -->
        <p class="text-[13.5px] md:text-[14px] leading-relaxed text-slate-500 text-center max-w-[680px] mb-14 font-sans">
            When something goes wrong, who do you call? With Edge, the answer is always the same: your Relationship Manager.
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
                        
                        <!-- Column 2: EDGE Highlighted Header (Matches var(--primary-color) translucent tint) -->
                        <th class="p-5 text-xs font-extrabold uppercase tracking-widest text-primary bg-[var(--primary-color)]/[0.03] font-sans">
                            Edge
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
                        <td class="p-5 text-[13.5px] font-bold text-[#0F172A] font-sans">Point of contact</td>
                        <td class="p-5 text-[13.5px] font-semibold text-primary bg-[var(--primary-color)]/[0.03] font-sans">
                            <span class="text-primary font-black mr-2">✓</span> Dedicated RM
                        </td>
                        <td class="p-5 text-[13.5px] text-slate-500 font-sans">
                            <span class="text-red-400 font-bold mr-2">✕</span> You are it
                        </td>
                    </tr>

                    <!-- Row 2: Serves both sides -->
                    <tr>
                        <td class="p-5 text-[13.5px] font-bold text-[#0F172A] font-sans">Serves both sides</td>
                        <td class="p-5 text-[13.5px] font-semibold text-primary bg-[var(--primary-color)]/[0.03] font-sans">
                            <span class="text-primary font-black mr-2">✓</span> Customer & talent
                        </td>
                        <td class="p-5 text-[13.5px] text-slate-500 font-sans">
                            <span class="text-red-400 font-bold mr-2">✕</span> N/A
                        </td>
                    </tr>

                    <!-- Row 3: Industry expertise -->
                    <tr>
                        <td class="p-5 text-[13.5px] font-bold text-[#0F172A] font-sans">Industry expertise</td>
                        <td class="p-5 text-[13.5px] font-semibold text-primary bg-[var(--primary-color)]/[0.03] font-sans">
                            <span class="text-primary font-black mr-2">✓</span> Matched to your industry
                        </td>
                        <td class="p-5 text-[13.5px] text-slate-500 font-sans">
                            <span class="text-red-400 font-bold mr-2">✕</span> None
                        </td>
                    </tr>

                    <!-- Row 4: Replacement support -->
                    <tr>
                        <td class="p-5 text-[13.5px] font-bold text-[#0F172A] font-sans">Replacement support</td>
                        <td class="p-5 text-[13.5px] font-semibold text-primary bg-[var(--primary-color)]/[0.03] font-sans">
                            <span class="text-primary font-black mr-2">✓</span> Full guarantee, $0
                        </td>
                        <td class="p-5 text-[13.5px] text-slate-500 font-sans">
                            <span class="text-red-400 font-bold mr-2">✕</span> You start over
                        </td>
                    </tr>

                    <!-- Row 5: How you reach them -->
                    <tr>
                        <td class="p-5 text-[13.5px] font-bold text-[#0F172A] font-sans">How you reach them</td>
                        <td class="p-5 text-[13.5px] font-semibold text-primary bg-[var(--primary-color)]/[0.03] font-sans">
                            <span class="text-primary font-black mr-2">✓</span> Phone & email
                        </td>
                        <td class="p-5 text-[13.5px] text-slate-500 font-sans">
                            <span class="text-amber-500 font-extrabold mr-2">—</span> N/A
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
        <h2 class="text-3xl sm:text-4xl md:text-[40px] font-extrabold text-center text-[#0F172A] leading-[1.2] tracking-tight mb-16 font-sans">
            From idea to<br>
            <span class="text-primary">500+ businesses</span>
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
                        22
                    </div>
                    <!-- Connector line (only visible if not the last group item) -->
                    <div class="absolute top-10 md:top-11 bottom-0 w-[2px] bg-slate-100 -mb-8 z-0 group-last:hidden"></div>
                </div>
                <!-- Right side: Content Card -->
                <div class="flex-1 bg-white rounded-[24px] border border-slate-200/60 p-6 md:p-8 text-left shadow-[0_4px_20px_rgba(0,0,0,0.015)] hover:border-slate-300 transition-colors duration-300">
                    <span class="text-[10px] md:text-xs font-bold tracking-wider text-slate-400 uppercase mb-2 block font-sans">
                        2022 — FOUNDED
                    </span>
                    <h3 class="text-[16px] md:text-lg font-bold text-[#0F172A] mb-3 tracking-tight font-sans">
                        Edge launches in Mountain View, CA
                    </h3>
                    <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans">
                        Founded to solve the remote hiring gap for medical, dental, and insurance industries. First campus opens. First customers onboarded.
                    </p>
                </div>
            </div>

            <!-- Step 2: 2023 -->
            <div class="group flex gap-5 md:gap-8 items-stretch relative mb-8 last:mb-0">
                <!-- Left side -->
                <div class="flex flex-col items-center relative">
                    <!-- Circle (Vibrant Blue / Dynamic Primary) -->
                    <div class="flex items-center justify-center w-10 h-10 md:w-11 md:h-11 rounded-full text-white text-xs md:text-sm font-bold flex-shrink-0 bg-blue-600 shadow-[0_0_12px_rgba(37,99,235,0.2)] z-10 font-sans">
                        23
                    </div>
                    <div class="absolute top-10 md:top-11 bottom-0 w-[2px] bg-slate-100 -mb-8 z-0 group-last:hidden"></div>
                </div>
                <!-- Right side: Content Card -->
                <div class="flex-1 bg-white rounded-[24px] border border-slate-200/60 p-6 md:p-8 text-left shadow-[0_4px_20px_rgba(0,0,0,0.015)] hover:border-slate-300 transition-colors duration-300">
                    <span class="text-[10px] md:text-xs font-bold tracking-wider text-slate-400 uppercase mb-2 block font-sans">
                        2023 — PRODUCT-MARKET FIT
                    </span>
                    <h3 class="text-[16px] md:text-lg font-bold text-[#0F172A] mb-3 tracking-tight font-sans">
                        100+ businesses trust Edge
                    </h3>
                    <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans">
                        Edge Edu training program launches. SOC 2 Type II certification achieved. Talent marketplace expands across all three verticals.
                    </p>
                </div>
            </div>

            <!-- Step 3: 2024 -->
            <div class="group flex gap-5 md:gap-8 items-stretch relative mb-8 last:mb-0">
                <!-- Left side -->
                <div class="flex flex-col items-center relative">
                    <!-- Circle (Vibrant Green) -->
                    <div class="flex items-center justify-center w-10 h-10 md:w-11 md:h-11 rounded-full text-white text-xs md:text-sm font-bold flex-shrink-0 bg-emerald-600 shadow-[0_0_12px_rgba(16,185,129,0.2)] z-10 font-sans">
                        24
                    </div>
                    <div class="absolute top-10 md:top-11 bottom-0 w-[2px] bg-slate-100 -mb-8 z-0 group-last:hidden"></div>
                </div>
                <!-- Right side: Content Card -->
                <div class="flex-1 bg-white rounded-[24px] border border-slate-200/60 p-6 md:p-8 text-left shadow-[0_4px_20px_rgba(0,0,0,0.015)] hover:border-slate-300 transition-colors duration-300">
                    <span class="text-[10px] md:text-xs font-bold tracking-wider text-slate-400 uppercase mb-2 block font-sans">
                        2024 — SCALE
                    </span>
                    <h3 class="text-[16px] md:text-lg font-bold text-[#0F172A] mb-3 tracking-tight font-sans">
                        500+ businesses, 1,000+ professionals
                    </h3>
                    <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans">
                        Multiple campus locations operating. HIPAA, ISO 27001, GDPR compliance achieved. Bring Your Own Talent (BYOT) program launches. 97% retention rate.
                    </p>
                </div>
            </div>

            <!-- Step 4: 2025 -->
            <div class="group flex gap-5 md:gap-8 items-stretch relative mb-8 last:mb-0">
                <!-- Left side -->
                <div class="flex flex-col items-center relative">
                    <!-- Circle (Amber/Orange) -->
                    <div class="flex items-center justify-center w-10 h-10 md:w-11 md:h-11 rounded-full text-white text-xs md:text-sm font-bold flex-shrink-0 bg-amber-600 shadow-[0_0_12px_rgba(217,119,6,0.2)] z-10 font-sans">
                        25
                    </div>
                    <div class="absolute top-10 md:top-11 bottom-0 w-[2px] bg-slate-100 -mb-8 z-0 group-last:hidden"></div>
                </div>
                <!-- Right side: Content Card -->
                <div class="flex-1 bg-white rounded-[24px] border border-slate-200/60 p-6 md:p-8 text-left shadow-[0_4px_20px_rgba(0,0,0,0.015)] hover:border-slate-300 transition-colors duration-300 font-sans">
                    <span class="text-[10px] md:text-xs font-bold tracking-wider text-slate-400 uppercase mb-2 block">
                        2025 — WHAT'S NEXT
                    </span>
                    <h3 class="text-[16px] md:text-lg font-bold text-[#0F172A] mb-3 tracking-tight">
                        Building the future of high-trust hiring
                    </h3>
                    <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans">
                        Expanding campus infrastructure, deepening industry training, and continuing to build the most trusted remote hiring ecosystem in the world.
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
            The Complete Ecosystem
        </div>

        <!-- Main Headline -->
        <h2 class="text-3xl sm:text-4xl md:text-[40px] font-extrabold text-center text-[#0F172A] leading-[1.2] tracking-tight mb-5 font-sans">
            Not a staffing agency.<br>
            <span class="text-primary">An operating system for remote hiring.</span>
        </h2>

        <!-- Subtitle Description -->
        <p class="text-slate-500 text-center text-sm md:text-base max-w-2xl mx-auto leading-relaxed mb-16 font-sans">
            Every piece of infrastructure a business needs to hire, manage, and retain remote professionals — built into one platform.
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
                <h3 class="font-bold text-[#0F172A] text-[15px] mb-3 tracking-tight font-sans">Talent Network</h3>
                <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans">
                    Thousands of pre-vetted, industry-trained professionals across dental, medical, and insurance — matched in 7 days.
                </p>
            </div>

            <!-- Card 2: Edge Edu -->
            <div class="bg-white rounded-[24px] border border-slate-200/60 p-6 md:p-8 flex flex-col items-center text-center shadow-[0_4px_20px_rgba(0,0,0,0.01)] hover:shadow-md hover:border-primary/25 transition-all duration-300">
                <div class="text-primary mb-5">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479L12 21l-6.824-3.943a12.083 12.083 0 01.665-6.479L12 14z"/>
                    </svg>
                </div>
                <h3 class="font-bold text-[#0F172A] text-[15px] mb-3 tracking-tight font-sans">Edge Edu</h3>
                <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans">
                    Proprietary 4-week training program. Platform certifications, industry fundamentals, HIPAA compliance, soft skills.
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
                <h3 class="font-bold text-[#0F172A] text-[15px] mb-3 tracking-tight font-sans">Equipment & IT</h3>
                <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans">
                    Laptop, dual monitors, VPN, MDM, endpoint encryption — provisioned, shipped, and managed by Edge IT.
                </p>
            </div>

            <!-- Card 5: Payroll & Benefits -->
            <div class="bg-white rounded-[24px] border border-slate-200/60 p-6 md:p-8 flex flex-col items-center text-center shadow-[0_4px_20px_rgba(0,0,0,0.01)] hover:shadow-md hover:border-primary/25 transition-all duration-300">
                <div class="text-primary mb-5">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="font-bold text-[#0F172A] text-[15px] mb-3 tracking-tight font-sans">Payroll & Benefits</h3>
                <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans">
                    Salary processing, health insurance, PTO, tax compliance, currency management — fully handled.
                </p>
            </div>

            <!-- Card 6: Legal & Compliance -->
            <div class="bg-white rounded-[24px] border border-slate-200/60 p-6 md:p-8 flex flex-col items-center text-center shadow-[0_4px_20px_rgba(0,0,0,0.01)] hover:shadow-md hover:border-primary/25 transition-all duration-300">
                <div class="text-primary mb-5">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7V4m0 0a2 2 0 10-4 0v3m4-3a2 2 0 114 0v3M12 3v18M18 7l3 9a5.002 5.002 0 006.001 0M18 7l-3 9M18 7V4m0 0a2 2 0 10-4 0v3m4-3a2 2 0 114 0v3"/>
                    </svg>
                </div>
                <h3 class="font-bold text-[#0F172A] text-[15px] mb-3 tracking-tight font-sans">Legal & Compliance</h3>
                <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans">
                    Employment contracts, NDA, IP assignment, BAA, HIPAA, SOC 2, ISO 27001 — all managed.
                </p>
            </div>

            <!-- Card 7: HR & People Ops -->
            <div class="bg-white rounded-[24px] border border-slate-200/60 p-6 md:p-8 flex flex-col items-center text-center shadow-[0_4px_20px_rgba(0,0,0,0.01)] hover:shadow-md hover:border-primary/25 transition-all duration-300">
                <div class="text-primary mb-5">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </div>
                <h3 class="font-bold text-[#0F172A] text-[15px] mb-3 tracking-tight font-sans">HR & People Ops</h3>
                <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans">
                    Onboarding, performance reviews, conflict resolution, offboarding — a full HR department for your hire.
                </p>
            </div>

            <!-- Card 8: Edge Platform -->
            <div class="bg-white rounded-[24px] border border-slate-200/60 p-6 md:p-8 flex flex-col items-center text-center shadow-[0_4px_20px_rgba(0,0,0,0.01)] hover:shadow-md hover:border-primary/25 transition-all duration-300">
                <div class="text-primary mb-5">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                    </svg>
                </div>
                <h3 class="font-bold text-[#0F172A] text-[15px] mb-3 tracking-tight font-sans">Edge Platform</h3>
                <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans">
                    Time tracking, productivity dashboards, communication tools, performance analytics — full visibility.
                </p>
            </div>

        </div>


        <div class="w-full bg-white py-12 px-4 sm:px-6 lg:px-8 flex justify-center items-center">
    
            <!-- Outer Translucent Card (Rounded, centered, and color-aligned) -->
            <div class="max-w-[1100px] w-full border rounded-[36px] px-8 py-10 md:px-14 md:py-12 lg:px-16 lg:py-14 flex flex-col lg:flex-row justify-between items-center gap-8 text-center"
                style="background-color: color-mix(in srgb, var(--primary-color) 4%, transparent); border-color: color-mix(in srgb, var(--primary-color) 12%, transparent);">
                
                <!-- Left Side: Center-Aligned Text Column on all devices -->
                <div class="flex flex-col items-center text-center flex-1 w-full">
                    <h3 class="text-lg sm:text-xl md:text-[16px] font-bold text-[#0F172A] tracking-tight mb-2.5 font-sans leading-snug">
                        Why 500+ businesses chose Edge as their first remote staffing partner
                    </h3>
                    <p class="text-[13px] md:text-[13.5px] text-slate-500 font-medium font-sans">
                        Book a Demo. We'll show you exactly how the ecosystem works.
                    </p>
                </div>

                <!-- Right Side: CTA Button and Helper Text -->
                <div class="flex flex-col sm:flex-row items-center gap-5 sm:gap-6 w-full lg:w-auto justify-center lg:justify-end">
                    <!-- CTA Button -->
                    <button class="bg-primary hover:opacity-95 text-white font-bold py-3.5 px-7 rounded-[14px] shadow-[0_4px_14px_rgba(124,58,237,0.25)] transition-all flex items-center justify-center gap-2.5 whitespace-nowrap text-sm w-full sm:w-auto font-sans"
                            style="shadow: 0 4px 14px color-mix(in srgb, var(--primary-color) 25%, transparent);">
                        Book a Demo 
                        <!-- Ultra-clean Inline SVG Chevron -->
                        <svg class="w-3 h-3 text-white flex-shrink-0" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                    
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
        <h2 class="text-white text-[42px] md:text-[46px] font-extrabold leading-[1.1] tracking-[-0.03em] mb-6 capitalize">
            Meet your next hire<br>
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