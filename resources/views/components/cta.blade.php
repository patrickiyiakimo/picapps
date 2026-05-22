<section class="relative py-20 md:py-28 overflow-hidden">
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-16">
            
            <!-- Left Side - CTA Text Content -->
            <div class="flex-1 text-center lg:text-left">
                <!-- Badge -->
                <div class="inline-flex items-center gap-2 bg-[#61629F]/10 backdrop-blur-sm text-[#61629F] px-4 py-2 mb-6 border border-[#61629F]/20">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"/>
                    </svg>
                    <span class="text-sm font-semibold uppercase tracking-wider">Limited Time Offer</span>
                </div>
                
                <!-- Main Heading -->
                <h2 class="text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-bold text-navy-900 mb-6 font-display leading-tight">
                    Ready to Turn Your
                    <span class="bg-gradient-to-r from-[#61629F] to-[#7B7CB3] bg-clip-text text-transparent">Idea Into Reality?</span>
                </h2>
                
                <p class="text-gray-600 text-base md:text-lg mb-8 max-w-lg mx-auto lg:mx-0 leading-relaxed">
                    Get a free consultation and quote today. No obligation, just expert advice on your website or app project.
                </p>
                
                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start mb-8">
                    <a href="/contact" class="group inline-flex items-center justify-center gap-2 bg-[#61629F] text-white px-8 py-4 font-semibold hover:bg-[#7B7CB3] transition-all duration-300 shadow-lg rounded-lg">
                        Start Your Project
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a>
                    <a href="#pricing" class="inline-flex items-center justify-center gap-2 border-2 border-[#61629F] text-[#61629F] px-8 py-4 font-semibold hover:bg-[#61629F]/10 transition-all duration-300 rounded-lg">
                        View Pricing
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                    </a>
                </div>
            </div>
            
            <!-- Right Side - Image -->
            <div class="flex-1 flex justify-center lg:justify-end">
                <div class="relative">
                    <img src="{{ asset('/images/Group 20.png') }}" alt="Consultation Illustration" class="w-full max-w-md h-auto">
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    @keyframes float-slow {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
    }
    
    @keyframes float-slow-reverse {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(10px); }
    }
    
    @keyframes pulse-slow {
        0%, 100% { opacity: 0.4; transform: scale(1); }
        50% { opacity: 0.7; transform: scale(1.05); }
    }
    
    .animate-float-slow {
        animation: float-slow 5s ease-in-out infinite;
    }
    
    .animate-float-slow-reverse {
        animation: float-slow-reverse 6s ease-in-out infinite;
    }
    
    .animate-pulse-slow {
        animation: pulse-slow 3s ease-in-out infinite;
    }
    
    .rounded-lg {
        border-radius: 8px;
    }
</style>