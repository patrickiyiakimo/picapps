<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <title>ALTA · Start Your Project</title>
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

    a, button, div, img {
      border-radius: 0 !important;
    }
  </style>
  <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&family=Space+Grotesk:wght@300..700&family=Inter:opsz,wght@14..32,100..900&display=swap" rel="stylesheet">
</head>
<body>

<section class="bg-white py-20 md:py-28">
  <div class="max-w-7xl mx-auto px-5 lg:px-8">
    <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-16">
      
      <!-- Left Side - CTA Text Content -->
      <div class="flex-1 text-center lg:text-left">
        
        <!-- Badge -->
        <div class="inline-flex items-center gap-2 border border-[#61629F]/20 bg-[#61629F]/5 px-4 py-2 mb-6">
          <svg class="w-4 h-4 text-[#61629F]" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"/>
          </svg>
          <span class="text-xs font-semibold uppercase tracking-wider text-[#61629F]">Limited Time Offer</span>
        </div>
        
        <!-- Main Heading -->
        <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-black mb-6 font-display tracking-tight leading-tight">
          Ready to Turn Your
          <span class="text-[#61629F]">Idea Into Reality?</span>
        </h2>
        
        <p class="text-gray-500 text-base md:text-lg mb-8 max-w-lg mx-auto lg:mx-0 leading-relaxed">
          Get a free consultation and quote today. No obligation, just expert advice on your website or app project.
        </p>
        
        <!-- CTA Buttons -->
        <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
          <a href="/contact" class="group inline-flex items-center justify-center gap-2 bg-black text-white px-8 py-4 font-semibold text-sm hover:bg-[#61629F] transition-all duration-300">
            <span>Start Your Project</span>
            <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
            </svg>
          </a>
          <a href="#pricing" class="group inline-flex items-center justify-center gap-2 border border-gray-300 text-gray-700 px-8 py-4 font-semibold text-sm hover:border-[#61629F] hover:text-[#61629F] transition-all duration-300">
            <span>View Pricing</span>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
            </svg>
          </a>
        </div>
        
      </div>
      
      <!-- Right Side - Image -->
      <div class="flex-1 flex justify-center lg:justify-end">
        <div class="relative">
          <img src="/images/Group 21.png" alt="Consultation Illustration" class="w-full max-w-md h-auto">
        </div>
      </div>
      
    </div>
  </div>
</section>

</body>
</html>
