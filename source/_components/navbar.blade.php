<header class="absolute inset-x-0 top-0 z-50">
    <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="/" class="-m-1.5 p-1.5">
                <span class="sr-only">FAD Diets</span>
                <img class="h-10 invert w-auto" src="/assets/images/FAD-Diets.svg" alt="logo">
            </a>
        </div>
        <div class="flex flex-1 justify-end lg:hidden">
            <button id="mobileOpenButton" type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                <span class="sr-only">Open main menu</span>
                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
        <div class="hidden  lg:flex lg:gap-x-12">
            <a href="/" class="text-sm font-semibold text-gray-900 hover:text-emerald-600">Home</a>
            <a href="/fad-diet" class="text-sm font-semibold text-gray-900 hover:text-emerald-600">Fad Diets</a>
            <a href="/scran" class="text-sm font-semibold text-gray-900 hover:text-emerald-600">What is in your Scran</a>
            <a href="/game" class="text-sm font-semibold text-gray-900 hover:text-emerald-600">Game</a>
        </div>
        <div>

        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
        </div>
    </nav>

    <!-- Mobile menu -->
    <dialog id="mobileMenu" class="lg:hidden" aria-modal="true">
        <div class="fixed inset-0 z-50"></div>
        <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
            <div class="flex items-center justify-between">
                <a href="/" class="-m-1.5 p-1.5">
                    <span class="sr-only">F.A.D. Diets</span>
                    <img src="/assets/images/FAD-Diets.svg" alt="F.A.D. Diets Logo" class="h-12 w-auto invert">
                </a>
                <button id="mobileCloseButton" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Close menu</span>
                    <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-gray-500/10">
                    <div class="space-y-2 py-6 text-center">
                        <a href="/" class="block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:text-emerald-600">Home</a>
                        <a href="/fad-diet" class="block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:text-emerald-600">Fad Diets</a>
                        <a href="/scran" class="block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:text-emerald-600">What is in your Scran</a>
                        <a href="/game" class="block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:text-emerald-600">Game</a>
                    </div>
                </div>
            </div>
        </div>
    </dialog>
</header>
