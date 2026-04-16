<nav class="bg-white shadow-sm sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo Section -->
            <div class="flex items-center">
                <a href="/" class="flex items-center space-x-2 group">
                    <!-- Fancy SVG Logo with stylized "A" -->
                    <div class="relative">
                        <svg width="40" height="40" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg" class="transition-transform duration-300 group-hover:scale-105">
                            <!-- Background shape -->
                            <circle cx="50" cy="50" r="48" stroke="currentColor" stroke-width="2" class="text-navy-900" fill="none"/>
                            
                            <!-- Decorative accent lines -->
                            <path d="M50 10 L50 90" stroke="currentColor" stroke-width="1.5" class="text-navy-600" stroke-dasharray="4 4"/>
                            <path d="M10 50 L90 50" stroke="currentColor" stroke-width="1.5" class="text-navy-600" stroke-dasharray="4 4"/>
                            
                            <!-- Stylized letter A -->
                            <path d="M50 20 L25 80 M50 20 L75 80 M38 55 L62 55" stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" class="text-navy-900" fill="none"/>
                            
                            <!-- Decorative dot -->
                            <circle cx="50" cy="35" r="3" fill="currentColor" class="text-blue-500"/>
                        </svg>
                    </div>
                    <span class="text-2xl font-bold tracking-tight">
                        <span class="text-navy-900">Alt</span><span class="text-navy-900 relative">a
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
    <a href="/services" class="relative text-navy-700 hover:text-blue-600 transition-colors duration-200 group">
        Services
        <span class="absolute inset-x-0 -bottom-1 h-0.5 bg-blue-600 transform scale-x-0 transition-transform duration-300 group-hover:scale-x-100"></span>
    </a>
    <a href="/solutions" class="relative text-navy-700 hover:text-blue-600 transition-colors duration-200 group">
        Solutions
        <span class="absolute inset-x-0 -bottom-1 h-0.5 bg-blue-600 transform scale-x-0 transition-transform duration-300 group-hover:scale-x-100"></span>
    </a>
    <a href="/products" class="relative text-navy-700 hover:text-blue-600 transition-colors duration-200 group">
        Products
        <span class="absolute inset-x-0 -bottom-1 h-0.5 bg-blue-600 transform scale-x-0 transition-transform duration-300 group-hover:scale-x-100"></span>
    </a>
    <a href="/careers" class="relative text-navy-700 hover:text-blue-600 transition-colors duration-200 group">
        Careers
        <span class="absolute inset-x-0 -bottom-1 h-0.5 bg-blue-600 transform scale-x-0 transition-transform duration-300 group-hover:scale-x-100"></span>
    </a>
    <a href="/contact" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors duration-200">
        Contact Us
    </a>
</div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-navy-900 hover:text-blue-600 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden hidden bg-white border-t border-gray-100">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="#services" class="block px-3 py-2 text-navy-700 hover:text-blue-600 font-medium transition-colors">Services</a>
            <a href="#solutions" class="block px-3 py-2 text-navy-700 hover:text-blue-600 font-medium transition-colors">Solutions</a>
            <a href="#products" class="block px-3 py-2 text-navy-700 hover:text-blue-600 font-medium transition-colors">Products</a>
            <a href="#careers" class="block px-3 py-2 text-navy-700 hover:text-blue-600 font-medium transition-colors">Careers</a>
            <a href="#contact" class="block px-3 py-2 bg-blue-600 text-white rounded-lg text-center font-medium">Contact Us</a>
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