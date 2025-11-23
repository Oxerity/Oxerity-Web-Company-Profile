<!-- Header with Glassmorphism -->
<header
    class="fixed top-0 left-0 right-0 z-50 backdrop-blur-md bg-white/80 dark:bg-gray-900/80 border-b border-gray-200/20 dark:border-gray-700/20 transition-all duration-300"
    id="navbar">
    <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
        <a href="#"
            class="text-2xl font-bold bg-gradient-to-r from-sky-500 to-green-500 bg-clip-text text-transparent flex items-center space-x-2">
            <img src="{{ asset('/images/oxerity_logo.png') }}" alt="Oxerity Logo" class="h-8 w-auto">
            <span>Oxerity Corp</span>
        </a>
        <div class="hidden md:flex items-center space-x-8">
            <a href="#home"
                class="relative group font-medium transition-colors hover:text-sky-500 dark:hover:text-sky-400">
                Home
                <span
                    class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gradient-to-r from-sky-500 to-green-500 transition-all group-hover:w-full"></span>
            </a>
            <a href="#services"
                class="relative group font-medium transition-colors hover:text-sky-500 dark:hover:text-sky-400">
                Services
                <span
                    class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gradient-to-r from-sky-500 to-green-500 transition-all group-hover:w-full"></span>
            </a>
            <a href="#about"
                class="relative group font-medium transition-colors hover:text-sky-500 dark:hover:text-sky-400">
                About
                <span
                    class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gradient-to-r from-sky-500 to-green-500 transition-all group-hover:w-full"></span>
            </a>
            <a href="#contact"
                class="relative group font-medium transition-colors hover:text-sky-500 dark:hover:text-sky-400">
                Contact
                <span
                    class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gradient-to-r from-sky-500 to-green-500 transition-all group-hover:w-full"></span>
            </a>
        </div>
        <div class="flex items-center space-x-4">
            <button id="theme-toggle"
                class="p-2.5 rounded-full hover:bg-gray-100 dark:hover:bg-gray-800 focus:outline-none transition-all duration-300 hover:scale-110">
                <i id="theme-toggle-dark-icon" class="ri-moon-fill hidden text-xl text-gray-700 dark:text-gray-300"></i>
                <i id="theme-toggle-light-icon" class="ri-sun-fill hidden text-xl text-gray-700 dark:text-gray-300"></i>
            </button>
            <button class="md:hidden" id="mobile-menu-button">
                <i class="ri-menu-line text-2xl"></i>
            </button>
        </div>
    </nav>
    <!-- Mobile Menu -->
    <div class="hidden md:hidden backdrop-blur-md bg-white/90 dark:bg-gray-900/90" id="mobile-menu">
        <a href="#home"
            class="block py-3 px-6 text-sm font-medium hover:bg-sky-50 dark:hover:bg-gray-800 border-l-4 border-transparent hover:border-sky-500 transition-all">Home</a>
        <a href="#services"
            class="block py-3 px-6 text-sm font-medium hover:bg-sky-50 dark:hover:bg-gray-800 border-l-4 border-transparent hover:border-sky-500 transition-all">Services</a>
        <a href="#about"
            class="block py-3 px-6 text-sm font-medium hover:bg-sky-50 dark:hover:bg-gray-800 border-l-4 border-transparent hover:border-sky-500 transition-all">About</a>
        <a href="#contact"
            class="block py-3 px-6 text-sm font-medium hover:bg-sky-50 dark:hover:bg-gray-800 border-l-4 border-transparent hover:border-sky-500 transition-all">Contact</a>
    </div>
</header>

@push('scripts')
    <script src="{{ asset('js/header.js') }}"></script>
@endpush