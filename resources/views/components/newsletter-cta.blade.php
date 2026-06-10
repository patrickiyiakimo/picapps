<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <title>ALTA · Become an Insider</title>
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

    .font-display {
      font-family: 'Bricolage Grotesque', 'Space Grotesk', system-ui, sans-serif;
    }

    @keyframes floatSlow {
      0%, 100% { transform: translateY(0px) translateX(0px); }
      50% { transform: translateY(-20px) translateX(10px); }
    }

    @keyframes floatSlowReverse {
      0%, 100% { transform: translateY(0px) translateX(0px); }
      50% { transform: translateY(15px) translateX(-15px); }
    }

    @keyframes pulseSlow {
      0%, 100% { opacity: 0.3; transform: scale(1); }
      50% { opacity: 0.5; transform: scale(1.05); }
    }

    .animate-float {
      animation: floatSlow 8s ease-in-out infinite;
    }

    .animate-float-reverse {
      animation: floatSlowReverse 10s ease-in-out infinite;
    }

    .animate-pulse-slow {
      animation: pulseSlow 6s ease-in-out infinite;
    }

    input:focus {
      outline: none;
      border-color: #61629F;
    }

    a, button, div, input {
      border-radius: 0 !important;
    }
  </style>
  <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&family=Space+Grotesk:wght@300..700&family=Inter:opsz,wght@14..32,100..900&display=swap" rel="stylesheet">
</head>
<body>

<section class="relative min-h-screen flex items-center justify-center bg-black overflow-hidden py-20 px-5">
  

  <!-- Background with "SIGN UP" text watermark -->
  <div class="absolute inset-0 z-0 flex items-center justify-center overflow-hidden">
    <div class="text-center opacity-5 pointer-events-none">
      <div class="text-[15vw] md:text-[12vw] lg:text-[10vw] font-black text-white tracking-wider font-display whitespace-nowrap animate-float">
        SIGN UP
      </div>
      <div class="text-[15vw] md:text-[12vw] lg:text-[10vw] font-black text-white tracking-wider font-display whitespace-nowrap animate-float-reverse mt-4">
        SIGN UP
      </div>
      <div class="text-[15vw] md:text-[12vw] lg:text-[10vw] font-black text-white tracking-wider font-display whitespace-nowrap animate-float mt-4">
        SIGN UP
      </div>
    </div>
  </div>
  
  <!-- Subtle gradient overlay -->
  <div class="absolute inset-0 z-0 bg-gradient-to-br from-black/80 via-black/60 to-black/80"></div>
  
  <!-- Animated particles -->
  <div class="absolute top-1/4 left-1/4 w-1 h-1 bg-[#61629F]/40 rounded-full animate-float"></div>
  <div class="absolute top-1/2 right-1/3 w-1.5 h-1.5 bg-[#7B7CB3]/30 rounded-full animate-float-reverse"></div>
  <div class="absolute bottom-1/3 left-1/3 w-1 h-1 bg-white/20 rounded-full animate-pulse-slow"></div>
  <div class="absolute top-2/3 right-1/4 w-1 h-1 bg-[#61629F]/30 rounded-full animate-float"></div>
  
  <!-- Main Content -->
  <div class="relative z-10 max-w-4xl mx-auto w-full">
    
    <!-- Header -->
    <div class="text-center mb-10">
      <div class="inline-flex items-center gap-2 border border-[#61629F]/30 bg-[#61629F]/5 px-5 py-2 mb-6">
        <span class="w-2 h-2 bg-[#61629F]"></span>
        <span class="text-xs font-semibold uppercase tracking-wider text-[#61629F]">Join the Community</span>
      </div>
      
      <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-5 font-display tracking-tight">
        Become a <span class="text-gray-400">Visuable Insider</span>
      </h2>
      
      <div class="w-16 h-px bg-[#61629F] mx-auto mb-6"></div>
      
      <p class="text-gray-300 max-w-2xl mx-auto text-base md:text-lg leading-relaxed">
        Receive our weekly newsletter packed with expert insights from our brand agency, featuring in-depth articles on branding, web design, copywriting and SEO, designed to help you build a stronger, more strategic online presence.
      </p>
    </div>
    
    <!-- Signup Form -->
    <div class="bg-white/5 backdrop-blur-sm border border-white/10 p-8 md:p-10">
      <form class="space-y-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <!-- First Name -->
          <div>
            <label class="block text-gray-300 text-xs font-semibold uppercase tracking-wider mb-2">First Name</label>
            <input type="text" placeholder="John" 
                   class="w-full bg-black/50 border border-gray-700 px-4 py-3 text-white placeholder-gray-500 focus:border-[#61629F] transition-colors">
          </div>
          
          <!-- Last Name -->
          <div>
            <label class="block text-gray-300 text-xs font-semibold uppercase tracking-wider mb-2">Last Name</label>
            <input type="text" placeholder="Doe" 
                   class="w-full bg-black/50 border border-gray-700 px-4 py-3 text-white placeholder-gray-500 focus:border-[#61629F] transition-colors">
          </div>
        </div>
        
        <!-- Email Address -->
        <div>
          <label class="block text-gray-300 text-xs font-semibold uppercase tracking-wider mb-2">Email Address</label>
          <input type="email" placeholder="hello@visuable.com" 
                 class="w-full bg-black/50 border border-gray-700 px-4 py-3 text-white placeholder-gray-500 focus:border-[#61629F] transition-colors">
        </div>
        
        <!-- Sign Up Button -->
        <button type="submit" 
                class="w-full bg-white text-black py-4 font-semibold uppercase tracking-wider text-sm hover:border-[#61629F] transition-all duration-300 group">
          <span class="inline-flex items-center gap-2">
            Sign Up
            <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
            </svg>
          </span>
        </button>
        
        <!-- Privacy Notice -->
        <p class="text-gray-500 text-xs text-center leading-relaxed pt-2">
          We respect your privacy—learn how we collect, use, and protect your data in our 
          <a href="#" class="text-white hover:text-[#7B7CB3] transition-colors">Privacy Policy</a> and 
          <a href="#" class="text-white hover:text-[#7B7CB3] transition-colors">Terms of Use</a>.
        </p>
      </form>
    </div>
    
  </div>
</section>

<script>
  const form = document.querySelector('form');
  if (form) {
    form.addEventListener('submit', (e) => {
      e.preventDefault();
      alert('Thank you for subscribing! You\'ll receive our weekly newsletter soon.');
      form.reset();
    });
  }
</script>

</body>
</html>