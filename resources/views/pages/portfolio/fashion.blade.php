<x-layouts.app>
    <!-- Hero Section -->
    <section class="relative pt-32 pb-24 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-purple-50 via-pink-50 to-fuchsia-50 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900">
            <div class="absolute top-0 -left-10 w-96 h-96 bg-purple-400/20 rounded-full mix-blend-multiply filter blur-3xl animate-blob"></div>
            <div class="absolute top-20 -right-10 w-96 h-96 bg-fuchsia-400/20 rounded-full mix-blend-multiply filter blur-3xl animate-blob animation-delay-2000"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-4xl mx-auto text-center" data-aos="fade-up">
                <div class="inline-block mb-6 px-6 py-2 bg-white/60 dark:bg-gray-800/60 backdrop-blur-xl rounded-full border border-purple-200 dark:border-purple-900/50 shadow-sm">
                    <span class="text-xs font-black bg-gradient-to-r from-purple-600 to-pink-600 dark:from-purple-400 dark:to-pink-400 bg-clip-text text-transparent uppercase tracking-[0.2em]">
                        Fashion & Retail Portfolio
                    </span>
                </div>
                <h1 class="text-6xl md:text-8xl font-black mb-8 leading-[1.1] tracking-tighter">
                    <span class="bg-gradient-to-r from-purple-600 via-pink-600 to-fuchsia-600 dark:from-purple-400 dark:via-pink-400 dark:to-fuchsia-400 bg-clip-text text-transparent">
                        Estetika Digital
                    </span>
                </h1>
                <p class="text-xl text-gray-600 dark:text-gray-400 leading-relaxed max-w-2xl mx-auto font-medium">
                    Membangun identitas visual yang kuat dan pengalaman belanja online yang tak terlupakan untuk brand fashion Anda.
                </p>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid -->
    <section class="py-32 bg-white dark:bg-gray-900">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-16">
                <!-- Project 1 -->
                <div class="group" data-aos="fade-up" data-aos-delay="100">
                    <div class="relative overflow-hidden rounded-[3rem] bg-gray-100 dark:bg-gray-800 shadow-2xl transition-all duration-700 hover:-translate-y-4 mb-10 aspect-[3/4]">
                        <img src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?q=80&w=1000&auto=format&fit=crop" alt="Luna & Sol" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-purple-900/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col justify-end p-12">
                            <h3 class="text-3xl font-black text-white mb-2">Luna & Sol</h3>
                            <p class="text-purple-200 font-medium">E-Commerce Boutique</p>
                        </div>
                    </div>
                    <div class="text-center px-4">
                        <h4 class="text-2xl font-black text-gray-900 dark:text-white mb-4">Luna & Sol Boutique</h4>
                        <p class="text-gray-500 dark:text-gray-400 leading-relaxed mb-8">Platform belanja premium dengan fitur filter produk cerdas dan integrasi pembayaran yang mulus.</p>
                        <a href="#" class="inline-flex items-center gap-4 text-sm font-black uppercase tracking-widest text-purple-600 hover:gap-6 transition-all">
                            View Case Study <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="group" data-aos="fade-up" data-aos-delay="200">
                    <div class="relative overflow-hidden rounded-[3rem] bg-gray-100 dark:bg-gray-800 shadow-2xl transition-all duration-700 hover:-translate-y-4 mb-10 aspect-[3/4]">
                        <img src="https://images.unsplash.com/photo-1490481651871-ab68de25d43d?q=80&w=1000&auto=format&fit=crop" alt="Urban Threads" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-pink-900/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col justify-end p-12">
                            <h3 class="text-3xl font-black text-white mb-2">Urban Threads</h3>
                            <p class="text-pink-200 font-medium">Streetwear Brand</p>
                        </div>
                    </div>
                    <div class="text-center px-4">
                        <h4 class="text-2xl font-black text-gray-900 dark:text-white mb-4">Urban Threads Official</h4>
                        <p class="text-gray-500 dark:text-gray-400 leading-relaxed mb-8">Desain edgy dan dinamis yang menargetkan audiens Gen-Z dengan pengalaman belanja mobile-first.</p>
                        <a href="#" class="inline-flex items-center gap-4 text-sm font-black uppercase tracking-widest text-pink-600 hover:gap-6 transition-all">
                            View Case Study <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="group" data-aos="fade-up" data-aos-delay="300">
                    <div class="relative overflow-hidden rounded-[3rem] bg-gray-100 dark:bg-gray-800 shadow-2xl transition-all duration-700 hover:-translate-y-4 mb-10 aspect-[3/4]">
                        <img src="https://images.unsplash.com/photo-1445205170230-053b830c6050?q=80&w=1000&auto=format&fit=crop" alt="Velvet Reign" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-fuchsia-900/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col justify-end p-12">
                            <h3 class="text-3xl font-black text-white mb-2">Velvet Reign</h3>
                            <p class="text-fuchsia-200 font-medium">Luxury Fashion</p>
                        </div>
                    </div>
                    <div class="text-center px-4">
                        <h4 class="text-2xl font-black text-gray-900 dark:text-white mb-4">Velvet Reign Luxury</h4>
                        <p class="text-gray-500 dark:text-gray-400 leading-relaxed mb-8">Eksklusivitas dalam setiap pixel. Menghadirkan kesan mewah melalui tipografi elegan dan whitespace yang luas.</p>
                        <a href="#" class="inline-flex items-center gap-4 text-sm font-black uppercase tracking-widest text-fuchsia-600 hover:gap-6 transition-all">
                            View Case Study <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Design Section -->
    <section class="py-32 bg-gray-900 text-white overflow-hidden">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center gap-20">
                <div class="lg:w-1/2" data-aos="fade-right">
                    <h2 class="text-5xl md:text-7xl font-black mb-10 leading-tight">Fashion is <br> Architecture.</h2>
                    <p class="text-xl text-gray-400 mb-12 leading-relaxed font-medium italic border-l-4 border-purple-500 pl-8">
                        "Desain website bukan hanya soal meletakkan gambar, tapi soal proporsi, harmoni, dan emosi yang dirasakan oleh pelanggan Anda."
                    </p>
                    <a href="{{ route('contact.index') }}" class="inline-block px-12 py-5 bg-gradient-to-r from-purple-500 to-pink-600 text-white font-black rounded-full hover:shadow-2xl hover:shadow-purple-500/40 transition-all hover:-translate-y-1">
                        Bahas Project Anda
                    </a>
                </div>
                <div class="lg:w-1/2 relative" data-aos="fade-left">
                    <div class="absolute -inset-10 bg-purple-500/20 blur-[100px] rounded-full"></div>
                    <img src="https://images.unsplash.com/photo-1558769132-cb1aea458c5e?q=80&w=2070&auto=format&fit=crop" alt="Fashion Design" class="relative rounded-[3rem] shadow-2xl border border-white/10">
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
