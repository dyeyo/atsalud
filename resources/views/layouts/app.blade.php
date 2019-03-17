<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <link href="{{asset('recursos/node_modules/morrisjs/morris.css')}}" rel="stylesheet">
    <!--Toaster Popup message CSS -->
    <link href="{{asset('recursos/node_modules/toast-master/css/jquery.toast.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('dist/css/style.min.css')}}" rel="stylesheet">
    <link href="{{asset('dist/css/newstyle.css')}}" rel="stylesheet">
</head>
<body class="skin-megna fixed-layout">
    <div class="preloader" style="display: none;">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">atssalud</p>
        </div>
    </div>
    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <a class="navbar-brand" href="dashboard.html">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="{{asset('recursos/images/logo-icon.png')}}" alt="homepage" class="dark-logo">
                            <!-- Light Logo icon -->
                            <img src="{{asset('recursos/images/logo-icon.png')}}" alt="homepage" class="light-logo">
                        </b>
                        <!--End Logo icon -->
                        <span class="hidden-xs font-logo">atssalud</span>
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
                        <li class="nav-item dropdown"><span class="email-nav">admin@atssa.com</span></li>
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
                                        <div class="message-center ps ps--theme_default" data-ps-id="ea3fdcf1-2bfd-dd42-1ce8-3c80b46e3884">
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
                                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__scrollbar-y-rail" style="top: 0px; right: 0px;"><div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center link" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item dropdown u-pro" style="padding: 0 10px;">
                            <a class="nav-link dropdown-toggle  profile-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{asset('recursos/images/users/1.jpg')}}" alt="user" class=""> <span class="hidden-md-down"><i class="fa fa-angle-down"></i></span> </a>
                            <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                <!-- text-->
                                <a href="javascript:void(0)" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                                <!-- text-->
                                <a href="javascript:void(0)" class="dropdown-item"><i class="ti-wallet"></i> My Balance</a>
                                <!-- text-->
                                <a href="javascript:void(0)" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
                                <!-- text-->
                                <div class="dropdown-divider"></div>
                                <!-- text-->
                                <a href="javascript:void(0)" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                                <!-- text-->
                                <div class="dropdown-divider"></div>
                                <!-- text-->
                                <a href="{{ URL::route('logout') }}" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                                <!-- text-->
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar ps ps--theme_default" data-ps-id="9aca9409-fa78-6b5c-cc3e-9538b46b2b4c">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav active">
                    <ul id="sidebarnav" class="in">
                        <li class="user-pro"> <a class="user-space "><img src="{{asset('recursos/images/users/1.jpg')}}" alt="user-img" class="img-circle"><span class="hide-menu">Mark Jeckson</span></a>
                        </li>

                        <li class="space-li active"> <a class="dashboard-a active" href="dashboard.html"><i class="icon-speedometer"></i><span class="hide-menu">Tablero</span></a>
                        </li>
                        <li class="space-li"> <a class="space-a " href="javascript:void(0);"><i class=" icon-user-follow"></i><span class="hide-menu">Usuarios</span></a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
                <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__scrollbar-y-rail" style="top: 0px; right: 0px;"><div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
            <!-- End Sidebar scroll-->
        </aside>
    </div>
    <main class="py-4">
        @yield('content')
    </main>
    <footer class="footer text-center">
        <span class="copy-1">Desarrollador con todo el</span>
        <img src="{{asset('recursos/images/footer/heart.png')}}" class="heart-copy">
        <span class="copy-2">
                por <a href="https://lacasacreativa.co/" target="_blank" style="color: #000 !important;">lacasacreativa.co</a>
              </span>
    </footer>
    <script src="{{asset('recursos/node_modules/jquery/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="{{asset('recursos/node_modules/popper/popper.min.js')}}"></script>
    <script src="{{asset('recursos/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{asset('dist/js/perfect-scrollbar.jquery.min.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('dist/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('dist/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('dist/js/custom.min.js')}}"></script>
    <script src="{{asset('recursos/node_modules/raphael/raphael-min.js')}}"></script>
    <script src="{{asset('recursos/node_modules/morrisjs/morris.min.js')}}"></script>
    <script src="{{asset('recursos/node_modules/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    <!-- Popup message jquery -->
    <script src="{{asset('recursos/node_modules/toast-master/js/jquery.toast.js')}}"></script>
    <!-- jQuery peity -->
    <script src="{{asset('recursos/node_modules/peity/jquery.peity.min.js')}}"></script>
    <script src="{{asset('recursos/node_modules/peity/jquery.peity.init.js')}}"></script>
    <script src="{{asset('dist/js/dashboard1.js')}}"></script>
</body>
</html>
