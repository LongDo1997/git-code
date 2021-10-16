@extends('master.home')
@section('title',$data['cat_blog']->name)
@section('description', $data['cat_blog']->meta_description)
@section('keywords', $data['cat_blog']->meta_keyword)
@section('main')
<div class="page-title-area bg-18">
        <div class="container">
            <div class="page-title-content">
                <h2>{{$data['cat_blog']->name}}</h2>
                <ul>
                    <li>
                    <a href="{{route('home.index')}}">Trang chủ</a>

                    </li>
                    <li class="active">{{$data['cat_blog']->name}}</li>
                </ul>
            </div>
        </div>
    </div>


    <section class="blog-area ptb-100">
        <div class="container">
            <div class="section-title">
                <h2>{{$data['cat_blog']->meta_keyword}}</h2>
                <p>{!!$data['cat_blog']->meta_description!!}</p>
            </div>
            <div class="row">
                @foreach($data['blog'] as $dt)
                <div class="col-lg-4 col-sm-6">
                    <div class="single-blog">
                        <img src="{{url($dt->images)}}" style="width:100%;height:375px" alt="Image">
                        <span>{{$dt->meta_keyword}}</span>
                        <div class="blog-content">
                            <div class="date">
                                <i class="bx bx-calendar"></i>
                                {{date('d-m-Y',strtotime($dt->created_at))}}
                            </div>
                            <h3>
                                <a href="{{route('home.blogDetail',$dt->slug)}}">{{$dt->tittle}}</a>
                            </h3>
                            <a href="{{route('home.blogDetail',$dt->slug)}}" class="read-more mt-use">
                                Xem thêm
                            </a>
                        </div>
                    </div>
                </div>
               @endforeach
                <div class="col-lg-12">
                    <div class="page-navigation-area">
                        <nav aria-label="Page navigation example text-center">
                            <ul class="pagination">
                            {{$data['blog']->appends(request()->all())->links()}}

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop()