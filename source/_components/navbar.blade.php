<header class="absolute inset-x-0 top-0 z-50">
    <nav class="flex flex-col lg:flex-row items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex w-full justify-between lg:justify-start lg:flex-1">
            <a href="/" class="-m-1.5 p-1.5">
                <span class="sr-only">F.A.D. Diets</span>
            </a>
            <div class="flex lg:hidden">
                <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Open main menu</span>
                    <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-center lg:gap-x-12 mt-4 lg:mt-0">
            <a href="/" class="text-sm font-semibold text-gray-900">Home</a>
            <a href="/about" class="text-sm font-semibold text-gray-900">About</a>
            <a href="/fad-diet" class="text-sm font-semibold text-gray-900">Fad Diets</a>
            <a href="/scran" class="text-sm font-semibold text-gray-900">What is in your Scran</a>
            <a href="/game" class="text-sm font-semibold text-gray-900">Game</a>
        </div>
    </nav>

    <!-- Mobile menu -->
    <div class="lg:hidden" role="dialog" aria-modal="true">
        <div class="fixed inset-0 z-50"></div>
        <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
            <div class="flex items-center justify-between">
                <a href="/" class="-m-1.5 p-1.5">
                    <span class="sr-only">F.A.D. Diets</span>
                    <img src="/path-to-your-image/fad-diets-logo.png" alt="F.A.D. Diets Logo" class="h-12 w-auto">
                </a>
                <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Close menu</span>
                    <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-gray-500/10">
                    <div class="space-y-2 py-6 text-center">
                        <a href="/" class="block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-gray-50">Home</a>
                        <a href="/about" class="block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-gray-50">About</a>
                        <a href="/fad-diet" class="block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-gray-50">Fad Diets</a>
                        <a href="/scran" class="block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-gray-50">What is in your Scran</a>
                        <a href="/game" class="block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-gray-50">Game</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
