
@props([
    'size' => 'md', 
    'href' => null, 
    'variant' => 'primary' // Default warna ke primary
])

@php
    // 1. Mapping Ukuran
    $sizes = [
        'sm' => 'px-4 py-1.5 text-xs',
        'md' => 'px-6 py-2.5 text-sm',
        'lg' => 'px-8 py-3.5 text-base',
    ];

    // 2. Mapping Warna (Variant)
    $variants = [
        'primary'   => 'bg-primary text-on-primary',
        'secondary' => 'bg-slate-200 text-slate-800 hover:bg-slate-300',
        'danger'    => 'bg-red-600 text-white hover:bg-red-700',
        'success'   => 'bg-green-600 text-white hover:bg-green-700',
        'ghost'     => 'bg-surface-container-high text-on-surface font-bold hover:bg-surface-container-highest',
    ];

    $sizeClass = $sizes[$size] ?? $sizes['md'];
    $variantClass = $variants[$variant] ?? $variants['primary'];
    
    // Class gabungan
    $classes = "$sizeClass $variantClass rounded-xl font-bold font-inter scale-95 active:opacity-80 transition-all duration-300 inline-flex items-center justify-center decoration-none";
@endphp

@if($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
@else
    <button {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </button>
@endif

