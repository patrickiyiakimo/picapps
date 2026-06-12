<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <title>ALTA · Blog & Insights</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Inter', system-ui, -apple-system, 'Segoe UI', Roboto, Helvetica, sans-serif;
      background: #ffffff;
    }

    .font-display {
      font-family: 'Space Grotesk', 'Inter', system-ui, sans-serif;
    }

    .blog-card {
      transition: all 0.4s cubic-bezier(0.2, 0.9, 0.4, 1.1);
    }

    .blog-card:hover {
      transform: translateY(-6px);
    }

    .blog-carousel {
      scrollbar-width: thin;
      -ms-overflow-style: none;
      scrollbar-color: #000000 #e5e7eb;
    }
    
    .blog-carousel::-webkit-scrollbar {
      height: 4px;
    }
    
    .blog-carousel::-webkit-scrollbar-track {
      background: #e5e7eb;
    }
    
    .blog-carousel::-webkit-scrollbar-thumb {
      background: #000000;
    }

    a, button, div, img {
      border-radius: 0 !important;
    }
  </style>
  <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

<section class="bg-white py-20 md:py-28 overflow-hidden">
  <div class="max-w-7xl mx-auto px-5 lg:px-8">
    
    <!-- Section Header with Big Text -->
    <div class="text-center mb-12">
      <div class="inline-flex items-center gap-2 border border-gray-200 bg-gray-50 px-5 py-2 mb-6">
        <span class="w-1.5 h-1.5 bg-black"></span>
        <span class="text-xs font-semibold uppercase tracking-wider text-gray-600">Latest Stories</span>
      </div>
      
      <h1 class="text-6xl sm:text-7xl md:text-8xl lg:text-9xl font-bold text-black mb-6 font-display tracking-tighter leading-none">
        Blog &<br>
        <span class="text-gray-400">Insights</span>
      </h1>
      
      <div class="w-16 h-px bg-black mx-auto mt-6"></div>
      
      <p class="text-gray-500 mt-6 max-w-2xl mx-auto text-base">
        Expert insights on branding, web design, copywriting and SEO to help you build a stronger online presence.
      </p>
    </div>

    <!-- Featured Post - First/Big Blog -->
    <div class="mb-16">
      <div class="group bg-white border border-gray-200 hover:border-black transition-all duration-500 overflow-hidden">
        <div class="grid grid-cols-1 lg:grid-cols-2">
          <div class="relative h-64 lg:h-auto overflow-hidden bg-gray-100">
            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" 
                 alt="Featured post" 
                 class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
            <div class="absolute top-4 left-4">
              <span class="bg-black text-white text-xs px-3 py-1 font-semibold tracking-wide">Featured</span>
            </div>
          </div>
          <div class="p-8 flex flex-col justify-center">
            <div class="flex items-center gap-4 text-xs text-gray-500 mb-3">
              <span>March 15, 2024</span>
              <span>•</span>
              <span>8 min read</span>
              <span>•</span>
              <span class="text-black font-medium">Web Development</span>
            </div>
            <h2 class="text-2xl md:text-3xl font-bold text-black mb-4 group-hover:text-gray-500 transition font-display">
              <a href="#">The Future of Web Development: Trends to Watch in 2024</a>
            </h2>
            <p class="text-gray-500 mb-6 leading-relaxed">
              Explore the emerging technologies and methodologies that are shaping the future of web development, from AI-powered tools to serverless architecture.
            </p>
            <div class="flex items-center justify-between">
              <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-gray-200 flex items-center justify-center text-black font-bold text-sm">
                  JA
                </div>
                <div>
                  <p class="text-sm font-semibold text-black">John Anderson</p>
                  <p class="text-xs text-gray-400">Founder & CEO</p>
                </div>
              </div>
              <a href="#" class="inline-flex items-center gap-2 text-black font-semibold text-sm hover:text-gray-500 transition group">
                <span>Read More</span>
                <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Carousel Navigation Arrows - Top of Blogs -->
    <div class="flex justify-end gap-4 mb-8">
      <button id="scrollLeftBtn" class="group flex items-center justify-center transition-all duration-300 hover:text-gray-400">
        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
        </svg>
      </button>
      <button id="scrollRightBtn" class="group flex items-center justify-center transition-all duration-300 hover:text-gray-400">
        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
        </svg>
      </button>
    </div>

    <!-- Blog Carousel - Horizontal Scroll -->
    <div id="blogCarousel" class="blog-carousel flex overflow-x-auto gap-8 pb-8">
      
      <!-- Blog Card 1 - Laravel Best Practices -->
      <div class="blog-card flex-shrink-0 w-[85vw] sm:w-[70vw] md:w-[60vw] lg:w-[380px] xl:w-[400px] group bg-white border border-gray-200 hover:border-black transition-all duration-300">
        <div class="relative h-56 overflow-hidden bg-gray-100">
          <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
               alt="Laravel best practices" 
               class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
          <div class="absolute top-3 left-3">
            <span class="bg-black text-white text-xs px-2 py-1 font-semibold tracking-wide">Web Development</span>
          </div>
        </div>
        <div class="p-5">
          <div class="flex items-center gap-3 text-xs text-gray-400 mb-3">
            <span>March 10, 2024</span>
            <span>•</span>
            <span>6 min read</span>
          </div>
          <h3 class="text-lg font-bold text-black mb-2 group-hover:text-gray-500 transition">
            <a href="#">10 Laravel Best Practices for 2024</a>
          </h3>
          <p class="text-gray-500 text-sm mb-4 leading-relaxed">
            Learn the essential Laravel best practices to write cleaner, more maintainable, and secure code.
          </p>
          <div class="flex items-center justify-between">
            <div class="flex items-center gap-2">
              <div class="w-6 h-6 bg-gray-200 flex items-center justify-center text-black font-bold text-xs">JA</div>
              <span class="text-xs text-gray-500">John Anderson</span>
            </div>
            <a href="#" class="text-black text-sm font-semibold hover:text-gray-500 transition group inline-flex items-center gap-1">
              Read <svg class="w-3 h-3 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </a>
          </div>
        </div>
      </div>

      <!-- Blog Card 2 - Flutter vs React Native -->
      <div class="blog-card flex-shrink-0 w-[85vw] sm:w-[70vw] md:w-[60vw] lg:w-[380px] xl:w-[400px] group bg-white border border-gray-200 hover:border-black transition-all duration-300">
        <div class="relative h-56 overflow-hidden bg-gray-100">
          <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
               alt="Flutter vs React Native" 
               class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
          <div class="absolute top-3 left-3">
            <span class="bg-black text-white text-xs px-2 py-1 font-semibold tracking-wide">Mobile Apps</span>
          </div>
        </div>
        <div class="p-5">
          <div class="flex items-center gap-3 text-xs text-gray-400 mb-3">
            <span>March 5, 2024</span>
            <span>•</span>
            <span>10 min read</span>
          </div>
          <h3 class="text-lg font-bold text-black mb-2 group-hover:text-gray-500 transition">
            <a href="#">Flutter vs React Native: Which One to Choose?</a>
          </h3>
          <p class="text-gray-500 text-sm mb-4 leading-relaxed">
            A comprehensive comparison of the two leading cross-platform mobile development frameworks.
          </p>
          <div class="flex items-center justify-between">
            <div class="flex items-center gap-2">
              <div class="w-6 h-6 bg-gray-200 flex items-center justify-center text-black font-bold text-xs">SC</div>
              <span class="text-xs text-gray-500">Sarah Chen</span>
            </div>
            <a href="#" class="text-black text-sm font-semibold hover:text-gray-500 transition group inline-flex items-center gap-1">
              Read <svg class="w-3 h-3 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </a>
          </div>
        </div>
      </div>

      <!-- Blog Card 3 - E-commerce Trends -->
      <div class="blog-card flex-shrink-0 w-[85vw] sm:w-[70vw] md:w-[60vw] lg:w-[380px] xl:w-[400px] group bg-white border border-gray-200 hover:border-black transition-all duration-300">
        <div class="relative h-56 overflow-hidden bg-gray-100">
          <img src="https://images.unsplash.com/photo-1472851294608-062f824d29cc?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
               alt="E-commerce trends" 
               class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
          <div class="absolute top-3 left-3">
            <span class="bg-black text-white text-xs px-2 py-1 font-semibold tracking-wide">E-commerce</span>
          </div>
        </div>
        <div class="p-5">
          <div class="flex items-center gap-3 text-xs text-gray-400 mb-3">
            <span>February 28, 2024</span>
            <span>•</span>
            <span>7 min read</span>
          </div>
          <h3 class="text-lg font-bold text-black mb-2 group-hover:text-gray-500 transition">
            <a href="#">E-commerce Trends That Will Dominate 2024</a>
          </h3>
          <p class="text-gray-500 text-sm mb-4 leading-relaxed">
            Discover the latest e-commerce trends and strategies to boost your online sales this year.
          </p>
          <div class="flex items-center justify-between">
            <div class="flex items-center gap-2">
              <div class="w-6 h-6 bg-gray-200 flex items-center justify-center text-black font-bold text-xs">MR</div>
              <span class="text-xs text-gray-500">Michael Rodriguez</span>
            </div>
            <a href="#" class="text-black text-sm font-semibold hover:text-gray-500 transition group inline-flex items-center gap-1">
              Read <svg class="w-3 h-3 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </a>
          </div>
        </div>
      </div>

      <!-- Blog Card 4 - UI/UX Principles -->
      <div class="blog-card flex-shrink-0 w-[85vw] sm:w-[70vw] md:w-[60vw] lg:w-[380px] xl:w-[400px] group bg-white border border-gray-200 hover:border-black transition-all duration-300">
        <div class="relative h-56 overflow-hidden bg-gray-100">
          <img src="https://images.unsplash.com/photo-1586717791821-3f44a563fa4c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
               alt="UI/UX principles" 
               class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
          <div class="absolute top-3 left-3">
            <span class="bg-black text-white text-xs px-2 py-1 font-semibold tracking-wide">UI/UX Design</span>
          </div>
        </div>
        <div class="p-5">
          <div class="flex items-center gap-3 text-xs text-gray-400 mb-3">
            <span>February 20, 2024</span>
            <span>•</span>
            <span>5 min read</span>
          </div>
          <h3 class="text-lg font-bold text-black mb-2 group-hover:text-gray-500 transition">
            <a href="#">7 UI/UX Principles Every Designer Should Know</a>
          </h3>
          <p class="text-gray-500 text-sm mb-4 leading-relaxed">
            Master the fundamental principles of user interface and user experience design.
          </p>
          <div class="flex items-center justify-between">
            <div class="flex items-center gap-2">
              <div class="w-6 h-6 bg-gray-200 flex items-center justify-center text-black font-bold text-xs">EW</div>
              <span class="text-xs text-gray-500">Emily Wong</span>
            </div>
            <a href="#" class="text-black text-sm font-semibold hover:text-gray-500 transition group inline-flex items-center gap-1">
              Read <svg class="w-3 h-3 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </a>
          </div>
        </div>
      </div>

      <!-- Blog Card 5 - SEO Strategies -->
      <div class="blog-card flex-shrink-0 w-[85vw] sm:w-[70vw] md:w-[60vw] lg:w-[380px] xl:w-[400px] group bg-white border border-gray-200 hover:border-black transition-all duration-300">
        <div class="relative h-56 overflow-hidden bg-gray-100">
          <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
               alt="SEO strategies" 
               class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
          <div class="absolute top-3 left-3">
            <span class="bg-black text-white text-xs px-2 py-1 font-semibold tracking-wide">SEO & Marketing</span>
          </div>
        </div>
        <div class="p-5">
          <div class="flex items-center gap-3 text-xs text-gray-400 mb-3">
            <span>February 15, 2024</span>
            <span>•</span>
            <span>9 min read</span>
          </div>
          <h3 class="text-lg font-bold text-black mb-2 group-hover:text-gray-500 transition">
            <a href="#">SEO Strategies That Actually Work in 2024</a>
          </h3>
          <p class="text-gray-500 text-sm mb-4 leading-relaxed">
            Actionable SEO strategies to improve your website's search engine rankings.
          </p>
          <div class="flex items-center justify-between">
            <div class="flex items-center gap-2">
              <div class="w-6 h-6 bg-gray-200 flex items-center justify-center text-black font-bold text-xs">JA</div>
              <span class="text-xs text-gray-500">John Anderson</span>
            </div>
            <a href="#" class="text-black text-sm font-semibold hover:text-gray-500 transition group inline-flex items-center gap-1">
              Read <svg class="w-3 h-3 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </a>
          </div>
        </div>
      </div>

      <!-- Blog Card 6 - AI in Development -->
      <div class="blog-card flex-shrink-0 w-[85vw] sm:w-[70vw] md:w-[60vw] lg:w-[380px] xl:w-[400px] group bg-white border border-gray-200 hover:border-black transition-all duration-300">
        <div class="relative h-56 overflow-hidden bg-gray-100">
          <img src="https://images.unsplash.com/photo-1677442136019-21780ecad995?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
               alt="AI in development" 
               class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
          <div class="absolute top-3 left-3">
            <span class="bg-black text-white text-xs px-2 py-1 font-semibold tracking-wide">AI & Tech</span>
          </div>
        </div>
        <div class="p-5">
          <div class="flex items-center gap-3 text-xs text-gray-400 mb-3">
            <span>February 10, 2024</span>
            <span>•</span>
            <span>12 min read</span>
          </div>
          <h3 class="text-lg font-bold text-black mb-2 group-hover:text-gray-500 transition">
            <a href="#">How AI is Transforming Software Development</a>
          </h3>
          <p class="text-gray-500 text-sm mb-4 leading-relaxed">
            Explore how artificial intelligence is revolutionizing the way we build software.
          </p>
          <div class="flex items-center justify-between">
            <div class="flex items-center gap-2">
              <div class="w-6 h-6 bg-gray-200 flex items-center justify-center text-black font-bold text-xs">SC</div>
              <span class="text-xs text-gray-500">Sarah Chen</span>
            </div>
            <a href="#" class="text-black text-sm font-semibold hover:text-gray-500 transition group inline-flex items-center gap-1">
              Read <svg class="w-3 h-3 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </a>
          </div>
        </div>
      </div>

    </div>

    <!-- View All Blog Posts Link -->
    <div class="text-center mt-12">
       <x-shared.buttons.primary-button 
    href="/blog" 
    text="View all articles" 
    size="md"
    variant="dark"
