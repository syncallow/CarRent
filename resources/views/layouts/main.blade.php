<!doctype html>
<html lang="en">

<head>
    <title>{{ $page->title }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>


<div class="site-wrap" id="home-section">

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>



    <header class="site-navbar site-navbar-target" role="banner">

        <div class="container">
            <div class="row align-items-center position-relative">

                <div class="col-3">
                    <div class="site-logo">
                        <a href="{{ route('index') }}"><strong>{{ $info->logo }}</strong></a>
                    </div>
                </div>

                <div class="col-9  text-right">

                    <span class="d-inline-block d-lg-none"><a href="#" class=" site-menu-toggle js-menu-toggle py-5 "><span class="icon-menu h3 text-black"></span></a></span>

                    <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                        <ul class="site-menu main-menu js-clone-nav ml-auto ">
                            <li class="{{ \Illuminate\Support\Facades\Route::currentRouteNamed('index') ? 'active' : '' }}"><a href="{{ route('index') }}" class="nav-link">Home</a></li>
                            <li class="{{ \Illuminate\Support\Facades\Route::currentRouteNamed('cars') ? 'active' : '' }}"><a href="{{ route('cars') }}" class="nav-link">Listing</a></li>
                            <li class="{{ \Illuminate\Support\Facades\Route::currentRouteNamed('blog*') ? 'active' : '' }}"><a href="{{ route('blog') }}" class="nav-link">Blog</a></li>
                            <li class="{{ \Illuminate\Support\Facades\Route::currentRouteNamed('about') ? 'active' : '' }}"><a href="{{ route('about') }}" class="nav-link">About</a></li>
                            <li class="{{ \Illuminate\Support\Facades\Route::currentRouteNamed('contact*') ? 'active' : '' }}"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
                        </ul>
                    </nav>
                </div>


            </div>
        </div>

    </header>


    @yield('content')


    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    {!! $info->footer_text !!}
                    <ul class="list-unstyled social">
                        <li><a href="{{ $info->facebook_link }}"><span class="icon-facebook"></span></a></li>
                        <li><a href="{{ $info->instagram_link }}"><span class="icon-instagram"></span></a></li>
                        <li><a href="{{ $info->twitter_link }}"><span class="icon-twitter"></span></a></li>
                        <li><a href="{{ $info->linkedin_link }}"><span class="icon-linkedin"></span></a></li>
                    </ul>
                </div>
                <div class="col-lg-8 ml-auto">
                    <div class="row">
                        <div class="col-lg-3">
                            <h2 class="footer-heading mb-4">Quick links</h2>
                            <ul class="list-unstyled">
                                <li><a href="{{ route('about') }}">About Us</a></li>
                                <li><a href="{{ route('cars') }}">Cars</a></li>
                                <li><a href="#">Terms of Service</a></li>
                                <li><a href="#">Sitemap</a></li>
                                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="col-md-8 offset-md-1 mb-3">
                            <form>
                                <h5>Subscribe to our newsletter</h5>
                                <p>Monthly digest of what's new and exciting from us.</p>
                                <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                                    <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                                    <button class="btn btn-primary" type="button">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-5 mt-5 text-center">
                <div class="col-md-12">
                    <div class="border-top pt-5">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;{{ \Carbon\Carbon::now()->format('Y') }} {!! $info->copyright_text !!}
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </footer>

</div>

<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/jquery.sticky.js') }}"></script>
<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
<script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('js/aos.js') }}"></script>

<script src="{{ asset('js/main.js') }}"></script>

</body>

</html>

