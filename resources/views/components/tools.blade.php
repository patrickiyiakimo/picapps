<style>
    @keyframes scroll-left {
        0% { transform: translateX(0); }
        100% { transform: translateX(-50%); }
    }
    
    @keyframes scroll-right {
        0% { transform: translateX(-50%); }
        100% { transform: translateX(0); }
    }
    
    .scroll-left {
        animation: scroll-left 25s linear infinite;
    }
    
    .scroll-right {
        animation: scroll-right 25s linear infinite;
    }
    
    .scroll-left:hover, .scroll-right:hover {
        animation-play-state: paused;
    }
    
    .tech-track {
        display: flex;
        gap: 1.5rem;
        width: fit-content;
    }
    
    .tech-card {
        min-width: 140px;
    }
</style>

<!-- Frontend Technologies - Scrolling Left -->
<div class="mb-12 overflow-hidden">
    <div class="flex items-center gap-3 mb-8">
        <div class="w-12 h-0.5 bg-[#61629F]"></div>
        <h3 class="text-xl font-bold text-navy-900">Frontend Development</h3>
        <div class="flex-1 h-0.5 bg-[#61629F]"></div>
    </div>
    
    <div class="overflow-hidden">
        <div class="scroll-left tech-track">
            <!-- First set -->
            <div class="tech-card group bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300 p-4 text-center">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" class="w-12 h-12 mx-auto mb-3">
                <p class="font-semibold text-navy-900">HTML5</p>
                <p class="text-xs text-gray-400">Markup Language</p>
            </div>
            
            <div class="tech-card group bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300 p-4 text-center">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" class="w-12 h-12 mx-auto mb-3">
                <p class="font-semibold text-navy-900">CSS3</p>
                <p class="text-xs text-gray-400">Styling</p>
            </div>
            
            <div class="tech-card group bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300 p-4 text-center">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" class="w-12 h-12 mx-auto mb-3">
                <p class="font-semibold text-navy-900">JavaScript</p>
                <p class="text-xs text-gray-400">Core Language</p>
            </div>
            
            <div class="tech-card group bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300 p-4 text-center">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" class="w-12 h-12 mx-auto mb-3">
                <p class="font-semibold text-navy-900">React</p>
                <p class="text-xs text-gray-400">Frontend Library</p>
            </div>
            
            <div class="tech-card group bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300 p-4 text-center">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nextjs/nextjs-original.svg" class="w-12 h-12 mx-auto mb-3">
                <p class="font-semibold text-navy-900">Next.js</p>
                <p class="text-xs text-gray-400">React Framework</p>
            </div>
            
            <div class="tech-card group bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300 p-4 text-center">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/tailwindcss/tailwindcss-original.svg" class="w-12 h-12 mx-auto mb-3">
                <p class="font-semibold text-navy-900">Tailwind CSS</p>
                <p class="text-xs text-gray-400">Utility CSS</p>
            </div>
            
            <!-- Duplicate set for seamless loop -->
            <div class="tech-card group bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300 p-4 text-center">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" class="w-12 h-12 mx-auto mb-3">
                <p class="font-semibold text-navy-900">HTML5</p>
                <p class="text-xs text-gray-400">Markup Language</p>
            </div>
            
            <div class="tech-card group bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300 p-4 text-center">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" class="w-12 h-12 mx-auto mb-3">
                <p class="font-semibold text-navy-900">CSS3</p>
                <p class="text-xs text-gray-400">Styling</p>
            </div>
            
            <div class="tech-card group bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300 p-4 text-center">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" class="w-12 h-12 mx-auto mb-3">
                <p class="font-semibold text-navy-900">JavaScript</p>
                <p class="text-xs text-gray-400">Core Language</p>
            </div>
            
            <div class="tech-card group bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300 p-4 text-center">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" class="w-12 h-12 mx-auto mb-3">
                <p class="font-semibold text-navy-900">React</p>
                <p class="text-xs text-gray-400">Frontend Library</p>
            </div>
            
            <div class="tech-card group bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300 p-4 text-center">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nextjs/nextjs-original.svg" class="w-12 h-12 mx-auto mb-3">
                <p class="font-semibold text-navy-900">Next.js</p>
                <p class="text-xs text-gray-400">React Framework</p>
            </div>
            
            <div class="tech-card group bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300 p-4 text-center">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/tailwindcss/tailwindcss-original.svg" class="w-12 h-12 mx-auto mb-3">
                <p class="font-semibold text-navy-900">Tailwind CSS</p>
                <p class="text-xs text-gray-400">Utility CSS</p>
            </div>
        </div>
    </div>
