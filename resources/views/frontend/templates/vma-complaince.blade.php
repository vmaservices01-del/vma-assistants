@extends('frontend.layouts.app')

@section('content')   
<style>
    :root {
        --color-primary: #7C3AED; /* Custom Violet Primary */
    }
    .bg-primary {
        background-color: var(--color-primary);
    }
    .font-gnarly {
        font-family: 'Plus Jakarta Sans', sans-serif; /* Standard fallback if local gnarly font is absent */
    }
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
    }
    .animate-float {
        animation: float 4s ease-in-out infinite;
    }
</style>

<section class="relative w-full min-h-screen flex items-center bg-secondary overflow-hidden py-16 lg:py-24">
    
    <!-- Dynamic Background Gradient Glow (Färg-anpassat efter primärfärg) -->
    <div class="absolute inset-0 -z-10 pointer-events-none"
         style="background-image: radial-gradient(circle at 50% 30%, color-mix(in srgb, var(--primary-color) 12%, transparent) 0%, transparent 60%);"></div>
    
    <!-- Background Grid Pattern -->
    <div class="absolute inset-0 bg-[radial-gradient(rgba(255,255,255,0.03)_1.2px,transparent_1.2px)] [background-size:28px_28px] -z-10 pointer-events-none"></div>

    <!-- Content Container -->
    <div class="max-w-5xl mx-auto px-6 lg:px-8 w-full flex flex-col items-center text-center relative z-10">
        
        <!-- Blue Badge (Dynamiskt färgmixad) -->
        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-xs font-semibold tracking-wider uppercase mb-8 w-fit"
             style="background-color: color-mix(in srgb, var(--primary-color) 10%, transparent); border: 1px solid color-mix(in srgb, var(--primary-color) 20%, transparent); color: var(--primary-color);">
            <span class="w-1.5 h-1.5 rounded-full bg-primary" style="box-shadow: 0 0 8px var(--primary-color);"></span>
            Compliance & Legal
        </div>

        <!-- Heading (Dynamisk färgtoning från ljus primärfärg till solida primärfärg) -->
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-extrabold leading-[1.15] tracking-tight text-white mb-6 font-sans capitalize">
            You've heard the concerns <br class="hidden sm:inline"> about offshore hiring.
            <span class="block mt-2 font-sans"
                  style="background-image: linear-gradient(to right, color-mix(in srgb, var(--primary-color) 80%, white), var(--primary-color)); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
               So did we — that's why we built VMA.
            </span>
        </h1>

        <!-- Description -->
        <p class="text-slate-400 text-base md:text-lg leading-relaxed mb-10 max-w-3xl font-sans">
           Compliance isn't something you add later. It's the foundation of every successful global workforce. International hiring can quickly become complicated due to employment law, intellectual property ownership, data security, tax obligations, and liability exposure. VMA was built to eliminate those concerns. Every professional hired through VMA operates under compliant employment structures, supported by enforceable NDAs, IP assignment agreements, robust security controls, and a fully managed employer-of-record framework. You gain access to exceptional global talent while VMA handles the legal and compliance complexities behind the scenes.
        </p>

        <!-- Action Buttons -->
        <div class="flex flex-col sm:flex-row gap-4 mb-14 w-full justify-center">
            <!-- Primär knapp med dynamisk bakgrundsfärg och matchande skugga -->
            <button class="bg-primary hover:opacity-95 text-white font-bold py-3.5 px-8 rounded-lg transition-all duration-300 transform hover:-translate-y-0.5 flex items-center justify-center gap-2 group font-sans"
                    style="box-shadow: 0 4px 20px color-mix(in srgb, var(--primary-color) 25%, transparent);">
                Book A Demo <span class="transition-transform duration-300 group-hover:translate-x-1">→</span>
            </button>
            <!-- Sekundär knapp med svag färgtonad skugga vid hovring -->
            <button class="bg-white hover:bg-slate-100 text-[#0f172a] font-bold py-3.5 px-8 rounded-lg transition-all duration-300 transform hover:-translate-y-0.5 border border-transparent font-sans"
                    onmouseenter="this.style.boxShadow='0 6px 20px ' + color-mix(in srgb, var(--primary-color) 12%, transparent)"
                    onmouseleave="this.style.boxShadow='none'">
                Discover the VMA Difference
            </button>
        </div>

        <!-- Features Bar / Trust Footer -->
        <div class="flex flex-col md:flex-row items-center justify-center gap-4 md:gap-0 px-6 py-4 md:py-3.5 bg-white/5 border border-white/10 rounded-2xl md:rounded-full backdrop-blur-md w-full md:w-auto">
            <div class="flex items-center gap-2 text-xs md:text-sm text-slate-400 font-medium md:px-6">
                <span class="text-primary font-bold">✓</span> SOC 2 & ISO 27001
            </div>
            <div class="flex items-center gap-2 text-xs md:text-sm text-slate-400 font-medium md:px-6 md:border-l md:border-white/10">
                <span class="text-primary font-bold">✓</span>   Enterprise Data Protection
            </div>
            <div class="flex items-center gap-2 text-xs md:text-sm text-slate-400 font-medium md:px-6 md:border-l md:border-white/10">
                <span class="text-primary font-bold">✓</span>  Reduced Employer Risk
            </div>
            <div class="flex items-center gap-2 text-xs md:text-sm text-slate-400 font-medium md:px-6 md:border-l md:border-white/10">
                <span class="text-primary font-bold">✓</span> NDA & IP Protection
            </div>
        </div>

    </div>
</section>


