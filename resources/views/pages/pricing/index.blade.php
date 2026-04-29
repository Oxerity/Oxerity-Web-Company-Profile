<x-layouts.app>
    <!-- Hero Section -->
    <section class="relative pt-32 pb-24 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-sky-50 via-indigo-50 to-purple-50 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900">
            <div class="absolute top-0 -left-10 w-96 h-96 bg-sky-400/20 rounded-full mix-blend-multiply filter blur-3xl animate-blob"></div>
            <div class="absolute top-20 -right-10 w-96 h-96 bg-indigo-400/20 rounded-full mix-blend-multiply filter blur-3xl animate-blob animation-delay-2000"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10 text-center">
            <div class="max-w-4xl mx-auto" data-aos="fade-up">
                <div class="inline-block mb-6 px-6 py-2 bg-white/60 dark:bg-gray-800/60 backdrop-blur-xl rounded-full border border-sky-200 dark:border-sky-900/50 shadow-sm">
                    <span class="text-xs font-black bg-gradient-to-r from-sky-600 to-indigo-600 dark:from-sky-400 dark:to-indigo-400 bg-clip-text text-transparent uppercase tracking-[0.2em]">
                        Best Digital Investment
                    </span>
                </div>
                <h1 class="text-6xl md:text-8xl font-black mb-8 leading-[1.1] tracking-tighter">
                    <span class="bg-gradient-to-r from-sky-600 via-indigo-600 to-purple-600 dark:from-sky-400 dark:via-indigo-400 dark:to-purple-400 bg-clip-text text-transparent">
                        Paket Harga
                    </span>
                </h1>
                <p class="text-xl text-gray-600 dark:text-gray-400 leading-relaxed max-w-2xl mx-auto font-medium">
                    Investasi cerdas untuk masa depan digital bisnis Anda. Transparan, terjangkau, dan berkualitas tinggi.
                </p>
            </div>
        </div>
    </section>

    <!-- Pricing Grid -->
    <section class="py-32 bg-white dark:bg-gray-900">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 items-stretch">
                <!-- Starter Plan -->
                <div class="flex flex-col p-12 bg-gray-50 dark:bg-gray-800 rounded-[3rem] border border-gray-100 dark:border-gray-700 transition-all duration-500 hover:shadow-2xl hover:-translate-y-2 group" data-aos="fade-up" data-aos-delay="100">
                    <div class="mb-10">
                        <h3 class="text-2xl font-black text-gray-900 dark:text-white mb-4">Starter</h3>
                        <p class="text-gray-500 dark:text-gray-400 font-medium leading-relaxed">Sempurna untuk UMKM yang baru memulai perjalanan digital mereka.</p>
                    </div>
                    <div class="mb-10">
                        <div class="flex items-baseline gap-1">
                            <span class="text-sm font-black text-gray-400 uppercase">IDR</span>
                            <span class="text-5xl font-black text-gray-900 dark:text-white tracking-tighter">1.5jt</span>
                        </div>
                        <p class="text-xs font-bold text-sky-600 uppercase mt-2">Sekali Bayar</p>
                    </div>
                    <div class="space-y-5 mb-12 flex-grow">
                        <div class="flex items-center gap-4 text-gray-600 dark:text-gray-400">
                            <i class="ri-checkbox-circle-fill text-2xl text-sky-500"></i>
                            <span class="font-bold">Website 3 Halaman</span>
                        </div>
                        <div class="flex items-center gap-4 text-gray-600 dark:text-gray-400">
                            <i class="ri-checkbox-circle-fill text-2xl text-sky-500"></i>
                            <span class="font-bold">Domain .com/.id (1 Thn)</span>
                        </div>
                        <div class="flex items-center gap-4 text-gray-600 dark:text-gray-400">
                            <i class="ri-checkbox-circle-fill text-2xl text-sky-500"></i>
                            <span class="font-bold">Hosting & SSL</span>
                        </div>
                        <div class="flex items-center gap-4 text-gray-600 dark:text-gray-400">
                            <i class="ri-checkbox-circle-fill text-2xl text-sky-500"></i>
                            <span class="font-bold">Mobile Responsive</span>
                        </div>
                    </div>
                    <a href="{{ route('contact.index') }}" class="w-full py-5 text-center border-2 border-sky-500 text-sky-500 font-black rounded-2xl hover:bg-sky-500 hover:text-white transition-all">Pilih Paket</a>
                </div>

                <!-- Business Plan -->
                <div class="relative flex flex-col p-12 bg-gray-900 rounded-[3rem] text-white shadow-2xl transform scale-105 z-10 transition-all duration-500 hover:-translate-y-4 group" data-aos="fade-up" data-aos-delay="200">
                    <div class="absolute top-0 right-10 -translate-y-1/2 px-5 py-2 bg-gradient-to-r from-amber-400 to-orange-500 text-gray-900 text-[10px] font-black rounded-full uppercase tracking-widest shadow-xl">Paling Populer</div>
                    <div class="mb-10">
                        <h3 class="text-2xl font-black mb-4">Business</h3>
                        <p class="text-gray-400 font-medium leading-relaxed">Solusi lengkap untuk bisnis yang ingin mendominasi pasar lokal.</p>
                    </div>
                    <div class="mb-10">
                        <div class="flex items-baseline gap-1">
                            <span class="text-sm font-black text-gray-500 uppercase">IDR</span>
                            <span class="text-5xl font-black tracking-tighter">3.5jt</span>
                        </div>
                        <p class="text-xs font-bold text-amber-400 uppercase mt-2">Investasi Terbaik</p>
                    </div>
                    <div class="space-y-5 mb-12 flex-grow">
                        <div class="flex items-center gap-4">
                            <i class="ri-checkbox-circle-fill text-2xl text-amber-400"></i>
                            <span class="font-bold italic">Semua Fitur Starter</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <i class="ri-checkbox-circle-fill text-2xl text-amber-400"></i>
                            <span class="font-bold">Halaman Tak Terbatas</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <i class="ri-checkbox-circle-fill text-2xl text-amber-400"></i>
                            <span class="font-bold">Katalog Produk UMKM</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <i class="ri-checkbox-circle-fill text-2xl text-amber-400"></i>
                            <span class="font-bold">WhatsApp Marketing Tools</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <i class="ri-checkbox-circle-fill text-2xl text-amber-400"></i>
                            <span class="font-bold">Optimasi SEO Dasar</span>
                        </div>
                    </div>
                    <a href="{{ route('contact.index') }}" class="w-full py-5 text-center bg-white text-gray-900 font-black rounded-2xl hover:shadow-xl transition-all shadow-white/10">Dapatkan Sekarang</a>
                </div>

                <!-- Premium Plan -->
                <div class="flex flex-col p-12 bg-gray-50 dark:bg-gray-800 rounded-[3rem] border border-gray-100 dark:border-gray-700 transition-all duration-500 hover:shadow-2xl hover:-translate-y-2 group" data-aos="fade-up" data-aos-delay="300">
                    <div class="mb-10">
                        <h3 class="text-2xl font-black text-gray-900 dark:text-white mb-4">Premium</h3>
                        <p class="text-gray-500 dark:text-gray-400 font-medium leading-relaxed">Kustomisasi penuh untuk kebutuhan bisnis yang lebih kompleks.</p>
                    </div>
                    <div class="mb-10">
                        <div class="flex items-baseline gap-1">
                            <span class="text-sm font-black text-gray-400 uppercase">MULAI</span>
                            <span class="text-5xl font-black text-gray-900 dark:text-white tracking-tighter">7.5jt</span>
                        </div>
                        <p class="text-xs font-bold text-purple-600 uppercase mt-2">Kustomisasi Penuh</p>
                    </div>
                    <div class="space-y-5 mb-12 flex-grow">
                        <div class="flex items-center gap-4 text-gray-600 dark:text-gray-400">
                            <i class="ri-checkbox-circle-fill text-2xl text-purple-500"></i>
                            <span class="font-bold italic">Semua Fitur Business</span>
                        </div>
                        <div class="flex items-center gap-4 text-gray-600 dark:text-gray-400">
                            <i class="ri-checkbox-circle-fill text-2xl text-purple-500"></i>
                            <span class="font-bold">E-Commerce Full System</span>
                        </div>
                        <div class="flex items-center gap-4 text-gray-600 dark:text-gray-400">
                            <i class="ri-checkbox-circle-fill text-2xl text-purple-500"></i>
                            <span class="font-bold">Integrasi API & Gateway</span>
                        </div>
                        <div class="flex items-center gap-4 text-gray-600 dark:text-gray-400">
                            <i class="ri-checkbox-circle-fill text-2xl text-purple-500"></i>
                            <span class="font-bold">Maintenance Eksklusif</span>
                        </div>
                    </div>
                    <a href="{{ route('contact.index') }}" class="w-full py-5 text-center border-2 border-purple-500 text-purple-500 font-black rounded-2xl hover:bg-purple-500 hover:text-white transition-all">Konsultasi Project</a>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="py-32 bg-gray-50 dark:bg-gray-800/50">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-4xl font-black text-center mb-20">Frequently Asked Questions</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                    <div class="p-10 bg-white dark:bg-gray-900 rounded-[2.5rem] shadow-sm border border-gray-100 dark:border-gray-800">
                        <h4 class="text-lg font-black mb-4">Apakah ada biaya tambahan?</h4>
                        <p class="text-gray-500 dark:text-gray-400 leading-relaxed">Tidak ada biaya tersembunyi. Harga yang tertera adalah biaya sekali bayar untuk pengerjaan awal dan perizinan tahun pertama.</p>
                    </div>
                    <div class="p-10 bg-white dark:bg-gray-900 rounded-[2.5rem] shadow-sm border border-gray-100 dark:border-gray-800">
                        <h4 class="text-lg font-black mb-4">Bagaimana jika saya butuh revisi?</h4>
                        <p class="text-gray-500 dark:text-gray-400 leading-relaxed">Kami memberikan jatah revisi desain hingga 3 kali untuk memastikan kepuasan Anda sebelum website diluncurkan.</p>
                    </div>
                    <div class="p-10 bg-white dark:bg-gray-900 rounded-[2.5rem] shadow-sm border border-gray-100 dark:border-gray-800">
                        <h4 class="text-lg font-black mb-4">Apakah data saya aman?</h4>
                        <p class="text-gray-500 dark:text-gray-400 leading-relaxed">Keamanan data adalah prioritas kami. Kami menggunakan server terenkripsi dan SSL standar perbankan untuk semua website.</p>
                    </div>
                    <div class="p-10 bg-white dark:bg-gray-900 rounded-[2.5rem] shadow-sm border border-gray-100 dark:border-gray-800">
                        <h4 class="text-lg font-black mb-4">Bagaimana sistem pembayarannya?</h4>
                        <p class="text-gray-500 dark:text-gray-400 leading-relaxed">Kami menggunakan sistem termin (50% DP di awal, 50% pelunasan setelah pengerjaan selesai) untuk menjamin rasa aman kedua belah pihak.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
