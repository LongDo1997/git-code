@extends('master.home')
@section('title',$data['cat_about']->name)
@section('description', 'Giải pháp phần mềm, Phần mềm quản lý, gia công phần mềm')
@section('keywords',$data['cat_about']->meta_keyword)
@section('main')

<div class="page-title-area bg-1">
        <div class="container">
            <div class="page-title-content">
                <h2>About</h2>
                <ul>
                    <li>
                        <a href="index-2.html">
                            Home
                        </a>
                    </li>
                    <li class="active">About</li>
                </ul>
            </div>
        </div>
    </div>


    <section class="cybersecurity-area ptb-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="cybersecurity-content">
                        <h2>24/7 Cybersecurity Operation Center</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Quis ipsum suspendisse.</p>
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <ul class="cybersecurity-item">
                                    <li>
                                        <i class="bx bx-check"></i>
                                        Managed Web Application
                                    </li>
                                    <li>
                                        <i class="bx bx-check"></i>
                                        SIEM Threat Detection
                                    </li>
                                    <li>
                                        <i class="bx bx-check"></i>
                                        Content Delivery Network
                                    </li>
                                    <li>
                                        <i class="bx bx-check"></i>
                                        Website Hack Repair
                                    </li>
                                    <li>
                                        <i class="bx bx-check"></i>
                                        Instant Malware Removal
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <ul>
                                    <li>
                                        <i class="bx bx-check"></i>
                                        Instant Malware Removal
                                    </li>
                                    <li>
                                        <i class="bx bx-check"></i>
                                        Instant Malware Removal
                                    </li>
                                    <li>
                                        <i class="bx bx-check"></i>
                                        Instant Malware Removal
                                    </li>
                                    <li>
                                        <i class="bx bx-check"></i>
                                        Instant Malware Removal
                                    </li>
                                    <li>
                                        <i class="bx bx-check"></i>
                                        Instant Malware Removal
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pr-0">
                    <div class="cybersecurity-img"></div>
                </div>
            </div>
        </div>
    </section>


    <section class="complete-area pb-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 pl-0">
                    <div class="complete-img">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="complete-content">
                        <h2>The most Complete and Effective Protection for Your Home and Office</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor elit
                            incididunt ut labore et dolore magna aliqua. Quis ipsum</p>
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="single-security">
                                    <i class="flaticon-order"></i>
                                    <h3>Check and Search Hazards</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="single-security">
                                    <i class="flaticon-anti-virus-software"></i>
                                    <h3>Install and Configure Software</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="single-security mb-0 mb-rs-need">
                                    <i class="flaticon-scientist"></i>
                                    <h3>Departure of the Our Experts</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="single-security mb-0">
                                    <i class="flaticon-technical-support"></i>
                                    <h3>24/7 Support and Remote Admit</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="complete-shape">
            <img src="{{url('public/site')}}/assets/img/complete-shape.png" alt="Image">
        </div>
    </section>


    <section class="electronic-area bg-color ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="electronic-content">
                        <h2>Innovative Electronic Protection of Your Office and Home Control Online</h2>
                        <div class="electronic-tab-wrap">
                            <div class="tab electronic-tab">
                                <ul class="tabs">
                                    <li>
                                        <a href="#">
                                            Intercom System
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            CCTV
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            GDPR
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Encryption
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Our Goal
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab_content">
                                    <div class="tabs_item">
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo ducimus vero,
                                            vero corporis voluptates beatae pariatur laudantium, fugiat illum ab
                                            deserunt nostrum aliquid quisquam esse? Voluptatibus quia velit numquam esse
                                            porro ipsum dolor, sit amet consectetur adipisicing elit. Illo ducimus vero,
                                            corporis.</p>
                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis,
                                            soluta, aspernatur dolorum sequi quisquam ullam in pariatur nihil dolorem
                                            cumque excepturi totam. Qui excepturi quasi cumque placeat fuga. Ea, eius?
                                        </p>
                                    </div>
                                    <div class="tabs_item">
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo ducimus vero,
                                            vero corporis voluptates beatae pariatur laudantium, fugiat illum ab
                                            deserunt nostrum aliquid quisquam esse? Voluptatibus quia velit numquam esse
                                            porro ipsum dolor, sit amet consectetur adipisicing elit. Illo ducimus vero,
                                            corporis.</p>
                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis,
                                            soluta, aspernatur dolorum sequi quisquam ullam in pariatur nihil dolorem
                                            cumque excepturi totam. Qui excepturi quasi cumque placeat fuga. Ea, eius?
                                        </p>
                                    </div>
                                    <div class="tabs_item">
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo ducimus vero,
                                            vero corporis voluptates beatae pariatur laudantium, fugiat illum ab
                                            deserunt nostrum aliquid quisquam esse? Voluptatibus quia velit numquam esse
                                            porro ipsum dolor, sit amet consectetur adipisicing elit. Illo ducimus vero,
                                            corporis.</p>
                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis,
                                            soluta, aspernatur dolorum sequi quisquam ullam in pariatur nihil dolorem
                                            cumque excepturi totam. Qui excepturi quasi cumque placeat fuga. Ea, eius?
                                        </p>
                                    </div>
                                    <div class="tabs_item">
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo ducimus vero,
                                            vero corporis voluptates beatae pariatur laudantium, fugiat illum ab
                                            deserunt nostrum aliquid quisquam esse? Voluptatibus quia velit numquam esse
                                            porro ipsum dolor, sit amet consectetur adipisicing elit. Illo ducimus vero,
                                            corporis.</p>
                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis,
                                            soluta, aspernatur dolorum sequi quisquam ullam in pariatur nihil dolorem
                                            cumque excepturi totam. Qui excepturi quasi cumque placeat fuga. Ea, eius?
                                        </p>
                                    </div>
                                    <div class="tabs_item">
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo ducimus vero,
                                            vero corporis voluptates beatae pariatur laudantium, fugiat illum ab
                                            deserunt nostrum aliquid quisquam esse? Voluptatibus quia velit numquam esse
                                            porro ipsum dolor, sit amet consectetur adipisicing elit. Illo ducimus vero,
                                            corporis.</p>
                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis,
                                            soluta, aspernatur dolorum sequi quisquam ullam in pariatur nihil dolorem
                                            cumque excepturi totam. Qui excepturi quasi cumque placeat fuga. Ea, eius?
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="electronic-img">
                        <img src="{{url('public/site')}}/assets/img/electronic-img.png" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="approach-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="approach-img">
                        <img src="{{url('public/site')}}/assets/img/approach-img.jpg" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="approach-content">
                        <h2>Our Approach To Security</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Quis ipsumv</p>
                        <ul>
                            <li>
                                <i class="flaticon-cyber"></i>
                                <h3>Secure by Design</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut suspendisse ultrices</p>
                            </li>
                            <li>
                                <i class="flaticon-cyber-security"></i>
                                <h3>Compliant by Design</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut suspendisse ultrices</p>
                            </li>
                            <li>
                                <i class="flaticon-profile"></i>
                                <h3>Continuous Monitoring</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut suspendisse ultrices</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="client-area ptb-100">
        <div class="container">
            <div class="section-title white-title">
                <h2>What Client’s Say About Us</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus quam neque quibusdam corrupti
                    aspernatur corporis alias nisi dolorum expedita veritatis voluptates minima.</p>
            </div>
            <div class="client-wrap owl-carousel owl-theme">
                <div class="single-client">
                    <i class="quotes bx bxs-quote-alt-left"></i>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,do eiusmod tempor incididunt ut labore et
                        dolore.</p>
                    <ul>
                        <li>
                            <i class="bx bxs-star"></i>
                        </li>
                        <li>
                            <i class="bx bxs-star"></i>
                        </li>
                        <li>
                            <i class="bx bxs-star"></i>
                        </li>
                        <li>
                            <i class="bx bxs-star"></i>
                        </li>
                        <li>
                            <i class="bx bxs-star"></i>
                        </li>
                    </ul>
                    <div class="client-img">
                        <img src="{{url('public/site')}}/assets/img/client-img/1.jpg" alt="Image">
                        <h3>Alen Meair</h3>
                        <span>Developer</span>
                    </div>
                </div>
                <div class="single-client">
                    <i class="quotes bx bxs-quote-alt-left"></i>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,do eiusmod tempor incididunt ut labore et
                        dolore.</p>
                    <ul>
                        <li>
                            <i class="bx bxs-star"></i>
                        </li>
                        <li>
                            <i class="bx bxs-star"></i>
                        </li>
                        <li>
                            <i class="bx bxs-star"></i>
                        </li>
                        <li>
                            <i class="bx bxs-star"></i>
                        </li>
                        <li>
                            <i class="bx bxs-star"></i>
                        </li>
                    </ul>
                    <div class="client-img">
                        <img src="{{url('public/site')}}/assets/img/client-img/2.jpg" alt="Image">
                        <h3>Axon Detos</h3>
                        <span>CEO</span>
                    </div>
                </div>
                <div class="single-client">
                    <i class="quotes bx bxs-quote-alt-left"></i>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,do eiusmod tempor incididunt ut labore et
                        dolore.</p>
                    <ul>
                        <li>
                            <i class="bx bxs-star"></i>
                        </li>
                        <li>
                            <i class="bx bxs-star"></i>
                        </li>
                        <li>
                            <i class="bx bxs-star"></i>
                        </li>
                        <li>
                            <i class="bx bxs-star"></i>
                        </li>
                        <li>
                            <i class="bx bxs-star"></i>
                        </li>
                    </ul>
                    <div class="client-img">
                        <img src="{{url('public/site')}}/assets/img/client-img/3.jpg" alt="Image">
                        <h3>John Dona</h3>
                        <span>Designer</span>
                    </div>
                </div>
                <div class="single-client">
                    <i class="quotes bx bxs-quote-alt-left"></i>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,do eiusmod tempor incididunt ut labore et
                        dolore.</p>
                    <ul>
                        <li>
                            <i class="bx bxs-star"></i>
                        </li>
                        <li>
                            <i class="bx bxs-star"></i>
                        </li>
                        <li>
                            <i class="bx bxs-star"></i>
                        </li>
                        <li>
                            <i class="bx bxs-star"></i>
                        </li>
                        <li>
                            <i class="bx bxs-star"></i>
                        </li>
                    </ul>
                    <div class="client-img">
                        <img src="{{url('public/site')}}/assets/img/client-img/4.jpg" alt="Image">
                        <h3>Jon Smith</h3>
                        <span>Developer</span>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="partner-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="partner-wrap owl-carousel owl-theme">
                    <div class="partner-item">
                        <img src="{{url('public/site')}}/assets/img/partner-logo/1.png" alt="Image">
                        <a class="partner-overly" href="#">
                            <img src="{{url('public/site')}}/assets/img/partner-logo/6.png" alt="Image">
                        </a>
                    </div>
                    <div class="partner-item">
                        <img src="{{url('public/site')}}/assets/img/partner-logo/2.png" alt="Image">
                        <a class="partner-overly" href="#">
                            <img src="{{url('public/site')}}/assets/img/partner-logo/7.png" alt="Image">
                        </a>
                    </div>
                    <div class="partner-item">
                        <img src="{{url('public/site')}}/assets/img/partner-logo/3.png" alt="Image">
                        <a class="partner-overly" href="#">
                            <img src="{{url('public/site')}}/assets/img/partner-logo/8.png" alt="Image">
                        </a>
                    </div>
                    <div class="partner-item">
                        <img src="{{url('public/site')}}/assets/img/partner-logo/4.png" alt="Image">
                        <a class="partner-overly" href="#">
                            <img src="{{url('public/site')}}/assets/img/partner-logo/9.png" alt="Image">
                        </a>
                    </div>
                    <div class="partner-item">
                        <img src="{{url('public/site')}}/assets/img/partner-logo/5.png" alt="Image">
                        <a class="partner-overly" href="#">
                            <img src="{{url('public/site')}}/assets/img/partner-logo/10.png" alt="Image">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>




    
@stop()