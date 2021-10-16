@extends('master.home')
@section('title',$title)
@section('description', $description)
@section('keywords', $keywords)
@section('css')
@if(isset($data['banner']))
@foreach($data['banner'] as $dt)
<style type="text/css">
.slider-item-bg-{{$dt->id}} {
    background-image: url({{url($dt->images)}});

};
</style>
@endforeach
@endif
@if(isset($data['product']))
@foreach($data['product'] as $dt)
<style type="text/css">
.solutions-time-bg-{{$dt->id}} {
    background-image: url({{url($dt->images)}});

};
</style>
@endforeach
@endif
@stop()

@section('main')
@if(isset($data['banner']))

<section class="hero-slider-area">
        <div class="hero-slider-wrap owl-carousel owl-theme">
        @foreach($data['banner'] as $dt)
            <div class="slider-item slider-item-bg-{{$dt->id}}">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-9">
                                    <div class="slider-text one">
                                        <h1>{!!$dt->summary!!}</h1>
                                        <p>{!!$dt->description!!}</p>
                                        <div class="slider-btn">
                                            <a class="default-btn" href="{{route('home.contact')}}">
                                                Liên hệ
                                            </a>
                                            <a class="default-btn active" href="{{route('home.about')}}">
                                                Tìm hiểu thêm
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="video-btn-animat one">
                                        <a href="https://www.youtube.com/watch?v=sdpxddDzXfE"
                                            class="video-btn popup-youtube">
                                            <i class="bx bx-play"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         @endforeach 
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
    @if(isset($data['about']))
    <section class="performance-area bg-none pb-70 mt-5">
        <div class="container">
            <div class="section-title">
                <h2>{{$data['cat_about']->meta_keyword}}</h2>
                <p>{!!$data['cat_about']->meta_description!!}</p>
            </div>
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

    @if(isset($data['aboutService']))

    <section class="transform-area-five pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="transform-img">
                        <img src="{{$data['cat_aboutService']->images}}" style="height:100%" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="transform-content  transform-content-five">
                        <h2>{{$data['cat_aboutService']->meta_keyword}}</h2>
                        <p>{!!$data['cat_aboutService']->meta_description!!}</p>
                        @foreach($data['aboutService'] as $dt)
                        <div class="skill-bar" data-percentage="{{$dt->summary}}%">
                            <h4 class="progress-title-holder">
                                <span class="progress-title">{{$dt->tittle}}</span>
                                <span class="progress-number-wrapper">
                                    <span class="progress-number-mark">
                                        <span class="percent"></span>
                                        <span class="down-arrow"></span>
                                    </span>
                                </span>
                            </h4>
                            <div class="progress-content-outter">
                                <div class="progress-content"></div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif

    <!-- <section class="pricing-area">
        <div class="container">
            <div class="section-title">
                <h2>Buy Our Plans & Packages</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus quam neque quibusdam corrupti
                    aspernatur corporis alias nisi dolorum expedita veritatis voluptates minima.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-pricing">
                        <div class="pricing-content">
                            <h3>One Time</h3>
                            <h1>Free</h1>
                        </div>
                        <ul>
                            <li>
                                <i class="bx bx-check"></i>
                                The Departure Of The Expect
                            </li>
                            <li>
                                <i class="bx bx-check"></i>
                                Remote Administrator
                            </li>
                            <li>
                                <i class="bx bx-check"></i>
                                Configure Software
                            </li>
                            <li>
                                <span>
                                    <i class="bx bx-x"></i>
                                    Special Application
                                </span>
                            </li>
                            <li>
                                <span>
                                    <i class="bx bx-x"></i>
                                    24/7 Support
                                </span>
                            </li>
                        </ul>
                        <a href="#" class="default-btn">
                            Order Now
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-pricing active">
                        <div class="pricing-content">
                            <h3>Business</h3>
                            <h1>$70 <sub>/ per month</sub></h1>
                        </div>
                        <ul>
                            <li>
                                <i class="bx bx-check"></i>
                                The Departure Of The Expect
                            </li>
                            <li>
                                <i class="bx bx-check"></i>
                                Remote Administrator
                            </li>
                            <li>
                                <i class="bx bx-check"></i>
                                Configure Software
                            </li>
                            <li>
                                <i class="bx bx-check"></i>
                                Special Application
                            </li>
                            <li>
                                <span>
                                    <i class="bx bx-x"></i>
                                    24/7 Support
                                </span>
                            </li>
                        </ul>
                        <a href="#" class="default-btn">
                            Order Now
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
                    <div class="single-pricing">
                        <div class="pricing-content">
                            <h3>Exclusive</h3>
                            <h1>$120 <sub>/ per month</sub></h1>
                        </div>
                        <ul>
                            <li>
                                <i class="bx bx-check"></i>
                                The Departure Of The Expect
                            </li>
                            <li>
                                <i class="bx bx-check"></i>
                                Remote Administrator
                            </li>
                            <li>
                                <i class="bx bx-check"></i>
                                Configure Software
                            </li>
                            <li>
                                <i class="bx bx-check"></i>
                                Special Application
                            </li>
                            <li>
                                <i class="bx bx-check"></i>
                                24/7 Support
                            </li>
                        </ul>
                        <a href="#" class="default-btn">
                            Order Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->


    <!-- <section class="choose-area-four ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="choose-img">
                        <img src="{{url('public/site')}}/assets/img/choose-img.png" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="choose-wrap p-0">
                        <h2>Why Choose Us</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                            viverra maecenas accumsan lacus vel.</p>
                        <ul class="mt-30">
                            <li>
                                <i class="bx bx-check"></i>
                                Extemly low response time at all time
                            </li>
                            <li>
                                <i class="bx bx-check"></i>
                                We are always ready for your growth
                            </li>
                            <li>
                                <i class="bx bx-check"></i>
                                We understand security and compliance
                            </li>
                        </ul>
                        <a href="#" class="default-btn mt-30">
                            Know Details
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    @if(isset($data['staff']))
    <section class="team-area pt-30 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>{{$data['cat_staff']->meta_keyword}}</h2>
                <p>{!!$data['cat_staff']->meta_description!!}</p>
            </div>
            <div class="row">
                @foreach($data['staff'] as $dt)
                <?php 
                    $accs = explode(' end_Of_The_Link, ',$dt->summary);
                    $fblink= !empty($accs[0])?substr($accs[0],strpos($accs[0],'Facebook: ')+10):"";
                    $instalink= !empty($accs[1])?substr($accs[1],strpos($accs[1],'Instagram: ')+11):"";
                    $twiterlink= !empty($accs[2])?substr($accs[2],strpos($accs[2],'Twiter: ')+8):"";
                    $anotherlink= !empty($accs[3])?substr($accs[3],strpos($accs[3],'Another: ')+9):"";
                ?>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-team">
                        <div class="image">
                            <img src="{{url($dt->images)}}" alt="image">
                            <ul class="social">
                                <li>
                                    <a href="{{$fblink}}" target="_blank">
                                        <i class="bx bxl-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{$twiterlink}}" target="_blank">
                                        <i class="bx bxl-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{$anotherlink}}" target="_blank">
                                        <i class="bx bxl-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{$instalink}}" target="_blank">
                                        <i class="bx bxl-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="content">
                            <h3>{{$dt->tittle}}</h3>
                            <span>{{$dt->description}}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif
    @if(isset($data['product']))

    <section class="project-area pb-100">
        <div class="container-fluid p-0">
            <div class="section-title">
                <h2>{{$data['cat_product']->meta_keyword}}</h2>
                <p>{!!$data['cat_product']->meta_description!!}</p>
            </div>\
            <div class="row">

                <div class="solutions-wrap owl-carousel owl-theme">
                @foreach($data['product'] as $dt)

                    <div class="single-solutions solutions-time-bg-{{$dt->id}}">
                        <div class="solutions-content">
                            <h3>{{$dt->tittle}}</h3>
                            <p>{!!$dt->summary!!}</p>
                            <a href="{{route('home.productDetail',$dt->slug)}}" class="read-more">
                                Xem thêm
                            </a>
                        </div>
                    </div>
                @endforeach
                   
                </div>
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
    @if(isset($data['blog']))
    <section class="blog-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>{{$data['cat_blog']->meta_keyword}}</h2>
                <p>{!!$data['cat_blog']->meta_description!!}</p>
            </div>
            <div class="row">
            @foreach($data['blog'] as $dt)
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <img src="{{url($dt->images)}}" style="width:100%;height:374px" alt="Image">
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
            </div>
        </div>
    </section>
    @endif
@stop()