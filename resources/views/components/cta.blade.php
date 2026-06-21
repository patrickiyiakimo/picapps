<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <title>PicApps · Start Your Project</title>
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

    a, button, div, img {
      border-radius: 0 !important;
    }

    .cta-card {
      transition: all 0.4s cubic-bezier(0.2, 0.9, 0.4, 1.1);
    }

    .cta-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 12px 40px rgba(0, 191, 255, 0.08);
    }

    .btn-primary {
      transition: all 0.3s ease;
    }

    .btn-primary:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 25px rgba(0, 191, 255, 0.3);
    }

    .btn-secondary {
      transition: all 0.3s ease;
    }

    .btn-secondary:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 25px rgba(26, 42, 74, 0.15);
    }

    .floating-badge {
      animation: floatBadge 3s ease-in-out infinite;
    }

    @keyframes floatBadge {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-5px); }
    }

    .pulse-dot {
      animation: pulseDot 2s ease-in-out infinite;
    }

    @keyframes pulseDot {
      0%, 100% { opacity: 1; transform: scale(1); }
      50% { opacity: 0.4; transform: scale(0.8); }
    }
  </style>
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&display=swap" rel="stylesheet">
</head>
<body>

<section class="bg-white py-20 md:py-28 overflow-hidden">
  <div class="max-w-7xl mx-auto px-5 lg:px-8">
    <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-16">
      
      <!-- Left Side - CTA Text Content -->
      <div class="flex-1 text-center lg:text-left">
        
        <!-- Badge -->
        <div class="floating-badge inline-flex items-center gap-2 border border-[#e8f4f8] bg-[#f8faff] px-5 py-2 mb-6">
          <span class="pulse-dot w-2 h-2 bg-[#00BFFF]"></span>
          <span class="text-xs font-semibold uppercase tracking-wider text-[#1a2a4a]">Free Consultation</span>
        </div>
        
        <!-- Main Heading -->
        <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-[#1a2a4a] mb-6 font-display tracking-tight leading-tight">
          Ready to Turn Your
          <span class="text-[#00BFFF]">Idea Into Reality?</span>
        </h2>
        
        <div class="w-16 h-1 bg-[#00BFFF] mb-6 lg:mx-0 mx-auto"></div>
        
        <p class="text-[#4a5a6a] text-base md:text-lg mb-8 max-w-lg mx-auto lg:mx-0 leading-relaxed">
          Get a free consultation and quote today. No obligation, just expert advice on your website or app project.
        </p>
        
       
        <!-- CTA Buttons -->
        <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
          <a href="/contact" class="btn-primary inline-flex items-center justify-center gap-2 px-8 py-3.5 text-sm font-semibold uppercase tracking-wide text-white bg-[#00BFFF] border-2 border-[#00BFFF] transition-all duration-300 hover:bg-[#0099CC] hover:border-[#0099CC] hover:shadow-lg hover:shadow-[#00BFFF]/25 hover:-translate-y-0.5">
            Start Your Project
            <svg class="w-4 h-4 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
            </svg>
          </a>
          <a href="/pricing" class="btn-secondary inline-flex items-center justify-center gap-2 px-8 py-3.5 text-sm font-semibold uppercase tracking-wide text-[#1a2a4a] bg-transparent border-2 border-[#1a2a4a] transition-all duration-300 hover:bg-[#1a2a4a] hover:text-white hover:shadow-lg hover:shadow-[#1a2a4a]/15 hover:-translate-y-0.5">
            View Pricing
          </a>
        </div>
        
     
      </div>
      
      <!-- Right Side - Image -->
      <div class="flex-1 flex justify-center lg:justify-end">
        <div class="relative">
          <div class="absolute -top-6 -right-6 w-32 h-32 bg-[#00BFFF]/5 rounded-full"></div>
          <div class="absolute -bottom-6 -left-6 w-24 h-24 bg-[#87CEEB]/5 rounded-full"></div>
          <img src="/images/Group 21.png" alt="Consultation Illustration" class="w-full max-w-md h-auto relative z-10">
        </div>
      </div>
      
    </div>
  </div>
</section>

</body>
</html>