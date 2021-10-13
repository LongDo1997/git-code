@extends('master.home')
@section('main')
@section('title',$data->tittle)
@section('description', $data->meta_description)
@section('keywords', $data->meta_keyword)

<div class="inner-banner">
    <div class="container">
        <div class="inner-title text-center">
            <h3>Chi tiết {{$data->get_cat->name}} </h3>
            <ul>
                <li>
                    <a href="{{route('home.index')}}">Trang chủ</a>
                </li>
                <li>
                    <i class='bx bx-chevrons-right'></i>
                </li>
                <li>{{$data->get_cat->name}} </li>
                <li>
                    <i class='bx bx-chevrons-right'></i>
                </li>
                <li>{{$data->tittle}} </li>
            </ul>
        </div>
    </div>
    <div class="inner-shape">
        <img src="{{url('public/site')}}/assets/images/shape/inner-shape.png" alt="Images">
    </div>
</div>


<div class="case-details-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="case-article">
                    <div class="case-article-img">
                        <img src="{{url($data->images)}}" style="width:100%;height:400px" alt="Images">
                    </div>
                    <div class="case-article-content" style="font-si">
                        {!!$data->description!!}
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="side-bar-area">
                    <div class="side-bar-widget">
                        <h3 class="title">Dự án gần đây</h3>
                        <div class="side-bar-categories">
                            <ul>
                                @foreach($recentData as $dt)
                                <li>
                                    <div class="line-circle"></div>
                                    <a href="{{route('home.productDetail',['slug'=>$dt->slug])}}" target="_blank">{{$dt->tittle}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="side-bar-widget">
                        <h3 class="title">Tag Cloud</h3>
                        <ul class="side-bar-widget-tag">
                            @foreach($tag as $t)
                            <li><a href="{{route('home.product')}}" target="_blank">{{$t}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="side-bar-widget">
                        <h3 class="title">Bộ sưu tập</h3>
                        <ul class="blog-gallery">
                            <li>
                                <a href="https://www.instagram.com/" target="_blank">
                                    <img src="{{url('public/site')}}/{{url('public/site')}}/assets/images/blog/blog-small-img1.jpg" alt="image">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/" target="_blank">
                                    <img src="{{url('public/site')}}/{{url('public/site')}}/assets/images/blog/blog-small-img2.jpg" alt="image">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/" target="_blank">
                                    <img src="{{url('public/site')}}/{{url('public/site')}}/assets/images/blog/blog-small-img3.jpg" alt="image">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/" target="_blank">
                                    <img src="{{url('public/site')}}/{{url('public/site')}}/assets/images/blog/blog-small-img4.jpg" alt="image">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/" target="_blank">
                                    <img src="{{url('public/site')}}/{{url('public/site')}}/assets/images/blog/blog-small-img5.jpg" alt="image">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/" target="_blank">
                                    <img src="{{url('public/site')}}/{{url('public/site')}}/assets/images/blog/blog-small-img6.jpg" alt="image">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- <div class="side-bar-widget">
                        <h3 class="title">Archive</h3>
                        <div class="side-bar-categories">
                            <ul>
                                <li>
                                    <div class="line-circle"></div>
                                    <a href="case-details.html" target="_blank">Design<span>[70]</span></a>
                                </li>
                                <li>
                                    <div class="line-circle"></div>
                                    <a href="case-details.html" target="_blank">Business<span>[24]</span></a>
                                </li>
                                <li>
                                    <div class="line-circle"></div>
                                    <a href="case-details.html" target="_blank">Development<span>[08]</span></a>
                                </li>
                                <li>
                                    <div class="line-circle"></div>
                                    <a href="case-details.html" target="_blank">Technology <span>[17]</span></a>
                                </li>
                                <li>
                                    <div class="line-circle"></div>
                                    <a href="case-details.html" target="_blank">Startup <span>[20]</span></a>
                                </li>
                                <li>
                                    <div class="line-circle"></div>
                                    <a href="case-details.html" target="_blank">Marketing Growth <span>[13]</span></a>
                                </li>
                            </ul>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>

@stop()