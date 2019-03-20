<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/logo-icon.png')}}">
    <title>@yield('title')</title>

    <!-- Custom CSS -->
    <link href="{{asset('css/style.min.css')}}" rel="stylesheet">
    <!-- page css -->
    <link href="{{asset('css/pages/error-pages.css')}}" rel="stylesheet">

</head>

<body class="skin-megna fixed-layout">
<section id="wrapper" class="error-page">
    <div class="error-box">
        <div class="error-body text-center">
            @yield('content')
            <a href="{{route('/')}}" class="btn btn-info btn-rounded waves-effect waves-light m-b-40">De vuelta a
                casa</a></div>

    </div>
</section>

</body>

</html>
