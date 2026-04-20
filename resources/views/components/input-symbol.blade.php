{{-- cara menggunakan di view --}}
{{-- 
    <x-input-symbol 
        size="md" 
        label="Password" 
        type="password" 
        name="password" 
        icon="lock" // isi material-symbols-outlined jika di kosongkan tidak ada iconnya
        placeholder="••••••••" 
    /> 
--}}

@props([
    'label' => '',
    'type' => 'text',
    'name' => '',
    'placeholder' => '',
    'icon' => null,
    'size' => 'md',
])

@php
    // Mapping ukuran (padding & text)
    $sizes = [
        'sm' => 'py-2.5 text-xs',
        'md' => 'py-4 text-sm',
        'lg' => 'py-5 text-base',
    ];
    $sizeClass = $sizes[$size] ?? $sizes['md'];

    // Atur padding kiri jika ada ikon
    $paddingLeft = $icon ? 'pl-12' : 'pl-4';
@endphp

<div class="space-y-1.5">
    @if ($label)
        <label class="font-label text-xs font-bold text-on-surface-variant uppercase tracking-wider ml-1">
            {{ $label }}
        </label>
    @endif

    <div class="relative">
        @if ($icon)
            <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline">
                {{ $icon }}
            </span>
        @endif

        <input type="{{ $type }}" name="{{ $name }}" placeholder="{{ $placeholder }}"
            {{ $attributes->merge([
                'class' => "w-full $paddingLeft pr-4 $sizeClass bg-surface-container-high border-none rounded-xl focus:ring-2 focus:ring-primary/40 text-on-surface font-body transition-all outline-none",
            ]) }}>
    </div>
</div>
