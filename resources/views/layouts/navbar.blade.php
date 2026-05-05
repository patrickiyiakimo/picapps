<nav class="bg-navy-900 shadow-sm sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo Section -->
            <div class="flex items-center">
                <a href="/" class="flex items-center space-x-2 group">
                    <span class="text-2xl font-bold tracking-tight">
                        <span class="text-white">
                            <img src="/images/alta-logo.png" alt="Logo" class=" h-24 w-auto inline-block">
                        </span>
                            <!-- Underline accent -->
                            <svg class="absolute -bottom-1 left-0 w-full h-1" viewBox="0 0 20 4" preserveAspectRatio="none">
                                <path d="M0 2 Q5 0 10 2 Q15 4 20 2" stroke="currentColor" stroke-width="1.5" fill="none" class="text-blue-500"/>
                            </svg>
                        </span>
                    </span>
                </a>
            </div>

           <!-- Desktop Navigation Links -->
<div class="hidden md:flex items-center space-x-8">
    <a href="/about" class="relative text-white transition-colors duration-200 group">
        About Us
        <span class="absolute inset-x-0 -bottom-1 h-0.5 bg-blue-600 transform scale-x-0 transition-transform duration-300 group-hover:scale-x-100"></span>
    </a>
    <a href="/features" class="relative text-white transition-colors duration-200 group">
        Features
        <span class="absolute inset-x-0 -bottom-1 h-0.5 bg-blue-600 transform scale-x-0 transition-transform duration-300 group-hover:scale-x-100"></span>
    </a>
    <a href="/pricing" class="relative text-white transition-colors duration-200 group">
        Pricing
        <span class="absolute inset-x-0 -bottom-1 h-0.5 bg-blue-600 transform scale-x-0 transition-transform duration-300 group-hover:scale-x-100"></span>
    </a>
    <a href="/blogs" class="relative text-white transition-colors duration-200 group">
        Blogs
        <span class="absolute inset-x-0 -bottom-1 h-0.5 bg-blue-600 transform scale-x-0 transition-transform duration-300 group-hover:scale-x-100"></span>
    </a>
    <a href="/contact" class=" text-white px-4 py-2 rounded-full border-2 border-gray-600 transition-colors duration-200 hover:bg-gray-700">
        Contact Us
    </a>
</div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-white hover:text-blue-600 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden hidden bg-navy-900 border-t border-gray-100">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="/about" class="block px-3 py-2 text-white font-medium transition-colors">About Us</a>
            <a href="/features" class="block px-3 py-2 text-white font-medium transition-colors">Features</a>
            <a href="/pricing" class="block px-3 py-2 text-white font-medium transition-colors">Pricing</a>
            <a href="/blogs" class="block px-3 py-2 text-white font-medium transition-colors">Blogs</a>
            <a href="/contact" class="block px-3 py-2 rounded-full border-2 border-gray-600 text-white text-center font-medium">Contact Us</a>
        </div>
    </div>
</nav>

<script>
    // Mobile menu toggle
    const button = document.getElementById('mobile-menu-button');
    const menu = document.getElementById('mobile-menu');
    
    button.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>