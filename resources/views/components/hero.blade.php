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
      background: #000000;
    }

    .hero-wrapper, .hero-wrapper * {
      border-radius: 0 !important;
    }

    .btn-primary {
      background: #ffffff;
      color: #000000;
      transition: all 0.25s ease;
      border: 1px solid #ffffff;
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
      background: transparent;
      color: #ffffff;
      border-color: #ffffff;
      transform: translateY(-2px);
      box-shadow: 0 12px 22px -12px rgba(0,0,0,0.3);
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .fade-in-up {
      animation: fadeInUp 0.8s ease-out forwards;
    }

    .video-overlay {
      position: absolute;
      inset: 0;
      background: linear-gradient(135deg, rgba(0,0,0,0.75) 0%, rgba(0,0,0,0.6) 50%, rgba(0,0,0,0.75) 100%);
      z-index: 1;
    }

    .video-overlay-secondary {
      position: absolute;
      inset: 0;
      background: radial-gradient(circle at center, transparent 30%, rgba(0,0,0,0.4) 100%);
      z-index: 2;
    }

    .bg-video {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: 0;
    }
  </style>
  <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&display=swap" rel="stylesheet">
</head>
<body style="font-family: 'Inter', sans-serif; background: #000;">

<section class="hero-wrapper relative min-h-screen flex items-center overflow-hidden">
  
  <!-- Video Background -->
  <video autoplay loop muted playsinline class="bg-video">
    <source src="/videos/alta-video-bg.mp4" type="video/mp4">
  </video>
  
  <!-- Dark Overlays for text visibility -->
  <div class="video-overlay"></div>
  <div class="video-overlay-secondary"></div>

  <div class="relative z-10 w-full mx-auto px-5 sm:px-8 lg:px-12 py-16 md:py-20">
    <div class="max-w-5xl mx-auto text-center">
      
      
      <!-- Main Heading -->
      <h1 class="text-5xl sm:text-6xl md:text-7xl lg:text-8xl font-bold tracking-tight text-white leading-[1.15] mb-8 fade-in-up" style="animation-delay: 0.1s;">
        Crafting digital products<br>
        <span class="text-white/70">with precision & clarity</span>
      </h1>
      
      <!-- Description -->
      <p class="text-white/70 text-base sm:text-lg md:text-xl max-w-2xl mx-auto leading-relaxed mb-10 fade-in-up" style="animation-delay: 0.2s;">
        Native mobile apps, high‑performance websites, and Figma design assets — we build from concept to code, or from your ideas (even if you don't have a design file).
      </p>
      
      <!-- CTA Button -->
      <div class="mb-10 fade-in-up" style="animation-delay: 0.3s;">
        <a href="#start-journey" class="btn-primary uppercase group text-sm sm:text-base inline-flex">
          <span>Let's Create Your Brand</span>
          <svg class="w-5 h-5 transition-transform duration-200 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
          </svg>
        </a>
      </div>
      
      <!-- Rating -->
      <div class="flex items-center justify-center gap-4 text-xs pt-4 fade-in-up" style="animation-delay: 0.4s;">
        <div class="flex items-center gap-2">
          <span class="text-white/90 text-2xl sm:text-3xl">★★★★★</span>
          <span class="text-white/60 text-sm">5.0 (187 reviews)</span>
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
  a, button, div {
    border-radius: 0px;
  }
  
  .btn-primary svg {
    stroke: currentColor;
  }
  
  .hero-wrapper {
    min-height: 100vh;
  }
  
  /* Ensure video plays smoothly */
  .bg-video {
    object-fit: cover;
    object-position: center;
  }
</style>

</body>
</html>