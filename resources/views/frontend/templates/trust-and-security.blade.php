@extends('frontend.layouts.app')

@section('content')   

<section class="relative w-full min-h-screen flex items-center justify-center bg-[#050811] py-20 lg:py-28 px-4 sm:px-6 lg:px-8 overflow-hidden">
    
    <!-- Dotted Grid Overlay -->
    <div class="absolute inset-0 bg-[radial-gradient(rgba(255,255,255,0.015)_1.2px,transparent_1.2px)] [background-size:24px_24px] pointer-events-none z-0"></div>
    
    <!-- Dynamic Spotlight Glow -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] rounded-full pointer-events-none z-0" 
         style="background: radial-gradient(circle, color-mix(in srgb, var(--primary-color) 16%, transparent) 0%, transparent 70%);"></div>
    
    <!-- Content Container -->
    <div class="max-w-4xl w-full flex flex-col items-center text-center relative z-10">
        
        <!-- Top Shield Icon Container -->
        <div class="flex items-center justify-center w-14 h-14 rounded-full border bg-[#060c18]/30 mb-8 text-slate-300"
             style="background-color: color-mix(in srgb, var(--primary-color) 4%, transparent); border-color: color-mix(in srgb, var(--primary-color) 15%, transparent);">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
            </svg>
        </div>

        <!-- Compliance Labels / Badges Pill -->
        <div class="inline-flex flex-wrap items-center justify-center gap-3 px-5 py-1.5 rounded-full border border-slate-800/80 bg-[#060c18]/30 text-slate-500 text-[10px] md:text-[11px] font-bold tracking-wider uppercase mb-8">
            <span>HIPAA</span>
            <span class="text-slate-800/60 font-normal">|</span>
            <span>SOC 2 Type II</span>
            <span class="text-slate-800/60 font-normal">|</span>
            <span>ISO 27001</span>
            <span class="text-slate-800/60 font-normal">|</span>
            <span>GDPR</span>
        </div>

        <!-- Headline -->
        <h2 class="text-3xl sm:text-4xl md:text-[44px] font-extrabold text-white leading-[1.15] tracking-tight max-w-3xl mb-6 font-sans capitalize">
            Your data never leaves<br>
            a building <span class="text-primary">we control</span>
        </h2>

        <!-- Subtitle Description -->
        <p class="text-slate-400 text-sm md:text-[15px] leading-relaxed text-center max-w-2xl mb-10 font-sans">
            Edge talent operates exclusively from secured campuses — biometric entry, managed devices, encrypted networks, and 24/7 monitoring. A controlled environment, built from the ground up for data security.
        </p>

        <!-- Action Buttons -->
        <div class="flex flex-col sm:flex-row gap-4 mb-20 w-full justify-center">
            <button class="bg-primary hover:opacity-95 text-white font-bold py-3.5 px-8 rounded-lg shadow-lg transition-all duration-300 transform hover:-translate-y-0.5 flex items-center justify-center gap-2 group font-sans"
                    style="box-shadow: 0 4px 20px color-mix(in srgb, var(--primary-color) 25%, transparent);">
                Book a Security Walkthrough <span class="transition-transform duration-300 group-hover:translate-x-1">→</span>
            </button>
            <button class="border border-slate-800 bg-[#060c18]/20 hover:bg-slate-900/40 text-slate-200 font-bold py-3.5 px-8 rounded-lg transition-all duration-300 flex items-center justify-center gap-2 font-sans">
                See All 6 Security Layers
                <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>
        </div>

        <!-- Metrics Grid -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-y-10 gap-x-6 w-full max-w-3xl">
            
            <!-- Metric 1: 500+ -->
            <div class="flex flex-col items-center">
                <span class="text-3xl md:text-[34px] font-black text-white tracking-tight mb-2 font-sans">
                    500<span class="text-primary font-bold">+</span>
                </span>
                <span class="text-[11px] md:text-xs text-slate-400 tracking-wide font-medium font-sans">
                    Businesses trust Edge
                </span>
            </div>

            <!-- Metric 2: 0 -->
            <div class="flex flex-col items-center">
                <span class="text-3xl md:text-[34px] font-black text-white tracking-tight mb-2 font-sans">
                    0
                </span>
                <span class="text-[11px] md:text-xs text-slate-400 tracking-wide font-medium font-sans">
                    Security breaches
                </span>
            </div>

            <!-- Metric 3: 6 -->
            <div class="flex flex-col items-center">
                <span class="text-3xl md:text-[34px] font-black text-white tracking-tight mb-2 font-sans">
                    6
                </span>
                <span class="text-[11px] md:text-xs text-slate-400 tracking-wide font-medium font-sans">
                    Layers of security
                </span>
            </div>

            <!-- Metric 4: 24/7 -->
            <div class="flex flex-col items-center">
                <span class="text-3xl md:text-[34px] font-black text-white tracking-tight mb-2 font-sans">
                    24/7
                </span>
                <span class="text-[11px] md:text-xs text-slate-400 tracking-wide font-medium font-sans">
                    SOC monitoring
                </span>
            </div>

        </div>

    </div>
</section>

<section class="w-full bg-white py-16 lg:py-24 px-6 lg:px-8 flex justify-center items-center">
    <div class="max-w-4xl w-full flex flex-col items-center text-center">
        
        <!-- Top Pill Badge (Matches the clean green style from the image) -->
        <div class="inline-flex items-center justify-center gap-2 px-4 py-1.5 bg-[#f0fdf4] text-[#059669] rounded-full text-[10px] md:text-[11px] font-bold border border-[#dcfce7] tracking-wider uppercase mb-6 font-sans">
            <span class="font-bold text-[12px] leading-none">✓</span>
            Built for first-time remote staffing buyers
        </div>

        <!-- Main Headline (With dynamic primary color highlight) -->
        <h2 class="text-3xl sm:text-4xl md:text-[40px] font-extrabold text-[#0F172A] leading-[1.25] tracking-tight mb-5 font-sans">
            We know this is new for you.<br class="hidden sm:inline">
            <span class="text-primary">That's exactly why we built this.</span>
        </h2>

        <!-- Subtitle Paragraph -->
        <p class="text-slate-500 text-sm md:text-base max-w-2xl mx-auto leading-relaxed font-sans">
            Most of our customers had never used a remote staffing company before Edge. We designed six layers of security so you don't have to take our word for it — you can see exactly how your data is protected at every level.
        </p>

    </div>
</section>

<!-- Added "relative" to the section wrapper so the absolute "01" aligns correctly inside it -->
<section class="relative w-full bg-[#fafafa] py-16 lg:py-24 px-6 lg:px-8 flex justify-center items-center overflow-hidden">
   
    <!-- Light-Themed Dotted Grid Overlay (Changed from white dots to subtle gray dots) -->
    <div class="absolute inset-0 bg-[radial-gradient(rgba(0,0,0,0.02)_1.2px,transparent_1.2px)] [background-size:24px_24px] pointer-events-none z-0"></div>
    
    <!-- Large Decorative "01" Background Text (Fixed opacity typo and set correct contrast) -->
    <div class="absolute top-8 right-8 text-slate-900/[0.04] text-7xl sm:text-8xl md:text-[120px] font-black select-none pointer-events-none z-0">
        01
    </div>

    <!-- Asymmetric 12-column grid: 1 column on mobile, 7/5 split on desktop -->
    <div class="max-w-6xl w-full grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center relative z-10">
        
        <!-- LEFT COLUMN: Main Headers, Subtitle & Card Stack (Spans 7 of 12 columns) -->
        <div class="lg:col-span-7 flex flex-col">
            
            <!-- Top Pill Badge (Dynamic background/border/text) -->
            <div class="inline-flex items-center justify-center px-4 py-1.5 rounded-full text-[10px] md:text-[11px] font-bold border tracking-wider uppercase mb-6 w-fit font-sans text-primary"
                 style="background-color: color-mix(in srgb, var(--primary-color) 6%, transparent); border-color: color-mix(in srgb, var(--primary-color) 20%, transparent);">
                Layer 1 — Physical Security
            </div>

            <!-- Headline -->
            <h2 class="text-3xl sm:text-4xl md:text-[42px] font-extrabold text-[#0F172A] leading-[1.15] tracking-tight mb-6 font-sans">
                Not a home office.<br>
                <span class="text-primary">A secured campus.</span>
            </h2>

            <!-- Subtitle Description -->
            <p class="text-[14px] md:text-[15px] leading-relaxed text-slate-500 mb-10 max-w-2xl font-sans">
                Every Edge professional works from a managed, company-controlled campus — not a home office, coworking space, or coffee shop. Physical security is the foundation everything else is built on.
            </p>

            <!-- Vertical Card Stack -->
            <div class="space-y-4 w-full">
                
                <!-- Card 1: Biometric Access Control -->
                <div class="bg-white rounded-[20px] border border-slate-200/60 p-6 flex gap-5 items-start shadow-sm hover:border-slate-300 transition-colors duration-300">
                    <!-- Icon Wrapper (Dynamic primary background mix) -->
                    <div class="flex items-center justify-center w-11 h-11 rounded-xl text-primary flex-shrink-0"
                         style="background-color: color-mix(in srgb, var(--primary-color) 8%, transparent);">
                        <!-- Key/Biometric SVG -->
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 7a2 2 0 012 2m-1.5 6l-5.1 5.1a1.5 1.5 0 01-1.06.44H7A1.5 1.5 0 015.5 19v-1.84a1.5 1.5 0 01.44-1.06L11 11m-1-1a5 5 0 117.07 7.07l-1.41-1.41"/>
                        </svg>
                    </div>
                    <div class="flex-1 flex flex-col items-start text-left">
                        <h3 class="font-bold text-[#0F172A] text-[15px] mb-2 tracking-tight font-sans">Biometric Access Control</h3>
                        <p class="text-[12.5px] leading-relaxed text-slate-500 mb-3 font-sans">
                            Fingerprint and facial recognition required to enter the facility. No tailgating — one person, one scan, one entry.
                        </p>
                        <!-- Green Pill Tag -->
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#f0fdf4] text-[#059669] text-[10.5px] font-bold border border-[#dcfce7] font-sans">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#10b981]"></span>
                            Every entry logged
                        </span>
                    </div>
                </div>

                <!-- Card 2: 24/7 CCTV Surveillance -->
                <div class="bg-white rounded-[20px] border border-slate-200/60 p-6 flex gap-5 items-start shadow-sm hover:border-slate-300 transition-colors duration-300">
                    <div class="flex items-center justify-center w-11 h-11 rounded-xl text-primary flex-shrink-0"
                         style="background-color: color-mix(in srgb, var(--primary-color) 8%, transparent);">
                        <!-- CCTV Camera SVG -->
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <div class="flex-1 flex flex-col items-start text-left">
                        <h3 class="font-bold text-[#0F172A] text-[15px] mb-2 tracking-tight font-sans">24/7 CCTV Surveillance</h3>
                        <p class="text-[12.5px] leading-relaxed text-slate-500 mb-3 font-sans">
                            Every entrance, workspace, and common area monitored around the clock. Footage stored securely for audit compliance.
                        </p>
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#f0fdf4] text-[#059669] text-[10.5px] font-bold border border-[#dcfce7] font-sans">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#10b981]"></span>
                            24/7 recording
                        </span>
                    </div>
                </div>

                <!-- Card 3: Secured Perimeter -->
                <div class="bg-white rounded-[20px] border border-slate-200/60 p-6 flex gap-5 items-start shadow-sm hover:border-slate-300 transition-colors duration-300">
                    <div class="flex items-center justify-center w-11 h-11 rounded-xl text-primary flex-shrink-0"
                         style="background-color: color-mix(in srgb, var(--primary-color) 8%, transparent);">
                        <!-- Lock SVG -->
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                        </svg>
                    </div>
                    <div class="flex-1 flex flex-col items-start text-left">
                        <h3 class="font-bold text-[#0F172A] text-[15px] mb-2 tracking-tight font-sans">Secured Perimeter</h3>
                        <p class="text-[12.5px] leading-relaxed text-slate-500 mb-3 font-sans">
                            Gated facility with security guards, visitor logs, and restricted zones. No unauthorized access to workstations.
                        </p>
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#f0fdf4] text-[#059669] text-[10.5px] font-bold border border-[#dcfce7] font-sans">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#10b981]"></span>
                            Manned 24/7
                        </span>
                    </div>
                </div>

                <!-- Card 4: Redundant Infrastructure -->
                <div class="bg-white rounded-[20px] border border-slate-200/60 p-6 flex gap-5 items-start shadow-sm hover:border-slate-300 transition-colors duration-300">
                    <div class="flex items-center justify-center w-11 h-11 rounded-xl text-primary flex-shrink-0"
                         style="background-color: color-mix(in srgb, var(--primary-color) 8%, transparent);">
                        <!-- Lightning SVG -->
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <div class="flex-1 flex flex-col items-start text-left">
                        <h3 class="font-bold text-[#0F172A] text-[15px] mb-2 tracking-tight font-sans">Redundant Infrastructure</h3>
                        <p class="text-[12.5px] leading-relaxed text-slate-500 mb-3 font-sans">
                            Backup power generators, redundant fiber internet, uninterrupted power supply on every workstation. Zero-downtime environment for your operations.
                        </p>
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#f0fdf4] text-[#059669] text-[10.5px] font-bold border border-[#dcfce7] font-sans">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#10b981]"></span>
                            99.9% uptime
                        </span>
                    </div>
                </div>

            </div>
        </div>
        
        <!-- RIGHT COLUMN: Perimeter & Campus Circle Node (Now perfectly circular and centered) -->
        <div class="lg:col-span-5 w-full h-full min-h-[300px] flex items-center justify-center relative">
            
            <!-- Outer Dashed Security Circle -->
            <div class="absolute w-[280px] h-[280px] sm:w-[320px] sm:h-[320px] rounded-full border border-dashed border-purple-200/50 flex items-center justify-center"></div>
            
            <!-- Inner Dashed Security Circle -->
            <div class="absolute w-[220px] h-[220px] sm:w-[250px] sm:h-[250px] rounded-full border border-dashed border-purple-200/30 flex items-center justify-center"></div>
            
            <!-- Central Solid Circle node (Perfect circle replacing the capsule) -->
            <div class="w-28 h-28 sm:w-32 sm:h-32 rounded-full flex items-center justify-center relative z-10 shadow-sm transition-all duration-350 hover:scale-105"
                style="background-color: color-mix(in srgb, var(--primary-color) 8%, transparent); border: 1.5px solid color-mix(in srgb, var(--primary-color) 20%, transparent);">
                <!-- Building / Workspace Icon -->
                <svg class="w-8 h-8 text-[#0F172A]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                </svg>
            </div>
            
        </div>

    </div>
</section>

<section class="relative w-full bg-white py-20 lg:py-28 px-4 sm:px-6 lg:px-8 overflow-hidden">
    
    <!-- Dotted Grid Overlay -->
    <div class="absolute inset-0 bg-[radial-gradient(rgba(255,255,255,0.015)_1.2px,transparent_1.2px)] [background-size:24px_24px] pointer-events-none z-0"></div>
    
    <!-- Large Decorative "02" Background Text (Top-right corner, pixel-perfect detail) -->
    <div class="absolute top-8 right-8 text-slate-800/10 text-7xl sm:text-8xl md:text-[120px] font-black select-none pointer-events-none z-0">
        02
    </div>

    <!-- Asymmetric Grid: Illustration on left (5 cols), Content on right (7 cols) -->
    <div class="max-w-6xl w-full mx-auto grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center relative z-10">
        
        <!-- LEFT COLUMN: Concentric Security Circles with Central User Node (Spans 5 of 12 columns) -->
        <div class="lg:col-span-5 w-full flex items-center justify-center h-[350px] lg:h-[450px] relative select-none order-last lg:order-none">
            
            <!-- Concentric Dashed Security Circles -->
            <div class="absolute w-[280px] h-[280px] sm:w-[320px] sm:h-[320px] rounded-full border border-dashed border-emerald-500/20 flex items-center justify-center"></div>
            <div class="absolute w-[220px] h-[220px] sm:w-[250px] sm:h-[250px] rounded-full border border-dashed border-emerald-500/10 flex items-center justify-center"></div>
            
            <!-- Central Solid Mint-Green Circle node (User avatar centered) -->
            <div class="w-28 h-28 sm:w-32 sm:h-32 rounded-full flex items-center justify-center relative z-10 shadow-sm transition-all duration-300 hover:scale-105 bg-[#e6f9ee] border-[1.5px] border-[#c2eed4]">
                <!-- User Outline Icon -->
                <svg class="w-8 h-8 text-[#0F172A]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                </svg>
            </div>
            
        </div>

        <!-- RIGHT COLUMN: Headers, Subtitle & Card Stack (Spans 7 of 12 columns) -->
        <div class="lg:col-span-7 flex flex-col">
            
            <!-- Top Pill Badge (Dynamic background/border/text) -->
            <div class="inline-flex items-center justify-center px-4 py-1.5 rounded-full text-[10px] md:text-[11px] font-bold border tracking-wider uppercase mb-6 w-fit font-sans text-primary"
                 style="background-color: color-mix(in srgb, var(--primary-color) 6%, transparent); border-color: color-mix(in srgb, var(--primary-color) 20%, transparent);">
                Layer 2 — People & Vetting
            </div>

            <!-- Headline -->
            <h2 class="text-3xl sm:text-4xl md:text-[42px] font-extrabold text-black leading-[1.15] tracking-tight mb-6 font-sans text-left">
                Every hire is vetted, <br>
                verified, and <span class="text-primary">legally bound</span>
            </h2>

            <!-- Subtitle Description -->
            <p class="text-[14px] md:text-[15px] leading-relaxed text-slate-400 mb-10 max-w-2xl text-left font-sans">
                Before any Edge professional touches your systems, they pass through a rigorous screening process — identity verification, criminal background checks, and legally binding contracts in their country of origin.
            </p>

            <!-- Vertical Card Stack -->
            <div class="space-y-4 w-full">
                
                <!-- Card 1: Identity Verification -->
                <div class="bg-white rounded-[20px] border border-slate-200/10 p-6 flex gap-5 items-start shadow-sm hover:border-slate-800 transition-colors duration-300">
                    <div class="flex items-center justify-center w-11 h-11 rounded-xl text-primary flex-shrink-0"
                         style="background-color: color-mix(in srgb, var(--primary-color) 8%, transparent);">
                        <!-- User ID SVG -->
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-7 8h10M7 14H5v1h2v-1z"/>
                        </svg>
                    </div>
                    <div class="flex-1 flex flex-col items-start text-left">
                        <h3 class="font-bold text-[#0F172A] text-[15px] mb-2 tracking-tight font-sans">Government-Issued Identity Verification</h3>
                        <p class="text-[12.5px] leading-relaxed text-slate-500 mb-3 font-sans">
                            Photo ID verified against government databases. No aliases, no fakes. We know exactly who is working for you.
                        </p>
                        <!-- Green Pill Tag -->
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#f0fdf4] text-[#059669] text-[10.5px] font-bold border border-[#dcfce7] font-sans">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#10b981]"></span>
                            Verified before day one
                        </span>
                    </div>
                </div>

                <!-- Card 2: Criminal Background Checks -->
                <div class="bg-white rounded-[20px] border border-slate-200/10 p-6 flex gap-5 items-start shadow-sm hover:border-slate-800 transition-colors duration-300">
                    <div class="flex items-center justify-center w-11 h-11 rounded-xl text-primary flex-shrink-0"
                         style="background-color: color-mix(in srgb, var(--primary-color) 8%, transparent);">
                        <!-- Search SVG -->
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </div>
                    <div class="flex-1 flex flex-col items-start text-left">
                        <h3 class="font-bold text-[#0F172A] text-[15px] mb-2 tracking-tight font-sans">Criminal Background Checks</h3>
                        <p class="text-[12.5px] leading-relaxed text-slate-500 mb-3 font-sans">
                            Comprehensive criminal record screening in the talent's country of origin. Disqualifying offenses prevent hiring.
                        </p>
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#f0fdf4] text-[#059669] text-[10.5px] font-bold border border-[#dcfce7] font-sans">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#10b981]"></span>
                            Background cleared
                        </span>
                    </div>
                </div>

                <!-- Card 3: NDA, IP & Non-Compete Agreements -->
                <div class="bg-white rounded-[20px] border border-slate-200/10 p-6 flex gap-5 items-start shadow-sm hover:border-slate-800 transition-colors duration-300">
                    <div class="flex items-center justify-center w-11 h-11 rounded-xl text-primary flex-shrink-0"
                         style="background-color: color-mix(in srgb, var(--primary-color) 8%, transparent);">
                        <!-- Document SVG -->
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                    </div>
                    <div class="flex-1 flex flex-col items-start text-left">
                        <h3 class="font-bold text-[#0F172A] text-[15px] mb-2 tracking-tight font-sans">NDA, IP & Non-Compete Agreements</h3>
                        <p class="text-[12.5px] leading-relaxed text-slate-500 mb-3 font-sans">
                            Every hire signs an NDA, IP assignment, and non-compete — legally binding in their jurisdiction. Your data and trade secrets are contractually protected.
                        </p>
                        <!-- Blue/Purple Pill Tag (Matches dynamic primary color mix) -->
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[10.5px] font-bold border font-sans text-primary"
                              style="background-color: color-mix(in srgb, var(--primary-color) 5%, transparent); border-color: color-mix(in srgb, var(--primary-color) 15%, transparent);">
                            <span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                            Legally enforceable
                        </span>
                    </div>
                </div>

                <!-- Card 4: Mandatory Security Awareness Training -->
                <div class="bg-white rounded-[20px] border border-slate-200/10 p-6 flex gap-5 items-start shadow-sm hover:border-slate-800 transition-colors duration-300">
                    <div class="flex items-center justify-center w-11 h-11 rounded-xl text-primary flex-shrink-0"
                         style="background-color: color-mix(in srgb, var(--primary-color) 8%, transparent);">
                        <!-- Graduation Cap SVG -->
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479L12 21l-6.824-3.943a12.083 12.083 0 01.665-6.479L12 14z"/>
                        </svg>
                    </div>
                    <div class="flex-1 flex flex-col items-start text-left">
                        <h3 class="font-bold text-[#0F172A] text-[15px] mb-2 tracking-tight font-sans">Mandatory Security Awareness Training</h3>
                        <p class="text-[12.5px] leading-relaxed text-slate-500 mb-3 font-sans">
                            HIPAA training, phishing simulations, cyber hygiene protocols, and ongoing security refreshers. Not optional — required for continued employment.
                        </p>
                        <!-- Blue/Purple Pill Tag -->
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[10.5px] font-bold border font-sans text-primary"
                              style="background-color: color-mix(in srgb, var(--primary-color) 5%, transparent); border-color: color-mix(in srgb, var(--primary-color) 15%, transparent);">
                            <span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                            Ongoing training
                        </span>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <div class="w-full bg-white py-12 px-4 sm:px-6 lg:px-8 mt-10 flex justify-center items-center">
    
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
</section>

