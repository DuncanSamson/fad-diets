<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="/assets/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="/assets/favicon.svg" />
    <link rel="shortcut icon" href="/assets/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="F.A.D Diets" />
    <link rel="manifest" href="/assets/site.webmanifest" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="{{ $page->getUrl() }}">
    <meta name="description" content="{{ $page->description }}">
    <meta property="og:title" content="{{ $page->title }}"/>
    <meta name="og:description" content="{{ $page->description }}">
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://faddiets.uk{{ $page->getUrl() }}"/>
    <meta property="og:image" content="https://faddiets.uk/assets/images/{{$page->image}}"/>
    <title>{{ $page->title }}</title>
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
    <script src="https://website-widgets.pages.dev/dist/sienna.min.js" defer></script>
    <script src="/assets/js/navbar.js" defer></script>
</head>
<body class="bg-emerald-800 text-emerald-50 font-sans antialiased">
<x-navbar>

</x-navbar>
<main class="min-h-96 bg-stone-50 text-emerald-950">
    @yield('content')
</main>


<x-footer>

</x-footer>
</body>
</html>
