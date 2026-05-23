<section class="relative bg-white py-20 md:py-14 overflow-hidden">
    <!-- Background Wavy Elements -->
    <div class="absolute inset-0 z-0">
        <svg class="absolute top-0 left-0 w-full h-full opacity-10" viewBox="0 0 1200 800" preserveAspectRatio="none">
            <path d="M0,200 Q150,150 300,200 Q450,250 600,200 Q750,150 900,200 Q1050,250 1200,200" stroke="#61629F" stroke-width="2" fill="none" stroke-dasharray="10 10"/>
            <path d="M0,400 Q150,350 300,400 Q450,450 600,400 Q750,350 900,400 Q1050,450 1200,400" stroke="#7B7CB3" stroke-width="2" fill="none" stroke-dasharray="10 10" opacity="0.5"/>
            <path d="M0,600 Q150,550 300,600 Q450,650 600,600 Q750,550 900,600 Q1050,650 1200,600" stroke="#A0A1C4" stroke-width="2" fill="none" stroke-dasharray="10 10" opacity="0.3"/>
        </svg>
        
        <!-- Glowing orbs -->
        <div class="absolute top-40 right-20 w-96 h-96 bg-[#61629F]/20 rounded-full filter blur-3xl opacity-20 animate-pulse"></div>
        <div class="absolute bottom-40 left-20 w-96 h-96 bg-[#61629F]/10 rounded-full filter blur-3xl opacity-20 animate-pulse-slow"></div>
        
        <!-- Top wavy divider -->
        <svg class="absolute top-0 left-0 w-full text-gray-50" viewBox="0 0 1200 120" preserveAspectRatio="none" fill="currentColor">
            <path d="M0,0 C150,80 300,0 450,40 C600,80 750,20 900,60 C1050,100 1150,40 1200,0 L1200,120 L0,120 Z" opacity="0.5"/>
        </svg>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-navy-900 mb-4 font-display">
                Our <span class="bg-gradient-to-r from-[#61629F] to-[#7B7CB3] bg-clip-text text-transparent">Services</span>
            </h2>
            <div class="w-24 h-1 bg-gradient-to-r from-[#61629F] to-[#7B7CB3] mx-auto"></div>
            <p class="text-gray-500 mt-6 max-w-2xl mx-auto text-lg">
                End-to-end digital solutions tailored to your business needs
            </p>
        </div>

        <!-- Services Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Service 1: Website Development -->
            <div class="group relative bg-white border border-gray-200 hover:border-[#61629F] transition-all duration-300 hover:shadow-xl overflow-hidden">
                <!-- Image Header -->
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                         alt="Website Development" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-navy-900/60 to-transparent"></div>
                    <div class="absolute bottom-4 left-4">
                        <div class="w-12 h-12 rounded-full bg-[#61629F] flex items-center justify-center shadow-lg">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                    </div>
                </div>
                
                <div class="p-6">
                    <h3 class="text-xl font-bold text-navy-900 mb-3">Website Development</h3>
                    <p class="text-gray-500 mb-4 leading-relaxed text-sm">
                        Custom websites built with modern technologies that are fast, responsive, and SEO-optimized.
                    </p>
                    <ul class="space-y-2 text-sm text-gray-500">
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 rounded-full bg-[#61629F] text-white p-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Laravel, React, Vue.js
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 rounded-full bg-[#61629F] text-white p-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Fully responsive design
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 rounded-full bg-[#61629F] text-white p-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            SEO & performance optimized
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Service 2: Mobile App Development -->
            <div class="group relative bg-white border border-gray-200 hover:border-[#61629F] transition-all duration-300 hover:shadow-xl overflow-hidden">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                         alt="Mobile App Development" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-navy-900/60 to-transparent"></div>
                    <div class="absolute bottom-4 left-4">
                        <div class="w-12 h-12 rounded-full bg-[#61629F] flex items-center justify-center shadow-lg">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                            </svg>
                        </div>
                    </div>
                </div>
                
                <div class="p-6">
                    <h3 class="text-xl font-bold text-navy-900 mb-3">Mobile App Development</h3>
                    <p class="text-gray-500 mb-4 leading-relaxed text-sm">
                        Native and cross-platform mobile applications that deliver seamless user experiences.
                    </p>
                    <ul class="space-y-2 text-sm text-gray-500">
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 rounded-full bg-[#61629F] text-white p-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            iOS & Android apps
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 rounded-full bg-[#61629F] text-white p-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Flutter, React Native
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 rounded-full bg-[#61629F] text-white p-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            App Store & Play Store deployment
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Service 3: UI/UX Design -->
            <div class="group relative bg-white border border-gray-200 hover:border-[#61629F] transition-all duration-300 hover:shadow-xl overflow-hidden">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1586717791821-3f44a563fa4c?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                         alt="UI UX Design" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-navy-900/60 to-transparent"></div>
                    <div class="absolute bottom-4 left-4">
                        <div class="w-12 h-12 rounded-full bg-[#61629F] flex items-center justify-center shadow-lg">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                            </svg>
                        </div>
                    </div>
                </div>
                
                <div class="p-6">
                    <h3 class="text-xl font-bold text-navy-900 mb-3">UI/UX Design</h3>
                    <p class="text-gray-500 mb-4 leading-relaxed text-sm">
                        Beautiful, intuitive designs that delight users and drive engagement.
                    </p>
                    <ul class="space-y-2 text-sm text-gray-500">
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 rounded-full bg-[#61629F] text-white p-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Figma design files
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 rounded-full bg-[#61629F] text-white p-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Wireframing & prototyping
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 rounded-full bg-[#61629F] text-white p-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            User research & testing
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Special Offer Banner -->
       <div class="mt-16 relative overflow-hidden min-h-[400px] md:min-h-[450px]">
    <!-- Background Image - Full Width -->
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('/images/Rectangle 10.png') }}" alt="Background" class="w-full h-full object-cover">
        <!-- Dark overlay for better text readability -->
        <div class="absolute inset-0 bg-navy-900/70"></div>
    </div>
    
    <div class="relative z-10 h-full flex items-center">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-16">
            <div class="flex flex-col lg:flex-row items-center justify-between gap-8">
                <!-- Left Side - Content -->
                <div class="flex-1 text-center lg:text-left">
                    <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm text-white px-4 py-2 mb-4 border border-white/20">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                        <span class="text-sm font-semibold">Special Offer</span>
                    </div>
                    <h3 class="text-2xl md:text-3xl lg:text-4xl font-bold text-white mb-3">Don't have a Figma design file?</h3>
                    <p class="text-white/80 mb-6 max-w-lg">
                        No problem! Our expert designers can create stunning UI/UX designs from scratch, tailored to your brand and vision.
                    </p>
                    <a href="/contact" class="inline-flex items-center gap-2 bg-black text-white px-6 py-3 font-semibold hover:bg-[#7B7CB3] transition-all duration-300 transform whitespace-nowrap shadow-md hover:shadow-lg">
                        Start Your Project
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
                
                <!-- Right Side - Larger Image -->
                <div class="flex-shrink-0">
                    <img src="{{ asset('/images/Group 4.png') }}" alt="Design Illustration" class="w-64 md:w-80 lg:w-96 h-auto">
                </div>
            </div>
        </div>
    </div>
</div>
        <!-- Process Section -->
        <div class="mt-20">
            <div class="text-center mb-12">
                <div class="inline-flex items-center gap-2 bg-[#61629F]/10 text-[#61629F] px-4 py-2 mb-4 border border-[#61629F]/20">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-sm font-semibold">How We Work</span>
                </div>
                <h3 class="text-3xl md:text-4xl font-bold text-navy-900 mb-4">Our <span class="text-[#61629F]">Process</span></h3>
                <div class="w-20 h-0.5 bg-[#61629F] mx-auto mb-6"></div>
                <p class="text-gray-500 max-w-2xl mx-auto text-base">
                    A streamlined approach to bring your ideas to life
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-0 border border-gray-200">
                <!-- Step 1: Discovery -->
                <div class="text-center group p-8 border-r border-gray-200 last:border-r-0 hover:bg-[#61629F]/5 transition-all duration-300 relative">
                    <div class="hidden md:block absolute -right-3 top-1/2 transform -translate-y-1/2 z-10">
                        <svg class="w-6 h-6 text-[#61629F]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </div>
                    
                    <div class="w-20 h-20 rounded-full bg-[#61629F]/10 flex items-center justify-center mx-auto mb-5 group-hover:bg-[#61629F] transition-all duration-300 shadow-md group-hover:shadow-lg border border-[#61629F]/20 group-hover:border-[#61629F]">
                        <span class="text-3xl font-bold text-[#61629F] group-hover:text-white transition-colors">1</span>
                    </div>
                    <h4 class="text-xl font-bold text-navy-900 mb-3 group-hover:text-[#61629F] transition-colors">Discovery</h4>
                    <p class="text-gray-500 text-base leading-relaxed">
                        Understanding your goals, requirements, and vision for the project
                    </p>
                </div>

                <!-- Step 2: Design -->
                <div class="text-center group p-8 border-r border-gray-200 last:border-r-0 hover:bg-[#61629F]/5 transition-all duration-300 relative">
                    <div class="hidden md:block absolute -right-3 top-1/2 transform -translate-y-1/2 z-10">
                        <svg class="w-6 h-6 text-[#61629F]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </div>
                    
                    <div class="w-20 h-20 rounded-full bg-[#61629F]/10 flex items-center justify-center mx-auto mb-5 group-hover:bg-[#61629F] transition-all duration-300 shadow-md group-hover:shadow-lg border border-[#61629F]/20 group-hover:border-[#61629F]">
                        <span class="text-3xl font-bold text-[#61629F] group-hover:text-white transition-colors">2</span>
                    </div>
                    <h4 class="text-xl font-bold text-navy-900 mb-3 group-hover:text-[#61629F] transition-colors">Design</h4>
                    <p class="text-gray-500 text-base leading-relaxed">
                        Creating wireframes, prototypes, and stunning UI/UX designs
                    </p>
                </div>

                <!-- Step 3: Development -->
                <div class="text-center group p-8 border-r border-gray-200 last:border-r-0 hover:bg-[#61629F]/5 transition-all duration-300 relative">
                    <div class="hidden md:block absolute -right-3 top-1/2 transform -translate-y-1/2 z-10">
                        <svg class="w-6 h-6 text-[#61629F]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </div>
                    
                    <div class="w-20 h-20 rounded-full bg-[#61629F]/10 flex items-center justify-center mx-auto mb-5 group-hover:bg-[#61629F] transition-all duration-300 shadow-md group-hover:shadow-lg border border-[#61629F]/20 group-hover:border-[#61629F]">
                        <span class="text-3xl font-bold text-[#61629F] group-hover:text-white transition-colors">3</span>
                    </div>
                    <h4 class="text-xl font-bold text-navy-900 mb-3 group-hover:text-[#61629F] transition-colors">Development</h4>
                    <p class="text-gray-500 text-base leading-relaxed">
                        Building your product with clean, scalable, and efficient code
                    </p>
                </div>

                <!-- Step 4: Launch & Support -->
                <div class="text-center group p-8 hover:bg-[#61629F]/5 transition-all duration-300">
                    <div class="w-20 h-20 rounded-full bg-[#61629F]/10 flex items-center justify-center mx-auto mb-5 group-hover:bg-[#61629F] transition-all duration-300 shadow-md group-hover:shadow-lg border border-[#61629F]/20 group-hover:border-[#61629F]">
                        <span class="text-3xl font-bold text-[#61629F] group-hover:text-white transition-colors">4</span>
                    </div>
                    <h4 class="text-xl font-bold text-navy-900 mb-3 group-hover:text-[#61629F] transition-colors">Launch & Support</h4>
                    <p class="text-gray-500 text-base leading-relaxed">
                        Deployment, testing, and ongoing maintenance with 24/7 support
                    </p>
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
    
    @keyframes pulse {
        0%, 100% { opacity: 0.1; transform: scale(1); }
        50% { opacity: 0.2; transform: scale(1.05); }
    }
    
    .animate-pulse-slow {
        animation: pulse-slow 2s ease-in-out infinite;
    }
    
    /* No rounded corners for consistency */
    .rounded-full, .rounded-2xl, .rounded-lg {
        border-radius: 0 !important;
    }
</style>