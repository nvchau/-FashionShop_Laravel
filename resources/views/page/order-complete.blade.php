@extends('master-shop')
@section('content')
    <aside id="colorlib-hero" class="breadcrumbs">
        <div class="flexslider">
            <ul class="slides">
                <li style="background-image: url('{{asset('shop/images/cover-img-1.jpg')}}');">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                                <div class="slider-text-inner text-center">
                                    <h1>Order Complete</h1>
                                    <h2 class="bread"><span><a href="{{route('home')}}">Home</a></span> <span><a href="{{route('cart')}}">Shopping Cart</a></span> <span>Checkout</span></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>
    <div class="colorlib-shop">
        <div class="container">
            <div class="row row-pb-lg">
                <div class="col-md-10 col-md-offset-1">
                    <div class="process-wrap">
                        <div class="process text-center active">
                            <p><span>01</span></p>
                            <h3>Shopping Cart</h3>
                        </div>
                        <div class="process text-center active">
                            <p><span>02</span></p>
                            <h3>Checkout</h3>
                        </div>
                        <div class="process text-center active">
                            <p><span>03</span></p>
                            <h3>Order Complete</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1 text-center">
                    <span class="icon"><i class="icon-shopping-cart"></i></span>
                    <h2>Thank you for purchasing, Your order is complete</h2>
                    <p>
                        <a href="{{route('home')}}"class="btn btn-primary">Home</a>
                        <a href="{{route('shop')}}"class="btn btn-primary btn-outline">Continue Shopping</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
