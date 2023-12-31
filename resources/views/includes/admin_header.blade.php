<div class="sticky-top">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light ">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fa fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('home') }}" class="nav-link">Home</a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Notifications Dropdown Menu -->
            {{-- <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="fa fa-bell"></i>
                <span class="badge badge-warning navbar-badge">15</span>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        @foreach ($notifications as $notification)
                               <li>{{$notification}}</li>
                           @endforeach
                        <!-- Message End -->
                    </a>

                </div>
            </a>

        </li> --}}
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                </a>
                <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>

        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary" style="height: 657px">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <img src="/assets/img/logo/logo.jpg" alt="Logo" class="brand-image img-circle elevation-3"
                style="opacity: .8">
            <span class="brand-text font-weight-light">M&M</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                {{-- <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div> --}}
                <div class="info">
                    <a href="#" class="d-block text-uppercase">{{ auth()->user()->name }}</a>
                </div>
            </div>


            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
                    <li class="nav-item menu-open">
                        <a href="{{ route('admin.dashboard') }}"
                            class="nav-link {{ request()->is('admin') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard

                            </p>
                        </a>

                        <a href="{{ route('cases.index') }}"
                            class="nav-link {{ request()->is('admin/cases*') ? 'active' : '' }} ">
                            <i class="nav-icon fas fa-arrow-circle-right"></i>
                            <p>
                                Cases

                            </p>
                        </a>

                        <a href="{{ route('users.index') }}"
                            class="nav-link {{ request()->is('admin/users*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-user-edit"></i>
                            <p>
                                Users

                            </p>
                        </a>

                        <a href="{{ route('video.index') }}"
                            class="nav-link {{ request()->is('admin/video*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-video"></i>
                            <p>
                                Video

                            </p>
                        </a>

                        <a href="{{ route('testimonial.index') }}"
                            class="nav-link {{ request()->is('admin/testimonial*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Testinomial

                            </p>
                        </a>

                        <a href="{{ route('services.index') }}"
                            class="nav-link {{ request()->is('admin/services*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-handshake"></i>
                            <p>
                                Services

                            </p>
                        </a>

                        {{-- <a href="{{ route('contact.index') }}"
                        class="nav-link {{ request()->is('admin/contact*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-book-reader"></i>
                        <p>
                            Contacts

                        </p>
                    </a> --}}

                        <a href="{{ route('callback.index') }}"
                            class="nav-link {{ request()->is('admin/callback*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-registered"></i>
                            <p>
                                Request callback

                            </p>
                        </a>






                    </li>

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    {{-- Customer --}}

    {{-- Case file
   testinomial
   case progress --}}

</div>
