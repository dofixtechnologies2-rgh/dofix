<header class="header-wrapper">
    <div class="desktop d-none d-lg-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="header-logo">
                        <a href="{{url('/')}}">
                            <img src="{{asset('web/images/header-logo.png')}}" class="img-fluid" alt="DoFix" style="width:70%; height:auto;">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="header-menu">
                        <nav class="navbar navbar-expand-sm justify-content-center">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">HOME</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('about-us') ? 'active' : '' }}" href="{{ url('/about-us') }}">ABOUT US</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('contact-us') ? 'active' : '' }}" href="{{ url('/contact-us') }}">CONTACT US</a>
                                </li>
                            </ul>
                            


                        </nav>
                    </div>
                </div>
                <div class="col-lg-3 d-flex justify-content-end">
                    <a class="btn joinBtn" href="{{url('/provider-onboard-step-one')}}">
                        Join as a partner
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile d-block d-lg-none">

        <div class="container">

            <nav class="navbar navbar-dark">

                <div class="header-logo">

                    <a class="navbar-brand" href="{{url('/')}}">

                        <img src="{{asset('web/images/Header-logo.webp')}}" class="img-fluid" alt="Bemarketfit">
                    </a>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
                    aria-label="Toggle navigation">

                    <i class="fa-solid fa-bars" style="color: #000;"></i>

                </button>



                <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
                    aria-labelledby="offcanvasDarkNavbarLabel">

                    <div class="offcanvas-header">

                        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">
                            <a href="{{url('/')}}">
                            <img src="{{asset('web/images/Header-logo.webp')}}" class="img-fluid" alt="Bemarketfit">
                            </a>
                        </h5>

                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                            aria-label="Close">

                            <i class="fa-solid fa-xmark"></i>

                        </button>

                    </div>

                    <div class="offcanvas-body">

                        <ul class="navbar-nav justify-content-end flex-grow-1">

                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('about-us') ? 'active' : '' }}" href="{{ url('/about-us') }}">ABOUT US</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('contact-us') ? 'active' : '' }}" href="{{ url('/contact-us') }}">CONTACT US</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link btn joinBtn" href="{{url('/provider-onboard-step-one')}}">
                                    Join as a partner
                                </a>
                            </li>
                        </ul>



                    </div>

                </div>

            </nav>

        </div>

    </div>
</header>