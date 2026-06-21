<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <title>PicApps · Client Testimonials</title>
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

    .testimonial-carousel {
      scrollbar-width: none;
      -ms-overflow-style: none;
    }
    
    .testimonial-carousel::-webkit-scrollbar {
      display: none;
    }

    .testimonial-card {
      transition: all 0.4s cubic-bezier(0.2, 0.9, 0.4, 1.1);
    }

    .testimonial-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 12px 40px rgba(0, 191, 255, 0.08);
      border-color: #00BFFF;
    }

    a, button, div, img {
      border-radius: 0 !important;
    }

    .stat-item {
      transition: all 0.3s ease;
    }

    .stat-item:hover {
      transform: translateY(-2px);
    }

    .stat-number {
      background: linear-gradient(135deg, #1a2a4a 0%, #00BFFF 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }
  </style>
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&display=swap" rel="stylesheet">
</head>
<body>

<section class="bg-white py-20 md:py-28 overflow-hidden">
  <div class="max-w-7xl mx-auto px-5 lg:px-8">
    
    <!-- Section Header -->
    <div class="text-center mb-12">
      <div class="inline-flex items-center gap-2 border border-[#e8f4f8] bg-[#f8faff] px-5 py-2 mb-6">
        <span class="w-2 h-2 bg-[#00BFFF]"></span>
        <span class="text-xs font-semibold uppercase tracking-wider text-[#1a2a4a]">Testimonials</span>
      </div>
      
      <h2 class="text-5xl md:text-6xl lg:text-7xl font-bold text-[#1a2a4a] mb-4 font-display tracking-tight">
        What Our <span class="text-[#00BFFF]">Clients Say</span>
      </h2>
      
      <div class="w-16 h-1 bg-[#00BFFF] mx-auto mt-6"></div>
      
      <p class="text-[#4a5a6a] mt-6 max-w-2xl mx-auto text-base">
        Don't just take our word for it. Hear from the businesses we've helped succeed.
      </p>
    </div>

    <!-- Stats Row -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mb-16">
      <div class="stat-item text-center border-r border-[#eef2f6] last:border-r-0">
        <div class="stat-number text-4xl md:text-5xl font-bold">500+</div>
        <p class="text-[#6a7a8a] text-sm mt-1 font-medium">Clients Worldwide</p>
      </div>
      <div class="stat-item text-center border-r border-[#eef2f6] last:border-r-0">
        <div class="stat-number text-4xl md:text-5xl font-bold">98%</div>
        <p class="text-[#6a7a8a] text-sm mt-1 font-medium">Client Retention</p>
      </div>
      <div class="stat-item text-center border-r border-[#eef2f6] last:border-r-0">
        <div class="stat-number text-4xl md:text-5xl font-bold">4.9/5</div>
        <p class="text-[#6a7a8a] text-sm mt-1 font-medium">Average Rating</p>
      </div>
      <div class="stat-item text-center">
        <div class="stat-number text-4xl md:text-5xl font-bold">15+</div>
        <p class="text-[#6a7a8a] text-sm mt-1 font-medium">Countries Served</p>
      </div>
    </div>

    <!-- Carousel Navigation Arrows -->
    <div class="flex justify-end gap-4 mb-8">
      <button id="scrollLeftBtn" class="group flex items-center justify-center w-12 h-12 border border-[#eef2f6] transition-all duration-300 hover:border-[#00BFFF] hover:bg-[#f8faff]">
        <svg class="w-6 h-6 text-[#1a2a4a] group-hover:text-[#00BFFF] transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
        </svg>
      </button>
      <button id="scrollRightBtn" class="group flex items-center justify-center w-12 h-12 border border-[#eef2f6] transition-all duration-300 hover:border-[#00BFFF] hover:bg-[#f8faff]">
        <svg class="w-6 h-6 text-[#1a2a4a] group-hover:text-[#00BFFF] transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
        </svg>
      </button>
    </div>

    <!-- Testimonials Carousel -->
    <div id="testimonialCarousel" class="testimonial-carousel flex overflow-x-auto gap-8 pb-8 cursor-grab">
      
      <!-- Testimonial 1 -->
      <div class="testimonial-card flex-shrink-0 w-[85vw] sm:w-[70vw] md:w-[60vw] lg:w-[450px] xl:w-[480px] bg-white border border-[#eef2f6] p-8">
        <div class="flex items-center gap-1 mb-4">
          <svg class="w-5 h-5 text-[#00BFFF] fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
          <svg class="w-5 h-5 text-[#00BFFF] fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
          <svg class="w-5 h-5 text-[#00BFFF] fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
          <svg class="w-5 h-5 text-[#00BFFF] fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
          <svg class="w-5 h-5 text-[#00BFFF] fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
        </div>
        <p class="text-[#4a5a6a] text-base leading-relaxed mb-6">
          "PicApps has been an exceptional partner. Their technical expertise, attention to detail, and commitment to our success transformed our digital presence completely. The website they built for us has increased our conversion rate by over 150%."
        </p>
        <div class="border-t border-[#eef2f6] pt-4">
          <h4 class="text-lg font-bold text-[#1a2a4a]">John Davidson</h4>
          <p class="text-[#6a7a8a] text-sm">CEO, FashionStyle Group</p>
        </div>
      </div>

      <!-- Testimonial 2 -->
      <div class="testimonial-card flex-shrink-0 w-[85vw] sm:w-[70vw] md:w-[60vw] lg:w-[450px] xl:w-[480px] bg-white border border-[#eef2f6] p-8">
        <div class="flex items-center gap-1 mb-4">
          <svg class="w-5 h-5 text-[#00BFFF] fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
          <svg class="w-5 h-5 text-[#00BFFF] fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
          <svg class="w-5 h-5 text-[#00BFFF] fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
          <svg class="w-5 h-5 text-[#00BFFF] fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
          <svg class="w-5 h-5 text-[#00BFFF] fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
        </div>
        <p class="text-[#4a5a6a] text-base leading-relaxed mb-6">
          "The mobile app PicApps developed for us exceeded every expectation. Their project management was outstanding, and the app reached over 500,000 downloads in just three months. We couldn't be more satisfied with the results."
        </p>
        <div class="border-t border-[#eef2f6] pt-4">
          <h4 class="text-lg font-bold text-[#1a2a4a]">Jane Smith</h4>
          <p class="text-[#6a7a8a] text-sm">Founder, FitTrack Health</p>
        </div>
      </div>

      <!-- Testimonial 3 -->
      <div class="testimonial-card flex-shrink-0 w-[85vw] sm:w-[70vw] md:w-[60vw] lg:w-[450px] xl:w-[480px] bg-white border border-[#eef2f6] p-8">
        <div class="flex items-center gap-1 mb-4">
          <svg class="w-5 h-5 text-[#00BFFF] fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
          <svg class="w-5 h-5 text-[#00BFFF] fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
          <svg class="w-5 h-5 text-[#00BFFF] fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
          <svg class="w-5 h-5 text-[#00BFFF] fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
          <svg class="w-5 h-5 text-[#00BFFF] fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
        </div>
        <p class="text-[#4a5a6a] text-base leading-relaxed mb-6">
          "PicApps delivered a fully HIPAA-compliant healthcare platform that exceeded all regulatory requirements. Their attention to both security and user experience is exceptional. Our patients have embraced the new system enthusiastically."
        </p>
        <div class="border-t border-[#eef2f6] pt-4">
          <h4 class="text-lg font-bold text-[#1a2a4a]">Dr. Sarah Rodriguez</h4>
          <p class="text-[#6a7a8a] text-sm">Medical Director, MediHealth Systems</p>
        </div>
      </div>

      <!-- Testimonial 4 -->
      <div class="testimonial-card flex-shrink-0 w-[85vw] sm:w-[70vw] md:w-[60vw] lg:w-[450px] xl:w-[480px] bg-white border border-[#eef2f6] p-8">
        <div class="flex items-center gap-1 mb-4">
          <svg class="w-5 h-5 text-[#00BFFF] fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
          <svg class="w-5 h-5 text-[#00BFFF] fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
          <svg class="w-5 h-5 text-[#00BFFF] fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
          <svg class="w-5 h-5 text-[#00BFFF] fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
          <svg class="w-5 h-5 text-[#00BFFF] fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
        </div>
        <p class="text-[#4a5a6a] text-base leading-relaxed mb-6">
          "Working with PicApps has been transformative for our business. Their strategic insights and technical execution helped us achieve remarkable growth. We've seen a 200% increase in online sales since launching our new e-commerce platform."
        </p>
        <div class="border-t border-[#eef2f6] pt-4">
          <h4 class="text-lg font-bold text-[#1a2a4a]">Michael Chen</h4>
          <p class="text-[#6a7a8a] text-sm">CTO, GlobalCorp Industries</p>
        </div>
      </div>

      <!-- Testimonial 5 -->
      <div class="testimonial-card flex-shrink-0 w-[85vw] sm:w-[70vw] md:w-[60vw] lg:w-[450px] xl:w-[480px] bg-white border border-[#eef2f6] p-8">
        <div class="flex items-center gap-1 mb-4">
          <svg class="w-5 h-5 text-[#00BFFF] fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
          <svg class="w-5 h-5 text-[#00BFFF] fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
          <svg class="w-5 h-5 text-[#00BFFF] fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
          <svg class="w-5 h-5 text-[#00BFFF] fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
          <svg class="w-5 h-5 text-[#00BFFF] fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
        </div>
        <p class="text-[#4a5a6a] text-base leading-relaxed mb-6">
          "The learning management platform PicApps created has transformed how we deliver education. Our user engagement is at an all-time high, and our students consistently praise the intuitive interface and seamless experience."
        </p>
        <div class="border-t border-[#eef2f6] pt-4">
          <h4 class="text-lg font-bold text-[#1a2a4a]">Thomas Williams</h4>
          <p class="text-[#6a7a8a] text-sm">CEO, LearnApp Education</p>
        </div>
      </div>

      <!-- Testimonial 6 -->
      <div class="testimonial-card flex-shrink-0 w-[85vw] sm:w-[70vw] md:w-[60vw] lg:w-[450px] xl:w-[480px] bg-white border border-[#eef2f6] p-8">
        <div class="flex items-center gap-1 mb-4">
          <svg class="w-5 h-5 text-[#00BFFF] fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
          <svg class="w-5 h-5 text-[#00BFFF] fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
          <svg class="w-5 h-5 text-[#00BFFF] fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
          <svg class="w-5 h-5 text-[#00BFFF] fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
          <svg class="w-5 h-5 text-[#00BFFF] fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
        </div>
        <p class="text-[#4a5a6a] text-base leading-relaxed mb-6">
          "PicApps' team took the time to truly understand our brand and vision. The website they delivered perfectly captures our identity and has significantly improved our lead generation. Their ongoing support has been exceptional."
        </p>
        <div class="border-t border-[#eef2f6] pt-4">
          <h4 class="text-lg font-bold text-[#1a2a4a]">Emily Richardson</h4>
          <p class="text-[#6a7a8a] text-sm">Director of Marketing, Nexus Financial Group</p>
        </div>
      </div>

    </div>

    <!-- CTA Section -->
    <div class="mt-12 text-center">
      <a href="/contact" class="inline-flex items-center gap-2 px-8 py-3.5 text-sm font-semibold uppercase tracking-wide text-white bg-[#00BFFF] border-2 border-[#00BFFF] transition-all duration-300 hover:bg-[#0099CC] hover:border-[#0099CC] hover:shadow-lg hover:shadow-[#00BFFF]/25 hover:-translate-y-0.5">
        Start Your Project
        <svg class="w-4 h-4 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
        </svg>
      </a>
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