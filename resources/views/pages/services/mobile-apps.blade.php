<x-layouts.app :title="$title">
    <!-- Hero Section -->
    <section class="relative pt-8 pb-16 lg:pt-10 lg:pb-32 overflow-hidden bg-white dark:bg-gray-900">
        <!-- Background Effects -->
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-5 dark:opacity-10"></div>
        <div class="absolute top-0 left-0 w-[500px] h-[500px] bg-emerald-400/20 dark:bg-emerald-500/10 rounded-full blur-3xl -translate-x-1/2 -translate-y-1/4"></div>
        <div class="absolute bottom-0 right-0 w-[600px] h-[600px] bg-green-400/20 dark:bg-green-500/10 rounded-full blur-3xl translate-x-1/2 translate-y-1/4"></div>
        
        <div class="container mx-auto px-6 relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <!-- Text Content -->
                <div class="w-full lg:w-1/2 text-center lg:text-left" data-aos="fade-right">
                    <div class="inline-flex items-center mb-6 px-4 py-2 bg-emerald-50 dark:bg-gray-800 rounded-full border border-emerald-100 dark:border-gray-700 shadow-sm">
                        <span class="flex w-2 h-2 bg-emerald-500 rounded-full mr-2 animate-pulse"></span>
                        <span class="text-emerald-600 dark:text-emerald-400 text-xs font-bold uppercase tracking-wider">iOS & Android Native / Hybrid</span>
                    </div>
                    <h1 class="text-5xl lg:text-7xl font-extrabold text-gray-900 dark:text-white mb-6 leading-tight tracking-tight">
                        Genggam Dunia dengan <span class="bg-gradient-to-r from-emerald-500 to-green-400 bg-clip-text text-transparent">Mobile Apps</span>
                    </h1>
                    <p class="text-lg text-gray-600 dark:text-gray-300 mb-8 max-w-2xl mx-auto lg:mx-0 leading-relaxed">
                        Hadir lebih dekat dengan pelanggan langsung di genggaman mereka. Kami mengembangkan aplikasi mobile yang revolusioner, cepat, dan mudah digunakan di ekosistem Apple maupun Android.
                    </p>
                    <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start space-y-4 sm:space-y-0 sm:space-x-4">
                        <a href="#technologies" class="w-full sm:w-auto px-8 py-4 bg-gradient-to-r from-emerald-500 to-green-500 text-white font-bold rounded-2xl shadow-xl shadow-emerald-500/30 hover:shadow-emerald-500/50 transition-all duration-300 hover:-translate-y-1 text-center flex items-center justify-center group">
                            Teknologi Kami <i class="ri-arrow-down-line ml-2 group-hover:translate-y-1 transition-transform"></i>
                        </a>
                        <a href="#contact" class="w-full sm:w-auto px-8 py-4 bg-white dark:bg-gray-800 text-gray-900 dark:text-white font-bold rounded-2xl border border-gray-200 dark:border-gray-700 hover:bg-emerald-50 dark:hover:bg-gray-700 transition-all duration-300 text-center">
                            Konsultasi App
                        </a>
                    </div>
                </div>

                <!-- Hero Image with Floating Phones -->
                <div class="w-full lg:w-1/2 relative h-[500px]" data-aos="fade-left">
                    <!-- Phone 1 (Foreground) -->
                    <div class="absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 z-20 animate-[bounce_6s_infinite]">
                        <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?q=80&w=800&auto=format&fit=crop" alt="Mobile App 1" class="w-64 h-[500px] object-cover rounded-[3rem] border-8 border-gray-900 shadow-2xl">
                    </div>
                    <!-- Phone 2 (Background Left) -->
                    <div class="absolute left-10 top-10 transform -rotate-12 z-10 opacity-70 blur-[2px] animate-[bounce_5s_infinite]">
                        <img src="https://images.unsplash.com/photo-1611162617474-5b21e879e113?q=80&w=800&auto=format&fit=crop" alt="Mobile App 2" class="w-56 h-[450px] object-cover rounded-[2.5rem] border-8 border-gray-800 shadow-xl">
                    </div>
                    <!-- Phone 3 (Background Right) -->
                    <div class="absolute right-10 bottom-0 transform rotate-12 z-10 opacity-70 blur-[1px] animate-[bounce_7s_infinite]">
                        <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3?q=80&w=800&auto=format&fit=crop" alt="Mobile App 3" class="w-56 h-[450px] object-cover rounded-[2.5rem] border-8 border-gray-800 shadow-xl">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technologies Section -->
    <section id="technologies" class="py-24 bg-gray-50 dark:bg-gray-800 border-y border-gray-100 dark:border-gray-800">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
                <h2 class="text-3xl lg:text-4xl font-extrabold text-gray-900 dark:text-white mb-6">Teknologi Modern & Skalabel</h2>
                <p class="text-gray-600 dark:text-gray-400 text-lg">Kami menggunakan stack teknologi terbaik yang diakui industri global untuk membangun aplikasi yang stabil, ringan, dan tidak menguras baterai.</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="bg-white dark:bg-gray-900 p-8 rounded-3xl shadow-lg border border-gray-100 dark:border-gray-800 flex flex-col items-center justify-center hover:scale-105 hover:shadow-emerald-500/20 transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                    <i class="ri-flutter-fill text-6xl text-sky-500 mb-4"></i>
                    <h3 class="font-bold text-gray-900 dark:text-white">Flutter</h3>
                    <p class="text-xs text-gray-500 text-center mt-2">Satu kode untuk iOS & Android</p>
                </div>
                
                <div class="bg-white dark:bg-gray-900 p-8 rounded-3xl shadow-lg border border-gray-100 dark:border-gray-800 flex flex-col items-center justify-center hover:scale-105 hover:shadow-emerald-500/20 transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                    <i class="ri-reactjs-fill text-6xl text-blue-400 mb-4"></i>
                    <h3 class="font-bold text-gray-900 dark:text-white">React Native</h3>
                    <p class="text-xs text-gray-500 text-center mt-2">Dukungan komunitas terbesar</p>
                </div>

                <div class="bg-white dark:bg-gray-900 p-8 rounded-3xl shadow-lg border border-gray-100 dark:border-gray-800 flex flex-col items-center justify-center hover:scale-105 hover:shadow-emerald-500/20 transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
                    <i class="ri-apple-fill text-6xl text-gray-800 dark:text-white mb-4"></i>
                    <h3 class="font-bold text-gray-900 dark:text-white">Swift</h3>
                    <p class="text-xs text-gray-500 text-center mt-2">Native iOS development</p>
                </div>

                <div class="bg-white dark:bg-gray-900 p-8 rounded-3xl shadow-lg border border-gray-100 dark:border-gray-800 flex flex-col items-center justify-center hover:scale-105 hover:shadow-emerald-500/20 transition-all duration-300" data-aos="fade-up" data-aos-delay="400">
                    <i class="ri-android-fill text-6xl text-green-500 mb-4"></i>
                    <h3 class="font-bold text-gray-900 dark:text-white">Kotlin</h3>
                    <p class="text-xs text-gray-500 text-center mt-2">Native Android development</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Development Process -->
    <section class="py-24 bg-white dark:bg-gray-900">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <div class="w-full lg:w-1/2" data-aos="fade-right">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1555774698-0b77e0d5fac6?q=80&w=2000&auto=format&fit=crop" alt="App Development" class="rounded-3xl shadow-2xl relative z-10">
                        <div class="absolute -bottom-6 -right-6 w-full h-full bg-emerald-500 rounded-3xl z-0"></div>
                    </div>
                </div>
                
                <div class="w-full lg:w-1/2" data-aos="fade-left">
                    <h2 class="text-3xl lg:text-4xl font-extrabold text-gray-900 dark:text-white mb-6">Proses Pengembangan App Terstandar</h2>
                    <div class="space-y-8 mt-10">
                        <div class="flex">
                            <div class="flex flex-col items-center mr-6">
                                <div class="w-10 h-10 rounded-full bg-emerald-500 text-white flex items-center justify-center font-bold text-lg shadow-lg z-10">1</div>
                                <div class="h-full w-1 bg-gray-200 dark:bg-gray-700 my-2"></div>
                            </div>
                            <div class="pb-8">
                                <h4 class="text-xl font-bold text-gray-900 dark:text-white mb-2">UI/UX Prototyping</h4>
                                <p class="text-gray-600 dark:text-gray-400">Riset pengguna dan pembuatan wireframe interaktif sebelum satu baris kodepun ditulis.</p>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="flex flex-col items-center mr-6">
                                <div class="w-10 h-10 rounded-full bg-emerald-500 text-white flex items-center justify-center font-bold text-lg shadow-lg z-10">2</div>
                                <div class="h-full w-1 bg-gray-200 dark:bg-gray-700 my-2"></div>
                            </div>
                            <div class="pb-8">
                                <h4 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Agile Development</h4>
                                <p class="text-gray-600 dark:text-gray-400">Pengembangan iteratif yang memungkinkan Anda melihat progress setiap minggu secara transparan.</p>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="flex flex-col items-center mr-6">
                                <div class="w-10 h-10 rounded-full bg-emerald-500 text-white flex items-center justify-center font-bold text-lg shadow-lg z-10">3</div>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Publishing & QA</h4>
                                <p class="text-gray-600 dark:text-gray-400">Pengujian ketat di berbagai perangkat dan proses unggah ke Google Play Store & Apple App Store.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-20 bg-gray-50 dark:bg-gray-800">
        <div class="container mx-auto px-6 relative">
            <div class="bg-gradient-to-br from-emerald-600 to-teal-700 rounded-[3rem] p-10 lg:p-16 text-center text-white shadow-2xl relative overflow-hidden" data-aos="zoom-in">
                <!-- Decoration -->
                <div class="absolute top-0 right-0 w-[30rem] h-[30rem] bg-white/10 rounded-full blur-3xl translate-x-1/2 -translate-y-1/2"></div>
                
                <h2 class="text-4xl lg:text-5xl font-extrabold mb-6 relative z-10">Punya Ide Startup atau Aplikasi?</h2>
                <p class="text-xl text-emerald-100 mb-10 max-w-2xl mx-auto relative z-10">
                    Wujudkan ide brilian Anda menjadi aplikasi nyata. Diskusikan dengan tim expert kami hari ini.
                </p>
                <div class="relative z-10">
                    <a href="#contact" class="inline-block px-10 py-5 bg-white text-emerald-600 font-bold rounded-2xl hover:shadow-2xl hover:scale-105 transition-all duration-300">
                        Diskusikan Ide Anda Sekarang
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
