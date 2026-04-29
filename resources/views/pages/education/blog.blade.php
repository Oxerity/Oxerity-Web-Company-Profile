<x-layouts.app>
    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-emerald-50 via-teal-50 to-cyan-50 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900">
            <div class="absolute top-0 -left-4 w-96 h-96 bg-emerald-400/20 rounded-full mix-blend-multiply filter blur-3xl animate-blob"></div>
            <div class="absolute top-0 -right-4 w-96 h-96 bg-cyan-400/20 rounded-full mix-blend-multiply filter blur-3xl animate-blob animation-delay-2000"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center max-w-3xl mx-auto" data-aos="fade-up">
                <div class="inline-block mb-4 px-4 py-2 bg-white/50 dark:bg-gray-800/50 backdrop-blur-md rounded-full border border-emerald-200 dark:border-emerald-700">
                    <span class="text-sm font-bold bg-gradient-to-r from-emerald-600 to-teal-600 dark:from-emerald-400 dark:to-teal-400 bg-clip-text text-transparent uppercase tracking-widest">
                        Insights & Knowledge
                    </span>
                </div>
                <h1 class="text-5xl md:text-7xl font-black mb-8 leading-tight">
                    <span class="bg-gradient-to-r from-emerald-600 via-teal-600 to-cyan-600 dark:from-emerald-400 dark:via-teal-400 dark:to-cyan-400 bg-clip-text text-transparent">
                        Oxerity Blog
                    </span>
                </h1>
                <p class="text-xl text-gray-600 dark:text-gray-400 leading-relaxed font-medium">
                    Panduan praktis dan tren teknologi terbaru untuk mengakselerasi pertumbuhan UMKM di era digital.
                </p>
            </div>
        </div>
    </section>

    <!-- Blog Content -->
    <section class="py-24 bg-white dark:bg-gray-900">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16">
                <!-- Main Content -->
                <div class="lg:col-span-8 space-y-20">
                    <!-- Featured Post -->
                    <article class="group relative" data-aos="fade-up">
                        <div class="relative aspect-[21/9] overflow-hidden rounded-[2.5rem] shadow-2xl mb-10">
                            <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?q=80&w=2070&auto=format&fit=crop" alt="Featured Post" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-transparent to-transparent opacity-60"></div>
                            <div class="absolute top-8 left-8">
                                <span class="px-4 py-2 bg-emerald-500 text-white text-xs font-bold rounded-full shadow-lg">TERPOPULER</span>
                            </div>
                        </div>
                        <div class="max-w-3xl">
                            <div class="flex items-center gap-4 mb-6 text-sm font-bold text-emerald-600 uppercase tracking-widest">
                                <span>Digital Strategy</span>
                                <span class="w-2 h-2 rounded-full bg-emerald-200"></span>
                                <span class="text-gray-400 font-medium lowercase">5 min read</span>
                            </div>
                            <h2 class="text-3xl md:text-5xl font-black mb-6 text-gray-900 dark:text-white leading-tight group-hover:text-emerald-500 transition-colors">
                                <a href="#">Membangun Ekosistem Digital UMKM: Langkah Strategis Menuju Pasar Global</a>
                            </h2>
                            <p class="text-lg text-gray-600 dark:text-gray-400 mb-8 leading-relaxed">
                                Transformasi digital bukan hanya tentang memiliki website. Ini tentang bagaimana mengintegrasikan teknologi ke dalam setiap lini bisnis untuk menciptakan nilai tambah yang kompetitif...
                            </p>
                            <div class="flex items-center gap-4">
                                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=200&h=200&fit=crop" alt="Author" class="w-12 h-12 rounded-full object-cover">
                                <div>
                                    <p class="font-bold text-gray-900 dark:text-white">Arya Pratama</p>
                                    <p class="text-sm text-gray-500">CEO Oxerity Corp</p>
                                </div>
                            </div>
                        </div>
                    </article>

                    <hr class="border-gray-100 dark:border-gray-800">

                    <!-- Post Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-10 gap-y-16">
                        <!-- Post 1 -->
                        <article class="group" data-aos="fade-up" data-aos-delay="100">
                            <div class="aspect-[4/3] overflow-hidden rounded-3xl mb-6 shadow-xl">
                                <img src="https://images.unsplash.com/photo-1432888622747-4eb9a8f2c20e?q=80&w=2069&auto=format&fit=crop" alt="Post 1" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                            </div>
                            <div class="flex items-center gap-3 mb-4 text-xs font-bold text-emerald-600 uppercase">
                                <span>SEO & SEM</span>
                                <span class="text-gray-400 font-medium">April 28, 2026</span>
                            </div>
                            <h3 class="text-2xl font-black mb-4 text-gray-900 dark:text-white group-hover:text-emerald-500 transition-colors leading-tight">
                                <a href="#">Optimasi SEO Lokal untuk Meningkatkan Penjualan UMKM</a>
                            </h3>
                            <p class="text-gray-600 dark:text-gray-400 line-clamp-2 leading-relaxed">
                                Pelajari bagaimana teknik SEO lokal dapat membawa toko fisik Anda muncul di pencarian Google Map...
                            </p>
                        </article>

                        <!-- Post 2 -->
                        <article class="group" data-aos="fade-up" data-aos-delay="200">
                            <div class="aspect-[4/3] overflow-hidden rounded-3xl mb-6 shadow-xl">
                                <img src="https://images.unsplash.com/photo-1551288049-bbbda536ad0a?q=80&w=2070&auto=format&fit=crop" alt="Post 2" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                            </div>
                            <div class="flex items-center gap-3 mb-4 text-xs font-bold text-emerald-600 uppercase">
                                <span>Design</span>
                                <span class="text-gray-400 font-medium">April 25, 2026</span>
                            </div>
                            <h3 class="text-2xl font-black mb-4 text-gray-900 dark:text-white group-hover:text-emerald-500 transition-colors leading-tight">
                                <a href="#">UI/UX yang Menjual: Rahasia Konversi Website E-Commerce</a>
                            </h3>
                            <p class="text-gray-600 dark:text-gray-400 line-clamp-2 leading-relaxed">
                                Desain bukan hanya tentang keindahan, tapi tentang kemudahan pelanggan dalam bertransaksi...
                            </p>
                        </article>
                    </div>
                </div>

                <!-- Sidebar -->
                <aside class="lg:col-span-4 space-y-12" data-aos="fade-left">
                    <!-- Search -->
                    <div class="p-10 bg-gray-50 dark:bg-gray-800/50 rounded-[2rem] border border-gray-100 dark:border-gray-700 shadow-sm">
                        <h4 class="text-xl font-black mb-6">Cari Artikel</h4>
                        <div class="relative">
                            <input type="text" placeholder="Kata kunci..." class="w-full pl-14 pr-6 py-4 bg-white dark:bg-gray-900 border border-gray-100 dark:border-gray-700 rounded-2xl shadow-sm focus:outline-none focus:ring-2 focus:ring-emerald-500 transition-all">
                            <i class="ri-search-2-line absolute left-6 top-1/2 -translate-y-1/2 text-gray-400 text-xl"></i>
                        </div>
                    </div>

                    <!-- Categories -->
                    <div class="p-10 bg-gray-50 dark:bg-gray-800/50 rounded-[2rem] border border-gray-100 dark:border-gray-700 shadow-sm">
                        <h4 class="text-xl font-black mb-8">Kategori Populer</h4>
                        <div class="space-y-4">
                            <a href="#" class="flex items-center justify-between group p-2 -m-2 rounded-xl hover:bg-emerald-500/5 transition-all">
                                <span class="font-bold text-gray-600 dark:text-gray-400 group-hover:text-emerald-500 transition-colors">Digital Marketing</span>
                                <span class="px-3 py-1 bg-white dark:bg-gray-800 text-xs font-bold rounded-lg border border-gray-100 dark:border-gray-700">24</span>
                            </a>
                            <a href="#" class="flex items-center justify-between group p-2 -m-2 rounded-xl hover:bg-emerald-500/5 transition-all">
                                <span class="font-bold text-gray-600 dark:text-gray-400 group-hover:text-emerald-500 transition-colors">E-Commerce</span>
                                <span class="px-3 py-1 bg-white dark:bg-gray-800 text-xs font-bold rounded-lg border border-gray-100 dark:border-gray-700">18</span>
                            </a>
                            <a href="#" class="flex items-center justify-between group p-2 -m-2 rounded-xl hover:bg-emerald-500/5 transition-all">
                                <span class="font-bold text-gray-600 dark:text-gray-400 group-hover:text-emerald-500 transition-colors">Web Technology</span>
                                <span class="px-3 py-1 bg-white dark:bg-gray-800 text-xs font-bold rounded-lg border border-gray-100 dark:border-gray-700">12</span>
                            </a>
                        </div>
                    </div>

                    <!-- Newsletter Sidebar -->
                    <div class="relative p-10 bg-gray-900 rounded-[2rem] overflow-hidden text-white shadow-2xl">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-emerald-500/20 rounded-full -mr-16 -mt-16 blur-3xl"></div>
                        <h4 class="text-2xl font-black mb-4 relative z-10">Stay Updated</h4>
                        <p class="text-gray-400 mb-8 relative z-10 leading-relaxed">Dapatkan ringkasan artikel terbaik setiap minggunya.</p>
                        <form class="space-y-4 relative z-10">
                            <input type="email" placeholder="Email Anda" class="w-full px-6 py-4 bg-white/10 border border-white/10 rounded-2xl focus:outline-none focus:border-emerald-500 transition-all placeholder:text-gray-500">
                            <button class="w-full py-4 bg-emerald-500 text-white font-black rounded-2xl hover:bg-emerald-400 shadow-xl shadow-emerald-500/20 transition-all">Subscribe Now</button>
                        </form>
                    </div>
                </aside>
            </div>
        </div>
    </section>
</x-layouts.app>
