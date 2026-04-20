{{-- contoh cara menggunakan nya di view --}}

{{-- 
<x-select-option label="Departement / Major" name="major" icon="" size="md">
    <option value="" disabled selected>Select your departement</option>
    <option value="TS">Teknik Sipil</option>
    <option value="TKM">Teknik Komputer</option>
    <option value="TL">Teknik Lingkungan</option>
</x-select-option> 
--}}

@props([
    'label' => '',
    'name' => '',
    'icon' => null,
    'size' => 'md',
    'options' => [], // Array untuk pilihan: ['value' => 'Label']
])

@php
    // Mapping ukuran agar identik dengan input sebelumnya
    $sizes = [
        'sm' => 'py-2.5 text-xs',
        'md' => 'py-4 text-sm',
        'lg' => 'py-5 text-base',
    ];
    $sizeClass = $sizes[$size] ?? $sizes['md'];
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
            <span
                class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline pointer-events-none">
                {{ $icon }}
            </span>
        @endif

        <select name="{{ $name }}"
            {{ $attributes->merge([
                'class' => "w-full $paddingLeft pr-10 $sizeClass bg-surface-container-high border-none rounded-xl focus:ring-2 focus:ring-primary/40 text-on-surface font-body transition-all outline-none appearance-none",
            ]) }}>
            {{ $slot }}
        </select>

        {{-- Ikon Panah Dropdown Custom --}}
        {{-- <div class="absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none text-outline">
            <span class="material-symbols-outlined text-sm">expand_more</span>
        </div> --}}
    </div>
</div>
