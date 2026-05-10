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
    'label' => null,
    'type' => 'text',
    'name' => '',
    'id' => null,
    'placeholder' => '',
    'icon' => null,
    'size' => 'md',
    'width' => 'full',
    'value' => null,
    'autocomplete' => null,
    'required' => false,
    'disabled' => false,
    'readonly' => false,
    'togglePassword' => false,
])

@php
    $id = $id ?? ($name ?: uniqid('input-'));

    $sizes = [
        'sm' => 'h-10 text-sm',
        'md' => 'h-12 text-sm',
        'lg' => 'h-14 text-base',
    ];

    $widths = [
        'auto' => 'w-fit',
        'full' => 'w-full',
        'sm' => 'max-w-xs',
        'md' => 'max-w-sm',
        'lg' => 'max-w-md',
        'xl' => 'max-w-xl',
    ];

    $sizeClass = $sizes[$size] ?? $sizes['md'];
    $widthClass = $widths[$width] ?? $widths['full'];

    $hasToggle = $togglePassword && $type === 'password';

    $paddingLeft = $icon ? 'pl-12' : 'pl-4';
    $paddingRight = $hasToggle ? 'pr-12' : 'pr-4';

    $inputClasses = trim(
        "block w-full rounded-xl border-0 bg-surface-container-high text-on-surface placeholder:text-on-surface-variant/70 outline-none ring-1 ring-transparent transition focus:ring-2 focus:ring-primary/40 disabled:cursor-not-allowed disabled:opacity-60 {$sizeClass} {$paddingLeft} {$paddingRight}"
    );
@endphp

<div class="space-y-1.5 {{ $widthClass }}">
    @if ($label)
        <label for="{{ $id }}" class="ml-1 text-xs font-bold uppercase tracking-wider text-on-surface-variant">
            {{ $label }}
        </label>
    @endif

    <div class="relative" data-password-wrapper>
        @if ($icon)
            <span class="material-symbols-outlined pointer-events-none absolute left-4 top-1/2 -translate-y-1/2 text-outline text-[20px] leading-none">
                {{ $icon }}
            </span>
        @endif

        <input
            id="{{ $id }}"
            name="{{ $name }}"
            type="{{ $type }}"
            placeholder="{{ $placeholder }}"
            value="{{ old($name, $value) }}"
            @if($autocomplete) autocomplete="{{ $autocomplete }}" @endif
            @if($required) required @endif
            @if($disabled) disabled @endif
            @if($readonly) readonly @endif
            {{ $attributes->merge(['class' => $inputClasses]) }}
            @if($hasToggle) data-password-input @endif
        />

        @if ($hasToggle)
            <button
                type="button"
                class="absolute right-3 top-1/2 -translate-y-1/2 text-outline hover:text-on-surface"
                data-password-toggle
                aria-label="Show password"
            >
                <span class="material-symbols-outlined text-[20px] leading-none" data-password-icon>
                    visibility
                </span>
            </button>
        @endif
    </div>

    @error($name)
        <p class="ml-1 text-xs text-red-600">{{ $message }}</p>
    @enderror
</div>

@once
    <script>
        document.addEventListener('click', function (e) {
            const btn = e.target.closest('[data-password-toggle]');
            if (!btn) return;

            const wrapper = btn.closest('[data-password-wrapper]');
            if (!wrapper) return;

            const input = wrapper.querySelector('[data-password-input]');
            const icon = btn.querySelector('[data-password-icon]');
            if (!input) return;

            const isPassword = input.type === 'password';
            input.type = isPassword ? 'text' : 'password';

            if (icon) {
                icon.textContent = isPassword ? 'visibility_off' : 'visibility';
            }

            btn.setAttribute('aria-label', isPassword ? 'Hide password' : 'Show password');
        });
    </script>
@endonce
