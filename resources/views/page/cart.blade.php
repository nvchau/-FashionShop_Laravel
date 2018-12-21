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
                                <h1>Shopping Cart</h1>
                                <h2 class="bread"><span><a href="{{route('home')}}">Home</a></span> <span><a href="{{route('shop')}}">Product</a></span> <span>Shopping Cart</span></h2>
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
        <div class="row row-pb-md">
            <div class="col-md-10 col-md-offset-1">
                <div class="process-wrap">
                    <div class="process text-center active">
                        <p><span>01</span></p>
                        <h3>Shopping Cart</h3>
                    </div>
                    <div class="process text-center">
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

            <div class="row row-pb-md">
                <div class="col-md-10 col-md-offset-1">
                    <div class="product-name">
                        <div class="one-forth text-center">
                            <span>Product Details</span>
                        </div>
                        <div class="one-eight text-center">
                            <span>Price</span>
                        </div>
                        <div class="one-eight text-center">
                            <span>Quantity</span>
                        </div>
                        <div class="one-eight text-center">
                            <span>Total</span>
                        </div>
                        <div class="one-eight text-center">
                            <span>Remove</span>
                        </div>
                    </div>

                    @if(Session::has('cart'))
                        {{--<form action="" method="post">--}}
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                        @foreach($products_cart as $product_details)
                        <div class="product-cart">
                            <div class="one-forth">
                                <div class="product-img" style="background-image: url({{url($product_details['item']['linkAnh'])}});">
                                </div>
                                <div class="display-tc">
                                    <h3>{{$product_details['item']['ten']}}</h3>
                                </div>
                            </div>
                            <div class="one-eight text-center">
                                <div class="display-tc">
                                    <span class="price">${{$product_details['item']['gia']}}</span>
                                </div>
                            </div>
                            <div class="one-eight text-center">
                                <div class="display-tc">
                                    <input type="text" id="quantity" name="quantity" class="form-control input-number text-center qty" value="{{$product_details['qty']}}" min="1" max="100">
                                </div>
                            </div>
                            <div class="one-eight text-center">
                                <div class="display-tc">
                                    <span class="price">${{$product_details['qty'] * $product_details['item']['gia']}}</span>
                                </div>
                            </div>
                            <div class="col-12 one-eight text-center">
                                <div class="display-tc">
                                    <div style="float: left;" class="col-6">
                                        <a href="#" id="{{$product_details['item']['id']}}" class="updatecart" title="Update cart"><i style="font-size:20px" class="fa">&#xf01e;</i></a>
                                    </div>
                                    <div class="col-6">
                                        <a href="{{route('deleteitem',$product_details['item']['id'])}}" class="closed" title="Delete product"></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach
                        {{--</form>--}}
                    @else
                        <div style="text-align: center">
                            <h4 style="color: #FFC300;">CART IS EMPTY!</h4>
                        </div>
                    @endif

                    {{--ajax load số tiền theo số sản phẩm--}}
                    <script language="javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
                    <script>
                        $(document).ready(function () {
                            $(".updatecart").click(function () {
                                var id    = $(this).attr('id');
                                var qty   = $(this).parent().parent().parent().parent().find('.qty').val();
                                var token = $("input[name='_token']").val();
                                // alert(id);
                                $.ajax({
                                    url:'update-cart/'+id+'/'+qty,
                                    type:'get',
                                    cache:false,
                                    data:{"_token":token,"id":id,"qty":qty},
                                    success: function (data) {
                                        if (data == "hihi") {
                                            alert('hihi');
                                            // window.location = "cart"
                                        }
                                    }
                                });
                                // console.log(data);
                            });
                        });
                    </script>
                </div>
            </div>

        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="total-wrap">
                    <div class="row">
                        <div class="col-md-8">
                            @if(Session::has('cart'))
                            <form action="">
                                <div class="row form-group">
                                    <div class="col-md-9">
                                        <input type="text" name="quantity" class="form-control input-number" placeholder="Your Coupon Number...">
                                    </div>
                                    <div class="col-md-3">
                                        <input type="submit" value="Apply Coupon" class="btn btn-primary btn-outline">
                                    </div>
                                </div>
                                <div style="text-align: center;">
                                    <a href="{{ route('checkout') }}"class="btn btn-primary">Checkout</a>
                                </div>
                            </form>
                            @endif
                        </div>
                        <div class="col-md-3 col-md-push-1 text-center">
                            <div class="total">
                                <div class="sub">
                                    <p><span>Subtotal:</span> <span>$@if(Session::has('cart')){{Session::get('cart')->totalPrice}} @else 0 @endif.00</span></p>
                                    <p><span>Delivery:</span> <span>$@if(Session::has('cart')) @if($shipping = Session::get('cart')->totalPrice > 300) 0 @else {{$shipping = 20}}  @endif @endif</span></p>
                                    <p><span>Discount:</span> <span>$0.00</span></p>
                                </div>
                                <div class="grand-total">
                                    <p><span><strong>Total:</strong></span> <span>$@if(Session::has('cart')){{Session::get('cart')->totalPrice + $shipping}} @endif</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
