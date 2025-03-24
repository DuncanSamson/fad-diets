<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->title }}</title>
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
    </head>
    <body class=" bg-emerald-100 text-emerald-950 font-sans antialiased">
        <nav class="bg-emerald-500 shadow-md shadow-emerald-600">
            <ul class="flex justify-center">

                <x-nav-items href="/">Home</x-nav-items>
                <x-nav-items href="/fad-diet">Fad Diets</x-nav-items>
                <x-nav-items href="/scran">What Is In your Scran</x-nav-items>
                <x-nav-items href="/game">Game</x-nav-items>
            </ul>
        </nav>
        <main class="min-h-96">
            @yield('content')
        </main>


        <x-footer>

        </x-footer>
    </body>
</html>
