@extends('master.home')
@section('title',$data['cat_blog']->name)
@section('description', $data['cat_blog']->meta_description)
@section('keywords', $data['cat_blog']->meta_keyword)
@section('main')
<div class="page-title-area bg-18">
        <div class="container">
            <div class="page-title-content">
                <h2>Blog Grid</h2>
                <ul>
                    <li>
                        <a href="index-2.html">
                            Home
                        </a>
                    </li>
                    <li>Blog</li>
                    <li class="active">Blog Grid</li>
                </ul>
            </div>
        </div>
    </div>


    <section class="blog-area ptb-100">
        <div class="container">
            <div class="section-title">
                <h2>Latest News From Blog</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus quam neque quibusdam corrupti
                    aspernatur corporis alias nisi dolorum expedita veritatis voluptates minima.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-blog">
                        <img src="{{url('public/site')}}/assets/img/blog/1.jpg" alt="Image">
                        <div class="blog-content">
                            <h3>
                                <a href="blog-details.html">Secure Managed IT</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolorer</p>
                            <a href="blog-details.html" class="read-more">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-blog">
                        <img src="{{url('public/site')}}/assets/img/blog/2.jpg" alt="Image">
                        <div class="blog-content">
                            <h3>
                                <a href="blog-details.html">Cloud Security</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolorer</p>
                            <a href="blog-details.html" class="read-more">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-blog">
                        <img src="{{url('public/site')}}/assets/img/blog/3.jpg" alt="Image">
                        <div class="blog-content">
                            <h3>
                                <a href="blog-details.html">Secure Managed IT</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolorer</p>
                            <a href="blog-details.html" class="read-more">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-blog">
                        <img src="{{url('public/site')}}/assets/img/blog/4.jpg" alt="Image">
                        <span>Cyber Security</span>
                        <div class="blog-content">
                            <div class="date">
                                <i class="bx bx-calendar"></i>
                                Jun 20 2020
                            </div>
                            <h3>
                                <a href="blog-details.html">DHS issues emergency directive to prevent hacking attack</a>
                            </h3>
                            <a href="blog-details.html" class="read-more mt-use">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-blog">
                        <img src="{{url('public/site')}}/assets/img/blog/5.jpg" alt="Image">
                        <span>Cyber Crime</span>
                        <div class="blog-content">
                            <div class="date">
                                <i class="bx bx-calendar"></i>
                                Jun 21 2020
                            </div>
                            <h3>
                                <a href="blog-details.html">Drughydrus add google drive to roughrobin torjan</a>
                            </h3>
                            <a href="blog-details.html" class="read-more mt-use">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-blog">
                        <img src="{{url('public/site')}}/assets/img/blog/6.jpg" alt="Image">
                        <span>Hacking Protection</span>
                        <div class="blog-content">
                            <div class="date">
                                <i class="bx bx-calendar"></i>
                                Jun 22 2020
                            </div>
                            <h3>
                                <a href="blog-details.html">Security in a fragment world of workload</a>
                            </h3>
                            <a href="blog-details.html" class="read-more mt-use">
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