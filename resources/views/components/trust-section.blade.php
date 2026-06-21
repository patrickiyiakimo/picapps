<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <title>PicApps · Trust & Expertise</title>
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

    hr {
      border: none;
      height: 2px;
      background: #eef2f6;
      margin: 2rem auto;
      max-width: 200px;
    }

    .btn-discuss {
      transition: all 0.3s ease;
      background: #00BFFF;
      color: #ffffff;
      border: 2px solid #00BFFF;
    }

    .btn-discuss:hover {
      background: #0099CC;
      border-color: #0099CC;
      transform: translateY(-2px);
      box-shadow: 0 8px 25px rgba(0, 191, 255, 0.3);
    }

    .btn-discuss:hover svg {
      transform: translateX(4px);
    }

    .btn-outline {
      background: transparent;
      color: #1a2a4a;
      border: 2px solid #1a2a4a;
      transition: all 0.3s ease;
    }

    .btn-outline:hover {
      background: #1a2a4a;
      color: #ffffff;
      transform: translateY(-2px);
      box-shadow: 0 8px 25px rgba(26, 42, 74, 0.2);
    }

    .counter-number {
      display: inline-block;
      min-width: 60px;
      font-variant-numeric: tabular-nums;
    }

    /* Modern stat card styling */
    .stat-item {
      display: flex;
      align-items: baseline;
      gap: 0.5rem;
      padding: 0.5rem 1rem;
      border-right: 1px solid #eef2f6;
    }

    .stat-item:last-child {
      border-right: none;
    }

    .stat-number {
      font-size: 2.5rem;
      font-weight: 700;
      color: #1a2a4a;
      line-height: 1;
      letter-spacing: -0.02em;
    }

    .stat-label {
      font-size: 0.75rem;
      font-weight: 500;
      color: #6a7a8a;
      text-transform: uppercase;
      letter-spacing: 0.06em;
      white-space: nowrap;
    }

    .stat-label .highlight {
      color: #00BFFF;
    }

    /* Responsive adjustments */
    @media (max-width: 1024px) {
      .stat-number {
        font-size: 2rem;
      }
      .stat-label {
        font-size: 0.65rem;
      }
      .stat-item {
        padding: 0.5rem 0.75rem;
        gap: 0.375rem;
      }
    }

    @media (max-width: 768px) {
      .stat-number {
        font-size: 1.5rem;
      }
      .stat-label {
        font-size: 0.55rem;
        letter-spacing: 0.04em;
      }
      .stat-item {
        padding: 0.375rem 0.5rem;
        gap: 0.25rem;
        border-right: none;
        border-bottom: 1px solid #eef2f6;
        width: 100%;
        justify-content: center;
      }
      .stat-item:last-child {
        border-bottom: none;
      }
      .stats-container {
        flex-direction: column;
        gap: 0.25rem;
      }
    }

    @media (max-width: 480px) {
      .stat-number {
        font-size: 1.25rem;
        min-width: 40px;
      }
      .stat-label {
        font-size: 0.5rem;
      }
    }
  </style>
  <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&display=swap" rel="stylesheet">
</head>
<body class="bg-white">

