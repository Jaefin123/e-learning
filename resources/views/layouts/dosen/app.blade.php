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
    @include('layouts.dosen.navbar') // di ganti sama navbar dan side bar dashboard mahasigma

    @include('layouts.dosen.sidebar')

    <!-- content landing page (index guest)-->
    @yield('content')

    <!-- Sisipkan footer -->
    {{-- @include('layouts.guest.footer') --}} // opsional

</body>

</html>