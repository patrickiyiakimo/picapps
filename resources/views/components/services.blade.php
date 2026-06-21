<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <title>PicApps · Our Services</title>
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

    .service-card {
      transition: all 0.4s cubic-bezier(0.2, 0.9, 0.4, 1.1);
    }

    .service-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 12px 40px rgba(0, 191, 255, 0.1);
    }

    .service-card:hover .service-overlay {
      opacity: 0.92;
    }

    .service-overlay {
      transition: opacity 0.4s ease;
    }

    .cross-container {
      position: relative;
    }

    .cross-container::before {
      content: '';
      position: absolute;
      top: 50%;
      left: 0;
      right: 0;
      height: 2px;
      background: #00BFFF;
      transform: translateY(-50%);
      z-index: 0;
    }

    .cross-container::after {
      content: '';
      position: absolute;
      top: 0;
      left: 50%;
      bottom: 0;
      width: 2px;
      background: #00BFFF;
      transform: translateX(-50%);
      z-index: 0;
    }

    .btn-uppercase {
      text-transform: uppercase;
      letter-spacing: 0.05em;
    }

    hr {
      border: none;
      height: 2px;
      background: #eef2f6;
    }

    .vertical-line {
      width: 2px;
      background: #00BFFF;
    }

    .accent-line {
      width: 60px;
      height: 3px;
      background: #00BFFF;
      margin: 0 auto;
    }

    .process-step:hover .step-number {
      background: #00BFFF;
      color: white;
    }

    .step-number {
      transition: all 0.3s ease;
    }

    /* Sky blue accent border on hover */
    .service-card:hover .service-border {
      border-color: #00BFFF;
    }

    .stat-number {
      font-variant-numeric: tabular-nums;
    }

    @media (max-width: 1023px) {
      .cross-container::before,
      .cross-container::after {
        display: none;
      }
    }

    .font-display {
      font-family: 'Space Grotesk', 'Inter', system-ui, sans-serif;
    }
  </style>
  <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

