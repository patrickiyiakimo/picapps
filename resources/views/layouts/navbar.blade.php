<nav id="main-navbar" class="sticky top-0 z-50 transition-all duration-500">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            
            <!-- Logo Section -->
            <div class="flex items-center">
                <a href="/" class="flex items-center space-x-2 group">
                    <div class="relative flex items-center">
                        <img src="/images/alta-logo.png" alt="Alta - Digital Agency Logo" class="h-12 w-auto md:h-14 lg:h-20 bg-emerald-600">
                        <div class="absolute -bottom-1 left-0 w-full h-0.5 bg-gradient-to-r from-emerald-500 to-transparent transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></div>
                    </div>
                    <div class="w-1.5 h-1.5 bg-emerald-500 rounded-full animate-pulse"></div>
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden lg:flex items-center space-x-1">
                
                <!-- About with Dropdown -->
                <div class="relative group">
                    <a href="/about" class="relative px-4 py-2 text-navy-700 font-medium text-sm transition-all duration-200 hover:text-emerald-600 group flex items-center gap-1">
                        About Us
                        <svg class="w-4 h-4 transition-transform duration-200 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                        <span class="absolute inset-x-4 -bottom-1 h-0.5 bg-emerald-500 transform scale-x-0 transition-transform duration-300 group-hover:scale-x-100"></span>
                    </a>
                    
                    <div class="absolute top-full left-0 w-56 bg-white shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 border border-gray-100">
                        <div class="py-2">
                            <!-- <a href="/about/company" class="block px-4 py-2 text-sm text-navy-700 hover:bg-emerald-50 hover:text-emerald-600">Our Company</a> -->
                            <a href="/about/team" class="block px-4 py-2 text-sm text-navy-700 hover:bg-emerald-50 hover:text-emerald-600">Leadership Team</a>
                            <a href="/about/careers" class="block px-4 py-2 text-sm text-navy-700 hover:bg-emerald-50 hover:text-emerald-600">Careers</a>
                            <a href="/about/partners" class="block px-4 py-2 text-sm text-navy-700 hover:bg-emerald-50 hover:text-emerald-600">Partners</a>
                        </div>
                    </div>
                </div>
                
                <!-- Services with Mega Dropdown -->
                <div class="relative group">
                    <a href="/services" class="relative px-4 py-2 text-navy-700 font-medium text-sm transition-all duration-200 hover:text-emerald-600 group flex items-center gap-1">
                        Services
                        <svg class="w-4 h-4 transition-transform duration-200 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                        <span class="absolute inset-x-4 -bottom-1 h-0.5 bg-emerald-500 transform scale-x-0 transition-transform duration-300 group-hover:scale-x-100"></span>
                    </a>
                    
                    <div class="absolute top-full left-0 w-screen max-w-4xl bg-white shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 border border-gray-100">
                        <div class="grid grid-cols-3 gap-6 p-6">
                            <div>
                                <h3 class="text-xs font-semibold text-emerald-600 uppercase tracking-wider mb-3">Web Development</h3>
                                <ul class="space-y-2">
                                    <li><a href="/services/ecommerce" class="text-sm text-navy-700 hover:text-emerald-600 transition">E-commerce Websites</a></li>
                                    <li><a href="/services/corporate" class="text-sm text-navy-700 hover:text-emerald-600 transition">Corporate Websites</a></li>
                                    <li><a href="/services/custom-web" class="text-sm text-navy-700 hover:text-emerald-600 transition">Custom Web Apps</a></li>
                                    <li><a href="/services/cms" class="text-sm text-navy-700 hover:text-emerald-600 transition">CMS Development</a></li>
                                </ul>
                            </div>
                            
                            <div>
                                <h3 class="text-xs font-semibold text-emerald-600 uppercase tracking-wider mb-3">Mobile Apps</h3>
                                <ul class="space-y-2">
                                    <li><a href="/services/ios" class="text-sm text-navy-700 hover:text-emerald-600 transition">iOS Development</a></li>
                                    <li><a href="/services/android" class="text-sm text-navy-700 hover:text-emerald-600 transition">Android Development</a></li>
                                    <li><a href="/services/cross-platform" class="text-sm text-navy-700 hover:text-emerald-600 transition">Cross-Platform Apps</a></li>
                                    <li><a href="/services/pwa" class="text-sm text-navy-700 hover:text-emerald-600 transition">Progressive Web Apps</a></li>
                                </ul>
                            </div>
                            
                            <div>
                                <h3 class="text-xs font-semibold text-emerald-600 uppercase tracking-wider mb-3">Design & Marketing</h3>
                                <ul class="space-y-2">
                                    <li><a href="/services/ui-ux" class="text-sm text-navy-700 hover:text-emerald-600 transition">UI/UX Design</a></li>
                                    <li><a href="/services/seo" class="text-sm text-navy-700 hover:text-emerald-600 transition">SEO Optimization</a></li>
                                    <li><a href="/services/content" class="text-sm text-navy-700 hover:text-emerald-600 transition">Content Strategy</a></li>
                                    <li><a href="/services/branding" class="text-sm text-navy-700 hover:text-emerald-600 transition">Branding</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <a href="/portfolio" class="relative px-4 py-2 text-navy-700 font-medium text-sm transition-all duration-200 hover:text-emerald-600 group">
                    Work
                    <span class="absolute inset-x-4 -bottom-1 h-0.5 bg-emerald-500 transform scale-x-0 transition-transform duration-300 group-hover:scale-x-100"></span>
                </a>
                
                <div class="relative group">
                    <a href="/resources" class="relative px-4 py-2 text-navy-700 font-medium text-sm transition-all duration-200 hover:text-emerald-600 group flex items-center gap-1">
                        Resources
                        <svg class="w-4 h-4 transition-transform duration-200 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                        <span class="absolute inset-x-4 -bottom-1 h-0.5 bg-emerald-500 transform scale-x-0 transition-transform duration-300 group-hover:scale-x-100"></span>
                    </a>
                    
                    <div class="absolute top-full left-0 w-56 bg-white shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 border border-gray-100">
                        <div class="py-2">
                            <a href="/blog" class="block px-4 py-2 text-sm text-navy-700 hover:bg-emerald-50 hover:text-emerald-600">Blog</a>
                            <a href="/case-studies" class="block px-4 py-2 text-sm text-navy-700 hover:bg-emerald-50 hover:text-emerald-600">Case Studies</a>
                            <!-- <a href="/whitepapers" class="block px-4 py-2 text-sm text-navy-700 hover:bg-emerald-50 hover:text-emerald-600">Whitepapers</a> -->
                            <a href="/webinars" class="block px-4 py-2 text-sm text-navy-700 hover:bg-emerald-50 hover:text-emerald-600">Webinars</a>
                        </div>
                    </div>
                </div>
                
                <a href="/pricing" class="relative px-4 py-2 text-navy-700 font-medium text-sm transition-all duration-200 hover:text-emerald-600 group">
                    Pricing
                    <span class="absolute inset-x-4 -bottom-1 h-0.5 bg-emerald-500 transform scale-x-0 transition-transform duration-300 group-hover:scale-x-100"></span>
                </a>
            </div>

            <!-- Right Side - CTA -->
            <div class="hidden lg:flex items-center space-x-4">
                <div class="relative group">
                    <button class="flex items-center gap-1 px-3 py-2 text-sm text-navy-700 hover:text-emerald-600 transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span>EN</span>
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    
                    <div class="absolute top-full right-0 w-32 bg-white shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 border border-gray-100">
                        <div class="py-1">
                            <a href="#" class="block px-4 py-2 text-sm text-navy-700 hover:bg-emerald-50 hover:text-emerald-600">English</a>
                            <a href="#" class="block px-4 py-2 text-sm text-navy-700 hover:bg-emerald-50 hover:text-emerald-600">Spanish</a>
                            <a href="#" class="block px-4 py-2 text-sm text-navy-700 hover:bg-emerald-50 hover:text-emerald-600">French</a>
                        </div>
                    </div>
                </div>
                
                <button class="p-2 text-emerald-500 hover:text-emerald-600 transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </button>
                
                <a href="/contact" class="bg-emerald-600 text-white px-5 py-2 font-semibold text-sm hover:bg-emerald-700 transition-all duration-500 transform  shadow-md hover:shadow-lg">
                    Start a Project
                </a>
                
                <a href="/login" class="flex items-center gap-1 px-3 py-2 text-sm text-emerald-500 hover:text-emerald-600 transition border-l border-gray-200 pl-4">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                    <span>Login</span>
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="lg:hidden flex items-center gap-3">
                <a href="/contact" class="bg-emerald-600 text-white px-4 py-1.5 text-sm font-semibold">
                    Start
                </a>
                <button id="mobile-menu-button" class="text-navy-900 hover:text-emerald-600 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu - With Working Dropdowns -->
    <div id="mobile-menu" class="lg:hidden hidden bg-white shadow-lg max-h-screen overflow-y-auto">
        <div class="px-4 pt-4 pb-6 space-y-3">
            <a href="/" class="block py-2 text-navy-900 font-medium hover:text-emerald-600 transition">Home</a>
            <a href="/about" class="block py-2 text-navy-900 font-medium hover:text-emerald-600 transition">About Us</a>
            
            <!-- Mobile Submenu for Services - Working Version -->
            <div class="mobile-dropdown">
                <button class="mobile-dropdown-btn flex justify-between items-center w-full py-2 text-navy-900 font-medium hover:text-emerald-600 transition">
                    Services
                    <svg class="dropdown-icon w-4 h-4 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="mobile-dropdown-content hidden pl-4 mt-2 space-y-2">
                    <a href="/services/web" class="block py-1 text-sm text-emerald-600 hover:text-emerald-600 transition">Web Development</a>
                    <a href="/services/mobile" class="block py-1 text-sm text-emerald-600 hover:text-emerald-600 transition">Mobile Apps</a>
                    <a href="/services/ecommerce" class="block py-1 text-sm text-emerald-600 hover:text-emerald-600 transition">E-commerce</a>
                    <a href="/services/design" class="block py-1 text-sm text-emerald-600 hover:text-emerald-600 transition">UI/UX Design</a>
                </div>
            </div>
            
            <!-- Mobile Submenu for Resources -->
            <div class="mobile-dropdown">
                <button class="mobile-dropdown-btn flex justify-between items-center w-full py-2 text-navy-900 font-medium hover:text-emerald-600 transition">
                    Resources
                    <svg class="dropdown-icon w-4 h-4 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="mobile-dropdown-content hidden pl-4 mt-2 space-y-2">
                    <a href="/blog" class="block py-1 text-sm text-emerald-600 hover:text-emerald-600 transition">Blog</a>
                    <a href="/case-studies" class="block py-1 text-sm text-emerald-600 hover:text-emerald-600 transition">Case Studies</a>
                    <!-- <a href="/whitepapers" class="block py-1 text-sm text-emerald-600 hover:text-emerald-600 transition">Whitepapers</a> -->
                    <a href="/webinars" class="block py-1 text-sm text-emerald-600 hover:text-emerald-600 transition">Webinars</a>
                </div>
            </div>
            
            <a href="/portfolio" class="block py-2 text-navy-900 font-medium hover:text-emerald-600 transition">Work</a>
            <a href="/pricing" class="block py-2 text-navy-900 font-medium hover:text-emerald-600 transition">Pricing</a>
            
            <div class="pt-4 border-t border-gray-200">
                <a href="/contact" class="block w-full text-center bg-emerald-600 text-white px-4 py-2 font-semibold">
                    Start a Project
                </a>
                <a href="/login" class="block w-full text-center mt-2 text-emerald-500 py-2 hover:text-emerald-600 transition">
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
    
    // Mobile dropdown functionality - FIXED
    const mobileDropdownBtns = document.querySelectorAll('.mobile-dropdown-btn');
    
    mobileDropdownBtns.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            const dropdownContent = btn.nextElementSibling;
            const icon = btn.querySelector('.dropdown-icon');
            
            // Close other dropdowns
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
            
            // Toggle current dropdown
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
    
    // Glass effect on scroll - NO BACKGROUND INITIALLY
    const nav = document.getElementById('main-navbar');
    
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            nav.classList.add('scrolled');
            nav.style.background = 'rgba(255, 255, 255, 0.95)';
            nav.style.backdropFilter = 'blur(10px)';
            nav.style.boxShadow = '0 4px 20px rgba(0, 0, 0, 0.08)';
        } else {
            nav.classList.remove('scrolled');
            nav.style.background = 'transparent';
            nav.style.backdropFilter = 'none';
            nav.style.boxShadow = 'none';
        }
    });
    
    // Close mobile menu when clicking outside (optional)
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
    /* Initial state - transparent background */
    #main-navbar {
        background: transparent;
        transition: all 0.4s ease;
    }
    
    /* Remove rounded corners from all buttons */
    .bg-emerald-600, 
    .bg-emerald-500,
    .rounded-lg,
    .rounded-xl,
    .rounded-2xl,
    .rounded-full {
        border-radius: 0 !important;
    }
    
    /* But keep some elements looking good */
    .animate-pulse {
        border-radius: 50% !important;
    }
    
    /* Mobile menu improvements */
    #mobile-menu {
        position: fixed;
        top: 80px;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 999;
        overflow-y: auto;
    }
    
    /* Smooth transitions */
    .mobile-dropdown-content {
        transition: all 0.2s ease;
    }
    
    /* Hover effects */
    .group:hover .group-hover\:scale-x-100 {
        transform: scaleX(1);
    }
</style>