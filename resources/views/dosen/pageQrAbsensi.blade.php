@extends('layouts.auth.app')
@Section('content')
<main class="flex-grow lg:ml-72 p-8 lg:p-12 max-w-7xl mx-auto w-full">
    <div class="mb-12">
        <span class="text-sm font-bold tracking-[0.2em] text-primary uppercase block mb-4">Active Attendance
            Session</span>
        <h1 class="font-body text-5xl lg:text-6xl text-on-surface leading-tight mb-4">Modernist Architectural Theory</h1>
        <div class="flex flex-wrap gap-6 text-on-surface-variant">
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-primary">calendar_today</span>
                <span class="font-headline font-semibold">October 24, 2023</span>
            </div>
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-primary">location_on</span>
                <span class="font-headline font-semibold">Hall B-12 / Studio 4</span>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
        <!-- QR Code Central Card -->
        <div
            class="lg:col-span-7 bg-surface-container-lowest p-12 rounded-xl editorial-shadow text-center relative overflow-hidden">
            <div class="absolute top-0 right-0 w-32 h-32 bg-primary/5 rounded-full -translate-y-16 translate-x-16">
            </div>
            <div class="relative z-10 flex flex-col items-center">
                <div class="mb-8 p-6 bg-white rounded-xl border border-primary/10 inline-block">
                    <img alt="Attendance QR Code" class="w-64 h-64 lg:w-80 lg:h-80 object-contain mx-auto"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDzWLOkZ_Gb9n1YWtPZG-PbA_IOnh9wasgvzPks6v6H1dTYXGINd5z_OqNk6ccZRtbq9QM4RClOpJm0EssfUlvMGaNKHAR22ZTA6fNM8VoRTsC-dw_oiSQIVLmgbgivVIZIiOJS6BC0_OlQvNKRrNKMjNXtsDaAanzAToP-gEO4ZKcCVfoty0YVyW2BKC-vvSGI6Z1y5mQEZ7suk1v6bK_N9zjY5JuUmwC8nZc-5zOMYIisIjoxilXkxLPnKsDU35D-wjhMMzDwGRQ" />
                </div>
                <div class="flex flex-col items-center gap-2">
                    <span class="text-on-surface-variant font-label tracking-widest text-xs uppercase">Scan to mark
                        attendance</span>
                    <div class="h-1 w-24 bg-primary/20 rounded-full overflow-hidden mt-2">
                        <div class="h-full bg-primary w-2/3"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Session Sidebar Controls -->
        <div class="lg:col-span-5 flex flex-col gap-8">
            <!-- Timer & Stats -->
            <div class="grid grid-cols-2 gap-4">
                <div class="bg-surface-container-low p-6 rounded-xl">
                    <span class="text-xs font-bold uppercase tracking-wider text-on-surface-variant block mb-2">Time
                        Remaining</span>
                    <div class="flex items-end gap-1">
                        <span class="text-4xl font-headline font-black text-primary">08:42</span>
                        <span class="text-sm font-bold text-on-surface-variant mb-1">min</span>
                    </div>
                </div>
                <div class="bg-primary text-on-primary p-6 rounded-xl">
                    <span class="text-xs font-bold uppercase tracking-wider opacity-80 block mb-2">Check-ins</span>
                    <div class="flex items-end gap-1">
                        <span class="text-4xl font-headline font-black">32</span>
                        <span class="text-sm font-bold opacity-80 mb-1">/ 124</span>
                    </div>
                </div>
            </div>
            <!-- Action Controls -->
            <div class="flex flex-col gap-3">
                <button
                    class="bg-gradient-to-br from-primary to-primary-container text-on-primary px-6 py-4 rounded-xl font-headline font-bold flex items-center justify-center gap-3 hover:opacity-90 transition-opacity">
                    <span class="material-symbols-outlined">refresh</span>
                    Refresh QR Code
                </button>
                <div class="grid grid-cols-2 gap-3">
                    <button
                        class="bg-surface-container-high text-on-surface px-4 py-4 rounded-xl font-headline font-bold flex items-center justify-center gap-2 hover:bg-surface-container-highest transition-colors">
                        <span class="material-symbols-outlined">download</span>
                        Download
                    </button>
                    <button
                        class="bg-error/10 text-error px-4 py-4 rounded-xl font-headline font-bold flex items-center justify-center gap-2 hover:bg-error/20 transition-colors">
                        <span class="material-symbols-outlined">close</span>
                        Close Session
                    </button>
                </div>
            </div>
            <!-- Recent Check-ins -->
            <div class="bg-surface-container-lowest p-8 rounded-xl editorial-shadow">
                <div class="flex items-center justify-between mb-6">
                    <h3 class="font-headline font-bold text-on-surface">Recent Check-ins</h3>
                    <span class="text-primary text-xs font-bold uppercase tracking-tighter cursor-pointer">View
                        All</span>
                </div>
                <div class="space-y-6">
                    <!-- Student 1 -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-4">
                            <div class="relative">
                                <img class="w-10 h-10 rounded-full object-cover"
                                    data-alt="A close-up portrait of a young female student in a minimalist academic setting. She is smiling softly against a blurred background of a modern university corridor. The lighting is natural and bright, conveying a warm and scholarly atmosphere consistent with a professional faculty portal."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDzLP27RFgiCdo98VYwL_E0HDuZqsa8yrNxBIL1hVAPrJMK5qTEjaDuRmaiPxEYu3BioHDwhCkvl43K1asiTu4sgRa1SiZ8pkOHoHHxo3KpGW0alfp5MCrRoqnG9k4VhQzA2XiG2xpXkepnTUsFJ3-hWYhyNRxtBnmX1cDlsqdC979rveAIdHaRcMJLl3WMM5H4Z9Pyl2N3AjjJMNKdi8lzXfR0xVZwBKJF9LGypQLFacO3Aq375kkR9FTYKPBRPaUyxHj2_6on8i4" />
                                <div
                                    class="absolute bottom-0 right-0 w-3 h-3 bg-green-500 border-2 border-white rounded-full">
                                </div>
                            </div>
                            <div>
                                <p class="font-headline font-bold text-sm text-on-surface">Amara Okafor</p>
                                <p class="text-xs text-on-surface-variant">Just now</p>
                            </div>
                        </div>
                        <span class="material-symbols-outlined text-green-500 text-sm"
                            style="font-variation-settings: 'FILL' 1;">check_circle</span>
                    </div>
                    <!-- Student 2 -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-4">
                            <div class="relative">
                                <img class="w-10 h-10 rounded-full object-cover"
                                    data-alt="A professional headshot of a male student wearing a neutral-toned sweater in a bright, modern interior. The scene is lit with soft, high-key lighting that emphasizes a clean and high-end aesthetic. The background is a minimalist architectural space, maintaining the calm and sophisticated visual style of an elite academic institution."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDgP56PW1Bkb4OMsrT0JVvqtFVMD9svFa7dj_l8Mn41NxFQ0JAXNweMiQAOXlNbyw5Mi7QicYvD3mv2NiP7-sLcBoeIj__1DlhZeNZ2VKl3EC-v0YA_o96M6uZkE13J1-3yQ3Q3DQGQyt36_Oxw9riqzbBN_NKlD9ErGoSZ8nc927o6mt402Pkolg8-__K4p66Mn6jfyKtLw5Uk5WTO96-3OY4RawjGJx0TsPovd4yPycVGz-ngSUSHsXQ-saW8pOfJyCX0i8vUk08" />
                                <div
                                    class="absolute bottom-0 right-0 w-3 h-3 bg-green-500 border-2 border-white rounded-full">
                                </div>
                            </div>
                            <div>
                                <p class="font-headline font-bold text-sm text-on-surface">Julian Schmidt</p>
                                <p class="text-xs text-on-surface-variant">2 mins ago</p>
                            </div>
                        </div>
                        <span class="material-symbols-outlined text-green-500 text-sm"
                            style="font-variation-settings: 'FILL' 1;">check_circle</span>
                    </div>
                    <!-- Student 3 -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-4">
                            <div class="relative">
                                <img class="w-10 h-10 rounded-full object-cover"
                                    data-alt="A portrait of a young woman in an educational setting, featuring a clean and light-mode color palette of soft whites and deep purples. The subject is looking directly at the camera with a confident expression. The environment is a contemporary university library with ample natural light, creating an atmosphere of focus and professional academic growth."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCWBsJAJn2y8IoQ3u2VSOhYDuJBY68orkkqRFgL-swB79DsLW6dG4lVLznqomEWPBueANGzkZEOAeHZVnEJnpjIeTw7pHCbTMyF5YhlEaOBcbcBhXmc3Oswxo_mFuZYMFrbdcM6xl9_1Ib2N2o8hkBpSMK0aJjuLxqe8cNeA5qQZAiBWUG8MBRVPjlG38VY0HRWNyBVElKat2bKQh69H0NR2Gadmc2WvdbPpMpclPKPhIXCcMVXjQVwC84kDKm6jddMex1Dv0fQfwc" />
                                <div
                                    class="absolute bottom-0 right-0 w-3 h-3 bg-green-500 border-2 border-white rounded-full">
                                </div>
                            </div>
                            <div>
                                <p class="font-headline font-bold text-sm text-on-surface">Elena Rossi</p>
                                <p class="text-xs text-on-surface-variant">5 mins ago</p>
                            </div>
                        </div>
                        <span class="material-symbols-outlined text-green-500 text-sm"
                            style="font-variation-settings: 'FILL' 1;">check_circle</span>
                    </div>
                </div>
            </div>
            
    <!-- Footer Decorative Element -->
    <div class="mt-16 flex items-center gap-4 opacity-30">
        <div class="h-[1px] flex-grow bg-on-surface-variant"></div>
        <span class="font-display italic text-on-surface-variant text-sm tracking-widest">EST. 2023 ACADEMIC ELITE
            INSTITUTION</span>
        <div class="h-[1px] flex-grow bg-on-surface-variant"></div>
    </div>
</main>
@endsection
