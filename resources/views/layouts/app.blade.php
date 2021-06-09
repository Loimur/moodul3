<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Nehatu') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-custom">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="/../img/logo.svg">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <i class="bi bi-list"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><img src="/../img/ee.svg" class="flag"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><img src="/../img/gb.svg" class="flag"></a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Meist</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Menüü</a>
                        </li>
                        <!-- Authentication Links -->
                        <li class="nav-item">
                            <a class="nav-link" href="#">Logi sisse</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Registreeri</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="bi bi-cart4"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

        <footer>
            <div class="container">
                <div class="row py-3">
                    <div class="col-12 col-md-4 text-center text-md-left py-2">
                        <a href="#" class="footer-font">Harju 40a<br>
                            10130 Tallinn<br>
                            Harjumaa, Eesti<br></a>
                        <a href="#" class="footer-font">+372 5555 5555</a><br>
                        <a href="#" class="footer-font">info@nehatu.ee</a>
                    </div>
                    <div class="col-12 col-md-4 text-center text-md-center py-2">
                        <a href="#" class="footer-font">Meist</a><br><br>
                        <a href="#" class="footer-font">KKK</a><br><br>
                        <a href="#" class="footer-font">Privaatsuspoliitika</a>
                    </div>
                    <div class="col-12 col-md-4 text-center text-md-right py-2">
                        <div class="row">
                            <div class="col-4 col-md-12">
                                <a href="#" class="footer-font"><i class="bi bi-facebook"></i></a><br><br>
                            </div>
                            <div class="col-4 col-md-12">
                                <a href="#" class="footer-font"><i class="bi bi-instagram"></i></a><br><br>
                            </div>
                            <div class="col-4 col-md-12">
                                <a href="#" class="footer-font"><i class="bi bi-messenger"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
