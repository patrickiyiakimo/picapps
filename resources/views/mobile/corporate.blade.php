<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corporate Websites - Alta Digital Agency</title>
    
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
                            <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm3 1h6v4H7V5zm8 8v2h1v-2h-1zm-2 0H7v2h6v-2z"/>
                        </svg>
                        <span class="text-sm font-semibold uppercase tracking-wider">Corporate Websites</span>
                    </div>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 font-display">
                        Build a Powerful
                        <span class="bg-gradient-to-r from-emerald-400 to-emerald-300 bg-clip-text text-transparent">Corporate Presence</span>
                    </h1>
                    <p class="text-gray-300 text-lg mb-8 leading-relaxed">
                        Create a professional corporate website that builds trust, showcases your brand, and drives business growth.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="/contact" class="inline-flex items-center gap-2 bg-emerald-600 text-white px-6 py-3 font-semibold hover:bg-emerald-500 transition">
                            Start Your Project
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
                    <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" 
                         alt="Corporate Office" 
                         class="rounded-lg shadow-2xl">
                    <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-emerald-600/20 rounded-full filter blur-2xl"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Why Corporate Website Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-navy-900 mb-4 font-display">Why Your Business Needs a Corporate Website</h2>
            <div class="w-20 h-1 bg-emerald-500 mx-auto"></div>
            <p class="text-gray-600 mt-6 max-w-2xl mx-auto">
                A professional website is your digital headquarters and often the first impression potential clients have of your business.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center p-6 border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300">
                <div class="w-16 h-16 bg-emerald-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-navy-900 mb-2">Build Trust</h3>
                <p class="text-gray-500 text-sm">Professional design establishes credibility and trust with potential clients.</p>
            </div>
            <div class="text-center p-6 border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300">
                <div class="w-16 h-16 bg-emerald-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.66 0 3-4 3-9s-1.34-9-3-9m0 18c-1.66 0-3-4-3-9s1.34-9 3-9"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-navy-900 mb-2">Global Reach</h3>
                <p class="text-gray-500 text-sm">Reach customers anywhere in the world, 24/7, with your corporate website.</p>
            </div>
            <div class="text-center p-6 border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300">
                <div class="w-16 h-16 bg-emerald-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-navy-900 mb-2">Lead Generation</h3>
                <p class="text-gray-500 text-sm">Convert visitors into qualified leads with strategic calls-to-action.</p>
            </div>
            <div class="text-center p-6 border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300">
                <div class="w-16 h-16 bg-emerald-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-navy-900 mb-2">Showcase Expertise</h3>
                <p class="text-gray-500 text-sm">Highlight your services, portfolio, and industry knowledge.</p>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="bg-gray-50 py-16 md:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-navy-900 mb-4 font-display">Enterprise-Grade Features</h2>
                <div class="w-20 h-1 bg-emerald-500 mx-auto"></div>
                <p class="text-gray-600 mt-6 max-w-2xl mx-auto">
                    Everything you need to impress clients and grow your business
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-white p-6 border border-gray-200 hover:border-emerald-300 transition-all duration-300 flex gap-4">
                    <div class="flex-shrink-0">
                        <div class="w-12 h-12 bg-emerald-100 flex items-center justify-center">
                            <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-navy-900 mb-2">Custom Design</h3>
                        <p class="text-gray-500 text-sm">Unique, brand-aligned design that stands out from competitors.</p>
                    </div>
                </div>

                <!-- Feature 2 -->
                <div class="bg-white p-6 border border-gray-200 hover:border-emerald-300 transition-all duration-300 flex gap-4">
                    <div class="flex-shrink-0">
                        <div class="w-12 h-12 bg-emerald-100 flex items-center justify-center">
                            <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-navy-900 mb-2">CMS Integration</h3>
                        <p class="text-gray-500 text-sm">Easy content management so you can update your site anytime.</p>
                    </div>
                </div>

                <!-- Feature 3 -->
                <div class="bg-white p-6 border border-gray-200 hover:border-emerald-300 transition-all duration-300 flex gap-4">
                    <div class="flex-shrink-0">
                        <div class="w-12 h-12 bg-emerald-100 flex items-center justify-center">
                            <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-navy-900 mb-2">SEO Optimized</h3>
                        <p class="text-gray-500 text-sm">Rank higher on Google with our built-in SEO best practices.</p>
                    </div>
                </div>

                <!-- Feature 4 -->
                <div class="bg-white p-6 border border-gray-200 hover:border-emerald-300 transition-all duration-300 flex gap-4">
                    <div class="flex-shrink-0">
                        <div class="w-12 h-12 bg-emerald-100 flex items-center justify-center">
                            <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-navy-900 mb-2">Fully Responsive</h3>
                        <p class="text-gray-500 text-sm">Perfect experience on desktop, tablet, and mobile devices.</p>
                    </div>
                </div>

                <!-- Feature 5 -->
                <div class="bg-white p-6 border border-gray-200 hover:border-emerald-300 transition-all duration-300 flex gap-4">
                    <div class="flex-shrink-0">
                        <div class="w-12 h-12 bg-emerald-100 flex items-center justify-center">
                            <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-navy-900 mb-2">Fast Loading</h3>
                        <p class="text-gray-500 text-sm">Optimized performance for better user experience and SEO.</p>
                    </div>
                </div>

                <!-- Feature 6 -->
                <div class="bg-white p-6 border border-gray-200 hover:border-emerald-300 transition-all duration-300 flex gap-4">
                    <div class="flex-shrink-0">
                        <div class="w-12 h-12 bg-emerald-100 flex items-center justify-center">
                            <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-navy-900 mb-2">Secure & Reliable</h3>
                        <p class="text-gray-500 text-sm">Enterprise-grade security with SSL certificates and daily backups.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pricing Section -->
    <div id="pricing" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-navy-900 mb-4 font-display">Corporate Website Packages</h2>
            <div class="w-20 h-1 bg-emerald-500 mx-auto"></div>
            <p class="text-gray-600 mt-6 max-w-2xl mx-auto">
                Choose the perfect package for your business needs
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Basic Corporate -->
            <div class="bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-xl transition-all duration-300">
                <div class="p-6 border-b border-gray-100">
                    <h3 class="text-xl font-bold text-navy-900">Essential</h3>
                    <p class="text-gray-500 text-sm mt-1">Perfect for small businesses</p>
                    <div class="mt-4">
                        <span class="text-4xl font-bold text-navy-900">$3,500</span>
                        <span class="text-gray-500">/ one-time</span>
                    </div>
                </div>
                <div class="p-6">
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-center gap-2 text-sm">
                            <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                            Up to 10 pages
                        </li>
                        <li class="flex items-center gap-2 text-sm">
                            <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                            Contact form
                        </li>
                        <li class="flex items-center gap-2 text-sm">
                            <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                            Mobile responsive
                        </li>
                        <li class="flex items-center gap-2 text-sm">
                            <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                            Basic SEO setup
                        </li>
                        <li class="flex items-center gap-2 text-sm">
                            <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                            1 month support
                        </li>
                    </ul>
                    <a href="/contact" class="block w-full text-center border border-emerald-600 text-emerald-600 py-3 font-semibold hover:bg-emerald-600 hover:text-white transition">
                        Get Started
                    </a>
                </div>
            </div>

            <!-- Professional Corporate -->
            <div class="bg-white border-2 border-emerald-500 hover:shadow-xl transition-all duration-300 relative">
                <div class="absolute -top-4 left-1/2 transform -translate-x-1/2 bg-emerald-600 text-white px-4 py-1 text-sm font-semibold">
                    MOST POPULAR
                </div>
                <div class="p-6 border-b border-gray-100">
                    <h3 class="text-xl font-bold text-navy-900">Professional</h3>
                    <p class="text-gray-500 text-sm mt-1">For growing businesses</p>
                    <div class="mt-4">
                        <span class="text-4xl font-bold text-navy-900">$6,500</span>
                        <span class="text-gray-500">/ one-time</span>
                    </div>
                </div>
                <div class="p-6">
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-center gap-2 text-sm">
                            <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                            Up to 25 pages
                        </li>
                        <li class="flex items-center gap-2 text-sm">
                            <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                            Custom design & branding
                        </li>
                        <li class="flex items-center gap-2 text-sm">
                            <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                            CMS integration
                        </li>
                        <li class="flex items-center gap-2 text-sm">
                            <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                            Advanced SEO
                        </li>
                        <li class="flex items-center gap-2 text-sm">
                            <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                            Performance optimized
                        </li>
                        <li class="flex items-center gap-2 text-sm">
                            <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                            6 months support
                        </li>
                    </ul>
                    <a href="/contact" class="block w-full text-center bg-emerald-600 text-white py-3 font-semibold hover:bg-emerald-500 transition">
                        Get Started
                    </a>
                </div>
            </div>

            <!-- Enterprise Corporate -->
            <div class="bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-xl transition-all duration-300">
                <div class="p-6 border-b border-gray-100">
                    <h3 class="text-xl font-bold text-navy-900">Enterprise</h3>
                    <p class="text-gray-500 text-sm mt-1">For large organizations</p>
                    <div class="mt-4">
                        <span class="text-4xl font-bold text-navy-900">Custom</span>
                    </div>
                </div>
                <div class="p-6">
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-center gap-2 text-sm">
                            <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                            Unlimited pages
                        </li>
                        <li class="flex items-center gap-2 text-sm">
                            <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                            Custom functionality
                        </li>
                        <li class="flex items-center gap-2 text-sm">
                            <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                            API integrations
                        </li>
                        <li class="flex items-center gap-2 text-sm">
                            <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                            Dedicated account manager
                        </li>
                        <li class="flex items-center gap-2 text-sm">
                            <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                            24/7 priority support
                        </li>
                        <li class="flex items-center gap-2 text-sm">
                            <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
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
                <h2 class="text-3xl md:text-4xl font-bold text-navy-900 mb-4 font-display">Corporate Website Success Stories</h2>
                <div class="w-20 h-1 bg-emerald-500 mx-auto"></div>
                <p class="text-gray-600 mt-6 max-w-2xl mx-auto">
                    See how we've helped businesses establish a powerful online presence
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Project 1 -->
                <div class="group bg-white overflow-hidden border border-gray-200 hover:border-emerald-300 hover:shadow-xl transition-all duration-300">
                    <div class="relative h-56 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                             alt="Tech Startup Website" 
                             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-navy-900/60 to-transparent"></div>
                        <div class="absolute bottom-4 left-4">
                            <span class="bg-emerald-600 text-white text-xs px-3 py-1">Tech Startup</span>
                        </div>
                    </div>
                    <div class="p-5">
                        <h3 class="font-bold text-navy-900 mb-2">InnovateTech</h3>
                        <p class="text-gray-500 text-sm mb-3">215% increase in qualified leads</p>
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
                        <img src="https://images.unsplash.com/photo-1556761175-4b46a572b786?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                             alt="Law Firm Website" 
                             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-navy-900/60 to-transparent"></div>
                        <div class="absolute bottom-4 left-4">
                            <span class="bg-emerald-600 text-white text-xs px-3 py-1">Legal Services</span>
                        </div>
                    </div>
                    <div class="p-5">
                        <h3 class="font-bold text-navy-900 mb-2">Anderson & Associates</h3>
                        <p class="text-gray-500 text-sm mb-3">178% increase in client inquiries</p>
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
                        <img src="https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                             alt="Financial Services" 
                             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-navy-900/60 to-transparent"></div>
                        <div class="absolute bottom-4 left-4">
                            <span class="bg-emerald-600 text-white text-xs px-3 py-1">Finance</span>
                        </div>
                    </div>
                    <div class="p-5">
                        <h3 class="font-bold text-navy-900 mb-2">Capital Wealth</h3>
                        <p class="text-gray-500 text-sm mb-3">245% growth in online presence</p>
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
                <h3 class="font-semibold text-navy-900 mb-2">How long does it take to build a corporate website?</h3>
                <p class="text-gray-500 text-sm">Typically 6-10 weeks depending on complexity and features required.</p>
            </div>
            <div>
                <h3 class="font-semibold text-navy-900 mb-2">Do you offer content creation services?</h3>
                <p class="text-gray-500 text-sm">Yes, we provide professional copywriting and content creation services.</p>
            </div>
            <div>
                <h3 class="font-semibold text-navy-900 mb-2">Can I update the website myself?</h3>
                <p class="text-gray-500 text-sm">Absolutely! We provide an easy-to-use CMS so you can manage content yourself.</p>
            </div>
            <div>
                <h3 class="font-semibold text-navy-900 mb-2">What about ongoing maintenance?</h3>
                <p class="text-gray-500 text-sm">We offer affordable maintenance plans to keep your website secure and updated.</p>
            </div>
            <div>
                <h3 class="font-semibold text-navy-900 mb-2">Do you provide hosting?</h3>
                <p class="text-gray-500 text-sm">Yes, we offer reliable, secure hosting with 99.9% uptime guarantee.</p>
            </div>
            <div>
                <h3 class="font-semibold text-navy-900 mb-2">Will my website be mobile-friendly?</h3>
                <p class="text-gray-500 text-sm">Yes, all our websites are fully responsive across all devices.</p>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-gradient-to-r from-emerald-600 to-emerald-500 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4 font-display">Ready to Elevate Your Corporate Presence?</h2>
            <p class="text-emerald-100 mb-8 max-w-2xl mx-auto">
                Let's build a professional website that showcases your brand and drives business growth.
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