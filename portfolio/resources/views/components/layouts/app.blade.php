<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('images/favicon-192x192.png') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon-appletouch.png') }}" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/favicon.svg') }}" />
    <link rel="canonical" href="{{ config('app.url') . '/' . ltrim(request()->path(), '/') }}" />
    <title>{!! $title ?? config('app.name','STICKnoLOGIC') !!}</title>

    {{-- meta tags --}}
    <meta name="theme-color" content="#333333" />
    <meta name="description" content="{{ $description ?? 'STICKnoLOGIC - Portfolio' }}"/>
    <meta name="keywords" content="{{ $keywords ?? 'portfolio, web developer, projects' }}"/>
    <meta name="author" content="{{ $author ?? 'Your Name' }}"/>
    <meta name="twitter:site" content="@STICKnoLOGIC" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:image:width" content="1280" />
    <meta property="og:image:height" content="640" />
    <meta property="og:image:alt" content="{{ $description ?? 'STICKnoLOGIC - Portfolio' }}" />
    <meta property="og:site_name" content="{{ config('app.name', 'STICKnoLOGIC') }}" />

    {{-- Open Graph / Facebook --}}
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="{{ config('app.url') . '/' . request()->path() }}"/>
    <meta property="og:title" content="{!! $title ?? config('app.name','STICKnoLOGIC') !!}"/>
    <meta property="og:description" content="{{ $description ?? 'STICKnoLOGIC - Portfolio' }}"/>
    <meta property="og:image" content="{{ $image ?? asset('images/og-image.png') }}"/>
    
    {{-- Twitter --}}
    <meta name="twitter:card" content="summary_large_image"/>
    <meta property="twitter:card" content="summary_large_image"/>
    <meta property="twitter:url" content="{{ config('app.url') . '/' . request()->path() }}"/>
    <meta property="twitter:title" content="{!! $title ?? config('app.name','STICKnoLOGIC') !!}"/>
    <meta property="twitter:description" content="{{ $description ?? 'STICKnoLOGIC - Portfolio' }}"/>
    <meta property="twitter:image" content="{{ $image ?? asset('images/og-image.png') }}"/>

    {{-- Json-Ld --}}
    @if(!empty($jsonLd))
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        {!! $jsonLd ?? '' !!}
    }   
    </script>
    @endif

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @production
        <script defer src="{{ config('app.analytics_url') }}" data-website-id="{{ config('app.analytics_website_id') }}"></script>
    @endproduction
</head>

<body class="bg-zinc-950 text-zinc-300 antialiased dark">

    <x-navbar />

    <main>
        {{ $slot }}
    </main>

    <x-footer />
</body>
</html>