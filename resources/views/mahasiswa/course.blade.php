@extends('layouts.mahasiswa.app')
@section('content')
<main class="ml-64 min-h-screen">
    <!-- TopNavBar -->
    <header
        class="bg-white/70 sticky top-0 backdrop-blur-3xl editorial-shadow flex justify-between items-center w-full px-8 h-16 z-40">
        <div class="flex items-center gap-8">
            <div class="text-xl font-black tracking-tighter text-purple-900">The Academic Editorial</div>
            <div class="relative w-80">
                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-lg"
                    data-icon="search">search</span>
                <input
                    class="w-full bg-surface-container-high border-none rounded-md pl-10 py-1.5 text-sm focus:ring-2 focus:ring-primary/20 placeholder:text-slate-400"
                    placeholder="Search courses, faculty..." type="text" />
            </div>
        </div>
        <div class="flex items-center gap-6">
            <div class="flex gap-4">
                <button class="text-slate-500 hover:bg-purple-50 p-2 rounded-full transition-colors active:scale-95">
                    <span class="material-symbols-outlined" data-icon="notifications">notifications</span>
                </button>
                <button class="text-slate-500 hover:bg-purple-50 p-2 rounded-full transition-colors active:scale-95">
                    <span class="material-symbols-outlined" data-icon="settings">settings</span>
                </button>
            </div>
            <div class="w-10 h-10 rounded-full bg-slate-200 overflow-hidden border-2 border-white editorial-shadow">
                <img alt="Student avatar"
                    data-alt="close-up portrait of a thoughtful young man with curly hair in a university library setting with soft bookshelf background"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuC-x1R7S8a9KWJHRq7MGi6xv806sCGpBIFhgf5YYYxq216vQwAYszBUte3esiiPsoUylP-46BT5yOKl85GCqdRGlXWpHvyalwjroPVEbjWn5deM4HB6xVlSRzjk-NrqrX-33I83ifVFYh1PiisnT26doueiWOeE9rYZVA1MVkbJO-OU858f07XyGgAsgJIIP6m7utK1QIkGnfBH8UIsSXpWqsREj5QBzMeXgY7gG5LSjNi0PDyGYxyUluLVN1a2Lm7bocW-MeXoDng" />
            </div>
        </div>
    </header>
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
            <!-- Card 1 -->
            <div
                class="group bg-surface-container-lowest rounded-xl overflow-hidden editorial-shadow course-card-hover transition-all duration-500">
                <div class="h-56 overflow-hidden relative">
                    <img alt="Architecture"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                        data-alt="dramatic low-angle shot of a modern skyscraper with reflective glass windows against a clear blue sky at midday"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAR4gbd70DKSnGzZsPEuoRZyhS6O9_kLsvwXgvHjlXvs3pJDbYorYLpBooqVG7PLY9OSCTWy3ZpxUnnye3EdVxM7K_WOpO4Ov5zco_Ty1zsOxvbMWK5stnyRznYIdI9LWL5snQdqNLZblzK68V9GwzlHJRVa_L-xNrvcTCw-96Ink08F53sq4SpKAVwHT7pfSz2oHVTgUCt1yyFMfC8x3Cmy2BvlOZCGVnZwXZPohvgPLUiVYFsVUtGGJZl-qDZqVlHfNv667prWNk" />
                    <div class="absolute top-4 left-4">
                        <span
                            class="bg-white/90 backdrop-blur-md px-3 py-1 rounded text-[10px] font-label font-bold uppercase tracking-widest text-primary">Architecture</span>
                    </div>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold font-body mb-2 text-on-surface">The Geometry of Silence</h3>
                    <p class="text-sm text-slate-500 mb-8 font-label uppercase tracking-tighter italic">Prof. Elias
                        Thorne</p>
                    <div class="space-y-3">
                        <div class="flex justify-between items-center text-xs font-label text-slate-400">
                            <span>Curriculum Progress</span>
                            <span class="font-bold text-primary">72%</span>
                        </div>
                        <div class="h-1.5 w-full bg-secondary-fixed rounded-full overflow-hidden">
                            <div class="h-full bg-primary rounded-full shadow-[0_0_8px_rgba(76,0,128,0.4)]"
                                style="width: 72%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div
                class="group bg-surface-container-lowest rounded-xl overflow-hidden editorial-shadow course-card-hover transition-all duration-500">
                <div class="h-56 overflow-hidden relative">
                    <img alt="Design"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                        data-alt="abstract composition of vibrant colorful acrylic paints swirling together in water with organic fluid shapes"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAMBqeUGlCzluHxHumxiEMJtnu6210zD11Ij3TmV1N7cyFBf0uvdbfDhce1g7YUCwJFJpU6pAe6rKhkrI9II3DQIBVEX8gZk_1I8dJX9rvv8B9tUP4zmXIre7LfEmaeAM5TRaB1YUV2xH8VwbaEe-ISEVwOhKMrLoufaNdrSBDjOeZfVuqt9ezVlKnptK8hWwLG0iuMiUbek-Py7eWejr8ZJvUPg3mTR0lZeeAfmC4LjS6Xm4hv-ZNp-TlVOsrYQhM0S3JcNcZIzm4" />
                    <div class="absolute top-4 left-4">
                        <span
                            class="bg-white/90 backdrop-blur-md px-3 py-1 rounded text-[10px] font-label font-bold uppercase tracking-widest text-primary">Design</span>
                    </div>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold font-body mb-2 text-on-surface">Digital Anthropology</h3>
                    <p class="text-sm text-slate-500 mb-8 font-label uppercase tracking-tighter italic">Dr. Sarah Vance
                    </p>
                    <div class="space-y-3">
                        <div class="flex justify-between items-center text-xs font-label text-slate-400">
                            <span>Curriculum Progress</span>
                            <span class="font-bold text-primary">45%</span>
                        </div>
                        <div class="h-1.5 w-full bg-secondary-fixed rounded-full overflow-hidden">
                            <div class="h-full bg-primary rounded-full shadow-[0_0_8px_rgba(76,0,128,0.4)]"
                                style="width: 45%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div
                class="group bg-surface-container-lowest rounded-xl overflow-hidden editorial-shadow course-card-hover transition-all duration-500">
                <div class="h-56 overflow-hidden relative">
                    <img alt="History"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                        data-alt="close-up of an ancient leather-bound book with yellowed pages lying on a rustic wooden table with soft candle light"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCViX1FN7CW0zwj4llpr3VvCLfuz1ylOrzE8Xy3YboL0HoiqjK84NrKpBKl_zwVRqs5AVnKvVaRE_Z2nEer-tTiiMYXAhViRu5adzuyVvKauGATTIsXSrZG4S7B4PgPzxtxSNvkpsyuoTsu1Y4_g41xkKmUoQot6bygjukg0NCcKPehQk0K3mtQXp64Ss9sYZOA3hmBDWpb1e6S9dHDx103F7jY6CqfpU8Utat95KbJbtOFgO1vi-Oa60WcV2hU1Vyl_zaE4hjeDsA" />
                    <div class="absolute top-4 left-4">
                        <span
                            class="bg-white/90 backdrop-blur-md px-3 py-1 rounded text-[10px] font-label font-bold uppercase tracking-widest text-primary">History</span>
                    </div>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold font-body mb-2 text-on-surface">The Renaissance Echo</h3>
                    <p class="text-sm text-slate-500 mb-8 font-label uppercase tracking-tighter italic">Marcus Aurelius
                        Jr.</p>
                    <div class="space-y-3">
                        <div class="flex justify-between items-center text-xs font-label text-slate-400">
                            <span>Curriculum Progress</span>
                            <span class="font-bold text-primary">89%</span>
                        </div>
                        <div class="h-1.5 w-full bg-secondary-fixed rounded-full overflow-hidden">
                            <div class="h-full bg-primary rounded-full shadow-[0_0_8px_rgba(76,0,128,0.4)]"
                                style="width: 89%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 4 (Asymmetric Shift) -->
            <div
                class="group bg-surface-container-lowest rounded-xl overflow-hidden editorial-shadow course-card-hover transition-all duration-500 lg:col-span-2">
                <div class="flex flex-col md:flex-row h-full">
                    <div class="md:w-1/2 overflow-hidden relative min-h-[300px]">
                        <img alt="Science"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-1000"
                            data-alt="microscopic view of glowing crystalline structures in vibrant neon blue and purple colors with shallow depth of field"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuC2C1tRcg1gya0T3T8mPJHZJHSsoy5cZ5Ph86hUmYddzWXrhpKkoKI0S2FTiS9sZ6fxPeEpwERxs2TJqf0M4Ws3rUZM2vNWJHuNzKwHndUY2eBhptDGFEqFZxTfJREDuL2w1KACgh1ufCaq5vzHRes1t4rVl8HPI8ayQKTLpqepNusgWsFVxa0rLJJOA3-VF4ggwtsXUwHWiii8u7N2lVdSS1sQUe48YNva6meAlA4duCzTBSNyBC63l7WWQB3cWcgQFa2N3jXBaVg" />
                        <div class="absolute top-4 left-4">
                            <span
                                class="bg-white/90 backdrop-blur-md px-3 py-1 rounded text-[10px] font-label font-bold uppercase tracking-widest text-primary">Science</span>
                        </div>
                    </div>
                    <div class="md:w-1/2 p-10 flex flex-col justify-center">
                        <h3 class="text-3xl font-bold font-body mb-4 text-on-surface">Quantum Mechanics &amp; Poetry
                        </h3>
                        <p class="text-sm text-slate-500 mb-10 font-label uppercase tracking-tighter italic">Prof.
                            Julianna Klay</p>
                        <div class="space-y-4">
                            <div class="flex justify-between items-center text-xs font-label text-slate-400">
                                <span>Curriculum Progress</span>
                                <span class="font-bold text-primary">12%</span>
                            </div>
                            <div class="h-2 w-full bg-secondary-fixed rounded-full overflow-hidden">
                                <div class="h-full bg-primary rounded-full shadow-[0_0_8px_rgba(76,0,128,0.4)]"
                                    style="width: 12%"></div>
                            </div>
                        </div>
                        <button
                            class="mt-10 self-start text-xs font-label uppercase tracking-widest text-primary font-black flex items-center gap-2 group-hover:translate-x-2 transition-transform">
                            Resume Module <span class="material-symbols-outlined text-sm"
                                data-icon="arrow_forward">arrow_forward</span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Card 5 -->
            <div
                class="group bg-surface-container-lowest rounded-xl overflow-hidden editorial-shadow course-card-hover transition-all duration-500">
                <div class="h-56 overflow-hidden relative">
                    <img alt="Business"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                        data-alt="minimalist office interior with large windows, white desks, and green plants in a bright airy atmosphere"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBj56-FNohQCuKbgUx7S3MMj1D9Oral4gQ3e4XzaE0I2FpdrxJm690lb6coMQU-QE1zPpu9dwM61W7K6IzNDwgWk8Tzu5xb50jZutsB9uBeLzm11FLzWFqaUayMtDHk8NZGbbonQ6kDqGu7Wk0KX7vvhd-ZBf1mhlosvCO0MVjWKBsQ-h-MMX_Z-isrRWVlPzwJBo9AZwEd9lPUtCHf-W98ynfk5a4G0V3mFco-tosMxbXluGi8lLSlVr_Ead-kEUdrMkp-f21MEXI" />
                    <div class="absolute top-4 left-4">
                        <span
                            class="bg-white/90 backdrop-blur-md px-3 py-1 rounded text-[10px] font-label font-bold uppercase tracking-widest text-primary">Management</span>
                    </div>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold font-body mb-2 text-on-surface">Ethical Modernism</h3>
                    <p class="text-sm text-slate-500 mb-8 font-label uppercase tracking-tighter italic">Dean Robert
                        Sterling</p>
                    <div class="space-y-3">
                        <div class="flex justify-between items-center text-xs font-label text-slate-400">
                            <span>Curriculum Progress</span>
                            <span class="font-bold text-primary">100%</span>
                        </div>
                        <div class="h-1.5 w-full bg-secondary-fixed rounded-full overflow-hidden">
                            <div class="h-full bg-primary rounded-full" style="width: 100%"></div>
                        </div>
                    </div>
                    <div
                        class="mt-4 flex items-center gap-2 text-green-600 font-label text-[10px] uppercase font-bold tracking-widest">
                        <span class="material-symbols-outlined text-sm" data-icon="check_circle"
                            style="font-variation-settings: 'FILL' 1;">check_circle</span>
                        Course Completed
                    </div>
                </div>
            </div>
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