<!DOCTYPE html>
<html lang="en">
@routes
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{('images/logo-icon.png')}}">
    <title>{{config('app.name')}}</title>

    <link href="{{('node_modules/morrisjs/morris.css')}}" rel="stylesheet">
    <!--Toaster Popup message CSS -->
    <link href="{{('node_modules/toast-master/css/jquery.toast.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{('css/style.min.css')}}" rel="stylesheet">
    <link href="{{('css/newstyle.css')}}" rel="stylesheet">
    <!-- Smoke -->
    <link href="{{asset('node_modules/smoke-v3.1.1/css/smoke.min.css')}}" rel="stylesheet">
</head>

<body class="skin-blue-dark fixed-layout">
<div class="preloader">
    <div class="loader">
        <div class="loader__figure"></div>
        <p class="loader__label">{{config('app.name')}}.com</p>
    </div>
</div>

<div id="main-wrapper">

    <header class="topbar">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">

            <div class="navbar-header">
                <a class="navbar-brand" href="{{route('dashboard')}}">
                    <!-- Logo icon --><b>
                        <!-- Dark Logo icon -->
                        <img src="{{{asset('images/logo-icon.png')}}}" alt="homepage" class="dark-logo">
                        <!-- Light Logo icon -->
                        <img src="{{asset('images/logo-icon.png')}}" alt="homepage" class="light-logo">
                    </b>
                    <!--End Logo icon -->
                    <span class="hidden-xs font-logo">{{config('app.name')}}</span>
                    <span class="hidden-xs sub-font-logo">Apoyo tecnológico a servicios de salud</span>

                </a>
            </div>
            <div class="navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <!-- This is  -->
                    <li class="nav-item"> <a class="nav-link nav-toggler d-block d-sm-none " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                    <li class="nav-item"> <a class="nav-link sidebartoggler d-none d-lg-block d-md-block " href="javascript:void(0)"><i class="icon-menu"></i></a> </li>

                </ul>
                <ul class="navbar-nav my-lg-0">

                    <li class="nav-item dropdown"><span class="email-nav">{{auth()->user()->email}}</span></li>
                    @if(auth()->user()->reset_password==1)

                    @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle " href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="icon-icon icon-bell"></i>
                            <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown">
                            <ul>
                                <li>
                                    <div class="drop-title">Notifications</div>
                                </li>
                                <li>
                                    <div class="message-center">
                                        <!-- Message -->
                                        <a href="javascript:void(0)">
                                            <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div>
                                            <div class="mail-contnet">
                                                <h5>Luanch Admin</h5> <span class="mail-desc">Just see the my new admin!</span> <span class="time">9:30 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)">
                                            <div class="btn btn-success btn-circle"><i class="ti-calendar"></i></div>
                                            <div class="mail-contnet">
                                                <h5>Event today</h5> <span class="mail-desc">Just a reminder that you have event</span> <span class="time">9:10 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)">
                                            <div class="btn btn-info btn-circle"><i class="ti-settings"></i></div>
                                            <div class="mail-contnet">
                                                <h5>Settings</h5> <span class="mail-desc">You can customize this template as you want</span> <span class="time">9:08 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)">
                                            <div class="btn btn-primary btn-circle"><i class="ti-user"></i></div>
                                            <div class="mail-contnet">
                                                <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <a class="nav-link text-center link" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    @endif

                    <li class="nav-item dropdown u-pro" style="padding: 0 10px;">
                        <a class="nav-link dropdown-toggle  profile-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/users/1.jpg" alt="user" class=""> <span class="hidden-md-down"><i class="fa fa-angle-down"></i></span> </a>
                        <div class="dropdown-menu dropdown-menu-right animated flipInY">
                        @if(auth()->user()->reset_password==1)

                        @else
                            <!-- text-->
                            <a href="javascript:void(0)" class="dropdown-item"><i class="ti-user"></i> My Profile</a>

                            <div class="dropdown-divider"></div>
                            <!-- text-->
                            <a href="javascript:void(0)" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                            <!-- text-->
                            <div class="dropdown-divider"></div>
                        @endif
                            <!-- text-->
                            <a href="{{ route('login.destroy') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="dropdown-item"><i class="fa fa-power-off"></i> Salir</a>
                            <form id="logout-form" action="{{ route('login.destroy') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                            <!-- text-->
                        </div>
                    </li>

                </ul>
            </div>
        </nav>
    </header>
    <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            @if(auth()->user()->reset_password==1)

             @else
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li class="user-pro"> <a class="user-space "><img src="images/users/1.jpg" alt="user-img" class="img-circle"><span class="hide-menu">{{auth()->user()->name}}</span></a>
                    </li>

                    <li class="space-li"> <a class="dashboard-a " href="{{route('dashboard')}}"><i class="icon-speedometer"></i><span class="hide-menu">Tablero</span></a>
                    </li>
                    <li class="space-li"> <a class="space-a "  href="javascript:void(0);"><i class=" icon-user-follow"></i><span class="hide-menu">Usuarios</span></a>
                    </li>
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
            @endif
        </div>
        <!-- End Sidebar scroll-->
    </aside>

    <div class="page-wrapper">

        <div class="container-fluid">
            @if(auth()->user()->reset_password==1)
                <br>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header bg-info">
                                <h4 class="m-b-0 text-white">Contraseña</h4>
                            </div>
                            <div class="card-body">
                                <form action="javascript:void(0)" method="post" id="changePassword">
                                    {{csrf_field()}}
                                    <div class="form-body">
                                        <h3 class="card-title">Actualizar contraseña</h3>
                                        <hr>
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="password" id="pass_one" name="pass_one" class="form-control" placeholder="Nueva contraseña(*)" required>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="password" id="pass_two" name="pass_two" class="form-control form-control-danger" placeholder="Repetir contraseña(*)" required>

                                                </div>
                                                <!--/span-->
                                            </div>
                                        </div>
                                        <input type="hidden" name="id" id="id" value="{{auth()->user()->id}}">
                                        <div class="form-actions">
                                            <button type="submit" class="btn btn-success" onclick="change_password()"> <i class="fa fa-check"></i> Actualizar</button>
                                        </div>
                                </form>

                            </div>
                            <br>
                            <div id="response"></div>
                        </div>
                    </div>
                </div>
        </div>
            @else
            @yield('content')
            @endif
        </div>

    </div>

    <footer class="footer text-center">
        <span class="copy-1">Desarrollador con todo el</span>
        <img src="{{('images/footer/heart.png')}}" class="heart-copy">
        <span class="copy-2">
                  por <a href="https://lacasacreativa.co/" target="_blank" style="color: #000 !important;">lacasacreativa.co</a>
                </span>
    </footer>