<section class="relative w-full bg-[#fafafa] py-20 lg:py-28 px-4 sm:px-6 lg:px-8 overflow-hidden">
    
    <!-- Light-Themed Dotted Grid Overlay -->
    <div class="absolute inset-0 bg-[radial-gradient(rgba(0,0,0,0.02)_1.2px,transparent_1.2px)] [background-size:24px_24px] pointer-events-none z-0"></div>
    
    <!-- Large Decorative "03" Background Text (Top-right corner, pixel-perfect detail) -->
    <div class="absolute top-8 right-8 text-slate-900/[0.04] text-7xl sm:text-8xl md:text-[120px] font-black select-none pointer-events-none z-0">
        03
    </div>

    <!-- Asymmetric Grid: Content on left (7 cols), Illustration on right (5 cols) -->
    <div class="max-w-6xl w-full mx-auto grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center relative z-10">
        
        <!-- LEFT COLUMN: Main Headers, Subtitle & Card Stack (Spans 7 of 12 columns) -->
        <div class="lg:col-span-7 flex flex-col">
            
            <!-- Top Pill Badge (Dynamic background/border/text) -->
            <div class="inline-flex items-center justify-center px-4 py-1.5 rounded-full text-[10px] md:text-[11px] font-bold border tracking-wider uppercase mb-6 w-fit font-sans text-primary"
                 style="background-color: color-mix(in srgb, var(--primary-color) 6%, transparent); border-color: color-mix(in srgb, var(--primary-color) 20%, transparent);">
                Layer 3 — Device Security
            </div>

            <!-- Headline -->
            <h2 class="text-3xl sm:text-4xl md:text-[42px] font-extrabold text-[#0F172A] leading-[1.15] tracking-tight mb-6 font-sans text-left">
                Company devices only.<br>
                <span class="text-primary">No personal laptops.<br>Ever.</span>
            </h2>

            <!-- Subtitle Description -->
            <p class="text-[14px] md:text-[15px] leading-relaxed text-slate-500 mb-10 max-w-2xl text-left font-sans">
                Every Edge professional works on a company-provisioned, company-managed device. No BYOD. No personal hardware touching your systems. Full endpoint control from procurement to secure disposal.
            </p>

            <!-- Vertical Card Stack -->
            <div class="space-y-4 w-full">
                
                <!-- Card 1: Company-Provisioned Hardware -->
                <div class="bg-white rounded-[20px] border border-slate-200/60 p-6 flex gap-5 items-center shadow-sm hover:border-slate-300 transition-colors duration-300">
                    <!-- Icon Wrapper (Dynamic primary background mix) -->
                    <div class="flex items-center justify-center w-11 h-11 rounded-xl text-primary flex-shrink-0"
                         style="background-color: color-mix(in srgb, var(--primary-color) 8%, transparent);">
                        <!-- Laptop SVG -->
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 17L9 20h6l-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <div class="flex-1 flex flex-col items-start text-left">
                        <h3 class="font-bold text-[#0F172A] text-[15px] mb-1.5 tracking-tight font-sans">Company-Provisioned Hardware</h3>
                        <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans">
                            Enterprise-grade laptop, dual monitors, headset, webcam — all asset-tagged and tracked. Personal devices never touch your systems.
                        </p>
                    </div>
                </div>

                <!-- Card 2: Full Disk Encryption -->
                <div class="bg-white rounded-[20px] border border-slate-200/60 p-6 flex gap-5 items-center shadow-sm hover:border-slate-300 transition-colors duration-300">
                    <div class="flex items-center justify-center w-11 h-11 rounded-xl text-primary flex-shrink-0"
                         style="background-color: color-mix(in srgb, var(--primary-color) 8%, transparent);">
                        <!-- Lock SVG -->
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                        </svg>
                    </div>
                    <div class="flex-1 flex flex-col items-start text-left">
                        <h3 class="font-bold text-[#0F172A] text-[15px] mb-1.5 tracking-tight font-sans">Full Disk Encryption</h3>
                        <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans">
                            AES-256 encryption on every device. If a laptop is lost or stolen, your data is unreadable without the decryption key.
                        </p>
                    </div>
                </div>

                <!-- Card 3: Mobile Device Management (MDM) -->
                <div class="bg-white rounded-[20px] border border-slate-200/60 p-6 flex gap-5 items-center shadow-sm hover:border-slate-300 transition-colors duration-300">
                    <div class="flex items-center justify-center w-11 h-11 rounded-xl text-primary flex-shrink-0"
                         style="background-color: color-mix(in srgb, var(--primary-color) 8%, transparent);">
                        <!-- Smartphone SVG -->
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <rect x="7" y="2" width="10" height="20" rx="2" ry="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 18h.01"/>
                        </svg>
                    </div>
                    <div class="flex-1 flex flex-col items-start text-left">
                        <h3 class="font-bold text-[#0F172A] text-[15px] mb-1.5 tracking-tight font-sans">Mobile Device Management (MDM)</h3>
                        <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans">
                            Remote wipe capability, software enforcement, USB port lockdown, app whitelisting. Edge controls what's on every device.
                        </p>
                    </div>
                </div>

                <!-- Card 4: EDR & Anti-Malware -->
                <div class="bg-white rounded-[20px] border border-slate-200/60 p-6 flex gap-5 items-center shadow-sm hover:border-slate-300 transition-colors duration-300">
                    <div class="flex items-center justify-center w-11 h-11 rounded-xl text-primary flex-shrink-0"
                         style="background-color: color-mix(in srgb, var(--primary-color) 8%, transparent);">
                        <!-- Shield SVG -->
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <div class="flex-1 flex flex-col items-start text-left">
                        <h3 class="font-bold text-[#0F172A] text-[15px] mb-1.5 tracking-tight font-sans">EDR & Anti-Malware</h3>
                        <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans">
                            Endpoint Detection and Response (EDR) with real-time threat monitoring. CIS benchmark hardening on every machine.
                        </p>
                    </div>
                </div>

            </div>
        </div>
        
        <!-- RIGHT COLUMN: Perimeter & Campus Circle Node (Spans 5 of 12 columns, flows below on mobile) -->
        <div class="lg:col-span-5 w-full h-full min-h-[300px] flex items-center justify-center relative select-none">
            
            <!-- Outer Dashed Security Circle -->
            <div class="absolute w-[280px] h-[280px] sm:w-[320px] sm:h-[320px] rounded-full border border-dashed border-purple-200/50 flex items-center justify-center"></div>
            
            <!-- Inner Dashed Security Circle -->
            <div class="absolute w-[220px] h-[220px] sm:w-[250px] sm:h-[250px] rounded-full border border-dashed border-purple-200/30 flex items-center justify-center"></div>
            
            <!-- Central Solid Circle node (Perfect circle matching dynamic primary opacity) -->
            <div class="w-28 h-28 sm:w-32 sm:h-32 rounded-full flex items-center justify-center relative z-10 shadow-sm transition-all duration-300 hover:scale-105"
                style="background-color: color-mix(in srgb, var(--primary-color) 8%, transparent); border: 1.5px solid color-mix(in srgb, var(--primary-color) 20%, transparent);">
                <!-- Laptop Icon inside Center Node -->
                <svg class="w-8 h-8 text-[#0F172A]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 17L9 20h6l-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
            </div>
            
        </div>

    </div>
</section>

