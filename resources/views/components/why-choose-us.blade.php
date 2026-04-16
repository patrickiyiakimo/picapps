<section class="relative bg-white py-20 md:py-28 overflow-hidden">
    <!-- Background Wavy Elements -->
    <div class="absolute inset-0 z-0">
        <svg class="absolute bottom-0 right-0 w-full h-full opacity-5" viewBox="0 0 1200 800" preserveAspectRatio="none">
            <path d="M0,600 Q150,550 300,600 Q450,650 600,600 Q750,550 900,600 Q1050,650 1200,600" stroke="#3b82f6" stroke-width="2" fill="none" stroke-dasharray="10 10"/>
            <path d="M0,700 Q150,650 300,700 Q450,750 600,700 Q750,650 900,700 Q1050,750 1200,700" stroke="#60a5fa" stroke-width="2" fill="none" stroke-dasharray="10 10" opacity="0.5"/>
        </svg>
        
        <!-- Light glowing orb -->
        <div class="absolute bottom-20 left-1/4 w-96 h-96 bg-blue-100 rounded-full filter blur-3xl opacity-30 animate-pulse-slow"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row gap-12 lg:gap-16 items-center">
            
            <!-- Left Side - Image -->
            <div class="flex-1">
                <div class="relative group">
                    <!-- Decorative wavy border -->
                    <svg class="absolute -top-6 -left-6 w-full h-full" viewBox="0 0 500 500" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M450,50 Q470,30 480,60 Q500,100 480,150 Q460,200 470,250 Q480,300 460,350 Q440,400 450,430 Q460,460 430,470 Q400,480 370,470 Q340,460 300,470 Q260,480 230,460 Q200,440 170,450 Q140,460 120,440 Q100,420 90,390 Q80,360 60,330 Q40,300 50,260 Q60,220 40,180 Q20,140 30,100 Q40,60 70,40 Q100,20 140,30 Q180,40 220,20 Q260,0 300,20 Q340,40 380,30 Q420,20 450,50Z" 
                              stroke="#3b82f6" stroke-width="3" fill="none" stroke-dasharray="10 10" class="opacity-30"/>
                    </svg>
                    
                    <!-- Image Container -->
                    <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                             alt="Happy team working with laptops" 
                             class="w-full h-auto object-cover transform transition-transform duration-700 group-hover:scale-105">
                        
                        <!-- Overlay Gradient -->
                        <div class="absolute inset-0 bg-gradient-to-tr from-blue-600/10 to-transparent"></div>
                    </div>
                    
                    <!-- Floating dots decoration -->
                    <div class="absolute -bottom-4 -right-4 w-32 h-32">
                        <svg viewBox="0 0 100 100" fill="none">
                            <circle cx="20" cy="20" r="4" fill="#3b82f6" opacity="0.4"/>
                            <circle cx="60" cy="10" r="3" fill="#3b82f6" opacity="0.3"/>
                            <circle cx="85" cy="40" r="5" fill="#3b82f6" opacity="0.5"/>
                            <circle cx="40" cy="70" r="3" fill="#3b82f6" opacity="0.4"/>
                            <circle cx="15" cy="80" r="4" fill="#3b82f6" opacity="0.3"/>
                        </svg>
                    </div>
                </div>
            </div>
            
            <!-- Right Side - Content -->
            <div class="flex-1">
                <!-- Section Header -->
                <div class="mb-10">
                    <div class="inline-flex items-center gap-2 bg-blue-50 text-blue-600 px-4 py-2 rounded-full mb-6 border border-blue-200">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-sm font-semibold">Why Alta</span>
                    </div>
                    
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-navy-900 mb-4 font-display">
                        Why <span class="bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent">Choose Us</span>
                    </h2>
                    <div class="w-20 h-1 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-full"></div>
                    <p class="text-navy-600 mt-6 text-lg">
                        We combine technical expertise with creative excellence to deliver exceptional results
                    </p>
                </div>
                
                <!-- Reasons Grid -->
                <div class="space-y-8">
                    <!-- Reason 1: Experience -->
                    <div class="flex gap-5 group">
                        <div class="flex-shrink-0">
                            <svg class="w-12 h-12 text-blue-500 group-hover:text-blue-600 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-navy-900 mb-2">10+ Years of Experience</h3>
                            <p class="text-navy-600 leading-relaxed">
                                With over a decade in the industry, we've mastered the art of delivering high-quality digital solutions that drive real business results.
                            </p>
                        </div>
                    </div>
                    
                    <!-- Reason 2: Expert Team -->
                    <div class="flex gap-5 group">
                        <div class="flex-shrink-0">
                            <svg class="w-12 h-12 text-blue-500 group-hover:text-blue-600 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-navy-900 mb-2">Expert Team of Developers & Designers</h3>
                            <p class="text-navy-600 leading-relaxed">
                                Our skilled professionals stay ahead of the latest technologies to bring innovative solutions to your projects.
                            </p>
                        </div>
                    </div>
                    
                    <!-- Reason 3: Client-Centric Approach -->
                    <div class="flex gap-5 group">
                        <div class="flex-shrink-0">
                            <svg class="w-12 h-12 text-blue-500 group-hover:text-blue-600 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-navy-900 mb-2">Client-Centric Approach</h3>
                            <p class="text-navy-600 leading-relaxed">
                                We prioritize your vision and work closely with you at every stage to ensure the final product exceeds your expectations.
                            </p>
                        </div>
                    </div>
                    
                    <!-- Reason 4: End-to-End Solutions -->
                    <div class="flex gap-5 group">
                        <div class="flex-shrink-0">
                            <svg class="w-12 h-12 text-blue-500 group-hover:text-blue-600 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-navy-900 mb-2">End-to-End Solutions</h3>
                            <p class="text-navy-600 leading-relaxed">
                                From initial concept and design to development, deployment, and ongoing support—we handle everything.
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- CTA Link -->
                <div class="mt-10">
                    <a href="/contact" class="inline-flex items-center gap-2 text-blue-600 font-semibold hover:text-blue-700 transition-colors group">
                        Let's work together
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    @keyframes pulse-slow {
        0%, 100% { opacity: 1; transform: scale(1); }
        50% { opacity: 0.8; transform: scale(0.98); }
    }
    
    .animate-pulse-slow {
        animation: pulse-slow 2s ease-in-out infinite;
    }
</style>