<section class="bg-white py-16 px-5">
  <div class="max-w-7xl mx-auto">
    
    <!-- Top Horizontal Line -->
    <hr class="mb-8">
    
    <!-- Header Section with Crossing Lines -->
    <div class="relative cross-container mb-12">
      
      <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6 relative z-10 bg-white">
        
        <!-- Left side with vertical line and big text -->
        <div class="flex gap-4">
          <!-- Vertical Line - Sky Blue -->
          <div class="vertical-line"></div>
          
          <!-- Big "Our Services" Text -->
          <h1 class="text-8xl sm:text-9xl md:text-[10rem] lg:text-[9rem] xl:text-[9rem] font-bold text-[#1a2a4a] leading-none tracking-tight font-display">
            Our<br>Services
          </h1>
        </div>
        
        <!-- Right side: CTA Button -->
        <div class="flex-shrink-0">
          <a href="/contact" class="inline-flex items-center gap-2 px-6 py-3 text-sm font-semibold uppercase tracking-wide text-white bg-[#00BFFF] border-2 border-[#00BFFF] transition-all duration-300 hover:bg-[#0099CC] hover:border-[#0099CC] hover:shadow-lg hover:shadow-[#00BFFF]/25 hover:-translate-y-0.5">
            Start Your Project
            <svg class="w-4 h-4 transition-transform duration-200 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
            </svg>
          </a>
        </div>
        
      </div>
    </div>
    
    <!-- Bottom Horizontal Line under the header -->
    <hr class="mb-12">
    
    <!-- Section Subtitle -->
    <div class="text-center mb-16">
      <div class="accent-line mb-4"></div>
      <p class="text-[#4a5a6a] max-w-2xl mx-auto text-sm uppercase tracking-wider font-medium">
        End-to-end digital solutions tailored to your business needs
      </p>
    </div>

    <!-- Services Grid - Image Cards Style -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      
      <!-- Service 1: Website Development -->
      <div class="service-card group relative bg-black overflow-hidden cursor-pointer border-2 border-transparent service-border">
        <div class="relative h-96 w-full">
          <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
               alt="Website Development" 
               class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
          <div class="service-overlay absolute inset-0 bg-black opacity-80 transition-opacity duration-400"></div>
          
          <!-- Content overlay -->
          <div class="absolute inset-0 flex flex-col justify-end p-6 text-white">
            <div class="w-12 h-12 bg-[#00BFFF] mb-4 flex items-center justify-center transition-all duration-300 group-hover:bg-[#0099CC]">
              <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
              </svg>
            </div>
            <h3 class="text-2xl font-bold mb-2 uppercase tracking-wide">Website Development</h3>
            <p class="text-gray-300 text-sm leading-relaxed mb-4">
              Custom websites built with modern technologies that are fast, responsive, and SEO-optimized.
            </p>
            <div class="border-t border-white/20 pt-3 mt-1">
              <p class="text-xs text-[#87CEEB] uppercase tracking-wide">Laravel · React · Vue.js</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Service 2: Mobile App Development -->
      <div class="service-card group relative bg-black overflow-hidden cursor-pointer border-2 border-transparent service-border">
        <div class="relative h-96 w-full">
          <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
               alt="Mobile App Development" 
               class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
          <div class="service-overlay absolute inset-0 bg-black opacity-80 transition-opacity duration-400"></div>
          
          <div class="absolute inset-0 flex flex-col justify-end p-6 text-white">
            <div class="w-12 h-12 bg-[#00BFFF] mb-4 flex items-center justify-center transition-all duration-300 group-hover:bg-[#0099CC]">
              <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
              </svg>
            </div>
            <h3 class="text-2xl font-bold mb-2 uppercase tracking-wide">Mobile App Development</h3>
            <p class="text-gray-300 text-sm leading-relaxed mb-4">
              Native and cross-platform mobile applications that deliver seamless user experiences.
            </p>
            <div class="border-t border-white/20 pt-3 mt-1">
              <p class="text-xs text-[#87CEEB] uppercase tracking-wide">iOS · Android · Flutter</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Service 3: UI/UX Design -->
      <div class="service-card group relative bg-black overflow-hidden cursor-pointer border-2 border-transparent service-border">
        <div class="relative h-96 w-full">
          <img src="https://images.unsplash.com/photo-1586717791821-3f44a563fa4c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
               alt="UI UX Design" 
               class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
          <div class="service-overlay absolute inset-0 bg-black opacity-80 transition-opacity duration-400"></div>
          
          <div class="absolute inset-0 flex flex-col justify-end p-6 text-white">
            <div class="w-12 h-12 bg-[#00BFFF] mb-4 flex items-center justify-center transition-all duration-300 group-hover:bg-[#0099CC]">
              <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
              </svg>
            </div>
            <h3 class="text-2xl font-bold mb-2 uppercase tracking-wide">UI/UX Design</h3>
            <p class="text-gray-300 text-sm leading-relaxed mb-4">
              Beautiful, intuitive designs that delight users and drive engagement.
            </p>
            <div class="border-t border-white/20 pt-3 mt-1">
              <p class="text-xs text-[#87CEEB] uppercase tracking-wide">Figma · Wireframing · Prototyping</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Special Offer Banner -->
    <div class="mt-16 relative overflow-hidden min-h-[400px] md:min-h-[450px]">
      <div class="absolute inset-0 z-0 bg-[#1a2a4a]"></div>
      <!-- Subtle sky blue gradient overlay -->
      <div class="absolute inset-0 z-1 bg-gradient-to-r from-[#00BFFF]/10 to-transparent"></div>
      
      <div class="relative z-10 h-full flex items-center">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-16">
          <div class="flex flex-col lg:flex-row items-center justify-between gap-8">
            <div class="flex-1 text-center lg:text-left">
              <div class="inline-flex items-center gap-2 bg-[#00BFFF] text-white px-4 py-2 mb-4 border border-[#00BFFF]">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                </svg>
                <span class="text-sm font-semibold uppercase tracking-wide">Special Offer</span>
              </div>
              <h3 class="text-2xl md:text-3xl lg:text-4xl font-bold text-white mb-3 uppercase font-display">Don't have a Figma design file?</h3>
              <p class="text-gray-300 mb-6 max-w-lg leading-relaxed">
                No problem! Our expert designers can create stunning UI/UX designs from scratch, tailored to your brand and vision.
              </p>
              <a href="/contact" class="inline-flex items-center gap-2 px-8 py-3.5 text-sm font-semibold uppercase tracking-wide text-[#1a2a4a] bg-white border-2 border-white transition-all duration-300 hover:bg-transparent hover:text-white hover:shadow-lg hover:shadow-white/10">
                Start Your Project
                <svg class="w-4 h-4 transition-transform duration-200 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Process Section -->
    <div class="mt-20">
      <div class="text-center mb-16">
        <div class="inline-flex items-center gap-2 bg-[#e8f4f8] border border-[#87CEEB]/30 px-5 py-2 mb-6">
          <svg class="w-4 h-4 text-[#00BFFF]" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"/>
          </svg>
          <span class="text-xs font-semibold uppercase tracking-wider text-[#1a2a4a]">How We Work</span>
        </div>
        
        <h3 class="text-4xl md:text-5xl lg:text-6xl font-bold text-[#1a2a4a] mb-4 font-display tracking-tight">
          Our <span class="text-[#00BFFF]">Process</span>
        </h3>
        
        <div class="w-16 h-1 bg-[#00BFFF] mx-auto mb-6"></div>
        
        <p class="text-[#4a5a6a] max-w-2xl mx-auto text-base">
          A streamlined approach to bring your ideas to life with precision and care.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        
        <!-- Step 1 -->
        <div class="process-step group relative bg-white border border-[#e8f4f8] hover:border-[#00BFFF] transition-all duration-300 p-8 hover:shadow-lg hover:shadow-[#00BFFF]/5">
          <div class="absolute top-6 right-6">
            <div class="step-number w-12 h-12 bg-[#e8f4f8] flex items-center justify-center transition-all duration-300 group-hover:bg-[#00BFFF]">
              <span class="text-xl font-bold text-[#1a2a4a] group-hover:text-white transition-colors">01</span>
            </div>
          </div>
          
          <div class="mt-12">
            <h4 class="text-xl font-bold text-[#1a2a4a] mb-3 uppercase tracking-wide">Discovery</h4>
            <p class="text-[#6a7a8a] text-sm leading-relaxed">
              We dive deep into understanding your goals, requirements, and vision for the project.
            </p>
          </div>
        </div>

        <!-- Step 2 -->
        <div class="process-step group relative bg-white border border-[#e8f4f8] hover:border-[#00BFFF] transition-all duration-300 p-8 hover:shadow-lg hover:shadow-[#00BFFF]/5">
          <div class="absolute top-6 right-6">
            <div class="step-number w-12 h-12 bg-[#e8f4f8] flex items-center justify-center transition-all duration-300 group-hover:bg-[#00BFFF]">
              <span class="text-xl font-bold text-[#1a2a4a] group-hover:text-white transition-colors">02</span>
            </div>
          </div>
          
          <div class="mt-12">
            <h4 class="text-xl font-bold text-[#1a2a4a] mb-3 uppercase tracking-wide">Design</h4>
            <p class="text-[#6a7a8a] text-sm leading-relaxed">
              We create wireframes, prototypes, and stunning UI/UX designs tailored to your brand.
            </p>
          </div>
        </div>

        <!-- Step 3 -->
        <div class="process-step group relative bg-white border border-[#e8f4f8] hover:border-[#00BFFF] transition-all duration-300 p-8 hover:shadow-lg hover:shadow-[#00BFFF]/5">
          <div class="absolute top-6 right-6">
            <div class="step-number w-12 h-12 bg-[#e8f4f8] flex items-center justify-center transition-all duration-300 group-hover:bg-[#00BFFF]">
              <span class="text-xl font-bold text-[#1a2a4a] group-hover:text-white transition-colors">03</span>
            </div>
          </div>
          
          <div class="mt-12">
            <h4 class="text-xl font-bold text-[#1a2a4a] mb-3 uppercase tracking-wide">Development</h4>
            <p class="text-[#6a7a8a] text-sm leading-relaxed">
              We build your product with clean, scalable, and efficient code using modern technologies.
            </p>
          </div>
        </div>

        <!-- Step 4 -->
        <div class="process-step group relative bg-white border border-[#e8f4f8] hover:border-[#00BFFF] transition-all duration-300 p-8 hover:shadow-lg hover:shadow-[#00BFFF]/5">
          <div class="absolute top-6 right-6">
            <div class="step-number w-12 h-12 bg-[#e8f4f8] flex items-center justify-center transition-all duration-300 group-hover:bg-[#00BFFF]">
              <span class="text-xl font-bold text-[#1a2a4a] group-hover:text-white transition-colors">04</span>
            </div>
          </div>
          
          <div class="mt-12">
            <h4 class="text-xl font-bold text-[#1a2a4a] mb-3 uppercase tracking-wide">Launch & Support</h4>
            <p class="text-[#6a7a8a] text-sm leading-relaxed">
              We handle deployment, testing, and provide ongoing maintenance with dedicated support.
            </p>
          </div>
        </div>

      </div>
    </div>
    
  </div>
</section>

<style>
  .service-card {
    transition: all 0.4s cubic-bezier(0.2, 0.9, 0.4, 1.1);
  }
  
  a, button, div, img, hr {
    border-radius: 0px;
  }
  
  .cross-container {
    position: relative;
  }
  
  .cross-container::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 0;
    right: 0;
    height: 2px;
    background: #00BFFF;
    transform: translateY(-50%);
    z-index: 0;
  }
  
  .cross-container::after {
    content: '';
    position: absolute;
    top: 0;
    left: 50%;
    bottom: 0;
    width: 2px;
    background: #00BFFF;
    transform: translateX(-50%);
    z-index: 0;
  }
  
  @media (max-width: 1023px) {
    .cross-container::before,
    .cross-container::after {
      display: none;
    }
  }
  
  .btn-uppercase {
    text-transform: uppercase;
    letter-spacing: 0.05em;
  }
  
  .font-display {
    font-family: 'Space Grotesk', 'Inter', system-ui, sans-serif;
  }

  /* Smooth hover for process steps */
  .process-step {
    transition: all 0.3s ease;
  }
</style>

</body>
</html>