<!-- TopNavBar -->
<nav class="fixed top-0 w-full z-50 bg-white/80 backdrop-blur-xl shadow-[0px_24px_40px_-4px_rgba(28,27,31,0.06)]">
    <div class="flex justify-between items-center w-full px-6 py-4 max-w-screen-2xl mx-auto">
        <div class="flex items-center gap-8">
            <a class="font-inter text-2xl font-bold tracking-tighter text-primary" href="/">FT LMS</a>
            <div class="hidden md:flex gap-6 items-center">
                <a class="text-primary font-bold border-b-2 border-primary pb-1 font-inter text-sm font-medium"
                    href="#">Courses</a>
                <a class="text-slate-600 hover:text-primary transition-colors font-inter text-sm font-medium"
                    href="#">Resources</a>
                <a class="text-slate-600 hover:text-primary transition-colors font-inter text-sm font-medium"
                    href="#">About</a>
                <a class="text-slate-600 hover:text-primary transition-colors font-inter text-sm font-medium"
                    href="#">Events</a>
            </div>
        </div>
        <div class="flex items-center gap-4">
            <div
                class="hidden lg:flex items-center bg-surface-container-low px-4 py-2 rounded-full border border-outline-variant/10">
                <span class="material-symbols-outlined text-on-surface-variant text-sm mr-2">search</span>
                <input class="bg-transparent border-none focus:ring-0 text-sm w-48 font-body"
                    placeholder="Search knowledge..." type="text" />
            </div>
            <div class="flex gap-2">
                <x-button-symbol variant="ghost">
                    <span class="material-symbols-outlined">language</span>
                </x-button-symbol>
                <x-button-symbol variant="ghost">
                    <span class="material-symbols-outlined text-on-surface-variant">help_outline</span>
                </x-button-symbol>
            </div>
            {{-- <x-button-satu>Login</x-button-satu> --}}
            <x-button-satu size='md' href="/login">Login</x-button-satu>
        </div>
    </div>
</nav>
