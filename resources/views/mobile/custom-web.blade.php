<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Web Applications - Alta Digital Agency</title>
    
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
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="inline-flex items-center gap-2 bg-emerald-500/20 backdrop-blur-sm text-emerald-300 px-4 py-2 mb-6 border border-emerald-500/30">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" stroke="currentColor" stroke-width="1.5"/>
                        </svg>
                        <span class="text-sm font-semibold uppercase tracking-wider">Custom Web Applications</span>
                    </div>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 font-display">
                        Build Powerful 
                        <span class="bg-gradient-to-r from-emerald-400 to-emerald-300 bg-clip-text text-transparent">Custom Web Apps</span>
                    </h1>
                    <p class="text-gray-300 text-lg mb-8 leading-relaxed">
                        Tailored web applications designed to solve your unique business challenges, scale with your growth, and give you a competitive edge.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="/contact" class="inline-flex items-center gap-2 bg-emerald-600 text-white px-6 py-3 font-semibold hover:bg-emerald-500 transition">
                            Start Your Project
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </a>
                        <a href="#pricing" class="inline-flex items-center gap-2 border border-white/30 text-white px-6 py-3 font-semibold hover:bg-white/10 transition">
                            View Pricing
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" 
                         alt="Custom Web Application Development" 
                         class="rounded-lg shadow-2xl">
                    <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-emerald-600/20 rounded-full filter blur-2xl"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tech Stack Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-navy-900 mb-4 font-display">Our Technology Stack</h2>
            <div class="w-20 h-1 bg-emerald-500 mx-auto"></div>
            <p class="text-gray-600 mt-6 max-w-2xl mx-auto">
                We use cutting-edge technologies to build scalable, secure, and high-performance web applications
            </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6">
            <!-- Laravel -->
            <div class="bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300 p-4 text-center">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg" alt="Laravel" class="w-12 h-12 mx-auto mb-3">
                <p class="font-semibold text-navy-900">Laravel</p>
                <p class="text-xs text-gray-500">Backend Framework</p>
            </div>

            <!-- React -->
            <div class="bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300 p-4 text-center">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" alt="React" class="w-12 h-12 mx-auto mb-3">
                <p class="font-semibold text-navy-900">React</p>
                <p class="text-xs text-gray-500">Frontend Library</p>
            </div>

            <!-- Vue.js -->
            <div class="bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300 p-4 text-center">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vuejs/vuejs-original.svg" alt="Vue.js" class="w-12 h-12 mx-auto mb-3">
                <p class="font-semibold text-navy-900">Vue.js</p>
                <p class="text-xs text-gray-500">Frontend Framework</p>
            </div>

            <!-- Node.js -->
            <div class="bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300 p-4 text-center">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg" alt="Node.js" class="w-12 h-12 mx-auto mb-3">
                <p class="font-semibold text-navy-900">Node.js</p>
                <p class="text-xs text-gray-500">JavaScript Runtime</p>
            </div>

            <!-- PostgreSQL -->
            <div class="bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300 p-4 text-center">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/postgresql/postgresql-original.svg" alt="PostgreSQL" class="w-12 h-12 mx-auto mb-3">
                <p class="font-semibold text-navy-900">PostgreSQL</p>
                <p class="text-xs text-gray-500">Database</p>
            </div>

            <!-- MongoDB -->
            <div class="bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300 p-4 text-center">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mongodb/mongodb-original.svg" alt="MongoDB" class="w-12 h-12 mx-auto mb-3">
                <p class="font-semibold text-navy-900">MongoDB</p>
                <p class="text-xs text-gray-500">NoSQL Database</p>
            </div>
        </div>
    </div>

    <!-- What We Build Section -->
    <div class="bg-gray-50 py-16 md:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-navy-900 mb-4 font-display">What We Can Build For You</h2>
                <div class="w-20 h-1 bg-emerald-500 mx-auto"></div>
                <p class="text-gray-600 mt-6 max-w-2xl mx-auto">
                    Custom solutions for every business need
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- SaaS Platforms -->
                <div class="bg-white p-6 border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300">
                    <div class="w-14 h-14 bg-emerald-100 flex items-center justify-center mb-4">
                        <svg class="w-7 h-7 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-navy-900 mb-2">SaaS Platforms</h3>
                    <p class="text-gray-500 text-sm">Subscription-based software solutions with multi-tenancy and billing integration.</p>
                </div>

                <!-- CRM Systems -->
                <div class="bg-white p-6 border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300">
                    <div class="w-14 h-14 bg-emerald-100 flex items-center justify-center mb-4">
                        <svg class="w-7 h-7 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-navy-900 mb-2">CRM Systems</h3>
                    <p class="text-gray-500 text-sm">Custom customer relationship management software tailored to your sales process.</p>
                </div>

                <!-- ERP Solutions -->
                <div class="bg-white p-6 border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300">
                    <div class="w-14 h-14 bg-emerald-100 flex items-center justify-center mb-4">
                        <svg class="w-7 h-7 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-navy-900 mb-2">ERP Solutions</h3>
                    <p class="text-gray-500 text-sm">Enterprise resource planning systems to streamline your operations.</p>
                </div>

                <!-- Dashboard & Analytics -->
                <div class="bg-white p-6 border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300">
                    <div class="w-14 h-14 bg-emerald-100 flex items-center justify-center mb-4">
                        <svg class="w-7 h-7 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-navy-900 mb-2">Dashboard & Analytics</h3>
                    <p class="text-gray-500 text-sm">Real-time data visualization and business intelligence tools.</p>
                </div>

                <!-- API Development -->
                <div class="bg-white p-6 border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300">
                    <div class="w-14 h-14 bg-emerald-100 flex items-center justify-center mb-4">
                        <svg class="w-7 h-7 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-navy-900 mb-2">API Development</h3>
                    <p class="text-gray-500 text-sm">RESTful APIs and microservices for seamless integrations.</p>
                </div>

                <!-- Workflow Automation -->
                <div class="bg-white p-6 border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300">
                    <div class="w-14 h-14 bg-emerald-100 flex items-center justify-center mb-4">
                        <svg class="w-7 h-7 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-navy-900 mb-2">Workflow Automation</h3>
                    <p class="text-gray-500 text-sm">Automate business processes and increase operational efficiency.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Development Process -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-navy-900 mb-4 font-display">Our Development Process</h2>
            <div class="w-20 h-1 bg-emerald-500 mx-auto"></div>
            <p class="text-gray-600 mt-6 max-w-2xl mx-auto">
                A proven methodology to deliver successful web applications
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <div class="text-center">
                <div class="w-16 h-16 bg-emerald-600 text-white text-2xl font-bold flex items-center justify-center mx-auto mb-4">1</div>
                <h3 class="text-lg font-bold text-navy-900 mb-2">Discovery</h3>
                <p class="text-gray-500 text-sm">Requirements gathering and project planning</p>
            </div>
            <div class="text-center">
                <div class="w-16 h-16 bg-emerald-600 text-white text-2xl font-bold flex items-center justify-center mx-auto mb-4">2</div>
                <h3 class="text-lg font-bold text-navy-900 mb-2">Design</h3>
                <p class="text-gray-500 text-sm">UI/UX design and prototyping</p>
            </div>
            <div class="text-center">
                <div class="w-16 h-16 bg-emerald-600 text-white text-2xl font-bold flex items-center justify-center mx-auto mb-4">3</div>
                <h3 class="text-lg font-bold text-navy-900 mb-2">Development</h3>
                <p class="text-gray-500 text-sm">Agile development and regular sprints</p>
            </div>
            <div class="text-center">
                <div class="w-16 h-16 bg-emerald-600 text-white text-2xl font-bold flex items-center justify-center mx-auto mb-4">4</div>
                <h3 class="text-lg font-bold text-navy-900 mb-2">Deployment</h3>
                <p class="text-gray-500 text-sm">Testing, launch, and ongoing support</p>
            </div>
        </div>
    </div>

    <!-- Pricing Section -->
    <div id="pricing" class="bg-gray-50 py-16 md:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-navy-900 mb-4 font-display">Custom Web App Pricing</h2>
                <div class="w-20 h-1 bg-emerald-500 mx-auto"></div>
                <p class="text-gray-600 mt-6 max-w-2xl mx-auto">
                    Flexible pricing models to fit your budget and requirements
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Starter App -->
                <div class="bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-xl transition-all duration-300">
                    <div class="p-6 border-b border-gray-100">
                        <h3 class="text-xl font-bold text-navy-900">Starter App</h3>
                        <p class="text-gray-500 text-sm mt-1">Perfect for MVPs and small applications</p>
                        <div class="mt-4">
                            <span class="text-4xl font-bold text-navy-900">$8,000</span>
                            <span class="text-gray-500">+</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-center gap-2 text-sm">
                                <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                            Up to 5 core features
                            </li>
                            <li class="flex items-center gap-2 text-sm">
                                <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                            Basic UI/UX design
                            </li>
                            <li class="flex items-center gap-2 text-sm">
                                <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                            Database design
                            </li>
                            <li class="flex items-center gap-2 text-sm">
                                <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                            User authentication
                            </li>
                            <li class="flex items-center gap-2 text-sm">
                                <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                            3 months support
                            </li>
                        </ul>
                        <a href="/contact" class="block w-full text-center border border-emerald-600 text-emerald-600 py-3 font-semibold hover:bg-emerald-600 hover:text-white transition">
                            Get Quote
                        </a>
                    </div>
                </div>

                <!-- Professional App -->
                <div class="bg-white border-2 border-emerald-500 hover:shadow-xl transition-all duration-300 relative">
                    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2 bg-emerald-600 text-white px-4 py-1 text-sm font-semibold">
                        MOST POPULAR
                    </div>
                    <div class="p-6 border-b border-gray-100">
                        <h3 class="text-xl font-bold text-navy-900">Professional App</h3>
                        <p class="text-gray-500 text-sm mt-1">For growing businesses</p>
                        <div class="mt-4">
                            <span class="text-4xl font-bold text-navy-900">$15,000</span>
                            <span class="text-gray-500">+</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-center gap-2 text-sm">
                                <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                            Up to 15 core features
                            </li>
                            <li class="flex items-center gap-2 text-sm">
                                <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                            Custom UI/UX design
                            </li>
                            <li class="flex items-center gap-2 text-sm">
                                <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                            Advanced database design
                            </li>
                            <li class="flex items-center gap-2 text-sm">
                                <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                            API integrations
                            </li>
                            <li class="flex items-center gap-2 text-sm">
                                <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                            Performance optimization
                            </li>
                            <li class="flex items-center gap-2 text-sm">
                                <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                            6 months support
                            </li>
                        </ul>
                        <a href="/contact" class="block w-full text-center bg-emerald-600 text-white py-3 font-semibold hover:bg-emerald-500 transition">
                            Get Quote
                        </a>
                    </div>
                </div>

                <!-- Enterprise App -->
                <div class="bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-xl transition-all duration-300">
                    <div class="p-6 border-b border-gray-100">
                        <h3 class="text-xl font-bold text-navy-900">Enterprise</h3>
                        <p class="text-gray-500 text-sm mt-1">For large-scale applications</p>
                        <div class="mt-4">
                            <span class="text-4xl font-bold text-navy-900">Custom</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-center gap-2 text-sm">
                                <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                            Unlimited features
                            </li>
                            <li class="flex items-center gap-2 text-sm">
                                <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                            Enterprise-grade security
                            </li>
                            <li class="flex items-center gap-2 text-sm">
                                <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                            Scalable architecture
                            </li>
                            <li class="flex items-center gap-2 text-sm">
                                <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                            Dedicated team
                            </li>
                            <li class="flex items-center gap-2 text-sm">
                                <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                            24/7 priority support
                            </li>
                            <li class="flex items-center gap-2 text-sm">
                                <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                            SLA guaranteed
                            </li>
                        </ul>
                        <a href="/contact" class="block w-full text-center border border-emerald-600 text-emerald-600 py-3 font-semibold hover:bg-emerald-600 hover:text-white transition">
                            Contact Sales
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Showcase -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-navy-900 mb-4 font-display">Custom Web App Success Stories</h2>
            <div class="w-20 h-1 bg-emerald-500 mx-auto"></div>
            <p class="text-gray-600 mt-6 max-w-2xl mx-auto">
                See how we've helped businesses streamline operations with custom solutions
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Project 1 -->
            <div class="group bg-white overflow-hidden border border-gray-200 hover:border-emerald-300 hover:shadow-xl transition-all duration-300">
                <div class="relative h-56 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="SaaS Platform" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-navy-900/60 to-transparent"></div>
                    <div class="absolute bottom-4 left-4">
                        <span class="bg-emerald-600 text-white text-xs px-3 py-1">SaaS Platform</span>
                    </div>
                </div>
                <div class="p-5">
                    <h3 class="font-bold text-navy-900 mb-2">Analytics Dashboard</h3>
                    <p class="text-gray-500 text-sm mb-3">Real-time data visualization for enterprise clients</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-1">
                            <span class="text-yellow-400">★★★★★</span>
                            <span class="text-xs text-gray-500">(5.0)</span>
                        </div>
                        <a href="#" class="text-emerald-600 text-sm font-semibold">View Case →</a>
                    </div>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="group bg-white overflow-hidden border border-gray-200 hover:border-emerald-300 hover:shadow-xl transition-all duration-300">
                <div class="relative h-56 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="CRM System" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-navy-900/60 to-transparent"></div>
                    <div class="absolute bottom-4 left-4">
                        <span class="bg-emerald-600 text-white text-xs px-3 py-1">CRM Platform</span>
                    </div>
                </div>
                <div class="p-5">
                    <h3 class="font-bold text-navy-900 mb-2">SalesFlow CRM</h3>
                    <p class="text-gray-500 text-sm mb-3">Custom CRM that increased sales efficiency by 156%</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-1">
                            <span class="text-yellow-400">★★★★★</span>
                            <span class="text-xs text-gray-500">(4.9)</span>
                        </div>
                        <a href="#" class="text-emerald-600 text-sm font-semibold">View Case →</a>
                    </div>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="group bg-white overflow-hidden border border-gray-200 hover:border-emerald-300 hover:shadow-xl transition-all duration-300">
                <div class="relative h-56 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="ERP System" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-navy-900/60 to-transparent"></div>
                    <div class="absolute bottom-4 left-4">
                        <span class="bg-emerald-600 text-white text-xs px-3 py-1">ERP Solution</span>
                    </div>
                </div>
                <div class="p-5">
                    <h3 class="font-bold text-navy-900 mb-2">InventoryPro ERP</h3>
                    <p class="text-gray-500 text-sm mb-3">Streamlined operations for manufacturing client</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-1">
                            <span class="text-yellow-400">★★★★★</span>
                            <span class="text-xs text-gray-500">(5.0)</span>
                        </div>
                        <a href="#" class="text-emerald-600 text-sm font-semibold">View Case →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FAQ Section -->
    <div class="bg-gray-50 py-16 md:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-navy-900 mb-4 font-display">Frequently Asked Questions</h2>
                <div class="w-20 h-1 bg-emerald-500 mx-auto"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <div>
                    <h3 class="font-semibold text-navy-900 mb-2">How long does custom web app development take?</h3>
                    <p class="text-gray-500 text-sm">Typically 3-6 months depending on complexity. We'll provide a detailed timeline during consultation.</p>
                </div>
                <div>
                    <h3 class="font-semibold text-navy-900 mb-2">Do you offer post-launch support?</h3>
                    <p class="text-gray-500 text-sm">Yes, we provide ongoing maintenance and support packages tailored to your needs.</p>
                </div>
                <div>
                    <h3 class="font-semibold text-navy-900 mb-2">Can you integrate with existing systems?</h3>
                    <p class="text-gray-500 text-sm">Absolutely! We specialize in API integrations with third-party services and legacy systems.</p>
                </div>
                <div>
                    <h3 class="font-semibold text-navy-900 mb-2">Do I own the source code?</h3>
                    <p class="text-gray-500 text-sm">Yes, you have full ownership of all source code and intellectual property.</p>
                </div>
                <div>
                    <h3 class="font-semibold text-navy-900 mb-2">What about data security?</h3>
                    <p class="text-gray-500 text-sm">We implement industry-standard security practices including encryption, secure authentication, and regular audits.</p>
                </div>
                <div>
                    <h3 class="font-semibold text-navy-900 mb-2">Can you scale the application as we grow?</h3>
                    <p class="text-gray-500 text-sm">Yes, we build scalable architecture that can handle increasing users and data volume.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-gradient-to-r from-emerald-600 to-emerald-500 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4 font-display">Ready to Build Your Custom Web App?</h2>
            <p class="text-emerald-100 mb-8 max-w-2xl mx-auto">
                Let's discuss your requirements and turn your idea into a powerful web application.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/contact" class="inline-flex items-center gap-2 bg-white text-emerald-600 px-8 py-3 font-semibold hover:bg-gray-50 transition-all duration-300 transform hover:scale-105">
                    Get a Free Quote
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>
                <a href="/contact" class="inline-flex items-center gap-2 border-2 border-white text-white px-8 py-3 font-semibold hover:bg-white/10 transition-all duration-300">
                    Schedule a Consultation
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>

    @include('layouts.footer')
</body>
</html>