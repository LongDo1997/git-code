@extends('master.home')
@section('title',$data['cat_about']->name)
@section('description', 'Giải pháp phần mềm, Phần mềm quản lý, gia công phần mềm')
@section('keywords',$data['cat_about']->meta_keyword)
@section('css')

<style type="text/css">
.cybersecurity-img {
    background-image: url({{url($data['cat_about']->images)}});
};
</style>

@stop()
@section('main')
<div class="page-title-area bg-1">
        <div class="container">
            <div class="page-title-content">
                <h2>{{$data['cat_about']->meta_keyword}}</h2>
                <ul>
                    <li>
                        <a href="index-2.html">
                            Trang chủ
                        </a>
                    </li>
                    <li class="active">{{$data['cat_about']->meta_keyword}}</li>
                </ul>
            </div>
        </div>
    </div>


    <section class="cybersecurity-area ptb-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="cybersecurity-content">
                        <h2>{{$data['cat_about']->meta_keyword}}</h2>
                        <p>{!!$data['cat_about']->meta_description!!}</p>
                        <div class="row">
                                <ul class="cybersecurity-item ">
                                    @foreach($data['about'] as $dt)
                                    <li class="col-lg-6 col-sm-6">
                                        <i class="bx bx-check"></i>
                                        {{$dt->tittle}}
                                    </li>
                                    @endforeach
                                </ul>                          
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pr-0">
                    <div class="cybersecurity-img"></div>
                </div>
            </div>
        </div>
    </section>
    @if(isset($data['about']))
    <section class="performance-area bg-none pb-70 mt-5">
        <div class="container">
            
            <div class="row">
                @foreach($data['about'] as $dt)
                <div class="col-lg-4 col-sm-6" style="height:286px">
                    <div class="single-security" style="height:90%">
                        <i class="flaticon-website"></i>
                        <h3>{{$dt->tittle}}</h3>
                        <div style="height:90px">
                        {!!$dt->summary!!}
                        </div>
                        <a href="{{route('home.about')}}" class="read-more">
                            Xem thêm
                        </a>
                        <img src="{{url('public/site')}}/assets/img/shape/6.png" alt="Image">
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif




    @if(isset($data['client']))
    <section class="client-area ptb-100">
        <div class="container">
            <div class="section-title white-title">
                <h2>{{$data['cat_client']->meta_keyword}}</h2>
                <p>{!!$data['cat_client']->meta_description!!}</p>
            </div>
            <div class="client-wrap owl-carousel owl-theme">
                @foreach($data['client'] as $dt)
                <div class="single-client">
                    <i class="quotes bx bxs-quote-alt-left"></i>
                    <p>{!!$dt->description!!}</p>
                    <div class="client-img">
                        <img src="{{url($dt->images)}}" style="width:70px;height:70px"alt="Image">
                        <h3>{{$dt->tittle}}</h3>
                        <span>{{$dt->summary}}</span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif


    
    @if(isset($data['brand']))
    <div class="partner-area bg-color-f9f9f9 ptb-100">
        <div class="container">
            <div class="row">
                <div class="partner-slider-six owl-carousel owl-theme">
                    @foreach($data['brand'] as $dt)
                    <div class="partner-item">
                        <a href="#">
                            <img src="{{url($dt->images)}}" alt="Image">
                        </a>
                    </div>
                   @endforeach
                </div>
            </div>
        </div>
    </div>
    @endif




    
@stop()