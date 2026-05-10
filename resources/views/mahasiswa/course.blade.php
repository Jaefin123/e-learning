@extends('layouts.auth.app')
@section('content')
    <main class="min-h-screen">
        <!-- Canvas Content -->
        <div class="px-12 py-16 max-w-7xl mx-auto">
            <!-- Hero Header Section -->
            <section class="mb-16">
                <div class="flex items-baseline justify-between mb-2">
                    <h1 class="text-5xl font-display font-bold text-on-surface tracking-tight">Active Curations</h1>
                    <p class="font-label text-xs uppercase tracking-[0.2em] text-primary font-bold">Fall Semester 2024</p>
                </div>
                <p class="text-xl text-slate-500 max-w-2xl leading-relaxed">Continue your intellectual exploration through
                    our carefully selected contemporary curriculum.</p>
            </section>
            <!-- Filters & Search Layout -->
            <section class="flex flex-wrap items-center justify-between gap-6 mb-12">
                <div class="flex items-center gap-3">
                    <button
                        class="px-6 py-2 bg-primary-container text-white rounded-full text-xs font-label uppercase tracking-wider editorial-shadow">All
                        Courses</button>
                    <button
                        class="px-6 py-2 bg-surface-container-high text-on-surface-variant rounded-full text-xs font-label uppercase tracking-wider hover:bg-primary-fixed transition-colors">Design</button>
                    <button
                        class="px-6 py-2 bg-surface-container-high text-on-surface-variant rounded-full text-xs font-label uppercase tracking-wider hover:bg-primary-fixed transition-colors">History</button>
                    <button
                        class="px-6 py-2 bg-surface-container-high text-on-surface-variant rounded-full text-xs font-label uppercase tracking-wider hover:bg-primary-fixed transition-colors">Science</button>
                </div>
                <div class="flex items-center gap-4">
                    <span class="text-sm font-label text-slate-400">Sort by:</span>
                    <select
                        class="bg-transparent border-none text-sm font-label text-primary font-bold focus:ring-0 cursor-pointer">
                        <option>Most Recent</option>
                        <option>Completion %</option>
                        <option>A-Z</option>
                    </select>
                </div>
            </section>
            <!-- Grid of Course Cards -->
            <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                <x-course-card tag="Architecture" title="The Geometry of Silence" teacher="Prof. Elias Thorne"
                    progress="72"
                    image="https://lh3.googleusercontent.com/aida-public/AB6AXuAR4gbd70DKSnGzZsPEuoRZyhS6O9_kLsvwXgvHjlXvs3pJDbYorYLpBooqVG7PLY9OSCTWy3ZpxUnnye3EdVxM7K_WOpO4Ov5zco_Ty1zsOxvbMWK5stnyRznYIdI9LWL5snQdqNLZblzK68V9GwzlHJRVa_L-xNrvcTCw-96Ink08F53sq4SpKAVwHT7pfSz2oHVTgUCt1yyFMfC8x3Cmy2BvlOZCGVnZwXZPohvgPLUiVYFsVUtGGJZl-qDZqVlHfNv667prWNk" />

                <x-course-card tag="Design" title="Digital Anthropology" teacher="Dr. Sarah Vance" progress="45"
                    image="https://lh3.googleusercontent.com/aida-public/AB6AXuAMBqeUGlCzluHxHumxiEMJtnu6210zD11Ij3TmV1N7cyFBf0uvdbfDhce1g7YUCwJFJpU6pAe6rKhkrI9II3DQIBVEX8gZk_1I8dJX9rvv8B9tUP4zmXIre7LfEmaeAM5TRaB1YUV2xH8VwbaEe-ISEVwOhKMrLoufaNdrSBDjOeZfVuqt9ezVlKnptK8hWwLG0iuMiUbek-Py7eWejr8ZJvUPg3mTR0lZeeAfmC4LjS6Xm4hv-ZNp-TlVOsrYQhM0S3JcNcZIzm4" />

                <x-course-card tag="History" title="The Renaissance Echo" teacher="Marcus Aurelius Jr." progress="89"
                    image="https://lh3.googleusercontent.com/aida-public/AB6AXuCViX1FN7CW0zwj4llpr3VvCLfuz1ylOrzE8Xy3YboL0HoiqjK84NrKpBKl_zwVRqs5AVnKvVaRE_Z2nEer-tTiiMYXAhViRu5adzuyVvKauGATTIsXSrZG4S7B4PgPzxtxSNvkpsyuoTsu1Y4_g41xkKmUoQot6bygjukg0NCcKPehQk0K3mtQXp64Ss9sYZOA3hmBDWpb1e6S9dHDx103F7jY6CqfpU8Utat95KbJbtOFgO1vi-Oa60WcV2hU1Vyl_zaE4hjeDsA" />

                <x-course-card  tag="Science" title="Quantum Mechanics & Poetry"
                    teacher="Prof. Julianna Klay" progress="12"
                    image="https://lh3.googleusercontent.com/aida-public/AB6AXuC2C1tRcg1gya0T3T8mPJHZJHSsoy5cZ5Ph86hUmYddzWXrhpKkoKI0S2FTiS9sZ6fxPeEpwERxs2TJqf0M4Ws3rUZM2vNWJHuNzKwHndUY2eBhptDGFEqFZxTfJREDuL2w1KACgh1ufCaq5vzHRes1t4rVl8HPI8ayQKTLpqepNusgWsFVxa0rLJJOA3-VF4ggwtsXUwHWiii8u7N2lVdSS1sQUe48YNva6meAlA4duCzTBSNyBC63l7WWQB3cWcgQFa2N3jXBaVg"
                    actionLabel="Resume Module" />

                <x-course-card tag="Management" title="Ethical Modernism" teacher="Dean Robert Sterling" progress="100"
                    image="https://lh3.googleusercontent.com/aida-public/AB6AXuBj56-FNohQCuKbgUx7S3MMj1D9Oral4gQ3e4XzaE0I2FpdrxJm690lb6coMQU-QE1zPpu9dwM61W7K6IzNDwgWk8Tzu5xb50jZutsB9uBeLzm11FLzWFqaUayMtDHk8NZGbbonQ6kDqGu7Wk0KX7vvhd-ZBf1mhlosvCO0MVjWKBsQ-h-MMX_Z-isrRWVlPzwJBo9AZwEd9lPUtCHf-W98ynfk5a4G0V3mFco-tosMxbXluGi8lLSlVr_Ead-kEUdrMkp-f21MEXI"
                    completed="true" />
            </section>
            <!-- Bottom Floating Action -->
            <div class="mt-24 text-center">
                <p class="text-slate-400 font-label text-sm mb-6">Need more intellectual depth?</p>
                <button
                    class="bg-white text-primary border border-primary/10 rounded-full px-12 py-4 font-label uppercase tracking-widest text-xs font-black editorial-shadow hover:bg-primary hover:text-white transition-all duration-300">
                    Explore New Courses
                </button>
            </div>
        </div>
        <!-- Footer -->
        <footer
            class="bg-surface-container-low px-12 py-12 flex flex-col md:flex-row justify-between items-center text-slate-400 border-none">
            <div class="font-label text-xs uppercase tracking-[0.2em] mb-4 md:mb-0">
                © 2024 The Academic Editorial
            </div>
            <div class="flex gap-8 text-[10px] font-label uppercase tracking-widest font-bold">
                <a class="hover:text-primary transition-colors" href="#">Curriculum Privacy</a>
                <a class="hover:text-primary transition-colors" href="#">Institutional Terms</a>
                <a class="hover:text-primary transition-colors" href="#">Academic Support</a>
            </div>
        </footer>
    </main>
@endsection
