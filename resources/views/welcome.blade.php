<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link href="
	https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
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
    <header id="header" class="header header-style-1">
        <div class="container-fluid">
            <div class="row">
                <div class="container">
                    <div class="mid-section main-info-area">
                        <div class="wrap-logo-top left-section">
                            <a href="{{ url('/') }}" class="link-to-home"><img src="images/logo1.jpg" alt="mercado"></a>
                        </div>
                        <div class="wrap-search center-section" style="width: 450px;">
                            <div class="wrap-search-form box" style="border: 2px solid steelblue;">
                                <form action="\category" id="form-search-top" class="ml-5">
                                    <input type="text" id="inputsearch" style="border: none;" placeholder="Search here..">
                                    <select name="category" id="" style="border:none;">
                                        <option value="">All Category</option>
                                        <option value="Smartphones">Smartphones</option>
                                        <option value="Washingmachines">WashingMachines</option>
                                        <option value="Laptops">Laptops</option>
                                        <option value="Cameras">Cameras</option>
                                    </select>
                                    <button form="form-search-top" type="button" style="background-color:steelblue;border:none;height:46px;">
                                        <i class="fa fa-search" aria-hidden="true" style="color:white;"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="wrap-icon right-section" style="padding-left:50px;">
                            <div class="wrap-icon-section minicart" style="text-align:right;">
                                <a href="/cartlist" class="link-direction">
                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                    <div class="left-info">
                                        <span class="index">&nbsp;items</span>
                                        <span class="title">CART</span>
                                    </div>
                                    <div class="wrap-icon-section show-up-after-1024">
                                        <a href="#" class="mobile-navigation">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </a>
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-4" style=" height: 10rem">
                            <ul class="blocks mr-auto"
                                style="list-style: none; display: inline-flex;padding-top: 50px;padding-right:10px;">
                                <!-- Authentication Links -->
                                @guest
                                <p hidden>{{ $role = 'null '}}</p>
                                <li style="margin: 10px;">
                                    <a href="{{ route('login') }}" style="color: #d91616; ">{{ __('Login') }} </a>
                                </li>
                                @if (Route::has('register'))
                                <li style="margin: 10px;">
                                    <a href="{{ route('register') }}" style="color: #d91616;">{{ __('Register') }}</a>
                                </li>
                                @endif
                                @else
                                <p hidden>{{ $role =  Auth::user()->role}}</p>
                                <li style="margin-right:80px;">
                                    @if ( Auth::user()->role == 'admin')
                                    <a href="/admindashboard" style="color: black;">Dashboard</a>
                                    @endif 
                                </li>
                                <li>                             
                                    <a class="dropdown-toggle" href="#" style="color:black;" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                        <span class="caret"></span>
                                    </a>                                    
                                    <div class="dropdown-menu dropdown-menu-right " aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" style="color: black; margin-left:50px;">
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
                                    <a href="{{ url('/aboutus') }}" class="link-term mercado-item-title">About Us</a>
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
                                    <a href="{{ url('/contactus') }}" class="link-term mercado-item-title">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @if (session('info'))
    <div class="alert alert-success" role="alert">
        {{ session('info') }}
    </div>
    @endif
    <main id="main">
        <div class="container">
            <!--MAIN SLIDE-->
            <div class="wrap-main-slide">
                <div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true"
                    data-dots="false">
                    <div class="item-slide">
                        <img src="images/banner1.jpg" alt="" class="img-slide">
                        <div style="text-align: left;" class="slide-info slide-3">
                            <h2 class="f-title">DELL <b>Laptops</b></h2>
                            <span class="subtitle">Home laptops sale </span>
                            <p class="sale-info">Starting from <span class="price">Rs 30,000/-</span>only</p>
                            <a href="{{ url('/shop') }}" class="btn-link" style="text-decoration: none;">Shop Now</a>
                        </div>
                    </div>
                    <div class="item-slide">
                        <img src="images/banner3.jpg" alt="" class="img-slide">

                    </div>
                    <div class="item-slide">
                        <img src="images/banner4.jpg" alt="aaa" class="img-slide">
                        <div class="slide-info slide-3">
                            <h2 class="f-title">Unstoppable<br><b>Sound</b></h2>
                            <span class="f-subtitle">JBL waterproof portable speakers</span>
                            <br><br>
                            <a href="{{ url('/shop') }}" style="text-decoration: none;" class="btn-link">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--strip-->
            <div class="wrap-footer-content footer-style-1">
                <div class="wrap-function-info">
                    <div class="container">
                        <ul>
                            <li class="fc-info-item">
                                <i class="fa fa-truck" aria-hidden="true"></i>
                                <div class="wrap-left-info">
                                    <h4 class="fc-name">Worldwide Delivery</h4>
                                    <p class="fc-desc">Delivery all across world </p>
                                </div>
                            </li>

                            <li class="fc-info-item">
                                <i class="fa fa-recycle" aria-hidden="true"></i>
                                <div class="wrap-left-info">
                                    <h4 class="fc-name">Guarantee</h4>
                                    <p class="fc-desc">30 Days Money Back warranty</p>
                                </div>
                            </li>

                            <li class="fc-info-item">
                                <i class="fa fa-credit-card-alt" aria-hidden="true"></i>
                                <div class="wrap-left-info">
                                    <h4 class="fc-name">Secure Payment</h4>
                                    <p class="fc-desc">Safe online payment</p>
                                </div>
                            </li>

                            <li class="fc-info-item">
                                <i class="fa fa-life-ring" aria-hidden="true"></i>
                                <div class="wrap-left-info">
                                    <h4 class="fc-name">Online Suport</h4>
                                    <p class="fc-desc">We Have 24/7 online Support </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--On Sale-->
            <div class="wrap-show-advance-info-box style-1 has-countdown">
                <h3 class="title-box">On Sale</h3>
                <div class="wrap-countdown mercado-countdown" data-expire="2020/12/12 12:34:56"></div>
                <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container " data-items="5"
                    data-loop="false" data-nav="true" data-dots="false"
                    data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>
                    <div class="product product-style-2 equal-elem">
                        <div class="product-thumnail">
                            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                <figure>
                                    <img src="images/products/digital_04.jpg" width="800" height="800"
                                        alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                </figure>
                            </a>
                            <div class="group-flash">
                                <span class="flash-item sale-label">sale</span>
                            </div>
                            <div class="wrap-btn">
                                <a href="#" class="function-link">quick view</a>
                                <!-- <a href="/{product}/productdetails"  class="function-link">quick view</a> -->
                            </div>
                        </div>
                        <div class="product-info">
                            <a href="#" class="product-name">
                                <span style="color: black;">Radiant-360 R6 Wireless Omnidirectional Speaker
                                    [White]</span>
                            </a>
                            <div class="wrap-price"><span class="product-price">Rs 250.00/-</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Latest Products-->
            <div class="wrap-show-advance-info-box style-1">
                <h3 class="title-box">Latest Products</h3>
                <div class="wrap-top-banner">
                    <a href="#" class="link-banner banner-effect-2">
                        <figure><img src="images/digital-electronic-banner.jpg" width="1170" height="240" alt="">
                        </figure>
                    </a>
                </div>
                <div class="wrap-products">
                    <div class="wrap-product-tab tab-style-1">
                        <div class="tab-contents">
                            <div class="tab-content-item active" id="digital_1a">
                                <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                    data-items="5" data-loop="false" data-nav="true" data-dots="false"
                                    data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

                                    @foreach($products as $product)
                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="/{{$product->id}}/productdetails" title="{{ $product->product_description}}">
                                                <figure><img src="storage\{{$product->image[0]->product_image }}"
                                                        style="width:150px ;height:150px;"
                                                        alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                            </a>
                                            <div class="group-flash">
                                                <span class="flash-item new-label">new</span>
                                            </div>
                                            <div class="wrap-btn">
                                                <!-- <a href="#" class="function-link">quick view</a> -->
                                                <a href="/{{$product->id}}/productdetails" class="function-link">quick
                                                    view</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <a href="/{{$product->id}}/productdetails" class="product-name"><span style="color: black;">{{$product->product_name}}</span></a>
                                            <div class="wrap-price"><span class="product-price">Rs
                                                    {{$product->product_price}}/-</span></div>
                                            <div>
                                                @if ( $role == 'user')
                                                <form action="/add_to_cart" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="products_id" value="{{$product->id}}">
                                                    <button class="btn btn-primary">Add to Cart</button>
                                                </form>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    @endforeach


                                </div>
                            </div>
                        </div>
                    </div>



                </div>
                <!--Product Categories-->
                <div class="wrap-show-advance-info-box style-1">
                    <h3 class="title-box">Product Categories</h3>
                    <div class="wrap-top-banner">
                        <a href="#" class="link-banner banner-effect-2">
                            <figure><img src="images/banner7.jpg" width="1170" height="240" alt=""></figure>
                        </a>
                    </div>
                    <div class="wrap-products">
                        <div class="wrap-product-tab tab-style-1">
                            <div class="tab-control">
                                <a href="#fashion" class="tab-control-item active">All Products</a>
                                <a href="#fashion_1a" class="tab-control-item ">Smartphone</a>
                                <a href="#fashion_1b" class="tab-control-item">Washing machine</a>
                                <a href="#fashion_1c" class="tab-control-item">Laptop</a>
                                <a href="#fashion_1d" class="tab-control-item">Camera</a>
                            </div>
                            <div class="tab-contents">

                                <div class="tab-content-item active" id="fashion">
                                    <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                        data-items="5" data-loop="false" data-nav="true" data-dots="false"
                                        data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>
                                        @foreach($products as $product)
                                        <div class="product product-style-2 equal-elem ">

                                            <div class="product-thumnail">
                                                <!--first image-->
                                                <a href="/{{$product->id}}/productdetails"> <img
                                                        src="storage\{{($product->image)[0]->product_image }}"
                                                        alt="image"></a>


                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <!-- <a href="#" class="function-link">quick view</a> -->
                                                    <a href="/{{$product->id}}/productdetails"
                                                        class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name" ><span style="color: black;">{{ $product->product_name}}</span></a>
                                                <div class="wrap-price"><span class="product-price">Rs
                                                        {{ $product->product_price }}/-</span></div>
                                                <div>
                                                    @if ( $role == 'user')
                                                    <form action="/add_to_cart" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="products_id"
                                                            value="{{$product->id}}">
                                                        <button class="btn btn-primary">Add to Cart</button>
                                                    </form>

                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>

                                <!--smartphones-->
                                <div class="tab-content-item" id="fashion_1a">
                                    <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                        data-items="5" data-loop="false" data-nav="true" data-dots="false"
                                        data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>
                                        @foreach($smartphones as $smartphone)
                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="/{{$product->id}}/productdetails"
                                                    title="{{ $product->product_description}}">
                                                    <figure>
                                                        <img src="storage\{{($smartphone->image)[0]->product_image }}"
                                                            alt="image">
                                                    </figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <!-- <a href="#" class="function-link">quick view</a> -->
                                                    <a href="/{{$smartphone->id}}/productdetails"
                                                        class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#"
                                                    class="product-name"><span  style="color: black;">{{$smartphone->product_name}}</span></a>
                                                <div class="wrap-price"><span class="product-price">Rs
                                                        {{$smartphone->product_price}}/-</span></div>
                                            </div>
                                            <div>
                                                @if ( $role == 'user')
                                                <form action="/add_to_cart" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="products_id" value="{{$smartphone->id}}">
                                                    <button class="btn btn-primary">Add to Cart</button>
                                                </form>
                                                @endif
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="tab-content-item" id="fashion_1b">
                                    <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container "
                                        data-items="5" data-loop="false" data-nav="true" data-dots="false"
                                        data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>
                                        @foreach($washingmachines as $washingmachine)

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="/{{$product->id}}/productdetails"
                                                    title="{{ $product->product_description}}">
                                                    <figure>
                                                        <img src="storage\{{($washingmachine->image)[0]->product_image }}"
                                                            alt="image">
                                                    </figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item bestseller-label">Bestseller</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <!-- <a href="#" class="function-link">quick view</a> -->
                                                    <a href="/{{$washingmachine->id}}/productdetails"
                                                        class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#"
                                                    class="product-name"><span  style="color: black;">{{ $washingmachine->product_name}}</span></a>
                                                <div class="wrap-price"><span class="product-price">Rs 250.00/-</span>
                                                </div>
                                                <div>
                                                    @if ( $role == 'user')
                                                    <form action="/add_to_cart" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="products_id"
                                                            value="{{$washingmachine->id}}">
                                                        <button class="btn btn-primary">Add to Cart</button>
                                                    </form>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="tab-content-item" id="fashion_1c">
                                    <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                        data-items="5" data-loop="false" data-nav="true" data-dots="false"
                                        data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>
                                        @foreach($laptops as $laptop)
                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="/{{$product->id}}/productdetails"
                                                    title="{{ $product->product_description}}">
                                                    <figure>
                                                        <img src="storage\{{($laptop->image)[0]->product_image }}"
                                                            alt="image">
                                                    </figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <!-- <a href="#" class="function-link">quick view</a> -->
                                                    <a href="/{{$laptop->id}}/productdetails"
                                                        class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#"
                                                    class="product-name"><span  style="color: black;">{{ $laptop->product_name }}</span></a>
                                                <div class="wrap-price"><span class="product-price">Rs
                                                        {{ $laptop->product_price }}/-</span></div>
                                            </div>
                                            <div>
                                                @if ( $role == 'user')
                                                <form action="/add_to_cart" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="products_id" value="{{$laptop->id}}">
                                                    <button class="btn btn-primary">Add to Cart</button>
                                                </form>
                                                @endif
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="tab-content-item" id="fashion_1d">
                                    <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                        data-items="5" data-loop="false" data-nav="true" data-dots="false"
                                        data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>
                                        @foreach($cameras as $camera)
                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="/{{$product->id}}/productdetails"
                                                    title="{{ $product->product_description}}">
                                                    <figure>
                                                        <img src="storage\{{($camera->image)[0]->product_image }}"
                                                            alt="image">
                                                    </figure>
                                                </a>

                                                <div class="wrap-btn">
                                                    <!-- <a href="#" class="function-link">quick view</a> -->
                                                    <a href="/{{$camera->id}}/productdetails"
                                                        class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="/{{$camera->id}}/productdetails"
                                                    class="product-name"><span  style="color: black;">{{ $camera->product_name}}</span></a>
                                                <div class="product-rating">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                                <div class="wrap-price"><span class="product-price">Rs
                                                        {{ $camera->product_price }}/-</span></div>
                                                <div>
                                                    @if ( $role == 'user')
                                                    <form action="/add_to_cart" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="products_id" value="{{$camera->id}}">
                                                        <button class="btn btn-primary">Add to Cart</button>
                                                    </form>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

    </main>

    <footer id="footer" style="background-color: #f3b73e;">
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
                                                <li class="menu-item"><a href="{{ url('/contactus') }}" class="link-term">Contact Us</a></li>
                                                <li class="menu-item"><a href="#" class="link-term">Returns</a></li>
                                                <li class="menu-item"><a href="#" class="link-term">Site Map</a></li>
                                                <li class="menu-item"><a href="#" class="link-term">Specials</a></li>
                                                <li class="menu-item"><a href="{{ url('/cartlist') }}" class="link-term">Order History</a>
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
                                            <li><a href="#" class="link-to-item" title="our application on apple store">
                                                    <figure><img src="images/brands/apple-store.png" alt="apple store"
                                                            width="128" height="36"></figure>
                                                </a></li>
                                            <li><a href="#" class="link-to-item"
                                                    title="our application on google play store">
                                                    <figure><img src="images/brands/google-play-store.png"
                                                            alt="google play store" width="128" height="36"></figure>
                                                </a></li>
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
                        <p class="coppy-right-text">Copyright © 2020 Csk | E-store. All rights reserved</p>
                    </div>
                    <div class="coppy-right-item item-right">
                        <div class="wrap-nav horizontal-nav">
                            <ul>
                                <li class="menu-item"><a href="{{ url('/aboutus') }}" class="link-term">About us</a></li>
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