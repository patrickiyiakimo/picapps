<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Android App Development · ALTA Digital Agency</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
        }
        
        .font-display {
            font-family: 'Space Grotesk', 'Inter', system-ui, sans-serif;
        }
        
        a, button, div, img, input, select, textarea {
            border-radius: 0 !important;
        }
        
        .service-card {
            transition: all 0.3s ease;
        }
        
        .service-card:hover {
            transform: translateY(-4px);
        }
        
        .pricing-card {
            transition: all 0.3s ease;
        }
        
        .pricing-card:hover {
            transform: translateY(-4px);
        }
        
        .bg-video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 0;
        }
        
        .video-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0.75) 50%, rgba(0,0,0,0.85) 100%);
            z-index: 1;
        }
    </style>
</head>
<body class="bg-white">

    @include('layouts.navbar')

    <!-- Hero Section - Video Background -->
    <section class="relative min-h-[600px] flex items-center overflow-hidden">
        
        <!-- Video Background -->
        <video autoplay loop muted playsinline class="bg-video">
            <source src="/videos/alta-ios.mp4" type="video/mp4">
        </video>
        
        <!-- Dark Overlay -->
        <div class="video-overlay"></div>
        
        <div class="relative z-10 max-w-7xl mx-auto px-5 lg:px-8 py-20">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                   
                    <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-6 font-display tracking-tight leading-tight">
                        Reach Billions with 
                        <span class="text-white/60">Android Apps</span>
                    </h1>
                    <p class="text-gray-300 text-lg mb-8 leading-relaxed">
                        Build high-performance Android applications that reach over 2.5 billion active devices worldwide.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                         <a href="/contact" class="inline-flex items-center justify-center gap-2 border border-white/30 text-white px-8 py-3.5 font-semibold text-sm hover:bg-white/10 transition-all duration-300">
                    <span>Schedule a Consultation</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                    </svg>
                </a>
                    </div>
                </div>
               
            </div>
        </div>
    </section>

    <!-- Why Android Section -->
    <section class="py-20 md:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-5 lg:px-8">
            <div class="text-center mb-16">
                <div class="inline-flex items-center gap-2 border border-gray-200 bg-gray-50 px-4 py-2 mb-6">
                    <span class="w-1.5 h-1.5 bg-black"></span>
                    <span class="text-xs font-semibold uppercase tracking-wider text-gray-600">Why Choose Android</span>
                </div>
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-black mb-4 font-display tracking-tight">
                    Why Choose <span class="text-gray-400">Android</span>
                </h2>
                <div class="w-16 h-px bg-black mx-auto mb-6"></div>
                <p class="text-gray-500 max-w-2xl mx-auto text-base">
                    Android dominates the global mobile market with unmatched reach and flexibility.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="service-card bg-white border border-gray-200 hover:border-black p-6 text-center">
                    <div class="w-14 h-14 bg-gray-100 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-7 h-7 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.66 0 3-4 3-9s-1.34-9-3-9m0 18c-1.66 0-3-4-3-9s1.34-9 3-9"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-black mb-2">Global Dominance</h3>
                    <p class="text-gray-500 text-sm">Over 70% global market share with 2.5B+ active devices.</p>
                </div>
                <div class="service-card bg-white border border-gray-200 hover:border-black p-6 text-center">
                    <div class="w-14 h-14 bg-gray-100 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-7 h-7 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-black mb-2">Higher ROI</h3>
                    <p class="text-gray-500 text-sm">Lower development costs with access to emerging markets.</p>
                </div>
                <div class="service-card bg-white border border-gray-200 hover:border-black p-6 text-center">
                    <div class="w-14 h-14 bg-gray-100 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-7 h-7 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-black mb-2">Customizable</h3>
                    <p class="text-gray-500 text-sm">Complete control over every aspect of your app's functionality.</p>
                </div>
                <div class="service-card bg-white border border-gray-200 hover:border-black p-6 text-center">
                    <div class="w-14 h-14 bg-gray-100 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-7 h-7 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-black mb-2">Faster Time-to-Market</h3>
                    <p class="text-gray-500 text-sm">Quick approval process on Google Play Store.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- App Types We Build -->
    <section class="py-20 md:py-28 bg-gray-50">
        <div class="max-w-7xl mx-auto px-5 lg:px-8">
            <div class="text-center mb-16">
                <div class="inline-flex items-center gap-2 border border-gray-200 bg-white px-4 py-2 mb-6">
                    <span class="w-1.5 h-1.5 bg-black"></span>
                    <span class="text-xs font-semibold uppercase tracking-wider text-gray-600">What We Build</span>
                </div>
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-black mb-4 font-display tracking-tight">
                    Android App <span class="text-gray-400">Categories</span>
                </h2>
                <div class="w-16 h-px bg-black mx-auto mb-6"></div>
                <p class="text-gray-500 max-w-2xl mx-auto text-base">
                    Versatile Android solutions for every industry and use case.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- E-commerce Apps -->
                <div class="group bg-white border border-gray-200 hover:border-black transition-all duration-300 overflow-hidden">
                    <div class="relative h-56 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                             alt="E-commerce App" 
                             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-black mb-2">E-commerce Apps</h3>
                        <p class="text-gray-500 text-sm">Mobile shopping with seamless checkout and payment integration.</p>
                    </div>
                </div>

                <!-- Social Media Apps -->
                <div class="group bg-white border border-gray-200 hover:border-black transition-all duration-300 overflow-hidden">
                    <div class="relative h-56 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1611162617213-7d7a39e9b1d7?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                             alt="Social Media App" 
                             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-black mb-2">Social Media Apps</h3>
                        <p class="text-gray-500 text-sm">Connect users with feeds, stories, and real-time messaging.</p>
                    </div>
                </div>

                <!-- Health & Fitness -->
                <div class="group bg-white border border-gray-200 hover:border-black transition-all duration-300 overflow-hidden">
                    <div class="relative h-56 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                             alt="Health & Fitness App" 
                             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-black mb-2">Health & Fitness</h3>
                        <p class="text-gray-500 text-sm">Activity tracking, workouts, and health monitoring.</p>
                    </div>
                </div>

                <!-- Education Apps -->
                <div class="group bg-white border border-gray-200 hover:border-black transition-all duration-300 overflow-hidden">
                    <div class="relative h-56 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                             alt="Education App" 
                             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-black mb-2">Education Apps</h3>
                        <p class="text-gray-500 text-sm">E-learning platforms and interactive courses.</p>
                    </div>
                </div>

                <!-- Finance Apps -->
                <div class="group bg-white border border-gray-200 hover:border-black transition-all duration-300 overflow-hidden">
                    <div class="relative h-56 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                             alt="Finance App" 
                             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-black mb-2">Finance Apps</h3>
                        <p class="text-gray-500 text-sm">Mobile banking, payments, and budgeting tools.</p>
                    </div>
                </div>

                <!-- Travel Apps -->
                <div class="group bg-white border border-gray-200 hover:border-black transition-all duration-300 overflow-hidden">
                    <div class="relative h-56 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1436491865332-7a61a109cc05?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                             alt="Travel App" 
                             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-black mb-2">Travel & Hospitality</h3>
                        <p class="text-gray-500 text-sm">Booking, reservations, and travel guides.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 md:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-5 lg:px-8">
            <div class="text-center mb-16">
                <div class="inline-flex items-center gap-2 border border-gray-200 bg-gray-50 px-4 py-2 mb-6">
                    <span class="w-1.5 h-1.5 bg-black"></span>
                    <span class="text-xs font-semibold uppercase tracking-wider text-gray-600">Core Capabilities</span>
                </div>
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-black mb-4 font-display tracking-tight">
                    What We <span class="text-gray-400">Deliver</span>
                </h2>
                <div class="w-16 h-px bg-black mx-auto mb-6"></div>
                <p class="text-gray-500 max-w-2xl mx-auto text-base">
                    Everything you need to build a successful Android application.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="service-card bg-white border border-gray-200 hover:border-black p-6">
                    <div class="w-12 h-12 bg-gray-100 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-black mb-2">Material Design</h3>
                    <p class="text-gray-500 text-sm">Beautiful, intuitive interfaces following Google's Material Design guidelines.</p>
                </div>
                <div class="service-card bg-white border border-gray-200 hover:border-black p-6">
                    <div class="w-12 h-12 bg-gray-100 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-black mb-2">Secure Authentication</h3>
                    <p class="text-gray-500 text-sm">Biometric, fingerprint, and multi-factor authentication options.</p>
                </div>
                <div class="service-card bg-white border border-gray-200 hover:border-black p-6">
                    <div class="w-12 h-12 bg-gray-100 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-black mb-2">Offline Capabilities</h3>
                    <p class="text-gray-500 text-sm">Local database storage for seamless offline functionality.</p>
                </div>
                <div class="service-card bg-white border border-gray-200 hover:border-black p-6">
                    <div class="w-12 h-12 bg-gray-100 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-black mb-2">Push Notifications</h3>
                    <p class="text-gray-500 text-sm">Firebase Cloud Messaging for real-time user engagement.</p>
                </div>
                <div class="service-card bg-white border border-gray-200 hover:border-black p-6">
                    <div class="w-12 h-12 bg-gray-100 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-black mb-2">Analytics Integration</h3>
                    <p class="text-gray-500 text-sm">Firebase Analytics for comprehensive user behavior tracking.</p>
                </div>
                <div class="service-card bg-white border border-gray-200 hover:border-black p-6">
                    <div class="w-12 h-12 bg-gray-100 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 10h18M6 6h12M6 18h12M3 14h18"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-black mb-2">In-App Purchases</h3>
                    <p class="text-gray-500 text-sm">Google Play Billing integration for monetization.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Development Process -->
    <section class="py-20 md:py-28 bg-gray-50">
        <div class="max-w-7xl mx-auto px-5 lg:px-8">
            <div class="text-center mb-16">
                <div class="inline-flex items-center gap-2 border border-gray-200 bg-white px-4 py-2 mb-6">
                    <span class="w-1.5 h-1.5 bg-black"></span>
                    <span class="text-xs font-semibold uppercase tracking-wider text-gray-600">How We Work</span>
                </div>
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-black mb-4 font-display tracking-tight">
                    Development <span class="text-gray-400">Process</span>
                </h2>
                <div class="w-16 h-px bg-black mx-auto mb-6"></div>
                <p class="text-gray-500 max-w-2xl mx-auto text-base">
                    A proven methodology to deliver successful Android applications.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="text-center">
                    <div class="w-16 h-16 bg-black text-white text-2xl font-bold flex items-center justify-center mx-auto mb-4">1</div>
                    <h3 class="text-lg font-bold text-black mb-2">Discovery</h3>
                    <p class="text-gray-500 text-sm">Requirements and planning</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-black text-white text-2xl font-bold flex items-center justify-center mx-auto mb-4">2</div>
                    <h3 class="text-lg font-bold text-black mb-2">UI/UX Design</h3>
                    <p class="text-gray-500 text-sm">Wireframes and prototypes</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-black text-white text-2xl font-bold flex items-center justify-center mx-auto mb-4">3</div>
                    <h3 class="text-lg font-bold text-black mb-2">Development</h3>
                    <p class="text-gray-500 text-sm">Agile sprints and testing</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-black text-white text-2xl font-bold flex items-center justify-center mx-auto mb-4">4</div>
                    <h3 class="text-lg font-bold text-black mb-2">Play Store Launch</h3>
                    <p class="text-gray-500 text-sm">Submission and support</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="py-20 md:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-5 lg:px-8">
            <div class="text-center mb-16">
                <div class="inline-flex items-center gap-2 border border-gray-200 bg-gray-50 px-4 py-2 mb-6">
                    <span class="w-1.5 h-1.5 bg-black"></span>
                    <span class="text-xs font-semibold uppercase tracking-wider text-gray-600">Investment</span>
                </div>
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-black mb-4 font-display tracking-tight">
                    Simple, <span class="text-gray-400">Transparent Pricing</span>
                </h2>
                <div class="w-16 h-px bg-black mx-auto mb-6"></div>
                <p class="text-gray-500 max-w-2xl mx-auto text-base">
                    Flexible options to fit your budget and project needs.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                <!-- Starter -->
                <div class="pricing-card bg-white border border-gray-200 hover:border-black transition-all duration-300">
                    <div class="p-6 border-b border-gray-100">
                        <h3 class="text-xl font-bold text-black">Starter</h3>
                        <p class="text-gray-500 text-sm mt-1">Perfect for MVP</p>
                        <div class="mt-4">
                            <span class="text-4xl font-bold text-black">$7k</span>
                            <span class="text-gray-500">+</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center gap-2 text-sm text-gray-600">✓ Core features only</li>
                            <li class="flex items-center gap-2 text-sm text-gray-600">✓ Material Design UI</li>
                            <li class="flex items-center gap-2 text-sm text-gray-600">✓ Play Store submission</li>
                            <li class="flex items-center gap-2 text-sm text-gray-600">✓ 1 month support</li>
                        </ul>
                        <a href="/contact" class="block w-full text-center border border-black text-black py-3 font-semibold text-sm hover:bg-black hover:text-white transition">
                            Get Quote
                        </a>
                    </div>
                </div>

                <!-- Professional - Most Popular -->
                <div class="pricing-card bg-white border-2 border-black hover:border-gray-400 transition-all duration-300 relative">
                    <div class="absolute -top-3 left-1/2 transform -translate-x-1/2 bg-black text-white px-4 py-1 text-xs font-semibold tracking-wide">
                        MOST POPULAR
                    </div>
                    <div class="p-6 border-b border-gray-100">
                        <h3 class="text-xl font-bold text-black">Professional</h3>
                        <p class="text-gray-500 text-sm mt-1">For growing businesses</p>
                        <div class="mt-4">
                            <span class="text-4xl font-bold text-black">$14k</span>
                            <span class="text-gray-500">+</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center gap-2 text-sm text-gray-600">✓ Advanced features</li>
                            <li class="flex items-center gap-2 text-sm text-gray-600">✓ Custom UI/UX design</li>
                            <li class="flex items-center gap-2 text-sm text-gray-600">✓ Backend integration</li>
                            <li class="flex items-center gap-2 text-sm text-gray-600">✓ Push notifications</li>
                            <li class="flex items-center gap-2 text-sm text-gray-600">✓ Analytics dashboard</li>
                            <li class="flex items-center gap-2 text-sm text-gray-600">✓ 6 months support</li>
                        </ul>
                        <a href="/contact" class="block w-full text-center bg-black text-white py-3 font-semibold text-sm hover:bg-gray-800 transition">
                            Get Quote
                        </a>
                    </div>
                </div>

                <!-- Enterprise -->
                <div class="pricing-card bg-white border border-gray-200 hover:border-black transition-all duration-300">
                    <div class="p-6 border-b border-gray-100">
                        <h3 class="text-xl font-bold text-black">Enterprise</h3>
                        <p class="text-gray-500 text-sm mt-1">Custom solutions</p>
                        <div class="mt-4">
                            <span class="text-4xl font-bold text-black">Custom</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center gap-2 text-sm text-gray-600">✓ Unlimited features</li>
                            <li class="flex items-center gap-2 text-sm text-gray-600">✓ Custom architecture</li>
                            <li class="flex items-center gap-2 text-sm text-gray-600">✓ Enterprise security</li>
                            <li class="flex items-center gap-2 text-sm text-gray-600">✓ Dedicated team</li>
                            <li class="flex items-center gap-2 text-sm text-gray-600">✓ 24/7 priority support</li>
                            <li class="flex items-center gap-2 text-sm text-gray-600">✓ SLA guaranteed</li>
                        </ul>
                        <a href="/contact" class="block w-full text-center border border-black text-black py-3 font-semibold text-sm hover:bg-black hover:text-white transition">
                            Contact Sales
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 md:py-28 bg-gray-50">
        <div class="max-w-7xl mx-auto px-5 lg:px-8">
            <div class="text-center mb-16">
                <div class="inline-flex items-center gap-2 border border-gray-200 bg-white px-4 py-2 mb-6">
                    <span class="w-1.5 h-1.5 bg-black"></span>
                    <span class="text-xs font-semibold uppercase tracking-wider text-gray-600">FAQ</span>
                </div>
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-black mb-4 font-display tracking-tight">
                    Frequently Asked <span class="text-gray-400">Questions</span>
                </h2>
                <div class="w-16 h-px bg-black mx-auto mb-6"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <div>
                    <h3 class="font-semibold text-black mb-2">How long does Android app development take?</h3>
                    <p class="text-gray-500 text-sm">Typically 3-5 months depending on complexity. We'll provide a detailed timeline during consultation.</p>
                </div>
                <div>
                    <h3 class="font-semibold text-black mb-2">Do you handle Google Play submission?</h3>
                    <p class="text-gray-500 text-sm">Yes, we manage the entire Google Play Store submission process.</p>
                </div>
                <div>
                    <h3 class="font-semibold text-black mb-2">What about post-launch maintenance?</h3>
                    <p class="text-gray-500 text-sm">We offer ongoing maintenance packages including updates, bug fixes, and feature enhancements.</p>
                </div>
                <div>
                    <h3 class="font-semibold text-black mb-2">Can you integrate with existing systems?</h3>
                    <p class="text-gray-500 text-sm">Absolutely! We specialize in API integrations with any backend service.</p>
                </div>
                <div>
                    <h3 class="font-semibold text-black mb-2">Do you support multiple screen sizes?</h3>
                    <p class="text-gray-500 text-sm">Yes, our Android apps are optimized for all screen sizes and devices.</p>
                </div>
                <div>
                    <h3 class="font-semibold text-black mb-2">What about iOS version?</h3>
                    <p class="text-gray-500 text-sm">We can build iOS versions using native Swift or cross-platform solutions like Flutter.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-black">
        <div class="max-w-7xl mx-auto px-5 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-4 font-display tracking-tight">Ready to Build Your Android App?</h2>
            <div class="w-16 h-px bg-white/30 mx-auto mb-6"></div>
            <p class="text-gray-400 mb-8 max-w-2xl mx-auto text-base">
                Let's turn your app idea into a successful Android application that reaches billions of users.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/contact" class="inline-flex items-center justify-center gap-2 bg-white text-black px-8 py-3.5 font-semibold text-sm hover:bg-gray-100 transition-all duration-300 group">
                    <span>Get a Free Quote</span>
                    <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>
                <a href="/contact" class="inline-flex items-center justify-center gap-2 border border-white/30 text-white px-8 py-3.5 font-semibold text-sm hover:bg-white/10 transition-all duration-300">
                    <span>Schedule a Consultation</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    @include('layouts.footer')
</body>
</html>