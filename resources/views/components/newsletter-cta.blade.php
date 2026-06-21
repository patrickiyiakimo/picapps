<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <title>PicApps · Become an Insider</title>
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

    .font-display {
      font-family: 'Space Grotesk', 'Inter', system-ui, sans-serif;
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
      border-color: #00BFFF;
    }

    input::placeholder {
      color: #8a9aaa;
    }

    a, button, div, input {
      border-radius: 0 !important;
    }

    .form-input {
      transition: all 0.3s ease;
    }

    .form-input:focus {
      border-color: #00BFFF;
      box-shadow: 0 0 0 3px rgba(0, 191, 255, 0.1);
    }

    .form-input:hover {
      border-color: #87CEEB;
    }

    .bg-watermark {
      color: rgba(0, 191, 255, 0.04);
    }
  </style>
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&display=swap" rel="stylesheet">
</head>
<body>

<section class="relative min-h-screen flex items-center justify-center bg-white overflow-hidden py-20 px-5">
  
  <!-- Background with "SIGN UP" text watermark -->
  <div class="absolute inset-0 z-0 flex items-center justify-center overflow-hidden">
    <div class="text-center pointer-events-none">
      <div class="text-[15vw] md:text-[12vw] lg:text-[10vw] font-black tracking-wider font-display whitespace-nowrap animate-float bg-watermark">
        SIGN UP
      </div>
      <div class="text-[15vw] md:text-[12vw] lg:text-[10vw] font-black tracking-wider font-display whitespace-nowrap animate-float-reverse bg-watermark mt-4">
        SIGN UP
      </div>
      <div class="text-[15vw] md:text-[12vw] lg:text-[10vw] font-black tracking-wider font-display whitespace-nowrap animate-float bg-watermark mt-4">
        SIGN UP
      </div>
    </div>
  </div>
  
  <!-- Decorative elements -->
  <div class="absolute top-1/4 left-1/4 w-1 h-1 bg-[#00BFFF]/20 rounded-full animate-float"></div>
  <div class="absolute top-1/2 right-1/3 w-1.5 h-1.5 bg-[#87CEEB]/20 rounded-full animate-float-reverse"></div>
  <div class="absolute bottom-1/3 left-1/3 w-1 h-1 bg-[#1a2a4a]/10 rounded-full animate-pulse-slow"></div>
  <div class="absolute top-2/3 right-1/4 w-1 h-1 bg-[#00BFFF]/20 rounded-full animate-float"></div>
  
  <!-- Main Content -->
  <div class="relative z-10 max-w-4xl mx-auto w-full">
    
    <!-- Header -->
    <div class="text-center mb-10">
      <div class="inline-flex items-center gap-2 border border-[#e8f4f8] bg-[#f8faff] px-5 py-2 mb-6">
        <span class="w-2 h-2 bg-[#00BFFF]"></span>
        <span class="text-xs font-semibold uppercase tracking-wider text-[#1a2a4a]">Join the Community</span>
      </div>
      
      <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-[#1a2a4a] mb-5 font-display tracking-tight">
        Become a <span class="text-[#00BFFF]">PicApps Insider</span>
      </h2>
      
      <div class="w-16 h-1 bg-[#00BFFF] mx-auto mb-6"></div>
      
      <p class="text-[#4a5a6a] max-w-2xl mx-auto text-base md:text-lg leading-relaxed">
        Receive our weekly newsletter packed with expert insights from our agency, featuring in-depth articles on branding, web design, copywriting and SEO, designed to help you build a stronger, more strategic online presence.
      </p>
    </div>
    
    <!-- Signup Form -->
    <div class="bg-[#f8faff] border border-[#e8f4f8] p-8 md:p-10">
      <form class="space-y-6" id="signupForm">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <!-- First Name -->
          <div>
            <label class="block text-[#1a2a4a] text-xs font-semibold uppercase tracking-wider mb-2">First Name</label>
            <input type="text" placeholder="John" required
                   class="form-input w-full bg-white border border-[#eef2f6] px-4 py-3 text-[#1a2a4a] placeholder-[#8a9aaa] focus:border-[#00BFFF] transition-all duration-300">
          </div>
          
          <!-- Last Name -->
          <div>
            <label class="block text-[#1a2a4a] text-xs font-semibold uppercase tracking-wider mb-2">Last Name</label>
            <input type="text" placeholder="Doe" required
                   class="form-input w-full bg-white border border-[#eef2f6] px-4 py-3 text-[#1a2a4a] placeholder-[#8a9aaa] focus:border-[#00BFFF] transition-all duration-300">
          </div>
        </div>
        
        <!-- Email Address -->
        <div>
          <label class="block text-[#1a2a4a] text-xs font-semibold uppercase tracking-wider mb-2">Email Address</label>
          <input type="email" placeholder="hello@picapps.com" required
                 class="form-input w-full bg-white border border-[#eef2f6] px-4 py-3 text-[#1a2a4a] placeholder-[#8a9aaa] focus:border-[#00BFFF] transition-all duration-300">
        </div>
        
        <!-- Sign Up Button -->
        <button type="submit" 
                class="w-full inline-flex items-center justify-center gap-2 px-8 py-3.5 text-sm font-semibold uppercase tracking-wide text-white bg-[#00BFFF] border-2 border-[#00BFFF] transition-all duration-300 hover:bg-[#0099CC] hover:border-[#0099CC] hover:shadow-lg hover:shadow-[#00BFFF]/25 hover:-translate-y-0.5">
          Sign Up
          <svg class="w-4 h-4 transition-transform duration-200 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
          </svg>
        </button>
        
        <!-- Privacy Notice -->
        <p class="text-[#6a7a8a] text-xs text-center leading-relaxed pt-2">
          We respect your privacy—learn how we collect, use, and protect your data in our 
          <a href="#" class="text-[#00BFFF] hover:text-[#0099CC] transition-colors font-medium">Privacy Policy</a> and 
          <a href="#" class="text-[#00BFFF] hover:text-[#0099CC] transition-colors font-medium">Terms of Use</a>.
        </p>
      </form>
    </div>
    
  </div>
</section>

<script>
  const form = document.getElementById('signupForm');
  if (form) {
    form.addEventListener('submit', (e) => {
      e.preventDefault();
      const firstName = form.querySelector('input[placeholder="John"]').value;
      alert(`Thank you ${firstName || 'there'}! You'll receive our weekly newsletter soon.`);
      form.reset();
    });
  }
</script>

</body>
</html>