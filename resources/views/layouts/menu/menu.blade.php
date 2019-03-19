<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        @if(auth()->user()->reset_password==1)

        @else
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li class="user-pro"> <a class="user-space "><img src="{{asset('images/users/1.jpg')}}" alt="user-img" class="img-circle"><span class="hide-menu">{{auth()->user()->name}}</span></a>
                    </li>

                    <li class="space-li">
                        <a class="dashboard-a " href="{{route('dashboard')}}">
                            <i class="fa fa-hospital-o"></i>
                            <span class="hide-menu">Tablero</span>
                        </a>
                    </li>
                    @can('roles.index')
                        <li class="space-li">
                            <a class="space-a"  href="{{route('roles.index')}}" aria-expanded="false">
                                <i class=" icon-user-follow"></i>
                                <span class="hide-menu">Roles</span>
                            </a>
                        </li>
                    @endcan
                    @can('users.index')
                        <li class="space-li">
                            <a class="space-a "  href="{{route('users.index')}}">
                                <i class=" icon-user-follow"></i>
                                <span class="hide-menu">Usuarios</span>
                            </a>
                        </li>
                    @endcan
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        @endif
    </div>
    <!-- End Sidebar scroll-->
</aside>
