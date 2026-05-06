<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing - Alta Digital Agency</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Bricolage+Grotesque:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 font-sans">
    
    @include('layouts.navbar')

    <div class="relative bg-white overflow-hidden">
        <!-- Background Design -->
        <div class="absolute inset-0 z-0">
            <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-bl from-emerald-50/30 to-transparent"></div>
            <div class="absolute -top-40 -right-40 w-96 h-96 bg-emerald-100 rounded-full filter blur-3xl opacity-30"></div>
            <div class="absolute bottom-0 left-0 w-full h-64 bg-gradient-to-t from-gray-50 to-transparent"></div>
        </div>

        <!-- Header Section -->
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24 text-center">
            <div class="inline-flex items-center gap-2 bg-emerald-50 text-emerald-600 px-4 py-2 mb-6 border border-emerald-200">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.883l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.117l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4z"/>
                </svg>
                <span class="text-sm font-semibold uppercase tracking-wider">Transparent Pricing</span>
            </div>
            
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-navy-900 mb-4 font-display">
                Simple, <span class="bg-gradient-to-r from-emerald-600 to-emerald-400 bg-clip-text text-transparent">Transparent</span> Pricing
            </h1>
            
            <div class="w-24 h-1 bg-emerald-500 mx-auto mb-6"></div>
            
            <p class="text-gray-600 max-w-2xl mx-auto text-lg">
                Choose the perfect plan for your business needs. No hidden fees, no surprises.
            </p>
        </div>
    </div>

    <!-- Pricing Grid -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16">
        
        <!-- Toggle (Optional - Monthly/Yearly) -->
        <div class="flex justify-center items-center gap-4 mb-12">
            <span class="text-sm font-medium text-gray-700">Monthly</span>
            <button class="relative w-14 h-7 bg-gray-300 rounded-full transition duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2" id="pricing-toggle">
                <div class="absolute left-1 top-1 w-5 h-5 bg-white rounded-full transition duration-300 ease-in-out translate-x-0"></div>
            </button>
            <span class="text-sm font-medium text-gray-700">Yearly <span class="text-emerald-600 text-xs ml-1">Save 20%</span></span>
        </div>

        <!-- Pricing Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <!-- Basic Plan -->
            <div class="bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-xl transition-all duration-300 relative">
                <div class="p-8">
                    <h3 class="text-xl font-bold text-navy-900 mb-2">Basic Website</h3>
                    <p class="text-gray-500 text-sm mb-6">Perfect for startups and small businesses</p>
                    
                    <div class="mb-6">
                        <span class="text-4xl font-bold text-navy-900 monthly-price">$2,500</span>
                        <span class="text-4xl font-bold text-navy-900 yearly-price hidden">$2,000</span>
                        <span class="text-gray-500">/ one-time</span>
                    </div>
                    
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center gap-2 text-gray-600">
                            <svg class="w-5 h-5 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                            </svg>
                            Up to 5 pages
                        </li>
                        <li class="flex items-center gap-2 text-gray-600">
                            <svg class="w-5 h-5 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                            </svg>
                            Mobile responsive design
                        </li>
                        <li class="flex items-center gap-2 text-gray-600">
                            <svg class="w-5 h-5 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                            </svg>
                            Contact form
                        </li>
                        <li class="flex items-center gap-2 text-gray-600">
                            <svg class="w-5 h-5 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                            </svg>
                            SEO optimization
                        </li>
                        <li class="flex items-center gap-2 text-gray-600">
                            <svg class="w-5 h-5 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                            </svg>
                            1 month free support
                        </li>
                    </ul>
                    
                    <a href="/contact" class="block w-full text-center border-2 border-navy-900 text-navy-900 py-3 font-semibold hover:bg-navy-900 hover:text-white transition-all duration-300">
                        Get Started
                    </a>
                </div>
            </div>

            <!-- Professional Plan - Popular -->
            <div class="bg-white border-2 border-emerald-500 hover:shadow-xl transition-all duration-300 relative">
                <div class="absolute -top-4 left-1/2 transform -translate-x-1/2 bg-emerald-600 text-white px-4 py-1 text-xs font-semibold">
                    MOST POPULAR
                </div>
                <div class="p-8">
                    <h3 class="text-xl font-bold text-navy-900 mb-2">Professional Website</h3>
                    <p class="text-gray-500 text-sm mb-6">Ideal for growing businesses</p>
                    
                    <div class="mb-6">
                        <span class="text-4xl font-bold text-navy-900 monthly-price">$5,000</span>
                        <span class="text-4xl font-bold text-navy-900 yearly-price hidden">$4,000</span>
                        <span class="text-gray-500">/ one-time</span>
                    </div>
                    
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center gap-2 text-gray-600">
                            <svg class="w-5 h-5 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                            </svg>
                            Up to 15 pages
                        </li>
                        <li class="flex items-center gap-2 text-gray-600">
                            <svg class="w-5 h-5 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                            </svg>
                            Custom UI/UX design
                        </li>
                        <li class="flex items-center gap-2 text-gray-600">
                            <svg class="w-5 h-5 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                            </svg>
                            CMS integration
                        </li>
                        <li class="flex items-center gap-2 text-gray-600">
                            <svg class="w-5 h-5 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                            </svg>
                            Advanced SEO
                        </li>
                        <li class="flex items-center gap-2 text-gray-600">
                            <svg class="w-5 h-5 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                            </svg>
                            Performance optimization
                        </li>
                        <li class="flex items-center gap-2 text-gray-600">
                            <svg class="w-5 h-5 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                            </svg>
                            6 months free support
                        </li>
                    </ul>
                    
                    <a href="/contact" class="block w-full text-center bg-emerald-600 text-white py-3 font-semibold hover:bg-emerald-500 transition-all duration-300">
                        Get Started
                    </a>
                </div>
            </div>

            <!-- Enterprise Plan -->
            <div class="bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-xl transition-all duration-300 relative">
                <div class="p-8">
                    <h3 class="text-xl font-bold text-navy-900 mb-2">Enterprise</h3>
                    <p class="text-gray-500 text-sm mb-6">For large businesses and custom needs</p>
                    
                    <div class="mb-6">
                        <span class="text-4xl font-bold text-navy-900">Custom</span>
                        <span class="text-gray-500"></span>
                    </div>
                    
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center gap-2 text-gray-600">
                            <svg class="w-5 h-5 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                            </svg>
                            Unlimited pages
                        </li>
                        <li class="flex items-center gap-2 text-gray-600">
                            <svg class="w-5 h-5 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                            </svg>
                            Custom features development
                        </li>
                        <li class="flex items-center gap-2 text-gray-600">
                            <svg class="w-5 h-5 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                            </svg>
                            API integrations
                        </li>
                        <li class="flex items-center gap-2 text-gray-600">
                            <svg class="w-5 h-5 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                            </svg>
                            Dedicated account manager
                        </li>
                        <li class="flex items-center gap-2 text-gray-600">
                            <svg class="w-5 h-5 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                            </svg>
                            24/7 priority support
                        </li>
                        <li class="flex items-center gap-2 text-gray-600">
                            <svg class="w-5 h-5 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                            </svg>
                            SLA guarantee
                        </li>
                    </ul>
                    
                    <a href="/contact" class="block w-full text-center border-2 border-navy-900 text-navy-900 py-3 font-semibold hover:bg-navy-900 hover:text-white transition-all duration-300">
                        Contact Sales
                    </a>
                </div>
            </div>
        </div>

        <!-- Mobile App Development Pricing -->
        <div class="mt-20">
            <div class="text-center mb-12">
                <h2 class="text-2xl md:text-3xl font-bold text-navy-900 mb-4 font-display">
                    Mobile App Development
                </h2>
                <div class="w-20 h-1 bg-emerald-500 mx-auto mb-4"></div>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Native and cross-platform mobile apps for iOS and Android
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Single Platform -->
                <div class="bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-xl transition-all duration-300">
                    <div class="p-8">
                        <h3 class="text-xl font-bold text-navy-900 mb-2">Single Platform App</h3>
                        <p class="text-gray-500 text-sm mb-6">iOS OR Android</p>
                        
                        <div class="mb-6">
                            <span class="text-4xl font-bold text-navy-900">$8,000</span>
                            <span class="text-gray-500">+</span>
                        </div>
                        
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center gap-2 text-gray-600">
                                <svg class="w-5 h-5 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                </svg>
                                Native iOS or Android app
                            </li>
                            <li class="flex items-center gap-2 text-gray-600">
                                <svg class="w-5 h-5 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                </svg>
                                UI/UX design included
                            </li>
                            <li class="flex items-center gap-2 text-gray-600">
                                <svg class="w-5 h-5 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                </svg>
                                App store submission
                            </li>
                            <li class="flex items-center gap-2 text-gray-600">
                                <svg class="w-5 h-5 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                </svg>
                                3 months support
                            </li>
                        </ul>
                        
                        <a href="/contact" class="block w-full text-center border-2 border-navy-900 text-navy-900 py-3 font-semibold hover:bg-navy-900 hover:text-white transition-all duration-300">
                            Get Quote
                        </a>
                    </div>
                </div>

                <!-- Cross Platform -->
                <div class="bg-white border-2 border-emerald-500 hover:shadow-xl transition-all duration-300 relative">
                    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2 bg-emerald-600 text-white px-4 py-1 text-xs font-semibold">
                        BEST VALUE
                    </div>
                    <div class="p-8">
                        <h3 class="text-xl font-bold text-navy-900 mb-2">Cross-Platform App</h3>
                        <p class="text-gray-500 text-sm mb-6">iOS & Android Together</p>
                        
                        <div class="mb-6">
                            <span class="text-4xl font-bold text-navy-900">$15,000</span>
                            <span class="text-gray-500">+</span>
                        </div>
                        
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center gap-2 text-gray-600">
                                <svg class="w-5 h-5 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                </svg>
                                iOS + Android apps
                            </li>
                            <li class="flex items-center gap-2 text-gray-600">
                                <svg class="w-5 h-5 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                </svg>
                                Flutter or React Native
                            </li>
                            <li class="flex items-center gap-2 text-gray-600">
                                <svg class="w-5 h-5 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                </svg>
                                Backend API included
                            </li>
                            <li class="flex items-center gap-2 text-gray-600">
                                <svg class="w-5 h-5 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                </svg>
                                Both app stores submission
                            </li>
                            <li class="flex items-center gap-2 text-gray-600">
                                <svg class="w-5 h-5 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                </svg>
                                6 months support
                            </li>
                        </ul>
                        
                        <a href="/contact" class="block w-full text-center bg-emerald-600 text-white py-3 font-semibold hover:bg-emerald-500 transition-all duration-300">
                            Get Quote
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Maintenance & Support Plans -->
        <div class="mt-20">
            <div class="text-center mb-12">
                <h2 class="text-2xl md:text-3xl font-bold text-navy-900 mb-4 font-display">
                    Maintenance & Support
                </h2>
                <div class="w-20 h-1 bg-emerald-500 mx-auto mb-4"></div>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Keep your website or app running smoothly with our support plans
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Basic Support -->
                <div class="bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-xl transition-all duration-300">
                    <div class="p-6 text-center">
                        <h3 class="text-lg font-bold text-navy-900 mb-2">Basic</h3>
                        <div class="mb-4">
                            <span class="text-3xl font-bold text-navy-900">$199</span>
                            <span class="text-gray-500">/month</span>
                        </div>
                        <ul class="space-y-2 text-sm text-left mb-6">
                            <li class="flex items-center gap-2">✓ Security updates</li>
                            <li class="flex items-center gap-2">✓ Monthly backups</li>
                            <li class="flex items-center gap-2">✓ Email support</li>
                            <li class="flex items-center gap-2 text-gray-400">✗ 24/7 monitoring</li>
                        </ul>
                        <a href="/contact" class="block w-full text-center border border-navy-900 text-navy-900 py-2 text-sm font-semibold hover:bg-navy-900 hover:text-white transition">
                            Choose Plan
                        </a>
                    </div>
                </div>

                <!-- Professional Support -->
                <div class="bg-white border-2 border-emerald-500 hover:shadow-xl transition-all duration-300">
                    <div class="p-6 text-center">
                        <h3 class="text-lg font-bold text-navy-900 mb-2">Professional</h3>
                        <div class="mb-4">
                            <span class="text-3xl font-bold text-navy-900">$499</span>
                            <span class="text-gray-500">/month</span>
                        </div>
                        <ul class="space-y-2 text-sm text-left mb-6">
                            <li class="flex items-center gap-2">✓ Everything in Basic</li>
                            <li class="flex items-center gap-2">✓ 24/7 monitoring</li>
                            <li class="flex items-center gap-2">✓ Weekly backups</li>
                            <li class="flex items-center gap-2">✓ Priority support</li>
                            <li class="flex items-center gap-2">✓ Monthly performance report</li>
                        </ul>
                        <a href="/contact" class="block w-full text-center bg-emerald-600 text-white py-2 text-sm font-semibold hover:bg-emerald-500 transition">
                            Choose Plan
                        </a>
                    </div>
                </div>

                <!-- Enterprise Support -->
                <div class="bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-xl transition-all duration-300">
                    <div class="p-6 text-center">
                        <h3 class="text-lg font-bold text-navy-900 mb-2">Enterprise</h3>
                        <div class="mb-4">
                            <span class="text-3xl font-bold text-navy-900">$999</span>
                            <span class="text-gray-500">/month</span>
                        </div>
                        <ul class="space-y-2 text-sm text-left mb-6">
                            <li class="flex items-center gap-2">✓ Everything in Professional</li>
                            <li class="flex items-center gap-2">✓ Dedicated account manager</li>
                            <li class="flex items-center gap-2">✓ Daily backups</li>
                            <li class="flex items-center gap-2">✓ 1-hour response time</li>
                            <li class="flex items-center gap-2">✓ Custom feature development</li>
                        </ul>
                        <a href="/contact" class="block w-full text-center border border-navy-900 text-navy-900 py-2 text-sm font-semibold hover:bg-navy-900 hover:text-white transition">
                            Choose Plan
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- FAQ Section -->
        <div class="mt-20 bg-gray-50 rounded-lg p-8 md:p-12">
            <div class="text-center mb-10">
                <h2 class="text-2xl md:text-3xl font-bold text-navy-900 mb-2 font-display">
                    Frequently Asked Questions
                </h2>
                <div class="w-20 h-1 bg-emerald-500 mx-auto"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <h3 class="font-semibold text-navy-900 mb-2">How long does it take to build a website?</h3>
                    <p class="text-gray-600 text-sm">Typically 4-8 weeks depending on complexity. We'll provide a detailed timeline during consultation.</p>
                </div>
                <div>
                    <h3 class="font-semibold text-navy-900 mb-2">Do you offer payment plans?</h3>
                    <p class="text-gray-600 text-sm">Yes, we offer flexible payment plans. Contact us to discuss options that work for your budget.</p>
                </div>
                <div>
                    <h3 class="font-semibold text-navy-900 mb-2">What if I don't have a design?</h3>
                    <p class="text-gray-600 text-sm">No problem! Our designers will create a stunning UI/UX design from scratch based on your requirements.</p>
                </div>
                <div>
                    <h3 class="font-semibold text-navy-900 mb-2">Do you provide hosting?</h3>
                    <p class="text-gray-600 text-sm">Yes, we offer reliable hosting solutions. We can also deploy to your preferred hosting provider.</p>
                </div>
                <div>
                    <h3 class="font-semibold text-navy-900 mb-2">Can I upgrade my plan later?</h3>
                    <p class="text-gray-600 text-sm">Absolutely! You can upgrade at any time. We'll handle the migration seamlessly.</p>
                </div>
                <div>
                    <h3 class="font-semibold text-navy-900 mb-2">What's your refund policy?</h3>
                    <p class="text-gray-600 text-sm">We offer a 14-day satisfaction guarantee. If you're not happy, we'll refund the initial deposit.</p>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="mt-12 bg-gradient-to-r from-emerald-600 to-emerald-500 p-8 md:p-12 text-center">
            <h3 class="text-2xl md:text-3xl font-bold text-white mb-4 font-display">
                Not sure which plan is right for you?
            </h3>
            <p class="text-emerald-100 mb-6 max-w-2xl mx-auto">
                Schedule a free consultation with our team. We'll help you choose the perfect solution.
            </p>
            <a href="/contact" class="inline-flex items-center gap-2 bg-white text-emerald-600 px-8 py-3 font-semibold hover:bg-gray-50 transition-all duration-300 transform hover:scale-105 shadow-lg">
                Contact Our Team
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                </svg>
            </a>
        </div>
    </div>

    @include('layouts.footer')

    <!-- Monthly/Yearly Toggle Script -->
    <script>
        const toggle = document.getElementById('pricing-toggle');
        const monthlyPrices = document.querySelectorAll('.monthly-price');
        const yearlyPrices = document.querySelectorAll('.yearly-price');
        const toggleSlider = toggle.querySelector('div');

        toggle.addEventListener('click', () => {
            monthlyPrices.forEach(price => {
                price.classList.toggle('hidden');
            });
            yearlyPrices.forEach(price => {
                price.classList.toggle('hidden');
            });
            toggleSlider.classList.toggle('translate-x-7');
        });
    </script>
</body>
</html>