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

<body>
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