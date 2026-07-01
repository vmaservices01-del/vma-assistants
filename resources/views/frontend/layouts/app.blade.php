<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- 1. Favicon (SVG from Storage) -->
    <link rel="icon" type="image/svg+xml" href="{{ asset('storage/media/T9Iy6kFxdQPTQfnVkRVpab7tTKxp7hqI1zAT14Kv.svg') }}">

    <!-- 2. Dynamic SEO with Fallbacks -->
    <title>{{ $seo['title'] ?? 'VMA Service Inc | Professional Healthcare Support' }}</title>
    <meta name="description" content="{{ $seo['description'] ?? 'Expert medical administrative support and remote clinical talent solutions.' }}">

    @if(!empty($seo['keywords']))
        <meta name="keywords" content="{{ $seo['keywords'] }}">
    @endif

    <!-- 3. Dynamic Schema (Checks if $seo exists) -->
    @if(!empty($seo['schema']))
        <script type="application/ld+json">
            {!! is_array($seo['schema']) ? json_encode($seo['schema'], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) : $seo['schema'] !!}
        </script>
    @endif

    <!-- Open Graph (Social Media) -->
    <meta property="og:title" content="{{ $seo['title'] ?? 'VMA Service Inc' }}">
    <meta property="og:description" content="{{ $seo['description'] ?? '' }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- 4. Dynamic Colors (Safe Fallbacks) -->
    <style>
        :root {
            /* If $page exists, use its color. Otherwise, use these professional defaults. */
            --primary: {{ $page->primary_color ?? '#2563eb' }};
            --secondary: {{ $page->secondary_color ?? '#0a1931' }};
            
            --primary-color: var(--primary);
            --secondary-color: var(--secondary);           
        }

        .text-primary { color: var(--primary-color); }
        .bg-primary { background-color: var(--primary-color); }
        .bg-secondary { background-color: var(--secondary-color); }
        .border-primary { border-color: var(--primary-color); }
    </style>
</head>
<body class="bg-white text-gray-900">
    @include('frontend.partials.header')
    
    <main>
        @yield('content')
    </main>
    
    @include('frontend.partials.footer')
</body>
</html>