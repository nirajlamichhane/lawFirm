<!-- ======= Header ======= -->
<header id="header" class="sticky-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <div class="logo">
            {{-- <h1 class="text-light"><a href="{{ route('home') }}">Marks & Marks</a></h1> --}}
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="{{ route('home') }}"><img src="/assets/img/logo/logo.png" alt="Logo" class="img-fluid"></a>
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('about') }}"><span>About Us</span></a></li>
                <li><a href="{{ route('service') }}">Services</a></li>
                <li><a href="{{ route('testinomials') }}">Testimonials</a></li>
                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                {{-- <li><a href="{{ route('specialoffer') }}">Special Offers</a></li> --}}

                @guest()
                    @if (Route::has('login'))
                        <li><a href="{{ route('login') }}">Login</a></li>
                    @endif

                    {{-- @if (Route::has('register'))
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @endif --}}
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">


                            @if (Auth::user()->isAdmin() == 'admin')
                                <a href="{{ route('admin.dashboard') }}" class="dropdown-item">Dashboard</a>
                            @endif

                            @if (Auth::user()->isCustomer() == 'user')
                                <a href="{{ route('case') }}" class="dropdown-items">Case</a>
                            @endif

                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                                                 document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>

                @endguest


            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
