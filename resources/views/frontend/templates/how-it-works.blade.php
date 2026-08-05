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
<section id="hero-section" class="relative w-full min-h-50 flex items-center justify-center bg-[#0a1931] py-20 px-6 overflow-hidden">
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[1000px] h-[600px] bg-[var(--primary)]/10 blur-[120px] rounded-full -z-0"></div>

    <div class="relative z-10 max-w-4xl mx-auto text-center">
        <!-- Dynamic Badge -->
        <span class="inline-block px-5 py-2 rounded-full bg-[var(--primary)]/10 text-[var(--primary)] text-[11px] font-bold uppercase tracking-[0.12em] mb-10 border border-[var(--primary)]/20 animate-fade-in">
            ✦ TRUSTED BY HEALTHCARE TEAMS
        </span>

        <h1 class="text-2xl md:text-3xl lg:text-5xl max-w-4xl mx-auto font-extrabold text-white leading-[1.1] tracking-tight mb-8 text-balance">
           How It Works
        </h1>

        <p class="max-w-3xl mx-auto text-lg text-slate-300 mb-12 text-[16px]">
           VMA Services makes virtual hiring easy by connecting you with pre-vetted, HIPAA-compliant remote talent.With fast onboarding, you  can get hassle-free staffing that helps you grow.
        </p>

        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-16">
            <a href="/contact" class="w-full sm:w-auto px-10 py-4 bg-[var(--primary)] hover:opacity-90 text-white font-bold rounded-xl transition-all shadow-lg shadow-[var(--primary)]/20 inline-flex items-center justify-center gap-2 group border border-[var(--primary)]/20">
                Schedule a Free Consultation
                <span class="group-hover:translate-x-1 transition-transform">→</span>
            </a>       
        </div>
    </div>
</section>

