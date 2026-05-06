<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Careers - Alta Digital Agency</title>
    
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
                        <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd"/>
                        <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z"/>
                    </svg>
                    <span class="text-sm font-semibold uppercase tracking-wider">Join Our Team</span>
                </div>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 font-display">
                    Shape the Future of
                    <span class="bg-gradient-to-r from-emerald-400 to-emerald-300 bg-clip-text text-transparent">Digital Experiences</span>
                </h1>
                <p class="text-gray-300 text-lg md:text-xl leading-relaxed">
                    Join a growing team of passionate creators, developers, and innovators.
                </p>
            </div>
        </div>
    </div>

    <!-- Why Join Us Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
        <div class="text-center mb-12">
            <div class="inline-flex items-center gap-2 bg-emerald-50 text-emerald-600 px-4 py-2 mb-6 border border-emerald-200">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M3 6a3 3 0 013-3h10a1 1 0 01.8 1.6L14.25 8l2.55 3.4A1 1 0 0116 13H6a3 3 0 01-3-3V6z" clip-rule="evenodd"/>
                </svg>
                <span class="text-sm font-semibold uppercase tracking-wider">Why Alta</span>
            </div>
            <h2 class="text-3xl md:text-4xl font-bold text-navy-900 mb-4 font-display">
                Why Join <span class="text-emerald-600">Alta?</span>
            </h2>
            <div class="w-20 h-1 bg-emerald-500 mx-auto"></div>
            <p class="text-gray-600 mt-6 max-w-2xl mx-auto">
                We're building something special — and we want you to be part of it.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center group">
                <div class="w-16 h-16 bg-emerald-100 flex items-center justify-center mx-auto mb-4 group-hover:bg-emerald-600 transition-colors duration-300">
                    <svg class="w-8 h-8 text-emerald-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-navy-900 mb-2">Flexible Work</h3>
                <p class="text-gray-500 text-sm">Remote-first culture with flexible hours that respect your work-life balance.</p>
            </div>
            <div class="text-center group">
                <div class="w-16 h-16 bg-emerald-100 flex items-center justify-center mx-auto mb-4 group-hover:bg-emerald-600 transition-colors duration-300">
                    <svg class="w-8 h-8 text-emerald-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-navy-900 mb-2">Growth & Learning</h3>
                <p class="text-gray-500 text-sm">Continuous learning opportunities, conferences, and professional development budget.</p>
            </div>
            <div class="text-center group">
                <div class="w-16 h-16 bg-emerald-100 flex items-center justify-center mx-auto mb-4 group-hover:bg-emerald-600 transition-colors duration-300">
                    <svg class="w-8 h-8 text-emerald-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-navy-900 mb-2">Great Culture</h3>
                <p class="text-gray-500 text-sm">Collaborative, supportive environment where ideas are valued and celebrated.</p>
            </div>
            <div class="text-center group">
                <div class="w-16 h-16 bg-emerald-100 flex items-center justify-center mx-auto mb-4 group-hover:bg-emerald-600 transition-colors duration-300">
                    <svg class="w-8 h-8 text-emerald-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-navy-900 mb-2">Competitive Pay</h3>
                <p class="text-gray-500 text-sm">Fair compensation, performance bonuses, and comprehensive benefits.</p>
            </div>
        </div>
    </div>

    <!-- Current Openings Section -->
    <div class="bg-gray-50 py-16 md:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <div class="inline-flex items-center gap-2 bg-emerald-50 text-emerald-600 px-4 py-2 mb-6 border border-emerald-200">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v3.586L7.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 10.586V7z"/>
                    </svg>
                    <span class="text-sm font-semibold uppercase tracking-wider">Current Openings</span>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-navy-900 mb-4 font-display">
                    Join Our Growing Team
                </h2>
                <div class="w-20 h-1 bg-emerald-500 mx-auto"></div>
                <p class="text-gray-600 mt-6 max-w-2xl mx-auto">
                    We're looking for talented individuals to help us create exceptional digital experiences.
                </p>
            </div>

            <div class="max-w-4xl mx-auto space-y-4">
                <!-- Job 1: Senior Laravel Developer -->
                <div class="bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300">
                    <div class="p-6 cursor-pointer" onclick="toggleJob('job1')">
                        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                            <div>
                                <h3 class="text-xl font-bold text-navy-900">Senior Laravel Developer</h3>
                                <div class="flex flex-wrap gap-3 mt-2">
                                    <span class="text-xs bg-emerald-100 text-emerald-700 px-2 py-1">Full-time</span>
                                    <span class="text-xs bg-gray-100 text-gray-600 px-2 py-1">Remote</span>
                                    <span class="text-xs bg-gray-100 text-gray-600 px-2 py-1">Senior Level</span>
                                </div>
                            </div>
                            <div class="flex items-center gap-4">
                                <span class="text-emerald-600 font-semibold">$80k - $120k</span>
                                <svg class="w-5 h-5 text-gray-400 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </div>
                        </div>
                        <div id="job1" class="hidden mt-4 pt-4 border-t border-gray-100">
                            <h4 class="font-semibold text-navy-900 mb-2">Requirements:</h4>
                            <ul class="list-disc list-inside space-y-1 text-sm text-gray-600 mb-4">
                                <li>5+ years of Laravel/PHP experience</li>
                                <li>Strong knowledge of MySQL/PostgreSQL</li>
                                <li>Experience with RESTful APIs and microservices</li>
                                <li>Familiarity with Vue.js or React</li>
                                <li>Excellent problem-solving skills</li>
                            </ul>
                            <a href="#" class="inline-flex items-center gap-2 text-emerald-600 font-semibold hover:text-emerald-500">
                                Apply Now
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Job 2: Frontend Developer (React/Vue) -->
                <div class="bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300">
                    <div class="p-6 cursor-pointer" onclick="toggleJob('job2')">
                        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                            <div>
                                <h3 class="text-xl font-bold text-navy-900">Frontend Developer (React/Vue)</h3>
                                <div class="flex flex-wrap gap-3 mt-2">
                                    <span class="text-xs bg-emerald-100 text-emerald-700 px-2 py-1">Full-time</span>
                                    <span class="text-xs bg-gray-100 text-gray-600 px-2 py-1">Remote</span>
                                    <span class="text-xs bg-gray-100 text-gray-600 px-2 py-1">Mid-Level</span>
                                </div>
                            </div>
                            <div class="flex items-center gap-4">
                                <span class="text-emerald-600 font-semibold">$60k - $90k</span>
                                <svg class="w-5 h-5 text-gray-400 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </div>
                        </div>
                        <div id="job2" class="hidden mt-4 pt-4 border-t border-gray-100">
                            <h4 class="font-semibold text-navy-900 mb-2">Requirements:</h4>
                            <ul class="list-disc list-inside space-y-1 text-sm text-gray-600 mb-4">
                                <li>3+ years of React or Vue.js experience</li>
                                <li>Strong HTML5, CSS3, and JavaScript skills</li>
                                <li>Experience with Tailwind CSS</li>
                                <li>Understanding of responsive design principles</li>
                                <li>Knowledge of state management (Redux/Pinia)</li>
                            </ul>
                            <a href="#" class="inline-flex items-center gap-2 text-emerald-600 font-semibold hover:text-emerald-500">
                                Apply Now
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Job 3: Flutter Developer -->
                <div class="bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300">
                    <div class="p-6 cursor-pointer" onclick="toggleJob('job3')">
                        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                            <div>
                                <h3 class="text-xl font-bold text-navy-900">Flutter Mobile Developer</h3>
                                <div class="flex flex-wrap gap-3 mt-2">
                                    <span class="text-xs bg-emerald-100 text-emerald-700 px-2 py-1">Full-time</span>
                                    <span class="text-xs bg-gray-100 text-gray-600 px-2 py-1">Remote</span>
                                    <span class="text-xs bg-gray-100 text-gray-600 px-2 py-1">Mid-Level</span>
                                </div>
                            </div>
                            <div class="flex items-center gap-4">
                                <span class="text-emerald-600 font-semibold">$70k - $100k</span>
                                <svg class="w-5 h-5 text-gray-400 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </div>
                        </div>
                        <div id="job3" class="hidden mt-4 pt-4 border-t border-gray-100">
                            <h4 class="font-semibold text-navy-900 mb-2">Requirements:</h4>
                            <ul class="list-disc list-inside space-y-1 text-sm text-gray-600 mb-4">
                                <li>3+ years of Flutter/Dart experience</li>
                                <li>Experience publishing to iOS and Android stores</li>
                                <li>Knowledge of RESTful APIs integration</li>
                                <li>Understanding of mobile UI/UX best practices</li>
                                <li>Experience with Firebase is a plus</li>
                            </ul>
                            <a href="#" class="inline-flex items-center gap-2 text-emerald-600 font-semibold hover:text-emerald-500">
                                Apply Now
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Job 4: UI/UX Designer -->
                <div class="bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300">
                    <div class="p-6 cursor-pointer" onclick="toggleJob('job4')">
                        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                            <div>
                                <h3 class="text-xl font-bold text-navy-900">UI/UX Designer</h3>
                                <div class="flex flex-wrap gap-3 mt-2">
                                    <span class="text-xs bg-emerald-100 text-emerald-700 px-2 py-1">Full-time</span>
                                    <span class="text-xs bg-gray-100 text-gray-600 px-2 py-1">Remote</span>
                                    <span class="text-xs bg-gray-100 text-gray-600 px-2 py-1">Mid-Level</span>
                                </div>
                            </div>
                            <div class="flex items-center gap-4">
                                <span class="text-emerald-600 font-semibold">$60k - $85k</span>
                                <svg class="w-5 h-5 text-gray-400 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </div>
                        </div>
                        <div id="job4" class="hidden mt-4 pt-4 border-t border-gray-100">
                            <h4 class="font-semibold text-navy-900 mb-2">Requirements:</h4>
                            <ul class="list-disc list-inside space-y-1 text-sm text-gray-600 mb-4">
                                <li>3+ years of UI/UX design experience</li>
                                <li>Proficiency in Figma, Adobe XD, or Sketch</li>
                                <li>Strong portfolio demonstrating design thinking</li>
                                <li>Experience with user research and testing</li>
                                <li>Knowledge of design systems and accessibility</li>
                            </ul>
                            <a href="#" class="inline-flex items-center gap-2 text-emerald-600 font-semibold hover:text-emerald-500">
                                Apply Now
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- No openings note -->
            <div class="text-center mt-8">
                <p class="text-gray-500 text-sm">Don't see a role that fits? <a href="#" class="text-emerald-600 hover:underline">Send us your resume anyway →</a></p>
            </div>
        </div>
    </div>

    <!-- Benefits Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <div class="inline-flex items-center gap-2 bg-emerald-50 text-emerald-600 px-4 py-2 mb-6 border border-emerald-200">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5zm0 2h10v7h-2l-1 2H8l-1-2H5V5z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-sm font-semibold uppercase tracking-wider">Perks & Benefits</span>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-navy-900 mb-6 font-display">
                    We Take Care of Our Team
                </h2>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    At Alta, we believe that happy, supported employees do their best work. Here's what you can expect when you join our team.
                </p>
                
                <div class="space-y-4">
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-emerald-600 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                        </svg>
                        <div>
                            <h4 class="font-semibold text-navy-900">Remote-First Culture</h4>
                            <p class="text-sm text-gray-500">Work from anywhere in the world with flexible hours.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-emerald-600 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                        </svg>
                        <div>
                            <h4 class="font-semibold text-navy-900">Health & Wellness</h4>
                            <p class="text-sm text-gray-500">Comprehensive health, dental, and vision coverage.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-emerald-600 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                        </svg>
                        <div>
                            <h4 class="font-semibold text-navy-900">Professional Development</h4>
                            <p class="text-sm text-gray-500">Annual learning budget for courses, conferences, and books.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-emerald-600 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                        </svg>
                        <div>
                            <h4 class="font-semibold text-navy-900">Generous PTO</h4>
                            <p class="text-sm text-gray-500">Flexible paid time off and company holidays.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" 
                     alt="Team collaboration" 
                     class="w-full h-auto rounded-lg shadow-2xl">
                <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-emerald-600/10 rounded-full -z-10"></div>
            </div>
        </div>
    </div>

    <!-- Application Process -->
    <div class="bg-gray-50 py-16 md:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-2xl md:text-3xl font-bold text-navy-900 mb-4 font-display">
                    Our Hiring Process
                </h2>
                <div class="w-16 h-0.5 bg-emerald-500 mx-auto"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="w-12 h-12 bg-emerald-600 text-white flex items-center justify-center mx-auto mb-4 text-xl font-bold">1</div>
                    <h3 class="font-semibold text-navy-900 mb-2">Apply</h3>
                    <p class="text-sm text-gray-500">Submit your resume and portfolio</p>
                </div>
                <div class="text-center">
                    <div class="w-12 h-12 bg-emerald-600 text-white flex items-center justify-center mx-auto mb-4 text-xl font-bold">2</div>
                    <h3 class="font-semibold text-navy-900 mb-2">Initial Chat</h3>
                    <p class="text-sm text-gray-500">30-minute conversation with our team</p>
                </div>
                <div class="text-center">
                    <div class="w-12 h-12 bg-emerald-600 text-white flex items-center justify-center mx-auto mb-4 text-xl font-bold">3</div>
                    <h3 class="font-semibold text-navy-900 mb-2">Technical Assessment</h3>
                    <p class="text-sm text-gray-500">Skills evaluation or portfolio review</p>
                </div>
                <div class="text-center">
                    <div class="w-12 h-12 bg-emerald-600 text-white flex items-center justify-center mx-auto mb-4 text-xl font-bold">4</div>
                    <h3 class="font-semibold text-navy-900 mb-2">Offer</h3>
                    <p class="text-sm text-gray-500">Welcome to the Alta team!</p>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-20">
        <div class="bg-gradient-to-r from-emerald-600 to-emerald-500 p-8 md:p-12 text-center">
            <h2 class="text-2xl md:text-3xl font-bold text-white mb-4 font-display">
                Ready to Join Us?
            </h2>
            <p class="text-emerald-100 mb-8 max-w-2xl mx-auto">
                Take the first step toward an exciting career at Alta.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#" class="inline-flex items-center gap-2 bg-white text-emerald-600 px-8 py-3 font-semibold hover:bg-gray-50 transition-all duration-300 transform hover:scale-105">
                    View Open Positions
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>
                <a href="#" class="inline-flex items-center gap-2 border-2 border-white text-white px-8 py-3 font-semibold hover:bg-white/10 transition-all duration-300">
                    Send Open Application
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>

    @include('layouts.footer')

    <script>
        function toggleJob(jobId) {
            const jobElement = document.getElementById(jobId);
            const arrowIcon = jobElement.previousElementSibling.querySelector('.flex.items-center.gap-4 svg:last-child');
            
            if (jobElement.classList.contains('hidden')) {
                jobElement.classList.remove('hidden');
                if (arrowIcon) arrowIcon.style.transform = 'rotate(180deg)';
            } else {
                jobElement.classList.add('hidden');
                if (arrowIcon) arrowIcon.style.transform = 'rotate(0deg)';
            }
        }
    </script>
</body>
</html>