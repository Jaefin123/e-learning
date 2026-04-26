@extends('layouts.admin.app')
@section('content')
<main class="ml-72 p-12 min-h-screen">
    <!-- Welcome Hero Section -->
    <section
        class="mb-16 relative overflow-hidden rounded-3xl bg-gradient-to-br from-primary to-primary-container p-12 text-white shadow-2xl">
        <div class="relative z-10 max-w-2xl">
            <span class="font-inter uppercase tracking-[0.3em] text-[10px] font-bold opacity-80 mb-4 block">System
                Command Center</span>
            <h2 class="text-5xl font-inter font-bold leading-tight mb-6">Administrator Overview</h2>
            <p class="text-lg opacity-90 font-body italic mb-8">Curating academic excellence through seamless digital
                infrastructure and data-driven insights.</p>
            <div class="flex gap-4">
                <button
                    class="bg-white text-primary px-8 py-3 rounded-xl font-inter font-bold text-sm hover:bg-opacity-90 transition-all">Generate
                    Quarterly Report</button>
                <button
                    class="border border-white/30 text-white px-8 py-3 rounded-xl font-inter font-bold text-sm hover:bg-white/10 transition-all">System
                    logs</button>
            </div>
        </div>
        <div class="absolute -right-20 -bottom-20 w-96 h-96 bg-white/10 rounded-full blur-3xl"></div>
        <div class="absolute top-0 right-0 w-full h-full opacity-10 pointer-events-none">
            <img alt="background texture" class="w-full h-full object-cover mix-blend-overlay"
                data-alt="abstract architectural lines and patterns with soft lighting and professional corporate aesthetic"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBnq5ZzrSdH7Znb8wDLnrzG5rqankuTVRbpeV_2L8Eu0H2Y6fd3idQTQqwqqfek3DwaVGtpd81to8yrBrbZPH6N2baiCvxn0wqlB3RZZhCnM2ihcsRII83bSB3vXC3I4hFGsgwehdFJvZ2vvaBs0KyLoseJiwAVbWCKcDjduD-qICjo7sRo74l3s0V4N9rlnRqRUtMxOFb6w2lVMYLpOIUwMbQ4tg1SZ83IxEBV3t3W6W_V10Guh4AwTdr60I2iixSWusXcRNsmFew" />
        </div>
    </section>
    <!-- System Health Bento Grid -->
    <section class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
        <div
            class="bg-surface-container-lowest p-8 rounded-3xl shadow-[0px_12px_32px_rgba(45,0,79,0.04)] border border-white/50 group hover:bg-primary-fixed transition-colors duration-500">
            <div class="flex justify-between items-start mb-6">
                <span class="material-symbols-outlined text-primary group-hover:scale-110 transition-transform"
                    data-icon="cloud_done">cloud_done</span>
                <span
                    class="text-[10px] font-bold font-inter text-emerald-600 bg-emerald-50 px-2 py-1 rounded">STABLE</span>
            </div>
            <h3 class="font-inter text-slate-500 text-xs font-bold uppercase tracking-widest mb-1">Server Uptime</h3>
            <div class="text-4xl font-inter font-bold text-on-surface">99.9%</div>
            <div class="mt-4 h-1 w-full bg-slate-100 rounded-full overflow-hidden">
                <div class="h-full bg-primary w-[99.9%]"></div>
            </div>
        </div>
        <div
            class="bg-surface-container-lowest p-8 rounded-3xl shadow-[0px_12px_32px_rgba(45,0,79,0.04)] border border-white/50 group hover:bg-primary-fixed transition-colors duration-500">
            <div class="flex justify-between items-start mb-6">
                <span class="material-symbols-outlined text-primary group-hover:scale-110 transition-transform"
                    data-icon="groups">groups</span>
                <span class="text-[10px] font-bold font-inter text-primary bg-primary-fixed px-2 py-1 rounded">+12% vs
                    LY</span>
            </div>
            <h3 class="font-inter text-slate-500 text-xs font-bold uppercase tracking-widest mb-1">Active Users</h3>
            <div class="text-4xl font-inter font-bold text-on-surface">12.4k</div>
            <p class="text-[10px] text-slate-400 mt-2">Peak concurrency: 4.2k</p>
        </div>
        <div
            class="bg-surface-container-lowest p-8 rounded-3xl shadow-[0px_12px_32px_rgba(45,0,79,0.04)] border border-white/50 group hover:bg-primary-fixed transition-colors duration-500">
            <div class="flex justify-between items-start mb-6">
                <span class="material-symbols-outlined text-primary group-hover:scale-110 transition-transform"
                    data-icon="speed">speed</span>
                <span class="text-[10px] font-bold font-inter text-blue-600 bg-blue-50 px-2 py-1 rounded">OPTIMAL</span>
            </div>
            <h3 class="font-inter text-slate-500 text-xs font-bold uppercase tracking-widest mb-1">API Response</h3>
            <div class="text-4xl font-inter font-bold text-on-surface">45ms</div>
            <div class="flex gap-1 mt-4">
                <div class="h-4 w-1 bg-primary/20 rounded-full"></div>
                <div class="h-6 w-1 bg-primary/40 rounded-full"></div>
                <div class="h-8 w-1 bg-primary/60 rounded-full"></div>
                <div class="h-5 w-1 bg-primary/80 rounded-full"></div>
                <div class="h-7 w-1 bg-primary rounded-full"></div>
            </div>
        </div>
    </section>
    <!-- Institutional Analytics & Quick Actions -->
    <section class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-12">
        <!-- Analytics Chart Mockup -->
        <div
            class="lg:col-span-2 bg-surface-container-lowest p-10 rounded-[2rem] shadow-[0px_12px_32px_rgba(45,0,79,0.04)]">
            <div class="flex justify-between items-end mb-10">
                <div>
                    <h3 class="font-body text-2xl font-bold text-on-surface">Institutional Analytics</h3>
                    <p class="text-slate-500 text-sm">Enrollment trends per faculty, Academic Year 2023-24</p>
                </div>
                <div class="flex gap-2">
                    <button class="text-[10px] font-bold font-inter px-3 py-1 bg-slate-100 rounded-full">WEEKLY</button>
                    <button
                        class="text-[10px] font-bold font-inter px-3 py-1 bg-primary text-white rounded-full">MONTHLY</button>
                </div>
            </div>
            <div class="h-64 flex items-end justify-between gap-4 px-4">
                <div class="flex-1 flex flex-col items-center gap-3">
                    <div class="w-full bg-slate-100 rounded-t-xl h-[40%] relative group">
                        <div
                            class="absolute bottom-0 left-0 w-full bg-primary/40 h-[60%] rounded-t-xl group-hover:bg-primary transition-colors">
                        </div>
                    </div>
                    <span class="text-[10px] font-inter font-bold text-slate-400">SEPT</span>
                </div>
                <div class="flex-1 flex flex-col items-center gap-3">
                    <div class="w-full bg-slate-100 rounded-t-xl h-[60%] relative group">
                        <div
                            class="absolute bottom-0 left-0 w-full bg-primary/40 h-[75%] rounded-t-xl group-hover:bg-primary transition-colors">
                        </div>
                    </div>
                    <span class="text-[10px] font-inter font-bold text-slate-400">OCT</span>
                </div>
                <div class="flex-1 flex flex-col items-center gap-3">
                    <div class="w-full bg-slate-100 rounded-t-xl h-[85%] relative group">
                        <div
                            class="absolute bottom-0 left-0 w-full bg-primary/40 h-[90%] rounded-t-xl group-hover:bg-primary transition-colors">
                        </div>
                    </div>
                    <span class="text-[10px] font-inter font-bold text-slate-400">NOV</span>
                </div>
                <div class="flex-1 flex flex-col items-center gap-3">
                    <div class="w-full bg-slate-100 rounded-t-xl h-[55%] relative group">
                        <div
                            class="absolute bottom-0 left-0 w-full bg-primary/40 h-[40%] rounded-t-xl group-hover:bg-primary transition-colors">
                        </div>
                    </div>
                    <span class="text-[10px] font-inter font-bold text-slate-400">DEC</span>
                </div>
                <div class="flex-1 flex flex-col items-center gap-3">
                    <div class="w-full bg-slate-100 rounded-t-xl h-[95%] relative group">
                        <div
                            class="absolute bottom-0 left-0 w-full bg-primary/40 h-[80%] rounded-t-xl group-hover:bg-primary transition-colors">
                        </div>
                    </div>
                    <span class="text-[10px] font-inter font-bold text-slate-400">JAN</span>
                </div>
            </div>
        </div>
        <!-- Quick Actions Grid -->
        <div class="bg-surface-container-low p-8 rounded-[2rem] flex flex-col">
            <h3 class="font-body text-xl font-bold mb-6 px-2">Quick Actions</h3>
            <div class="grid grid-cols-2 gap-4 flex-1">
                <button
                    class="bg-white p-6 rounded-2xl flex flex-col items-center justify-center gap-3 hover:shadow-lg transition-all group">
                    <div
                        class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition-colors">
                        <span class="material-symbols-outlined">person_add</span>
                    </div>
                    <span
                        class="text-[10px] font-bold font-inter text-center uppercase tracking-wider text-slate-600">Add
                        New User</span>
                </button>
                <button
                    class="bg-white p-6 rounded-2xl flex flex-col items-center justify-center gap-3 hover:shadow-lg transition-all group">
                    <div
                        class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition-colors">
                        <span class="material-symbols-outlined">admin_panel_settings</span>
                    </div>
                    <span
                        class="text-[10px] font-bold font-inter text-center uppercase tracking-wider text-slate-600">Permissions</span>
                </button>
                <button
                    class="bg-white p-6 rounded-2xl flex flex-col items-center justify-center gap-3 hover:shadow-lg transition-all group">
                    <div
                        class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition-colors">
                        <span class="material-symbols-outlined">system_update</span>
                    </div>
                    <span
                        class="text-[10px] font-bold font-inter text-center uppercase tracking-wider text-slate-600">Update</span>
                </button>
                <button
                    class="bg-white p-6 rounded-2xl flex flex-col items-center justify-center gap-3 hover:shadow-lg transition-all group">
                    <div
                        class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition-colors">
                        <span class="material-symbols-outlined">description</span>
                    </div>
                    <span
                        class="text-[10px] font-bold font-inter text-center uppercase tracking-wider text-slate-600">Audit
                        Logs</span>
                </button>
            </div>
        </div>
    </section>
    <!-- Tickets & Notifications -->
    <section class="grid grid-cols-1 lg:grid-cols-5 gap-8">
        <!-- Pending Support Tickets -->
        <div
            class="lg:col-span-3 bg-surface-container-lowest p-10 rounded-[2rem] shadow-[0px_12px_32px_rgba(45,0,79,0.04)]">
            <div class="flex justify-between items-center mb-8">
                <h3 class="font-body text-2xl font-bold text-on-surface">Pending Support Tickets</h3>
                <button class="text-primary font-inter font-bold text-xs uppercase tracking-widest hover:underline">View
                    All</button>
            </div>
            <div class="space-y-2">
                <div
                    class="flex items-center justify-between p-4 rounded-2xl hover:bg-surface-container-low transition-colors group">
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 bg-error/10 text-error rounded-full flex items-center justify-center">
                            <span class="material-symbols-outlined text-sm">priority_high</span>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold font-inter text-on-surface">SSO Authentication Failure</h4>
                            <p class="text-xs text-slate-500">Reported by Dr. Julian Thorne • 12m ago</p>
                        </div>
                    </div>
                    <div
                        class="px-3 py-1 bg-error-container text-on-error-container rounded-full text-[10px] font-bold">
                        URGENT</div>
                </div>
                <div
                    class="flex items-center justify-between p-4 rounded-2xl hover:bg-surface-container-low transition-colors">
                    <div class="flex items-center gap-4">
                        <div
                            class="w-10 h-10 bg-slate-100 text-slate-400 rounded-full flex items-center justify-center">
                            <span class="material-symbols-outlined text-sm">mail</span>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold font-inter text-on-surface">Course Enrollment Bug</h4>
                            <p class="text-xs text-slate-500">Reported by Sarah Jenkins • 2h ago</p>
                        </div>
                    </div>
                    <div class="px-3 py-1 bg-surface-container-high text-slate-600 rounded-full text-[10px] font-bold">
                        MEDIUM</div>
                </div>
                <div
                    class="flex items-center justify-between p-4 rounded-2xl hover:bg-surface-container-low transition-colors">
                    <div class="flex items-center gap-4">
                        <div
                            class="w-10 h-10 bg-slate-100 text-slate-400 rounded-full flex items-center justify-center">
                            <span class="material-symbols-outlined text-sm">mail</span>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold font-inter text-on-surface">API Token Renewal Request</h4>
                            <p class="text-xs text-slate-500">Reported by IT Department • 4h ago</p>
                        </div>
                    </div>
                    <div class="px-3 py-1 bg-surface-container-high text-slate-600 rounded-full text-[10px] font-bold">
                        LOW</div>
                </div>
            </div>
        </div>
        <!-- Platform Notifications -->
        <div
            class="lg:col-span-2 bg-surface-container-highest/30 backdrop-blur-sm p-10 rounded-[2rem] border border-white/50">
            <h3 class="font-body text-2xl font-bold text-on-surface mb-8">Platform Notifications</h3>
            <div class="space-y-6">
                <div class="relative pl-6 border-l-2 border-primary">
                    <div class="absolute -left-[5px] top-0 w-2 h-2 bg-primary rounded-full"></div>
                    <h4 class="text-xs font-inter font-bold text-primary uppercase tracking-widest mb-1">Scheduled
                        Maintenance</h4>
                    <p class="text-sm text-on-surface leading-relaxed mb-1">System upgrade scheduled for Saturday,
                        02:00 AM UTC. Expect 15 mins of downtime.</p>
                    <span class="text-[10px] font-bold text-slate-400">POSTED 1 HOUR AGO</span>
                </div>
                <div class="relative pl-6 border-l-2 border-slate-200">
                    <h4 class="text-xs font-inter font-bold text-slate-500 uppercase tracking-widest mb-1">Security
                        Policy Update</h4>
                    <p class="text-sm text-on-surface leading-relaxed mb-1">Mandatory 2FA will be enforced for all
                        faculty members starting next Monday.</p>
                    <span class="text-[10px] font-bold text-slate-400">POSTED 5 HOURS AGO</span>
                </div>
                <div class="relative pl-6 border-l-2 border-slate-200">
                    <h4 class="text-xs font-inter font-bold text-slate-500 uppercase tracking-widest mb-1">New API
                        Version v3.4</h4>
                    <p class="text-sm text-on-surface leading-relaxed mb-1">The new REST API version is now available
                        in the staging environment.</p>
                    <span class="text-[10px] font-bold text-slate-400">POSTED YESTERDAY</span>
                </div>
            </div>
            <button
                class="w-full mt-10 py-4 bg-surface-container-lowest rounded-2xl font-inter font-bold text-xs text-primary uppercase tracking-widest shadow-sm hover:shadow-md transition-shadow">Create
                Announcement</button>
        </div>
    </section>
</main>
@endsection