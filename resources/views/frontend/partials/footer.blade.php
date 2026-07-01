<footer class="bg-white py-12 border-t border-gray-100">
    <div class="container mx-auto px-6">
        
        <!-- Grid layout: 1 col on mobile, 2 col on tablet, 5 col on desktop -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8 mb-16">
            
            @php
                $links = [
                    'PLATFORM' => ['Why Edge', 'Enterprise', 'Talent Network', 'Edge Edu', 'Edge Campuses', 'IT & Security'],
                    'INDUSTRIES' => ['Healthcare', 'Dental', 'Insurance', 'Accounting'],
                    'EXPERTISE' => ['Healthcare', 'Dental', 'Insurance', 'Accounting'],
                    'COMPANY' => ['About', 'Customers', 'Blog', 'Reports', 'Careers'],
                ];

                $resources = ['Compare', 'Pricing', 'ROI Calculator', 'Webinars', 'Partnerships', 'Customer Stories', 'Blog', 'Reports', 'Newsroom', 'Trust Center', 'HIPAA', 'Legal', 'Apply as Talent', 'Contact'];
            @endphp

            <!-- Standard Columns -->
            @foreach($links as $title => $items)
                <div class="flex flex-col">
                    <h3 class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-4">{{ $title }}</h3>
                    <ul class="space-y-2">
                        @foreach($items as $item)
                            <li><a href="#" class="text-sm text-gray-500 transition-all duration-300 hover:text-[var(--primary-color)] hover:opacity-100 opacity-100">{{ $item }}</a></li>
                        @endforeach
                    </ul>
                </div>
            @endforeach

            <!-- Resources Column: Force it to be a full block on mobile/tablet -->
            <div class="flex flex-col col-span-1 sm:col-span-2 lg:col-span-1">
                <h3 class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-4">RESOURCES</h3>
                <div class="grid grid-cols-2 gap-x-4">
                    <ul class="space-y-2">
                        @foreach(array_slice($resources, 0, 7) as $item)
                            <li><a href="#" class="text-sm text-gray-500 transition-all duration-300 hover:text-[var(--primary-color)] hover:opacity-100 opacity-100">{{ $item }}</a></li>
                        @endforeach
                    </ul>
                    <ul class="space-y-2">
                        @foreach(array_slice($resources, 7) as $item)
                            <li><a href="#" class="text-sm text-gray-500 transition-all duration-300 hover:text-[var(--primary-color)] hover:opacity-100 opacity-100">{{ $item }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <!-- Bottom Section remains the same -->
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
                    <p class="text-sm text-gray-500 max-w-xs">The complete platform for hiring, certifying, and managing world-class global talent.</p>
                </div>
                <div class="w-full md:w-1/3 text-left md:text-right">
                    <div class="flex flex-wrap md:justify-end gap-x-4 gap-y-2 text-sm">
                        @php
                            $footerLinks = ['Legal', 'Privacy', 'Cookies', 'Usage Terms', 'DPA', 'Security & Trust'];
                        @endphp

                        @foreach($footerLinks as $link)
                            <a href="#" class="text-gray-500 transition-all duration-300 hover:text-[var(--primary-color)] hover:opacity-100 opacity-100">
                                {{ $link }}
                            </a>
                        @endforeach
                    </div>
                    <p class="mt-4 text-sm text-gray-400">&copy; {{ date('Y') }} Edge. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>