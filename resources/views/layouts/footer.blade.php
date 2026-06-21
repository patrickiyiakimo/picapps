<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <title>PicApps · Footer</title>
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

    a, button, div, img, input {
      border-radius: 0 !important;
    }

    .footer-link {
      transition: all 0.2s ease;
      position: relative;
    }

    .footer-link::after {
      content: '';
      position: absolute;
      bottom: -2px;
      left: 0;
      width: 0;
      height: 1px;
      background: #00BFFF;
      transition: width 0.3s ease;
    }

    .footer-link:hover::after {
      width: 100%;
    }

    .footer-link:hover {
      color: #ffffff;
    }

    .social-icon {
      transition: all 0.3s ease;
    }

    .social-icon:hover {
      color: #00BFFF;
      transform: translateY(-3px);
    }

    .newsletter-input {
      transition: all 0.3s ease;
    }

    .newsletter-input:focus {
      border-color: #00BFFF;
      box-shadow: 0 0 0 3px rgba(0, 191, 255, 0.1);
    }

    .newsletter-input:hover {
      border-color: #87CEEB;
    }

    .logo-text {
      background: linear-gradient(135deg, #00BFFF 0%, #87CEEB 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    .logo-dot {
      color: #00BFFF;
      -webkit-text-fill-color: #00BFFF;
    }

    .footer-divider {
      background: linear-gradient(to right, transparent, rgba(0, 191, 255, 0.2), transparent);
    }
  </style>
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&display=swap" rel="stylesheet">
</head>
<body>

<footer class="bg-[#0a0a0a] pt-16 pb-8 border-t border-[#1a2a3a]">
  <div class="max-w-7xl mx-auto px-5 lg:px-8">
    
    <!-- Main Footer Content -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 mb-12">
      
      <!-- Column 1: Brand -->
      <div>
        <div class="mb-4">
          <a href="/" class="text-2xl font-bold font-display tracking-tight">
            <span class="logo-text">Pic</span>
            <span class="text-white">Apps</span>
            <span class="logo-dot text-[#00BFFF]">.</span>
          </a>
        </div>
        <p class="text-[#6a7a8a] text-sm leading-relaxed mb-4">
          Building digital experiences that drive real results. Websites, mobile apps, and custom solutions tailored to your business.
        </p>
        <!-- Social Links -->
        <div class="flex space-x-3">
          <a href="#" class="social-icon text-[#6a7a8a] hover:text-[#00BFFF] transition-all duration-300">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
              <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/>
            </svg>
          </a>
          <a href="#" class="social-icon text-[#6a7a8a] hover:text-[#00BFFF] transition-all duration-300">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
              <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 0021.303-12.04c0-.212-.005-.425-.015-.636A7.966 7.966 0 0024 4.59z"/>
            </svg>
          </a>
          <a href="#" class="social-icon text-[#6a7a8a] hover:text-[#00BFFF] transition-all duration-300">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073z"/>
            </svg>
          </a>
          <a href="#" class="social-icon text-[#6a7a8a] hover:text-[#00BFFF] transition-all duration-300">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
              <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451c.979 0 1.771-.773 1.771-1.729V1.729C24 .774 23.204 0 22.225 0z"/>
            </svg>
          </a>
        </div>
      </div>
      
      <!-- Column 2: Services -->
      <div>
        <h3 class="text-white font-semibold text-sm mb-4 uppercase tracking-wider">Services</h3>
        <ul class="space-y-2.5">
          <li><a href="#" class="footer-link text-[#6a7a8a] text-sm">Web Development</a></li>
          <li><a href="#" class="footer-link text-[#6a7a8a] text-sm">Mobile App Development</a></li>
          <li><a href="#" class="footer-link text-[#6a7a8a] text-sm">E-commerce Solutions</a></li>
          <li><a href="#" class="footer-link text-[#6a7a8a] text-sm">UI/UX Design</a></li>
          <li><a href="#" class="footer-link text-[#6a7a8a] text-sm">SEO Optimization</a></li>
        </ul>
      </div>
      
      <!-- Column 3: Company -->
      <div>
        <h3 class="text-white font-semibold text-sm mb-4 uppercase tracking-wider">Company</h3>
        <ul class="space-y-2.5">
          <li><a href="#" class="footer-link text-[#6a7a8a] text-sm">About Us</a></li>
          <li><a href="#" class="footer-link text-[#6a7a8a] text-sm">Portfolio</a></li>
          <li><a href="#" class="footer-link text-[#6a7a8a] text-sm">Case Studies</a></li>
          <li><a href="#" class="footer-link text-[#6a7a8a] text-sm">Blog</a></li>
          <li><a href="#" class="footer-link text-[#6a7a8a] text-sm">Careers</a></li>
        </ul>
      </div>
      
      <!-- Column 4: Contact -->
      <div>
        <h3 class="text-white font-semibold text-sm mb-4 uppercase tracking-wider">Contact</h3>
        <ul class="space-y-3 mb-6">
          <li class="flex items-start gap-3 text-[#6a7a8a] text-sm">
            <svg class="w-4 h-4 text-[#00BFFF] mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
            </svg>
            <a href="mailto:hello@picapps.com" class="hover:text-white transition-colors">hello@picapps.com</a>
          </li>
          <li class="flex items-start gap-3 text-[#6a7a8a] text-sm">
            <svg class="w-4 h-4 text-[#00BFFF] mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
            </svg>
            <span>San Francisco, CA</span>
          </li>
          <li class="flex items-start gap-3 text-[#6a7a8a] text-sm">
            <svg class="w-4 h-4 text-[#00BFFF] mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
            </svg>
            <span>+1 (555) 123-4567</span>
          </li>
        </ul>
        
        <!-- Newsletter -->
        <div class="mt-6">
          <h4 class="text-white font-semibold text-sm mb-3 uppercase tracking-wider">Subscribe</h4>
          <form action="#" method="POST" class="flex flex-col sm:flex-row gap-2">
            <input type="email" placeholder="Your email" 
                   class="newsletter-input flex-1 px-3 py-2 bg-[#1a1a1a] border border-[#2a2a2a] text-white text-sm focus:outline-none focus:border-[#00BFFF] transition-all duration-300">
            <button type="submit" class="px-6 py-2 text-sm font-semibold uppercase tracking-wide text-white bg-[#00BFFF] border-2 border-[#00BFFF] transition-all duration-300 hover:bg-[#0099CC] hover:border-[#0099CC] hover:shadow-lg hover:shadow-[#00BFFF]/25">
              Send
            </button>
          </form>
          <p class="text-[#4a5a6a] text-xs mt-2">No spam. Unsubscribe anytime.</p>
        </div>
      </div>
    </div>
    
    <!-- Divider -->
    <div class="h-px footer-divider mb-8"></div>
    
    <!-- Bottom Bar -->
    <div class="flex flex-col md:flex-row justify-between items-center gap-4">
      <p class="text-[#4a5a6a] text-sm">
        &copy; 2026 <span class="text-[#00BFFF]">PicApps</span>. All rights reserved.
      </p>
      <div class="flex flex-wrap justify-center gap-6">
        <a href="#" class="footer-link text-[#4a5a6a] text-xs uppercase tracking-wider">Privacy Policy</a>
        <a href="#" class="footer-link text-[#4a5a6a] text-xs uppercase tracking-wider">Terms of Service</a>
        <a href="#" class="footer-link text-[#4a5a6a] text-xs uppercase tracking-wider">Cookie Policy</a>
      </div>
    </div>
    
  </div>
</footer>

</body>
</html>