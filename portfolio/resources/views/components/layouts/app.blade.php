<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">
    <title>{{ $title ?? env('APP_NAME','STICKnoLOGIC') }}</title>
    {{-- meta tags --}}
    <meta name="description" content="{{ $description ?? 'STICKnoLOGIC - Portfolio' }}">
    <meta name="keywords" content="{{ $keywords ?? 'portfolio, web developer, projects' }}">
    <meta name="author" content="{{ $author ?? 'Your Name' }}">
    {{-- Open Graph / Facebook --}}
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $title ?? env('APP_NAME','STICKnoLOGIC') }}">
    <meta property="og:description" content="{{ $description ?? 'STICKnoLOGIC - Portfolio' }}">
    <meta property="og:image" content="{{ $image ?? asset('images/og-image.png') }}">
    {{-- Twitter --}}
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="{{ $title ?? env('APP_NAME','STICKnoLOGIC') }}">
    <meta property="twitter:description" content="{{ $description ?? 'STICKnoLOGIC - Portfolio' }}">
    <meta property="twitter:image" content="{{ $image ?? asset('images/og-image.png') }}">


    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @production
        <script defer src="{{ env('ANALYTICS_URL') }}" data-website-id="{{ env('ANALYTICS_WEBSITE_ID') }}"></script>
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