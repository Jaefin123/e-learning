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

    @php
        $navbarUser = app(\App\Services\UserManagementService::class)
            ->getOneUsersbyId(Auth::user()->id_user);
    @endphp

    @include('layouts.auth.navbar', ['navbarUser' => $navbarUser])

    @include('layouts.auth.sidebar')

    <div class="pt-4">
        @yield('content')
    </div>
</body>

<script>
    const sidebar = document.getElementById('main-sidebar');
    const toggleBtn = document.getElementById('sidebar-toggle-btn');

    function toggleSidebar(e) {
        if (e) e.stopPropagation();
        
        // Cek apakah sidebar sedang tersembunyi
        if (sidebar.classList.contains('-translate-x-full')) {
            openSidebar();
        } else {
            closeSidebar();
        }
    }

    function openSidebar() {
        sidebar.classList.remove('-translate-x-full');
        sidebar.classList.add('translate-x-0');
    }

    function closeSidebar() {
        sidebar.classList.remove('translate-x-0');
        sidebar.classList.add('-translate-x-full');
    }

    // Klik di mana saja untuk menutup
    document.addEventListener('click', function(event) {
        const isClickInsideSidebar = sidebar.contains(event.target);
        const isClickOnButton = toggleBtn.contains(event.target);

        if (!isClickInsideSidebar && !isClickOnButton) {
            closeSidebar();
        }
    });
</script>



</html>
