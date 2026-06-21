<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <title>PicApps · Digital Agency</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Inter', system-ui, -apple-system, 'Segoe UI', Roboto, Helvetica, sans-serif;
      background: #fafafc;
      min-height: 200vh;
    }

    html {
      scroll-behavior: smooth;
    }

    /* No rounded corners */
    nav, nav *,
    button, a, div, ul, li, .dropdown-panel,
    .mobile-menu-panel, .mobile-dropdown-content {
      border-radius: 0 !important;
    }

    /* Navbar - Clean white with subtle shadow */
    #main-navbar {
      background: #ffffff !important;
      transition: all 0.3s ease-out;
      border-bottom: 1px solid rgba(0,0,0,0.06);
      box-shadow: 0 1px 3px rgba(0,0,0,0.04);
    }

    #main-navbar.scrolled {
      background: rgba(255, 255, 255, 0.95) !important;
      backdrop-filter: blur(10px);
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
      border-bottom-color: rgba(135, 206, 235, 0.2);
    }

    /* Nav links - dark gray */
    .nav-link, 
    .desktop-nav .group > a,
    .desktop-nav .relative.group > a,
    .lang-btn, .login-link,
    .mobile-nav-link,
    .mobile-dropdown-btn {
      color: #1a2a4a !important;
      font-weight: 500;
      transition: all 0.2s ease;
    }

    /* Hover: Sky Blue with subtle glow */
    .nav-link:hover,
    .desktop-nav .group > a:hover,
    .desktop-nav .relative.group > a:hover,
    .lang-btn:hover, .login-link:hover,
    .mobile-nav-link:hover,
    .mobile-dropdown-btn:hover {
      color: #00BFFF !important;
    }

    /* Active state - Sky Blue underline */
    .nav-link.active,
    .desktop-nav .group > a.active {
      color: #00BFFF !important;
      border-bottom: 2px solid #87CEEB;
    }

    /* Logo - Navy with sky blue accent */
    .logo-link {
      color: #1a2a4a !important;
      letter-spacing: -0.02em;
      font-weight: 700;
      transition: all 0.2s ease;
    }
    
    .logo-link:hover {
      color: #00BFFF !important;
    }

    .logo-brand {
      display: flex;
      align-items: center;
      gap: 2px;
    }
    
    .logo-pic {
      color: #1a2a4a;
    }
    
    .logo-apps {
      color: #00BFFF;
    }
    
    .logo-dot {
      color: #87CEEB;
      font-size: 1.8rem;
    }

    /* Dropdown panels - Clean white */
    .dropdown-panel {
      background: #ffffff !important;
      backdrop-filter: blur(0);
      border: 1px solid #e8f4f8;
      box-shadow: 0 20px 40px -12px rgba(0, 0, 0, 0.1);
    }

    .dropdown-link {
      color: #1a2a4a;
      transition: all 0.15s;
      border-left: 2px solid transparent;
    }
    
    .dropdown-link:hover {
      color: #00BFFF;
      background: rgba(135, 206, 235, 0.08);
      border-left-color: #87CEEB;
    }

    /* Mobile menu - Clean white */
    #mobile-menu {
      background: #ffffff;
      border-top: 1px solid #e8f4f8;
      box-shadow: 0 -4px 30px rgba(0, 0, 0, 0.05);
    }

    .mobile-border-sep {
      border-color: #e8f4f8;
    }

    /* Mobile CTA - Sky Blue */
    .mobile-cta {
      background: #00BFFF;
      color: white !important;
      text-align: center;
      font-weight: 600;
      padding: 14px;
      transition: all 0.2s ease;
    }
    
    .mobile-cta:hover {
      background: #0099CC;
      box-shadow: 0 4px 20px rgba(0, 191, 255, 0.3);
    }

    /* Utility classes */
    .border-l-2 {
      border-left-width: 2px;
    }
  </style>
  <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700&display=swap" rel="stylesheet">
</head>
<body style="font-family: 'Inter', sans-serif; background: #f8f9fc;">