/>
    </div>

  </div>
</section>

<script>
  (function() {
    const carousel = document.getElementById('blogCarousel');
    const leftBtn = document.getElementById('scrollLeftBtn');
    const rightBtn = document.getElementById('scrollRightBtn');
    
    if (carousel) {
      // Scroll buttons
      if (leftBtn) {
        leftBtn.addEventListener('click', () => {
          carousel.scrollBy({ left: -420, behavior: 'smooth' });
        });
      }
      
      if (rightBtn) {
        rightBtn.addEventListener('click', () => {
          carousel.scrollBy({ left: 420, behavior: 'smooth' });
        });
      }
      
      // Drag to scroll functionality
      let isDown = false;
      let startX;
      let scrollLeft;
      
      carousel.addEventListener('mousedown', (e) => {
        isDown = true;
        carousel.style.cursor = 'grabbing';
        startX = e.pageX - carousel.offsetLeft;
        scrollLeft = carousel.scrollLeft;
      });
      
      carousel.addEventListener('mouseleave', () => {
        isDown = false;
        carousel.style.cursor = 'grab';
      });
      
      carousel.addEventListener('mouseup', () => {
        isDown = false;
        carousel.style.cursor = 'grab';
      });
      
      carousel.addEventListener('mousemove', (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - carousel.offsetLeft;
        const walk = (x - startX) * 1.5;
        carousel.scrollLeft = scrollLeft - walk;
      });
      
      carousel.style.cursor = 'grab';
    }
  })();
</script>

</body>
</html>