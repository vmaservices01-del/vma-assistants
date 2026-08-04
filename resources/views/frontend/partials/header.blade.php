<header class="bg-white sticky top-0 z-50 border-b border-gray-100" x-data="{ openMenu: null, mobileOpen: false, activeMobileSection: null }">
    <div class="container mx-auto px-6 py-4 flex items-center justify-between">
        
        <!-- Logo -->
        @php
            $logo = \App\Models\Media::where('file_path', 'media/PSJmF2R7qYgOhBIRcu2bDNLMaG4soxi9erT8bOTO.svg')->first();
        @endphp

        @if($logo)
            <a href="{{ url('/') }}" class="flex items-center">
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
        @else
            <a href="{{ url('/') }}" class="text-xl font-bold text-gray-900">VMA Assistants</a>
        @endif

        <!-- Desktop Menu -->
        <nav class="hidden lg:flex items-center gap-2">
            
            <!-- 1. MEGA MENU: "Services" -->
            <div class="static group" 
                 @mouseenter="openMenu = 'Services'" 
                 @mouseleave="openMenu = null">
                
                <button class="px-4 py-2 font-bold text-gray-600 group-hover:text-[var(--primary-color)] transition flex items-center">
                    Services 
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </button>
                
                <!-- Mega Menu Dropdown -->
                <div x-show="openMenu === 'Services'" 
                     x-cloak 
                     x-transition:enter="transition ease-out duration-200"
                     x-transition:enter-start="opacity-0 translate-y-2"
                     x-transition:leave="transition ease-in duration-150"
                     class="absolute left-1/2 -translate-x-1/2 top-full pt-0 w-[900px] z-50">
                    
                    <div class="bg-white rounded-[2rem] shadow-[0_20px_50px_rgba(0,0,0,0.1)] border border-gray-100 p-10">
                        <div class="grid grid-cols-2 gap-x-12 gap-y-10">
                             @php
                                $industries = [
                                    [
                                        'title' => 'Healthcare Services', 
                                        'desc' => 'Medical billing, RCM, patient intake & scribing', 
                                        'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5v14M5 12h14"/></svg>', 
                                        'roles' => [
                                            ['name' => 'Medical Receptionist', 'link' => url('services/medical-receptionist')],
                                            ['name' => 'Virtual Medical Scribing', 'link' => url('services/virtual-medical-scribing')],
                                            ['name' => 'Medical Billing & Coding', 'link' => url('services/medical-billing-and-coding')]
                                        ],
                                        'mainLink' => url('medical-group-practice')
                                    ],
                                    [
                                        'title' => 'Dental Services', 
                                        'desc' => 'Insurance verification, treatment plans & billing', 
                                        'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2C8 2 7 5 7 7c0 3 2 5 2 8s-2 5-2 5c0 2 2 2 5 2s5 0 5-2c0 0-2-2-2-5s2-5 2-8c0-2-1-5-5-5z"/></svg>', 
                                        'roles' => [
                                            ['name' => 'Dental Billing Specialist', 'link' => url('dental-billing')],
                                            ['name' => 'Eligibility & Verification', 'link' => url('services/eligibility-and-benefits-verification')],
                                            ['name' => 'Front Desk Expert', 'link' => url('services/front-desk-expert')]
                                        ],
                                        'mainLink' => url('dental-billing')
                                    ],
                                    [
                                        'title' => 'Patient Care & Monitoring', 
                                        'desc' => 'RPM, Chronic Care & Credentialing services', 
                                        'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>', 
                                        'roles' => [
                                            ['name' => 'Remote Patient Monitoring', 'link' => url('services/remote-patient-monitoring')],
                                            ['name' => 'Virtual Chronic Care Management', 'link' => url('services/virtual-chronic-care-management')],
                                            ['name' => 'Provider Credentialing', 'link' => url('services/provider-and-payers-credentialing')]
                                        ],
                                        'mainLink' => url('services/remote-patient-monitoring')
                                    ],
                                    [
                                        'title' => 'Practice Management', 
                                        'desc' => 'AR, Pre-auth & virtual administration', 
                                        'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>', 
                                        'roles' => [
                                            ['name' => 'Account Receivables Service', 'link' => url('services/account-receivable-services')],
                                            ['name' => 'Pre Authorization Services', 'link' => url('services/pre-authorization-services')],
                                            ['name' => 'Virtual Administrative Assistant', 'link' => url('services/virtual-administrative-assistant')]
                                        ],
                                        'mainLink' => url('services/virtual-administrative-assistant')
                                    ],
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
                                            <li>
                                                <a href="{{ $role['link'] }}" class="text-[13px] text-gray-600 hover:text-[var(--primary-color)] cursor-pointer transition-colors font-medium block">
                                                    {{ $role['name'] }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                    
                                    <a href="{{ $industry['mainLink'] }}" class="pl-[56px] text-[var(--primary-color)] font-extrabold text-[12px] mt-2 flex items-center gap-1 hover:underline decoration-2 underline-offset-4">
                                        Explore {{ $industry['title'] }}
                                        <span>→</span>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2. VERTICAL DROPDOWN: "Our Expertise" -->
            <div class="relative" @mouseleave="openMenu = null">
                <button @mouseenter="openMenu = 'Our Expertise'" 
                        class="px-4 py-2 font-bold text-gray-600 hover:text-[var(--primary-color)] transition flex items-center">
                    Our Expertise 
                    <svg class="w-4 h-4 ml-1 transition-transform" :class="openMenu === 'Our Expertise' ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </button>

                <!-- Vertical Dropdown Container (Matches Screenshot Layout) -->
                <div x-show="openMenu === 'Our Expertise'" 
                     x-cloak 
                     class="absolute left-0 top-full mt-0 bg-white rounded-3xl shadow-[0_20px_50px_rgba(0,0,0,0.1)] border border-gray-100 p-2 z-50 space-y-1" style="width: 340px;">
                    
                    <!-- Dental Billing Services -->
                    <a href="{{ url('dental-billing') }}" class="flex items-start gap-4 p-3.5 rounded-2xl hover:bg-gray-50 transition group/item">
                        <div class="w-10 h-10 flex-shrink-0 flex items-center justify-center bg-gray-50 rounded-xl border border-gray-100 transition-colors group-hover/item:border-[var(--primary-color)] group-hover/item:bg-[var(--primary-color)]/5">
                            <svg class="w-5 h-5 text-gray-600 transition-colors group-hover/item:text-[var(--primary-color)]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 2C8 2 7 5 7 7c0 3 2 5 2 8s-2 5-2 5c0 2 2 2 5 2s5 0 5-2c0 0-2-2-2-5s2-5 2-8c0-2-1-5-5-5z" />
                            </svg>
                        </div>
                        <div class="text-left">
                            <h4 class="text-[14px] font-extrabold text-gray-900 leading-tight">Dental Billing Services</h4>
                            <p class="text-xs text-gray-500 leading-normal mt-0.5">Claims, verifications & collections</p>
                        </div>
                    </a>

                    <!-- DME Billing Services -->
                    <a href="{{ url('dme-billing-service') }}" class="flex items-start gap-4 p-3.5 rounded-2xl hover:bg-gray-50 transition group/item">
                        <div class="w-10 h-10 flex-shrink-0 flex items-center justify-center bg-gray-50 rounded-xl border border-gray-100 transition-colors group-hover/item:border-[var(--primary-color)] group-hover/item:bg-[var(--primary-color)]/5">
                            <svg class="w-5 h-5 text-gray-600 transition-colors group-hover/item:text-[var(--primary-color)]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="9" cy="21" r="1"></circle>
                                <circle cx="20" cy="21" r="1"></circle>
                                <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6" />
                            </svg>
                        </div>
                        <div class="text-left">
                            <h4 class="text-[14px] font-extrabold text-gray-900 leading-tight">DME Billing Services</h4>
                            <p class="text-xs text-gray-500 leading-normal mt-0.5">DME claims & equipment billing</p>
                        </div>
                    </a>

                    <!-- Hospital Billing Services -->
                    <a href="{{ url('hospital-billing-service') }}" class="flex items-start gap-4 p-3.5 rounded-2xl hover:bg-gray-50 transition group/item">
                        <div class="w-10 h-10 flex-shrink-0 flex items-center justify-center bg-gray-50 rounded-xl border border-gray-100 transition-colors group-hover/item:border-[var(--primary-color)] group-hover/item:bg-[var(--primary-color)]/5">
                            <svg class="w-5 h-5 text-gray-600 transition-colors group-hover/item:text-[var(--primary-color)]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z" />
                                <path d="M17 21v-8a1 1 0 0 0-1-1H8a1 1 0 0 0-1 1v8" />
                            </svg>
                        </div>
                        <div class="text-left">
                            <h4 class="text-[14px] font-extrabold text-gray-900 leading-tight">Hospital Billing Services</h4>
                            <p class="text-xs text-gray-500 leading-normal mt-0.5">Inpatient & outpatient RCM</p>
                        </div>
                    </a>

                    <!-- Medical Group Practices -->
                    <a href="{{ url('medical-group-practice') }}" class="flex items-start gap-4 p-3.5 rounded-2xl hover:bg-gray-50 transition group/item">
                        <div class="w-10 h-10 flex-shrink-0 flex items-center justify-center bg-gray-50 rounded-xl border border-gray-100 transition-colors group-hover/item:border-[var(--primary-color)] group-hover/item:bg-[var(--primary-color)]/5">
                            <svg class="w-5 h-5 text-gray-600 transition-colors group-hover/item:text-[var(--primary-color)]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                <circle cx="9" cy="7" r="4" />
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                            </svg>
                        </div>
                        <div class="text-left">
                            <h4 class="text-[14px] font-extrabold text-gray-900 leading-tight">Medical Group Practices</h4>
                            <p class="text-xs text-gray-500 leading-normal mt-0.5">Multi-specialty billing solutions</p>
                        </div>
                    </a>

                    <!-- Physician Billing Services -->
                    <a href="{{ url('physician-billing-service') }}" class="flex items-start gap-4 p-3.5 rounded-2xl hover:bg-gray-50 transition group/item">
                        <div class="w-10 h-10 flex-shrink-0 flex items-center justify-center bg-gray-50 rounded-xl border border-gray-100 transition-colors group-hover/item:border-[var(--primary-color)] group-hover/item:bg-[var(--primary-color)]/5">
                            <svg class="w-5 h-5 text-gray-600 transition-colors group-hover/item:text-[var(--primary-color)]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" />
                                <circle cx="12" cy="7" r="4" />
                            </svg>
                        </div>
                        <div class="text-left">
                            <h4 class="text-[14px] font-extrabold text-gray-900 leading-tight">Physician Billing Services</h4>
                            <p class="text-xs text-gray-500 leading-normal mt-0.5">Solo & practice revenue management</p>
                        </div>
                    </a>

                    <!-- Pharmacy Billing Services -->
                    <a href="{{ url('pharmacy-billing-service') }}" class="flex items-start gap-4 p-3.5 rounded-2xl hover:bg-gray-50 transition group/item decoration-transparent">
                        <div class="w-10 h-10 flex-shrink-0 flex items-center justify-center bg-gray-50 rounded-xl border border-gray-100 transition-colors group-hover/item:border-[var(--primary-color)] group-hover/item:bg-[var(--primary-color)]/5">
                            <svg class="w-5 h-5 text-gray-600 transition-colors group-hover/item:text-[var(--primary-color)]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m10.5 20.5 10-10a4.95 4.95 0 1 0-7-7l-10 10a4.95 4.95 0 1 0 7 7Z" />
                                <path d="m8.5 8.5 7 7" />
                            </svg>
                        </div>
                        <div class="text-left">
                            <h4 class="text-[14px] font-extrabold text-gray-900 leading-tight">Pharmacy Billing Services</h4>
                            <p class="text-xs text-gray-500 leading-normal mt-0.5">Prescription & Rx claim processing</p>
                        </div>
                    </a>

                    <!-- Urgent Care -->
                    <a href="{{ url('urgent-care') }}" class="flex items-start gap-4 p-3.5 rounded-2xl hover:bg-gray-50 transition group/item">
                        <div class="w-10 h-10 flex-shrink-0 flex items-center justify-center bg-gray-50 rounded-xl border border-gray-100 transition-colors group-hover/item:border-[var(--primary-color)] group-hover/item:bg-[var(--primary-color)]/5">
                            <svg class="w-5 h-5 text-gray-600 transition-colors group-hover/item:text-[var(--primary-color)]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 12h-4l-3 9L9 3l-3 9H2" />
                            </svg>
                        </div>
                        <div class="text-left">
                            <h4 class="text-[14px] font-extrabold text-gray-900 leading-tight">Urgent Care</h4>
                            <p class="text-xs text-gray-500 leading-normal mt-0.5">Fast acute care billing workflow</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Direct Nav Links -->
            <a href="{{ url('specialty') }}" class="px-4 py-2 text-gray-600 hover:text-[var(--primary-color)] font-medium">Specialties</a>
            <a href="{{ url('about-us') }}" class="px-4 py-2 text-gray-600 hover:text-[var(--primary-color)] font-medium">Company</a>

            <!-- 3. VERTICAL DROPDOWN: "Resources" -->
            <div class="relative" @mouseleave="openMenu = null">
                <button @mouseenter="openMenu = 'Resources'" 
                        class="px-4 py-2 font-medium text-gray-600 hover:text-[var(--primary-color)] transition flex items-center">
                    Resources <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"></path></svg>
                </button>

                <!-- Vertical Dropdown -->
                <div x-show="openMenu === 'Resources'" x-cloak class="absolute left-0 top-full mt-0 w-72 bg-white rounded-2xl shadow-2xl border border-gray-100 p-2 z-50">
                    <a href="{{ url('blog') }}" class="flex items-start gap-4 p-3 rounded-xl hover:bg-gray-50 transition">
                        <div class="w-10 h-10 flex items-center justify-center bg-gray-50 rounded-lg text-lg border">
                            <svg class="w-5 h-5 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-gray-900">Blog & News</h4>
                            <p class="text-xs text-gray-500">Healthcare insights & updates</p>
                        </div>
                    </a>

                    <a href="{{ url('how-it-works') }}" class="flex items-start gap-4 p-3 rounded-xl hover:bg-gray-50 transition">
                        <div class="w-10 h-10 flex items-center justify-center bg-gray-50 rounded-lg text-lg border">
                            <svg class="w-5 h-5 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-gray-900">How It Works</h4>
                            <p class="text-xs text-gray-500">Our seamless 4-step hiring process</p>
                        </div>
                    </a>

                    <a href="{{ url('vma-compliance') }}" class="flex items-start gap-4 p-3 rounded-xl hover:bg-gray-50 transition">
                        <div class="w-10 h-10 flex items-center justify-center bg-gray-50 rounded-lg text-lg border">
                            <svg class="w-5 h-5 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-gray-900">Security & Compliance</h4>
                            <p class="text-xs text-gray-500">HIPAA, SOC 2 & GDPR standards</p>
                        </div>
                    </a>

                    <a href="{{ url('why-vm-assistant') }}" class="flex items-start gap-4 p-3 rounded-xl hover:bg-gray-50 transition">
                        <div class="w-10 h-10 flex items-center justify-center bg-gray-50 rounded-lg text-lg border">
                            <svg class="w-5 h-5 text-gray-900" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M11 6H6a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2h-5" />
                                <path d="M11 6l-3 4h3" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-gray-900">Why VM Assistant</h4>
                            <p class="text-xs text-gray-500">Client success & key benefits</p>
                        </div>
                    </a>

                    <a href="{{ url('trust-and-security') }}" class="flex items-start gap-4 p-3 rounded-xl hover:bg-gray-50 transition">
                        <div class="w-10 h-10 flex items-center justify-center bg-gray-50 rounded-lg text-lg border">
                            <svg class="w-5 h-5 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-gray-900">Trust & Security</h4>
                            <p class="text-xs text-gray-500">Data protection & privacy protocol</p>
                        </div>
                    </a>

                    <a href="{{ url('contact') }}" class="flex items-start gap-4 p-3 rounded-xl hover:bg-gray-50 transition">
                        <div class="w-10 h-10 flex items-center justify-center bg-gray-50 rounded-lg text-lg border">
                            <svg class="w-5 h-5 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-gray-900">Contact & FAQs</h4>
                            <p class="text-xs text-gray-500">Get in touch with our team</p>
                        </div>
                    </a>
                </div>
            </div>

            <a href="{{ url('contact') }}" class="px-4 py-2 text-gray-600 hover:text-[var(--primary-color)] font-medium">Careers</a>
        </nav>

        <!-- Right Side Actions -->
        <div class="hidden lg:flex items-center gap-4">
            <a href="{{ url('contact') }}" class="text-white px-5 py-2 rounded-lg font-semibold text-sm bg-primary transition-all duration-300 hover:opacity-80">
                Book a Demo
            </a>
        </div>

        <!-- Mobile Menu Button (Interactive using Alpine.js state) -->
        <button class="lg:hidden p-2 text-gray-600 focus:outline-none" @click="mobileOpen = !mobileOpen">
            <!-- Hamburger Icon (Shows when menu is closed) -->
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" x-show="!mobileOpen">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
            <!-- Close Icon (Shows when menu is open) -->
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" x-show="mobileOpen" x-cloak>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>

    <!-- Mobile Menu Container -->
    <div id="mobile-menu" 
         x-show="mobileOpen" 
         x-cloak 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-4"
         x-transition:enter-end="opacity-100 translate-y-0"
         class="lg:hidden bg-white border-t px-6 py-4 space-y-2 max-h-[85vh] overflow-y-auto">
         
        <!-- 1. Mobile Accordion: Services -->
        <div>
            <button @click="activeMobileSection = activeMobileSection === 'services' ? null : 'services'"
                    class="flex items-center justify-between w-full py-2 font-bold text-gray-700 hover:text-primary transition text-left">
                <span>Services</span>
                <svg class="w-4 h-4 transform transition-transform duration-200" :class="activeMobileSection === 'services' ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </button>
            
            <div x-show="activeMobileSection === 'services'" x-cloak class="pl-4 border-l border-gray-100 mt-2 space-y-4 pb-2">
                @foreach($industries as $industry)
                    <div>
                        <span class="block text-xs font-extrabold uppercase tracking-wider text-[var(--primary-color)] mb-1">{{ $industry['title'] }}</span>
                        <div class="space-y-1.5 pl-1">
                            @foreach($industry['roles'] as $role)
                                <a href="{{ $role['link'] }}" class="block text-sm font-medium text-gray-600 hover:text-primary py-0.5">{{ $role['name'] }}</a>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- 2. Mobile Accordion: Our Expertise -->
        <div>
            <button @click="activeMobileSection = activeMobileSection === 'expertise' ? null : 'expertise'"
                    class="flex items-center justify-between w-full py-2 font-bold text-gray-700 hover:text-primary transition text-left">
                <span>Our Expertise</span>
                <svg class="w-4 h-4 transform transition-transform duration-200" :class="activeMobileSection === 'expertise' ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </button>
            
            <div x-show="activeMobileSection === 'expertise'" x-cloak class="pl-4 border-l border-gray-100 mt-1 space-y-2 pb-2">
                <a href="{{ url('dental-billing') }}" class="block text-sm font-medium text-gray-600 hover:text-primary py-1">Dental Billing Services</a>
                <a href="{{ url('dme-billing-service') }}" class="block text-sm font-medium text-gray-600 hover:text-primary py-1">DME Billing Services</a>
                <a href="{{ url('hospital-billing-service') }}" class="block text-sm font-medium text-gray-600 hover:text-primary py-1">Hospital Billing Services</a>
                <a href="{{ url('medical-group-practice') }}" class="block text-sm font-medium text-gray-600 hover:text-primary py-1">Medical Group Practices</a>
                <a href="{{ url('physician-billing-service') }}" class="block text-sm font-medium text-gray-600 hover:text-primary py-1">Physician Billing Services</a>
                <a href="{{ url('pharmacy-billing-service') }}" class="block text-sm font-medium text-gray-600 hover:text-primary py-1">Pharmacy Billing Services</a>
                <a href="{{ url('urgent-care') }}" class="block text-sm font-medium text-gray-600 hover:text-primary py-1">Urgent Care</a>
            </div>
        </div>

        <!-- Static Mobile Links -->
        <a href="{{ url('specialty') }}" class="block py-2 font-bold text-gray-700 hover:text-primary">Specialties</a>
        <a href="{{ url('about-us') }}" class="block py-2 font-bold text-gray-700 hover:text-primary">Company</a>

        <!-- 3. Mobile Accordion: Resources -->
        <div>
            <button @click="activeMobileSection = activeMobileSection === 'resources' ? null : 'resources'"
                    class="flex items-center justify-between w-full py-2 font-bold text-gray-700 hover:text-primary transition text-left">
                <span>Resources</span>
                <svg class="w-4 h-4 transform transition-transform duration-200" :class="activeMobileSection === 'resources' ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </button>
            
            <div x-show="activeMobileSection === 'resources'" x-cloak class="pl-4 border-l border-gray-100 mt-1 space-y-2 pb-2">
                <a href="{{ url('blog') }}" class="block text-sm font-medium text-gray-600 hover:text-primary py-1">Blog & News</a>
                <a href="{{ url('how-it-works') }}" class="block text-sm font-medium text-gray-600 hover:text-primary py-1">How It Works</a>
                <a href="{{ url('vma-compliance') }}" class="block text-sm font-medium text-gray-600 hover:text-primary py-1">Security & Compliance</a>
                <a href="{{ url('why-vm-assistant') }}" class="block text-sm font-medium text-gray-600 hover:text-primary py-1">Why VM Assistant</a>
                <a href="{{ url('trust-and-security') }}" class="block text-sm font-medium text-gray-600 hover:text-primary py-1">Trust & Security</a>
                <a href="{{ url('contact') }}" class="block text-sm font-medium text-gray-600 hover:text-primary py-1">Contact & FAQs</a>
            </div>
        </div>

        <a href="{{ url('contact') }}" class="block py-2 font-bold text-gray-700 hover:text-primary">Careers</a>
        
        <!-- Mobile Actions -->
        <hr class="my-2 border-gray-100">
        <a href="{{ url('contact') }}" class="block w-full text-center text-white py-2.5 rounded-lg bg-primary font-semibold transition-all duration-300 hover:opacity-80">
           Book a Demo
        </a>
    </div>
</header>