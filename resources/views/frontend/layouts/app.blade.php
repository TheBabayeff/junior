
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="TheBabayeff">
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/junior.png') }}">
    <title>@yield('title')</title>
    <link href="{{ asset('assets/css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.theme.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/slick-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/swiper.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.transitions.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/jquery.fancybox.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/odometer-theme-default.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body>


<!-- start page-wrapper -->
<div class="page-wrapper">
    <!-- start preloader -->
    <div class="preloader">
        <div class="vertical-centered-box">
            <div class="content">
                <div class="loader-circle"></div>
                <div class="loader-line-mask">
                    <div class="loader-line"></div>
                </div>
                <img src="{{ asset('assets/images/juniorWhite.png') }}" width="100px;" alt="">
            </div>
        </div>
    </div>
    <!-- end preloader -->
    <!-- Start header -->
    <header id="header" class="wpo-site-header">
        <nav class="navigation navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-3 col-3 d-lg-none dl-block">
                        <div class="mobail-menu">
                            <button type="button" class="navbar-toggler open-btn">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar first-angle"></span>
                                <span class="icon-bar middle-angle"></span>
                                <span class="icon-bar last-angle"></span>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="{{ route('welcome') }}">
                                <img src="{{ asset('assets/images/junior.png') }}" width="175px;" style="padding-bottom: 5px;" alt="JA Azerbaijan">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-1 col-1">
                        <div id="navbar" class="collapse navbar-collapse navigation-holder">
                            <button class="menu-close"><i class="ti-close"></i></button>
                            <ul class="nav navbar-nav mb-2 mb-lg-0">
                                <li>
                                    <a class="{{ request()->routeIs('welcome') ? 'active' : '' }}" href="{{ route('welcome') }}">{{ __('welcome.home') }}</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a class="{{ request()->is('about', 'vacancies' ) ? 'active' : '' }}" href="#">{{ __('welcome.about') }}</a>
                                    <ul class="sub-menu">
                                        <li><a class="{{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">{{ __('welcome.about') }}</a></li>
                                        <li><a href="{{ route('vacancies') }}">{{ __('welcome.jobOpportunities') }}</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a class="{{ request()->is('activities', 'jaPrograms' , 'projects') ? 'active' : '' }}" href="#">{{ __('welcome.activities') }}</a>
                                    <ul class="sub-menu">
                                        <li><a href="https://jausa.ja.org/programs/index">{{ __('welcome.jaPrograms') }}</a></li>
                                        <li><a href="{{ route('projects') }}">{{ __('welcome.projects') }}</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a class="{{ request()->is('media', 'news' , 'gallery') ? 'active' : '' }}" href="#">{{ __('welcome.media') }}</a>
                                    <ul class="sub-menu">
                                        <li><a class="{{ request()->routeIs('gallery') ? 'active' : '' }}" href="{{ route('gallery') }}">{{ __('welcome.gallery') }}</a></li>
                                        <li><a class="{{ request()->routeIs('news') ? 'active' : '' }}" href="{{ route('news') }}">{{ __('welcome.news') }}</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a class="{{ request()->is('contact', 'our-team') ? 'active' : '' }}" href="">{{ __('welcome.contact') }}</a>
                                    <ul class="sub-menu">

                                        <li><a class="{{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">{{ __('welcome.contact') }}</a></li>
                                        <li><a class="{{ request()->routeIs('our-team') ? 'active' : '' }}" href="{{ route('ourTeam') }}">{{ __('welcome.ourTeam') }}</a></li>
                                    </ul>
                                </li>
                            </ul>

                        </div><!-- end of nav-collapse -->
                    </div>
                    <div class="col-lg-3 col-md-2 col-2">
                        <div class="header-right">
                            <div class="close-form">
                                <a class="theme-btn-s2" href="{{ route('volunteers') }}">{{ __('welcome.getInvolved') }}</a>
                            </div>
                            <div class="header-search-form-wrapper">
                                <div class="cart-search-contact">

                                    <button class="search-toggle-btn"><i class="fi flaticon-search"></i></button>
                                    <div class="header-search-form">
                                        <form action="{{ route('search') }}" method="GET">
                                            <div>
                                                <input type="text" name="search" class="form-control"
                                                       placeholder="Search here...">
                                                <button type="submit"><i class="fi flaticon-search"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div><!-- end of container -->
        </nav>
    </header>
    <!-- end of header -->

    @yield('content')


    <footer class="wpo-site-footer">
        <div class="wpo-upper-footer" style="padding:0px 0px; ">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="widget about-widget">
                            <div class="logo widget-title">
                                <img src="{{ asset('assets/images/juniorWhite.png') }}" width="150px;" style="padding-top: 20px;" alt="JA Azerbaijan">
                            </div>
                        </div>

                    </div>

                    <div class="col col-lg-3 col-md-6 col-sm-12 col-12 ">
                        <div class="contact-ft">
                            <ul>
                                <li><i class="fi flaticon-mail"></i>info@ja-azerbaijan.org</li>
                                <li><i class="fi flaticon-mail"></i>info@ja-azerbaijan.org</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col col-lg-3 col-md-6 col-sm-12 col-12 " >
                        <div class="contact-ft">
                            <ul>
                                <li><i class="fi flaticon-phone-call"></i>{{ $settings->main_firstPhone }}</li>
                                <li><i class="fi flaticon-phone-call"></i>{{ $settings->main_secondPhone }}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col col-lg-3 col-md-6 col-sm-12 col-12 " >
                        <div class="contact-ft">
                            <ul>
                                <li><i class="fi flaticon-location"></i>{{ $settings->main_addressFirst }}</li>
                                <li><i class="fi flaticon-location"></i>{{ $settings->main_addressSecond }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </div>
        <div class="wpo-lower-footer" style="background: #285F74">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <p class="copyright"> &copy; 2024 JA Azerbijan | <a href="{{ route('welcome') }}">Junior Achievment</a>. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end of wpo-site-footer-section -->
</div>
<!-- end of page-wrapper -->

<!-- All JavaScript files
================================================== -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<!-- Plugins for this template -->
<script src="{{ asset('assets/js/modernizr.custom.js') }}"></script>
<script src="{{ asset('assets/js/jquery.dlmenu.js') }}"></script>
<script src="{{ asset('assets/js/jquery-plugin-collection.js') }}"></script>
<!-- Custom script for this template -->
<script src="{{ asset('assets/js/script.js') }}"></script>

</body>

</html>
