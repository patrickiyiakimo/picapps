<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Websites · ALTA Digital Agency</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
        }
        
        .font-display {
            font-family: 'Space Grotesk', 'Inter', system-ui, sans-serif;
        }
        
        a, button, div, img {
            border-radius: 0 !important;
        }
        
        .service-card {
            transition: all 0.4s cubic-bezier(0.2, 0.9, 0.4, 1.1);
        }
        
        .service-card:hover {
            transform: translateY(-6px);
        }
    </style>
</head>
<body class="bg-white">

    @include('layouts.navbar')

    <!-- Hero Section -->
    <section class="relative bg-black min-h-[500px] flex items-center">
        <div class="absolute inset-0 z-0 opacity-10">
            <div class="absolute top-0 right-0 w-96 h-96 bg-white/5 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 left-0 w-96 h-96 bg-white/5 rounded-full blur-3xl"></div>
        </div>
        
        <div class="relative z-10 max-w-7xl mx-auto px-5 lg:px-8 py-20">
            <div class="max-w-3xl">
               
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-6 font-display tracking-tight">
                    Websites That 
                    <span class="text-white/60">Drive Results</span>
                </h1>
                <p class="text-gray-400 text-lg md:text-xl leading-relaxed">
                    Professional, high-performance websites tailored to your business goals. From corporate sites to e-commerce platforms, we build digital experiences that convert.
                </p>
            </div>
        </div>
    </section>

    <!-- Services Overview -->
    <section class="py-20 md:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-5 lg:px-8">
            <div class="text-center mb-16">
                <div class="inline-flex items-center gap-2 border border-gray-200 bg-gray-50 px-4 py-2 mb-6">
                    <span class="w-1.5 h-1.5 bg-black"></span>
                    <span class="text-xs font-semibold uppercase tracking-wider text-gray-600">What We Build</span>
                </div>
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-black mb-4 font-display tracking-tight">
                    Comprehensive <span class="text-gray-400">Web Solutions</span>
                </h2>
                <div class="w-16 h-px bg-black mx-auto mb-6"></div>
                <p class="text-gray-500 max-w-2xl mx-auto text-base">
                    We build websites that are fast, secure, and optimized for conversions.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <!-- Corporate & Business -->
                <div class="service-card bg-white border border-gray-200 hover:border-black p-6 text-center">
                    <div class="w-14 h-14 bg-gray-100 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-7 h-7 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-black mb-2">Corporate & Business</h3>
                    <p class="text-gray-500 text-sm">Professional websites that establish credibility and showcase your brand.</p>
                </div>

                <!-- E-commerce Platforms -->
                <div class="service-card bg-white border border-gray-200 hover:border-black p-6 text-center">
                    <div class="w-14 h-14 bg-gray-100 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-7 h-7 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-1.5 1.5M17 13l1.5 1.5M9 21a2 2 0 100-4 2 2 0 000 4zm8 0a2 2 0 100-4 2 2 0 000 4z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-black mb-2">E-commerce Platforms</h3>
                    <p class="text-gray-500 text-sm">Online stores with seamless checkout and payment integration.</p>
                </div>

                <!-- Custom Web Applications -->
                <div class="service-card bg-white border border-gray-200 hover:border-black p-6 text-center">
                    <div class="w-14 h-14 bg-gray-100 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-7 h-7 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-black mb-2">Custom Web Applications</h3>
                    <p class="text-gray-500 text-sm">Tailored web apps with complex functionality and integrations.</p>
                </div>

                <!-- CMS Solutions -->
                <div class="service-card bg-white border border-gray-200 hover:border-black p-6 text-center">
                    <div class="w-14 h-14 bg-gray-100 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-7 h-7 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-black mb-2">CMS Solutions</h3>
                    <p class="text-gray-500 text-sm">Easy-to-manage content management systems for your team.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Tech Stack -->
    <section class="py-20 md:py-28 bg-gray-50">
        <div class="max-w-7xl mx-auto px-5 lg:px-8">
            <div class="text-center mb-16">
                <div class="inline-flex items-center gap-2 border border-gray-200 bg-white px-4 py-2 mb-6">
                    <span class="w-1.5 h-1.5 bg-black"></span>
                    <span class="text-xs font-semibold uppercase tracking-wider text-gray-600">Technologies</span>
                </div>
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-black mb-4 font-display tracking-tight">
                    Modern <span class="text-gray-400">Tech Stack</span>
                </h2>
                <div class="w-16 h-px bg-black mx-auto mb-6"></div>
                <p class="text-gray-500 max-w-2xl mx-auto text-base">
                    We build with the latest technologies for performance and scalability.
                </p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="bg-white border border-gray-200 hover:border-black transition-all duration-300 p-6 text-center">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg" alt="Laravel" class="w-16 h-16 mx-auto mb-3">
                    <h3 class="font-bold text-black">Laravel</h3>
                    <p class="text-xs text-gray-500 mt-1">PHP Framework</p>
                </div>
                <div class="bg-white border border-gray-200 hover:border-black transition-all duration-300 p-6 text-center">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" alt="React" class="w-16 h-16 mx-auto mb-3">
                    <h3 class="font-bold text-black">React</h3>
                    <p class="text-xs text-gray-500 mt-1">Frontend Library</p>
                </div>
                <div class="bg-white border border-gray-200 hover:border-black transition-all duration-300 p-6 text-center">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vuejs/vuejs-original.svg" alt="Vue.js" class="w-16 h-16 mx-auto mb-3">
                    <h3 class="font-bold text-black">Vue.js</h3>
                    <p class="text-xs text-gray-500 mt-1">JavaScript Framework</p>
                </div>
                <div class="bg-white border border-gray-200 hover:border-black transition-all duration-300 p-6 text-center">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/tailwindcss/tailwindcss-original.svg" alt="Tailwind CSS" class="w-16 h-16 mx-auto mb-3">
                    <h3 class="font-bold text-black">Tailwind CSS</h3>
                    <p class="text-xs text-gray-500 mt-1">Styling Framework</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="py-20 md:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-5 lg:px-8">
            <div class="text-center mb-16">
                <div class="inline-flex items-center gap-2 border border-gray-200 bg-gray-50 px-4 py-2 mb-6">
                    <span class="w-1.5 h-1.5 bg-black"></span>
                    <span class="text-xs font-semibold uppercase tracking-wider text-gray-600">How We Work</span>
                </div>
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-black mb-4 font-display tracking-tight">
                    Our Development <span class="text-gray-400">Process</span>
                </h2>
                <div class="w-16 h-px bg-black mx-auto mb-6"></div>
                <p class="text-gray-500 max-w-2xl mx-auto text-base">
                    A streamlined approach to deliver your website on time and on budget.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="text-center">
                    <div class="w-16 h-16 bg-black text-white text-2xl font-bold flex items-center justify-center mx-auto mb-4">1</div>
                    <h3 class="text-lg font-bold text-black mb-2">Discovery</h3>
                    <p class="text-gray-500 text-sm">Requirements gathering and planning</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-black text-white text-2xl font-bold flex items-center justify-center mx-auto mb-4">2</div>
                    <h3 class="text-lg font-bold text-black mb-2">Design</h3>
                    <p class="text-gray-500 text-sm">Wireframes and UI/UX design</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-black text-white text-2xl font-bold flex items-center justify-center mx-auto mb-4">3</div>
                    <h3 class="text-lg font-bold text-black mb-2">Development</h3>
                    <p class="text-gray-500 text-sm">Agile sprints and quality assurance</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-black text-white text-2xl font-bold flex items-center justify-center mx-auto mb-4">4</div>
                    <h3 class="text-lg font-bold text-black mb-2">Launch & Support</h3>
                    <p class="text-gray-500 text-sm">Deployment and ongoing maintenance</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Preview -->
    <section class="py-20 md:py-28 bg-gray-50">
        <div class="max-w-7xl mx-auto px-5 lg:px-8">
            <div class="text-center mb-16">
                <div class="inline-flex items-center gap-2 border border-gray-200 bg-white px-4 py-2 mb-6">
                    <span class="w-1.5 h-1.5 bg-black"></span>
                    <span class="text-xs font-semibold uppercase tracking-wider text-gray-600">Our Work</span>
                </div>
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-black mb-4 font-display tracking-tight">
                    Recent <span class="text-gray-400">Projects</span>
                </h2>
                <div class="w-16 h-px bg-black mx-auto mb-6"></div>
                <p class="text-gray-500 max-w-2xl mx-auto text-base">
                    See how we've helped businesses succeed online.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="group bg-white border border-gray-200 hover:border-black transition-all duration-300 overflow-hidden">
                    <div class="relative h-56 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                             alt="Corporate Website" 
                             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute top-3 left-3">
                            <span class="bg-black text-white text-xs px-2 py-1">Corporate</span>
                        </div>
                    </div>
                    <div class="p-5">
                        <h3 class="text-lg font-bold text-black mb-1">GlobalCorp</h3>
                        <p class="text-gray-500 text-sm">Enterprise corporate website with 215% lead increase.</p>
                    </div>
                </div>

                <div class="group bg-white border border-gray-200 hover:border-black transition-all duration-300 overflow-hidden">
                    <div class="relative h-56 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1472851294608-062f824d29cc?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                             alt="E-commerce Website" 
                             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute top-3 left-3">
                            <span class="bg-black text-white text-xs px-2 py-1">E-commerce</span>
                        </div>
                    </div>
                    <div class="p-5">
                        <h3 class="text-lg font-bold text-black mb-1">StyleStore</h3>
                        <p class="text-gray-500 text-sm">Fashion e-commerce with 312% sales growth.</p>
                    </div>
                </div>

                <div class="group bg-white border border-gray-200 hover:border-black transition-all duration-300 overflow-hidden">
                    <div class="relative h-56 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                             alt="Custom Web App" 
                             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute top-3 left-3">
                            <span class="bg-black text-white text-xs px-2 py-1">Web App</span>
                        </div>
                    </div>
                    <div class="p-5">
                        <h3 class="text-lg font-bold text-black mb-1">LearnApp</h3>
                        <p class="text-gray-500 text-sm">Learning platform with 50K+ active users.</p>
                    </div>
                </div>
            </div>

            <div class="text-center mt-10">
                <a href="/portfolio" class="inline-flex items-center justify-center gap-2 border border-black text-black px-8 py-3 font-semibold text-sm hover:bg-black hover:text-white transition-all duration-300">
                    <span>View All Projects</span>
                    <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="py-20 md:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-5 lg:px-8">
            <div class="text-center mb-16">
                <div class="inline-flex items-center gap-2 border border-gray-200 bg-gray-50 px-4 py-2 mb-6">
                    <span class="w-1.5 h-1.5 bg-black"></span>
                    <span class="text-xs font-semibold uppercase tracking-wider text-gray-600">Investment</span>
                </div>
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-black mb-4 font-display tracking-tight">
                    Simple, <span class="text-gray-400">Transparent Pricing</span>
                </h2>
                <div class="w-16 h-px bg-black mx-auto mb-6"></div>
                <p class="text-gray-500 max-w-2xl mx-auto text-base">
                    Flexible options to fit your budget and project needs.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                <div class="bg-white border border-gray-200 hover:border-black transition-all duration-300 p-6">
                    <h3 class="text-xl font-bold text-black">Starter Website</h3>
                    <p class="text-gray-500 text-sm mt-1">For small businesses</p>
                    <div class="mt-4">
                        <span class="text-4xl font-bold text-black">$3,500</span>
                        <span class="text-gray-500">+</span>
                    </div>
                    <ul class="space-y-3 mt-6 mb-8">
                        <li class="flex items-center gap-2 text-sm text-gray-600">✓ Up to 5 pages</li>
                        <li class="flex items-center gap-2 text-sm text-gray-600">✓ Responsive design</li>
                        <li class="flex items-center gap-2 text-sm text-gray-600">✓ SEO optimization</li>
                        <li class="flex items-center gap-2 text-sm text-gray-600">✓ Contact form</li>
                    </ul>
                    <a href="/contact" class="block w-full text-center border border-black text-black py-3 font-semibold text-sm hover:bg-black hover:text-white transition">Get Quote</a>
                </div>

                <div class="bg-white border-2 border-black hover:border-gray-400 transition-all duration-300 p-6 relative">
                    <div class="absolute -top-3 left-1/2 transform -translate-x-1/2 bg-black text-white px-4 py-1 text-xs font-semibold tracking-wide">POPULAR</div>
                    <h3 class="text-xl font-bold text-black">Business Website</h3>
                    <p class="text-gray-500 text-sm mt-1">For growing companies</p>
                    <div class="mt-4">
                        <span class="text-4xl font-bold text-black">$7,500</span>
                        <span class="text-gray-500">+</span>
                    </div>
                    <ul class="space-y-3 mt-6 mb-8">
                        <li class="flex items-center gap-2 text-sm text-gray-600">✓ Up to 15 pages</li>
                        <li class="flex items-center gap-2 text-sm text-gray-600">✓ Custom design</li>
                        <li class="flex items-center gap-2 text-sm text-gray-600">✓ CMS integration</li>
                        <li class="flex items-center gap-2 text-sm text-gray-600">✓ Analytics setup</li>
                        <li class="flex items-center gap-2 text-sm text-gray-600">✓ 3 months support</li>
                    </ul>
                    <a href="/contact" class="block w-full text-center bg-black text-white py-3 font-semibold text-sm hover:bg-gray-800 transition">Get Quote</a>
                </div>

                <div class="bg-white border border-gray-200 hover:border-black transition-all duration-300 p-6">
                    <h3 class="text-xl font-bold text-black">Enterprise</h3>
                    <p class="text-gray-500 text-sm mt-1">Custom solutions</p>
                    <div class="mt-4">
                        <span class="text-4xl font-bold text-black">Custom</span>
                    </div>
                    <ul class="space-y-3 mt-6 mb-8">
                        <li class="flex items-center gap-2 text-sm text-gray-600">✓ Unlimited pages</li>
                        <li class="flex items-center gap-2 text-sm text-gray-600">✓ Custom functionality</li>
                        <li class="flex items-center gap-2 text-sm text-gray-600">✓ API integrations</li>
                        <li class="flex items-center gap-2 text-sm text-gray-600">✓ Advanced security</li>
                        <li class="flex items-center gap-2 text-sm text-gray-600">✓ 12 months support</li>
                    </ul>
                    <a href="/contact" class="block w-full text-center border border-black text-black py-3 font-semibold text-sm hover:bg-black hover:text-white transition">Contact Sales</a>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 md:py-28 bg-gray-50">
        <div class="max-w-7xl mx-auto px-5 lg:px-8">
            <div class="text-center mb-16">
                <div class="inline-flex items-center gap-2 border border-gray-200 bg-white px-4 py-2 mb-6">
                    <span class="w-1.5 h-1.5 bg-black"></span>
                    <span class="text-xs font-semibold uppercase tracking-wider text-gray-600">FAQ</span>
                </div>
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-black mb-4 font-display tracking-tight">
                    Frequently Asked <span class="text-gray-400">Questions</span>
                </h2>
                <div class="w-16 h-px bg-black mx-auto mb-6"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <div>
                    <h3 class="font-semibold text-black mb-2">How long does website development take?</h3>
                    <p class="text-gray-500 text-sm">Typically 4-8 weeks depending on complexity. We'll provide a detailed timeline during consultation.</p>
                </div>
                <div>
                    <h3 class="font-semibold text-black mb-2">Do you offer ongoing maintenance?</h3>
                    <p class="text-gray-500 text-sm">Yes, we offer maintenance packages including updates, security patches, and backups.</p>
                </div>
                <div>
                    <h3 class="font-semibold text-black mb-2">Will my website be mobile-friendly?</h3>
                    <p class="text-gray-500 text-sm">Absolutely. All our websites are fully responsive and optimized for all devices.</p>
                </div>
                <div>
                    <h3 class="font-semibold text-black mb-2">Do you provide SEO services?</h3>
                    <p class="text-gray-500 text-sm">Yes, we offer SEO optimization as part of our development process and ongoing services.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-black">
        <div class="max-w-7xl mx-auto px-5 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-4 font-display tracking-tight">Ready to Build Your Website?</h2>
            <div class="w-16 h-px bg-white/30 mx-auto mb-6"></div>
            <p class="text-gray-400 mb-8 max-w-2xl mx-auto text-base">
                Let's discuss your vision and create a website that drives real results.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/contact" class="inline-flex items-center justify-center gap-2 bg-white text-black px-8 py-3.5 font-semibold text-sm hover:bg-gray-100 transition-all duration-300 group">
                    <span>Start Your Project</span>
                    <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>
                <a href="/contact" class="inline-flex items-center justify-center gap-2 border border-white/30 text-white px-8 py-3.5 font-semibold text-sm hover:bg-white/10 transition-all duration-300">
                    <span>Schedule a Consultation</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    @include('layouts.footer')
</body>
</html>