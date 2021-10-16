@extends('master.home')
@section('title',$data['cat_contact']->name)
@section('description', $data['cat_contact']->meta_description)
@section('keywords', $data['cat_contact']->meta_keyword)
@section('main')

<div class="page-title-area bg-22">
        <div class="container">
            <div class="page-title-content">
                <h2>{{$data['cat_contact']->name}}</h2>
                <ul>
                    <li>
                    <a href="{{route('home.index')}}">Trang chủ</a>

                    </li>
                    <li class="active">{{$data['cat_contact']->name}}</li>
                </ul>
            </div>
        </div>
    </div>


    <section class="contact-info-area">
        <div class="container-fluid">
            <div class="row">
                @foreach($data['contact'] as $dt)
                <?php 
                    // $accs = explode(' end_Of_The_Link, ',$dt->summary);
                    // $fblink= !empty($accs[0])?substr($accs[0],strpos($accs[0],'Facebook: ')+10):"";
                    // $instalink= !empty($accs[1])?substr($accs[1],strpos($accs[1],'Instagram: ')+11):"";
                    // $twiterlink= !empty($accs[2])?substr($accs[2],strpos($accs[2],'Twiter: ')+8):"";
                    // $anotherlink= !empty($accs[3])?substr($accs[3],strpos($accs[3],'Another: ')+9):"";
                    $info = explode(' end_of_contact, ',$dt->description);
                    $emailInfo= !empty($info[0])?substr($info[0],strpos($info[0],'Email: ')+7):"";
                    $phoneInfo= !empty($info[1])?substr($info[1],strpos($info[1],'Phone: ')+7):"";
                    $addInfo= !empty($info[2])?substr($info[2],strpos($info[2],'Address: ')+9):"";
                    $mapInfo= !empty($info[2])?substr($info[3],strpos($info[3],'Map: ')+5):"";
                ?>
                <div class="col-lg-3 p-0">
                    <div class="single-contact-info">
                        <i class="bx bx-location-plus"></i>
                        <h3>{{$dt->tittle}}</h3>
                        <p>{{$addInfo}}</p>
                        <a href="">Email:
                            <span class="__cf_email__">{{$emailInfo}}</span></a>
                        <a href="tel:+822456974">{{$phoneInfo}}</a>
                    </div>
                </div>
                <div class="col-lg-3 p-0">
                    <div class="single-contact-map">
                        <iframe src="{{$mapInfo}}"style="border:0;"></iframe>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="faq-contact-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-wrap">
                        <div class="contact-form">
                            <div class="section-title">
                                <span class="top-title">{{$data['cat_contact']->meta_keyword}}</span>
                                {!!$data['cat_contact']->meta_description!!}
                            </div>
                            <form id=""  method="POST" action="{{route('home.postContact')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group mb-4">
                                            <input type="text" name="name" id="name" class="form-control" 
                                            value="{{old('name')}}" placeholder="Tên của bạn" required data-error="Xin mời nhập tên của bạn">
                                            @error('name')
                                                <small class="font-weight-bolder help-block with-errors"><span class="text-danger font-italic">{{$message}}</span></small>
                                            @enderror
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group mb-4">
                                            <input type="text" name="email" id="email" class="form-control" 
                                            value="{{old('email')}}" placeholder="Email" required data-error="Email không được để trống">
                                            @error('email')
                                                <small class="font-weight-bolder help-block with-errors"><span class="text-danger font-italic">{{$message}}</span></small>
                                            @enderror
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group mb-4">
                                            <input type="text" name="phone" id="phone_number" class="form-control" required data-error="Số điện thoại không được để trống"
                                            value="{{old('phone')}}" placeholder="Số điện thoại">
                                            @error('phone')
                                                <small class="font-weight-bolder help-block with-errors"><span class="text-danger font-italic">{{$message}}</span></small>
                                            @enderror
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group mb-4">
                                            <input type="text" name="subject" id="msg_subject" class="form-control" required data-error="Tiêu đề không được để trống"
                                            value="{{old('subject')}}" placeholder="Tiêu đề">
                                            @error('subject')
                                                <small class="font-weight-bolder help-block with-errors"><span class="text-danger font-italic">{{$message}}</span></small>
                                            @enderror
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group mb-4">
                                            <textarea name="message" class="form-control" id="message" cols="30" required data-error="Nội dung không được để trống"
                                                rows="8" 
                                                placeholder="Nội dung">{{old('message')}}</textarea>
                                            @error('message')
                                                <small class="font-weight-bolder help-block with-errors"><span class="text-danger font-italic">{{$message}}</span></small>
                                            @enderror
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 text-center">
                                        <button type="submit" class="default-btn page-btn">
                                            GỬI TIN NHẮN
                                        </button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@stop()