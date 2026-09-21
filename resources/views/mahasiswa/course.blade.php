@extends('layouts.auth.app')
@section('content')
    <main class="min-h-screen">
        <!-- Canvas Content -->
        <div class="px-12 py-16 max-w-7xl mx-auto">
            <!-- Hero Header Section -->
            <section class="mb-16">
                <div class="flex items-baseline justify-between mb-2">
                    <h1 class="text-5xl font-display font-bold text-on-surface tracking-tight">Daftar Mata Kuliah</h1>
                    <p class="font-label text-xs uppercase tracking-[0.2em] text-primary font-bold">Semester Ganjil 2026</p>
                </div>
                <p class="text-xl text-slate-500 max-w-2xl leading-relaxed">Jelajahi berbagai mata kuliah yang tersedia untuk semester ini.</p>
            </section>
            <!-- Filters & Search Layout -->
            <section class="flex flex-wrap items-center justify-between gap-6 mb-12">
                <div class="flex items-center gap-3">
                    <button
                        class="px-6 py-2 bg-primary-container text-white rounded-full text-xs font-label uppercase tracking-wider editorial-shadow">Semua Mata kuliah</button>
                    <button
                        class="px-8 py-2 bg-surface-container-high text-on-surface-variant rounded-full text-xs font-label uppercase tracking-wider hover:bg-primary-fixed transition-colors">Pemrograman</button>
                    <button
                        class="px-6 py-2 bg-surface-container-high text-on-surface-variant rounded-full text-xs font-label uppercase tracking-wider hover:bg-primary-fixed transition-colors">Desain</button>
                    <button
                        class="px-6 py-2 bg-surface-container-high text-on-surface-variant rounded-full text-xs font-label uppercase tracking-wider hover:bg-primary-fixed transition-colors">Fisika</button>
                </div>
                <div class="flex items-center gap-4">
                    <span class="text-sm font-label text-slate-400">Urut Berdasarkan:</span>
                    <select
                        class="bg-transparent border-none text-sm font-label text-primary font-bold focus:ring-0 cursor-pointer">
                        <option>Terbaru</option>
                        <option>Progress</option>
                        <option>A-Z</option>
                    </select>
                </div>
            </section>
            <!-- Grid of Course Cards -->
            <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                @forelse($courses as $course)

                <x-course-card
                    tag="{{ $course->jurusan }}"
                    title="{{ $course->nama_matkul }}"
                    teacher="{{ $course->dosen_pengampu }}"
                    progress="0"
                    image="{{ $course->image_path
                        ? asset('storage/'.$course->image_path)
                        : 'https://via.placeholder.com/400x220?text=No+Image' }}"
                />

                @empty

                <div class="col-span-3 text-center py-20">
                    <p class="text-slate-500">
                        Belum ada mata kuliah yang didaftarkan oleh admin.
                    </p>
                </div>

                @endforelse
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
