<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('../assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/logo1.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        {{ config('app.name') }} - @yield('title')
    </title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="{{ asset('../assets/css/material-kit.css?v=2.0.7') }}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('../assets/demo/demo.css') }}" rel="stylesheet" />
    <!-- icon flag -->
    <link rel="stylesheet" href="{{ asset('assets/flag-icon-css/css/flag-icon.min.css') }}">
</head>

<body class="landing-page sidebar-collapse">
    @include('layouts.pages.navbar')
    <div class="page-header header-filter clear-filter purple-filter" data-parallax="true"
        style="background-image: url('./assets/img/bg2.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="title">Test Kecerdasan Majemuk</h1>
                    <h4>Test ini berguna untuk mengetahui tingkat kecerdasan dari 9 kategori kecerdasan majemuk
                    </h4>
                    <br>
                    <a data-toggle="modal" data-target="#guideline" class="btn pp btn-primary btn-round">
                        TEST KECERDASAN
                    </a>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade bd-example-modal-lg" id="guideline" tabindex="-1" role="">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="card card-signup card-plain">
                    <div class="modal-header">
                        <h5 class="modal-title card-title">Instruksi Pengerjaan Test Kecerdasan Majemuk</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="material-icons">clear</i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="{{ asset('assets/img/10.jpg') }}" height="350"
                                        alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{ asset('assets/img/02.jpg') }}" height="350"
                                        alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{ asset('assets/img/07.jpg') }}" height="350"
                                        alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{ asset('assets/img/08.jpg') }}" height="350"
                                        alt="Fourth slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-end">
                        <button type="button" class="btn btn-primary btn-link btn-wd btn-lg" data-dismiss="modal"
                            aria-label="Close">
                            Kembali
                        </button>
                        <a href="/biodata" class=" btn btn-primary btn-link btn-wd btn-lg">Mulai Test</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="main main-raised">
        <div class="container">
            <div class="section">
                @yield('content')
            </div>
        </div>
    </div>

    @include('layouts.pages.footer')
    <!--   Core JS Files   -->
    <script src="{{ asset('../assets/js/core/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('../assets/js/core/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('../assets/js/core/bootstrap-material-design.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('../assets/js/plugins/moment.min.js') }}"></script>
    <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
    <script src="{{ asset('../assets/js/plugins/bootstrap-datetimepicker.js') }}" type="text/javascript"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="{{ asset('../assets/js/plugins/nouislider.min.js') }}" type="text/javascript"></script>
    <!--  Google Maps Plugin    -->
    <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('../assets/js/material-kit.js?v=2.0.7') }}" type="text/javascript"></script>
</body>

</html>
