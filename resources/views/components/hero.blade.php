<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <title>ALTA · Crafting digital products</title>
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

    .hero-wrapper, .hero-wrapper * {
      border-radius: 0 !important;
    }

    .btn-primary {
      background: #000000;
      color: white;
      transition: all 0.25s ease;
      border: 1px solid #000000;
      font-weight: 600;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 0.75rem;
      padding: 1rem 2rem;
      font-size: 1rem;
      font-weight: 600;
      text-decoration: none;
      letter-spacing: 0.05em;
    }
    
    .btn-primary:hover {
      background: #1c1c1c;
      border-color: #61629F;
      transform: translateY(-2px);
      box-shadow: 0 12px 22px -12px rgba(0,0,0,0.2);
    }

    @keyframes floatSoft {
      0% { transform: translateY(0px); }
      50% { transform: translateY(-10px); }
      100% { transform: translateY(0px); }
    }
    
    .float-img-animation {
      animation: floatSoft 6s ease-in-out infinite;
    }
  </style>
  <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&display=swap" rel="stylesheet">
</head>
<body style="font-family: 'Inter', sans-serif; background: #fff;">

<section class="hero-wrapper relative min-h-screen flex items-center bg-white">
  <div class="w-full mx-auto px-5 sm:px-8 ">
    <div class="flex flex-col lg:flex-row items-stretch gap-12 lg:gap-16">
      
      <!-- LEFT SIDE: Text Content - Full width on mobile, balanced on desktop -->
      <div class="flex-1 flex items-center">
        <div class="w-full max-w-xl mx-auto lg:mx-0">
          <h1 class="text-5xl sm:text-6xl lg:text-5xl xl:text-5xl font-bold tracking-tight text-gray-900 leading-[1.15] mb-8">
            Crafting digital products<br>
            <span class="text-[#61629F]">with precision & clarity</span>
          </h1>
          
          <p class="text-gray-500 text-base sm:text-lg lg:text-xl max-w-lg leading-relaxed mb-10">
            Native mobile apps, high‑performance websites, and Figma design assets — we build from concept to code, or from your ideas (even if you don't have a design file).
          </p>
          
          <div class="mb-8">
            <a href="#start-journey" class="btn-primary uppercase group text-sm sm:text-base">
              <span>Let's Create Your Brand</span>
              <svg class="w-5 h-5 transition-transform duration-200 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
              </svg>
            </a>
          </div>
          
          <div class="flex items-center gap-4 text-xs text-gray-400 pt-4">
            <div class="flex items-center gap-2">
              <span class="text-black text-2xl sm:text-3xl">★★★★★</span>
              <span class="text-sm">5.0 (187 reviews)</span>
            </div>
          </div>
        </div>
      </div>
      
      <!-- RIGHT SIDE: Full height image -->
      <div class="flex-1 flex items-stretch min-h-[400px] lg:min-h-[600px]">
        <div class="relative w-full h-full">
          <img src="/images/Rectangle 38 (1).png" 
               alt="Creative team building websites and mobile apps together"
               class="w-full h-full object-cover">
        </div>
      </div>
      
    </div>
  </div>
</section>

<script>
  (function() {
    const ctaBtn = document.querySelector('.btn-primary');
    const handleCTAClick = (e) => {
      e.preventDefault();
      alert("🚀 Let's build something exceptional. Our team will reach out to discuss your website, app or Figma design needs.");
    };
    if (ctaBtn) ctaBtn.addEventListener('click', handleCTAClick);
  })();
</script>

<style>
  a, button, div, img {
    border-radius: 0px;
  }
  
  .btn-primary svg {
    stroke: currentColor;
  }
  
  /* Ensure image takes full height on all screens */
  .hero-wrapper {
    min-height: 100vh;
  }
  
  @media (min-width: 1024px) {
    .hero-wrapper {
      min-height: 100vh;
    }
  }
</style>
</body>
</html>