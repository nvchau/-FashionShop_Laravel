@extends('master-admin')
@section('content')
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-12">
                    <div class="row" style="width: 100%;">
                        <a style="margin: 20px auto; width: 200px; border-radius: 200px" href="{{route('addproduct')}}" class="btn btn-danger">ADD PRODUCT</a>
                    </div>
                    {{--<div class="row">--}}
                        {{--@foreach($product as $item)--}}
                            {{--<div class="col-xl-3 col-lg-6 col-md-12 col-sm-12 col-12">--}}
                                {{--<div class="product-thumbnail">--}}
                                    {{--<div class="product-img-head">--}}
                                        {{--<div class="product-img">--}}
                                            {{--<img style="width: 300px; height: 300px;" src="{{url($item -> linkAnh)}}" alt="" class="img-fluid">--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="product-content">--}}
                                        {{--<div class="product-content-head">--}}
                                            {{--<h3 class="product-title">{{$item -> ten}}</h3>--}}
                                            {{--<div class="product-rating d-inline-block">--}}
                                            {{--<i class="fa fa-fw fa-star"></i>--}}
                                            {{--<i class="fa fa-fw fa-star"></i>--}}
                                            {{--<i class="fa fa-fw fa-star"></i>--}}
                                            {{--<i class="fa fa-fw fa-star"></i>--}}
                                            {{--<i class="fa fa-fw fa-star"></i>--}}
                                            {{--</div>--}}
                                            {{--<div class="product-price">{{str_limit($item->gia,20)}}--}}
                                                {{--<del class="product-del">$69.00</del>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="product-btn">--}}
                                            {{--<a href="#" class="btn btn-primary">Edit Product</a>--}}
                                            {{--<form action="">--}}
                                                {{--<button href="#" class="btn btn-outline-danger">Delete</button>--}}
                                            {{--</form>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--@endforeach--}}
                        {{--<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">--}}
                            {{--<nav aria-label="Page navigation example">--}}
                                {{--<ul class="pagination">--}}
                                    {{--<li class="page-item"><a class="page-link" href="#">Previous</a></li>--}}
                                    {{--<li class="page-item active"><a class="page-link" href="#">1</a></li>--}}
                                    {{--<li class="page-item"><a class="page-link" href="#">2</a></li>--}}
                                    {{--<li class="page-item"><a class="page-link" href="#">3</a></li>--}}
                                    {{--<li class="page-item"><a class="page-link" href="#">Next</a></li>--}}
                                {{--</ul>--}}
                            {{--</nav>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    <div class="row">
                        <table>
                            <table class="table table-inverse">
                                <thread>
                                <tr>
                                    <th>ID</th>
                                    <th>TYPE-PRODUCT ID</th>
                                    <th>IMAGES</th>
                                    <th>NAME</th>
                                    <th>PRICE</th>
                                    <th>DESCRIBE</th>
                                </tr>
                                @foreach($product as $item)
                                    <tr>
                                        <td>{{$item -> id}}</td>
                                        <td style="width: 200px">{{$item ->  id_type}}</td>
                                        <td><img style="width: 100px; height: 100px; border-radius: 10px" src="{{url($item -> linkAnh)}}" alt="" class="img-fluid"></td>
                                        <td>{{$item -> ten}}</td>
                                        <td>{{$item -> gia}}</td>
                                        <td>{{$item -> moTa}}</td>
                                        <td style="width: 100px">
                                            <a style="border-radius: 200px" href="{!! URL::route('editproduct',$item['id']) !!}" class="btn btn-outline-primary">Edit Product</a>
                                        </td>
                                        <td style="width: 100px">
                                            <a style="border-radius: 200px" href="{!! URL::route('postDeleteProduct',$item['id']) !!}" class="btn btn-dark">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </thread>
                            </table>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
