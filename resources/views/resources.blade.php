<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resources - Alta Digital Agency</title>
    
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
                    <span class="text-sm font-semibold uppercase tracking-wider">Free Resources</span>
                </div>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 font-display">
                    Tools & Resources to
                    <span class="bg-gradient-to-r from-emerald-400 to-emerald-300 bg-clip-text text-transparent">Help You Grow</span>
                </h1>
                <p class="text-gray-300 text-lg md:text-xl leading-relaxed">
                    Free templates, guides, and tools to help you build better digital products.
                </p>
            </div>
        </div>
    </div>

    <!-- Resource Categories -->
    <div class="border-b border-gray-200 bg-white sticky top-16 z-40">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex overflow-x-auto py-4 gap-6 scrollbar-hide">
                <a href="#all" class="text-emerald-600 border-b-2 border-emerald-600 pb-2 text-sm font-semibold whitespace-nowrap">All Resources</a>
                <a href="#templates" class="text-gray-600 hover:text-emerald-600 pb-2 text-sm font-semibold whitespace-nowrap">Templates</a>
                <a href="#guides" class="text-gray-600 hover:text-emerald-600 pb-2 text-sm font-semibold whitespace-nowrap">Guides & Ebooks</a>
                <a href="#tools" class="text-gray-600 hover:text-emerald-600 pb-2 text-sm font-semibold whitespace-nowrap">Tools</a>
                <a href="#checklists" class="text-gray-600 hover:text-emerald-600 pb-2 text-sm font-semibold whitespace-nowrap">Checklists</a>
                <a href="#webinars" class="text-gray-600 hover:text-emerald-600 pb-2 text-sm font-semibold whitespace-nowrap">Webinars</a>
                <a href="#blog" class="text-gray-600 hover:text-emerald-600 pb-2 text-sm font-semibold whitespace-nowrap">Blog Posts</a>
            </div>
        </div>
    </div>

    <!-- Templates Section -->
    <div id="templates" class="scroll-mt-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="flex justify-between items-center mb-8">
                <div>
                    <h2 class="text-2xl md:text-3xl font-bold text-navy-900 font-display">📄 Free Templates</h2>
                    <p class="text-gray-600 mt-2">Ready-to-use templates for your next project</p>
                </div>
                <a href="#all-templates" class="text-emerald-600 hover:text-emerald-500 text-sm font-semibold">View All →</a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Template 1 -->
                <div class="bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300">
                    <div class="relative h-48 overflow-hidden bg-gradient-to-br from-emerald-50 to-emerald-100">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <svg class="w-16 h-16 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="p-5">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="text-xs bg-emerald-100 text-emerald-700 px-2 py-0.5">Free</span>
                            <span class="text-xs bg-gray-100 text-gray-600 px-2 py-0.5">PDF</span>
                        </div>
                        <h3 class="text-lg font-bold text-navy-900 mb-2">Project Brief Template</h3>
                        <p class="text-gray-500 text-sm mb-4">A comprehensive template to outline your web or app project requirements.</p>
                        <a href="#" class="inline-flex items-center gap-1 text-emerald-600 font-semibold text-sm hover:text-emerald-500">
                            Download Free
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3M4 4h16"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Template 2 -->
                <div class="bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300">
                    <div class="relative h-48 overflow-hidden bg-gradient-to-br from-emerald-50 to-emerald-100">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <svg class="w-16 h-16 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21H5a2 2 0 01-2-2V5a2 2 0 012-2h11l5 5v11a2 2 0 01-2 2z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="p-5">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="text-xs bg-emerald-100 text-emerald-700 px-2 py-0.5">Free</span>
                            <span class="text-xs bg-gray-100 text-gray-600 px-2 py-0.5">Figma</span>
                        </div>
                        <h3 class="text-lg font-bold text-navy-900 mb-2">UI Style Guide Template</h3>
                        <p class="text-gray-500 text-sm mb-4">Figma template for creating consistent design systems.</p>
                        <a href="#" class="inline-flex items-center gap-1 text-emerald-600 font-semibold text-sm hover:text-emerald-500">
                            Download Free
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3M4 4h16"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Template 3 -->
                <div class="bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300">
                    <div class="relative h-48 overflow-hidden bg-gradient-to-br from-emerald-50 to-emerald-100">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <svg class="w-16 h-16 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="p-5">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="text-xs bg-emerald-100 text-emerald-700 px-2 py-0.5">Free</span>
                            <span class="text-xs bg-gray-100 text-gray-600 px-2 py-0.5">Excel</span>
                        </div>
                        <h3 class="text-lg font-bold text-navy-900 mb-2">Project Timeline Template</h3>
                        <p class="text-gray-500 text-sm mb-4">Track milestones, deadlines, and deliverables.</p>
                        <a href="#" class="inline-flex items-center gap-1 text-emerald-600 font-semibold text-sm hover:text-emerald-500">
                            Download Free
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3M4 4h16"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Guides & Ebooks Section -->
    <div id="guides" class="bg-gray-50 scroll-mt-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="flex justify-between items-center mb-8">
                <div>
                    <h2 class="text-2xl md:text-3xl font-bold text-navy-900 font-display">📚 Guides & Ebooks</h2>
                    <p class="text-gray-600 mt-2">In-depth resources to level up your skills</p>
                </div>
                <a href="#all-guides" class="text-emerald-600 hover:text-emerald-500 text-sm font-semibold">View All →</a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Guide 1 -->
                <div class="bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300 flex">
                    <div class="w-32 bg-gradient-to-br from-emerald-500 to-emerald-600 flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                    </div>
                    <div class="flex-1 p-5">
                        <h3 class="text-lg font-bold text-navy-900 mb-2">The Complete Guide to E-commerce Development</h3>
                        <p class="text-gray-500 text-sm mb-3">Everything you need to know about building a successful online store.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-xs text-gray-400">107 pages • PDF</span>
                            <a href="#" class="text-emerald-600 font-semibold text-sm hover:text-emerald-500">Download Free →</a>
                        </div>
                    </div>
                </div>

                <!-- Guide 2 -->
                <div class="bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300 flex">
                    <div class="w-32 bg-gradient-to-br from-emerald-500 to-emerald-600 flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                        </svg>
                    </div>
                    <div class="flex-1 p-5">
                        <h3 class="text-lg font-bold text-navy-900 mb-2">Mobile App Development: From Idea to Launch</h3>
                        <p class="text-gray-500 text-sm mb-3">A step-by-step guide for building successful mobile applications.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-xs text-gray-400">89 pages • PDF</span>
                            <a href="#" class="text-emerald-600 font-semibold text-sm hover:text-emerald-500">Download Free →</a>
                        </div>
                    </div>
                </div>

                <!-- Guide 3 -->
                <div class="bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300 flex">
                    <div class="w-32 bg-gradient-to-br from-emerald-500 to-emerald-600 flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.66 0 3-4 3-9s-1.34-9-3-9m0 18c-1.66 0-3-4-3-9s1.34-9 3-9"/>
                        </svg>
                    </div>
                    <div class="flex-1 p-5">
                        <h3 class="text-lg font-bold text-navy-900 mb-2">SEO Handbook for 2024</h3>
                        <p class="text-gray-500 text-sm mb-3">Boost your website's visibility with proven SEO strategies.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-xs text-gray-400">154 pages • PDF</span>
                            <a href="#" class="text-emerald-600 font-semibold text-sm hover:text-emerald-500">Download Free →</a>
                        </div>
                    </div>
                </div>

                <!-- Guide 4 -->
                <div class="bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300 flex">
                    <div class="w-32 bg-gradient-to-br from-emerald-500 to-emerald-600 flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"/>
                        </svg>
                    </div>
                    <div class="flex-1 p-5">
                        <h3 class="text-lg font-bold text-navy-900 mb-2">UI/UX Design Principles</h3>
                        <p class="text-gray-500 text-sm mb-3">Master the fundamentals of user-centered design.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-xs text-gray-400">76 pages • PDF</span>
                            <a href="#" class="text-emerald-600 font-semibold text-sm hover:text-emerald-500">Download Free →</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Free Tools Section -->
    <div id="tools" class="scroll-mt-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="flex justify-between items-center mb-8">
                <div>
                    <h2 class="text-2xl md:text-3xl font-bold text-navy-900 font-display">🛠️ Free Tools</h2>
                    <p class="text-gray-600 mt-2">Useful tools to streamline your workflow</p>
                </div>
                <a href="#all-tools" class="text-emerald-600 hover:text-emerald-500 text-sm font-semibold">View All →</a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Tool 1 -->
                <div class="bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300 text-center p-6">
                    <div class="w-16 h-16 bg-emerald-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-navy-900 mb-2">Website Speed Test</h3>
                    <p class="text-gray-500 text-sm mb-4">Analyze your website performance and get optimization tips.</p>
                    <a href="#" class="text-emerald-600 font-semibold text-sm hover:text-emerald-500">Launch Tool →</a>
                </div>

                <!-- Tool 2 -->
                <div class="bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300 text-center p-6">
                    <div class="w-16 h-16 bg-emerald-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-navy-900 mb-2">Project Cost Calculator</h3>
                    <p class="text-gray-500 text-sm mb-4">Estimate the cost of your web or mobile app project.</p>
                    <a href="#" class="text-emerald-600 font-semibold text-sm hover:text-emerald-500">Launch Tool →</a>
                </div>

                <!-- Tool 3 -->
                <div class="bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300 text-center p-6">
                    <div class="w-16 h-16 bg-emerald-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-navy-900 mb-2">SEO Checker</h3>
                    <p class="text-gray-500 text-sm mb-4">Quick SEO analysis with actionable recommendations.</p>
                    <a href="#" class="text-emerald-600 font-semibold text-sm hover:text-emerald-500">Launch Tool →</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Checklists Section -->
    <div id="checklists" class="bg-gray-50 scroll-mt-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="flex justify-between items-center mb-8">
                <div>
                    <h2 class="text-2xl md:text-3xl font-bold text-navy-900 font-display">✅ Checklists</h2>
                    <p class="text-gray-600 mt-2">Step-by-step checklists for your projects</p>
                </div>
                <a href="#all-checklists" class="text-emerald-600 hover:text-emerald-500 text-sm font-semibold">View All →</a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="bg-white border border-gray-200 p-4 flex items-center justify-between hover:border-emerald-300 transition">
                    <div>
                        <h3 class="font-semibold text-navy-900">Website Launch Checklist</h3>
                        <p class="text-xs text-gray-500">54 items • PDF</p>
                    </div>
                    <a href="#" class="text-emerald-600 text-sm font-semibold">Download →</a>
                </div>
                <div class="bg-white border border-gray-200 p-4 flex items-center justify-between hover:border-emerald-300 transition">
                    <div>
                        <h3 class="font-semibold text-navy-900">Mobile App Testing Checklist</h3>
                        <p class="text-xs text-gray-500">38 items • PDF</p>
                    </div>
                    <a href="#" class="text-emerald-600 text-sm font-semibold">Download →</a>
                </div>
                <div class="bg-white border border-gray-200 p-4 flex items-center justify-between hover:border-emerald-300 transition">
                    <div>
                        <h3 class="font-semibold text-navy-900">E-commerce SEO Checklist</h3>
                        <p class="text-xs text-gray-500">42 items • PDF</p>
                    </div>
                    <a href="#" class="text-emerald-600 text-sm font-semibold">Download →</a>
                </div>
                <div class="bg-white border border-gray-200 p-4 flex items-center justify-between hover:border-emerald-300 transition">
                    <div>
                        <h3 class="font-semibold text-navy-900">Client Onboarding Checklist</h3>
                        <p class="text-xs text-gray-500">28 items • PDF</p>
                    </div>
                    <a href="#" class="text-emerald-600 text-sm font-semibold">Download →</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Newsletter Signup -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="bg-gradient-to-r from-emerald-600 to-emerald-500 p-8 md:p-12 text-center">
            <h3 class="text-2xl md:text-3xl font-bold text-white mb-4 font-display">Never Miss a Resource</h3>
            <p class="text-emerald-100 mb-6 max-w-2xl mx-auto">
                Subscribe to our newsletter and get the latest templates, guides, and tools delivered to your inbox.
            </p>
            <form class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto">
                <input type="email" placeholder="Enter your email" 
                       class="flex-1 px-4 py-3 text-gray-900 focus:outline-none focus:ring-2 focus:ring-white">
                <button type="submit" class="bg-white text-emerald-600 px-6 py-3 font-semibold hover:bg-gray-50 transition">
                    Subscribe
                </button>
            </form>
            <p class="text-emerald-200 text-xs mt-4">No spam. Unsubscribe anytime.</p>
        </div>
    </div>

    @include('layouts.footer')
</body>
</html>