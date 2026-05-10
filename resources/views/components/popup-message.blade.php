@props([
    'type' => 'success',   // success | error | warning | info
    'message' => null,
    'title' => null,
    'closable' => true,
])

@php
    $styles = [
        'success' => 'border-green-200 bg-green-50 text-green-700',
        'error'   => 'border-red-200 bg-red-50 text-red-700',
        'warning' => 'border-yellow-200 bg-yellow-50 text-yellow-700',
        'info'    => 'border-blue-200 bg-blue-50 text-blue-700',
    ];

    $icons = [
        'success' => 'check_circle',
        'error'   => 'error',
        'warning' => 'warning',
        'info'    => 'info',
    ];

    $styleClass = $styles[$type] ?? $styles['info'];
    $icon = $icons[$type] ?? $icons['info'];
@endphp

@if ($message)
    <div
        x-data="{ open: true }"
        x-show="open"
        x-transition
        class="fixed top-5 right-5 z-50 w-full max-w-sm rounded-xl border px-4 py-3 shadow-lg {{ $styleClass }}"
    >
        <div class="flex items-start gap-3">
            <span class="material-symbols-outlined mt-0.5 text-[22px]">
                {{ $icon }}
            </span>

            <div class="flex-1">
                @if ($title)
                    <p class="text-sm font-bold">
                        {{ $title }}
                    </p>
                @endif

                <p class="text-sm">
                    {{ $message }}
                </p>
            </div>

            @if ($closable)
                <button
                    type="button"
                    class="ml-2 text-lg leading-none opacity-70 hover:opacity-100"
                    @click="open = false"
                    aria-label="Close"
                >
                    ×
                </button>
            @endif
        </div>
    </div>

    @if ($closable)
        <script>
            setTimeout(() => {
                const el = document.querySelector('[x-data]');
                if (el) {
                    el.style.display = 'none';
                }
            }, 4000);
        </script>
    @endif
@endif