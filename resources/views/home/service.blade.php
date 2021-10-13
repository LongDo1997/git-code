@extends('master.home')
@section('title',$data['cat_service']->name)
@section('description', $data['cat_service']->meta_description)
@section('keywords', $data['cat_service']->meta_keyword)
@section('main')
<div class="page-title-area bg-15">
        <div class="container">
            <div class="page-title-content">
                <h2>Services Style One</h2>
                <ul>
                    <li>
                        <a href="index-2.html">
                            Home
                        </a>
                    </li>
                    <li>Services</li>
                    <li class="active">Services Style One</li>
                </ul>
            </div>
        </div>
    </div>


    <section class="security-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>Complete Website Security</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus quam neque quibusdam corrupti
                    aspernatur corporis alias nisi dolorum expedita veritatis voluptates minima sapiente.</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-security">
                        <i class="flaticon-bug"></i>
                        <h3>Malware Detection Removal</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-security">
                        <i class="flaticon-content"></i>
                        <h3>Content Delivery Network</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-security">
                        <i class="flaticon-support"></i>
                        <h3>24/7 Cyber Security Support</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-security">
                        <i class="flaticon-profile"></i>
                        <h3>Managed Web Application</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="solutions-area section-width pb-100">
        <div class="container">
            <div class="section-title">
                <h2>High-Performance Solutions</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus quam neque quibusdam corrupti
                    aspernatur corporis alias nisi dolorum expedita veritatis voluptates minima.</p>
            </div>
            <div class="row">
                <div class="col-lg-5">
                    <div class="single-solutions solutions-time-bg-1">
                        <div class="solutions-content">
                            <h3>Secure Managed IT</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolorer</p>
                            <a href="services-details.html" class="read-more">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="single-solutions solutions-time-bg-2">
                                <div class="solutions-content">
                                    <h3>Compliance</h3>
                                    <p>Lorem ipsum dolor sit amet sed, consectetur adipiscing elit do</p>
                                    <a href="services-details.html" class="read-more">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single-solutions solutions-time-bg-3">
                                <div class="solutions-content">
                                    <h3>Cyber Security</h3>
                                    <p>Lorem ipsum dolor sit amet sed, consectetur adipiscing elit do</p>
                                    <a href="services-details.html" class="read-more">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="single-solutions solutions-time-bg-4">
                                <div class="solutions-content">
                                    <h3>Disaster Planning</h3>
                                    <p>Lorem ipsum dolor sit amet sed, consectetur adipiscing elit do</p>
                                    <a href="services-details.html" class="read-more">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single-solutions solutions-time-bg-5">
                                <div class="solutions-content">
                                    <h3>Secure By Design</h3>
                                    <p>Lorem ipsum dolor sit amet sed, consectetur adipiscing elit do</p>
                                    <a href="services-details.html" class="read-more">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="single-solutions solutions-time-bg-6">
                        <div class="solutions-content">
                            <h3>Secure Awareness Training</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolorer</p>
                            <a href="services-details.html" class="read-more">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="page-navigation-area">
                        <nav aria-label="Page navigation example text-center">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link page-links" href="#">
                                        <i class='bx bx-chevrons-left'></i>
                                    </a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class='bx bx-chevrons-right'></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop()