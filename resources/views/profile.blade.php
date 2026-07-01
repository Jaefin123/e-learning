@extends('layouts.auth.app')
@section('content')
    @php
        $user = Auth::user();
    @endphp

    <main class="md:pl-72 pt-16 min-h-screen">
        <div class="max-w-6xl mx-auto px-8 py-12">
            <!-- Header Section: Asymmetric Typography -->
            <div class="mb-16">
                <span class="text-primary font-bold uppercase tracking-widest text-xs mb-2 block">Settings &amp;
                    Privacy</span>
                <h1
                    class="font-display font-extrabold text-5xl md:text-6xl text-on-surface tracking-tighter leading-none mb-4">
                    Academic <br /><span class="text-primary-container italic font-body">Profile</span></h1>
                <p class="font-body text-on-surface-variant text-lg max-w-xl">Refine your academic identity across the
                    institutional ecosystem. Manage credentials, security protocols, and scholarly reach.</p>
            </div>
            <!-- 1. Profile Overview (The Hero Card) -->
            <section class="grid grid-cols-1 md:grid-cols-12 gap-8 mb-16 items-start">
                <div
                    class="md:col-span-8 bg-surface-container-lowest p-8 rounded-full border-none flex flex-col md:flex-row items-center gap-8 shadow-sm">
                    <div class="relative group">
                        <div class="h-32 w-32 rounded-full overflow-hidden border-4 border-surface ring-2 ring-primary/20">
                            <img class="w-full h-full object-cover"
                                data-alt="A sophisticated headshot of a faculty member for a high-end university website. The lighting is soft and professional, capturing a friendly but authoritative academic demeanor. The style matches the purple and white editorial aesthetic of the LMS, with a clean architectural background that feels modern and elite."
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCFjPijh6tm2LaVviZXNaugcVqO0XKcmnD8Q0d8pLhvQJkDEY2ixrf5Ib5r60XlOJ5Px1-GhvxvsSWKq1cOc4s9iHzi2UMa7YD3ZeUsvM1OwQCKsjd-XTDCcJK1UPDU5oWSTOIPRiBWnguoXwRhcdHGsHQjLtsO8bkJxcddj4EO57ApEkL3hfK16g0j9EcX_fxj0VPTPAYKYvqnWU-lJMdXZVmuNA77anmllNTegJvBlj2lakFB7x2w6fg3EgRCjbbDUij-cQG5J7A" />
                        </div>
                        <button
                            class="absolute bottom-0 right-0 bg-primary text-on-primary h-10 w-10 rounded-full flex items-center justify-center shadow-lg hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined text-sm">photo_camera</span>
                        </button>
                    </div>
                    <div class="text-center md:text-left flex-1">
                        <h3 class="text-2xl font-bold text-on-surface tracking-tight">{{ $user->name }}</h3>
                        <p class="text-primary font-medium mb-4">
                            @php
                                $subtitle = match ($user->role) {
                                    'mahasiswa' => $user->prodi && strtolower($user->prodi) !== 'mahasiswa'
                                        ? "Mahasiswa {$user->prodi}"
                                        : 'Mahasiswa',
                                    'dosen' => $user->prodi && strtolower($user->prodi) !== 'dosen'
                                        ? "Dosen {$user->prodi}"
                                        : 'Dosen',
                                    default => 'Administrator',
                                };
                            @endphp
                            {{ $subtitle }}
                        </p>
                        <div class="flex flex-wrap gap-2 justify-center md:justify-start">
                            <span
                                class="px-3 py-1 bg-secondary-container/30 text-secondary-fixed-dim text-xs font-bold rounded uppercase tracking-wider">{{ strtoupper($user->role) }}</span>
                            <span
                                class="px-3 py-1 bg-surface-container-high text-on-surface-variant text-xs font-bold rounded uppercase tracking-wider">Public
                                Profile</span>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <button
                            class="bg-primary text-on-primary px-6 py-3 rounded-xl font-bold hover:shadow-md transition-all active:scale-95">Update
                            Photo</button>
                    </div>
                </div>
                <div
                    class="md:col-span-4 bg-primary-container text-on-primary-container p-8 rounded-full h-full flex flex-col justify-center">
                    <span class="material-symbols-outlined mb-4 text-3xl">verified</span>
                    <h4 class="font-bold text-xl mb-2">Institutional Badge</h4>
                    <p class="text-sm opacity-80 leading-relaxed">Your profile is verified by the Central Academic Registry.
                        All research contributions are linked to your ORCID iD.</p>
                </div>
            </section>
            <!-- 2. Personal Information (Forms with Noto Serif) -->
            <section class="mb-20">
                <div class="flex items-center gap-4 mb-8">
                    <h2 class="text-2xl font-bold tracking-tight">Personal Information</h2>
                    <div class="h-px flex-1 bg-outline-variant/30"></div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-8">
                    <div class="space-y-2">
                        <label class="text-xs font-bold uppercase tracking-widest text-on-surface-variant px-1">Full
                            Name</label>
                        <input
                            class="w-full bg-surface-container-high border-none rounded-xl px-4 py-4 text-on-surface focus:ring-2 focus:ring-primary/40 font-body transition-all"
                            type="text" value="{{ $user->name }}" readonly />
                    </div>
                    <div class="space-y-2">
                        <label
                            class="text-xs font-bold uppercase tracking-widest text-on-surface-variant px-1">Institutional
                            Email</label>
                        <input
                            class="w-full bg-surface-container-high border-none rounded-xl px-4 py-4 text-on-surface focus:ring-2 focus:ring-primary/40 font-body transition-all"
                            type="email" value="{{ $user->email }}" readonly />
                    </div>
                    <div class="space-y-2 md:col-span-2">
                        <label class="text-xs font-bold uppercase tracking-widest text-on-surface-variant px-1">Academic
                            Bio</label>
                        <textarea
                            class="w-full bg-surface-container-high border-none rounded-xl px-4 py-4 text-on-surface focus:ring-2 focus:ring-primary/40 font-body transition-all leading-relaxed"
                            rows="4">Specializing in the intersection of neural networks and linguistic evolution. Leading the 2024 Cognitive Mapping initiative at the Metropolitan Research Hub.</textarea>
                        <p class="text-[10px] text-on-surface-variant mt-1 px-1">Max 500 characters. Visible on your public
                            scholarly profile.</p>
                    </div>
                    <div class="space-y-2">
                        <label class="text-xs font-bold uppercase tracking-widest text-on-surface-variant px-1">Role</label>
                        <input
                            class="w-full bg-surface-container-high border-none rounded-xl px-4 py-4 text-on-surface focus:ring-2 focus:ring-primary/40 font-body transition-all"
                            type="text" value="{{ ucfirst($user->role) }}" disabled />
                    </div>

                    @if ($user->role === 'mahasiswa')
                        <div class="space-y-2">
                            <label class="text-xs font-bold uppercase tracking-widest text-on-surface-variant px-1">NPM</label>
                            <input
                                class="w-full bg-surface-container-high border-none rounded-xl px-4 py-4 text-on-surface focus:ring-2 focus:ring-primary/40 font-body transition-all"
                                type="text" value="{{ $user->npm }}" disabled />
                        </div>
                        <div class="space-y-2">
                            <label class="text-xs font-bold uppercase tracking-widest text-on-surface-variant px-1">Program Studi</label>
                            <input
                                class="w-full bg-surface-container-high border-none rounded-xl px-4 py-4 text-on-surface focus:ring-2 focus:ring-primary/40 font-body transition-all"
                                type="text" value="{{ $user->prodi }}" />
                        </div>
                        <div class="space-y-2">
                            <label class="text-xs font-bold uppercase tracking-widest text-on-surface-variant px-1">Tahun Masuk</label>
                            <input
                                class="w-full bg-surface-container-high border-none rounded-xl px-4 py-4 text-on-surface focus:ring-2 focus:ring-primary/40 font-body transition-all"
                                type="text" value="{{ $user->tahun_masuk }}" />
                        </div>
                        <div class="space-y-2">
                            <label class="text-xs font-bold uppercase tracking-widest text-on-surface-variant px-1">Semester</label>
                            <input
                                class="w-full bg-surface-container-high border-none rounded-xl px-4 py-4 text-on-surface focus:ring-2 focus:ring-primary/40 font-body transition-all"
                                type="text" value="{{ $user->semester }}" />
                        </div>
                    @elseif ($user->role === 'dosen')
                        <div class="space-y-2">
                            <label class="text-xs font-bold uppercase tracking-widest text-on-surface-variant px-1">NIDN</label>
                            <input
                                class="w-full bg-surface-container-high border-none rounded-xl px-4 py-4 text-on-surface focus:ring-2 focus:ring-primary/40 font-body transition-all"
                                type="text" value="{{ $user->nidn }}" />
                        </div>
                        <div class="space-y-2">
                            <label class="text-xs font-bold uppercase tracking-widest text-on-surface-variant px-1">Program Studi</label>
                            <input
                                class="w-full bg-surface-container-high border-none rounded-xl px-4 py-4 text-on-surface focus:ring-2 focus:ring-primary/40 font-body transition-all"
                                type="text" value="{{ $user->prodi }}" />
                        </div>
                        <div class="space-y-2">
                            <label class="text-xs font-bold uppercase tracking-widest text-on-surface-variant px-1">Gelar Depan</label>
                            <input
                                class="w-full bg-surface-container-high border-none rounded-xl px-4 py-4 text-on-surface focus:ring-2 focus:ring-primary/40 font-body transition-all"
                                type="text" value="{{ $user->gelar_depan }}" />
                        </div>
                        <div class="space-y-2">
                            <label class="text-xs font-bold uppercase tracking-widest text-on-surface-variant px-1">Gelar Belakang</label>
                            <input
                                class="w-full bg-surface-container-high border-none rounded-xl px-4 py-4 text-on-surface focus:ring-2 focus:ring-primary/40 font-body transition-all"
                                type="text" value="{{ $user->gelar_belakang }}" />
                        </div>
                        <div class="space-y-2">
                            <label class="text-xs font-bold uppercase tracking-widest text-on-surface-variant px-1">Jabatan</label>
                            <input
                                class="w-full bg-surface-container-high border-none rounded-xl px-4 py-4 text-on-surface focus:ring-2 focus:ring-primary/40 font-body transition-all"
                                type="text" value="{{ $user->jabatan }}" />
                        </div>
                    @elseif ($user->role === 'admin')
                        <div class="space-y-2">
                            <label class="text-xs font-bold uppercase tracking-widest text-on-surface-variant px-1">NIP</label>
                            <input
                                class="w-full bg-surface-container-high border-none rounded-xl px-4 py-4 text-on-surface focus:ring-2 focus:ring-primary/40 font-body transition-all"
                                type="text" value="{{ $user->nip }}" />
                        </div>
                        <div class="space-y-2">
                            <label class="text-xs font-bold uppercase tracking-widest text-on-surface-variant px-1">Jabatan</label>
                            <input
                                class="w-full bg-surface-container-high border-none rounded-xl px-4 py-4 text-on-surface focus:ring-2 focus:ring-primary/40 font-body transition-all"
                                type="text" value="{{ $user->jabatan }}" />
                        </div>
                    @endif

                    <div class="flex items-end">
                        <button
                            class="bg-surface-container-lowest border border-primary/20 text-primary px-8 py-4 rounded-xl font-bold hover:bg-primary-fixed/30 transition-all w-full md:w-auto">Save
                            Changes</button>
                    </div>
                </div>
            </section>
            <!-- Bento Grid for Security & Notifications -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-20">
                <!-- 3. Account Security (Glassmorphism Card) -->
                <div class="lg:col-span-2 bg-surface-container-low p-8 rounded-full">
                    <div class="flex items-center justify-between mb-8">
                        <h2 class="text-xl font-bold tracking-tight">Security &amp; Access</h2>
                        <span class="material-symbols-outlined text-primary">security</span>
                    </div>
                    <div class="space-y-6">
                        <div class="flex items-center justify-between p-6 bg-surface-container-lowest rounded-xl">
                            <div class="flex items-center gap-4">
                                <div
                                    class="h-10 w-10 rounded-lg bg-primary-fixed/30 flex items-center justify-center text-primary">
                                    <span class="material-symbols-outlined">lock_reset</span>
                                </div>
                                <div>
                                    <p class="font-bold text-sm">Account Password</p>
                                    <p class="text-xs text-on-surface-variant">Last changed 4 months ago</p>
                                </div>
                            </div>
                            <button class="text-primary font-bold text-sm hover:underline">Update</button>
                        </div>
                        <div
                            class="flex items-center justify-between p-6 bg-surface-container-lowest rounded-xl border border-primary/10">
                            <div class="flex items-center gap-4">
                                <div
                                    class="h-10 w-10 rounded-lg bg-secondary-container/30 flex items-center justify-center text-secondary">
                                    <span class="material-symbols-outlined">phishing</span>
                                </div>
                                <div>
                                    <p class="font-bold text-sm">Two-Factor Authentication</p>
                                    <p class="text-xs text-on-surface-variant">Enabled (via Authenticator App)</p>
                                </div>
                            </div>
                            <span
                                class="bg-green-100 text-green-700 text-[10px] px-2 py-1 rounded font-black uppercase tracking-tighter">Active</span>
                        </div>
                        <div class="pt-4">
                            <p class="text-xs font-bold uppercase tracking-widest text-on-surface-variant mb-4 px-1">Active
                                Login Sessions</p>
                            <div class="space-y-3">
                                <div class="flex justify-between items-center text-sm px-1">
                                    <span class="flex items-center gap-2"><span
                                            class="material-symbols-outlined text-sm">laptop_mac</span> macOS Sonoma •
                                        Chrome</span>
                                    <span class="text-on-surface-variant opacity-60">Current Session</span>
                                </div>
                                <div class="flex justify-between items-center text-sm px-1">
                                    <span class="flex items-center gap-2"><span
                                            class="material-symbols-outlined text-sm">smartphone</span> iPhone 15 Pro •
                                        Safari</span>
                                    <button class="text-error font-bold text-[10px] uppercase">Revoke</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 4. Notification Preferences (Vertical Column) -->
                <div class="bg-surface-container-low p-8 rounded-full border border-primary/5">
                    <h2 class="text-xl font-bold tracking-tight mb-8">Alerts</h2>
                    <div class="space-y-8">
                        <div>
                            <p class="text-xs font-bold uppercase tracking-widest text-on-surface-variant mb-4">Email
                                Channel</p>
                            <div class="space-y-4">
                                <label class="flex items-center justify-between cursor-pointer">
                                    <span class="text-sm font-medium">Research Deadlines</span>
                                    <div class="relative inline-flex items-center">
                                        <input checked="" class="sr-only peer" type="checkbox" />
                                        <div
                                            class="w-11 h-6 bg-surface-container-highest peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary">
                                        </div>
                                    </div>
                                </label>
                                <label class="flex items-center justify-between cursor-pointer">
                                    <span class="text-sm font-medium">Peer Grade Alerts</span>
                                    <div class="relative inline-flex items-center">
                                        <input class="sr-only peer" type="checkbox" />
                                        <div
                                            class="w-11 h-6 bg-surface-container-highest peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary">
                                        </div>
                                    </div>
                                </label>
                                <label class="flex items-center justify-between cursor-pointer">
                                    <span class="text-sm font-medium">Announcements</span>
                                    <div class="relative inline-flex items-center">
                                        <input checked="" class="sr-only peer" type="checkbox" />
                                        <div
                                            class="w-11 h-6 bg-surface-container-highest peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary">
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>
                        <div>
                            <p class="text-xs font-bold uppercase tracking-widest text-on-surface-variant mb-4">System
                                Notifications</p>
                            <label class="flex items-center justify-between cursor-pointer">
                                <span class="text-sm font-medium">Push Notifications</span>
                                <div class="relative inline-flex items-center">
                                    <input checked="" class="sr-only peer" type="checkbox" />
                                    <div
                                        class="w-11 h-6 bg-surface-container-highest peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary">
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 5. Privacy & Data (Asymmetric Layout) -->
            <section class="flex flex-col md:flex-row gap-12 items-start mb-24">
                <div class="md:w-1/3">
                    <h2 class="text-3xl font-bold tracking-tight mb-4">Privacy &amp; Data</h2>
                    <p class="font-body text-on-surface-variant leading-relaxed">We adhere to the highest standards of
                        institutional data protection. Manage how your scholarship is indexed and exported.</p>
                </div>
                <div
                    class="md:w-2/3 bg-surface-container-lowest p-10 rounded-full shadow-sm border border-outline-variant/10">
                    <div class="space-y-10">
                        <div class="flex items-start gap-6">
                            <span class="material-symbols-outlined text-primary text-3xl">visibility</span>
                            <div>
                                <h4 class="font-bold text-lg mb-1">Profile Visibility</h4>
                                <p class="text-sm text-on-surface-variant mb-4">Choose who can view your research projects
                                    and academic history.</p>
                                <div class="flex gap-4">
                                    <button
                                        class="px-4 py-2 bg-primary text-on-primary text-xs font-bold rounded-lg uppercase tracking-wider">Institution
                                        Only</button>
                                    <button
                                        class="px-4 py-2 bg-surface-container-high text-on-surface-variant text-xs font-bold rounded-lg uppercase tracking-wider hover:bg-surface-variant transition-colors">Publicly
                                        Searchable</button>
                                </div>
                            </div>
                        </div>
                        <div class="h-px bg-outline-variant/20"></div>
                        <div class="flex items-start gap-6">
                            <span class="material-symbols-outlined text-primary text-3xl">download</span>
                            <div>
                                <h4 class="font-bold text-lg mb-1">Export Scholarly Data</h4>
                                <p class="text-sm text-on-surface-variant mb-4">Download a comprehensive archive of your
                                    contributions, including manuscripts, peer reviews, and course materials in BibTeX or
                                    PDF format.</p>
                                <button class="flex items-center gap-2 text-primary font-bold hover:gap-3 transition-all">
                                    <span>Initiate Data Archive</span>
                                    <span class="material-symbols-outlined">trending_flat</span>
                                </button>
                            </div>
                        </div>
                        <div class="pt-6 border-t border-error/10">
                            <button
                                class="text-error font-bold text-sm flex items-center gap-2 hover:opacity-70 transition-opacity">
                                <span class="material-symbols-outlined text-sm">delete_forever</span>
                                <span>Request Account Anonymization</span>
                            </button>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- Editorial Footer -->
        <footer class="bg-surface-container-low py-12 px-8">
            <div class="max-w-6xl mx-auto flex flex-col md:flex-row justify-between items-center gap-8">
                <div class="flex items-center gap-4">
                    <span class="text-xl font-black text-primary/40 tracking-tighter uppercase">Scholar Portal</span>
                    <span class="h-4 w-px bg-outline-variant/40"></span>
                    <p class="text-xs text-on-surface-variant opacity-60">© 2024 Institutional Registry. All Rights
                        Reserved.</p>
                </div>
                <div class="flex gap-8">
                    <a class="text-xs font-bold uppercase tracking-widest text-on-surface-variant hover:text-primary"
                        href="#">Policy</a>
                    <a class="text-xs font-bold uppercase tracking-widest text-on-surface-variant hover:text-primary"
                        href="#">Ethics</a>
                    <a class="text-xs font-bold uppercase tracking-widest text-on-surface-variant hover:text-primary"
                        href="#">Support</a>
                </div>
            </div>
        </footer>
    </main>
@endsection
