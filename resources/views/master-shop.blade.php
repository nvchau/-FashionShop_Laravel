<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>C - Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{url('shop/css/animate.css')}}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{url('shop/css/icomoon.css')}}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{url('shop/css/bootstrap.css')}}">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{url('shop/css/magnific-popup.css')}}">

    <!-- Flexslider  -->
    <link rel="stylesheet" href="{{url('shop/css/flexslider.css')}}">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{url('shop/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('shop/css/owl.theme.default.min.css')}}">

    <!-- Date Picker -->
    <link rel="stylesheet" href="{{url('shop/css/bootstrap-datepicker.css')}}">
    <!-- Flaticons  -->
    <link rel="stylesheet" href="{{url('shop/fonts/flaticon/font/flaticon.css')}}">

    <!-- Theme style  -->
    <link rel="stylesheet" href="{{url('shop/css/style.css')}}">

    <!-- Modernizr JS -->
    <script src="{{url('shop/js/modernizr-2.6.2.min.js')}}"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="{{url('shop/js/respond.min.js')}}"></script>
    <![endif]-->

    {{--link icon--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="colorlib-loader"></div>

<div id="page">
    <nav class="colorlib-nav" role="navigation">
        <div class="top-menu">
            <div class="container">
                <div class="row">
                    <div class="col-xs-2">
                        <div id="colorlib-logo"><a href="{{route('home')}}">C - Store</a></div>
                    </div>
                    <div class="col-xs-10 text-right menu-1">
                        <ul>
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li class="has-dropdown">
                                <a href="{{route('shop')}}">Shop</a>
                                {{--<ul class="dropdown">--}}
                                    {{--<li><a href="{{route('product-detail')}}">Product Detail</a></li>--}}
                                    {{--<li><a href="{{route('cart')}}">Shipping Cart</a></li>--}}
                                    {{--<li><a href="{{route('checkout')}}">Checkout</a></li>--}}
                                    {{--<li><a href="{{route('order-complete')}}">Order Complete</a></li>--}}
                                    {{--<li><a href="{{route('wishlist')}}">Wishlist</a></li>--}}
                                {{--</ul>--}}
                            </li>
                            <li><a href="{{route('blog')}}">Blog</a></li>
                            <li><a href="{{route('about')}}">About</a></li>
                            <li><a href="{{route('contact')}}">Contact</a></li>
                            <li><a href="{{route('cart')}}"><i class="icon-shopping-cart"></i> Cart [@if(Session::has('cart')){{Session('cart')->totalQty}} @else 0 @endif]</a></li>
                            <li><a href="{{route('Login')}}">Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')

    <div id="colorlib-subscribe">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="col-md-6 text-center">
                        <h2><i class="icon-paperplane"></i>Sign Up for a Newsletter</h2>
                    </div>
                    <div class="col-md-6">
                        <form class="form-inline qbstp-header-subscribe">
                            <div class="row">
                                <div class="col-md-12 col-md-offset-0">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="email" placeholder="Enter your email">
                                        <button type="submit" class="btn btn-primary">Subscribe</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer id="colorlib-footer" role="contentinfo">
        <div class="container">
            <div class="row row-pb-md">
                <div class="col-md-3 colorlib-widget">
                    <h4>About Store</h4>
                    <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
                    <p>
                    <ul class="colorlib-social-icons">
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-linkedin"></i></a></li>
                        <li><a href="#"><i class="icon-dribbble"></i></a></li>
                    </ul>
                    </p>
                </div>
                <div class="col-md-2 colorlib-widget">
                    <h4>Customer Care</h4>
                    <p>
                    <ul class="colorlib-footer-links">
                        <li><a href="{{route('blog')}}">Contact</a></li>
                        {{--<li><a href="#">Returns/Exchange</a></li>--}}
                        {{--<li><a href="#">Gift Voucher</a></li>--}}
                        {{--<li><a href="#">Wishlist</a></li>--}}
                        {{--<li><a href="#">Special</a></li>--}}
                        {{--<li><a href="#">Customer Services</a></li>--}}
                        {{--<li><a href="#">Site maps</a></li>--}}
                    </ul>
                    </p>
                </div>
                <div class="col-md-2 colorlib-widget">
                    <h4>Information</h4>
                    <p>
                    <ul class="colorlib-footer-links">
                        <li><a href="{{route('about')}}">About us</a></li>
                        {{--<li><a href="#">Delivery Information</a></li>--}}
                        {{--<li><a href="#">Privacy Policy</a></li>--}}
                        {{--<li><a href="#">Support</a></li>--}}
                        {{--<li><a href="#">Order Tracking</a></li>--}}
                    </ul>
                    </p>
                </div>

                <div class="col-md-2">
                    <h4>News</h4>
                    <ul class="colorlib-footer-links">
                        <li><a href="{{route('blog')}}">Blog</a></li>
                        {{--<li><a href="#">Press</a></li>--}}
                        {{--<li><a href="#">Exhibitions</a></li>--}}
                    </ul>
                </div>

                <div class="col-md-3">
                    <h4>Contact Information</h4>
                    <ul class="colorlib-footer-links">
                        <li>32 Nguyễn Tạo Street, <br> Hòa Hải - Nghũ Hành Sơn - Đà Nẵng</li>
                        <li><a href="tel://1234567920">+84961 528 533</a></li>
                        <li><a href="mailto:info@yoursite.com">nvchau.17it3@sict.udn.vn</a></li>
                        <li><a href="#">nvchau.com</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </footer>
</div>


<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
</div>

<!-- jQuery -->
<script src="{{url('shop/js/jquery.min.js')}}"></script>
<!-- jQuery Easing -->
<script src="{{url('shop/js/jquery.easing.1.3.js')}}"></script>
<!-- Bootstrap -->
<script src="{{url('shop/js/bootstrap.min.js')}}"></script>
<!-- Waypoints -->
<script src="{{url('shop/js/jquery.waypoints.min.js')}}"></script>
<!-- Flexslider -->
<script src="{{url('shop/js/jquery.flexslider-min.js')}}"></script>
<!-- Owl carousel -->
<script src="{{url('shop/js/owl.carousel.min.js')}}"></script>
<!-- Magnific Popup -->
<script src="{{url('shop/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{url('shop/js/magnific-popup-options.js')}}"></script>
<!-- Date Picker -->
<script src="{{url('shop/js/bootstrap-datepicker.js')}}"></script>
<!-- Stellar Parallax -->
<script src="{{url('shop/js/jquery.stellar.min.js')}}"></script>
<!-- Main -->
<script src="{{url('shop/js/main.js')}}"></script>

</body>
</html>

