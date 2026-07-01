@extends('frontend.layouts.app')

@section('content')   

<section class="w-full py-20 px-6 bg-white text-center" style="--primary: #7c3aed;">
    <div class="max-w-3xl mx-auto">
        
        <!-- Badge -->
        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full border border-violet-100 bg-violet-50/50 mb-8">
            <span class="text-[var(--primary)] text-sm">$</span>
            <span class="text-[var(--primary)] text-[11px] font-bold uppercase tracking-[0.1em]">Transparent Pricing</span>
        </div>

        <!-- Heading -->
        <h2 class="text-5xl md:text-6xl font-bold tracking-tight text-[#0F172A] leading-[1.1] mb-6 font-gnarly">
            One Flat Fee.<br>
            <span class="text-[var(--primary)]">Everything Included.</span>
        </h2>

        <!-- Description -->
        <p class="text-slate-500 text-[16px] leading-relaxed mb-10 px-4">
            No hidden costs, no per-transaction fees, no surprise invoices. Edge's monthly fee covers salary, benefits, equipment, campus, compliance, IT support, training, and your dedicated relationship manager.
        </p>

        <!-- Buttons -->
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-8">
            <button class="px-8 py-4 bg-[var(--primary)] text-white font-bold rounded-xl shadow-lg shadow-violet-200 hover:opacity-90 transition-all">
                Get My Custom Quote →
            </button>
            <button class="px-8 py-4 bg-white border border-slate-200 text-slate-900 font-bold rounded-xl hover:bg-slate-50 transition-all">
                See ROI Calculator
            </button>
        </div>

        <!-- Footer Stats -->
        <div class="flex items-center justify-center gap-6 text-[13px] font-bold">
            <div class="text-slate-400">
                <span class="text-[var(--primary)]">60-70%</span> Less Than US In-House
            </div>
            <div class="text-slate-400">
                <span class="text-[var(--primary)]">$0</span> Replacement Cost
            </div>
        </div>

    </div>
</section>

@php
    $inclusions = [
        ['title' => 'Full-time dedicated professional', 'detail' => '40 hours/week, working your business hours'],
        ['title' => 'Edge Edu certification', 'detail' => 'Industry-specific training + fluency in leading EHR platforms'],
        ['title' => 'Enterprise equipment', 'detail' => 'Laptop, monitor, headset, webcam — company-issued'],
        ['title' => 'Secured campus workspace', 'detail' => 'Professional facility with dual ISP, backup power, biometric access'],
        ['title' => 'HIPAA compliance infrastructure', 'detail' => 'VPN, encryption, access controls, ongoing monitoring'],
        ['title' => 'Employer of Record (EOR)', 'detail' => 'Payroll, benefits, taxes, HR — all managed by Edge'],
        ['title' => 'Dedicated relationship manager', 'detail' => 'Your point of contact for performance, scheduling, and team issues'],
        ['title' => 'On-site IT support', 'detail' => 'IT Bar at every campus. Equipment replacement within hours'],
        ['title' => 'Ongoing Edge Edu training', 'detail' => 'Payer updates, system training, career development'],
        ['title' => 'Replacement guarantee', 'detail' => 'Full replacement at $0 cost if your hire isn\'t the right fit'],
    ];