<div class="w-full">
    
    <!-- Top Half: Dark Section Background (Dynamiskt kopplad till din sekundära bakgrundsfärg) -->
    <div class="bg-secondary pt-16 pb-24 px-4 relative overflow-hidden">
        <!-- Subtle Dotted Grid Background -->
        <div class="absolute inset-0 bg-[radial-gradient(rgba(255,255,255,0.03)_1.2px,transparent_1.2px)] [background-size:28px_28px] -z-10"></div>
    </div>

    <!-- Bottom Half: Light Section Background with Overlapping Card -->
    <div class="bg-white px-4 pb-16">
        <div class="max-w-6xl mx-auto -mt-24 relative z-20">
            
            <!-- Overlapping Container Card (Topp-kantlinje dynamiskt kopplad till primärfärg) -->
            <div class="bg-white rounded-[24px] shadow-[0_20px_50px_rgba(0,0,0,0.06)] border border-slate-100 overflow-hidden border-t-4"
                 style="border-top-color: var(--primary-color);">
                
                <!-- Card Grid: Handles grid-borders across mobile, tablet, and desktop views dynamically -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
                    
                    <!-- Segment 1 -->
                    <div class="flex flex-col h-full border-b md:border-b md:border-r lg:border-b-0 lg:border-r border-slate-100">
                        <!-- Top portion (Dynamiskt tonad bakgrund baserad på din primärfärg) -->
                        <div class="px-6 py-8 flex-1 flex items-center justify-center border-b border-slate-100"
                             style="background-color: color-mix(in srgb, var(--primary-color) 4%, #f8fafc);">
                            <span class="text-3xl md:text-4xl font-extrabold text-primary tracking-tight font-sans">0</span>
                        </div>
                        <!-- Bottom portion (white background) -->
                        <div class="bg-white px-6 py-5 flex items-center justify-center text-center">
                            <p class="text-[13px] leading-normal text-slate-500 font-medium">Compliance violations to date</p>
                        </div>
                    </div>

                    <!-- Segment 2 -->
                    <div class="flex flex-col h-full border-b md:border-b md:border-r-0 lg:border-b-0 lg:border-r border-slate-100">
                        <!-- Top portion (Dynamiskt tonad bakgrund) -->
                        <div class="px-6 py-8 flex-1 flex items-center justify-center border-b border-slate-100"
                             style="background-color: color-mix(in srgb, var(--primary-color) 4%, #f8fafc);">
                            <span class="text-3xl md:text-4xl font-extrabold text-primary tracking-tight font-sans">0</span>
                        </div>
                        <!-- Bottom portion -->
                        <div class="bg-white px-6 py-5 flex items-center justify-center text-center">
                            <p class="text-[13px] leading-normal text-slate-500 font-medium">Employment administration burden</p>
                        </div>
                    </div>

                    <!-- Segment 3 -->
                    <div class="flex flex-col h-full border-b md:border-b-0 md:border-r lg:border-b-0 lg:border-r border-slate-100">
                        <!-- Top portion (Dynamiskt tonad bakgrund) -->
                        <div class="px-6 py-8 flex-1 flex items-center justify-center border-b border-slate-100"
                             style="background-color: color-mix(in srgb, var(--primary-color) 4%, #f8fafc);">
                            <span class="text-3xl md:text-4xl font-extrabold text-primary tracking-tight font-sans">100%</span>
                        </div>
                        <!-- Bottom portion -->
                        <div class="bg-white px-6 py-5 flex items-center justify-center text-center">
                            <p class="text-[13px] leading-normal text-slate-500 font-medium">Talent covered by NDA & IP</p>
                        </div>
                    </div>

                    <!-- Segment 4 -->
                    <div class="flex flex-col h-full border-b-0 md:border-b-0 md:border-r-0 lg:border-r-0 border-slate-100">
                        <!-- Top portion (Dynamiskt tonad bakgrund) -->
                        <div class="px-6 py-8 flex-1 flex items-center justify-center border-b border-slate-100"
                             style="background-color: color-mix(in srgb, var(--primary-color) 4%, #f8fafc);">
                            <span class="text-3xl md:text-4xl font-extrabold text-[#059669] tracking-tight font-sans">Enterprise Infrastructure</span>
                        </div>
                        <!-- Bottom portion -->
                        <div class="bg-white px-6 py-5 flex items-center justify-center text-center">
                            <p class="text-[13px] leading-normal text-slate-500 font-medium"> Compliance-first operations</p>
                        </div>
                    </div>

                </div>
            </div>
            
        </div>
    </div>
</div>


