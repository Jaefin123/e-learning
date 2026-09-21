@extends('layouts.auth.app')
@section('content')
<main class="p-12 max-w-7xl mx-auto">
    <!-- Header Halaman -->
    <section class="mb-16">
        <span
            class="font-label uppercase text-[11px] tracking-[0.25em] text-primary-fixed-dim font-bold mb-4 block">Manajemen
            Institusi</span>
        <h2 class="font-display text-5xl font-black text-on-surface mb-4 leading-tight">Desain Mata Kuliah <span
                class="italic font-body font-normal">&amp;</span> Administrasi</h2>
        <p class="font-body text-on-surface-variant text-lg max-w-2xl leading-relaxed">
            Kelola kurikulum Teknik Komputer dengan rapi. Atur pendaftaran mahasiswa, pembagian dosen, dan struktur
            mata kuliah dari satu halaman administrasi.
        </p>
    </section>
    <!-- Layout Grid -->
    <div class="grid grid-cols-12 gap-8">
        <!-- Modal Tambah Matakuliah -->
        <div id="modalTambahMatkul" class="fixed inset-0 z-50 hidden opacity-0 transition-all duration-300">
            <div class="absolute inset-0 bg-slate-900/40 backdrop-blur-sm" id="closeModalBackdrop"></div>
            <div
                class="relative mx-auto my-6 w-full max-w-lg max-h-[calc(100vh-3rem)] rounded-3xl bg-white shadow-xl border border-outline-variant/20 overflow-hidden flex flex-col transform scale-95 transition-all duration-300">
                <div class="flex items-center justify-between px-6 py-5 border-b border-slate-100 bg-slate-50">
                    <div>
                        <h3 class="font-headline text-xl font-bold text-on-surface">Tambah Mata Kuliah</h3>
                        <p class="text-sm text-slate-500">Isi detail mata kuliah baru dan simpan ketika siap.</p>
                    </div>
                    <button type="button" id="closeModalBtn"
                        class="text-slate-400 hover:text-slate-600 transition-colors">
                        <span class="material-symbols-outlined">close</span>
                    </button>
                </div>

                <form
                    id="formTambahMatkul"
                    class="p-6 space-y-6 overflow-y-auto"
                    action="{{ route('admin.matkuls.store') }}"
                    method="POST"
                    enctype="multipart/form-data">
                    @csrf

                    @if ($errors->any())
                        <div
                            id="validationErrors"
                            class="space-y-1 rounded-3xl border border-rose-200 bg-rose-50 p-4 text-rose-700">

                            <p class="font-bold">
                                Periksa kembali input Anda:
                            </p>

                            <ul class="list-disc list-inside text-sm">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>

                        </div>
                    @endif

                    <div class="space-y-1">
                        <label class="font-label text-[10px] uppercase tracking-widest text-on-surface-variant/70 ml-1">Judul Mata Kuliah</label>
                        <input name="nama_matkul" type="text" placeholder="contoh: Pemrograman Dasar"
                            value="{{ old('nama_matkul') }}"
                            class="w-full bg-surface-container-high border-none rounded-xl py-4 px-5 focus:ring-2 focus:ring-primary/40 font-body placeholder:text-on-surface-variant/40 transition-all">
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div class="space-y-1">
                            <label class="font-label text-[10px] uppercase tracking-widest text-on-surface-variant/70 ml-1">Jurusan</label>
                            <select name="jurusan"
                                class="w-full bg-surface-container-high border-none rounded-xl py-4 px-5 focus:ring-2 focus:ring-primary/40 font-body transition-all">
                                <option value="Teknik Komputer" {{ old('jurusan') == 'Teknik Komputer' ? 'selected' : '' }}>Teknik Komputer</option>
                                <option value="Sistem Komputer" {{ old('jurusan') == 'Sistem Komputer' ? 'selected' : '' }}>Sistem Komputer</option>
                                <option value="Informatika" {{ old('jurusan') == 'Informatika' ? 'selected' : '' }}>Informatika</option>
                                <option value="Teknologi Informasi" {{ old('jurusan') == 'Teknologi Informasi' ? 'selected' : '' }}>Teknologi Informasi</option>
                            </select>
                        </div>
                        <div class="space-y-1">
                            <label class="font-label text-[10px] uppercase tracking-widest text-on-surface-variant/70 ml-1">Dosen Pengampu</label>
                            <input name="dosen_pengampu" type="text" placeholder="Masukkan nama dosen pengampu"
                                value="{{ old('dosen_pengampu') }}"
                                class="w-full bg-surface-container-high border-none rounded-xl py-4 px-5 focus:ring-2 focus:ring-primary/40 font-body transition-all">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-2">
                        <div class="space-y-1">
                            <label class="font-label text-[10px] uppercase tracking-widest text-on-surface-variant/70 ml-1">SKS</label>
                            <input name="sks" type="number" placeholder="3"
                                value="{{ old('sks') }}"
                                class="w-full bg-surface-container-high border-none rounded-xl py-4 px-5 focus:ring-2 focus:ring-primary/40 font-body transition-all">
                        </div>

                    </div>
                    

                    <div class="space-y-1">
                        <label class="font-label text-[10px] uppercase tracking-widest text-on-surface-variant/70 ml-1">Deskripsi Mata Kuliah</label>
                        <textarea
                            name="deskripsi_matkul"
                            rows="4"
                            placeholder="Jelaskan cakupan materi, capaian pembelajaran, dan prasyarat mata kuliah..."
                            class="w-full bg-surface-container-high border-none rounded-xl py-4 px-5 focus:ring-2 focus:ring-primary/40 font-body placeholder:text-on-surface-variant/40 transition-all">{{ old('deskripsi_matkul') }}</textarea>
                    </div>

                    <div class="space-y-1">
                        <label class="font-label text-[10px] uppercase tracking-widest text-on-surface-variant/70 ml-1">
                            Gambar Mata Kuliah
                        </label>
                

                        <div class="flex items-center justify-between bg-surface-container-high rounded-xl px-5 py-4">
                            <span id="file-name" class="text-sm text-on-surface-variant">
                                Belum ada file yang dipilih
                            </span>

                            <label
                                for="image"
                                class="cursor-pointer bg-primary text-white px-4 py-2 rounded-lg hover:opacity-90 transition">
                                Pilih Gambar
                            </label>

                           
                            <input
                                id="image"
                                name="image"
                                type="file"
                                accept="image/*"
                                class="hidden"
                                onchange="document.getElementById('file-name').textContent = this.files[0]?.name || 'Belum ada file dipilih'">
                        </div>
                    </div>

                    <div class="pt-4 flex items-center justify-between">
                        <div class="flex items-center space-x-2 text-on-surface-variant/60 text-xs italic">
                            <span class="material-symbols-outlined text-sm" data-icon="info">info</span>
                            <span>Data hanya tersimpan setelah tombol Simpan ditekan.</span>
                        </div>
                        <button type="submit"
                            class="bg-gradient-to-br from-primary to-primary-container text-on-primary px-8 py-4 rounded-xl font-headline font-bold text-sm hover:scale-105 active:scale-95 transition-all editorial-shadow">
                            Simpan Mata Kuliah
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <!-- Daftar Mata Kuliah yang Sudah Dibuat -->
        <div class="col-span-12 mt-8">
            <div class="bg-surface-container-lowest rounded-[3rem] overflow-hidden editorial-shadow">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 p-8 border-b border-surface-container-high">
                    <div>
                        <h3 class="font-display text-2xl font-bold text-on-surface">Daftar Mata Kuliah</h3>
                        <p class="text-on-surface-variant text-sm">Semua mata kuliah yang dibuat dari dashboard admin.</p>
                    </div>
                    <button type="button" id="openModalBtn"
                        class="inline-flex items-center justify-center gap-2 bg-primary from-primary to-primary-container text-white px-6 py-3 rounded-xl font-bold shadow-lg transition-transform hover:-translate-y-1">
                        <span class="material-symbols-outlined">add</span>
                        Tambah Mata Kuliah
                    </button>
                </div>

                <div class="p-6 border-b border-surface-container-high">
                    <div class="flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between">
                        <form action="{{ route('coursemanagementadmin') }}" method="GET" class="w-full lg:w-1/2">
                            <div class="relative">
                                <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-400">search</span>
                                <input name="search" value="{{ request('search') }}"
                                    oninput="clearTimeout(this.delay); this.delay = setTimeout(() => this.form.submit(), 500)"
                                    class="w-full pl-12 pr-4 py-3 rounded-full bg-surface-container-lowest border border-surface-container-high focus:ring-2 focus:ring-primary/20 text-sm"
                                    placeholder="Cari berdasarkan nama, jurusan, atau dosen..." type="search">
                            </div>
                        </form>
                        <div class="text-sm text-on-surface-variant lg:text-right">
                            Total: {{ $matkuls->total() }} mata kuliah
                        </div>
                    </div>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full min-w-[760px] border-collapse">
                        <thead>
                            <tr class="text-left border-b border-surface-container-high bg-surface-container-highest">
                                <th class="px-8 py-5 font-sans uppercase text-[11px] tracking-widest font-bold text-slate-400">Mata Kuliah</th>
                                <th class="px-8 py-5 font-sans uppercase text-[11px] tracking-widest font-bold text-slate-400">Jurusan</th>
                                <th class="px-8 py-5 font-sans uppercase text-[11px] tracking-widest font-bold text-slate-400">Dosen Pengampu</th>
                                <th class="px-8 py-5 font-sans uppercase text-[11px] tracking-widest font-bold text-slate-400">SKS</th>
                                <th class="px-8 py-5 font-sans uppercase text-[11px] tracking-widest font-bold text-slate-400">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-surface-container-low">
                            @forelse($matkuls as $matkul)
                                <tr class="hover:bg-primary-fixed/10 transition-colors duration-200">
                                    <td class="px-8 py-6">
                                        <div class="flex items-center gap-4">
                                            <div class="w-16 h-16 rounded-3xl overflow-hidden border border-surface-container-high bg-slate-100">
                                                <img src="{{ $matkul->image_path ? asset('storage/'.$matkul->image_path) : 'https://via.placeholder.com/160?text=No+Image' }}"
                                                    alt="{{ $matkul->nama_matkul }}"
                                                    class="w-full h-full object-cover">
                                            </div>
                                            <div>
                                                <div class="font-headline font-semibold text-on-surface">{{ $matkul->nama_matkul }}</div>
                                                <div class="text-sm text-on-surface-variant mt-1">{{ Str::limit($matkul->deskripsi_matkul, 70, '...') }}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-8 py-6 text-on-surface">{{ $matkul->jurusan ?? '-' }}</td>
                                    <td class="px-8 py-6 text-on-surface">{{ $matkul->dosen_pengampu ?? '-' }}</td>
                                    <td class="px-8 py-6 text-on-surface">{{ $matkul->sks ?? '-' }}</td>
                                    <td class="px-8 py-6 text-right">
                                        <div class="inline-flex items-center gap-2">
                                            <a href="{{ route('admin.course.detail', $matkul->id_matkul) }}"
                                                class="px-4 py-2 text-sm font-semibold text-primary border border-primary/20 rounded-xl hover:bg-primary/5 transition-colors">Detail</a>
                                            <form action="{{ route('admin.matkuls.destroy', $matkul) }}" method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="px-4 py-2 text-sm font-semibold text-rose-600 border border-rose-200 rounded-xl hover:bg-rose-50 transition-colors"
                                                    onclick="return confirm('Hapus mata kuliah ini?')">Hapus</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="px-8 py-12 text-center text-on-surface-variant">
                                        Belum ada mata kuliah yang dibuat. Klik tombol Tambah Mata Kuliah untuk memulai.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 p-6 border-t border-surface-container-high bg-surface-container-highest">
                    <p class="text-sm text-on-surface-variant">Menampilkan {{ $matkuls->firstItem() ?? 0 }}-{{ $matkuls->lastItem() ?? 0 }} dari {{ $matkuls->total() }} mata kuliah</p>
                    <div class="min-w-[220px]">
                        {{ $matkuls->links('vendor.pagination.custom-tailwind') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if(session('success') || session('error'))
        <div id="statusModal" class="fixed inset-0 z-50 flex items-center justify-center bg-slate-900/50 px-4 py-6">
            <div class="w-full max-w-md rounded-3xl bg-white shadow-xl border border-slate-200 overflow-hidden">
                <div class="p-6 text-center">
                    <div class="mx-auto mb-4 flex h-16 w-16 items-center justify-center rounded-3xl {{ session('success') ? 'bg-emerald-100 text-emerald-700' : 'bg-rose-100 text-rose-700' }}">
                        <span class="material-symbols-outlined text-4xl">{{ session('success') ? 'check_circle' : 'error' }}</span>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-2">{{ session('success') ? 'Proses Sukses' : 'Terjadi Kesalahan' }}</h3>
                    <p class="text-sm text-slate-600">{{ session('success') ?? session('error') }}</p>
                </div>
                <div class="border-t border-slate-200 bg-slate-50 p-4 text-right">
                    <button id="closeStatusModal" type="button"
                        class="inline-flex items-center justify-center rounded-full bg-primary px-6 py-3 text-sm font-semibold text-white">Tutup</button>
                </div>
            </div>
        </div>
    @endif

    <!-- Padding Footer -->
    <div class="h-24"></div>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const modal = document.getElementById('modalTambahMatkul');
        const openButton = document.getElementById('openModalBtn');
        const closeButton = document.getElementById('closeModalBtn');
        const backdrop = document.getElementById('closeModalBackdrop');

        const form = document.getElementById('formTambahMatkul');
        const fileInput = document.getElementById('image');
        const fileName = document.getElementById('file-name');



        function openModal() {
            if (!modal) return;

            modal.classList.remove('hidden', 'opacity-0');
            modal.classList.add('opacity-100');

            const modalPanel = modal.querySelector('div.relative.mx-auto');

            if (modalPanel) {
                modalPanel.classList.remove('scale-95');
                modalPanel.classList.add('scale-100');
            }
        }


        function resetForm() {
            if (!form) return;

            // Reset semua input
            form.reset();

            // Reset file input
            if (fileInput) {
                fileInput.value = '';
            }

            // Reset nama file
            if (fileName) {
                fileName.textContent = 'Belum ada file yang dipilih';
            }

            // Hapus pesan error
            const validationErrors = document.getElementById('validationErrors');

            if (validationErrors) {
                validationErrors.remove();
            }
        }


        function closeModal() {
            if (!modal) return;

            const modalPanel = modal.querySelector('div.relative.mx-auto');

            if (modalPanel) {
                modalPanel.classList.remove('scale-100');
                modalPanel.classList.add('scale-95');
            }

            modal.classList.remove('opacity-100');
            modal.classList.add('opacity-0');

            // Tunggu animasi selesai
            setTimeout(function () {
                modal.classList.add('hidden');

                // Reset form setelah modal ditutup
                resetForm();
            }, 300);
        }

        if (openButton) {
            openButton.addEventListener('click', function () {

                // Pastikan form selalu kosong
                resetForm();

                openModal();
            });
        }



        if (closeButton) {
            closeButton.addEventListener('click', closeModal);
        }


        if (backdrop) {
            backdrop.addEventListener('click', closeModal);
        }



        if (fileInput) {
            fileInput.addEventListener('change', function () {

                if (this.files && this.files.length > 0) {
                    fileName.textContent = this.files[0].name;
                } else {
                    fileName.textContent = 'Belum ada file yang dipilih';
                }

            });
        }



        const statusModalClose = document.getElementById('closeStatusModal');
        const statusModal = document.getElementById('statusModal');

        if (statusModalClose && statusModal) {

            statusModalClose.addEventListener('click', function () {
                statusModal.classList.add('hidden');
            });

            setTimeout(function () {
                statusModal.classList.add('hidden');
            }, 4500);
        }

        @if ($errors->any())
            openModal();
        @endif
    });
</script>
@endsection
