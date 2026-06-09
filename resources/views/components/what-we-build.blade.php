<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <title>ALTA · Pre-built Websites</title>
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

    /* Sharp edges - no rounded corners */
    .sharp, .sharp * {
      border-radius: 0 !important;
    }

    .font-display {
      font-family: 'Bricolage Grotesque', 'Space Grotesk', system-ui, sans-serif;
    }

    @keyframes float-slow {
      0%, 100% { transform: translateY(0px); }
      50% { transform: translateY(-10px); }
    }

    @keyframes float-slow-reverse {
      0%, 100% { transform: translateY(0px); }
      50% { transform: translateY(10px); }
    }

    @keyframes pulse-slow {
      0%, 100% { opacity: 0.4; transform: scale(1); }
      50% { opacity: 0.6; transform: scale(1.05); }
    }

    .animate-float-slow {
      animation: float-slow 5s ease-in-out infinite;
    }

    .animate-float-slow-reverse {
      animation: float-slow-reverse 6s ease-in-out infinite;
    }

    .animate-pulse-slow {
      animation: pulse-slow 4s ease-in-out infinite;
    }

    .price-card {
      transition: all 0.4s cubic-bezier(0.2, 0.9, 0.4, 1.1);
    }

    .price-card:hover {
      transform: translateY(-8px);
    }
  </style>
  <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&family=Space+Grotesk:wght@300..700&family=Inter:opsz,wght@14..32,100..900&display=swap" rel="stylesheet">
</head>
<body>

