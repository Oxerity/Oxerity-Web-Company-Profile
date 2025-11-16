<x-layouts.app>

    <!-- Hero Section with Animated Gradient -->
    <section id="home" class="relative min-h-screen flex items-center overflow-hidden">
        <!-- Animated Background -->
        <div
            class="absolute inset-0 bg-gradient-to-br from-sky-100 via-green-50 to-sky-50 dark:from-gray-800 dark:via-gray-900 dark:to-gray-800">
            <div
                class="absolute top-0 -left-4 w-72 h-72 bg-purple-300 dark:bg-purple-900 rounded-full mix-blend-multiply dark:mix-blend-soft-light filter blur-xl opacity-70 animate-blob">
            </div>
            <div
                class="absolute top-0 -right-4 w-72 h-72 bg-yellow-300 dark:bg-yellow-900 rounded-full mix-blend-multiply dark:mix-blend-soft-light filter blur-xl opacity-70 animate-blob animation-delay-2000">
            </div>
            <div
                class="absolute -bottom-8 left-20 w-72 h-72 bg-pink-300 dark:bg-pink-900 rounded-full mix-blend-multiply dark:mix-blend-soft-light filter blur-xl opacity-70 animate-blob animation-delay-4000">
            </div>
        </div>

        @php
        $hero = $hero ?? null;
    @endphp

    @if ($hero)
    <div class="container mx-auto px-6 relative z-10">
        <div class="flex flex-col lg:flex-row items-center justify-between">

            {{-- LEFT SECTION --}}
            <div class="lg:w-1/2 text-center lg:text-left mb-12 lg:mb-0" data-aos="fade-right">

                {{-- BADGE --}}
                @if ($hero->badge_text)
                <div
                    class="inline-block mb-4 px-4 py-2 bg-green-100 dark:bg-green-900/30 rounded-full text-green-700 dark:text-green-300 text-sm font-semibold">
                    {{ $hero->badge_text }}
                </div>
                @endif

                {{-- TITLE --}}
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-extrabold leading-tight mb-6">
                    <span
                        class="bg-gradient-to-r from-sky-600 via-blue-600 to-green-600 dark:from-sky-400 dark:via-blue-400 dark:to-green-400 bg-clip-text text-transparent">
                        {{ $hero->title_primary }}
                    </span>
                    <br>
                    <span class="text-gray-800 dark:text-white">
                        {{ $hero->title_secondary }}
                    </span>
                </h1>

                {{-- DESCRIPTION --}}
                @if ($hero->description)
                <p class="text-lg md:text-xl text-gray-600 dark:text-gray-300 mb-8 max-w-2xl mx-auto lg:mx-0">
                    {{ $hero->description }}
                </p>
                @endif

                {{-- BUTTONS --}}
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <a href="#services"
                        class="group relative inline-flex items-center justify-center px-8 py-4 font-bold text-white transition-all duration-200 bg-gradient-to-r from-sky-500 to-green-500 rounded-full hover:shadow-2xl hover:shadow-sky-500/50 hover:scale-105">
                        Mulai Sekarang
                        <svg class="w-5 h-5 ml-2 transition-transform group-hover:translate-x-1" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </a>

                    <a href="#about"
                        class="group inline-flex items-center justify-center px-8 py-4 font-bold text-gray-800 dark:text-white bg-white dark:bg-gray-800 border-2 border-gray-300 dark:border-gray-600 rounded-full hover:border-sky-500 dark:hover:border-sky-400 hover:shadow-xl transition-all duration-200">
                        Pelajari Lebih Lanjut
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>
            </div>

            {{-- RIGHT IMAGE --}}
            <div class="lg:w-1/2" data-aos="fade-left">
                <div class="relative">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-sky-400 to-green-400 rounded-3xl transform rotate-6 scale-105 opacity-20">
                    </div>

                    @if ($hero && $hero->image)
                        <img src="{{ asset('storage/' . $hero->image) }}"
                            alt="Hero Image"
                            class="relative rounded-3xl shadow-2xl">
                    @endif
                </div>
            </div>

        </div>
    </div>
    @endif
    </section>

    <!-- Stats Section -->
    <section class="py-20 bg-white dark:bg-gray-900">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                @foreach ($stats as $stat)
                    <div class="text-center" data-aos="fade-up">
                        <div class="text-4xl md:text-5xl font-extrabold bg-gradient-to-r from-sky-600 to-green-600 bg-clip-text text-transparent mb-2">
                            {{ $stat->title }}
                        </div>
                        <div class="text-gray-600 dark:text-gray-400 font-medium">
                            {{ $stat->subtitle }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <!-- Services Section -->
    <section id="services" class="py-24 relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-sky-50 to-green-50 dark:from-gray-800 dark:to-gray-900">
        </div>
        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-4xl md:text-5xl font-extrabold mb-4">
                    <span
                        class="bg-gradient-to-r from-sky-600 to-green-600 dark:from-sky-400 dark:to-green-400 bg-clip-text text-transparent">
                        Layanan Kami
                    </span>
                </h2>
                <p class="text-lg text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                    Solusi komprehensif untuk mengakselerasi pertumbuhan bisnis digital Anda
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($services as $service)
                    <div class="group relative" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-sky-400 to-green-400 rounded-2xl blur opacity-25 group-hover:opacity-75 transition duration-500">
                        </div>

                        <div
                            class="relative bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 border border-gray-100 dark:border-gray-700 h-full">

                            {{-- ICON --}}
                            <div
                                class="w-16 h-16 bg-gradient-to-br from-sky-400 to-green-400 rounded-xl flex items-center justify-center mb-6 transform group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                                {!! $service->icon !!}
                            </div>

                            {{-- TITLE --}}
                            <h3 class="text-2xl font-bold mb-3 text-gray-800 dark:text-white">
                                {{ $service->title }}
                            </h3>

                            {{-- DESCRIPTION --}}
                            <p class="text-gray-600 dark:text-gray-400 mb-6">
                                {{ $service->description }}
                            </p>

                            {{-- LIST FEATURES --}}
                            @if ($service->features)
                            <ul class="space-y-2">
                                @foreach ($service->features as $feature)
                                    <li class="flex items-center text-sm text-gray-600 dark:text-gray-400">
                                        <svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd">
                                            </path>
                                        </svg>

                                        {{ $feature }}
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-24 bg-white dark:bg-gray-900">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <div class="lg:w-1/2" data-aos="fade-right">
                    <div class="relative">
                        <div
                            class="absolute -inset-4 bg-gradient-to-r from-sky-400 to-green-400 rounded-3xl blur-2xl opacity-20">
                        </div>
                        <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?q=80&w=2084&auto=format&fit=crop"
                            alt="Team working together" class="relative rounded-3xl shadow-2xl">
                        <div class="absolute -bottom-6 -right-6 bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-xl">
                            <div class="flex items-center space-x-3">
                                <div
                                    class="w-12 h-12 bg-gradient-to-br from-sky-400 to-green-400 rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div>
                                    <div class="text-2xl font-bold text-gray-800 dark:text-white">5 Tahun</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Pengalaman</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/2" data-aos="fade-left">
                    <div
                        class="inline-block mb-4 px-4 py-2 bg-sky-100 dark:bg-sky-900/30 rounded-full text-sky-700 dark:text-sky-300 text-sm font-semibold">
                        Tentang Kami
                    </div>
                    <h2 class="text-4xl md:text-5xl font-extrabold mb-6">
                        <span
                            class="bg-gradient-to-r from-sky-600 to-green-600 dark:from-sky-400 dark:to-green-400 bg-clip-text text-transparent">
                            Oxerity Corp
                        </span>
                    </h2>
                    <p class="text-lg text-gray-600 dark:text-gray-400 mb-6">
                        Oxerity Corp lahir dari semangat untuk melihat UMKM di Indonesia naik kelas. Kami percaya bahwa
                        teknologi adalah kunci untuk membuka potensi tak terbatas.
                    </p>
                    <p class="text-lg text-gray-600 dark:text-gray-400 mb-8">
                        Misi kami adalah menjadi mitra terpercaya bagi para pelaku UMKM dalam perjalanan transformasi
                        digital mereka. Dengan tim yang berpengalaman dan solusi yang disesuaikan, kami berkomitmen
                        untuk memberikan dampak positif yang nyata bagi pertumbuhan ekonomi digital Indonesia.
                    </p>
                    <div class="grid grid-cols-2 gap-6 mb-8">
                        <div class="flex items-start space-x-3">
                            <div
                                class="w-10 h-10 bg-sky-100 dark:bg-sky-900/30 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-sky-600 dark:text-sky-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 dark:text-white mb-1">Tim Profesional</h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400">Expert berpengalaman</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <div
                                class="w-10 h-10 bg-green-100 dark:bg-green-900/30 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-green-600 dark:text-green-400" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 dark:text-white mb-1">Solusi Inovatif</h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400">Teknologi terkini</p>
                            </div>
                        </div>
                    </div>
                    <a href="#contact"
                        class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-sky-500 to-green-500 text-white font-bold rounded-full hover:shadow-xl hover:scale-105 transition-all duration-200">
                        Hubungi Kami
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-24 bg-gradient-to-br from-sky-50 to-green-50 dark:from-gray-800 dark:to-gray-900">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-4xl md:text-5xl font-extrabold mb-4">
                    <span
                        class="bg-gradient-to-r from-sky-600 to-green-600 dark:from-sky-400 dark:to-green-400 bg-clip-text text-transparent">
                        Kata Mereka
                    </span>
                </h2>
                <p class="text-lg text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                    Dengar pengalaman dari para pelaku UMKM yang telah bertransformasi bersama kami
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-xl" data-aos="fade-up" data-aos-delay="0">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <p class="text-gray-600 dark:text-gray-400 mb-6 italic">
                        "Oxerity Corp sangat membantu bisnis saya berkembang pesat. Dalam 6 bulan, penjualan online
                        meningkat 300%!"
                    </p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-gradient-to-br from-sky-400 to-green-400 rounded-full mr-4"></div>
                        <div>
                            <h4 class="font-bold text-gray-800 dark:text-white">Budi Santoso</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Pemilik Toko Kerajinan</p>
                        </div>
                    </div>
                </div>
                <!-- Testimonial 2 -->
                <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-xl" data-aos="fade-up"
                    data-aos-delay="100">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <p class="text-gray-600 dark:text-gray-400 mb-6 italic">
                        "Tim yang sangat responsif dan profesional. Mereka benar-benar memahami kebutuhan bisnis kami."
                    </p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-gradient-to-br from-green-400 to-sky-400 rounded-full mr-4"></div>
                        <div>
                            <h4 class="font-bold text-gray-800 dark:text-white">Siti Rahma</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Owner Kuliner Online</p>
                        </div>
                    </div>
                </div>
                <!-- Testimonial 3 -->
                <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-xl" data-aos="fade-up"
                    data-aos-delay="200">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <p class="text-gray-600 dark:text-gray-400 mb-6 italic">
                        "Pelatihan yang diberikan sangat aplikatif. Sekarang saya bisa kelola bisnis digital sendiri
                        dengan percaya diri."
                    </p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-gradient-to-br from-sky-400 to-green-400 rounded-full mr-4"></div>
                        <div>
                            <h4 class="font-bold text-gray-800 dark:text-white">Ahmad Rifai</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Pengusaha Fashion</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-24 bg-white dark:bg-gray-900">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-4xl md:text-5xl font-extrabold mb-4">
                    <span
                        class="bg-gradient-to-r from-sky-600 to-green-600 dark:from-sky-400 dark:to-green-400 bg-clip-text text-transparent">
                        Hubungi Kami
                    </span>
                </h2>
                <p class="text-lg text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                    Siap memulai transformasi digital? Mari diskusikan kebutuhan bisnis Anda
                </p>
            </div>

            <div class="max-w-5xl mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                    <!-- Contact Info -->
                    <div data-aos="fade-right">
                        <h3 class="text-2xl font-bold mb-6 text-gray-800 dark:text-white">Informasi Kontak</h3>
                        <div class="space-y-6">
                            <div class="flex items-start space-x-4">
                                <div
                                    class="w-12 h-12 bg-gradient-to-br from-sky-400 to-green-400 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                        </path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-800 dark:text-white mb-1">Alamat</h4>
                                    <p class="text-gray-600 dark:text-gray-400">Jl. Teknologi Digital No. 123<br>Jakarta
                                        Selatan, Indonesia 12345</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div
                                    class="w-12 h-12 bg-gradient-to-br from-green-400 to-sky-400 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-800 dark:text-white mb-1">Telepon</h4>
                                    <p class="text-gray-600 dark:text-gray-400">+62 812-3456-7890<br>+62 21-1234-5678
                                    </p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div
                                    class="w-12 h-12 bg-gradient-to-br from-sky-400 to-green-400 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-800 dark:text-white mb-1">Email</h4>
                                    <p class="text-gray-600 dark:text-gray-400">info@oxerity.com<br>support@oxerity.com
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Social Media -->
                        <div class="mt-8">
                            <h4 class="font-bold text-gray-800 dark:text-white mb-4">Ikuti Kami</h4>
                            <div class="flex space-x-4">
                                <a href="#"
                                    class="w-12 h-12 bg-gray-100 dark:bg-gray-800 rounded-xl flex items-center justify-center hover:bg-gradient-to-br hover:from-sky-400 hover:to-green-400 hover:text-white transition-all duration-300 transform hover:scale-110">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                    </svg>
                                </a>
                                <a href="#"
                                    class="w-12 h-12 bg-gray-100 dark:bg-gray-800 rounded-xl flex items-center justify-center hover:bg-gradient-to-br hover:from-sky-400 hover:to-green-400 hover:text-white transition-all duration-300 transform hover:scale-110">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                                    </svg>
                                </a>
                                <a href="#"
                                    class="w-12 h-12 bg-gray-100 dark:bg-gray-800 rounded-xl flex items-center justify-center hover:bg-gradient-to-br hover:from-sky-400 hover:to-green-400 hover:text-white transition-all duration-300 transform hover:scale-110">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                                    </svg>
                                </a>
                                <a href="#"
                                    class="w-12 h-12 bg-gray-100 dark:bg-gray-800 rounded-xl flex items-center justify-center hover:bg-gradient-to-br hover:from-sky-400 hover:to-green-400 hover:text-white transition-all duration-300 transform hover:scale-110">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Form -->
                    <div data-aos="fade-left">
                        <form class="space-y-6">
                            <div>
                                <label for="name"
                                    class="block text-sm font-bold text-gray-700 dark:text-gray-300 mb-2">Nama
                                    Lengkap</label>
                                <input type="text" id="name" name="name"
                                    class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-xl bg-white dark:bg-gray-800 text-gray-800 dark:text-white focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-transparent transition-all"
                                    placeholder="Masukkan nama Anda">
                            </div>
                            <div>
                                <label for="email"
                                    class="block text-sm font-bold text-gray-700 dark:text-gray-300 mb-2">Email</label>
                                <input type="email" id="email" name="email"
                                    class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-xl bg-white dark:bg-gray-800 text-gray-800 dark:text-white focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-transparent transition-all"
                                    placeholder="email@anda.com">
                            </div>
                            <div>
                                <label for="phone"
                                    class="block text-sm font-bold text-gray-700 dark:text-gray-300 mb-2">Nomor
                                    Telepon</label>
                                <input type="tel" id="phone" name="phone"
                                    class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-xl bg-white dark:bg-gray-800 text-gray-800 dark:text-white focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-transparent transition-all"
                                    placeholder="+62 812-3456-7890">
                            </div>
                            <div>
                                <label for="message"
                                    class="block text-sm font-bold text-gray-700 dark:text-gray-300 mb-2">Pesan</label>
                                <textarea id="message" name="message" rows="5"
                                    class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-xl bg-white dark:bg-gray-800 text-gray-800 dark:text-white focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-transparent transition-all resize-none"
                                    placeholder="Ceritakan kebutuhan bisnis Anda..."></textarea>
                            </div>
                            <button type="submit"
                                class="w-full px-8 py-4 bg-gradient-to-r from-sky-500 to-green-500 text-white font-bold rounded-xl hover:shadow-2xl hover:shadow-sky-500/50 hover:scale-105 transition-all duration-300">
                                Kirim Pesan
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-sky-500 to-green-500 relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 left-0 w-96 h-96 bg-white rounded-full filter blur-3xl"></div>
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-white rounded-full filter blur-3xl"></div>
        </div>
        <div class="container mx-auto px-6 text-center relative z-10" data-aos="zoom-in">
            <h2 class="text-4xl md:text-5xl font-extrabold text-white mb-6">
                Siap Memulai Transformasi Digital?
            </h2>
            <p class="text-xl text-white/90 mb-8 max-w-2xl mx-auto">
                Bergabunglah dengan ratusan UMKM yang telah sukses bertransformasi digital bersama Oxerity Corp
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#contact"
                    class="inline-flex items-center justify-center px-8 py-4 bg-white text-sky-600 font-bold rounded-full hover:shadow-2xl hover:scale-105 transition-all duration-300">
                    Konsultasi Gratis
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>
                <a href="#services"
                    class="inline-flex items-center justify-center px-8 py-4 border-2 border-white text-white font-bold rounded-full hover:bg-white hover:text-sky-600 transition-all duration-300">
                    Lihat Paket Layanan
                </a>
            </div>
        </div>
    </section>

<x-scroll-button />

@push('scripts')
<script>
    // Form submission handler (you can customize this)
    const contactForm = document.querySelector('#contact form');
    if (contactForm) {
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();
            // Add your form submission logic here
            alert('Terima kasih! Pesan Anda telah dikirim. Tim kami akan segera menghubungi Anda.');
            contactForm.reset();
        });
    }
</script>
@endpush

</x-layouts.app>
