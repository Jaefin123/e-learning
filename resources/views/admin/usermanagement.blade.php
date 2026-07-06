@extends('layouts.auth.app')
@section('content')
    <main class="min-h-screen transition-all duration-300">
        <!-- TopNavBar -->

        <div class="p-12 max-w-7xl mx-auto">
            <!-- Page Header (Asymmetric Layout) -->
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-8">
                <div class="max-w-2xl">
                    <span class="font-sans uppercase text-xs tracking-[0.2em] font-bold text-primary mb-4 block">Direktori
                        Pusat</span>
                    <h2 class="text-6xl font-headline font-extrabold text-on-surface tracking-tight mb-4">Manajemen Pengguna
                    </h2>
                    <p class="serif-content text-xl text-on-surface-variant leading-relaxed">
                        Mengelola modal intelektual lembaga. Awasi penunjukan dosen dan status akademik mahasiswa dalam satu
                        tampilan editorial terpadu.
                    </p>
                </div>

                <div class="flex flex-col gap-4">
                    <button type="button" id="openModalBtn"
                        class="bg-primary from-primary to-primary-container text-white px-8 py-4 rounded-xl font-bold flex items-center justify-center gap-3 shadow-lg transition-transform hover:-translate-y-1">
                        <span class="material-symbols-outlined">person_add</span>
                        <span>Tambah Pengguna Baru</span>
                    </button>

                    <!-- Tombol Tambah Akun (Mengarah ke ID #modalTambahAkun) -->

                    <!-- Struktur Modal -->
                    <div id="modalTambahAkun"
                        class="fixed inset-0 z-50 flex items-center justify-center hidden opacity-0 transition-all duration-300">
                        {{-- Backdrop --}}
                        <div class="absolute inset-0 bg-slate-900/40 backdrop-blur-sm" id="closeModalBackdrop"></div>

                        <!-- Kotak Konten Modal (Ditambahkan max-h dan overflow agar jika form panjang bisa di-scroll) -->
                        <div
                            class="relative bg-white w-full max-w-md rounded-2xl shadow-xl border border-outline-variant/20 overflow-hidden z-10 max-h-[90vh] flex flex-col transform scale-95 duration-300">

                            <!-- Header -->
                            <div class="px-6 py-4 bg-slate-50 border-b border-slate-100 flex items-center justify-between">
                                <h3 class="font-headline font-bold text-on-surface text-lg">Buat Akun Baru</h3>
                                <button type="button" id="closeModalBtn"
                                    class="text-slate-400 hover:text-slate-600 transition-colors">
                                    <span class="material-symbols-outlined">close</span>
                                </button>
                            </div>

                            <!-- Form Input -->
                            <form action="{{ route('usermanagementadmin.create.akun') }}" method="POST"
                                class="p-6 space-y-4 overflow-y-auto flex-1">
                                @csrf

                                {{-- 1. Input Umum: Pilihan Role --}}
                                <div>
                                    <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">Tipe
                                        Akun (Role)</label>
                                    <select name="role" id="roleSelect" required
                                        class="w-full bg-surface-container-lowest border border-outline-variant/30 rounded-xl px-4 py-3 text-sm focus:ring-2 focus:ring-primary/10">
                                        <option value="" disabled selected>-- Pilih Tipe Akun --</option>
                                        <option value="admin">Petugas Administrasi (Admin)</option>
                                        <option value="dosen">Dosen</option>
                                        <option value="mahasiswa">Mahasiswa</option>
                                    </select>
                                </div>

                                {{-- 2. Input Umum: Nama, Email, Password --}}
                                <div>
                                    <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">Nama
                                        Lengkap</label>
                                    <input type="text" name="name" required placeholder="Masukkan nama..."
                                        class="w-full bg-surface-container-lowest border border-outline-variant/30 rounded-xl px-4 py-3 text-sm">
                                </div>

                                <div>
                                    <label
                                        class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">Alamat
                                        Email</label>
                                    <input type="email" name="email" required placeholder="contoh@domain.com"
                                        class="w-full bg-surface-container-lowest border border-outline-variant/30 rounded-xl px-4 py-3 text-sm">
                                </div>

                                <div>
                                    <label
                                        class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">Password</label>
                                    <input type="password" name="password" required placeholder="Minimal 8 karakter..."
                                        class="w-full bg-surface-container-lowest border border-outline-variant/30 rounded-xl px-4 py-3 text-sm">
                                </div>

                                {{-- ======================================================= --}}
                                {{-- 💡 INPUT DINAMIS KHUSUS (Awalnya disembunyikan lewat class 'hidden') --}}
                                {{-- ======================================================= --}}

                                {{-- Form Khusus Admin (Misal: NIP atau Kode Otoritas) --}}
                                <div id="formAdmin"
                                    class="hidden p-4 bg-slate-50 rounded-xl border border-slate-100 space-y-4">
                                    <p class="text-xs font-bold text-primary uppercase tracking-wide">Informasi Administrasi
                                    </p>
                                    <div>
                                        <label class="block text-xs font-bold text-slate-600 mb-1">NIP Admin</label>
                                        <input type="text" name="admin_nip" placeholder="Masukkan NIP..."
                                            class="w-full bg-white border border-outline-variant/30 rounded-xl px-4 py-3 text-sm">
                                    </div>
                                    <div>
                                        <label class="block text-xs font-bold text-slate-600 mb-1">Jabatan</label>
                                        <input type="text" name="admin_jabatan" placeholder="Masukkan Jabatan..."
                                            class="w-full bg-white border border-outline-variant/30 rounded-xl px-4 py-3 text-sm">
                                    </div>
                                </div>

                                {{-- Form Khusus Dosen (Misal: NIDN & Gelar) --}}
                                <div id="formDosen"
                                    class="hidden p-4 bg-slate-50 rounded-xl border border-slate-100 space-y-4">
                                    <p class="text-xs font-bold text-primary uppercase tracking-wide">Informasi Dosen</p>
                                    <div>
                                        <label class="block text-xs font-bold text-slate-600 mb-1">NIDN Dosen</label>
                                        <input type="text" name="dosen_nidn" placeholder="Masukkan NIDN..."
                                            class="w-full bg-white border border-outline-variant/30 rounded-xl px-4 py-3 text-sm">
                                    </div>
                                    <div class="grid grid-cols-2 gap-2">
                                        <div>
                                            <label class="block text-xs font-bold text-slate-600 mb-1">Gelar Depan</label>
                                            <input type="text" name="gelar_depan" placeholder="Contoh: Dr."
                                                class="w-full bg-white border border-outline-variant/30 rounded-xl px-4 py-3 text-sm">
                                        </div>
                                        <div>
                                            <label class="block text-xs font-bold text-slate-600 mb-1">Gelar
                                                Belakang</label>
                                            <input type="text" name="gelar_belakang" placeholder="Contoh: M.T."
                                                class="w-full bg-white border border-outline-variant/30 rounded-xl px-4 py-3 text-sm">
                                        </div>
                                    </div>
                                    <div>
                                        <label class="block text-xs font-bold text-slate-600 mb-1">Program Studi</label>
                                        <select name="dosen_prodi"
                                            class="w-full bg-surface-container-lowest border border-outline-variant/30 rounded-xl px-4 py-3 text-sm focus:ring-2 focus:ring-primary/10">
                                            <option value="" disabled selected>-- Pilih Program Studi --</option>
                                            <option value="teknik sipil">Teknik Sipil</option>
                                            <option value="teknik komputer">Teknik Komputer</option>
                                            <option value="teknik lingkungan">Teknik Lingkungan</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-xs font-bold text-slate-600 mb-1">Jabatan</label>
                                        <input type="text" name="dosen_jabatan" placeholder="Masukkan Jabatan..."
                                            class="w-full bg-white border border-outline-variant/30 rounded-xl px-4 py-3 text-sm">
                                    </div>
                                </div>

                                {{-- Form Khusus Mahasiswa (Misal: NPM/NIM) --}}
                                <div id="formMahasiswa"
                                    class="hidden p-4 bg-slate-50 rounded-xl border border-slate-100 space-y-4">
                                    <p class="text-xs font-bold text-primary uppercase tracking-wide">Informasi Mahasiswa
                                    </p>
                                    <div>
                                        <label class="block text-xs font-bold text-slate-600 mb-1">NPM / NIM</label>
                                        <input type="text" name="mahasiswa_npm"
                                            placeholder="Masukkan nomor pokok mahasiswa..."
                                            class="w-full bg-white border border-outline-variant/30 rounded-xl px-4 py-3 text-sm">
                                    </div>
                                    <div>
                                        <label class="block text-xs font-bold text-slate-600 mb-1">Program Studi</label>
                                        <select name="mahasiswa_prodi"
                                            class="w-full bg-surface-container-lowest border border-outline-variant/30 rounded-xl px-4 py-3 text-sm focus:ring-2 focus:ring-primary/10">
                                            <option value="" disabled selected>-- Pilih Program Studi --</option>
                                            <option value="teknik sipil">Teknik Sipil</option>
                                            <option value="teknik komputer">Teknik Komputer</option>
                                            <option value="teknik lingkungan">Teknik Lingkungan</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-xs font-bold text-slate-600 mb-1">Tahun Masuk</label>
                                        <input type="number" name="mahasiswa_tahun_masuk"
                                            placeholder="Masukkan tahun masuk"
                                            class="w-full bg-white border border-outline-variant/30 rounded-xl px-4 py-3 text-sm">
                                    </div>
                                </div>

                                <!-- Footer / Tombol Aksi -->
                                <div
                                    class="flex justify-end gap-2 pt-4 border-t border-slate-100 bg-white sticky bottom-0">
                                    <button type="button" id="cancelModalBtn"
                                        class="px-4 py-2 rounded-xl text-sm font-bold text-slate-600 hover:bg-slate-100 transition-colors">Batal</button>
                                    <button type="submit"
                                        class="px-4 py-2 rounded-xl text-sm font-bold bg-primary text-white shadow-md hover:bg-primary-variant transition-colors">Buat
                                        Akun</button>
                                </div>
                            </form>
                        </div>
                    </div>


                </div>
            </div>
            <!-- Bento Stats Grid -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-12">
                <div
                    class="col-span-1 md:col-span-2 bg-surface-container-lowest p-8 rounded-2xl flex flex-col justify-between group hover:bg-primary-fixed transition-colors duration-300">
                    <div>
                        <p class="text-slate-500 text-sm font-bold uppercase tracking-wider mb-2">Total Pengguna</p>
                        <h3 class="text-4xl font-headline font-black text-on-surface">{{ $totalUsers }}</h3>
                    </div>
                    <div class="mt-8 flex items-center gap-2 text-primary">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span class="text-sm font-bold">+12% dari periode lalu</span>
                    </div>
                </div>
                <div
                    class="bg-surface-container-low p-8 rounded-2xl flex flex-col items-center justify-center text-center">
                    <p class="text-slate-500 text-sm font-bold uppercase tracking-wider mb-2">Dosen</p>
                    <h3 class="text-3xl font-headline font-bold text-on-surface">{{ $totalDosen }}</h3>
                    <div class="mt-4 w-12 h-1 bg-primary rounded-full"></div>
                </div>
                <div
                    class="bg-surface-container-low p-8 rounded-2xl flex flex-col items-center justify-center text-center">
                    <p class="text-slate-500 text-sm font-bold uppercase tracking-wider mb-2">Mahasiswa Aktif</p>
                    <h3 class="text-3xl font-headline font-bold text-on-surface">{{ $totalMahasiswa }}</h3>
                    <div class="mt-4 w-12 h-1 bg-secondary rounded-full"></div>
                </div>
            </div>
            <!-- Table Controls -->
            <div class="bg-surface-container-low rounded-t-3xl p-6 flex flex-wrap items-center justify-between gap-6">
                <div class="flex items-center gap-4">
                    <div class="flex bg-surface-container-high rounded-full p-1">
                        <form action="{{ route('usermanagementadmin.filter.role') }}" method="get">
                            <button type="submit" name="role" value=""
                                class="px-6 py-2 rounded-full text-sm font-bold {{ $role == null ? 'bg-white text-primary shadow-sm' : 'text-slate-500 hover:text-primary transition-colors' }} ">Semua
                                Pengguna</button>
                            <button type="submit" name="role" value="mahasiswa"
                                class="px-6 py-2 rounded-full text-sm font-bold {{ $role == 'mahasiswa' ? 'bg-white text-primary shadow-sm' : 'text-slate-500 hover:text-primary transition-colors' }}">Mahasiswa</button>
                            <button type="submit" name="role" value="dosen"
                                class="px-6 py-2 rounded-full text-sm font-bold {{ $role == 'dosen' ? 'bg-white text-primary shadow-sm' : 'text-slate-500 hover:text-primary transition-colors' }}">Dosen</button>
                            <button type="submit" name="role" value="admin"
                                class="px-6 py-2 rounded-full text-sm font-bold {{ $role == 'admin' ? 'bg-white text-primary shadow-sm' : 'text-slate-500 hover:text-primary transition-colors' }}">Staf
                                Administrasi</button>
                        </form>
                    </div>
                    <div class="h-8 w-[1px] bg-outline-variant/30 mx-2"></div>
                    <div class="flex gap-2">
                        {{-- <button
                            class="px-4 py-2 text-sm font-bold text-slate-500 flex items-center gap-2 hover:bg-surface-container-high rounded-lg transition-colors">
                            <span class="material-symbols-outlined text-lg">filter_list</span>
                            Saring
                        </button> --}}

                        <button
                            class="px-4 py-2 text-sm font-bold text-slate-500 flex items-center gap-2 hover:bg-surface-container-high rounded-lg transition-colors">
                            <span class="material-symbols-outlined text-lg">download</span>
                            Ekspor
                        </button>
                    </div>
                </div>
                <div class="relative w-full md:w-auto">
                    <form action="{{ route('usermanagementadmin.filter.search') }}" method="get">
                        <input name="search" value=""
                            oninput="clearTimeout(this.delay); this.delay = setTimeout(() => this.form.submit(), 500)"
                            class="w-full md:w-80 bg-surface-container-lowest border-none rounded-xl px-4 py-3 text-sm focus:ring-2 focus:ring-primary/10 placeholder:text-slate-400"
                            placeholder="Saring berdasarkan nama, email, atau ID..." type="text" />
                    </form>
                </div>
            </div>
            <!-- Management Table (Modern Editorial Style) -->
            <div class="bg-surface-container-lowest rounded-b-3xl overflow-hidden mb-16">
                <table class="w-full border-collapse">
                    <thead>
                        <tr class="text-left border-b border-surface-container-high">
                            <th class="px-8 py-5 font-sans uppercase text-[11px] tracking-widest font-bold text-slate-400">
                                Detail Pengguna</th>
                            <th class="px-8 py-5 font-sans uppercase text-[11px] tracking-widest font-bold text-slate-400">
                                Peran</th>
                            <th class="px-8 py-5 font-sans uppercase text-[11px] tracking-widest font-bold text-slate-400">
                                Email</th>
                            {{-- <th class="px-8 py-5 font-sans uppercase text-[11px] tracking-widest font-bold text-slate-400">
                            Terakhir Aktif</th> --}}
                            <th
                                class="px-8 py-5 font-sans uppercase text-[11px] tracking-widest font-bold text-slate-400 text-right">
                                Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-surface-container-low">

                        @forelse ($users as $user)
                            <tr class="hover:bg-primary-fixed/30 transition-colors duration-300">
                                <td class="px-8 py-6">
                                    <div class="flex items-center gap-4">
                                        <div class="relative">
                                            <img class="w-12 h-12 rounded-full object-cover grayscale hover:grayscale-0 transition-all duration-500"
                                                data-alt="professional headshot of a middle-aged male professor in a library setting with soft morning light"
                                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuA1yCz2ggzb8v-FwBGlJ7TmZtNZnT6wHvnui0J8PGLzMtV_IYE1lM5BnOauXvj1FcblwecMA0q1DyFmVfao6ELrIBSN0RFI775YsRNb-DnR1ZU4dMqMReTMq2AAd6I1JdP4Dj0UsXcWq7hhMdPPU42H6YXrBk30xtfAwIfCABrmAj1c215z_c2MjFNYpbdXpOrBzv0d9UzaKKf65mjVNUN0g78Ao_8R-ARKAW8QF5xBkuSYcGdhmkjRW-0LcC2j2nDIJQO9EzOoDH8" />
                                            <div
                                                class="absolute -bottom-1 -right-1 w-4 h-4 bg-emerald-500 rounded-full border-2 border-white">
                                            </div>
                                        </div>
                                        <div>
                                            <p class="font-headline font-bold text-on-surface">
                                                {{ $user->gelar_depan ?? '' }}
                                                {{ $user->name }} {{ $user->gelar_belakang ?? '' }}</p>
                                            <p class="text-xs text-on-surface-variant font-medium">
                                                {{ $user->kode_ref }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-8 py-6">
                                    <span
                                        class="px-3 py-1 {{ $user->role == 'admin' ? 'bg-tertiary/10 text-tertiary' : 'bg-primary/10 text-primary' }} rounded text-[11px] font-bold uppercase tracking-wider">{{ $user->role == 'admin' ? 'Petugas Administrasi' : $user->role }}</span>
                                </td>
                                <td class="px-8 py-6 text-sm text-on-surface-variant">{{ $user->email }}</td>
                                <td class="px-8 py-6 text-right">
                                    <div class="relative inline-block text-left dropdown-container">
                                        {{-- Tombol Titik Tiga --}}
                                        <button type="button"
                                            class="p-2 hover:bg-white rounded-full transition-colors text-slate-400 hover:text-primary dropdown-trigger">
                                            <span class="material-symbols-outlined pointer-events-none">more_vert</span>
                                        </button>

                                        {{-- 💡 UBAH MENJADI FIXED & HAPUS RIGHT-0: Agar melayang bebas di atas potongan tabel --}}
                                        <div
                                            class="fixed w-44 rounded-xl bg-white shadow-lg border border-outline-variant/20 z-50 hidden dropdown-menu text-left">
                                            <div class="py-1">
                                                <a href="{{ route('usermanagementadmin.detail.profil', encrypt($user->id_user)) }}"
                                                    class="flex items-center gap-2 px-4 py-2.5 text-sm text-slate-700 hover:bg-slate-50 transition-colors">
                                                    <span class="material-symbols-outlined text-base">visibility</span>
                                                    <span>Detail Profil</span>
                                                </a>
                                                <hr class="border-slate-100 my-1">
                                                <form
                                                    action="{{ route('usermanagementadmin.delete.akun', $user->id_user) }}"
                                                    method="POST"
                                                    onsubmit="return confirm('Apakah Anda yakin ingin menghapus akun ini?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="w-full flex items-center gap-2 px-4 py-2.5 text-sm text-rose-600 hover:bg-rose-50 transition-colors">
                                                        <span class="material-symbols-outlined text-base">delete</span>
                                                        <span>Hapus Anggota</span>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="px-8 py-12 text-center">
                                    <div class="flex flex-col items-center justify-center gap-3">
                                        <!-- Ikon Warning / Kosong (Menggunakan Material Symbols bawaan proyek Anda) -->
                                        <div
                                            class="w-12 h-12 rounded-full bg-slate-100 flex items-center justify-center text-slate-400">
                                            <span class="material-symbols-outlined text-2xl">search_off</span>
                                        </div>
                                        <div class="space-y-1">
                                            <p class="font-headline font-bold text-on-surface">Data Tidak Ditemukan</p>
                                            <p class="text-xs text-on-surface-variant font-medium">
                                                Tidak ada pengguna dengan kriteria pencarian atau filter tersebut.
                                            </p>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                {{ $users->links('vendor.pagination.custom-tailwind') }}
            </div>


            <!-- import csv -->
            <div class="relative bg-surface-container-high rounded-[2.5rem] p-12 overflow-hidden">
                {{-- <div class="absolute top-0 right-0 w-1/2 h-full opacity-10">
                    <img alt="Collaboration" class="w-full h-full object-cover"
                        data-alt="blurred motion shot of students collaborating around a large wooden table in a high-modern library space"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCPIv_GcsmTvWIofNohEnwYrF_efaR-4I-7GzdHcVug7qoJ0WU7q3RzapIvV39R0pDRgYljXcIO6Eg0nyna5DNamXT4hrwi0LQH-01rPhIfKPeTR_dzmM4eVpayh9iIZKXDtpF5iQmcU1wBL6nqIzI6TAYn8a2uxKGLG3WOCdzUN3SzHEJNdgKpoL7WzLyHs8NqZT3M0WX7W1H0mizcVtFde1L9g7VwOcrZR_IcTfCb4p3mJDJn29EVDzxNllAvuuggM3Df6cqatss" />
                </div> --}}
                <div class="relative z-10 max-w-lg">
                    <h3 class="text-3xl font-headline font-bold text-primary mb-6">Perlu mendaftar secara massal?</h3>
                    <p class="serif-content text-lg text-on-surface-variant mb-8 leading-relaxed">
                        Jika Anda mendaftarkan keseluruhan angkatan atau departemen dosen, gunakan sistem unggah terstruktur
                        kami untuk
                        menjaga integritas data.
                    </p>
                    {{-- <div class="flex gap-4">
                        <button
                            class="bg-surface-container-lowest text-primary px-6 py-3 rounded-xl font-bold hover:bg-white transition-all shadow-sm">
                            Unduh Template
                        </button>
                        <select name="role" id="roleSelect" required
                            class="bg-surface-container-lowest border border-primary text-primary px-6 py-4 rounded-xl font-bold focus:ring-2 focus:ring-primary/10">
                            <option value="" disabled selected>Tipe Akun </option>
                            <option value="admin">Staff Akademik </option>
                            <option value="dosen">Dosen </option>
                            <option value="mahasiswa">Mahasiswa </option>
                        </select>
                        <input type="file" name="csv_file" accept=".csv" id="csvFileInput"
                            class="bg-surface-container-lowest border border-primary text-primary px-6 py-4 rounded-xl font-bold focus:ring-2 focus:ring-primary/10 cursor-pointer file:mr-4 file:py-0 file:px-0 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-transparent file:text-primary box-border" />


                        <button
                            class="bg-transparent border-2 border-primary text-primary px-6 py-3 rounded-xl font-bold hover:bg-primary/5 transition-all">
                            Unggah CSV
                        </button>
                    </div> --}}
                    <div class="flex gap-4 items-center">
                        <!-- Tombol Unduh -->
                        <button type="button"
                            class="h-[58px] bg-surface-container-lowest text-primary px-6 rounded-xl font-bold hover:bg-white transition-all shadow-sm border border-transparent box-border flex items-center justify-center">
                            Unduh Template
                        </button>
                        <form action="{{ route('usermanagementadmin.import.profil') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="flex gap-4">
                                <!-- Dropdown Tipe Akun -->
                                <select name="role" id="roleSelect" required
                                    class="h-[58px] bg-surface-container-lowest border border-primary text-primary px-6 rounded-xl font-bold focus:ring-2 focus:ring-primary/10 box-border flex items-center">
                                    <option value="" disabled selected>Tipe Akun </option>
                                    <option value="admin">Staff Akademik </option>
                                    <option value="dosen">Dosen </option>
                                    <option value="mahasiswa">Mahasiswa </option>
                                </select>

                                <!-- Input File -->
                                <div
                                    class="h-[58px] relative bg-surface-container-lowest border border-primary text-primary rounded-xl font-bold focus-within:ring-2 focus-within:ring-primary/10 box-border flex items-center px-6">
                                    <input type="file" name="csv_file"
                                        accept=".csv, .xls, .xlsx, application/vnd.ms-excel, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"
                                        id="csvFileInput" class="absolute inset-0 opacity-0 cursor-pointer w-full h-full"
                                        onchange="document.getElementById('fileName').textContent = this.files[0] ? this.files[0].name : 'Pilih File CSV'" />
                                    <span id="fileName"
                                        class="text-primary pointer-events-none truncate max-w-[150px]">Pilih
                                        File CSV</span>
                                </div>

                                <!-- Tombol Unggah -->
                                <button type="submit"
                                    class="h-[58px] bg-transparent border border-primary text-primary px-6 rounded-xl font-bold hover:bg-primary/5 transition-all box-border flex items-center justify-center">
                                    Unggah CSV
                                </button>
                            </div>
                        </form>
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

    @if (session('berhasil') || session('gagal'))
        <!-- Overlay / Background Hitam Transparan -->
        <div id="status-modal"
            class="fixed inset-0 z-50 flex items-center justify-center bg-gray-900 bg-opacity-50 p-4 transition-opacity duration-300 opacity-0 pointer-events-none">

            <!-- Kotak Modal -->
            <div
                class="bg-white rounded-lg shadow-xl transform transition-all duration-300 scale-95 w-full max-w-md overflow-hidden">

                <!-- Header Modal -->
                <div id="modal-header" class="px-6 py-4 flex items-center justify-between text-white">
                    <h3 id="modal-title" class="text-lg font-semibold"></h3>
                    <button onclick="closeStatusModal()"
                        class="text-white opacity-80 hover:opacity-100 transition-opacity focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- Konten / Isi Modal -->
                <div class="p-6 text-center">
                    <!-- Wadah Ikon -->
                    <div id="modal-icon-bg" class="mx-auto flex items-center justify-center h-16 w-16 rounded-full mb-4">
                        <!-- Ikon Sukses (Centang) -->
                        <svg id="icon-success" class="h-10 w-10 hidden" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <!-- Ikon Gagal (Silang) -->
                        <svg id="icon-error" class="h-10 w-10 hidden" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>

                    <!-- Teks Pesan dari Laravel -->
                    <p class="text-gray-700 text-base leading-relaxed">
                        {{ session('berhasil') ?? session('gagal') }}
                    </p>
                </div>

                <!-- Footer / Tombol Aksi -->
                <div class="bg-gray-50 px-6 py-4 flex justify-center">
                    <button id="modal-btn" onclick="closeStatusModal()"
                        class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 text-base font-medium text-white focus:outline-none focus:ring-2 focus:ring-offset-2 sm:text-sm transition-colors">
                        Tutup
                    </button>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const modal = document.getElementById('status-modal');
                const modalContent = modal.querySelector('.transform');

                const header = document.getElementById('modal-header');
                const title = document.getElementById('modal-title');
                const iconBg = document.getElementById('modal-icon-bg');
                const btn = document.getElementById('modal-btn');

                // Cek tipe session yang aktif dari Laravel
                const isSuccess = @json(session()->has('berhasil'));

                if (isSuccess) {
                    // Pengaturan komponen warna hijau untuk Sukses
                    header.classList.add('bg-emerald-600');
                    title.innerText = 'Proses Sukses';
                    iconBg.classList.add('bg-emerald-100');
                    document.getElementById('icon-success').classList.remove('hidden');
                    document.getElementById('icon-success').classList.add('text-emerald-600');
                    btn.classList.add('bg-emerald-600', 'hover:bg-emerald-700', 'focus:ring-emerald-500');
                } else {
                    // Pengaturan komponen warna merah untuk Gagal
                    header.classList.add('bg-red-600');
                    title.innerText = 'Terjadi Kesalahan';
                    iconBg.classList.add('bg-red-100');
                    document.getElementById('icon-error').classList.remove('hidden');
                    document.getElementById('icon-error').classList.add('text-red-600');
                    btn.classList.add('bg-red-600', 'hover:bg-red-700', 'focus:ring-red-500');
                }

                // Tampilkan modal dengan animasi halusnya
                modal.classList.remove('opacity-0', 'pointer-events-none');
                modalContent.classList.remove('scale-95');
                modalContent.classList.add('scale-100');
            });

            function closeStatusModal() {
                const modal = document.getElementById('status-modal');
                const modalContent = modal.querySelector('.transform');

                modal.classList.add('opacity-0', 'pointer-events-none');
                modalContent.classList.remove('scale-100');
                modalContent.classList.add('scale-95');
            }
        </script>
    @endif


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.addEventListener('click', function(event) {
                const trigger = event.target.closest('.dropdown-trigger');

                if (trigger) {
                    const container = trigger.closest('.dropdown-container');
                    const currentMenu = container.querySelector('.dropdown-menu');

                    // Tutup semua dropdown lain terlebih dahulu
                    document.querySelectorAll('.dropdown-menu').forEach(menu => {
                        if (menu !== currentMenu) menu.classList.add('hidden');
                    });

                    // Ambil koordinat tombol pada layar
                    const rect = trigger.getBoundingClientRect();
                    const spaceBelow = window.innerHeight - rect.bottom;
                    const menuWidth = 176; // Lebar menu w-44 = 176px

                    // Reset style posisi koordinat sebelumnya
                    currentMenu.style.top = 'auto';
                    currentMenu.style.bottom = 'auto';

                    // Set posisi horizontal (Rata kanan dengan tombol titik tiga)
                    currentMenu.style.left = `${rect.right - menuWidth}px`;

                    // Tentukan arah vertikal melayang
                    if (spaceBelow < 200) {
                        // Jika di baris bawah tabel, naikkan melayang KE ATAS tombol
                        currentMenu.style.bottom = `${window.innerHeight - rect.top + 8}px`;
                    } else {
                        // Jika ruang di bawah luas, taruh melayang KE BAWAH tombol
                        currentMenu.style.top = `${rect.bottom + 8}px`;
                    }

                    // Alihkan status tampil/sembunyi
                    currentMenu.classList.toggle('hidden');
                    return;
                }

                // Tutup menu jika klik di luar area dropdown
                if (!event.target.closest('.dropdown-container')) {
                    document.querySelectorAll('.dropdown-menu').forEach(menu => {
                        menu.classList.add('hidden');
                    });
                }
            });

            // Otomatis sembunyikan dropdown saat halaman di-scroll agar menu tidak tertinggal melayang di layar
            window.addEventListener('scroll', function() {
                document.querySelectorAll('.dropdown-menu').forEach(menu => {
                    menu.classList.add('hidden');
                });
            }, true);
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const modal = document.getElementById('modalTambahAkun');
            const openBtn = document.getElementById('openModalBtn');
            const closeBtn = document.getElementById('closeModalBtn');
            const cancelBtn = document.getElementById('cancelModalBtn');
            const backdrop = document.getElementById('closeModalBackdrop');
            const roleSelect = document.getElementById('roleSelect');

            // Referensi kontainer form dinamis
            const formAdmin = document.getElementById('formAdmin');
            const formDosen = document.getElementById('formDosen');
            const formMahasiswa = document.getElementById('formMahasiswa');

            // 1. Logika Buka Tutup Modal dengan Animasi
            openBtn.addEventListener('click', () => {
                modal.classList.remove('hidden');
                setTimeout(() => {
                    modal.classList.remove('opacity-0');
                    modal.querySelector('.transform').classList.remove('scale-95');
                    modal.querySelector('.transform').classList.add('scale-100');
                }, 10);
            });

            function closeModal() {
                modal.classList.add('opacity-0');
                modal.querySelector('.transform').classList.remove('scale-100');
                modal.querySelector('.transform').classList.add('scale-95');
                setTimeout(() => {
                    modal.classList.add('hidden');
                }, 300);
            }

            [closeBtn, cancelBtn, backdrop].forEach(btn => btn.addEventListener('click', closeModal));

            // 2. 💡 LOGIKA UTAMA: Ganti Form Berdasarkan Dropdown Role
            roleSelect.addEventListener('change', function() {
                const selectedRole = this.value;

                // Sembunyikan semua form khusus terlebih dahulu
                formAdmin.classList.add('hidden');
                formDosen.classList.add('hidden');
                formMahasiswa.classList.add('hidden');

                // Matikan required pada semua input khusus terlebih dahulu agar tidak bentrok
                formAdmin.querySelector('input').removeAttribute('required');
                formDosen.querySelector('input[name="dosen_nidn"]').removeAttribute('required');
                formMahasiswa.querySelector('input').removeAttribute('required');

                // Tampilkan form yang sesuai & aktifkan required pada input wajibnya
                if (selectedRole === 'admin') {
                    formAdmin.classList.remove('hidden');
                    formAdmin.querySelector('input').setAttribute('required', 'required');
                } else if (selectedRole === 'dosen') {
                    formDosen.classList.remove('hidden');
                    formDosen.querySelector('input[name="dosen_nidn"]').setAttribute('required',
                        'required');
                } else if (selectedRole === 'mahasiswa') {
                    formMahasiswa.classList.remove('hidden');
                    formMahasiswa.querySelector('input').setAttribute('required', 'required');
                }
            });
        });
    </script>
@endsection
