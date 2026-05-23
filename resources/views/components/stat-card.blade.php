{{-- resources/views/components/stat-card.blade.php --}}

{{-- cara penggunaan di view
<x-stat-card
    title="Total Students"
    value="1,250"
    icon="group"
    badge="Updated"
    subtitle="Since last month"
    variant="success"
    />
--}}      

@props([
    'title' => '',
    'value' => '',
    'icon' => null,
    'badge' => null,
    'subtitle' => null,
    'variant' => 'default', // default | success | warning | info
    'progress' => null,     // isi angka 0-100 kalau mau bar progress
])

@php
    $badgeClasses = [
        'default' => 'bg-primary/10 text-primary',
        'success' => 'bg-emerald-100 text-emerald-700',
        'warning' => 'bg-amber-100 text-amber-700',
        'info' => 'bg-sky-100 text-sky-700',
    ];

    $progressClasses = [
        'default' => 'bg-primary',
        'success' => 'bg-emerald-600',
        'warning' => 'bg-amber-500',
        'info' => 'bg-sky-600',
    ];

    $badgeClass = $badgeClasses[$variant] ?? $badgeClasses['default'];
    $progressClass = $progressClasses[$variant] ?? $progressClasses['default'];

    $progressValue = is_null($progress) ? null : max(0, min(100, (float) $progress));
@endphp

<div {{ $attributes->merge(['class' => 'relative rounded-3xl bg-white p-8 shadow-sm ring-1 ring-black/5 transition hover:shadow-md']) }}>
    @if ($badge)
        <div class="absolute right-6 top-6 rounded-md px-3 py-1 text-[10px] font-bold uppercase tracking-widest {{ $badgeClass }}">
            {{ $badge }}
        </div>
    @endif

    @if ($icon)
        <div class="mb-6 flex h-11 w-11 items-center justify-center rounded-2xl bg-primary/10 text-primary">
            <span class="material-symbols-outlined text-[22px] leading-none">{{ $icon }}</span>
        </div>
    @endif

    <div class="space-y-2">
        <p class="text-xs font-bold uppercase tracking-[0.2em] text-slate-500">
            {{ $title }}
        </p>

        <div class="text-4xl font-extrabold text-on-surface">
            {{ $value }}
        </div>

        @if ($subtitle)
            <p class="text-sm text-slate-500">
                {{ $subtitle }}
            </p>
        @endif
    </div>

    @if (!is_null($progressValue))
        <div class="mt-6">
            <div class="h-1.5 w-full overflow-hidden rounded-full bg-slate-200">
                <div
                    class="h-full rounded-full {{ $progressClass }}"
                    style="width: {{ $progressValue }}%"
                ></div>
            </div>
        </div>
    @endif
</div>