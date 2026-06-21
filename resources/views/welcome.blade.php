<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta - Digital Agency</title>

   <!-- Clash Display - Modern, geometric, professional -->
<link href="https://fonts.cdnfonts.com/css/clash-display" rel="stylesheet">

<!-- Alternative: Sentient (equally beautiful) -->
<!-- <link href="https://fonts.cdnfonts.com/css/sentient" rel="stylesheet"> -->

<!-- Keep your existing Space Grotesk and Bricolage -->
<link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&family=Space+Grotesk:wght@300..700&family=Inter:opsz,wght@14..32,100..900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white font-sans">
    @include('layouts.navbar')
    
    <main>
        <!-- Hero Section - Full width, no container -->
        @include('components.hero')

        <!-- trust bar -->
        @include('components.trust-bar')

        <!-- Trust section -->
        @include('components.trust-section')

        <!-- Services Section -->
        @include('components.services')
        
        <!-- Why Choose Us Section -->
        @include('components.why-choose-us')
        
        <!-- Industry Expertise Section -->
        @include('components.industry-expertise')
        
       
        <!-- Testimonials Section -->
        @include('components.testimonials')

        <!-- Newsletter CTA Section -->
        @include('components.newsletter-cta')

        <!-- Blog Section -->
        @include('components.blogs-section')

        
    </main>
     <!-- CTA Section -->
    @include('components.cta')
    <!-- Footer (create this if you haven't) -->
    @include('layouts.footer')
</body>
</html>