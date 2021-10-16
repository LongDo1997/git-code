@extends('master.home')
@section('title',$data['cat_staff']->name)
@section('description', $data['cat_staff']->meta_description)
@section('keywords', $data['cat_staff']->meta_keyword)
@section('main')
<div class="page-title-area bg-4">
        <div class="container">
            <div class="page-title-content">
                <h2>{{$data['cat_staff']->name}}</h2>
                <ul>
                    <li>
                    <a href="{{route('home.index')}}">Trang chủ</a>

                    </li>
                    <li class="active">{{$data['cat_staff']->name}}</li>
                </ul>
               
            </div>
        </div>
    </div>


    <section class="team-area ptb-100">
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
                <div class="col-lg-12">
                    <div class="page-navigation-area">
                        <nav aria-label="Page navigation example text-center">
                            <ul class="pagination">
                            {{$data['staff']->appends(request()->all())->links()}}

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop()