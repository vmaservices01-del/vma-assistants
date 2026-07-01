<header class="bg-white sticky top-0 z-50 border-b border-gray-100" x-data="{ openMenu: null }">
    <div class="container mx-auto px-6 py-4 flex items-center justify-between">
        
        <!-- Logo -->
        @php
            $logo = \App\Models\Media::where('file_path', 'media/PSJmF2R7qYgOhBIRcu2bDNLMaG4soxi9erT8bOTO.svg')->first();
        @endphp

        @if($logo)
            <a href="/" class="flex items-center">
                <!-- We use a div instead of an img tag to apply the mask -->
                <div 
                    style="
                        background-color: var(--primary-color); 
                        mask: url('{{ asset('storage/' . $logo->file_path) }}') no-repeat center;
                        -webkit-mask: url('{{ asset('storage/' . $logo->file_path) }}') no-repeat center;
                        mask-size: contain;
                        -webkit-mask-size: contain;
                    " 
                    class="h-6 w-40" 
                    aria-label="Logo">
                </div>
            </a>
        @endif

        <!-- Desktop Menu -->
        <nav class="hidden lg:flex items-center gap-2">
            
            <!-- 1. MEGA MENU: "Who We Serve" -->
            <div class="static group" 
                 @mouseenter="openMenu = 'Who We Serve'" 
                 @mouseleave="openMenu = null">
                
                <button class="px-4 py-2 font-bold text-gray-600 group-hover:text-[var(--primary-color)] transition flex items-center">
                    Services 
                    <!-- Arrow animation removed -->
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </button>
                
                <!-- Mega Menu Dropdown -->
                <!-- Center logic: left-1/2 -translate-x-1/2 centers it to the first 'relative' parent (the Navbar) -->
                <div x-show="openMenu === 'Who We Serve'" 
                     x-cloak 
                     x-transition:enter="transition ease-out duration-200"
                     x-transition:enter-start="opacity-0 translate-y-2"
                     x-transition:leave="transition ease-in duration-150"
                     class="absolute left-1/2 -translate-x-1/2 top-full pt-0 w-[900px] z-50">
                    
                    <div class="bg-white rounded-[2rem] shadow-[0_20px_50px_rgba(0,0,0,0.1)] border border-gray-100 p-10">
                        <div class="grid grid-cols-2 gap-x-12 gap-y-10">
                             @php
                                $industries = [
                                    ['title' => 'Healthcare', 'desc' => 'Medical billing, RCM, patient intake & scribing', 'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5v14M5 12h14"/></svg>', 'roles' => ['Medical Assistant', 'Medical Scribe', 'Medical Receptionist']],
                                    ['title' => 'Dental', 'desc' => 'Insurance verification, treatment plans & billing', 'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2C8 2 7 5 7 7c0 3 2 5 2 8s-2 5-2 5c0 2 2 2 5 2s5 0 5-2c0 0-2-2-2-5s2-5 2-8c0-2-1-5-5-5z"/></svg>', 'roles' => ['Dental Billing Specialist', 'Dental Insurance Coordinator', 'Dental Receptionist']],
                                    ['title' => 'Insurance', 'desc' => 'Policy processing, claims & underwriting', 'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>', 'roles' => ['Underwriting Assistant', 'Insurance CSR', 'Claims Processing']],
                                    ['title' => 'Accounting', 'desc' => 'Bookkeeping, AP/AR & tax prep support', 'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>', 'roles' => ['Bookkeeper', 'Tax Preparer', 'AP Specialist']],
                                ];
                            @endphp

                            @foreach($industries as $industry)
                                <div class="flex flex-col gap-3 group/item">
                                    <div class="flex items-start gap-4 text-left">
                                        <div class="w-10 h-10 flex-shrink-0 flex items-center justify-center bg-gray-50 rounded-xl border border-gray-100 transition-colors group-hover/item:border-[var(--primary-color)] group-hover/item:bg-[var(--primary-color)]/5">
                                            <div class="w-5 h-5 text-gray-600 transition-colors group-hover/item:text-[var(--primary-color)]">
                                                {!! $industry['icon'] !!}
                                            </div>
                                        </div>
                                        <div>
                                            <h3 class="font-extrabold text-gray-900 text-[15px] leading-tight">{{ $industry['title'] }}</h3>
                                            <p class="text-xs text-gray-500 leading-normal mt-0.5">{{ $industry['desc'] }}</p>
                                        </div>
                                    </div>
                                    
                                    <ul class="pl-[56px] space-y-2 text-left">
                                        @foreach($industry['roles'] as $role)
                                            <li class="text-[13px] text-gray-600 hover:text-[var(--primary-color)] cursor-pointer transition-colors font-medium">
                                                {{ $role }}
                                            </li>
                                        @endforeach
                                    </ul>
                                    
                                    <a href="#" class="pl-[56px] text-[var(--primary-color)] font-extrabold text-[12px] mt-2 flex items-center gap-1 hover:underline decoration-2 underline-offset-4">
                                        See {{ $industry['title'] }} Roles
                                        <span>→</span>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <style>
                /* Prevents Alpine.js flash on page load */
                [x-cloak] { display: none !important; }
            </style>

            <!-- 2. VERTICAL DROPDOWNS: Why Edge, Company, Resources -->
            @foreach(['Our Expertise'] as $label)
                <div class="relative" @mouseleave="openMenu = null">
                    <button @mouseenter="openMenu = '{{ $label }}'" 
                            class="px-4 py-2 font-medium text-gray-600 hover:text-[var(--primary-color)] transition flex items-center">
                        {{ $label }} <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"></path></svg>
                    </button>

                    <!-- Vertical Dropdown -->
                    <div x-show="openMenu === '{{ $label }}'" x-cloak class="absolute left-0 top-full mt-0 w-72 bg-white rounded-2xl shadow-2xl border border-gray-100 p-2 z-50">
                        <a href="/dental-billing" class="flex items-start gap-4 p-3 rounded-xl hover:bg-gray-50 transition">
                            <div class="w-10 h-10 flex items-center justify-center bg-gray-50 rounded-lg text-lg border">
                                <!-- Icon size changed to w-5 h-5 and color changed to text-gray-900 -->
                                <svg class="w-5 h-5 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 2C8 2 6 5 6 9c0 4 2 6 6 10s6-6 6-10c0-4-2-7-6-7z" />
                                    <circle cx="12" cy="9" r="2" />
                                    <path d="M12 11v2" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-sm font-bold text-gray-900">Dental Billing Services</h4>
                                <p class="text-xs text-gray-500">Short description goes here</p>
                            </div>
                        </a>

                        <a href="/dme-billing-service" class="flex items-start gap-4 p-3 rounded-xl hover:bg-gray-50 transition">
                            <div class="w-10 h-10 flex items-center justify-center bg-gray-50 rounded-lg text-lg border">
                                <svg class="w-5 h-5 text-gray-900" fill="none" stroke="#000" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M9 20a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                    <path d="M20 20a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-sm font-bold text-gray-900">DME Billing Services</h4>
                                <p class="text-xs text-gray-500">Short description goes here</p>
                            </div>
                        </a>
                        <a href="/hospital-billing-service" class="flex items-start gap-4 p-3 rounded-xl hover:bg-gray-50 transition">
                            <div class="w-10 h-10 flex items-center justify-center bg-gray-50 rounded-lg text-lg border">
                                <svg class="w-5 h-5 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z" />
                                    <path d="M17 21v-8a1 1 0 0 0-1-1H8a1 1 0 0 0-1 1v8" />
                                    <path d="M12 3v4a1 1 0 0 0 1 1h4" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-sm font-bold text-gray-900">Hospital Billing Services</h4>
                                <p class="text-xs text-gray-500">Short description goes here</p>
                            </div>
                        </a>
                        <a href="/medical-group-practice" class="flex items-start gap-4 p-3 rounded-xl hover:bg-gray-50 transition">
                            <div class="w-10 h-10 flex items-center justify-center bg-gray-50 rounded-lg text-lg border">
                                <svg class="w-5 h-5 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-sm font-bold text-gray-900">Medical Group Practices</h4>
                                <p class="text-xs text-gray-500">Short description goes here</p>
                            </div>
                        </a>
                        <a href="/physician-billing-service" class="flex items-start gap-4 p-3 rounded-xl hover:bg-gray-50 transition">
                            <div class="w-10 h-10 flex items-center justify-center bg-gray-50 rounded-lg text-lg border">
                                <svg class="w-5 h-5 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-sm font-bold text-gray-900">Physician Billing Services</h4>
                                <p class="text-xs text-gray-500">Short description goes here</p>
                            </div>
                        </a>
                        <a href="/pharmacy-billing-service" class="flex items-start gap-4 p-3 rounded-xl hover:bg-gray-50 transition">
                            <div class="w-10 h-10 flex items-center justify-center bg-gray-50 rounded-lg text-lg border">
                                <svg class="w-5 h-5 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M10 14a2 2 0 1 0 4 0 2 2 0 1 0-4 0z"></path>
                                    <path d="M12 2v2"></path>
                                    <path d="M12 22v-2"></path>
                                    <path d="M16 14v4a2 2 0 0 1-2 2h-4a2 2 0 0 1-2-2v-4"></path>
                                    <path d="M16 10V6a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v4"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-sm font-bold text-gray-900">Pharmacy Billing Services</h4>
                                <p class="text-xs text-gray-500">Short description goes here</p>
                            </div>
                        </a>
                        <a href="/urgent-care" class="flex items-start gap-4 p-3 rounded-xl hover:bg-gray-50 transition">
                            <div class="w-10 h-10 flex items-center justify-center bg-gray-50 rounded-lg text-lg border">
                                <svg class="w-5 h-5 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M22 12h-4l-3 9L9 3l-3 9H2" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-sm font-bold text-gray-900">Urgent Care</h4>
                                <p class="text-xs text-gray-500">Short description goes here</p>
                            </div>
                        </a>
                    </div>
                   
                </div>
            @endforeach

            <a href="#" class="px-4 py-2 text-gray-600 hover:text-[var(--primary-color)] font-medium">Specialties</a>
            <a href="#" class="px-4 py-2 text-gray-600 hover:text-[var(--primary-color)] font-medium">Company</a>

            @foreach(['Resources'] as $label)
                <div class="relative" @mouseleave="openMenu = null">
                    <button @mouseenter="openMenu = '{{ $label }}'" 
                            class="px-4 py-2 font-medium text-gray-600 hover:text-[var(--primary-color)] transition flex items-center">
                        {{ $label }} <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"></path></svg>
                    </button>

                    <!-- Vertical Dropdown -->
                    <div x-show="openMenu === '{{ $label }}'" x-cloak class="absolute left-0 top-full mt-0 w-72 bg-white rounded-2xl shadow-2xl border border-gray-100 p-2 z-50">
                        <a href="/blog" class="flex items-start gap-4 p-3 rounded-xl hover:bg-gray-50 transition">
                            <div class="w-10 h-10 flex items-center justify-center bg-gray-50 rounded-lg text-lg border">
                                <svg class="w-5 h-5 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-sm font-bold text-gray-900">Blog</h4>
                                <p class="text-xs text-gray-500">Short description goes here</p>
                            </div>
                        </a>
                        <a href="#" class="flex items-start gap-4 p-3 rounded-xl hover:bg-gray-50 transition">
                            <div class="w-10 h-10 flex items-center justify-center bg-gray-50 rounded-lg text-lg border">
                                <svg class="w-5 h-5 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-sm font-bold text-gray-900">How It Works</h4>
                                <p class="text-xs text-gray-500">Short description goes here</p>
                            </div>
                        </a>
                        <a href="#" class="flex items-start gap-4 p-3 rounded-xl hover:bg-gray-50 transition">
                            <div class="w-10 h-10 flex items-center justify-center bg-gray-50 rounded-lg text-lg border">
                                <svg class="w-5 h-5 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-sm font-bold text-gray-900">Security Complaince</h4>
                                <p class="text-xs text-gray-500">Short description goes here</p>
                            </div>
                        </a>
                        <a href="#" class="flex items-start gap-4 p-3 rounded-xl hover:bg-gray-50 transition">
                            <div class="w-10 h-10 flex items-center justify-center bg-gray-50 rounded-lg text-lg border">
                                <svg class="w-5 h-5 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-sm font-bold text-gray-900">FAQ's</h4>
                                <p class="text-xs text-gray-500">Short description goes here</p>
                            </div>
                        </a>
                        <a href="#" class="flex items-start gap-4 p-3 rounded-xl hover:bg-gray-50 transition">
                            <div class="w-10 h-10 flex items-center justify-center bg-gray-50 rounded-lg text-lg border">
                                <!-- The Icon -->
                                 <svg class="w-5 h-5 text-gray-900" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M11 6H6a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2h-5" />
                                    <path d="M11 6l-3 4h3" />
                                    <path d="M20 6l-3 4h3" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-sm font-bold text-gray-900">Testimonials</h4>
                                <p class="text-xs text-gray-500">Short description goes here</p>
                            </div>
                        </a>
                        <a href="#" class="flex items-start gap-4 p-3 rounded-xl hover:bg-gray-50 transition">
                            <div class="w-10 h-10 flex items-center justify-center bg-gray-50 rounded-lg text-lg border">
                                <svg class="w-5 h-5 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                                    <path d="M12 11v4" />
                                    <path d="M10 13h4" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-sm font-bold text-gray-900">Privacy Policy</h4>
                                <p class="text-xs text-gray-500">Short description goes here</p>
                            </div>
                        </a>
                        <a href="#" class="flex items-start gap-4 p-3 rounded-xl hover:bg-gray-50 transition">
                            <div class="w-10 h-10 flex items-center justify-center bg-gray-50 rounded-lg text-lg border">
                                <svg class="w-5 h-5 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <path d="M14 2v6h6"></path>
                                    <path d="M16 13h-4"></path>
                                    <path d="M14 11v4"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-sm font-bold text-gray-900">Terms and Conditions</h4>
                                <p class="text-xs text-gray-500">Short description goes here</p>
                            </div>
                        </a>
                    </div>
                   
                </div>
            @endforeach

            <a href="#" class="px-4 py-2 text-gray-600 hover:text-[var(--primary-color)] font-medium">Career</a>
        </nav>

        <!-- Right Side Actions -->
        <div class="hidden lg:flex items-center gap-4">
            <a href="#" class="text-white px-5 py-2 rounded-lg font-semibold text-sm bg-primary transition-all duration-300 hover:opacity-80">Book a Demo</a>
        </div>

        <!-- Mobile Menu Button -->
        <button class="lg:hidden p-2 text-gray-600" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden lg:hidden bg-white border-b px-6 py-4 space-y-4">
        <a href="#" class="block text-gray-600">Who We Serve</a>
        <a href="#" class="block text-gray-600">Why Edge</a>
        <a href="#" class="block text-gray-600">Company</a>
        <a href="#" class="block text-gray-600">Resources</a>
        <hr>
        <a href="#" class="block w-full text-center text-white py-2 rounded bg-primary transition-all duration-300 hover:opacity-80">
           Book a Demo
        </a>
    </div>
</header>