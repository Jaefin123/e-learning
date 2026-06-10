@extends('layouts.auth.app')
@section('content')
<main class="pt-12 px-8 pb-12 min-h-screen">
    <!-- Header / Welcome Section -->
    <header class="mb-16 flex flex-col md:flex-row md:items-end justify-between gap-8">
        <div class="max-w-2xl">
            <h1 class="text-5xl md:text-7xl font-headline font-extrabold tracking-tight text-on-surface mb-4">
                Welcome back, <span class="italic text-primary serif-text font-normal">{{ ucfirst(auth()->user()->name) }}.</span>
            </h1>
            <p class="serif-text text-xl text-on-surface-variant leading-relaxed">
                Kamu Memiliki <span class="font-bold text-primary">3 Tugas</span> yang akan jatuh tempo minggu ini. Prestasi akademik Anda saat ini sangat memuaskan dengan <span
                    class="underline decoration-primary decoration-4 underline-offset-4">3.9 GPA</span>.
            </p>
        </div>
        <div class="flex gap-4">
            <div
                class="bg-surface-container-lowest p-6 rounded-xl shadow-[0px_12px_32px_rgba(45,0,79,0.06)] flex flex-col items-center">
                <span class="text-3xl font-bold text-primary">88%</span>
                <span class="font-label text-[10px] uppercase tracking-widest text-slate-500 mt-2">Semester
                    Progress</span>
            </div>
            <div class="bg-primary p-6 rounded-xl shadow-[0px_12px_32px_rgba(45,0,79,0.06)] flex flex-col items-center">
                <span class="text-3xl font-bold text-white">12</span>
                <span class="font-label text-[10px] uppercase tracking-widest text-purple-200 mt-2">Kredit yang didapat</span>
            </div>
        </div>
    </header>
    <!-- Bento Grid Layout -->
    <div class="grid grid-cols-12 gap-8">
        <!-- Current Courses (Main Column) -->
        <section class="col-span-12 xl:col-span-8 space-y-8">
            <div class="flex items-center justify-between">
                <h3 class="font-label text-xs font-bold uppercase tracking-[0.2em] text-slate-400">Program Akademik Saat Ini</h3>
                <a class="text-primary text-xs font-bold uppercase tracking-widest hover:underline" href="#">Lihat Katalog</a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Course Card 1 -->
                <div
                    class="group bg-surface-container-lowest p-8 rounded-xl transition-all duration-300 hover:bg-primary-fixed relative overflow-hidden">
                    <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
                        <span class="material-symbols-outlined text-6xl text-primary">architecture</span>
                    </div>
                    <div class="relative z-10">
                        <span
                            class="inline-block px-3 py-1 bg-secondary-container text-on-secondary-container text-[10px] font-bold uppercase tracking-widest rounded-sm mb-6">In
                            Progress</span>
                        <h4 class="serif-text text-2xl font-bold mb-2">Pemrograman Dasar</h4>
                        <p class="text-sm text-on-surface-variant mb-8 line-clamp-2">Belajar dasar coding, algoritma, dan membangun aplikasi sederhana.</p>
                        <div class="space-y-4">
                            <div class="flex justify-between text-xs font-label">
                                <span class="text-slate-500">Module 4 of 12</span>
                                <span class="font-bold text-primary">35% Complete</span>
                            </div>
                            <div class="h-1 w-full bg-secondary-fixed rounded-full overflow-hidden">
                                <div class="h-full bg-primary rounded-full shadow-[0_0_8px_rgba(76,0,128,0.4)]"
                                    style="width: 35%"></div>
                            </div>
                        </div>
                        <div class="mt-8 pt-6 border-t border-outline-variant/20 flex items-center gap-4">
                            <span class="material-symbols-outlined text-primary text-sm">schedule</span>
                            <span class="text-xs font-medium text-slate-600">Jadwal Berikutnya: <span
                                    class="text-on-surface font-bold">Besok, 10:00 AM</span></span>
                        </div>
                    </div>
                </div>
                <!-- Course Card 2 -->
                <div
                    class="group bg-surface-container-lowest p-8 rounded-xl transition-all duration-300 hover:bg-primary-fixed relative overflow-hidden">
                    <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
                        <span class="material-symbols-outlined text-6xl text-primary">science</span>
                    </div>
                    <div class="relative z-10">
                        <span
                            class="inline-block px-3 py-1 bg-tertiary-fixed text-on-tertiary-fixed text-[10px] font-bold uppercase tracking-widest rounded-sm mb-6">Elective</span>
                        <h4 class="serif-text text-2xl font-bold mb-2">Fisika 1</h4>
                        <p class="text-sm text-on-surface-variant mb-8 line-clamp-2">Mempelajari gerak, gaya, energi, dan dasar hukum fisika.</p>
                        <div class="space-y-4">
                            <div class="flex justify-between text-xs font-label">
                                <span class="text-slate-500">Module 9 of 12</span>
                                <span class="font-bold text-primary">75% Complete</span>
                            </div>
                            <div class="h-1 w-full bg-secondary-fixed rounded-full overflow-hidden">
                                <div class="h-full bg-primary rounded-full shadow-[0_0_8px_rgba(76,0,128,0.4)]"
                                    style="width: 75%"></div>
                            </div>
                        </div>
                        <div class="mt-8 pt-6 border-t border-outline-variant/20 flex items-center gap-4">
                            <span class="material-symbols-outlined text-primary text-sm">schedule</span>
                            <span class="text-xs font-medium text-slate-600">Jadwal Berikutnya: <span
                                    class="text-on-surface font-bold">Kamis, 1:30 PM</span></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Recent Activity / Notifications -->
            <div class="mt-12">
                <h3 class="font-label text-xs font-bold uppercase tracking-[0.2em] text-slate-400 mb-8">Recent
                    Scholarly Activity</h3>
                <div class="bg-surface-container-lowest rounded-xl p-2">
                    <div
                        class="flex items-center gap-6 p-6 hover:bg-surface-container-low transition-colors rounded-lg group">
                        <div
                            class="w-12 h-12 bg-primary-fixed rounded-full flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition-all">
                            <span class="material-symbols-outlined">description</span>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm font-bold text-on-surface">Nilai Diterbitkan: Pemrograman Dasar</p>
                            <p class="text-xs text-slate-500 mt-1">Anda mendapatkan nilai <span class="text-primary font-bold">A-
                                    (92%)</span> pada esai tengah semester Anda.</p>
                        </div>
                        <span class="text-[10px] font-label text-slate-400 uppercase tracking-widest">2h ago</span>
                    </div>
                    <div
                        class="flex items-center gap-6 p-6 hover:bg-surface-container-low transition-colors rounded-lg group">
                        <div
                            class="w-12 h-12 bg-secondary-fixed rounded-full flex items-center justify-center text-secondary group-hover:bg-secondary group-hover:text-white transition-all">
                            <span class="material-symbols-outlined">forum</span>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm font-bold text-on-surface">Profesor Ahmad telah membalas postingan Anda
                            </p>
                            <p class="text-xs text-slate-500 mt-1">"Penjelasan dan penggunaan logika algoritma yang Anda gunakan sudah cukup baik..."</p>
                        </div>
                        <span class="text-[10px] font-label text-slate-400 uppercase tracking-widest">5 jam yang lalu</span>
                    </div>
                </div>
            </div>
        </section>
        <!-- Sidebar (Secondary Column) -->
        <section class="col-span-12 xl:col-span-4 space-y-8">
            <!-- Upcoming Timeline -->
            <div>
                <h3 class="font-label text-xs font-bold uppercase tracking-[0.2em] text-slate-400 mb-8">Jadwal Mendatang</h3>
                <div
                    class="bg-surface-container-lowest rounded-xl p-8 shadow-[0px_12px_32px_rgba(45,0,79,0.06)] border-l-4 border-primary">
                    <div class="space-y-10 relative">
                        <!-- Timeline Line -->
                        <div class="absolute left-[11px] top-2 bottom-2 w-px bg-outline-variant/30"></div>
                        <!-- Class Item -->
                        <div class="relative flex gap-6">
                            <div class="w-6 h-6 rounded-full bg-primary border-4 border-white shadow-sm z-10">
                            </div>
                            <div>
                                <p class="text-[10px] font-bold text-primary uppercase tracking-widest">10:00 AM —
                                    11:30 AM</p>
                                <h5 class="serif-text text-lg font-bold mt-1">Sastra Komparatif</h5>
                                <p class="text-xs text-slate-500">Ruang B-12 • Seminar</p>
                            </div>
                        </div>
                        <!-- Assignment Deadline -->
                        <div class="relative flex gap-6">
                            <div class="w-6 h-6 rounded-full bg-error border-4 border-white shadow-sm z-10"></div>
                            <div>
                                <p class="text-[10px] font-bold text-error uppercase tracking-widest">jatuh tempo pada 11:59
                                    PM</p>
                                <h5 class="serif-text text-lg font-bold mt-1">Usulan Pengajuan Proposal Skripsi</h5>
                                <p class="text-xs text-slate-500">Praktik Kuratorial  • Daring</p>
                            </div>
                        </div>
                        <!-- Class Item -->
                        <div class="relative flex gap-6">
                            <div class="w-6 h-6 rounded-full bg-slate-300 border-4 border-white shadow-sm z-10">
                            </div>
                            <div>
                                <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">2:00 PM —
                                    3:30 PM</p>
                                <h5 class="serif-text text-lg font-bold mt-1">Kuliah Tamu: Urbanisme</h5>
                                <p class="text-xs text-slate-500">Auditorium Utama • Kehadiran tidak wajib</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Quick Links Section -->
            <div>
                <h3 class="font-label text-xs font-bold uppercase tracking-[0.2em] text-slate-400 mb-8">Sumber Daya Akademik</h3>
                <div class="grid grid-cols-2 gap-4">
                    <a class="bg-surface-container-high p-6 rounded-xl hover:bg-primary-container hover:text-white transition-all group flex flex-col gap-4"
                        href="#">
                        <span
                            class="material-symbols-outlined text-primary group-hover:text-white">library_books</span>
                        <span class="font-label text-[10px] font-bold uppercase tracking-widest">Perpustakaan Digital</span>
                    </a>
                    <a class="bg-surface-container-high p-6 rounded-xl hover:bg-primary-container hover:text-white transition-all group flex flex-col gap-4"
                        href="#">
                        <span
                            class="material-symbols-outlined text-primary group-hover:text-white">support_agent</span>
                        <span class="font-label text-[10px] font-bold uppercase tracking-widest">Help Desk</span>
                    </a>
                    <a class="bg-surface-container-high p-6 rounded-xl hover:bg-primary-container hover:text-white transition-all group flex flex-col gap-4"
                        href="#">
                        <span class="material-symbols-outlined text-primary group-hover:text-white">receipt_long</span>
                        <span class="font-label text-[10px] font-bold uppercase tracking-widest">Transcripts</span>
                    </a>
                    <a class="bg-surface-container-high p-6 rounded-xl hover:bg-primary-container hover:text-white transition-all group flex flex-col gap-4"
                        href="#">
                        <span
                            class="material-symbols-outlined text-primary group-hover:text-white">calendar_month</span>
                        <span class="font-label text-[10px] font-bold uppercase tracking-widest">Term
                            Calendar</span>
                    </a>
                </div>
            </div>
            <!-- Personal Research Card -->
            <div class="relative group rounded-2xl overflow-hidden aspect-[4/5] bg-primary">
                <img alt="Library Books"
                    class="absolute inset-0 w-full h-full object-cover opacity-40 mix-blend-overlay transition-transform duration-700 group-hover:scale-110"
                    data-alt="A moody, atmospheric shot of an old university library with dark wooden shelves filled with antique leather-bound books and soft golden dust motes in the light."
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCc3SM4e2rFDEEXpS6e9AyLM1mLhjqz7iB4nrLwT1RwAkfP64ZztM-KxFXY-RZNW2bLOhz_qgliuhMurhePgaZKrrW0-MjHDlO18k3jJdTcJTiaV5P1SIinmSamk11Dax9210cSeCw00d0LWv-Sge1TdVIPA3MeAsjjsxr3gsOEvSn96DQXxiHtTY2JB0Ud-YuEkOcf7yRfh--fc3mS2x3yd_k-XJO0KSLT53XYN7CMDMKZmprWJdAJvQf5HCmFnvPhVzYskUar4pw" />
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>
                <div class="absolute bottom-0 p-8 text-white">
                    <span class="font-label text-[10px] font-bold uppercase tracking-[0.3em] mb-4 block">Sumber Baru Telah Tersedia</span>
                    <h4 class="serif-text text-2xl font-bold mb-4 italic">Jurnal Teknologi Komputer</h4>
                    <p class="text-sm text-purple-100 mb-6 font-light">Issue 42: Sustainability and Memory in
                        post-industrial landscapes.</p>
                    <button
                        class="bg-white text-primary px-6 py-3 rounded-xl font-bold text-xs uppercase tracking-widest hover:bg-purple-100 transition-colors">
                        Read Publication
                    </button>
                </div>
            </div>
        </section>
    </div>
</main>
@endsection