</div>

<!-- Backend Technologies - Scrolling Right -->
<div class="mb-12 overflow-hidden">
    <div class="flex items-center gap-3 mb-8">
        <div class="w-12 h-0.5 bg-[#61629F]"></div>
        <h3 class="text-xl font-bold text-navy-900">Backend Development</h3>
        <div class="flex-1 h-0.5 bg-[#61629F]"></div>
    </div>
    
    <div class="overflow-hidden">
        <div class="scroll-right tech-track">
            <!-- First set -->
            <div class="tech-card group bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-lg p-4 text-center">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg" class="w-12 h-12 mx-auto mb-3">
                <p class="font-semibold text-navy-900">Node.js</p>
                <p class="text-xs text-gray-400">JavaScript Runtime</p>
            </div>
            
            <div class="tech-card group bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-lg p-4 text-center">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/express/express-original.svg" class="w-12 h-12 mx-auto mb-3">
                <p class="font-semibold text-navy-900">Express.js</p>
                <p class="text-xs text-gray-400">Node.js Framework</p>
            </div>
            
            <div class="tech-card group bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-lg p-4 text-center">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" class="w-12 h-12 mx-auto mb-3">
                <p class="font-semibold text-navy-900">PHP</p>
                <p class="text-xs text-gray-400">Server-side Language</p>
            </div>
            
            <div class="tech-card group bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-lg p-4 text-center">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg" class="w-12 h-12 mx-auto mb-3">
                <p class="font-semibold text-navy-900">Laravel</p>
                <p class="text-xs text-gray-400">PHP Framework</p>
            </div>
            
            <div class="tech-card group bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-lg p-4 text-center">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/dart/dart-original.svg" class="w-12 h-12 mx-auto mb-3">
                <p class="font-semibold text-navy-900">Dart</p>
                <p class="text-xs text-gray-400">Programming Language</p>
            </div>
            
            <!-- Duplicate set for seamless loop -->
            <div class="tech-card group bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-lg p-4 text-center">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg" class="w-12 h-12 mx-auto mb-3">
                <p class="font-semibold text-navy-900">Node.js</p>
                <p class="text-xs text-gray-400">JavaScript Runtime</p>
            </div>
            
            <div class="tech-card group bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-lg p-4 text-center">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/express/express-original.svg" class="w-12 h-12 mx-auto mb-3">
                <p class="font-semibold text-navy-900">Express.js</p>
                <p class="text-xs text-gray-400">Node.js Framework</p>
            </div>
            
            <div class="tech-card group bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-lg p-4 text-center">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" class="w-12 h-12 mx-auto mb-3">
                <p class="font-semibold text-navy-900">PHP</p>
                <p class="text-xs text-gray-400">Server-side Language</p>
            </div>
            
            <div class="tech-card group bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-lg p-4 text-center">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg" class="w-12 h-12 mx-auto mb-3">
                <p class="font-semibold text-navy-900">Laravel</p>
                <p class="text-xs text-gray-400">PHP Framework</p>
            </div>
            
            <div class="tech-card group bg-white border border-gray-200 hover:border-emerald-300 hover:shadow-lg p-4 text-center">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/dart/dart-original.svg" class="w-12 h-12 mx-auto mb-3">
                <p class="font-semibold text-navy-900">Dart</p>
                <p class="text-xs text-gray-400">Programming Language</p>
            </div>
        </div>
    </div>
</div>