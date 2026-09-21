@extends('layouts.auth.app')
@section('content')
<main class="lg:ml-64 pt-24 px-8 pb-16 min-h-screen">
    <div class="max-w-7xl mx-auto space-y-12">
        <!-- Hero Header Section -->
        <section class="flex flex-col justify-between items-start gap-6">
            <div class="space-y-4 max-w-2xl">
                <div class="flex items-center gap-3">
                    <span
                        class="px-3 py-1 bg-secondary-fixed text-on-secondary-fixed-variant font-headline font-bold text-[10px] uppercase tracking-widest rounded-sm">ARCH-702</span>
                    <span
                        class="flex items-center gap-1.5 text-primary text-xs font-bold font-headline uppercase tracking-widest">
                        <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
                        Status: Active Session
                    </span>
                </div>
                <span>{{ $matkul->id_matkul }}</span>
                <h1>
                    Detail Mata Kuliah:
                    {{ $matkul->nama_matkul }}
                </h1>
            </div>
            <div class="w-full bg-surface-container-lowest p-8 rounded-xl editorial-shadow space-y-6 mb-8">
                <h2 class="text-2xl font-headline font-extrabold text-on-surface tracking-tight">Edit Course
                    Configuration</h2>
                <form
                        method="POST"
                        action="{{ route('admin.course.update', $matkul->id_matkul) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="space-y-2">
                            <label class="font-headline font-bold text-[10px] uppercase tracking-widest text-on-surface-variant">
                                Nama Mata Kuliah
                            </label>
                            <input
                                name="nama_matkul"
                                class="w-full px-4 py-3 bg-surface-container-high rounded-lg border-none text-sm font-headline focus:ring-2 focus:ring-primary/40"
                                type="text"
                                value="{{ old('nama_matkul', $matkul->nama_matkul) }}" />
                        </div>

                        <div class="space-y-2">
                            <label class="font-headline font-bold text-[10px] uppercase tracking-widest text-on-surface-variant">
                                Kode Mata Kuliah
                            </label>
                            <input
                                class="w-full px-4 py-3 bg-surface-container-high rounded-lg border-none text-sm font-headline"
                                type="text"
                                value="{{ $matkul->id_matkul }}"
                                readonly />
                        </div>

                        <div class="space-y-2">
                            <label class="font-headline font-bold text-[10px] uppercase tracking-widest text-on-surface-variant">
                                Jurusan
                            </label>
                            <select
                                name="jurusan"
                                class="w-full px-4 py-3 bg-surface-container-high rounded-lg border-none text-sm font-headline focus:ring-2 focus:ring-primary/40">
                                <option value="Teknik Komputer" {{ old('jurusan', $matkul->jurusan) == 'Teknik Komputer' ? 'selected' : '' }}>
                                    Teknik Komputer
                                </option>
                                <option value="Teknik Lingkungan" {{ old('jurusan', $matkul->jurusan) == 'Teknik Lingkungan' ? 'selected' : '' }}>
                                    Teknik Lingkungan
                                </option>
                                <option value="Teknik Sipil" {{ old('jurusan', $matkul->jurusan) == 'Teknik Sipil' ? 'selected' : '' }}>
                                    Teknik Sipil
                                </option>
                            </select>
                        </div>

                        <div class="space-y-2">
                            <label class="font-headline font-bold text-[10px] uppercase tracking-widest text-on-surface-variant">
                                SKS
                            </label>
                            <input
                                name="sks"
                                class="w-full px-4 py-3 bg-surface-container-high rounded-lg border-none text-sm font-headline focus:ring-2 focus:ring-primary/40"
                                type="number"
                                value="{{ old('sks', $matkul->sks) }}" />
                        </div>
                        <div class="space-y-2">
                            <label class="font-headline font-bold text-[10px] uppercase tracking-widest text-on-surface-variant">
                                Dosen Pengampu
                            </label>
                            <input
                                name="dosen_pengampu"
                                class="w-full px-4 py-3 bg-surface-container-high rounded-lg border-none text-sm font-headline focus:ring-2 focus:ring-primary/40"
                                type="text"
                                value="{{ old('dosen_pengampu', $matkul->dosen_pengampu) }}" />
                        </div>
                       

                        <div class="space-y-2">
                            <label class="font-headline font-bold text-[10px] uppercase tracking-widest text-on-surface-variant">
                                Deskripsi Mata Kuliah
                            </label>
                            <input
                                name="deskripsi_matkul"
                                class="w-full px-4 py-3 bg-surface-container-high rounded-lg border-none text-sm font-headline focus:ring-2 focus:ring-primary/40"
                                type="text"
                                value="{{ old('deskripsi_matkul', $matkul->deskripsi_matkul) }}" />
                        </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-end">

                    <div class="space-y-2">
                        <label class="font-headline font-bold text-[10px] uppercase tracking-widest text-on-surface-variant">
                            Gambar Mata Kuliah
                        </label>

                        @if($matkul->image_path)
                            <img
                                src="{{ asset('storage/'.$matkul->image_path) }}"
                                class="w-56 h-36 object-cover rounded-lg mb-3">
                        @endif

                        <input
                            type="file"
                            name="image"
                            accept="image/*"
                            class="w-full px-4 py-3 bg-surface-container-high rounded-lg">
                    </div>

                    <div class="flex justify-end items-end h-medium">
                        <button
                            type="submit"
                            class="bg-primary text-white px-5 py-3 rounded-xl font-bold shadow-lg hover:bg-primary/90">
                            Save Course Changes
                        </button>
                    </div>

                </div>
                </form>
            </div>
            <div class="flex gap-4"><button
                    class="px-6 py-4 rounded-xl bg-surface-container-highest text-primary font-headline font-bold text-sm hover:bg-primary-fixed transition-colors flex items-center gap-2"
                    onclick="document.getElementById('edit-course-overlay').classList.remove('hidden')">
                    <span class="material-symbols-outlined text-xl">edit_note</span>
                    Edit Course
                </button>
                <button
                    class="px-6 py-4 rounded-xl border border-outline-variant text-on-surface font-headline font-bold text-sm hover:bg-surface-container transition-colors">
                    Edit Curriculum
                </button>
                <button
                    type="button"
                    onclick="document.getElementById('enrollModal').classList.remove('hidden')"
                    class="inline-flex items-center gap-2 rounded-xl bg-primary px-6 py-4 font-bold text-white shadow-lg hover:bg-primary/90">
                    <span class="material-symbols-outlined">person_add</span>
                    Enroll Student
                </button>
            </div>
            <div id="enrollModal" class="fixed inset-0 z-50 hidden bg-black/40">
                <div class="mx-auto mt-24 w-full max-w-2xl rounded-2xl bg-white p-8 shadow-2xl">
                <form method="POST" action="{{ route('admin.course.enroll', $matkul->id_matkul) }}">
                @csrf

                <div class="mb-6 flex items-center justify-between">
                    <h3 class="text-xl font-bold text-on-surface">Tambah Mahasiswa</h3>

                    <div class="flex items-center gap-3">
                        <button
                            type="submit"
                            class="rounded-lg bg-primary px-5 py-2 text-sm font-bold text-white hover:bg-primary/90">
                            Tambahkan
                        </button>

                        <button
                            type="button"
                            onclick="document.getElementById('enrollModal').classList.add('hidden')"
                            class="rounded-lg px-3 py-2 text-slate-500 hover:bg-slate-100">
                            X
                        </button>
                    </div>
                </div>

                <div class="space-y-3 max-h-96 overflow-y-auto">
                    @forelse ($availableStudents as $student)
                        <label class="grid cursor-pointer grid-cols-[1fr_auto] items-center gap-4 rounded-xl border border-slate-100 p-4 hover:bg-slate-50">
                            <div>
                                <p class="font-bold text-on-surface">{{ $student->name }}</p>
                                <p class="text-sm text-slate-500">
                                    {{ $student->npm }} - {{ $student->email }}
                                </p>
                                <p class="text-xs text-slate-400">{{ $student->prodi ?? '-' }}</p>
                            </div>

                            <input
                                type="checkbox"
                                name="id_mahasiswa[]"
                                value="{{ $student->id_user }}"
                                class="h-5 w-5 rounded border-slate-300 text-primary focus:ring-primary">
                        </label>
                    @empty
                        <p class="rounded-xl bg-slate-50 p-4 text-sm text-slate-500">
                            Semua mahasiswa sudah terdaftar di mata kuliah ini.
                        </p>
                    @endforelse
                </div>
                </form>
                </div>
            </div>
        </div>
        </section>
        <!-- Statistics Bento Grid -->
        <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-surface-container-lowest p-8 rounded-xl editorial-shadow border-l-4 border-primary">
                <p class="font-headline font-medium uppercase tracking-widest text-[10px] text-on-surface-variant mb-2">
                    Total Enrollment</p>
                <div class="flex items-baseline gap-2">
                    <span class="text-4xl font-headline font-black text-on-surface">142</span>
                    <span class="text-on-surface-variant font-body italic text-sm">/ 150</span>
                </div>
                <div class="mt-4 h-1.5 bg-secondary-fixed rounded-full overflow-hidden">
                    <div class="h-full bg-primary rounded-full shadow-[0_0_8px_rgba(76,0,128,0.4)]"
                        style="width: 94.6%"></div>
                </div>
            </div>
            <div class="bg-surface-container-lowest p-8 rounded-xl editorial-shadow">
                <p class="font-headline font-medium uppercase tracking-widest text-[10px] text-on-surface-variant mb-2">
                    Engagement Rate</p>
                <div class="flex items-baseline gap-2">
                    <span class="text-4xl font-headline font-black text-on-surface">88%</span>
                    <span class="material-symbols-outlined text-primary text-xl"
                        data-icon="trending_up">trending_up</span>
                </div>
                <p class="mt-2 font-body text-xs text-on-surface-variant italic">+12% from last semester</p>
            </div>
            <div class="bg-surface-container-lowest p-8 rounded-xl editorial-shadow">
                <p class="font-headline font-medium uppercase tracking-widest text-[10px] text-on-surface-variant mb-2">
                    Faculty Evaluation</p>
                <div class="flex items-baseline gap-2">
                    <span class="text-4xl font-headline font-black text-on-surface">4.9</span>
                    <span class="text-on-surface-variant font-body italic text-sm">avg. score</span>
                </div>
                <div class="flex mt-2 gap-1">
                    <span class="material-symbols-outlined text-primary text-xs" data-icon="star"
                        style="font-variation-settings: 'FILL' 1;">star</span>
                    <span class="material-symbols-outlined text-primary text-xs" data-icon="star"
                        style="font-variation-settings: 'FILL' 1;">star</span>
                    <span class="material-symbols-outlined text-primary text-xs" data-icon="star"
                        style="font-variation-settings: 'FILL' 1;">star</span>
                    <span class="material-symbols-outlined text-primary text-xs" data-icon="star"
                        style="font-variation-settings: 'FILL' 1;">star</span>
                    <span class="material-symbols-outlined text-primary text-xs" data-icon="star"
                        style="font-variation-settings: 'FILL' 1;">star</span>
                </div>
            </div>
            <div class="bg-surface-container-lowest p-8 rounded-xl editorial-shadow">
                <p class="font-headline font-medium uppercase tracking-widest text-[10px] text-on-surface-variant mb-2">
                    Resource Utilization</p>
                <div class="flex items-baseline gap-2">
                    <span class="text-4xl font-headline font-black text-on-surface">72%</span>
                </div>
                <p class="mt-2 font-body text-xs text-on-surface-variant italic">Library &amp; Studio access</p>
            </div>
        </section>
        <!-- Main Content Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            <!-- Left: Student List -->
            <div class="lg:col-span-2 space-y-8">
                <div class="flex justify-between items-center">
                    <h2 class="font-headline font-extrabold text-2xl text-on-surface tracking-tight">Enrolled Students
                    </h2>
                    <div class="flex items-center gap-4">
                        <div class="relative">
                            <span
                                class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant text-lg"
                                data-icon="search">search</span>
                            <input
                                class="pl-10 pr-4 py-2 bg-surface-container-high rounded-lg border-none text-xs font-headline w-64 focus:ring-2 focus:ring-primary/40"
                                placeholder="Filter by name or ID..." type="text" />
                        </div>
                    </div>
                </div>
                <div class="overflow-x-auto hide-scrollbar">
                    <table class="w-full text-left border-separate border-spacing-y-4">
                        <thead>
                            <tr
                                class="font-headline font-bold text-[10px] uppercase tracking-widest text-on-surface-variant px-4">
                                <th class="pb-2 pl-4">Student Identity</th>
                                <th class="pb-2">Student ID</th>
                                <th class="pb-2">Registration Date</th>
                                <th class="pb-2">Status</th>
                                <th class="pb-2 pr-4 text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($enrolledStudents as $student)
                                <tr class="bg-white">
                                    <td class="rounded-l-2xl px-4 py-4">
                                        <p class="font-bold text-on-surface">{{ $student->name }}</p>
                                        <p class="text-xs text-slate-500">{{ $student->email }}</p>
                                    </td>

                                    <td class="px-4 py-4 text-sm text-on-surface">
                                        {{ $student->npm }}
                                    </td>

                                    <td class="px-4 py-4 text-sm text-on-surface">
                                        {{ \Carbon\Carbon::parse($student->created_at)->format('d M Y') }}
                                    </td>

                                    <td class="px-4 py-4">
                                        <span class="rounded bg-primary/10 px-3 py-1 text-[10px] font-bold text-primary">
                                            Terdaftar
                                        </span>
                                    </td>

                                    <td class="rounded-r-2xl px-4 py-4 text-right">
                                        <button type="button"
                                            class="text-sm font-bold text-rose-600 hover:underline">
                                            Hapus
                                        </button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="rounded-2xl bg-white p-6 text-center text-sm text-slate-500">
                                        Belum ada mahasiswa yang terdaftar di mata kuliah ini.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Right: Instructor & Sidebar Info -->
            <div class="space-y-8">
                <!-- Instructor Module -->
                <div class="bg-surface-container-lowest p-8 rounded-xl editorial-shadow space-y-6">
                    <h2 class="font-headline font-bold text-lg text-on-surface tracking-tight">Lead Instructor</h2>
                    <div class="flex items-center gap-4">
                        <div class="w-16 h-16 rounded-xl bg-cover bg-center ring-4 ring-primary/5"
                            data-alt="A sophisticated headshot of a senior professor of architecture, characterized by wisdom and modern style. He is wearing a dark cashmere sweater and silver-framed glasses, posed in front of a white concrete wall with artistic shadows. The lighting is soft and flattering, creating a premium intellectual mood."
                            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuC_5Cg0pLxICJSLiWQfnJbdIhN25foMufVFhjOaYvEsl4oMcnrQLpUg3IrpnKFyXCDNiU96w0L4hkjZPL8GDWaNwNgaGndpHzGseBuc9hXKDjjBAXo3AeKLpw35VUBbdPS8LefYycwXhBezrk26jWYSdprovc9xeBO9l-Vr3-CHkjnzbM5WJHB4oHjI2MWwoNQz3nuvZ6Vm-yRY7tEKpVwCbvs5ZPqb-8saWozRFDng_GXuKVNgN4S3RT-Dnt0Gux38J_rsCHpGp4Y')">
                        </div>
                        <div>
                            <p class="font-headline font-bold text-on-surface">Dr. Silas Thorne</p>
                            <p class="font-body italic text-sm text-on-surface-variant">PhD, Harvard GSD</p>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div class="flex items-start gap-3">
                            <span class="material-symbols-outlined text-primary mt-1" data-icon="domain">domain</span>
                            <div>
                                <p
                                    class="font-headline font-bold text-[10px] uppercase tracking-widest text-on-surface-variant">
                                    Department</p>
                                <p class="font-body text-sm text-on-surface">Modern History &amp; Urban Theory</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="material-symbols-outlined text-primary mt-1" data-icon="mail">mail</span>
                            <div>
                                <p
                                    class="font-headline font-bold text-[10px] uppercase tracking-widest text-on-surface-variant">
                                    Contact</p>
                                <p class="font-body text-sm text-on-surface">s.thorne@uni-admin.edu</p>
                            </div>
                        </div>
                    </div>
                    <hr class="border-surface-container" />
                    <button
                        class="w-full py-4 text-primary font-headline font-bold text-sm hover:underline transition-all flex items-center justify-center gap-2">
                        View Faculty Profile
                        <span class="material-symbols-outlined text-lg" data-icon="arrow_forward">arrow_forward</span>
                    </button>
                </div>
                <!-- Enrollment Status Summary -->
                <div class="bg-primary/5 p-8 rounded-xl space-y-4">
                    <h3 class="font-headline font-bold text-sm text-primary uppercase tracking-widest">Admin Notes</h3>
                    <p class="font-body text-sm text-on-surface-variant leading-relaxed italic">
                        "Registration for this course is currently at 95% capacity. Priority waitlisting is active for
                        graduate students from the Department of Design. Consider expanding the Tuesday lab session to
                        accommodate late registrants."
                    </p>
                    <div class="flex items-center gap-2 pt-4">
                        <span class="w-8 h-8 rounded-full bg-primary flex items-center justify-center text-white">
                            <span class="material-symbols-outlined text-sm" data-icon="lock_open">lock_open</span>
                        </span>
                        <span class="font-headline font-bold text-xs text-on-surface">Enrollment Window: Open</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@if(session('success'))
    <div id="successModal"
        class="fixed inset-0 z-[9999] flex items-center justify-center bg-black/50 backdrop-blur-sm">

        <div class="w-full max-w-md mx-4 overflow-hidden rounded-xl bg-white shadow-2xl">

            {{-- Header --}}
            <div class="bg-emerald-600 px-6 py-4">
                <div class="flex items-center justify-between">
                    <h3 class="text-lg font-bold text-white">
                        Proses Sukses
                    </h3>

                    <button
                        type="button"
                        onclick="closeSuccessModal()"
                        class="text-white hover:text-emerald-100 text-2xl leading-none">
                        &times;
                    </button>
                </div>
            </div>

            {{-- Body --}}
            <div class="px-6 py-7 text-center">

                <div class="mx-auto mb-5 flex h-16 w-16 items-center justify-center rounded-full bg-emerald-100">
                    <span class="material-symbols-outlined text-3xl text-emerald-600">
                        check
                    </span>
                </div>

                <h4 class="mb-2 text-lg font-bold text-slate-900">
                    Perubahan Berhasil Disimpan
                </h4>

                <p class="text-sm leading-6 text-slate-600">
                    {{ session('success') }}
                </p>

            </div>

            {{-- Footer --}}
            <div class="border-t border-slate-100 px-6 py-4">
                <button
                    type="button"
                    onclick="closeSuccessModal()"
                    class="w-full rounded-lg bg-emerald-600 px-4 py-2.5 font-semibold text-white hover:bg-emerald-700 transition-colors">
                    Tutup
                </button>
            </div>

        </div>
    </div>

    <script>
        function closeSuccessModal() {
            const modal = document.getElementById('successModal');

            if (modal) {
                modal.remove();
            }
        }
    </script>
@endif
@endsection