<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
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
        <main class="min-h-96 bg-white text-emerald-950 px-14 pb-16 pt-28">
            @yield('content')
        </main>


        <x-footer>

        </x-footer>
    </body>
</html>
