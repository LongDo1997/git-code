@extends('master.home')

@section('title',$data->tittle)
@section('description', $data->meta_description)
@section('keywords', $data->meta_keyword)
@section('main')


<div class="page-title-area bg-23">
        <div class="container">
            <div class="page-title-content">
                <h2>Chi tiết {{$data->get_cat->name}}</h2>
                <ul>
                    <li>
                    <a href="{{route('home.index')}}">Trang chủ</a>

                    </li>
                    <li>{{$data->get_cat->name}}</li>
                    <li class="active">{{$data->tittle}}</li>
                </ul>
            </div>
        </div>
</div>


    <section class="blog-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="services-details">
                        <h3>{{$data->tittle}}</h3>
                        <img src="{{url($data->images)}}"style="width:100%;height:360px" alt="Image">
                        {!!$data->description!!}
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <aside class="widget-area" id="secondary">
                        <div class="widget widget_search">
                            <h3 class="widget-title">Tìm  kiếm</h3>
                            <div class="post-wrap">
                                <form class="search-form">
                                    <label>
                                        <span class="screen-reader-text">Từ khóa:</span>
                                        <input type="search" class="search-field" placeholder="Từ khóa">
                                    </label>
                                    <button type="submit"><i class='bx bx-search'></i></button>
                                </form>
                            </div>
                        </div>
                        <section class="widget widget_categories">
                            <h3 class="widget-title">Dự án gần đây</h3>
                            <div class="post-wrap">
                                <ul>
                                @foreach($recentData as $dt)
                                    <li>
                                        <a href="{{route('home.productDetail',['slug'=>$dt->slug])}}">{{$dt->tittle}}</a>
                                    </li>
                                @endforeach
                                </ul>
                            </div>
                        </section>
                        <section class="widget widget_tag_cloud">
                            <h3 class="widget-title">Tags</h3>
                            <div class="post-wrap">
                                <div class="tagcloud">
                                @foreach($tag as $t)
                                    <a href="#">{{$t}}</a>
                                @endforeach
                                </div>
                            </div>
                        </section>
                    </aside>
                </div>
            </div>
        </div>
    </section>


@stop()