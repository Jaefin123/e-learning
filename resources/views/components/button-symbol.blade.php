@props(['size' => 'md', 'variant' => 'solid'])

@php
    // Setup ukuran berdasarkan padding yang Anda inginkan
    $sizes = [
        'sm' => 'p-1',
        'md' => 'p-2',
        'lg' => 'p-3',
    ];

    // Logika varian: 'solid' (seperti sebelumnya) atau 'ghost' (seperti contoh baru Anda)
    $variants = [
        'solid' => 'bg-primary text-on-primary scale-95 active:opacity-80',
        'ghost' => 'hover:bg-slate-100 text-on-surface-variant',
    ];

    $sizeClass = $sizes[$size] ?? $sizes['md'];
    $variantClass = $variants[$variant] ?? $variants['solid'];
@endphp

<button {{ $attributes->merge([
    'class' => "$sizeClass $variantClass transition-all duration-300 rounded-full flex items-center justify-center"
]) }}>
    {{ $slot }}
</button>
