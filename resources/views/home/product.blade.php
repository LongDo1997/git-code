@extends('master.home')
@section('title',$data['cat_product']->name)
@section('description', $data['cat_product']->meta_description)
@section('keywords', $data['cat_product']->meta_keyword)
@section('main')

<div class="page-title-area bg-11">
        <div class="container">
            <div class="page-title-content">
                <h2>{{$data['cat_product']->name}}</h2>
                <ul>
                    <li>
                    <a href="{{route('home.index')}}">Trang chủ</a>

                    </li>
                    <li class="active">{{$data['cat_product']->name}}</li>
                </ul>
            </div>
        </div>
    </div>


    <section class="product-area ptb-100">
        <div class="container">
            
            <div class="row">
                @foreach($data['product'] as $dt)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-product-box">
                        <div class="product-image">
                            <a href="{{route('home.productDetail',['slug'=>$dt->slug])}}">
                                <img src="{{url($dt->images)}}" alt="Image">
                            </a>
                            <a href="{{route('home.productDetail',['slug'=>$dt->slug])}}" class="add-to-cart-btn">
                               Xem chi tiết
                            </a>
                        </div>
                        <div class="product-content">
                            <h3><a href="{{route('home.productDetail',['slug'=>$dt->slug])}}">{{$dt->tittle}}</a></h3>
                            {!!$dt->summary!!}
                           
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col-lg-12">
                    <div class="page-navigation-area">
                        <nav>
                            <ul class="pagination">
                                
                            {{$data['product']->appends(request()->all())->links()}}

                                <!-- <li class="page-item">
                                    <a class="page-link page-links" href="#">
                                        <i class='bx bx-chevrons-left'></i>
                                    </a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class='bx bx-chevrons-right'></i>
                                    </a>
                                </li> -->
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop()