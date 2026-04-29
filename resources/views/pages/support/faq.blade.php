<x-layouts.app>
    <!-- Hero Section -->
    <section class="relative pt-32 pb-24 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900">
            <div class="absolute top-0 -left-10 w-96 h-96 bg-indigo-400/20 rounded-full mix-blend-multiply filter blur-3xl animate-blob"></div>
            <div class="absolute top-20 -right-10 w-96 h-96 bg-pink-400/20 rounded-full mix-blend-multiply filter blur-3xl animate-blob animation-delay-2000"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10 text-center">
            <div class="max-w-4xl mx-auto" data-aos="fade-up">
                <div class="inline-block mb-6 px-6 py-2 bg-white/60 dark:bg-gray-800/60 backdrop-blur-xl rounded-full border border-indigo-200 dark:border-indigo-900/50 shadow-sm">
                    <span class="text-xs font-black bg-gradient-to-r from-indigo-600 to-purple-600 dark:from-indigo-400 dark:to-purple-400 bg-clip-text text-transparent uppercase tracking-[0.2em]">
                        Frequently Asked Questions
                    </span>
                </div>
                <h1 class="text-6xl md:text-8xl font-black mb-10 leading-[1.1] tracking-tighter text-gray-900 dark:text-white">
                    FAQ
                </h1>
                <p class="text-xl text-gray-600 dark:text-gray-400 leading-relaxed max-w-2xl mx-auto font-medium">
                    Semua jawaban yang Anda butuhkan untuk memulai langkah digital Anda bersama Oxerity.
                </p>
            </div>
        </div>
    </section>

    <!-- FAQ Content -->
    <section class="py-32 bg-white dark:bg-gray-900">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto" x-data="{ active: 1 }">
                <div class="space-y-8">
                    <!-- FAQ 1 -->
                    <div class="group" :class="active === 1 ? 'z-10' : ''">
                        <button 
                            class="w-full p-10 flex items-center justify-between text-left focus:outline-none bg-gray-50 dark:bg-gray-800/50 rounded-[2.5rem] border-2 transition-all duration-500"
                            :class="active === 1 ? 'border-indigo-500 shadow-2xl shadow-indigo-500/10' : 'border-transparent hover:border-gray-200 dark:hover:border-gray-700'"
                            @click="active = active === 1 ? null : 1"
                        >
                            <span class="text-2xl font-black text-gray-900 dark:text-white leading-tight">Berapa lama pengerjaan satu website?</span>
                            <div class="w-12 h-12 bg-white dark:bg-gray-900 rounded-2xl flex items-center justify-center shadow-sm transition-transform duration-500" :class="active === 1 ? 'rotate-180 bg-indigo-500 text-white' : ''">
                                <i class="ri-arrow-down-s-line text-2xl"></i>
                            </div>
                        </button>
                        <div 
                            class="px-10 overflow-hidden transition-all duration-500"
                            x-show="active === 1"
                            x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 max-h-0"
                            x-transition:enter-end="opacity-100 max-h-[500px]"
                        >
                            <div class="pt-6 pb-10">
                                <p class="text-lg text-gray-600 dark:text-gray-400 leading-relaxed font-medium">
                                    Waktu pengerjaan standar kami adalah 5-14 hari kerja tergantung paket yang dipilih. Kami memulai pengerjaan segera setelah kontrak disepakati dan semua materi (logo, teks, gambar) kami terima. Kami juga akan memberikan update berkala setiap tahap pengerjaan.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="group" :class="active === 2 ? 'z-10' : ''">
                        <button 
                            class="w-full p-10 flex items-center justify-between text-left focus:outline-none bg-gray-50 dark:bg-gray-800/50 rounded-[2.5rem] border-2 transition-all duration-500"
                            :class="active === 2 ? 'border-indigo-500 shadow-2xl shadow-indigo-500/10' : 'border-transparent hover:border-gray-200 dark:hover:border-gray-700'"
                            @click="active = active === 2 ? null : 2"
                        >
                            <span class="text-2xl font-black text-gray-900 dark:text-white leading-tight">Apakah saya bisa mengubah konten sendiri?</span>
                            <div class="w-12 h-12 bg-white dark:bg-gray-900 rounded-2xl flex items-center justify-center shadow-sm transition-transform duration-500" :class="active === 2 ? 'rotate-180 bg-indigo-500 text-white' : ''">
                                <i class="ri-arrow-down-s-line text-2xl"></i>
                            </div>
                        </button>
                        <div 
                            class="px-10 overflow-hidden transition-all duration-500"
                            x-show="active === 2"
                            x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 max-h-0"
                            x-transition:enter-end="opacity-100 max-h-[500px]"
                        >
                            <div class="pt-6 pb-10">
                                <p class="text-lg text-gray-600 dark:text-gray-400 leading-relaxed font-medium">
                                    Tentu saja! Kami membangun website menggunakan sistem manajemen konten (CMS) yang sangat user-friendly. Kami juga akan memberikan video panduan cara mengoperasikan dashboard agar Anda bisa mengubah teks, gambar, atau produk kapan saja tanpa perlu keahlian coding.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="group" :class="active === 3 ? 'z-10' : ''">
                        <button 
                            class="w-full p-10 flex items-center justify-between text-left focus:outline-none bg-gray-50 dark:bg-gray-800/50 rounded-[2.5rem] border-2 transition-all duration-500"
                            :class="active === 3 ? 'border-indigo-500 shadow-2xl shadow-indigo-500/10' : 'border-transparent hover:border-gray-200 dark:hover:border-gray-700'"
                            @click="active = active === 3 ? null : 3"
                        >
                            <span class="text-2xl font-black text-gray-900 dark:text-white leading-tight">Apakah ada biaya maintenance bulanan?</span>
                            <div class="w-12 h-12 bg-white dark:bg-gray-900 rounded-2xl flex items-center justify-center shadow-sm transition-transform duration-500" :class="active === 3 ? 'rotate-180 bg-indigo-500 text-white' : ''">
                                <i class="ri-arrow-down-s-line text-2xl"></i>
                            </div>
                        </button>
                        <div 
                            class="px-10 overflow-hidden transition-all duration-500"
                            x-show="active === 3"
                            x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 max-h-0"
                            x-transition:enter-end="opacity-100 max-h-[500px]"
                        >
                            <div class="pt-6 pb-10">
                                <p class="text-lg text-gray-600 dark:text-gray-400 leading-relaxed font-medium">
                                    Oxerity tidak membebankan biaya maintenance bulanan. Anda hanya perlu membayar biaya perpanjangan domain dan hosting setiap satu tahun sekali. Kami memberikan support teknis gratis selama 12 bulan pertama jika terjadi error pada sistem.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Support Banner -->
    <section class="py-32 bg-gray-900 overflow-hidden relative">
        <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-indigo-500/10 rounded-full blur-[120px] -mr-64 -mt-64"></div>
        <div class="container mx-auto px-6 relative z-10 text-center text-white">
            <h2 class="text-4xl md:text-5xl font-black mb-10 leading-tight">Belum Menemukan Jawaban?</h2>
            <p class="text-xl text-gray-400 mb-12 max-w-2xl mx-auto font-medium">Tim konsultan kami siap membantu Anda secara personal.</p>
            <div class="flex flex-wrap justify-center gap-6">
                <a href="{{ route('contact.index') }}" class="px-12 py-5 bg-white text-gray-900 font-black rounded-2xl hover:scale-105 transition-all shadow-2xl shadow-white/5">
                    Hubungi Kami
                </a>
                <a href="https://wa.me/6281234567890" class="px-12 py-5 bg-transparent border-2 border-white/20 hover:border-white text-white font-black rounded-2xl transition-all">
                    WhatsApp Chat
                </a>
            </div>
        </div>
    </section>
</x-layouts.app>
