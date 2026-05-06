<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Case Studies - Alta Digital Agency</title>
    
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
                        <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z"/>
                    </svg>
                    <span class="text-sm font-semibold uppercase tracking-wider">Client Success Stories</span>
                </div>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 font-display">
                    Real Results for 
                    <span class="bg-gradient-to-r from-emerald-400 to-emerald-300 bg-clip-text text-transparent">Real Businesses</span>
                </h1>
                <p class="text-gray-300 text-lg md:text-xl leading-relaxed">
                    See how we've helped businesses transform their digital presence and achieve remarkable growth.
                </p>
            </div>
        </div>
    </div>

    <!-- Stats Section -->
    <div class="bg-white border-b border-gray-100 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div>
                    <div class="text-3xl md:text-4xl font-bold text-emerald-600">500+</div>
                    <p class="text-sm text-gray-500 mt-1">Projects Delivered</p>
                </div>
                <div>
                    <div class="text-3xl md:text-4xl font-bold text-emerald-600">98%</div>
                    <p class="text-sm text-gray-500 mt-1">Client Satisfaction</p>
                </div>
                <div>
                    <div class="text-3xl md:text-4xl font-bold text-emerald-600">156%</div>
                    <p class="text-sm text-gray-500 mt-1">Average ROI Increase</p>
                </div>
                <div>
                    <div class="text-3xl md:text-4xl font-bold text-emerald-600">40+</div>
                    <p class="text-sm text-gray-500 mt-1">Industries Served</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Case Studies Grid -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        
        <!-- Filter Buttons -->
        <div class="flex flex-wrap justify-center gap-3 mb-12">
            <button class="filter-btn active px-5 py-2 text-sm font-medium bg-emerald-600 text-white transition">All</button>
            <button class="filter-btn px-5 py-2 text-sm font-medium text-gray-600 hover:bg-gray-100 transition">E-commerce</button>
            <button class="filter-btn px-5 py-2 text-sm font-medium text-gray-600 hover:bg-gray-100 transition">Mobile Apps</button>
            <button class="filter-btn px-5 py-2 text-sm font-medium text-gray-600 hover:bg-gray-100 transition">Web Development</button>
            <button class="filter-btn px-5 py-2 text-sm font-medium text-gray-600 hover:bg-gray-100 transition">Healthcare</button>
            <button class="filter-btn px-5 py-2 text-sm font-medium text-gray-600 hover:bg-gray-100 transition">Retail</button>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            
            <!-- Case Study 1 - E-commerce -->
            <div class="group bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-xl transition-all duration-500 overflow-hidden">
                <div class="relative h-64 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1472851294608-062f824d29cc?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" 
                         alt="Fashion E-commerce Store" 
                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-navy-900/60 to-transparent"></div>
                    <div class="absolute bottom-4 left-4">
                        <span class="bg-emerald-600 text-white text-xs px-3 py-1">E-commerce</span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-4 mb-3">
                        <div class="w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center">
                            <span class="text-sm font-bold text-navy-900">FS</span>
                        </div>
                        <div>
                            <h3 class="font-bold text-navy-900">FashionStyle Store</h3>
                            <p class="text-xs text-gray-500">Fashion Retail</p>
                        </div>
                    </div>
                    <h2 class="text-xl font-bold text-navy-900 mb-3 group-hover:text-emerald-600 transition">
                        How We Helped a Fashion Brand Increase Sales by 312%
                    </h2>
                    <p class="text-gray-600 text-sm mb-4">
                        A complete e-commerce transformation with custom Shopify development, resulting in 3x revenue growth within 6 months.
                    </p>
                    <div class="grid grid-cols-3 gap-3 mb-5">
                        <div class="text-center p-2 bg-gray-50">
                            <div class="text-lg font-bold text-emerald-600">312%</div>
                            <p class="text-xs text-gray-500">Sales Increase</p>
                        </div>
                        <div class="text-center p-2 bg-gray-50">
                            <div class="text-lg font-bold text-emerald-600">45%</div>
                            <p class="text-xs text-gray-500">Faster Load Time</p>
                        </div>
                        <div class="text-center p-2 bg-gray-50">
                            <div class="text-lg font-bold text-emerald-600">28%</div>
                            <p class="text-xs text-gray-500">Conversion Rate</p>
                        </div>
                    </div>
                    <a href="#" class="inline-flex items-center gap-2 text-emerald-600 font-semibold text-sm hover:text-emerald-500">
                        Read Case Study
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Case Study 2 - Mobile App -->
            <div class="group bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-xl transition-all duration-500 overflow-hidden">
                <div class="relative h-64 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" 
                         alt="Fitness Mobile App" 
                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-navy-900/60 to-transparent"></div>
                    <div class="absolute bottom-4 left-4">
                        <span class="bg-emerald-600 text-white text-xs px-3 py-1">Mobile App</span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-4 mb-3">
                        <div class="w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center">
                            <span class="text-sm font-bold text-navy-900">FT</span>
                        </div>
                        <div>
                            <h3 class="font-bold text-navy-900">FitTrack App</h3>
                            <p class="text-xs text-gray-500">Health & Fitness</p>
                        </div>
                    </div>
                    <h2 class="text-xl font-bold text-navy-900 mb-3 group-hover:text-emerald-600 transition">
                        Fitness App Achieves 500K+ Downloads in First 3 Months
                    </h2>
                    <p class="text-gray-600 text-sm mb-4">
                        Cross-platform mobile app development that helped a fitness startup dominate the market and secure Series A funding.
                    </p>
                    <div class="grid grid-cols-3 gap-3 mb-5">
                        <div class="text-center p-2 bg-gray-50">
                            <div class="text-lg font-bold text-emerald-600">500K+</div>
                            <p class="text-xs text-gray-500">Downloads</p>
                        </div>
                        <div class="text-center p-2 bg-gray-50">
                            <div class="text-lg font-bold text-emerald-600">4.9★</div>
                            <p class="text-xs text-gray-500">App Rating</p>
                        </div>
                        <div class="text-center p-2 bg-gray-50">
                            <div class="text-lg font-bold text-emerald-600">85%</div>
                            <p class="text-xs text-gray-500">Retention Rate</p>
                        </div>
                    </div>
                    <a href="#" class="inline-flex items-center gap-2 text-emerald-600 font-semibold text-sm hover:text-emerald-500">
                        Read Case Study
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Case Study 3 - Healthcare -->
            <div class="group bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-xl transition-all duration-500 overflow-hidden">
                <div class="relative h-64 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" 
                         alt="Healthcare Platform" 
                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-navy-900/60 to-transparent"></div>
                    <div class="absolute bottom-4 left-4">
                        <span class="bg-emerald-600 text-white text-xs px-3 py-1">Healthcare</span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-4 mb-3">
                        <div class="w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center">
                            <span class="text-sm font-bold text-navy-900">MH</span>
                        </div>
                        <div>
                            <h3 class="font-bold text-navy-900">MediHealth Portal</h3>
                            <p class="text-xs text-gray-500">Healthcare</p>
                        </div>
                    </div>
                    <h2 class="text-xl font-bold text-navy-900 mb-3 group-hover:text-emerald-600 transition">
                        Telehealth Platform Serves 100K+ Patients Monthly
                    </h2>
                    <p class="text-gray-600 text-sm mb-4">
                        Secure, HIPAA-compliant healthcare platform that revolutionized patient-doctor communication.
                    </p>
                    <div class="grid grid-cols-3 gap-3 mb-5">
                        <div class="text-center p-2 bg-gray-50">
                            <div class="text-lg font-bold text-emerald-600">100K+</div>
                            <p class="text-xs text-gray-500">Active Patients</p>
                        </div>
                        <div class="text-center p-2 bg-gray-50">
                            <div class="text-lg font-bold text-emerald-600">60%</div>
                            <p class="text-xs text-gray-500">Less Wait Time</p>
                        </div>
                        <div class="text-center p-2 bg-gray-50">
                            <div class="text-lg font-bold text-emerald-600">99.9%</div>
                            <p class="text-xs text-gray-500">Uptime</p>
                        </div>
                    </div>
                    <a href="#" class="inline-flex items-center gap-2 text-emerald-600 font-semibold text-sm hover:text-emerald-500">
                        Read Case Study
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Case Study 4 - Corporate Website -->
            <div class="group bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-xl transition-all duration-500 overflow-hidden">
                <div class="relative h-64 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" 
                         alt="Corporate Website" 
                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-navy-900/60 to-transparent"></div>
                    <div class="absolute bottom-4 left-4">
                        <span class="bg-emerald-600 text-white text-xs px-3 py-1">Web Development</span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-4 mb-3">
                        <div class="w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center">
                            <span class="text-sm font-bold text-navy-900">GC</span>
                        </div>
                        <div>
                            <h3 class="font-bold text-navy-900">GlobalCorp</h3>
                            <p class="text-xs text-gray-500">Corporate</p>
                        </div>
                    </div>
                    <h2 class="text-xl font-bold text-navy-900 mb-3 group-hover:text-emerald-600 transition">
                        Enterprise Website Redesign Increases Leads by 215%
                    </h2>
                    <p class="text-gray-600 text-sm mb-4">
                        Complete corporate website overhaul with custom CMS resulting in doubled lead generation.
                    </p>
                    <div class="grid grid-cols-3 gap-3 mb-5">
                        <div class="text-center p-2 bg-gray-50">
                            <div class="text-lg font-bold text-emerald-600">215%</div>
                            <p class="text-xs text-gray-500">Lead Increase</p>
                        </div>
                        <div class="text-center p-2 bg-gray-50">
                            <div class="text-lg font-bold text-emerald-600">50%</div>
                            <p class="text-xs text-gray-500">Faster Load</p>
                        </div>
                        <div class="text-center p-2 bg-gray-50">
                            <div class="text-lg font-bold text-emerald-600">+32%</div>
                            <p class="text-xs text-gray-500">Conversion</p>
                        </div>
                    </div>
                    <a href="#" class="inline-flex items-center gap-2 text-emerald-600 font-semibold text-sm hover:text-emerald-500">
                        Read Case Study
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Case Study 5 - Retail -->
            <div class="group bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-xl transition-all duration-500 overflow-hidden">
                <div class="relative h-64 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" 
                         alt="Retail Store" 
                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-navy-900/60 to-transparent"></div>
                    <div class="absolute bottom-4 left-4">
                        <span class="bg-emerald-600 text-white text-xs px-3 py-1">Retail</span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-4 mb-3">
                        <div class="w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center">
                            <span class="text-sm font-bold text-navy-900">HB</span>
                        </div>
                        <div>
                            <h3 class="font-bold text-navy-900">HomeBuddy</h3>
                            <p class="text-xs text-gray-500">Home Decor Retail</p>
                        </div>
                    </div>
                    <h2 class="text-xl font-bold text-navy-900 mb-3 group-hover:text-emerald-600 transition">
                        Omnichannel Retail Solution Boosts Sales by 178%
                    </h2>
                    <p class="text-gray-600 text-sm mb-4">
                        Integrated e-commerce and inventory management system for a growing retail chain.
                    </p>
                    <div class="grid grid-cols-3 gap-3 mb-5">
                        <div class="text-center p-2 bg-gray-50">
                            <div class="text-lg font-bold text-emerald-600">178%</div>
                            <p class="text-xs text-gray-500">Sales Growth</p>
                        </div>
                        <div class="text-center p-2 bg-gray-50">
                            <div class="text-lg font-bold text-emerald-600">3x</div>
                            <p class="text-xs text-gray-500">Inventory Accuracy</p>
                        </div>
                        <div class="text-center p-2 bg-gray-50">
                            <div class="text-lg font-bold text-emerald-600">45%</div>
                            <p class="text-xs text-gray-500">Less Returns</p>
                        </div>
                    </div>
                    <a href="#" class="inline-flex items-center gap-2 text-emerald-600 font-semibold text-sm hover:text-emerald-500">
                        Read Case Study
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Case Study 6 - Education -->
            <div class="group bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-xl transition-all duration-500 overflow-hidden">
                <div class="relative h-64 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" 
                         alt="EdTech Platform" 
                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-navy-900/60 to-transparent"></div>
                    <div class="absolute bottom-4 left-4">
                        <span class="bg-emerald-600 text-white text-xs px-3 py-1">EdTech</span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-4 mb-3">
                        <div class="w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center">
                            <span class="text-sm font-bold text-navy-900">LA</span>
                        </div>
                        <div>
                            <h3 class="font-bold text-navy-900">LearnApp</h3>
                            <p class="text-xs text-gray-500">Education Technology</p>
                        </div>
                    </div>
                    <h2 class="text-xl font-bold text-navy-900 mb-3 group-hover:text-emerald-600 transition">
                        EdTech Platform Scales to 1 Million Users in 8 Months
                    </h2>
                    <p class="text-gray-600 text-sm mb-4">
                        Scalable learning management system with gamification features and real-time analytics.
                    </p>
                    <div class="grid grid-cols-3 gap-3 mb-5">
                        <div class="text-center p-2 bg-gray-50">
                            <div class="text-lg font-bold text-emerald-600">1M+</div>
                            <p class="text-xs text-gray-500">Active Users</p>
                        </div>
                        <div class="text-center p-2 bg-gray-50">
                            <div class="text-lg font-bold text-emerald-600">70%</div>
                            <p class="text-xs text-gray-500">Course Completion</p>
                        </div>
                        <div class="text-center p-2 bg-gray-50">
                            <div class="text-lg font-bold text-emerald-600">4.8★</div>
                            <p class="text-xs text-gray-500">User Rating</p>
                        </div>
                    </div>
                    <a href="#" class="inline-flex items-center gap-2 text-emerald-600 font-semibold text-sm hover:text-emerald-500">
                        Read Case Study
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- View More Button -->
        <div class="text-center mt-12">
            <a href="#" class="inline-flex items-center gap-2 bg-navy-900 text-white px-8 py-3 font-semibold hover:bg-emerald-600 transition-all duration-300">
                Load More Case Studies
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </a>
        </div>
    </div>

    <!-- Testimonial Section -->
    <div class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-2xl md:text-3xl font-bold text-navy-900 mb-4 font-display">What Our Clients Say</h2>
                <div class="w-16 h-0.5 bg-emerald-500 mx-auto"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 border border-gray-200">
                    <div class="flex text-emerald-500 mb-3">
                        ★★★★★
                    </div>
                    <p class="text-gray-600 text-sm italic mb-4">
                        "Alta transformed our online presence completely. The team's expertise and dedication are unmatched."
                    </p>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-emerald-100 rounded-full flex items-center justify-center">
                            <span class="text-sm font-bold text-emerald-600">JD</span>
                        </div>
                        <div>
                            <p class="font-semibold text-navy-900 text-sm">John Doe</p>
                            <p class="text-xs text-gray-500">CEO, FashionStyle</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-6 border border-gray-200">
                    <div class="flex text-emerald-500 mb-3">
                        ★★★★★
                    </div>
                    <p class="text-gray-600 text-sm italic mb-4">
                        "The mobile app they built for us exceeded all expectations. Download numbers are through the roof!"
                    </p>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-emerald-100 rounded-full flex items-center justify-center">
                            <span class="text-sm font-bold text-emerald-600">JS</span>
                        </div>
                        <div>
                            <p class="font-semibold text-navy-900 text-sm">Jane Smith</p>
                            <p class="text-xs text-gray-500">Founder, FitTrack</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-6 border border-gray-200">
                    <div class="flex text-emerald-500 mb-3">
                        ★★★★★
                    </div>
                    <p class="text-gray-600 text-sm italic mb-4">
                        "Professional, responsive, and technically excellent. Highly recommend their services."
                    </p>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-emerald-100 rounded-full flex items-center justify-center">
                            <span class="text-sm font-bold text-emerald-600">MC</span>
                        </div>
                        <div>
                            <p class="font-semibold text-navy-900 text-sm">Michael Chen</p>
                            <p class="text-xs text-gray-500">CTO, GlobalCorp</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="bg-gradient-to-r from-emerald-600 to-emerald-500 p-8 md:p-12 text-center">
            <h2 class="text-2xl md:text-3xl font-bold text-white mb-4 font-display">Ready to Write Your Success Story?</h2>
            <p class="text-emerald-100 mb-8 max-w-2xl mx-auto">
                Let's discuss your project and see how we can help you achieve remarkable results.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/contact" class="inline-flex items-center gap-2 bg-white text-emerald-600 px-8 py-3 font-semibold hover:bg-gray-50 transition-all duration-300 transform hover:scale-105">
                    Start Your Project
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>
                <a href="/contact" class="inline-flex items-center gap-2 border-2 border-white text-white px-8 py-3 font-semibold hover:bg-white/10 transition-all duration-300">
                    Contact Our Team
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>

    @include('layouts.footer')

    <script>
        // Filter functionality
        const filterBtns = document.querySelectorAll('.filter-btn');
        const caseStudies = document.querySelectorAll('.group');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const filter = btn.textContent;
                
                // Update active state
                filterBtns.forEach(b => {
                    b.classList.remove('bg-emerald-600', 'text-white');
                    b.classList.add('text-gray-600');
                });
                btn.classList.add('bg-emerald-600', 'text-white');
                btn.classList.remove('text-gray-600');
                
                // Filter logic would go here in production
                // This is a placeholder for actual filtering
            });
        });
    </script>
</body>
</html>