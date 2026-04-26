@extends('layouts.dosen.app')
@section('content')
<main class="ml-72 min-h-screen">
    <!-- TopAppBar -->
    
    <!-- Editorial Content -->
    <div class="p-12 max-w-7xl mx-auto space-y-16">
        <!-- Page Header (Asymmetric) -->
        <section class="flex flex-col md:flex-row justify-between items-end gap-8">
            <div class="max-w-2xl">
                <span
                    class="font-headline uppercase text-xs tracking-[0.2em] font-bold text-primary mb-4 block">Curriculum
                    Overview</span>
                <h2 class="text-6xl font-headline font-black text-on-surface tracking-tighter leading-none mb-6">Course
                    <br /> Management</h2>
                <p class="text-lg text-on-surface-variant font-body leading-relaxed">
                    Curate your academic offerings with precision. This semester focuses on the intersection of <span
                        class="italic text-primary">Structural Narratives</span> and <span
                        class="italic text-primary">Classical Critique</span>.
                </p>
            </div>
            <div class="flex flex-col items-end text-right">
                <div class="text-4xl font-headline font-bold text-purple-900">08</div>
                <div class="font-headline uppercase text-[10px] tracking-widest font-bold text-slate-400">Active Modules
                </div>
            </div>
        </section>
        <!-- Course Bento Grid -->
        <div class="grid grid-cols-1 md:grid-cols-12 gap-8">
            <!-- Large Featured Card -->
            <div class="md:col-span-8 group cursor-pointer">
                <div
                    class="relative h-[450px] overflow-hidden rounded-xl bg-surface-container-lowest transition-all duration-500 hover:shadow-[0px_12px_32px_rgba(45,0,79,0.06)]">
                    <div class="absolute inset-0 bg-gradient-to-t from-primary/80 via-transparent to-transparent z-10">
                    </div>
                    <img alt="Modernist Architecture"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                        data-alt="detailed architectural close-up of a brutalist concrete building with sharp shadows and geometric windows in black and white"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuC099BtyT052blObv6yz-_p1g5lXzo-kvqYCLHX9VAv3Fy2ZGlvxWn5jnlVqKK3FglLJJJoyM4bVnwbOURAJFL2qfKM45dpoZV5zw8bD6CCHURXTL1m4eeDkM9GpGaVDCzcVmUUQ6vVglVJi_Q3wOa0B3ixPgoLL2cDOV6_whXquDQcDV01ymueYVelU9GfeueLvmsknpo4qM4DmJ3A0ozDeXxs7d1_cC876YzPH5S6jl60Fwx4U38OWhHOuhkx9rj4BT9f-8TOev4" />
                    <div class="absolute bottom-0 left-0 p-10 z-20 w-full flex justify-between items-end">
                        <div class="space-y-2">
                            <span
                                class="font-headline uppercase text-[10px] tracking-[0.2em] font-bold text-primary-fixed block">Spring
                                Semester 2024</span>
                            <h3 class="text-4xl font-headline font-extrabold text-white">Modernist Architectural Theory
                            </h3>
                            <div
                                class="flex items-center space-x-4 text-white/80 font-headline text-xs font-semibold uppercase tracking-widest mt-4">
                                <span class="flex items-center"><span
                                        class="material-symbols-outlined text-sm mr-1">groups</span> 124 Students</span>
                                <span class="flex items-center"><span
                                        class="material-symbols-outlined text-sm mr-1">history_edu</span> 12
                                    Lectures</span>
                            </div>
                        </div>
                        <div class="flex space-x-3">
                            <button
                                class="p-3 bg-white/10 backdrop-blur-md rounded-full text-white hover:bg-white hover:text-primary transition-all duration-300">
                                <span class="material-symbols-outlined">edit_note</span>
                            </button>
                            <button
                                class="p-3 bg-white text-primary rounded-full hover:scale-110 transition-transform duration-300">
                                <span class="material-symbols-outlined">arrow_forward</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Vertical Secondary Card -->
            <div class="md:col-span-4 h-full">
                <div class="bg-surface-container-low p-10 h-full rounded-xl flex flex-col justify-between">
                    <div class="space-y-6">
                        <span
                            class="font-headline uppercase text-[10px] tracking-[0.2em] font-bold text-secondary block">Comparative
                            Literature</span>
                        <h3 class="text-3xl font-body font-bold leading-tight">Narratives of the Post-Industrial Age
                        </h3>
                        <div class="space-y-4 pt-4">
                            <div
                                class="flex justify-between items-center text-xs uppercase font-bold tracking-widest text-slate-400">
                                <span>Grading Progress</span>
                                <span>82%</span>
                            </div>
                            <div class="h-1.5 w-full bg-secondary-fixed rounded-full overflow-hidden">
                                <div class="h-full bg-primary shadow-[0_0_8px_rgba(76,0,128,0.4)]" style="width: 82%">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pt-8">
                        <button
                            class="w-full py-3 bg-white text-on-surface text-xs uppercase font-bold tracking-widest rounded-lg hover:bg-primary-fixed transition-colors duration-300">
                            Manage Roster
                        </button>
                    </div>
                </div>
            </div>
            <!-- Tonal Sub-Grid -->
            <div class="md:col-span-12 grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Course Item 03 -->
                <div
                    class="bg-surface-container-lowest p-8 rounded-xl space-y-6 group hover:bg-primary-fixed/30 transition-all duration-300">
                    <div class="flex justify-between items-start">
                        <div class="w-12 h-12 bg-tertiary-fixed rounded-lg flex items-center justify-center">
                            <span class="material-symbols-outlined text-tertiary">brush</span>
                        </div>
                        <span class="font-headline text-[10px] uppercase font-bold tracking-widest text-slate-400">Term
                            02</span>
                    </div>
                    <div>
                        <h4 class="text-xl font-headline font-bold text-on-surface">Classical Art Critique</h4>
                        <p class="text-sm text-on-surface-variant mt-2 font-body">Deep dive into the aesthetics of the
                            Renaissance and Enlightenment.</p>
                    </div>
                    <div class="flex items-center justify-between pt-4">
                        <div class="flex -space-x-2">
                            <img class="w-8 h-8 rounded-full border-2 border-white object-cover"
                                data-alt="portrait of a young male student with a thoughtful expression"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBzNizVVpdtts-z_I7o0avb5V11L4d-1cCupNL5jQlg8_6BHX9jvz4IoPFzJQJSxjXqxbqTwKR5VO8-xGwC2hXQ59kMc0pVkkV5_-cWpkRomVQ1nSTc81mTQpH9eO0Cw_45mbIQA-h3ycowqKnVYZHmQRocKJaMJsy1p0SqfEY40kLBesJLkQT9fm0mkXuGHuL0MQCugu9vI6ctOWeJ1JIAq-3zPLt2BO9m3g9b6CvsYUau14BAs2NopfhCAr8_nOol3Udygs0QZHA" />
                            <img class="w-8 h-8 rounded-full border-2 border-white object-cover"
                                data-alt="portrait of a young female student smiling warmly"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuB5yqixRGtav-oi1jkxI33jvYEXFqJtq6kpIS0RhLytdWGtsGN2zSEIwXbr52-p0alKwoOWlGaOPe8sKniITA5ERbkHNa0Q42qGN2-Lo021ceIjO3w-WrxIAh-Y0wyjAYxNpwk7AVclgCVFu5YzZGF0j4yupx97zGNkAYOq7Gantrmq3urt7oH061lOp2HYMOSvkqDXOJPAQG1G8jmp8OL-YdRF21b-8Z-yBL4KB8UbUpJm58w6EsLB5OUof0GNvBdqQC8FPqseMCE" />
                            <div
                                class="w-8 h-8 rounded-full border-2 border-white bg-slate-100 flex items-center justify-center text-[10px] font-bold text-slate-500">
                                +42</div>
                        </div>
                        <button class="text-primary hover:translate-x-1 transition-transform">
                            <span class="material-symbols-outlined">settings</span>
                        </button>
                    </div>
                </div>
                <!-- Course Item 04 -->
                <div
                    class="bg-surface-container-lowest p-8 rounded-xl space-y-6 group hover:bg-primary-fixed/30 transition-all duration-300">
                    <div class="flex justify-between items-start">
                        <div class="w-12 h-12 bg-secondary-fixed rounded-lg flex items-center justify-center">
                            <span class="material-symbols-outlined text-secondary">database</span>
                        </div>
                        <span class="font-headline text-[10px] uppercase font-bold tracking-widest text-slate-400">Term
                            02</span>
                    </div>
                    <div>
                        <h4 class="text-xl font-headline font-bold text-on-surface">Digital Archive Logic</h4>
                        <p class="text-sm text-on-surface-variant mt-2 font-body">Information systems and taxonomy for
                            modern curators.</p>
                    </div>
                    <div class="flex items-center justify-between pt-4">
                        <div class="flex -space-x-2">
                            <img class="w-8 h-8 rounded-full border-2 border-white object-cover"
                                data-alt="portrait of a middle aged man with glasses in a professional studio setting"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBe227E_RAeGzXua2RYNY18iwyYP6EWjDUiYgMeoLFihdsGGGHXcus3t6Wo2Avm2rQpNlz0VvguHaYMcetvgenghrMvB172OYuWLzQaZe0Lp88Fk1DJ5UEK_hem-0iDjTOCZiWLqWobfKs3etXLChqb5wIW9co-aX0Xmo0mnJFVVW9gFgwp9vydwMMlVAsFeAMl20qH0qeQMza3d9LF42RHdI6TPgF8NS6_VNPMMchrNCVhhYC-b0NqKcFFpCH_Jd2G92w4ZM-dn4c" />
                            <img class="w-8 h-8 rounded-full border-2 border-white object-cover"
                                data-alt="portrait of a young woman with a focused academic look"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDhGgZ3cIKIQD1GoKNUVHB_U1gDEHySHISnBBP5BRlFCCxxxaez2o454Lecrvqz2s640Hv-6TYGFa9VL18sJgwKCIf2Y48FuPA1coIkT2KnSDqOdzTER2HfkRL_5sPBvd0HAwhxbrmqQ77iXu9wCXtxYpXqVTONFqQ_rzCDrepb9J8agXnbE_o_N2hGPGR85jhuJBVzpYt5SAYLT7POePJFE4nl38SswMGaMXR1V73jLyn8PQyZRmGWrV3_C7IE4y8xD_IRzJUclmQ" />
                            <div
                                class="w-8 h-8 rounded-full border-2 border-white bg-slate-100 flex items-center justify-center text-[10px] font-bold text-slate-500">
                                +18</div>
                        </div>
                        <button class="text-primary hover:translate-x-1 transition-transform">
                            <span class="material-symbols-outlined">settings</span>
                        </button>
                    </div>
                </div>
                <!-- Course Item 05 (Empty State/Add New) -->
                <div
                    class="border-2 border-dashed border-outline-variant/30 rounded-xl p-8 flex flex-col items-center justify-center space-y-4 text-center group hover:bg-white transition-all duration-300">
                    <div
                        class="w-12 h-12 bg-surface-container-high rounded-full flex items-center justify-center group-hover:bg-primary group-hover:text-white transition-colors duration-300">
                        <span class="material-symbols-outlined">add</span>
                    </div>
                    <div>
                        <h4 class="text-lg font-headline font-bold text-on-surface">Propose New Course</h4>
                        <p class="text-xs text-slate-400 mt-1 uppercase tracking-widest font-bold">Fall 2024</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Stats (Subtle Depth) -->
        <section
            class="bg-surface-container-low rounded-2xl p-12 flex flex-col md:flex-row justify-around items-center gap-12">
            <div class="text-center">
                <div class="text-sm font-headline uppercase tracking-[0.2em] font-bold text-slate-400 mb-2">Total
                    Students</div>
                <div class="text-5xl font-headline font-black text-primary">1,402</div>
            </div>
            <div class="h-12 w-px bg-outline-variant/20 hidden md:block"></div>
            <div class="text-center">
                <div class="text-sm font-headline uppercase tracking-[0.2em] font-bold text-slate-400 mb-2">Average GPA
                </div>
                <div class="text-5xl font-headline font-black text-secondary">3.82</div>
            </div>
            <div class="h-12 w-px bg-outline-variant/20 hidden md:block"></div>
            <div class="text-center">
                <div class="text-sm font-headline uppercase tracking-[0.2em] font-bold text-slate-400 mb-2">Submission
                    Rate</div>
                <div class="text-5xl font-headline font-black text-tertiary">94%</div>
            </div>
        </section>
    </div>
</main>
@endsection