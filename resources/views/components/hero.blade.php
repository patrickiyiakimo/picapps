<section class="relative bg-gradient-to-br from-navy-900 via-navy-800 to-navy-900 overflow-hidden">
    <!-- Wavy Background Elements - Now more visible -->
    <div class="absolute inset-0 z-0">
        <!-- Top wavy pattern - lighter for contrast -->
        <svg class="absolute top-0 right-0 w-96 h-96 text-blue-400 opacity-30" viewBox="0 0 200 200" fill="currentColor">
            <path d="M100,0 C150,0 200,50 200,100 C200,150 150,200 100,200 C50,200 0,150 0,100 C0,50 50,0 100,0 Z" opacity="0.4"/>
            <path d="M100,20 C140,20 180,60 180,100 C180,140 140,180 100,180 C60,180 20,140 20,100 C20,60 60,20 100,20 Z" opacity="0.5"/>
        </svg>
        
        <!-- Animated wavy lines background -->
        <svg class="absolute top-0 left-0 w-full h-full opacity-20" viewBox="0 0 1200 800" preserveAspectRatio="none">
            <path d="M0,200 Q150,150 300,200 Q450,250 600,200 Q750,150 900,200 Q1050,250 1200,200" stroke="#3b82f6" stroke-width="2" fill="none" stroke-dasharray="10 10"/>
            <path d="M0,400 Q150,350 300,400 Q450,450 600,400 Q750,350 900,400 Q1050,450 1200,400" stroke="#60a5fa" stroke-width="2" fill="none" stroke-dasharray="10 10" opacity="0.5"/>
            <path d="M0,600 Q150,550 300,600 Q450,650 600,600 Q750,550 900,600 Q1050,650 1200,600" stroke="#93c5fd" stroke-width="2" fill="none" stroke-dasharray="10 10" opacity="0.3"/>
        </svg>
        
        <!-- Bottom wavy lines -->
        <svg class="absolute bottom-0 left-0 w-full h-64" viewBox="0 0 1200 120" preserveAspectRatio="none" fill="currentColor" class="text-blue-500">
            <path d="M0,0 C150,80 300,0 450,40 C600,80 750,20 900,60 C1050,100 1150,40 1200,0 L1200,120 L0,120 Z" fill="#1e3a8a" opacity="0.4"/>
        </svg>

        <!-- Glowing orb effects -->
        <div class="absolute top-20 left-1/4 w-96 h-96 bg-blue-500 rounded-full filter blur-3xl opacity-20 animate-pulse"></div>
        <div class="absolute bottom-20 right-1/4 w-96 h-96 bg-indigo-500 rounded-full filter blur-3xl opacity-20 animate-pulse-slow"></div>
    </div>

    <!-- Dark overlay to improve text readability -->
    <div class="absolute inset-0 bg-black/40 z-1"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24 lg:py-16">
        <div class="max-w-4xl mx-auto text-center">
           <!-- Main Heading with Wavy Underline - Dark text -->
           <h1 class="text-4xl md:text-5xl lg:text-5xl font-bold text-white leading-tight mb-6" style="font-family: 'Bricolage Grotesque', sans-serif;">
                Premier Custom Web & Mobile
                <span class="relative inline-block">
                    Application Development
                    <svg class="absolute -bottom-3 left-0 w-full h-4 text-blue-400" viewBox="0 0 400 12" preserveAspectRatio="none">
                        <path d="M0,6 Q50,0 100,6 Q150,12 200,6 Q250,0 300,6 Q350,12 400,6" stroke="#60a5fa" stroke-width="3" fill="none" stroke-linecap="round"/>
                    </svg>
                </span>
                <br>
                <span class="bg-gradient-to-r from-blue-300 to-indigo-300 bg-clip-text text-transparent">
                    Company
                </span>
            </h1>

            <!-- Catchy Subtitle - Lighter text for readability -->
            <div class="relative">
                <p class="text-lg md:text-xl text-gray-200 mb-8 max-w-3xl mx-auto leading-relaxed" style="font-family: 'Space Grotesk', sans-serif;">
                    Transforming ideas into exceptional digital experiences that drive growth, 
                    engage users, and deliver measurable results for your business.
                </p>
                
                <!-- Decorative wavy dots - brighter -->
                <div class="absolute -left-12 top-1/2 transform -translate-y-1/2 hidden lg:block">
                    <svg width="40" height="80" viewBox="0 0 40 80" fill="none">
                        <circle cx="20" cy="10" r="3" fill="#60a5fa" opacity="0.6"/>
                        <circle cx="20" cy="30" r="2" fill="#60a5fa" opacity="0.8"/>
                        <circle cx="20" cy="50" r="3" fill="#60a5fa" opacity="0.6"/>
                        <circle cx="20" cy="70" r="2" fill="#60a5fa" opacity="0.8"/>
                    </svg>
                </div>
                <div class="absolute -right-12 top-1/2 transform -translate-y-1/2 hidden lg:block">
                    <svg width="40" height="80" viewBox="0 0 40 80" fill="none">
                        <circle cx="20" cy="10" r="2" fill="#60a5fa" opacity="0.8"/>
                        <circle cx="20" cy="30" r="3" fill="#60a5fa" opacity="0.6"/>
                        <circle cx="20" cy="50" r="2" fill="#60a5fa" opacity="0.8"/>
                        <circle cx="20" cy="70" r="3" fill="#60a5fa" opacity="0.6"/>
                    </svg>
                </div>
            </div>

            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center mb-12">
                <a href="/contact" class="inline-flex items-center justify-center gap-2 bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-500 transition-all duration-500 shadow-lg hover:shadow-xl group">
                    Start Your Project
                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>
                <a href="#services" class="inline-flex items-center justify-center gap-2 border-2 border-white/30 bg-white/10 backdrop-blur-sm text-white px-8 py-3 rounded-lg font-semibold hover:bg-white/20 hover:border-white/50 transition-all duration-500">
                    View Our Work
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                    </svg>
                </a>
            </div>

            <!-- Stats with wavy dividers - Light text -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-8 pt-8 border-t border-white/20 relative">
                <!-- Decorative wavy line between stats on desktop -->
                <div class="hidden sm:block absolute left-1/3 top-1/2 transform -translate-y-1/2 w-px h-12 bg-gradient-to-b from-transparent via-white/40 to-transparent"></div>
                <div class="hidden sm:block absolute left-2/3 top-1/2 transform -translate-y-1/2 w-px h-12 bg-gradient-to-b from-transparent via-white/40 to-transparent"></div>
                
                <div class="text-center group cursor-pointer">
                    <div class="text-3xl md:text-4xl font-bold text-white mb-1 group-hover:text-blue-300 transition-colors">500+</div>
                    <div class="text-sm text-gray-300">Projects Delivered</div>
                    <div class="w-12 h-0.5 bg-blue-400 mx-auto mt-2 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                </div>
                <div class="text-center group cursor-pointer">
                    <div class="text-3xl md:text-4xl font-bold text-white mb-1 group-hover:text-blue-300 transition-colors">98%</div>
                    <div class="text-sm text-gray-300">Client Satisfaction</div>
                    <div class="w-12 h-0.5 bg-blue-400 mx-auto mt-2 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                </div>
                <div class="text-center group cursor-pointer">
                    <div class="text-3xl md:text-4xl font-bold text-white mb-1 group-hover:text-blue-300 transition-colors">24/7</div>
                    <div class="text-sm text-gray-300">Support</div>
                    <div class="w-12 h-0.5 bg-blue-400 mx-auto mt-2 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                </div>
            </div>

            <!-- Floating Tech Icons (Decorative) - Brighter on dark -->
            <div class="absolute left-0 top-1/3 transform -translate-y-1/2 hidden xl:block">
                <div class="flex flex-col gap-4 animate-float-slow">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg" class="w-10 h-10 opacity-80 hover:opacity-100 transition-opacity filter brightness-200 drop-shadow-lg" alt="Laravel">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" class="w-10 h-10 opacity-80 hover:opacity-100 transition-opacity filter brightness-200 drop-shadow-lg" alt="React">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vuejs/vuejs-original.svg" class="w-10 h-10 opacity-80 hover:opacity-100 transition-opacity filter brightness-200 drop-shadow-lg" alt="Vue">
                </div>
            </div>

            <div class="absolute right-0 top-1/3 transform -translate-y-1/2 hidden xl:block">
                <div class="flex flex-col gap-4 animate-float-slow-reverse">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/flutter/flutter-original.svg" class="w-10 h-10 opacity-80 hover:opacity-100 transition-opacity filter brightness-200 drop-shadow-lg" alt="Flutter">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/tailwindcss/tailwindcss-original.svg" class="w-10 h-10 opacity-80 hover:opacity-100 transition-opacity filter brightness-200 drop-shadow-lg" alt="Tailwind">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" class="w-10 h-10 opacity-80 hover:opacity-100 transition-opacity filter brightness-200 drop-shadow-lg" alt="MySQL">
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Wavy Divider - Lighter -->
    <div class="absolute bottom-0 left-0 w-full">
        <svg class="w-full h-16" viewBox="0 0 1200 120" preserveAspectRatio="none" fill="currentColor" class="text-white">
            <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" fill="#ffffff"/>
        </svg>
    </div>
</section>

<style>
    @keyframes pulse-slow {
        0%, 100% { opacity: 1; transform: scale(1); }
        50% { opacity: 0.8; transform: scale(0.98); }
    }
    
    @keyframes float-slow {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
    }
    
    @keyframes float-slow-reverse {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(20px); }
    }
    
    @keyframes pulse {
        0%, 100% { opacity: 0.1; transform: scale(1); }
        50% { opacity: 0.2; transform: scale(1.05); }
    }
    
    .animate-pulse-slow {
        animation: pulse-slow 2s ease-in-out infinite;
    }
    
    .animate-float-slow {
        animation: float-slow 6s ease-in-out infinite;
    }
    
    .animate-float-slow-reverse {
        animation: float-slow-reverse 6s ease-in-out infinite;
    }
</style>