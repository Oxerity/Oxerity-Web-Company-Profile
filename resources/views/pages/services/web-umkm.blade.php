<x-layouts.app :title="$title">
    <!-- Hero Section -->
    <section class="relative pt-8 pb-16 lg:pt-10 lg:pb-24 overflow-hidden bg-white dark:bg-gray-900">
        <!-- Background Effects -->
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-5 dark:opacity-10"></div>
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-sky-400/20 dark:bg-sky-500/10 rounded-full blur-3xl translate-x-1/2 -translate-y-1/4"></div>
        <div class="absolute bottom-0 left-0 w-[600px] h-[600px] bg-emerald-400/20 dark:bg-emerald-500/10 rounded-full blur-3xl -translate-x-1/2 translate-y-1/4"></div>
        
        <div class="container mx-auto px-6 relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <!-- Text Content -->
                <div class="w-full lg:w-1/2 text-center lg:text-left" data-aos="fade-right">
                    <div class="inline-block mb-6 px-4 py-2 bg-sky-50 dark:bg-gray-800 rounded-full border border-sky-100 dark:border-gray-700">
                        <span class="text-sky-600 dark:text-sky-400 text-sm font-bold flex items-center">
                            <i class="ri-rocket-2-fill mr-2"></i> Solusi Digital Bisnis Anda
                        </span>
                    </div>
                    <h1 class="text-5xl lg:text-6xl font-extrabold text-gray-900 dark:text-white mb-6 leading-tight">
                        Website <span class="bg-gradient-to-r from-sky-500 to-emerald-500 bg-clip-text text-transparent">Profesional</span> Untuk UMKM
                    </h1>
                    <p class="text-lg text-gray-600 dark:text-gray-300 mb-8 max-w-2xl mx-auto lg:mx-0">
                        Bawa bisnis Anda ke level selanjutnya dengan kehadiran online yang kredibel, modern, dan mudah diakses oleh jutaan pelanggan di seluruh dunia.
                    </p>
                    <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start space-y-4 sm:space-y-0 sm:space-x-4">
                        <a href="#pricing" class="w-full sm:w-auto px-8 py-4 bg-gradient-to-r from-sky-500 to-emerald-500 text-white font-bold rounded-xl hover:shadow-lg hover:shadow-sky-500/30 transition-all hover:-translate-y-1 text-center">
                            Lihat Paket
                        </a>
                        <a href="#contact" class="w-full sm:w-auto px-8 py-4 bg-white dark:bg-gray-800 text-gray-900 dark:text-white font-bold rounded-xl border border-gray-200 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-700 transition-all text-center">
                            Konsultasi Gratis
                        </a>
                    </div>
                </div>

                <!-- Hero Image -->
                <div class="w-full lg:w-1/2 relative" data-aos="fade-left">
                    <div class="relative rounded-2xl overflow-hidden shadow-2xl border border-white/20 dark:border-gray-800">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2426&auto=format&fit=crop" alt="Web UMKM Dashboard" class="w-full h-auto object-cover transform hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-end p-8">
                            <div class="bg-white/10 backdrop-blur-md rounded-xl p-4 border border-white/20">
                                <h3 class="text-white font-bold text-xl mb-1">Desain Responsif</h3>
                                <p class="text-gray-200 text-sm">Tampil sempurna di HP, Tablet, maupun Desktop.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-24 bg-gray-50 dark:bg-gray-800">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
                <h2 class="text-3xl lg:text-4xl font-extrabold text-gray-900 dark:text-white mb-6">Kenapa UMKM Butuh Website?</h2>
                <p class="text-gray-600 dark:text-gray-400 text-lg">Website bukan lagi barang mewah, melainkan pondasi utama untuk membangun kepercayaan dan menjangkau pasar yang lebih luas.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-white dark:bg-gray-900 p-8 rounded-2xl shadow-xl hover:shadow-2xl transition-all hover:-translate-y-2 border border-gray-100 dark:border-gray-800" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-14 h-14 bg-sky-100 dark:bg-sky-900/30 rounded-xl flex items-center justify-center mb-6">
                        <i class="ri-shield-star-fill text-3xl text-sky-500"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Tingkatkan Kredibilitas</h3>
                    <p class="text-gray-600 dark:text-gray-400">Bisnis dengan website terlihat jauh lebih profesional dan terpercaya di mata calon pelanggan baru.</p>
                </div>
                
                <!-- Feature 2 -->
                <div class="bg-white dark:bg-gray-900 p-8 rounded-2xl shadow-xl hover:shadow-2xl transition-all hover:-translate-y-2 border border-gray-100 dark:border-gray-800" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-14 h-14 bg-emerald-100 dark:bg-emerald-900/30 rounded-xl flex items-center justify-center mb-6">
                        <i class="ri-global-fill text-3xl text-emerald-500"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Jangkauan Luas</h3>
                    <p class="text-gray-600 dark:text-gray-400">Tidak terbatas oleh lokasi fisik. Pelanggan dari seluruh Indonesia bisa menemukan produk Anda.</p>
                </div>

                <!-- Feature 3 -->
                <div class="bg-white dark:bg-gray-900 p-8 rounded-2xl shadow-xl hover:shadow-2xl transition-all hover:-translate-y-2 border border-gray-100 dark:border-gray-800" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-14 h-14 bg-purple-100 dark:bg-purple-900/30 rounded-xl flex items-center justify-center mb-6">
                        <i class="ri-24-hours-fill text-3xl text-purple-500"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Buka 24 Jam Non-Stop</h3>
                    <p class="text-gray-600 dark:text-gray-400">Website Anda seperti brosur interaktif yang terus bekerja mempromosikan bisnis Anda siang dan malam.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing (Imported from index or custom) -->
    <section id="pricing" class="py-24 bg-white dark:bg-gray-900 relative">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-4xl font-extrabold mb-4 text-gray-900 dark:text-white">Pilihan Paket Web UMKM</h2>
                <p class="text-gray-600 dark:text-gray-400">Pilih paket yang paling sesuai dengan skala bisnis Anda saat ini.</p>
            </div>
            <!-- Pricing Cards (Simplified version of the main one) -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-5xl mx-auto">
                <!-- Basic -->
                <div class="bg-white dark:bg-gray-800 rounded-3xl p-8 shadow-xl border border-gray-200 dark:border-gray-700 hover:border-sky-500 transition-colors" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="text-xl font-bold mb-2">Web Company Profile</h3>
                    <div class="text-gray-500 text-sm mb-6">Cocok untuk pemula</div>
                    <div class="mb-6"><span class="text-4xl font-extrabold text-gray-900 dark:text-white">Rp 1.5jt</span></div>
                    <ul class="space-y-4 mb-8 text-gray-600 dark:text-gray-300">
                        <li class="flex items-center"><i class="ri-check-line text-green-500 mr-2 text-xl"></i> Domain & Hosting 1 Tahun</li>
                        <li class="flex items-center"><i class="ri-check-line text-green-500 mr-2 text-xl"></i> Desain Premium Responsif</li>
                        <li class="flex items-center"><i class="ri-check-line text-green-500 mr-2 text-xl"></i> Integrasi WhatsApp</li>
                        <li class="flex items-center"><i class="ri-check-line text-green-500 mr-2 text-xl"></i> 3 Halaman Utama</li>
                    </ul>
                    <a href="#contact" class="block w-full text-center py-3 rounded-xl border-2 border-sky-500 text-sky-500 font-bold hover:bg-sky-500 hover:text-white transition-all">Pesan Sekarang</a>
                </div>

                <!-- Pro -->
                <div class="bg-gradient-to-b from-sky-500 to-emerald-500 rounded-3xl p-8 shadow-2xl text-white transform scale-105 relative" data-aos="fade-up" data-aos-delay="200">
                    <div class="absolute top-0 right-0 bg-yellow-400 text-yellow-900 text-xs font-bold px-3 py-1 rounded-bl-lg rounded-tr-3xl">Paling Laris</div>
                    <h3 class="text-xl font-bold mb-2">Web Katalog Produk</h3>
                    <div class="text-sky-100 text-sm mb-6">Untuk jualan online</div>
                    <div class="mb-6"><span class="text-4xl font-extrabold">Rp 3.5jt</span></div>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center"><i class="ri-check-line text-white mr-2 text-xl"></i> Semua fitur Paket Basic</li>
                        <li class="flex items-center"><i class="ri-check-line text-white mr-2 text-xl"></i> Katalog hingga 50 Produk</li>
                        <li class="flex items-center"><i class="ri-check-line text-white mr-2 text-xl"></i> Fitur Keranjang Belanja</li>
                        <li class="flex items-center"><i class="ri-check-line text-white mr-2 text-xl"></i> SEO Dasar</li>
                    </ul>
                    <a href="#contact" class="block w-full text-center py-3 rounded-xl bg-white text-sky-600 font-bold hover:shadow-lg transition-all">Pesan Sekarang</a>
                </div>

                <!-- Custom -->
                <div class="bg-white dark:bg-gray-800 rounded-3xl p-8 shadow-xl border border-gray-200 dark:border-gray-700 hover:border-emerald-500 transition-colors" data-aos="fade-up" data-aos-delay="300">
                    <h3 class="text-xl font-bold mb-2">Custom System</h3>
                    <div class="text-gray-500 text-sm mb-6">Sistem khusus sesuai kebutuhan</div>
                    <div class="mb-6"><span class="text-4xl font-extrabold text-gray-900 dark:text-white">Mulai Rp 7jt</span></div>
                    <ul class="space-y-4 mb-8 text-gray-600 dark:text-gray-300">
                        <li class="flex items-center"><i class="ri-check-line text-green-500 mr-2 text-xl"></i> Desain UI/UX Eksklusif</li>
                        <li class="flex items-center"><i class="ri-check-line text-green-500 mr-2 text-xl"></i> Dashboard Admin Custom</li>
                        <li class="flex items-center"><i class="ri-check-line text-green-500 mr-2 text-xl"></i> Payment Gateway</li>
                        <li class="flex items-center"><i class="ri-check-line text-green-500 mr-2 text-xl"></i> Maintenance Prioritas</li>
                    </ul>
                    <a href="#contact" class="block w-full text-center py-3 rounded-xl border-2 border-emerald-500 text-emerald-500 font-bold hover:bg-emerald-500 hover:text-white transition-all">Hubungi Kami</a>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