<section class="relative w-full bg-white py-20 lg:py-28 px-4 sm:px-6 lg:px-8 overflow-hidden">
    
    <!-- Light-Themed Dotted Grid Overlay -->
    <div class="absolute inset-0 bg-[radial-gradient(rgba(0,0,0,0.02)_1.2px,transparent_1.2px)] [background-size:24px_24px] pointer-events-none z-0"></div>
    
    <!-- Large Decorative "04" Background Text (Top-right corner, pixel-perfect detail) -->
    <div class="absolute top-8 right-8 text-slate-900/[0.04] text-7xl sm:text-8xl md:text-[120px] font-black select-none pointer-events-none z-0">
        04
    </div>

    <!-- Asymmetric Grid: Illustration on left (5 cols), Content on right (7 cols) -->
    <div class="max-w-6xl w-full mx-auto grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center relative z-10">
        
        <!-- LEFT COLUMN: Perimeter & Campus Circle Node (Spans 5 of 12 columns, flows below on mobile) -->
        <div class="lg:col-span-5 w-full h-full min-h-[300px] flex items-center justify-center relative select-none order-last lg:order-none">
            
            <!-- Outer Dashed Security Circle -->
            <div class="absolute w-[280px] h-[280px] sm:w-[320px] sm:h-[320px] rounded-full border border-dashed border-amber-200/50 flex items-center justify-center"></div>
            
            <!-- Inner Dashed Security Circle -->
            <div class="absolute w-[220px] h-[220px] sm:w-[250px] sm:h-[250px] rounded-full border border-dashed border-amber-200/30 flex items-center justify-center"></div>
            
            <!-- Central Solid Circle node (Perfect circle matching dynamic amber/orange style) -->
            <div class="w-28 h-28 sm:w-32 sm:h-32 rounded-full flex items-center justify-center relative z-10 shadow-sm transition-all duration-300 hover:scale-105 bg-[#fef3c7] border-[1.5px] border-[#fde68a]">
                <!-- Network Globe Icon inside Center Node -->
                <svg class="w-8 h-8 text-[#0F172A]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="10" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10M12 2a15.3 15.3 0 00-4 10 15.3 15.3 0 004 10M2 12h20" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            
        </div>

        <!-- RIGHT COLUMN: Main Headers, Subtitle & Card Stack (Spans 7 of 12 columns) -->
        <div class="lg:col-span-7 flex flex-col">
            
            <!-- Top Pill Badge (Amber/Orange accent) -->
            <div class="inline-flex items-center justify-center px-4 py-1.5 rounded-full text-[10px] md:text-[11px] font-bold border tracking-wider uppercase mb-6 w-fit font-sans text-amber-600 bg-amber-50 border-amber-100">
                Layer 4 — Network Security
            </div>

            <!-- Headline -->
            <h2 class="text-3xl sm:text-4xl md:text-[42px] font-extrabold text-[#0F172A] leading-[1.15] tracking-tight mb-6 font-sans text-left">
                Zero-trust architecture.<br>
                <span class="text-primary">Every connection<br>verified.</span>
            </h2>

            <!-- Subtitle Description -->
            <p class="text-[14px] md:text-[15px] leading-relaxed text-slate-500 mb-10 max-w-2xl text-left font-sans">
                Every packet in and out of Edge campuses goes through enterprise-grade network security. Zero-trust VPN, web filtering, tiered firewalls, and intrusion detection — no shortcuts.
            </p>

            <!-- Vertical Card Stack -->
            <div class="space-y-4 w-full">
                
                <!-- Card 1: Zero-Trust VPN -->
                <div class="bg-white rounded-[20px] border border-slate-200/60 p-6 flex gap-5 items-center shadow-sm hover:border-slate-300 transition-colors duration-300">
                    <!-- Icon Wrapper (Amber background mix) -->
                    <div class="flex items-center justify-center w-11 h-11 rounded-xl text-amber-600 flex-shrink-0 bg-amber-50">
                        <!-- Globe SVG -->
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10M12 2a15.3 15.3 0 00-4 10 15.3 15.3 0 004 10M2 12h20" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="flex-1 flex flex-col items-start text-left">
                        <h3 class="font-bold text-[#0F172A] text-[15px] mb-1.5 tracking-tight font-sans">Zero-Trust VPN</h3>
                        <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans">
                            All traffic routed through encrypted VPN tunnels. No split tunneling. Every connection re-authenticated. Trust nothing, verify everything.
                        </p>
                    </div>
                </div>

                <!-- Card 2: Tiered Network Firewalls -->
                <div class="bg-white rounded-[20px] border border-slate-200/60 p-6 flex gap-5 items-center shadow-sm hover:border-slate-300 transition-colors duration-300">
                    <div class="flex items-center justify-center w-11 h-11 rounded-xl text-amber-600 flex-shrink-0 bg-amber-50">
                        <!-- Flame SVG -->
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 16.121A3 3 0 1014.12 12c0-1.5-1.5-2.5-3-2.5"/>
                        </svg>
                    </div>
                    <div class="flex-1 flex flex-col items-start text-left">
                        <h3 class="font-bold text-[#0F172A] text-[15px] mb-1.5 tracking-tight font-sans">Tiered Network Firewalls</h3>
                        <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans">
                            Host-based and network-level firewalls. IDS/IPS (Intrusion Detection and Prevention) actively monitoring for anomalies.
                        </p>
                    </div>
                </div>

                <!-- Card 3: Web Filtering & DNS Security -->
                <div class="bg-white rounded-[20px] border border-slate-200/60 p-6 flex gap-5 items-center shadow-sm hover:border-slate-300 transition-colors duration-300">
                    <div class="flex items-center justify-center w-11 h-11 rounded-xl text-amber-600 flex-shrink-0 bg-amber-50">
                        <!-- Globe SVG -->
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10M12 2a15.3 15.3 0 00-4 10 15.3 15.3 0 004 10M2 12h20" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="flex-1 flex flex-col items-start text-left">
                        <h3 class="font-bold text-[#0F172A] text-[15px] mb-1.5 tracking-tight font-sans">Web Filtering & DNS Security</h3>
                        <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans">
                            Category-based web filtering blocks unauthorized sites. DNS-layer protection prevents phishing and C2 communications.
                        </p>
                    </div>
                </div>

                <!-- Card 4: MFA + SSO + RBAC -->
                <div class="bg-white rounded-[20px] border border-slate-200/60 p-6 flex gap-5 items-center shadow-sm hover:border-slate-300 transition-colors duration-300">
                    <div class="flex items-center justify-center w-11 h-11 rounded-xl text-amber-600 flex-shrink-0 bg-amber-50">
                        <!-- Key SVG -->
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 7a2 2 0 012 2m-1.5 6l-5.1 5.1a1.5 1.5 0 01-1.06.44H7A1.5 1.5 0 015.5 19v-1.84a1.5 1.5 0 01.44-1.06L11 11m-1-1a5 5 0 117.07 7.07l-1.41-1.41"/>
                        </svg>
                    </div>
                    <div class="flex-1 flex flex-col items-start text-left">
                        <h3 class="font-bold text-[#0F172A] text-[15px] mb-2 tracking-tight font-sans">EDR & Anti-Malware</h3>
                        <p class="text-[12.5px] leading-relaxed text-slate-500 mb-3 font-sans">
                            Endpoint Detection and Response (EDR) with real-time threat monitoring. CIS benchmark hardening on every machine.
                        </p>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

<section class="relative w-full bg-[#fafafa] py-20 lg:py-28 px-4 sm:px-6 lg:px-8 overflow-hidden">
    
    <!-- Light-Themed Dotted Grid Overlay -->
    <div class="absolute inset-0 bg-[radial-gradient(rgba(0,0,0,0.02)_1.2px,transparent_1.2px)] [background-size:24px_24px] pointer-events-none z-0"></div>
    
    <!-- Large Decorative "05" Background Text (Top-right corner, pixel-perfect detail) -->
    <div class="absolute top-8 right-8 text-slate-900/[0.04] text-7xl sm:text-8xl md:text-[120px] font-black select-none pointer-events-none z-0">
        05
    </div>

    <!-- Asymmetric Grid: Content on left (7 cols), Illustration on right (5 cols) -->
    <div class="max-w-6xl w-full mx-auto grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center relative z-10">
        
        <!-- LEFT COLUMN: Main Headers, Subtitle & Card Stack (Spans 7 of 12 columns) -->
        <div class="lg:col-span-7 flex flex-col">
            
            <!-- Top Pill Badge (Teal/Green accent) -->
            <div class="inline-flex items-center justify-center px-4 py-1.5 rounded-full text-[10px] md:text-[11px] font-bold border tracking-wider uppercase mb-6 w-fit font-sans text-emerald-600 bg-emerald-50 border-emerald-100">
                Layer 5 — Data Protection
            </div>

            <!-- Headline -->
            <h2 class="text-3xl sm:text-4xl md:text-[42px] font-extrabold text-[#0F172A] leading-[1.15] tracking-tight mb-6 font-sans text-left">
                Encrypted at rest.<br>
                Encrypted in transit.<br>
                <span class="text-primary">Always.</span>
            </h2>

            <!-- Subtitle Description -->
            <p class="text-[14px] md:text-[15px] leading-relaxed text-slate-500 mb-10 max-w-2xl text-left font-sans">
                Patient data, policyholder records, financial information — whatever your team handles, it's protected by enterprise encryption, DLP, and secure tenant segregation.
            </p>

            <!-- Vertical Card Stack -->
            <div class="space-y-4 w-full">
                
                <!-- Card 1: Encryption at Rest & in Transit -->
                <div class="bg-white rounded-[20px] border border-slate-200/60 p-6 flex gap-5 items-center shadow-sm hover:border-slate-300 transition-colors duration-300">
                    <!-- Icon Wrapper (Dynamic primary background mix) -->
                    <div class="flex items-center justify-center w-11 h-11 rounded-xl text-primary flex-shrink-0"
                         style="background-color: color-mix(in srgb, var(--primary-color) 8%, transparent);">
                        <!-- Lock SVG -->
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                        </svg>
                    </div>
                    <div class="flex-1 flex flex-col items-start text-left">
                        <h3 class="font-bold text-[#0F172A] text-[15px] mb-1.5 tracking-tight font-sans">Encryption at Rest & in Transit</h3>
                        <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans">
                            AES-256 for stored data. TLS 1.3 for data in transit. No unencrypted data anywhere in the Edge ecosystem.
                        </p>
                    </div>
                </div>

                <!-- Card 2: Data Loss Prevention (DLP) -->
                <div class="bg-white rounded-[20px] border border-slate-200/60 p-6 flex gap-5 items-center shadow-sm hover:border-slate-300 transition-colors duration-300">
                    <div class="flex items-center justify-center w-11 h-11 rounded-xl text-primary flex-shrink-0"
                         style="background-color: color-mix(in srgb, var(--primary-color) 8%, transparent);">
                        <!-- Shield SVG -->
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <div class="flex-1 flex flex-col items-start text-left">
                        <h3 class="font-bold text-[#0F172A] text-[15px] mb-1.5 tracking-tight font-sans">Data Loss Prevention (DLP)</h3>
                        <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans">
                            Policies that prevent unauthorized data transfers, USB exports, screen captures, and email forwarding of sensitive information.
                        </p>
                    </div>
                </div>

                <!-- Card 3: Secure Tenant Segregation -->
                <div class="bg-white rounded-[20px] border border-slate-200/60 p-6 flex gap-5 items-center shadow-sm hover:border-slate-300 transition-colors duration-300">
                    <div class="flex items-center justify-center w-11 h-11 rounded-xl text-primary flex-shrink-0"
                         style="background-color: color-mix(in srgb, var(--primary-color) 8%, transparent);">
                        <!-- Workspace / Server SVG -->
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                        </svg>
                    </div>
                    <div class="flex-1 flex flex-col items-start text-left">
                        <h3 class="font-bold text-[#0F172A] text-[15px] mb-1.5 tracking-tight font-sans">Secure Tenant Segregation</h3>
                        <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans">
                            Your data is isolated from other clients. Multi-environment architecture with production environment completely separated.
                        </p>
                    </div>
                </div>

                <!-- Card 4: Managed Backups & Disaster Recovery -->
                <div class="bg-white rounded-[20px] border border-slate-200/60 p-6 flex gap-5 items-center shadow-sm hover:border-slate-300 transition-colors duration-300">
                    <div class="flex items-center justify-center w-11 h-11 rounded-xl text-primary flex-shrink-0"
                         style="background-color: color-mix(in srgb, var(--primary-color) 8%, transparent);">
                        <!-- Database / Backup SVG -->
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"/>
                        </svg>
                    </div>
                    <div class="flex-1 flex flex-col items-start text-left">
                        <h3 class="font-bold text-[#0F172A] text-[15px] mb-1.5 tracking-tight font-sans">Managed Backups & Disaster Recovery</h3>
                        <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans">
                            Recurring backups with verification. Business continuity and disaster recovery plans tested regularly. AWS cloud infrastructure.
                        </p>
                    </div>
                </div>

            </div>
        </div>
        
        <!-- RIGHT COLUMN: Perimeter & Campus Circle Node (Spans 5 of 12 columns, flows below on mobile) -->
        <div class="lg:col-span-5 w-full h-full min-h-[300px] flex items-center justify-center relative select-none">
            
            <!-- Outer Dashed Security Circle -->
            <div class="absolute w-[280px] h-[280px] sm:w-[320px] sm:h-[320px] rounded-full border border-dashed border-emerald-500/20 flex items-center justify-center"></div>
            
            <!-- Inner Dashed Security Circle -->
            <div class="absolute w-[220px] h-[220px] sm:w-[250px] sm:h-[250px] rounded-full border border-dashed border-emerald-500/10 flex items-center justify-center"></div>
            
            <!-- Central Solid Circle node (Perfect circle matching dynamic green/teal style) -->
            <div class="w-28 h-28 sm:w-32 sm:h-32 rounded-full flex items-center justify-center relative z-10 shadow-sm transition-all duration-300 hover:scale-105 bg-[#e6f9ee] border-[1.5px] border-[#c2eed4]">
                <!-- Lock Icon inside Center Node -->
                <svg class="w-8 h-8 text-[#0F172A]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                </svg>
            </div>
            
        </div>

    </div>
