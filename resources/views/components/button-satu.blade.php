{{-- cara menggunakan di view --}}
{{-- 
<x-button-satu size="lg" width="full">
    Access Portal
</x-button-satu>
--}}

@props([
    'size' => 'md',
    'width' => 'fit', // fit | auto | full | sm | md | lg | xl
    'href' => null,
    'variant' => 'primary',
    'type' => 'button',
])

@php
    $sizes = [
        'sm' => 'px-4 py-2 text-xs',
        'md' => 'px-5 py-2.5 text-sm',
        'lg' => 'px-6 py-3 text-base',
        'xl' => 'px-8 py-3.5 text-base',
    ];

    $widths = [
        'fit' => 'w-fit',
        'auto' => 'w-fit',
        'full' => 'w-full',
        'sm'   => 'w-28',
        'md'   => 'w-36',
        'lg'   => 'w-45',
        'xl'   => 'w-80',
    ];

    $variants = [
        'primary' => 'bg-primary text-on-primary hover:opacity-90',
        'secondary' => 'bg-slate-200 text-slate-800 hover:bg-slate-300',
        'danger' => 'bg-red-600 text-white hover:bg-red-700',
        'success' => 'bg-green-600 text-white hover:bg-green-700',
        'ghost' => 'bg-surface-container-high text-on-surface hover:bg-surface-container-highest',
    ];

    $sizeClass = $sizes[$size] ?? $sizes['md'];
    $widthClass = $widths[$width] ?? $widths['fit'];
    $variantClass = $variants[$variant] ?? $variants['primary'];

    $classes = trim(
        "inline-flex shrink-0 items-center justify-center whitespace-nowrap rounded-xl font-bold font-inter no-underline cursor-pointer transition-all duration-300 active:opacity-80 focus:outline-none focus:ring-2 focus:ring-offset-2 {$widthClass} {$sizeClass} {$variantClass}"
    );
@endphp

@if (!is_null($href))
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </button>
@endif