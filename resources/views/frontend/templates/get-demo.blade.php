@extends('frontend.layouts.app')

@section('content')   
<!-- SECTION: MEDCARE INTEREST LANDING PAGE -->

<!-- THEME SYSTEM CSS VARIABLES & RESPONSIVE ILLUSTRATION OVERRIDES -->
<style>
    :root {
        /* Professional defaults directly matched to your screenshot */
        --primary: {{ $page->primary_color ?? '#6366f1' }}; /* Purple/Indigo accent */
        --secondary: {{ $page->secondary_color ?? '#0f172a' }}; /* Deep slate for headings */
        --accent: {{ $page->primary_color ?? '#76b729' }}; /* Green CTA button */
        
        --primary-color: var(--primary);
        --secondary-color: var(--secondary);           
        --accent-color: var(--accent);
        
        /* Layout Configuration Variables */
        --theme-bg: #EAE4FC; /* Light lavender background matching your screenshot */
        --accent-hover: color-mix(in srgb, var(--accent-color) 85%, #000000);
        --border-color: #cbd5e1; /* Soft slate gray border for inputs */
        --input-text: #1e293b;
        --card-bg: #ffffff;
    }

    /* Standard utility classes if required by layout engine */
    .text-primary { color: var(--primary-color); }
    .bg-primary { background-color: var(--primary-color); }
    .bg-secondary { background-color: var(--secondary-color); }
    .border-primary { border-color: var(--primary-color); }

    /* Purge-Safe Responsive Doctor Container */
    .doctor-container {
        width: 100%;
        margin-left: 0;
        margin-bottom: -1rem;
    }
    
    @media (min-width: 1024px) {
        .doctor-container {
            width: 115%;
            margin-left: -10%;
            margin-bottom: -3rem;
        }
    }
</style>

<!-- SECTION: MEDCARE COHESIVE ONE-PAGE LANDING (Fully Responsive Layout) -->
<section class="relative w-full min-h-screen flex items-center justify-center pt-24 md:pt-28 pb-12 lg:pb-0 px-4 sm:px-6 lg:px-12 overflow-hidden font-sans" style="background-color: var(--theme-bg);">
    
    <!-- Unified Flexbox Container (Responsive flex-direction) -->
    <div class="max-w-7xl w-full flex flex-col lg:flex-row gap-10 lg:gap-16 items-stretch relative z-10">
        
        <!-- Left Column: Copy & Pinned Doctor Illustration (Stacked on Mobile, Side-by-Side on Desktop) -->
        <div class="w-full lg:w-1/2 flex flex-col justify-between h-full space-y-8 lg:space-y-12 self-stretch">
            
            <!-- Headline and Paragraph -->
            <div class="max-w-xl text-left">
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-black mb-6 capitalize leading-tight" style="color: var(--secondary-color);">
                   Confidence in VMA is the beginning<br> of a trusted remote 
                    <br> healthcare partnership 
                </h2>
                <p class="text-sm md:text-base leading-relaxed max-w-md font-semibold" style="color: var(--secondary-color); opacity: 0.7;">
                    Every healthcare practice is unique, and VMA aspires to learn more about yours. Our team will connect with you to discuss remote solutions that fit your medical organization and practice.
                </p>
            </div>

            <!-- Grounded Doctor Image (Responsive Sizing & Alignment) -->
            <div class="doctor-container relative mx-auto lg:mx-0 flex items-end justify-center select-none mt-auto transition-all duration-300">
                <img src="{{ asset('storage/media/request-demo2-banner.webp') }}" 
                    alt="MedCare Doctor" 
                    class="relative z-10 w-full h-auto object-contain object-bottom block drop-shadow-2xl align-bottom" 
                    style="max-height: 85vh;" />
            </div>

        </div>

        <!-- Right Column: Interactive Leads Form Card -->
        <div class="w-full lg:w-1/2 flex items-center justify-center lg:justify-end pb-12 lg:pb-16">
            <div class="w-full max-w-xl rounded-3xl shadow-2xl p-6 sm:p-10 transition-all duration-300" style="background-color: var(--card-bg);">
                
                <!-- Form Title Block -->
                <div class="mb-8 text-left">
                    <h3 class="text-2xl font-bold mb-3 tracking-tight capitalize" style="color: var(--primary-color);">
                        Lets get connected
                    </h3>
                    <p class="text-sm leading-relaxed text-[#475569] font-medium">
                        Please provide the following information, so our team can connect with you within 12 hours. 
                        Or call us at <a href="tel:800-640-6409" class="font-bold hover:underline transition-colors text-[#76b729]">800-640-6409</a>
                    </p>
                </div>

                <!-- Session Alert Messages -->
                @if(session('success'))
                    <div class="mb-6 p-4 text-sm rounded-xl border font-bold bg-green-50 text-green-700 border-green-200">
                        {{ session('success') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="mb-6 p-4 text-sm bg-red-50 border border-red-200 text-red-700 rounded-xl text-left">
                        <ul class="list-disc pl-5 space-y-1">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Discovery Form Configuration -->
                <form action="{{ route('backend.discovery.submit') }}" method="POST" class="space-y-4 text-left">
                    @csrf
                    
                    <!-- Row 1: Names (First & Last) -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="flex flex-col gap-1.5">
                            <label for="first_name" class="text-sm font-bold text-[#1e293b]">First Name*</label>
                            <input type="text" id="first_name" name="first_name" required
                                class="w-full bg-white border border-gray-300 rounded px-4 py-2.5 text-sm text-slate-800 focus:outline-none focus:border-[var(--primary-color)] focus:ring-1 focus:ring-[var(--primary-color)] transition-all" />
                        </div>

                        <div class="flex flex-col gap-1.5">
                            <label for="last_name" class="text-sm font-bold text-[#1e293b]">Last Name*</label>
                            <input type="text" id="last_name" name="last_name" required
                                class="w-full bg-white border border-gray-300 rounded px-4 py-2.5 text-sm text-slate-800 focus:outline-none focus:border-[var(--primary-color)] focus:ring-1 focus:ring-[var(--primary-color)] transition-all" />
                        </div>
                    </div>

                    <!-- Row 2: Email -->
                    <div class="flex flex-col gap-1.5">
                        <label for="email" class="text-sm font-bold text-[#1e293b]">Email*</label>
                        <input type="email" id="email" name="email" required
                            class="w-full bg-white border border-gray-300 rounded px-4 py-2.5 text-sm text-slate-800 focus:outline-none focus:border-[var(--primary-color)] focus:ring-1 focus:ring-[var(--primary-color)] transition-all" />
                    </div>

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
                                this.dialCode = e.target.selectedOptions[0].getAttribute('data-code');
                            }
                        }">
                        
                        <!-- Country Selector -->
                        <div class="sm:col-span-5 flex flex-col gap-1.5">
                            <label for="country" class="text-sm font-bold text-[#1e293b]">Country*</label>
                            <div class="relative">
                                <select name="country" id="country" @change="updateCode($event)" required
                                        class="w-full bg-white border border-gray-300 rounded pl-4 pr-10 py-2.5 text-sm text-slate-800 focus:outline-none focus:border-[var(--primary-color)] focus:ring-1 focus:ring-[var(--primary-color)] transition-all cursor-pointer appearance-none">
                                    <template x-for="country in countries" :key="country.name">
                                        <option :value="country.name" :data-code="country.code" x-text="country.name" class="text-black"></option>
                                    </template>
                                </select>
                                <div class="absolute right-3.5 top-1/2 -translate-y-1/2 pointer-events-none flex items-center">
                                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <!-- Phone inputs -->
                        <div class="sm:col-span-7 flex flex-col gap-1.5">
                            <label for="phone" class="text-sm font-bold text-[#1e293b]">Phone number*</label>
                            <div class="flex items-center gap-2">
                                <!-- Dial Prefix Container -->
                                <div class="bg-white border border-gray-300 rounded px-3 py-2.5 text-sm font-medium text-center text-slate-800 flex items-center justify-center select-none" style="min-width: 52px;"
                                    x-text="dialCode">
                                </div>
                                
                                <input type="hidden" name="dial_code" :value="dialCode">

                                <input type="tel" id="phone" name="phone" required
                                    class="w-full bg-white border border-gray-300 rounded px-4 py-2.5 text-sm text-slate-800 focus:outline-none focus:border-[var(--primary-color)] focus:ring-1 focus:ring-[var(--primary-color)] transition-all" />
                            </div>
                        </div>
                    </div>

                    <!-- Row 4: Practice Name -->
                    <div class="flex flex-col gap-1.5">
                        <label for="practice_name" class="text-sm font-bold text-[#1e293b]">Practice Name*</label>
                        <input type="text" id="practice_name" name="practice_name" required
                            class="w-full bg-white border border-gray-300 rounded px-4 py-2.5 text-sm text-slate-800 focus:outline-none focus:border-[var(--primary-color)] focus:ring-1 focus:ring-[var(--primary-color)] transition-all" />
                    </div>

                    <!-- Row 5: Services Dropdown -->
                    <div class="flex flex-col gap-1.5">
                        <label for="industry" class="text-sm font-bold text-[#1e293b]">Services*</label>
                        <div class="relative">
                            <select name="industry" id="industry" required
                                    class="w-full bg-white border border-gray-300 rounded pl-4 pr-10 py-2.5 text-sm text-slate-800 focus:outline-none focus:border-[var(--primary-color)] focus:ring-1 focus:ring-[var(--primary-color)] transition-all cursor-pointer appearance-none">
                                <option value="" disabled selected class="text-slate-400">Select a Service*</option>
                                <option class="text-black">Front Desk Expert</option>
                                <option class="text-black">Virtual Medical Scribes</option>
                                <option class="text-black">Medical Receptionist</option>
                                <option class="text-black">Remote Patient Monitoring</option>
                                <option class="text-black">Virtual Chronic Care Management</option>
                                <option class="text-black">Provider & Payers Credentialing</option>
                                <option class="text-black">Pre-Authorization Services</option>
                                <option class="text-black">Eligibility and Benefits Verification</option>
                                <option class="text-black">Account Receivable (AR) Services</option>
                                <option class="text-black">Virtual Administrative Assistant</option>
                            </select>
                            <div class="absolute right-3.5 top-1/2 -translate-y-1/2 pointer-events-none flex items-center">
                                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Row 6: Referral Dropdown -->
                    <div class="flex flex-col gap-1.5">
                        <label for="referral" class="text-sm font-bold text-[#1e293b]">Where did you hear about us?*</label>
                        <div class="relative">
                            <select name="referral" id="referral" required
                                    class="w-full bg-white border border-gray-300 rounded pl-4 pr-10 py-2.5 text-sm text-slate-800 focus:outline-none focus:border-[var(--primary-color)] focus:ring-1 focus:ring-[var(--primary-color)] transition-all cursor-pointer appearance-none">
                                <option value="" disabled selected class="text-slate-400">Select an option*</option>
                                <option class="text-black">Google</option>
                                <option class="text-black">LinkedIn</option>
                                <option class="text-black">Referral</option>
                            </select>
                            <div class="absolute right-3.5 top-1/2 -translate-y-1/2 pointer-events-none flex items-center">
                                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Opt-in Disclaimer Text -->
                    <div class="pt-2">
                        <p class="text-xs leading-relaxed text-slate-400">
                            Searching for job openings? Check out our <a href="#" class="font-bold hover:underline transition-colors text-[var(--accent-color)]">careers page</a>. By submitting this form, you agree to Teem's Privacy Policy, and to receive email and text messages. You can unsubscribe at any time.
                        </p>
                    </div>

                    <!-- Pill Submit Button -->
                    <div class="pt-4">
                        <button type="submit" 
                                class="w-full text-white text-base font-bold py-3.5 px-6 rounded-full transition-all duration-300 text-center hover:-translate-y-0.5 active:translate-y-0 shadow-md hover:shadow-lg"
                                style="background-color: var(--accent-color);">
                            Submit
                        </button>
                    </div>

                </form>

            </div>
        </div>

    </div>
</section>

<!-- SECTION: CALL TO ACTION DEMO STRIP -->
<section class="relative w-full overflow-hidden font-sans z-10 py-8 md:py-9" style="background-color: var(--primary-color);">
    
    <!-- Concentric Decorative Circular Ripple SVGs in Background -->
    <div class="absolute inset-0 pointer-events-none opacity-20 z-0 select-none">
        <svg class="w-full h-full object-cover" viewBox="0 0 1440 180" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="650" cy="90" r="140" stroke="white" stroke-width="2" opacity="0.12" />
            <circle cx="650" cy="90" r="220" stroke="white" stroke-width="2" opacity="0.08" />
            <circle cx="650" cy="90" r="300" stroke="white" stroke-width="2" opacity="0.05" />
            <circle cx="650" cy="90" r="380" stroke="white" stroke-width="2" opacity="0.02" />
        </svg>
    </div>
    
    <!-- Content Container -->
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-6 px-6 sm:px-8 lg:px-12 relative z-10">
        
        <!-- Left Side: Copywriting Content -->
        <div class="text-center md:text-left space-y-1.5 max-w-xl">
            <h3 class="text-xl sm:text-2xl md:text-3xl font-extrabold text-white leading-tight tracking-tight capitalize">
                Schedule a free Demo
            </h3>
            <p class="text-white/90 text-sm font-medium leading-relaxed">
                A member of our team will get in touch with you in 12 hours.
            </p>
        </div>

        <!-- Right Side: Clickable Telephone Widget -->
        <a href="tel:800-640-6409" 
           class="group flex items-center gap-4 transition-all duration-300 transform hover:scale-105 select-none outline-none focus:outline-none">
            
            <!-- White Ring Telephone Icon Container -->
            <div class="relative flex items-center justify-center w-12 h-12 md:w-14 md:h-14 rounded-full border-2 border-white/80 group-hover:border-white transition-colors duration-300 bg-white/5 group-hover:bg-white/10 shrink-0">
                <!-- Inner animated pulse ring -->
                <span class="absolute inline-flex h-full w-full rounded-full bg-white/20 opacity-0 group-hover:animate-ping"></span>
                <!-- Custom Phone Icon -->
                <svg class="w-5 h-5 md:w-6 md:h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                </svg>
            </div>
            
            <!-- Number Display -->
            <div class="flex flex-col text-left">
                <span class="text-[10px] md:text-[11px] font-black text-white/80 uppercase tracking-widest leading-none mb-1">
                    Call us at
                </span>
                <span class="text-lg md:text-2xl font-black text-white leading-tight group-hover:underline decoration-white/60 decoration-2 underline-offset-4 transition-all">
                    800-640-6409
                </span>
            </div>

        </a>

    </div>
</section>

@endsection