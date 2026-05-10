{{-- resources/views/components/course-card.blade.php --}}

{{-- cara penggunaan di view
<x-course-card
    status="In Progress"
    title="Introduction to Programming"
    description="Learn the basics of programming with this comprehensive course designed for beginners."
    moduleCurrent="3"
    moduleTotal="10"
    progress="30"
    nextLesson="Variables and Data Types"
    icon="code"
    image="{{ asset('images/course-1.jpg') }}"
    tag="Programming"
/>
--}}

@props([
    'status' => null,
    'title' => '',
    'description' => '',
    'teacher' => '',
    'moduleCurrent' => 0,
    'moduleTotal' => 0,
    'progress' => 0,
    'nextLesson' => '',
    'icon' => 'school',
    'image' => null,
    'tag' => null,
    'layout' => 'default',
    'actionLabel' => null,
    'completed' => false,
])

@php
    $progressValue = rtrim((string) $progress, '%');
    $progressValue = is_numeric($progressValue) ? (float) $progressValue : 0;
    $progressValue = max(0, min(100, $progressValue));
@endphp

<div {{ $attributes->merge(['class' => 'group bg-surface-container-lowest rounded-xl transition-all duration-300 hover:bg-primary-fixed relative overflow-hidden']) }}>

    @if ($image)
        <div class="relative h-52 w-full overflow-hidden">
            <img
                src="{{ $image }}"
                alt="{{ $title }}"
                class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-105"
            >
        </div>
    @endif

    <div class="relative p-8 z-10">
        <div class="flex items-start justify-between gap-4 mb-6">
            <span class="inline-block px-3 py-1 bg-secondary-container text-on-secondary-container text-[10px] font-bold uppercase tracking-widest rounded-sm">
                {{ $status }}
            </span>

            @if ($tag)
                <span class="inline-block px-3 py-1 bg-primary/10 text-primary text-[10px] font-bold uppercase tracking-widest rounded-sm">
                    {{ $tag }}
                </span>
            @endif
        </div>

        <div class="absolute top-4 right-4 p-4 opacity-10 group-hover:opacity-20 transition-opacity pointer-events-none">
            <span class="material-symbols-outlined text-6xl text-primary">{{ $icon }}</span>
        </div>

        <h4 class="serif-text text-2xl font-bold mb-2">
            {{ $title }}
        </h4>

        <p class="text-sm text-on-surface-variant mb-8 line-clamp-2">
            {{ $description }}
        </p>

        <div class="space-y-4">
            <div class="flex justify-between text-xs font-label">
                <span class="text-slate-500">
                    Module {{ $moduleCurrent }} of {{ $moduleTotal }}
                </span>
                <span class="font-bold text-primary">
                    {{ $progressValue }}% Complete
                </span>
            </div>

            <div class="h-1 w-full bg-secondary-fixed rounded-full overflow-hidden">
                <div
                    class="h-full bg-primary rounded-full shadow-[0_0_8px_rgba(76,0,128,0.4)]"
                    style="width: {{ $progressValue }}%"
                ></div>
            </div>
        </div>

        <div class="mt-8 pt-6 border-t border-outline-variant/20 flex items-center gap-4">
            <span class="material-symbols-outlined text-primary text-sm">schedule</span>
            <span class="text-xs font-medium text-slate-600">
                Next Lesson:
                <span class="text-on-surface font-bold">{{ $nextLesson }}</span>
            </span>
        </div>
    </div>
</div>