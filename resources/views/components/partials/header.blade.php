<!-- Header with Glassmorphism -->
<header
    class="fixed top-0 left-0 right-0 z-50 backdrop-blur-md bg-white/80 dark:bg-gray-900/80 border-b border-gray-200/20 dark:border-gray-700/20 transition-all duration-300"
    id="navbar">
    <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
        <a href="#"
            class="text-2xl font-bold bg-gradient-to-r from-sky-500 to-green-500 bg-clip-text text-transparent flex items-center space-x-2">
            <svg class="w-8 h-8 text-sky-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z">
                </path>
            </svg>
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
                <svg id="theme-toggle-dark-icon" class="hidden h-5 w-5 text-gray-700 dark:text-gray-300"
                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                </svg>
                <svg id="theme-toggle-light-icon" class="hidden h-5 w-5 text-gray-700 dark:text-gray-300"
                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.121-3.536a1 1 0 010 1.414l-.707.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM10 16a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM3.05 4.54a1 1 0 010 1.414l-.707.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zm.001 10.912a1 1 0 01-1.414 0l-.707-.707a1 1 0 111.414-1.414l.707.707a1 1 0 010 1.414zM16.95 4.54a1 1 0 011.414 0l.707.707a1 1 0 11-1.414 1.414l-.707-.707a1 1 0 010-1.414z">
                    </path>
                </svg>
            </button>
            <button class="md:hidden" id="mobile-menu-button">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7">
                    </path>
                </svg>
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
<script>
    // Dark/Light mode toggle
    const themeToggleBtn = document.getElementById('theme-toggle');
    const themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
    const themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

    // Check for saved theme in localStorage and apply it
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
        themeToggleLightIcon.classList.remove('hidden');
    } else {
        document.documentElement.classList.remove('dark');
        themeToggleDarkIcon.classList.remove('hidden');
    }

    themeToggleBtn.addEventListener('click', function() {
        // toggle icons inside button
        themeToggleDarkIcon.classList.toggle('hidden');
        themeToggleLightIcon.classList.toggle('hidden');

        // if set via local storage previously
        if (localStorage.getItem('color-theme')) {
            if (localStorage.getItem('color-theme') === 'light') {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            } else {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            }
        // if NOT set via local storage previously
        } else {
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            } else {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            }
        }
    });

    // Mobile menu toggle
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    mobileMenuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });

    // Close mobile menu when clicking a link
    const mobileMenuLinks = mobileMenu.querySelectorAll('a');
    mobileMenuLinks.forEach(link => {
        link.addEventListener('click', () => {
            mobileMenu.classList.add('hidden');
        });
    });

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
</script>
@endpush