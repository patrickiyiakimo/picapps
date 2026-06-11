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

    /* Professional Fonts - matching blog section */
    .font-display {
      font-family: 'Space Grotesk', 'Inter', system-ui, sans-serif;
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
      padding: 0.875rem 1.75rem;
      font-size: 0.875rem;
      font-weight: 600;
      text-decoration: none;
      letter-spacing: 0.08em;
      text-transform: uppercase;
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
      background: linear-gradient(135deg, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.5) 50%, rgba(0,0,0,0.8) 100%);
      z-index: 1;
    }

    .video-overlay-secondary {
      position: absolute;
      inset: 0;
      background: radial-gradient(circle at center, transparent 30%, rgba(0,0,0,0.5) 100%);
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

    /* Responsive height adjustments - Reduced further */
    .hero-wrapper {
      min-height: 65vh;
    }

    /* Mobile devices */
    @media (max-width: 768px) {
      .hero-wrapper {
        min-height: 60vh;
      }
      .btn-primary {
        padding: 0.75rem 1.5rem;
      }
    }

    /* Small mobile devices */
    @media (max-width: 480px) {
      .hero-wrapper {
        min-height: 70vh;
      }
    }

    /* Ultrawide screens (21:9 and wider) */
    @media (min-width: 1921px) {
      .hero-wrapper {
        min-height: 50vh;
      }
    }

    /* Very large screens (4K+) */
    @media (min-width: 2560px) {
      .hero-wrapper {
        min-height: 45vh;
      }
    }

    /* Tablet landscape */
    @media (min-width: 769px) and (max-width: 1024px) {
      .hero-wrapper {
        min-height: 55vh;
      }
    }
  </style>
  <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body style="font-family: 'Inter', sans-serif; background: #000;">

<section class="hero-wrapper relative flex items-center overflow-hidden">
  
  <!-- Video Background -->
  <video autoplay loop muted playsinline preload="auto" class="bg-video">
    <source src="/videos/alta-video-bg.mp4" type="video/mp4">
  </video>
  
  <!-- Dark Overlays for text visibility -->
  <div class="video-overlay"></div>
  <div class="video-overlay-secondary"></div>

  <div class="relative z-10 w-full mx-auto px-5 sm:px-8 lg:px-12 py-10 md:py-12">
    <div class="max-w-5xl mx-auto text-center">
      
      <!-- Main Heading - Using Space Grotesk font from blog -->
      <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-8xl font-bold text-white mb-4 md:mb-5 font-display tracking-tighter leading-[1.1] fade-in-up" style="animation-delay: 0.1s;">
        Crafting digital products<br>
        <span class="text-white/60">with precision & clarity</span>
      </h1>
      
      <!-- Description -->
      <p class="text-white/70 text-sm sm:text-base md:text-lg max-w-2xl mx-auto leading-relaxed mb-6 md:mb-7 fade-in-up" style="animation-delay: 0.2s;">
        Native mobile apps, high‑performance websites, and Figma design assets — we build from concept to code, or from your ideas (even if you don't have a design file).
      </p>
      
      <!-- CTA Button -->
      <div class="mb-6 md:mb-7 fade-in-up" style="animation-delay: 0.3s;">
        <a href="#start-journey" class="btn-primary uppercase group text-sm sm:text-base inline-flex">
          <span>Let's Create Your Brand</span>
          <svg class="w-5 h-5 transition-transform duration-200 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
          </svg>
        </a>
      </div>
      
      <!-- Rating -->
      <div class="flex items-center justify-center gap-4 text-xs pt-1 fade-in-up" style="animation-delay: 0.4s;">
        <div class="flex items-center gap-2">
          <span class="text-white/90 text-xl sm:text-2xl md:text-3xl tracking-wide">★★★★★</span>
          <span class="text-white/60 text-xs sm:text-sm uppercase tracking-wide">5.0 (187 reviews)</span>
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
    
    // Force video to load immediately
    const video = document.querySelector('.bg-video');
    if (video) {
      video.preload = 'auto';
      video.load();
    }
  })();
</script>

<style>
  a, button, div {
    border-radius: 0px;
  }
  
  .btn-primary svg {
    stroke: currentColor;
  }
  
  /* Ensure video covers properly */
  .bg-video {
    object-fit: cover;
    object-position: center;
  }
  
  /* Custom font styles */
  .font-display {
    font-family: 'Space Grotesk', 'Inter', system-ui, sans-serif;
    letter-spacing: -0.02em;
  }
  
  /* Smooth text rendering */
  h1, .btn-primary, .badge-text {
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
  }
</style>

</body>
</html>