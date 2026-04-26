@extends('layouts.admin.app')
@section('content')
<main class="ml-64 p-12 max-w-7xl mx-auto">
    <!-- Header Section -->
    <section class="mb-16">
        <span
            class="font-label uppercase text-[11px] tracking-[0.25em] text-primary-fixed-dim font-bold mb-4 block">Institutional
            Management</span>
        <h2 class="font-display text-5xl font-black text-on-surface mb-4 leading-tight">Course Design <span
                class="italic font-body font-normal">&amp;</span> Administration</h2>
        <p class="font-body text-on-surface-variant text-lg max-w-2xl leading-relaxed">
            Curate the future of academic excellence. Manage student enrollment, faculty distribution, and course
            curriculum with sophisticated editorial control.
        </p>
    </section>
    <!-- Bento Grid Layout -->
    <div class="grid grid-cols-12 gap-8">
        <!-- Create New Course Form (Bento Large Item) -->
        <div class="col-span-12 lg:col-span-7 bg-surface-container-lowest rounded-[2rem] p-10 editorial-shadow">
            <div class="flex justify-between items-start mb-10">
                <div>
                    <h3 class="font-display text-2xl font-bold text-on-surface">Create New Course</h3>
                    <p class="text-on-surface-variant text-sm font-body">Initialize a new academic module</p>
                </div>
                <span class="material-symbols-outlined text-primary-container/30 text-4xl"
                    data-icon="auto_stories">auto_stories</span>
            </div>
            <form class="space-y-8">
                <div class="space-y-1">
                    <label
                        class="font-label text-[10px] uppercase tracking-widest text-on-surface-variant/70 ml-1">Course
                        Title</label>
                    <input
                        class="w-full bg-surface-container-high border-none rounded-xl py-4 px-5 focus:ring-2 focus:ring-primary/40 font-body placeholder:text-on-surface-variant/40 transition-all"
                        placeholder="e.g. Advanced Comparative Literature" type="text" />
                </div>
                <div class="grid grid-cols-2 gap-6">
                    <div class="space-y-1">
                        <label
                            class="font-label text-[10px] uppercase tracking-widest text-on-surface-variant/70 ml-1">Department</label>
                        <select
                            class="w-full bg-surface-container-high border-none rounded-xl py-4 px-5 focus:ring-2 focus:ring-primary/40 font-body transition-all">
                            <option>Humanities &amp; Arts</option>
                            <option>Theoretical Physics</option>
                            <option>Classical Archaeology</option>
                            <option>Social Sciences</option>
                        </select>
                    </div>
                    <div class="space-y-1">
                        <label
                            class="font-label text-[10px] uppercase tracking-widest text-on-surface-variant/70 ml-1">Academic
                            Year</label>
                        <input
                            class="w-full bg-surface-container-high border-none rounded-xl py-4 px-5 focus:ring-2 focus:ring-primary/40 font-body transition-all"
                            placeholder="2024-2025" type="text" />
                    </div>
                </div>
                <div class="space-y-1">
                    <label
                        class="font-label text-[10px] uppercase tracking-widest text-on-surface-variant/70 ml-1">Course
                        Description</label>
                    <textarea
                        class="w-full bg-surface-container-high border-none rounded-xl py-4 px-5 focus:ring-2 focus:ring-primary/40 font-body placeholder:text-on-surface-variant/40 transition-all"
                        placeholder="Describe the curriculum scope and learning objectives..." rows="4"></textarea>
                </div>
                <div class="pt-4 flex items-center justify-between">
                    <div class="flex items-center space-x-2 text-on-surface-variant/60 text-xs italic">
                        <span class="material-symbols-outlined text-sm" data-icon="info">info</span>
                        <span>Drafts are auto-saved to your profile.</span>
                    </div>
                    <button
                        class="bg-gradient-to-br from-primary to-primary-container text-on-primary px-8 py-4 rounded-xl font-headline font-bold text-sm hover:scale-105 active:scale-95 transition-all editorial-shadow"
                        type="submit">
                        Publish Course Module
                    </button>
                </div>
            </form>
        </div>
        <!-- Dashboard Stats Sidebar (Bento Column) -->
        <div class="col-span-12 lg:col-span-5 space-y-8">
            <!-- Assigned Faculty Section -->
            <div class="bg-surface-container-lowest rounded-[2rem] p-8 editorial-shadow">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="font-display text-xl font-bold text-on-surface">Assigned Faculty</h3>
                    <button
                        class="w-8 h-8 rounded-full bg-primary/10 text-primary flex items-center justify-center hover:bg-primary hover:text-white transition-all">
                        <span class="material-symbols-outlined text-sm" data-icon="person_add">person_add</span>
                    </button>
                </div>
                <div class="space-y-4">
                    <div
                        class="flex items-center justify-between group cursor-pointer hover:translate-x-2 transition-transform duration-300">
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 rounded-lg bg-surface-container-high overflow-hidden">
                                <img alt="Faculty"
                                    data-alt="Professional headshot of a female university professor in a library setting, warm evening lighting, elegant academic style"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAAqGZj2INDoA_ujt_g_Y00Pq9BZFBGMEuCrm1KAANCvF9AVkE4b8beyXzkbRWjGQC-owBJlL0YuQHErBn3_-VX1LTfoQvhzyYaxsCwR3_31OTHzbrVI-rUObwLWB9cTwvQdAxxVYY_SNrrS3VOO-_4URfLGzcG_JLBRwmIWWLSXy8FDUKGWbN4IiyPQPGT4Tevb9p1O9O2ehaEgHtkpi_pJAina6Uc3oCEaZdwbX_zmjTlaXHOe_92jcXXq64l1VqIiJtq6wRZFWE" />
                            </div>
                            <div>
                                <p class="font-headline font-bold text-sm text-on-surface">Dr. Elena Volkov</p>
                                <p class="font-label text-[10px] text-on-surface-variant uppercase tracking-wider">
                                    Senior Lecturer</p>
                            </div>
                        </div>
                        <span
                            class="material-symbols-outlined text-on-surface-variant/30 group-hover:text-primary transition-colors"
                            data-icon="more_vert">more_vert</span>
                    </div>
                    <div
                        class="flex items-center justify-between group cursor-pointer hover:translate-x-2 transition-transform duration-300">
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 rounded-lg bg-surface-container-high overflow-hidden">
                                <img alt="Faculty"
                                    data-alt="Professional portrait of a male professor in a tweed jacket, soft natural side lighting, scholarly atmosphere"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBux8DabEDyVPoKKBNJsAWcVIr0gtQEOSWrEz6Irx4QfgF_DT26B4fN6t6j0RDm5DsTGeAA-3Jv7qvxjna7ZU9GqT6auMq2fgpOfSXO96EM65m4yy2Mpf3zxLPGteb7Hnilwh03GZ2ohh4Z-4eBIFbbB2XbDZudSHEzw_QdaPUC_PDwsclZ4VHPFpNfxyWtl8H4_F7xHjzWzNvi61Wk0DuVe5i8WZ11BK9Uh2V-6z6pNdgrMHJyV5tb44o9D-Z5CIowdYK-Gox-wTw" />
                            </div>
                            <div>
                                <p class="font-headline font-bold text-sm text-on-surface">Prof. Julian Thorne</p>
                                <p class="font-label text-[10px] text-on-surface-variant uppercase tracking-wider">
                                    Department Head</p>
                            </div>
                        </div>
                        <span
                            class="material-symbols-outlined text-on-surface-variant/30 group-hover:text-primary transition-colors"
                            data-icon="more_vert">more_vert</span>
                    </div>
                </div>
            </div>
            <!-- Enrolled Students Section -->
            <div class="bg-surface-container-low rounded-[2rem] p-8 border border-white/40">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="font-display text-xl font-bold text-on-surface">Enrolled Students</h3>
                    <div class="flex items-center space-x-2">
                        <span class="bg-primary/20 text-primary text-[10px] font-bold px-2 py-1 rounded">124
                            TOTAL</span>
                    </div>
                </div>
                <div class="space-y-4">
                    <div class="flex items-center space-x-4 bg-surface-container-lowest p-3 rounded-2xl">
                        <div class="flex -space-x-3 overflow-hidden">
                            <img alt="Student" class="inline-block h-8 w-8 rounded-full ring-2 ring-white"
                                data-alt="Portrait of a young woman student with headphones, smiling, bright campus background"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAgCEO4t4arwVv_AJd8GORNFOl5zrhxpTzn33lPLKtvfLxWO8SN4-qMFZsWR8mM2Iimk6e7so-PbpJy1hK9D4T93YVaR6MXfMYx99thRRJ1zAI12bhtMqS9NUq7She72AYHmZvNgiBY6m0o4p4hcRYHFBfv5EUqG6OE20Eke8ygjj1oSDP8DY35Eb04bjo-F2puiWzMLlX_OxvK0L-_31-4JaebSm1xev_dmH2M1oOo-d82wE1cF_YWnYCKT066VyTZcd5OgZRu-a8" />
                            <img alt="Student" class="inline-block h-8 w-8 rounded-full ring-2 ring-white"
                                data-alt="Close up of a young male student in a library, warm soft lighting"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDfPFOpaCqHSz28URuN1ymx571Y8M5OsklOD0UYEgk39-PON7eCNEGVfyM4R2G3zHaDygF4UaDIA30JszbU_da_K1btPw0ujpTQMxsem_waKUSkWyicBaFhxvSdnrBdVuWQR0A543u9ahj-_ndFOSCnS7PdRF2HV4AeZu9GrbA3XUpQ0MYgZiVO6OGC9OQ-6cv6rQANUCbtiOyEmh9PgUljv7pKIgtlWYioQ445vw0NtBED1bM1p6ngQt76MKY-j137y0gvk1a003I" />
                            <img alt="Student" class="inline-block h-8 w-8 rounded-full ring-2 ring-white"
                                data-alt="Portrait of a young professional woman smiling, soft-focus urban park background"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCx0LsodgahZRl7SGH5ljiMZTrs8nsP4mOSGBHRDq33C6MDudSxUKMxE9AZMyMlLtdiSXTI8ToMxtDIaNoUrxbGtNSEquwMngTZNplE4W9fwcNLRzeZUPlbL5jMMwP19Em7n-LlYd3gC_YvUKBs7SkEjpkP_Ro17_Xr3Im2gL8yoL_kp_4Wv8zgOdRXpY_RZgfbITmZOIGoXC83GIflfyh2YWz4w6liqiVUNRsdMQRAC6P2LRc-A87IKd--QCX29V88Xar9FQvYCtw" />
                            <div
                                class="flex h-8 w-8 items-center justify-center rounded-full bg-slate-200 text-[10px] font-bold ring-2 ring-white text-slate-500">
                                +121</div>
                        </div>
                        <span class="text-xs text-on-surface-variant font-body italic">Recently joined the
                            catalog</span>
                    </div>
                    <div class="relative group">
                        <input
                            class="w-full bg-white/50 border-none rounded-xl py-3 px-4 pr-10 text-sm font-body focus:ring-1 focus:ring-primary/20 placeholder:text-on-surface-variant/40"
                            placeholder="Add student by name or ID..." type="text" />
                        <span
                            class="material-symbols-outlined absolute right-3 top-2.5 text-slate-400 group-hover:text-primary transition-colors text-lg"
                            data-icon="search">search</span>
                    </div>
                    <!-- Mini List of Featured Students -->
                    <div class="space-y-3 pt-2">
                        <div class="flex items-center justify-between text-sm">
                            <span class="font-headline font-medium text-on-surface-variant">Arjun Mehta</span>
                            <span
                                class="font-label text-[9px] uppercase bg-secondary-container/30 text-on-secondary-fixed-variant px-2 py-1 rounded">Graduate</span>
                        </div>
                        <div class="flex items-center justify-between text-sm">
                            <span class="font-headline font-medium text-on-surface-variant">Chloe de Luca</span>
                            <span
                                class="font-label text-[9px] uppercase bg-tertiary-fixed/30 text-on-tertiary-fixed-variant px-2 py-1 rounded">Elective</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Academic Timeline Progress -->
            <div class="bg-primary/5 rounded-[2rem] p-8 relative overflow-hidden group">
                <div class="relative z-10">
                    <h4 class="font-headline text-sm font-black text-primary uppercase tracking-tighter mb-4">
                        Enrollment Window</h4>
                    <div class="flex items-end space-x-2 mb-2">
                        <span class="text-3xl font-display font-bold text-primary">08</span>
                        <span class="text-primary/60 text-xs font-body mb-1">DAYS REMAINING</span>
                    </div>
                    <div class="w-full bg-white/40 h-2 rounded-full overflow-hidden">
                        <div class="bg-primary w-[65%] h-full relative">
                            <div class="absolute inset-0 bg-white/20 animate-pulse"></div>
                        </div>
                    </div>
                </div>
                <span
                    class="material-symbols-outlined absolute -right-4 -bottom-4 text-primary/10 text-8xl rotate-12 group-hover:rotate-0 transition-transform duration-700"
                    data-icon="calendar_today">calendar_today</span>
            </div>
        </div>
        <!-- Course Preview Card (Asymmetric Full Width) -->
        <div class="col-span-12 mt-8">
            <div
                class="bg-surface-container-lowest rounded-[3rem] overflow-hidden flex flex-col md:flex-row editorial-shadow h-[400px]">
                <div class="md:w-1/3 h-full relative">
                    <img alt="Academic Setting" class="absolute inset-0 w-full h-full object-cover"
                        data-alt="Grand old library with high vaulted ceilings and rows of classical books, warm atmospheric light, quiet scholarly mood"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAoP0c8HO2yfvJD8vjp7VSXKd2jvOtmHgbEXA5AcVhUfRl-D3aOZ6UfJbcwiay0hSO84QRmHCT1sP70xXnAiUseDCdPRC-nxyMRaQgi453huLy-VStpdeyU1l8fnC0YKKV2IF-bGIp-_4pA9DxwqEcOQ8cBr0a3gMRtHJb0umzaziffBDeUdxLVvq2_SEYxJI7w325qVB7FXU5y_-rve1kzilRTd0viQU618PWzwLbM1I3a6y0WM5SHax8xKwILeOmaU5Xxns4lUjk" />
                    <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent flex items-end p-8">
                        <div>
                            <span class="font-label text-white/70 text-[10px] uppercase tracking-[0.3em]">Module
                                Preview</span>
                            <p class="text-white font-headline text-lg font-bold">Curriculum Visualizer</p>
                        </div>
                    </div>
                </div>
                <div class="md:w-2/3 p-12 flex flex-col justify-center">
                    <h3 class="font-display text-3xl font-bold text-on-surface mb-6 italic">“The foundation of every
                        state is the education of its youth.”</h3>
                    <p class="text-on-surface-variant font-body text-lg leading-relaxed mb-8">
                        Use the curriculum visualizer to map dependencies between lectures, assignments, and external
                        readings. Your course design will be reflected in the student portal instantly upon publication.
                    </p>
                    <div class="flex space-x-4">
                        <button
                            class="bg-surface-container-high text-on-surface px-6 py-3 rounded-xl font-bold text-sm hover:bg-surface-variant transition-colors">
                            Preview as Student
                        </button>
                        <button
                            class="border-2 border-primary-container text-primary-container px-6 py-3 rounded-xl font-bold text-sm hover:bg-primary/5 transition-colors">
                            View History
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Padding -->
    <div class="h-24"></div>
</main>
@endsection