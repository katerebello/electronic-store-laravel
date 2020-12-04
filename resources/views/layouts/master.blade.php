<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link
        href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/chosen.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/color-01.css') }}">


</head>

<body class="home-page home-01 ">


    <!--header-->
    <header id="header" class="header header-style-1 mb-5">
        <div class="container-fluid">
            <div class="row">

                <div class="container">
                    <div class="mid-section main-info-area">

                        <div class="wrap-logo-top left-section">
                            <a href="index.html" class="link-to-home"><img src="images/logo1.jpg" alt="mercado"></a>
                        </div>

                        <div class="wrap-search center-section">
                            <div class="wrap-search-form">
                                <form action="#" id="form-search-top" name="form-search-top">
                                    <input type="text" name="search" value="" placeholder="Search here...">
                                    <button form="form-search-top" type="button"><i class="fa fa-search"
                                            aria-hidden="true"></i></button>
                                    <div class="wrap-list-cate">
                                        <input type="hidden" name="product-cate" value="0" id="product-cate">
                                        <a href="#" class="link-control">All Category</a>
                                        <ul class="list-cate">
                                            <li class="level-0">All Category</li>
                                            <li class="level-1">-Electronics</li>
                                            <li class="level-2">Batteries & Chargers</li>
                                            <li class="level-2">Headphone & Headsets</li>
                                            <li class="level-2">Mp3 Player & Acessories</li>
                                            <li class="level-1">-Smartphone & Tablets</li>
                                            <li class="level-2">Batteries & Chargens</li>
                                            <li class="level-2">Mp3 Player & Headphones</li>
                                            <li class="level-2">Table & Accessories</li>
                                            <li class="level-1">-Electronics</li>
                                            <li class="level-2">Batteries & Chargens</li>
                                            <li class="level-2">Headphone & Headsets</li>
                                            <li class="level-2">Mp3 Player & Acessories</li>
                                            <li class="level-1">-Smartphone & Table</li>
                                            <li class="level-2">Batteries & Chargens</li>
                                            <li class="level-2">Mp3 Player & Headphones</li>
                                            <li class="level-2">Table & Accessories</li>
                                        </ul>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="wrap-icon right-section" style="padding-left:50px;">

                            <div class="wrap-icon-section minicart" style="text-align:right;">
                                <a href="#" class="link-direction">
                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                    <div class="left-info">
                                        <span class="index">&nbsp;items</span>
                                        <span class="title">CART</span>
                                    </div>
                                </a>
                            </div>
                            <div class="wrap-icon-section show-up-after-1024">
                                <a href="#" class="mobile-navigation">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4" style=" height: 10rem">
                            <ul class="blocks mr-auto"
                                style="list-style: none; display: inline-flex;padding-top: 50px;padding-right:10px;">
                                <!-- Authentication Links -->
                                @guest
                                <li style="margin: 10px;">
                                    <a href="{{ route('login') }}" style="color: #d91616; ">{{ __('Login') }} </a>
                                </li>
                                @if (Route::has('register'))
                                <li style="margin: 10px;">
                                    <a href="{{ route('register') }}" style="color: #d91616;">{{ __('Register') }}</a>
                                </li>
                                @endif
                                @else
                                <li>
                                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false" v-pre style="text-align:left;">
                                        {{ Auth::user()->name }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
                                            class="caret"></span> </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                                @endguest
                            </ul>
                        </div>


                    </div>
                </div>

                <div class="nav-section header-sticky">

                    <div class="primary-nav-section">
                        <div class="container">
                            <ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu">
                                <li class="menu-item home-icon">
                                    <a href="{{ url('/') }}" class="link-term mercado-item-title"><i class="fa fa-home"
                                            aria-hidden="true"></i></a>
                                </li>
                                <li class="menu-item">
                                    <a href="about-us.html" class="link-term mercado-item-title">About Us</a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{ url('/shop') }}" class="link-term mercado-item-title">Shop</a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{ url('/cartlist') }}" class="link-term mercado-item-title">Cart</a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{ url('/myorders') }}" class="link-term mercado-item-title">Orders</a>
                                </li>
                                <li class="menu-item">
                                    <a href="#footer" class="link-term mercado-item-title">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div style="background-color:white;width:100%;margin-top:100px; margin-bottom:100px;">
        <main id="main">
            @yield('content')
        </main>
    </div>
    <footer id="footer" style="background-color: #f3b73e;" class="">
        <div class="wrap-footer-content footer-style-1">
            <!--End function info-->
            <div class="main-footer-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                            <div class="wrap-footer-item">
                                <h3 class="item-header">Contact Details</h3>
                                <div class="item-content">
                                    <div class="wrap-contact-detail">
                                        <ul>
                                            <li>
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                <p class="contact-txt">45 Grand Central Terminal New York,NY 1017 United
                                                    State USA</p>
                                            </li>
                                            <li>
                                                <i class="fa fa-phone" aria-hidden="true"></i>
                                                <p class="contact-txt">(+123) 456 789 - (+123) 666 888</p>
                                            </li>
                                            <li>
                                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                                <p class="contact-txt">Contact@yourcompany.com</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                            <div class="wrap-footer-item">
                                <h3 class="item-header">Hot Line</h3>
                                <div class="item-content">
                                    <div class="wrap-hotline-footer">
                                        <span class="desc">Call Us toll Free</span>
                                        <b class="phone-number" style="color: #4682b4">(+123) 456 789 - (+123) 666
                                            888</b>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap-footer-item footer-item-second">
                                <h3 class="item-header">Sign up for newsletter</h3>
                                <div class="item-content">
                                    <div class="wrap-newletter-footer">
                                        <form action="#" class="frm-newletter" id="frm-newletter">
                                            <input type="email" class="input-email" name="email" value=""
                                                placeholder="Enter your email address">
                                            <button class="btn-submit">Subscribe</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 box-twin-content ">
                            <div class="row">
                                <div class="wrap-footer-item twin-item">
                                    <h3 class="item-header">My Account</h3>
                                    <div class="item-content">
                                        <div class="wrap-vertical-nav">
                                            <ul>
                                                <li class="menu-item"><a href="#" class="link-term">My Account</a></li>
                                                <li class="menu-item"><a href="#" class="link-term">Brands</a></li>
                                                <li class="menu-item"><a href="#" class="link-term">Gift
                                                        Certificates</a></li>
                                                <li class="menu-item"><a href="#" class="link-term">Affiliates</a></li>
                                                <li class="menu-item"><a href="#" class="link-term">Wish list</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap-footer-item twin-item">
                                    <h3 class="item-header">Infomation</h3>
                                    <div class="item-content">
                                        <div class="wrap-vertical-nav">
                                            <ul>
                                                <li class="menu-item"><a href="#" class="link-term">Contact Us</a></li>
                                                <li class="menu-item"><a href="#" class="link-term">Returns</a></li>
                                                <li class="menu-item"><a href="#" class="link-term">Site Map</a></li>
                                                <li class="menu-item"><a href="#" class="link-term">Specials</a></li>
                                                <li class="menu-item"><a href="#" class="link-term">Order History</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                            <div class="wrap-footer-item">
                                <h3 class="item-header">We Using Safe Payments:</h3>
                                <div class="item-content">
                                    <div class="wrap-list-item wrap-gallery">
                                        <img src="images/payment.png" style="max-width: 260px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                            <div class="wrap-footer-item">
                                <h3 class="item-header">Social network</h3>
                                <div class="item-content">
                                    <div class="wrap-list-item social-network">
                                        <ul>
                                            <li><a href="#" class="link-to-item" title="twitter"><i
                                                        class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#" class="link-to-item" title="facebook"><i
                                                        class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href="#" class="link-to-item" title="pinterest"><i
                                                        class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                            <li><a href="#" class="link-to-item" title="instagram"><i
                                                        class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                            <li><a href="#" class="link-to-item" title="vimeo"><i class="fa fa-vimeo"
                                                        aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                            <div class="wrap-footer-item">
                                <h3 class="item-header">Download App</h3>
                                <div class="item-content">
                                    <div class="wrap-list-item apps-list">
                                        <ul>
                                            <li>
                                                <a href="#" class="link-to-item" title="our application on apple store">
                                                    <figure><img src="images/brands/apple-store.png" alt="apple store"
                                                            width="128" height="36"></figure>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="link-to-item"
                                                    title="our application on google play store">
                                                    <figure><img src="images/brands/google-play-store.png"
                                                            alt="google play store" width="128" height="36"></figure>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>

            <div class="coppy-right-box">
                <div class="container">
                    <div class="coppy-right-item item-left">
                        <p class="coppy-right-text">Copyright © 2020 Surfside Media. All rights reserved</p>
                    </div>
                    <div class="coppy-right-item item-right">
                        <div class="wrap-nav horizontal-nav">
                            <ul>
                                <li class="menu-item"><a href="about-us.html" class="link-term">About us</a></li>
                                <li class="menu-item"><a href="privacy-policy.html" class="link-term">Privacy Policy</a>
                                </li>
                                <li class="menu-item"><a href="terms-conditions.html" class="link-term">Terms &
                                        Conditions</a></li>
                                <li class="menu-item"><a href="return-policy.html" class="link-term">Return Policy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/jquery-1.12.4.minb8ff.js?ver=1.12.4"></script>
    <script src="js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.flexslider.js"></script>
    <script src="js/chosen.jquery.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/functions.js"></script>
    </div>
    </div>
</body>

</html>