<section class="bg-white py-16 px-5">
  <div class="max-w-6xl mx-auto">
    
    <!-- Stats Grid - All on one line with flex wrap -->
    <div class="stats-container flex flex-wrap justify-center items-center gap-x-6 gap-y-2 mb-10">
      
      <!-- Item 1 -->
      <div class="stat-item">
        <span class="stat-number counter-number" id="counter1" data-target="10">0</span>
        <span class="stat-label">Years <span class="highlight">in</span> Market</span>
      </div>
      
      <!-- Item 2 -->
      <div class="stat-item">
        <span class="stat-number counter-number" id="counter2" data-target="10">0</span>
        <span class="stat-label">Brand &amp; <span class="highlight">Web</span> Experts</span>
      </div>
      
      <!-- Item 3 -->
      <div class="stat-item">
        <span class="stat-number counter-number" id="counter3" data-target="100">0</span>
        <span class="stat-label">5-Star <span class="highlight">Reviews</span></span>
      </div>
      
      <!-- Item 4 -->
      <div class="stat-item">
        <span class="stat-number counter-number" id="counter4" data-target="500">0</span>
        <span class="stat-label">Projects <span class="highlight">Delivered</span></span>
      </div>
      
      <!-- Item 5 -->
      <div class="stat-item">
        <span class="stat-number counter-number" id="counter5" data-target="47">0</span>
        <span class="stat-label">Happy <span class="highlight">Clients</span></span>
      </div>
      
    </div>

    <!-- Horizontal Rule - Sky Blue accent -->
    <hr>

    <!-- Content Section -->
    <div class="text-center max-w-3xl mx-auto">
      <p class="text-[#4a5a6a] text-base md:text-lg leading-relaxed mb-8">
        A trusted digital agency working with founders, leaders, and growing companies to build brand-led, SEO-ready, high-converting websites.
      </p>
      
      <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
        <a href="/contact" class="btn-discuss inline-flex items-center gap-2 px-8 py-3.5 text-sm font-semibold uppercase tracking-wide transition-all duration-300">
          Start Your Project
          <svg class="w-4 h-4 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
          </svg>
        </a>
        <a href="/portfolio" class="btn-outline inline-flex items-center gap-2 px-8 py-3.5 text-sm font-semibold uppercase tracking-wide transition-all duration-300">
          View Our Work
        </a>
      </div>
    </div>

  </div>
</section>

<script>
  (function() {
    // Counter animation function - FASTER (800ms duration)
    function animateCounter(element, start, end, duration, hasPlusSign) {
      let startTimestamp = null;
      const step = (timestamp) => {
        if (!startTimestamp) startTimestamp = timestamp;
        const progress = Math.min((timestamp - startTimestamp) / duration, 1);
        // Ease out cubic for faster feel
        const eased = 1 - Math.pow(1 - progress, 3);
        const currentValue = Math.floor(eased * (end - start) + start);
        
        if (hasPlusSign) {
          element.innerText = currentValue + '+';
        } else {
          element.innerText = currentValue;
        }
        
        if (progress < 1) {
          window.requestAnimationFrame(step);
        } else {
          if (hasPlusSign) {
            element.innerText = end + '+';
          } else {
            element.innerText = end;
          }
        }
      };
      window.requestAnimationFrame(step);
    }

    // Get all counter elements
    const counters = [
      document.getElementById('counter1'),
      document.getElementById('counter2'),
      document.getElementById('counter3'),
      document.getElementById('counter4'),
      document.getElementById('counter5')
    ];
    
    const targets = counters.map(el => parseInt(el.getAttribute('data-target')));
    
    // Use Intersection Observer to trigger counters
    const observerOptions = {
      threshold: 0.2,
      rootMargin: '0px'
    };
    
    let hasAnimated = false;
    
    const observerCallback = (entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting && !hasAnimated) {
          hasAnimated = true;
          // Start counters with 800ms duration (FASTER)
          counters.forEach((counter, index) => {
            const hasPlus = true; // All have plus sign
            animateCounter(counter, 0, targets[index], 800, hasPlus);
          });
          observer.disconnect();
        }
      });
    };
    
    const observer = new IntersectionObserver(observerCallback, observerOptions);
    observer.observe(document.querySelector('.bg-white'));
    
    // Fallback: if already visible
    setTimeout(() => {
      const rect = document.querySelector('.bg-white').getBoundingClientRect();
      if (rect.top < window.innerHeight && !hasAnimated) {
        hasAnimated = true;
        counters.forEach((counter, index) => {
          const hasPlus = true;
          animateCounter(counter, 0, targets[index], 800, hasPlus);
        });
      }
    }, 300);
  })();
</script>

</body>
</html>