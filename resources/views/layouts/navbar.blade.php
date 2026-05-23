<nav id="main-navbar" class="sticky top-0 z-50 transition-all duration-500">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            
            <!-- Logo Section -->
            <div class="flex items-center">
                <a href="/" class="flex items-center font-bold text-2xl space-x-2 group">
                    ALTA
                    <!-- <div class="relative flex items-center">
                        <img src="/images/alta-logo.png" alt="Alta - Digital Agency Logo" class="h-12 w-auto md:h-14 lg:h-20">
                        <div class="absolute -bottom-1 left-0 w-full h-0.5 bg-[#61629F] transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></div>
                    </div> -->
                    <!-- <div class="w-1.5 h-1.5 bg-[#61629F] rounded-full animate-pulse"></div> -->
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden lg:flex items-center space-x-1">
                
                <!-- About with Dropdown -->
                <div class="relative group">
                    <a href="/about" class="relative px-4 py-2 text-[#61629F] font-medium text-sm transition-all duration-200 hover:text-[#61629F] group flex items-center gap-1">
                        About Us
                        <svg class="w-4 h-4 transition-transform duration-200 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                        <span class="absolute inset-x-4 -bottom-1 h-0.5 bg-white transform scale-x-0 transition-transform duration-300 group-hover:scale-x-100"></span>
                    </a>
                    
                    <div class="absolute top-full left-0 w-56 bg-white/95 backdrop-blur-sm shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 border border-gray-100">
                        <div class="py-2">
                            <a href="/about/team" class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#61629F]/10 hover:text-[#61629F] hover:border-l-2 hover:border-[#61629F] transition-all duration-200">Leadership Team</a>
                            <a href="/about/careers" class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#61629F]/10 hover:text-[#61629F] hover:border-l-2 hover:border-[#61629F] transition-all duration-200">Careers</a>
                            <a href="/about/partners" class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#61629F]/10 hover:text-[#61629F] hover:border-l-2 hover:border-[#61629F] transition-all duration-200">Partners</a>
                        </div>
                    </div>
                </div>
                
                <!-- Services with Mega Dropdown -->
                <div class="relative group">
                    <a href="/services" class="relative px-4 py-2 text-[#61629F] font-medium text-sm transition-all duration-200 hover:text-[#61629F] group flex items-center gap-1">
                        Services
                        <svg class="w-4 h-4 transition-transform duration-200 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                        <span class="absolute inset-x-4 -bottom-1 h-0.5 bg-white transform scale-x-0 transition-transform duration-300 group-hover:scale-x-100"></span>
                    </a>
                    
                    <div class="absolute top-full left-0 w-screen max-w-4xl bg-white/95 backdrop-blur-sm shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 border border-gray-100">
                        <div class="grid grid-cols-3 gap-6 p-6">
                            <div>
                                <h3 class="text-xs font-semibold text-[#61629F] uppercase tracking-wider mb-3">Web Development</h3>
                                <ul class="space-y-2">
                                    <li><a href="/services/ecommerce" class="block text-sm text-gray-600 hover:text-[#61629F] hover:border-l-2 hover:border-[#61629F] pl-2 transition-all duration-200">E-commerce Websites</a></li>
                                    <li><a href="/services/corporate" class="block text-sm text-gray-600 hover:text-[#61629F] hover:border-l-2 hover:border-[#61629F] pl-2 transition-all duration-200">Corporate Websites</a></li>
                                    <li><a href="/services/custom-web" class="block text-sm text-gray-600 hover:text-[#61629F] hover:border-l-2 hover:border-[#61629F] pl-2 transition-all duration-200">Custom Web Apps</a></li>
                                    <li><a href="/services/cms" class="block text-sm text-gray-600 hover:text-[#61629F] hover:border-l-2 hover:border-[#61629F] pl-2 transition-all duration-200">CMS Development</a></li>
                                </ul>
                            </div>
                            
                            <div>
                                <h3 class="text-xs font-semibold text-[#61629F] uppercase tracking-wider mb-3">Mobile Apps</h3>
                                <ul class="space-y-2">
                                    <li><a href="/services/ios" class="block text-sm text-gray-600 hover:text-[#61629F] hover:border-l-2 hover:border-[#61629F] pl-2 transition-all duration-200">iOS Development</a></li>
                                    <li><a href="/services/android" class="block text-sm text-gray-600 hover:text-[#61629F] hover:border-l-2 hover:border-[#61629F] pl-2 transition-all duration-200">Android Development</a></li>
                                    <li><a href="/services/cross-platform" class="block text-sm text-gray-600 hover:text-[#61629F] hover:border-l-2 hover:border-[#61629F] pl-2 transition-all duration-200">Cross-Platform Apps</a></li>
                                    <li><a href="/services/pwa" class="block text-sm text-gray-600 hover:text-[#61629F] hover:border-l-2 hover:border-[#61629F] pl-2 transition-all duration-200">Progressive Web Apps</a></li>
                                </ul>
                            </div>
                            
                            <div>
                                <h3 class="text-xs font-semibold text-[#61629F] uppercase tracking-wider mb-3">Design & Marketing</h3>
                                <ul class="space-y-2">
                                    <li><a href="/services/ui-ux" class="block text-sm text-gray-600 hover:text-[#61629F] hover:border-l-2 hover:border-[#61629F] pl-2 transition-all duration-200">UI/UX Design</a></li>
                                    <li><a href="/services/seo" class="block text-sm text-gray-600 hover:text-[#61629F] hover:border-l-2 hover:border-[#61629F] pl-2 transition-all duration-200">SEO Optimization</a></li>
                                    <li><a href="/services/content" class="block text-sm text-gray-600 hover:text-[#61629F] hover:border-l-2 hover:border-[#61629F] pl-2 transition-all duration-200">Content Strategy</a></li>
                                    <li><a href="/services/branding" class="block text-sm text-gray-600 hover:text-[#61629F] hover:border-l-2 hover:border-[#61629F] pl-2 transition-all duration-200">Branding</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <a href="/portfolio" class="relative px-4 py-2 text-[#61629F] font-medium text-sm transition-all duration-200 hover:text-[#61629F] group">
                    Work
                    <span class="absolute inset-x-4 -bottom-1 h-0.5 bg-white transform scale-x-0 transition-transform duration-300 group-hover:scale-x-100"></span>
                </a>
                
                <div class="relative group">
                    <a href="/resources" class="relative px-4 py-2 text-[#61629F] font-medium text-sm transition-all duration-200 hover:text-[#61629F] group flex items-center gap-1">
                        Resources
                        <svg class="w-4 h-4 transition-transform duration-200 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                        <span class="absolute inset-x-4 -bottom-1 h-0.5 bg-white transform scale-x-0 transition-transform duration-300 group-hover:scale-x-100"></span>
                    </a>
                    
                    <div class="absolute top-full left-0 w-56 bg-white/95 backdrop-blur-sm shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 border border-gray-100">
                        <div class="py-2">
                            <a href="/blog" class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#61629F]/10 hover:text-[#61629F] hover:border-l-2 hover:border-[#61629F] transition-all duration-200">Blog</a>
                            <a href="/case-studies" class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#61629F]/10 hover:text-[#61629F] hover:border-l-2 hover:border-[#61629F] transition-all duration-200">Case Studies</a>
                            <a href="/webinars" class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#61629F]/10 hover:text-[#61629F] hover:border-l-2 hover:border-[#61629F] transition-all duration-200">Webinars</a>
                        </div>
                    </div>
                </div>
                
                <a href="/pricing" class="relative px-4 py-2 text-[#61629F] font-medium text-sm transition-all duration-200 hover:text-[#61629F] group">
                    Pricing
                    <span class="absolute inset-x-4 -bottom-1 h-0.5 bg-white transform scale-x-0 transition-transform duration-300 group-hover:scale-x-100"></span>
                </a>
            </div>

            <!-- Right Side - CTA -->
            <div class="hidden lg:flex items-center space-x-4">
                <div class="relative group">
                    <button class="flex items-center gap-1 px-3 py-2 text-sm text-[#61629F] hover:text-[#61629F] transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span>EN</span>
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    
                    <div class="absolute top-full right-0 w-32 bg-white/95 backdrop-blur-sm shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 border border-gray-100">
                        <div class="py-1">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#61629F]/10 hover:text-[#61629F] hover:border-l-2 hover:border-[#61629F] transition-all duration-200">English</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#61629F]/10 hover:text-[#61629F] hover:border-l-2 hover:border-[#61629F] transition-all duration-200">Spanish</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#61629F]/10 hover:text-[#61629F] hover:border-l-2 hover:border-[#61629F] transition-all duration-200">French</a>
                        </div>
                    </div>
                </div>
                
                <button class="p-2 text-[#61629F] hover:text-[#61629F] transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </button>
                
                <!-- Start a Project Button - BLACK -->
                <a href="/contact" class="bg-black text-white px-5 py-2 font-semibold text-sm hover:bg-gray-800 transition-all duration-300 transform shadow-md hover:shadow-lg">
                    Start a Project
                </a>
                
                <a href="/login" class="flex items-center gap-1 px-3 py-2 text-sm text-[#61629F] hover:text-[#61629F] transition border-l border-white/30 pl-4">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                    <span>Login</span>
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="lg:hidden flex items-center gap-3">
                <!-- <a href="/contact" class="bg-black text-white px-4 py-1.5 text-sm font-semibold">
                    Start
                </a> -->
                <button id="mobile-menu-button" class="text-black hover:text-[#61629F] focus:outline-none">
                    <svg class="h-10 w-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="lg:hidden hidden bg-white/95 backdrop-blur-sm shadow-lg max-h-screen overflow-y-auto">
        <div class="px-4 pt-4 pb-6 space-y-3">
            <a href="/" class="block py-2 text-gray-900 font-medium hover:text-[#61629F] transition">Home</a>
            <a href="/about" class="block py-2 text-gray-900 font-medium hover:text-[#61629F] transition">About Us</a>
            
            <div class="mobile-dropdown">
                <button class="mobile-dropdown-btn flex justify-between items-center w-full py-2 text-gray-900 font-medium hover:text-[#61629F] transition">
                    Services
                    <svg class="dropdown-icon w-4 h-4 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="mobile-dropdown-content hidden pl-4 mt-2 space-y-2">
                    <a href="/services/web" class="block py-1 text-sm text-gray-600 hover:text-[#61629F] transition">Web Development</a>
                    <a href="/services/mobile" class="block py-1 text-sm text-gray-600 hover:text-[#61629F] transition">Mobile Apps</a>
                    <a href="/services/ecommerce" class="block py-1 text-sm text-gray-600 hover:text-[#61629F] transition">E-commerce</a>
                    <a href="/services/design" class="block py-1 text-sm text-gray-600 hover:text-[#61629F] transition">UI/UX Design</a>
                </div>
            </div>
            
            <div class="mobile-dropdown">
                <button class="mobile-dropdown-btn flex justify-between items-center w-full py-2 text-gray-900 font-medium hover:text-[#61629F] transition">
                    Resources
                    <svg class="dropdown-icon w-4 h-4 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="mobile-dropdown-content hidden pl-4 mt-2 space-y-2">
                    <a href="/blog" class="block py-1 text-sm text-gray-600 hover:text-[#61629F] transition">Blog</a>
                    <a href="/case-studies" class="block py-1 text-sm text-gray-600 hover:text-[#61629F] transition">Case Studies</a>
                    <a href="/webinars" class="block py-1 text-sm text-gray-600 hover:text-[#61629F] transition">Webinars</a>
                </div>
            </div>
            
            <a href="/portfolio" class="block py-2 text-gray-900 font-medium hover:text-[#61629F] transition">Work</a>
            <a href="/pricing" class="block py-2 text-gray-900 font-medium hover:text-[#61629F] transition">Pricing</a>
            
            <div class="pt-4 border-t border-gray-200">
                <a href="/contact" class="block w-full text-center bg-black text-white px-4 py-2 font-semibold">
                    Start a Project
                </a>
                <a href="/login" class="block w-full text-center mt-2 text-gray-600 py-2 hover:text-[#61629F] transition">
                    Client Login
                </a>
            </div>
        </div>
    </div>
