<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <title>ALTA · Our Services</title>
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
    }

    .service-card:hover .service-overlay {
      opacity: 0.95;
    }

    .service-overlay {
      transition: opacity 0.4s ease;
    }

    .cross-line {
      position: relative;
    }

    .cross-line hr {
      border: none;
      height: 2px;
      background: #000000;
    }

    .vertical-line-cross {
      width: 2px;
      background: #000000;
    }

    /* Cross intersection effect */
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
      background: #000000;
      transform: translateY(-50%);
      z-index: 1;
    }

    .cross-container::after {
      content: '';
      position: absolute;
      top: 0;
      left: 50%;
      bottom: 0;
      width: 2px;
      background: #000000;
      transform: translateX(-50%);
      z-index: 1;
    }

    .btn-uppercase {
      text-transform: uppercase;
      letter-spacing: 0.05em;
    }

    hr {
      border: none;
      height: 2px;
      background: #000000;
    }

    .vertical-line {
      width: 2px;
      background: #000000;
    }
  </style>
  <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&display=swap" rel="stylesheet">
</head>
<body>

<section class="bg-white py-16 px-5">
  <div class="max-w-7xl mx-auto">
    
    <!-- Top Horizontal Line -->
    <hr class="mb-8">
    
    <!-- Header Section with Crossing Lines -->
    <div class="relative cross-container mb-12">
      <!-- The crossing happens automatically via pseudo-elements -->
      
      <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6 relative z-10 bg-white">
        
        <!-- Left side with vertical line and big text -->
        <div class="flex gap-4">
          <!-- Vertical Line -->
          <div class="vertical-line"></div>
          
          <!-- Big "Our Services" Text -->
          <h1 class="text-8xl sm:text-9xl md:text-[10rem] lg:text-[11rem] xl:text-[13rem] font-bold text-black leading-none tracking-tight">
            Our<br>Services
          </h1>
        </div>
        
        <!-- Right side: CTA Button -->
        <div class="lg:text-right">
          <a href="/contact" class="btn-uppercase inline-flex items-center gap-3 bg-black text-white px-8 py-4 font-semibold text-sm hover:bg-gray-900 transition-all duration-300 group border border-black">
            <span>START YOUR PROJECT</span>
            <svg class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
            </svg>
          </a>
        </div>
        
      </div>
    </div>
    
    <!-- Bottom Horizontal Line under the header -->
    <hr class="mb-16">
    
    <!-- Section Subtitle -->
    <div class="text-center mb-16">
      <p class="text-gray-600 max-w-2xl mx-auto text-base uppercase tracking-wide text-sm">
        END-TO-END DIGITAL SOLUTIONS TAILORED TO YOUR BUSINESS NEEDS
      </p>
    </div>

    <!-- Services Grid - Image Cards Style -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      
      <!-- Service 1: Website Development -->
      <div class="service-card group relative bg-black overflow-hidden cursor-pointer">
        <div class="relative h-96 w-full">
          <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
               alt="Website Development" 
               class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
          <div class="service-overlay absolute inset-0 bg-black opacity-80 transition-opacity duration-400"></div>
          
          <!-- Content overlay -->
          <div class="absolute inset-0 flex flex-col justify-end p-6 text-white">
            <div class="w-12 h-12 bg-white mb-4 flex items-center justify-center">
              <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
              </svg>
            </div>
            <h3 class="text-2xl font-bold mb-2 uppercase tracking-wide">Website Development</h3>
            <p class="text-gray-300 text-sm leading-relaxed mb-4">
              Custom websites built with modern technologies that are fast, responsive, and SEO-optimized.
            </p>
            <div class="border-t border-white/20 pt-3 mt-1">
              <p class="text-xs text-gray-400 uppercase tracking-wide">Technologies: Laravel · React · Vue.js</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Service 2: Mobile App Development -->
      <div class="service-card group relative bg-black overflow-hidden cursor-pointer">
        <div class="relative h-96 w-full">
          <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
               alt="Mobile App Development" 
               class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
          <div class="service-overlay absolute inset-0 bg-black opacity-80 transition-opacity duration-400"></div>
          
          <div class="absolute inset-0 flex flex-col justify-end p-6 text-white">
            <div class="w-12 h-12 bg-white mb-4 flex items-center justify-center">
              <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
              </svg>
            </div>
            <h3 class="text-2xl font-bold mb-2 uppercase tracking-wide">Mobile App Development</h3>
            <p class="text-gray-300 text-sm leading-relaxed mb-4">
              Native and cross-platform mobile applications that deliver seamless user experiences.
            </p>
            <div class="border-t border-white/20 pt-3 mt-1">
              <p class="text-xs text-gray-400 uppercase tracking-wide">iOS · Android · Flutter · React Native</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Service 3: UI/UX Design -->
      <div class="service-card group relative bg-black overflow-hidden cursor-pointer">
        <div class="relative h-96 w-full">
          <img src="https://images.unsplash.com/photo-1586717791821-3f44a563fa4c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
               alt="UI UX Design" 
               class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
          <div class="service-overlay absolute inset-0 bg-black opacity-80 transition-opacity duration-400"></div>
          
          <div class="absolute inset-0 flex flex-col justify-end p-6 text-white">
            <div class="w-12 h-12 bg-white mb-4 flex items-center justify-center">
              <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
              </svg>
            </div>
            <h3 class="text-2xl font-bold mb-2 uppercase tracking-wide">UI/UX Design</h3>
            <p class="text-gray-300 text-sm leading-relaxed mb-4">
              Beautiful, intuitive designs that delight users and drive engagement.
            </p>
            <div class="border-t border-white/20 pt-3 mt-1">
              <p class="text-xs text-gray-400 uppercase tracking-wide">Figma · Wireframing · Prototyping</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Special Offer Banner -->
    <div class="mt-16 relative overflow-hidden min-h-[400px] md:min-h-[450px]">
      <div class="absolute inset-0 z-0 bg-black"></div>
      
      <div class="relative z-10 h-full flex items-center">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-16">
          <div class="flex flex-col lg:flex-row items-center justify-between gap-8">
            <div class="flex-1 text-center lg:text-left">
              <div class="inline-flex items-center gap-2 bg-white text-black px-4 py-2 mb-4 border border-black">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                </svg>
                <span class="text-sm font-semibold uppercase tracking-wide">Special Offer</span>
              </div>
              <h3 class="text-2xl md:text-3xl lg:text-4xl font-bold text-white mb-3 uppercase">Don't have a Figma design file?</h3>
              <p class="text-gray-300 mb-6 max-w-lg leading-relaxed">
                No problem! Our expert designers can create stunning UI/UX designs from scratch, tailored to your brand and vision.
              </p>
              <a href="/contact" class="btn-uppercase inline-flex items-center gap-2 bg-white text-black px-6 py-3 font-semibold text-sm hover:bg-gray-100 transition-all duration-300 shadow-md hover:shadow-lg">
                START YOUR PROJECT
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
              </a>
            </div>
            
            <div class="flex-shrink-0">
              <div class="w-64 h-64 bg-white/5 flex items-center justify-center border border-white/20">
                <svg class="w-32 h-32 text-white/30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Process Section -->
    <div class="mt-20">
      <div class="text-center mb-12">
        <div class="inline-flex items-center gap-2 bg-black text-white px-4 py-2 mb-4 border border-black">
          <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"/>
          </svg>
          <span class="text-sm font-semibold uppercase tracking-wide">How We Work</span>
        </div>
        <h3 class="text-3xl md:text-4xl font-bold text-black mb-4 uppercase">Our <span class="text-black">Process</span></h3>
        <div class="w-20 h-0.5 bg-black mx-auto mb-6"></div>
        <p class="text-gray-500 max-w-2xl mx-auto text-sm uppercase tracking-wide">
          A STREAMLINED APPROACH TO BRING YOUR IDEAS TO LIFE
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-4 gap-0 border border-black">
        <div class="text-center group p-8 border-r border-black last:border-r-0 hover:bg-black transition-all duration-300 relative">
          <div class="hidden md:block absolute -right-3 top-1/2 transform -translate-y-1/2 z-10">
            <svg class="w-6 h-6 text-black group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
          </div>
          
          <div class="w-20 h-20 bg-gray-100 flex items-center justify-center mx-auto mb-5 group-hover:bg-white transition-all duration-300 border border-black">
            <span class="text-3xl font-bold text-black group-hover:text-black transition-colors">1</span>
          </div>
          <h4 class="text-xl font-bold text-black mb-3 group-hover:text-white transition-colors uppercase tracking-wide">Discovery</h4>
          <p class="text-gray-500 text-sm leading-relaxed group-hover:text-gray-300 transition-colors">Understanding your goals, requirements, and vision</p>
        </div>

        <div class="text-center group p-8 border-r border-black last:border-r-0 hover:bg-black transition-all duration-300 relative">
          <div class="hidden md:block absolute -right-3 top-1/2 transform -translate-y-1/2 z-10">
            <svg class="w-6 h-6 text-black group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
          </div>
          
          <div class="w-20 h-20 bg-gray-100 flex items-center justify-center mx-auto mb-5 group-hover:bg-white transition-all duration-300 border border-black">
            <span class="text-3xl font-bold text-black group-hover:text-black transition-colors">2</span>
          </div>
          <h4 class="text-xl font-bold text-black mb-3 group-hover:text-white transition-colors uppercase tracking-wide">Design</h4>
          <p class="text-gray-500 text-sm leading-relaxed group-hover:text-gray-300 transition-colors">Creating wireframes, prototypes, and stunning UI/UX designs</p>
        </div>

        <div class="text-center group p-8 border-r border-black last:border-r-0 hover:bg-black transition-all duration-300 relative">
          <div class="hidden md:block absolute -right-3 top-1/2 transform -translate-y-1/2 z-10">
            <svg class="w-6 h-6 text-black group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
          </div>
          
          <div class="w-20 h-20 bg-gray-100 flex items-center justify-center mx-auto mb-5 group-hover:bg-white transition-all duration-300 border border-black">
            <span class="text-3xl font-bold text-black group-hover:text-black transition-colors">3</span>
          </div>
          <h4 class="text-xl font-bold text-black mb-3 group-hover:text-white transition-colors uppercase tracking-wide">Development</h4>
          <p class="text-gray-500 text-sm leading-relaxed group-hover:text-gray-300 transition-colors">Building your product with clean, scalable, and efficient code</p>
        </div>

        <div class="text-center group p-8 hover:bg-black transition-all duration-300">
          <div class="w-20 h-20 bg-gray-100 flex items-center justify-center mx-auto mb-5 group-hover:bg-white transition-all duration-300 border border-black">
            <span class="text-3xl font-bold text-black group-hover:text-black transition-colors">4</span>
          </div>
          <h4 class="text-xl font-bold text-black mb-3 group-hover:text-white transition-colors uppercase tracking-wide">Launch & Support</h4>
          <p class="text-gray-500 text-sm leading-relaxed group-hover:text-gray-300 transition-colors">Deployment, testing, and ongoing maintenance with 24/7 support</p>
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
    background: #000000;
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
    background: #000000;
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
</style>

</body>
</html>