<div {{ $attributes->merge(['class' => 'bg-[var(--card)] text-[var(--card-foreground)] rounded-xl shadow-sm p-6 transition-colors border', 'style' => 'border-color: var(--border);']) }}>
    {{ $slot }}
</div>