</nav>

<script>
    // Mobile menu toggle
    const button = document.getElementById('mobile-menu-button');
    const menu = document.getElementById('mobile-menu');
    
    if (button && menu) {
        button.addEventListener('click', () => {
            menu.classList.toggle('hidden');
            document.body.classList.toggle('overflow-hidden');
        });
    }
    
    // Mobile dropdown functionality
    const mobileDropdownBtns = document.querySelectorAll('.mobile-dropdown-btn');
    
    mobileDropdownBtns.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            const dropdownContent = btn.nextElementSibling;
            const icon = btn.querySelector('.dropdown-icon');
            
            mobileDropdownBtns.forEach(otherBtn => {
                if (otherBtn !== btn) {
                    const otherContent = otherBtn.nextElementSibling;
                    const otherIcon = otherBtn.querySelector('.dropdown-icon');
                    if (otherContent && !otherContent.classList.contains('hidden')) {
                        otherContent.classList.add('hidden');
                        if (otherIcon) otherIcon.style.transform = 'rotate(0deg)';
                    }
                }
            });
            
            if (dropdownContent) {
                dropdownContent.classList.toggle('hidden');
                if (icon) {
                    if (dropdownContent.classList.contains('hidden')) {
                        icon.style.transform = 'rotate(0deg)';
                    } else {
                        icon.style.transform = 'rotate(180deg)';
                    }
                }
            }
        });
    });
    
    // Glass effect on scroll
    const nav = document.getElementById('main-navbar');
    
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            nav.classList.add('scrolled');
            nav.style.background = 'rgba(255, 255, 255, 0.85)';
            nav.style.backdropFilter = 'blur(12px)';
            nav.style.boxShadow = '0 4px 20px rgba(0, 0, 0, 0.05)';
        } else {
            nav.classList.remove('scrolled');
            nav.style.background = 'transparent';
            nav.style.backdropFilter = 'none';
            nav.style.boxShadow = 'none';
        }
    });
    
    // Close mobile menu when clicking outside
    document.addEventListener('click', (e) => {
        if (menu && !menu.classList.contains('hidden')) {
            if (!menu.contains(e.target) && !button.contains(e.target)) {
                menu.classList.add('hidden');
                document.body.classList.remove('overflow-hidden');
            }
        }
    });
