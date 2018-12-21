@extends('master-shop')
@section('content')

<aside id="colorlib-hero">
    <div class="flexslider">
        <ul class="slides">
            @foreach($slide as $value)
                <li style="background-image: url({{$value -> linkAnh}});">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-2 col-sm-12 col-xs-12 slider-text">
                                <div class="slider-text-inner">
                                    <div class="desc">
                                        <h1 class="head-1">{{$value -> tieuDe1}}</h1>
                                        <h2 class="head-2">{{$value -> tieuDe2}}</h2>
                                        <h2 class="head-3">{{$value -> tieuDe3}}</h2>
                                        <p class="category"><span>{{$value -> moTa}}</span></p>
                                        <p><a href="{{$value -> buttonLink}}" class="btn btn-primary">{{$value -> buttonText}}</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</aside>

<div id="colorlib-featured-product">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <a href="{{route('shop')}}" class="f-product-1" style="background-image: url('shop/images/item-1.jpg');">
                    <div class="desc">
                        <h2>Fahion <br>for <br>men</h2>
                    </div>
                </a>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <a href="{{route('shop')}}" class="f-product-2" style="background-image: url('shop/images/item-2.jpg');">
                            <div class="desc">
                                <h2>New <br>Arrival <br>Dress</h2>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('shop')}}" class="f-product-2" style="background-image: url('shop/images/item-4.jpg');">
                            <div class="desc">
                                <h2>Sale <br>20% <br>off</h2>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-12">
                        <a href="{{route('shop')}}" class="f-product-2" style="background-image: url('shop/images/item-3.jpg');">
                            <div class="desc">
                                <h2>Shoes <br>for <br>men</h2>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="colorlib-shop">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
                <h2><span>New Arrival</span></h2>
                <p>The latest products in the month.</p>
            </div>
        </div>
        <div class="row">
            @foreach($product as $item)
                <div class="col-md-3 text-center">
                    <div class="product-entry">
                        <a href="{!! URL::route('product-detail',$item['id']) !!}">
                            <div class="product-img" style="background-image: url('{{asset($item -> linkAnh)}}');">
                                <p class="tag"><span class="new">New</span></p>
                                {{--<div class="cart">--}}
                                {{--<p>--}}
                                {{--<span class="addtocart"><a href="{{route('cart')}}"><i class="icon-shopping-cart"></i></a></span>--}}
                                {{--<span><a href="{!! URL::route('product-detail',$item['id']) !!}"><i class="icon-eye"></i></a></span>--}}
                                {{--<span><a href="#"><i class="icon-heart3"></i></a></span>--}}
                                {{--<span><a href="{{route('wishlist')}}"><i class="icon-bar-chart"></i></a></span>--}}
                                {{--</p>--}}
                                {{--</div>--}}
                            </div>
                        </a>
                        <div class="desc">
                            <h3><a href="{!! URL::route('product-detail',$item['id']) !!}">{{$item -> ten}}</a></h3>
                            <p class="price"><span>${{$item -> gia}}</span></p>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="text-rights">
                <p style="text-align: center;"><a href="{{route('shop')}}" class="btn btn-primary btn-outline">More</a></p>
            </div>
        </div>
    </div>
</div>
<div id="colorlib-intro" class="colorlib-intro" style="background-image: url('shop/images/cover-img-1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="intro-desc">
                    <div class="text-salebox">
                        <div class="text-lefts">
                            <div class="sale-box">
                                <div class="sale-box-top">
                                    <h2 class="number">45</h2>
                                    <span class="sup-1">%</span>
                                    <span class="sup-2">Off</span>
                                </div>
                                <h2 class="text-sale">Sale</h2>
                            </div>
                        </div>
                        <div class="text-rights">
                            <h3 class="title">Just hurry up limited offer!</h3>
                            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                            <p><a href="{{route('shop')}}" class="btn btn-primary">Shop Now</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="colorlib-testimony" class="colorlib-light-grey">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
                <h2><span>Our Satisfied Customer says</span></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="owl-carousel2">
                    <div class="item">
                        <div class="testimony text-center">
                            <span class="img-user" style="background-image: url('{{asset('shop/images/person1.jpg')}}');"></span>
                            <span class="user">Alysha Myers</span>
                            <small>Miami Florida, USA</small>
                            <blockquote>
                                <p>" A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                            </blockquote>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony text-center">
                            <span class="img-user" style="background-image: url('{{asset('shop/images/person2.jpg')}}');"></span>
                            <span class="user">James Fisher</span>
                            <small>New York, USA</small>
                            <blockquote>
                                <p>One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                            </blockquote>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony text-center">
                            <span class="img-user" style="background-image: url('{{asset('shop/images/person3.jpg')}}');"></span>
                            <span class="user">Jacob Webb</span>
                            <small>Athens, Greece</small>
                            <blockquote>
                                <p>Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="colorlib-blog">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center colorlib-heading">
                <h2>Recent Blog</h2>
                <p>Our recent highlights</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <article class="article-entry">
                    <a href="{{route('blog')}}" class="blog-img" style="background-image: url('shop/images/blog-1.jpg');"></a>
                    <div class="desc">
                        <p class="meta"><span class="day">02</span><span class="month">Mar</span></p>
                        <p class="admin"><span>Posted by:</span> <span>Noah Henderson</span></p>
                        <h2><a href="{{route('blog')}}">Openning Branches</a></h2>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
                    </div>
                </article>
            </div>
            <div class="col-md-4">
                <article class="article-entry">
                    <a href="{{route('blog')}}" class="blog-img" style="background-image: url('shop/images/blog-2.jpg');"></a>
                    <div class="desc">
                        <p class="meta"><span class="day">02</span><span class="month">Mar</span></p>
                        <p class="admin"><span>Posted by:</span> <span>Noah Henderson</span></p>
                        <h2><a href="{{route('blog')}}">Openning Branches</a></h2>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
                    </div>
                </article>
            </div>
            <div class="col-md-4">
                <article class="article-entry">
                    <a href="{{route('blog')}}" class="blog-img" style="background-image: url('shop/images/blog-3.jpg');"></a>
                    <div class="desc">
                        <p class="meta"><span class="day">02</span><span class="month">Mar</span></p>
                        <p class="admin"><span>Posted by:</span> <span>Noah Henderson</span></p>
                        <h2><a href="{{route('blog')}}">Openning Branches</a></h2>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
                    </div>
                </article>
            </div>
        </div>
    </div>
</div>

<div id="staff" class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
            <h2><span>FOUNDER</span></h2>
        </div>
    </div>
    <div class="item">
        <div class="testimony text-center">
            <span class="img-user" style="background-image: url('{{asset('shop/images/photo.jpg')}}');"></span>
            <span class="user">Nguyễn Văn Châu</span>
            <small>Đà Nẵng - Việt Nam</small>
            <blockquote>
                <p>KHOA CÔNG NGHỆ THÔNG TIN & TRUYỀN THÔNG - ĐẠI HỌC ĐÀ NẴNG</p>
            </blockquote>
        </div>
    </div>
</div>

@endsection
