@props([
    'href' => '#',
    'text' => 'Let\'s Create Your Brand',
    'target' => '_self',
    'type' => 'link', // link or button
    'size' => 'md', // sm, md, lg
    'variant' => 'primary' // primary, secondary, outline, dark, light, green
])

@php
    $sizeClasses = [
        'sm' => 'px-4 py-2 text-xs',
        'md' => 'px-6 py-3 text-sm',
        'lg' => 'px-8 py-4 text-base',
    ][$size];
    
    $variantClasses = [
        'primary' => 'bg-white text-black border border-white hover:bg-transparent hover:text-white',
        'secondary' => 'bg-black text-white border border-black hover:bg-gray-800 hover:border-gray-800',
        'dark' => 'bg-black text-white border border-black hover:bg-gray-800',
        'light' => 'bg-white text-black border border-gray-300 hover:bg-gray-50 hover:border-black',
        'outline' => 'bg-transparent text-white border border-white/30 hover:bg-white/10 hover:border-white',
        'green' => 'bg-emerald-600 text-white border border-emerald-600 hover:bg-emerald-700 hover:border-emerald-700',
    ][$variant];
@endphp

@if($type === 'link')
    <a href="{{ $href }}" 
       target="{{ $target }}"
       {{ $attributes->merge(['class' => "uppercase group inline-flex items-center justify-center gap-2 font-semibold transition-all duration-300 {$sizeClasses} {$variantClasses}"]) }}>
        <span>{{ $text }}</span>
        <svg class="w-4 h-4 transition-transform duration-200 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
        </svg>
    </a>
@else
    <button type="{{ $attributes->get('type', 'button') }}"
            {{ $attributes->merge(['class' => "uppercase group inline-flex items-center justify-center gap-2 font-semibold transition-all duration-300 {$sizeClasses} {$variantClasses}"]) }}>
        <span>{{ $text }}</span>
        <svg class="w-4 h-4 transition-transform duration-200 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
        </svg>
    </button>
@endif