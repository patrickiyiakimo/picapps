<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <title>PicApps · Industries We Serve</title>
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
      overflow-x: hidden;
    }

    .industry-card {
      transition: all 0.4s cubic-bezier(0.2, 0.9, 0.4, 1.1);
    }

    .industry-card:hover {
      transform: translateY(-8px);
    }

    .industry-card:hover .industry-overlay {
      background: linear-gradient(to top, rgba(0, 191, 255, 0.92), rgba(0, 191, 255, 0.6));
    }

    .industry-overlay {
      transition: all 0.5s ease;
    }

    .industry-card:hover .industry-description {
      opacity: 1;
      transform: translateY(0);
    }

    .industry-description {
      transition: all 0.4s ease;
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
      animation: fadeInUp 0.6s ease-out forwards;
    }

    @keyframes pulse-slow {
      0%, 100% { opacity: 0.08; transform: scale(1); }
      50% { opacity: 0.15; transform: scale(1.05); }
    }

    .animate-pulse-slow {
      animation: pulse-slow 4s ease-in-out infinite;
    }

    a, button, div, img, hr {
      border-radius: 0 !important;
    }

    .font-display {
      font-family: 'Space Grotesk', 'Inter', system-ui, sans-serif;
    }

    .industry-card.sticky-active {
      position: sticky;
      top: 100px;
      z-index: 10;
    }

    .scroll-progress {
      position: fixed;
      bottom: 30px;
      right: 30px;
      width: 60px;
      height: 60px;
      border-radius: 50%;
      background: #00BFFF;
      display: flex;
      align-items: center;
      justify-content: center;
      z-index: 100;
      opacity: 0;
      transition: opacity 0.3s ease, transform 0.3s ease;
      cursor: pointer;
      box-shadow: 0 4px 20px rgba(0, 191, 255, 0.3);
    }
    
    .scroll-progress.visible {
      opacity: 1;
    }
    
    .scroll-progress:hover {
      background: #0099CC;
      transform: scale(1.05);
    }
  </style>
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&display=swap" rel="stylesheet">
</head>
<body class="bg-white">

