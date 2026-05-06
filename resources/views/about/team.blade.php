<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Alta Digital Agency</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Bricolage+Grotesque:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white font-sans">
    
    @include('layouts.navbar')

    <!-- Hero Section -->
    <div class="relative bg-gradient-to-br from-navy-900 to-navy-800 overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-bl from-emerald-600/20 to-transparent"></div>
            <div class="absolute bottom-0 left-0 w-1/2 h-full bg-gradient-to-tr from-emerald-600/10 to-transparent"></div>
            <svg class="absolute bottom-0 left-0 w-full h-32 text-white" viewBox="0 0 1200 120" preserveAspectRatio="none" fill="currentColor">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"></path>
            </svg>
        </div>
        
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 md:py-28">
            <div class="max-w-3xl">
                <div class="inline-flex items-center gap-2 bg-emerald-500/20 backdrop-blur-sm text-emerald-300 px-4 py-2 mb-6 border border-emerald-500/30">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-sm font-semibold uppercase tracking-wider">Behind Alta</span>
                </div>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 font-display">
                    Crafting Digital Excellence
                    <span class="bg-gradient-to-r from-emerald-400 to-emerald-300 bg-clip-text text-transparent">With Passion & Precision</span>
                </h1>
                <p class="text-gray-300 text-lg md:text-xl leading-relaxed">
                    I'm a solo founder dedicated to delivering high-quality digital solutions with a personal touch.
                </p>
            </div>
        </div>
    </div>

    <!-- Founder Profile Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-start">
            
            <!-- Left Side - Founder Image -->
            <div class="relative">
                <div class="relative rounded-lg overflow-hidden shadow-2xl">
                    <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Founder - Alta Digital Agency" 
                         class="w-full h-auto object-cover">
                    <div class="absolute inset-0 bg-gradient-to-tr from-emerald-600/20 to-transparent"></div>
                </div>
                <div class="absolute -bottom-6 -left-6 w-32 h-32 bg-emerald-600 rounded-full opacity-20 blur-2xl -z-10"></div>
                <div class="absolute -top-6 -right-6 w-32 h-32 bg-emerald-600 rounded-full opacity-20 blur-2xl -z-10"></div>
            </div>

            <!-- Right Side - Founder Bio -->
            <div>
                <div class="inline-flex items-center gap-2 bg-emerald-50 text-emerald-600 px-4 py-2 mb-6 border border-emerald-200">
                    <span class="text-xs font-semibold uppercase tracking-wider">Founder & Lead Developer</span>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-navy-900 mb-4 font-display">
                    Hi, I'm <span class="text-emerald-600">[Your Name]</span>
                </h2>
                <p class="text-gray-600 mb-4 leading-relaxed">
                    I'm a full-stack developer and designer with over [X] years of experience building digital products that make a difference. I founded Alta to bring enterprise-level quality to businesses of all sizes.
                </p>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    My approach is simple: understand your vision deeply, communicate transparently, and deliver exceptional results on time. Every project gets my full attention and expertise.
                </p>
                
                <div class="grid grid-cols-2 gap-4 mb-6">
                    <div>
                        <div class="text-2xl font-bold text-emerald-600">500+</div>
                        <p class="text-xs text-gray-500">Projects Delivered</p>
                    </div>
                    <div>
                        <div class="text-2xl font-bold text-emerald-600">100%</div>
                        <p class="text-xs text-gray-500">Client Satisfaction</p>
                    </div>
                    <div>
                        <div class="text-2xl font-bold text-emerald-600">24/7</div>
                        <p class="text-xs text-gray-500">Direct Support</p>
                    </div>
                    <div>
                        <div class="text-2xl font-bold text-emerald-600">10+</div>
                        <p class="text-xs text-gray-500">Years Experience</p>
                    </div>
                </div>

                <div class="flex gap-4">
                    <a href="/contact" class="inline-flex items-center gap-2 bg-emerald-600 text-white px-6 py-2 font-semibold hover:bg-emerald-500 transition">
                        Let's Connect
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a>
                    <a href="#" class="inline-flex items-center gap-2 border border-gray-300 text-gray-700 px-6 py-2 hover:border-emerald-500 hover:text-emerald-600 transition">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                        </svg>
                        LinkedIn
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- My Skills & Expertise -->
    <div class="bg-gray-50 py-16 md:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <div class="inline-flex items-center gap-2 bg-emerald-50 text-emerald-600 px-4 py-2 mb-6 border border-emerald-200">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-sm font-semibold uppercase tracking-wider">My Expertise</span>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-navy-900 mb-4 font-display">
                    What I Bring to the Table
                </h2>
                <div class="w-20 h-1 bg-emerald-500 mx-auto"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-6 border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300">
                    <div class="w-12 h-12 bg-emerald-100 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-navy-900 mb-2">Web Development</h3>
                    <p class="text-gray-600 text-sm">Custom websites, e-commerce platforms, and web applications built with Laravel, React, and modern technologies.</p>
                </div>

                <div class="bg-white p-6 border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300">
                    <div class="w-12 h-12 bg-emerald-100 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-navy-900 mb-2">Mobile App Development</h3>
                    <p class="text-gray-600 text-sm">Native and cross-platform mobile apps for iOS and Android using Flutter and React Native.</p>
                </div>

                <div class="bg-white p-6 border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300">
                    <div class="w-12 h-12 bg-emerald-100 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-navy-900 mb-2">UI/UX Design</h3>
                    <p class="text-gray-600 text-sm">Beautiful, intuitive designs in Figma that delight users and drive engagement.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- My Approach / Work Philosophy -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <div class="inline-flex items-center gap-2 bg-emerald-50 text-emerald-600 px-4 py-2 mb-6 border border-emerald-200">
                    <span class="text-xs font-semibold uppercase tracking-wider">How I Work</span>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-navy-900 mb-6 font-display">
                    A Solo Founder, But Never Alone in Your Success
                </h2>
                <p class="text-gray-600 mb-4 leading-relaxed">
                    When you work with me, you get direct access to the person building your project. No project managers, no layers of communication — just you and me working together to bring your vision to life.
                </p>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    I partner with trusted specialists when needed (for illustration, complex animation, or specialized services), but I remain your single point of contact throughout the entire process.
                </p>
                
                <div class="space-y-4">
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-emerald-600 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                        </svg>
                        <div>
                            <h4 class="font-semibold text-navy-900">Direct Communication</h4>
                            <p class="text-sm text-gray-500">You talk directly to the person building your project.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-emerald-600 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                        </svg>
                        <div>
                            <h4 class="font-semibold text-navy-900">Quality Assurance</h4>
                            <p class="text-sm text-gray-500">Every line of code is written by me, ensuring consistency and quality.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-emerald-600 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                        </svg>
                        <div>
                            <h4 class="font-semibold text-navy-900">Partner Network</h4>
                            <p class="text-sm text-gray-500">Access to vetted specialists for specialized needs when required.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative">
                <div class="bg-gradient-to-br from-emerald-50 to-white border border-emerald-100 p-8">
                    <svg class="w-12 h-12 text-emerald-600 mb-4" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M4.583 17.321C3.553 16.227 3 15 3 13.011c0-3.5 2.457-6.637 6.03-8.188.5-.217 1.088-.152 1.195.152.107.304.072.636-.105.882-2.064 2.823-1.506 5.415-.438 7.114.432.716.942 1.332 1.535 1.848.183.159.288.388.288.62 0 .453-.366.82-.818.82H5.745c-.33 0-.64-.126-.872-.334l-.29-.278z"/>
                    </svg>
                    <p class="text-gray-700 italic mb-4">
                        "I don't believe in cookie-cutter solutions. Every project gets my full attention, creativity, and technical expertise."
                    </p>
                    <p class="font-semibold text-navy-900">— [Your Name]</p>
                    <p class="text-xs text-gray-500">Founder, Alta</p>
                </div>
                <div class="absolute -bottom-4 -right-4 w-32 h-32 bg-emerald-600/10 rounded-full -z-10"></div>
            </div>
        </div>
    </div>

    <!-- Trust Indicators - Client Logos / Testimonials -->
    <div class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10">
                <h2 class="text-2xl md:text-3xl font-bold text-navy-900 mb-2 font-display">
                    Trusted by Businesses Worldwide
                </h2>
                <div class="w-16 h-0.5 bg-emerald-500 mx-auto mb-6"></div>
                <p class="text-gray-600">Join 500+ satisfied clients who've trusted me with their digital projects</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mb-12">
                <div class="text-center">
                    <div class="text-2xl font-bold text-emerald-600">★★★★★</div>
                    <p class="text-sm text-gray-600 mt-1">5.0 Rating</p>
                </div>
                <div class="text-center">
                    <div class="text-2xl font-bold text-emerald-600">100+</div>
                    <p class="text-sm text-gray-600 mt-1">5-Star Reviews</p>
                </div>
                <div class="text-center">
                    <div class="text-2xl font-bold text-emerald-600">40+</div>
                    <p class="text-sm text-gray-600 mt-1">Repeat Clients</p>
                </div>
                <div class="text-center">
                    <div class="text-2xl font-bold text-emerald-600">15+</div>
                    <p class="text-sm text-gray-600 mt-1">Countries Served</p>
                </div>
            </div>

            <!-- Testimonial -->
            <div class="max-w-2xl mx-auto text-center">
                <svg class="w-10 h-10 text-emerald-400 mx-auto mb-4" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                </svg>
                <p class="text-gray-600 italic mb-4">
                    "Working with [Your Name] was a game-changer for our business. The attention to detail and commitment to quality is unmatched."
                </p>
                <p class="font-semibold text-navy-900">— Client Name</p>
                <p class="text-xs text-gray-500">CEO, Company Name</p>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-20">
        <div class="bg-gradient-to-r from-emerald-600 to-emerald-500 p-8 md:p-12 text-center">
            <h2 class="text-2xl md:text-3xl font-bold text-white mb-4 font-display">
                Ready to Work Together?
            </h2>
            <p class="text-emerald-100 mb-8 max-w-2xl mx-auto">
                Let's discuss your project. I respond within 24 hours.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/contact" class="inline-flex items-center gap-2 bg-white text-emerald-600 px-8 py-3 font-semibold hover:bg-gray-50 transition-all duration-300 transform hover:scale-105">
                    Start a Conversation
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>
                <a href="/portfolio" class="inline-flex items-center gap-2 border-2 border-white text-white px-8 py-3 font-semibold hover:bg-white/10 transition-all duration-300">
                    View My Work
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>

    @include('layouts.footer')
</body>
</html>