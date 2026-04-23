@extends('layouts.mahasiswa.app')
@section('content')
<main class="ml-64 min-h-screen relative">
    <!-- TopNavBar -->
    <header
        class="fixed top-0 right-0 w-[calc(100%-16rem)] h-16 z-50 bg-white/70 dark:bg-slate-900/70 backdrop-blur-xl shadow-[0_12px_32px_rgba(45,0,79,0.04)]">
        <div class="flex items-center justify-between px-8 h-full">
            <div class="flex items-center space-x-8">
                <span class="font-['Inter'] font-bold text-xl text-purple-900 dark:text-purple-100">The Academic
                    Editorial</span>
                <div
                    class="relative focus-within:ring-2 focus-within:ring-purple-200 dark:focus-within:ring-purple-900/30 rounded-lg">
                    <span
                        class="absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 material-symbols-outlined text-xl"
                        data-icon="search">search</span>
                    <input
                        class="bg-surface-container-high/50 border-none rounded-lg pl-10 pr-4 py-1.5 text-sm w-64 focus:ring-0"
                        placeholder="Search curriculum..." type="text" />
                </div>
            </div>
            <nav class="flex items-center space-x-8">
                <a class="text-slate-500 dark:text-slate-400 hover:text-purple-600 dark:hover:text-purple-300 transition-colors font-medium"
                    href="#">Overview</a>
                <a class="text-slate-500 dark:text-slate-400 hover:text-purple-600 dark:hover:text-purple-300 transition-colors font-medium"
                    href="#">Semester</a>
                <a class="text-purple-900 dark:text-purple-100 border-b-2 border-purple-900 font-medium"
                    href="#">Curriculum</a>
                <div class="flex items-center space-x-4 border-l border-slate-200 dark:border-slate-800 pl-8">
                    <button class="text-slate-500 hover:text-purple-600 transition-colors">
                        <span class="material-symbols-outlined" data-icon="notifications_none">notifications_none</span>
                    </button>
                    <div class="w-8 h-8 rounded-full overflow-hidden border border-purple-100">
                        <img alt="Academic Student Avatar" class="w-full h-full object-cover"
                            data-alt="professional headshot of a serious academic curator with clean glasses and a soft library backdrop"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDL-6M9FIWeRWB7j9RsoPYChTGKsP2w2ehTylGVrXrZI1vjmHNdn_zzgcRliuI7wqJhjVbkMq3vlpt_wjBQnv8JY5EQBa16FP1FOFJZlKB5c07mLx7c1mDR5iqKXHpK5XvGK2OrteRGbyuZ_hT6F_TrezNWeqVs8NfazFcXz1pPX3_fc1dmgRzt53nTqJ9mNaZEWGXd8nOuXEn1oMFOTiCoEQaiefMmfbmIdV8TSUvDFwYV5QA7-9qoj7HBFuA2hM-ZRW-v2OuLp9c" />
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- Canvas -->
    <div class="pt-24 px-12 pb-20 max-w-7xl mx-auto">
        <!-- Hero Section -->
        <section class="mb-16">
            <div class="flex items-baseline space-x-4">
                <span class="text-xs font-bold tracking-[0.2em] text-primary uppercase">Academic Portfolio</span>
                <div class="h-px flex-1 bg-gradient-to-r from-primary/20 to-transparent"></div>
            </div>
            <h1 class="font-display font-black text-6xl text-on-surface mt-4 editorial-title-offset tracking-tighter">
                Assignments</h1>
            <p class="font-body text-xl text-on-surface-variant mt-4 max-w-2xl leading-relaxed">
                Track your intellectual progress and upcoming scholarly deadlines through this curated curriculum view.
            </p>
        </section>
        <div class="grid grid-cols-12 gap-8">
            <!-- Upcoming Work Section (Editorial Bento Style) -->
            <div class="col-span-12 lg:col-span-8 space-y-8">
                <div class="flex items-center justify-between">
                    <h2 class="font-display font-bold text-3xl text-on-surface">Upcoming Work</h2>
                    <button class="text-primary font-bold text-sm hover:underline">View Full Calendar</button>
                </div>
                <div class="grid grid-cols-1 gap-6">
                    <!-- Card 1 -->
                    <div
                        class="bg-surface-container-lowest p-8 rounded-xl shadow-[0_12px_32px_rgba(45,0,79,0.04)] hover:bg-primary-fixed transition-all duration-300 group">
                        <div class="flex justify-between items-start mb-6">
                            <div class="space-y-1">
                                <div class="flex items-center space-x-2">
                                    <span
                                        class="bg-secondary-container text-on-secondary-container px-2 py-0.5 text-[10px] font-bold tracking-widest uppercase rounded">In
                                        Progress</span>
                                    <span class="text-xs text-on-surface-variant font-medium">Philosophy 301</span>
                                </div>
                                <h3 class="font-body font-bold text-2xl group-hover:text-primary transition-colors">The
                                    Ethics of AI: A Deontological Review</h3>
                            </div>
                            <div class="text-right">
                                <span class="block text-xs font-bold text-error uppercase tracking-widest">Due in 2
                                    days</span>
                                <span class="text-xs text-on-surface-variant">Oct 24, 11:59 PM</span>
                            </div>
                        </div>
                        <p class="font-body text-on-surface-variant line-clamp-2 mb-8">A comprehensive analysis of
                            algorithmic decision-making frameworks within Kantian moral philosophy.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex -space-x-2">
                                <div class="w-8 h-8 rounded-full border-2 border-white bg-slate-200 overflow-hidden"
                                    title="Collaborator 1">
                                    <img alt="Student avatar"
                                        data-alt="close-up of a smiling young professional woman against a soft neutral background"
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDJfabTKgowGCvv_7djfDKE8kiW6kGoayUhzK_-cACKMb6t5YeBy7n1wnftoUiwW5Hz_UBODgE-19xj7g1b7KsfCxX_izamiJ1ydaMYo8aHB5AiBoDN48a4UJLh7Zh0oJtSKCWjMJabWt7siSKJLWdzeyYlWezWhZ-Y6rXuAHnqMwc0ZFWjQKMCa7-OJqhef5wPGh4tMAuoAbDxcPPhDB5Fq4ISXcSrS9QMZL0ItNd_tQvacIdJeBUqWi96rGtqlnifgh2_htuPAn0" />
                                </div>
                                <div class="w-8 h-8 rounded-full border-2 border-white bg-slate-200 overflow-hidden"
                                    title="Collaborator 2">
                                    <img alt="Student avatar"
                                        data-alt="portrait of a focused man in business casual attire with soft daylight"
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuC3zVJlRExSoRZq1DvB2tLjWJLVNH5soEshjI_LSb4KNZw-r-jOc_0bPbP8_iWGp5bM-9NKHpe3hBkAyBtVtH-uEujN4sMF10YsFdRW9XGg7Imbd05tPS7SU67AAO3b4BXYhpaFzyi-2PBIThK--4Slql_13aJ7fqAeGCLkx-9cOszwTcDX4vxcAPWVsA7fSQj0HscDUFHk1jr7_WFWe_rVDAa6MqT3J407ZDyyhvAcx9cTUFqFcMpoaVPDJ85aP6Hb-Jst04ZCF2c" />
                                </div>
                                <div
                                    class="w-8 h-8 rounded-full border-2 border-white bg-surface-container-high flex items-center justify-center text-[10px] font-bold">
                                    +3</div>
                            </div>
                            <button
                                class="bg-primary-container text-on-primary px-6 py-2.5 rounded-full font-bold text-sm tracking-tight shadow-lg shadow-primary/20 flex items-center space-x-2">
                                <span>Continue Submission</span>
                                <span class="material-symbols-outlined text-lg"
                                    data-icon="arrow_forward">arrow_forward</span>
                            </button>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div
                        class="bg-surface-container-lowest p-8 rounded-xl shadow-[0_12px_32px_rgba(45,0,79,0.04)] hover:bg-primary-fixed transition-all duration-300 group">
                        <div class="flex justify-between items-start mb-6">
                            <div class="space-y-1">
                                <div class="flex items-center space-x-2">
                                    <span
                                        class="bg-tertiary-fixed text-on-tertiary-fixed px-2 py-0.5 text-[10px] font-bold tracking-widest uppercase rounded">Elective</span>
                                    <span class="text-xs text-on-surface-variant font-medium">Modern Literature</span>
                                </div>
                                <h3 class="font-body font-bold text-2xl group-hover:text-primary transition-colors">
                                    Post-Modern Narratives: The Unreliable Narrator</h3>
                            </div>
                            <div class="text-right">
                                <span
                                    class="block text-xs font-bold text-on-surface-variant uppercase tracking-widest">Due
                                    in 5 days</span>
                                <span class="text-xs text-on-surface-variant">Oct 27, 11:59 PM</span>
                            </div>
                        </div>
                        <p class="font-body text-on-surface-variant line-clamp-2 mb-8">Discussing the evolution of
                            perspective in 20th-century literature with focus on Nabokov and Woolf.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center text-on-surface-variant space-x-4">
                                <div class="flex items-center space-x-1">
                                    <span class="material-symbols-outlined text-base"
                                        data-icon="attach_file">attach_file</span>
                                    <span class="text-xs font-medium">3 Drafts</span>
                                </div>
                                <div class="flex items-center space-x-1">
                                    <span class="material-symbols-outlined text-base"
                                        data-icon="chat_bubble_outline">chat_bubble_outline</span>
                                    <span class="text-xs font-medium">12 Comments</span>
                                </div>
                            </div>
                            <button
                                class="bg-surface-container-high text-on-surface px-6 py-2.5 rounded-full font-bold text-sm tracking-tight flex items-center space-x-2">
                                <span>Open Assignment</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Right Sidebar Content -->
            <div class="col-span-12 lg:col-span-4 space-y-12">
                <!-- In Review Section -->
                <section class="space-y-6">
                    <div class="flex items-baseline space-x-2">
                        <span class="w-2 h-2 rounded-full bg-secondary"></span>
                        <h2 class="font-display font-bold text-xl text-on-surface">In Review</h2>
                    </div>
                    <div class="space-y-4">
                        <!-- Review Item 1 -->
                        <div class="bg-surface-container-low p-5 rounded-xl space-y-4">
                            <div class="flex justify-between items-start">
                                <div class="space-y-0.5">
                                    <h4 class="font-body font-bold text-sm">Advanced Calculus III</h4>
                                    <p class="text-xs text-on-surface-variant">Problem Set #09 - Vector Fields</p>
                                </div>
                                <span
                                    class="text-[10px] font-bold text-secondary uppercase tracking-tighter bg-secondary-fixed px-2 py-0.5 rounded">Scoring</span>
                            </div>
                            <div class="relative pt-1">
                                <div class="flex mb-2 items-center justify-between">
                                    <div class="text-right">
                                        <span class="text-xs font-bold inline-block text-primary">85% Processed</span>
                                    </div>
                                </div>
                                <div class="overflow-hidden h-1.5 text-xs flex rounded bg-secondary-fixed">
                                    <div class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-primary"
                                        style="width:85%"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Review Item 2 -->
                        <div class="bg-surface-container-low p-5 rounded-xl space-y-4">
                            <div class="flex justify-between items-start">
                                <div class="space-y-0.5">
                                    <h4 class="font-body font-bold text-sm">Political Theory</h4>
                                    <p class="text-xs text-on-surface-variant">The Republic Critique</p>
                                </div>
                                <span
                                    class="text-[10px] font-bold text-tertiary-container text-white uppercase tracking-tighter bg-tertiary px-2 py-0.5 rounded">Pending</span>
                            </div>
                            <div class="relative pt-1">
                                <div class="flex mb-2 items-center justify-between">
                                    <div class="text-right">
                                        <span class="text-xs font-bold inline-block text-primary">12% Processed</span>
                                    </div>
                                </div>
                                <div class="overflow-hidden h-1.5 text-xs flex rounded bg-secondary-fixed">
                                    <div class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-primary"
                                        style="width:12%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Academic History (Grades) -->
                <section class="space-y-6">
                    <div class="flex items-baseline space-x-2">
                        <span class="w-2 h-2 rounded-full bg-primary"></span>
                        <h2 class="font-display font-bold text-xl text-on-surface">Recent Grades</h2>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <!-- Grade Card 1 -->
                        <div
                            class="bg-surface-container-lowest p-6 rounded-xl shadow-sm border border-outline-variant/20 flex flex-col items-center justify-center text-center space-y-2">
                            <span class="text-3xl font-black text-primary">A</span>
                            <div class="space-y-0.5">
                                <p class="text-[10px] font-bold uppercase tracking-widest text-on-surface-variant">
                                    Linguistics</p>
                                <p class="text-xs font-medium text-slate-400">Oct 19</p>
                            </div>
                        </div>
                        <!-- Grade Card 2 -->
                        <div
                            class="bg-surface-container-lowest p-6 rounded-xl shadow-sm border border-outline-variant/20 flex flex-col items-center justify-center text-center space-y-2">
                            <span class="text-3xl font-black text-primary">A-</span>
                            <div class="space-y-0.5">
                                <p class="text-[10px] font-bold uppercase tracking-widest text-on-surface-variant">
                                    Economics</p>
                                <p class="text-xs font-medium text-slate-400">Oct 17</p>
                            </div>
                        </div>
                        <!-- Grade Card 3 -->
                        <div
                            class="bg-surface-container-lowest p-6 rounded-xl shadow-sm border border-outline-variant/20 flex flex-col items-center justify-center text-center space-y-2">
                            <span class="text-3xl font-black text-primary">B+</span>
                            <div class="space-y-0.5">
                                <p class="text-[10px] font-bold uppercase tracking-widest text-on-surface-variant">
                                    Visual Arts</p>
                                <p class="text-xs font-medium text-slate-400">Oct 15</p>
                            </div>
                        </div>
                        <!-- Grade Card 4 -->
                        <div
                            class="bg-surface-container-lowest p-6 rounded-xl shadow-sm border border-outline-variant/20 flex flex-col items-center justify-center text-center space-y-2">
                            <div class="w-10 h-10 rounded-full bg-surface-container flex items-center justify-center">
                                <span class="material-symbols-outlined text-slate-400"
                                    data-icon="more_horiz">more_horiz</span>
                            </div>
                            <p class="text-[10px] font-bold uppercase tracking-widest text-on-surface-variant">Full
                                Report</p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- Contextual CTA Section -->
        <section class="mt-20">
            <div class="bg-gradient-to-br from-primary to-primary-container p-12 rounded-3xl relative overflow-hidden">
                <div class="relative z-10 grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                    <div class="space-y-6">
                        <h2 class="font-display font-black text-4xl text-on-primary leading-tight">Master your academic
                            journey through focus.</h2>
                        <p class="text-on-primary/80 font-body text-lg leading-relaxed">Join the curated seminar on
                            "Metacognitive Study Strategies" this Friday to optimize your learning workflow.</p>
                        <button
                            class="bg-white text-primary px-8 py-3.5 rounded-full font-bold tracking-tight shadow-xl hover:scale-105 transition-transform">Reserve
                            Your Seat</button>
                    </div>
                    <div class="hidden md:block relative">
                        <img alt="Learning context" class="rounded-2xl shadow-2xl rotate-3"
                            data-alt="high-quality interior of a minimalist modern library with floor-to-ceiling books and soft sunlight through slats"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBhqD3pg06dM_v3K58eqbVJzW2AZ609PjBXWMB9xhbUMgNgsk-5SvcAFCYuq_twRVKskWWYA4CUuUTxbpahvbSt8758N4-faMz5eCwBKmrYkwbBMaxTE7dJZab38NzlaATu5hLheZ_hqiDmq-zNTHjpA_oF0z6g2P2H0nroaJ5k9jE19fA4r15wIoPX9LYKGlMRIGkbZDgc2wlqYTQXrlU6M-v2rgm_COaFnfQ3cr66AD0iEbI3JNr2SlovaYRUVfNU6MvRTIB2xXk" />
                    </div>
                </div>
                <!-- Decorative element -->
                <div class="absolute -bottom-24 -right-24 w-96 h-96 bg-white/10 rounded-full blur-3xl"></div>
            </div>
        </section>
    </div>
</main>
@endsection