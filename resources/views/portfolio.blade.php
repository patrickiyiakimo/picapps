<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Alta Digital Agency</title>
    
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
                        <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a2 2 0 01-2 2H6a2 2 0 01-2-2V4z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-sm font-semibold uppercase tracking-wider">Our Work</span>
                </div>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 font-display">
                    Where Ideas Become 
                    <span class="bg-gradient-to-r from-emerald-400 to-emerald-300 bg-clip-text text-transparent">Digital Reality</span>
                </h1>
                <p class="text-gray-300 text-lg md:text-xl leading-relaxed">
                    Explore our portfolio of successful projects across web development, mobile apps, and e-commerce solutions.
                </p>
            </div>
        </div>
    </div>

    <!-- Filter Section -->
    <div class="sticky top-16 z-40 bg-white border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-wrap justify-center gap-2 py-4">
                <button class="filter-btn active px-6 py-2 text-sm font-medium bg-emerald-600 text-white transition">All Projects</button>
                <button class="filter-btn px-6 py-2 text-sm font-medium text-gray-600 hover:bg-gray-100 transition">Web Development</button>
                <button class="filter-btn px-6 py-2 text-sm font-medium text-gray-600 hover:bg-gray-100 transition">Mobile Apps</button>
                <button class="filter-btn px-6 py-2 text-sm font-medium text-gray-600 hover:bg-gray-100 transition">E-commerce</button>
                <button class="filter-btn px-6 py-2 text-sm font-medium text-gray-600 hover:bg-gray-100 transition">UI/UX Design</button>
                <button class="filter-btn px-6 py-2 text-sm font-medium text-gray-600 hover:bg-gray-100 transition">Healthcare</button>
            </div>
        </div>
    </div>

    <!-- Portfolio Grid -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        
        <!-- Featured Project (Large) -->
        <div class="mb-16">
            <div class="group relative overflow-hidden border border-gray-200 hover:border-emerald-300 hover:shadow-xl transition-all duration-500">
                <div class="grid grid-cols-1 lg:grid-cols-2">
                    <div class="relative h-64 lg:h-auto overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" 
                             alt="Featured Project" 
                             class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute top-4 left-4">
                            <span class="bg-emerald-600 text-white text-xs px-3 py-1">Featured Project</span>
                        </div>
                    </div>
                    <div class="p-8 bg-white">
                        <span class="text-sm text-emerald-600 font-semibold">E-commerce</span>
                        <h2 class="text-2xl font-bold text-navy-900 mt-2 mb-4">FashionStyle E-commerce Platform</h2>
                        <p class="text-gray-600 mb-4">A fully custom e-commerce solution with AI-powered recommendations, real-time inventory management, and seamless payment integration.</p>
                        <div class="grid grid-cols-3 gap-4 mb-6">
                            <div>
                                <div class="text-xl font-bold text-emerald-600">312%</div>
                                <p class="text-xs text-gray-500">Sales Increase</p>
                            </div>
                            <div>
                                <div class="text-xl font-bold text-emerald-600">45%</div>
                                <p class="text-xs text-gray-500">Faster Load Time</p>
                            </div>
                            <div>
                                <div class="text-xl font-bold text-emerald-600">28%</div>
                                <p class="text-xs text-gray-500">Conversion Rate</p>
                            </div>
                        </div>
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="text-xs bg-gray-100 text-gray-600 px-2 py-1">Laravel</span>
                            <span class="text-xs bg-gray-100 text-gray-600 px-2 py-1">React</span>
                            <span class="text-xs bg-gray-100 text-gray-600 px-2 py-1">Tailwind CSS</span>
                            <span class="text-xs bg-gray-100 text-gray-600 px-2 py-1">Stripe</span>
                        </div>
                        <a href="#" class="inline-flex items-center gap-2 text-emerald-600 font-semibold hover:text-emerald-500">
                            View Case Study
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Portfolio Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            
            <!-- Project 1 -->
            <div class="group bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-xl transition-all duration-300 overflow-hidden">
                <div class="relative h-56 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Project thumbnail" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-navy-900/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="absolute bottom-3 left-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <a href="#" class="bg-white text-navy-900 px-3 py-1 text-xs font-semibold hover:bg-emerald-600 hover:text-white transition">View Project →</a>
                    </div>
                </div>
                <div class="p-4">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-xs text-emerald-600 font-semibold">Mobile App</span>
                        <span class="text-xs text-gray-400">2024</span>
                    </div>
                    <h3 class="text-lg font-bold text-navy-900 mb-1">FitTrack Fitness App</h3>
                    <p class="text-gray-500 text-sm">Cross-platform fitness tracking app with 500K+ downloads.</p>
                    <div class="flex flex-wrap gap-1 mt-3">
                        <span class="text-xs bg-gray-100 text-gray-500 px-2 py-0.5">Flutter</span>
                        <span class="text-xs bg-gray-100 text-gray-500 px-2 py-0.5">Firebase</span>
                    </div>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="group bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-xl transition-all duration-300 overflow-hidden">
                <div class="relative h-56 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1472851294608-062f824d29cc?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Project thumbnail" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-navy-900/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="absolute bottom-3 left-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <a href="#" class="bg-white text-navy-900 px-3 py-1 text-xs font-semibold hover:bg-emerald-600 hover:text-white transition">View Project →</a>
                    </div>
                </div>
                <div class="p-4">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-xs text-emerald-600 font-semibold">E-commerce</span>
                        <span class="text-xs text-gray-400">2024</span>
                    </div>
                    <h3 class="text-lg font-bold text-navy-900 mb-1">StyleStore Fashion Shop</h3>
                    <p class="text-gray-500 text-sm">Custom Shopify store with 312% sales increase in 6 months.</p>
                    <div class="flex flex-wrap gap-1 mt-3">
                        <span class="text-xs bg-gray-100 text-gray-500 px-2 py-0.5">Shopify</span>
                        <span class="text-xs bg-gray-100 text-gray-500 px-2 py-0.5">Liquid</span>
                    </div>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="group bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-xl transition-all duration-300 overflow-hidden">
                <div class="relative h-56 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Project thumbnail" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-navy-900/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="absolute bottom-3 left-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <a href="#" class="bg-white text-navy-900 px-3 py-1 text-xs font-semibold hover:bg-emerald-600 hover:text-white transition">View Project →</a>
                    </div>
                </div>
                <div class="p-4">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-xs text-emerald-600 font-semibold">Healthcare</span>
                        <span class="text-xs text-gray-400">2023</span>
                    </div>
                    <h3 class="text-lg font-bold text-navy-900 mb-1">MediHealth Portal</h3>
                    <p class="text-gray-500 text-sm">HIPAA-compliant telehealth platform serving 100K+ patients.</p>
                    <div class="flex flex-wrap gap-1 mt-3">
                        <span class="text-xs bg-gray-100 text-gray-500 px-2 py-0.5">Laravel</span>
                        <span class="text-xs bg-gray-100 text-gray-500 px-2 py-0.5">Vue.js</span>
                    </div>
                </div>
            </div>

            <!-- Project 4 -->
            <div class="group bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-xl transition-all duration-300 overflow-hidden">
                <div class="relative h-56 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Project thumbnail" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-navy-900/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="absolute bottom-3 left-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <a href="#" class="bg-white text-navy-900 px-3 py-1 text-xs font-semibold hover:bg-emerald-600 hover:text-white transition">View Project →</a>
                    </div>
                </div>
                <div class="p-4">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-xs text-emerald-600 font-semibold">Corporate</span>
                        <span class="text-xs text-gray-400">2024</span>
                    </div>
                    <h3 class="text-lg font-bold text-navy-900 mb-1">GlobalCorp Website</h3>
                    <p class="text-gray-500 text-sm">Enterprise website redesign with 215% lead increase.</p>
                    <div class="flex flex-wrap gap-1 mt-3">
                        <span class="text-xs bg-gray-100 text-gray-500 px-2 py-0.5">React</span>
                        <span class="text-xs bg-gray-100 text-gray-500 px-2 py-0.5">Node.js</span>
                    </div>
                </div>
            </div>

            <!-- Project 5 -->
            <div class="group bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-xl transition-all duration-300 overflow-hidden">
                <div class="relative h-56 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Project thumbnail" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-navy-900/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="absolute bottom-3 left-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <a href="#" class="bg-white text-navy-900 px-3 py-1 text-xs font-semibold hover:bg-emerald-600 hover:text-white transition">View Project →</a>
                    </div>
                </div>
                <div class="p-4">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-xs text-emerald-600 font-semibold">EdTech</span>
                        <span class="text-xs text-gray-400">2024</span>
                    </div>
                    <h3 class="text-lg font-bold text-navy-900 mb-1">LearnApp Platform</h3>
                    <p class="text-gray-500 text-sm">Learning management system with 1M+ active users.</p>
                    <div class="flex flex-wrap gap-1 mt-3">
                        <span class="text-xs bg-gray-100 text-gray-500 px-2 py-0.5">Flutter</span>
                        <span class="text-xs bg-gray-100 text-gray-500 px-2 py-0.5">Firebase</span>
                    </div>
                </div>
            </div>

            <!-- Project 6 -->
            <div class="group bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-xl transition-all duration-300 overflow-hidden">
                <div class="relative h-56 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Project thumbnail" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-navy-900/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="absolute bottom-3 left-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <a href="#" class="bg-white text-navy-900 px-3 py-1 text-xs font-semibold hover:bg-emerald-600 hover:text-white transition">View Project →</a>
                    </div>
                </div>
                <div class="p-4">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-xs text-emerald-600 font-semibold">Retail</span>
                        <span class="text-xs text-gray-400">2024</span>
                    </div>
                    <h3 class="text-lg font-bold text-navy-900 mb-1">HomeBuddy Store</h3>
                    <p class="text-gray-500 text-sm">Omnichannel retail solution with 178% sales growth.</p>
                    <div class="flex flex-wrap gap-1 mt-3">
                        <span class="text-xs bg-gray-100 text-gray-500 px-2 py-0.5">WooCommerce</span>
                        <span class="text-xs bg-gray-100 text-gray-500 px-2 py-0.5">React</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Load More Button -->
        <div class="text-center mt-12">
            <a href="#" class="inline-flex items-center gap-2 bg-navy-900 text-white px-8 py-3 font-semibold hover:bg-emerald-600 transition-all duration-300">
                Load More Projects
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
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-6 border border-gray-200">
                    <div class="flex text-emerald-500 mb-3">★★★★★</div>
                    <p class="text-gray-600 text-sm italic mb-4">"Alta transformed our online presence completely. The team's expertise and dedication are unmatched."</p>
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
                    <div class="flex text-emerald-500 mb-3">★★★★★</div>
                    <p class="text-gray-600 text-sm italic mb-4">"The mobile app they built exceeded all expectations. Download numbers are through the roof!"</p>
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
                    <div class="flex text-emerald-500 mb-3">★★★★★</div>
                    <p class="text-gray-600 text-sm italic mb-4">"Professional, responsive, and technically excellent. Highly recommend their services."</p>
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
            <h2 class="text-2xl md:text-3xl font-bold text-white mb-4 font-display">Ready to Start Your Project?</h2>
            <p class="text-emerald-100 mb-8 max-w-2xl mx-auto">
                Let's discuss your vision and create something amazing together.
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
        const projects = document.querySelectorAll('.group');

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
                
                // In production, you would filter projects here
                // This is a placeholder for actual filtering logic
            });
        });
    </script>
</body>
</html>