<!-- SECTION: HOW IT WORKS -->
<section class="relative w-full py-20 px-4 sm:px-6 lg:px-8 bg-slate-50/50 overflow-hidden font-sans">
    
    <!-- Header Area -->
    <div class="max-w-4xl mx-auto text-center mb-16 relative">      
        

        <!-- Overlapping Text Header -->
        <div class="relative z-10 flex flex-col items-center">
            <span class="text-[11px] sm:text-xs font-bold tracking-widest uppercase mb-2 text-primary">
                How It Works
            </span>
            <h2 class="text-3xl sm:text-4xl md:text-[38px] font-extrabold tracking-tight leading-none mb-6"
                style="color: var(--text-dark);">
                How It Works
            </h2>
            <p class="text-[14px] sm:text-[14.5px] text-slate-500 max-w-3xl leading-relaxed mx-auto font-medium">
                Finding the right virtual medical assistant for your practice doesn’t have to be overwhelming. Our proven process makes it simple. From your first call to full onboarding and ongoing support, we take care of everything. Our sourcing, interviewing, and integration focus on delivering the best care for your patients. Whether you’re looking for <a href="#" class="font-bold hover:underline transition-colors text-primary">virtual medical assistant services</a> or the best medical practice virtual assistant services, we make sure you get the perfect fit every time.
            </p>
        </div>

    </div>

    <!-- Process Cards Grid -->
    <div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8 items-stretch relative z-10">
        
        <!-- Step 1 Card -->
        <div class="bg-white rounded-[20px] shadow-[0_20px_50px_rgba(0,0,0,0.04)] p-8 flex flex-col items-center text-center hover:translate-y-[-4px] transition-all duration-300">
            <!-- Background Accent Frame & Image Plate -->
            <div class="relative w-full aspect-[16/11] flex items-center justify-center mb-8 select-none">
                <!-- Soft backdrop plate -->
                <div class="absolute inset-0 bg-slate-100/80 rounded-2xl transform scale-95"></div>
                <!-- Photo sitting on top -->
                <img src="https://images.unsplash.com/photo-1616587894289-86480e533129?q=80&w=400&auto=format&fit=crop" 
                     alt="Candidate Interviews" 
                     class="relative z-10 w-[90%] h-full object-cover rounded-2xl" />
            </div>
            <!-- Title & Copy -->
            <div class="space-y-4 flex-grow flex flex-col justify-start">
                <h3 class="text-[17px] font-black leading-snug" style="color: var(--text-dark);">
                    Tell us what you need
                </h3>
                <p class="text-[12.5px] sm:text-[13px] text-slate-500 leading-relaxed font-medium">
                    Every practice is unique and so are your staffing needs. We start with a quick discovery call where you share your requirements: hours, language skills, specific medical expertise, and even personality traits you’d like your assistant to have. This helps us match you with the right medical virtual assistant services from the start.
                </p>
            </div>
        </div>

        <!-- Step 2 Card -->
        <div class="bg-white rounded-[20px] shadow-[0_20px_50px_rgba(0,0,0,0.04)] p-8 flex flex-col items-center text-center hover:translate-y-[-4px] transition-all duration-300">
            <!-- Background Accent Frame & Image Plate -->
             <div class="relative w-full aspect-[16/11] flex items-center justify-center mb-8 select-none">
                <!-- Soft backdrop plate -->
                <div class="absolute inset-0 bg-slate-100/80 rounded-2xl transform scale-95"></div>
                <!-- Photo sitting on top -->
                <img src="https://images.unsplash.com/photo-1616587894289-86480e533129?q=80&w=400&auto=format&fit=crop" 
                     alt="Candidate Interviews" 
                     class="relative z-10 w-[90%] h-full object-cover rounded-2xl" />
            </div>
            <!-- Title & Copy -->
            <div class="space-y-4 flex-grow flex flex-col justify-start">
                <h3 class="text-[17px] font-black leading-snug" style="color: var(--text-dark);">
                    Personalized Search &<br> Matching
                </h3>
                <p class="text-[12.5px] sm:text-[13px] text-slate-500 leading-relaxed font-medium">
                    Once we understand your needs, our team goes to work. We carefully source and hand-pick top candidates from our pool of trained professionals in medical virtual assistant services. You don’t waste time sorting through resumes because we present only the best options tailored to your practice.
                </p>
            </div>
        </div>

        <!-- Step 3 Card -->
        <div class="bg-white rounded-[20px] shadow-[0_20px_50px_rgba(0,0,0,0.04)] p-8 flex flex-col items-center text-center hover:translate-y-[-4px] transition-all duration-300">
            <!-- Background Accent Frame & Image Plate -->
            <div class="relative w-full aspect-[16/11] flex items-center justify-center mb-8 select-none">
                <!-- Soft backdrop plate -->
                <div class="absolute inset-0 bg-slate-100/80 rounded-2xl transform scale-95"></div>
                <!-- Photo sitting on top -->
                <img src="https://images.unsplash.com/photo-1616587894289-86480e533129?q=80&w=400&auto=format&fit=crop" 
                     alt="Candidate Interviews" 
                     class="relative z-10 w-[90%] h-full object-cover rounded-2xl" />
            </div>
            <!-- Title & Copy -->
            <div class="space-y-4 flex-grow flex flex-col justify-start">
                <h3 class="text-[17px] font-black leading-snug" style="color: var(--text-dark);">
                    Candidate Interviews
                </h3>
                <p class="text-[12.5px] sm:text-[13px] text-slate-500 leading-relaxed font-medium">
                    You’ll meet pre-screened, highly qualified candidates who are ready to step into your practice. Each virtual medical assistant we connect you with has been vetted for skills, reliability, and healthcare knowledge, ensuring a long-term fit that feels seamless from day one.
                </p>
            </div>
        </div>

        <!-- Step 4 Card -->
        <div class="bg-white rounded-[20px] shadow-[0_20px_50px_rgba(0,0,0,0.04)] p-8 flex flex-col items-center text-center hover:translate-y-[-4px] transition-all duration-300">
            <!-- Background Accent Frame & Image Plate -->
            <div class="relative w-full aspect-[16/11] flex items-center justify-center mb-8 select-none">
                <!-- Soft backdrop plate -->
                <div class="absolute inset-0 bg-slate-100/80 rounded-2xl transform scale-95"></div>
                <!-- Photo sitting on top -->
                <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?q=80&w=400&auto=format&fit=crop" 
                     alt="Onboarding and support" 
                     class="relative z-10 w-[90%] h-full object-cover rounded-2xl" />
            </div>
            <!-- Title & Copy -->
            <div class="space-y-4 flex-grow flex flex-col justify-start">
                <h3 class="text-[17px] font-black leading-snug" style="color: var(--text-dark);">
                    Onboarding and support
                </h3>
                <p class="text-[12.5px] sm:text-[13px] text-slate-500 leading-relaxed font-medium">
                    Once you choose your assistant, we guide you through a smooth onboarding process. Plus, you’ll have a dedicated Success Manager to provide ongoing support. So your best medical practice virtual assistant services continue to deliver value every day.
                </p>
            </div>
        </div>

    </div>
</section>


<section class="py-24 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">
            
            <!-- Left Side: Form (7 Columns) -->
            <div class="lg:col-span-7">
                <div class="max-w-xl">
                    <h2 class=" text-[26px] md:text-[36px] font-[900] leading-[1.1] tracking-[-0.04em] text-[#002d5b] mb-4 tracking-tight">
                        Book a Discovery Call
                    </h2>
                    <p class="text-slate-500 text-[16px] mb-10">
                        A quick chat to understand your practice's needs and explore how we can help.
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
                                <option>Eligibility and Benefits Verificatio</option>
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
                            Searching for job openings? Check out our <a href="#" class="text-[var(--primary)] font-bold hover:underline">careers page</a>. By submitting this form, you agree to Teem's Privacy Policy, and to receive email and text messages. You can unsubscribe at any time.
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

<!-- TESTIMONIALS SECTION -->
<section class="relative w-full py-20 px-4 sm:px-6 lg:px-8 bg-slate-50 overflow-hidden font-sans">
    
    <!-- Centered Header Block -->
    <div class="max-w-4xl mx-auto text-center mb-12 relative z-10">
        <span class="text-xs font-bold tracking-widest uppercase mb-2 block text-indigo-600">
            Testimonials
        </span>
        <h2 class="text-3xl sm:text-4xl md:text-4xl font-extrabold tracking-tight leading-none mb-6 text-black flex items-center justify-center">
            Customers Reviews
        </h2>
    </div>

    <!-- Interactive Slider Container (AlpineJS driven) -->
    <div class="max-w-6xl mx-auto relative z-10" 
         x-data="{ 
            activeSlide: 0,
            slides: [
                {
                    quote: 'VMA Services was the best choice I made. They has been Very Responsive and our after-hours telephone service for over two years. They provide service to three offices in Montana.',
                    author: 'Monty Moni',
                    role: 'CEO, Keen IT Solution',
                    avatar: 'https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=150&auto=format&fit=crop',
                    image: 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=800&auto=format&fit=crop'
                },
                {
                    quote: 'Our patient intake process has improved significantly since hiring our virtual assistant. They handle eligibility verification flawlessly, allowing our in-house staff to focus on direct care.',
                    author: 'Dr. Sarah Jenkins',
                    role: 'Founder, Jenkins Medical Group',
                    avatar: 'https://images.unsplash.com/photo-1559839734-2b71ea197ec2?q=80&w=150&auto=format&fit=crop',
                    image: 'https://images.unsplash.com/photo-1576091160550-2173dba999ef?q=80&w=800&auto=format&fit=crop'
                },
                {
                    quote: 'The virtual chronic care management support has been outstanding. Our patients receive consistent follow-ups, and the documentation in our EMR is always clean and precise.',
                    author: 'Marcus Thorne',
                    role: 'Operations Director, Apex Health',
                    avatar: 'https://images.unsplash.com/photo-1537368910025-700350fe46c7?q=80&w=150&auto=format&fit=crop',
                    image: 'https://images.unsplash.com/photo-1629909613654-28e377c37b09?q=80&w=800&auto=format&fit=crop'
                }
            ],
            next() {
                this.activeSlide = (this.activeSlide + 1) % this.slides.length;
            },
            prev() {
                this.activeSlide = (this.activeSlide - 1 + this.slides.length) % this.slides.length;
            }
         }"
         x-init="setInterval(() => next(), 8000)"> <!-- Auto rotates every 8 seconds -->

        <!-- Main Card Frame (Using inline styles to guarantee heights on live servers) -->
        <div class="bg-white rounded-3xl shadow-2xl border border-slate-100 overflow-hidden grid grid-cols-1 lg:grid-cols-12 items-stretch" style="min-height: 460px;">
            
            <!-- Left Column: Background Team Photo -->
            <div class="lg:col-span-6 relative overflow-hidden select-none" style="min-height: 280px;">
                <template x-for="(slide, index) in slides" :key="index">
                    <div class="absolute inset-0 w-full h-full"
                         x-show="activeSlide === index"
                         x-transition:enter="transition ease-out duration-500"
                         x-transition:enter-start="opacity-0 scale-105"
                         x-transition:enter-end="opacity-100 scale-100"
                         x-transition:leave="transition ease-in duration-300"
                         x-transition:leave-start="opacity-100"
                         x-transition:leave-end="opacity-0">
                        <img :src="slide.image" 
                             :alt="slide.author" 
                             class="w-full h-full object-cover" />
                    </div>
                </template>
                <!-- Soft Overlay -->
                <div class="absolute inset-0 bg-slate-900/5 pointer-events-none"></div>
            </div>

            <!-- Right Column: Interactive Review Content -->
            <div class="lg:col-span-6 flex flex-col justify-between p-8 sm:p-12 md:p-16 text-center relative bg-white">
                
                <!-- SVG Quote Icon Backdrop -->
                <div class="w-full flex justify-center mb-4 text-indigo-200 select-none">
                    <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M14.017 21v-7.391c0-5.704 3.748-9.762 9-10.914l.983 1.961c-3.147.743-4.833 2.583-5.101 5.518H24v10.826H14.017zM0 13.609c0-5.704 3.748-9.762 9-10.914l.983 1.961c-3.147.743-4.833 2.583-5.101 5.518H10v10.826H0V13.609z"/>
                    </svg>
                </div>

                <!-- Active Review Quote/Author (Using safe min-height) -->
                <div class="relative flex-grow flex flex-col justify-center mb-8" style="min-height: 180px;">
                    <template x-for="(slide, index) in slides" :key="index">
                        <div class="w-full"
                             x-show="activeSlide === index"
                             x-transition:enter="transition ease-out duration-400 delay-100"
                             x-transition:enter-start="opacity-0 translate-x-8"
                             x-transition:enter-end="opacity-100 translate-x-0"
                             x-transition:leave="transition ease-in duration-300 absolute"
                             x-transition:leave-start="opacity-100 translate-x-0"
                             x-transition:leave-end="opacity-0 -translate-x-8">
                            
                            <!-- Testimonial Copy -->
                            <p class="font-serif italic text-slate-600 text-sm md:text-base leading-relaxed mb-6 max-w-md mx-auto">
                                "<span x-text="slide.quote"></span>"
                            </p>

                            <!-- Author Info inside Slide Container -->
                            <div class="flex flex-col items-center">
                                <!-- Circular Avatar -->
                                <img :src="slide.avatar" 
                                     :alt="slide.author" 
                                     class="w-11 h-11 rounded-full object-cover shadow-sm mb-3 select-none" />
                                
                                <h4 class="text-sm sm:text-base font-extrabold text-slate-900 leading-tight mb-1" x-text="slide.author"></h4>
                                <p class="text-xs sm:text-sm text-slate-400 font-medium" x-text="slide.role"></p>
                            </div>

                        </div>
                    </template>
                </div>

                <!-- Slider Navigation Pill/Dot Indicators (Purge-Safe colors) -->
                <div class="flex items-center justify-center gap-2 select-none pt-2">
                    <template x-for="(slide, index) in slides" :key="index">
                        <button @click="activeSlide = index"
                                class="h-2 transition-all duration-300 outline-none focus:outline-none rounded-full"
                                :class="activeSlide === index ? 'w-8 bg-indigo-600' : 'w-2 bg-indigo-200 hover:bg-indigo-300'"></button>
                    </template>
                </div>

            </div>

        </div>

    </div>
</section>

@endsection