<x-layouts.app>
    <!-- Hero Section -->
    <section class="relative pt-32 pb-24 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-cyan-50 via-blue-50 to-indigo-50 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900">
            <div class="absolute top-0 -left-10 w-96 h-96 bg-cyan-400/20 rounded-full mix-blend-multiply filter blur-3xl animate-blob"></div>
            <div class="absolute top-20 -right-10 w-96 h-96 bg-indigo-400/20 rounded-full mix-blend-multiply filter blur-3xl animate-blob animation-delay-2000"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10 text-center">
            <div class="max-w-4xl mx-auto" data-aos="fade-up">
                <div class="inline-block mb-6 px-6 py-2 bg-white/60 dark:bg-gray-800/60 backdrop-blur-xl rounded-full border border-cyan-200 dark:border-cyan-900/50 shadow-sm">
                    <span class="text-xs font-black bg-gradient-to-r from-cyan-600 to-indigo-600 dark:from-cyan-400 dark:to-indigo-400 bg-clip-text text-transparent uppercase tracking-[0.2em]">
                        Get In Touch
                    </span>
                </div>
                <h1 class="text-6xl md:text-8xl font-black mb-8 leading-[1.1] tracking-tighter">
                    <span class="bg-gradient-to-r from-cyan-600 via-blue-600 to-indigo-600 dark:from-cyan-400 dark:via-blue-400 dark:to-indigo-400 bg-clip-text text-transparent">
                        Hubungi Kami
                    </span>
                </h1>
                <p class="text-xl text-gray-600 dark:text-gray-400 leading-relaxed max-w-2xl mx-auto font-medium">
                    Punya ide besar atau butuh solusi digital? Mari berdiskusi dan wujudkan mimpi bisnis Anda bersama kami.
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Grid -->
    <section class="py-32 bg-white dark:bg-gray-900">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-20">
                <!-- Contact Info -->
                <div class="lg:col-span-5 space-y-16" data-aos="fade-right">
                    <div>
                        <h2 class="text-4xl font-black mb-10 tracking-tight">Mari Berkolaborasi.</h2>
                        <p class="text-lg text-gray-500 dark:text-gray-400 leading-relaxed">
                            Tim kami siap mendengarkan kebutuhan unik bisnis Anda dan memberikan solusi teknologi yang tepat sasaran.
                        </p>
                    </div>

                    <div class="space-y-10">
                        <div class="flex items-start gap-8 group">
                            <div class="w-16 h-16 rounded-3xl bg-cyan-50 dark:bg-gray-800 flex items-center justify-center text-cyan-600 dark:text-cyan-400 group-hover:bg-cyan-500 group-hover:text-white transition-all duration-500 shadow-sm">
                                <i class="ri-map-pin-2-fill text-3xl"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-black mb-2">Office Headquarters</h4>
                                <p class="text-gray-500 dark:text-gray-400 font-medium leading-relaxed">Jl. Kaliurang KM 5, No. 123, Sleman,<br>DI Yogyakarta, 55281</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-8 group">
                            <div class="w-16 h-16 rounded-3xl bg-blue-50 dark:bg-gray-800 flex items-center justify-center text-blue-600 dark:text-blue-400 group-hover:bg-blue-500 group-hover:text-white transition-all duration-500 shadow-sm">
                                <i class="ri-mail-fill text-3xl"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-black mb-2">Email Inquiries</h4>
                                <p class="text-gray-500 dark:text-gray-400 font-medium leading-relaxed">hello@oxerity.com<br>support@oxerity.com</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-8 group">
                            <div class="w-16 h-16 rounded-3xl bg-indigo-50 dark:bg-gray-800 flex items-center justify-center text-indigo-600 dark:text-indigo-400 group-hover:bg-indigo-500 group-hover:text-white transition-all duration-500 shadow-sm">
                                <i class="ri-whatsapp-fill text-3xl"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-black mb-2">Fast Response</h4>
                                <p class="text-gray-500 dark:text-gray-400 font-medium leading-relaxed">+62 812-3456-7890<br>09:00 AM - 05:00 PM (GMT+7)</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Form -->
                <div class="lg:col-span-7" data-aos="fade-left">
                    <div class="p-10 md:p-16 bg-gray-50 dark:bg-gray-800/50 rounded-[3rem] border border-gray-100 dark:border-gray-700 shadow-2xl">
                        <form action="#" class="space-y-8">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                <div class="space-y-3">
                                    <label class="text-xs font-black uppercase tracking-widest text-gray-400 ml-2">Full Name</label>
                                    <input type="text" placeholder="Arya Pratama" class="w-full px-6 py-5 bg-white dark:bg-gray-900 border border-gray-100 dark:border-gray-700 rounded-2xl focus:outline-none focus:ring-4 focus:ring-cyan-500/10 focus:border-cyan-500 transition-all text-gray-900 dark:text-white font-bold">
                                </div>
                                <div class="space-y-3">
                                    <label class="text-xs font-black uppercase tracking-widest text-gray-400 ml-2">Email Address</label>
                                    <input type="email" placeholder="arya@company.com" class="w-full px-6 py-5 bg-white dark:bg-gray-900 border border-gray-100 dark:border-gray-700 rounded-2xl focus:outline-none focus:ring-4 focus:ring-cyan-500/10 focus:border-cyan-500 transition-all text-gray-900 dark:text-white font-bold">
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                <div class="space-y-3">
                                    <label class="text-xs font-black uppercase tracking-widest text-gray-400 ml-2">Layanan</label>
                                    <select class="w-full px-6 py-5 bg-white dark:bg-gray-900 border border-gray-100 dark:border-gray-700 rounded-2xl focus:outline-none focus:ring-4 focus:ring-cyan-500/10 focus:border-cyan-500 transition-all text-gray-900 dark:text-white font-bold appearance-none">
                                        <option>Web Development</option>
                                        <option>E-Commerce Solution</option>
                                        <option>App Development</option>
                                        <option>SEO Strategy</option>
                                    </select>
                                </div>
                                <div class="space-y-3">
                                    <label class="text-xs font-black uppercase tracking-widest text-gray-400 ml-2">Budget Range</label>
                                    <select class="w-full px-6 py-5 bg-white dark:bg-gray-900 border border-gray-100 dark:border-gray-700 rounded-2xl focus:outline-none focus:ring-4 focus:ring-cyan-500/10 focus:border-cyan-500 transition-all text-gray-900 dark:text-white font-bold appearance-none">
                                        <option>< 5jt</option>
                                        <option>5jt - 15jt</option>
                                        <option>15jt - 50jt</option>
                                        <option>50jt+</option>
                                    </select>
                                </div>
                            </div>
                            <div class="space-y-3">
                                <label class="text-xs font-black uppercase tracking-widest text-gray-400 ml-2">Project Message</label>
                                <textarea rows="5" placeholder="Ceritakan detail project Anda..." class="w-full px-6 py-5 bg-white dark:bg-gray-900 border border-gray-100 dark:border-gray-700 rounded-2xl focus:outline-none focus:ring-4 focus:ring-cyan-500/10 focus:border-cyan-500 transition-all text-gray-900 dark:text-white font-bold"></textarea>
                            </div>
                            <button type="submit" class="w-full py-5 bg-gray-900 dark:bg-white text-white dark:text-gray-900 font-black rounded-2xl hover:scale-105 transition-all shadow-2xl flex items-center justify-center gap-3">
                                Send Message <i class="ri-send-plane-fill text-xl"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map -->
    <section class="py-24 bg-gray-50 dark:bg-gray-800/50">
        <div class="container mx-auto px-6">
            <div class="relative overflow-hidden rounded-[4rem] shadow-2xl h-[600px] border-[12px] border-white dark:border-gray-900" data-aos="zoom-in">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126514.80931238474!2d110.31681285!3d-7.7272832!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59074092497f%3A0x6331a98074d9e798!2sSleman%2C%20Kabupaten%20Sleman%2C%20Daerah%20Istimewa%20Yogyakarta!5e0!3m2!1sid!2sid!4v1714370000000!5m2!1sid!2sid" 
                class="w-full h-full border-0" allowfullscreen="" loading="lazy"></iframe>

                <div class="absolute inset-0 pointer-events-none bg-gradient-to-t from-gray-900/20 to-transparent"></div>
            </div>
        </div>
    </section>
</x-layouts.app>
