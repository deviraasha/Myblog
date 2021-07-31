<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>
        {{ config('app.name') }} - @yield('title')
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="{{ asset('assets/css/material-dashboard.min.css') }}" rel="stylesheet" />
    <!-- fontawesome -->
    <script src="{{ asset('vendor/fontawesome-free/js/all.min.js') }}"></script>
    <!-- my-dashboard -->
    {{-- <link rel="stylesheet" href="{{ asset('vendor/my-dashboard/css/dashboard.css') }}"> --}}
    <!-- icon flag -->
    <link rel="stylesheet" href="{{ asset('assets/flag-icon-css/css/flag-icon.min.css') }}">
    {{-- Css:external --}}
    @stack('css-external')
    {{-- Css:internal --}}
    @stack('css-internal')
</head>

<body>

    @include('layouts.dashboard_.sidebar')
    <div class="main-panel">
        <!-- Navbar -->
        @include('layouts.dashboard_.navbar')
        <!-- End Navbar -->
        <div class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
        @include('layouts.dashboard_.footer')
    </div>

    <!-- jquery -->
    <script src="{{ asset('vendor/jquery/jquery-3.6.0.min.js') }}"></script>
    <!-- bootstrap bundle -->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    {{-- <!-- dashboard -->
    <script src="{{ asset('vendor/my-dashboard/js/dashboard.js') }}"></script> --}}
    @include('sweetalert::alert')
    <!-- javascript:external-->
    @stack('javascript-external')
    @stack('javascript-internal')
</body>

</html>