@endphp
<section class="max-w-7xl mx-auto px-6 py-20" style="--primary: #7C3AED;">
    
    <!-- Header Content -->
    <div class="text-center mb-16">
        <div class="inline-block px-4 py-1.5 bg-[#7C3AED]/10 text-[#7C3AED] rounded-full text-[10px] font-bold tracking-widest uppercase mb-8">
            What's Included
        </div>
        <h2 class="text-4xl md:text-5xl font-bold font-gnarly text-slate-900 leading-[1.1] mb-6 capitalize">
            Your flat monthly fee <span class="text-[#7C3AED]">covers everything</span>
        </h2>
    </div>

    <!-- Features Table -->
    <div class="w-full max-w-6xl mx-auto border border-slate-100 rounded-[24px] md:rounded-[32px] overflow-hidden shadow-sm">
        
        <!-- Table Header (Hidden on small mobile if preferred, but usually looks good) -->
        <div class="grid grid-cols-1 md:grid-cols-12 bg-slate-50/50 border-b border-slate-100 px-6 py-4">
            <div class="md:col-span-4 text-[10px] font-bold uppercase tracking-[0.15em] text-slate-400">
                Included in your fee
            </div>
            <div class="hidden md:block md:col-span-8 text-[10px] font-bold uppercase tracking-[0.15em] text-slate-400">
                Details
            </div>
        </div>

        <!-- Table Rows -->
        <div class="divide-y divide-slate-100">
            @foreach($inclusions as $item)
                <div class="grid grid-cols-1 md:grid-cols-12 px-6 py-4 md:py-5 hover:bg-slate-50/30 transition-colors">
                    <!-- Left: Title -->
                    <div class="md:col-span-4 text-[14px] md:text-[15px] font-bold text-slate-900 py-1 md:py-0">
                        {{ $item['title'] }}
                    </div>
                    
                    <!-- Right: Detail -->
                    <div class="md:col-span-8 text-[14px] md:text-[15px] text-[#7C3AED] font-medium py-1 md:py-0">
                        <span class="md:hidden text-slate-400 font-bold uppercase text-[10px] block mb-1">Details</span>
                        {{ $item['detail'] }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@php
    $comparisonData = [
        [
            'option' => 'US in-house hire',
            'cost' => '$78,000 - $126,000/yr',
            'missing' => 'Plus turnover risk (40%+ in medical admin), recruiting costs, training time',
            'is_edge' => false
        ],
        [
            'option' => 'Freelance VA',
            'cost' => '$18,000 - $35,000/yr',
            'missing' => 'No compliance, no equipment, no training, no retention guarantee, no oversight',
            'is_edge' => false
        ],
        [
            'option' => 'VA company',
            'cost' => '$22,000 - $42,000/yr',
            'missing' => 'No campus, no EOR, no IT support, limited training, high turnover',
            'is_edge' => false
        ],
        [
            'option' => 'Offshore BPO',
            'cost' => '$25,000 - $50,000/yr',
            'missing' => 'Anonymous workers, no direct accountability, hidden per-transaction fees',
            'is_edge' => false
        ],
        [
            'option' => 'Edge',
            'cost' => '60-70% less than US in-house',
            'missing' => 'Nothing. Everything is included.',
            'is_edge' => true
        ],
    ];
@endphp
<section class="max-w-7xl mx-auto px-6 py-20" style="--primary: #7C3AED;">
    
    <!-- Header Content -->
    <div class="text-center mb-16">
        <div class="inline-block px-5 py-2 bg-[#7C3AED]/10 text-[#7C3AED] rounded-full text-[10px] font-bold tracking-[0.2em] uppercase mb-8">
            Cost Comparison
        </div>
        <h2 class="text-4xl md:text-5xl font-bold font-gnarly text-slate-900 leading-[1.1] capitalize">
            How Edge compares to <span class="text-[#7C3AED]">other options</span>
        </h2>
    </div>

    <!-- Comparison Table Wrapper -->
    <div class="w-full max-w-6xl mx-auto border border-slate-100 rounded-[32px] overflow-hidden shadow-sm bg-white">
        
        <!-- Table Header (Visible on Desktop) -->
        <div class="hidden md:grid grid-cols-12 bg-white border-b border-slate-100 px-8 py-5">
            <div class="col-span-3 text-[10px] font-bold uppercase tracking-[0.15em] text-slate-400">Hiring Option</div>
            <div class="col-span-3 text-[10px] font-bold uppercase tracking-[0.15em] text-slate-400">Typical Annual Cost</div>
            <div class="col-span-6 text-[10px] font-bold uppercase tracking-[0.15em] text-slate-400">What's Missing</div>
        </div>

        <!-- Table Body -->
        <div class="divide-y divide-slate-100">
            @foreach($comparisonData as $row)
                <div @class([
                    'grid grid-cols-1 md:grid-cols-12 px-8 py-6 md:py-7 items-center transition-colors',
                    'bg-[#7C3AED]/5' => $row['is_edge'], // Light purple bg for Edge row
                    'bg-white hover:bg-slate-50/50' => !$row['is_edge']
                ])>
                    
                    <!-- Column 1: Hiring Option -->
                    <div class="col-span-3 mb-4 md:mb-0">
                        <span class="md:hidden text-[9px] font-bold uppercase text-slate-400 block mb-1">Hiring Option</span>
                        <h4 class="text-[15px] font-bold text-slate-900">{{ $row['option'] }}</h4>
                    </div>

                    <!-- Column 2: Typical Annual Cost -->
                    <div class="col-span-3 mb-4 md:mb-0">
                        <span class="md:hidden text-[9px] font-bold uppercase text-slate-400 block mb-1">Typical Annual Cost</span>
                        <p @class([
                            'text-[14px] font-medium',
                            'text-[#7C3AED] font-bold' => $row['is_edge'],
                            'text-slate-600' => !$row['is_edge']
                        ])>
                            {{ $row['cost'] }}
                        </p>
                    </div>

                    <!-- Column 3: What's Missing -->
                    <div class="col-span-6">
                        <span class="md:hidden text-[9px] font-bold uppercase text-slate-400 block mb-1">What's Missing</span>
                        <p @class([
                            'text-[14px] leading-relaxed',
                            'text-[#7C3AED] font-bold' => $row['is_edge'],
                            'text-slate-500' => !$row['is_edge']
                        ])>
                            {{ $row['missing'] }}
                        </p>
                    </div>
                    
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="max-w-full mx-auto px-6 py-20" style="--primary: #7C3AED;">
    
    <!-- Header Content -->
    <div class="text-center mb-12">
        <!-- Small Badge -->
        <div class="inline-block px-5 py-1.5 bg-[#7C3AED]/10 text-[#7C3AED] rounded-full text-[10px] font-bold tracking-[0.2em] uppercase border border-[#7C3AED]/20 mb-8">
            No Hidden Costs
        </div>

        <!-- Main Heading -->
        <h2 class="text-4xl md:text-5xl font-bold font-gnarly text-slate-900 leading-tight">
            Fees you'll <span class="text-[#7C3AED]">never see</span> with Edge
        </h2>
    </div>

    <!-- 3-Column Card Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-6xl mx-auto">
        
        <!-- Card 1: Equipment -->
        <div class="bg-white border border-slate-100 rounded-[24px] p-12 flex flex-col items-center justify-center text-center shadow-sm transition-all hover:shadow-md">
            <div class="text-4xl md:text-5xl font-bold text-[#7C3AED] mb-4">
                $0
            </div>
            <p class="text-[14px] md:text-[15px] font-medium text-slate-600">
                Equipment fee
            </p>
        </div>

        <!-- Card 2: Replacement -->
        <div class="bg-white border border-slate-100 rounded-[24px] p-12 flex flex-col items-center justify-center text-center shadow-sm transition-all hover:shadow-md">
            <div class="text-4xl md:text-5xl font-bold text-[#7C3AED] mb-4">
                $0
            </div>
            <p class="text-[14px] md:text-[15px] font-medium text-slate-600">
                Replacement fee
            </p>
        </div>

        <!-- Card 3: Training -->
        <div class="bg-white border border-slate-100 rounded-[24px] p-12 flex flex-col items-center justify-center text-center shadow-sm transition-all hover:shadow-md">
            <div class="text-4xl md:text-5xl font-bold text-[#7C3AED] mb-4">
                $0
            </div>
            <p class="text-[14px] md:text-[15px] font-medium text-slate-600">
                Training fee
            </p>
        </div>

    </div>
</section>

<section class="w-full mx-auto py-16 px-6 bg-slate-50/50" style="--primary: #7C3AED;">
    <div class="max-w-4xl mx-auto">
        
        <!-- Testimonial Card -->
        <div class="bg-white rounded-[40px] p-10 md:p-16 shadow-2xl shadow-slate-200/60 border border-slate-50 text-center relative overflow-hidden">
            
            <!-- 5 Stars -->
            <div class="flex justify-center gap-1 mb-8">
                @for ($i = 0; $i < 5; $i++)
                    <svg class="w-4 h-4 text-[var(--primary)] fill-current" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                @endfor
            </div>

            <!-- Quote Text -->
            <blockquote class="text-[17px] md:text-[20px] italic text-slate-600 leading-relaxed font-serif mb-10 max-w-3xl mx-auto">
                "I was skeptical about the 'everything included' claim. After 18 months with Edge, I can confirm — we've never been charged anything beyond our flat monthly fee. No surprises, no nickel-and-diming."
            </blockquote>

            <!-- Author Info -->
            <div class="flex flex-col items-center">
                <h4 class="text-[16px] font-bold text-slate-900 mb-1">
                    David Park, CFO
                </h4>
                <p class="text-[13px] text-slate-400 font-medium tracking-tight">
                    Pacific Health Partners — 12 providers, 8 Edge professionals
                </p>
            </div>

        </div>
    </div>
</section>

@php
    $faqs = [
        [
            'question' => 'Why don\'t you list exact prices on this page?',
            'answer' => 'Pricing varies slightly based on the specific specialty and volume of professionals required. We provide custom quotes to ensure you only pay for exactly what your practice needs.'
        ],
        [
            'question' => 'Are there volume discounts for multiple hires?',
            'answer' => 'Yes, we offer scaled pricing for practices looking to hire 5 or more Edge professionals simultaneously.'
        ],
        [
            'question' => 'How does billing work?',
            'answer' => 'Billing is simple and transparent. You are billed a flat monthly fee per professional, with no hidden costs or surprise invoices. Invoices are sent on the 1st of each month.'
        ],
        [
            'question' => 'What if I need to cancel?',
            'answer' => 'We offer flexible terms with no long-term contract lock-ins. You can scale up or down with standard notice periods.'
        ],
        [
            'question' => 'Do prices increase over time?',
            'answer' => 'Your flat fee is locked in for the duration of your service agreement. We believe in predictable costs for your practice.'
        ],
    ];
@endphp
<section class="w-6xl mx-auto px-6 py-24 bg-slate-50/50" style="--primary: #7C3AED;">
    
    <!-- Header -->
    <div class="text-center mb-16">
        <div class="inline-block px-4 py-1.5 bg-[#7C3AED]/10 text-[#7C3AED] rounded-full text-[10px] font-bold tracking-widest uppercase mb-8">
            FAQ
        </div>
        <h2 class="text-4xl md:text-5xl font-bold font-gnarly text-slate-900 leading-[1.1] capitalize">
            Questions about <span class="text-[#7C3AED]">Edge pricing</span>
        </h2>
    </div>

    <!-- FAQ Accordion -->
    <div x-data="{ active: null }" class="max-w-4xl mx-auto space-y-4">
        @foreach($faqs as $index => $faq)
            <div 
                class="group border border-slate-100 rounded-[20px] bg-white transition-all duration-300 hover:shadow-md"
                :class="active === {{ $index }} ? 'shadow-sm border-[#7C3AED]/20' : ''"
            >
                <!-- Question Button -->
                <button 
                    @click="active === {{ $index }} ? active = null : active = {{ $index }}"
                    class="w-full flex items-center justify-between p-6 md:p-8 text-left transition-all"
                >
                    <span 
                        class="text-[16px] md:text-[18px] font-bold transition-colors"
                        :class="active === {{ $index }} ? 'text-[#7C3AED]' : 'text-slate-900'"
                    >
                        {{ $faq['question'] }}
                    </span>

                    <!-- Plus/Minus Icon -->
                    <div 
                        class="shrink-0 w-8 h-8 rounded-full flex items-center justify-center border border-slate-100 transition-all duration-300"
                        :class="active === {{ $index }} ? 'bg-[#7C3AED] border-[#7C3AED] rotate-45' : 'bg-[#7C3AED]/5 border-transparent'"
                    >
                        <svg 
                            class="w-4 h-4 transition-colors" 
                            :class="active === {{ $index }} ? 'text-white' : 'text-[#7C3AED]'"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"
                        >
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                    </div>
                </button>

                <!-- Answer Content -->
                <div 
                    x-show="active === {{ $index }}" 
                    x-collapse
                    x-cloak
                >
                    <div class="px-8 pb-8 text-slate-500 text-[15px] leading-relaxed">
                        {{ $faq['answer'] }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>

<section class="w-full py-20 md:py-32 px-6 bg-gray-50 flex flex-col items-center justify-center text-center overflow-hidden">
    
    <div class="max-w-4xl mx-auto flex flex-col items-center">
        
        <!-- Heading -->
        <h2 class="text-3xl md:text-4xl lg:text-[44px] font-bold text-slate-900 leading-[1.1] tracking-tight mb-6 font-gnarly capitalize">
            Get your <span class="text-[#7C3AED]">custom quote</span> in 24 hours.
        </h2>

        <!-- Subtext -->
        <p class="max-w-xl text-slate-500 text-sm md:text-base leading-relaxed mb-10 font-sans">
            Tell us your roles, team size, and industry — we'll send a transparent <br class="hidden md:block"> quote with no hidden costs.
        </p>

        <!-- Primary CTA Button -->
        <a href="#" class="inline-flex items-center gap-2 px-10 py-4 bg-[#7C3AED] hover:bg-[#6D28D9] text-white font-bold rounded-2xl shadow-xl shadow-violet-100 transition-all hover:scale-105 active:scale-95 group">
            Get My Quote 
            <span class="group-hover:translate-x-1 transition-transform duration-300">→</span>
        </a>

    </div>

</section>

@endsection