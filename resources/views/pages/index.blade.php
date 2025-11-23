<x-layouts.app>

    <!-- Hero Section with Animated Gradient -->
    <section id="home" class="relative min-h-screen flex items-center overflow-hidden">
        <!-- Animated Background -->
        <div
            class="absolute inset-0 bg-gradient-to-br from-cyan-50 via-purple-50 to-fuchsia-50 dark:from-gray-800 dark:via-gray-900 dark:to-gray-800">
            <div
                class="absolute top-0 -left-4 w-72 h-72 bg-gradient-to-br from-cyan-400 to-teal-500 dark:from-cyan-600 dark:to-teal-700 rounded-full mix-blend-multiply dark:mix-blend-soft-light filter blur-xl opacity-70 animate-blob">
            </div>
            <div
                class="absolute top-0 -right-4 w-72 h-72 bg-gradient-to-br from-fuchsia-400 to-purple-500 dark:from-fuchsia-600 dark:to-purple-700 rounded-full mix-blend-multiply dark:mix-blend-soft-light filter blur-xl opacity-70 animate-blob animation-delay-2000">
            </div>
            <div
                class="absolute -bottom-8 left-20 w-72 h-72 bg-gradient-to-br from-emerald-400 to-cyan-500 dark:from-emerald-600 dark:to-cyan-700 rounded-full mix-blend-multiply dark:mix-blend-soft-light filter blur-xl opacity-70 animate-blob animation-delay-4000">
            </div>
            <div
                class="absolute bottom-20 right-20 w-72 h-72 bg-gradient-to-br from-purple-400 to-fuchsia-500 dark:from-purple-600 dark:to-fuchsia-700 rounded-full mix-blend-multiply dark:mix-blend-soft-light filter blur-xl opacity-70 animate-blob animation-delay-6000">
            </div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="flex flex-col lg:flex-row items-center justify-between">
                <div class="lg:w-1/2 text-center lg:text-left mb-12 lg:mb-0" data-aos="fade-right">
                    <div
                        class="inline-block mb-4 px-4 py-2 bg-gradient-to-r from-cyan-100 to-purple-100 dark:from-cyan-900/30 dark:to-purple-900/30 rounded-full border border-cyan-200 dark:border-cyan-700">
                        <span class="text-sm font-semibold bg-gradient-to-r from-cyan-700 to-fuchsia-700 dark:from-cyan-300 dark:to-fuchsia-300 bg-clip-text text-transparent">
                            🚀 Solusi Digital untuk UMKM
                        </span>
                    </div>
                    <h1 class="text-5xl md:text-6xl lg:text-7xl font-extrabold leading-tight mb-6">
                        <span
                            class="bg-gradient-to-r from-purple-400 to-cyan-500 dark:from-cyan-400 dark:via-teal-400 dark:to-emerald-400 bg-clip-text text-transparent">
                            Membawa UMKM
                        </span>
                        <br>
                        <span class="text-gray-800 dark:text-white">
                            ke Era Digital
                        </span>
                    </h1>
                    <p class="text-lg md:text-xl text-gray-600 dark:text-gray-300 mb-8 max-w-2xl mx-auto lg:mx-0">
                        Transformasi digital yang mudah dan terjangkau. Kami membantu UMKM berkembang melalui teknologi
                        inovatif dan pendampingan berkelanjutan.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start mb-6">
                        <a href="#services"
                            class="group relative inline-flex items-center justify-center px-8 py-4 font-bold text-white transition-all duration-200 bg-gradient-to-r from-cyan-500 via-teal-500 to-emerald-500 rounded-full hover:shadow-2xl hover:shadow-cyan-500/50 hover:scale-105">
                            Mulai Sekarang
                            <i class="ri-arrow-right-line text-xl ml-2 transition-transform group-hover:translate-x-1"></i>
                        </a>
                        <a href="#about"
                            class="group inline-flex items-center justify-center px-8 py-4 font-bold text-gray-800 dark:text-white bg-white dark:bg-gray-800 border-2 border-gray-300 dark:border-gray-600 rounded-full hover:border-cyan-500 dark:hover:border-cyan-400 hover:shadow-xl transition-all duration-200">
                            Pelajari Lebih Lanjut
                            <i class="ri-arrow-right-line text-xl ml-2"></i>
                        </a>
                    </div>
                    
                    <!-- Social Media Links -->
                    <div class="flex items-center gap-3 justify-center lg:justify-start">
                        <span class="text-sm font-semibold text-gray-600 dark:text-gray-400">Ikuti Kami:</span>
                        <div class="flex gap-2">
                            <a href="#" target="_blank"
                                class="w-10 h-10 bg-white dark:bg-gray-800 rounded-lg flex items-center justify-center hover:bg-gradient-to-br hover:from-cyan-400 hover:to-purple-400 text-gray-700 dark:text-gray-300 hover:text-white transition-all duration-300 transform hover:scale-110 shadow-md">
                                <i class="ri-facebook-fill text-xl"></i>
                            </a>
                            <a href="#" target="_blank"
                                class="w-10 h-10 bg-white dark:bg-gray-800 rounded-lg flex items-center justify-center hover:bg-gradient-to-br hover:from-purple-400 hover:to-fuchsia-400 text-gray-700 dark:text-gray-300 hover:text-white transition-all duration-300 transform hover:scale-110 shadow-md">
                                <i class="ri-instagram-fill text-xl"></i>
                            </a>
                            <a href="#" target="_blank"
                                class="w-10 h-10 bg-white dark:bg-gray-800 rounded-lg flex items-center justify-center hover:bg-gradient-to-br hover:from-cyan-400 hover:to-blue-400 text-gray-700 dark:text-gray-300 hover:text-white transition-all duration-300 transform hover:scale-110 shadow-md">
                                <i class="ri-twitter-x-fill text-xl"></i>
                            </a>
                            <a href="#" target="_blank"
                                class="w-10 h-10 bg-white dark:bg-gray-800 rounded-lg flex items-center justify-center hover:bg-gradient-to-br hover:from-emerald-400 hover:to-teal-400 text-gray-700 dark:text-gray-300 hover:text-white transition-all duration-300 transform hover:scale-110 shadow-md">
                                <i class="ri-linkedin-fill text-xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/2" data-aos="fade-left">
                    <div class="relative">
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-cyan-400 via-purple-400 to-fuchsia-400 rounded-3xl transform rotate-6 scale-105 opacity-20">
                        </div>
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2015&auto=format&fit=crop"
                            alt="Digital Transformation" class="relative rounded-3xl shadow-2xl">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-20 bg-white dark:bg-gray-900">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center" data-aos="fade-up" data-aos-delay="0">
                    <div
                        class="text-4xl md:text-5xl font-extrabold bg-gradient-to-r from-cyan-600 via-teal-600 to-emerald-600 bg-clip-text text-transparent mb-2">
                        500+</div>
                    <div class="text-gray-600 dark:text-gray-400 font-medium">UMKM Terbantu</div>
                </div>
                <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="text-4xl md:text-5xl font-extrabold bg-gradient-to-r from-purple-600 via-fuchsia-600 to-pink-600 bg-clip-text text-transparent mb-2">
                        98%</div>
                    <div class="text-gray-600 dark:text-gray-400 font-medium">Tingkat Kepuasan</div>
                </div>
                <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="text-4xl md:text-5xl font-extrabold bg-gradient-to-r from-cyan-600 via-teal-600 to-emerald-600 bg-clip-text text-transparent mb-2">
                        50+</div>
                    <div class="text-gray-600 dark:text-gray-400 font-medium">Kota di Indonesia</div>
                </div>
                <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                    <div
                        class="text-4xl md:text-5xl font-extrabold bg-gradient-to-r from-purple-600 via-fuchsia-600 to-pink-600 bg-clip-text text-transparent mb-2">
                        24/7</div>
                    <div class="text-gray-600 dark:text-gray-400 font-medium">Dukungan Pelanggan</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-24 relative overflow-hidden bg-white dark:bg-gray-900">
        <div class="absolute inset-0 bg-gradient-to-br from-cyan-50 via-purple-50 to-fuchsia-50 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900 opacity-50">
        </div>
        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-4xl md:text-5xl font-extrabold mb-4">
                    <span
                        class="bg-gradient-to-r from-cyan-600 via-purple-600 to-fuchsia-600 dark:from-cyan-400 dark:via-purple-400 dark:to-fuchsia-400 bg-clip-text text-transparent">
                        Layanan Kami
                    </span>
                </h2>
                <p class="text-lg text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                    Solusi komprehensif untuk mengakselerasi pertumbuhan bisnis digital Anda
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service Card 1 -->
                <div class="group relative" data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-cyan-400 via-teal-400 to-emerald-400 rounded-2xl blur opacity-25 group-hover:opacity-75 transition duration-500">
                    </div>
                    <div
                        class="relative bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 border border-gray-100 dark:border-gray-700 h-full">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-cyan-400 via-teal-400 to-emerald-400 rounded-xl flex items-center justify-center mb-6 transform group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                            <i class="ri-global-line text-4xl text-white"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-3 text-gray-800 dark:text-white">Digitalisasi UMKM</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-6">
                            Solusi lengkap untuk membawa bisnis Anda online, mulai dari pembuatan website, toko online,
                            hingga integrasi sistem pembayaran digital.
                        </p>
                        <ul class="space-y-2">
                            <li class="flex items-center text-sm text-gray-600 dark:text-gray-400">
                                <i class="ri-checkbox-circle-fill text-xl text-emerald-500 mr-2"></i>
                                Website Professional
                            </li>
                            <li class="flex items-center text-sm text-gray-600 dark:text-gray-400">
                                <i class="ri-checkbox-circle-fill text-xl text-emerald-500 mr-2"></i>
                                E-Commerce Platform
                            </li>
                            <li class="flex items-center text-sm text-gray-600 dark:text-gray-400">
                                <i class="ri-checkbox-circle-fill text-xl text-emerald-500 mr-2"></i>
                                Payment Gateway
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Service Card 2 -->
                <div class="group relative" data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-purple-400 via-fuchsia-400 to-pink-400 rounded-2xl blur opacity-25 group-hover:opacity-75 transition duration-500">
                    </div>
                    <div
                        class="relative bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 border border-gray-100 dark:border-gray-700 h-full">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-purple-400 via-fuchsia-400 to-pink-400 rounded-xl flex items-center justify-center mb-6 transform group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                            <i class="ri-flashlight-fill text-4xl text-white"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-3 text-gray-800 dark:text-white">Pemberdayaan Digital</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-6">
                            Pelatihan dan pendampingan komprehensif untuk meningkatkan literasi digital, strategi
                            marketing, dan manajemen bisnis modern.
                        </p>
                        <ul class="space-y-2">
                            <li class="flex items-center text-sm text-gray-600 dark:text-gray-400">
                                <i class="ri-checkbox-circle-fill text-xl text-fuchsia-500 mr-2"></i>
                                Digital Marketing Training
                            </li>
                            <li class="flex items-center text-sm text-gray-600 dark:text-gray-400">
                                <i class="ri-checkbox-circle-fill text-xl text-fuchsia-500 mr-2"></i>
                                Business Mentoring
                            </li>
                            <li class="flex items-center text-sm text-gray-600 dark:text-gray-400">
                                <i class="ri-checkbox-circle-fill text-xl text-fuchsia-500 mr-2"></i>
                                Social Media Strategy
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Service Card 3 -->
                <div class="group relative" data-aos="fade-up" data-aos-delay="300">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-cyan-400 via-purple-400 to-fuchsia-400 rounded-2xl blur opacity-25 group-hover:opacity-75 transition duration-500">
                    </div>
                    <div
                        class="relative bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 border border-gray-100 dark:border-gray-700 h-full">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-cyan-400 via-purple-400 to-fuchsia-400 rounded-xl flex items-center justify-center mb-6 transform group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                            <i class="ri-bar-chart-box-fill text-4xl text-white"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-3 text-gray-800 dark:text-white">Analitik & Strategi</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-6">
                            Manfaatkan kekuatan data untuk pertumbuhan bisnis. Kami menyediakan layanan analitik
                            mendalam untuk keputusan yang lebih tepat.
                        </p>
                        <ul class="space-y-2">
                            <li class="flex items-center text-sm text-gray-600 dark:text-gray-400">
                                <i class="ri-checkbox-circle-fill text-xl text-cyan-500 mr-2"></i>
                                Business Analytics
                            </li>
                            <li class="flex items-center text-sm text-gray-600 dark:text-gray-400">
                                <i class="ri-checkbox-circle-fill text-xl text-cyan-500 mr-2"></i>
                                Market Research
                            </li>
                            <li class="flex items-center text-sm text-gray-600 dark:text-gray-400">
                                <i class="ri-checkbox-circle-fill text-xl text-cyan-500 mr-2"></i>
                                Performance Tracking
                            </li>
                        </ul>
                    </div>
                </div>
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
                            class="absolute -inset-4 bg-gradient-to-r from-cyan-400 via-purple-400 to-fuchsia-400 rounded-3xl blur-2xl opacity-20">
                        </div>
                        <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?q=80&w=2084&auto=format&fit=crop"
                            alt="Team working together" class="relative rounded-3xl shadow-2xl">
                        <div class="absolute -bottom-6 -right-6 bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-xl">
                            <div class="flex items-center space-x-3">
                                <div
                                    class="w-12 h-12 bg-gradient-to-br from-cyan-400 via-purple-400 to-fuchsia-400 rounded-full flex items-center justify-center">
                                    <i class="ri-checkbox-circle-fill text-2xl text-white"></i>
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
                        class="inline-block mb-4 px-4 py-2 bg-gradient-to-r from-cyan-100 to-purple-100 dark:from-cyan-900/30 dark:to-purple-900/30 rounded-full border border-cyan-200 dark:border-cyan-700">
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-700 to-fuchsia-700 dark:from-cyan-300 dark:to-fuchsia-300 text-sm font-semibold">
                            Tentang Kami
                        </span>
                    </div>
                    <h2 class="text-4xl md:text-5xl font-extrabold mb-6">
                        <span
                            class="bg-gradient-to-r from-cyan-600 via-purple-600 to-fuchsia-600 dark:from-cyan-400 dark:via-purple-400 dark:to-fuchsia-400 bg-clip-text text-transparent">
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
                                class="w-10 h-10 bg-gradient-to-br from-cyan-100 to-teal-100 dark:from-cyan-900/30 dark:to-teal-900/30 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="ri-checkbox-circle-line text-xl text-cyan-600 dark:text-cyan-400"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 dark:text-white mb-1">Tim Profesional</h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400">Expert berpengalaman</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <div
                                class="w-10 h-10 bg-gradient-to-br from-purple-100 to-fuchsia-100 dark:from-purple-900/30 dark:to-fuchsia-900/30 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="ri-flashlight-fill text-xl text-fuchsia-600 dark:text-fuchsia-400"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 dark:text-white mb-1">Solusi Inovatif</h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400">Teknologi terkini</p>
                            </div>
                        </div>
                    </div>
                    <a href="#contact"
                        class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-cyan-500 via-purple-500 to-fuchsia-500 text-white font-bold rounded-full hover:shadow-xl hover:scale-105 transition-all duration-200">
                        Hubungi Kami
                        <i class="ri-arrow-right-line text-xl ml-2"></i>
                    </a>
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="py-24 bg-white dark:bg-gray-900 relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-cyan-50 via-purple-50 to-fuchsia-50 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900 opacity-50"></div>
        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-4xl md:text-5xl font-extrabold mb-4">
                    <span
                        class="bg-gradient-to-r from-cyan-600 via-purple-600 to-fuchsia-600 dark:from-cyan-400 dark:via-purple-400 dark:to-fuchsia-400 bg-clip-text text-transparent">
                        Tim Kami
                    </span>
                </h2>
                <p class="text-lg text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                    Kenali tim profesional yang siap membantu transformasi digital bisnis Anda
                </p>
            </div>

            <!-- Founder Team -->
            <div class="mb-16" data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-2xl md:text-3xl font-bold text-center mb-10 text-gray-800 dark:text-white">
                    <span class="bg-gradient-to-r from-cyan-600 to-purple-600 dark:from-cyan-400 dark:to-purple-400 bg-clip-text text-transparent">
                        Founder Team
                    </span>
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                    <!-- CEO -->
                    <div class="group" data-aos="fade-up" data-aos-delay="150">
                        <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 border border-gray-100 dark:border-gray-700 text-center hover:-translate-y-2 hover:border-cyan-400 dark:hover:border-cyan-400 cursor-pointer">
                            <div class="relative inline-block mb-6">
                                <div class="absolute inset-0 bg-gradient-to-br from-cyan-400 to-purple-400 rounded-full blur-lg opacity-50 group-hover:opacity-100 transition-opacity duration-500"></div>
                                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&h=400&fit=crop" 
                                     alt="CEO" 
                                     class="relative w-32 h-32 rounded-full object-cover border-4 border-white dark:border-gray-700 shadow-lg group-hover:scale-110 transition-transform duration-500">
                                <div class="absolute bottom-0 right-0 w-10 h-10 bg-gradient-to-br from-cyan-500 to-purple-500 rounded-full flex items-center justify-center border-4 border-white dark:border-gray-800">
                                    <i class="ri-star-fill text-lg text-white"></i>
                                </div>
                            </div>
                            <h4 class="text-2xl font-bold text-gray-800 dark:text-white mb-2">Arya Pratama</h4>
                            <p class="text-cyan-600 dark:text-cyan-400 font-semibold mb-3">Chief Executive Officer</p>
                            <p class="text-gray-600 dark:text-gray-400 text-sm mb-4">
                                Visioner dengan 10+ tahun pengalaman dalam digital transformation dan business strategy
                            </p>
                            <div class="flex justify-center space-x-3">
                                <a href="#" class="w-8 h-8 bg-gray-100 dark:bg-gray-700 rounded-full flex items-center justify-center hover:bg-cyan-500 hover:text-white transition-colors">
                                    <i class="ri-linkedin-fill"></i>
                                </a>
                                <a href="#" class="w-8 h-8 bg-gray-100 dark:bg-gray-700 rounded-full flex items-center justify-center hover:bg-cyan-500 hover:text-white transition-colors">
                                    <i class="ri-twitter-x-fill"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- CTO -->
                    <div class="group" data-aos="fade-up" data-aos-delay="200">
                        <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 border border-gray-100 dark:border-gray-700 text-center hover:-translate-y-2 hover:border-purple-400 dark:hover:border-purple-400 cursor-pointer">
                            <div class="relative inline-block mb-6">
                                <div class="absolute inset-0 bg-gradient-to-br from-purple-400 to-fuchsia-400 rounded-full blur-lg opacity-50 group-hover:opacity-100 transition-opacity duration-500"></div>
                                <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=400&h=400&fit=crop" 
                                     alt="CTO" 
                                     class="relative w-32 h-32 rounded-full object-cover border-4 border-white dark:border-gray-700 shadow-lg group-hover:scale-110 transition-transform duration-500">
                                <div class="absolute bottom-0 right-0 w-10 h-10 bg-gradient-to-br from-purple-500 to-fuchsia-500 rounded-full flex items-center justify-center border-4 border-white dark:border-gray-800">
                                    <i class="ri-code-s-slash-fill text-lg text-white"></i>
                                </div>
                            </div>
                            <h4 class="text-2xl font-bold text-gray-800 dark:text-white mb-2">Budi Santoso</h4>
                            <p class="text-purple-600 dark:text-purple-400 font-semibold mb-3">Chief Technology Officer</p>
                            <p class="text-gray-600 dark:text-gray-400 text-sm mb-4">
                                Expert teknologi dengan spesialisasi cloud architecture dan AI implementation
                            </p>
                            <div class="flex justify-center space-x-3">
                                <a href="#" class="w-8 h-8 bg-gray-100 dark:bg-gray-700 rounded-full flex items-center justify-center hover:bg-purple-500 hover:text-white transition-colors">
                                    <i class="ri-linkedin-fill"></i>
                                </a>
                                <a href="#" class="w-8 h-8 bg-gray-100 dark:bg-gray-700 rounded-full flex items-center justify-center hover:bg-purple-500 hover:text-white transition-colors">
                                    <i class="ri-github-fill"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Divisions -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Business Development Division -->
                <div class="group" data-aos="fade-up" data-aos-delay="250">
                    <div class="bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-xl border border-gray-100 dark:border-gray-700 h-full hover:-translate-y-2 hover:shadow-2xl transition-all duration-500 hover:border-cyan-400 dark:hover:border-cyan-400 cursor-pointer">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-gradient-to-br from-cyan-400 to-teal-400 rounded-lg flex items-center justify-center mr-4 group-hover:scale-110 group-hover:rotate-6 transition-all duration-500">
                                <i class="ri-briefcase-fill text-2xl text-white"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 dark:text-white">Business Development</h3>
                        </div>
                        <div class="space-y-4">
                            <div class="flex items-center hover:bg-cyan-50 dark:hover:bg-gray-700 p-2 rounded-lg transition-all duration-300">
                                <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=200&h=200&fit=crop" 
                                     alt="Team Member" 
                                     class="w-14 h-14 rounded-full object-cover border-2 border-cyan-400 mr-3 hover:scale-110 transition-transform duration-300">
                                <div>
                                    <h5 class="font-semibold text-gray-800 dark:text-white">Siti Nurhaliza</h5>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">Division Head</p>
                                </div>
                            </div>
                            <div class="flex items-center hover:bg-cyan-50 dark:hover:bg-gray-700 p-2 rounded-lg transition-all duration-300">
                                <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?w=200&h=200&fit=crop" 
                                     alt="Team Member" 
                                     class="w-14 h-14 rounded-full object-cover border-2 border-cyan-300 mr-3 hover:scale-110 transition-transform duration-300">
                                <div>
                                    <h5 class="font-semibold text-gray-800 dark:text-white">Dewi Lestari</h5>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">Senior BD Manager</p>
                                </div>
                            </div>
                            <div class="flex items-center hover:bg-cyan-50 dark:hover:bg-gray-700 p-2 rounded-lg transition-all duration-300">
                                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=200&h=200&fit=crop" 
                                     alt="Team Member" 
                                     class="w-14 h-14 rounded-full object-cover border-2 border-cyan-300 mr-3 hover:scale-110 transition-transform duration-300">
                                <div>
                                    <h5 class="font-semibold text-gray-800 dark:text-white">Ahmad Rifai</h5>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">BD Specialist</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Digital Marketing Division -->
                <div class="group" data-aos="fade-up" data-aos-delay="300">
                    <div class="bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-xl border border-gray-100 dark:border-gray-700 h-full hover:-translate-y-2 hover:shadow-2xl transition-all duration-500 hover:border-purple-400 dark:hover:border-purple-400 cursor-pointer">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-gradient-to-br from-purple-400 to-fuchsia-400 rounded-lg flex items-center justify-center mr-4 group-hover:scale-110 group-hover:rotate-6 transition-all duration-500">
                                <i class="ri-pie-chart-fill text-2xl text-white"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 dark:text-white">Digital Marketing</h3>
                        </div>
                        <div class="space-y-4">
                            <div class="flex items-center hover:bg-purple-50 dark:hover:bg-gray-700 p-2 rounded-lg transition-all duration-300">
                                <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=200&h=200&fit=crop" 
                                     alt="Team Member" 
                                     class="w-14 h-14 rounded-full object-cover border-2 border-purple-400 mr-3 hover:scale-110 transition-transform duration-300">
                                <div>
                                    <h5 class="font-semibold text-gray-800 dark:text-white">Maya Putri</h5>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">Division Head</p>
                                </div>
                            </div>
                            <div class="flex items-center hover:bg-purple-50 dark:hover:bg-gray-700 p-2 rounded-lg transition-all duration-300">
                                <img src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?w=200&h=200&fit=crop" 
                                     alt="Team Member" 
                                     class="w-14 h-14 rounded-full object-cover border-2 border-purple-300 mr-3 hover:scale-110 transition-transform duration-300">
                                <div>
                                    <h5 class="font-semibold text-gray-800 dark:text-white">Rina Wijaya</h5>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">Content Strategist</p>
                                </div>
                            </div>
                            <div class="flex items-center hover:bg-purple-50 dark:hover:bg-gray-700 p-2 rounded-lg transition-all duration-300">
                                <img src="https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?w=200&h=200&fit=crop" 
                                     alt="Team Member" 
                                     class="w-14 h-14 rounded-full object-cover border-2 border-purple-300 mr-3 hover:scale-110 transition-transform duration-300">
                                <div>
                                    <h5 class="font-semibold text-gray-800 dark:text-white">Eko Prasetyo</h5>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">SEO Specialist</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Software Engineer Division -->
                <div class="group" data-aos="fade-up" data-aos-delay="350">
                    <div class="bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-xl border border-gray-100 dark:border-gray-700 h-full hover:-translate-y-2 hover:shadow-2xl transition-all duration-500 hover:border-emerald-400 dark:hover:border-emerald-400 cursor-pointer">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-gradient-to-br from-emerald-400 to-cyan-400 rounded-lg flex items-center justify-center mr-4 group-hover:scale-110 group-hover:rotate-6 transition-all duration-500">
                                <i class="ri-code-s-slash-line text-2xl text-white"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 dark:text-white">Software Engineer</h3>
                        </div>
                        <div class="space-y-4">
                            <div class="flex items-center hover:bg-emerald-50 dark:hover:bg-gray-700 p-2 rounded-lg transition-all duration-300">
                                <img src="https://images.unsplash.com/photo-1566492031773-4f4e44671857?w=200&h=200&fit=crop" 
                                     alt="Team Member" 
                                     class="w-14 h-14 rounded-full object-cover border-2 border-emerald-400 mr-3 hover:scale-110 transition-transform duration-300">
                                <div>
                                    <h5 class="font-semibold text-gray-800 dark:text-white">Reza Firmansyah</h5>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">Division Head</p>
                                </div>
                            </div>
                            <div class="flex items-center hover:bg-emerald-50 dark:hover:bg-gray-700 p-2 rounded-lg transition-all duration-300">
                                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=200&h=200&fit=crop" 
                                     alt="Team Member" 
                                     class="w-14 h-14 rounded-full object-cover border-2 border-emerald-300 mr-3 hover:scale-110 transition-transform duration-300">
                                <div>
                                    <h5 class="font-semibold text-gray-800 dark:text-white">Ilham Saputra</h5>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">Full Stack Developer</p>
                                </div>
                            </div>
                            <div class="flex items-center hover:bg-emerald-50 dark:hover:bg-gray-700 p-2 rounded-lg transition-all duration-300">
                                <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=200&h=200&fit=crop" 
                                     alt="Team Member" 
                                     class="w-14 h-14 rounded-full object-cover border-2 border-emerald-300 mr-3 hover:scale-110 transition-transform duration-300">
                                <div>
                                    <h5 class="font-semibold text-gray-800 dark:text-white">Dimas Pratama</h5>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">Frontend Developer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-24 bg-white dark:bg-gray-900 relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-cyan-50 via-purple-50 to-fuchsia-50 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900 opacity-50"></div>
        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-4xl md:text-5xl font-extrabold mb-4">
                    <span
                        class="bg-gradient-to-r from-cyan-600 via-purple-600 to-fuchsia-600 dark:from-cyan-400 dark:via-purple-400 dark:to-fuchsia-400 bg-clip-text text-transparent">
                        Rating & Testimoni
                    </span>
                </h2>
                <p class="text-lg text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                    Dengar pengalaman dari para pelaku UMKM yang telah bertransformasi bersama kami
                </p>
                
                <!-- Overall Rating -->
                <div class="mt-8 inline-flex items-center gap-6 bg-white dark:bg-gray-800 rounded-2xl px-8 py-6 shadow-xl border border-gray-100 dark:border-gray-700">
                    <div class="text-center">
                        <div class="text-5xl font-extrabold bg-gradient-to-r from-cyan-600 to-purple-600 dark:from-cyan-400 dark:to-purple-400 bg-clip-text text-transparent">4.9</div>
                        <div class="flex items-center justify-center mt-2 mb-1">
                            <i class="ri-star-fill text-xl text-yellow-400"></i>
                            <i class="ri-star-fill text-xl text-yellow-400"></i>
                            <i class="ri-star-fill text-xl text-yellow-400"></i>
                            <i class="ri-star-fill text-xl text-yellow-400"></i>
                            <i class="ri-star-fill text-xl text-yellow-400"></i>
                        </div>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Rating rata-rata</p>
                    </div>
                    <div class="h-16 w-px bg-gray-300 dark:bg-gray-600"></div>
                    <div class="text-center">
                        <div class="text-5xl font-extrabold bg-gradient-to-r from-purple-600 to-fuchsia-600 dark:from-purple-400 dark:to-fuchsia-400 bg-clip-text text-transparent">500+</div>
                        <p class="text-sm text-gray-600 dark:text-gray-400 mt-2">Review positif</p>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-xl border border-gray-100 dark:border-gray-700" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            <i class="ri-star-fill text-lg"></i>
                            <i class="ri-star-fill text-lg"></i>
                            <i class="ri-star-fill text-lg"></i>
                            <i class="ri-star-fill text-lg"></i>
                            <i class="ri-star-fill text-lg"></i>
                        </div>
                    </div>
                    <p class="text-gray-600 dark:text-gray-400 mb-6 italic">
                        "Oxerity Corp sangat membantu bisnis saya berkembang pesat. Dalam 6 bulan, penjualan online
                        meningkat 300%!"
                    </p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-gradient-to-br from-cyan-400 to-teal-400 rounded-full mr-4"></div>
                        <div>
                            <h4 class="font-bold text-gray-800 dark:text-white">Budi Santoso</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Pemilik Toko Kerajinan</p>
                        </div>
                    </div>
                </div>
                <!-- Testimonial 2 -->
                <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-xl border border-gray-100 dark:border-gray-700" data-aos="fade-up"
                    data-aos-delay="200">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                        </div>
                    </div>
                    <p class="text-gray-600 dark:text-gray-400 mb-6 italic">
                        "Tim yang sangat responsif dan profesional. Mereka benar-benar memahami kebutuhan bisnis kami."
                    </p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-gradient-to-br from-purple-400 to-fuchsia-400 rounded-full mr-4"></div>
                        <div>
                            <h4 class="font-bold text-gray-800 dark:text-white">Siti Rahma</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Owner Kuliner Online</p>
                        </div>
                    </div>
                </div>
                <!-- Testimonial 3 -->
                <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-xl border border-gray-100 dark:border-gray-700" data-aos="fade-up"
                    data-aos-delay="300">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                        </div>
                    </div>
                    <p class="text-gray-600 dark:text-gray-400 mb-6 italic">
                        "Pelatihan yang diberikan sangat aplikatif. Sekarang saya bisa kelola bisnis digital sendiri
                        dengan percaya diri."
                    </p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-gradient-to-br from-emerald-400 to-cyan-400 rounded-full mr-4"></div>
                        <div>
                            <h4 class="font-bold text-gray-800 dark:text-white">Ahmad Rifai</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Pengusaha Fashion</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQs Section -->
    <section id="faqs" class="py-24 bg-white dark:bg-gray-900">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-4xl md:text-5xl font-extrabold mb-4">
                    <span
                        class="bg-gradient-to-r from-cyan-600 via-purple-600 to-fuchsia-600 dark:from-cyan-400 dark:via-purple-400 dark:to-fuchsia-400 bg-clip-text text-transparent">
                        Pertanyaan yang Sering Diajukan
                    </span>
                </h2>
                <p class="text-lg text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                    Temukan jawaban untuk pertanyaan umum tentang layanan kami
                </p>
            </div>
            
            <div class="max-w-4xl mx-auto space-y-4">
                <!-- FAQ Item 1 -->
                <div class="bg-gradient-to-br from-cyan-50 to-purple-50 dark:from-gray-800 dark:to-gray-800 rounded-2xl overflow-hidden border border-gray-100 dark:border-gray-700" data-aos="fade-up" data-aos-delay="100">
                    <details class="group">
                        <summary class="flex items-center justify-between p-6 cursor-pointer list-none">
                            <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                                Apa saja layanan yang ditawarkan oleh Oxerity Corp?
                            </h3>
                            <i class="ri-arrow-down-s-line text-2xl text-cyan-600 dark:text-cyan-400 transform group-open:rotate-180 transition-transform"></i>
                        </summary>
                        <div class="px-6 pb-6 text-gray-600 dark:text-gray-400">
                            Kami menyediakan berbagai layanan termasuk digitalisasi UMKM (pembuatan website, toko online, payment gateway), pemberdayaan digital (pelatihan digital marketing, business mentoring), dan analitik & strategi bisnis untuk membantu UMKM berkembang di era digital.
                        </div>
                    </details>
                </div>

                <!-- FAQ Item 2 -->
                <div class="bg-gradient-to-br from-purple-50 to-fuchsia-50 dark:from-gray-800 dark:to-gray-800 rounded-2xl overflow-hidden border border-gray-100 dark:border-gray-700" data-aos="fade-up" data-aos-delay="200">
                    <details class="group">
                        <summary class="flex items-center justify-between p-6 cursor-pointer list-none">
                            <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                                Berapa lama waktu yang dibutuhkan untuk membangun website?
                            </h3>
                            <i class="ri-arrow-down-s-line text-2xl text-purple-600 dark:text-purple-400 transform group-open:rotate-180 transition-transform"></i>
                        </summary>
                        <div class="px-6 pb-6 text-gray-600 dark:text-gray-400">
                            Waktu pengembangan website bervariasi tergantung kompleksitas dan kebutuhan. Untuk website standar, biasanya memakan waktu 2-4 minggu. Sedangkan untuk toko online atau platform yang lebih kompleks, bisa memakan waktu 4-8 minggu. Kami akan memberikan timeline yang jelas di awal proyek.
                        </div>
                    </details>
                </div>

                <!-- FAQ Item 3 -->
                <div class="bg-gradient-to-br from-cyan-50 to-teal-50 dark:from-gray-800 dark:to-gray-800 rounded-2xl overflow-hidden border border-gray-100 dark:border-gray-700" data-aos="fade-up" data-aos-delay="300">
                    <details class="group">
                        <summary class="flex items-center justify-between p-6 cursor-pointer list-none">
                            <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                                Apakah ada paket berlangganan untuk maintenance website?
                            </h3>
                            <i class="ri-arrow-down-s-line text-2xl text-teal-600 dark:text-teal-400 transform group-open:rotate-180 transition-transform"></i>
                        </summary>
                        <div class="px-6 pb-6 text-gray-600 dark:text-gray-400">
                            Ya, kami menyediakan paket maintenance bulanan yang mencakup update keamanan, backup rutin, technical support, dan minor updates. Paket ini dirancang agar website Anda selalu berjalan optimal dan aman. Hubungi kami untuk informasi detail mengenai paket maintenance.
                        </div>
                    </details>
                </div>

                <!-- FAQ Item 4 -->
                <div class="bg-gradient-to-br from-fuchsia-50 to-pink-50 dark:from-gray-800 dark:to-gray-800 rounded-2xl overflow-hidden border border-gray-100 dark:border-gray-700" data-aos="fade-up" data-aos-delay="400">
                    <details class="group">
                        <summary class="flex items-center justify-between p-6 cursor-pointer list-none">
                            <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                                Bagaimana cara memulai kerjasama dengan Oxerity Corp?
                            </h3>
                            <i class="ri-arrow-down-s-line text-2xl text-fuchsia-600 dark:text-fuchsia-400 transform group-open:rotate-180 transition-transform"></i>
                        </summary>
                        <div class="px-6 pb-6 text-gray-600 dark:text-gray-400">
                            Sangat mudah! Anda bisa mengisi formulir kontak di website kami atau menghubungi tim kami melalui WhatsApp/email. Kami akan mengatur sesi konsultasi gratis untuk memahami kebutuhan bisnis Anda dan merekomendasikan solusi terbaik. Setelah itu, kami akan membuat proposal dan timeline proyek untuk persetujuan Anda.
                        </div>
                    </details>
                </div>

                <!-- FAQ Item 5 -->
                <div class="bg-gradient-to-br from-emerald-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 rounded-2xl overflow-hidden border border-gray-100 dark:border-gray-700" data-aos="fade-up" data-aos-delay="500">
                    <details class="group">
                        <summary class="flex items-center justify-between p-6 cursor-pointer list-none">
                            <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                                Apakah Oxerity Corp menyediakan pelatihan untuk tim internal kami?
                            </h3>
                            <i class="ri-arrow-down-s-line text-2xl text-emerald-600 dark:text-emerald-400 transform group-open:rotate-180 transition-transform"></i>
                        </summary>
                        <div class="px-6 pb-6 text-gray-600 dark:text-gray-400">
                            Tentu! Kami menyediakan program pelatihan khusus untuk tim internal, termasuk digital marketing, manajemen website, social media strategy, dan penggunaan tools analytics. Pelatihan dapat disesuaikan dengan kebutuhan spesifik bisnis Anda dan dapat dilakukan secara online maupun offline.
                        </div>
                    </details>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-24 bg-white dark:bg-gray-900 relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-cyan-50 via-purple-50 to-fuchsia-50 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900 opacity-50"></div>
        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-4xl md:text-5xl font-extrabold mb-4">
                    <span
                        class="bg-gradient-to-r from-cyan-600 via-purple-600 to-fuchsia-600 dark:from-cyan-400 dark:via-purple-400 dark:to-fuchsia-400 bg-clip-text text-transparent">
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
                                    class="w-12 h-12 bg-gradient-to-br from-cyan-400 via-teal-400 to-emerald-400 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <i class="ri-map-pin-fill text-3xl text-white"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-800 dark:text-white mb-1">Alamat</h4>
                                    <p class="text-gray-600 dark:text-gray-400">Jl. Teknologi Digital No. 123<br>Jakarta
                                        Selatan, Indonesia 12345</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div
                                    class="w-12 h-12 bg-gradient-to-br from-purple-400 via-fuchsia-400 to-pink-400 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <i class="ri-phone-fill text-3xl text-white"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-800 dark:text-white mb-1">Telepon</h4>
                                    <p class="text-gray-600 dark:text-gray-400">+62 812-3456-7890<br>+62 21-1234-5678
                                    </p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div
                                    class="w-12 h-12 bg-gradient-to-br from-emerald-400 via-cyan-400 to-teal-400 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <i class="ri-mail-fill text-3xl text-white"></i>
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
                                    class="w-12 h-12 bg-gray-100 dark:bg-gray-800 rounded-xl flex items-center justify-center hover:bg-gradient-to-br hover:from-cyan-400 hover:to-teal-400 hover:text-white transition-all duration-300 transform hover:scale-110">
                                    <i class="ri-facebook-fill text-2xl"></i>
                                </a>
                                <a href="#"
                                    class="w-12 h-12 bg-gray-100 dark:bg-gray-800 rounded-xl flex items-center justify-center hover:bg-gradient-to-br hover:from-purple-400 hover:to-fuchsia-400 hover:text-white transition-all duration-300 transform hover:scale-110">
                                    <i class="ri-instagram-fill text-2xl"></i>
                                </a>
                                <a href="#"
                                    class="w-12 h-12 bg-gray-100 dark:bg-gray-800 rounded-xl flex items-center justify-center hover:bg-gradient-to-br hover:from-cyan-400 hover:to-blue-400 hover:text-white transition-all duration-300 transform hover:scale-110">
                                    <i class="ri-twitter-x-fill text-2xl"></i>
                                </a>
                                <a href="#"
                                    class="w-12 h-12 bg-gray-100 dark:bg-gray-800 rounded-xl flex items-center justify-center hover:bg-gradient-to-br hover:from-emerald-400 hover:to-teal-400 hover:text-white transition-all duration-300 transform hover:scale-110">
                                    <i class="ri-linkedin-fill text-2xl"></i>
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
                                    class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-xl bg-white dark:bg-gray-800 text-gray-800 dark:text-white focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent transition-all"
                                    placeholder="Masukkan nama Anda">
                            </div>
                            <div>
                                <label for="email"
                                    class="block text-sm font-bold text-gray-700 dark:text-gray-300 mb-2">Email</label>
                                <input type="email" id="email" name="email"
                                    class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-xl bg-white dark:bg-gray-800 text-gray-800 dark:text-white focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all"
                                    placeholder="email@anda.com">
                            </div>
                            <div>
                                <label for="phone"
                                    class="block text-sm font-bold text-gray-700 dark:text-gray-300 mb-2">Nomor
                                    Telepon</label>
                                <input type="tel" id="phone" name="phone"
                                    class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-xl bg-white dark:bg-gray-800 text-gray-800 dark:text-white focus:outline-none focus:ring-2 focus:ring-fuchsia-500 focus:border-transparent transition-all"
                                    placeholder="+62 812-3456-7890">
                            </div>
                            <div>
                                <label for="message"
                                    class="block text-sm font-bold text-gray-700 dark:text-gray-300 mb-2">Pesan</label>
                                <textarea id="message" name="message" rows="5"
                                    class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-xl bg-white dark:bg-gray-800 text-gray-800 dark:text-white focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent transition-all resize-none placeholder:dark:text-gray-500"
                                    placeholder="Ceritakan kebutuhan bisnis Anda..."></textarea>
                            </div>
                            <button type="submit"
                                class="w-full px-8 py-4 bg-gradient-to-r from-cyan-500 via-purple-500 to-fuchsia-500 text-white font-bold rounded-xl hover:shadow-2xl hover:shadow-purple-500/50 hover:scale-105 transition-all duration-300">
                                Kirim Pesan
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-cyan-500 via-purple-500 to-fuchsia-500 relative overflow-hidden">
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
                    class="inline-flex items-center justify-center px-8 py-4 bg-white text-cyan-600 font-bold rounded-full shadow-lg hover:shadow-2xl hover:scale-105 hover:bg-cyan-50 transition-all duration-300">
                    Konsultasi Gratis
                    <i class="ri-arrow-right-line text-xl ml-2"></i>
                </a>
                <a href="#services"
                    class="inline-flex items-center justify-center px-8 py-4 border-2 border-white text-white font-bold rounded-full hover:bg-white hover:text-purple-600 transition-all duration-300">
                    Lihat Paket Layanan
                </a>
            </div>
        </div>
    </section>

<x-scroll-button />

@push('scripts')
    <script src="{{ asset('js/index.js') }}"></script>
@endpush

</x-layouts.app>