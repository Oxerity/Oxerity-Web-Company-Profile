<x-layouts.app :title="$title">
    <!-- Hero Section -->
    <section class="relative pt-8 pb-16 lg:pt-10 lg:pb-32 overflow-hidden bg-white dark:bg-gray-900">
        <!-- Background Effects -->
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-5 dark:opacity-10"></div>
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-amber-400/20 dark:bg-amber-500/10 rounded-full blur-3xl translate-x-1/2 -translate-y-1/4"></div>
        <div class="absolute bottom-0 left-0 w-[600px] h-[600px] bg-yellow-400/20 dark:bg-yellow-500/10 rounded-full blur-3xl -translate-x-1/2 translate-y-1/4"></div>
        
        <div class="container mx-auto px-6 relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <!-- Text Content -->
                <div class="w-full lg:w-1/2 text-center lg:text-left" data-aos="fade-right">
                    <div class="inline-flex items-center mb-6 px-4 py-2 bg-amber-50 dark:bg-gray-800 rounded-full border border-amber-100 dark:border-gray-700 shadow-sm">
                        <i class="ri-fire-fill text-amber-500 mr-2 text-lg"></i>
                        <span class="text-amber-600 dark:text-amber-400 text-xs font-bold uppercase tracking-wider">Tingkatkan Traffic & Konversi</span>
                    </div>
                    <h1 class="text-5xl lg:text-7xl font-extrabold text-gray-900 dark:text-white mb-6 leading-tight tracking-tight">
                        Kuasai <span class="bg-gradient-to-r from-amber-500 to-orange-500 bg-clip-text text-transparent">Halaman Pertama</span> Google
                    </h1>
                    <p class="text-lg text-gray-600 dark:text-gray-300 mb-8 max-w-2xl mx-auto lg:mx-0 leading-relaxed">
                        Website secanggih apapun tidak akan berguna jika tidak ada yang mengunjungi. Kami bantu bisnis Anda mendominasi mesin pencari secara organik (SEO) maupun berbayar (SEM).
                    </p>
                    <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start space-y-4 sm:space-y-0 sm:space-x-4">
                        <a href="#services" class="w-full sm:w-auto px-8 py-4 bg-gradient-to-r from-amber-500 to-orange-500 text-white font-bold rounded-2xl shadow-xl shadow-amber-500/30 hover:shadow-amber-500/50 transition-all duration-300 hover:-translate-y-1 text-center">
                            Strategi Kami
                        </a>
                        <a href="#audit" class="w-full sm:w-auto px-8 py-4 bg-white dark:bg-gray-800 text-gray-900 dark:text-white font-bold rounded-2xl border border-gray-200 dark:border-gray-700 hover:bg-amber-50 dark:hover:bg-gray-700 transition-all duration-300 text-center flex items-center justify-center">
                            <i class="ri-search-line mr-2"></i> Audit SEO Gratis
                        </a>
                    </div>
                </div>

                <!-- Hero Image with Floating Charts -->
                <div class="w-full lg:w-1/2 relative" data-aos="fade-left">
                    <div class="relative rounded-3xl overflow-hidden shadow-2xl border border-white/20 dark:border-gray-800">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2400&auto=format&fit=crop" alt="SEO Dashboard" class="w-full h-auto object-cover transform hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900/80 to-transparent"></div>
                    </div>

                    <!-- Floating Card 1: Traffic Growth -->
                    <div class="absolute -bottom-8 -right-4 bg-white dark:bg-gray-800 rounded-2xl p-5 shadow-2xl border border-gray-100 dark:border-gray-700 w-56 animate-[bounce_4s_infinite]">
                        <h4 class="text-xs text-gray-500 mb-1">Organic Traffic</h4>
                        <div class="flex items-end justify-between">
                            <p class="text-2xl font-bold text-gray-900 dark:text-white">124k</p>
                            <span class="text-green-500 text-sm font-bold flex items-center bg-green-100 dark:bg-green-900/30 px-2 py-1 rounded-md">
                                <i class="ri-arrow-up-line"></i> 34%
                            </span>
                        </div>
                        <!-- Mini Chart -->
                        <div class="flex items-end space-x-1 h-8 mt-3">
                            <div class="w-full bg-amber-200 rounded-t-sm h-3"></div>
                            <div class="w-full bg-amber-300 rounded-t-sm h-4"></div>
                            <div class="w-full bg-amber-400 rounded-t-sm h-5"></div>
                            <div class="w-full bg-amber-500 rounded-t-sm h-7"></div>
                            <div class="w-full bg-amber-500 rounded-t-sm h-full"></div>
                        </div>
                    </div>

                    <!-- Floating Card 2: Rank 1 -->
                    <div class="absolute -top-6 -left-6 bg-gradient-to-br from-amber-400 to-orange-500 rounded-2xl p-4 shadow-2xl text-white animate-[bounce_5s_infinite]">
                        <div class="flex items-center space-x-3">
                            <i class="ri-trophy-fill text-3xl text-yellow-100"></i>
                            <div>
                                <p class="font-bold text-lg">Peringkat #1</p>
                                <p class="text-xs text-amber-100">Google Search</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-24 bg-gray-50 dark:bg-gray-800 border-y border-gray-100 dark:border-gray-800">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
                <h2 class="text-3xl lg:text-4xl font-extrabold text-gray-900 dark:text-white mb-6">Layanan Pemasaran Digital</h2>
                <p class="text-gray-600 dark:text-gray-400 text-lg">Pendekatan komprehensif berdasarkan data (data-driven) untuk memastikan ROI maksimal untuk setiap anggaran pemasaran Anda.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="bg-white dark:bg-gray-900 p-8 rounded-3xl shadow-xl hover:-translate-y-2 transition-all duration-300 border-t-4 border-amber-500" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-14 h-14 bg-amber-100 dark:bg-amber-900/30 rounded-2xl flex items-center justify-center mb-6 text-amber-500">
                        <i class="ri-search-eye-line text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">SEO Optimization</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">Optimasi On-Page & Off-Page, riset keyword mendalam, perbaikan teknis website, dan link building berkualitas untuk jangka panjang.</p>
                    <ul class="space-y-2 text-sm text-gray-500 font-medium">
                        <li class="flex items-center"><i class="ri-check-line text-amber-500 mr-2"></i> Keyword Research</li>
                        <li class="flex items-center"><i class="ri-check-line text-amber-500 mr-2"></i> Technical SEO Audit</li>
                        <li class="flex items-center"><i class="ri-check-line text-amber-500 mr-2"></i> Content Optimization</li>
                    </ul>
                </div>
                
                <!-- Service 2 -->
                <div class="bg-white dark:bg-gray-900 p-8 rounded-3xl shadow-xl hover:-translate-y-2 transition-all duration-300 border-t-4 border-orange-500" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-14 h-14 bg-orange-100 dark:bg-orange-900/30 rounded-2xl flex items-center justify-center mb-6 text-orange-500">
                        <i class="ri-advertisement-line text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Google Ads (SEM)</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">Dapatkan hasil instan dengan iklan berbayar Google. Kami menargetkan kata kunci dengan intensitas pembelian tertinggi.</p>
                    <ul class="space-y-2 text-sm text-gray-500 font-medium">
                        <li class="flex items-center"><i class="ri-check-line text-orange-500 mr-2"></i> Search Ads</li>
                        <li class="flex items-center"><i class="ri-check-line text-orange-500 mr-2"></i> Display Network</li>
                        <li class="flex items-center"><i class="ri-check-line text-orange-500 mr-2"></i> Remarketing / Retargeting</li>
                    </ul>
                </div>

                <!-- Service 3 -->
                <div class="bg-white dark:bg-gray-900 p-8 rounded-3xl shadow-xl hover:-translate-y-2 transition-all duration-300 border-t-4 border-red-500" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-14 h-14 bg-red-100 dark:bg-red-900/30 rounded-2xl flex items-center justify-center mb-6 text-red-500">
                        <i class="ri-bar-chart-box-line text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Web Analytics</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">Pemasangan alat pelacak canggih untuk menganalisis perilaku pengunjung dan menemukan celah peningkatan konversi.</p>
                    <ul class="space-y-2 text-sm text-gray-500 font-medium">
                        <li class="flex items-center"><i class="ri-check-line text-red-500 mr-2"></i> Google Analytics 4</li>
                        <li class="flex items-center"><i class="ri-check-line text-red-500 mr-2"></i> Google Tag Manager</li>
                        <li class="flex items-center"><i class="ri-check-line text-red-500 mr-2"></i> Heatmap Analysis</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section id="audit" class="py-20 bg-white dark:bg-gray-900">
        <div class="container mx-auto px-6 relative">
            <div class="bg-gray-900 dark:bg-black border border-gray-800 rounded-[3rem] p-10 lg:p-16 flex flex-col lg:flex-row items-center justify-between shadow-2xl relative overflow-hidden" data-aos="zoom-in">
                
                <div class="lg:w-2/3 text-center lg:text-left mb-8 lg:mb-0 relative z-10">
                    <h2 class="text-3xl lg:text-5xl font-extrabold text-white mb-4">Website Anda Sulit Ditemukan?</h2>
                    <p class="text-xl text-gray-400">
                        Biar kami periksa website Anda. Dapatkan laporan SEO komprehensif secara gratis senilai Rp 1.500.000.
                    </p>
                </div>

                <div class="lg:w-1/3 relative z-10 w-full">
                    <form class="flex flex-col gap-4">
                        <input type="text" placeholder="Masukkan URL Website Anda" class="w-full px-6 py-4 bg-gray-800 border border-gray-700 text-white rounded-xl focus:outline-none focus:border-amber-500">
                        <button type="button" class="w-full px-6 py-4 bg-amber-500 text-gray-900 font-bold rounded-xl hover:bg-amber-400 transition-colors shadow-lg shadow-amber-500/20">
                            Minta Audit Gratis
                        </button>
                    </form>
                </div>
                
                <!-- Glowing Decoration -->
                <div class="absolute right-0 bottom-0 w-[40rem] h-[40rem] bg-gradient-to-tl from-amber-500/20 to-transparent rounded-full blur-3xl pointer-events-none"></div>
            </div>
        </div>
    </section>
</x-layouts.app>
