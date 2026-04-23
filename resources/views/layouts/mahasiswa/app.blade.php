<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>FT LMS - Universitas wiralodra</title>

    <!-- Memanggil CSS & JS hasil compile Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-surface text-on-surface selection:bg-primary-fixed selection:text-on-primary-fixed">
    <!-- Sisipkan Navbar -->
    @include('layouts.mahasiswa.navbar') // di ganti sama navbar dan side bar dashboard mahasigma

    @include('layouts.mahasiswa.sidebar')

    <!-- content landing page (index guest)-->
    @yield('content')

    <!-- Sisipkan footer -->
    {{-- @include('layouts.guest.footer') --}} // opsional

</body>

</html>



{{-- <body class="bg-surface text-on-surface overflow-x-hidden">
    <!-- TopNavBar Shell -->
  
    <!-- SideNavBar Shell -->
   
    <!-- Main Canvas Area -->
    
    <!-- Mobile Navigation Shell -->
    <nav
        class="md:hidden fixed bottom-0 left-0 right-0 h-16 bg-white/90 backdrop-blur-md flex justify-around items-center border-t border-outline-variant/10 px-4 z-50">
        <a class="flex flex-col items-center text-primary" href="#">
            <span class="material-symbols-outlined">dashboard</span>
            <span class="text-[8px] font-bold uppercase tracking-tighter">Home</span>
        </a>
        <a class="flex flex-col items-center text-slate-400" href="#">
            <span class="material-symbols-outlined">menu_book</span>
            <span class="text-[8px] font-bold uppercase tracking-tighter">Courses</span>
        </a>
        <a class="flex flex-col items-center text-slate-400" href="#">
            <span class="material-symbols-outlined">assignment</span>
            <span class="text-[8px] font-bold uppercase tracking-tighter">Tasks</span>
        </a>
        <a class="flex flex-col items-center text-slate-400" href="#">
            <span class="material-symbols-outlined">person</span>
            <span class="text-[8px] font-bold uppercase tracking-tighter">Profile</span>
        </a>
    </nav>
</body> --}}