<section class="relative py-20 md:py-28 overflow-hidden bg-black">
  
  <!-- Background Image -->
  <div class="absolute inset-0 z-0">
    <img src="/image/Rectangle 36 (2).png" alt="Background" class="w-full h-full object-cover">
    <!-- Dark overlay for better readability -->
    <div class="absolute inset-0 bg-gradient-to-br from-black/90 via-black/80 to-black/90"></div>
    <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-l from-[#61629F]/20 via-transparent to-transparent"></div>
    <div class="absolute bottom-0 left-0 w-1/2 h-full bg-gradient-to-r from-[#61629F]/10 via-transparent to-transparent"></div>
    
    <!-- Animated particles -->
    <div class="absolute top-1/4 left-1/4 w-1.5 h-1.5 bg-[#61629F]/40 animate-float-slow"></div>
    <div class="absolute top-1/2 right-1/3 w-2 h-2 bg-[#7B7CB3]/30 animate-float-slow-reverse"></div>
    <div class="absolute bottom-1/3 left-1/3 w-1 h-1 bg-white/20 animate-pulse-slow"></div>
    <div class="absolute top-2/3 right-1/4 w-1.5 h-1.5 bg-[#61629F]/30 animate-float-slow"></div>
    
    <!-- Grid overlay -->
    <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(rgba(97,98,159,0.3) 1px, transparent 1px); background-size: 40px 40px;"></div>
  </div>

  <div class="relative z-10 max-w-7xl mx-auto px-5 lg:px-8">
    
    <!-- Section Header -->
    <div class="text-center mb-16">
      <div class="inline-flex items-center gap-2 border border-[#61629F]/30 bg-[#61629F]/5 px-5 py-2 mb-6">
        <span class="w-2 h-2 bg-[#61629F]"></span>
        <span class="text-xs font-semibold uppercase tracking-wider text-[#61629F]">Launch Fast</span>
      </div>
      
      <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-4 font-display leading-tight">
        Get Your Website <span class="text-[#61629F]">Today</span>
      </h2>
      
      <div class="w-16 h-px bg-[#61629F] mx-auto mt-6"></div>
      
      <p class="text-gray-300 mt-6 max-w-2xl mx-auto text-base">
        Pre-built, fully customizable websites ready for you to launch. Choose your niche and go live in days.
      </p>
    </div>

    <!-- Pricing Cards Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
      
      <!-- Portfolio Website -->
      <div class="price-card group bg-white border-b-4 border-[#61629F] shadow-lg hover:shadow-2xl transition-all duration-300">
        <div class="relative h-52 overflow-hidden bg-gray-900">
          <img src="https://images.unsplash.com/photo-1542744095-291d1f67b221?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
               alt="Portfolio Website" 
               class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105 opacity-90 group-hover:opacity-100">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
          <div class="absolute bottom-0 left-0 right-0 p-4">
            <span class="text-xs uppercase tracking-wider text-[#61629F] font-semibold">Starting at</span>
          </div>
        </div>
        <div class="p-6 text-center">
          <h3 class="text-xl font-bold text-gray-900 mb-2">Portfolio Website</h3>
          <p class="text-3xl font-bold text-[#61629F] mb-4">$1,900</p>
          <ul class="text-sm text-gray-500 space-y-2 mb-6 text-left">
            <li class="flex items-center gap-2">✓ Fully responsive design</li>
            <li class="flex items-center gap-2">✓ Customizable gallery</li>
            <li class="flex items-center gap-2">✓ Contact form included</li>
          </ul>
          <button class="w-full py-3 text-sm font-semibold bg-black text-white hover:bg-[#61629F] transition-all duration-300">
            View Demo
          </button>
        </div>
      </div>

      <!-- Blog/Magazine -->
      <div class="price-card group bg-white border-b-4 border-[#61629F] shadow-lg hover:shadow-2xl transition-all duration-300">
        <div class="relative h-52 overflow-hidden bg-gray-900">
          <img src="https://images.unsplash.com/photo-1499750310107-5fef28a66643?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
               alt="Blog Magazine" 
               class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105 opacity-90 group-hover:opacity-100">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
          <div class="absolute bottom-0 left-0 right-0 p-4">
            <span class="text-xs uppercase tracking-wider text-[#61629F] font-semibold">Starting at</span>
          </div>
        </div>
        <div class="p-6 text-center">
          <h3 class="text-xl font-bold text-gray-900 mb-2">Blog/Magazine</h3>
          <p class="text-3xl font-bold text-[#61629F] mb-4">$1,500</p>
          <ul class="text-sm text-gray-500 space-y-2 mb-6 text-left">
            <li class="flex items-center gap-2">✓ SEO optimized structure</li>
            <li class="flex items-center gap-2">✓ Newsletter integration</li>
            <li class="flex items-center gap-2">✓ Category management</li>
          </ul>
          <button class="w-full py-3 text-sm font-semibold bg-black text-white hover:bg-[#61629F] transition-all duration-300">
            View Demo
          </button>
        </div>
      </div>

      <!-- Restaurant -->
      <div class="price-card group bg-white border-b-4 border-[#61629F] shadow-lg hover:shadow-2xl transition-all duration-300">
        <div class="relative h-52 overflow-hidden bg-gray-900">
          <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
               alt="Restaurant Website" 
               class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105 opacity-90 group-hover:opacity-100">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
          <div class="absolute bottom-0 left-0 right-0 p-4">
            <span class="text-xs uppercase tracking-wider text-[#61629F] font-semibold">Starting at</span>
          </div>
        </div>
        <div class="p-6 text-center">
          <h3 class="text-xl font-bold text-gray-900 mb-2">Restaurant Website</h3>
          <p class="text-3xl font-bold text-[#61629F] mb-4">$2,200</p>
          <ul class="text-sm text-gray-500 space-y-2 mb-6 text-left">
            <li class="flex items-center gap-2">✓ Online reservation system</li>
            <li class="flex items-center gap-2">✓ Menu management</li>
            <li class="flex items-center gap-2">✓ Location & hours</li>
          </ul>
          <button class="w-full py-3 text-sm font-semibold bg-black text-white hover:bg-[#61629F] transition-all duration-300">
            View Demo
          </button>
        </div>
      </div>

      <!-- Membership Portal -->
      <div class="price-card group bg-white border-b-4 border-[#61629F] shadow-lg hover:shadow-2xl transition-all duration-300">
        <div class="relative h-52 overflow-hidden bg-gray-900">
          <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
               alt="Membership Portal" 
               class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105 opacity-90 group-hover:opacity-100">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
          <div class="absolute bottom-0 left-0 right-0 p-4">
            <span class="text-xs uppercase tracking-wider text-[#61629F] font-semibold">Starting at</span>
          </div>
        </div>
        <div class="p-6 text-center">
          <h3 class="text-xl font-bold text-gray-900 mb-2">Membership Portal</h3>
          <p class="text-3xl font-bold text-[#61629F] mb-4">$2,800</p>
          <ul class="text-sm text-gray-500 space-y-2 mb-6 text-left">
            <li class="flex items-center gap-2">✓ User authentication</li>
            <li class="flex items-center gap-2">✓ Subscription tiers</li>
            <li class="flex items-center gap-2">✓ Member-only content</li>
          </ul>
          <button class="w-full py-3 text-sm font-semibold bg-black text-white hover:bg-[#61629F] transition-all duration-300">
            View Demo
          </button>
        </div>
      </div>
    </div>

    <!-- Bottom CTA Banner -->
    <div class="relative bg-gradient-to-r from-[#0a0a0a] to-[#11111a] border border-[#61629F]/20 overflow-hidden">
      <div class="absolute inset-0 bg-[#61629F]/5"></div>
      <div class="absolute -top-24 -right-24 w-64 h-64 bg-[#61629F]/10 rounded-full blur-3xl"></div>
      <div class="absolute -bottom-24 -left-24 w-64 h-64 bg-[#61629F]/10 rounded-full blur-3xl"></div>
      
      <div class="relative z-10 p-8 md:p-10">
        <div class="flex flex-col lg:flex-row items-center justify-between gap-8 lg:gap-12">
          
          <div class="flex-1 text-center lg:text-left">
            <div class="inline-flex items-center gap-2 border border-[#61629F]/30 bg-[#61629F]/10 px-4 py-1.5 mb-5">
              <svg class="w-4 h-4 text-[#61629F]" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.883l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.117l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4z"/>
              </svg>
              <span class="text-xs font-semibold uppercase tracking-wider text-[#61629F]">Ready to Launch</span>
            </div>
            
            <h3 class="text-2xl md:text-3xl font-bold text-white mb-3 font-display">
              Choose Your <span class="text-[#61629F]">Ready-to-Launch Website</span>
            </h3>
            
            <p class="text-gray-400 mb-7 max-w-lg">
              All websites come fully functional. You only need to add your content and branding.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
              <a href="/shop" class="inline-flex items-center justify-center gap-2 bg-[#61629F] text-white px-8 py-3.5 font-semibold text-sm hover:bg-[#7B7CB3] transition-all duration-300 group">
                <span>View All Templates</span>
                <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                </svg>
              </a>
              <a href="/custom" class="inline-flex items-center justify-center gap-2 border border-gray-700 text-gray-300 px-8 py-3.5 font-semibold text-sm hover:border-[#61629F] hover:text-[#61629F] transition-all duration-300">
                <span>Need Custom? Get Quote</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
              </a>
            </div>
          </div>
          
          <div class="flex-shrink-0">
            <div class="w-48 h-48 md:w-56 md:h-56 bg-gradient-to-br from-[#61629F]/20 to-transparent flex items-center justify-center border border-[#61629F]/30">
              <svg class="w-24 h-24 text-[#61629F]/40" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </div>
</section>

<script>
  document.querySelectorAll('.price-card button').forEach(btn => {
    btn.addEventListener('click', () => {
      alert('Demo preview will be available soon. Contact us for a live demo.');
    });
  });
</script>

</body>
</html>