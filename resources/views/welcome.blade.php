<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta - Digital Agency</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">


    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white font-sans">
    @include('layouts.navbar')
    
    <main>
        <!-- Hero Section - Full width, no container -->
        @include('components.hero')
        
        <!-- Services Section -->
        @include('components.services')
        
        <!-- Why Choose Us Section -->
        @include('components.why-choose-us')
        
        <!-- Industry Expertise Section -->
        @include('components.industry-expertise')
        
        <!-- Tools/Technologies Section -->
        @include('components.tools')
        
        <!-- What We Build Section (Pre-built websites) -->
        @include('components.what-we-build')

        <!-- Testimonials Section -->
        @include('components.testimonials')

        <!-- CTA Section -->
        @include('components.cta')
    </main>
    
    <!-- Chatbot -->
    @include('components.chatbot')
    
    <!-- Footer (create this if you haven't) -->
    @include('layouts.footer')
</body>
</html>