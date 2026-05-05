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

    <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->
     @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50">
    @include('layouts.navbar')
    
    <main>
        @yield('content')
    </main>
    
    @include('components.hero')
    @include('components.services')
    @include('components.why-choose-us')
    @include('components.industry-expertise')
     @include('components.chatbot')
    <!-- Your footer here -->
</body>
</html>