<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog · ALTA Digital Agency</title>
    
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
        
        a, button, div, img, input {
            border-radius: 0 !important;
        }
        
        .blog-card {
            transition: all 0.3s ease;
        }
        
        .blog-card:hover {
            transform: translateY(-4px);
        }
        
        .category-btn.active {
            background: #000000;
            color: white;
        }
    </style>
</head>
<body class="bg-white">

    @include('layouts.navbar')

    <!-- Hero Section - Black/White Professional -->
    <section class="relative bg-black min-h-[400px] flex items-center">
        <div class="absolute inset-0 z-0 opacity-10">
            <div class="absolute top-0 right-0 w-96 h-96 bg-white/5 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 left-0 w-96 h-96 bg-white/5 rounded-full blur-3xl"></div>
        </div>
        
        <div class="relative z-10 max-w-7xl mx-auto px-5 lg:px-8 py-20">
            <div class="max-w-3xl">
                
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-6 font-display tracking-tight">
                    Thoughts, Ideas & 
                    <span class="text-white/60">Digital Insights</span>
                </h1>
                <p class="text-gray-400 text-lg md:text-xl leading-relaxed">
                    Expert advice, industry trends, and practical tips for your digital journey.
                </p>
            </div>
        </div>
    </section>

    <!-- Blog Posts Section -->
    <div class="max-w-7xl mx-auto px-5 lg:px-8 py-16">
        
        <!-- Category Filters -->
        <div class="border-b border-gray-200 mb-8">
            <div class="flex flex-wrap gap-2 pb-4">
                <button class="category-btn active px-4 py-2 text-sm font-medium bg-black text-white transition" data-category="all">All Posts</button>
                <button class="category-btn px-4 py-2 text-sm font-medium text-gray-600 hover:bg-gray-100 transition" data-category="web-development">Web Development</button>
                <button class="category-btn px-4 py-2 text-sm font-medium text-gray-600 hover:bg-gray-100 transition" data-category="mobile-apps">Mobile Apps</button>
                <button class="category-btn px-4 py-2 text-sm font-medium text-gray-600 hover:bg-gray-100 transition" data-category="ecommerce">E-commerce</button>
                <button class="category-btn px-4 py-2 text-sm font-medium text-gray-600 hover:bg-gray-100 transition" data-category="ui-ux">UI/UX Design</button>
                <button class="category-btn px-4 py-2 text-sm font-medium text-gray-600 hover:bg-gray-100 transition" data-category="seo">SEO & Marketing</button>
                <button class="category-btn px-4 py-2 text-sm font-medium text-gray-600 hover:bg-gray-100 transition" data-category="ai-tech">AI & Tech</button>
                <button class="category-btn px-4 py-2 text-sm font-medium text-gray-600 hover:bg-gray-100 transition" data-category="business">Business</button>
            </div>
        </div>

        <!-- Blog Posts Grid -->
        <div id="blogGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Post 1 - Web Development -->
            <article class="blog-card bg-white border border-gray-200 hover:border-black transition-all duration-300" data-category="web-development">
                <div class="relative h-56 overflow-hidden bg-gray-100">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Laravel best practices" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute top-3 left-3">
                        <span class="bg-black text-white text-xs px-2 py-1 font-semibold">Web Development</span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-3 text-xs text-gray-400 mb-3">
                        <span>March 10, 2024</span>
                        <span>•</span>
                        <span>6 min read</span>
                    </div>
                    <h3 class="text-xl font-bold text-black mb-2 hover:text-gray-500 transition">
                        <a href="#">10 Laravel Best Practices for 2024</a>
                    </h3>
                    <p class="text-gray-500 text-sm mb-4">Learn the essential Laravel best practices to write cleaner, more maintainable, and secure code.</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 bg-gray-200 flex items-center justify-center text-black font-bold text-xs">JA</div>
                            <span class="text-xs text-gray-500">John Anderson</span>
                        </div>
                        <a href="#" class="text-black text-sm font-semibold hover:text-gray-500 transition">Read →</a>
                    </div>
                </div>
            </article>

            <!-- Post 2 - Mobile Apps -->
            <article class="blog-card bg-white border border-gray-200 hover:border-black transition-all duration-300" data-category="mobile-apps">
                <div class="relative h-56 overflow-hidden bg-gray-100">
                    <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Flutter vs React Native" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute top-3 left-3">
                        <span class="bg-black text-white text-xs px-2 py-1 font-semibold">Mobile Apps</span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-3 text-xs text-gray-400 mb-3">
                        <span>March 5, 2024</span>
                        <span>•</span>
                        <span>10 min read</span>
                    </div>
                    <h3 class="text-xl font-bold text-black mb-2 hover:text-gray-500 transition">
                        <a href="#">Flutter vs React Native: Which One to Choose?</a>
                    </h3>
                    <p class="text-gray-500 text-sm mb-4">A comprehensive comparison of the two leading cross-platform mobile development frameworks.</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 bg-gray-200 flex items-center justify-center text-black font-bold text-xs">SC</div>
                            <span class="text-xs text-gray-500">Sarah Chen</span>
                        </div>
                        <a href="#" class="text-black text-sm font-semibold hover:text-gray-500 transition">Read →</a>
                    </div>
                </div>
            </article>

            <!-- Post 3 - E-commerce -->
            <article class="blog-card bg-white border border-gray-200 hover:border-black transition-all duration-300" data-category="ecommerce">
                <div class="relative h-56 overflow-hidden bg-gray-100">
                    <img src="https://images.unsplash.com/photo-1472851294608-062f824d29cc?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="E-commerce trends" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute top-3 left-3">
                        <span class="bg-black text-white text-xs px-2 py-1 font-semibold">E-commerce</span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-3 text-xs text-gray-400 mb-3">
                        <span>February 28, 2024</span>
                        <span>•</span>
                        <span>7 min read</span>
                    </div>
                    <h3 class="text-xl font-bold text-black mb-2 hover:text-gray-500 transition">
                        <a href="#">E-commerce Trends That Will Dominate 2024</a>
                    </h3>
                    <p class="text-gray-500 text-sm mb-4">Discover the latest e-commerce trends and strategies to boost your online sales this year.</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 bg-gray-200 flex items-center justify-center text-black font-bold text-xs">MR</div>
                            <span class="text-xs text-gray-500">Michael Rodriguez</span>
                        </div>
                        <a href="#" class="text-black text-sm font-semibold hover:text-gray-500 transition">Read →</a>
                    </div>
                </div>
            </article>

            <!-- Post 4 - UI/UX Design -->
            <article class="blog-card bg-white border border-gray-200 hover:border-black transition-all duration-300" data-category="ui-ux">
                <div class="relative h-56 overflow-hidden bg-gray-100">
                    <img src="https://images.unsplash.com/photo-1586717791821-3f44a563fa4c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="UI/UX principles" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute top-3 left-3">
                        <span class="bg-black text-white text-xs px-2 py-1 font-semibold">UI/UX Design</span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-3 text-xs text-gray-400 mb-3">
                        <span>February 20, 2024</span>
                        <span>•</span>
                        <span>5 min read</span>
                    </div>
                    <h3 class="text-xl font-bold text-black mb-2 hover:text-gray-500 transition">
                        <a href="#">7 UI/UX Principles Every Designer Should Know</a>
                    </h3>
                    <p class="text-gray-500 text-sm mb-4">Master the fundamental principles of user interface and user experience design.</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 bg-gray-200 flex items-center justify-center text-black font-bold text-xs">EW</div>
                            <span class="text-xs text-gray-500">Emily Wong</span>
                        </div>
                        <a href="#" class="text-black text-sm font-semibold hover:text-gray-500 transition">Read →</a>
                    </div>
                </div>
            </article>

            <!-- Post 5 - SEO & Marketing -->
            <article class="blog-card bg-white border border-gray-200 hover:border-black transition-all duration-300" data-category="seo">
                <div class="relative h-56 overflow-hidden bg-gray-100">
                    <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="SEO strategies" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute top-3 left-3">
                        <span class="bg-black text-white text-xs px-2 py-1 font-semibold">SEO & Marketing</span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-3 text-xs text-gray-400 mb-3">
                        <span>February 15, 2024</span>
                        <span>•</span>
                        <span>9 min read</span>
                    </div>
                    <h3 class="text-xl font-bold text-black mb-2 hover:text-gray-500 transition">
                        <a href="#">SEO Strategies That Actually Work in 2024</a>
                    </h3>
                    <p class="text-gray-500 text-sm mb-4">Actionable SEO strategies to improve your website's search engine rankings.</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 bg-gray-200 flex items-center justify-center text-black font-bold text-xs">JA</div>
                            <span class="text-xs text-gray-500">John Anderson</span>
                        </div>
                        <a href="#" class="text-black text-sm font-semibold hover:text-gray-500 transition">Read →</a>
                    </div>
                </div>
            </article>

            <!-- Post 6 - AI & Tech -->
            <article class="blog-card bg-white border border-gray-200 hover:border-black transition-all duration-300" data-category="ai-tech">
                <div class="relative h-56 overflow-hidden bg-gray-100">
                    <img src="https://images.unsplash.com/photo-1677442136019-21780ecad995?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="AI in development" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute top-3 left-3">
                        <span class="bg-black text-white text-xs px-2 py-1 font-semibold">AI & Tech</span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-3 text-xs text-gray-400 mb-3">
                        <span>February 10, 2024</span>
                        <span>•</span>
                        <span>12 min read</span>
                    </div>
                    <h3 class="text-xl font-bold text-black mb-2 hover:text-gray-500 transition">
                        <a href="#">How AI is Transforming Software Development</a>
                    </h3>
                    <p class="text-gray-500 text-sm mb-4">Explore how artificial intelligence is revolutionizing the way we build software.</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 bg-gray-200 flex items-center justify-center text-black font-bold text-xs">SC</div>
                            <span class="text-xs text-gray-500">Sarah Chen</span>
                        </div>
                        <a href="#" class="text-black text-sm font-semibold hover:text-gray-500 transition">Read →</a>
                    </div>
                </div>
            </article>

            <!-- Post 7 - Business -->
            <article class="blog-card bg-white border border-gray-200 hover:border-black transition-all duration-300" data-category="business">
                <div class="relative h-56 overflow-hidden bg-gray-100">
                    <img src="https://images.unsplash.com/photo-1552581234-26160f608093?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Digital transformation" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute top-3 left-3">
                        <span class="bg-black text-white text-xs px-2 py-1 font-semibold">Business</span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-3 text-xs text-gray-400 mb-3">
                        <span>February 5, 2024</span>
                        <span>•</span>
                        <span>8 min read</span>
                    </div>
                    <h3 class="text-xl font-bold text-black mb-2 hover:text-gray-500 transition">
                        <a href="#">Digital Transformation Strategies for Modern Businesses</a>
                    </h3>
                    <p class="text-gray-500 text-sm mb-4">Learn how to successfully navigate your company's digital transformation journey.</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 bg-gray-200 flex items-center justify-center text-black font-bold text-xs">DP</div>
                            <span class="text-xs text-gray-500">David Parker</span>
                        </div>
                        <a href="#" class="text-black text-sm font-semibold hover:text-gray-500 transition">Read →</a>
                    </div>
                </div>
            </article>

            <!-- Post 8 - Web Development -->
            <article class="blog-card bg-white border border-gray-200 hover:border-black transition-all duration-300" data-category="web-development">
                <div class="relative h-56 overflow-hidden bg-gray-100">
                    <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="React best practices" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute top-3 left-3">
                        <span class="bg-black text-white text-xs px-2 py-1 font-semibold">Web Development</span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-3 text-xs text-gray-400 mb-3">
                        <span>January 28, 2024</span>
                        <span>•</span>
                        <span>7 min read</span>
                    </div>
                    <h3 class="text-xl font-bold text-black mb-2 hover:text-gray-500 transition">
                        <a href="#">Modern React Patterns You Should Know</a>
                    </h3>
                    <p class="text-gray-500 text-sm mb-4">Explore advanced React patterns that will make your applications more scalable and maintainable.</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 bg-gray-200 flex items-center justify-center text-black font-bold text-xs">JA</div>
                            <span class="text-xs text-gray-500">John Anderson</span>
                        </div>
                        <a href="#" class="text-black text-sm font-semibold hover:text-gray-500 transition">Read →</a>
                    </div>
                </div>
            </article>

            <!-- Post 9 - Mobile Apps -->
            <article class="blog-card bg-white border border-gray-200 hover:border-black transition-all duration-300" data-category="mobile-apps">
                <div class="relative h-56 overflow-hidden bg-gray-100">
                    <img src="https://images.unsplash.com/photo-1526498460520-4c246339d76b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="iOS vs Android" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute top-3 left-3">
                        <span class="bg-black text-white text-xs px-2 py-1 font-semibold">Mobile Apps</span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-3 text-xs text-gray-400 mb-3">
                        <span>January 20, 2024</span>
                        <span>•</span>
                        <span>11 min read</span>
                    </div>
                    <h3 class="text-xl font-bold text-black mb-2 hover:text-gray-500 transition">
                        <a href="#">iOS vs Android Development: A Comprehensive Guide</a>
                    </h3>
                    <p class="text-gray-500 text-sm mb-4">Compare the two major mobile platforms and decide which is right for your project.</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 bg-gray-200 flex items-center justify-center text-black font-bold text-xs">SC</div>
                            <span class="text-xs text-gray-500">Sarah Chen</span>
                        </div>
                        <a href="#" class="text-black text-sm font-semibold hover:text-gray-500 transition">Read →</a>
                    </div>
                </div>
            </article>

            <!-- Post 10 - AI & Tech -->
            <article class="blog-card bg-white border border-gray-200 hover:border-black transition-all duration-300" data-category="ai-tech">
                <div class="relative h-56 overflow-hidden bg-gray-100">
                    <img src="https://images.unsplash.com/photo-1485827404703-89b55fcc595e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Machine learning" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute top-3 left-3">
                        <span class="bg-black text-white text-xs px-2 py-1 font-semibold">AI & Tech</span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-3 text-xs text-gray-400 mb-3">
                        <span>January 12, 2024</span>
                        <span>•</span>
                        <span>15 min read</span>
                    </div>
                    <h3 class="text-xl font-bold text-black mb-2 hover:text-gray-500 transition">
                        <a href="#">Machine Learning in Mobile Apps: A Practical Guide</a>
                    </h3>
                    <p class="text-gray-500 text-sm mb-4">Learn how to integrate machine learning capabilities into your mobile applications.</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 bg-gray-200 flex items-center justify-center text-black font-bold text-xs">ML</div>
                            <span class="text-xs text-gray-500">Maria Lopez</span>
                        </div>
                        <a href="#" class="text-black text-sm font-semibold hover:text-gray-500 transition">Read →</a>
                    </div>
                </div>
            </article>

        </div>

        <!-- No Results Message -->
        <div id="noResults" class="text-center py-12 hidden">
            <p class="text-gray-500 text-lg">No posts found in this category.</p>
        </div>

        <!-- Pagination -->
        <div class="flex justify-center items-center gap-3 mt-12">
            <a href="#" id="prevPage" class="px-4 py-2 border border-gray-300 text-gray-600 hover:bg-black hover:text-white hover:border-black transition">
                Previous
            </a>
            <a href="#" class="page-btn px-4 py-2 bg-black text-white" data-page="1">1</a>
            <a href="#" class="page-btn px-4 py-2 border border-gray-300 text-gray-600 hover:bg-black hover:text-white hover:border-black transition" data-page="2">2</a>
            <a href="#" class="page-btn px-4 py-2 border border-gray-300 text-gray-600 hover:bg-black hover:text-white hover:border-black transition" data-page="3">3</a>
            <a href="#" id="nextPage" class="px-4 py-2 border border-gray-300 text-gray-600 hover:bg-black hover:text-white hover:border-black transition">
                Next
            </a>
        </div>
    </div>

    <!-- Newsletter Section -->
    <div class="bg-gray-50 py-16 border-t border-gray-200">
        <div class="max-w-7xl mx-auto px-5 lg:px-8 text-center">
            <h2 class="text-2xl md:text-3xl font-bold text-black mb-4 font-display">Never Miss an Article</h2>
            <p class="text-gray-500 mb-8 max-w-md mx-auto">
                Subscribe to our newsletter and get the latest insights delivered straight to your inbox.
            </p>
            <form class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto">
                <input type="email" placeholder="Enter your email address" 
                       class="flex-1 px-4 py-3 border border-gray-300 focus:outline-none focus:border-black">
                <button type="submit" class="bg-black text-white px-6 py-3 font-semibold hover:bg-gray-800 transition">
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
        const blogPosts = document.querySelectorAll('.blog-card');
        const noResults = document.getElementById('noResults');
        
        function filterPosts(category) {
            let visibleCount = 0;
            
            blogPosts.forEach(post => {
                const postCategory = post.getAttribute('data-category');
                if (category === 'all' || postCategory === category) {
                    post.style.display = 'block';
                    visibleCount++;
                } else {
                    post.style.display = 'none';
                }
            });
            
            if (visibleCount === 0) {
                noResults.classList.remove('hidden');
            } else {
                noResults.classList.add('hidden');
            }
        }
        
        categoryBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const category = btn.getAttribute('data-category');
                
                // Update active state
                categoryBtns.forEach(b => {
                    b.classList.remove('active', 'bg-black', 'text-white');
                    b.classList.add('text-gray-600');
                });
                btn.classList.add('active', 'bg-black', 'text-white');
                btn.classList.remove('text-gray-600');
                
                // Filter posts
                filterPosts(category);
            });
        });
        
        // Pagination functionality
        let currentPage = 1;
        const postsPerPage = 6;
        const allPosts = Array.from(blogPosts);
        const pageBtns = document.querySelectorAll('.page-btn');
        const prevBtn = document.getElementById('prevPage');
        const nextBtn = document.getElementById('nextPage');
        
        function showPage(page) {
            currentPage = page;
            const start = (currentPage - 1) * postsPerPage;
            const end = start + postsPerPage;
            
            // Get currently visible posts based on category filter
            const visiblePosts = allPosts.filter(post => post.style.display !== 'none');
            const visibleCount = visiblePosts.length;
            const totalPages = Math.ceil(visibleCount / postsPerPage);
            
            // Hide all visible posts first
            visiblePosts.forEach((post, index) => {
                if (index >= start && index < end) {
                    post.style.display = 'block';
                } else {
                    post.style.display = 'none';
                }
            });
            
            // Update page button styles
            pageBtns.forEach(btn => {
                const pageNum = parseInt(btn.getAttribute('data-page'));
                if (pageNum === currentPage) {
                    btn.classList.remove('border-gray-300', 'text-gray-600', 'hover:bg-black', 'hover:text-white');
                    btn.classList.add('bg-black', 'text-white');
                } else {
                    btn.classList.remove('bg-black', 'text-white');
                    btn.classList.add('border', 'border-gray-300', 'text-gray-600', 'hover:bg-black', 'hover:text-white');
                }
            });
            
            // Update prev/next buttons visibility
            if (prevBtn) {
                if (currentPage === 1) {
                    prevBtn.style.opacity = '0.5';
                    prevBtn.style.pointerEvents = 'none';
                } else {
                    prevBtn.style.opacity = '1';
                    prevBtn.style.pointerEvents = 'auto';
                }
            }
            
            if (nextBtn) {
                if (currentPage === totalPages || totalPages === 0) {
                    nextBtn.style.opacity = '0.5';
                    nextBtn.style.pointerEvents = 'none';
                } else {
                    nextBtn.style.opacity = '1';
                    nextBtn.style.pointerEvents = 'auto';
                }
            }
            
            if (noResults.classList.contains('hidden') === false) {
                noResults.classList.add('hidden');
            }
        }
        
        // Override filterPosts to reset pagination
        const originalFilterPosts = filterPosts;
        window.filterPosts = function(category) {
            originalFilterPosts(category);
            currentPage = 1;
            showPage(1);
        };
        
        filterPosts = function(category) {
            originalFilterPosts(category);
            currentPage = 1;
            showPage(1);
        };
        
        // Page button click handlers
        pageBtns.forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                const page = parseInt(btn.getAttribute('data-page'));
                if (!isNaN(page)) {
                    showPage(page);
                }
            });
        });
        
        if (prevBtn) {
            prevBtn.addEventListener('click', (e) => {
                e.preventDefault();
                if (currentPage > 1) {
                    showPage(currentPage - 1);
                }
            });
        }
        
        if (nextBtn) {
            nextBtn.addEventListener('click', (e) => {
                e.preventDefault();
                const visiblePosts = allPosts.filter(post => post.style.display !== 'none');
                const totalPages = Math.ceil(visiblePosts.length / postsPerPage);
                if (currentPage < totalPages) {
                    showPage(currentPage + 1);
                }
            });
        }
        
        // Initialize - show first page
        setTimeout(() => {
            showPage(1);
        }, 100);
    </script>
</body>
</html>