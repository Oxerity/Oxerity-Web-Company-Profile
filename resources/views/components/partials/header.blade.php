<!-- Header with Glassmorphism -->
<header
    class="fixed top-0 left-0 right-0 z-50 backdrop-blur-xl bg-white/95 dark:bg-gray-900/90 border-b border-gray-100 dark:border-gray-800 shadow-sm transition-all duration-300"
    id="navbar" x-data="{ mobileMenuOpen: false }">

    <nav class="container mx-auto px-4 py-4 flex justify-between items-center">
        <!-- Logo -->
        <a href="{{ route('home') }}"
            class="text-2xl font-bold bg-gradient-to-r from-sky-500 to-green-500 bg-clip-text text-transparent flex items-center space-x-2 flex-shrink-0">
            <img src="{{ asset('/images/oxerity_logo.png') }}" alt="Oxerity Logo" class="h-8 w-auto">
            <span class="hidden lg:inline">Oxerity Corp</span>
        </a>

        <!-- Desktop Menu -->
        <div class="hidden lg:flex items-center space-x-1 lg:space-x-2">
            <!-- Home -->
            <a href="{{ route('home') }}" class="px-3 py-2 text-sm font-semibold transition-colors hover:text-sky-500 dark:hover:text-sky-400">Home</a>

            <!-- Dropdown: Layanan -->
            <div class="relative group" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                <button class="px-3 py-2 text-sm font-semibold flex items-center space-x-1 hover:text-sky-500 transition-colors">
                    <span>Layanan</span>
                    <i class="ri-arrow-down-s-line transition-transform duration-200" :class="open ? 'rotate-180' : ''"></i>
                </button>
                <div x-show="open" 
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 translate-y-2"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    class="absolute top-full left-0 w-56 bg-white dark:bg-gray-800 shadow-2xl rounded-xl border border-gray-100 dark:border-gray-700 p-2">
                    <a href="{{ route('services.web-umkm') }}" class="flex items-center space-x-3 p-3 hover:bg-sky-50 dark:hover:bg-gray-700 rounded-lg transition-all group/item">
                        <i class="ri-window-line text-sky-500 text-lg"></i>
                        <div>
                            <p class="text-xs font-bold">Web UMKM</p>
                            <p class="text-[10px] text-gray-500">Website profil profesional</p>
                        </div>
                    </a>
                    <a href="{{ route('services.e-commerce') }}" class="flex items-center space-x-3 p-3 hover:bg-purple-50 dark:hover:bg-gray-700 rounded-lg transition-all group/item">
                        <i class="ri-shopping-bag-3-line text-purple-500 text-lg"></i>
                        <div>
                            <p class="text-xs font-bold">E-Commerce</p>
                            <p class="text-[10px] text-gray-500">Toko online lengkap</p>
                        </div>
                    </a>
                    <a href="{{ route('services.mobile-apps') }}" class="flex items-center space-x-3 p-3 hover:bg-emerald-50 dark:hover:bg-gray-700 rounded-lg transition-all group/item">
                        <i class="ri-smartphone-line text-emerald-500 text-lg"></i>
                        <div>
                            <p class="text-xs font-bold">Mobile Apps</p>
                            <p class="text-[10px] text-gray-500">Aplikasi Android & iOS</p>
                        </div>
                    </a>
                    <a href="{{ route('services.seo-sem') }}" class="flex items-center space-x-3 p-3 hover:bg-amber-50 dark:hover:bg-gray-700 rounded-lg transition-all group/item">
                        <i class="ri-search-eye-line text-amber-500 text-lg"></i>
                        <div>
                            <p class="text-xs font-bold">SEO & SEM</p>
                            <p class="text-[10px] text-gray-500">Optimasi mesin pencari</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Dropdown: Portfolio -->
            <div class="relative group" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                <button class="px-3 py-2 text-sm font-semibold flex items-center space-x-1 hover:text-sky-500 transition-colors">
                    <span>Portfolio</span>
                    <i class="ri-arrow-down-s-line transition-transform duration-200" :class="open ? 'rotate-180' : ''"></i>
                </button>
                <div x-show="open" 
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 translate-y-2"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    class="absolute top-full left-0 w-64 bg-white dark:bg-gray-800 shadow-2xl rounded-xl border border-gray-100 dark:border-gray-700 p-3 grid grid-cols-1 gap-2">
                    <a href="{{ route('portfolio.culinary') }}" class="block p-2 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-lg">
                        <span class="text-xs font-bold block text-sky-600">Culinary & F&B</span>
                        <span class="text-[10px] text-gray-500">Restoran, Cafe, Catering</span>
                    </a>
                    <a href="{{ route('portfolio.fashion') }}" class="block p-2 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-lg">
                        <span class="text-xs font-bold block text-purple-600">Fashion & Retail</span>
                        <span class="text-[10px] text-gray-500">Butik, Brand Lokal</span>
                    </a>
                    <a href="{{ route('portfolio.corporate') }}" class="block p-2 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-lg">
                        <span class="text-xs font-bold block text-emerald-600">Corporate & B2B</span>
                        <span class="text-[10px] text-gray-500">Company Profile</span>
                    </a>
                </div>
            </div>

            <!-- Pricing -->
            <a href="{{ route('pricing.index') }}" class="px-3 py-2 text-sm font-semibold transition-colors hover:text-sky-500 dark:hover:text-sky-400">Harga</a>

            <!-- Dropdown: Tentang -->
            <div class="relative group" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                <button class="px-3 py-2 text-sm font-semibold flex items-center space-x-1 hover:text-sky-500 transition-colors">
                    <span>Tentang</span>
                    <i class="ri-arrow-down-s-line transition-transform duration-200" :class="open ? 'rotate-180' : ''"></i>
                </button>
                <div x-show="open" class="absolute top-full left-0 w-48 bg-white dark:bg-gray-800 shadow-2xl rounded-xl border border-gray-100 dark:border-gray-700 p-2">
                    <a href="{{ route('about.visi-misi') }}" class="block px-4 py-2 text-xs font-medium hover:bg-sky-50 dark:hover:bg-gray-700 rounded-lg">Visi & Misi</a>
                    <a href="{{ route('about.tim-kami') }}" class="block px-4 py-2 text-xs font-medium hover:bg-sky-50 dark:hover:bg-gray-700 rounded-lg">Tim Kami</a>
                    <a href="{{ route('about.karir') }}" class="block px-4 py-2 text-xs font-medium hover:bg-sky-50 dark:hover:bg-gray-700 rounded-lg">Karir</a>
                </div>
            </div>

            <!-- Dropdown: Edukasi -->
            <div class="relative group" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                <button class="px-3 py-2 text-sm font-semibold flex items-center space-x-1 hover:text-sky-500 transition-colors">
                    <span>Edukasi</span>
                    <i class="ri-arrow-down-s-line transition-transform duration-200" :class="open ? 'rotate-180' : ''"></i>
                </button>
                <div x-show="open" class="absolute top-full left-0 w-52 bg-white dark:bg-gray-800 shadow-2xl rounded-xl border border-gray-100 dark:border-gray-700 p-2">
                    <a href="{{ route('education.blog') }}" class="block px-4 py-2 text-xs font-medium hover:bg-sky-50 dark:hover:bg-gray-700 rounded-lg">Blog & Artikel</a>
                    <a href="{{ route('education.webinar') }}" class="block px-4 py-2 text-xs font-medium hover:bg-sky-50 dark:hover:bg-gray-700 rounded-lg">Webinar UMKM</a>
                    <a href="{{ route('education.ebook') }}" class="block px-4 py-2 text-xs font-medium hover:bg-sky-50 dark:hover:bg-gray-700 rounded-lg">E-Book Gratis</a>
                </div>
            </div>

            <!-- Dropdown: Bantuan -->
            <div class="relative group" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                <button class="px-3 py-2 text-sm font-semibold flex items-center space-x-1 hover:text-sky-500 transition-colors">
                    <span>Bantuan</span>
                    <i class="ri-arrow-down-s-line transition-transform duration-200" :class="open ? 'rotate-180' : ''"></i>
                </button>
                <div x-show="open" class="absolute top-full left-0 w-52 bg-white dark:bg-gray-800 shadow-2xl rounded-xl border border-gray-100 dark:border-gray-700 p-2">
                    <a href="{{ route('support.help-center') }}" class="block px-4 py-2 text-xs font-medium hover:bg-sky-50 dark:hover:bg-gray-700 rounded-lg">Pusat Bantuan</a>
                    <a href="{{ route('support.faq') }}" class="block px-4 py-2 text-xs font-medium hover:bg-sky-50 dark:hover:bg-gray-700 rounded-lg">FAQ</a>
                    <a href="{{ route('support.terms') }}" class="block px-4 py-2 text-xs font-medium hover:bg-sky-50 dark:hover:bg-gray-700 rounded-lg">Syarat & Ketentuan</a>
                </div>
            </div>

            <!-- Contact -->
            <a href="{{ route('contact.index') }}" class="px-2 lg:px-3 py-2 text-sm font-semibold transition-colors hover:text-sky-500 dark:hover:text-sky-400">Kontak</a>
        </div>

        <!-- Right Side Actions -->
        <div class="flex items-center space-x-3">
            <button id="theme-toggle"
                class="p-2 rounded-xl bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none transition-all duration-300 hover:scale-110 border border-gray-200 dark:border-gray-700">
                <i id="theme-toggle-dark-icon" class="ri-moon-fill hidden text-lg text-gray-700 dark:text-gray-300"></i>
                <i id="theme-toggle-light-icon" class="ri-sun-fill hidden text-lg text-gray-700 dark:text-gray-300"></i>
            </button>
            <a href="{{ route('contact.index') }}" class="hidden sm:inline-flex items-center px-5 py-2.5 text-sm font-bold text-white bg-gradient-to-r from-sky-500 to-indigo-600 rounded-xl hover:shadow-lg hover:shadow-sky-500/30 transition-all hover:-translate-y-0.5">
                Mulai Project
            </a>
            <button class="lg:hidden p-2 rounded-xl bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700" @click="mobileMenuOpen = !mobileMenuOpen">
                <i :class="mobileMenuOpen ? 'ri-close-line' : 'ri-menu-4-line'" class="text-2xl text-gray-700 dark:text-gray-300"></i>
            </button>
        </div>
    </nav>

    <!-- Mobile Menu (Accordion Style) -->
    <div x-show="mobileMenuOpen" 
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 -translate-y-4"
        x-transition:enter-end="opacity-100 translate-y-0"
        class="lg:hidden bg-white dark:bg-gray-900 border-t border-gray-100 dark:border-gray-800 max-h-[85vh] overflow-y-auto shadow-2xl">
        <div class="p-6 space-y-3">
            <a href="{{ route('home') }}" class="block p-4 text-base font-black text-gray-800 dark:text-white hover:bg-gray-50 dark:hover:bg-gray-800 rounded-2xl transition-all">Home</a>
            
            <!-- Layanan Mobile -->
            <div x-data="{ open: false }">
                <button @click="open = !open" class="w-full flex items-center justify-between p-4 text-base font-black text-gray-800 dark:text-white hover:bg-gray-50 dark:hover:bg-gray-800 rounded-2xl transition-all">
                    <span>Layanan</span>
                    <i class="ri-arrow-down-s-line transition-transform duration-300" :class="open ? 'rotate-180 text-blue-500' : ''"></i>
                </button>
                <div x-show="open" x-transition class="pl-6 space-y-2 mt-2">
                    <a href="{{ route('services.web-umkm') }}" class="block p-3 text-sm font-bold text-gray-500 hover:text-blue-500 transition-all border-l-2 border-gray-100 dark:border-gray-800 pl-6">Web UMKM</a>
                    <a href="{{ route('services.e-commerce') }}" class="block p-3 text-sm font-bold text-gray-500 hover:text-blue-500 transition-all border-l-2 border-gray-100 dark:border-gray-800 pl-6">E-Commerce</a>
                    <a href="{{ route('services.mobile-apps') }}" class="block p-3 text-sm font-bold text-gray-500 hover:text-blue-500 transition-all border-l-2 border-gray-100 dark:border-gray-800 pl-6">Mobile Apps</a>
                    <a href="{{ route('services.seo-sem') }}" class="block p-3 text-sm font-bold text-gray-500 hover:text-blue-500 transition-all border-l-2 border-gray-100 dark:border-gray-800 pl-6">SEO & SEM</a>
                </div>
            </div>

            <!-- Portfolio Mobile -->
            <div x-data="{ open: false }">
                <button @click="open = !open" class="w-full flex items-center justify-between p-4 text-base font-black text-gray-800 dark:text-white hover:bg-gray-50 dark:hover:bg-gray-800 rounded-2xl transition-all">
                    <span>Portfolio</span>
                    <i class="ri-arrow-down-s-line transition-transform duration-300" :class="open ? 'rotate-180 text-emerald-500' : ''"></i>
                </button>
                <div x-show="open" x-transition class="pl-6 space-y-2 mt-2">
                    <a href="{{ route('portfolio.culinary') }}" class="block p-3 text-sm font-bold text-gray-500 hover:text-emerald-500 transition-all border-l-2 border-gray-100 dark:border-gray-800 pl-6">Culinary & F&B</a>
                    <a href="{{ route('portfolio.fashion') }}" class="block p-3 text-sm font-bold text-gray-500 hover:text-emerald-500 transition-all border-l-2 border-gray-100 dark:border-gray-800 pl-6">Fashion & Retail</a>
                    <a href="{{ route('portfolio.corporate') }}" class="block p-3 text-sm font-bold text-gray-500 hover:text-emerald-500 transition-all border-l-2 border-gray-100 dark:border-gray-800 pl-6">Corporate & B2B</a>
                </div>
            </div>

            <a href="{{ route('pricing.index') }}" class="block p-4 text-base font-black text-gray-800 dark:text-white hover:bg-gray-50 dark:hover:bg-gray-800 rounded-2xl transition-all">Harga</a>

            <!-- Tentang Mobile -->
            <div x-data="{ open: false }">
                <button @click="open = !open" class="w-full flex items-center justify-between p-4 text-base font-black text-gray-800 dark:text-white hover:bg-gray-50 dark:hover:bg-gray-800 rounded-2xl transition-all">
                    <span>Tentang</span>
                    <i class="ri-arrow-down-s-line transition-transform duration-300" :class="open ? 'rotate-180 text-purple-500' : ''"></i>
                </button>
                <div x-show="open" x-transition class="pl-6 space-y-2 mt-2">
                    <a href="{{ route('about.visi-misi') }}" class="block p-3 text-sm font-bold text-gray-500 hover:text-purple-500 transition-all border-l-2 border-gray-100 dark:border-gray-800 pl-6">Visi & Misi</a>
                    <a href="{{ route('about.tim-kami') }}" class="block p-3 text-sm font-bold text-gray-500 hover:text-purple-500 transition-all border-l-2 border-gray-100 dark:border-gray-800 pl-6">Tim Kami</a>
                    <a href="{{ route('about.karir') }}" class="block p-3 text-sm font-bold text-gray-500 hover:text-purple-500 transition-all border-l-2 border-gray-100 dark:border-gray-800 pl-6">Karir</a>
                </div>
            </div>

            <!-- Edukasi Mobile -->
            <div x-data="{ open: false }">
                <button @click="open = !open" class="w-full flex items-center justify-between p-4 text-base font-black text-gray-800 dark:text-white hover:bg-gray-50 dark:hover:bg-gray-800 rounded-2xl transition-all">
                    <span>Edukasi</span>
                    <i class="ri-arrow-down-s-line transition-transform duration-300" :class="open ? 'rotate-180 text-amber-500' : ''"></i>
                </button>
                <div x-show="open" x-transition class="pl-6 space-y-2 mt-2">
                    <a href="{{ route('education.blog') }}" class="block p-3 text-sm font-bold text-gray-500 hover:text-amber-500 transition-all border-l-2 border-gray-100 dark:border-gray-800 pl-6">Blog & Artikel</a>
                    <a href="{{ route('education.webinar') }}" class="block p-3 text-sm font-bold text-gray-500 hover:text-amber-500 transition-all border-l-2 border-gray-100 dark:border-gray-800 pl-6">Webinar UMKM</a>
                    <a href="{{ route('education.ebook') }}" class="block p-3 text-sm font-bold text-gray-500 hover:text-amber-500 transition-all border-l-2 border-gray-100 dark:border-gray-800 pl-6">E-Book Gratis</a>
                </div>
            </div>

            <!-- Bantuan Mobile -->
            <div x-data="{ open: false }">
                <button @click="open = !open" class="w-full flex items-center justify-between p-4 text-base font-black text-gray-800 dark:text-white hover:bg-gray-50 dark:hover:bg-gray-800 rounded-2xl transition-all">
                    <span>Bantuan</span>
                    <i class="ri-arrow-down-s-line transition-transform duration-300" :class="open ? 'rotate-180 text-red-500' : ''"></i>
                </button>
                <div x-show="open" x-transition class="pl-6 space-y-2 mt-2">
                    <a href="{{ route('support.help-center') }}" class="block p-3 text-sm font-bold text-gray-500 hover:text-red-500 transition-all border-l-2 border-gray-100 dark:border-gray-800 pl-6">Pusat Bantuan</a>
                    <a href="{{ route('support.faq') }}" class="block p-3 text-sm font-bold text-gray-500 hover:text-red-500 transition-all border-l-2 border-gray-100 dark:border-gray-800 pl-6">FAQ</a>
                    <a href="{{ route('support.terms') }}" class="block p-3 text-sm font-bold text-gray-500 hover:text-red-500 transition-all border-l-2 border-gray-100 dark:border-gray-800 pl-6">Syarat & Ketentuan</a>
                </div>
            </div>

            <a href="{{ route('contact.index') }}" class="block p-4 text-base font-black text-gray-800 dark:text-white hover:bg-gray-50 dark:hover:bg-gray-800 rounded-2xl transition-all">Kontak</a>
            
            <div class="pt-6 border-t border-gray-100 dark:border-gray-800">
                <a href="{{ route('contact.index') }}" class="flex items-center justify-center w-full px-6 py-4 text-base font-black text-white bg-gradient-to-r from-sky-500 to-indigo-600 rounded-2xl shadow-xl shadow-sky-500/20 active:scale-95 transition-all">
                    Mulai Project Sekarang
                </a>
            </div>
        </div>
    </div>
</header>

@push('scripts')
    <script src="{{ asset('js/header.js') }}"></script>
@endpush