<footer class="bg-white py-12 border-t border-gray-100">
    <div class="container mx-auto px-6">
        
        <!-- Grid layout: 1 col on mobile, 2 col on tablet, 5 col on desktop -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
            
            @php
                $company = [
                    'About Us' => url('about-us'),
                    'Why VM Assistant' => url('why-vm-assistant'),
                    'How It Works' => url('how-it-works'),
                    'VMA Compliance' => url('vma-compliance'),
                    'Trust and Security' => url('trust-and-security'),
                    'Specialty' => url('specialty'),
                    'Blog' => url('blog'),
                    'Contact' => url('contact'),
                ];

                $services = [
                    'Urgent Care' => url('urgent-care'),
                    'Pharmacy Billing Service' => url('pharmacy-billing-service'),
                    'Physician Billing Service' => url('physician-billing-service'),
                    'Medical Group Practice' => url('medical-group-practice'),
                    'Hospital Billing Service' => url('hospital-billing-service'),
                    'DME Billing Service' => url('dme-billing-service'),
                    'Dental Billing Service' => url('dental-billing'),
                    'Front Desk Expert' => url('services/front-desk-expert'),
                ];

                $expertise = [
                    'Virtual Medical Scribing' => url('services/virtual-medical-scribing'),
                    'Medical Receptionist' => url('services/medical-receptionist'),
                    'Remote Patient Monitoring' => url('services/remote-patient-monitoring'),
                    'Virtual Chronic Care Management' => url('services/virtual-chronic-care-management'),
                    'Provider & Payers Credentialing' => url('services/provider-and-payers-credentialing'),
                    'Pre Authorization Service' => url('services/pre-authorization-services'),
                    'Medical Billing & Coding' => url('services/medical-billing-and-coding'),
                    'Eligibility & Benefits Verification' => url('services/eligibility-and-benefits-verification'),
                    'Account Receivables Service' => url('services/account-receivable-services'),
                    'Virtual Administrative Assistant' => url('services/virtual-administrative-assistant'),
                ];

                $expertisePart1 = array_slice($expertise, 0, 5, true);
                $expertisePart2 = array_slice($expertise, 5, null, true);
            @endphp

            <!-- Company Column -->
            <div class="flex flex-col">
                <h3 class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-4">COMPANY</h3>
                <ul class="space-y-2">
                    @foreach($company as $title => $url)
                        <li>
                            <a href="{{ $url }}" class="text-sm text-gray-500 transition-all duration-300 hover:text-[var(--primary-color)]">
                                {{ $title }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <!-- Services Column -->
            <div class="flex flex-col">
                <h3 class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-4">SERVICES</h3>
                <ul class="space-y-2">
                    @foreach($services as $title => $url)
                        <li>
                            <a href="{{ $url }}" class="text-sm text-gray-500 transition-all duration-300 hover:text-[var(--primary-color)]">
                                {{ $title }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <!-- Expertise Column (Spans 2 columns on desktop for optimal spacing) -->
            <div class="flex flex-col col-span-1 sm:col-span-2 lg:col-span-2">
                <h3 class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-4">EXPERTISE</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-6">
                    <ul class="space-y-2">
                        @foreach($expertisePart1 as $title => $url)
                            <li>
                                <a href="{{ $url }}" class="text-sm text-gray-500 transition-all duration-300 hover:text-[var(--primary-color)]">
                                    {{ $title }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    <ul class="space-y-2">
                        @foreach($expertisePart2 as $title => $url)
                            <li>
                                <a href="{{ $url }}" class="text-sm text-gray-500 transition-all duration-300 hover:text-[var(--primary-color)]">
                                    {{ $title }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <!-- Quick Links / Trust & Compliance Column -->
            <!-- <div class="flex flex-col">
                <h3 class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-4">TRUST & COMPLIANCE</h3>
                <ul class="space-y-2">
                    <li><a href="/vma-compliance" class="text-sm text-gray-500 transition-all duration-300 hover:text-[var(--primary-color)]">VMA Compliance</a></li>
                    <li><a href="/trust-and-security" class="text-sm text-gray-500 transition-all duration-300 hover:text-[var(--primary-color)]">Trust and Security</a></li>
                    <li><a href="/how-it-works" class="text-sm text-gray-500 transition-all duration-300 hover:text-[var(--primary-color)]">How It Works</a></li>
                    <li><a href="/why-vm-assistant" class="text-sm text-gray-500 transition-all duration-300 hover:text-[var(--primary-color)]">Why VM Assistant</a></li>
                    <li><a href="/specialty" class="text-sm text-gray-500 transition-all duration-300 hover:text-[var(--primary-color)]">Specialty Overview</a></li>
                    <li><a href="/blog" class="text-sm text-gray-500 transition-all duration-300 hover:text-[var(--primary-color)]">Blog & Insights</a></li>
                    <li><a href="/contact" class="text-sm text-gray-500 transition-all duration-300 hover:text-[var(--primary-color)]">Contact Support</a></li>
                </ul>
            </div> -->

        </div>

        <!-- Bottom Section -->
        <div class="pt-8 border-t border-gray-100">
            <div class="flex flex-col md:flex-row flex-wrap justify-between items-start gap-8">
                <div class="w-full md:w-1/4">
                    <!-- Logo -->
                    @php
                        $logo = \App\Models\Media::where('file_path', 'media/PSJmF2R7qYgOhBIRcu2bDNLMaG4soxi9erT8bOTO.svg')->first();
                    @endphp

                    @if($logo)
                        <div class="flex items-start justify-start mb-2">
                            <a href="/" class="flex items-center">
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
                        </div>
                    @endif

                    <p class="text-sm text-gray-500 leading-relaxed">
                        800 W El Camino Real, Suite 180<br>
                        Mountain View, CA 94040
                    </p>
                </div>

                <div class="w-full md:w-1/4">
                    <div class="flex gap-4 mb-3 text-gray-400">
                        <span>in</span> <span>◎</span> <span>f</span> <span>▷</span> <span>X</span>
                    </div>
                    <p class="text-sm text-gray-500 max-w-xs">The complete platform for hiring, certifying, and managing healthcare & administrative talent.</p>
                </div>

                <div class="w-full md:w-1/3 text-left md:text-right">
                    <div class="flex flex-wrap md:justify-end gap-x-4 gap-y-2 text-sm">
                        @php
                            $footerLinks = [
                                'Legal' => '/legal',
                                'Privacy' => '/privacy',
                                'Cookies' => '/cookies',
                                'Usage Terms' => '/terms',
                                'DPA' => '/dpa',
                                'Security & Trust' => '/trust-and-security'
                            ];
                        @endphp

                        @foreach($footerLinks as $linkTitle => $linkUrl)
                            <a href="{{ $linkUrl }}" class="text-gray-500 transition-all duration-300 hover:text-[var(--primary-color)]">
                                {{ $linkTitle }}
                            </a>
                        @endforeach
                    </div>
                    <p class="mt-4 text-sm text-gray-400">&copy; {{ date('Y') }} VMA Assistants. All rights reserved.</p>
                </div>
            </div>
        </div>

    </div>
</footer>