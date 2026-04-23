@extends('layouts.mahasiswa.app')
@section('content')
    <main class="ml-64 pt-24 pb-12 px-12 min-h-screen">
        <!-- Header Section -->
        <header class="mb-12">
            <h2 class="font-display text-4xl font-black text-on-surface tracking-tight mb-2 uppercase">Academic Performance
            </h2>
            <p class="font-body text-on-surface-variant text-lg">Fall Semester 2024 • Global Economics &amp; Policy Major</p>
        </header>
        <!-- Bento Grid Layout -->
        <div class="grid grid-cols-12 gap-8 mb-12">
            <!-- GPA Circular Visual -->
            <div
                class="col-span-12 lg:col-span-4 bg-surface-container-lowest rounded-full p-10 flex flex-col items-center justify-center relative overflow-hidden group">
                <div
                    class="absolute inset-0 bg-primary-fixed/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                </div>
                <div class="relative w-48 h-48 mb-6">
                    <svg class="w-full h-full transform -rotate-90">
                        <circle class="text-secondary-fixed" cx="96" cy="96" fill="transparent" r="88"
                            stroke="currentColor" stroke-width="12"></circle>
                        <circle class="text-primary drop-shadow-[0_0_8px_rgba(76,0,128,0.3)]" cx="96" cy="96"
                            fill="transparent" r="88" stroke="currentColor" stroke-dasharray="552.9"
                            stroke-dashoffset="55.3" stroke-width="12"></circle>
                    </svg>
                    <div class="absolute inset-0 flex flex-col items-center justify-center">
                        <span class="font-display text-5xl font-black text-on-surface">3.92</span>
                        <span class="font-label text-xs font-bold text-primary tracking-widest uppercase">Cumulative
                            GPA</span>
                    </div>
                </div>
                <p class="font-body italic text-center text-on-surface-variant">Top 5% of Department</p>
            </div>
            <!-- Achievement Row -->
            <div class="col-span-12 lg:col-span-8 grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Achievement Card 1 -->
                <div
                    class="bg-surface-container-lowest p-8 rounded-xl flex flex-col justify-between hover:bg-primary-fixed transition-colors duration-300 group">
                    <div class="flex justify-between items-start">
                        <span class="material-symbols-outlined text-primary text-3xl"
                            style="font-variation-settings: 'FILL' 1;">workspace_premium</span>
                        <span
                            class="text-xs font-bold tracking-tighter text-on-surface-variant uppercase">Recognition</span>
                    </div>
                    <div class="mt-8">
                        <h3 class="font-display text-2xl font-bold leading-tight">Dean's List Honoree</h3>
                        <p
                            class="text-sm mt-2 text-on-surface-variant group-hover:text-on-primary-fixed-variant transition-colors">
                            3 Consecutive Semesters</p>
                    </div>
                </div>
                <!-- Achievement Card 2 -->
                <div
                    class="bg-surface-container-lowest p-8 rounded-xl flex flex-col justify-between hover:bg-primary-fixed transition-colors duration-300 group">
                    <div class="flex justify-between items-start">
                        <span class="material-symbols-outlined text-primary text-3xl"
                            style="font-variation-settings: 'FILL' 1;">school</span>
                        <span class="text-xs font-bold tracking-tighter text-on-surface-variant uppercase">Progress</span>
                    </div>
                    <div class="mt-8">
                        <h3 class="font-display text-2xl font-bold leading-tight">104 Credits Earned</h3>
                        <p
                            class="text-sm mt-2 text-on-surface-variant group-hover:text-on-primary-fixed-variant transition-colors">
                            86% of Degree Path</p>
                    </div>
                </div>
                <!-- Achievement Card 3 -->
                <div
                    class="bg-surface-container-lowest p-8 rounded-xl flex flex-col justify-between hover:bg-primary-fixed transition-colors duration-300 group">
                    <div class="flex justify-between items-start">
                        <span class="material-symbols-outlined text-primary text-3xl"
                            style="font-variation-settings: 'FILL' 1;">leaderboard</span>
                        <span class="text-xs font-bold tracking-tighter text-on-surface-variant uppercase">Global
                            Rank</span>
                    </div>
                    <div class="mt-8">
                        <h3 class="font-display text-2xl font-bold leading-tight">Ranked #12</h3>
                        <p
                            class="text-sm mt-2 text-on-surface-variant group-hover:text-on-primary-fixed-variant transition-colors">
                            Departmental Cohort</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Editorial Course Breakdown -->
        <section class="grid grid-cols-12 gap-8">
            <div class="col-span-12 lg:col-span-8">
                <div class="flex items-baseline justify-between mb-8">
                    <h3 class="font-display text-2xl font-bold">Course Breakdown</h3>
                    <span class="font-label text-xs text-outline tracking-widest uppercase">Current Semester Details</span>
                </div>
                <div class="space-y-4">
                    <!-- Course Item 1 -->
                    <div
                        class="bg-surface-container-lowest p-6 flex items-center group cursor-pointer rounded-xl transition-all hover:translate-x-2">
                        <div class="w-12 h-12 rounded bg-primary-fixed flex items-center justify-center mr-6">
                            <span class="font-display font-black text-primary">A</span>
                        </div>
                        <div class="flex-1">
                            <h4 class="font-display font-bold text-lg text-on-surface">Advanced Macroeconomic Theory</h4>
                            <p class="font-body text-sm text-on-surface-variant">ECO-402 • Prof. Julian Vane</p>
                        </div>
                        <div class="text-right flex items-center space-x-12">
                            <div>
                                <span class="block text-xs font-bold uppercase text-outline tracking-tighter">Credits</span>
                                <span class="font-display font-bold">4.0</span>
                            </div>
                            <div class="w-16 h-8 bg-surface-container flex items-center justify-center rounded-sm">
                                <span class="font-display font-black text-primary">4.0</span>
                            </div>
                        </div>
                    </div>
                    <!-- Course Item 2 -->
                    <div
                        class="bg-surface-container-lowest p-6 flex items-center group cursor-pointer rounded-xl transition-all hover:translate-x-2">
                        <div class="w-12 h-12 rounded bg-primary-fixed flex items-center justify-center mr-6">
                            <span class="font-display font-black text-primary">A-</span>
                        </div>
                        <div class="flex-1">
                            <h4 class="font-display font-bold text-lg text-on-surface">Diplomacy &amp; Global Governance
                            </h4>
                            <p class="font-body text-sm text-on-surface-variant">POL-315 • Dr. Sarah Sterling</p>
                        </div>
                        <div class="text-right flex items-center space-x-12">
                            <div>
                                <span class="block text-xs font-bold uppercase text-outline tracking-tighter">Credits</span>
                                <span class="font-display font-bold">3.0</span>
                            </div>
                            <div class="w-16 h-8 bg-surface-container flex items-center justify-center rounded-sm">
                                <span class="font-display font-black text-primary">3.7</span>
                            </div>
                        </div>
                    </div>
                    <!-- Course Item 3 -->
                    <div
                        class="bg-surface-container-lowest p-6 flex items-center group cursor-pointer rounded-xl transition-all hover:translate-x-2">
                        <div class="w-12 h-12 rounded bg-primary-fixed flex items-center justify-center mr-6">
                            <span class="font-display font-black text-primary">A</span>
                        </div>
                        <div class="flex-1">
                            <h4 class="font-display font-bold text-lg text-on-surface">Ethics in Modern Policy</h4>
                            <p class="font-body text-sm text-on-surface-variant">PHI-280 • Prof. Elena Rossi</p>
                        </div>
                        <div class="text-right flex items-center space-x-12">
                            <div>
                                <span class="block text-xs font-bold uppercase text-outline tracking-tighter">Credits</span>
                                <span class="font-display font-bold">3.0</span>
                            </div>
                            <div class="w-16 h-8 bg-surface-container flex items-center justify-center rounded-sm">
                                <span class="font-display font-black text-primary">4.0</span>
                            </div>
                        </div>
                    </div>
                    <!-- Course Item 4 -->
                    <div
                        class="bg-surface-container-lowest p-6 flex items-center group cursor-pointer rounded-xl transition-all hover:translate-x-2">
                        <div class="w-12 h-12 rounded bg-secondary-fixed flex items-center justify-center mr-6">
                            <span class="font-display font-black text-on-secondary-container">B+</span>
                        </div>
                        <div class="flex-1">
                            <h4 class="font-display font-bold text-lg text-on-surface">Statistical Econometrics</h4>
                            <p class="font-body text-sm text-on-surface-variant">MAT-450 • Dr. Marcus Thorne</p>
                        </div>
                        <div class="text-right flex items-center space-x-12">
                            <div>
                                <span class="block text-xs font-bold uppercase text-outline tracking-tighter">Credits</span>
                                <span class="font-display font-bold">4.0</span>
                            </div>
                            <div class="w-16 h-8 bg-surface-container flex items-center justify-center rounded-sm">
                                <span class="font-display font-black text-primary">3.3</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Side CTA Panel -->
            <div class="col-span-12 lg:col-span-4">
                <div class="bg-primary-container p-8 rounded-xl text-white sticky top-24">
                    <h3 class="font-display text-2xl font-bold mb-4 leading-tight">Academic Guidance</h3>
                    <p class="text-on-primary-container mb-8 font-body">Ready to plan your next semester? Connect with your
                        dedicated advisor to optimize your path toward graduation.</p>
                    <div class="flex items-center space-x-4 p-4 bg-white/10 rounded-xl mb-8 backdrop-blur-sm">
                        <div class="w-14 h-14 rounded-full overflow-hidden flex-shrink-0 border-2 border-white/20">
                            <img alt="Advisor Profile Photo" class="w-full h-full object-cover"
                                data-alt="professional portrait of an academic advisor in a modern office with natural light, wearing professional attire and a friendly expression"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuA32Ql3spFvCCu-sQFTaZq9AsTkUQMhcuxuXXiSkaB5sPysW3XQbmEdTFanIwm0oMPULBsOVsWWr6JwDI_yLdbr5fWJxPWRXqoNwUN6kB5eA7gYZgpbdxluprqgJx9kUMIxEk9-k0I_Rzq2e7Rjp9_68Jg3JqBPkhq-yNOILm8olSIsIR3HcU0da3blmdry9MlXvqmkPr7jAgZEaBBzeR6K76bI1jaa-TuZCWVr6tMw5TcwDurzYAgr-U1dQAn5zVEo9mXZgPvJHCk" />
                        </div>
                        <div>
                            <p class="font-display font-bold text-white">Dr. Aris Thorne</p>
                            <p class="text-xs text-white/70 uppercase font-label">Senior Academic Advisor</p>
                        </div>
                    </div>
                    <button
                        class="w-full bg-white text-primary font-bold py-4 rounded-xl hover:bg-primary-fixed transition-colors shadow-xl">
                        Schedule Consultation
                    </button>
                    <div class="mt-8 pt-8 border-t border-white/10">
                        <p class="text-xs font-bold uppercase tracking-widest text-white/50 mb-4">Upcoming Deadlines</p>
                        <div class="space-y-4">
                            <div class="flex justify-between items-center">
                                <span class="text-sm font-body">Thesis Proposal</span>
                                <span class="text-xs font-bold bg-error text-white px-2 py-1 rounded-sm">Oct 12</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-sm font-body">Research Grant App</span>
                                <span class="text-xs font-bold bg-white/20 text-white px-2 py-1 rounded-sm">Nov 05</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