<section class="relative bg-white py-16 md:py-24 overflow-hidden">
  
  <!-- Background decorative elements -->
  <div class="absolute inset-0 z-0 pointer-events-none">
    <svg class="absolute top-0 left-0 w-full h-full opacity-5" viewBox="0 0 1200 800" preserveAspectRatio="none">
      <path d="M0,100 Q150,50 300,100 Q450,150 600,100 Q750,50 900,100 Q1050,150 1200,100" stroke="#00BFFF" stroke-width="2" fill="none"/>
      <path d="M0,300 Q150,250 300,300 Q450,350 600,300 Q750,250 900,300 Q1050,350 1200,300" stroke="#00BFFF" stroke-width="2" fill="none" opacity="0.5"/>
      <path d="M0,500 Q150,450 300,500 Q450,550 600,500 Q750,450 900,500 Q1050,550 1200,500" stroke="#00BFFF" stroke-width="1" fill="none" opacity="0.3"/>
    </svg>
    <div class="absolute -top-40 -right-40 w-96 h-96 bg-[#00BFFF]/5 rounded-full filter blur-3xl animate-pulse-slow"></div>
    <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-[#87CEEB]/5 rounded-full filter blur-3xl animate-pulse-slow"></div>
  </div>

  <div class="relative z-10 max-w-7xl mx-auto px-5 lg:px-8">
    
    <!-- Section Header -->
    <div class="mb-16">
      <hr class="border-t border-[#eef2f6] mb-8">
      
      <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6 mb-8">
        <div class="flex gap-4">
          <div class="w-0.5 bg-[#00BFFF]"></div>
          <div>
            <h1 class="text-7xl sm:text-8xl md:text-9xl lg:text-[9rem] xl:text-[9rem] font-bold text-[#1a2a4a] leading-none tracking-tighter font-display">
              Industries<br><span class="text-[#00BFFF]">We Serve</span>
            </h1>
          </div>
        </div>
        
        <div class="lg:text-right">
          <p class="text-[#6a7a8a] max-w-md text-sm uppercase tracking-wide font-medium">
            Specialized solutions tailored to your industry's unique challenges
          </p>
        </div>
      </div>
      
      <hr class="border-t border-[#eef2f6] mt-8">
    </div>

    <!-- Scroll Progress Indicator -->
    <div class="scroll-progress" id="scrollProgress">
      <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
      </svg>
    </div>

    <!-- Industries Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8" id="industriesGrid">
      
      <!-- Industry 1: Education -->
      <div class="industry-card group relative overflow-hidden bg-black fade-in-up" data-sticky="true" style="animation-delay: 0s;">
        <div class="relative h-[500px] md:h-[550px] lg:h-[600px] overflow-hidden">
          <img src="/images/Rectangle 11.png" 
               alt="Education Industry" 
               class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
          <div class="industry-overlay absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-transparent transition-all duration-500"></div>
          <div class="absolute bottom-0 left-0 right-0 p-8 text-white">
            <div class="mb-3">
              <div class="w-16 h-0.5 bg-[#00BFFF] mb-4 group-hover:w-24 transition-all duration-500"></div>
              <h2 class="text-3xl md:text-4xl font-bold tracking-tight font-display">Education</h2>
            </div>
            <p class="industry-description text-gray-300 text-sm md:text-base max-w-md opacity-0 transform translate-y-4">
              E-learning platforms, student portals, and educational management systems.
            </p>
          </div>
        </div>
      </div>

      <!-- Industry 2: Textile -->
      <div class="industry-card group relative overflow-hidden bg-black fade-in-up" data-sticky="true" style="animation-delay: 0.1s;">
        <div class="relative h-[500px] md:h-[550px] lg:h-[600px] overflow-hidden">
          <img src="/images/Rectangle 18.png" 
               alt="Textile Industry" 
               class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
          <div class="industry-overlay absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-transparent transition-all duration-500"></div>
          <div class="absolute bottom-0 left-0 right-0 p-8 text-white">
            <div class="mb-3">
              <div class="w-16 h-0.5 bg-[#00BFFF] mb-4 group-hover:w-24 transition-all duration-500"></div>
              <h2 class="text-3xl md:text-4xl font-bold tracking-tight font-display">Textile</h2>
            </div>
            <p class="industry-description text-gray-300 text-sm md:text-base max-w-md opacity-0 transform translate-y-4">
              Inventory systems, supply chain solutions, and B2B e-commerce platforms.
            </p>
          </div>
        </div>
      </div>

      <!-- Industry 3: Fitness & Training -->
      <div class="industry-card group relative overflow-hidden bg-black fade-in-up" data-sticky="true" style="animation-delay: 0.2s;">
        <div class="relative h-[500px] md:h-[550px] lg:h-[600px] overflow-hidden">
          <img src="https://images.unsplash.com/photo-1534438327276-14e5300c3a48?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" 
               alt="Fitness Industry" 
               class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
          <div class="industry-overlay absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-transparent transition-all duration-500"></div>
          <div class="absolute bottom-0 left-0 right-0 p-8 text-white">
            <div class="mb-3">
              <div class="w-16 h-0.5 bg-[#00BFFF] mb-4 group-hover:w-24 transition-all duration-500"></div>
              <h2 class="text-3xl md:text-4xl font-bold tracking-tight font-display">Fitness & Training</h2>
            </div>
            <p class="industry-description text-gray-300 text-sm md:text-base max-w-md opacity-0 transform translate-y-4">
              Workout apps, membership portals, and virtual training platforms.
            </p>
          </div>
        </div>
      </div>

      <!-- Industry 4: Retail -->
      <div class="industry-card group relative overflow-hidden bg-black fade-in-up" data-sticky="true" style="animation-delay: 0.3s;">
        <div class="relative h-[500px] md:h-[550px] lg:h-[600px] overflow-hidden">
          <img src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" 
               alt="Retail Industry" 
               class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
          <div class="industry-overlay absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-transparent transition-all duration-500"></div>
          <div class="absolute bottom-0 left-0 right-0 p-8 text-white">
            <div class="mb-3">
              <div class="w-16 h-0.5 bg-[#00BFFF] mb-4 group-hover:w-24 transition-all duration-500"></div>
              <h2 class="text-3xl md:text-4xl font-bold tracking-tight font-display">Retail</h2>
            </div>
            <p class="industry-description text-gray-300 text-sm md:text-base max-w-md opacity-0 transform translate-y-4">
              E-commerce stores, POS integrations, and omnichannel solutions.
            </p>
          </div>
        </div>
      </div>

      <!-- Industry 5: Healthcare -->
      <div class="industry-card group relative overflow-hidden bg-black fade-in-up" data-sticky="true" style="animation-delay: 0.4s;">
        <div class="relative h-[500px] md:h-[550px] lg:h-[600px] overflow-hidden">
          <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" 
               alt="Healthcare Industry" 
               class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
          <div class="industry-overlay absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-transparent transition-all duration-500"></div>
          <div class="absolute bottom-0 left-0 right-0 p-8 text-white">
            <div class="mb-3">
              <div class="w-16 h-0.5 bg-[#00BFFF] mb-4 group-hover:w-24 transition-all duration-500"></div>
              <h2 class="text-3xl md:text-4xl font-bold tracking-tight font-display">Healthcare</h2>
            </div>
            <p class="industry-description text-gray-300 text-sm md:text-base max-w-md opacity-0 transform translate-y-4">
              Patient portals, appointment systems, and telemedicine platforms.
            </p>
          </div>
        </div>
      </div>

      <!-- Industry 6: Recruitment -->
      <div class="industry-card group relative overflow-hidden bg-black fade-in-up" data-sticky="true" style="animation-delay: 0.5s;">
        <div class="relative h-[500px] md:h-[550px] lg:h-[600px] overflow-hidden">
          <img src="/images/Rectangle 14.png" 
               alt="Recruitment Industry" 
               class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
          <div class="industry-overlay absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-transparent transition-all duration-500"></div>
          <div class="absolute bottom-0 left-0 right-0 p-8 text-white">
            <div class="mb-3">
              <div class="w-16 h-0.5 bg-[#00BFFF] mb-4 group-hover:w-24 transition-all duration-500"></div>
              <h2 class="text-3xl md:text-4xl font-bold tracking-tight font-display">Recruitment</h2>
            </div>
            <p class="industry-description text-gray-300 text-sm md:text-base max-w-md opacity-0 transform translate-y-4">
              Job portals, applicant tracking systems, and HR management tools.
            </p>
          </div>
        </div>
      </div>

      <!-- Industry 7: Gaming -->
      <div class="industry-card group relative overflow-hidden bg-black fade-in-up" data-sticky="true" style="animation-delay: 0.6s;">
        <div class="relative h-[500px] md:h-[550px] lg:h-[600px] overflow-hidden">
          <img src="https://images.unsplash.com/photo-1542751371-adc38448a05e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" 
               alt="Gaming Industry" 
               class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
          <div class="industry-overlay absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-transparent transition-all duration-500"></div>
          <div class="absolute bottom-0 left-0 right-0 p-8 text-white">
            <div class="mb-3">
              <div class="w-16 h-0.5 bg-[#00BFFF] mb-4 group-hover:w-24 transition-all duration-500"></div>
              <h2 class="text-3xl md:text-4xl font-bold tracking-tight font-display">Gaming</h2>
            </div>
            <p class="industry-description text-gray-300 text-sm md:text-base max-w-md opacity-0 transform translate-y-4">
              Game backends, leaderboards, and community platforms.
            </p>
          </div>
        </div>
      </div>

      <!-- Industry 8: Stock Market -->
      <div class="industry-card group relative overflow-hidden bg-black fade-in-up" data-sticky="true" style="animation-delay: 0.7s;">
        <div class="relative h-[500px] md:h-[550px] lg:h-[600px] overflow-hidden">
          <img src="/images/Rectangle 12.png" 
               alt="Stock Market Industry" 
               class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
          <div class="industry-overlay absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-transparent transition-all duration-500"></div>
          <div class="absolute bottom-0 left-0 right-0 p-8 text-white">
            <div class="mb-3">
              <div class="w-16 h-0.5 bg-[#00BFFF] mb-4 group-hover:w-24 transition-all duration-500"></div>
              <h2 class="text-3xl md:text-4xl font-bold tracking-tight font-display">Stock Market</h2>
            </div>
            <p class="industry-description text-gray-300 text-sm md:text-base max-w-md opacity-0 transform translate-y-4">
              Real-time dashboards, portfolio trackers, and trading platforms.
            </p>
          </div>
        </div>
      </div>

    </div>
    
  </div>
</section>

<script>
  (function() {
    const cards = document.querySelectorAll('.industry-card');
    const grid = document.getElementById('industriesGrid');
    const progressBtn = document.getElementById('scrollProgress');
    let activeStickyIndex = -1;
    
    function handleStickyScroll() {
      const viewportHeight = window.innerHeight;
      const scrollY = window.scrollY;
      
      cards.forEach((card, index) => {
        const rect = card.getBoundingClientRect();
        const cardTop = rect.top + scrollY;
        const cardBottom = cardTop + rect.height;
        
        const isInViewport = rect.top < viewportHeight - 100 && rect.bottom > 100;
        
        if (isInViewport && activeStickyIndex !== index) {
          cards.forEach(c => {
            c.classList.remove('sticky-active');
            c.style.position = '';
            c.style.top = '';
            c.style.zIndex = '';
          });
          
          card.classList.add('sticky-active');
          activeStickyIndex = index;
        }
      });
    }
    
    function handleProgressButton() {
      if (window.scrollY > 500) {
        progressBtn.classList.add('visible');
      } else {
        progressBtn.classList.remove('visible');
      }
    }
    
    if (progressBtn) {
      progressBtn.addEventListener('click', () => {
        window.scrollTo({
          top: 0,
          behavior: 'smooth'
        });
      });
    }
    
    let ticking = false;
    function onScroll() {
      if (!ticking) {
        requestAnimationFrame(() => {
          handleStickyScroll();
          handleProgressButton();
          ticking = false;
        });
        ticking = true;
      }
    }
    
    window.addEventListener('scroll', onScroll);
    window.addEventListener('resize', handleStickyScroll);
    
    setTimeout(() => {
      handleStickyScroll();
      handleProgressButton();
    }, 100);
  })();
  
  const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
  };
  
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.style.opacity = '1';
        entry.target.style.transform = 'translateY(0)';
        observer.unobserve(entry.target);
      }
    });
  }, observerOptions);
  
  document.querySelectorAll('.industry-card').forEach((card, index) => {
    card.style.opacity = '0';
    card.style.transform = 'translateY(30px)';
    card.style.transition = 'opacity 0.6s ease-out, transform 0.6s ease-out';
    card.style.transitionDelay = `${index * 0.05}s`;
    observer.observe(card);
  });
</script>

<style>
  .industry-card.sticky-active {
    position: sticky;
    top: 100px;
    z-index: 20;
    box-shadow: 0 20px 40px rgba(0, 191, 255, 0.08);
  }
  
  .industry-card {
    transition: all 0.4s cubic-bezier(0.2, 0.9, 0.4, 1.1);
  }
  
  .scroll-progress {
    transition: opacity 0.3s ease, transform 0.3s ease, background 0.3s ease;
  }
  
  .scroll-progress svg {
    transition: transform 0.3s ease;
  }
  
  .scroll-progress:hover svg {
    transform: translateY(-3px);
  }
  
  @media (max-width: 768px) {
    .industry-card.sticky-active {
      top: 80px;
    }
    
    .scroll-progress {
      bottom: 20px;
      right: 20px;
      width: 45px;
      height: 45px;
    }
    
    .scroll-progress svg {
      width: 18px;
      height: 18px;
    }
  }
</style>

</body>
</html>