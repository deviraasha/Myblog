<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="@yield('description')">

    <title>{{ config('app.name') }} - @yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- fontawesome free -->
    <script src="{{ asset('vendor/fontawesome-free/js/all.min.js') }}"></script>
    <!-- icon flag -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/flag-icon-css/css/flag-icon.min.css') }}">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100">

    <!-- Navigation:start -->
    @include('layouts.homepage.navbar')
    <!-- Navigation:end -->
    <!-- HERO -->
    @include('layouts.homepage.hero')
    <!--HERO END -->
    <!-- Page Content -->
    <div class="container">
        <!-- content:start -->
        @yield('content')
        <!-- content:end -->
    </div>
    <!-- /.container -->

    <!-- Footer:start -->
    @include('layouts.homepage.footer')
    <!-- Footer:end -->

    <!-- jquery -->
    <script src="{{ asset('vendor/jquery/jquery-3.6.0.min.js') }}"></script>
    <!-- bootstrap -->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>


    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>

</html>
