@extends('master-shop')
@section('content')
    <aside id="colorlib-hero" class="breadcrumbs">
        <div class="flexslider">
            <ul class="slides">
                <li style="background-image: url('{{asset('/shop/images/cover-img-1.jpg')}}');">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                                <div class="slider-text-inner text-center">
                                    <h1>Checkout</h1>
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
            <div class="colorlib-shop">
                <div class="container">
                    <div class="row row-pb-md">
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
                                <div class="process text-center">
                                    <p><span>03</span></p>
                                    <h3>Order Complete</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form action="{{route('submitcheckout')}}" method="POST" class="colorlib-form">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-7">
                                    <h2>Billing Details</h2>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label for="c_fname">Full Name</label>
                                                <input type="text" id="c_fname" name="c_fname" class="form-control" placeholder="Your fullname">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="c_address">Address</label>
                                                <input type="text" id="c_address" name="c_address" class="form-control" placeholder="Enter Your Address">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label for="c_email_address">E-mail Address</label>
                                                <input type="text" id="c_email_address" name="c_email_address" class="form-control" placeholder="State Province">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="c_phone">Phone Number</label>
                                                <input type="text" id="c_phone" name="c_phone" class="form-control" placeholder="Phone Number">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="c_order_notes" class="text-black">Order Notes</label>
                                                <textarea name="c_order_notes" id="c_order_notes" cols="30" rows="5" class="form-control" placeholder="Write your notes here..."></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <div class="radio">
                                                    <label><input type="radio" name="optradio">Create an Account? </label>
                                                    <label><input type="radio" name="optradio"> Ship to different address</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-md-5">
                                <div class="cart-detail">
                                    @if(Session::has('cart'))
                                        <h2>Cart Total</h2>
                                        <ul>
                                            <li>
                                                <span style="font-weight: bold;">Subtotal</span> <span style="font-weight: bold;">Cost</span>
                                                <ul>
                                                    @foreach($products_cart as $product_details)
                                                        <li><span>{{$product_details['item']['ten']}}{{Session::get('cart')->products_cart}}<strong class="mx-2"> X </strong>{{$product_details['qty']}}</span> <span>$ {{$product_details['item']['gia']}}</span></li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                            <li><span>Shipping</span> <span>$@if($shipping = Session::get('cart')->totalPrice > 300) 0 @else {{$shipping = 20}} @endif</span></li>
                                            <li><span style="font-weight: bold;">Order Total</span> <span style="font-weight: bold; color: #FFC300;">$ {{Session::get('cart')->totalPrice + $shipping}}</span></li>
                                        </ul>
                                    @endif
                                </div>
                                <div class="cart-detail">
                                    <h2>Payment Method</h2>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="radio">
                                                <label><input type="radio" name="optradio">Direct Bank Tranfer</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="radio">
                                                <label><input type="radio" name="optradio">Check Payment</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="radio">
                                                <label><input type="radio" name="optradio">Paypal</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                                <label><input type="checkbox" value="">I have read and accept the terms and conditions</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="submit" name="submit" onclick="window.location='{{route('ordercomplete')}}'" class="btn btn-primary">Place an order</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
