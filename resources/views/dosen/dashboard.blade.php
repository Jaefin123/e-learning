@extends('layouts.dosen.app')
@Section('content')
<main class="ml-72 min-h-screen">
    <section class="p-12 max-w-7xl mx-auto space-y-12">
        <header class="flex flex-col gap-2">
            <span class="font-sans uppercase tracking-[0.2em] text-[11px] font-extrabold text-primary">Academic
                Excellence</span>
            <h2 class="font-sans text-5xl font-extrabold tracking-tight text-on-surface">Good Morning, <span
                    class="font-serif italic font-normal text-primary">Dr. Sarah Sterling</span></h2>
            <p class="font-body text-slate-600 text-lg max-w-2xl mt-4">Welcome back to your curriculum hub. You have 12
                pending submissions across 3 active courses this morning.</p>
        </header>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div
                class="bg-surface-container-lowest p-8 rounded-xl shadow-[0px_12px_32px_rgba(45,0,79,0.06)] group hover:bg-primary-fixed transition-colors duration-300">
                <p class="font-sans uppercase tracking-widest text-[10px] font-bold text-slate-500 mb-2">Total Students
                </p>
                <div class="flex items-end justify-between">
                    <span class="font-sans text-4xl font-bold text-on-surface">124</span>
                    <span
                        class="material-symbols-outlined text-primary group-hover:scale-110 transition-transform">group</span>
                </div>
            </div>
            <div
                class="bg-surface-container-lowest p-8 rounded-xl shadow-[0px_12px_32px_rgba(45,0,79,0.06)] group hover:bg-primary-fixed transition-colors duration-300">
                <p class="font-sans uppercase tracking-widest text-[10px] font-bold text-slate-500 mb-2">Courses Taught
                </p>
                <div class="flex items-end justify-between">
                    <span class="font-sans text-4xl font-bold text-on-surface">3</span>
                    <span
                        class="material-symbols-outlined text-primary group-hover:scale-110 transition-transform">school</span>
                </div>
            </div>
            <div
                class="bg-surface-container-lowest p-8 rounded-xl shadow-[0px_12px_32px_rgba(45,0,79,0.06)] group hover:bg-primary-fixed transition-colors duration-300">
                <p class="font-sans uppercase tracking-widest text-[10px] font-bold text-slate-500 mb-2">Research Papers
                </p>
                <div class="flex items-end justify-between">
                    <span class="font-sans text-4xl font-bold text-on-surface">8</span>
                    <span
                        class="material-symbols-outlined text-primary group-hover:scale-110 transition-transform">description</span>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 pt-4">
            <div class="lg:col-span-2 space-y-12">
                <div class="space-y-6">
                    <div class="flex justify-between items-end">
                        <h3 class="font-serif text-2xl text-on-surface">Course Management</h3>
                        <button
                            class="font-sans text-xs font-bold text-primary uppercase tracking-widest border-b-2 border-primary/20 pb-1">View
                            Schedule</button>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div
                            class="bg-surface-container-lowest overflow-hidden rounded-xl shadow-[0px_12px_32px_rgba(45,0,79,0.06)] flex flex-col hover:translate-y-[-4px] transition-transform duration-300">
                            <div class="h-32 bg-slate-200 relative">
                                <img alt="Modern Architecture" class="w-full h-full object-cover opacity-80"
                                    data-alt="Black and white architectural detail of a modernist concrete building with sharp angles and dramatic shadows"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCv4BOHPjPH6XKo3f-rDbNgjUu7iSpMi_9LlC_87OiXHmYnaTDWthkjAJP0CXaaz7vQK8ybFYjnmRsCrPDzVLxkRSSULqtgqUAKeS0x-5UCs6E_aaOXug2eb6dXHAvU9rTnc4DV9Z5idt1DegyV4N7H8hazETfphzRfe9S9sEvSihwBXXF-saBk6chsa_zaLBSC-BbI2dLCHeDTx6W8ytenBD_-QMqAGBreFg1lHFEJmYBDKBbO4jLsGINODApAe-t7j55ovfDy6fQ" />
                                <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent"></div>
                                <div class="absolute bottom-4 left-6">
                                    <span
                                        class="bg-white/20 backdrop-blur-md text-white text-[10px] px-2 py-1 rounded font-sans uppercase tracking-wider">ARCH-402</span>
                                </div>
                            </div>
                            <div class="p-6 space-y-4">
                                <h4 class="font-serif text-lg leading-snug">Modernist Architectural Theory</h4>
                                <div class="flex items-center gap-6">
                                    <div class="flex items-center gap-2">
                                        <span class="material-symbols-outlined text-sm text-slate-400">group</span>
                                        <span class="font-sans text-xs text-slate-600">42 Students</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span
                                            class="material-symbols-outlined text-sm text-primary">pending_actions</span>
                                        <span class="font-sans text-xs text-primary font-bold">3 To Grade</span>
                                    </div>
                                </div>
                                <div class="w-full bg-secondary-fixed h-1 rounded-full overflow-hidden">
                                    <div class="bg-primary h-full w-[85%] shadow-[0_0_8px_rgba(76,0,128,0.4)]"></div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="bg-surface-container-lowest overflow-hidden rounded-xl shadow-[0px_12px_32px_rgba(45,0,79,0.06)] flex flex-col hover:translate-y-[-4px] transition-transform duration-300">
                            <div class="h-32 bg-slate-200 relative">
                                <img alt="Comparative Literature" class="w-full h-full object-cover opacity-80"
                                    data-alt="A stack of vintage hardback books in a sunlit library with dust motes dancing in the light"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCIdLKgNS24CnR0yAepaWtqmvGsZw9B1dKPtmIwpBLH_TSt7AGEzFVtSb7IKEtWuxYwAYejDdwBgeRh47GSh1W5say815zTsv4Xj5NYxGKDlxxXpElZ4n-Kcdb69IIkBrk7xIRPzsgt1e8Y6ZUL8qKZ0ImO1AXcA2401NLF5VKNGolEVdPqhtBFFYdil9BdWkYYptx3PtmNyAMb-uiqwLwluvDCIkqNn0ZdBdsS4PmN7YheT895t6yBHqMHhFXIjNHQ1jD6oOfidu0" />
                                <div class="absolute inset-0 bg-gradient-to-t from-secondary/80 to-transparent"></div>
                                <div class="absolute bottom-4 left-6">
                                    <span
                                        class="bg-white/20 backdrop-blur-md text-white text-[10px] px-2 py-1 rounded font-sans uppercase tracking-wider">LIT-301</span>
                                </div>
                            </div>
                            <div class="p-6 space-y-4">
                                <h4 class="font-serif text-lg leading-snug">Comparative Literature</h4>
                                <div class="flex items-center gap-6">
                                    <div class="flex items-center gap-2">
                                        <span class="material-symbols-outlined text-sm text-slate-400">group</span>
                                        <span class="font-sans text-xs text-slate-600">38 Students</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span
                                            class="material-symbols-outlined text-sm text-green-600">check_circle</span>
                                        <span class="font-sans text-xs text-green-600 font-bold">All Graded</span>
                                    </div>
                                </div>
                                <div class="w-full bg-secondary-fixed h-1 rounded-full overflow-hidden">
                                    <div class="bg-primary h-full w-full shadow-[0_0_8px_rgba(76,0,128,0.4)]"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-surface-container-low p-8 rounded-2xl space-y-8">
                    <div class="flex justify-between items-center">
                        <h3 class="font-serif text-2xl text-on-surface">Recent Submissions</h3>
                        <button class="text-primary hover:bg-primary-fixed p-2 rounded-full transition-colors">
                            <span class="material-symbols-outlined">more_horiz</span>
                        </button>
                    </div>
                    <div class="space-y-2">
                        <div
                            class="flex items-center justify-between p-4 bg-surface-container-lowest rounded-xl hover:bg-primary-fixed/30 transition-colors group cursor-pointer">
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center font-sans text-sm font-bold text-slate-600">
                                    EL</div>
                                <div>
                                    <p class="font-sans text-sm font-bold text-on-surface">The Bauhaus Influence</p>
                                    <p class="font-sans text-[10px] text-slate-500 uppercase tracking-wider">Elias
                                        Lynch • Modernist Theory</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-6">
                                <span class="font-sans text-[10px] text-slate-400">2 hours ago</span>
                                <button
                                    class="bg-primary text-white text-[10px] px-4 py-2 rounded-full font-bold uppercase tracking-widest shadow-lg shadow-primary/20 hover:scale-105 transition-transform">Grade</button>
                            </div>
                        </div>
                        <div
                            class="flex items-center justify-between p-4 bg-surface-container-lowest rounded-xl hover:bg-primary-fixed/30 transition-colors group cursor-pointer">
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center font-sans text-sm font-bold text-slate-600">
                                    SK</div>
                                <div>
                                    <p class="font-sans text-sm font-bold text-on-surface">Streamline Moderne and
                                        Social Class</p>
                                    <p class="font-sans text-[10px] text-slate-500 uppercase tracking-wider">Sienna Kim
                                        • Modernist Theory</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-6">
                                <span class="font-sans text-[10px] text-slate-400">5 hours ago</span>
                                <button
                                    class="bg-primary text-white text-[10px] px-4 py-2 rounded-full font-bold uppercase tracking-widest shadow-lg shadow-primary/20 hover:scale-105 transition-transform">Grade</button>
                            </div>
                        </div>
                        <div
                            class="flex items-center justify-between p-4 bg-surface-container-lowest rounded-xl hover:bg-primary-fixed/30 transition-colors group cursor-pointer">
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center font-sans text-sm font-bold text-slate-600">
                                    JB</div>
                                <div>
                                    <p class="font-sans text-sm font-bold text-on-surface">Constructivism in Soviet
                                        Architecture</p>
                                    <p class="font-sans text-[10px] text-slate-500 uppercase tracking-wider">Julian
                                        Bell • Modernist Theory</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-6">
                                <span class="font-sans text-[10px] text-slate-400">Yesterday</span>
                                <button
                                    class="bg-primary text-white text-[10px] px-4 py-2 rounded-full font-bold uppercase tracking-widest shadow-lg shadow-primary/20 hover:scale-105 transition-transform">Grade</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="space-y-12">
                <div class="bg-primary rounded-3xl p-8 text-white relative overflow-hidden shadow-2xl">
                    <div class="relative z-10 space-y-6">
                        <h3 class="font-serif text-2xl">Research &amp; Grants</h3>
                        <div class="space-y-4">
                            <div class="bg-white/10 backdrop-blur-md p-4 rounded-xl space-y-2 border border-white/10">
                                <div class="flex justify-between items-start">
                                    <span
                                        class="font-sans text-[10px] font-bold uppercase tracking-widest text-primary-fixed">NSF
                                        Research Grant</span>
                                    <span
                                        class="bg-error text-white text-[9px] px-2 py-0.5 rounded font-bold">URGENT</span>
                                </div>
                                <p class="font-body text-sm font-medium">Urban Sociology Symposium Proposal</p>
                                <div class="flex items-center gap-2 mt-2">
                                    <span class="material-symbols-outlined text-sm">calendar_today</span>
                                    <span class="font-sans text-[10px] uppercase tracking-wider">Deadline: Oct 14,
                                        2023</span>
                                </div>
                            </div>
                            <div class="bg-white/10 backdrop-blur-md p-4 rounded-xl space-y-2 border border-white/10">
                                <div class="flex justify-between items-start">
                                    <span
                                        class="font-sans text-[10px] font-bold uppercase tracking-widest text-primary-fixed">University
                                        Endowment</span>
                                </div>
                                <p class="font-body text-sm font-medium">Digital Humanities Lab Funding</p>
                                <div class="flex items-center gap-2 mt-2">
                                    <span class="material-symbols-outlined text-sm">calendar_today</span>
                                    <span class="font-sans text-[10px] uppercase tracking-wider">Deadline: Nov 02,
                                        2023</span>
                                </div>
                            </div>
                        </div>
                        <button
                            class="w-full bg-white text-primary font-sans text-xs font-bold uppercase tracking-widest py-3 rounded-xl hover:bg-primary-fixed transition-colors">Submit
                            New Proposal</button>
                    </div>
                    <div
                        class="absolute -bottom-12 -right-12 w-48 h-48 bg-primary-container rounded-full blur-3xl opacity-50">
                    </div>
                    <div
                        class="absolute top-0 right-0 w-24 h-24 bg-on-primary-container rounded-full blur-2xl opacity-20 translate-x-8 -translate-y-8">
                    </div>
                </div>
                <div
                    class="bg-surface-container-lowest p-8 rounded-2xl shadow-[0px_12px_32px_rgba(45,0,79,0.06)] space-y-6">
                    <h3 class="font-serif text-xl text-on-surface">Faculty Notices</h3>
                    <div class="space-y-4">
                        <div class="flex gap-4 items-start">
                            <div class="w-2 h-2 rounded-full bg-primary mt-2 flex-shrink-0"></div>
                            <p class="font-sans text-xs leading-relaxed text-slate-600">Department meeting moved to
                                <span class="font-bold text-on-surface">Room 402</span> this Thursday.</p>
                        </div>
                        <div class="flex gap-4 items-start">
                            <div class="w-2 h-2 rounded-full bg-primary mt-2 flex-shrink-0"></div>
                            <p class="font-sans text-xs leading-relaxed text-slate-600">Sabbatical applications for
                                Spring 2024 are now <span class="font-bold text-on-surface">open</span>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