</div>

<script src="{{('node_modules/jquery/jquery-3.2.1.min.js')}}"></script>
<!-- Bootstrap popper Core JavaScript -->
<!-- Smoke -->
<script src="{{asset('node_modules/smoke-v3.1.1/js/smoke.min.js')}}"></script>
<!-- language -->
<script src="{{asset('node_modules/smoke-v3.1.1//lang/es.min.js')}}"></script>
<script src="{{('node_modules/popper/popper.min.js')}}"></script>
<script src="{{('node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{('js/perfect-scrollbar.jquery.min.js')}}"></script>
<!--Wave Effects -->
<script src="{{('js/waves.js')}}"></script>
<!--Menu sidebar -->
<script src="{{('js/sidebarmenu.js')}}"></script>
<!--Custom JavaScript -->
<script src="{{('js/custom.min.js')}}"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!--morris JavaScript -->
<script src="{{('node_modules/raphael/raphael-min.js')}}"></script>
<script src="{{('node_modules/morrisjs/morris.min.js')}}"></script>
<script src="{{('node_modules/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
<!-- Popup message jquery -->
<script src="{{('node_modules/toast-master/js/jquery.toast.js')}}"></script>
<!-- jQuery peity -->
<script src="{{('node_modules/peity/jquery.peity.min.js')}}"></script>
<script src="{{('node_modules/peity/jquery.peity.init.js')}}"></script>
<script src="{{('js/dashboard1.js')}}"></script>
<script src="{{('js/functions.js')}}"></script>
</body>

</html>
