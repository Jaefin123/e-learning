{{-- resources/views/components/grade-card.blade.php --}}

{{-- cara penggunaan

<x-grade-card
    grade="A"
    subject="Linguistics"
    date="Oct 19"
/>

<x-grade-card
    grade="A-"
    subject="Economics"
    date="Oct 17"
/>

<x-grade-card
    report
/>

--}}

@props([
    'grade' => null,
    'subject' => '',
    'date' => '',
    'report' => false,
])

<div
    {{ $attributes->merge([
        'class' =>
            'bg-surface-container-lowest rounded-2xl border border-outline-variant/10 p-6 min-h-[140px] flex flex-col items-center justify-center text-center transition-all duration-300 hover:shadow-lg hover:-translate-y-1',
    ]) }}>

    @if ($report)
        <div class="space-y-4">
            <div
                class="w-12 h-12 mx-auto rounded-2xl bg-primary/10 flex items-center justify-center">
                <span class="material-symbols-outlined text-primary">
                    more_horiz
                </span>
            </div>

            <div>
                <p class="text-xs font-bold uppercase tracking-[0.2em] text-on-surface">
                    Full Report
                </p>
            </div>
        </div>
    @else
        <div class="space-y-2">
            <h3 class="text-5xl font-black text-primary leading-none">
                {{ $grade }}
            </h3>

            <p class="text-xs font-bold uppercase tracking-[0.2em] text-on-surface">
                {{ $subject }}
            </p>

            <p class="text-sm text-on-surface-variant">
                {{ $date }}
            </p>
        </div>
    @endif
</div>