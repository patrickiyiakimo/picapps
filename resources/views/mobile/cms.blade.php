<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS Development - Alta Digital Agency</title>
    
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
                        <span class="text-sm font-semibold uppercase tracking-wider">CMS Development</span>
                    </div>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 font-display">
                        Take Control of Your
                        <span class="bg-gradient-to-r from-emerald-400 to-emerald-300 bg-clip-text text-transparent">Content with Ease</span>
                    </h1>
                    <p class="text-gray-300 text-lg mb-8 leading-relaxed">
                        Custom CMS solutions that empower you to manage your website content effortlessly, without technical expertise.
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
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" 
                         alt="CMS Dashboard Interface" 
                         class="rounded-lg shadow-2xl">
                    <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-emerald-600/20 rounded-full filter blur-2xl"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- CMS Platforms Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-navy-900 mb-4 font-display">Popular CMS Platforms We Master</h2>
            <div class="w-20 h-1 bg-emerald-500 mx-auto"></div>
            <p class="text-gray-600 mt-6 max-w-2xl mx-auto">
                We build on the platforms that best fit your business needs
            </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
            <!-- WordPress -->
            <div class="bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300 p-6 text-center">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/wordpress/wordpress-original.svg" alt="WordPress" class="w-16 h-16 mx-auto mb-3">
                <h3 class="font-bold text-navy-900">WordPress</h3>
                <p class="text-xs text-gray-500 mt-1">Most Popular CMS</p>
            </div>

            <!-- Laravel Custom CMS -->
            <div class="bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300 p-6 text-center">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg" alt="Laravel CMS" class="w-16 h-16 mx-auto mb-3">
                <h3 class="font-bold text-navy-900">Laravel CMS</h3>
                <p class="text-xs text-gray-500 mt-1">Custom Solution</p>
            </div>

            <!-- Drupal -->
            <div class="bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300 p-6 text-center">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/drupal/drupal-original.svg" alt="Drupal" class="w-16 h-16 mx-auto mb-3">
                <h3 class="font-bold text-navy-900">Drupal</h3>
                <p class="text-xs text-gray-500 mt-1">Enterprise CMS</p>
            </div>

            <!-- Strapi -->
            <div class="bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300 p-6 text-center">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/strapi/strapi-original.svg" alt="Strapi" class="w-16 h-16 mx-auto mb-3">
                <h3 class="font-bold text-navy-900">Strapi</h3>
                <p class="text-xs text-gray-500 mt-1">Headless CMS</p>
            </div>

            <!-- Contentful -->
            <div class="bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300 p-6 text-center">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/contentful/contentful-original.svg" alt="Contentful" class="w-16 h-16 mx-auto mb-3">
                <h3 class="font-bold text-navy-900">Contentful</h3>
                <p class="text-xs text-gray-500 mt-1">API-first CMS</p>
            </div>
        </div>
    </div>

    <!-- Headless CMS vs Traditional CMS -->
    <div class="bg-gray-50 py-16 md:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-navy-900 mb-4 font-display">Headless CMS vs Traditional CMS</h2>
                <div class="w-20 h-1 bg-emerald-500 mx-auto"></div>
                <p class="text-gray-600 mt-6 max-w-2xl mx-auto">
                    Choose the right architecture for your content management needs
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Traditional CMS -->
                <div class="bg-white p-6 border border-gray-200 hover:border-emerald-300 transition">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-12 h-12 bg-emerald-100 flex items-center justify-center rounded-full">
                            <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-navy-900">Traditional CMS</h3>
                    </div>
                    <p class="text-gray-500 text-sm mb-4">All-in-one solution where the backend and frontend are tightly coupled.</p>
                    <ul class="space-y-2 text-sm">
                        <li class="flex items-center gap-2">✓ All-in-one solution</li>
                        <li class="flex items-center gap-2">✓ Quick to set up</li>
                        <li class="flex items-center gap-2">✓ Best for blogs and simple sites</li>
                        <li class="flex items-center gap-2">✓ Limited flexibility</li>
                    </ul>
                </div>

                <!-- Headless CMS -->
                <div class="bg-white p-6 border-2 border-emerald-500 transition">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-12 h-12 bg-emerald-600 flex items-center justify-center rounded-full">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.66 0 3-4 3-9s-1.34-9-3-9m0 18c-1.66 0-3-4-3-9s1.34-9 3-9"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-navy-900">Headless CMS</h3>
                    </div>
                    <p class="text-gray-500 text-sm mb-4">Decoupled architecture where content is delivered via API to any frontend.</p>
                    <ul class="space-y-2 text-sm">
                        <li class="flex items-center gap-2">✓ Omnichannel delivery</li>
                        <li class="flex items-center gap-2">✓ Unlimited flexibility</li>
                        <li class="flex items-center gap-2">✓ Better performance</li>
                        <li class="flex items-center gap-2">✓ Future-proof architecture</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Key Features Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-navy-900 mb-4 font-display">Powerful CMS Features</h2>
            <div class="w-20 h-1 bg-emerald-500 mx-auto"></div>
            <p class="text-gray-600 mt-6 max-w-2xl mx-auto">
                Everything you need to manage your content with confidence
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Feature 1 -->
            <div class="bg-white p-6 border border-gray-200 hover:border-emerald-300 transition-all duration-300">
                <div class="w-12 h-12 bg-emerald-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-navy-900 mb-2">Intuitive Admin Panel</h3>
                <p class="text-gray-500 text-sm">User-friendly dashboard that makes content management effortless for non-technical users.</p>
            </div>

            <!-- Feature 2 -->
            <div class="bg-white p-6 border border-gray-200 hover:border-emerald-300 transition-all duration-300">
                <div class="w-12 h-12 bg-emerald-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-navy-900 mb-2">Drag & Drop Editor</h3>
                <p class="text-gray-500 text-sm">Create and arrange content blocks visually without writing any code.</p>
            </div>

            <!-- Feature 3 -->
            <div class="bg-white p-6 border border-gray-200 hover:border-emerald-300 transition-all duration-300">
                <div class="w-12 h-12 bg-emerald-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-navy-900 mb-2">SEO Optimization</h3>
                <p class="text-gray-500 text-sm">Built-in SEO tools to help your content rank higher in search results.</p>
            </div>

            <!-- Feature 4 -->
            <div class="bg-white p-6 border border-gray-200 hover:border-emerald-300 transition-all duration-300">
                <div class="w-12 h-12 bg-emerald-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-navy-900 mb-2">Role-Based Access</h3>
                <p class="text-gray-500 text-sm">Set permissions for different user roles (admin, editor, author, contributor).</p>
            </div>

            <!-- Feature 5 -->
            <div class="bg-white p-6 border border-gray-200 hover:border-emerald-300 transition-all duration-300">
                <div class="w-12 h-12 bg-emerald-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-navy-900 mb-2">Media Management</h3>
                <p class="text-gray-500 text-sm">Organize images, videos, and documents with a powerful media library.</p>
            </div>

            <!-- Feature 6 -->
            <div class="bg-white p-6 border border-gray-200 hover:border-emerald-300 transition-all duration-300">
                <div class="w-12 h-12 bg-emerald-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-navy-900 mb-2">Version Control</h3>
                <p class="text-gray-500 text-sm">Track changes, revert to previous versions, and never lose your content.</p>
            </div>
        </div>
    </div>

    <!-- Pricing Section -->
    <div id="pricing" class="bg-gray-50 py-16 md:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-navy-900 mb-4 font-display">CMS Development Pricing</h2>
                <div class="w-20 h-1 bg-emerald-500 mx-auto"></div>
                <p class="text-gray-600 mt-6 max-w-2xl mx-auto">
                    Choose the right CMS solution for your business
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- WordPress CMS -->
                <div class="bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-xl transition-all duration-300">
                    <div class="p-6 border-b border-gray-100">
                        <h3 class="text-xl font-bold text-navy-900">WordPress CMS</h3>
                        <p class="text-gray-500 text-sm mt-1">Perfect for blogs and business websites</p>
                        <div class="mt-4">
                            <span class="text-4xl font-bold text-navy-900">$2,500</span>
                            <span class="text-gray-500">+</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-center gap-2 text-sm">
                                <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                                Custom theme development
                            </li>
                            <li class="flex items-center gap-2 text-sm">
                                <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                                Plugin integration
                            </li>
                            <li class="flex items-center gap-2 text-sm">
                                <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                                SEO optimization
                            </li>
                            <li class="flex items-center gap-2 text-sm">
                                <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                                Mobile responsive
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

                <!-- Custom Laravel CMS -->
                <div class="bg-white border-2 border-emerald-500 hover:shadow-xl transition-all duration-300 relative">
                    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2 bg-emerald-600 text-white px-4 py-1 text-sm font-semibold">
                        RECOMMENDED
                    </div>
                    <div class="p-6 border-b border-gray-100">
                        <h3 class="text-xl font-bold text-navy-900">Custom Laravel CMS</h3>
                        <p class="text-gray-500 text-sm mt-1">Tailored to your specific needs</p>
                        <div class="mt-4">
                            <span class="text-4xl font-bold text-navy-900">$5,000</span>
                            <span class="text-gray-500">+</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-center gap-2 text-sm">
                                <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                                Fully custom development
                            </li>
                            <li class="flex items-center gap-2 text-sm">
                                <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                                Custom admin dashboard
                            </li>
                            <li class="flex items-center gap-2 text-sm">
                                <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                                Custom workflows
                            </li>
                            <li class="flex items-center gap-2 text-sm">
                                <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                                Role-based access control
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

                <!-- Headless CMS -->
                <div class="bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-xl transition-all duration-300">
                    <div class="p-6 border-b border-gray-100">
                        <h3 class="text-xl font-bold text-navy-900">Headless CMS</h3>
                        <p class="text-gray-500 text-sm mt-1">For omnichannel content delivery</p>
                        <div class="mt-4">
                            <span class="text-4xl font-bold text-navy-900">$7,500</span>
                            <span class="text-gray-500">+</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-center gap-2 text-sm">
                                <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                                API-first architecture
                            </li>
                            <li class="flex items-center gap-2 text-sm">
                                <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                                Multi-channel delivery
                            </li>
                            <li class="flex items-center gap-2 text-sm">
                                <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                                React/Vue frontend
                            </li>
                            <li class="flex items-center gap-2 text-sm">
                                <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                                Blazing fast performance
                            </li>
                            <li class="flex items-center gap-2 text-sm">
                                <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                                6 months support
                            </li>
                        </ul>
                        <a href="/contact" class="block w-full text-center border border-emerald-600 text-emerald-600 py-3 font-semibold hover:bg-emerald-600 hover:text-white transition">
                            Get Started
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Showcase -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-navy-900 mb-4 font-display">CMS Success Stories</h2>
            <div class="w-20 h-1 bg-emerald-500 mx-auto"></div>
            <p class="text-gray-600 mt-6 max-w-2xl mx-auto">
                See how we've helped businesses manage their content efficiently
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Project 1 -->
            <div class="group bg-white overflow-hidden border border-gray-200 hover:border-emerald-300 hover:shadow-xl transition-all duration-300">
                <div class="relative h-56 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1499750310107-5fef28a66643?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="News Magazine CMS" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-navy-900/60 to-transparent"></div>
                    <div class="absolute bottom-4 left-4">
                        <span class="bg-emerald-600 text-white text-xs px-3 py-1">News Portal</span>
                    </div>
                </div>
                <div class="p-5">
                    <h3 class="font-bold text-navy-900 mb-2">Daily News CMS</h3>
                    <p class="text-gray-500 text-sm mb-3">Custom CMS for a major news publication</p>
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
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="E-learning CMS" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-navy-900/60 to-transparent"></div>
                    <div class="absolute bottom-4 left-4">
                        <span class="bg-emerald-600 text-white text-xs px-3 py-1">E-learning</span>
                    </div>
                </div>
                <div class="p-5">
                    <h3 class="font-bold text-navy-900 mb-2">LearnHub CMS</h3>
                    <p class="text-gray-500 text-sm mb-3">Headless CMS for online course platform</p>
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
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Corporate CMS" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-navy-900/60 to-transparent"></div>
                    <div class="absolute bottom-4 left-4">
                        <span class="bg-emerald-600 text-white text-xs px-3 py-1">Corporate</span>
                    </div>
                </div>
                <div class="p-5">
                    <h3 class="font-bold text-navy-900 mb-2">GlobalCorp CMS</h3>
                    <p class="text-gray-500 text-sm mb-3">Enterprise CMS for 50+ country websites</p>
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

    <!-- FAQ Section -->
    <div class="bg-gray-50 py-16 md:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-navy-900 mb-4 font-display">Frequently Asked Questions</h2>
                <div class="w-20 h-1 bg-emerald-500 mx-auto"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <div>
                    <h3 class="font-semibold text-navy-900 mb-2">What's the difference between WordPress and Custom CMS?</h3>
                    <p class="text-gray-500 text-sm">WordPress is great for blogs and basic websites. Custom CMS offers tailored functionality and complete control over your content structure.</p>
                </div>
                <div>
                    <h3 class="font-semibold text-navy-900 mb-2">Do I need technical skills to use the CMS?</h3>
                    <p class="text-gray-500 text-sm">No! We build intuitive admin panels that anyone can use, regardless of technical background.</p>
                </div>
                <div>
                    <h3 class="font-semibold text-navy-900 mb-2">Can I migrate my existing content?</h3>
                    <p class="text-gray-500 text-sm">Yes, we provide seamless migration from your current CMS or static website.</p>
                </div>
                <div>
                    <h3 class="font-semibold text-navy-900 mb-2">What about ongoing maintenance?</h3>
                    <p class="text-gray-500 text-sm">We offer maintenance plans including security updates, backups, and technical support.</p>
                </div>
                <div>
                    <h3 class="font-semibold text-navy-900 mb-2">Is my content secure?</h3>
                    <p class="text-gray-500 text-sm">Yes, we implement enterprise-grade security measures including SSL, firewalls, and regular security audits.</p>
                </div>
                <div>
                    <h3 class="font-semibold text-navy-900 mb-2">Can I add custom features later?</h3>
                    <p class="text-gray-500 text-sm">Absolutely! Our CMS solutions are built to be extensible with additional features as your business grows.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-gradient-to-r from-emerald-600 to-emerald-500 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4 font-display">Ready to Take Control of Your Content?</h2>
            <p class="text-emerald-100 mb-8 max-w-2xl mx-auto">
                Let's build a CMS that makes content management effortless and efficient.
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