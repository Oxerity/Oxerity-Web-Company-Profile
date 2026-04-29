<x-layouts.app>
    <!-- Hero Section -->
    <section class="relative pt-32 pb-24 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-blue-50 via-indigo-50 to-sky-50 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900">
            <div class="absolute top-0 -left-10 w-96 h-96 bg-blue-400/20 rounded-full mix-blend-multiply filter blur-3xl animate-blob"></div>
            <div class="absolute top-20 -right-10 w-96 h-96 bg-sky-400/20 rounded-full mix-blend-multiply filter blur-3xl animate-blob animation-delay-2000"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10 text-center">
            <div class="max-w-4xl mx-auto" data-aos="fade-up">
                <div class="inline-block mb-6 px-6 py-2 bg-white/60 dark:bg-gray-800/60 backdrop-blur-xl rounded-full border border-blue-200 dark:border-blue-900/50 shadow-sm">
                    <span class="text-xs font-black bg-gradient-to-r from-blue-600 to-indigo-600 dark:from-blue-400 dark:to-indigo-400 bg-clip-text text-transparent uppercase tracking-[0.2em]">
                        Support Center
                    </span>
                </div>
                <h1 class="text-6xl md:text-8xl font-black mb-10 leading-[1.1] tracking-tighter text-gray-900 dark:text-white">
                    Pusat Bantuan
                </h1>
                <div class="max-w-2xl mx-auto relative group">
                    <div class="absolute -inset-1 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-[2.5rem] blur opacity-25 group-hover:opacity-50 transition duration-1000"></div>
                    <input type="text" placeholder="Apa yang bisa kami bantu hari ini?" class="relative w-full px-10 py-7 bg-white dark:bg-gray-800 border-2 border-transparent shadow-2xl rounded-[2.5rem] focus:outline-none focus:border-blue-500 transition-all text-lg font-bold text-gray-800 dark:text-white">
                    <button class="absolute right-6 top-1/2 -translate-y-1/2 w-14 h-14 bg-blue-600 text-white rounded-2xl flex items-center justify-center hover:bg-blue-700 transition-all hover:scale-105 active:scale-95 shadow-xl shadow-blue-500/20">
                        <i class="ri-search-2-line text-2xl font-bold"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Support Categories -->
    <section class="py-32 bg-white dark:bg-gray-900">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 lg:gap-16">
                <!-- Cat 1 -->
                <div class="group" data-aos="fade-up" data-aos-delay="100">
                    <div class="p-12 bg-gray-50 dark:bg-gray-800/50 rounded-[3rem] border border-gray-100 dark:border-gray-700 transition-all duration-500 hover:shadow-2xl hover:shadow-blue-500/5 hover:-translate-y-2 relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-blue-500/5 rounded-full -mr-16 -mt-16 group-hover:scale-150 transition-transform duration-700"></div>
                        <div class="w-20 h-20 bg-white dark:bg-gray-800 shadow-xl rounded-[2rem] flex items-center justify-center text-blue-600 mb-10 group-hover:bg-blue-600 group-hover:text-white transition-all duration-500 relative z-10">
                            <i class="ri-book-open-fill text-4xl"></i>
                        </div>
                        <h3 class="text-2xl font-black mb-4 relative z-10">Panduan User</h3>
                        <p class="text-gray-500 dark:text-gray-400 font-medium mb-10 leading-relaxed relative z-10">Dokumentasi lengkap mengenai cara mengelola website, update konten, hingga setting e-mail bisnis.</p>
                        <a href="#" class="inline-flex items-center gap-3 font-black text-sm uppercase tracking-widest text-blue-600 hover:gap-5 transition-all relative z-10">
                            Buka Panduan <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>

                <!-- Cat 2 -->
                <div class="group" data-aos="fade-up" data-aos-delay="200">
                    <div class="p-12 bg-gray-50 dark:bg-gray-800/50 rounded-[3rem] border border-gray-100 dark:border-gray-700 transition-all duration-500 hover:shadow-2xl hover:shadow-indigo-500/5 hover:-translate-y-2 relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-indigo-500/5 rounded-full -mr-16 -mt-16 group-hover:scale-150 transition-transform duration-700"></div>
                        <div class="w-20 h-20 bg-white dark:bg-gray-800 shadow-xl rounded-[2rem] flex items-center justify-center text-indigo-600 mb-10 group-hover:bg-indigo-600 group-hover:text-white transition-all duration-500 relative z-10">
                            <i class="ri-shield-user-fill text-4xl"></i>
                        </div>
                        <h3 class="text-2xl font-black mb-4 relative z-10">Keamanan</h3>
                        <p class="text-gray-500 dark:text-gray-400 font-medium mb-10 leading-relaxed relative z-10">Panduan menjaga keamanan akun, manajemen password, hingga proteksi data pelanggan Anda.</p>
                        <a href="#" class="inline-flex items-center gap-3 font-black text-sm uppercase tracking-widest text-indigo-600 hover:gap-5 transition-all relative z-10">
                            Keamanan Akun <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>

                <!-- Cat 3 -->
                <div class="group" data-aos="fade-up" data-aos-delay="300">
                    <div class="p-12 bg-gray-50 dark:bg-gray-800/50 rounded-[3rem] border border-gray-100 dark:border-gray-700 transition-all duration-500 hover:shadow-2xl hover:shadow-sky-500/5 hover:-translate-y-2 relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-sky-500/5 rounded-full -mr-16 -mt-16 group-hover:scale-150 transition-transform duration-700"></div>
                        <div class="w-20 h-20 bg-white dark:bg-gray-800 shadow-xl rounded-[2rem] flex items-center justify-center text-sky-600 mb-10 group-hover:bg-sky-600 group-hover:text-white transition-all duration-500 relative z-10">
                            <i class="ri-customer-service-2-fill text-4xl"></i>
                        </div>
                        <h3 class="text-2xl font-black mb-4 relative z-10">Live Support</h3>
                        <p class="text-gray-500 dark:text-gray-400 font-medium mb-10 leading-relaxed relative z-10">Butuh bantuan langsung? Tim teknisi kami siap membantu menyelesaikan kendala Anda secara real-time.</p>
                        <a href="#" class="inline-flex items-center gap-3 font-black text-sm uppercase tracking-widest text-sky-600 hover:gap-5 transition-all relative z-10">
                            Chat Support <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular FAQ -->
    <section class="py-32 bg-gray-50 dark:bg-gray-800/50">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto">
                <div class="flex items-center justify-between mb-16">
                    <h2 class="text-4xl font-black tracking-tight">Topik Populer</h2>
                    <a href="{{ route('support.faq') }}" class="font-bold text-blue-600 hover:underline">Lihat Semua FAQ</a>
                </div>
                <div class="space-y-4">
                    <a href="#" class="group flex items-center justify-between p-8 bg-white dark:bg-gray-900 rounded-[2.5rem] shadow-sm hover:shadow-2xl hover:-translate-x-2 transition-all duration-300">
                        <div class="flex items-center gap-6">
                            <div class="w-12 h-12 bg-blue-50 dark:bg-gray-800 rounded-xl flex items-center justify-center text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-all">
                                <i class="ri-question-fill text-xl"></i>
                            </div>
                            <span class="text-xl font-bold text-gray-800 dark:text-white">Cara mengganti logo dan warna website?</span>
                        </div>
                        <i class="ri-arrow-right-s-line text-3xl text-gray-300 group-hover:text-blue-600 transition-colors"></i>
                    </a>
                    <a href="#" class="group flex items-center justify-between p-8 bg-white dark:bg-gray-900 rounded-[2.5rem] shadow-sm hover:shadow-2xl hover:-translate-x-2 transition-all duration-300">
                        <div class="flex items-center gap-6">
                            <div class="w-12 h-12 bg-blue-50 dark:bg-gray-800 rounded-xl flex items-center justify-center text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-all">
                                <i class="ri-question-fill text-xl"></i>
                            </div>
                            <span class="text-xl font-bold text-gray-800 dark:text-white">Setting auto-reply WhatsApp di website?</span>
                        </div>
                        <i class="ri-arrow-right-s-line text-3xl text-gray-300 group-hover:text-blue-600 transition-colors"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Bottom CTA -->
    <section class="py-32">
        <div class="container mx-auto px-6 text-center">
            <div class="relative bg-blue-600 rounded-[4rem] p-16 md:p-24 overflow-hidden text-white shadow-2xl">
                <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1557804506-669a67965ba0?q=80&w=2074&auto=format&fit=crop')] bg-cover bg-center opacity-10"></div>
                <div class="relative z-10 max-w-3xl mx-auto">
                    <h2 class="text-4xl md:text-6xl font-black mb-8 leading-tight">Tidak Menemukan Jawaban?</h2>
                    <p class="text-xl text-blue-100 mb-12 font-medium opacity-80">Jangan ragu untuk menghubungi kami. Kami siap membantu Anda kapan saja.</p>
                    <div class="flex flex-wrap justify-center gap-6">
                        <a href="{{ route('contact.index') }}" class="px-12 py-5 bg-white text-blue-600 font-black rounded-2xl hover:scale-105 transition-all shadow-xl shadow-white/10">Hubungi Kami</a>
                        <a href="https://wa.me/6281234567890" class="px-12 py-5 bg-blue-700 text-white font-black rounded-2xl hover:bg-blue-800 transition-all shadow-xl">WhatsApp Chat</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
