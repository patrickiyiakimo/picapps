<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Alta Digital Agency</title>
    
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
                        <path fill-rule="evenodd" d="M18 13v5a2 2 0 01-2 2H4a2 2 0 01-2-2v-5m16 0h-4m4 0l-8-4-8 4m8-4V3" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-sm font-semibold uppercase tracking-wider">Latest Insights</span>
                </div>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 font-display">
                    Thoughts, Ideas & 
                    <span class="bg-gradient-to-r from-emerald-400 to-emerald-300 bg-clip-text text-transparent">Digital Insights</span>
                </h1>
                <p class="text-gray-300 text-lg md:text-xl leading-relaxed">
                    Expert advice, industry trends, and practical tips for your digital journey.
                </p>
            </div>
        </div>
    </div>

    <!-- Featured Post -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="relative overflow-hidden border border-gray-200 hover:border-emerald-300 hover:shadow-xl transition-all duration-500">
            <div class="grid grid-cols-1 lg:grid-cols-2">
                <div class="relative h-64 lg:h-auto overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" 
                         alt="Featured post" 
                         class="w-full h-full object-cover transition-transform duration-700 hover:scale-110">
                    <div class="absolute top-4 left-4">
                        <span class="bg-emerald-600 text-white text-xs px-3 py-1">Featured</span>
                    </div>
                </div>
                <div class="p-8 flex flex-col justify-center">
                    <div class="flex items-center gap-3 text-sm text-gray-500 mb-4">
                        <span>📅 March 15, 2024</span>
                        <span>📖 8 min read</span>
                        <span>🏷️ Web Development</span>
                    </div>
                    <h2 class="text-2xl md:text-3xl font-bold text-navy-900 mb-4 hover:text-emerald-600 transition">
                        <a href="#">The Future of Web Development: Trends to Watch in 2024</a>
                    </h2>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Explore the emerging technologies and methodologies that are shaping the future of web development, from AI-powered tools to serverless architecture.
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" 
                                 alt="Author" 
                                 class="w-10 h-10 rounded-full object-cover">
                            <div>
                                <p class="text-sm font-semibold text-navy-900">John Anderson</p>
                                <p class="text-xs text-gray-500">Founder & CEO</p>
                            </div>
                        </div>
                        <a href="#" class="inline-flex items-center gap-2 text-emerald-600 font-semibold hover:text-emerald-500">
                            Read More
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Category Filters -->
    <div class="border-b border-gray-200 bg-white sticky top-16 z-40">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-wrap gap-2 py-4">
                <button class="category-btn active px-4 py-2 text-sm font-medium bg-emerald-600 text-white transition">All Posts</button>
                <button class="category-btn px-4 py-2 text-sm font-medium text-gray-600 hover:bg-gray-100 transition">Web Development</button>
                <button class="category-btn px-4 py-2 text-sm font-medium text-gray-600 hover:bg-gray-100 transition">Mobile Apps</button>
                <button class="category-btn px-4 py-2 text-sm font-medium text-gray-600 hover:bg-gray-100 transition">E-commerce</button>
                <button class="category-btn px-4 py-2 text-sm font-medium text-gray-600 hover:bg-gray-100 transition">UI/UX Design</button>
                <button class="category-btn px-4 py-2 text-sm font-medium text-gray-600 hover:bg-gray-100 transition">SEO & Marketing</button>
                <button class="category-btn px-4 py-2 text-sm font-medium text-gray-600 hover:bg-gray-100 transition">AI & Tech</button>
                <button class="category-btn px-4 py-2 text-sm font-medium text-gray-600 hover:bg-gray-100 transition">Business</button>
            </div>
        </div>
    </div>

    <!-- Blog Posts Grid -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Post 1 -->
            <article class="group bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-xl transition-all duration-300">
                <div class="relative h-56 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Laravel best practices" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute top-3 left-3">
                        <span class="bg-emerald-600 text-white text-xs px-2 py-1">Web Development</span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-3 text-xs text-gray-500 mb-3">
                        <span>📅 Mar 10, 2024</span>
                        <span>⏱️ 6 min read</span>
                    </div>
                    <h3 class="text-xl font-bold text-navy-900 mb-2 group-hover:text-emerald-600 transition">
                        <a href="#">10 Laravel Best Practices for 2024</a>
                    </h3>
                    <p class="text-gray-500 text-sm mb-4">
                        Learn the essential Laravel best practices to write cleaner, more maintainable, and secure code.
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" 
                                 alt="Author" 
                                 class="w-6 h-6 rounded-full object-cover">
                            <span class="text-xs text-gray-600">John Anderson</span>
                        </div>
                        <a href="#" class="text-emerald-600 text-sm font-semibold hover:text-emerald-500">Read →</a>
                    </div>
                </div>
            </article>

            <!-- Post 2 -->
            <article class="group bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-xl transition-all duration-300">
                <div class="relative h-56 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Flutter vs React Native" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute top-3 left-3">
                        <span class="bg-emerald-600 text-white text-xs px-2 py-1">Mobile Apps</span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-3 text-xs text-gray-500 mb-3">
                        <span>📅 Mar 5, 2024</span>
                        <span>⏱️ 10 min read</span>
                    </div>
                    <h3 class="text-xl font-bold text-navy-900 mb-2 group-hover:text-emerald-600 transition">
                        <a href="#">Flutter vs React Native: Which One to Choose?</a>
                    </h3>
                    <p class="text-gray-500 text-sm mb-4">
                        A comprehensive comparison of the two leading cross-platform mobile development frameworks.
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" 
                                 alt="Author" 
                                 class="w-6 h-6 rounded-full object-cover">
                            <span class="text-xs text-gray-600">Sarah Chen</span>
                        </div>
                        <a href="#" class="text-emerald-600 text-sm font-semibold hover:text-emerald-500">Read →</a>
                    </div>
                </div>
            </article>

            <!-- Post 3 -->
            <article class="group bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-xl transition-all duration-300">
                <div class="relative h-56 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1472851294608-062f824d29cc?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="E-commerce trends" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute top-3 left-3">
                        <span class="bg-emerald-600 text-white text-xs px-2 py-1">E-commerce</span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-3 text-xs text-gray-500 mb-3">
                        <span>📅 Feb 28, 2024</span>
                        <span>⏱️ 7 min read</span>
                    </div>
                    <h3 class="text-xl font-bold text-navy-900 mb-2 group-hover:text-emerald-600 transition">
                        <a href="#">E-commerce Trends That Will Dominate 2024</a>
                    </h3>
                    <p class="text-gray-500 text-sm mb-4">
                        Discover the latest e-commerce trends and strategies to boost your online sales this year.
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" 
                                 alt="Author" 
                                 class="w-6 h-6 rounded-full object-cover">
                            <span class="text-xs text-gray-600">Michael Rodriguez</span>
                        </div>
                        <a href="#" class="text-emerald-600 text-sm font-semibold hover:text-emerald-500">Read →</a>
                    </div>
                </div>
            </article>

            <!-- Post 4 -->
            <article class="group bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-xl transition-all duration-300">
                <div class="relative h-56 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1586717791821-3f44a563fa4c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="UI/UX principles" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute top-3 left-3">
                        <span class="bg-emerald-600 text-white text-xs px-2 py-1">UI/UX Design</span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-3 text-xs text-gray-500 mb-3">
                        <span>📅 Feb 20, 2024</span>
                        <span>⏱️ 5 min read</span>
                    </div>
                    <h3 class="text-xl font-bold text-navy-900 mb-2 group-hover:text-emerald-600 transition">
                        <a href="#">7 UI/UX Principles Every Designer Should Know</a>
                    </h3>
                    <p class="text-gray-500 text-sm mb-4">
                        Master the fundamental principles of user interface and user experience design.
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" 
                                 alt="Author" 
                                 class="w-6 h-6 rounded-full object-cover">
                            <span class="text-xs text-gray-600">Emily Wong</span>
                        </div>
                        <a href="#" class="text-emerald-600 text-sm font-semibold hover:text-emerald-500">Read →</a>
                    </div>
                </div>
            </article>

            <!-- Post 5 -->
            <article class="group bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-xl transition-all duration-300">
                <div class="relative h-56 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="SEO strategies" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute top-3 left-3">
                        <span class="bg-emerald-600 text-white text-xs px-2 py-1">SEO & Marketing</span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-3 text-xs text-gray-500 mb-3">
                        <span>📅 Feb 15, 2024</span>
                        <span>⏱️ 9 min read</span>
                    </div>
                    <h3 class="text-xl font-bold text-navy-900 mb-2 group-hover:text-emerald-600 transition">
                        <a href="#">SEO Strategies That Actually Work in 2024</a>
                    </h3>
                    <p class="text-gray-500 text-sm mb-4">
                        Actionable SEO strategies to improve your website's search engine rankings.
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" 
                                 alt="Author" 
                                 class="w-6 h-6 rounded-full object-cover">
                            <span class="text-xs text-gray-600">John Anderson</span>
                        </div>
                        <a href="#" class="text-emerald-600 text-sm font-semibold hover:text-emerald-500">Read →</a>
                    </div>
                </div>
            </article>

            <!-- Post 6 -->
            <article class="group bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-xl transition-all duration-300">
                <div class="relative h-56 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1677442136019-21780ecad995?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="AI in development" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute top-3 left-3">
                        <span class="bg-emerald-600 text-white text-xs px-2 py-1">AI & Tech</span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-3 text-xs text-gray-500 mb-3">
                        <span>📅 Feb 10, 2024</span>
                        <span>⏱️ 12 min read</span>
                    </div>
                    <h3 class="text-xl font-bold text-navy-900 mb-2 group-hover:text-emerald-600 transition">
                        <a href="#">How AI is Transforming Software Development</a>
                    </h3>
                    <p class="text-gray-500 text-sm mb-4">
                        Explore how artificial intelligence is revolutionizing the way we build software.
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" 
                                 alt="Author" 
                                 class="w-6 h-6 rounded-full object-cover">
                            <span class="text-xs text-gray-600">Sarah Chen</span>
                        </div>
                        <a href="#" class="text-emerald-600 text-sm font-semibold hover:text-emerald-500">Read →</a>
                    </div>
                </div>
            </article>
        </div>

        <!-- Pagination -->
        <div class="flex justify-center items-center gap-3 mt-12">
            <a href="#" class="px-4 py-2 border border-gray-300 text-gray-600 hover:bg-emerald-600 hover:text-white hover:border-emerald-600 transition">
                Previous
            </a>
            <a href="#" class="px-4 py-2 bg-emerald-600 text-white">1</a>
            <a href="#" class="px-4 py-2 border border-gray-300 text-gray-600 hover:bg-emerald-600 hover:text-white hover:border-emerald-600 transition">2</a>
            <a href="#" class="px-4 py-2 border border-gray-300 text-gray-600 hover:bg-emerald-600 hover:text-white hover:border-emerald-600 transition">3</a>
            <span class="text-gray-500">...</span>
            <a href="#" class="px-4 py-2 border border-gray-300 text-gray-600 hover:bg-emerald-600 hover:text-white hover:border-emerald-600 transition">10</a>
            <a href="#" class="px-4 py-2 border border-gray-300 text-gray-600 hover:bg-emerald-600 hover:text-white hover:border-emerald-600 transition">
                Next
            </a>
        </div>
    </div>

    <!-- Newsletter Section -->
    <div class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-2xl md:text-3xl font-bold text-navy-900 mb-4 font-display">Never Miss an Article</h2>
            <p class="text-gray-600 mb-8 max-w-md mx-auto">
                Subscribe to our newsletter and get the latest insights delivered straight to your inbox.
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

    <script>
        // Category filter functionality
        const categoryBtns = document.querySelectorAll('.category-btn');
        const posts = document.querySelectorAll('article');
        
        categoryBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const category = btn.textContent;
                
                // Update active state
                categoryBtns.forEach(b => {
                    b.classList.remove('bg-emerald-600', 'text-white');
                    b.classList.add('text-gray-600');
                });
                btn.classList.add('bg-emerald-600', 'text-white');
                btn.classList.remove('text-gray-600');
                
                // Filter posts (simulated - would need actual category data)
                // This is a simplified version - in production, you'd filter by actual categories
            });
        });
    </script>
</body>
</html>