<x-layouts.app>
    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-purple-50 via-indigo-50 to-blue-50 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900">
            <div class="absolute top-0 -left-4 w-96 h-96 bg-purple-400/20 rounded-full mix-blend-multiply filter blur-3xl animate-blob"></div>
            <div class="absolute top-0 -right-4 w-96 h-96 bg-blue-400/20 rounded-full mix-blend-multiply filter blur-3xl animate-blob animation-delay-2000"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center max-w-3xl mx-auto" data-aos="fade-up">
                <div class="inline-block mb-4 px-4 py-2 bg-gradient-to-r from-purple-100 to-indigo-100 dark:from-purple-900/30 dark:to-indigo-900/30 rounded-full border border-purple-200 dark:border-purple-700">
                    <span class="text-sm font-semibold bg-gradient-to-r from-purple-700 to-indigo-700 dark:from-purple-300 dark:to-indigo-300 bg-clip-text text-transparent uppercase tracking-wider">
                        Learn From The Experts
                    </span>
                </div>
                <h1 class="text-5xl md:text-6xl font-extrabold mb-6">
                    <span class="bg-gradient-to-r from-purple-600 via-indigo-600 to-blue-600 dark:from-purple-400 dark:via-indigo-400 dark:to-blue-400 bg-clip-text text-transparent">
                        Webinar UMKM
                    </span>
                </h1>
                <p class="text-lg text-gray-600 dark:text-gray-400 leading-relaxed">
                    Sesi belajar langsung bersama para praktisi digital untuk mengakselerasi pertumbuhan bisnis UMKM Anda.
                </p>
            </div>
        </div>
    </section>

    <!-- Webinar Content -->
    <section class="py-24 bg-white dark:bg-gray-900">
        <div class="container mx-auto px-6">
            <!-- Upcoming Webinar -->
            <div class="mb-20" data-aos="fade-up">
                <h2 class="text-3xl font-bold mb-10 flex items-center gap-3">
                    <span class="w-10 h-1 h-1 bg-purple-500 rounded-full"></span>
                    Webinar Mendatang
                </h2>
                <div class="relative group bg-gray-900 rounded-[3rem] overflow-hidden shadow-2xl">
                    <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1591115765373-520b7a2d7a59?q=80&w=2070&auto=format&fit=crop')] bg-cover bg-center opacity-40"></div>
                    <div class="absolute inset-0 bg-gradient-to-r from-gray-900 via-gray-900/60 to-transparent"></div>
                    
                    <div class="relative z-10 p-8 md:p-16 flex flex-col md:flex-row items-center gap-12">
                        <div class="md:w-3/5 text-white">
                            <div class="inline-flex items-center gap-2 mb-6 px-4 py-1.5 bg-purple-500 rounded-full text-xs font-bold uppercase tracking-wider">
                                <span class="w-2 h-2 rounded-full bg-white animate-pulse"></span> LIVE WEBINAR
                            </div>
                            <h3 class="text-3xl md:text-5xl font-extrabold mb-6 leading-tight">Mastering Social Media Ads untuk Pemula UMKM</h3>
                            <p class="text-lg opacity-80 mb-8 leading-relaxed">
                                Strategi beriklan di Facebook & Instagram dengan budget terbatas namun hasil maksimal. Langsung praktik bersama mentor berpengalaman.
                            </p>
                            <div class="flex flex-wrap gap-6 mb-10">
                                <div class="flex items-center gap-3">
                                    <i class="ri-calendar-event-line text-2xl text-purple-400"></i>
                                    <div>
                                        <p class="text-xs opacity-60">Tanggal</p>
                                        <p class="font-bold">15 Mei 2026</p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-3">
                                    <i class="ri-time-line text-2xl text-purple-400"></i>
                                    <div>
                                        <p class="text-xs opacity-60">Waktu</p>
                                        <p class="font-bold">19.00 - 21.00 WIB</p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-3">
                                    <i class="ri-user-line text-2xl text-purple-400"></i>
                                    <div>
                                        <p class="text-xs opacity-60">Speaker</p>
                                        <p class="font-bold">Rina Wijaya (Senior Ads Expert)</p>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="inline-block px-10 py-4 bg-white text-purple-900 font-bold rounded-2xl hover:shadow-2xl hover:scale-105 transition-all">
                                Daftar Gratis Sekarang
                            </a>
                        </div>
                        <div class="md:w-2/5 flex justify-center">
                            <div class="relative">
                                <div class="absolute inset-0 bg-purple-500 blur-3xl opacity-20 animate-pulse"></div>
                                <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=80&w=200&h=200&fit=crop" alt="Speaker" class="relative w-48 h-48 md:w-64 md:h-64 rounded-full object-cover border-4 border-white/20 shadow-2xl">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Past Webinars (Recordings) -->
            <div data-aos="fade-up">
                <h2 class="text-3xl font-bold mb-10 flex items-center gap-3">
                    <span class="w-10 h-1 bg-indigo-500 rounded-full"></span>
                    Rekaman Webinar Sebelumnya
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Webinar Item 1 -->
                    <div class="group bg-white dark:bg-gray-800 rounded-3xl overflow-hidden shadow-xl border border-gray-100 dark:border-gray-700">
                        <div class="relative aspect-video overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2015&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                            <div class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center text-indigo-600 shadow-2xl transform scale-50 group-hover:scale-100 transition-transform">
                                    <i class="ri-play-fill text-4xl"></i>
                                </div>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-3 text-gray-800 dark:text-white">Strategi Konten TikTok untuk Jualan</h3>
                            <div class="flex items-center justify-between text-sm text-gray-500">
                                <span><i class="ri-calendar-line mr-1"></i> 10 April 2026</span>
                                <span><i class="ri-time-line mr-1"></i> 90 Menit</span>
                            </div>
                        </div>
                    </div>
                    <!-- Webinar Item 2 -->
                    <div class="group bg-white dark:bg-gray-800 rounded-3xl overflow-hidden shadow-xl border border-gray-100 dark:border-gray-700">
                        <div class="relative aspect-video overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1551288049-bbbda536ad0a?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                            <div class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center text-indigo-600 shadow-2xl transform scale-50 group-hover:scale-100 transition-transform">
                                    <i class="ri-play-fill text-4xl"></i>
                                </div>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-3 text-gray-800 dark:text-white">Copywriting yang Menjual untuk Landing Page</h3>
                            <div class="flex items-center justify-between text-sm text-gray-500">
                                <span><i class="ri-calendar-line mr-1"></i> 25 Maret 2026</span>
                                <span><i class="ri-time-line mr-1"></i> 120 Menit</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
