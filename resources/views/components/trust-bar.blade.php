<!-- resources/views/components/trust-bar.blade.php -->

<div class="trust-bar-wrapper bg-white py-3 border-y border-gray-100 overflow-hidden">
    <div class="trust-track">
        <div class="trust-slide">
            <span class="trust-item">127 PROJECTS DELIVERED</span>
            <span class="trust-separator">//</span>
            <span class="trust-item">100% COMPLETION RATE</span>
            <span class="trust-separator">//</span>
            <span class="trust-item">24H RESPONSE TIME</span>
            <span class="trust-separator">//</span>
            <span class="trust-item">14-DAY GUARANTEE</span>
            <span class="trust-separator">//</span>
            <span class="trust-item">3 MONTHS FREE SUPPORT</span>
            <span class="trust-separator">//</span>
            <span class="trust-item">4.9/5 FROM 47 REVIEWS</span>
            <span class="trust-separator">//</span>
            <span class="trust-item">12+ COUNTRIES</span>
            <span class="trust-separator">//</span>
            <span class="trust-item">50+ MOBILE APPS</span>
            <span class="trust-separator">//</span>
            <span class="trust-item">80+ WEBSITES</span>
            <span class="trust-separator">//</span>
            <span class="trust-item">30+ FIGMA DESIGNS</span>
        </div>
        <div class="trust-slide">
            <span class="trust-item">127 PROJECTS DELIVERED</span>
            <span class="trust-separator">//</span>
            <span class="trust-item">100% COMPLETION RATE</span>
            <span class="trust-separator">//</span>
            <span class="trust-item">24H RESPONSE TIME</span>
            <span class="trust-separator">//</span>
            <span class="trust-item">14-DAY GUARANTEE</span>
            <span class="trust-separator">//</span>
            <span class="trust-item">3 MONTHS FREE SUPPORT</span>
            <span class="trust-separator">//</span>
            <span class="trust-item">4.9/5 FROM 47 REVIEWS</span>
            <span class="trust-separator">//</span>
            <span class="trust-item">12+ COUNTRIES</span>
            <span class="trust-separator">//</span>
            <span class="trust-item">50+ MOBILE APPS</span>
            <span class="trust-separator">//</span>
            <span class="trust-item">80+ WEBSITES</span>
            <span class="trust-separator">//</span>
            <span class="trust-item">30+ FIGMA DESIGNS</span>
        </div>
    </div>
</div>

<style>
    .trust-bar-wrapper {
        position: relative;
        background: #ffffff;
        overflow: hidden;
        white-space: nowrap;
        font-family: 'Space Grotesk', 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
    }

    .trust-track {
        display: inline-flex;
        animation: scrollTrust 45s linear infinite;
    }

    .trust-slide {
        display: flex;
        align-items: center;
        gap: 2.5rem;
        padding: 0 1.5rem;
    }

    .trust-item {
        font-family: 'Space Grotesk', 'Inter', sans-serif;
        font-size: 0.875rem;
        font-weight: 500;
        color: #1a1a1a;
        letter-spacing: 0.08em;
        text-transform: uppercase;
    }

    .trust-separator {
        font-family: 'Space Grotesk', monospace;
        font-size: 0.75rem;
        color: #a3a3a3;
        font-weight: 400;
        letter-spacing: 0.05em;
    }

    @keyframes scrollTrust {
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(-50%);
        }
    }

    /* Pause animation on hover */
    .trust-bar-wrapper:hover .trust-track {
        animation-play-state: paused;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .trust-item {
            font-size: 0.7rem;
            letter-spacing: 0.06em;
        }
        
        .trust-slide {
            gap: 1.5rem;
            padding: 0 1rem;
        }
        
        .trust-separator {
            font-size: 0.625rem;
        }
    }
</style>