</section>

<section class="relative w-full bg-white py-20 lg:py-28 px-4 sm:px-6 lg:px-8 overflow-hidden">
    
    <!-- Light-Themed Dotted Grid Overlay -->
    <div class="absolute inset-0 bg-[radial-gradient(rgba(0,0,0,0.02)_1.2px,transparent_1.2px)] [background-size:24px_24px] pointer-events-none z-0"></div>
    
    <!-- Large Decorative "06" Background Text (Top-right corner, pixel-perfect detail) -->
    <div class="absolute top-8 right-8 text-slate-900/[0.04] text-7xl sm:text-8xl md:text-[120px] font-black select-none pointer-events-none z-0">
        06
    </div>

    <!-- Asymmetric Grid: Illustration on left (5 cols), Content on right (7 cols) -->
    <div class="max-w-6xl w-full mx-auto grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center relative z-10">
        
        <!-- LEFT COLUMN: Perimeter & Campus Circle Node (Spans 5 of 12 columns, flows below on mobile) -->
        <div class="lg:col-span-5 w-full h-full min-h-[300px] flex items-center justify-center relative select-none order-last lg:order-none">
            
            <!-- Outer Dashed Security Circle -->
            <div class="absolute w-[280px] h-[280px] sm:w-[320px] sm:h-[320px] rounded-full border border-dashed border-rose-200/50 flex items-center justify-center"></div>
            
            <!-- Inner Dashed Security Circle -->
            <div class="absolute w-[220px] h-[220px] sm:w-[250px] sm:h-[250px] rounded-full border border-dashed border-rose-200/30 flex items-center justify-center"></div>
            
            <!-- Central Solid Circle node (Perfect circle matching dynamic rose style) -->
            <div class="w-28 h-28 sm:w-32 sm:h-32 rounded-full flex items-center justify-center relative z-10 shadow-sm transition-all duration-300 hover:scale-105 bg-[#ffe4e6] border-[1.5px] border-[#fecdd3]">
                <!-- Warning / Alert Icon inside Center Node -->
                <svg class="w-8 h-8 text-[#0F172A]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                </svg>
            </div>
            
        </div>

        <!-- RIGHT COLUMN: Main Headers, Subtitle & Card Stack (Spans 7 of 12 columns) -->
        <div class="lg:col-span-7 flex flex-col">
            
            <!-- Top Pill Badge (Rose/Red accent) -->
            <div class="inline-flex items-center justify-center px-4 py-1.5 rounded-full text-[10px] md:text-[11px] font-bold border tracking-wider uppercase mb-6 w-fit font-sans text-rose-600 bg-rose-50 border-rose-100">
                Layer 6 — Monitoring & Response
            </div>

            <!-- Headline -->
            <h2 class="text-3xl sm:text-4xl md:text-[42px] font-extrabold text-[#0F172A] leading-[1.15] tracking-tight mb-6 font-sans text-left">
                24/7 Security Operations Center.<br>
                <span class="text-primary">We never sleep.</span>
            </h2>

            <!-- Subtitle Description -->
            <p class="text-[14px] md:text-[15px] leading-relaxed text-slate-500 mb-10 max-w-2xl text-left font-sans">
                Edge runs a Security Operations Center with SIEM, real-time alerting, and incident response — so threats are detected and neutralized before they reach your data.
            </p>

            <!-- Vertical Card Stack -->
            <div class="space-y-4 w-full">
                
                <!-- Card 1: SIEM — Security Event Monitoring -->
                <div class="bg-white rounded-[20px] border border-slate-200/60 p-6 flex gap-5 items-center shadow-sm hover:border-slate-300 transition-colors duration-300">
                    <!-- Icon Wrapper (Rose background mix) -->
                    <div class="flex items-center justify-center w-11 h-11 rounded-xl text-rose-600 flex-shrink-0 bg-rose-50">
                        <!-- Laptop SVG -->
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 17L9 20h6l-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <div class="flex-1 flex flex-col items-start text-left">
                        <h3 class="font-bold text-[#0F172A] text-[15px] mb-1.5 tracking-tight font-sans">SIEM — Security Event Monitoring</h3>
                        <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans">
                            Security Information and Events Management system aggregates logs from every device, network, and application. Anomalies trigger instant alerts.
                        </p>
                    </div>
                </div>

                <!-- Card 2: Incident Response Plan -->
                <div class="bg-white rounded-[20px] border border-slate-200/60 p-6 flex gap-5 items-center shadow-sm hover:border-slate-300 transition-colors duration-300">
                    <div class="flex items-center justify-center w-11 h-11 rounded-xl text-rose-600 flex-shrink-0 bg-rose-50">
                        <!-- Warning SVG -->
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                        </svg>
                    </div>
                    <div class="flex-1 flex flex-col items-start text-left">
                        <h3 class="font-bold text-[#0F172A] text-[15px] mb-1.5 tracking-tight font-sans">Incident Response Plan</h3>
                        <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans">
                            Documented IR plan with defined escalation paths, containment procedures, and communication protocols. Tested quarterly.
                        </p>
                    </div>
                </div>

                <!-- Card 3: Enhanced Logging & Metrics -->
                <div class="bg-white rounded-[20px] border border-slate-200/60 p-6 flex gap-5 items-center shadow-sm hover:border-slate-300 transition-colors duration-300">
                    <div class="flex items-center justify-center w-11 h-11 rounded-xl text-rose-600 flex-shrink-0 bg-rose-50">
                        <!-- Bar Chart SVG -->
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                    </div>
                    <div class="flex-1 flex flex-col items-start text-left">
                        <h3 class="font-bold text-[#0F172A] text-[15px] mb-1.5 tracking-tight font-sans">Enhanced Logging & Metrics</h3>
                        <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans">
                            Every access, file transfer, login, and system event logged and retained. Full audit trail available for your compliance needs.
                        </p>
                    </div>
                </div>

                <!-- Card 4: VAPT & Pen Testing -->
                <div class="bg-white rounded-[20px] border border-slate-200/60 p-6 flex gap-5 items-center shadow-sm hover:border-slate-300 transition-colors duration-300">
                    <div class="flex items-center justify-center w-11 h-11 rounded-xl text-rose-600 flex-shrink-0 bg-rose-50">
                        <!-- Search SVG -->
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </div>
                    <div class="flex-1 flex flex-col items-start text-left">
                        <h3 class="font-bold text-[#0F172A] text-[15px] mb-2 tracking-tight font-sans">VAPT & Pen Testing</h3>
                        <p class="text-[12.5px] leading-relaxed text-slate-500 mb-3 font-sans">
                            Vulnerability Assessment and Penetration Testing programs. Web Application Firewall (WAF). Responsible disclosure with partners.
                        </p>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