<section class="relative w-full bg-white py-16 lg:py-24 px-6 lg:px-8">
    <div class="max-w-6xl mx-auto w-full flex flex-col items-center">
        
        <!-- Pill Badge (Dynamiskt kopplad till din primärfärg) -->
        <div class="inline-flex items-center justify-center px-4 py-1.5 rounded-full text-xs font-bold border tracking-wider uppercase mb-8 w-fit text-primary"
             style="background-color: color-mix(in srgb, var(--primary-color) 6%, transparent); border-color: color-mix(in srgb, var(--primary-color) 20%, transparent);">
            THE PERCEPTION
        </div>

        <!-- Heading -->
        <h2 class="text-3xl md:text-4xl lg:text-[42px] font-extrabold text-center text-[#0F172A] leading-tight tracking-tight max-w-3xl">
            When businesses think of offshore hiring,  <br class="hidden sm:inline">
            <span class="text-primary">these are usually the concerns.</span>
        </h2>

        <!-- Subtitle (Uppdaterad text enligt önskemål) -->
        <p class="text-slate-500 text-center text-sm md:text-base max-w-2xl mx-auto leading-relaxed mt-4">
            And in many cases, those concerns are justified. Freelancer marketplaces, traditional outsourcing firms, and contractor arrangements have created these perceptions. Here's why.
        </p>

        <!-- 3x2 Grid (Responsiv layout) -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-16 w-full">
            
            <!-- Card 1 (My data could be compromised) -->
            <div class="bg-white rounded-[24px] shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-[0_12px_30px_rgba(0,0,0,0.06)] border border-slate-100/80 transition-all duration-300 transform hover:-translate-y-1 p-8 flex flex-col items-start text-left border-t-[3px] border-t-primary">
                <div class="mb-5 text-primary">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                    </svg>
                </div>
                <h3 class="text-[17px] font-extrabold text-[#0F172A] tracking-tight mb-3">"My data could be compromised"</h3>
                <p class="text-[13px] md:text-[14px] leading-relaxed text-slate-500 mb-6">
                    Freelancers frequently work from personal devices, unsecured networks, and uncontrolled environments. Without formal security infrastructure, monitoring controls, or data protection standards, sensitive information remains exposed long after the engagement ends.
                </p>
                <div class="mt-auto text-[10px] font-bold tracking-wider text-primary uppercase">
                    Upwork • Fiverr • Freelancer
                </div>
            </div>

            <!-- Card 2 (My intellectual property isn't protected) -->
            <div class="bg-white rounded-[24px] shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-[0_12px_30px_rgba(0,0,0,0.06)] border border-slate-100/80 transition-all duration-300 transform hover:-translate-y-1 p-8 flex flex-col items-start text-left border-t-[3px] border-t-primary">
                <div class="mb-5 text-primary">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h10a2 2 0 002-2V7a2 2 0 00-2-2H3M3 14h18a2 2 0 002-2V11a2 2 0 00-2-2H3M3 18h14a2 2 0 002-2v-1a2 2 0 00-2-2H3" />
                    </svg>
                </div>
                <h3 class="text-[17px] font-extrabold text-[#0F172A] tracking-tight mb-3">"My intellectual property isn't protected"</h3>
                <p class="text-[13px] md:text-[14px] leading-relaxed text-slate-500 mb-6">
                    Many contractor agreements rely on weak or inconsistent IP language. Intellectual property ownership laws vary significantly across jurisdictions, making enforcement difficult when disputes arise.
                </p>
                <div class="mt-auto text-[10px] font-bold tracking-wider text-primary uppercase">
                    Freelancer Platforms
                </div>
            </div>

            <!-- Card 3 (There's limited legal protection) -->
            <div class="bg-white rounded-[24px] shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-[0_12px_30px_rgba(0,0,0,0.06)] border border-slate-100/80 transition-all duration-300 transform hover:-translate-y-1 p-8 flex flex-col items-start text-left border-t-[3px] border-t-primary">
                <div class="mb-5 text-primary">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v17m0 0H9m3 0h3M4 11h6M4 11c0 2.5 1.5 4 3 4s3-1.5 3-4M4 11l3-6 3 6M14 11h6M14 11c0 2.5 1.5 4 3 4s3-1.5 3-4M14 11l3-6 3 6" />
                    </svg>
                </div>
                <h3 class="text-[17px] font-extrabold text-[#0F172A] tracking-tight mb-3">"There's limited legal protection"</h3>
                <p class="text-[13px] md:text-[14px] leading-relaxed text-slate-500 mb-6">
                    Without formal employment relationships, local legal entities, or enforceable employment contracts, businesses often have little practical recourse when issues occur.
                </p>
                <div class="mt-auto text-[10px] font-bold tracking-wider text-primary uppercase">
                    Upwork • BPOs • Contractors
                </div>
            </div>

            <!-- Card 4 (It's just another outsourcing operation) -->
            <div class="bg-white rounded-[24px] shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-[0_12px_30px_rgba(0,0,0,0.06)] border border-slate-100/80 transition-all duration-300 transform hover:-translate-y-1 p-8 flex flex-col items-start text-left border-t-[3px] border-t-primary">
                <div class="mb-5 text-primary">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </div>
                <h3 class="text-[17px] font-extrabold text-[#0F172A] tracking-tight mb-3">"It's just another outsourcing operation"</h3>
                <p class="text-[13px] md:text-[14px] leading-relaxed text-slate-500 mb-6">
                    Many offshore providers rotate personnel across accounts with minimal investment in long-term success. High turnover, inconsistent quality, and lack of continuity become ongoing challenges.
                </p>
                <div class="mt-auto text-[10px] font-bold tracking-wider text-primary uppercase">
                    BPOs • Call Centers
                </div>
            </div>

            <!-- Card 5 (Labor law compliance becomes my problem) -->
            <div class="bg-white rounded-[24px] shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-[0_12px_30px_rgba(0,0,0,0.06)] border border-slate-100/80 transition-all duration-300 transform hover:-translate-y-1 p-8 flex flex-col items-start text-left border-t-[3px] border-t-primary">
                <div class="mb-5 text-primary">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2zM9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                    </svg>
                </div>
                <h3 class="text-[17px] font-extrabold text-[#0F172A] tracking-tight mb-3">"Labor law compliance becomes my problem"</h3>
                <p class="text-[13px] md:text-[14px] leading-relaxed text-slate-500 mb-6">
                    Worker misclassification can create significant tax obligations, penalties, and regulatory exposure. Most contractor marketplaces leave that responsibility entirely with the client.
                </p>
                <div class="mt-auto text-[10px] font-bold tracking-wider text-primary uppercase">
                    Contractor Misclassification
                </div>
            </div>

            <!-- Card 6 (No one is accountable) -->
            <div class="bg-white rounded-[24px] shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-[0_12px_30px_rgba(0,0,0,0.06)] border border-slate-100/80 transition-all duration-300 transform hover:-translate-y-1 p-8 flex flex-col items-start text-left border-t-[3px] border-t-primary">
                <div class="mb-5 text-primary">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-[17px] font-extrabold text-[#0F172A] tracking-tight mb-3">"No one is accountable"</h3>
                <p class="text-[13px] md:text-[14px] leading-relaxed text-slate-500 mb-6">
                    When contractors disappear or providers replace key personnel without notice, there is often no formal escalation process, service commitment, or dedicated support structure.
                </p>
                <div class="mt-auto text-[10px] font-bold tracking-wider text-primary uppercase">
                    All Non-Compliant Platforms
                </div>
            </div>

        </div>
    </div>
</section>

<section class="w-full bg-[#f8fafc] py-16 lg:py-24 px-4 sm:px-6 lg:px-8 flex justify-center items-center">
    
    <!-- Outer Deep Blue Container (Kopplad till bg-secondary för bakgrund och text-white) -->
    <!-- hovringseffekter och ramar styrs av de dynamiska klasserna -->
    <div class="bg-secondary relative max-w-[1100px] w-full rounded-[32px] md:rounded-[40px] overflow-hidden px-6 py-12 sm:px-12 sm:py-16 md:p-16 text-left shadow-2xl">
        
        <!-- Dynamisk toningseffekt ovanpå bg-secondary med standard Tailwind-gradient -->
        <div class="absolute inset-0 bg-gradient-to-br from-white/[0.08] to-transparent pointer-events-none z-0"></div>

        <!-- Innehållsdel (z-10 ligger ovanför toningarna) -->
        <div class="relative z-10 w-full">
            
            <!-- Header Section -->
            <div class="max-w-[760px] mb-10">
                
                <!-- How Edge Is Different Pill Badge -->
                <div class="inline-flex items-center justify-center px-4 py-1.5 rounded-full text-[10px] md:text-[11px] font-bold border border-white/10 bg-white/5 tracking-wider uppercase mb-7 text-primary">
                    How Edge Is Different
                </div>

                <!-- Main Heading -->
                <h2 class="text-2xl sm:text-3xl md:text-[36px] font-extrabold text-white leading-[1.25] tracking-tight mb-5 font-sans">
                    Edge isn't a freelancer marketplace.<br class="hidden sm:inline">
                    Edge isn't a BPO. Edge is an employer.
                </h2>

                <!-- Main Description Paragraph -->
                <p class="text-[13.5px] leading-[1.65] font-sans text-slate-300">
                    Edge is a fully compliant employer of record. That means your talent are real employees — under real employment law, with real contracts, real benefits, and real legal protections. Edge is the legal employer. You have zero employer liability, zero co-employment risk, and full legal coverage.
                </p>
            </div>

            <!-- 3x2 Card Grid (Responsive layout) -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-5">
                
                <!-- Card 1: Real Employment Contracts -->
                <div class="bg-white/5 border border-white/[0.06] rounded-2xl p-7 flex gap-4 items-start hover:border-primary/45 hover:bg-white/[0.08] transition-all duration-300">
                    <div class="text-primary mt-1 flex-shrink-0">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-white text-[15px] mb-2 tracking-tight">Real Employment Contracts</h3>
                        <p class="text-[12.5px] leading-relaxed text-slate-400 font-sans">
                            Every hire signs a comprehensive employment agreement covering role scope, compensation, working hours, termination procedures, and dispute resolution — compliant with local labor law in every jurisdiction Edge operates.
                        </p>
                    </div>
                </div>

                <!-- Card 2: Binding NDAs -->
                <div class="bg-white/5 border border-white/[0.06] rounded-2xl p-7 flex gap-4 items-start hover:border-primary/45 transition-all duration-300">
                    <div class="text-primary mt-1 flex-shrink-0">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-white text-[15px] mb-2 tracking-tight">Binding NDAs</h3>
                        <p class="edge-feature-desc text-[12.5px] leading-relaxed text-slate-400 font-sans">
                            Every hire signs a binding NDA covering your proprietary information, client data, trade secrets, and business processes. Survives termination. Enforceable under local employment law.
                        </p>
                    </div>
                </div>

                <!-- Card 3: Full IP Assignment -->
                <div class="bg-white/5 border border-white/[0.06] rounded-2xl p-7 flex gap-4 items-start hover:border-primary/45 transition-all duration-300">
                    <div class="text-primary mt-1 flex-shrink-0">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 7a2 2 0 012 2m-1.5 6l-5.1 5.1a1.5 1.5 0 01-1.06.44H7A1.5 1.5 0 015.5 19v-1.84a1.5 1.5 0 01.44-1.06L11 11m-1-1a5 5 0 117.07 7.07l-1.41-1.41"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-white text-[15px] mb-2 tracking-tight">Full IP Assignment</h3>
                        <p class="edge-feature-desc text-[12.5px] leading-relaxed text-slate-400 font-sans">
                            All intellectual property created by your Edge hire is automatically assigned to you. Clear, enforceable IP assignment clauses in every contract — not the weak work-for-hire language freelancer platforms use.
                        </p>
                    </div>
                </div>

                <!-- Card 4: Zero Employer Liability -->
                <div class="bg-white/5 border border-white/[0.06] rounded-2xl p-7 flex gap-4 items-start hover:border-primary/45 transition-all duration-300">
                    <div class="text-primary mt-1 flex-shrink-0">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v17m0 0H9m3 0h3M4 11h6M4 11c0 2.5 1.5 4 3 4s3-1.5 3-4M4 11l3-6 3 6M14 11h6M14 11c0 2.5 1.5 4 3 4s3-1.5 3-4M14 11l3-6 3 6"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-white text-[15px] mb-2 tracking-tight">Zero Employer Liability</h3>
                        <p class="edge-feature-desc text-[12.5px] leading-relaxed text-slate-400 font-sans">
                            Edge is the legal employer. You carry zero employer liability, zero co-employment risk, and zero exposure to local labor law claims. Taxes, benefits, termination — all on Edge.
                        </p>
                    </div>
                </div>

                <!-- Card 5: Non-Compete & Non-Solicit -->
                <div class="bg-white/5 border border-white/[0.06] rounded-2xl p-7 flex gap-4 items-start hover:border-primary/45 transition-all duration-300">
                    <div class="text-primary mt-1 flex-shrink-0">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-white text-[15px] mb-2 tracking-tight">Non-Compete & Non-Solicit</h3>
                        <p class="edge-feature-desc text-[12.5px] leading-relaxed text-slate-400 font-sans">
                            Protection against talent solicitation and competitive hiring. Non-compete and non-solicit clauses tailored to each jurisdiction's enforceability standards.
                        </p>
                    </div>
                </div>

                <!-- Card 6: Audit-Ready Documentation -->
                <div class="bg-white/5 border border-white/[0.06] rounded-2xl p-7 flex gap-4 items-start hover:border-primary/45 transition-all duration-300">
                    <div class="text-primary mt-1 flex-shrink-0">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-white text-[15px] mb-2 tracking-tight">Audit-Ready Documentation</h3>
                        <p class="edge-feature-desc text-[12.5px] leading-relaxed text-slate-400 font-sans">
                            Complete contract archives, amendment tracking, and compliance documentation available on demand for your audits and regulatory reviews.
                        </p>
                    </div>
                </div>

            </div>
            
        </div>

    </div>
</section>

<section class="w-full bg-white py-16 lg:py-24 px-4 sm:px-6 lg:px-8 flex justify-center items-center">
    <div class="max-w-[1060px] w-full flex flex-col items-center">
        
        <!-- Top Pill Badge (Dynamiskt färgmixad bakgrund/kantlinje) -->
        <div class="inline-flex items-center justify-center px-4 py-1.5 rounded-full text-[10px] md:text-[11px] font-bold border tracking-wider uppercase mb-6 text-primary"
             style="background-color: color-mix(in srgb, var(--primary-color) 6%, transparent); border-color: color-mix(in srgb, var(--primary-color) 20%, transparent);">
            DATA SECURITY & HIPAA
        </div>

        <!-- Main Headline -->
        <h2 class="text-3xl sm:text-4xl md:text-[40px] font-extrabold text-center text-[#0F172A] leading-[1.15] tracking-tight mb-5 font-sans">
            Built for organizations where<br>
            <span class="text-primary">security and compliance matter.</span>
        </h2>

        <!-- Subtitle Paragraph -->
        <p class="text-[14px] md:text-[15px] leading-relaxed text-slate-500 text-center max-w-[640px] mb-12">
            Healthcare, dental, accounting, insurance, legal, and financial organizations handle sensitive information every day. VMA integrates security and compliance into every layer of its operating model.
        </p>

        <!-- Compliance Banner Card (Färgmixad mjuk bakgrund och kantlinje) -->
        <div class="w-full border rounded-[20px] p-8 md:p-10 flex flex-col items-center text-center mb-6"
             style="background-color: color-mix(in srgb, var(--primary-color) 4%, transparent); border-color: color-mix(in srgb, var(--primary-color) 12%, transparent);">
            
            <div class="inline-flex items-center justify-center px-3.5 py-1 rounded-full text-[10px] font-bold border tracking-wider uppercase mb-5 text-primary"
                 style="background-color: color-mix(in srgb, var(--primary-color) 12%, transparent); border-color: color-mix(in srgb, var(--primary-color) 30%, transparent);">
                Compliance
            </div>
            
            <h3 class="text-base sm:text-lg font-bold text-[#0F172A] mb-3 tracking-tight">
                Enterprise Security Infrastructure
            </h3>
            <p class="text-[13px] leading-relaxed text-slate-500 max-w-[820px]">
                VMA's network architecture, device management standards, access controls, and secure connectivity framework are designed to support enterprise security requirements, including HIPAA and other data protection obligations where applicable.
            </p>
        </div>

        <!-- Cards Grid Area (Responsiv layout med hovringseffekt kopplad till primärfärg) -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-6 gap-6 w-full">
            
            <!-- Card 1: SOC 2 & ISO 27001 -->
            <div class="bg-white border border-slate-200/60 p-8 flex flex-col items-start text-left lg:col-span-2 rounded-2xl hover:border-primary/45 hover:shadow-lg transition-all duration-300">
                <div class="text-primary mb-5">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                    </svg>
                </div>
                <h4 class="font-bold text-[#0F172A] text-[15px] mb-3 tracking-tight">SOC 2 & ISO 27001</h4>
                <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans">
                    VMA follows internationally recognized security frameworks that help safeguard client information and operational processes.
                </p>
            </div>

            <!-- Card 2: Controlled Workstations -->
            <div class="bg-white border border-slate-200/60 p-8 flex flex-col items-start text-left lg:col-span-2 rounded-2xl hover:border-primary/45 hover:shadow-lg transition-all duration-300">
                <div class="text-primary mb-5">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <rect x="3" y="4" width="18" height="12" rx="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M7 20h10M9 16v4M15 16v4" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h4 class="font-bold text-[#0F172A] text-[15px] mb-3 tracking-tight">Controlled Workstations</h4>
                <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans">
                    Managed hardware environments, access restrictions, and security policies help minimize the risk of unauthorized data transfer or system misuse.
                </p>
            </div>

            <!-- Card 3: Secure VPN & Encrypted Connectivity -->
            <div class="bg-white border border-slate-200/60 p-8 flex flex-col items-start text-left lg:col-span-2 rounded-2xl hover:border-slate-300 hover:border-primary/45 hover:shadow-lg transition-all duration-300">
                <div class="text-primary mb-5">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="10" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10M12 2a15.3 15.3 0 00-4 10 15.3 15.3 0 004 10M2 12h20" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h4 class="font-bold text-[#0F172A] text-[15px] mb-3 tracking-tight">Secure VPN & Encrypted Connectivity</h4>
                <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans">
                    All authorized connections operate through encrypted communication channels designed to protect sensitive information in transit.
                </p>
            </div>

            <!-- Card 4: Secure Facilities (Centrerad på desktop) -->
            <div class="bg-white border border-slate-200/60 p-8 flex flex-col items-start text-left lg:col-span-2 lg:col-start-2 rounded-2xl hover:border-primary/45 hover:shadow-lg transition-all duration-300">
                <div class="text-primary mb-5">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                </div>
                <h4 class="font-bold text-[#0F172A] text-[15px] mb-3 tracking-tight">Secure Facilities</h4>
                <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans">
                    Access controls, monitored workspaces, workstation security standards, and physical safeguards help maintain operational security.
                </p>
            </div>

            <!-- Card 5: Business Continuity Infrastructure (Centrerad på desktop) -->
            <div class="bg-white border border-slate-200/60 p-8 flex flex-col items-start text-left lg:col-span-2 rounded-2xl hover:border-primary/45 hover:shadow-lg transition-all duration-300">
                <div class="text-primary mb-5">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <h4 class="font-bold text-[#0F172A] text-[15px] mb-3 tracking-tight">Business Continuity Infrastructure</h4>
                <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans">
                    Redundant internet connectivity, backup power systems, and continuity planning support uninterrupted operations.
                </p>
            </div>

        </div>

    </div>
</section>

<section class="w-full bg-white py-16 lg:py-24 px-4 sm:px-6 lg:px-8 flex justify-center items-center">
    <div class="max-w-[1100px] w-full flex flex-col items-center">
        
        <!-- Top Pill Badge (Dynamiskt färgmixad bakgrund/kantlinje) -->
        <div class="inline-flex items-center justify-center px-4 py-1.5 rounded-full text-[10px] md:text-[11px] font-bold border tracking-wider uppercase mb-6 text-primary font-sans"
             style="background-color: color-mix(in srgb, var(--primary-color) 6%, transparent); border-color: color-mix(in srgb, var(--primary-color) 20%, transparent);">
            HR & PEOPLE OPERATIONS
        </div>

        <!-- Main Headline -->
        <h2 class="text-3xl sm:text-4xl md:text-[40px] font-extrabold text-center text-[#0F172A] leading-[1.2] tracking-tight mb-5 font-sans">
            Compliance extends beyond contracts and technology.<br>
            <span class="text-primary">It's also about people management.</span>
        </h2>

        <!-- Subtitle Paragraph -->
        <p class="text-[13.5px] md:text-[14px] leading-relaxed text-slate-500 text-center max-w-[680px] mb-16 font-sans">
            VMA provides structured HR oversight for every professional from onboarding through offboarding ensuring consistency, accountability, and documentation at every stage.
        </p>

        <!-- 3x2 Grid (Responsiv layout med hovringseffekt kopplad till primärfärg) -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 w-full">
            
            <!-- Card 1: Structured Onboarding -->
            <div class="bg-white border border-slate-200/60 rounded-2xl p-8 flex flex-col items-start text-left transition-all duration-300 hover:shadow-lg"
                 style="--tw-border-opacity: 1;"
                 onmouseenter="this.style.borderColor='color-mix(in srgb, var(--primary-color) 25%, transparent)'"
                 onmouseleave="this.style.borderColor='rgba(229, 231, 235, 0.6)'">
                <div class="flex items-center justify-center w-7 h-7 rounded-full text-white text-[11px] font-bold mb-6 bg-primary font-sans">
                    1
                </div>
                <h3 class="font-bold text-[#0F172A] text-[15px] mb-3 tracking-tight font-sans">Structured Onboarding</h3>
                <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans">
                    Role-specific onboarding, system access, training, introductions, and implementation plans ensure every professional begins with clarity and support.
                </p>
            </div>

            <!-- Card 2: 30/60/90-Day Reviews -->
            <div class="bg-white border border-slate-200/60 rounded-2xl p-8 flex flex-col items-start text-left transition-all duration-300 hover:shadow-lg"
                 style="--tw-border-opacity: 1;"
                 onmouseenter="this.style.borderColor='color-mix(in srgb, var(--primary-color) 25%, transparent)'"
                 onmouseleave="this.style.borderColor='rgba(229, 231, 235, 0.6)'">
                <div class="flex items-center justify-center w-7 h-7 rounded-full text-white text-[11px] font-bold mb-6 bg-primary font-sans">
                    2
                </div>
                <h3 class="font-bold text-[#0F172A] text-[15px] mb-3 tracking-tight font-sans">30/60/90-Day Reviews</h3>
                <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans">
                    Formal milestone reviews provide structured feedback, performance monitoring, goal alignment, and documented progress reporting.
                </p>
            </div>

            <!-- Card 3: Quarterly Performance Evaluations -->
            <div class="bg-white border border-slate-200/60 rounded-2xl p-8 flex flex-col items-start text-left transition-all duration-300 hover:shadow-lg"
                 style="--tw-border-opacity: 1;"
                 onmouseenter="this.style.borderColor='color-mix(in srgb, var(--primary-color) 25%, transparent)'"
                 onmouseleave="this.style.borderColor='rgba(229, 231, 235, 0.6)'">
                <div class="flex items-center justify-center w-7 h-7 rounded-full text-white text-[11px] font-bold mb-6 bg-primary font-sans">
                    3
                </div>
                <h3 class="font-bold text-[#0F172A] text-[15px] mb-3 tracking-tight font-sans">Quarterly Performance Evaluations</h3>
                <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans">
                    Standardized performance assessments combine client feedback, productivity metrics, and professional development planning.
                </p>
            </div>

            <!-- Card 4: Performance Improvement Programs -->
            <div class="bg-white border border-slate-200/60 rounded-2xl p-8 flex flex-col items-start text-left transition-all duration-300 hover:shadow-lg"
                 style="--tw-border-opacity: 1;"
                 onmouseenter="this.style.borderColor='color-mix(in srgb, var(--primary-color) 25%, transparent)'"
                 onmouseleave="this.style.borderColor='rgba(229, 231, 235, 0.6)'">
                <div class="flex items-center justify-center w-7 h-7 rounded-full text-white text-[11px] font-bold mb-6 bg-primary font-sans">
                    4
                </div>
                <h3 class="font-bold text-[#0F172A] text-[15px] mb-3 tracking-tight font-sans">Performance Improvement Programs</h3>
                <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans">
                    When challenges arise, VMA implements documented improvement plans with measurable objectives, coaching support, and clear timelines.
                </p>
            </div>

            <!-- Card 5: Conflict Resolution Support -->
            <div class="bg-white border border-slate-200/60 rounded-2xl p-8 flex flex-col items-start text-left transition-all duration-300 hover:shadow-lg"
                 style="--tw-border-opacity: 1;"
                 onmouseenter="this.style.borderColor='color-mix(in srgb, var(--primary-color) 25%, transparent)'"
                 onmouseleave="this.style.borderColor='rgba(229, 231, 235, 0.6)'">
                <div class="flex items-center justify-center w-7 h-7 rounded-full text-white text-[11px] font-bold mb-6 bg-primary font-sans">
                    5
                </div>
                <h3 class="font-bold text-[#0F172A] text-[15px] mb-3 tracking-tight font-sans">Conflict Resolution Support</h3>
                <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans">
                    Communication challenges, workflow concerns, and team issues are managed through structured mediation and documented resolution procedures.
                </p>
            </div>

            <!-- Card 6: Offboarding & Transition Management -->
            <div class="bg-white border border-slate-200/60 p-8 flex flex-col items-start text-left transition-all duration-300 hover:shadow-lg rounded-2xl"
                 style="--tw-border-opacity: 1;"
                 onmouseenter="this.style.borderColor='color-mix(in srgb, var(--primary-color) 25%, transparent)'"
                 onmouseleave="this.style.borderColor='rgba(229, 231, 235, 0.6)'">
                <div class="flex items-center justify-center w-7 h-7 rounded-full text-white text-[11px] font-bold mb-6 bg-primary font-sans">
                    6
                </div>
                <h3 class="font-bold text-[#0F172A] text-[15px] mb-3 tracking-tight font-sans">Offboarding & Transition Management</h3>
                <p class="text-[12.5px] leading-relaxed text-slate-500 font-sans">
                    Access removal, knowledge transfer, documentation handover, equipment coordination, and replacement planning are managed through a structured process.
                </p>
            </div>

        </div>

    </div>
</section>

<section class="w-full bg-white py-16 lg:py-24 px-4 sm:px-6 lg:px-8 flex justify-center items-center">
    <div class="max-w-[1100px] w-full flex flex-col items-center">
        
        <!-- Top Pill Badge (Dynamiskt färgmixad bakgrund/kantlinje) -->
        <div class="inline-flex items-center justify-center px-4 py-1.5 rounded-full text-[10px] md:text-[11px] font-bold border tracking-wider uppercase mb-6 text-primary font-sans"
             style="background-color: color-mix(in srgb, var(--primary-color) 6%, transparent); border-color: color-mix(in srgb, var(--primary-color) 20%, transparent);">
            Compliance Comparison
        </div>

        <!-- Main Headline -->
        <h2 class="text-3xl sm:text-4xl md:text-[40px] font-extrabold text-center text-[#0F172A] leading-[1.2] tracking-tight mb-5 font-sans">
            Not all global workforce solutions operate the same way.<br>
            <span class="text-primary">VMA creates difference</span>
        </h2>

        <!-- Subtitle Paragraph -->
        <p class="text-[13.5px] md:text-[14px] leading-relaxed text-slate-500 text-center max-w-[680px] mb-14 font-sans">
            The gap between VMA and traditional alternatives is not incremental — it's structural.
        </p>

        <!-- Responsive Table Container Wrapper (Smidig rullning på mobil) -->
        <div class="w-full overflow-x-auto rounded-[16px] border border-slate-200/80 shadow-[0_4px_30px_rgba(0,0,0,0.015)]">
            <table class="w-full min-w-[850px] text-left border-collapse table-fixed">
                <thead>
                    <tr class="border-b border-slate-100">
                        <!-- Column 1: Feature Row Headers -->
                        <th class="w-[20%] p-5 text-sm font-semibold text-slate-400 font-sans">
                            Feature / Criteria
                        </th>
                        
                        <!-- Column 2: VMA Highlighted Header (Dynamiskt färgmatchad med primärfärg) -->
                        <th class="w-[22%] p-5 text-xs font-extrabold uppercase tracking-widest text-primary font-sans"
                            style="background-color: color-mix(in srgb, var(--primary-color) 4%, transparent);">
                            VMA
                        </th>
                        
                        <!-- Column 3: Freelancer Platforms -->
                        <th class="w-[21%] p-5 text-xs font-bold uppercase tracking-widest text-slate-400 font-sans">
                            Freelancer Platforms
                        </th>
                        
                        <!-- Column 4: Offshore BPOs -->
                        <th class="w-[19%] p-5 text-xs font-bold uppercase tracking-widest text-slate-400 font-sans">
                            Offshore BPOs
                        </th>
                        
                        <!-- Column 5: Local Hire (US) -->
                        <th class="w-[18%] p-5 text-xs font-bold uppercase tracking-widest text-slate-400 font-sans">
                            Local US Hire
                        </th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    
                    <!-- Row 1: Structured employment framework -->
                    <tr>
                        <td class="p-5 text-[13.5px] font-bold text-[#0F172A] font-sans">Structured employment framework</td>
                        <td class="p-5 text-[13.5px] font-semibold text-primary font-sans"
                            style="background-color: color-mix(in srgb, var(--primary-color) 4%, transparent);">
                            <span class="text-primary font-black mr-2">✓</span> Managed
                        </td>
                        <td class="p-5 text-[13.5px] text-slate-500 font-sans">
                            <span class="text-red-400 font-bold mr-2">✕</span> Contractor model
                        </td>
                        <td class="p-5 text-[13.5px] text-slate-500 font-sans">
                            <span class="text-amber-500 font-extrabold mr-2">—</span> Provider employee
                        </td>
                        <td class="p-5 text-[13.5px] text-slate-700 font-sans">
                            <span class="text-emerald-600 font-bold mr-2">✓</span> Direct employee
                        </td>
                    </tr>

                    <!-- Row 2: Employment administration -->
                    <tr>
                        <td class="p-5 text-[13.5px] font-bold text-[#0F172A] font-sans">Employment administration</td>
                        <td class="p-5 text-[13.5px] font-semibold text-primary font-sans"
                            style="background-color: color-mix(in srgb, var(--primary-color) 4%, transparent);">
                            <span class="text-primary font-black mr-2">✓</span> VMA-managed
                        </td>
                        <td class="p-5 text-[13.5px] text-slate-500 font-sans">
                            <span class="text-red-400 font-bold mr-2">✕</span> Client responsibility
                        </td>
                        <td class="p-5 text-[13.5px] text-slate-500 font-sans">
                            <span class="text-amber-500 font-extrabold mr-2">—</span> Provider-managed
                        </td>
                        <td class="p-5 text-[13.5px] text-slate-500 font-sans">
                            <span class="text-red-400 font-bold mr-2">✕</span> Employer-managed
                        </td>
                    </tr>

                    <!-- Row 3: NDA protection -->
                    <tr>
                        <td class="p-5 text-[13.5px] font-bold text-[#0F172A] font-sans">NDA protection</td>
                        <td class="p-5 text-[13.5px] font-semibold text-primary font-sans"
                            style="background-color: color-mix(in srgb, var(--primary-color) 4%, transparent);">
                            <span class="text-primary font-black mr-2">✓</span> Standardized
                        </td>
                        <td class="p-5 text-[13.5px] text-slate-500 font-sans">
                            <span class="text-red-400 font-bold mr-2">✕</span> Limited
                        </td>
                        <td class="p-5 text-[13.5px] text-slate-500 font-sans">
                            <span class="text-amber-500 font-extrabold mr-2">—</span> Varies
                        </td>
                        <td class="p-5 text-[13.5px] text-slate-700 font-sans">
                            <span class="text-emerald-600 font-bold mr-2">✓</span> Employer-managed
                        </td>
                    </tr>

                    <!-- Row 4: IP assignment -->
                    <tr>
                        <td class="p-5 text-[13.5px] font-bold text-[#0F172A] font-sans">IP assignment</td>
                        <td class="p-5 text-[13.5px] font-semibold text-primary font-sans"
                            style="background-color: color-mix(in srgb, var(--primary-color) 4%, transparent);">
                            <span class="text-primary font-black mr-2">✓</span> Contractual
                        </td>
                        <td class="p-5 text-[13.5px] text-slate-500 font-sans">
                            <span class="text-red-400 font-bold mr-2">✕</span> Inconsistent
                        </td>
                        <td class="p-5 text-[13.5px] text-slate-500 font-sans">
                            <span class="text-red-400 font-bold mr-2">✕</span> Varies
                        </td>
                        <td class="p-5 text-[13.5px] text-slate-700 font-sans">
                            <span class="text-emerald-600 font-bold mr-2">✓</span> Employer-managed
                        </td>
                    </tr>

                    <!-- Row 5: Compliance support -->
                    <tr>
                        <td class="p-5 text-[13.5px] font-bold text-[#0F172A] font-sans">Compliance support</td>
                        <td class="p-5 text-[13.5px] font-semibold text-primary font-sans"
                            style="background-color: color-mix(in srgb, var(--primary-color) 4%, transparent);">
                            <span class="text-primary font-black mr-2">✓</span> Included
                        </td>
                        <td class="p-5 text-[13.5px] text-slate-500 font-sans">
                            <span class="text-red-400 font-bold mr-2">✕</span> Limited
                        </td>
                        <td class="p-5 text-[13.5px] text-slate-500 font-sans">
                            <span class="text-red-400 font-bold mr-2">✕</span> Limited
                        </td>
                        <td class="p-5 text-[13.5px] text-slate-700 font-sans">
                            <span class="text-emerald-600 font-bold mr-2">✓</span> Self-managed
                        </td>
                    </tr>

                    <!-- Row 6: Security infrastructure -->
                    <tr>
                        <td class="p-5 text-[13.5px] font-bold text-[#0F172A] font-sans">Security infrastructure</td>
                        <td class="p-5 text-[13.5px] font-semibold text-primary font-sans"
                            style="background-color: color-mix(in srgb, var(--primary-color) 4%, transparent);">
                            <span class="text-primary font-black mr-2">✓</span> Enterprise-focused
                        </td>
                        <td class="p-5 text-[13.5px] text-slate-500 font-sans">
                            <span class="text-red-400 font-bold mr-2">✕</span> Not standardized
                        </td>
                        <td class="p-5 text-[13.5px] text-slate-500 font-sans">
                            <span class="text-amber-500 font-extrabold mr-2">—</span> Varies
                        </td>
                        <td class="p-5 text-[13.5px] text-slate-500 font-sans">
                            <span class="text-amber-500 font-extrabold mr-2">—</span> Employer responsibility
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>

    </div>
</section>


<section class="w-full bg-white py-12 px-4 sm:px-6 lg:px-8 flex justify-center items-center">
    
    <!-- Outer Container Card (Dynamiskt färgmatchad bakgrund, kantlinje och skugga) -->
    <div class="max-w-[1060px] w-full border rounded-[32px] px-6 py-12 sm:px-12 sm:py-16 md:p-16 text-center"
         style="background-color: color-mix(in srgb, var(--primary-color) 4%, transparent); border-color: color-mix(in srgb, var(--primary-color) 12%, transparent); box-shadow: 0 15px 40px -10px color-mix(in srgb, var(--primary-color) 25%, transparent);">
        
        <!-- Main Headline -->
        <h2 class="text-2xl sm:text-3xl md:text-[34px] lg:text-[36px] font-extrabold leading-[1.25] tracking-tight mb-5 font-sans"
            style="color: color-mix(in srgb, var(--primary-color) 85%, #000);">
            The Cost Advantages of Global Talent <br class="hidden sm:inline">
            With the Structure and Protection a Business Needs
        </h2>

        <!-- Description Paragraph -->
        <p class="text-[13.5px] md:text-[14px] leading-relaxed max-w-[820px] mx-auto font-sans font-medium"
           style="color: color-mix(in srgb, var(--primary-color) 50%, #475569);">
            Most workforce solutions force organizations to choose between affordability and compliance. Freelancer platforms provide cost savings with limited protection. Traditional hiring provides control with significantly higher costs. VMA combines global talent access, compliance support, enterprise-grade security practices, structured HR management, and operational oversight in one integrated solution.
        </p>
        
    </div>
</section>



<!-- DYNAMISK SÄKERHETSSEKTION (MONITORING & RESPONSE) -->
<section class="relative w-full bg-secondary py-20 lg:py-28 px-4 sm:px-6 lg:px-8 flex justify-center items-center overflow-hidden">
    
    <!-- Subtle Background Ambient Light (Dynamiskt färgmatchad med primärfärg) -->
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[500px] h-[300px] blur-[120px] rounded-full -z-10 pointer-events-none"
         style="background-color: color-mix(in srgb, var(--primary-color) 5%, transparent);"></div>
    
    <div class="max-w-[1100px] w-full flex flex-col items-center relative z-10">
        
        <!-- Top Pill Badge (Dynamiskt färgmixad bakgrund/kantlinje) -->
        <div class="inline-flex items-center justify-center px-4 py-1.5 rounded-full text-[10px] md:text-[11px] font-bold border tracking-wider uppercase mb-6 text-primary font-sans"
             style="background-color: color-mix(in srgb, var(--primary-color) 6%, transparent); border-color: color-mix(in srgb, var(--primary-color) 20%, transparent);">
            Common Concerns
        </div>

        <!-- Main Headline (Dynamiskt färgtonad rad två) -->
        <h2 class="text-3xl sm:text-4xl md:text-[40px] font-extrabold text-center text-white leading-[1.25] tracking-tight mb-16 font-sans">
            Still Have Questions?<br>
            <span class="block mt-2 font-sans"
                  style="background-image: linear-gradient(to right, color-mix(in srgb, var(--primary-color) 60%, white), var(--primary-color)); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                Here Are the Answers.
            </span>
        </h2>

        <!-- Responsive Card Grid (2 kolumner på desktop, 1 på mobil) -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 w-full">
            
            <!-- Card 1 (Is my data actually secure?) -->
            <div class="bg-white rounded-[24px] p-8 md:p-10 flex flex-col justify-between text-left shadow-lg transition-all duration-300 hover:scale-[1.01]">
                <div>
                    <h3 class="font-extrabold text-[#0F172A] text-[16px] md:text-[17px] mb-4 tracking-tight leading-snug">
                        Is my data actually secure with an overseas professional?
                    </h3>
                    <p class="text-[13px] md:text-[13.5px] leading-relaxed text-slate-500 font-sans">
                        VMA implements security controls aligned with recognized frameworks such as SOC 2, ISO 27001, HIPAA, and other industry standards. Secure connectivity, controlled access, and documented security procedures help protect sensitive information.
                    </p>
                </div>
            </div>

            <!-- Card 2 (What protects my IP?) -->
            <div class="bg-white rounded-[24px] p-8 md:p-10 flex flex-col justify-between text-left shadow-lg transition-all duration-300 hover:scale-[1.01]">
                <div>
                    <h3 class="font-extrabold text-[#0F172A] text-[16px] md:text-[17px] mb-4 tracking-tight leading-snug">
                        What protects my intellectual property?
                    </h3>
                    <p class="text-[13px] md:text-[13.5px] leading-relaxed text-slate-500 font-sans">
                        Every VMA professional signs legally enforceable confidentiality and intellectual property agreements. Ownership of approved work product is clearly defined through contractual protections.
                    </p>
                </div>
            </div>

            <!-- Card 3 (What about employment & compliance risk?) -->
            <div class="bg-white rounded-[24px] p-8 md:p-10 flex flex-col justify-between text-left shadow-lg transition-all duration-300 hover:scale-[1.01]">
                <div>
                    <h3 class="font-extrabold text-[#0F172A] text-[16px] md:text-[17px] mb-4 tracking-tight leading-snug">
                        What about employment and compliance risk?
                    </h3>
                    <p class="text-[13px] md:text-[13.5px] leading-relaxed text-slate-500 font-sans">
                        VMA manages employment administration, workforce documentation, payroll coordination, and compliance processes through structured frameworks designed to reduce risk and administrative burden.
                    </p>
                </div>
            </div>

            <!-- Card 4 (How can I verify compliance?) -->
            <div class="bg-white rounded-[24px] p-8 md:p-10 flex flex-col justify-between text-left shadow-lg transition-all duration-300 hover:scale-[1.01]">
                <div>
                    <h3 class="font-extrabold text-[#0F172A] text-[16px] md:text-[17px] mb-4 tracking-tight leading-snug">
                        How can I verify the compliance standards?
                    </h3>
                    <p class="text-[13px] md:text-[13.5px] leading-relaxed text-slate-500 font-sans">
                        VMA supports compliance-focused operations through documented processes, security controls, workforce governance standards, contractual safeguards, and infrastructure designed for regulated business environments.
                    </p>
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
            Meet Your Next Hire<br>
            in <span class="bg-gradient-to-r from-[#000] via-[#000] to-[#000] bg-clip-text text-transparent">just 7 days</span>
        </h2>

        <!-- Subheading -->
        <p class="text-white/80 text-[13px] md:text-[16px] leading-relaxed max-w-2xl mx-auto mb-8 font-normal">
            Book a Demo to see matched, pre-vetted candidates tailored to your business needs.

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
                    'No long-term commitment',
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