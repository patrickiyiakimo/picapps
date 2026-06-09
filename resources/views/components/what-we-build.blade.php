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

    .font-display {
      font-family: 'Bricolage Grotesque', 'Space Grotesk', system-ui, sans-serif;
    }

    .price-card {
      transition: all 0.4s cubic-bezier(0.2, 0.9, 0.4, 1.1);
    }

    .price-card:hover {
      transform: translateY(-6px);
    }

    a, button, div, img {
      border-radius: 0 !important;
    }
  </style>
  <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&family=Space+Grotesk:wght@300..700&family=Inter:opsz,wght@14..32,100..900&display=swap" rel="stylesheet">
</head>
<body>

<section class="bg-white py-20 md:py-28 my-20">
  <div class="max-w-7xl mx-auto px-5 lg:px-8">
    
    <!-- Section Header -->
    <div class="text-center mb-16">
      <div class="inline-flex items-center gap-2 border border-[#61629F]/20 bg-[#61629F]/5 px-5 py-2 mb-6">
        <span class="w-2 h-2 bg-[#61629F]"></span>
        <span class="text-xs font-semibold uppercase tracking-wider text-[#61629F]">Launch Fast</span>
      </div>
      
      <h2 class="text-5xl md:text-6xl lg:text-7xl font-bold text-black mb-4 font-display tracking-tight">
        Get Your Website <span class="text-[#61629F]">Today</span>
      </h2>
      
      <div class="w-16 h-px bg-black mx-auto mt-6"></div>
      
      <p class="text-gray-500 mt-6 max-w-2xl mx-auto text-base">
        Pre-built, fully customizable websites ready for you to launch. Choose your niche and go live in days.
      </p>
    </div>

    <!-- Pricing Cards Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-16">
      
      <!-- Portfolio Website -->
      <div class="price-card group bg-white border border-gray-200 hover:border-[#61629F] transition-all duration-300">
        <div class="relative h-52 overflow-hidden bg-gray-100">
          <img src="https://images.unsplash.com/photo-1542744095-291d1f67b221?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
               alt="Portfolio Website" 
               class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
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
      <div class="price-card group bg-white border border-gray-200 hover:border-[#61629F] transition-all duration-300">
        <div class="relative h-52 overflow-hidden bg-gray-100">
          <img src="https://images.unsplash.com/photo-1499750310107-5fef28a66643?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
               alt="Blog Magazine" 
               class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
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
      <div class="price-card group bg-white border border-gray-200 hover:border-[#61629F] transition-all duration-300">
        <div class="relative h-52 overflow-hidden bg-gray-100">
          <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
               alt="Restaurant Website" 
               class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
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
      <div class="price-card group bg-white border border-gray-200 hover:border-[#61629F] transition-all duration-300">
        <div class="relative h-52 overflow-hidden bg-gray-100">
          <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
               alt="Membership Portal" 
               class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
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

    <!-- Bottom CTA Banner - Clean & Professional -->
    <div class="bg-black border border-gray-800">
      <div class="p-8 md:p-10">
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
              <a href="/shop" class="inline-flex items-center uppercase justify-center gap-2 bg-[#61629F] text-white px-8 py-3.5 font-semibold text-sm hover:bg-[#7B7CB3] transition-all duration-300 group">
                <span>View All Templates</span>
                <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                </svg>
              </a>
              <a href="/custom" class="inline-flex items-center uppercase justify-center gap-2 border border-gray-700 text-gray-300 px-8 py-3.5 font-semibold text-sm hover:border-[#61629F] hover:text-[#61629F] transition-all duration-300">
                <span>Need Custom? Get Quote</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
              </a>
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