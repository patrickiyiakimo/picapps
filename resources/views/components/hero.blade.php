<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <title>PicApps · Crafting digital products</title>
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

    .hero-wrapper, .hero-wrapper * {
      border-radius: 0 !important;
    }

    .hero-wrapper {
      min-height: 100vh;
      position: relative;
      display: flex;
      align-items: center;
      overflow: hidden;
      background: #f8faff;
    }

    /* Background Image with Overlay */
    .hero-bg {
      position: absolute;
      inset: 0;
      z-index: 0;
    }

    .hero-bg img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: center;
    }

    .hero-overlay {
      position: absolute;
      inset: 0;
      background: linear-gradient(135deg, 
        rgba(255, 255, 255, 0.92) 0%,
        rgba(255, 255, 255, 0.85) 40%,
        rgba(255, 255, 255, 0.70) 70%,
        rgba(255, 255, 255, 0.50) 100%
      );
      z-index: 1;
    }

    /* Decorative elements */
    .hero-accent-1 {
      position: absolute;
      top: -20%;
      right: -10%;
      width: 600px;
      height: 600px;
      background: radial-gradient(circle, rgba(0, 191, 255, 0.06) 0%, transparent 70%);
      border-radius: 50% !important;
      z-index: 0;
      pointer-events: none;
    }

    .hero-accent-2 {
      position: absolute;
      bottom: -30%;
      left: -5%;
      width: 500px;
      height: 500px;
      background: radial-gradient(circle, rgba(135, 206, 235, 0.05) 0%, transparent 70%);
      border-radius: 50% !important;
      z-index: 0;
      pointer-events: none;
    }

    .hero-accent-3 {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 800px;
      height: 800px;
      border: 1px solid rgba(0, 191, 255, 0.04);
      border-radius: 50% !important;
      z-index: 0;
      pointer-events: none;
    }

    /* Content */
    .hero-content {
      position: relative;
      z-index: 2;
      width: 100%;
      max-width: 1200px;
      margin: 0 auto;
      padding: 4rem 2rem;
    }

    /* Badge */
    .badge {
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      background: rgba(0, 191, 255, 0.08);
      border: 1px solid rgba(0, 191, 255, 0.15);
      padding: 0.4rem 1.2rem 0.4rem 0.8rem;
      font-size: 0.7rem;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 0.12em;
      color: #1a2a4a;
      margin-bottom: 1.5rem;
    }

    .badge-dot {
      width: 6px;
      height: 6px;
      background: #00BFFF;
      border-radius: 50% !important;
      animation: pulseDot 2s ease-in-out infinite;
    }

    @keyframes pulseDot {
      0%, 100% { opacity: 1; transform: scale(1); }
      50% { opacity: 0.4; transform: scale(0.8); }
    }

    /* Main Heading */
    .main-heading {
      font-size: clamp(2.5rem, 8vw, 5.5rem);
      font-weight: 700;
      color: #1a2a4a;
      line-height: 1.05;
      letter-spacing: -0.03em;
      margin-bottom: 1.5rem;
    }

    .main-heading .highlight {
      background: linear-gradient(135deg, #00BFFF 0%, #87CEEB 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    .main-heading .highlight-dark {
      color: #1a2a4a;
    }

    /* Description */
    .hero-description {
      font-size: clamp(0.95rem, 1.2vw, 1.2rem);
      color: #4a5a6a;
      max-width: 580px;
      line-height: 1.7;
      margin-bottom: 2.5rem;
    }

    .hero-description strong {
      color: #1a2a4a;
      font-weight: 600;
    }

    /* Buttons */
    .btn-primary {
      background: #00BFFF;
      color: #ffffff;
      transition: all 0.3s ease;
      border: 2px solid #00BFFF;
      font-weight: 600;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 0.75rem;
      padding: 0.875rem 2.25rem;
      font-size: 0.8125rem;
      font-weight: 600;
      text-decoration: none;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      position: relative;
      overflow: hidden;
    }

    .btn-primary::after {
      content: '';
      position: absolute;
      top: -50%;
      left: -50%;
      width: 200%;
      height: 200%;
      background: linear-gradient(45deg, transparent, rgba(255,255,255,0.1), transparent);
      transform: rotate(45deg) translateX(-100%);
      transition: transform 0.6s ease;
    }

    .btn-primary:hover::after {
      transform: rotate(45deg) translateX(100%);
    }

    .btn-primary:hover {
      background: #0099CC;
      border-color: #0099CC;
      transform: translateY(-2px);
      box-shadow: 0 12px 35px rgba(0, 191, 255, 0.35);
    }

    .btn-secondary {
      background: transparent;
      color: #1a2a4a;
      transition: all 0.3s ease;
      border: 2px solid #1a2a4a;
      font-weight: 600;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 0.75rem;
      padding: 0.875rem 2.25rem;
      font-size: 0.8125rem;
      font-weight: 600;
      text-decoration: none;
      letter-spacing: 0.08em;
      text-transform: uppercase;
    }

    .btn-secondary:hover {
      background: #1a2a4a;
      color: #ffffff;
      transform: translateY(-2px);
      box-shadow: 0 12px 35px rgba(26, 42, 74, 0.2);
    }

    /* Stats bar */
    .stats-bar {
      display: flex;
      align-items: center;
      gap: 2.5rem;
      margin-top: 3rem;
      padding-top: 2rem;
      border-top: 1px solid rgba(0, 0, 0, 0.06);
    }

    .stat-item {
      display: flex;
      align-items: baseline;
      gap: 0.5rem;
    }

    .stat-number {
      font-size: 1.5rem;
      font-weight: 700;
      color: #1a2a4a;
      letter-spacing: -0.02em;
    }

    .stat-label {
      font-size: 0.7rem;
      font-weight: 500;
      color: #6a7a8a;
      text-transform: uppercase;
      letter-spacing: 0.06em;
    }

    .stat-divider {
      width: 1px;
      height: 30px;
      background: rgba(0, 0, 0, 0.08);
    }

    /* Responsive */
    @media (max-width: 768px) {
      .hero-content {
        padding: 3rem 1.5rem;
        text-align: center;
      }

      .hero-description {
        max-width: 100%;
        margin-left: auto;
        margin-right: auto;
      }

      .hero-description br {
        display: none;
      }

      .stats-bar {
        flex-wrap: wrap;
        justify-content: center;
        gap: 1.5rem;
      }

      .stat-divider {
        display: none;
      }

      .btn-primary, .btn-secondary {
        padding: 0.75rem 1.75rem;
        font-size: 0.75rem;
      }

      .badge {
        font-size: 0.6rem;
        padding: 0.3rem 1rem 0.3rem 0.6rem;
      }

      .stat-number {
        font-size: 1.25rem;
      }

      .stat-label {
        font-size: 0.6rem;
      }
    }

    @media (max-width: 480px) {
      .hero-content {
        padding: 2rem 1rem;
      }

      .stats-bar {
        gap: 1rem;
      }

      .stat-number {
        font-size: 1rem;
      }

      .stat-label {
        font-size: 0.55rem;
      }

      .btn-primary, .btn-secondary {
        padding: 0.65rem 1.5rem;
        font-size: 0.7rem;
        width: 100%;
        justify-content: center;
      }

      .flex-buttons {
        flex-direction: column;
        width: 100%;
      }
    }

    /* Animations */
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

    .fade-in-up-2 {
      animation: fadeInUp 1s ease-out forwards;
    }

    .fade-in-up-3 {
      animation: fadeInUp 1.2s ease-out forwards;
    }

    .fade-in-up-4 {
      animation: fadeInUp 1.4s ease-out forwards;
    }

    /* Utility */
    .text-[#1a2a4a] { color: #1a2a4a; }
    .text-[#4a5a6a] { color: #4a5a6a; }
    .text-[#6a7a8a] { color: #6a7a8a; }
    .text-[#00BFFF] { color: #00BFFF; }
    .text-[#87CEEB] { color: #87CEEB; }
    
    .bg-[#00BFFF] { background: #00BFFF; }
    .bg-[#1a2a4a] { background: #1a2a4a; }

    a, button, div {
      border-radius: 0px;
    }

    .btn-primary svg, .btn-secondary svg {
      stroke: currentColor;
    }

    .font-display {
      font-family: 'Space Grotesk', 'Inter', system-ui, sans-serif;
    }
  </style>
  <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

<section class="hero-wrapper">
  
  <!-- Background Image -->
  <div class="hero-bg">
    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80" 
         alt="Team collaboration" 
         loading="lazy">
  </div>
  
  <!-- Overlay -->
  <div class="hero-overlay"></div>

  <!-- Decorative Elements -->
  <div class="hero-accent-1"></div>
  <div class="hero-accent-2"></div>
  <div class="hero-accent-3"></div>

  <!-- Content -->
  <div class="hero-content">
    <div class="max-w-4xl">
     
      <!-- Main Heading -->
      <h1 class="main-heading fade-in-up" style="animation-delay: 0.1s;">
        We build digital<br>
        <span class="highlight">products</span> that<br>
        <span class="highlight-dark">drive results</span>
      </h1>

      <!-- Description -->
      <p class="hero-description fade-in-up-2" style="animation-delay: 0.2s;">
        <strong>Native mobile apps</strong> · <strong>high‑performance websites</strong> · 
        <strong>Figma design assets</strong> — we build from concept to code, 
        or from your ideas <span style="color: #8a9aaa;">(even if you don't have a design file)</span>.
      </p>

      <!-- Buttons -->
      <div class="flex flex-wrap gap-4 fade-in-up-3" style="animation-delay: 0.3s;">
        <a href="/contact" class="btn-primary">
          Start Your Project
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
          </svg>
        </a>
        <a href="/portfolio" class="btn-secondary">
          View Our Portfolio
        </a>
      </div>

     
    </div>
  </div>
</section>

<script>
  (function() {
    const ctaPrimary = document.querySelector('.btn-primary');
    const ctaSecondary = document.querySelector('.btn-secondary');
    

    
    if (ctaPrimary) ctaPrimary.addEventListener('click', handleCTAClick);
    if (ctaSecondary) ctaSecondary.addEventListener('click', handleCTAClick);

    // Optional: Parallax effect on image
    const heroBg = document.querySelector('.hero-bg img');
    if (heroBg) {
      window.addEventListener('scroll', () => {
        const scrolled = window.scrollY;
        heroBg.style.transform = `scale(1.02) translateY(${scrolled * 0.05}px)`;
      });
    }
  })();
</script>

</body>
</html>