<section class="w-full bg-white py-16 lg:py-24 px-6 lg:px-8 flex justify-center items-center">
    <!-- Asymmetric 12-column grid: 1 column on mobile, 5/7 split on desktop -->
    <div class="max-w-6xl w-full grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start relative z-10">
        
        <!-- LEFT COLUMN: Main Headers & Subtitle (Spans 5 of 12 columns) -->
        <div class="lg:col-span-5 flex flex-col text-left">
            
            <!-- Top Pill Badge (Dynamic background/border/text) -->
            <div class="inline-flex items-center justify-center px-4 py-1.5 rounded-full text-[10px] md:text-[11px] font-bold border tracking-wider uppercase mb-6 w-fit font-sans text-primary"
                 style="background-color: color-mix(in srgb, var(--primary-color) 6%, transparent); border-color: color-mix(in srgb, var(--primary-color) 20%, transparent);">
                Built for first-time remote staffing buyers
            </div>

            <!-- Headline -->
            <h2 class="text-3xl sm:text-4xl md:text-[42px] font-extrabold text-[#0F172A] leading-[1.15] tracking-tight mb-6 font-sans">
                We know this is new for you.<br>
                <span class="text-primary">That's exactly why we built this.</span>
            </h2>

            <!-- Subtitle Description -->
            <p class="text-[14px] md:text-[15px] leading-relaxed text-slate-500 max-w-2xl font-sans">
                Most of our 500+ customers were first-time remote staffing buyers. Here's what they told us mattered most — and how we addressed every concern before they even had to ask.
            </p>
        </div>
        
        <!-- RIGHT COLUMN: Stack of 6 FAQ-Style Cards (Spans 7 of 12 columns) -->
        <div class="lg:col-span-7 w-full flex flex-col space-y-4">
            
            <!-- Card 1: Security -->
            <div class="bg-white rounded-[20px] border border-slate-200/60 p-6 flex gap-4 md:gap-5 items-start shadow-[0_4px_24px_rgba(0,0,0,0.015)] hover:border-slate-300 transition-colors duration-300">
                <!-- Checkmark Icon Wrapper -->
                <div class="flex items-center justify-center w-9 h-9 sm:w-10 sm:h-10 rounded-xl flex-shrink-0 bg-[#e6f9ee] border border-[#c2eed4]">
                    <svg class="w-4 h-4 text-[#059669] flex-shrink-0" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                    </svg>
                </div>
                <div class="flex-1 flex flex-col items-start text-left">
                    <h3 class="font-bold text-[#0F172A] text-[15px] mb-1.5 tracking-tight font-sans">"How do I know they won't steal data?"</h3>
                    <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans">
                        NDA + IP assignment signed before day one. Company-managed devices with DLP. No USB ports, no personal email, no file exports. Full audit trail.
                    </p>
                </div>
            </div>

            <!-- Card 2: Disappear -->
            <div class="bg-white rounded-[20px] border border-slate-200/60 p-6 flex gap-4 md:gap-5 items-start shadow-[0_4px_24px_rgba(0,0,0,0.015)] hover:border-slate-300 transition-colors duration-300">
                <div class="flex items-center justify-center w-9 h-9 sm:w-10 sm:h-10 rounded-xl flex-shrink-0 bg-[#e6f9ee] border border-[#c2eed4]">
                    <svg class="w-4 h-4 text-[#059669] flex-shrink-0" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                    </svg>
                </div>
                <div class="flex-1 flex flex-col items-start text-left">
                    <h3 class="font-bold text-[#0F172A] text-[15px] mb-1.5 tracking-tight font-sans">"What if they just disappear?"</h3>
                    <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans">
                        They work from a physical campus. We know exactly where they are. 97% retention rate. And if someone does leave, we provide a replacement — fast.
                    </p>
                </div>
            </div>

            <!-- Card 3: HIPAA -->
            <div class="bg-white rounded-[20px] border border-slate-200/60 p-6 flex gap-4 md:gap-5 items-start shadow-[0_4px_24px_rgba(0,0,0,0.015)] hover:border-slate-300 transition-colors duration-300">
                <div class="flex items-center justify-center w-9 h-9 sm:w-10 sm:h-10 rounded-xl flex-shrink-0 bg-[#e6f9ee] border border-[#c2eed4]">
                    <svg class="w-4 h-4 text-[#059669] flex-shrink-0" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                    </svg>
                </div>
                <div class="flex-1 flex flex-col items-start text-left">
                    <h3 class="font-bold text-[#0F172A] text-[15px] mb-1.5 tracking-tight font-sans">"Is this even HIPAA compliant?"</h3>
                    <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans">
                        Yes. We sign a BAA before any talent touches your systems. SOC 2 Type II audited. ePHI handling policies enforced across every campus.
                    </p>
                </div>
            </div>

            <!-- Card 4: Working for others -->
            <div class="bg-white rounded-[20px] border border-slate-200/60 p-6 flex gap-4 md:gap-5 items-start shadow-[0_4px_24px_rgba(0,0,0,0.015)] hover:border-slate-300 transition-colors duration-300">
                <div class="flex items-center justify-center w-9 h-9 sm:w-10 sm:h-10 rounded-xl flex-shrink-0 bg-[#e6f9ee] border border-[#c2eed4]">
                    <svg class="w-4 h-4 text-[#059669] flex-shrink-0" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                    </svg>
                </div>
                <div class="flex-1 flex flex-col items-start text-left">
                    <h3 class="font-bold text-[#0F172A] text-[15px] mb-1.5 tracking-tight font-sans">"What if they're working for someone else too?"</h3>
                    <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans">
                        Full-time, dedicated to your business only. Non-compete and exclusivity clauses in every employment contract. Campus check-in verifies physical presence.
                    </p>
                </div>
            </div>

            <!-- Card 5: Identity -->
            <div class="bg-white rounded-[20px] border border-slate-200/60 p-6 flex gap-4 md:gap-5 items-start shadow-[0_4px_24px_rgba(0,0,0,0.015)] hover:border-slate-300 transition-colors duration-300">
                <div class="flex items-center justify-center w-9 h-9 sm:w-10 sm:h-10 rounded-xl flex-shrink-0 bg-[#e6f9ee] border border-[#c2eed4]">
                    <svg class="w-4 h-4 text-[#059669] flex-shrink-0" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                    </svg>
                </div>
                <div class="flex-1 flex flex-col items-start text-left">
                    <h3 class="font-bold text-[#0F172A] text-[15px] mb-1.5 tracking-tight font-sans">"How do I know who they really are?"</h3>
                    <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans">
                        Government-issued identity verification, criminal background check, and biometric campus entry. We verify before you ever meet them.
                    </p>
                </div>
            </div>

            <!-- Card 6: Something wrong -->
            <div class="bg-white rounded-[20px] border border-slate-200/60 p-6 flex gap-4 md:gap-5 items-start shadow-[0_4px_24px_rgba(0,0,0,0.015)] hover:border-slate-300 transition-colors duration-300">
                <div class="flex items-center justify-center w-9 h-9 sm:w-10 sm:h-10 rounded-xl flex-shrink-0 bg-[#e6f9ee] border border-[#c2eed4]">
                    <svg class="w-4 h-4 text-[#059669] flex-shrink-0" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                    </svg>
                </div>
                <div class="flex-1 flex flex-col items-start text-left">
                    <h3 class="font-bold text-[#0F172A] text-[15px] mb-1.5 tracking-tight font-sans">"What happens if something goes wrong?"</h3>
                    <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans">
                        24/7 SOC monitoring, documented incident response plan, your dedicated Success Manager on speed dial. We handle it — you stay focused on your business.
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>

