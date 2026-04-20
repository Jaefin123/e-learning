@extends('layouts.guest.layoutLogin')

{{-- <x-guest-layout> --}}
{{-- <h1>cek</h1>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form> --}}
@section('contentLogin')
    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">

        <!-- Hero Content -->
        <div class="lg:col-span-7 space-y-8">
            <div class="space-y-4">
                <span class="font-label text-xs font-bold tracking-[0.2em] text-primary uppercase">Welcome Back</span>
                <h1 class="font-headline text-5xl md:text-7xl font-extrabold text-on-surface tracking-tight leading-[1.1]">
                    Curating Your <span class="text-primary italic">Academic</span> Journey.
                </h1>
                <p class="text-on-surface-variant text-lg md:text-xl max-w-xl leading-relaxed">
                    Access your curated curriculum, research archives, and collaborative workspaces in one sophisticated
                    digital gallery.
                </p>
            </div>

            <!-- Bento Grid Style Feature Illustration -->
            <div class="grid grid-cols-2 gap-4">
                <div class="rounded-xl overflow-hidden aspect-[4/3] relative">
                    <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?q=80&w=2070&auto=format&fit=crop"
                        alt="Student life"
                        data-alt="Modern university student studying in a bright, airy library with large windows and minimalist wooden furniture"
                        class="object-cover w-full h-full grayscale hover:grayscale-0 transition-all duration-700">
                    <div class="absolute inset-0 bg-primary/10 mix-blend-multiply"></div>
                </div>
                <div class="rounded-xl overflow-hidden aspect-[4/3] relative mt-8">
                    <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?q=80&w=2070&auto=format&fit=crop"
                        alt="Academic desk"
                        data-alt="Top down view of a clean academic desk with a fountain pen, open journal, and tablet showing research papers"
                        class="object-cover w-full h-full grayscale hover:grayscale-0 transition-all duration-700">
                    <div class="absolute inset-0 bg-primary/10 mix-blend-multiply"></div>
                </div>
            </div>
        </div>

        <!-- Login Section -->
        <div class="lg:col-span-5">
            <div class="bg-surface-container-low p-1 rounded-xl">
                <div class="bg-surface-container-lowest p-8 md:p-12 rounded-xl shadow-[0px_12px_32px_rgba(45,0,79,0.06)]">
                    <div class="mb-10">
                        <h2 class="font-headline text-3xl font-bold text-on-surface mb-2">Student Sign In</h2>
                        <p class="font-body text-on-surface-variant">Enter your credentials to access the editorial
                            portal.</p>
                    </div>

                    <form class="space-y-6" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="space-y-1.5">
                            <label
                                class="font-label text-xs font-bold text-on-surface-variant uppercase tracking-wider ml-1">Student
                                Email</label>
                            <div class="relative">
                                <span
                                    class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline">badge</span>
                                <input type="email" placeholder="e.g. @gmail.com" name="email"
                                    class="w-full pl-12 pr-4 py-4 bg-surface-container-high border-none rounded-xl focus:ring-2 focus:ring-primary/40 text-on-surface font-body transition-all outline-none">

                            </div>
                        </div>

                        <div class="space-y-1.5">
                            <div class="flex justify-between items-center px-1">
                                <label
                                    class="font-label text-xs font-bold text-on-surface-variant uppercase tracking-wider">Password</label>
                                <a href="#"
                                    class="font-label text-[10px] font-bold text-primary uppercase tracking-widest hover:underline">Forgot?</a>
                            </div>
                            <div class="relative">
                                <span
                                    class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline">lock</span>
                                <input type="password" placeholder="••••••••" name="password"
                                    class="w-full pl-12 pr-4 py-4 bg-surface-container-high border-none rounded-xl focus:ring-2 focus:ring-primary/40 text-on-surface font-body transition-all outline-none">
                            </div>
                        </div>

                        <div class="flex items-center space-x-3 px-1">
                            <input type="checkbox" id="remember"
                                class="w-4 h-4 rounded-sm border-outline-variant text-primary focus:ring-primary">
                            <label for="remember" class="font-label text-sm text-on-surface-variant">Remember this
                                device
                            </label>
                            <a href="#"
                                    class="font-label text-[10px] font-bold text-primary uppercase tracking-widest hover:underline">Forgot?</a>
                            <a href="#"
                                    class="font-label text-[10px] font-bold text-primary uppercase tracking-widest hover:underline">
                                    belum punya akun?
                            </a>
                        </div>

                        <button type="submit"
                            class="w-full bg-gradient-to-r from-primary to-primary-container text-on-primary font-headline font-bold py-4 rounded-xl shadow-lg shadow-primary/10 hover:opacity-90 transition-all duration-300 transform active:scale-95">
                            Access Portal
                        </button>
                        <x-button-satu size='lg' class="w-full">Access Portal</x-button-satu>
                    </form>

                    {{-- <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email Address -->
                        <div>
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                :value="old('email')" required autofocus autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Password')" />

                            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                                autocomplete="current-password" />

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Remember Me -->
                        <div class="block mt-4">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox"
                                    class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                                    name="remember">
                                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                            </label>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                    href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif

                            <x-primary-button class="ms-3">
                                {{ __('Log in') }}
                            </x-primary-button>
                        </div>
                    </form> --}}

                    <div class="mt-12 pt-8 space-y-4 border-t border-transparent relative">
                        <!-- Faux border using tonal transition as per system rule -->
                        <div
                            class="absolute top-0 left-0 right-0 h-[1px] bg-gradient-to-r from-transparent via-outline-variant/30 to-transparent">
                        </div>

                        <p class="font-label text-[10px] font-bold text-outline uppercase tracking-[0.2em] text-center">
                            Institutional Resources</p>
                        <div class="grid grid-cols-2 gap-3">
                            <a href="#"
                                class="flex items-center justify-center space-x-2 py-3 px-4 bg-surface-container-low rounded-xl hover:bg-primary-fixed transition-colors group">
                                <span
                                    class="material-symbols-outlined text-sm text-primary group-hover:scale-110 transition-transform">help</span>
                                <span class="font-label text-xs font-semibold text-on-surface">IT Help Desk</span>
                            </a>
                            <a href="#"
                                class="flex items-center justify-center space-x-2 py-3 px-4 bg-surface-container-low rounded-xl hover:bg-primary-fixed transition-colors group">
                                <span
                                    class="material-symbols-outlined text-sm text-primary group-hover:scale-110 transition-transform">library_books</span>
                                <span class="font-label text-xs font-semibold text-on-surface">Library Access</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
{{-- </x-guest-layout> --}}
