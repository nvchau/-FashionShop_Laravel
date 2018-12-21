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
                                    <h1>Products</h1>
                                    <h2 class="bread"><span><a href="{{route('home')}}">Home</a></span> <span>Shop</span></h2>
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
            <div class="row">
                <div class="col-md-10 col-md-push-2">
                    <div class="row row-pb-lg">
                        @foreach($product as $item)
                            <div class="col-md-4 text-center">
                                <div class="product-entry">
                                    <a href="{!! URL::route('product-detail',$item['id']) !!}">
                                        <div class="product-img" style="background-image: url('{{asset($item -> linkAnh)}}');">
                                            {{--<p class="tag"><span class="new">New</span></p>--}}
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
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="pagination">
                                <li class="disabled"><a href="#">&laquo;</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">&raquo;</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 col-md-pull-10">
                    <div class="sidebar">
                        <div class="side">
                            <h2>Categories</h2>
                                <a class="dropdown-item" href="{{ route('shop') }}">ALL</a><br><br>
                            @foreach ($typeproduct as $type)
                                <a class="dropdown-item" href="{{ route('product',$type->id) }}">{{ $type -> ten }}</a><br><br>
                            @endforeach
                        </div>
                        <div class="side">
                            <h2>Price Range</h2>
                            <form method="post" class="colorlib-form-2">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="guests">Price from:</label>
                                            <div class="form-field">
                                                <i class="icon icon-arrow-down3"></i>
                                                <select name="people" id="people" class="form-control">
                                                    <option value="#">1</option>
                                                    <option value="#">200</option>
                                                    <option value="#">300</option>
                                                    <option value="#">400</option>
                                                    <option value="#">1000</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="guests">Price to:</label>
                                            <div class="form-field">
                                                <i class="icon icon-arrow-down3"></i>
                                                <select name="people" id="people" class="form-control">
                                                    <option value="#">2000</option>
                                                    <option value="#">4000</option>
                                                    <option value="#">6000</option>
                                                    <option value="#">8000</option>
                                                    <option value="#">10000</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="side">
                            <h2>Color</h2>
                            <div class="color-wrap">
                                <p class="color-desc">
                                    <a href="#" class="color color-1"></a>
                                    <a href="#" class="color color-2"></a>
                                    <a href="#" class="color color-3"></a>
                                    <a href="#" class="color color-4"></a>
                                    <a href="#" class="color color-5"></a>
                                </p>
                            </div>
                        </div>
                        <div class="side">
                            <h2>Size</h2>
                            <div class="size-wrap">
                                <p class="size-desc">
                                    <a href="#" class="size size-1">xs</a>
                                    <a href="#" class="size size-2">s</a>
                                    <a href="#" class="size size-3">m</a>
                                    <a href="#" class="size size-4">l</a>
                                    <a href="#" class="size size-5">xl</a>
                                    <a href="#" class="size size-5">xxl</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
