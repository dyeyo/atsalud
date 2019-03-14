<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/waves.js') }}" defer></script>
    <script src="{{ asset('js/sidebarmenu.js') }}" defer></script>
    <script src="{{ asset('js/custom.min.js') }}" defer></script>
    <script src="{{ asset('js/dashboard1.js') }}" defer></script>
    <script src="{{ asset('recursos/node_modules/jquery/jquery-3.2.1.min.js') }}" defer></script>
    <script src="{{ asset('recursos/node_modules/popper/popper.min.js') }}" defer></script>
    <script src="{{ asset('recursos/node_modules/bootstrap/dist/js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('recursos/node_modules/raphael/raphael-min.js') }}" defer></script>
    <script src="{{ asset('recursos/node_modules/morrisjs/morris.min.js') }}" defer></script>
    <script src="{{ asset('recursos/node_modules/jquery-sparkline/jquery.sparkline.min.js') }}" defer></script>
    <script src="{{ asset('recursos/node_modules/toast-master/js/jquery.toasts.js') }}" defer></script>
    <script src="{{ asset('recursos/node_modules/peity/jquery.peity.min.js') }}" defer></script>
    <script src="{{ asset('recursos/node_modules/peity/jquery.peity.init.js') }}" defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/pages/dashboard1.css') }}" rel="stylesheet">
    <link href="{{ asset('css/pages/login-register-lock.css') }}" rel="stylesheet">
    <link href="{{ asset('recursos/node_modules/toast-master/css/jquery.toast.css') }}" rel="stylesheet">
    <link href="{{ asset('recursos/node_modules/morrisjs/morris.css') }}" rel="stylesheet"
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
</head>
<body class="skin-blue card-no-border">
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Elite Hospital</p>
        </div>
    </div>
    <section id="wrapper">

        @yield('content')

    </section>
  {{--  <script type="text/javascript">--}}
        {{--$(function() {--}}
            {{--$(".preloader").fadeOut();--}}
        {{--});--}}
        {{--$(function() {--}}
            {{--$('[data-toggle="tooltip"]').tooltip()--}}
        {{--});--}}
        {{--// ==============================================================--}}
        {{--// Login and Recover Password--}}
        {{--// ==============================================================--}}
        {{--$('#to-recover').on("click", function() {--}}
            {{--$("#loginform").slideUp();--}}
            {{--$("#recoverform").fadeIn();--}}
        {{--});--}}
    {{--</script>--}}
</body>
</html>
