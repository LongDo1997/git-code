@extends('master.home')
@if(isset($data['service']))
@foreach($data['service'] as $dt)
<style type="text/css">
.solutions-time-bg-{{$dt->id}} {
    background-image: url({{url($dt->images)}});

};
</style>
@endforeach
@endif
@section('title',$data['cat_service']->name)
@section('description', $data['cat_service']->meta_description)
@section('keywords', $data['cat_service']->meta_keyword)
@section('main')
<div class="page-title-area bg-15">
        <div class="container">
            <div class="page-title-content">
                <h2>{{$data['cat_service']->name}}</h2>
                <ul>
                    <li>
                    <a href="{{route('home.index')}}">Trang chủ</a>

                    </li>
                    <li class="active">{{$data['cat_service']->name}}</li>
                </ul>
            </div>
        </div>
    </div>


    <section class="security-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                @foreach($data['about']  as $dt)
                <div class="col-lg-3 col-sm-6" style="height:262px">
                    <div class="single-security" style="height:90%">
                        <i class="flaticon-bug"></i>
                        <h3>{{$dt->tittle}}</h3>
                        <p>{!!$dt->summary!!}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="solutions-area section-width pb-100">
        <div class="container">
            <div class="section-title">
                <h2>{{$data['cat_service']->meta_keyword}}</h2>
                <p>{!!$data['cat_service']->meta_description!!}</p>
            </div>
            <div class="row">
                @foreach($data['service'] as $dt)
                <div class="col-lg-4">
                    <div class="single-solutions solutions-time-bg-{{$dt->id}}">
                        <div class="solutions-content">
                            <h3>{{$dt->tittle}}</h3>
                            <div style="height:80px">{!!$dt->summary!!}</div>
                            <a href="{{route('home.serviceDetail',$dt->slug)}}" class="read-more">
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
                            {{$data['service']->appends(request()->all())->links()}}

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop()