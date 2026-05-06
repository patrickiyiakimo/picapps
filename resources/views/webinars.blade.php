<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webinars - Alta Digital Agency</title>
    
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
            <div class="max-w-3xl">
                <div class="inline-flex items-center gap-2 bg-emerald-500/20 backdrop-blur-sm text-emerald-300 px-4 py-2 mb-6 border border-emerald-500/30">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.536 5.464l2.828 2.828a2 2 0 010 2.828l-2.828 2.828" stroke="currentColor" fill="none"/>
                        <path d="M14 10h4v4h-4V10z" fill="currentColor"/>
                    </svg>
                    <span class="text-sm font-semibold uppercase tracking-wider">Live & Recorded</span>
                </div>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 font-display">
                    Expert-Led 
                    <span class="bg-gradient-to-r from-emerald-400 to-emerald-300 bg-clip-text text-transparent">Webinars</span>
                </h1>
                <p class="text-gray-300 text-lg md:text-xl leading-relaxed">
                    Learn from industry experts, discover latest trends, and gain actionable insights to grow your digital presence.
                </p>
            </div>
        </div>
    </div>

    <!-- Upcoming Webinars Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="flex justify-between items-center mb-8">
            <div>
                <h2 class="text-2xl md:text-3xl font-bold text-navy-900 font-display">🎥 Upcoming Webinars</h2>
                <p class="text-gray-600 mt-2">Join us live and get your questions answered</p>
            </div>
            <div class="hidden md:block">
                <span class="text-sm text-emerald-600 font-semibold">Next session in 3 days</span>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Upcoming Webinar 1 -->
            <div class="bg-white border-2 border-emerald-500 hover:shadow-xl transition-all duration-300 overflow-hidden">
                <div class="relative">
                    <div class="absolute top-4 right-4 z-10">
                        <span class="bg-red-500 text-white text-xs px-3 py-1 animate-pulse">LIVE SOON</span>
                    </div>
                    <div class="relative h-56 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" 
                             alt="Webinar banner" 
                             class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-navy-900/60 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 text-white">
                            <div class="flex items-center gap-4 text-sm">
                                <span>📅 March 25, 2024</span>
                                <span>⏰ 11:00 AM EST</span>
                                <span>⏱️ 60 min</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="bg-emerald-100 text-emerald-700 text-xs px-2 py-1">Web Development</span>
                        <span class="bg-blue-100 text-blue-700 text-xs px-2 py-1">Free</span>
                    </div>
                    <h3 class="text-xl font-bold text-navy-900 mb-3">The Future of Web Development: AI-Powered Applications</h3>
                    <p class="text-gray-600 text-sm mb-4">
                        Discover how artificial intelligence is revolutionizing web development and learn practical ways to integrate AI into your projects.
                    </p>
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center gap-2">
                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" 
                                 alt="Speaker" 
                                 class="w-10 h-10 rounded-full object-cover">
                            <div>
                                <p class="text-sm font-semibold text-navy-900">John Anderson</p>
                                <p class="text-xs text-gray-500">Founder & CEO, Alta</p>
                            </div>
                        </div>
                        <a href="#" class="bg-emerald-600 text-white px-6 py-2 font-semibold text-sm hover:bg-emerald-500 transition">
                            Register Now →
                        </a>
                    </div>
                </div>
            </div>

            <!-- Upcoming Webinar 2 -->
            <div class="bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-xl transition-all duration-300 overflow-hidden">
                <div class="relative">
                    <div class="absolute top-4 right-4 z-10">
                        <span class="bg-gray-500 text-white text-xs px-3 py-1">Limited Seats</span>
                    </div>
                    <div class="relative h-56 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" 
                             alt="Webinar banner" 
                             class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-navy-900/60 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 text-white">
                            <div class="flex items-center gap-4 text-sm">
                                <span>📅 April 5, 2024</span>
                                <span>⏰ 1:00 PM EST</span>
                                <span>⏱️ 45 min</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="bg-emerald-100 text-emerald-700 text-xs px-2 py-1">Mobile Apps</span>
                        <span class="bg-green-100 text-green-700 text-xs px-2 py-1">Free</span>
                    </div>
                    <h3 class="text-xl font-bold text-navy-900 mb-3">Flutter vs React Native: Choosing the Right Framework</h3>
                    <p class="text-gray-600 text-sm mb-4">
                        A comprehensive comparison of the two leading cross-platform frameworks to help you make the right decision for your next project.
                    </p>
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center gap-2">
                            <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" 
                                 alt="Speaker" 
                                 class="w-10 h-10 rounded-full object-cover">
                            <div>
                                <p class="text-sm font-semibold text-navy-900">Sarah Chen</p>
                                <p class="text-xs text-gray-500">CTO, Alta</p>
                            </div>
                        </div>
                        <a href="#" class="bg-emerald-600 text-white px-6 py-2 font-semibold text-sm hover:bg-emerald-500 transition">
                            Register Now →
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Featured Webinars Section -->
    <div class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-2xl md:text-3xl font-bold text-navy-900 mb-4 font-display">📺 Featured Recordings</h2>
                <div class="w-16 h-0.5 bg-emerald-500 mx-auto"></div>
                <p class="text-gray-600 mt-4">Watch our most popular webinars on demand</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Featured 1 -->
                <div class="bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-xl transition-all duration-300">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                             alt="Webinar thumbnail" 
                             class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity duration-300">
                            <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center cursor-pointer">
                                <div class="w-0 h-0 border-t-8 border-b-8 border-l-12 border-t-transparent border-b-transparent border-l-emerald-600 ml-1"></div>
                            </div>
                        </div>
                        <div class="absolute bottom-2 left-2">
                            <span class="bg-emerald-600 text-white text-xs px-2 py-1">Most Watched</span>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="text-xs text-gray-500">📅 Jan 15, 2024</span>
                            <span class="text-xs text-gray-500">⏱️ 55 min</span>
                        </div>
                        <h3 class="font-bold text-navy-900 mb-2">E-commerce SEO: Boost Your Rankings in 2024</h3>
                        <p class="text-gray-500 text-xs mb-3">Learn proven SEO strategies to drive organic traffic to your online store.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-1">
                                <span class="text-yellow-400">★★★★★</span>
                                <span class="text-xs text-gray-500">(124 ratings)</span>
                            </div>
                            <a href="#" class="text-emerald-600 text-sm font-semibold hover:text-emerald-500">Watch Now →</a>
                        </div>
                    </div>
                </div>

                <!-- Featured 2 -->
                <div class="bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-xl transition-all duration-300">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1586717791821-3f44a563fa4c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                             alt="Webinar thumbnail" 
                             class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity duration-300">
                            <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center cursor-pointer">
                                <div class="w-0 h-0 border-t-8 border-b-8 border-l-12 border-t-transparent border-b-transparent border-l-emerald-600 ml-1"></div>
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="text-xs text-gray-500">📅 Dec 10, 2023</span>
                            <span class="text-xs text-gray-500">⏱️ 62 min</span>
                        </div>
                        <h3 class="font-bold text-navy-900 mb-2">UI/UX Trends That Will Define 2024</h3>
                        <p class="text-gray-500 text-xs mb-3">Stay ahead with the latest design trends and user experience best practices.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-1">
                                <span class="text-yellow-400">★★★★★</span>
                                <span class="text-xs text-gray-500">(98 ratings)</span>
                            </div>
                            <a href="#" class="text-emerald-600 text-sm font-semibold hover:text-emerald-500">Watch Now →</a>
                        </div>
                    </div>
                </div>

                <!-- Featured 3 -->
                <div class="bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-xl transition-all duration-300">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                             alt="Webinar thumbnail" 
                             class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity duration-300">
                            <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center cursor-pointer">
                                <div class="w-0 h-0 border-t-8 border-b-8 border-l-12 border-t-transparent border-b-transparent border-l-emerald-600 ml-1"></div>
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="text-xs text-gray-500">📅 Nov 5, 2023</span>
                            <span class="text-xs text-gray-500">⏱️ 48 min</span>
                        </div>
                        <h3 class="font-bold text-navy-900 mb-2">Headless Commerce: The Future of E-commerce</h3>
                        <p class="text-gray-500 text-xs mb-3">Understanding headless architecture and its benefits for online stores.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-1">
                                <span class="text-yellow-400">★★★★★</span>
                                <span class="text-xs text-gray-500">(87 ratings)</span>
                            </div>
                            <a href="#" class="text-emerald-600 text-sm font-semibold hover:text-emerald-500">Watch Now →</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- All Webinars Grid -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-navy-900 mb-4 font-display">📚 All Webinars</h2>
            <div class="w-16 h-0.5 bg-emerald-500 mx-auto"></div>
            <p class="text-gray-600 mt-4">Browse our complete library of expert-led sessions</p>
        </div>

        <!-- Search Bar -->
        <div class="max-w-md mx-auto mb-8">
            <div class="relative">
                <input type="text" placeholder="Search webinars..." 
                       class="w-full px-4 py-3 pl-10 border border-gray-300 focus:outline-none focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/20">
                <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </div>
        </div>

        <div class="space-y-4">
            <!-- Webinar Row 1 -->
            <div class="bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-md transition-all duration-300">
                <div class="flex flex-col md:flex-row">
                    <div class="md:w-48 h-32 relative">
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" 
                             alt="Webinar" 
                             class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black/30 flex items-center justify-center opacity-0 hover:opacity-100 transition">
                            <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center">
                                <div class="w-0 h-0 border-t-6 border-b-6 border-l-8 border-t-transparent border-b-transparent border-l-emerald-600 ml-1"></div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-1 p-4">
                        <div class="flex flex-wrap items-center gap-3 mb-2">
                            <span class="text-xs bg-emerald-100 text-emerald-700 px-2 py-0.5">Web Development</span>
                            <span class="text-xs text-gray-500">📅 Feb 20, 2024</span>
                            <span class="text-xs text-gray-500">⏱️ 50 min</span>
                        </div>
                        <h3 class="font-bold text-navy-900 mb-2">Building Scalable APIs with Laravel</h3>
                        <p class="text-gray-500 text-sm mb-3">Learn best practices for building robust, scalable APIs using Laravel framework.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=50&q=80" 
                                     alt="Speaker" 
                                     class="w-6 h-6 rounded-full object-cover">
                                <span class="text-xs text-gray-600">John Anderson</span>
                            </div>
                            <a href="#" class="text-emerald-600 text-sm font-semibold hover:text-emerald-500">Watch Recording →</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Webinar Row 2 -->
            <div class="bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-md transition-all duration-300">
                <div class="flex flex-col md:flex-row">
                    <div class="md:w-48 h-32 relative">
                        <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" 
                             alt="Webinar" 
                             class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black/30 flex items-center justify-center opacity-0 hover:opacity-100 transition">
                            <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center">
                                <div class="w-0 h-0 border-t-6 border-b-6 border-l-8 border-t-transparent border-b-transparent border-l-emerald-600 ml-1"></div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-1 p-4">
                        <div class="flex flex-wrap items-center gap-3 mb-2">
                            <span class="text-xs bg-emerald-100 text-emerald-700 px-2 py-0.5">Mobile Apps</span>
                            <span class="text-xs text-gray-500">📅 Feb 10, 2024</span>
                            <span class="text-xs text-gray-500">⏱️ 55 min</span>
                        </div>
                        <h3 class="font-bold text-navy-900 mb-2">Flutter State Management: Provider vs BLoC</h3>
                        <p class="text-gray-500 text-sm mb-3">Deep dive into state management solutions for Flutter applications.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&auto=format&fit=crop&w=50&q=80" 
                                     alt="Speaker" 
                                     class="w-6 h-6 rounded-full object-cover">
                                <span class="text-xs text-gray-600">Sarah Chen</span>
                            </div>
                            <a href="#" class="text-emerald-600 text-sm font-semibold hover:text-emerald-500">Watch Recording →</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Webinar Row 3 -->
            <div class="bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-md transition-all duration-300">
                <div class="flex flex-col md:flex-row">
                    <div class="md:w-48 h-32 relative">
                        <img src="https://images.unsplash.com/photo-1472851294608-062f824d29cc?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" 
                             alt="Webinar" 
                             class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black/30 flex items-center justify-center opacity-0 hover:opacity-100 transition">
                            <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center">
                                <div class="w-0 h-0 border-t-6 border-b-6 border-l-8 border-t-transparent border-b-transparent border-l-emerald-600 ml-1"></div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-1 p-4">
                        <div class="flex flex-wrap items-center gap-3 mb-2">
                            <span class="text-xs bg-emerald-100 text-emerald-700 px-2 py-0.5">E-commerce</span>
                            <span class="text-xs text-gray-500">📅 Jan 25, 2024</span>
                            <span class="text-xs text-gray-500">⏱️ 65 min</span>
                        </div>
                        <h3 class="font-bold text-navy-900 mb-2">Shopify vs WooCommerce: Which One to Choose?</h3>
                        <p class="text-gray-500 text-sm mb-3">Comprehensive comparison of the leading e-commerce platforms to help you decide.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?ixlib=rb-4.0.3&auto=format&fit=crop&w=50&q=80" 
                                     alt="Speaker" 
                                     class="w-6 h-6 rounded-full object-cover">
                                <span class="text-xs text-gray-600">Michael Rodriguez</span>
                            </div>
                            <a href="#" class="text-emerald-600 text-sm font-semibold hover:text-emerald-500">Watch Recording →</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Load More Button -->
        <div class="text-center mt-8">
            <a href="#" class="inline-flex items-center gap-2 text-emerald-600 font-semibold hover:text-emerald-500">
                Load More Webinars
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </a>
        </div>
    </div>

    <!-- Host a Webinar CTA -->
    <div class="bg-gradient-to-r from-emerald-600 to-emerald-500 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-2xl md:text-3xl font-bold text-white mb-4 font-display">Interested in Hosting a Webinar?</h2>
            <p class="text-emerald-100 mb-8 max-w-2xl mx-auto">
                Share your expertise with our community of digital professionals. Partner with us to reach thousands of engaged learners.
            </p>
            <a href="/contact" class="inline-flex items-center gap-2 bg-white text-emerald-600 px-8 py-3 font-semibold hover:bg-gray-50 transition-all duration-300 transform hover:scale-105">
                Become a Speaker
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                </svg>
            </a>
        </div>
    </div>

    <!-- Newsletter Signup -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="bg-white border border-gray-200 p-8 text-center">
            <h3 class="text-xl font-bold text-navy-900 mb-3 font-display">Never Miss a Webinar</h3>
            <p class="text-gray-600 mb-6 max-w-md mx-auto">
                Subscribe to get notified about upcoming webinars and access to exclusive content.
            </p>
            <form class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto">
                <input type="email" placeholder="Enter your email address" 
                       class="flex-1 px-4 py-3 border border-gray-300 focus:outline-none focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/20">
                <button type="submit" class="bg-emerald-600 text-white px-6 py-3 font-semibold hover:bg-emerald-500 transition">
                    Subscribe
                </button>
            </form>
            <p class="text-xs text-gray-400 mt-3">No spam. Unsubscribe anytime.</p>
        </div>
    </div>

    @include('layouts.footer')
</body>
</html>