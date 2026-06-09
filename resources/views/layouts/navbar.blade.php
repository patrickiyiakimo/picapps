<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <title>ALTA · Digital Agency</title>
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

    /* Smooth scroll & anchor reset */
    html {
      scroll-behavior: smooth;
    }

    /* No rounded corners globally – sharp & professional */
    nav, nav *,
    button, a, div, ul, li, .dropdown-panel,
    .mobile-menu-panel, .mobile-dropdown-content {
      border-radius: 0 !important;
    }

    /* main navbar base – pure black */
    #main-navbar {
      background: #000000 !important;
      transition: all 0.25s ease-out;
      border-bottom: 1px solid rgba(255,255,255,0.08);
    }

    /* slight elevation on scroll (preserve black) */
    #main-navbar.scrolled {
      background: #000000 !important;
      box-shadow: 0 8px 24px rgba(0,0,0,0.25);
      border-bottom-color: rgba(255,255,255,0.12);
    }

    /* text color = gray (cool neutral) */
    .nav-link, 
    .desktop-nav .group > a,
    .desktop-nav .relative.group > a,
    .lang-btn, .login-link,
    .mobile-nav-link,
    .mobile-dropdown-btn {
      color: #cbd5e1 !important;
    }

    /* hover effect: lighter gray + subtle brand accent */
    .nav-link:hover,
    .desktop-nav .group > a:hover,
    .desktop-nav .relative.group > a:hover,
    .lang-btn:hover, .login-link:hover,
    .mobile-nav-link:hover,
    .mobile-dropdown-btn:hover {
      color: #ffffff !important;
    }

    /* brand / logo remains white on black (crisp) */
    .logo-link {
      color: white !important;
      letter-spacing: -0.02em;
    }

    /* CTA button: solid white text on black with subtle border */
    .btn-project {
      background: transparent;
      border: 1px solid #334155;
      color: #e2e8f0 !important;
      transition: all 0.2s ease;
    }
    .btn-project:hover {
      border-color: #ffffff;
      background: #ffffff10;
      color: white !important;
    }

    /* dropdown panels — dark elegant background, gray text */
    .dropdown-panel {
      background: #0a0a0a !important;
      backdrop-filter: blur(0);
      border: 1px solid #1f2937;
      box-shadow: 0 20px 35px -12px rgba(0,0,0,0.5);
    }

    .dropdown-link {
      color: #cbd5e1;
      transition: all 0.15s;
    }
    .dropdown-link:hover {
      color: white;
      background: #111827;
      border-left-color: #6b7280;
    }

    /* Mobile menu background */
    #mobile-menu {
      background: #000000;
      border-top: 1px solid #1f2937;
      box-shadow: 0 -4px 20px rgba(0,0,0,0.4);
    }

    .mobile-border-sep {
      border-color: #1e293b;
    }

    /* remove any backdrop blur that might conflict */
    .backdrop-blur-sm, .backdrop-blur-none {
      backdrop-filter: none !important;
    }

    /* utility */
    .border-l-2 {
      border-left-width: 2px;
    }
    .border-white\/30 {
      border-color: rgba(255,255,255,0.1);
    }
  </style>
  <!-- Google Fonts (Inter for professional look) -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700&display=swap" rel="stylesheet">
</head>
<body style="font-family: 'Inter', sans-serif; background: #f8f9fc;">

