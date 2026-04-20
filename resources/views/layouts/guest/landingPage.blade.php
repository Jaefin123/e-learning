<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>CeLOE LMS - Telkom University</title>

    <!-- Memanggil CSS & JS hasil compile Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-surface text-on-surface selection:bg-primary-fixed selection:text-on-primary-fixed">
    <!-- Sisipkan Navbar -->
    @include('layouts.guest.navbar')

    <!-- content landing page (index guest)-->
    @yield('contentLandingPage')

    <!-- Sisipkan footer -->
    @include('layouts.guest.footer')

</body>

</html>
