@extends('layouts.admin.app')
@section('content')
<main class="ml-64 min-h-screen transition-all duration-300">
    <!-- TopNavBar -->
   
    <div class="p-12 max-w-7xl mx-auto">
        <!-- Page Header (Asymmetric Layout) -->
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-8">
            <div class="max-w-2xl">
                <span class="font-sans uppercase text-xs tracking-[0.2em] font-bold text-primary mb-4 block">Central
                    Directory</span>
                <h2 class="text-6xl font-headline font-extrabold text-on-surface tracking-tight mb-4">User Management
                </h2>
                <p class="serif-content text-xl text-on-surface-variant leading-relaxed">
                    Curating the intellectual capital of the institution. Oversee faculty appointments and student
                    academic standing in one unified editorial view.
                </p>
            </div>
            <div class="flex flex-col gap-4">
                <button
                    class="bg-gradient-to-br from-primary to-primary-container text-white px-8 py-4 rounded-xl font-bold flex items-center justify-center gap-3 shadow-lg transition-transform hover:-translate-y-1">
                    <span class="material-symbols-outlined">person_add</span>
                    <span>Add New User</span>
                </button>
            </div>
        </div>
        <!-- Bento Stats Grid -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-12">
            <div
                class="col-span-1 md:col-span-2 bg-surface-container-lowest p-8 rounded-2xl flex flex-col justify-between group hover:bg-primary-fixed transition-colors duration-300">
                <div>
                    <p class="text-slate-500 text-sm font-bold uppercase tracking-wider mb-2">Total Community</p>
                    <h3 class="text-4xl font-headline font-black text-on-surface">12,482</h3>
                </div>
                <div class="mt-8 flex items-center gap-2 text-primary">
                    <span class="material-symbols-outlined">trending_up</span>
                    <span class="text-sm font-bold">+12% from last term</span>
                </div>
            </div>
            <div class="bg-surface-container-low p-8 rounded-2xl flex flex-col items-center justify-center text-center">
                <p class="text-slate-500 text-sm font-bold uppercase tracking-wider mb-2">Faculty</p>
                <h3 class="text-3xl font-headline font-bold text-on-surface">842</h3>
                <div class="mt-4 w-12 h-1 bg-primary rounded-full"></div>
            </div>
            <div class="bg-surface-container-low p-8 rounded-2xl flex flex-col items-center justify-center text-center">
                <p class="text-slate-500 text-sm font-bold uppercase tracking-wider mb-2">Active Students</p>
                <h3 class="text-3xl font-headline font-bold text-on-surface">11,640</h3>
                <div class="mt-4 w-12 h-1 bg-secondary rounded-full"></div>
            </div>
        </div>
        <!-- Table Controls -->
        <div class="bg-surface-container-low rounded-t-3xl p-6 flex flex-wrap items-center justify-between gap-6">
            <div class="flex items-center gap-4">
                <div class="flex bg-surface-container-high rounded-full p-1">
                    <button class="px-6 py-2 rounded-full text-sm font-bold bg-white text-primary shadow-sm">All
                        Users</button>
                    <button
                        class="px-6 py-2 rounded-full text-sm font-bold text-slate-500 hover:text-primary transition-colors">Students</button>
                    <button
                        class="px-6 py-2 rounded-full text-sm font-bold text-slate-500 hover:text-primary transition-colors">Faculty</button>
                    <button
                        class="px-6 py-2 rounded-full text-sm font-bold text-slate-500 hover:text-primary transition-colors">Staff</button>
                </div>
                <div class="h-8 w-[1px] bg-outline-variant/30 mx-2"></div>
                <div class="flex gap-2">
                    <button
                        class="px-4 py-2 text-sm font-bold text-slate-500 flex items-center gap-2 hover:bg-surface-container-high rounded-lg transition-colors">
                        <span class="material-symbols-outlined text-lg">filter_list</span>
                        Filter
                    </button>
                    <button
                        class="px-4 py-2 text-sm font-bold text-slate-500 flex items-center gap-2 hover:bg-surface-container-high rounded-lg transition-colors">
                        <span class="material-symbols-outlined text-lg">download</span>
                        Export
                    </button>
                </div>
            </div>
            <div class="relative w-full md:w-auto">
                <input
                    class="w-full md:w-80 bg-surface-container-lowest border-none rounded-xl px-4 py-3 text-sm focus:ring-2 focus:ring-primary/10 placeholder:text-slate-400"
                    placeholder="Filter by name, email, or ID..." type="text" />
            </div>
        </div>
        <!-- Management Table (Modern Editorial Style) -->
        <div class="bg-surface-container-lowest rounded-b-3xl overflow-hidden mb-16">
            <table class="w-full border-collapse">
                <thead>
                    <tr class="text-left border-b border-surface-container-high">
                        <th class="px-8 py-5 font-sans uppercase text-[11px] tracking-widest font-bold text-slate-400">
                            User Details</th>
                        <th class="px-8 py-5 font-sans uppercase text-[11px] tracking-widest font-bold text-slate-400">
                            Role</th>
                        <th class="px-8 py-5 font-sans uppercase text-[11px] tracking-widest font-bold text-slate-400">
                            Status</th>
                        <th class="px-8 py-5 font-sans uppercase text-[11px] tracking-widest font-bold text-slate-400">
                            Last Active</th>
                        <th
                            class="px-8 py-5 font-sans uppercase text-[11px] tracking-widest font-bold text-slate-400 text-right">
                            Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-surface-container-low">
                    <!-- User Row 1 -->
                    <tr class="hover:bg-primary-fixed/30 transition-colors duration-300">
                        <td class="px-8 py-6">
                            <div class="flex items-center gap-4">
                                <div class="relative">
                                    <img alt="Dr. Julian Thorne"
                                        class="w-12 h-12 rounded-full object-cover grayscale hover:grayscale-0 transition-all duration-500"
                                        data-alt="professional headshot of a middle-aged male professor in a library setting with soft morning light"
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuA1yCz2ggzb8v-FwBGlJ7TmZtNZnT6wHvnui0J8PGLzMtV_IYE1lM5BnOauXvj1FcblwecMA0q1DyFmVfao6ELrIBSN0RFI775YsRNb-DnR1ZU4dMqMReTMq2AAd6I1JdP4Dj0UsXcWq7hhMdPPU42H6YXrBk30xtfAwIfCABrmAj1c215z_c2MjFNYpbdXpOrBzv0d9UzaKKf65mjVNUN0g78Ao_8R-ARKAW8QF5xBkuSYcGdhmkjRW-0LcC2j2nDIJQO9EzOoDH8" />
                                    <div
                                        class="absolute -bottom-1 -right-1 w-4 h-4 bg-emerald-500 rounded-full border-2 border-white">
                                    </div>
                                </div>
                                <div>
                                    <p class="font-headline font-bold text-on-surface">Dr. Julian Thorne</p>
                                    <p class="text-xs text-on-surface-variant font-medium">
                                        j.thorne@academiceditorial.edu</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-8 py-6">
                            <span
                                class="px-3 py-1 bg-primary/10 text-primary rounded text-[11px] font-bold uppercase tracking-wider">Faculty</span>
                        </td>
                        <td class="px-8 py-6">
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 bg-emerald-500 rounded-full"></span>
                                <span class="text-sm font-medium text-emerald-700">Active</span>
                            </div>
                        </td>
                        <td class="px-8 py-6 text-sm text-on-surface-variant">2 hours ago</td>
                        <td class="px-8 py-6 text-right">
                            <button
                                class="p-2 hover:bg-white rounded-full transition-colors text-slate-400 hover:text-primary">
                                <span class="material-symbols-outlined">more_vert</span>
                            </button>
                        </td>
                    </tr>
                    <!-- User Row 2 -->
                    <tr class="hover:bg-primary-fixed/30 transition-colors duration-300">
                        <td class="px-8 py-6">
                            <div class="flex items-center gap-4">
                                <img alt="Elena Rodriguez"
                                    class="w-12 h-12 rounded-full object-cover grayscale hover:grayscale-0 transition-all duration-500"
                                    data-alt="close-up of a young woman smiling warmly, wearing glasses and a denim shirt against a neutral studio background"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBPrn7rFB24tx7KyY3YguxnavChIoJHsDE0x7XwHjDfvjL_HQzHKKaqHSML59eZNAu3RTeq9dpj1g8PvGVJTYNrmIhQrX0teYrgY1tRfiXpHT4TBuX-YHF5r5qXoCGNw2ML4IxcN1VXqEiglTb0V1A__SoG7xe5FZLGWJlTmaBFfomHzH0SvveYmTkSH8qOebGbtuB8hmjrXvrDkdRClBnZqo-GF8k1kAWev4n13mTObrz4sISR_RJCfXllKcnm3anRY-Dd4_Yt3Fo" />
                                <div>
                                    <p class="font-headline font-bold text-on-surface">Elena Rodriguez</p>
                                    <p class="text-xs text-on-surface-variant font-medium">e.rodriguez.24@student.edu
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td class="px-8 py-6">
                            <span
                                class="px-3 py-1 bg-secondary/10 text-secondary rounded text-[11px] font-bold uppercase tracking-wider">Student</span>
                        </td>
                        <td class="px-8 py-6">
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 bg-emerald-500 rounded-full"></span>
                                <span class="text-sm font-medium text-emerald-700">Active</span>
                            </div>
                        </td>
                        <td class="px-8 py-6 text-sm text-on-surface-variant">Oct 14, 10:22 AM</td>
                        <td class="px-8 py-6 text-right">
                            <button
                                class="p-2 hover:bg-white rounded-full transition-colors text-slate-400 hover:text-primary">
                                <span class="material-symbols-outlined">more_vert</span>
                            </button>
                        </td>
                    </tr>
                    <!-- User Row 3 -->
                    <tr class="hover:bg-primary-fixed/30 transition-colors duration-300">
                        <td class="px-8 py-6">
                            <div class="flex items-center gap-4">
                                <img alt="Marcus Chen"
                                    class="w-12 h-12 rounded-full object-cover grayscale hover:grayscale-0 transition-all duration-500"
                                    data-alt="headshot of a young asian male professional with short hair and a clean black sweater in a bright office environment"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCw7gGLLo9tPLDF2tfsJaTak4coMKfcGF291iWqei8xojssqFuKCJ8NiNdODoGIIKERjZiZpwuoilwxWmzay3OdnpkPZdS8b8coiqCJLwh2TcnRm_ayhMzs3kE4SRweLPp37ArCiXOgB5J95YVew4jafJls8ME6MiNXEQ8bu2qDiqhfirkRIy-2SGLd3lLjH68Gm5pLtf4SlFNv5tlECFAqNMmGtarvrK3IuTuMkfO9ssg2LnlLYV1grtXb01xgKQcKMiEjzKowb64" />
                                <div>
                                    <p class="font-headline font-bold text-on-surface">Marcus Chen</p>
                                    <p class="text-xs text-on-surface-variant font-medium">m.chen@academiceditorial.edu
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td class="px-8 py-6">
                            <span
                                class="px-3 py-1 bg-tertiary/10 text-tertiary rounded text-[11px] font-bold uppercase tracking-wider">Registrar</span>
                        </td>
                        <td class="px-8 py-6">
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 bg-slate-300 rounded-full"></span>
                                <span class="text-sm font-medium text-slate-500">Inactive</span>
                            </div>
                        </td>
                        <td class="px-8 py-6 text-sm text-on-surface-variant">3 weeks ago</td>
                        <td class="px-8 py-6 text-right">
                            <button
                                class="p-2 hover:bg-white rounded-full transition-colors text-slate-400 hover:text-primary">
                                <span class="material-symbols-outlined">more_vert</span>
                            </button>
                        </td>
                    </tr>
                    <!-- User Row 4 -->
                    <tr class="hover:bg-primary-fixed/30 transition-colors duration-300">
                        <td class="px-8 py-6">
                            <div class="flex items-center gap-4">
                                <img alt="Sarah Jenkins"
                                    class="w-12 h-12 rounded-full object-cover grayscale hover:grayscale-0 transition-all duration-500"
                                    data-alt="portrait of an older woman with grey hair and a sophisticated navy blazer, soft lighting in a corporate hallway"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuARSm1eh8zLa_rRxIPdYItmOHLmjflHZIolpt0TmkTGD_jhRKWkt051J75HMpQf0Unxhf5E-I0FftoOqxCqex8a5xhtbNH8ji6AjkgCV2vCdKjBtrpXX2UJHHbEnP5m-3g2Qd40HXy45qF6TwsnCC_zWkUW8Gr6gnvxanpU5YfB8SEKL-xo3AhdGQgkIk6tF5L74qMeUAIqH4wW9RErGLTnpgEV1-9GFR1WkSAT-JudeNPA4qvc8U6amTIQ3p7ob2VKnwXeOC6_OAA" />
                                <div>
                                    <p class="font-headline font-bold text-on-surface">Sarah Jenkins</p>
                                    <p class="text-xs text-on-surface-variant font-medium">
                                        s.jenkins@academiceditorial.edu</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-8 py-6">
                            <span
                                class="px-3 py-1 bg-primary/10 text-primary rounded text-[11px] font-bold uppercase tracking-wider">Faculty</span>
                        </td>
                        <td class="px-8 py-6">
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 bg-emerald-500 rounded-full"></span>
                                <span class="text-sm font-medium text-emerald-700">Active</span>
                            </div>
                        </td>
                        <td class="px-8 py-6 text-sm text-on-surface-variant">Today, 08:15 AM</td>
                        <td class="px-8 py-6 text-right">
                            <button
                                class="p-2 hover:bg-white rounded-full transition-colors text-slate-400 hover:text-primary">
                                <span class="material-symbols-outlined">more_vert</span>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="px-8 py-6 bg-surface-container-low flex items-center justify-between">
                <p class="text-sm text-on-surface-variant font-medium">Showing 1-10 of 12,482 members</p>
                <div class="flex gap-2">
                    <button
                        class="w-10 h-10 flex items-center justify-center rounded-lg bg-white border border-outline-variant/20 text-slate-400 hover:text-primary transition-all">
                        <span class="material-symbols-outlined">chevron_left</span>
                    </button>
                    <button
                        class="w-10 h-10 flex items-center justify-center rounded-lg bg-primary text-white font-bold shadow-md">1</button>
                    <button
                        class="w-10 h-10 flex items-center justify-center rounded-lg bg-white border border-outline-variant/20 text-slate-600 hover:bg-primary-fixed/20 transition-all">2</button>
                    <button
                        class="w-10 h-10 flex items-center justify-center rounded-lg bg-white border border-outline-variant/20 text-slate-600 hover:bg-primary-fixed/20 transition-all">3</button>
                    <button
                        class="w-10 h-10 flex items-center justify-center rounded-lg bg-white border border-outline-variant/20 text-slate-400 hover:text-primary transition-all">
                        <span class="material-symbols-outlined">chevron_right</span>
                    </button>
                </div>
            </div>
        </div>
        <!-- Creation Overlay Trigger (Simulated Form Section) -->
        <div class="relative bg-surface-container-high rounded-[2.5rem] p-12 overflow-hidden">
            <div class="absolute top-0 right-0 w-1/2 h-full opacity-10">
                <img alt="Collaboration" class="w-full h-full object-cover"
                    data-alt="blurred motion shot of students collaborating around a large wooden table in a high-modern library space"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCPIv_GcsmTvWIofNohEnwYrF_efaR-4I-7GzdHcVug7qoJ0WU7q3RzapIvV39R0pDRgYljXcIO6Eg0nyna5DNamXT4hrwi0LQH-01rPhIfKPeTR_dzmM4eVpayh9iIZKXDtpF5iQmcU1wBL6nqIzI6TAYn8a2uxKGLG3WOCdzUN3SzHEJNdgKpoL7WzLyHs8NqZT3M0WX7W1H0mizcVtFde1L9g7VwOcrZR_IcTfCb4p3mJDJn29EVDzxNllAvuuggM3Df6cqatss" />
            </div>
            <div class="relative z-10 max-w-lg">
                <h3 class="text-3xl font-headline font-bold text-primary mb-6">Need to bulk enroll?</h3>
                <p class="serif-content text-lg text-on-surface-variant mb-8 leading-relaxed">
                    If you're onboarding an entire cohort or faculty department, use our structured upload system to
                    maintain data integrity.
                </p>
                <div class="flex gap-4">
                    <button
                        class="bg-surface-container-lowest text-primary px-6 py-3 rounded-xl font-bold hover:bg-white transition-all shadow-sm">
                        Download Template
                    </button>
                    <button
                        class="bg-transparent border-2 border-primary text-primary px-6 py-3 rounded-xl font-bold hover:bg-primary/5 transition-all">
                        Upload CSV
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- System Status Footer -->
    <footer class="mt-20 border-t-0 bg-surface-container-low p-12">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-start gap-12">
            <div class="max-w-xs">
                <h4 class="text-lg font-bold text-primary italic mb-4">The Academic Editorial</h4>
                <p class="text-sm text-on-surface-variant serif-content italic">Curating excellence through
                    administrative precision. All rights reserved.</p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-12">
                <div>
                    <h5 class="font-sans uppercase text-[10px] tracking-widest font-black text-slate-500 mb-6">Security
                    </h5>
                    <ul class="space-y-3 text-sm font-medium">
                        <li><a class="hover:text-primary transition-colors" href="#">Access Logs</a></li>
                        <li><a class="hover:text-primary transition-colors" href="#">Role Definitions</a></li>
                        <li><a class="hover:text-primary transition-colors" href="#">GDPR Portal</a></li>
                    </ul>
                </div>
                <div>
                    <h5 class="font-sans uppercase text-[10px] tracking-widest font-black text-slate-500 mb-6">
                        Assistance</h5>
                    <ul class="space-y-3 text-sm font-medium">
                        <li><a class="hover:text-primary transition-colors" href="#">Help Desk</a></li>
                        <li><a class="hover:text-primary transition-colors" href="#">Developer API</a></li>
                        <li><a class="hover:text-primary transition-colors" href="#">Service Status</a></li>
                    </ul>
                </div>
                <div class="col-span-2 md:col-span-1">
                    <h5 class="font-sans uppercase text-[10px] tracking-widest font-black text-slate-500 mb-6">System
                        Health</h5>
                    <div class="flex items-center gap-3 bg-white p-4 rounded-xl shadow-sm">
                        <div class="w-2 h-2 bg-emerald-500 rounded-full animate-pulse"></div>
                        <span class="text-xs font-bold text-slate-600">All Modules Operational</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</main>
@endsection