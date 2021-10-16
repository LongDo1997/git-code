<?php 
    $accs = explode(' end_Of_The_Link, ',$mainContact->summary);
    $fblink= !empty($accs[0])?substr($accs[0],strpos($accs[0],'Facebook: ')+10):"";
    $instalink= !empty($accs[1])?substr($accs[1],strpos($accs[1],'Instagram: ')+11):"";
    $twiterlink= !empty($accs[2])?substr($accs[2],strpos($accs[2],'Twiter: ')+8):"";
    $anotherlink= !empty($accs[3])?substr($accs[3],strpos($accs[3],'Another: ')+9):"";
    $info = explode(' end_of_contact, ',$mainContact->description);
    $emailInfo= !empty($info[0])?substr($info[0],strpos($info[0],'Email: ')+7):"";
    $phoneInfo= !empty($info[1])?substr($info[1],strpos($info[1],'Phone: ')+7):"";
    $addInfo= !empty($info[2])?substr($info[2],strpos($info[2],'Address: ')+9):"";
?>
<!doctype html>
<html lang="zxx">

<!-- Mirrored from templates.envytheme.com/seku/default/index-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Oct 2021 14:01:23 GMT -->

<head>

    <meta charset="utf-8">
    <title> @yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{url('public/site')}}/assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{url('public/site')}}/assets/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="{{url('public/site')}}/assets/css/owl.carousel.min.css">

    <link rel="stylesheet" href="{{url('public/site')}}/assets/css/magnific-popup.min.css">

    <link rel="stylesheet" href="{{url('public/site')}}/assets/css/animate.min.css">

    <link rel="stylesheet" href="{{url('public/site')}}/assets/css/boxicons.min.css">

    <link rel="stylesheet" href="{{url('public/site')}}/assets/css/flaticon.css">

    <link rel="stylesheet" href="{{url('public/site')}}/assets/css/meanmenu.min.css">

    <link rel="stylesheet" href="{{url('public/site')}}/assets/css/nice-select.min.css">

    <link rel="stylesheet" href="{{url('public/site')}}/assets/css/odometer.min.css">

    <link rel="stylesheet" href="{{url('public/site')}}/assets/css/style.css">

    <link rel="stylesheet" href="{{url('public/site')}}/assets/css/responsive.css">

    <link rel="icon" type="image/png" href="{{url('public/site')}}/assets/img/favicon.png">
    @yield('css')
    <title>Seku - Cyber Security Company HTML Template</title>
</head>

<body>

    <div class="loader-wrapper">
        <div class="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>


    <header class="header-area fixed-top">
        <div class="top-header-area">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-8">
                        <ul class="header-content-left">
                            <li>
                                <a
                                    href="https://gmail.com">
                                    <i class="bx bx-envelope"></i>
                                    Email: <span >{{$emailInfo}}</span>
                                </a>
                            </li>
                            <li>
                                <i class="bx bx-location-plus"></i>
                                {{$addInfo}}
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-sm-4">
                        <ul class="header-content-right">
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
                </div>
            </div>
        </div>

        <div class="nav-area">
            <div class="navbar-area">

                <div class="mobile-nav">
                    <a href="index-2.html" class="logo">
                        <img src="{{url('public/site')}}/assets/img/logo.png" alt="Logo">
                    </a>
                </div>

                <div class="main-nav">
                    <nav class="navbar navbar-expand-md">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="index-2.html">
                                <img src="{{url('public/site')}}/assets/img/logo.png" alt="Logo">
                            </a>
                            <div class="collapse navbar-collapse mean-menu">
                                <ul class="navbar-nav m-auto">
                                    <li class="nav-item">
                                        <a href="{{route('home.index')}}" class="nav-link active">
                                            Trang chủ
                                        </a>
                                     
                                    </li>
                                    @foreach($category as $menu)
                                    <li class="nav-item">
                                        <a href="{{route($menu->action_name)}}" class="nav-link">{{$menu->name}}</a>
                                    </li>
                                    @endforeach
                                </ul>

                                

                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

    </header>