<section class="w-full bg-white py-16 lg:py-24 px-6 lg:px-8 flex justify-center items-center">
    <div class="max-w-6xl w-full flex flex-col items-center">
        
        <!-- Top Pill Badge (Dynamic background/border/text) -->
        <div class="inline-flex items-center justify-center px-4 py-1.5 rounded-full text-[10px] md:text-[11px] font-bold border tracking-wider uppercase mb-6 font-sans text-primary"
             style="background-color: color-mix(in srgb, var(--primary-color) 6%, transparent); border-color: color-mix(in srgb, var(--primary-color) 20%, transparent);">
            Published Policies
        </div>

        <!-- Main Headline -->
        <h2 class="text-3xl sm:text-4xl md:text-[40px] font-extrabold text-center text-[#0F172A] leading-[1.2] tracking-tight mb-5 font-sans">
            Transparency you can <span class="text-primary">read for yourself</span>
        </h2>

        <!-- Subtitle Description -->
        <p class="text-slate-500 text-center text-sm md:text-base max-w-2xl mx-auto leading-relaxed mb-16 font-sans">
            Every policy that governs how Edge protects your data is published and available for your compliance team to review.
        </p>

        <!-- 6-Card Grid Layout (3 columns on desktop, 2 on tablet, 1 on mobile) -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 w-full mb-12">
            
            <!-- Card 1: Acceptable Use Policy -->
            <div class="bg-white rounded-[20px] border border-slate-200/60 p-6 md:p-8 flex flex-col items-start text-left shadow-[0_4px_20px_rgba(0,0,0,0.01)] hover:shadow-lg hover:border-primary/25 transition-all duration-300">
                <div class="text-primary mb-5">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                    </svg>
                </div>
                <h3 class="font-bold text-[#0F172A] text-[16px] mb-3 tracking-tight font-sans">Acceptable Use Policy</h3>
                <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans mb-5">
                    Defines responsible use of Edge systems and services, minimizing compliance risks.
                </p>
                <a href="#" class="text-xs md:text-xs font-extrabold text-primary inline-flex items-center gap-1.5 hover:opacity-85 mt-auto font-sans uppercase tracking-wider">
                    Read policy <span class="font-bold text-[11px]">&gt;</span>
                </a>
            </div>

            <!-- Card 2: Access Control Policy -->
            <div class="bg-white rounded-[20px] border border-slate-200/60 p-6 md:p-8 flex flex-col items-start text-left shadow-[0_4px_20px_rgba(0,0,0,0.01)] hover:shadow-lg hover:border-primary/25 transition-all duration-300">
                <div class="text-primary mb-5">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 7a2 2 0 012 2m-1.5 6l-5.1 5.1a1.5 1.5 0 01-1.06.44H7A1.5 1.5 0 015.5 19v-1.84a1.5 1.5 0 01.44-1.06L11 11m-1-1a5 5 0 117.07 7.07l-1.41-1.41"/>
                    </svg>
                </div>
                <h3 class="font-bold text-[#0F172A] text-[16px] mb-3 tracking-tight font-sans">Access Control Policy</h3>
                <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans mb-5">
                    Restricts access to authorized users. Role-based controls ensure least-privilege access.
                </p>
                <a href="#" class="text-xs md:text-xs font-extrabold text-primary inline-flex items-center gap-1.5 hover:opacity-85 mt-auto font-sans uppercase tracking-wider">
                    Read policy <span class="font-bold text-[11px]">&gt;</span>
                </a>
            </div>

            <!-- Card 3: Asset Management Policy -->
            <div class="bg-white rounded-[20px] border border-slate-200/60 p-6 md:p-8 flex flex-col items-start text-left shadow-[0_4px_20px_rgba(0,0,0,0.01)] hover:shadow-lg hover:border-primary/25 transition-all duration-300">
                <div class="text-primary mb-5">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 17L9 20h6l-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                </div>
                <h3 class="font-bold text-[#0F172A] text-[16px] mb-3 tracking-tight font-sans">Asset Management Policy</h3>
                <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans mb-5">
                    Governs hardware lifecycle from procurement to secure disposal.
                </p>
                <a href="#" class="text-xs md:text-xs font-extrabold text-primary inline-flex items-center gap-1.5 hover:opacity-85 mt-auto font-sans uppercase tracking-wider">
                    Read policy <span class="font-bold text-[11px]">&gt;</span>
                </a>
            </div>

            <!-- Card 4: Backup Policy -->
            <div class="bg-white rounded-[20px] border border-slate-200/60 p-6 md:p-8 flex flex-col items-start text-left shadow-[0_4px_20px_rgba(0,0,0,0.01)] hover:shadow-lg hover:border-primary/25 transition-all duration-300">
                <div class="text-primary mb-5">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"/>
                    </svg>
                </div>
                <h3 class="font-bold text-[#0F172A] text-[16px] mb-3 tracking-tight font-sans">Backup Policy</h3>
                <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans mb-5">
                    Ensures business continuity through secure and verified data backups.
                </p>
                <a href="#" class="text-xs md:text-xs font-extrabold text-primary inline-flex items-center gap-1.5 hover:opacity-85 mt-auto font-sans uppercase tracking-wider">
                    Read policy <span class="font-bold text-[11px]">&gt;</span>
                </a>
            </div>

            <!-- Card 5: Technological Controls Policy -->
            <div class="bg-white rounded-[20px] border border-slate-200/60 p-6 md:p-8 flex flex-col items-start text-left shadow-[0_4px_20px_rgba(0,0,0,0.01)] hover:shadow-lg hover:border-primary/25 transition-all duration-300">
                <div class="text-primary mb-5">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                    </svg>
                </div>
                <h3 class="font-bold text-[#0F172A] text-[16px] mb-3 tracking-tight font-sans">Technological Controls Policy</h3>
                <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans mb-5">
                    Safeguards user devices and data per ISO 27001:2022 standards.
                </p>
                <a href="#" class="text-xs md:text-xs font-extrabold text-primary inline-flex items-center gap-1.5 hover:opacity-85 mt-auto font-sans uppercase tracking-wider">
                    Read policy <span class="font-bold text-[11px]">&gt;</span>
                </a>
            </div>

            <!-- Card 6: Usage Terms -->
            <div class="bg-white rounded-[20px] border border-slate-200/60 p-6 md:p-8 flex flex-col items-start text-left shadow-[0_4px_20px_rgba(0,0,0,0.01)] hover:shadow-lg hover:border-primary/25 transition-all duration-300">
                <div class="text-primary mb-5">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                </div>
                <h3 class="font-bold text-[#0F172A] text-[16px] mb-3 tracking-tight font-sans">Usage Terms</h3>
                <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans mb-5">
                    Guidelines for using Edge services, ensuring compliance and mutual protection.
                </p>
                <a href="#" class="text-xs md:text-xs font-extrabold text-primary inline-flex items-center gap-1.5 hover:opacity-85 mt-auto font-sans uppercase tracking-wider">
                    Read policy <span class="font-bold text-[11px]">&gt;</span>
                </a>
            </div>

        </div>

        <!-- Bottom CTA Box (Centered horizontally, with dynamic background & border) -->
        <div class="w-full bg-white py-12 px-4 sm:px-6 lg:px-8 mt-10 flex justify-center items-center">
    
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