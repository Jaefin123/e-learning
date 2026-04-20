@extends('layouts.guest.app')


{{-- 
<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

@section('content')

    <body class="bg-surface font-body text-on-surface selection:bg-primary-fixed selection:text-on-primary-fixed">
        <main class="min-h-screen pt-20 flex flex-col items-center">
            <!-- Split-Screen Style Layout Container -->
            <div class="w-full max-w-7xl mx-auto flex flex-col md:flex-row min-h-[calc(100vh-80px)] overflow-hidden">
                <!-- Left Side: Editorial Content -->
                <div class="hidden md:flex md:w-5/12 bg-surface-container flex-col justify-center px-16 relative">
                    <div class="relative z-10">
                        <span class="font-headline text-xs font-bold tracking-[0.2em] text-primary uppercase mb-6 block">Join
                            the Registry</span>
                        <h1
                            class="font-headline text-5xl lg:text-6xl font-extrabold text-on-surface leading-[1.1] mb-8 tracking-tighter">
                            Curate Your <span class="text-primary italic">Intellectual</span> Journey.
                        </h1>
                        <p class="font-body text-lg text-on-surface-variant max-w-md leading-relaxed mb-12">
                            Access an elite network of scholars and researchers. Our platform is designed for those who seek
                            the depth of a traditional journal with modern digital fluidity.
                        </p>
                        <div class="flex flex-col space-y-6">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 rounded-full bg-primary-fixed flex items-center justify-center">
                                    <span class="material-symbols-outlined text-primary">auto_stories</span>
                                </div>
                                <div>
                                    <h4 class="font-headline font-bold text-sm">Rich Content Library</h4>
                                    <p class="text-xs text-on-surface-variant">Exclusive access to peer-reviewed archives.
                                    </p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 rounded-full bg-secondary-fixed flex items-center justify-center">
                                    <span class="material-symbols-outlined text-secondary">groups</span>
                                </div>
                                <div>
                                    <h4 class="font-headline font-bold text-sm">Global Faculty Access</h4>
                                    <p class="text-xs text-on-surface-variant">Engage directly with leading minds.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Abstract Decorative Image Background -->
                    <div class="absolute inset-0 opacity-10 pointer-events-none overflow-hidden">
                        <img class="w-full h-full object-cover"
                            data-alt="abstract artistic background with blurred purple geometric shapes and soft architectural shadows in high-end academic style"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDVok5wmKzUyUXGX4TUbYB5ebnwd7u786Biu9OQwMZOISp0SerQQRWV3v7wtjETmO0p1sHszH4yVUqYQVEO8qCwlNQm7MHZlsZQ517rWsVJxARUmExQ0jNKW80PlXqPSP-P6wSzF0zmy9oT6VqLc4htoRdPhVUWKijygOo0eqfsb9f2rIbvphKCexb1jBBhHR5hoGNOFEyY0ihEJC2wAiVswS-gXZGaIfpX7c9VlnPBQy3piff_9lmJKzmuNm-8BNL5ZWBLqoPImsY" />
                    </div>
                </div>
                <!-- Right Side: Registration Form -->
                <div class="w-full md:w-7/12 bg-surface flex flex-col justify-center items-center py-16 px-6 md:px-20">
                    <div
                        class="w-full max-w-xl bg-surface-container-lowest rounded-full p-1 md:p-12 shadow-[0px_12px_32px_rgba(45,0,79,0.04)]">
                        <div class="mb-10 text-center md:text-left">
                            <h2 class="font-headline text-3xl font-bold tracking-tight mb-2">Create Student Account</h2>
                            <p class="font-body text-on-surface-variant italic">Enter your academic credentials to begin
                                your curation.</p>
                        </div>
                        <form class="space-y-6" method="POST" action="{{ route('register') }}">
                            @csrf
                            {{-- <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label
                                        class="font-headline text-[10px] font-bold uppercase tracking-widest text-slate-500 ml-1">Full
                                        Name</label>
                                    <div class="bg-surface-container-high rounded-md ghost-border transition-all">
                                        <input
                                            class="w-full bg-transparent border-none focus:ring-0 text-sm py-3 px-4 font-headline"
                                            placeholder="e.g. Julian Vane" type="text" />
                                    </div>
                                </div>
                                
                                <div class="space-y-2">
                                    <label
                                        class="font-headline text-[10px] font-bold uppercase tracking-widest text-slate-500 ml-1">Student
                                        ID</label>
                                    <div class="bg-surface-container-high rounded-md ghost-border transition-all">
                                        <input
                                            class="w-full bg-transparent border-none focus:ring-0 text-sm py-3 px-4 font-headline"
                                            placeholder="ID-2024-XXXX" type="text" />
                                    </div>
                                </div>
                            </div> --}}
                            <x-input-symbol size="md" label="Full Name" type="text" name="name" icon=""
                                placeholder="e.g. budi" />

                            <x-input-symbol size="md" label="ID Student" type="text" name="npm" icon=""
                                placeholder="e.g. 562020•••••••" />

                            <x-input-symbol size="md" label="Email" type="email" name="email" icon=""
                                placeholder="e.g. budi@gmail" />

                            {{-- <div class="space-y-2">
                                <label
                                    class="font-headline text-[10px] font-bold uppercase tracking-widest text-slate-500 ml-1">Academic
                                    Email</label>
                                <div class="bg-surface-container-high rounded-md ghost-border transition-all">
                                    <input
                                        class="w-full bg-transparent border-none focus:ring-0 text-sm py-3 px-4 font-headline"
                                        placeholder="curator@university.edu" type="email" />
                                </div>
                            </div> --}}

                            <x-input-symbol size="md" label="Password" type="password" name="password" icon=""
                                placeholder="••••••••" />

                            <x-input-symbol size="md" label="Password confirmation" type="password" name="password_confirmation" icon=""
                                placeholder="••••••••" />

                            {{-- <div class="space-y-2">
                                <label
                                    class="font-headline text-[10px] font-bold uppercase tracking-widest text-slate-500 ml-1">Password</label>
                                <div class="bg-surface-container-high rounded-md ghost-border transition-all">
                                    <input
                                        class="w-full bg-transparent border-none focus:ring-0 text-sm py-3 px-4 font-headline"
                                        placeholder="••••••••••••" type="password" />
                                </div>
                            </div> --}}

                            <x-select-option label="Departement / Major" name="major" icon="" size="md">
                                <option value="" disabled selected>Select your departement</option>
                                <option value="TS">Teknik Sipil</option>
                                <option value="TKM">Teknik Komputer</option>
                                <option value="TL">Teknik Lingkungan</option>
                            </x-select-option>

                            {{-- <div class="space-y-2">
                                <label
                                    class="font-headline text-[10px] font-bold uppercase tracking-widest text-slate-500 ml-1">Department
                                    / Major</label>
                                <div class="bg-surface-container-high rounded-md ghost-border transition-all">
                                    <select
                                        class="w-full bg-transparent border-none focus:ring-0 text-sm py-3 px-4 font-headline text-slate-500">
                                        <option value="">Select your department</option>
                                        <option>Faculty of Humanities</option>
                                        <option>Department of Theoretical Physics</option>
                                        <option>School of Digital Curatorship</option>
                                        <option>Institute of Modern Ethics</option>
                                    </select>
                                </div>
                            </div> --}}

                            <!-- Academic Interests Section (Bento Inspired Chips) -->
                            {{-- <div class="space-y-4 pt-4">
                                <label
                                    class="font-headline text-[10px] font-bold uppercase tracking-widest text-slate-500 ml-1">Academic
                                    Interests</label>
                                <div class="flex flex-wrap gap-2">
                                    <label class="cursor-pointer">
                                        <input class="hidden peer" type="checkbox" />
                                        <span
                                            class="px-4 py-1.5 rounded-lg border border-outline-variant/20 bg-surface-container text-[11px] font-headline font-bold text-on-surface-variant peer-checked:bg-primary peer-checked:text-on-primary transition-all duration-300 inline-block">PHILOSOPHY</span>
                                    </label>
                                    <label class="cursor-pointer">
                                        <input class="hidden peer" type="checkbox" />
                                        <span
                                            class="px-4 py-1.5 rounded-lg border border-outline-variant/20 bg-surface-container text-[11px] font-headline font-bold text-on-surface-variant peer-checked:bg-primary peer-checked:text-on-primary transition-all duration-300 inline-block">QUANTUM
                                            MECHANICS</span>
                                    </label>
                                    <label class="cursor-pointer">
                                        <input checked="" class="hidden peer" type="checkbox" />
                                        <span
                                            class="px-4 py-1.5 rounded-lg border border-outline-variant/20 bg-surface-container text-[11px] font-headline font-bold text-on-surface-variant peer-checked:bg-primary peer-checked:text-on-primary transition-all duration-300 inline-block">ART
                                            HISTORY</span>
                                    </label>
                                    <label class="cursor-pointer">
                                        <input class="hidden peer" type="checkbox" />
                                        <span
                                            class="px-4 py-1.5 rounded-lg border border-outline-variant/20 bg-surface-container text-[11px] font-headline font-bold text-on-surface-variant peer-checked:bg-primary peer-checked:text-on-primary transition-all duration-300 inline-block">NEUROSCIENCE</span>
                                    </label>
                                    <label class="cursor-pointer">
                                        <input class="hidden peer" type="checkbox" />
                                        <span
                                            class="px-4 py-1.5 rounded-lg border border-outline-variant/20 bg-surface-container text-[11px] font-headline font-bold text-on-surface-variant peer-checked:bg-primary peer-checked:text-on-primary transition-all duration-300 inline-block">LINGUISTICS</span>
                                    </label>
                                </div>
                            </div> --}}
                            <div class="mt-12 pt-8 space-y-2 border-t border-transparent relative">
                                <!-- Faux border using tonal transition as per system rule -->
                                <div
                                    class="absolute top-0 left-0 right-0 h-[1px] bg-gradient-to-r from-transparent via-outline-variant/30 to-transparent">
                                </div>
                            </div>

                            <x-button-satu size='lg' class="w-full">Complete Registration</x-button-satu>

                            {{-- <div class="pt-6">
                                <button
                                    class="w-full bg-academic-gradient text-on-primary py-4 rounded-xl font-headline font-bold tracking-tight hover:opacity-90 transition-opacity active:scale-[0.99] transform"
                                    type="submit">
                                    Complete Registration
                                </button>
                            </div> --}}
                            <div class="pt-4 text-center">
                                <p class="font-headline text-xs text-slate-500">
                                    Already a member of the institute?
                                    <a class="text-primary font-bold hover:underline ml-1" href="/login">Sign In</a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </body>
@endsection
