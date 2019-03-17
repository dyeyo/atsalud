<!DOCTYPE html>
<html lang="en">
@routes
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" type="image/png" sizes="16x16" href="{{('images/logo-icon.png')}}">
    <title>{{config('app.name')}}</title>

    <link href="{{asset('css/pages/login-register-lock.css')}}" rel="stylesheet">

    <link href="{{('css/style.min.css')}}" rel="stylesheet">
    <link href="{{('css/newstyle.css')}}" rel="stylesheet">
    <!-- Smoke -->
    <link href="{{asset('node_modules/smoke-v3.1.1/css/smoke.min.css')}}" rel="stylesheet">

</head>

<body class="body-auth">

<div class="preloader">
    <div class="loader">
        <div class="loader__figure"></div>
        <p class="loader__label">{{config('app.name')}}</p>
    </div>
</div>


<section id="wrapper" class="login-register login-sidebar">
@yield('content')
</section>
<footer class="footer-co pyright text-center footer-login">
    <span class="copy-1">Desarrollado con todo el</span>
    <img src="{{('images/footer/heart.png')}}" class="heart-copy">
    <span class="copy-2">
            por <a href="https://lacasacreativa.co/" target="_blank" style="color: #000 !important;">lacasacreativa.co</a>
          </span>
</footer>
<script src="{{('node_modules/jquery/jquery-3.2.1.min.js')}}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{('node_modules/popper/popper.min.js')}}"></script>
<script src="{{('node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Smoke -->
<script src="{{asset('node_modules/smoke-v3.1.1/js/smoke.min.js')}}"></script>
<!-- language -->
<script src="{{asset('node_modules/smoke-v3.1.1//lang/es.min.js')}}"></script>
<script src="{{asset('js/functions.js')}}"></script>
<!--Custom JavaScript -->
<script type="text/javascript">
    $(function() {
        $(".preloader").fadeOut();
    });
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    });

    $('#to-recover').on("click", function() {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
    });
</script>

</body>

</html>
