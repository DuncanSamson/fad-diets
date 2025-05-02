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
    </head>
    <body class="bg-emerald-800 text-emerald-50 font-sans antialiased">
        <nav class="flex bg-emerald-500 shadow-lg shadow-emerald-500 shadow-emerald-600 bg-gradient-to-b from-emerald-300 from-5% to-emerald-600 to-95%">
            <img class="h-16" alt="Logo Preview" src="/assets/images/FAD-Diets.png">
            <ul class="flex justify-center">
                <x-nav-items href="/">Home</x-nav-items>
                <x-nav-items href="/about">About</x-nav-items>
                <x-nav-items href="/fad-diet">Fad Diets</x-nav-items>
                <x-nav-items href="/scran">What Is In your Scran</x-nav-items>
                <x-nav-items href="/game">Game</x-nav-items>
                <x-nav-items href="/about">About</x-nav-items>
            </ul>
        </nav>
        <main class="min-h-96 bg-stone-50 text-emerald-950 px-14 py-16">
            @yield('content')
        </main>


        <x-footer>

        </x-footer>
    </body>
</html>