<nav id="main-navbar" class="sticky top-0 z-50 bg-white transition-all duration-300 w-full">
  <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-10">
    <div class="flex justify-between items-center h-16 md:h-20">
      
      <!-- Logo / Brand - Updated to PicApps -->
      <div class="flex items-center">
        <a href="/" class="logo-link flex items-center font-bold text-2xl tracking-tight">
          <span class="logo-brand">
            <span class="logo-pic">Pic</span>
            <span class="logo-apps">Apps</span>
            <span class="logo-dot">.</span>
          </span>
        </a>
      </div>

      <!-- DESKTOP NAVIGATION -->
      <div class="hidden lg:flex absolute left-1/2 transform -translate-x-1/2">
        <div class="flex items-center space-x-1 desktop-nav">
          
          <!-- MOBILE APPS -->
          <div class="relative group">
            <span class="nav-link relative px-4 py-2 font-medium text-sm flex items-center gap-1 transition-colors duration-200">
              Mobile Apps
              <svg class="w-3.5 h-3.5 transition-transform duration-200 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </span>
            <div class="dropdown-panel absolute top-full left-0 w-64 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
              <div class="py-2 flex flex-col">
                <a href="/mobile/ios" class="dropdown-link block px-5 py-2.5 text-sm border-l-2 border-transparent hover:border-skyblue transition-all">iOS Development</a>
                <a href="/mobile/android" class="dropdown-link block px-5 py-2.5 text-sm border-l-2 border-transparent hover:border-skyblue transition-all">Android Development</a>
                <a href="/mobile/cross-platform" class="dropdown-link block px-5 py-2.5 text-sm border-l-2 border-transparent hover:border-skyblue transition-all">Cross-Platform</a>
              </div>
            </div>
          </div>
          
          <!-- WEBSITES -->
          <div class="relative group">
            <a href="/websites" class="nav-link relative px-4 py-2 font-medium text-sm flex items-center gap-1 transition-colors duration-200">
              Websites
            </a>
          </div>
          
          <!-- FIGMA DESIGN -->
          <div class="relative group">
            <span class="nav-link relative px-4 py-2 font-medium text-sm flex items-center gap-1 transition-colors duration-200">
              Figma Design
              <svg class="w-3.5 h-3.5 transition-transform duration-200 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </span>
            <div class="dropdown-panel absolute top-full left-0 w-72 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
              <div class="py-2">
                <a href="/figma/templates" class="dropdown-link block px-5 py-2.5 text-sm border-l-2 border-transparent hover:border-skyblue">UI Kits & Templates</a>
                <a href="/figma/custom-design" class="dropdown-link block px-5 py-2.5 text-sm border-l-2 border-transparent hover:border-skyblue">Custom App/Web Design</a>
                <a href="/figma/design-to-code" class="dropdown-link block px-5 py-2.5 text-sm border-l-2 border-transparent hover:border-skyblue">Figma → Code</a>
                <div class="border-t border-gray-200 my-1 mx-4"></div>
                <div class="px-5 py-2 text-xs text-sky-400 italic">✨ No Figma file? We'll create it.</div>
              </div>
            </div>
          </div>
          
          <!-- Work -->
          <a href="/portfolio" class="nav-link relative px-4 py-2 font-medium text-sm transition-colors duration-200">Work</a>
          
        </div>
      </div>

      <!-- Right side: CTA / User Menu -->
      <div class="hidden lg:flex items-center space-x-5">
        <!-- Language Switcher -->
        <div class="relative group">
          <button class="lang-btn flex items-center gap-1 text-sm font-medium transition-colors">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            EN
            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
          </button>
          <div class="dropdown-panel absolute top-full right-0 w-32 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
            <div class="py-1">
              <a href="#" class="dropdown-link block px-4 py-2 text-sm">English</a>
              <a href="#" class="dropdown-link block px-4 py-2 text-sm">Español</a>
              <a href="#" class="dropdown-link block px-4 py-2 text-sm">Français</a>
            </div>
          </div>
        </div>
        
        <!-- Login Link -->
        <a href="/login" class="login-link flex items-center gap-1.5 text-sm font-medium transition-colors">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
          </svg>
          <span>Login</span>
        </a>
        
        <!-- Start a Project Button - Using the updated button component -->
        <x-shared.buttons.primary-button 
          href="/contact" 
          text="Start Project" 
          size="sm"
          variant="skyblue"
        />
      </div>
      
      <!-- Mobile Menu Toggle -->
      <div class="lg:hidden flex items-center">
        <button id="mobile-menu-button" class="text-[#1a2a4a] hover:text-[#00BFFF] focus:outline-none p-2 transition-colors">
          <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
      </div>
    </div>
  </div>

  <!-- MOBILE MENU -->
  <div id="mobile-menu" class="lg:hidden hidden fixed left-0 right-0 top-16 md:top-20 bottom-0 z-[999] overflow-y-auto px-5 py-5">
    <div class="flex flex-col space-y-5">
      
      <div class="mobile-dropdown border-b border-gray-200 pb-2">
        <button class="mobile-dropdown-btn flex justify-between items-center w-full py-2 text-base font-medium">
          Mobile Apps
          <svg class="dropdown-icon w-4 h-4 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="mobile-dropdown-content hidden pl-4 mt-2 space-y-2.5">
          <a href="/mobile/ios" class="block py-1 text-sm text-gray-600 hover:text-[#00BFFF] transition-colors">iOS Development</a>
          <a href="/mobile/android" class="block py-1 text-sm text-gray-600 hover:text-[#00BFFF] transition-colors">Android Development</a>
          <a href="/mobile/cross-platform" class="block py-1 text-sm text-gray-600 hover:text-[#00BFFF] transition-colors">Cross-Platform</a>
        </div>
      </div>

      <div class="mobile-dropdown border-b border-gray-200 pb-2">
        <button class="mobile-dropdown-btn flex justify-between items-center w-full py-2 text-base font-medium">
          Websites
          <svg class="dropdown-icon w-4 h-4 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="mobile-dropdown-content hidden pl-4 mt-2 space-y-2.5">
          <a href="/websites/corporate" class="block py-1 text-sm text-gray-600 hover:text-[#00BFFF] transition-colors">Corporate Websites</a>
          <a href="/websites/ecommerce" class="block py-1 text-sm text-gray-600 hover:text-[#00BFFF] transition-colors">E‑commerce</a>
          <a href="/websites/custom-webapps" class="block py-1 text-sm text-gray-600 hover:text-[#00BFFF] transition-colors">Custom Web Apps</a>
          <a href="/websites/cms" class="block py-1 text-sm text-gray-600 hover:text-[#00BFFF] transition-colors">CMS Solutions</a>
        </div>
      </div>

      <div class="mobile-dropdown border-b border-gray-200 pb-2">
        <button class="mobile-dropdown-btn flex justify-between items-center w-full py-2 text-base font-medium">
          Figma Design
          <svg class="dropdown-icon w-4 h-4 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="mobile-dropdown-content hidden pl-4 mt-2 space-y-2.5">
          <a href="/figma/templates" class="block py-1 text-sm text-gray-600 hover:text-[#00BFFF] transition-colors">UI Templates & Kits</a>
          <a href="/figma/custom-design" class="block py-1 text-sm text-gray-600 hover:text-[#00BFFF] transition-colors">Custom Design Systems</a>
          <a href="/figma/design-to-code" class="block py-1 text-sm text-gray-600 hover:text-[#00BFFF] transition-colors">Figma to Development</a>
          <div class="text-xs text-sky-400 pt-1 italic">✓ No existing Figma? We design from scratch.</div>
        </div>
      </div>

      <a href="/portfolio" class="mobile-nav-link py-2 text-base font-medium border-b border-gray-200">Work</a>
      
      <a href="/login" class="mobile-nav-link py-2 text-base font-medium border-b border-gray-200 flex items-center gap-2">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
        </svg>
        Client Login
      </a>
      
      <a href="/contact" class="mobile-cta w-full">
        Start a Project →
      </a>
    </div>
  </div>