<nav id="main-navbar" class="sticky top-0 z-50 bg-black transition-all duration-300 w-full">
  <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-10">
    <div class="flex justify-between items-center h-16 md:h-20">
      
      <!-- Logo / Brand - Left -->
      <div class="flex items-center">
        <a href="/" class="logo-link flex items-center font-bold text-2xl tracking-tight">
          ALTA
        </a>
      </div>

      <!-- DESKTOP NAVIGATION - Centered using absolute positioning -->
      <div class="hidden lg:flex absolute left-1/2 transform -translate-x-1/2">
        <div class="flex items-center space-x-1 desktop-nav">
          
          <!-- MOBILE APPS -->
          <div class="relative group">
            <a href="/mobile-apps" class="nav-link relative px-4 py-2 font-medium text-sm flex items-center gap-1 transition-colors duration-200">
              Mobile Apps
              <svg class="w-3.5 h-3.5 transition-transform duration-200 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </a>
            <div class="dropdown-panel absolute top-full left-0 w-64 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
              <div class="py-2 flex flex-col">
                <a href="/mobile/ios" class="dropdown-link block px-5 py-2.5 text-sm border-l-2 border-transparent hover:border-gray-500 transition-all">iOS Development</a>
                <a href="/mobile/android" class="dropdown-link block px-5 py-2.5 text-sm border-l-2 border-transparent hover:border-gray-500 transition-all">Android Development</a>
                <a href="/mobile/cross-platform" class="dropdown-link block px-5 py-2.5 text-sm border-l-2 border-transparent hover:border-gray-500 transition-all">Flutter & React Native</a>
                <a href="/mobile/pwa" class="dropdown-link block px-5 py-2.5 text-sm border-l-2 border-transparent hover:border-gray-500 transition-all">Progressive Web Apps</a>
              </div>
            </div>
          </div>
          
          <!-- WEBSITES -->
          <div class="relative group">
            <a href="/websites" class="nav-link relative px-4 py-2 font-medium text-sm flex items-center gap-1 transition-colors duration-200">
              Websites
              <svg class="w-3.5 h-3.5 transition-transform duration-200 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </a>
            <div class="dropdown-panel absolute top-full left-0 w-64 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
              <div class="py-2">
                <a href="/websites/corporate" class="dropdown-link block px-5 py-2.5 text-sm border-l-2 border-transparent hover:border-gray-500">Corporate & Business</a>
                <a href="/websites/ecommerce" class="dropdown-link block px-5 py-2.5 text-sm border-l-2 border-transparent hover:border-gray-500">E‑commerce Platforms</a>
                <a href="/websites/custom-webapps" class="dropdown-link block px-5 py-2.5 text-sm border-l-2 border-transparent hover:border-gray-500">Custom Web Applications</a>
                <a href="/websites/cms" class="dropdown-link block px-5 py-2.5 text-sm border-l-2 border-transparent hover:border-gray-500">CMS Solutions</a>
              </div>
            </div>
          </div>
          
          <!-- FIGMA DESIGN -->
          <div class="relative group">
            <a href="/figma-design" class="nav-link relative px-4 py-2 font-medium text-sm flex items-center gap-1 transition-colors duration-200">
              Figma Design
              <svg class="w-3.5 h-3.5 transition-transform duration-200 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </a>
            <div class="dropdown-panel absolute top-full left-0 w-72 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
              <div class="py-2">
                <a href="/figma/templates" class="dropdown-link block px-5 py-2.5 text-sm border-l-2 border-transparent hover:border-gray-500">UI Kits & Templates</a>
                <a href="/figma/custom-design" class="dropdown-link block px-5 py-2.5 text-sm border-l-2 border-transparent hover:border-gray-500">Custom App/Web Design</a>
                <a href="/figma/design-to-code" class="dropdown-link block px-5 py-2.5 text-sm border-l-2 border-transparent hover:border-gray-500">Figma → Code</a>
                <div class="border-t border-gray-800 my-1 mx-4"></div>
                <div class="px-5 py-2 text-xs text-gray-400 italic">No Figma file? We'll create it.</div>
              </div>
            </div>
          </div>
          
          <!-- Work -->
          <a href="/portfolio" class="nav-link relative px-4 py-2 font-medium text-sm transition-colors duration-200">Work</a>
          
          <!-- Insights -->
          <div class="relative group">
            <a href="/insights" class="nav-link relative px-4 py-2 font-medium text-sm flex items-center gap-1 transition-colors duration-200">
              Insights
              <svg class="w-3.5 h-3.5 transition-transform duration-200 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </a>
            <div class="dropdown-panel absolute top-full left-0 w-56 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
              <div class="py-2">
                <a href="/blog" class="dropdown-link block px-5 py-2.5 text-sm">Blog</a>
                <a href="/case-studies" class="dropdown-link block px-5 py-2.5 text-sm">Case Studies</a>
                <a href="/guides" class="dropdown-link block px-5 py-2.5 text-sm">Guides</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Right side: CTA / User Menu - Professional -->
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
        
        <!-- Conditional: If logged in, show user menu; else show login and CTA -->
        @auth
          <!-- User Dropdown for Logged In Users -->
          <div class="relative group">
            <button class="flex items-center gap-2 text-sm font-medium transition-colors text-gray-300 hover:text-white">
              <div class="w-8 h-8 bg-gray-700 flex items-center justify-center text-white text-xs font-semibold">
                {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
              </div>
              <span class="hidden xl:inline">{{ Auth::user()->name }}</span>
              <svg class="w-3 h-3 transition-transform duration-200 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </button>
            <div class="dropdown-panel absolute top-full right-0 w-56 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
              <div class="py-2">
                <a href="/dashboard" class="dropdown-link block px-5 py-2.5 text-sm border-l-2 border-transparent hover:border-gray-500">Dashboard</a>
                <a href="/profile" class="dropdown-link block px-5 py-2.5 text-sm border-l-2 border-transparent hover:border-gray-500">Profile Settings</a>
                <a href="/projects" class="dropdown-link block px-5 py-2.5 text-sm border-l-2 border-transparent hover:border-gray-500">My Projects</a>
                <a href="/billing" class="dropdown-link block px-5 py-2.5 text-sm border-l-2 border-transparent hover:border-gray-500">Billing</a>
                <div class="border-t border-gray-800 my-1 mx-4"></div>
                <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <button type="submit" class="dropdown-link block w-full text-left px-5 py-2.5 text-sm border-l-2 border-transparent hover:border-red-500 text-red-400 hover:text-red-300">
                    Logout
                  </button>
                </form>
              </div>
            </div>
          </div>
        @else
          <!-- Login Link for Guests -->
          <a href="/login" class="login-link flex items-center gap-1.5 text-sm font-medium transition-colors">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
            </svg>
            <span>Login</span>
          </a>
          
          <!-- Start a Project Button -->
          <a href="/contact" class="btn-project px-5 py-2 text-sm font-semibold transition-all duration-200 uppercase tracking-wide">
            Start a Project
          </a>
        @endauth
      </div>

      <!-- Mobile Menu Toggle (hamburger) -->
      <div class="lg:hidden flex items-center">
        <button id="mobile-menu-button" class="text-gray-300 hover:text-white focus:outline-none p-2">
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
      
      @auth
        <!-- Logged In User Info on Mobile -->
        <div class="flex items-center gap-3 pb-4 border-b border-gray-800">
          <div class="w-10 h-10 bg-gray-700 flex items-center justify-center text-white font-semibold">
            {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
          </div>
          <div>
            <p class="text-white font-medium">{{ Auth::user()->name }}</p>
            <p class="text-gray-500 text-sm">{{ Auth::user()->email }}</p>
          </div>
        </div>
      @endauth
      
      <div class="mobile-dropdown border-b border-gray-800 pb-2">
        <button class="mobile-dropdown-btn flex justify-between items-center w-full py-2 text-base font-medium">
          Mobile Apps
          <svg class="dropdown-icon w-4 h-4 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="mobile-dropdown-content hidden pl-4 mt-2 space-y-2.5">
          <a href="/mobile/ios" class="block py-1 text-sm text-gray-400 hover:text-white">iOS Development</a>
          <a href="/mobile/android" class="block py-1 text-sm text-gray-400 hover:text-white">Android Development</a>
          <a href="/mobile/cross-platform" class="block py-1 text-sm text-gray-400 hover:text-white">Cross-Platform (Flutter/RN)</a>
          <a href="/mobile/pwa" class="block py-1 text-sm text-gray-400 hover:text-white">Progressive Web Apps</a>
        </div>
      </div>

      <div class="mobile-dropdown border-b border-gray-800 pb-2">
        <button class="mobile-dropdown-btn flex justify-between items-center w-full py-2 text-base font-medium">
          Websites
          <svg class="dropdown-icon w-4 h-4 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="mobile-dropdown-content hidden pl-4 mt-2 space-y-2.5">
          <a href="/websites/corporate" class="block py-1 text-sm text-gray-400 hover:text-white">Corporate Websites</a>
          <a href="/websites/ecommerce" class="block py-1 text-sm text-gray-400 hover:text-white">E‑commerce</a>
          <a href="/websites/custom-webapps" class="block py-1 text-sm text-gray-400 hover:text-white">Custom Web Apps</a>
          <a href="/websites/cms" class="block py-1 text-sm text-gray-400 hover:text-white">CMS Solutions</a>
        </div>
      </div>

      <div class="mobile-dropdown border-b border-gray-800 pb-2">
        <button class="mobile-dropdown-btn flex justify-between items-center w-full py-2 text-base font-medium">
          Figma Design
          <svg class="dropdown-icon w-4 h-4 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="mobile-dropdown-content hidden pl-4 mt-2 space-y-2.5">
          <a href="/figma/templates" class="block py-1 text-sm text-gray-400 hover:text-white">UI Templates & Kits</a>
          <a href="/figma/custom-design" class="block py-1 text-sm text-gray-400 hover:text-white">Custom Design Systems</a>
          <a href="/figma/design-to-code" class="block py-1 text-sm text-gray-400 hover:text-white">Figma to Development</a>
          <div class="text-xs text-gray-500 pt-1 italic">✓ No existing Figma? We design from scratch.</div>
        </div>
      </div>

      <a href="/portfolio" class="mobile-nav-link py-2 text-base font-medium border-b border-gray-800">Work</a>
      <a href="/insights" class="mobile-nav-link py-2 text-base font-medium border-b border-gray-800">Insights</a>
      
      @auth
        <a href="/dashboard" class="mobile-nav-link py-2 text-base font-medium border-b border-gray-800">Dashboard</a>
        <a href="/profile" class="mobile-nav-link py-2 text-base font-medium border-b border-gray-800">Profile Settings</a>
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit" class="w-full text-left text-red-400 py-3 text-sm font-medium">Logout →</button>
        </form>
      @else
        <a href="/contact" class="bg-white text-black text-center font-semibold py-3 mt-2 w-full transition hover:bg-gray-200">Start a Project</a>
        <a href="/login" class="text-center text-gray-400 py-2 text-sm mt-1">Client Login →</a>
      @endauth
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
      
      // close menu when clicking outside
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
        
        // close others
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
    
    // navbar scroll effect: stays black but adds subtle shadow
    const navbar = document.getElementById('main-navbar');
    window.addEventListener('scroll', () => {
      if (window.scrollY > 20) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    });
    
    // ensure mobile menu hidden on window resize (safety)
    let resizeTimer;
    window.addEventListener('resize', () => {
      if (window.innerWidth >= 1024) {
        if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
          mobileMenu.classList.add('hidden');
          document.body.classList.remove('overflow-hidden');
        }
      }
    });
    
    // set initial styles guarantee: no rounding & black remains
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