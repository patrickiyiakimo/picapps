<section class="relative min-h-screen flex items-center overflow-hidden">
    
    <!-- Premium Gradient Background - Top: #61629F to Bottom: White -->
    <div class="absolute inset-0 z-0">
        <!-- Main gradient background -->
        <div class="absolute inset-0 bg-gradient-to-b from-[#61629F] via-[#7B7CB3] to-white"></div>
        
        <!-- Diagonal accent shape -->
        <!-- <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-br from-white/10 via-transparent to-transparent transform skew-x-12 -mr-20"></div> -->
        
        <!-- Large abstract blob -->
        <div class="absolute -top-40 -right-40 w-96 h-96 bg-white/10 rounded-full filter blur-3xl opacity-40"></div>
        
        <!-- Small blob bottom left -->
        <!-- <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-white/5 rounded-full filter blur-3xl opacity-30"></div> -->
        
        <!-- Grid pattern overlay -->
        <!-- <div class="absolute inset-0 opacity-5" style="background-image: radial-gradient(white 1px, transparent 1px); background-size: 40px 40px;"></div> -->
        
        <!-- Floating rings -->
        <div class="absolute top-1/3 right-1/4 w-64 h-64 border border-white/20 rounded-full animate-spin-slow"></div>
        <div class="absolute bottom-1/4 left-1/4 w-48 h-48 border border-white/10 rounded-full animate-spin-slow-reverse"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-20">
        <div class="flex flex-col lg:flex-row items-center gap-8 lg:gap-12">
            
            <!-- Left Side - Bold Text Content -->
            <div class="flex-1 text-center lg:text-left">
               
                <!-- Main Heading - Clear & Direct with Font -->
                <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-6xl font-bold leading-[1.2] mb-6 font-display">
                    <span class="text-white">Build Your Website or Mobile App<br>With Us</span>
                </h1>

                <p class="text-white/80 text-base sm:text-lg mb-8 max-w-lg mx-auto lg:mx-0 leading-relaxed font-sans">
                    We build custom websites, e-commerce stores, and mobile apps that grow your business. 
                    No design? No problem. We handle everything from start to finish.
                </p>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start mb-8">
                    <!-- Start a Project Button - Black -->
                    <a href="#book-call" class="group relative inline-flex items-center justify-center gap-3 bg-black text-white px-6 sm:px-8 py-3 sm:py-4 font-semibold overflow-hidden transition-all duration-300 hover:bg-gray-900 font-sans">
                        <span class="absolute inset-0 bg-gradient-to-r from-gray-800 to-gray-700 transform translate-x-full group-hover:translate-x-0 transition-transform duration-300"></span>
                        <span class="relative z-10 flex items-center gap-2">
                            Start a Project
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </span>
                    </a>
                    <button id="open-chatbot" class="inline-flex items-center justify-center gap-2 border-2 border-white/40 text-white px-6 sm:px-8 py-3 sm:py-4 font-semibold hover:bg-white/10 hover:border-white/60 transition-all duration-300 group bg-transparent font-sans">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                        </svg>
                        Chat with AI
                    </button>
                </div>
            </div>

            <!-- Right Side - Dynamic Image Showcase -->
            <div class="flex-1 flex justify-center lg:justify-end">
                <div class="relative w-full max-w-md lg:max-w-lg">
                    
                    <!-- Main Floating Card -->
                    <div class="relative z-20">
                        <div class="overflow-hidden ">
                            <!-- Team Image -->
                            <img src="{{ asset('/images/lady-guy-image.png') }}" alt="Alta Team" class="w-full h-auto object-cover">
                        </div>
                    </div>
                    
                    <!-- Floating Element - Code Icon -->
                    <div class="absolute top-0 -left-6 z-10 animate-float-slow-reverse opacity-70 hidden sm:block">
                        <svg class="w-10 h-10 sm:w-12 sm:h-12 text-white/70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                        </svg>
                    </div>
                    
                    <!-- Floating Element - Sparkle -->
                    <div class="absolute bottom-0 -right-6 z-10 animate-pulse hidden sm:block">
                        <svg class="w-8 h-8 text-white/60" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2L13.5 8.5L20 10L13.5 11.5L12 18L10.5 11.5L4 10L10.5 8.5Z"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    @keyframes float-slow {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-15px); }
    }
    
    @keyframes float-slow-reverse {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(15px); }
    }
    
    @keyframes spin-slow {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }
    
    @keyframes spin-slow-reverse {
        from { transform: rotate(360deg); }
        to { transform: rotate(0deg); }
    }
    
    @keyframes pulse {
        0%, 100% { opacity: 0.6; transform: scale(1); }
        50% { opacity: 1; transform: scale(1.1); }
    }
    
    .animate-float-slow {
        animation: float-slow 6s ease-in-out infinite;
    }
    
    .animate-float-slow-reverse {
        animation: float-slow-reverse 5s ease-in-out infinite;
    }
    
    .animate-spin-slow {
        animation: spin-slow 20s linear infinite;
    }
    
    .animate-spin-slow-reverse {
        animation: spin-slow-reverse 25s linear infinite;
    }
    
    .animate-pulse {
        animation: pulse 2s ease-in-out infinite;
    }
    
    /* No rounded corners on buttons */
    .rounded-lg, .rounded-xl, .rounded-2xl {
        border-radius: 0 !important;
    }
    
    /* Keep avatars and badges circular */
    .rounded-full {
        border-radius: 9999px !important;
    }
    
    /* Responsive adjustments */
    @media (max-width: 768px) {
        .text-4xl {
            font-size: 2.25rem;
        }
    }
</style>