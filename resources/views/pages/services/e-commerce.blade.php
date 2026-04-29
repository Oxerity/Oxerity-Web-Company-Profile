<x-layouts.app :title="$title">
    <!-- Hero Section -->
    <section class="relative pt-8 pb-16 lg:pt-10 lg:pb-32 overflow-hidden bg-white dark:bg-gray-900">
        <!-- Background Effects -->
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-5 dark:opacity-10"></div>
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-purple-400/20 dark:bg-purple-500/10 rounded-full blur-3xl translate-x-1/2 -translate-y-1/4"></div>
        <div class="absolute bottom-0 left-0 w-[600px] h-[600px] bg-fuchsia-400/20 dark:bg-fuchsia-500/10 rounded-full blur-3xl -translate-x-1/2 translate-y-1/4"></div>
        
        <div class="container mx-auto px-6 relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <!-- Text Content -->
                <div class="w-full lg:w-1/2 text-center lg:text-left" data-aos="fade-right">
                    <div class="inline-flex items-center mb-6 px-4 py-2 bg-purple-50 dark:bg-gray-800 rounded-full border border-purple-100 dark:border-gray-700 shadow-sm">
                        <span class="flex w-2 h-2 bg-fuchsia-500 rounded-full mr-2 animate-ping absolute"></span>
                        <span class="flex w-2 h-2 bg-fuchsia-500 rounded-full mr-2"></span>
                        <span class="text-purple-600 dark:text-purple-400 text-xs font-bold uppercase tracking-wider">Toko Online 24/7</span>
                    </div>
                    <h1 class="text-5xl lg:text-7xl font-extrabold text-gray-900 dark:text-white mb-6 leading-tight tracking-tight">
                        Platform <span class="bg-gradient-to-r from-purple-600 to-fuchsia-500 bg-clip-text text-transparent">E-Commerce</span> Premium
                    </h1>
                    <p class="text-lg text-gray-600 dark:text-gray-300 mb-8 max-w-2xl mx-auto lg:mx-0 leading-relaxed">
                        Ubah pengunjung menjadi pembeli setia. Kami membangun toko online yang sangat cepat, aman, dan dirancang khusus untuk memaksimalkan konversi penjualan produk Anda.
                    </p>
                    <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start space-y-4 sm:space-y-0 sm:space-x-4">
                        <a href="#showcase" class="w-full sm:w-auto px-8 py-4 bg-gradient-to-r from-purple-600 to-fuchsia-500 text-white font-bold rounded-2xl shadow-xl shadow-purple-500/30 hover:shadow-purple-500/50 transition-all duration-300 hover:-translate-y-1 text-center flex items-center justify-center group">
                            Lihat Contoh Web <i class="ri-arrow-right-line ml-2 group-hover:translate-x-1 transition-transform"></i>
                        </a>
                        <a href="#features" class="w-full sm:w-auto px-8 py-4 bg-white dark:bg-gray-800 text-gray-900 dark:text-white font-bold rounded-2xl border border-gray-200 dark:border-gray-700 hover:bg-purple-50 dark:hover:bg-gray-700 transition-all duration-300 text-center">
                            Jelajahi Fitur
                        </a>
                    </div>

                    <!-- Trust Badges -->
                    <div class="mt-10 pt-8 border-t border-gray-100 dark:border-gray-800 flex items-center justify-center lg:justify-start space-x-6 opacity-70 grayscale hover:grayscale-0 transition-all duration-500">
                        <i class="ri-visa-line text-4xl text-gray-400 hover:text-blue-600 transition-colors"></i>
                        <i class="ri-mastercard-fill text-4xl text-gray-400 hover:text-red-500 transition-colors"></i>
                        <i class="ri-paypal-fill text-4xl text-gray-400 hover:text-blue-800 transition-colors"></i>
                    </div>
                </div>

                <!-- Hero Image with Floating Elements -->
                <div class="w-full lg:w-1/2 relative" data-aos="fade-left">
                    <!-- Main Dashboard Image -->
                    <div class="relative rounded-3xl overflow-hidden shadow-2xl border border-white/20 dark:border-gray-800 group">
                        <img src="https://images.unsplash.com/photo-1607082349566-187342175e2f?q=80&w=2400&auto=format&fit=crop" alt="E-Commerce Interface" class="w-full h-auto object-cover transform group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900/90 via-gray-900/20 to-transparent"></div>
                    </div>

                    <!-- Floating Card 1: Revenue -->
                    <div class="absolute -bottom-6 -left-6 bg-white dark:bg-gray-800 rounded-2xl p-5 shadow-2xl border border-gray-100 dark:border-gray-700 w-48 animate-[bounce_4s_infinite]">
                        <div class="flex items-center space-x-3 mb-2">
                            <div class="w-10 h-10 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500">
                                <i class="ri-money-dollar-circle-fill text-xl"></i>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500">Total Omzet</p>
                                <p class="font-bold text-gray-900 dark:text-white">Rp 45.2M</p>
                            </div>
                        </div>
                        <div class="text-xs text-green-500 font-bold flex items-center">
                            <i class="ri-arrow-up-line"></i> +12.5% Hari Ini
                        </div>
                    </div>

                    <!-- Floating Card 2: Order Notification -->
                    <div class="absolute top-10 -right-6 bg-white/90 dark:bg-gray-800/90 backdrop-blur-md rounded-2xl p-4 shadow-2xl border border-gray-100 dark:border-gray-700 w-56 animate-[bounce_5s_infinite]">
                        <div class="flex items-center space-x-3">
                            <div class="w-10 h-10 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-500 relative">
                                <span class="absolute top-0 right-0 w-3 h-3 bg-red-500 rounded-full border-2 border-white dark:border-gray-800"></span>
                                <i class="ri-shopping-bag-fill text-lg"></i>
                            </div>
                            <div>
                                <p class="text-sm font-bold text-gray-900 dark:text-white">Pesanan Baru!</p>
                                <p class="text-xs text-gray-500">Sepatu Nike Air x 1</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Showcase / Examples Section (NEW) -->
    <section id="showcase" class="py-24 bg-gray-50 dark:bg-gray-800/50">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
                <h2 class="text-3xl lg:text-5xl font-extrabold text-gray-900 dark:text-white mb-6">Contoh <span class="text-fuchsia-500">Website E-Commerce</span></h2>
                <p class="text-gray-600 dark:text-gray-400 text-lg">Jelajahi berbagai jenis toko online yang bisa kami bangun untuk bisnis Anda. Dari fashion, elektronik, hingga makanan.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Example 1: Fashion -->
                <div class="bg-white dark:bg-gray-900 rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 group border border-gray-100 dark:border-gray-800" data-aos="fade-up" data-aos-delay="100">
                    <div class="h-64 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1441984904996-e0b6ba687e04?q=80&w=2000&auto=format&fit=crop" alt="Fashion Store" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <button class="px-6 py-2 bg-white text-gray-900 font-bold rounded-full transform translate-y-4 group-hover:translate-y-0 transition-all duration-300">Live Preview</button>
                        </div>
                    </div>
                    <div class="p-6 relative">
                        <div class="absolute -top-6 right-6 w-12 h-12 bg-fuchsia-500 text-white rounded-full flex items-center justify-center shadow-lg border-4 border-white dark:border-gray-900">
                            <i class="ri-t-shirt-fill text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Fashion & Apparel</h3>
                        <p class="text-sm text-gray-500 mb-4">Fitur variasi ukuran, warna, zoom produk, dan lookbook interaktif.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-gray-100 dark:bg-gray-800 text-gray-600 dark:text-gray-400 text-xs rounded-md">Size Guide</span>
                            <span class="px-2 py-1 bg-gray-100 dark:bg-gray-800 text-gray-600 dark:text-gray-400 text-xs rounded-md">Wishlist</span>
                        </div>
                    </div>
                </div>

                <!-- Example 2: Gadget & Tech -->
                <div class="bg-white dark:bg-gray-900 rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 group border border-gray-100 dark:border-gray-800" data-aos="fade-up" data-aos-delay="200">
                    <div class="h-64 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1498049794561-7780e7231661?q=80&w=2000&auto=format&fit=crop" alt="Tech Store" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <button class="px-6 py-2 bg-white text-gray-900 font-bold rounded-full transform translate-y-4 group-hover:translate-y-0 transition-all duration-300">Live Preview</button>
                        </div>
                    </div>
                    <div class="p-6 relative">
                        <div class="absolute -top-6 right-6 w-12 h-12 bg-sky-500 text-white rounded-full flex items-center justify-center shadow-lg border-4 border-white dark:border-gray-900">
                            <i class="ri-macbook-fill text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Gadget & Elektronik</h3>
                        <p class="text-sm text-gray-500 mb-4">Fitur filter spesifikasi yang kompleks, perbandingan produk, dan review pembeli.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-gray-100 dark:bg-gray-800 text-gray-600 dark:text-gray-400 text-xs rounded-md">Product Compare</span>
                            <span class="px-2 py-1 bg-gray-100 dark:bg-gray-800 text-gray-600 dark:text-gray-400 text-xs rounded-md">Tech Specs</span>
                        </div>
                    </div>
                </div>

                <!-- Example 3: F&B / Groceries -->
                <div class="bg-white dark:bg-gray-900 rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 group border border-gray-100 dark:border-gray-800" data-aos="fade-up" data-aos-delay="300">
                    <div class="h-64 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1542838132-92c53300491e?q=80&w=2000&auto=format&fit=crop" alt="Grocery Store" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <button class="px-6 py-2 bg-white text-gray-900 font-bold rounded-full transform translate-y-4 group-hover:translate-y-0 transition-all duration-300">Live Preview</button>
                        </div>
                    </div>
                    <div class="p-6 relative">
                        <div class="absolute -top-6 right-6 w-12 h-12 bg-emerald-500 text-white rounded-full flex items-center justify-center shadow-lg border-4 border-white dark:border-gray-900">
                            <i class="ri-restaurant-fill text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">F&B dan Groceries</h3>
                        <p class="text-sm text-gray-500 mb-4">Fitur kurir instan (GoSend/Grab), manajemen stok real-time, dan slot waktu pengiriman.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-gray-100 dark:bg-gray-800 text-gray-600 dark:text-gray-400 text-xs rounded-md">Instant Delivery</span>
                            <span class="px-2 py-1 bg-gray-100 dark:bg-gray-800 text-gray-600 dark:text-gray-400 text-xs rounded-md">Stock Alert</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Interactive Features Section -->
    <section id="features" class="py-24 bg-white dark:bg-gray-900 border-y border-gray-100 dark:border-gray-800">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <div class="w-full lg:w-1/2" data-aos="fade-right">
                    <h2 class="text-3xl lg:text-4xl font-extrabold text-gray-900 dark:text-white mb-6">Kenapa E-Commerce Buatan Oxerity Berbeda?</h2>
                    <p class="text-gray-600 dark:text-gray-400 text-lg mb-8">Bukan sekadar template biasa, kami membangun mesin penjualan yang dioptimasi penuh mulai dari UI/UX, kecepatan loading, hingga keamanan sistem.</p>
                    
                    <div class="space-y-6">
                        <!-- Feature Item -->
                        <div class="flex items-start p-4 bg-gray-50 dark:bg-gray-800/50 rounded-2xl border border-gray-100 dark:border-gray-800 hover:bg-purple-50 dark:hover:bg-gray-800 transition-colors">
                            <div class="w-12 h-12 bg-white dark:bg-gray-700 rounded-xl flex items-center justify-center text-purple-600 dark:text-purple-400 shadow-sm flex-shrink-0 mr-4">
                                <i class="ri-bank-card-fill text-2xl"></i>
                            </div>
                            <div>
                                <h4 class="text-lg font-bold text-gray-900 dark:text-white">Auto-Payment Gateway</h4>
                                <p class="text-sm text-gray-500 mt-1">Sistem otomatis verifikasi pembayaran via BCA, Mandiri, OVO, ShopeePay tanpa perlu cek mutasi manual.</p>
                            </div>
                        </div>
                        
                        <!-- Feature Item -->
                        <div class="flex items-start p-4 bg-gray-50 dark:bg-gray-800/50 rounded-2xl border border-gray-100 dark:border-gray-800 hover:bg-purple-50 dark:hover:bg-gray-800 transition-colors">
                            <div class="w-12 h-12 bg-white dark:bg-gray-700 rounded-xl flex items-center justify-center text-purple-600 dark:text-purple-400 shadow-sm flex-shrink-0 mr-4">
                                <i class="ri-truck-fill text-2xl"></i>
                            </div>
                            <div>
                                <h4 class="text-lg font-bold text-gray-900 dark:text-white">API Ongkos Kirim & Resi</h4>
                                <p class="text-sm text-gray-500 mt-1">Perhitungan ongkir otomatis hingga tingkat kecamatan. Dukungan JNE, J&T, SiCepat, dll.</p>
                            </div>
                        </div>

                        <!-- Feature Item -->
                        <div class="flex items-start p-4 bg-gray-50 dark:bg-gray-800/50 rounded-2xl border border-gray-100 dark:border-gray-800 hover:bg-purple-50 dark:hover:bg-gray-800 transition-colors">
                            <div class="w-12 h-12 bg-white dark:bg-gray-700 rounded-xl flex items-center justify-center text-purple-600 dark:text-purple-400 shadow-sm flex-shrink-0 mr-4">
                                <i class="ri-line-chart-fill text-2xl"></i>
                            </div>
                            <div>
                                <h4 class="text-lg font-bold text-gray-900 dark:text-white">Admin Dashboard Powerful</h4>
                                <p class="text-sm text-gray-500 mt-1">Kelola stok, diskon, kupon, dan pantau grafik penjualan dalam satu layar yang mudah digunakan.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-1/2 relative" data-aos="fade-left">
                    <div class="bg-gradient-to-tr from-purple-500 to-fuchsia-500 rounded-3xl p-1 shadow-2xl transform rotate-3 hover:rotate-0 transition-transform duration-500">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=2000&auto=format&fit=crop" alt="Admin Dashboard" class="rounded-3xl border-4 border-gray-900">
                    </div>
                    <!-- Decorative element -->
                    <div class="absolute -z-10 -bottom-10 -right-10 w-full h-full bg-[url('https://www.transparenttextures.com/patterns/dots-3.png')] opacity-20"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-20 bg-gray-50 dark:bg-gray-800">
        <div class="container mx-auto px-6 relative">
            <div class="bg-gray-900 dark:bg-black rounded-[3rem] p-10 lg:p-16 text-center text-white shadow-2xl relative overflow-hidden" data-aos="zoom-in">
                <!-- Glowing Decoration -->
                <div class="absolute top-0 right-0 w-[40rem] h-[40rem] bg-gradient-to-b from-purple-500/30 to-fuchsia-500/5 rounded-full blur-3xl translate-x-1/2 -translate-y-1/2"></div>
                <div class="absolute bottom-0 left-0 w-[40rem] h-[40rem] bg-gradient-to-t from-fuchsia-500/30 to-purple-500/5 rounded-full blur-3xl -translate-x-1/2 translate-y-1/2"></div>
                
                <h2 class="text-4xl lg:text-5xl font-extrabold mb-6 relative z-10">Siap Menaikkan Omzet Penjualan Anda?</h2>
                <p class="text-xl text-gray-300 mb-10 max-w-2xl mx-auto relative z-10">
                    Tinggalkan cara lama berjualan. Buat sistem yang bekerja 24 jam untuk Anda dan berikan kemudahan berbelanja bagi pelanggan layaknya brand besar.
                </p>
                <div class="relative z-10 flex flex-col sm:flex-row justify-center items-center gap-4">
                    <a href="#contact" class="px-10 py-5 bg-gradient-to-r from-purple-500 to-fuchsia-500 text-white font-bold rounded-2xl hover:shadow-2xl hover:shadow-purple-500/50 hover:scale-105 transition-all duration-300 w-full sm:w-auto">
                        Mulai Konsultasi Gratis
                    </a>
                    <a href="#portfolio" class="px-10 py-5 bg-transparent border-2 border-gray-600 hover:border-white text-white font-bold rounded-2xl hover:bg-white/10 transition-all duration-300 w-full sm:w-auto">
                        Unduh Proposal E-Commerce
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
