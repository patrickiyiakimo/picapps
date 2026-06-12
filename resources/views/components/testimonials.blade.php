<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <title>ALTA · Client Testimonials</title>
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

    .testimonial-carousel {
      scrollbar-width: none;
      -ms-overflow-style: none;
    }
    
    .testimonial-carousel::-webkit-scrollbar {
      display: none;
    }

    a, button, div, img {
      border-radius: 0 !important;
    }
  </style>
  <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&family=Space+Grotesk:wght@300..700&family=Inter:opsz,wght@14..32,100..900&display=swap" rel="stylesheet">
</head>
<body>

<section class="bg-white py-20 md:py-28">
  <div class="max-w-7xl mx-auto px-5 lg:px-8">
    
    <!-- Section Header -->
    <div class="text-center mb-12">
      <div class="inline-flex items-center gap-2 border border-gray-200 bg-gray-50 px-5 py-2 mb-6">
        <span class="w-2 h-2 bg-black"></span>
        <span class="text-xs font-semibold uppercase tracking-wider text-gray-600">Testimonials</span>
      </div>
      
      <h2 class="text-5xl md:text-6xl lg:text-7xl font-bold text-black mb-4 font-display tracking-tight">
        What Our <span class="text-gray-500">Clients Say</span>
      </h2>
      
      <div class="w-16 h-px bg-black mx-auto mt-6"></div>
      
      <p class="text-gray-500 mt-6 max-w-2xl mx-auto text-base">
        Don't just take our word for it. Hear from the businesses we've helped succeed.
      </p>
    </div>

    <!-- Stats Row -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mb-16">
      <div class="text-center border-r border-gray-200 last:border-r-0">
        <div class="text-4xl md:text-5xl font-bold text-black">500+</div>
        <p class="text-gray-500 text-sm mt-1">Clients Worldwide</p>
      </div>
      <div class="text-center border-r border-gray-200 last:border-r-0">
        <div class="text-4xl md:text-5xl font-bold text-black">98%</div>
        <p class="text-gray-500 text-sm mt-1">Client Retention</p>
      </div>
      <div class="text-center border-r border-gray-200 last:border-r-0">
        <div class="text-4xl md:text-5xl font-bold text-black">4.9/5</div>
        <p class="text-gray-500 text-sm mt-1">Average Rating</p>
      </div>
      <div class="text-center">
        <div class="text-4xl md:text-5xl font-bold text-black">15+</div>
        <p class="text-gray-500 text-sm mt-1">Countries Served</p>
      </div>
    </div>

    <!-- Carousel Navigation Arrows - Top -->
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

    <!-- Testimonials Carousel - Horizontal Scroll -->
    <div id="testimonialCarousel" class="testimonial-carousel flex overflow-x-auto gap-8 pb-8 cursor-grab">
      
      <!-- Testimonial 1 -->
      <div class="flex-shrink-0 w-[85vw] sm:w-[70vw] md:w-[60vw] lg:w-[450px] xl:w-[480px] bg-white border border-gray-200 p-8">
        <div class="flex items-center gap-1 mb-4">
          <svg class="w-5 h-5 text-black fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
          <svg class="w-5 h-5 text-black fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
          <svg class="w-5 h-5 text-black fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
          <svg class="w-5 h-5 text-black fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
          <svg class="w-5 h-5 text-black fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
        </div>
        <p class="text-gray-600 text-base leading-relaxed mb-6">
          "Alta has been an exceptional partner. Their technical expertise, attention to detail, and commitment to our success transformed our digital presence completely. The website they built for us has increased our conversion rate by over 150%."
        </p>
        <div class="border-t border-gray-100 pt-4">
          <h4 class="text-lg font-bold text-black">John Davidson</h4>
          <p class="text-gray-500 text-sm">Chief Executive Officer, FashionStyle Group</p>
        </div>
      </div>

      <!-- Testimonial 2 -->
      <div class="flex-shrink-0 w-[85vw] sm:w-[70vw] md:w-[60vw] lg:w-[450px] xl:w-[480px] bg-white border border-gray-200 p-8">
        <div class="flex items-center gap-1 mb-4">
          <svg class="w-5 h-5 text-black fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
          <svg class="w-5 h-5 text-black fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
          <svg class="w-5 h-5 text-black fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
          <svg class="w-5 h-5 text-black fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
          <svg class="w-5 h-5 text-black fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
        </div>
        <p class="text-gray-600 text-base leading-relaxed mb-6">
          "The mobile app Alta developed for us exceeded every expectation. Their project management was outstanding, and the app reached over 500,000 downloads in just three months. We couldn't be more satisfied with the results."
        </p>
        <div class="border-t border-gray-100 pt-4">
          <h4 class="text-lg font-bold text-black">Jane Smith</h4>
          <p class="text-gray-500 text-sm">Founder & President, FitTrack Health</p>
        </div>
      </div>

      <!-- Testimonial 3 -->
      <div class="flex-shrink-0 w-[85vw] sm:w-[70vw] md:w-[60vw] lg:w-[450px] xl:w-[480px] bg-white border border-gray-200 p-8">
        <div class="flex items-center gap-1 mb-4">
          <svg class="w-5 h-5 text-black fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
          <svg class="w-5 h-5 text-black fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
          <svg class="w-5 h-5 text-black fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
          <svg class="w-5 h-5 text-black fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
          <svg class="w-5 h-5 text-black fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
        </div>
        <p class="text-gray-600 text-base leading-relaxed mb-6">
          "Alta delivered a fully HIPAA-compliant healthcare platform that exceeded all regulatory requirements. Their attention to both security and user experience is exceptional. Our patients have embraced the new system enthusiastically."
        </p>
        <div class="border-t border-gray-100 pt-4">
          <h4 class="text-lg font-bold text-black">Dr. Sarah Rodriguez</h4>
          <p class="text-gray-500 text-sm">Medical Director, MediHealth Systems</p>
        </div>
      </div>

      <!-- Testimonial 4 -->
      <div class="flex-shrink-0 w-[85vw] sm:w-[70vw] md:w-[60vw] lg:w-[450px] xl:w-[480px] bg-white border border-gray-200 p-8">
        <div class="flex items-center gap-1 mb-4">
          <svg class="w-5 h-5 text-black fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
          <svg class="w-5 h-5 text-black fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
          <svg class="w-5 h-5 text-black fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
          <svg class="w-5 h-5 text-black fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
          <svg class="w-5 h-5 text-black fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
        </div>
        <p class="text-gray-600 text-base leading-relaxed mb-6">
          "Working with Alta has been transformative for our business. Their strategic insights and technical execution helped us achieve remarkable growth. We've seen a 200% increase in online sales since launching our new e-commerce platform."
        </p>
        <div class="border-t border-gray-100 pt-4">
          <h4 class="text-lg font-bold text-black">Michael Chen</h4>
          <p class="text-gray-500 text-sm">Chief Technology Officer, GlobalCorp Industries</p>
        </div>
      </div>

      <!-- Testimonial 5 -->
      <div class="flex-shrink-0 w-[85vw] sm:w-[70vw] md:w-[60vw] lg:w-[450px] xl:w-[480px] bg-white border border-gray-200 p-8">
        <div class="flex items-center gap-1 mb-4">
          <svg class="w-5 h-5 text-black fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
          <svg class="w-5 h-5 text-black fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
          <svg class="w-5 h-5 text-black fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
          <svg class="w-5 h-5 text-black fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
          <svg class="w-5 h-5 text-black fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
        </div>
        <p class="text-gray-600 text-base leading-relaxed mb-6">
          "The learning management platform Alta created has transformed how we deliver education. Our user engagement is at an all-time high, and our students consistently praise the intuitive interface and seamless experience."
        </p>
        <div class="border-t border-gray-100 pt-4">
          <h4 class="text-lg font-bold text-black">Thomas Williams</h4>
          <p class="text-gray-500 text-sm">Chief Executive Officer, LearnApp Education</p>
        </div>
      </div>

      <!-- Testimonial 6 -->
      <div class="flex-shrink-0 w-[85vw] sm:w-[70vw] md:w-[60vw] lg:w-[450px] xl:w-[480px] bg-white border border-gray-200 p-8">
        <div class="flex items-center gap-1 mb-4">
          <svg class="w-5 h-5 text-black fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
          <svg class="w-5 h-5 text-black fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
          <svg class="w-5 h-5 text-black fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
          <svg class="w-5 h-5 text-black fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
          <svg class="w-5 h-5 text-black fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
        </div>
        <p class="text-gray-600 text-base leading-relaxed mb-6">
          "Alta's team took the time to truly understand our brand and vision. The website they delivered perfectly captures our identity and has significantly improved our lead generation. Their ongoing support has been exceptional."
        </p>
        <div class="border-t border-gray-100 pt-4">
          <h4 class="text-lg font-bold text-black">Emily Richardson</h4>
          <p class="text-gray-500 text-sm">Director of Marketing, Nexus Financial Group</p>
        </div>
      </div>

    </div>

    <!-- CTA Section -->
    <div class="mt-12 text-center">
       <x-shared.buttons.primary-button 
    href="/shop" 
    text="View all templates" 
    size="md"
    variant="dark"
/>
    </div>
    
  </div>
</section>

<script>
  (function() {
    const carousel = document.getElementById('testimonialCarousel');
    const leftBtn = document.getElementById('scrollLeftBtn');
    const rightBtn = document.getElementById('scrollRightBtn');
    
    if (carousel) {
      if (leftBtn) {
        leftBtn.addEventListener('click', () => {
          carousel.scrollBy({ left: -450, behavior: 'smooth' });
        });
      }
      
      if (rightBtn) {
        rightBtn.addEventListener('click', () => {
          carousel.scrollBy({ left: 450, behavior: 'smooth' });
        });
      }
      
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