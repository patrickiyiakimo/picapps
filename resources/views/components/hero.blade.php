<section class="relative min-h-screen flex items-center overflow-hidden bg-white">
    
    <!-- Premium Background Design -->
    <div class="absolute inset-0 z-0">
        <!-- Main white background -->
        <div class="absolute inset-0 bg-white"></div>
        
        <!-- Diagonal emerald accent shape -->
        <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-br from-emerald-50 via-emerald-50/50 to-transparent transform skew-x-12 -mr-20"></div>
        
        <!-- Large abstract emerald blob -->
        <div class="absolute -top-40 -right-40 w-96 h-96 bg-emerald-100 rounded-full filter blur-3xl opacity-40"></div>
        
        <!-- Small emerald blob bottom left -->
        <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-emerald-50 rounded-full filter blur-3xl opacity-60"></div>
        
        <!-- Grid pattern overlay -->
        <div class="absolute inset-0 opacity-5" style="background-image: radial-gradient(#10B981 1px, transparent 1px); background-size: 40px 40px;"></div>
        
        <!-- Floating emerald rings -->
        <div class="absolute top-1/3 right-1/4 w-64 h-64 border border-emerald-200 rounded-full animate-spin-slow"></div>
        <div class="absolute bottom-1/4 left-1/4 w-48 h-48 border border-emerald-100 rounded-full animate-spin-slow-reverse"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            
            <!-- Left Side - Bold Text Content -->
            <div class="order-2 lg:order-1">
                <!-- Premium Badge -->
                <div class="inline-flex items-center gap-2 bg-white shadow-lg px-4 py-2 rounded-full mb-8 border border-emerald-100">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                    </span>
                    <span class="text-xs font-semibold text-navy-700 uppercase tracking-wider">Trusted by 500+ Companies</span>
                </div>

             <!-- Main Heading - Clear & Direct -->
<h1 class="text-5xl md:text-6xl lg:text-7xl font-bold leading-[1.2] mb-6">
    <span class="text-navy-900">Build Your</span>
    <br>
    <span class="bg-gradient-to-r from-emerald-600 to-emerald-400 bg-clip-text text-transparent">Website or Mobile App</span>
    <br>
    <span class="text-navy-900">With Us</span>
</h1>

<p class="text-gray-500 text-lg mb-8 max-w-lg leading-relaxed">
    We build custom websites, e-commerce stores, and mobile apps that grow your business. 
    No design? No problem. We handle everything from start to finish.
</p>

            <!-- Right Side - Dynamic Image Showcase -->
            <div class="order-1 lg:order-2 relative">
                <div class="relative">
                    
                    <!-- Main Floating Card -->
                    <div class="relative z-20">
                        <div class="overflow-hidden">
                            <!-- Team Image -->
                            <img src="{{ asset('/images/lady-guy-image.png') }}" alt="Alta Team" class="w-full h-auto">
                            <div class="p-4 bg-white">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <p class="text-sm font-semibold text-navy-900">Team Alta</p>
                                        <p class="text-xs text-gray-400">Working on your success</p>
                                    </div>
                                    <div class="flex -space-x-2">
                                        <div class="w-6 h-6 rounded-full bg-emerald-100 border-2 border-white"></div>
                                        <div class="w-6 h-6 rounded-full bg-emerald-200 border-2 border-white"></div>
                                        <div class="w-6 h-6 rounded-full bg-emerald-300 border-2 border-white"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Floating Element - Code Icon -->
                    <div class="absolute top-1/4 -left-4 z-10 animate-float-slow-reverse opacity-50">
                        <svg class="w-12 h-12 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                        </svg>
                    </div>
                    
                    <!-- Floating Element - Sparkle -->
                    <div class="absolute bottom-1/3 -right-2 z-10 animate-pulse">
                        <svg class="w-8 h-8 text-emerald-400" fill="currentColor" viewBox="0 0 24 24">
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
    
    /* No rounded corners on buttons */
    .rounded-lg, .rounded-xl, .rounded-2xl {
        border-radius: 0 !important;
    }
    
    /* Keep avatars and badges circular */
    .rounded-full {
        border-radius: 9999px !important;
    }
</style>