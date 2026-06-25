<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio · ALTA Digital Agency</title>
    
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
        
        a, button, div, img {
            border-radius: 0 !important;
        }
        
        .portfolio-card {
            transition: all 0.4s cubic-bezier(0.2, 0.9, 0.4, 1.1);
        }
        
        .portfolio-card:hover {
            transform: translateY(-6px);
        }
        
        .filter-btn.active {
            background: #000000;
            color: white;
        }
        
        .project-overlay {
            opacity: 0;
            transition: all 0.3s ease;
        }
        
        .portfolio-card:hover .project-overlay {
            opacity: 1;
        }
    </style>
</head>
<body class="bg-white">

    @include('layouts.navbar')

    <!-- Hero Section - Black/White Professional -->
    <section class="relative bg-black min-h-[500px] flex items-center">
        <div class="absolute inset-0 z-0 opacity-10">
            <div class="absolute top-0 right-0 w-96 h-96 bg-white/5 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 left-0 w-96 h-96 bg-white/5 rounded-full blur-3xl"></div>
        </div>
        
        <div class="relative z-10 max-w-7xl mx-auto px-5 lg:px-8 py-20">
            <div class="max-w-3xl">
                
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-6 font-display tracking-tight">
                    Where Ideas Become 
                    <span class="text-white/60">Digital Reality</span>
                </h1>
                <p class="text-gray-400 text-lg md:text-xl leading-relaxed">
                    Explore our portfolio of successful projects across web development, mobile apps, and e-commerce solutions.
                </p>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <div class="border-b border-gray-200 bg-white">
        <div class="max-w-7xl mx-auto px-5 lg:px-8 py-12">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-bold text-black">150+</div>
                    <p class="text-gray-500 text-sm mt-1">Projects Delivered</p>
                </div>
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-bold text-black">98%</div>
                    <p class="text-gray-500 text-sm mt-1">Client Satisfaction</p>
                </div>
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-bold text-black">50+</div>
                    <p class="text-gray-500 text-sm mt-1">Global Clients</p>
                </div>
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-bold text-black">8+</div>
                    <p class="text-gray-500 text-sm mt-1">Years Excellence</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Filter Section -->
    <div class="sticky top-16 z-40 bg-white border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-5 lg:px-8">
            <div class="flex flex-wrap justify-center gap-2 py-4">
                <button class="filter-btn active px-6 py-2 text-sm font-medium bg-black text-white transition" data-filter="all">All Projects</button>
                <button class="filter-btn px-6 py-2 text-sm font-medium text-gray-600 hover:bg-gray-100 transition" data-filter="web">Web Development</button>
                <button class="filter-btn px-6 py-2 text-sm font-medium text-gray-600 hover:bg-gray-100 transition" data-filter="mobile">Mobile Apps</button>
                <button class="filter-btn px-6 py-2 text-sm font-medium text-gray-600 hover:bg-gray-100 transition" data-filter="ecommerce">E-commerce</button>
                <button class="filter-btn px-6 py-2 text-sm font-medium text-gray-600 hover:bg-gray-100 transition" data-filter="ui-ux">UI/UX Design</button>
                <button class="filter-btn px-6 py-2 text-sm font-medium text-gray-600 hover:bg-gray-100 transition" data-filter="healthcare">Healthcare</button>
            </div>
        </div>
    </div>

    <!-- Portfolio Grid -->
    <div class="max-w-7xl mx-auto px-5 lg:px-8 py-16">
        
        <!-- Featured Project (Large) -->
        <div class="mb-16">
            <div class="group relative overflow-hidden border border-gray-200 hover:border-black transition-all duration-500">
                <div class="grid grid-cols-1 lg:grid-cols-2">
                    <div class="relative h-64 lg:h-auto overflow-hidden bg-gray-100">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" 
                             alt="Featured Project" 
                             class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        <div class="absolute top-4 left-4">
                            <span class="bg-black text-white text-xs px-3 py-1 font-semibold tracking-wide">Featured Project</span>
                        </div>
                    </div>
                    <div class="p-8 bg-white">
                        <span class="text-xs text-black font-semibold tracking-wide uppercase">E-commerce</span>
                        <h2 class="text-2xl md:text-3xl font-bold text-black mt-2 mb-4 font-display">FashionStyle E-commerce Platform</h2>
                        <p class="text-gray-500 mb-6 leading-relaxed">A fully custom e-commerce solution with AI-powered recommendations, real-time inventory management, and seamless payment integration that serves over 500,000 active users monthly.</p>
                        <div class="grid grid-cols-3 gap-4 mb-6">
                            <div>
                                <div class="text-2xl font-bold text-black">312%</div>
                                <p class="text-xs text-gray-400">Sales Increase</p>
                            </div>
                            <div>
                                <div class="text-2xl font-bold text-black">45%</div>
                                <p class="text-xs text-gray-400">Faster Load Time</p>
                            </div>
                            <div>
                                <div class="text-2xl font-bold text-black">28%</div>
                                <p class="text-xs text-gray-400">Conversion Rate</p>
                            </div>
                        </div>
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="text-xs bg-gray-100 text-gray-600 px-2 py-1">Laravel</span>
                            <span class="text-xs bg-gray-100 text-gray-600 px-2 py-1">React</span>
                            <span class="text-xs bg-gray-100 text-gray-600 px-2 py-1">Tailwind CSS</span>
                            <span class="text-xs bg-gray-100 text-gray-600 px-2 py-1">Stripe</span>
                            <span class="text-xs bg-gray-100 text-gray-600 px-2 py-1">Redis</span>
                        </div>
                        <a href="#" class="inline-flex items-center gap-2 text-black font-semibold text-sm hover:text-gray-500 transition group">
                            View Case Study
                            <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Portfolio Grid -->
        <div id="portfolioGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            
            <!-- Project 1 - Mobile App -->
            <div class="portfolio-card group bg-white border border-gray-200 hover:border-black transition-all duration-300 overflow-hidden" data-category="mobile">
                <div class="relative h-64 overflow-hidden bg-gray-100">
                    <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="FitTrack Fitness App" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="project-overlay absolute inset-0 bg-black/80 flex items-center justify-center">
                        <a href="#" class="bg-white text-black px-5 py-2 text-sm font-semibold hover:bg-gray-100 transition">View Project →</a>
                    </div>
                </div>
                <div class="p-5">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-xs text-black font-semibold tracking-wide">Mobile App</span>
                        <span class="text-xs text-gray-400">2024</span>
                    </div>
                    <h3 class="text-lg font-bold text-black mb-1">FitTrack Fitness App</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">Cross-platform fitness tracking app with 500K+ downloads and 4.9★ rating.</p>
                    <div class="flex flex-wrap gap-1 mt-3">
                        <span class="text-xs bg-gray-100 text-gray-500 px-2 py-0.5">Flutter</span>
                        <span class="text-xs bg-gray-100 text-gray-500 px-2 py-0.5">Firebase</span>
                    </div>
                </div>
            </div>

            <!-- Project 2 - E-commerce -->
            <div class="portfolio-card group bg-white border border-gray-200 hover:border-black transition-all duration-300 overflow-hidden" data-category="ecommerce">
                <div class="relative h-64 overflow-hidden bg-gray-100">
                    <img src="https://images.unsplash.com/photo-1472851294608-062f824d29cc?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="StyleStore Fashion Shop" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="project-overlay absolute inset-0 bg-black/80 flex items-center justify-center">
                        <a href="#" class="bg-white text-black px-5 py-2 text-sm font-semibold hover:bg-gray-100 transition">View Project →</a>
                    </div>
                </div>
                <div class="p-5">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-xs text-black font-semibold tracking-wide">E-commerce</span>
                        <span class="text-xs text-gray-400">2024</span>
                    </div>
                    <h3 class="text-lg font-bold text-black mb-1">StyleStore Fashion Shop</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">Custom Shopify store with 312% sales increase in 6 months.</p>
                    <div class="flex flex-wrap gap-1 mt-3">
                        <span class="text-xs bg-gray-100 text-gray-500 px-2 py-0.5">Shopify</span>
                        <span class="text-xs bg-gray-100 text-gray-500 px-2 py-0.5">Liquid</span>
                    </div>
                </div>
            </div>

            <!-- Project 3 - Healthcare -->
            <div class="portfolio-card group bg-white border border-gray-200 hover:border-black transition-all duration-300 overflow-hidden" data-category="healthcare">
                <div class="relative h-64 overflow-hidden bg-gray-100">
                    <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="MediHealth Portal" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="project-overlay absolute inset-0 bg-black/80 flex items-center justify-center">
                        <a href="#" class="bg-white text-black px-5 py-2 text-sm font-semibold hover:bg-gray-100 transition">View Project →</a>
                    </div>
                </div>
                <div class="p-5">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-xs text-black font-semibold tracking-wide">Healthcare</span>
                        <span class="text-xs text-gray-400">2023</span>
                    </div>
                    <h3 class="text-lg font-bold text-black mb-1">MediHealth Portal</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">HIPAA-compliant telehealth platform serving 100K+ patients.</p>
                    <div class="flex flex-wrap gap-1 mt-3">
                        <span class="text-xs bg-gray-100 text-gray-500 px-2 py-0.5">Laravel</span>
                        <span class="text-xs bg-gray-100 text-gray-500 px-2 py-0.5">Vue.js</span>
                    </div>
                </div>
            </div>

            <!-- Project 4 - Web Development -->
            <div class="portfolio-card group bg-white border border-gray-200 hover:border-black transition-all duration-300 overflow-hidden" data-category="web">
                <div class="relative h-64 overflow-hidden bg-gray-100">
                    <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="GlobalCorp Website" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="project-overlay absolute inset-0 bg-black/80 flex items-center justify-center">
                        <a href="#" class="bg-white text-black px-5 py-2 text-sm font-semibold hover:bg-gray-100 transition">View Project →</a>
                    </div>
                </div>
                <div class="p-5">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-xs text-black font-semibold tracking-wide">Web Development</span>
                        <span class="text-xs text-gray-400">2024</span>
                    </div>
                    <h3 class="text-lg font-bold text-black mb-1">GlobalCorp Website</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">Enterprise website redesign with 215% lead increase.</p>
                    <div class="flex flex-wrap gap-1 mt-3">
                        <span class="text-xs bg-gray-100 text-gray-500 px-2 py-0.5">React</span>
                        <span class="text-xs bg-gray-100 text-gray-500 px-2 py-0.5">Node.js</span>
                    </div>
                </div>
            </div>

            <!-- Project 5 - UI/UX Design -->
            <div class="portfolio-card group bg-white border border-gray-200 hover:border-black transition-all duration-300 overflow-hidden" data-category="ui-ux">
                <div class="relative h-64 overflow-hidden bg-gray-100">
                    <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="LearnApp Platform" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="project-overlay absolute inset-0 bg-black/80 flex items-center justify-center">
                        <a href="#" class="bg-white text-black px-5 py-2 text-sm font-semibold hover:bg-gray-100 transition">View Project →</a>
                    </div>
                </div>
                <div class="p-5">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-xs text-black font-semibold tracking-wide">UI/UX Design</span>
                        <span class="text-xs text-gray-400">2024</span>
                    </div>
                    <h3 class="text-lg font-bold text-black mb-1">LearnApp Platform</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">Learning management system with 1M+ active users and intuitive interface.</p>
                    <div class="flex flex-wrap gap-1 mt-3">
                        <span class="text-xs bg-gray-100 text-gray-500 px-2 py-0.5">Figma</span>
                        <span class="text-xs bg-gray-100 text-gray-500 px-2 py-0.5">Adobe XD</span>
                    </div>
                </div>
            </div>

            <!-- Project 6 - E-commerce -->
            <div class="portfolio-card group bg-white border border-gray-200 hover:border-black transition-all duration-300 overflow-hidden" data-category="ecommerce">
                <div class="relative h-64 overflow-hidden bg-gray-100">
                    <img src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="HomeBuddy Store" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="project-overlay absolute inset-0 bg-black/80 flex items-center justify-center">
                        <a href="#" class="bg-white text-black px-5 py-2 text-sm font-semibold hover:bg-gray-100 transition">View Project →</a>
                    </div>
                </div>
                <div class="p-5">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-xs text-black font-semibold tracking-wide">E-commerce</span>
                        <span class="text-xs text-gray-400">2024</span>
                    </div>
                    <h3 class="text-lg font-bold text-black mb-1">HomeBuddy Store</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">Omnichannel retail solution with 178% sales growth.</p>
                    <div class="flex flex-wrap gap-1 mt-3">
                        <span class="text-xs bg-gray-100 text-gray-500 px-2 py-0.5">WooCommerce</span>
                        <span class="text-xs bg-gray-100 text-gray-500 px-2 py-0.5">React</span>
                    </div>
                </div>
            </div>

            <!-- Project 7 - Mobile App -->
            <div class="portfolio-card group bg-white border border-gray-200 hover:border-black transition-all duration-300 overflow-hidden" data-category="mobile">
                <div class="relative h-64 overflow-hidden bg-gray-100">
                    <img src="https://images.unsplash.com/photo-1526498460520-4c246339d76b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="FoodDelivery App" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="project-overlay absolute inset-0 bg-black/80 flex items-center justify-center">
                        <a href="#" class="bg-white text-black px-5 py-2 text-sm font-semibold hover:bg-gray-100 transition">View Project →</a>
                    </div>
                </div>
                <div class="p-5">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-xs text-black font-semibold tracking-wide">Mobile App</span>
                        <span class="text-xs text-gray-400">2024</span>
                    </div>
                    <h3 class="text-lg font-bold text-black mb-1">QuickEats Delivery</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">Food delivery app with real-time tracking and 1M+ orders processed.</p>
                    <div class="flex flex-wrap gap-1 mt-3">
                        <span class="text-xs bg-gray-100 text-gray-500 px-2 py-0.5">React Native</span>
                        <span class="text-xs bg-gray-100 text-gray-500 px-2 py-0.5">Node.js</span>
                    </div>
                </div>
            </div>

            <!-- Project 8 - Web Development -->
            <div class="portfolio-card group bg-white border border-gray-200 hover:border-black transition-all duration-300 overflow-hidden" data-category="web">
                <div class="relative h-64 overflow-hidden bg-gray-100">
                    <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Portfolio Platform" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="project-overlay absolute inset-0 bg-black/80 flex items-center justify-center">
                        <a href="#" class="bg-white text-black px-5 py-2 text-sm font-semibold hover:bg-gray-100 transition">View Project →</a>
                    </div>
                </div>
                <div class="p-5">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-xs text-black font-semibold tracking-wide">Web Development</span>
                        <span class="text-xs text-gray-400">2023</span>
                    </div>
                    <h3 class="text-lg font-bold text-black mb-1">CreativePort Platform</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">Portfolio platform for creatives with 50K+ active users.</p>
                    <div class="flex flex-wrap gap-1 mt-3">
                        <span class="text-xs bg-gray-100 text-gray-500 px-2 py-0.5">Next.js</span>
                        <span class="text-xs bg-gray-100 text-gray-500 px-2 py-0.5">MongoDB</span>
                    </div>
                </div>
            </div>

            <!-- Project 9 - UI/UX Design -->
            <div class="portfolio-card group bg-white border border-gray-200 hover:border-black transition-all duration-300 overflow-hidden" data-category="ui-ux">
                <div class="relative h-64 overflow-hidden bg-gray-100">
                    <img src="https://images.unsplash.com/photo-1586717791821-3f44a563fa4c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Banking App Design" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="project-overlay absolute inset-0 bg-black/80 flex items-center justify-center">
                        <a href="#" class="bg-white text-black px-5 py-2 text-sm font-semibold hover:bg-gray-100 transition">View Project →</a>
                    </div>
                </div>
                <div class="p-5">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-xs text-black font-semibold tracking-wide">UI/UX Design</span>
                        <span class="text-xs text-gray-400">2024</span>
                    </div>
                    <h3 class="text-lg font-bold text-black mb-1">NeoBank Mobile App</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">Modern banking app design with 4.9★ user rating.</p>
                    <div class="flex flex-wrap gap-1 mt-3">
                        <span class="text-xs bg-gray-100 text-gray-500 px-2 py-0.5">Figma</span>
                        <span class="text-xs bg-gray-100 text-gray-500 px-2 py-0.5">Prototyping</span>
                    </div>
                </div>
            </div>

        </div>

        <!-- No Results Message -->
        <div id="noResults" class="text-center py-12 hidden">
            <p class="text-gray-500 text-lg">No projects found in this category.</p>
        </div>

        <!-- Load More Button -->
        <div class="text-center mt-12">
            <button id="loadMoreBtn" class="inline-flex items-center justify-center gap-2 border border-black text-black px-8 py-3.5 font-semibold text-sm hover:bg-black hover:text-white transition-all duration-300">
                <span>Load More Projects</span>
                <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
        </div>
    </div>

    <!-- Testimonial Section -->
    <div class="bg-gray-50 py-20 border-t border-gray-200">
        <div class="max-w-7xl mx-auto px-5 lg:px-8">
            <div class="text-center mb-12">
                <div class="inline-flex items-center gap-2 border border-gray-200 bg-white px-4 py-2 mb-6">
                    <span class="w-1.5 h-1.5 bg-black"></span>
                    <span class="text-xs font-semibold uppercase tracking-wider text-gray-600">Testimonials</span>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-black mb-4 font-display tracking-tight">What Our <span class="text-gray-400">Clients Say</span></h2>
                <div class="w-16 h-px bg-black mx-auto"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white border border-gray-200 p-8">
                    <div class="flex text-black mb-4 text-lg">★★★★★</div>
                    <p class="text-gray-500 text-sm italic leading-relaxed mb-6">"Alta transformed our online presence completely. The team's expertise and dedication are unmatched. We've seen remarkable growth since launch."</p>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-gray-200 flex items-center justify-center">
                            <span class="text-sm font-bold text-black">JD</span>
                        </div>
                        <div>
                            <p class="font-semibold text-black text-sm">John Doe</p>
                            <p class="text-xs text-gray-400">CEO, FashionStyle</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white border border-gray-200 p-8">
                    <div class="flex text-black mb-4 text-lg">★★★★★</div>
                    <p class="text-gray-500 text-sm italic leading-relaxed mb-6">"The mobile app they built exceeded all expectations. Download numbers are through the roof and user feedback has been overwhelmingly positive."</p>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-gray-200 flex items-center justify-center">
                            <span class="text-sm font-bold text-black">JS</span>
                        </div>
                        <div>
                            <p class="font-semibold text-black text-sm">Jane Smith</p>
                            <p class="text-xs text-gray-400">Founder, FitTrack</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white border border-gray-200 p-8">
                    <div class="flex text-black mb-4 text-lg">★★★★★</div>
                    <p class="text-gray-500 text-sm italic leading-relaxed mb-6">"Professional, responsive, and technically excellent. They delivered ahead of schedule and exceeded our requirements. Highly recommend."</p>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-gray-200 flex items-center justify-center">
                            <span class="text-sm font-bold text-black">MC</span>
                        </div>
                        <div>
                            <p class="font-semibold text-black text-sm">Michael Chen</p>
                            <p class="text-xs text-gray-400">CTO, GlobalCorp</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <section class="py-20 bg-black">
        <div class="max-w-7xl mx-auto px-5 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-4 font-display tracking-tight">Ready to Start Your Project?</h2>
            <div class="w-16 h-px bg-white/30 mx-auto mb-6"></div>
            <p class="text-gray-400 mb-8 max-w-2xl mx-auto text-base">
                Let's discuss your vision and create something amazing together.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/contact" class="inline-flex items-center justify-center gap-2 bg-white text-black px-8 py-3.5 font-semibold text-sm hover:bg-gray-100 transition-all duration-300 group">
                    <span>Start Your Project</span>
                    <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>
                <a href="/contact" class="inline-flex items-center justify-center gap-2 border border-white/30 text-white px-8 py-3.5 font-semibold text-sm hover:bg-white/10 transition-all duration-300">
                    <span>Contact Our Team</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    @include('layouts.footer')

    <script>
        // Filter functionality
        const filterBtns = document.querySelectorAll('.filter-btn');
        const portfolioItems = document.querySelectorAll('.portfolio-card');
        const noResults = document.getElementById('noResults');
        const loadMoreBtn = document.getElementById('loadMoreBtn');
        
        let visibleCount = 6; // Initially show 6 items
        
        function filterProjects(category) {
            let count = 0;
            portfolioItems.forEach((item, index) => {
                const itemCategory = item.getAttribute('data-category');
                if (category === 'all' || itemCategory === category) {
                    if (count < visibleCount) {
                        item.style.display = 'block';
                        count++;
                    } else {
                        item.style.display = 'none';
                    }
                } else {
                    item.style.display = 'none';
                }
            });
            
            if (count === 0) {
                noResults.classList.remove('hidden');
            } else {
                noResults.classList.add('hidden');
            }
            
            // Show/hide load more button
            const totalVisible = Array.from(portfolioItems).filter(item => {
                const itemCategory = item.getAttribute('data-category');
                return (category === 'all' || itemCategory === category);
            }).length;
            
            if (loadMoreBtn) {
                if (visibleCount >= totalVisible) {
                    loadMoreBtn.style.display = 'none';
                } else {
                    loadMoreBtn.style.display = 'inline-flex';
                }
            }
        }
        
        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const filter = btn.getAttribute('data-filter');
                
                // Update active state
                filterBtns.forEach(b => {
                    b.classList.remove('active', 'bg-black', 'text-white');
                    b.classList.add('text-gray-600');
                });
                btn.classList.add('active', 'bg-black', 'text-white');
                btn.classList.remove('text-gray-600');
                
                // Reset visible count
                visibleCount = 6;
                
                // Filter projects
                filterProjects(filter);
            });
        });
        
        // Load more functionality
        if (loadMoreBtn) {
            loadMoreBtn.addEventListener('click', () => {
                const activeFilter = document.querySelector('.filter-btn.active').getAttribute('data-filter');
                visibleCount += 3;
                filterProjects(activeFilter);
            });
        }
        
        // Initialize
        filterProjects('all');
    </script>
</body>
</html>
