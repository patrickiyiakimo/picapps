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
      font-family: 'Bricolage Grotesque', 'Space Grotesk', system-ui, sans-serif;
    }

    .blog-card {
      transition: all 0.4s cubic-bezier(0.2, 0.9, 0.4, 1.1);
    }

    .blog-card:hover {
      transform: translateY(-6px);
    }

    /* Hide scrollbar but keep functionality */
    .blog-carousel {
      scrollbar-width: none;
      -ms-overflow-style: none;
    }
    
    .blog-carousel::-webkit-scrollbar {
      display: none;
    }

    a, button, div, img {
      border-radius: 0 !important;
    }
  </style>
  <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&family=Space+Grotesk:wght@300..700&family=Inter:opsz,wght@14..32,100..900&display=swap" rel="stylesheet">
</head>
<body>

<section class="bg-white py-20 md:py-28 overflow-hidden">
  <div class="max-w-7xl mx-auto px-5 lg:px-8">
    
    <!-- Section Header with Big Text -->
    <div class="text-center mb-12">
      <div class="inline-flex items-center gap-2 border border-[#61629F]/20 bg-[#61629F]/5 px-5 py-2 mb-6">
        <span class="w-2 h-2 bg-[#61629F]"></span>
        <span class="text-xs font-semibold uppercase tracking-wider text-[#61629F]">Latest Stories</span>
      </div>
      
      <h1 class="text-6xl sm:text-7xl md:text-8xl lg:text-9xl font-bold text-black mb-6 font-display tracking-tighter leading-none">
        Blog &<br>
        <span class="text-[#61629F]">Insights</span>
      </h1>
      
      <div class="w-20 h-px bg-black mx-auto mt-6"></div>
      
      <p class="text-gray-500 mt-6 max-w-2xl mx-auto text-base">
        Expert insights on branding, web design, copywriting and SEO to help you build a stronger online presence.
      </p>
    </div>

    <!-- Carousel Navigation Arrows - Top of Blogs -->
    <div class="flex justify-end gap-4 mb-8">
      <button id="scrollLeftBtn" class="group flex items-center justify-center transition-all duration-300 hover:text-[#61629F]">
        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
        </svg>
      </button>
      <button id="scrollRightBtn" class="group flex items-center justify-center transition-all duration-300 hover:text-[#61629F]">
        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
        </svg>
      </button>
    </div>

    <!-- Blog Carousel - Horizontal Scroll -->
    <div id="blogCarousel" class="blog-carousel flex overflow-x-auto gap-8 pb-8 cursor-grab">
      
      <!-- Blog Card 1 -->
      <div class="blog-card flex-shrink-0 w-[85vw] sm:w-[70vw] md:w-[60vw] lg:w-[380px] xl:w-[400px] group">
        <div class="relative h-64 overflow-hidden bg-gray-100">
          <img src="https://images.unsplash.com/photo-1499750310107-5fef28a66643?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
               alt="Blog post" 
               class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
          <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute top-4 left-4">
            <span class="text-xs font-semibold uppercase tracking-wider bg-black text-white px-3 py-1">Branding</span>
          </div>
        </div>
        <div class="pt-5">
          <div class="flex items-center gap-3 text-xs text-gray-400 mb-3">
            <span>March 15, 2024</span>
            <span>•</span>
            <span>5 min read</span>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-[#61629F] transition-colors duration-300">
            The Art of Modern Brand Identity
          </h3>
          <p class="text-gray-500 text-sm leading-relaxed mb-4">
            Discover how top brands are redefining their visual identity for the digital age.
          </p>
          <a href="#" class="inline-flex items-center gap-1 text-sm font-semibold text-black hover:text-[#61629F] transition-colors group">
            Read More
            <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </div>

      <!-- Blog Card 2 -->
      <div class="blog-card flex-shrink-0 w-[85vw] sm:w-[70vw] md:w-[60vw] lg:w-[380px] xl:w-[400px] group">
        <div class="relative h-64 overflow-hidden bg-gray-100">
          <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
               alt="Blog post" 
               class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
          <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute top-4 left-4">
            <span class="text-xs font-semibold uppercase tracking-wider bg-black text-white px-3 py-1">Web Design</span>
          </div>
        </div>
        <div class="pt-5">
          <div class="flex items-center gap-3 text-xs text-gray-400 mb-3">
            <span>March 10, 2024</span>
            <span>•</span>
            <span>7 min read</span>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-[#61629F] transition-colors duration-300">
            Responsive Design Trends 2024
          </h3>
          <p class="text-gray-500 text-sm leading-relaxed mb-4">
            Explore the latest responsive design techniques that are shaping the web.
          </p>
          <a href="#" class="inline-flex items-center gap-1 text-sm font-semibold text-black hover:text-[#61629F] transition-colors group">
            Read More
            <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </div>

      <!-- Blog Card 3 -->
      <div class="blog-card flex-shrink-0 w-[85vw] sm:w-[70vw] md:w-[60vw] lg:w-[380px] xl:w-[400px] group">
        <div class="relative h-64 overflow-hidden bg-gray-100">
          <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
               alt="Blog post" 
               class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
          <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute top-4 left-4">
            <span class="text-xs font-semibold uppercase tracking-wider bg-black text-white px-3 py-1">SEO</span>
          </div>
        </div>
        <div class="pt-5">
          <div class="flex items-center gap-3 text-xs text-gray-400 mb-3">
            <span>March 5, 2024</span>
            <span>•</span>
            <span>6 min read</span>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-[#61629F] transition-colors duration-300">
            SEO Strategies That Actually Work
          </h3>
          <p class="text-gray-500 text-sm leading-relaxed mb-4">
            Proven SEO tactics to boost your search rankings and drive organic traffic.
          </p>
          <a href="#" class="inline-flex items-center gap-1 text-sm font-semibold text-black hover:text-[#61629F] transition-colors group">
            Read More
            <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </div>

      <!-- Blog Card 4 -->
      <div class="blog-card flex-shrink-0 w-[85vw] sm:w-[70vw] md:w-[60vw] lg:w-[380px] xl:w-[400px] group">
        <div class="relative h-64 overflow-hidden bg-gray-100">
          <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
               alt="Blog post" 
               class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
          <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute top-4 left-4">
            <span class="text-xs font-semibold uppercase tracking-wider bg-black text-white px-3 py-1">Copywriting</span>
          </div>
        </div>
        <div class="pt-5">
          <div class="flex items-center gap-3 text-xs text-gray-400 mb-3">
            <span>February 28, 2024</span>
            <span>•</span>
            <span>4 min read</span>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-[#61629F] transition-colors duration-300">
            Copywriting That Converts
          </h3>
          <p class="text-gray-500 text-sm leading-relaxed mb-4">
            Master the art of persuasive writing to turn visitors into customers.
          </p>
          <a href="#" class="inline-flex items-center gap-1 text-sm font-semibold text-black hover:text-[#61629F] transition-colors group">
            Read More
            <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </div>

      <!-- Blog Card 5 -->
      <div class="blog-card flex-shrink-0 w-[85vw] sm:w-[70vw] md:w-[60vw] lg:w-[380px] xl:w-[400px] group">
        <div class="relative h-64 overflow-hidden bg-gray-100">
          <img src="https://images.unsplash.com/photo-1552581234-26160f608093?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
               alt="Blog post" 
               class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
          <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute top-4 left-4">
            <span class="text-xs font-semibold uppercase tracking-wider bg-black text-white px-3 py-1">Marketing</span>
          </div>
        </div>
        <div class="pt-5">
          <div class="flex items-center gap-3 text-xs text-gray-400 mb-3">
            <span>February 20, 2024</span>
            <span>•</span>
            <span>8 min read</span>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-[#61629F] transition-colors duration-300">
            Digital Marketing Trends to Watch
          </h3>
          <p class="text-gray-500 text-sm leading-relaxed mb-4">
            Stay ahead with the latest digital marketing strategies and trends.
          </p>
          <a href="#" class="inline-flex items-center gap-1 text-sm font-semibold text-black hover:text-[#61629F] transition-colors group">
            Read More
            <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </div>

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
          carousel.scrollBy({ left: -380, behavior: 'smooth' });
        });
      }
      
      if (rightBtn) {
        rightBtn.addEventListener('click', () => {
          carousel.scrollBy({ left: 380, behavior: 'smooth' });
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