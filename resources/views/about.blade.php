<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Alta - Digital Agency</title>
    
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
                    <span class="text-sm font-semibold uppercase tracking-wider">Our Story</span>
                </div>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 font-display">
                    We're on a Mission to
                    <span class="bg-gradient-to-r from-emerald-400 to-emerald-300 bg-clip-text text-transparent">Transform Digital Experiences</span>
                </h1>
                <p class="text-gray-300 text-lg md:text-xl leading-relaxed">
                    Alta was founded with a simple yet powerful vision: to help businesses thrive in the digital age through innovative, user-centric solutions.
                </p>
            </div>
        </div>
    </div>

    <!-- Our Story Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            <div>
                <div class="inline-flex items-center gap-2 bg-emerald-50 text-emerald-600 px-4 py-2 mb-6 border border-emerald-200">
                    <span class="text-xs font-semibold uppercase tracking-wider">Who We Are</span>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-navy-900 mb-6 font-display">
                    Building Digital Excellence Since 2014
                </h2>
                <p class="text-gray-600 mb-4 leading-relaxed">
                    Alta started as a small team of passionate developers and designers with a shared vision: to create digital products that truly make a difference. Over the years, we've grown into a full-service digital agency trusted by 500+ businesses worldwide.
                </p>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Our name, Alta, means "high" or "elevated" — and that's exactly what we strive for. We elevate brands, experiences, and results through cutting-edge technology and creative excellence.
                </p>
                
                <div class="grid grid-cols-3 gap-4 pt-6 border-t border-gray-200">
                    <div>
                        <div class="text-3xl font-bold text-emerald-600">500+</div>
                        <p class="text-xs text-gray-500">Projects Delivered</p>
                    </div>
                    <div>
                        <div class="text-3xl font-bold text-emerald-600">98%</div>
                        <p class="text-xs text-gray-500">Client Retention</p>
                    </div>
                    <div>
                        <div class="text-3xl font-bold text-emerald-600">10+</div>
                        <p class="text-xs text-gray-500">Years of Excellence</p>
                    </div>
                </div>
            </div>
            <div class="relative">
                <div class="relative rounded-lg overflow-hidden shadow-2xl">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" 
                         alt="Alta Team Working Together" 
                         class="w-full h-auto object-cover">
                    <div class="absolute inset-0 bg-gradient-to-tr from-emerald-600/20 to-transparent"></div>
                </div>
                <div class="absolute -bottom-6 -left-6 w-32 h-32 bg-emerald-600 rounded-full opacity-20 blur-2xl -z-10"></div>
                <div class="absolute -top-6 -right-6 w-32 h-32 bg-emerald-600 rounded-full opacity-20 blur-2xl -z-10"></div>
            </div>
        </div>
    </div>

    <!-- Our Values Section -->
    <div class="bg-gray-50 py-16 md:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <div class="inline-flex items-center gap-2 bg-emerald-50 text-emerald-600 px-4 py-2 mb-6 border border-emerald-200">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M3 6a3 3 0 013-3h10a1 1 0 01.8 1.6L14.25 8l2.55 3.4A1 1 0 0116 13H6a3 3 0 01-3-3V6z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-sm font-semibold uppercase tracking-wider">Our Core Values</span>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-navy-900 mb-4 font-display">
                    What Drives Us Every Day
                </h2>
                <div class="w-20 h-1 bg-emerald-500 mx-auto"></div>
                <p class="text-gray-600 mt-6 max-w-2xl mx-auto">
                    These values shape everything we do — from how we work with clients to how we build our team.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-6 border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300">
                    <div class="w-12 h-12 bg-emerald-100 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-navy-900 mb-2">Quality First</h3>
                    <p class="text-gray-600 text-sm">We never compromise on quality. Every line of code, every design element is crafted with precision.</p>
                </div>

                <div class="bg-white p-6 border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300">
                    <div class="w-12 h-12 bg-emerald-100 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-navy-900 mb-2">Client Success</h3>
                    <p class="text-gray-600 text-sm">Your success is our success. We're committed to delivering results that exceed expectations.</p>
                </div>

                <div class="bg-white p-6 border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300">
                    <div class="w-12 h-12 bg-emerald-100 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-navy-900 mb-2">Innovation</h3>
                    <p class="text-gray-600 text-sm">We stay ahead of the curve, embracing cutting-edge technologies to give you a competitive edge.</p>
                </div>

                <div class="bg-white p-6 border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300">
                    <div class="w-12 h-12 bg-emerald-100 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-navy-900 mb-2">Transparency</h3>
                    <p class="text-gray-600 text-sm">Open communication, honest pricing, and regular updates — no surprises, just results.</p>
                </div>

                <div class="bg-white p-6 border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300">
                    <div class="w-12 h-12 bg-emerald-100 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-navy-900 mb-2">Collaboration</h3>
                    <p class="text-gray-600 text-sm">We work as an extension of your team, collaborating closely to bring your vision to life.</p>
                </div>

                <div class="bg-white p-6 border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300">
                    <div class="w-12 h-12 bg-emerald-100 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-navy-900 mb-2">Excellence</h3>
                    <p class="text-gray-600 text-sm">We strive for excellence in everything we do, from code quality to client relationships.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Team Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
        <div class="text-center mb-12">
            <div class="inline-flex items-center gap-2 bg-emerald-50 text-emerald-600 px-4 py-2 mb-6 border border-emerald-200">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                </svg>
                <span class="text-sm font-semibold uppercase tracking-wider">Meet Our Team</span>
            </div>
            <h2 class="text-3xl md:text-4xl font-bold text-navy-900 mb-4 font-display">
                The Minds Behind Alta
            </h2>
            <div class="w-20 h-1 bg-emerald-500 mx-auto"></div>
            <p class="text-gray-600 mt-6 max-w-2xl mx-auto">
                A diverse team of experts passionate about creating exceptional digital experiences.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Team Member 1 -->
            <div class="group text-center">
                <div class="relative overflow-hidden mb-4">
                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="John Doe - CEO" 
                         class="w-full h-auto group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-emerald-600/0 group-hover:bg-emerald-600/20 transition-all duration-300"></div>
                </div>
                <h3 class="text-lg font-bold text-navy-900">John Anderson</h3>
                <p class="text-sm text-emerald-600 mb-2">Founder & CEO</p>
                <p class="text-xs text-gray-500">10+ years of digital innovation</p>
            </div>

            <!-- Team Member 2 -->
            <div class="group text-center">
                <div class="relative overflow-hidden mb-4">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Sarah Chen - CTO" 
                         class="w-full h-auto group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-emerald-600/0 group-hover:bg-emerald-600/20 transition-all duration-300"></div>
                </div>
                <h3 class="text-lg font-bold text-navy-900">Sarah Chen</h3>
                <p class="text-sm text-emerald-600 mb-2">Chief Technology Officer</p>
                <p class="text-xs text-gray-500">Full-stack architecture expert</p>
            </div>

            <!-- Team Member 3 -->
            <div class="group text-center">
                <div class="relative overflow-hidden mb-4">
                    <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Michael Rodriguez" 
                         class="w-full h-auto group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-emerald-600/0 group-hover:bg-emerald-600/20 transition-all duration-300"></div>
                </div>
                <h3 class="text-lg font-bold text-navy-900">Michael Rodriguez</h3>
                <p class="text-sm text-emerald-600 mb-2">Creative Director</p>
                <p class="text-xs text-gray-500">Award-winning designer</p>
            </div>

            <!-- Team Member 4 -->
            <div class="group text-center">
                <div class="relative overflow-hidden mb-4">
                    <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Emily Wong" 
                         class="w-full h-auto group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-emerald-600/0 group-hover:bg-emerald-600/20 transition-all duration-300"></div>
                </div>
                <h3 class="text-lg font-bold text-navy-900">Emily Wong</h3>
                <p class="text-sm text-emerald-600 mb-2">Head of Client Success</p>
                <p class="text-xs text-gray-500">Client relationship expert</p>
            </div>
        </div>
    </div>

    <!-- Stats Section -->
    <div class="bg-gradient-to-r from-emerald-600 to-emerald-500 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center text-white">
                <div>
                    <div class="text-4xl md:text-5xl font-bold mb-2">500+</div>
                    <p class="text-emerald-100 text-sm">Projects Completed</p>
                </div>
                <div>
                    <div class="text-4xl md:text-5xl font-bold mb-2">50+</div>
                    <p class="text-emerald-100 text-sm">Team Members</p>
                </div>
                <div>
                    <div class="text-4xl md:text-5xl font-bold mb-2">10+</div>
                    <p class="text-emerald-100 text-sm">Years of Excellence</p>
                </div>
                <div>
                    <div class="text-4xl md:text-5xl font-bold mb-2">98%</div>
                    <p class="text-emerald-100 text-sm">Client Retention</p>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-20">
        <div class="bg-gray-50 border border-gray-200 p-8 md:p-12 text-center">
            <h2 class="text-2xl md:text-3xl font-bold text-navy-900 mb-4 font-display">
                Ready to Start Your Journey With Us?
            </h2>
            <p class="text-gray-600 mb-8 max-w-2xl mx-auto">
                Let's create something amazing together. Get in touch with our team today.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/contact" class="inline-flex items-center gap-2 bg-emerald-600 text-white px-6 py-3 font-semibold hover:bg-emerald-500 transition-all duration-300 transform hover:scale-105">
                    Start a Project
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>
                <a href="/contact" class="inline-flex items-center gap-2 border-2 border-navy-900 text-navy-900 px-6 py-3 font-semibold hover:bg-navy-900 hover:text-white transition-all duration-300">
                    Contact Us
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