<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <title>ALTA · Start Your Project</title>
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
      font-family: 'Bricolage Grotesque', 'Space Grotesk', system-ui, sans-serif;
    }

    a, button, div, img {
      border-radius: 0 !important;
    }
  </style>
  <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&family=Space+Grotesk:wght@300..700&family=Inter:opsz,wght@14..32,100..900&display=swap" rel="stylesheet">
</head>
<body>

<section class="bg-white py-20 md:py-28">
  <div class="max-w-7xl mx-auto px-5 lg:px-8">
    <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-16">
      
      <!-- Left Side - CTA Text Content -->
      <div class="flex-1 text-center lg:text-left">
        
       
        <!-- Main Heading -->
        <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-black mb-6 font-display tracking-tight leading-tight">
          Ready to Turn Your
          <span class="text-[#61629F]">Idea Into Reality?</span>
        </h2>
        
        <p class="text-gray-500 text-base md:text-lg mb-8 max-w-lg mx-auto lg:mx-0 leading-relaxed">
          Get a free consultation and quote today. No obligation, just expert advice on your website or app project.
        </p>
        
        <!-- CTA Buttons -->
        <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
          <x-shared.buttons.primary-button 
    href="/blog" 
    text="start your project" 
    size="md"
    variant="dark"
/>
          <x-shared.buttons.primary-button 
    href="/blog" 
    text="view pricing" 
    size="md"
    variant="purple"
/>
        </div>
        
      </div>
      
      <!-- Right Side - Image -->
      <div class="flex-1 flex justify-center lg:justify-end">
        <div class="relative">
          <img src="/images/Group 21.png" alt="Consultation Illustration" class="w-full max-w-md h-auto">
        </div>
      </div>
      
    </div>
  </div>
</section>

</body>
</html>
