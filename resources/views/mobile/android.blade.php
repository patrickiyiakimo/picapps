<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Android App Development - Alta Digital Agency</title>
    
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
                        <span class="text-sm font-semibold uppercase tracking-wider">Android App Development</span>
                    </div>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 font-display">
                        Reach Billions with 
                        <span class="bg-gradient-to-r from-emerald-400 to-emerald-300 bg-clip-text text-transparent">Android Apps</span>
                    </h1>
                    <p class="text-gray-300 text-lg mb-8 leading-relaxed">
                        Build high-performance Android applications that reach over 2.5 billion active devices worldwide.
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
                         alt="Android App Development" 
                         class="rounded-lg shadow-2xl">
                    <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-emerald-600/20 rounded-full filter blur-2xl"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Why Android Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-navy-900 mb-4 font-display">Why Choose Android for Your Business?</h2>
            <div class="w-20 h-1 bg-emerald-500 mx-auto"></div>
            <p class="text-gray-600 mt-6 max-w-2xl mx-auto">
                Android dominates the global mobile market with unmatched reach and flexibility
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center p-6 border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300">
                <div class="w-16 h-16 bg-emerald-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.66 0 3-4 3-9s-1.34-9-3-9m0 18c-1.66 0-3-4-3-9s1.34-9 3-9"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-navy-900 mb-2">Global Dominance</h3>
                <p class="text-gray-500 text-sm">Over 70% global market share with 2.5B+ active devices.</p>
            </div>
            <div class="text-center p-6 border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300">
                <div class="w-16 h-16 bg-emerald-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-navy-900 mb-2">Higher ROI</h3>
                <p class="text-gray-500 text-sm">Lower development costs with access to emerging markets.</p>
            </div>
            <div class="text-center p-6 border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300">
                <div class="w-16 h-16 bg-emerald-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-navy-900 mb-2">Customizable</h3>
                <p class="text-gray-500 text-sm">Complete control over every aspect of your app's functionality.</p>
            </div>
            <div class="text-center p-6 border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300">
                <div class="w-16 h-16 bg-emerald-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-navy-900 mb-2">Faster Time-to-Market</h3>
                <p class="text-gray-500 text-sm">Quick approval process on Google Play Store.</p>
            </div>
        </div>
    </div>

    <!-- Tech Stack Section -->
    <div class="bg-gray-50 py-16 md:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-navy-900 mb-4 font-display">Our Android Tech Stack</h2>
                <div class="w-20 h-1 bg-emerald-500 mx-auto"></div>
                <p class="text-gray-600 mt-6 max-w-2xl mx-auto">
                    We use the latest technologies to build cutting-edge Android applications
                </p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <!-- Kotlin -->
                <div class="bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300 p-6 text-center">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/kotlin/kotlin-original.svg" alt="Kotlin" class="w-16 h-16 mx-auto mb-3">
                    <h3 class="font-bold text-navy-900">Kotlin</h3>
                    <p class="text-xs text-gray-500 mt-1">Primary Language</p>
                </div>

                <!-- Java -->
                <div class="bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300 p-6 text-center">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/java/java-original.svg" alt="Java" class="w-16 h-16 mx-auto mb-3">
                    <h3 class="font-bold text-navy-900">Java</h3>
                    <p class="text-xs text-gray-500 mt-1">Alternative Language</p>
                </div>

                <!-- Android Studio -->
                <div class="bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300 p-6 text-center">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/androidstudio/androidstudio-original.svg" alt="Android Studio" class="w-16 h-16 mx-auto mb-3">
                    <h3 class="font-bold text-navy-900">Android Studio</h3>
                    <p class="text-xs text-gray-500 mt-1">IDE</p>
                </div>

                <!-- Firebase -->
                <div class="bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300 p-6 text-center">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/firebase/firebase-plain.svg" alt="Firebase" class="w-16 h-16 mx-auto mb-3">
                    <h3 class="font-bold text-navy-900">Firebase</h3>
                    <p class="text-xs text-gray-500 mt-1">Backend Services</p>
                </div>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 gap-6 mt-6">
                <!-- Jetpack Compose -->
                <div class="bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300 p-6 text-center">
                    <div class="w-16 h-16 mx-auto mb-3 flex items-center justify-center">
                        <svg class="w-12 h-12 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"/>
                        </svg>
                    </div>
                    <h3 class="font-bold text-navy-900">Jetpack Compose</h3>
                    <p class="text-xs text-gray-500 mt-1">Modern UI Toolkit</p>
                </div>

                <!-- Room Database -->
                <div class="bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300 p-6 text-center">
                    <div class="w-16 h-16 mx-auto mb-3 flex items-center justify-center">
                        <svg class="w-12 h-12 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4"/>
                        </svg>
                    </div>
                    <h3 class="font-bold text-navy-900">Room Database</h3>
                    <p class="text-xs text-gray-500 mt-1">Local Storage</p>
                </div>

                <!-- Retrofit -->
                <div class="bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300 p-6 text-center">
                    <div class="w-16 h-16 mx-auto mb-3 flex items-center justify-center">
                        <svg class="w-12 h-12 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h3 class="font-bold text-navy-900">Retrofit</h3>
                    <p class="text-xs text-gray-500 mt-1">Networking Library</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-navy-900 mb-4 font-display">Powerful Android App Features</h2>
            <div class="w-20 h-1 bg-emerald-500 mx-auto"></div>
            <p class="text-gray-600 mt-6 max-w-2xl mx-auto">
                Everything you need to build a successful Android application
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
                <h3 class="text-lg font-bold text-navy-900 mb-2">Material Design</h3>
                <p class="text-gray-500 text-sm">Beautiful, intuitive interfaces following Google's Material Design guidelines.</p>
            </div>

            <!-- Feature 2 -->
            <div class="bg-white p-6 border border-gray-200 hover:border-emerald-300 transition-all duration-300">
                <div class="w-12 h-12 bg-emerald-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-navy-900 mb-2">Secure Authentication</h3>
                <p class="text-gray-500 text-sm">Biometric, fingerprint, and multi-factor authentication options.</p>
            </div>

            <!-- Feature 3 -->
            <div class="bg-white p-6 border border-gray-200 hover:border-emerald-300 transition-all duration-300">
                <div class="w-12 h-12 bg-emerald-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-navy-900 mb-2">Offline Capabilities</h3>
                <p class="text-gray-500 text-sm">Local database storage for seamless offline functionality.</p>
            </div>

            <!-- Feature 4 -->
            <div class="bg-white p-6 border border-gray-200 hover:border-emerald-300 transition-all duration-300">
                <div class="w-12 h-12 bg-emerald-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-navy-900 mb-2">Push Notifications</h3>
                <p class="text-gray-500 text-sm">Firebase Cloud Messaging for real-time user engagement.</p>
            </div>

            <!-- Feature 5 -->
            <div class="bg-white p-6 border border-gray-200 hover:border-emerald-300 transition-all duration-300">
                <div class="w-12 h-12 bg-emerald-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-navy-900 mb-2">Analytics Integration</h3>
                <p class="text-gray-500 text-sm">Firebase Analytics for comprehensive user behavior tracking.</p>
            </div>

            <!-- Feature 6 -->
            <div class="bg-white p-6 border border-gray-200 hover:border-emerald-300 transition-all duration-300">
                <div class="w-12 h-12 bg-emerald-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 10h18M6 6h12M6 18h12M3 14h18"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-navy-900 mb-2">In-App Purchases</h3>
                <p class="text-gray-500 text-sm">Google Play Billing integration for monetization.</p>
            </div>
        </div>
    </div>

    <!-- App Types We Build -->
    <div class="bg-gray-50 py-16 md:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-navy-900 mb-4 font-display">App Types We Build</h2>
                <div class="w-20 h-1 bg-emerald-500 mx-auto"></div>
                <p class="text-gray-600 mt-6 max-w-2xl mx-auto">
                    Versatile Android solutions for every industry
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- E-commerce App -->
                <div class="bg-white rounded-lg overflow-hidden border border-gray-200 hover:border-emerald-300 transition-all duration-300 group">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                             alt="E-commerce App" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-5">
                        <h3 class="font-bold text-navy-900 text-lg mb-2">E-commerce Apps</h3>
                        <p class="text-gray-500 text-sm">Mobile shopping with seamless checkout and payment.</p>
                    </div>
                </div>

                <!-- Social Media App -->
                <div class="bg-white rounded-lg overflow-hidden border border-gray-200 hover:border-emerald-300 transition-all duration-300 group">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1611162617213-7d7a39e9b1d7?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                             alt="Social Media App" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-5">
                        <h3 class="font-bold text-navy-900 text-lg mb-2">Social Media Apps</h3>
                        <p class="text-gray-500 text-sm">Connect users with feeds, stories, and messaging.</p>
                    </div>
                </div>

                <!-- Health & Fitness -->
                <div class="bg-white rounded-lg overflow-hidden border border-gray-200 hover:border-emerald-300 transition-all duration-300 group">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                             alt="Health App" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-5">
                        <h3 class="font-bold text-navy-900 text-lg mb-2">Health & Fitness</h3>
                        <p class="text-gray-500 text-sm">Activity tracking, workouts, and health monitoring.</p>
                    </div>
                </div>

                <!-- Education Apps -->
                <div class="bg-white rounded-lg overflow-hidden border border-gray-200 hover:border-emerald-300 transition-all duration-300 group">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                             alt="Education App" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-5">
                        <h3 class="font-bold text-navy-900 text-lg mb-2">Education Apps</h3>
                        <p class="text-gray-500 text-sm">E-learning platforms and interactive courses.</p>
                    </div>
                </div>

                <!-- Finance Apps -->
                <div class="bg-white rounded-lg overflow-hidden border border-gray-200 hover:border-emerald-300 transition-all duration-300 group">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                             alt="Finance App" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-5">
                        <h3 class="font-bold text-navy-900 text-lg mb-2">Finance Apps</h3>
                        <p class="text-gray-500 text-sm">Mobile banking, payments, and budgeting tools.</p>
                    </div>
                </div>

                <!-- Travel Apps -->
                <div class="bg-white rounded-lg overflow-hidden border border-gray-200 hover:border-emerald-300 transition-all duration-300 group">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1436491865332-7a61a109cc05?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                             alt="Travel App" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-5">
                        <h3 class="font-bold text-navy-900 text-lg mb-2">Travel & Hospitality</h3>
                        <p class="text-gray-500 text-sm">Booking, reservations, and travel guides.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Development Process -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-navy-900 mb-4 font-display">Our Android Development Process</h2>
            <div class="w-20 h-1 bg-emerald-500 mx-auto"></div>
            <p class="text-gray-600 mt-6 max-w-2xl mx-auto">
                A proven methodology to deliver successful Android applications
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <div class="text-center">
                <div class="w-16 h-16 bg-emerald-600 text-white text-2xl font-bold flex items-center justify-center mx-auto mb-4">1</div>
                <h3 class="text-lg font-bold text-navy-900 mb-2">Discovery</h3>
                <p class="text-gray-500 text-sm">Requirements and planning</p>
            </div>
            <div class="text-center">
                <div class="w-16 h-16 bg-emerald-600 text-white text-2xl font-bold flex items-center justify-center mx-auto mb-4">2</div>
                <h3 class="text-lg font-bold text-navy-900 mb-2">UI/UX Design</h3>
                <p class="text-gray-500 text-sm">Wireframes and prototypes</p>
            </div>
            <div class="text-center">
                <div class="w-16 h-16 bg-emerald-600 text-white text-2xl font-bold flex items-center justify-center mx-auto mb-4">3</div>
                <h3 class="text-lg font-bold text-navy-900 mb-2">Development</h3>
                <p class="text-gray-500 text-sm">Agile sprints and testing</p>
            </div>
            <div class="text-center">
                <div class="w-16 h-16 bg-emerald-600 text-white text-2xl font-bold flex items-center justify-center mx-auto mb-4">4</div>
                <h3 class="text-lg font-bold text-navy-900 mb-2">Play Store Launch</h3>
                <p class="text-gray-500 text-sm">Submission and support</p>
            </div>
        </div>
    </div>

    <!-- Pricing Section -->
    <div id="pricing" class="bg-gray-50 py-16 md:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-navy-900 mb-4 font-display">Android App Development Pricing</h2>
                <div class="w-20 h-1 bg-emerald-500 mx-auto"></div>
                <p class="text-gray-600 mt-6 max-w-2xl mx-auto">
                    Flexible pricing models to fit your budget
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Basic Android App -->
                <div class="bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-xl transition-all duration-300">
                    <div class="p-6 border-b border-gray-100">
                        <h3 class="text-xl font-bold text-navy-900">Basic Android App</h3>
                        <p class="text-gray-500 text-sm mt-1">Perfect for startups</p>
                        <div class="mt-4">
                            <span class="text-4xl font-bold text-navy-900">$7,000</span>
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
                                Material Design UI
                            </li>
                            <li class="flex items-center gap-2 text-sm">
                                <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                                Play Store submission
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

                <!-- Professional Android App -->
                <div class="bg-white border-2 border-emerald-500 hover:shadow-xl transition-all duration-300 relative">
                    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2 bg-emerald-600 text-white px-4 py-1 text-sm font-semibold">
                        MOST POPULAR
                    </div>
                    <div class="p-6 border-b border-gray-100">
                        <h3 class="text-xl font-bold text-navy-900">Professional Android App</h3>
                        <p class="text-gray-500 text-sm mt-1">For growing businesses</p>
                        <div class="mt-4">
                            <span class="text-4xl font-bold text-navy-900">$14,000</span>
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
                                Custom UI/UX design
                            </li>
                            <li class="flex items-center gap-2 text-sm">
                                <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                                Backend integration
                            </li>
                            <li class="flex items-center gap-2 text-sm">
                                <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                                Push notifications
                            </li>
                            <li class="flex items-center gap-2 text-sm">
                                <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                                Analytics dashboard
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

                <!-- Enterprise Android App -->
                <div class="bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-xl transition-all duration-300">
                    <div class="p-6 border-b border-gray-100">
                        <h3 class="text-xl font-bold text-navy-900">Enterprise Android App</h3>
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
    </div>

    <!-- Portfolio Showcase -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-navy-900 mb-4 font-display">Android App Success Stories</h2>
            <div class="w-20 h-1 bg-emerald-500 mx-auto"></div>
            <p class="text-gray-600 mt-6 max-w-2xl mx-auto">
                See how we've helped businesses succeed on Google Play
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Project 1 -->
            <div class="group bg-white overflow-hidden border border-gray-200 hover:border-emerald-300 hover:shadow-xl transition-all duration-300">
                <div class="relative h-56 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Fitness App" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-navy-900/60 to-transparent"></div>
                    <div class="absolute bottom-4 left-4">
                        <span class="bg-emerald-600 text-white text-xs px-3 py-1">Health & Fitness</span>
                    </div>
                </div>
                <div class="p-5">
                    <h3 class="font-bold text-navy-900 mb-2">FitTrack Android App</h3>
                    <p class="text-gray-500 text-sm mb-3">1M+ downloads, 4.8★ rating</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-1">
                            <span class="text-yellow-400">★★★★★</span>
                            <span class="text-xs text-gray-500">(4.8)</span>
                        </div>
                        <a href="#" class="text-emerald-600 text-sm font-semibold">View Case →</a>
                    </div>
                </div>
            </div>

            <!-- Project 2 -->
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
                    <h3 class="font-bold text-navy-900 mb-2">StyleStore Android App</h3>
                    <p class="text-gray-500 text-sm mb-3">500K+ downloads, 312% sales growth</p>
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
                    <img src="https://images.unsplash.com/photo-1522869635100-9f4c5e86aa37?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Entertainment App" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-navy-900/60 to-transparent"></div>
                    <div class="absolute bottom-4 left-4">
                        <span class="bg-emerald-600 text-white text-xs px-3 py-1">Entertainment</span>
                    </div>
                </div>
                <div class="p-5">
                    <h3 class="font-bold text-navy-900 mb-2">StreamFlix Android App</h3>
                    <p class="text-gray-500 text-sm mb-3">2M+ active users, Editor's Choice</p>
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
                    <h3 class="font-semibold text-navy-900 mb-2">How long does Android app development take?</h3>
                    <p class="text-gray-500 text-sm">Typically 3-5 months depending on complexity. We'll provide a detailed timeline during consultation.</p>
                </div>
                <div>
                    <h3 class="font-semibold text-navy-900 mb-2">Do you handle Google Play submission?</h3>
                    <p class="text-gray-500 text-sm">Yes, we manage the entire Google Play Store submission process.</p>
                </div>
                <div>
                    <h3 class="font-semibold text-navy-900 mb-2">What about post-launch maintenance?</h3>
                    <p class="text-gray-500 text-sm">We offer ongoing maintenance packages including updates, bug fixes, and feature enhancements.</p>
                </div>
                <div>
                    <h3 class="font-semibold text-navy-900 mb-2">Can you integrate with existing systems?</h3>
                    <p class="text-gray-500 text-sm">Absolutely! We specialize in API integrations with any backend service.</p>
                </div>
                <div>
                    <h3 class="font-semibold text-navy-900 mb-2">Do you support multiple screen sizes?</h3>
                    <p class="text-gray-500 text-sm">Yes, our Android apps are optimized for all screen sizes and devices.</p>
                </div>
                <div>
                    <h3 class="font-semibold text-navy-900 mb-2">What about iOS version?</h3>
                    <p class="text-gray-500 text-sm">We can build iOS versions using native Swift or cross-platform solutions like Flutter.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-gradient-to-r from-emerald-600 to-emerald-500 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4 font-display">Ready to Build Your Android App?</h2>
            <p class="text-emerald-100 mb-8 max-w-2xl mx-auto">
                Let's turn your app idea into a successful Android application that reaches billions of users.
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