</script>

<style>
    /* Initial state - completely transparent */
    #main-navbar {
        background: transparent !important;
        transition: all 0.4s ease;
    }
    
    /* Glass effect when scrolled */
    #main-navbar.scrolled {
        background: rgba(255, 255, 255, 0.85) !important;
        backdrop-filter: blur(12px);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
    }
    
    /* Logo styling - white initially */
    #main-navbar img {
        filter: brightness(0) invert(1);
        transition: filter 0.3s ease;
    }
    
    /* When scrolled, revert logo to original colors */
    #main-navbar.scrolled img {
        filter: none;
    }
    
    /* When scrolled, change text colors to dark for better contrast */
    #main-navbar.scrolled .hidden.lg\\:flex > div > a,
    #main-navbar.scrolled .hidden.lg\\:flex .relative.group > a,
    #main-navbar.scrolled .hidden.lg\\:flex button:not(.bg-black),
    #main-navbar.scrolled .hidden.lg\\:flex .p-2,
    #main-navbar.scrolled .hidden.lg\\:flex a[href="/login"] {
        color: #1e1b4b !important;
    }
    
    /* Keep hover color on scroll */
    #main-navbar.scrolled .hidden.lg\\:flex > div > a:hover,
    #main-navbar.scrolled .hidden.lg\\:flex .relative.group > a:hover,
    #main-navbar.scrolled .hidden.lg\\:flex button:not(.bg-black):hover,
    #main-navbar.scrolled .hidden.lg\\:flex a[href="/login"]:hover {
        color: #61629F !important;
    }
    
    /* No rounded corners */
    .bg-black, .rounded-lg, .rounded-xl, .rounded-2xl {
        border-radius: 0 !important;
    }
    
    .animate-pulse {
        border-radius: 50% !important;
    }
    
    #mobile-menu {
        position: fixed;
        top: 80px;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 999;
        overflow-y: auto;
    }
    
    .mobile-dropdown-content {
        transition: all 0.2s ease;
    }
    
    .group:hover .group-hover\:scale-x-100 {
        transform: scaleX(1);
    }
</style>