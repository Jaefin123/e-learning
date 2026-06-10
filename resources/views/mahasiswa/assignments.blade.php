@extends('layouts.auth.app')
@section('content')
<main class="min-h-screen relative">
    <!-- Canvas -->
    <div class="pt-24 px-12 pb-20 max-w-7xl mx-auto">
        <!-- Hero Section -->
        <section class="mb-16">
            <div class="flex items-baseline space-x-4">
                <span class="text-xs font-bold tracking-[0.2em] text-primary uppercase">Portfolio Akademik</span>
                <div class="h-px flex-1 bg-gradient-to-r from-primary/20 to-transparent"></div>
            </div>
            <h1 class="font-display font-black text-6xl text-on-surface mt-4 editorial-title-offset tracking-tighter">
                Tugas</h1>
            <p class="font-body text-xl text-on-surface-variant mt-4 max-w-2xl leading-relaxed">
                Pantau kemajuan intelektual Anda dan tenggat waktu akademis yang akan datang melalui tampilan kurikulum yang dikurasi.
            </p>
        </section>
        <div class="grid grid-cols-12 gap-8">
            <!-- Upcoming Work Section (Editorial Bento Style) -->
            <div class="col-span-12 lg:col-span-8 space-y-8">
                <div class="flex items-center justify-between">
                    <h2 class="font-display font-bold text-3xl text-on-surface">Pekerjaan yang Akan Datang</h2>
                    <button class="text-primary font-bold text-sm hover:underline">Lihat Kalender Penuh</button>
                </div>
                <div class="grid grid-cols-1 gap-6">
                    <!-- Card 1 -->
                    <div
                        class="bg-surface-container-lowest p-8 rounded-xl shadow-[0_12px_32px_rgba(45,0,79,0.04)] hover:bg-primary-fixed transition-all duration-300 group">
                        <div class="flex justify-between items-start mb-6">
                            <div class="space-y-1">
                                <div class="flex items-center space-x-2">
                                    <span
                                        class="bg-secondary-container text-on-secondary-container px-2 py-0.5 text-[10px] font-bold tracking-widest uppercase rounded">Sedang
                                        Dikerjakan</span>
                                    <span class="text-xs text-on-surface-variant font-medium">Artificial Intelligence</span>
                                </div>
                                <h3 class="font-body font-bold text-2xl group-hover:text-primary transition-colors">Etika Dalam Penggunaan AI</h3>
                            </div>
                            <div class="text-right">
                                <span class="block text-xs font-bold text-error uppercase tracking-widest">Jatuh Tempo dalam 2
                                    Hari</span>
                                <span class="text-xs text-on-surface-variant">Oct 24, 11:59 PM</span>
                            </div>
                        </div>
                        <p class="font-body text-on-surface-variant line-clamp-2 mb-8">Penerapan Etika dalam Penggunaan AI dan Teknologi.</p>
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
                                <span>Lanjutkan Pengiriman</span>
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
                        class="bg-tertiary-fixed text-on-tertiary-fixed px-2 py-0.5 text-[10px] font-bold tracking-widest uppercase rounded">Pilihan</span>
                                    <span class="text-xs text-on-surface-variant font-medium">Matematika Diskrit</span>
                                </div>
                                <h3 class="font-body font-bold text-2xl group-hover:text-primary transition-colors">Penggunaan Teori Himpunan</h3>
                            </div>
                            <div class="text-right">
                                <span
                                    class="block text-xs font-bold text-on-surface-variant uppercase tracking-widest">Jatuh
                                    Tempo dalam 5 Hari</span>
                                <span class="text-xs text-on-surface-variant">Oct 27, 11:59 PM</span>
                            </div>
                        </div>
                        <p class="font-body text-on-surface-variant line-clamp-2 mb-8">Analisis komprehensif tentang penerapan teori himpunan dalam pemecahan masalah matematika diskrit.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center text-on-surface-variant space-x-4">
                                <div class="flex items-center space-x-1">
                                    <span class="material-symbols-outlined text-base"
                                        data-icon="attach_file">attach_file</span>
                                    <span class="text-xs font-medium">3 Draf</span>
                                </div>
                                <div class="flex items-center space-x-1">
                                    <span class="material-symbols-outlined text-base"
                                        data-icon="chat_bubble_outline">chat_bubble_outline</span>
                                    <span class="text-xs font-medium">12 Komentar</span>
                                </div>
                            </div>
                            <button
                                class="bg-surface-container-high text-on-surface px-6 py-2.5 rounded-full font-bold text-sm tracking-tight flex items-center space-x-2">
                                <span>Buka Tugas</span>
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
                        <h2 class="font-display font-bold text-xl text-on-surface">Dalam Tinjauan</h2>
                    </div>
                    <div class="space-y-4">
                        <!-- Review Item 1 -->
                        <div class="bg-surface-container-low p-5 rounded-xl space-y-4">
                            <div class="flex justify-between items-start">
                                <div class="space-y-0.5">
                                    <h4 class="font-body font-bold text-sm">Kalkulus Lanjutan III</h4>
                                    <p class="text-xs text-on-surface-variant">Set Masalah #09 - Medan Vektor</p>
                                </div>
                                <span
                                    class="text-[10px] font-bold text-secondary uppercase tracking-tighter bg-secondary-fixed px-2 py-0.5 rounded">Penilaian</span>
                            </div>
                            <div class="relative pt-1">
                                <div class="flex mb-2 items-center justify-between">
                                    <div class="text-right">
                                        <span class="text-xs font-bold inline-block text-primary">85% Diproses</span>
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
                                    <h4 class="font-body font-bold text-sm">Algoritma dan Struktur Data</h4>
                                    <p class="text-xs text-on-surface-variant">Penerapan Algoritma Sorting</p>
                                </div>
                                <span
                                    class="text-[10px] font-bold text-tertiary-container text-white uppercase tracking-tighter bg-tertiary px-2 py-0.5 rounded">Tertunda</span>
                            </div>
                            <div class="relative pt-1">
                                <div class="flex mb-2 items-center justify-between">
                                    <div class="text-right">
                                        <span class="text-xs font-bold inline-block text-primary">12% Diproses</span>
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
                        <h2 class="font-display font-bold text-xl text-on-surface">Nilai Terbaru</h2>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <!-- Grade Card 1 -->
                        <div
                            class="bg-surface-container-lowest p-6 rounded-xl shadow-sm border border-outline-variant/20 flex flex-col items-center justify-center text-center space-y-2">
                            <span class="text-3xl font-black text-primary">A</span>
                            <div class="space-y-0.5">
                                <p class="text-[10px] font-bold uppercase tracking-widest text-on-surface-variant">
                                    Pemrograman</p>
                                <p class="text-xs font-medium text-slate-400">Oct 19</p>
                            </div>
                        </div>
                        <!-- Grade Card 2 -->
                        <div
                            class="bg-surface-container-lowest p-6 rounded-xl shadow-sm border border-outline-variant/20 flex flex-col items-center justify-center text-center space-y-2">
                            <span class="text-3xl font-black text-primary">A-</span>
                            <div class="space-y-0.5">
                                <p class="text-[10px] font-bold uppercase tracking-widest text-on-surface-variant">
                                    Fisika 1</p>
                                <p class="text-xs font-medium text-slate-400">Oct 17</p>
                            </div>
                        </div>
                        <!-- Grade Card 3 -->
                        <div
                            class="bg-surface-container-lowest p-6 rounded-xl shadow-sm border border-outline-variant/20 flex flex-col items-center justify-center text-center space-y-2">
                            <span class="text-3xl font-black text-primary">B+</span>
                            <div class="space-y-0.5">
                                <p class="text-[10px] font-bold uppercase tracking-widest text-on-surface-variant">
                                    Desain</p>
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
                            <p class="text-[10px] font-bold uppercase tracking-widest text-on-surface-variant">Laporan
                                Lengkap</p>
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
                        <h2 class="font-display font-black text-4xl text-on-primary leading-tight">Kuasai perjalanan akademik
                            Anda melalui fokus.</h2>
                        <p class="text-on-primary/80 font-body text-lg leading-relaxed">Bergabunglah dengan seminar yang dikurasi tentang
                            "Strategi Belajar Metakognisi" hari Jumat ini untuk mengoptimalkan alur kerja belajar Anda.</p>
                        <button
                            class="bg-white text-primary px-8 py-3.5 rounded-full font-bold tracking-tight shadow-xl hover:scale-105 transition-transform">Pesan
                            Tempat Anda</button>
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