</nav>

<script>
  (function() {
    // mobile menu toggle
    const menuBtn = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    
    if (menuBtn && mobileMenu) {
      menuBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        mobileMenu.classList.toggle('hidden');
        document.body.classList.toggle('overflow-hidden');
      });
      
      document.addEventListener('click', function(event) {
        if (!mobileMenu.classList.contains('hidden')) {
          if (!mobileMenu.contains(event.target) && !menuBtn.contains(event.target)) {
            mobileMenu.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
          }
        }
      });
    }
    
    // mobile submenu dropdown logic
    const dropdownBtns = document.querySelectorAll('.mobile-dropdown-btn');
    dropdownBtns.forEach(btn => {
      btn.addEventListener('click', (e) => {
        e.preventDefault();
        const content = btn.nextElementSibling;
        const icon = btn.querySelector('.dropdown-icon');
        
        dropdownBtns.forEach(other => {
          if (other !== btn) {
            const otherContent = other.nextElementSibling;
            const otherIcon = other.querySelector('.dropdown-icon');
            if (otherContent && !otherContent.classList.contains('hidden')) {
              otherContent.classList.add('hidden');
              if (otherIcon) otherIcon.style.transform = 'rotate(0deg)';
            }
          }
        });
        
        if (content) {
          content.classList.toggle('hidden');
          if (icon) {
            if (content.classList.contains('hidden')) {
              icon.style.transform = 'rotate(0deg)';
            } else {
              icon.style.transform = 'rotate(180deg)';
            }
          }
        }
      });
    });
    
    // navbar scroll effect
    const navbar = document.getElementById('main-navbar');
    window.addEventListener('scroll', () => {
      if (window.scrollY > 20) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    });
    
    let resizeTimer;
    window.addEventListener('resize', () => {
      if (window.innerWidth >= 1024) {
        if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
          mobileMenu.classList.add('hidden');
          document.body.classList.remove('overflow-hidden');
        }
      }
    });
    
    const styleFix = document.createElement('style');
    styleFix.textContent = `
      #main-navbar, #main-navbar * { border-radius: 0px !important; }
      .dropdown-panel, .mobile-dropdown-content { border-radius: 0px !important; }
      button, a, div { border-radius: 0px; }
    `;
    document.head.appendChild(styleFix);
  })();
</script>
</body>
</html>