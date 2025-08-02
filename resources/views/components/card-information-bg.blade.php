{{-- filepath: d:\laragon\www\tabungan-kkl\resources\views\components\card-information-bg.blade.php --}}
<div {{ $attributes->merge(['class' => 'card-information-bg']) }}>
    <!-- Background Clean Gradient -->
    <div class="absolute inset-0 overflow-hidden rounded-xl pointer-events-none">
        <div class="absolute inset-0"
            style="background: linear-gradient(135deg, var(--card) 0%, var(--accent) 100%); opacity: 0.98;">
        </div>
        <!-- Money/Savings Icon -->
        <div class="absolute top-4 right-4 opacity-15" style="color: var(--primary);">
            <svg class="w-8 h-8 animate-pulse" fill="currentColor" viewBox="0 0 20 20">
                <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4zM18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z"/>
            </svg>
        </div>
    </div>

    <!-- Content Container -->
    <div class="relative z-10 h-full" style="color: var(--card-foreground);">
        {{ $slot }}
    </div>
</div>

<style>
    .card-information-bg {
        position: relative;
        overflow: hidden;
        border-radius: var(--radius-lg);
        border: 1.5px solid var(--border);
        background: var(--card);
        color: var(--card-foreground);
        backdrop-filter: blur(4px);
        transition: box-shadow 0.3s cubic-bezier(.4,2,.3,1), border-color 0.3s, transform 0.3s cubic-bezier(.4,2,.3,1);
        box-shadow: var(--shadow);
        cursor: pointer;
    }

    .card-information-bg:hover {
        transform: translateY(-5px) scale(1.03);
        box-shadow: var(--shadow-lg);
        border-color: var(--primary);
    }

    .dark .card-information-bg {
        background: var(--card);
        color: var(--card-foreground);
        border-color: var(--border);
    }

    /* Shimmer Effect */
    .card-information-bg::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(
            90deg,
            transparent,
            rgba(255, 255, 255, 0.13),
            transparent
        );
        transition: left 0.5s;
        z-index: 1;
        pointer-events: none;
    }

    .card-information-bg:hover::before {
        left: 100%;
    }
</style>
