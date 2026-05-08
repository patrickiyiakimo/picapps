<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cross-Platform App Development - Alta Digital Agency</title>
    
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
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"/>
                        </svg>
                        <span class="text-sm font-semibold uppercase tracking-wider">Cross-Platform Development</span>
                    </div>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 font-display">
                        Build Once,
                        <span class="bg-gradient-to-r from-emerald-400 to-emerald-300 bg-clip-text text-transparent">Run Everywhere</span>
                    </h1>
                    <p class="text-gray-300 text-lg mb-8 leading-relaxed">
                        Reach iOS and Android users with a single codebase. Save time, reduce costs, and accelerate your time to market.
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
                    <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" 
                         alt="Cross-Platform App Development" 
                         class="rounded-lg shadow-2xl">
                    <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-emerald-600/20 rounded-full filter blur-2xl"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Benefits Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-navy-900 mb-4 font-display">Why Choose Cross-Platform?</h2>
            <div class="w-20 h-1 bg-emerald-500 mx-auto"></div>
            <p class="text-gray-600 mt-6 max-w-2xl mx-auto">
                The smart choice for businesses looking to maximize their mobile reach
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center p-6 border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300">
                <div class="w-16 h-16 bg-emerald-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-navy-900 mb-2">40% Cost Savings</h3>
                <p class="text-gray-500 text-sm">Build once, deploy to multiple platforms at half the cost of native development.</p>
            </div>
            <div class="text-center p-6 border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300">
                <div class="w-16 h-16 bg-emerald-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 10h18M6 6h12M6 18h12M3 14h18"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-navy-900 mb-2">2x Faster Launch</h3>
                <p class="text-gray-500 text-sm">Single codebase means faster development and simultaneous releases.</p>
            </div>
            <div class="text-center p-6 border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300">
                <div class="w-16 h-16 bg-emerald-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.66 0 3-4 3-9s-1.34-9-3-9m0 18c-1.66 0-3-4-3-9s1.34-9 3-9"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-navy-900 mb-2">Wider Audience</h3>
                <p class="text-gray-500 text-sm">Reach both iOS and Android users simultaneously.</p>
            </div>
            <div class="text-center p-6 border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300">
                <div class="w-16 h-16 bg-emerald-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-navy-900 mb-2">Easier Maintenance</h3>
                <p class="text-gray-500 text-sm">Update one codebase, update all platforms instantly.</p>
            </div>
        </div>
    </div>

    <!-- Tech Stack Section -->
    <div class="bg-gray-50 py-16 md:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-navy-900 mb-4 font-display">Our Cross-Platform Tech Stack</h2>
                <div class="w-20 h-1 bg-emerald-500 mx-auto"></div>
                <p class="text-gray-600 mt-6 max-w-2xl mx-auto">
                    We use industry-leading frameworks for optimal performance
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Flutter -->
                <div class="bg-white border-2 border-emerald-500 hover:shadow-xl transition-all duration-300 p-8 text-center">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/flutter/flutter-original.svg" alt="Flutter" class="w-20 h-20 mx-auto mb-4">
                    <h3 class="text-xl font-bold text-navy-900">Flutter</h3>
                    <p class="text-gray-500 text-sm mt-2">Google's UI toolkit for building natively compiled applications for mobile, web, and desktop from a single codebase.</p>
                    <div class="mt-4 flex flex-wrap justify-center gap-2">
                        <span class="text-xs bg-emerald-100 text-emerald-700 px-2 py-1">Dart</span>
                        <span class="text-xs bg-emerald-100 text-emerald-700 px-2 py-1">Hot Reload</span>
                        <span class="text-xs bg-emerald-100 text-emerald-700 px-2 py-1">Native Performance</span>
                    </div>
                </div>

                <!-- React Native -->
                <div class="bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-xl transition-all duration-300 p-8 text-center">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" alt="React Native" class="w-20 h-20 mx-auto mb-4">
                    <h3 class="text-xl font-bold text-navy-900">React Native</h3>
                    <p class="text-gray-500 text-sm mt-2">Facebook's framework for building native apps using React. Write once, run on iOS and Android.</p>
                    <div class="mt-4 flex flex-wrap justify-center gap-2">
                        <span class="text-xs bg-emerald-100 text-emerald-700 px-2 py-1">JavaScript</span>
                        <span class="text-xs bg-emerald-100 text-emerald-700 px-2 py-1">Live Reload</span>
                        <span class="text-xs bg-emerald-100 text-emerald-700 px-2 py-1">Large Community</span>
                    </div>
                </div>

                <!-- .NET MAUI -->
                <div class="bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-xl transition-all duration-300 p-8 text-center">
                    <div class="w-20 h-20 mx-auto mb-4 flex items-center justify-center bg-emerald-100 rounded-full">
                        <svg class="w-12 h-12 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-navy-900">.NET MAUI</h3>
                    <p class="text-gray-500 text-sm mt-2">Microsoft's evolution of Xamarin.Forms for building native apps with .NET.</p>
                    <div class="mt-4 flex flex-wrap justify-center gap-2">
                        <span class="text-xs bg-emerald-100 text-emerald-700 px-2 py-1">C#</span>
                        <span class="text-xs bg-emerald-100 text-emerald-700 px-2 py-1">.NET 8</span>
                        <span class="text-xs bg-emerald-100 text-emerald-700 px-2 py-1">Enterprise Ready</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Flutter vs React Native Comparison -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-navy-900 mb-4 font-display">Flutter vs React Native</h2>
            <div class="w-20 h-1 bg-emerald-500 mx-auto"></div>
            <p class="text-gray-600 mt-6 max-w-2xl mx-auto">
                We help you choose the right framework for your project
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Flutter -->
            <div class="bg-white border-2 border-emerald-500 p-6 transition-all duration-300">
                <div class="flex items-center gap-3 mb-4">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/flutter/flutter-original.svg" alt="Flutter" class="w-10 h-10">
                    <h3 class="text-xl font-bold text-navy-900">Flutter</h3>
                </div>
                <ul class="space-y-3 text-sm">
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                        Best for pixel-perfect UI designs
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                        Superior performance and smooth animations
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                        Hot reload for rapid development
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                        Growing ecosystem and community
                    </li>
                </ul>
            </div>

            <!-- React Native -->
            <div class="bg-white border border-gray-200 hover:border-emerald-300 p-6 transition-all duration-300">
                <div class="flex items-center gap-3 mb-4">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" alt="React Native" class="w-10 h-10">
                    <h3 class="text-xl font-bold text-navy-900">React Native</h3>
                </div>
                <ul class="space-y-3 text-sm">
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                        Best for JavaScript/React developers
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                        Large community and mature ecosystem
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                        Most third-party libraries available
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                        Code reuse across web and mobile
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="bg-gray-50 py-16 md:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-navy-900 mb-4 font-display">Powerful Cross-Platform Features</h2>
                <div class="w-20 h-1 bg-emerald-500 mx-auto"></div>
                <p class="text-gray-600 mt-6 max-w-2xl mx-auto">
                    Everything you need for successful multi-platform apps
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-white p-6 border border-gray-200 hover:border-emerald-300 transition-all duration-300">
                    <div class="w-12 h-12 bg-emerald-100 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-navy-900 mb-2">Single Codebase</h3>
                    <p class="text-gray-500 text-sm">Write once, deploy to iOS, Android, and even web platforms.</p>
                </div>

                <!-- Feature 2 -->
                <div class="bg-white p-6 border border-gray-200 hover:border-emerald-300 transition-all duration-300">
                    <div class="w-12 h-12 bg-emerald-100 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-navy-900 mb-2">Native Performance</h3>
                    <p class="text-gray-500 text-sm">Compiled to native code for smooth, fast, responsive apps.</p>
                </div>

                <!-- Feature 3 -->
                <div class="bg-white p-6 border border-gray-200 hover:border-emerald-300 transition-all duration-300">
                    <div class="w-12 h-12 bg-emerald-100 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-navy-900 mb-2">Hot Reload</h3>
                    <p class="text-gray-500 text-sm">See changes instantly without recompiling the entire app.</p>
                </div>

                <!-- Feature 4 -->
                <div class="bg-white p-6 border border-gray-200 hover:border-emerald-300 transition-all duration-300">
                    <div class="w-12 h-12 bg-emerald-100 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-navy-900 mb-2">Platform-Specific Code</h3>
                    <p class="text-gray-500 text-sm">Write platform-specific code when needed for native features.</p>
                </div>

                <!-- Feature 5 -->
                <div class="bg-white p-6 border border-gray-200 hover:border-emerald-300 transition-all duration-300">
                    <div class="w-12 h-12 bg-emerald-100 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-navy-900 mb-2">Third-Party Integrations</h3>
                    <p class="text-gray-500 text-sm">Seamless integration with Firebase, Stripe, Google Maps, and more.</p>
                </div>

                <!-- Feature 6 -->
                <div class="bg-white p-6 border border-gray-200 hover:border-emerald-300 transition-all duration-300">
                    <div class="w-12 h-12 bg-emerald-100 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-navy-900 mb-2">Cross-Platform UI</h3>
                    <p class="text-gray-500 text-sm">Consistent UI across platforms with platform-specific adaptations.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- App Types We Build -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-navy-900 mb-4 font-display">What We Build with Cross-Platform</h2>
            <div class="w-20 h-1 bg-emerald-500 mx-auto"></div>
            <p class="text-gray-600 mt-6 max-w-2xl mx-auto">
                Versatile solutions for every industry and use case
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Business Apps -->
            <div class="bg-white rounded-lg overflow-hidden border border-gray-200 hover:border-emerald-300 transition-all duration-300 group">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Business Apps" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-5">
                    <h3 class="font-bold text-navy-900 text-lg mb-2">Business & Enterprise Apps</h3>
                    <p class="text-gray-500 text-sm">Internal tools, CRM, ERP, and workforce management.</p>
                </div>
            </div>

            <!-- Consumer Apps -->
            <div class="bg-white rounded-lg overflow-hidden border border-gray-200 hover:border-emerald-300 transition-all duration-300 group">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Consumer Apps" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-5">
                    <h3 class="font-bold text-navy-900 text-lg mb-2">Consumer Apps</h3>
                    <p class="text-gray-500 text-sm">Social media, lifestyle, and entertainment apps for mass audiences.</p>
                </div>
            </div>

            <!-- E-commerce Apps -->
            <div class="bg-white rounded-lg overflow-hidden border border-gray-200 hover:border-emerald-300 transition-all duration-300 group">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="E-commerce Apps" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-5">
                    <h3 class="font-bold text-navy-900 text-lg mb-2">E-commerce Apps</h3>
                    <p class="text-gray-500 text-sm">Mobile shopping with seamless checkout and payments.</p>
                </div>
            </div>

            <!-- On-Demand Apps -->
            <div class="bg-white rounded-lg overflow-hidden border border-gray-200 hover:border-emerald-300 transition-all duration-300 group">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1522869635100-9f4c5e86aa37?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="On-Demand Apps" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-5">
                    <h3 class="font-bold text-navy-900 text-lg mb-2">On-Demand Apps</h3>
                    <p class="text-gray-500 text-sm">Delivery, ride-hailing, booking, and service marketplace apps.</p>
                </div>
            </div>

            <!-- Fintech Apps -->
            <div class="bg-white rounded-lg overflow-hidden border border-gray-200 hover:border-emerald-300 transition-all duration-300 group">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Fintech Apps" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-5">
                    <h3 class="font-bold text-navy-900 text-lg mb-2">Fintech Apps</h3>
                    <p class="text-gray-500 text-sm">Banking, payments, budgeting, and investment platforms.</p>
                </div>
            </div>

            <!-- Healthcare Apps -->
            <div class="bg-white rounded-lg overflow-hidden border border-gray-200 hover:border-emerald-300 transition-all duration-300 group">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Healthcare Apps" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-5">
                    <h3 class="font-bold text-navy-900 text-lg mb-2">Healthcare Apps</h3>
                    <p class="text-gray-500 text-sm">Telemedicine, patient portals, and health tracking apps.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Development Process -->
    <div class="bg-gray-50 py-16 md:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-navy-900 mb-4 font-display">Our Cross-Platform Development Process</h2>
                <div class="w-20 h-1 bg-emerald-500 mx-auto"></div>
                <p class="text-gray-600 mt-6 max-w-2xl mx-auto">
                    A proven methodology to deliver successful cross-platform apps
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-5 lg:grid-cols-5 gap-6">
                <div class="text-center">
                    <div class="w-16 h-16 bg-emerald-600 text-white text-2xl font-bold flex items-center justify-center mx-auto mb-4">1</div>
                    <h3 class="text-lg font-bold text-navy-900 mb-2">Discovery</h3>
                    <p class="text-gray-500 text-sm">Requirements & planning</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-emerald-600 text-white text-2xl font-bold flex items-center justify-center mx-auto mb-4">2</div>
                    <h3 class="text-lg font-bold text-navy-900 mb-2">UI/UX Design</h3>
                    <p class="text-gray-500 text-sm">Wireframes & prototypes</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-emerald-600 text-white text-2xl font-bold flex items-center justify-center mx-auto mb-4">3</div>
                    <h3 class="text-lg font-bold text-navy-900 mb-2">Development</h3>
                    <p class="text-gray-500 text-sm">Agile sprints</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-emerald-600 text-white text-2xl font-bold flex items-center justify-center mx-auto mb-4">4</div>
                    <h3 class="text-lg font-bold text-navy-900 mb-2">Testing</h3>
                    <p class="text-gray-500 text-sm">QA & validation</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-emerald-600 text-white text-2xl font-bold flex items-center justify-center mx-auto mb-4">5</div>
                    <h3 class="text-lg font-bold text-navy-900 mb-2">Launch</h3>
                    <p class="text-gray-500 text-sm">App Stores & support</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Pricing Section -->
    <div id="pricing" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-navy-900 mb-4 font-display">Cross-Platform Pricing</h2>
            <div class="w-20 h-1 bg-emerald-500 mx-auto"></div>
            <p class="text-gray-600 mt-6 max-w-2xl mx-auto">
                One codebase, two platforms, better value
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Basic Plan -->
            <div class="bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-xl transition-all duration-300">
                <div class="p-6 border-b border-gray-100">
                    <h3 class="text-xl font-bold text-navy-900">Starter</h3>
                    <p class="text-gray-500 text-sm mt-1">Perfect for MVP</p>
                    <div class="mt-4">
                        <span class="text-4xl font-bold text-navy-900">$12,000</span>
                        <span class="text-gray-500">+</span>
                    </div>
                </div>
                <div class="p-6">
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-center gap-2 text-sm">
                            <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                            Core features only
                        </li>
                        <li class="flex items-center gap-2 text-sm">
                            <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                            iOS & Android apps
                        </li>
                        <li class="flex items-center gap-2 text-sm">
                            <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                            Basic UI/UX design
                        </li>
                        <li class="flex items-center gap-2 text-sm">
                            <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                            App Store & Play Store submission
                        </li>
                        <li class="flex items-center gap-2 text-sm">
                            <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                            1 month support
                        </li>
                    </ul>
                    <a href="/contact" class="block w-full text-center border border-emerald-600 text-emerald-600 py-3 font-semibold hover:bg-emerald-600 hover:text-white transition">
                        Get Quote
                    </a>
                </div>
            </div>

            <!-- Professional Plan (Most Popular) -->
            <div class="bg-white border-2 border-emerald-500 hover:shadow-xl transition-all duration-300 relative">
                <div class="absolute -top-4 left-1/2 transform -translate-x-1/2 bg-emerald-600 text-white px-4 py-1 text-sm font-semibold">
                    MOST POPULAR
                </div>
                <div class="p-6 border-b border-gray-100">
                    <h3 class="text-xl font-bold text-navy-900">Professional</h3>
                    <p class="text-gray-500 text-sm mt-1">For growing businesses</p>
                    <div class="mt-4">
                        <span class="text-4xl font-bold text-navy-900">$22,000</span>
                        <span class="text-gray-500">+</span>
                    </div>
                </div>
                <div class="p-6">
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-center gap-2 text-sm">
                            <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                            Advanced features
                        </li>
                        <li class="flex items-center gap-2 text-sm">
                            <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                            iOS, Android & Web
                        </li>
                        <li class="flex items-center gap-2 text-sm">
                            <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                            Custom UI/UX design
                        </li>
                        <li class="flex items-center gap-2 text-sm">
                            <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                            Backend & API integration
                        </li>
                        <li class="flex items-center gap-2 text-sm">
                            <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                            Push notifications
                        </li>
                        <li class="flex items-center gap-2 text-sm">
                            <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                            6 months support
                        </li>
                    </ul>
                    <a href="/contact" class="block w-full text-center bg-emerald-600 text-white py-3 font-semibold hover:bg-emerald-500 transition">
                        Get Quote
                    </a>
                </div>
            </div>

            <!-- Enterprise Plan -->
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
                            Unlimited features
                        </li>
                        <li class="flex items-center gap-2 text-sm">
                            <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                            Custom architecture
                        </li>
                        <li class="flex items-center gap-2 text-sm">
                            <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                            Enterprise security
                        </li>
                        <li class="flex items-center gap-2 text-sm">
                            <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                            Dedicated team
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
                <h2 class="text-3xl md:text-4xl font-bold text-navy-900 mb-4 font-display">Cross-Platform Success Stories</h2>
                <div class="w-20 h-1 bg-emerald-500 mx-auto"></div>
                <p class="text-gray-600 mt-6 max-w-2xl mx-auto">
                    See how we've helped businesses reach both platforms efficiently
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Project 1 -->
                <div class="group bg-white overflow-hidden border border-gray-200 hover:border-emerald-300 hover:shadow-xl transition-all duration-300">
                    <div class="relative h-56 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                             alt="Business App" 
                             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-navy-900/60 to-transparent"></div>
                        <div class="absolute bottom-4 left-4">
                            <span class="bg-emerald-600 text-white text-xs px-3 py-1">Enterprise</span>
                        </div>
                    </div>
                    <div class="p-5">
                        <h3 class="font-bold text-navy-900 mb-2">SalesForce Mobile</h3>
                        <p class="text-gray-500 text-sm mb-3">Cross-platform CRM reaching 100K+ users</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-1">
                                <span class="text-yellow-400">★★★★★</span>
                                <span class="text-xs text-gray-500">(4.9)</span>
                            </div>
                            <a href="#" class="text-emerald-600 text-sm font-semibold">View Case →</a>
                        </div>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="group bg-white overflow-hidden border border-gray-200 hover:border-emerald-300 hover:shadow-xl transition-all duration-300">
                    <div class="relative h-56 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                             alt="Consumer App" 
                             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-navy-900/60 to-transparent"></div>
                        <div class="absolute bottom-4 left-4">
                            <span class="bg-emerald-600 text-white text-xs px-3 py-1">Social Media</span>
                        </div>
                    </div>
                    <div class="p-5">
                        <h3 class="font-bold text-navy-900 mb-2">ConnectSocial</h3>
                        <p class="text-gray-500 text-sm mb-3">2M+ downloads across both stores</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-1">
                                <span class="text-yellow-400">★★★★★</span>
                                <span class="text-xs text-gray-500">(4.8)</span>
                            </div>
                            <a href="#" class="text-emerald-600 text-sm font-semibold">View Case →</a>
                        </div>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="group bg-white overflow-hidden border border-gray-200 hover:border-emerald-300 hover:shadow-xl transition-all duration-300">
                    <div class="relative h-56 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                             alt="E-commerce App" 
                             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-navy-900/60 to-transparent"></div>
                        <div class="absolute bottom-4 left-4">
                            <span class="bg-emerald-600 text-white text-xs px-3 py-1">E-commerce</span>
                        </div>
                    </div>
                    <div class="p-5">
                        <h3 class="font-bold text-navy-900 mb-2">ShopFast App</h3>
                        <p class="text-gray-500 text-sm mb-3">50% faster launch with single codebase</p>
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
                <h3 class="font-semibold text-navy-900 mb-2">How long does cross-platform development take?</h3>
                <p class="text-gray-500 text-sm">Typically 3-5 months for both platforms versus 6-9 months for native development.</p>
            </div>
            <div>
                <h3 class="font-semibold text-navy-900 mb-2">Is performance as good as native?</h3>
                <p class="text-gray-500 text-sm">Yes! Modern frameworks like Flutter and React Native compile to native code for near-native performance.</p>
            </div>
            <div>
                <h3 class="font-semibold text-navy-900 mb-2">Can I access device-specific features?</h3>
                <p class="text-gray-500 text-sm">Absolutely. Both frameworks allow platform-specific code when needed for device features.</p>
            </div>
            <div>
                <h3 class="font-semibold text-navy-900 mb-2">Do I need separate teams for each platform?</h3>
                <p class="text-gray-500 text-sm">No! One team can manage both platforms, reducing communication overhead and costs.</p>
            </div>
            <div>
                <h3 class="font-semibold text-navy-900 mb-2">What about UI consistency?</h3>
                <p class="text-gray-500 text-sm">We ensure platform-appropriate UI while maintaining brand consistency across both platforms.</p>
            </div>
            <div>
                <h3 class="font-semibold text-navy-900 mb-2">Can I add native features later?</h3>
                <p class="text-gray-500 text-sm">Yes, cross-platform apps can integrate native modules for specific platform features.</p>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-gradient-to-r from-emerald-600 to-emerald-500 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4 font-display">Ready to Build Your Cross-Platform App?</h2>
            <p class="text-emerald-100 mb-8 max-w-2xl mx-auto">
                Reach both iOS and Android users with a single, powerful codebase.
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