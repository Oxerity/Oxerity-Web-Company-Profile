<!-- Footer -->
<footer class="bg-white dark:bg-[#050505] text-gray-600 dark:text-gray-400 pt-24 pb-12 overflow-hidden relative border-t border-gray-100 dark:border-white/5" x-data="{ activeModal: null }">
    <!-- Decorative Background -->
    <div class="absolute top-0 left-1/4 w-[500px] h-[500px] bg-blue-600/5 rounded-full blur-[120px] pointer-events-none"></div>
    <div class="absolute bottom-0 right-1/4 w-[500px] h-[500px] bg-emerald-600/5 rounded-full blur-[120px] pointer-events-none"></div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-16 mb-20">
            <!-- Column 1: Brand Info -->
            <div class="space-y-8">
                <a href="{{ route('home') }}" class="inline-flex items-center gap-3 group">
                    <img src="{{ asset('images/oxerity_logo.png') }}" alt="Oxerity" class="w-12 h-12 object-contain group-hover:scale-110 transition-transform duration-500">
                    <span class="text-2xl font-black text-gray-900 dark:text-white tracking-tighter">Oxerity<span class="text-blue-600 dark:text-blue-500">Corp</span></span>
                </a>
                <p class="text-base leading-relaxed max-w-xs">
                    Partner strategis transformasi digital UMKM Indonesia. Menghadirkan solusi teknologi yang berdampak nyata dan berkelanjutan.
                </p>
                <div class="flex items-center gap-4">
                    <a href="#" class="w-10 h-10 rounded-full bg-gray-100 dark:bg-white/5 border border-gray-200 dark:border-white/10 flex items-center justify-center text-gray-600 dark:text-white hover:bg-blue-600 hover:text-white transition-all duration-300">
                        <i class="ri-facebook-fill text-lg"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-gray-100 dark:bg-white/5 border border-gray-200 dark:border-white/10 flex items-center justify-center text-gray-600 dark:text-white hover:bg-gradient-to-tr hover:from-purple-500 hover:to-pink-500 hover:text-white transition-all duration-300">
                        <i class="ri-instagram-line text-lg"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-gray-100 dark:bg-white/5 border border-gray-200 dark:border-white/10 flex items-center justify-center text-gray-600 dark:text-white hover:bg-black hover:text-white transition-all duration-300">
                        <i class="ri-twitter-x-fill text-lg"></i>
                    </a>
                </div>
            </div>

            <!-- Column 2: Layanan -->
            <div>
                <h4 class="text-gray-900 dark:text-white font-black text-sm uppercase tracking-[0.2em] mb-8">Layanan</h4>
                <ul class="space-y-4 text-sm font-medium">
                    <li><a href="{{ route('services.web-umkm') }}" class="hover:text-blue-600 dark:hover:text-blue-500 transition-colors">Web Development</a></li>
                    <li><a href="{{ route('services.e-commerce') }}" class="hover:text-blue-600 dark:hover:text-blue-500 transition-colors">E-Commerce</a></li>
                    <li><a href="{{ route('services.mobile-apps') }}" class="hover:text-blue-600 dark:hover:text-blue-500 transition-colors">Mobile Apps</a></li>
                    <li><a href="{{ route('services.seo-sem') }}" class="hover:text-blue-600 dark:hover:text-blue-500 transition-colors">SEO & Ads Strategy</a></li>
                </ul>
            </div>

            <!-- Column 3: Navigasi -->
            <div>
                <h4 class="text-gray-900 dark:text-white font-black text-sm uppercase tracking-[0.2em] mb-8">Navigasi</h4>
                <ul class="space-y-4 text-sm font-medium">
                    <li><a href="{{ route('about.visi-misi') }}" class="hover:text-emerald-600 dark:hover:text-emerald-500 transition-colors">Tentang Kami</a></li>
                    <li><a href="{{ route('about.karir') }}" class="hover:text-emerald-600 dark:hover:text-emerald-500 transition-colors">Karir & Lowongan</a></li>
                    <li><a href="{{ route('portfolio.culinary') }}" class="hover:text-emerald-600 dark:hover:text-emerald-500 transition-colors">Portfolio</a></li>
                    <li><a href="{{ route('pricing.index') }}" class="hover:text-emerald-600 dark:hover:text-emerald-500 transition-colors">Paket Harga</a></li>
                    <li><a href="{{ route('contact.index') }}" class="hover:text-emerald-600 dark:hover:text-emerald-500 transition-colors">Hubungi Kami</a></li>
                </ul>
            </div>

            <!-- Column 4: Maps -->
            <div>
                <h4 class="text-gray-900 dark:text-white font-black text-sm uppercase tracking-[0.2em] mb-8">Lokasi Kantor</h4>
                <div class="relative group rounded-3xl overflow-hidden border border-gray-100 dark:border-white/10 bg-gray-50 dark:bg-white/5 p-2 transition-all hover:border-blue-500/50">
                    <div class="h-32 w-full rounded-2xl overflow-hidden relative">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126514.80931238474!2d110.31681285!3d-7.7272832!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59074092497f%3A0x6331a98074d9e798!2sSleman%2C%20Kabupaten%20Sleman%2C%20Daerah%20Istimewa%20Yogyakarta!5e0!3m2!1sid!2sid!4v1714370000000!5m2!1sid!2sid" 
                            class="w-full h-full border-0" 
                            allowfullscreen="" 
                            loading="lazy">
                        </iframe>
                    </div>
                    <div class="mt-4 px-2 pb-2 text-sm">
                        <p class="text-xs leading-relaxed text-gray-500 mb-2">
                            Jl. Kaliurang KM 5, No. 123, Sleman, DI Yogyakarta, 55281
                        </p>
                        <a href="https://goo.gl/maps/example" target="_blank" class="text-[10px] font-black text-blue-600 dark:text-blue-500 uppercase tracking-widest inline-block hover:underline">Google Maps <i class="ri-external-link-line"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Divider -->
        <div class="h-px w-full bg-gradient-to-r from-transparent via-gray-200 dark:via-white/10 to-transparent mb-12"></div>

        <!-- Bottom Footer -->
        <div class="flex flex-col md:flex-row justify-between items-center gap-8">
            <div class="text-[13px]">
                <p>&copy; 2026 <span class="text-gray-900 dark:text-white font-bold tracking-tight">Oxerity Corp.</span> All rights reserved.</p>
            </div>
            <div class="flex flex-wrap justify-center gap-x-8 gap-y-4 text-[11px] font-black uppercase tracking-[0.2em] text-gray-400 dark:text-gray-500">
                <a href="#" @click.prevent="activeModal = 'privacy'" class="hover:text-gray-900 dark:hover:text-white transition-colors cursor-pointer">Privacy Policy</a>
                <a href="#" @click.prevent="activeModal = 'terms'" class="hover:text-gray-900 dark:hover:text-white transition-colors cursor-pointer">Terms of Service</a>
                <a href="#" @click.prevent="activeModal = 'cookie'" class="hover:text-gray-900 dark:hover:text-white transition-colors cursor-pointer">Cookie Policy</a>
            </div>
        </div>
    </div>

    <!-- Modals (Simplified Logic to Prevent Flickering) -->
    <template x-teleport="body">
        <div x-show="activeModal !== null" 
             class="fixed inset-0 z-[10000] flex items-center justify-center p-6 bg-black/60 backdrop-blur-md" 
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-300"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             x-cloak>
            
            <div @click.away="activeModal = null" 
                 class="bg-white dark:bg-[#0f0f0f] border border-gray-100 dark:border-white/10 rounded-[3rem] w-full max-w-3xl max-h-[85vh] overflow-hidden shadow-2xl flex flex-col"
                 x-transition:enter="transition ease-out duration-500"
                 x-transition:enter-start="opacity-0 scale-95 translate-y-8"
                 x-transition:enter-end="opacity-100 scale-100 translate-y-0">
                
                <!-- Modal Header -->
                <div class="px-10 py-6 border-b border-gray-100 dark:border-white/5 flex justify-between items-center bg-gray-50 dark:bg-white/5">
                    <h3 class="text-xl font-black text-gray-900 dark:text-white uppercase tracking-tighter">
                        <template x-if="activeModal === 'privacy'"><span>Privacy Policy</span></template>
                        <template x-if="activeModal === 'terms'"><span>Terms of Service</span></template>
                        <template x-if="activeModal === 'cookie'"><span>Cookie Policy</span></template>
                    </h3>
                    <button @click="activeModal = null" class="w-10 h-10 rounded-full bg-gray-200 dark:bg-gray-800 flex items-center justify-center text-gray-900 dark:text-white hover:bg-red-500 hover:text-white transition-all">
                        <i class="ri-close-line text-2xl"></i>
                    </button>
                </div>

                <!-- Modal Body -->
                <div class="p-10 overflow-y-auto text-gray-600 dark:text-gray-400 leading-relaxed text-base space-y-6">
                    <div x-show="activeModal === 'privacy'" x-transition>
                        <p>Oxerity Corp berkomitmen penuh untuk menjaga kerahasiaan data pribadi Anda. Seluruh informasi yang kami kumpulkan hanya akan digunakan untuk meningkatkan kualitas layanan kami kepada Anda.</p>
                        <p class="mt-4">Kami tidak akan pernah menjual atau membagikan data Anda kepada pihak ketiga tanpa persetujuan eksplisit dari Anda.</p>
                    </div>
                    <div x-show="activeModal === 'terms'" x-transition>
                        <p>Dengan menggunakan layanan Oxerity Corp, Anda menyetujui seluruh ketentuan yang berlaku mengenai proses pengerjaan, pembayaran, dan hak kekayaan intelektual sesuai dengan kontrak yang disepakati.</p>
                        <p class="mt-4">Kami berhak untuk mengubah syarat ini sewaktu-waktu dengan memberikan pemberitahuan melalui website resmi kami.</p>
                    </div>
                    <div x-show="activeModal === 'cookie'" x-transition>
                        <p>Website kami menggunakan cookie untuk mengoptimalkan pengalaman navigasi Anda. Cookie membantu kami mengenali preferensi Anda dan mempersonalisasi konten yang kami sajikan.</p>
                        <p class="mt-4">Anda dapat menonaktifkan cookie melalui pengaturan browser Anda, namun beberapa fitur website mungkin tidak akan berfungsi secara maksimal.</p>
                    </div>
                </div>

                <!-- Modal Footer -->
                <div class="px-10 py-6 border-t border-gray-100 dark:border-white/5 bg-gray-50 dark:bg-white/5 flex justify-end">
                    <button @click="activeModal = null" class="px-8 py-3 bg-gray-900 dark:bg-white text-white dark:text-black rounded-xl font-black text-sm uppercase hover:scale-105 transition-transform">Tutup</button>
                </div>
            </div>
        </div>
    </template>
</footer>