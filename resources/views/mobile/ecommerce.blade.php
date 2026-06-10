<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Solutions - Alta Digital Agency</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Bricolage+Grotesque:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white font-sans">
    
    @include('layouts.navbar')

    <!-- Hero Section -->
    <div class="relative bg-gradient-to-br from-navy-900 to-navy-800 overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-bl from-emerald-600/20 to-transparent"></div>
            <div class="absolute bottom-0 left-0 w-1/2 h-full bg-gradient-to-tr from-emerald-600/10 to-transparent"></div>
            <svg class="absolute bottom-0 left-0 w-full h-32 text-white" viewBox="0 0 1200 120" preserveAspectRatio="none" fill="currentColor">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"></path>
            </svg>
        </div>
        
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 md:py-28">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="inline-flex items-center gap-2 bg-emerald-500/20 backdrop-blur-sm text-emerald-300 px-4 py-2 mb-6 border border-emerald-500/30">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z"/>
                        </svg>
                        <span class="text-sm font-semibold uppercase tracking-wider">E-commerce Solutions</span>
                    </div>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 font-display">
                        Build an Online Store That
                        <span class="bg-gradient-to-r from-emerald-400 to-emerald-300 bg-clip-text text-transparent">Sells</span>
                    </h1>
                    <p class="text-gray-300 text-lg mb-8 leading-relaxed">
                        Create a powerful e-commerce website that converts visitors into loyal customers. From custom development to platform selection, we handle everything.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="/contact" class="inline-flex items-center gap-2 bg-emerald-600 text-white px-6 py-3 font-semibold hover:bg-emerald-500 transition">
                            Start Your Store
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </a>
                        <a href="#pricing" class="inline-flex items-center gap-2 border border-white/30 text-white px-6 py-3 font-semibold hover:bg-white/10 transition">
                            View Pricing
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" 
                         alt="E-commerce Dashboard" 
                         class="rounded-lg shadow-2xl">
                    <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-emerald-600/20 rounded-full filter blur-2xl"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Platforms Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-navy-900 mb-4 font-display">Choose Your Platform</h2>
            <div class="w-20 h-1 bg-emerald-500 mx-auto"></div>
            <p class="text-gray-600 mt-6 max-w-2xl mx-auto">
                We build on the platforms that best fit your business needs
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Shopify -->
            <div class="bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-xl transition-all duration-300 p-6 text-center">
                <div class="w-20 h-20 mx-auto mb-4 flex items-center justify-center">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/shopify/shopify-original.svg" alt="Shopify" class="w-16 h-16">
                </div>
                <h3 class="text-xl font-bold text-navy-900 mb-2">Shopify</h3>
                <p class="text-gray-500 text-sm">Perfect for businesses of all sizes. Easy to manage and scale.</p>
            </div>

            <!-- WooCommerce -->
            <div class="bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-xl transition-all duration-300 p-6 text-center">
                <div class="w-20 h-20 mx-auto mb-4 flex items-center justify-center">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/woocommerce/woocommerce-original.svg" alt="WooCommerce" class="w-16 h-16">
                </div>
                <h3 class="text-xl font-bold text-navy-900 mb-2">WooCommerce</h3>
                <p class="text-gray-500 text-sm">WordPress-based, highly customizable, great for content-rich stores.</p>
            </div>

            <!-- Magento -->
            <div class="bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-xl transition-all duration-300 p-6 text-center">
                <div class="w-20 h-20 mx-auto mb-4 flex items-center justify-center">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/magento/magento-original.svg" alt="Magento" class="w-16 h-16">
                </div>
                <h3 class="text-xl font-bold text-navy-900 mb-2">Magento</h3>
                <p class="text-gray-500 text-sm">Enterprise-level solution for large-scale operations.</p>
            </div>

            <!-- Custom -->
            <div class="bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-xl transition-all duration-300 p-6 text-center">
                <div class="w-20 h-20 mx-auto mb-4 flex items-center justify-center bg-emerald-100 rounded-full">
                    <svg class="w-10 h-10 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-navy-900 mb-2">Custom Build</h3>
                <p class="text-gray-500 text-sm">Tailored solution with Laravel or React for complete control.</p>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="bg-gray-50 py-16 md:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-navy-900 mb-4 font-display">Everything You Need to Sell Online</h2>
                <div class="w-20 h-1 bg-emerald-500 mx-auto"></div>
                <p class="text-gray-600 mt-6 max-w-2xl mx-auto">
                    Powerful features designed to maximize your online sales
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-white p-6 border border-gray-200 hover:border-emerald-300 transition">
                    <div class="w-12 h-12 bg-emerald-100 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-1.5 6M17 13l1.5 6M9 21a2 2 0 100-4 2 2 0 000 4zm8 0a2 2 0 100-4 2 2 0 000 4z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-navy-900 mb-2">Secure Payment Gateway</h3>
                    <p class="text-gray-500 text-sm">Integration with Stripe, PayPal, and 50+ payment providers worldwide.</p>
                </div>

                <!-- Feature 2 -->
                <div class="bg-white p-6 border border-gray-200 hover:border-emerald-300 transition">
                    <div class="w-12 h-12 bg-emerald-100 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-navy-900 mb-2">Inventory Management</h3>
                    <p class="text-gray-500 text-sm">Real-time stock tracking, low stock alerts, and bulk product uploads.</p>
                </div>

                <!-- Feature 3 -->
                <div class="bg-white p-6 border border-gray-200 hover:border-emerald-300 transition">
                    <div class="w-12 h-12 bg-emerald-100 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 15v-1a4 4 0 00-4-4H8m0 0l3 3m-3-3l3-3m9 4V9a2 2 0 00-2-2h-1"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-navy-900 mb-2">International Shipping</h3>
                    <p class="text-gray-500 text-sm">Multi-currency support, real-time shipping rates, and tax calculation.</p>
                </div>

                <!-- Feature 4 -->
                <div class="bg-white p-6 border border-gray-200 hover:border-emerald-300 transition">
                    <div class="w-12 h-12 bg-emerald-100 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-navy-900 mb-2">Analytics & Reporting</h3>
                    <p class="text-gray-500 text-sm">Track sales, customer behavior, and conversion metrics in real-time.</p>
                </div>

                <!-- Feature 5 -->
                <div class="bg-white p-6 border border-gray-200 hover:border-emerald-300 transition">
                    <div class="w-12 h-12 bg-emerald-100 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-navy-900 mb-2">SEO Optimized</h3>
                    <p class="text-gray-500 text-sm">Built-in SEO tools to help your products rank higher in search results.</p>
                </div>

                <!-- Feature 6 -->
                <div class="bg-white p-6 border border-gray-200 hover:border-emerald-300 transition">
                    <div class="w-12 h-12 bg-emerald-100 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-navy-900 mb-2">Mobile Responsive</h3>
                    <p class="text-gray-500 text-sm">Beautiful shopping experience on any device, any screen size.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Pricing Section -->
    <div id="pricing" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-navy-900 mb-4 font-display">Simple, Transparent Pricing</h2>
            <div class="w-20 h-1 bg-emerald-500 mx-auto"></div>
            <p class="text-gray-600 mt-6 max-w-2xl mx-auto">
                Choose the plan that fits your business needs
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Starter -->
            <div class="bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-xl transition-all duration-300">
                <div class="p-6 border-b border-gray-100">
                    <h3 class="text-xl font-bold text-navy-900">Starter Store</h3>
                    <p class="text-gray-500 text-sm mt-1">Perfect for small businesses</p>
                    <div class="mt-4">
                        <span class="text-4xl font-bold text-navy-900">$2,500</span>
                        <span class="text-gray-500">/ one-time</span>
                    </div>
                </div>
                <div class="p-6">
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-center gap-2 text-sm">
                            <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                            </svg>
                            Up to 100 products
                        </li>
                        <li class="flex items-center gap-2 text-sm">
                            <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                            </svg>
                            Payment gateway integration
                        </li>
                        <li class="flex items-center gap-2 text-sm">
                            <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                            </svg>
                            Mobile responsive design
                        </li>
                        <li class="flex items-center gap-2 text-sm">
                            <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                            </svg>
                            Basic SEO setup
                        </li>
                        <li class="flex items-center gap-2 text-sm text-gray-400">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                            Advanced analytics
                        </li>
                    </ul>
                    <a href="/contact" class="block w-full text-center border border-emerald-600 text-emerald-600 py-3 font-semibold hover:bg-emerald-600 hover:text-white transition">
                        Get Started
                    </a>
                </div>
            </div>

            <!-- Professional -->
            <div class="bg-white border-2 border-emerald-500 hover:shadow-xl transition-all duration-300 relative">
                <div class="absolute -top-4 left-1/2 transform -translate-x-1/2 bg-emerald-600 text-white px-4 py-1 text-sm font-semibold">
                    MOST POPULAR
                </div>
                <div class="p-6 border-b border-gray-100">
                    <h3 class="text-xl font-bold text-navy-900">Professional Store</h3>
                    <p class="text-gray-500 text-sm mt-1">For growing businesses</p>
                    <div class="mt-4">
                        <span class="text-4xl font-bold text-navy-900">$5,000</span>
                        <span class="text-gray-500">/ one-time</span>
                    </div>
                </div>
                <div class="p-6">
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-center gap-2 text-sm">
                            <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                            </svg>
                            Unlimited products
                        </li>
                        <li class="flex items-center gap-2 text-sm">
                            <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                            </svg>
                            Custom design & branding
                        </li>
                        <li class="flex items-center gap-2 text-sm">
                            <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                            </svg>
                            Advanced SEO optimization
                        </li>
                        <li class="flex items-center gap-2 text-sm">
                            <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                            </svg>
                            Inventory management
                        </li>
                        <li class="flex items-center gap-2 text-sm">
                            <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                            </svg>
                            Analytics dashboard
                        </li>
                        <li class="flex items-center gap-2 text-sm">
                            <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                            </svg>
                            6 months support
                        </li>
                    </ul>
                    <a href="/contact" class="block w-full text-center bg-emerald-600 text-white py-3 font-semibold hover:bg-emerald-500 transition">
                        Get Started
                    </a>
                </div>
            </div>

            <!-- Enterprise -->
            <div class="bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-xl transition-all duration-300">
                <div class="p-6 border-b border-gray-100">
                    <h3 class="text-xl font-bold text-navy-900">Enterprise</h3>
                    <p class="text-gray-500 text-sm mt-1">For large-scale operations</p>
                    <div class="mt-4">
                        <span class="text-4xl font-bold text-navy-900">Custom</span>
                    </div>
                </div>
                <div class="p-6">
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-center gap-2 text-sm">
                            <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                            </svg>
                            Custom development
                        </li>
                        <li class="flex items-center gap-2 text-sm">
                            <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                            </svg>
                            API integrations
                        </li>
                        <li class="flex items-center gap-2 text-sm">
                            <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                            </svg>
                            Multi-store management
                        </li>
                        <li class="flex items-center gap-2 text-sm">
                            <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                            </svg>
                            Dedicated account manager
                        </li>
                        <li class="flex items-center gap-2 text-sm">
                            <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                            </svg>
                            24/7 priority support
                        </li>
                        <li class="flex items-center gap-2 text-sm">
                            <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                            </svg>
                            SLA guaranteed
                        </li>
                    </ul>
                    <a href="/contact" class="block w-full text-center border border-emerald-600 text-emerald-600 py-3 font-semibold hover:bg-emerald-600 hover:text-white transition">
                        Contact Sales
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Showcase -->
    <div class="bg-gray-50 py-16 md:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-navy-900 mb-4 font-display">Our E-commerce Success Stories</h2>
                <div class="w-20 h-1 bg-emerald-500 mx-auto"></div>
                <p class="text-gray-600 mt-6 max-w-2xl mx-auto">
                    See how we've helped businesses like yours grow online
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Project 1 -->
                <div class="group bg-white overflow-hidden border border-gray-200 hover:border-emerald-300 hover:shadow-xl transition-all duration-300">
                    <div class="relative h-56 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1472851294608-062f824d29cc?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                             alt="Fashion Store" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-navy-900/60 to-transparent"></div>
                        <div class="absolute bottom-4 left-4">
                            <span class="bg-emerald-600 text-white text-xs px-3 py-1">Fashion Retail</span>
                        </div>
                    </div>
                    <div class="p-5">
                        <h3 class="font-bold text-navy-900 mb-2">FashionStyle Store</h3>
                        <p class="text-gray-500 text-sm mb-3">312% increase in sales within 6 months</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-1">
                                <span class="text-yellow-400">★★★★★</span>
                                <span class="text-xs text-gray-500">(5.0)</span>
                            </div>
                            <a href="#" class="text-emerald-600 text-sm font-semibold">View Case →</a>
                        </div>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="group bg-white overflow-hidden border border-gray-200 hover:border-emerald-300 hover:shadow-xl transition-all duration-300">
                    <div class="relative h-56 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                             alt="Home Decor" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-navy-900/60 to-transparent"></div>
                        <div class="absolute bottom-4 left-4">
                            <span class="bg-emerald-600 text-white text-xs px-3 py-1">Home Decor</span>
                        </div>
                    </div>
                    <div class="p-5">
                        <h3 class="font-bold text-navy-900 mb-2">HomeBuddy</h3>
                        <p class="text-gray-500 text-sm mb-3">178% increase in online sales</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-1">
                                <span class="text-yellow-400">★★★★★</span>
                                <span class="text-xs text-gray-500">(4.9)</span>
                            </div>
                            <a href="#" class="text-emerald-600 text-sm font-semibold">View Case →</a>
                        </div>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="group bg-white overflow-hidden border border-gray-200 hover:border-emerald-300 hover:shadow-xl transition-all duration-300">
                    <div class="relative h-56 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1567401893414-76b7b1e5a7a5?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                             alt="Electronics Store" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-navy-900/60 to-transparent"></div>
                        <div class="absolute bottom-4 left-4">
                            <span class="bg-emerald-600 text-white text-xs px-3 py-1">Electronics</span>
                        </div>
                    </div>
                    <div class="p-5">
                        <h3 class="font-bold text-navy-900 mb-2">TechGadget</h3>
                        <p class="text-gray-500 text-sm mb-3">245% revenue growth in first year</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-1">
                                <span class="text-yellow-400">★★★★★</span>
                                <span class="text-xs text-gray-500">(5.0)</span>
                            </div>
                            <a href="#" class="text-emerald-600 text-sm font-semibold">View Case →</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FAQ Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-navy-900 mb-4 font-display">Frequently Asked Questions</h2>
            <div class="w-20 h-1 bg-emerald-500 mx-auto"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
            <div>
                <h3 class="font-semibold text-navy-900 mb-2">How long does it take to build an e-commerce store?</h3>
                <p class="text-gray-500 text-sm">Typically 4-8 weeks depending on complexity. We'll provide a detailed timeline during consultation.</p>
            </div>
            <div>
                <h3 class="font-semibold text-navy-900 mb-2">Do you offer payment plans?</h3>
                <p class="text-gray-500 text-sm">Yes, we offer flexible payment plans. Contact us to discuss options that work for your budget.</p>
            </div>
            <div>
                <h3 class="font-semibold text-navy-900 mb-2">Can I migrate my existing store?</h3>
                <p class="text-gray-500 text-sm">Absolutely! We specialize in seamless migrations from any platform to your new store.</p>
            </div>
            <div>
                <h3 class="font-semibold text-navy-900 mb-2">What about ongoing maintenance?</h3>
                <p class="text-gray-500 text-sm">We offer affordable maintenance plans including security updates, backups, and technical support.</p>
            </div>
            <div>
                <h3 class="font-semibold text-navy-900 mb-2">Do you provide hosting?</h3>
                <p class="text-gray-500 text-sm">Yes, we offer reliable, secure hosting optimized for e-commerce performance.</p>
            </div>
            <div>
                <h3 class="font-semibold text-navy-900 mb-2">What payment gateways do you support?</h3>
                <p class="text-gray-500 text-sm">Stripe, PayPal, Square, and 50+ other payment providers worldwide.</p>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-gradient-to-r from-emerald-600 to-emerald-500 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4 font-display">Ready to Start Selling Online?</h2>
            <p class="text-emerald-100 mb-8 max-w-2xl mx-auto">
                Let's build an e-commerce store that drives sales and grows your business.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/contact" class="inline-flex items-center gap-2 bg-white text-emerald-600 px-8 py-3 font-semibold hover:bg-gray-50 transition-all duration-300 transform hover:scale-105">
                    Get a Free Quote
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>
                <a href="/contact" class="inline-flex items-center gap-2 border-2 border-white text-white px-8 py-3 font-semibold hover:bg-white/10 transition-all duration-300">
                    Schedule a Consultation
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>

    @include('layouts.footer')
</body>
</html>