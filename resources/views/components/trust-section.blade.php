<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <title>ALTA · Trust & Expertise</title>
  <script src="https://cdn.tailwindcss.com"></script>
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

    hr {
      border: none;
      height: 2px;
      background: #2a2a2a;
      margin: 2rem 0;
    }

    .btn-discuss {
      transition: all 0.3s ease;
    }

    .btn-discuss:hover {
      border-color: #ffffff;
      background: rgba(255,255,255,0.05);
      color: #ffffff;
      transform: translateY(-2px);
    }

    .btn-discuss:hover svg {
      transform: translateX(4px);
    }

    .counter-number {
      display: inline-block;
      min-width: 100px;
    }
  </style>
  <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&display=swap" rel="stylesheet">
</head>
<body class="bg-black">

<section class="bg-black py-12 px-5">
  <div class="max-w-6xl mx-auto">
    
    <!-- Stats Grid - numbers and text on same line with counters -->
    <div class="flex flex-wrap justify-center items-center gap-x-10 gap-y-6 mb-10">
      
      <!-- Item 1 -->
      <div class="flex items-baseline gap-3">
        <span class="counter-number text-7xl md:text-8xl lg:text-7xl font-extrabold text-white leading-none" id="counter1" data-target="10">0</span>
        <span class="text-sm md:text-base text-gray-400 font-medium uppercase tracking-wide">Years in the Market</span>
      </div>
      
      <!-- Item 2 -->
      <div class="flex items-baseline gap-3">
        <span class="counter-number text-7xl md:text-8xl lg:text-7xl font-extrabold text-white leading-none" id="counter2" data-target="10">0</span>
        <span class="text-sm md:text-base text-gray-400 font-medium uppercase tracking-wide">Brand, Web & SEO Experts</span>
      </div>
      
      <!-- Item 3 -->
      <div class="flex items-baseline gap-3">
        <span class="counter-number text-7xl md:text-8xl lg:text-7xl font-extrabold text-white leading-none" id="counter3" data-target="100">0</span>
        <span class="text-sm md:text-base text-gray-400 font-medium uppercase tracking-wide">5-Star Google Reviews</span>
      </div>
      
    </div>

    <!-- Horizontal Rule -->
    <hr>

    <!-- Content Section -->
    <div class="text-center max-w-3xl mx-auto">
      <p class="text-gray-300 text-base md:text-lg leading-relaxed mb-6">
        A trusted digital agency working with founders, leaders, and growing companies to build brand-led, SEO-ready, high-converting websites.
      </p>
      
      <x-shared.buttons.primary-button 
    href="/contact" 
    text="Let's Create Your Brand" 
    size="md"
    variant="primary"
/>
    </div>

  </div>
</section>

<script>
  (function() {
    // Counter animation function with plus sign
    function animateCounter(element, start, end, duration, hasPlusSign) {
      let startTimestamp = null;
      const step = (timestamp) => {
        if (!startTimestamp) startTimestamp = timestamp;
        const progress = Math.min((timestamp - startTimestamp) / duration, 1);
        const currentValue = Math.floor(progress * (end - start) + start);
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
    const counter1 = document.getElementById('counter1');
    const counter2 = document.getElementById('counter2');
    const counter3 = document.getElementById('counter3');
    
    const target1 = parseInt(counter1.getAttribute('data-target'));
    const target2 = parseInt(counter2.getAttribute('data-target'));
    const target3 = parseInt(counter3.getAttribute('data-target'));
    
    // Use Intersection Observer to trigger counters when section is in view
    const observerOptions = {
      threshold: 0.3,
      rootMargin: '0px'
    };
    
    let hasAnimated = false;
    
    const observerCallback = (entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting && !hasAnimated) {
          hasAnimated = true;
          // Start counters with animation duration 2000ms (2 seconds)
          animateCounter(counter1, 0, target1, 2000, true);
          animateCounter(counter2, 0, target2, 2000, true);
          animateCounter(counter3, 0, target3, 2000, true);
          observer.disconnect();
        }
      });
    };
    
    const observer = new IntersectionObserver(observerCallback, observerOptions);
    observer.observe(document.querySelector('.bg-black'));
    
    // Fallback: if IntersectionObserver fails or section already visible
    setTimeout(() => {
      const rect = document.querySelector('.bg-black').getBoundingClientRect();
      if (rect.top < window.innerHeight && !hasAnimated) {
        hasAnimated = true;
        animateCounter(counter1, 0, target1, 2000, true);
        animateCounter(counter2, 0, target2, 2000, true);
        animateCounter(counter3, 0, target3, 2000, true);
      }
    }, 500);
    
    // Discuss button handler
    const discussBtn = document.getElementById('discussBtn');
    if (discussBtn) {
      discussBtn.addEventListener('click', (e) => {
        e.preventDefault();
        alert("Let's discuss your project. Our team will reach out to you shortly.");
      });
    }
  })();
</script>

</body>
</html>