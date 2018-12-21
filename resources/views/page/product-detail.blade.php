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
                                    <h1>Product Detail</h1>
                                    <h2 class="bread"><span><a href="{{route('home')}}">Home</a></span> <span><a href="{{route('shop')}}">Product</a></span> <span>Product Detail</span></h2>
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
                    <div class="row row-pb-lg">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="product-detail-wrap">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="product-entry">
                                            <div class="product-img" style="background-image: url({{url($productDetails -> linkAnh)}})">
                                                <p class="tag"><span class="sale">Sale</span></p>
                                            </div>
                                            {{--<div class="thumb-nail">--}}
                                                {{--<a href="#" class="thumb-img" style="background-image: url('{{asset('shop/images/item-11.jpg')}}');"></a>--}}
                                                {{--<a href="#" class="thumb-img" style="background-image: url('{{asset('shop/images/item-12.jpg')}}');"></a>--}}
                                                {{--<a href="#" class="thumb-img" style="background-image: url('{{asset('shop/images/item-16.jpg')}}');"></a>--}}
                                            {{--</div>--}}
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="desc">
                                            <h3>{{ $productDetails -> ten }}</h3>
                                            <p class="price">
                                                <span>${{ $productDetails -> gia }}</span>
                                                <span class="rate text-right">
                                                        <i class="icon-star-full"></i>
                                                        <i class="icon-star-full"></i>
                                                        <i class="icon-star-full"></i>
                                                        <i class="icon-star-full"></i>
                                                        <i class="icon-star-half"></i>
                                                        (74 Rating)
                                                    </span>
                                            </p>
                                            <p></p>
                                            <div class="color-wrap">
                                                <p class="color-desc">
                                                    Color:
                                                    <a href="#" class="color color-1"></a>
                                                    <a href="#" class="color color-2"></a>
                                                    <a href="#" class="color color-3"></a>
                                                    <a href="#" class="color color-4"></a>
                                                    <a href="#" class="color color-5"></a>
                                                </p>
                                            </div>
                                            <div class="size-wrap">
                                                <p class="size-desc">
                                                    Size:
                                                    <a href="#" class="size size-1">xs</a>
                                                    <a href="#" class="size size-2">s</a>
                                                    <a href="#" class="size size-3">m</a>
                                                    <a href="#" class="size size-4">l</a>
                                                    <a href="#" class="size size-5">xl</a>
                                                    <a href="#" class="size size-5">xxl</a>
                                                    {{--<select style="height: 30px" id="attr-size" class="" name="attrValue" value="size">--}}
                                                        {{--<option class="attr-size-deselected-js" value="Select Size" selected>Select Size</option>--}}
                                                        {{--<option data-attribute-value="3.5 Boys = 5.0 Women" value="3.5 Boys = 5.0 Women" >3.5 Boys = 5.0 Women</option>--}}
                                                        {{--<option data-attribute-value="4.0 Boys = 5.5 Women" value="4.0 Boys = 5.5 Women" >4.0 Boys = 5.5 Women</option>--}}
                                                        {{--<option data-attribute-value="4.5 Boys = 6.0 Women" value="4.5 Boys = 6.0 Women" >4.5 Boys = 6.0 Women</option>--}}
                                                        {{--<option data-attribute-value="5.0 Boys = 6.5 Women" value="5.0 Boys = 6.5 Women" >5.0 Boys = 6.5 Women</option>--}}
                                                        {{--<option data-attribute-value="5.5 Boys = 7.0 Women" value="5.5 Boys = 7.0 Women" >5.5 Boys = 7.0 Women</option>--}}
                                                        {{--<option data-attribute-value="6.0 Boys = 7.5 Women" value="6.0 Boys = 7.5 Women" >6.0 Boys = 7.5 Women</option>--}}
                                                        {{--<option data-attribute-value="6.5 Men = 8.0 Women" value="6.5 Men = 8.0 Women" >6.5 Men = 8.0 Women</option>--}}
                                                        {{--<option data-attribute-value="7.0 Men = 8.5 Women" value="7.0 Men = 8.5 Women" >7.0 Men = 8.5 Women</option>--}}
                                                        {{--<option data-attribute-value="7.5 Men = 9.0 Women" value="7.5 Men = 9.0 Women" >7.5 Men = 9.0 Women</option>--}}
                                                        {{--<option data-attribute-value="8.0 Men = 9.5 Women" value="8.0 Men = 9.5 Women" >8.0 Men = 9.5 Women</option>--}}
                                                        {{--<option data-attribute-value="8.5 Men = 10.0 Women" value="8.5 Men = 10.0 Women" >8.5 Men = 10.0 Women</option>--}}
                                                        {{--<option data-attribute-value="9.0 Men = 10.5 Women" value="9.0 Men = 10.5 Women" >9.0 Men = 10.5 Women</option>--}}
                                                        {{--<option data-attribute-value="9.5 Men = 11.0 Women" value="9.5 Men = 11.0 Women" >9.5 Men = 11.0 Women</option>--}}
                                                        {{--<option data-attribute-value="10.0 Men = 11.5 Women" value="10.0 Men = 11.5 Women" >10.0 Men = 11.5 Women</option>--}}
                                                        {{--<option data-attribute-value="10.5 Men = 12.0 Women" value="10.5 Men = 12.0 Women" >10.5 Men = 12.0 Women</option>--}}
                                                        {{--<option data-attribute-value="11.0 Men = 12.5 Women" value="11.0 Men = 12.5 Women" >11.0 Men = 12.5 Women</option>--}}
                                                        {{--<option data-attribute-value="11.5 Men = 13.0 Women" value="11.5 Men = 13.0 Women" >11.5 Men = 13.0 Women</option>--}}
                                                        {{--<option data-attribute-value="12.0 Men = 13.5 Women" value="12.0 Men = 13.5 Women" >12.0 Men = 13.5 Women</option>--}}
                                                        {{--<option data-attribute-value="13.0 Men = 14.5 Women" value="13.0 Men = 14.5 Women" >13.0 Men = 14.5 Women</option>--}}
                                                    {{--</select>--}}
                                                </p>
                                            </div>
                                            <div class="row row-pb-sm">
                                                <div class="col-md-4">
                                                    <form action="" method="post">
                                                        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                                                        <div>
                                                            <label for="">QUANTITY:</label>
                                                            <input style="width: 70px; height: 30px; text-align: center;" type="text" class="" value="1">
                                                        </div>
                                                        {{--<div class="input-group">--}}
                                                            {{--<span class="input-group-btn">--}}
                                                            {{--<button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">--}}
                                                                {{--<i class="icon-minus2"></i>--}}
                                                            {{--</button>--}}
                                                            {{--</span>--}}
                                                            {{--<input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">--}}
                                                            {{--<span class="input-group-btn">--}}
                                                            {{--<button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">--}}
                                                                {{--<i class="icon-plus2"></i>--}}
                                                            {{--</button>--}}
                                                            {{--</span>--}}
                                                        {{--</div>--}}
                                                    </form>
                                                </div>
                                            </div>
                                            <p><a href="{{route('addtocart',$productDetails->id)}}" class="btn btn-primary btn-addtocart add"><i class="icon-shopping-cart"></i> Add to Cart</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="row">
                                <div class="col-md-12 tabulation">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#description">Description</a></li>
                                        <li><a data-toggle="tab" href="#manufacturer">Manufacturer</a></li>
                                        <li><a data-toggle="tab" href="#review">Reviews</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="description" class="tab-pane fade in active">
                                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                                            <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                                            <ul>
                                                <li>The Big Oxmox advised her not to do so</li>
                                                <li>Because there were thousands of bad Commas</li>
                                                <li>Wild Question Marks and devious Semikoli</li>
                                                <li>She packed her seven versalia</li>
                                                <li>tial into the belt and made herself on the way.</li>
                                            </ul>
                                        </div>
                                        <div id="manufacturer" class="tab-pane fade">
                                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                                            <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>

                                        </div>
                                        <div id="review" class="tab-pane fade">
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <h3>23 Reviews</h3>
                                                    <div class="review">
                                                        <div class="user-img" style="background-image: url('{{asset('shop/images/person1.jpg')}}')"></div>
                                                        <div class="desc">
                                                            <h4>
                                                                <span class="text-left">Jacob Webb</span>
                                                                <span class="text-right">14 March 2018</span>
                                                            </h4>
                                                            <p class="star">
                                                                <span>
                                                                    <i class="icon-star-full"></i>
                                                                    <i class="icon-star-full"></i>
                                                                    <i class="icon-star-full"></i>
                                                                    <i class="icon-star-half"></i>
                                                                    <i class="icon-star-empty"></i>
                                                                </span>
                                                                <span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
                                                            </p>
                                                            <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
                                                        </div>
                                                    </div>
                                                    <div class="review">
                                                        <div class="user-img" style="background-image: url('{{asset('shop/images/person2.jpg')}}')"></div>
                                                        <div class="desc">
                                                            <h4>
                                                                <span class="text-left">Jacob Webb</span>
                                                                <span class="text-right">14 March 2018</span>
                                                            </h4>
                                                            <p class="star">
                                                                <span>
                                                                    <i class="icon-star-full"></i>
                                                                    <i class="icon-star-full"></i>
                                                                    <i class="icon-star-full"></i>
                                                                    <i class="icon-star-half"></i>
                                                                    <i class="icon-star-empty"></i>
                                                                </span>
                                                                <span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
                                                            </p>
                                                            <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
                                                        </div>
                                                    </div>
                                                    <div class="review">
                                                        <div class="user-img" style="background-image: url('{{asset('shop/images/person3.jpg')}}')"></div>
                                                        <div class="desc">
                                                            <h4>
                                                                <span class="text-left">Jacob Webb</span>
                                                                <span class="text-right">14 March 2018</span>
                                                            </h4>
                                                            <p class="star">
                                                                <span>
                                                                    <i class="icon-star-full"></i>
                                                                    <i class="icon-star-full"></i>
                                                                    <i class="icon-star-full"></i>
                                                                    <i class="icon-star-half"></i>
                                                                    <i class="icon-star-empty"></i>
                                                                </span>
                                                                <span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
                                                            </p>
                                                            <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-md-push-1">
                                                    <div class="rating-wrap">
                                                        <h3>Give a Review</h3>
                                                        <p class="star">
                                                            <span>
                                                                <i class="icon-star-full"></i>
                                                                <i class="icon-star-full"></i>
                                                                <i class="icon-star-full"></i>
                                                                <i class="icon-star-full"></i>
                                                                <i class="icon-star-full"></i>
                                                                (98%)
                                                            </span>
                                                            <span>20 Reviews</span>
                                                        </p>
                                                        <p class="star">
                                                            <span>
                                                                <i class="icon-star-full"></i>
                                                                <i class="icon-star-full"></i>
                                                                <i class="icon-star-full"></i>
                                                                <i class="icon-star-full"></i>
                                                                <i class="icon-star-empty"></i>
                                                                (85%)
                                                            </span>
                                                            <span>10 Reviews</span>
                                                        </p>
                                                        <p class="star">
                                                            <span>
                                                                <i class="icon-star-full"></i>
                                                                <i class="icon-star-full"></i>
                                                                <i class="icon-star-full"></i>
                                                                <i class="icon-star-empty"></i>
                                                                <i class="icon-star-empty"></i>
                                                                (98%)
                                                            </span>
                                                            <span>5 Reviews</span>
                                                        </p>
                                                        <p class="star">
                                                            <span>
                                                                <i class="icon-star-full"></i>
                                                                <i class="icon-star-full"></i>
                                                                <i class="icon-star-empty"></i>
                                                                <i class="icon-star-empty"></i>
                                                                <i class="icon-star-empty"></i>
                                                                (98%)
                                                            </span>
                                                            <span>0 Reviews</span>
                                                        </p>
                                                        <p class="star">
                                                            <span>
                                                                <i class="icon-star-full"></i>
                                                                <i class="icon-star-empty"></i>
                                                                <i class="icon-star-empty"></i>
                                                                <i class="icon-star-empty"></i>
                                                                <i class="icon-star-empty"></i>
                                                                (98%)
                                                            </span>
                                                            <span>0 Reviews</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--<div class="colorlib-shop">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-6 col-md-offset-3 text-center colorlib-heading">--}}
                    {{--<h2><span>Similar Products</span></h2>--}}
                    {{--<p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row">--}}
                {{--@foreach($product as $item)--}}
                    {{--<div class="col-md-3 text-center">--}}
                        {{--<div class="product-entry">--}}
                            {{--<div class="product-img" style="background-image: url('{{asset($item -> linkAnh)}}');">--}}
                                {{--<p class="tag"><span class="new">New</span></p>--}}
                                {{--<div class="cart">--}}
                                    {{--<p>--}}
                                        {{--<span class="addtocart"><a href="{{route('cart')}}"><i class="icon-shopping-cart"></i></a></span>--}}
                                        {{--<span><a href="{{route('product-detail')}}"><i class="icon-eye"></i></a></span>--}}
                                        {{--<span><a href="#"><i class="icon-heart3"></i></a></span>--}}
                                        {{--<span><a href="{{route('wishlist')}}"><i class="icon-bar-chart"></i></a></span>--}}
                                    {{--</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="desc">--}}
                                {{--<h3><a href="{{route('shop')}}">{{$item -> ten}}</a></h3>--}}
                                {{--<p class="price"><span>{{$item -> gia}}</span></p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--@endforeach--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
@endsection
