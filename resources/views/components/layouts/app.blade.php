<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
    <!-- Meta Tags -->
    <x-layouts.meta />

    <!-- Favicon -->
    <x-layouts.favicon />

    <title>{{ $title ?? config('app.name') }}</title>

    <!-- Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Alpine.js -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Remix Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css"
        integrity="sha512-XcIsjKMcuVe0Ucj/xgIXQnytNwBttJbNjltBV18IOnru2lDPe9KRRyvCXw6Y5H415vbBLRm8+q6fmLUU7DfO6Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Styles -->
    @stack('styles')

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

</head>

<body x-data="{ loading: true }" x-init="window.onload = () => { setTimeout(() => loading = false, 800) }">
    <!-- Preloader -->
    <div x-show="loading" 
         x-transition:leave="transition ease-in duration-500" 
         x-transition:leave-start="opacity-100" 
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 z-[10000] bg-white dark:bg-[#050505] flex items-center justify-center">
        <div class="relative">
            <!-- Rotating Circle -->
            <div class="w-24 h-24 rounded-full border-4 border-gray-100 dark:border-white/10 border-t-blue-600 dark:border-t-blue-500 animate-spin"></div>
            <!-- Logo in Center (Colorful) -->
            <div class="absolute inset-0 flex items-center justify-center">
                <img src="{{ asset('images/oxerity_logo.png') }}" alt="Loading..." class="w-12 h-12 object-contain animate-pulse">
            </div>
        </div>
    </div>

    <div
        class="bg-gradient-to-br from-white via-sky-50 to-green-50 dark:from-gray-900 dark:via-gray-900 dark:to-gray-800 text-gray-800 dark:text-gray-200 font-sans overflow-x-hidden">



        <x-partials.header />

        <main class="pt-20">

            {{ $slot }}

        </main>

        <x-partials.footer />

    </div>

    <!-- Scripts -->
    @stack('scripts')

    <script src="{{ asset('js/navbar-scroll-effect.js') }}"></script>

    <!-- Initialize AOS -->
    <script>
        AOS.init({
            duration: 800,
            once: true,
        });
    </script>
</body>

</html>