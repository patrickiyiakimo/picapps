<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partners - Alta Digital Agency</title>
    
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
                        <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z"/>
                    </svg>
                    <span class="text-sm font-semibold uppercase tracking-wider">Strategic Alliances</span>
                </div>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 font-display">
                    Let's Build Something
                    <span class="bg-gradient-to-r from-emerald-400 to-emerald-300 bg-clip-text text-transparent">Greater Together</span>
                </h1>
                <p class="text-gray-300 text-lg md:text-xl leading-relaxed">
                    We partner with innovative businesses to deliver exceptional digital solutions and create mutual growth.
                </p>
            </div>
        </div>
    </div>

    <!-- Partnership Philosophy -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
        <div class="text-center mb-12">
            <div class="inline-flex items-center gap-2 bg-emerald-50 text-emerald-600 px-4 py-2 mb-6 border border-emerald-200">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"/>
                </svg>
                <span class="text-sm font-semibold uppercase tracking-wider">Our Philosophy</span>
            </div>
            <h2 class="text-3xl md:text-4xl font-bold text-navy-900 mb-4 font-display">
                Better <span class="text-emerald-600">Together</span>
            </h2>
            <div class="w-20 h-1 bg-emerald-500 mx-auto"></div>
            <p class="text-gray-600 mt-6 max-w-2xl mx-auto">
                We believe in the power of collaboration. Great partnerships create exceptional outcomes for everyone involved.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center p-6 border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300">
                <div class="w-16 h-16 bg-emerald-100 flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-navy-900 mb-2">Shared Vision</h3>
                <p class="text-gray-500 text-sm">We partner with businesses that share our commitment to quality and innovation.</p>
            </div>
            <div class="text-center p-6 border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300">
                <div class="w-16 h-16 bg-emerald-100 flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-navy-900 mb-2">Mutual Growth</h3>
                <p class="text-gray-500 text-sm">We succeed when our partners succeed. Your growth is our priority.</p>
            </div>
            <div class="text-center p-6 border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300">
                <div class="w-16 h-16 bg-emerald-100 flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-navy-900 mb-2">Trust & Transparency</h3>
                <p class="text-gray-500 text-sm">Open communication and honest dealings are at the core of every partnership.</p>
            </div>
        </div>
    </div>

    <!-- Types of Partnerships -->
    <div class="bg-gray-50 py-16 md:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <div class="inline-flex items-center gap-2 bg-emerald-50 text-emerald-600 px-4 py-2 mb-6 border border-emerald-200">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5zm0 2h10v7h-2l-1 2H8l-1-2H5V5z"/>
                    </svg>
                    <span class="text-sm font-semibold uppercase tracking-wider">Partner With Us</span>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-navy-900 mb-4 font-display">
                    Ways to <span class="text-emerald-600">Collaborate</span>
                </h2>
                <div class="w-20 h-1 bg-emerald-500 mx-auto"></div>
                <p class="text-gray-600 mt-6 max-w-2xl mx-auto">
                    We offer flexible partnership models tailored to your business needs.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Technology Partners -->
                <div class="bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-xl transition-all duration-300">
                    <div class="p-6">
                        <div class="w-12 h-12 bg-emerald-100 flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-navy-900 mb-2">Technology Partners</h3>
                        <p class="text-gray-500 text-sm mb-4">Cloud providers, hosting companies, and software vendors.</p>
                        <ul class="space-y-2 text-sm text-gray-600 mb-6">
                            <li class="flex items-center gap-2">✓ Joint solution development</li>
                            <li class="flex items-center gap-2">✓ Co-marketing opportunities</li>
                            <li class="flex items-center gap-2">✓ Technical integrations</li>
                            <li class="flex items-center gap-2">✓ Revenue sharing</li>
                        </ul>
                        <a href="#contact" class="inline-flex items-center gap-1 text-emerald-600 font-semibold text-sm hover:text-emerald-500">
                            Learn More
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Agency Partners -->
                <div class="bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-xl transition-all duration-300">
                    <div class="p-6">
                        <div class="w-12 h-12 bg-emerald-100 flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21H5a2 2 0 01-2-2V5a2 2 0 012-2h11l5 5v11a2 2 0 01-2 2z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-navy-900 mb-2">Agency Partners</h3>
                        <p class="text-gray-500 text-sm mb-4">Design studios, marketing agencies, and consultants.</p>
                        <ul class="space-y-2 text-sm text-gray-600 mb-6">
                            <li class="flex items-center gap-2">✓ White-label development</li>
                            <li class="flex items-center gap-2">✓ Staff augmentation</li>
                            <li class="flex items-center gap-2">✓ Project overflow support</li>
                            <li class="flex items-center gap-2">✓ Competitive referral fees</li>
                        </ul>
                        <a href="#contact" class="inline-flex items-center gap-1 text-emerald-600 font-semibold text-sm hover:text-emerald-500">
                            Learn More
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Referral Partners -->
                <div class="bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-xl transition-all duration-300">
                    <div class="p-6">
                        <div class="w-12 h-12 bg-emerald-100 flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-navy-900 mb-2">Referral Partners</h3>
                        <p class="text-gray-500 text-sm mb-4">Freelancers, consultants, and industry professionals.</p>
                        <ul class="space-y-2 text-sm text-gray-600 mb-6">
                            <li class="flex items-center gap-2">✓ Generous commission structure</li>
                            <li class="flex items-center gap-2">✓ Recurring referral income</li>
                            <li class="flex items-center gap-2">✓ Marketing support</li>
                            <li class="flex items-center gap-2">✓ Dedicated partner manager</li>
                        </ul>
                        <a href="#contact" class="inline-flex items-center gap-1 text-emerald-600 font-semibold text-sm hover:text-emerald-500">
                            Learn More
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Our Current Partners -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
        <div class="text-center mb-12">
            <div class="inline-flex items-center gap-2 bg-emerald-50 text-emerald-600 px-4 py-2 mb-6 border border-emerald-200">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a4.5 4.5 0 013.64-3.64 7.5 7.5 0 00-3.64 3.64zM16.332 8.027a7.5 7.5 0 00-3.64-3.64 4.5 4.5 0 013.64 3.64zM8.5 12a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z"/>
                </svg>
                <span class="text-sm font-semibold uppercase tracking-wider">Trusted Partners</span>
            </div>
            <h2 class="text-3xl md:text-4xl font-bold text-navy-900 mb-4 font-display">
                Who We Work With
            </h2>
            <div class="w-20 h-1 bg-emerald-500 mx-auto"></div>
            <p class="text-gray-600 mt-6 max-w-2xl mx-auto">
                Proud to collaborate with industry-leading organizations.
            </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-8 items-center">
            <!-- Partner Logo Placeholders -->
            <div class="grayscale hover:grayscale-0 transition-all duration-300">
                <div class="bg-gray-100 p-4 text-center">
                    <p class="text-gray-400 text-sm">Partner 1</p>
                </div>
            </div>
            <div class="grayscale hover:grayscale-0 transition-all duration-300">
                <div class="bg-gray-100 p-4 text-center">
                    <p class="text-gray-400 text-sm">Partner 2</p>
                </div>
            </div>
            <div class="grayscale hover:grayscale-0 transition-all duration-300">
                <div class="bg-gray-100 p-4 text-center">
                    <p class="text-gray-400 text-sm">Partner 3</p>
                </div>
            </div>
            <div class="grayscale hover:grayscale-0 transition-all duration-300">
                <div class="bg-gray-100 p-4 text-center">
                    <p class="text-gray-400 text-sm">Partner 4</p>
                </div>
            </div>
            <div class="grayscale hover:grayscale-0 transition-all duration-300">
                <div class="bg-gray-100 p-4 text-center">
                    <p class="text-gray-400 text-sm">Partner 5</p>
                </div>
            </div>
            <div class="grayscale hover:grayscale-0 transition-all duration-300">
                <div class="bg-gray-100 p-4 text-center">
                    <p class="text-gray-400 text-sm">Partner 6</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Why Partner With Us -->
    <div class="bg-gradient-to-r from-emerald-600 to-emerald-500 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center text-white mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 font-display">Why Partner With Alta?</h2>
                <div class="w-20 h-1 bg-white mx-auto"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="text-3xl font-bold mb-2">500+</div>
                    <p class="text-emerald-100 text-sm">Successful Projects</p>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold mb-2">98%</div>
                    <p class="text-emerald-100 text-sm">Client Satisfaction</p>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold mb-2">24/7</div>
                    <p class="text-emerald-100 text-sm">Partner Support</p>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold mb-2">40+</div>
                    <p class="text-emerald-100 text-sm">Active Partnerships</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonials -->
    <div class="bg-gray-50 py-16 md:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <div class="inline-flex items-center gap-2 bg-emerald-50 text-emerald-600 px-4 py-2 mb-6 border border-emerald-200">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a4.5 4.5 0 013.64-3.64 7.5 7.5 0 00-3.64 3.64zM16.332 8.027a7.5 7.5 0 00-3.64-3.64 4.5 4.5 0 013.64 3.64zM8.5 12a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z"/>
                    </svg>
                    <span class="text-sm font-semibold uppercase tracking-wider">Partner Success</span>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-navy-900 mb-4 font-display">
                    What Our Partners Say
                </h2>
                <div class="w-20 h-1 bg-emerald-500 mx-auto"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white p-6 border border-gray-200">
                    <svg class="w-8 h-8 text-emerald-400 mb-4" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                    </svg>
                    <p class="text-gray-600 mb-4 italic">
                        "Partnering with Alta has been transformative for our agency. Their technical expertise and reliability are unmatched."
                    </p>
                    <p class="font-semibold text-navy-900">— Sarah Johnson</p>
                    <p class="text-xs text-gray-500">Creative Director, Design Studio</p>
                </div>
                <div class="bg-white p-6 border border-gray-200">
                    <svg class="w-8 h-8 text-emerald-400 mb-4" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                    </svg>
                    <p class="text-gray-600 mb-4 italic">
                        "The referral program is fantastic. Alta delivers quality work every time, and our clients love them."
                    </p>
                    <p class="font-semibold text-navy-900">— Michael Chen</p>
                    <p class="text-xs text-gray-500">Independent Consultant</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Partner Benefits Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <div class="inline-flex items-center gap-2 bg-emerald-50 text-emerald-600 px-4 py-2 mb-6 border border-emerald-200">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5zm0 2h10v7h-2l-1 2H8l-1-2H5V5z"/>
                    </svg>
                    <span class="text-sm font-semibold uppercase tracking-wider">Partner Benefits</span>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-navy-900 mb-6 font-display">
                    What You Get as a Partner
                </h2>
                <div class="space-y-4 mb-8">
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-emerald-600 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                        </svg>
                        <div>
                            <h4 class="font-semibold text-navy-900">Dedicated Support</h4>
                            <p class="text-sm text-gray-500">Priority access to our team for all your questions and needs.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-emerald-600 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                        </svg>
                        <div>
                            <h4 class="font-semibold text-navy-900">Marketing Support</h4>
                            <p class="text-sm text-gray-500">Co-branded materials, case studies, and joint promotion opportunities.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-emerald-600 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                        </svg>
                        <div>
                            <h4 class="font-semibold text-navy-900">Training & Resources</h4>
                            <p class="text-sm text-gray-500">Access to technical training, documentation, and best practices.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-emerald-600 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                        </svg>
                        <div>
                            <h4 class="font-semibold text-navy-900">Competitive Commissions</h4>
                            <p class="text-sm text-gray-500">Fair, transparent compensation for all partner-referred business.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1556761175-4b46a572b786?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" 
                     alt="Partnership meeting" 
                     class="w-full h-auto rounded-lg shadow-2xl">
                <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-emerald-600/10 rounded-full -z-10"></div>
            </div>
        </div>
    </div>

    <!-- CTA Section - Become a Partner -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-20">
        <div class="bg-gradient-to-r from-emerald-600 to-emerald-500 p-8 md:p-12 text-center">
            <h2 class="text-2xl md:text-3xl font-bold text-white mb-4 font-display">
                Ready to Become a Partner?
            </h2>
            <p class="text-emerald-100 mb-8 max-w-2xl mx-auto">
                Join our growing network of partners and unlock new opportunities for growth.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/contact" class="inline-flex items-center gap-2 bg-white text-emerald-600 px-8 py-3 font-semibold hover:bg-gray-50 transition-all duration-300 transform hover:scale-105">
                    Apply to Partner
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>
                <a href="/contact" class="inline-flex items-center gap-2 border-2 border-white text-white px-8 py-3 font-semibold hover:bg-white/10 transition-all duration-300">
                    Contact Partnerships Team
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