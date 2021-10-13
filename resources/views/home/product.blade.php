@extends('master.home')
@section('title',$data['cat_product']->name)
@section('description', $data['cat_product']->meta_description)
@section('keywords', $data['cat_product']->meta_keyword)
@section('main')

<div class="page-title-area bg-11">
        <div class="container">
            <div class="page-title-content">
                <h2>Shop</h2>
                <ul>
                    <li>
                        <a href="index-2.html">
                            Home
                        </a>
                    </li>
                    <li>Shop</li>
                    <li class="active">Shop</li>
                </ul>
            </div>
        </div>
    </div>


    <section class="product-area ptb-100">
        <div class="container">
            
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-product-box">
                        <div class="product-image">
                            <a href="product-details.html">
                                <img src="{{url('public/site')}}/assets/img/product/1.jpg" alt="Image">
                            </a>
                            <a href="cart.html" class="add-to-cart-btn">
                               Xem chi tiết
                            </a>
                        </div>
                        <div class="product-content">
                            <h3><a href="product-details.html">Omega DHL22 F600 monitor LCD 21.5″</a></h3>
                            <div class="price">
                                <span class="new">$55.50</span>
                                <span class="old">$60.50</span>
                            </div>
                            <div class="rating">
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-product-box">
                        <div class="product-image">
                            <a href="product-details.html">
                                <img src="{{url('public/site')}}/assets/img/product/2.jpg" alt="Image">
                            </a>
                            <a href="cart.html" class="add-to-cart-btn">
                               Xem chi tiết
                            </a>
                            <div class="sale-btn">Sale!</div>
                        </div>
                        <div class="product-content">
                            <h3><a href="product-details.html">3.2 Mp IP-camera TR-E800 (3.6 mm) with Wi-Fi</a></h3>
                            <div class="price">
                                <span class="new">$54.50</span>
                                <span class="old">$65.50</span>
                            </div>
                            <div class="rating">
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star-half"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-product-box">
                        <div class="product-image">
                            <a href="product-details.html">
                                <img src="{{url('public/site')}}/assets/img/product/3.jpg" alt="Image">
                            </a>
                            <a href="cart.html" class="add-to-cart-btn">
                               Xem chi tiết
                            </a>
                        </div>
                        <div class="product-content">
                            <h3><a href="product-details.html">Camera battery TR-D233 (3.6 mm)</a></h3>
                            <div class="price">
                                <span class="new">$14.50</span>
                                <span class="old">$15.50</span>
                            </div>
                            <div class="rating">
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-product-box">
                        <div class="product-image">
                            <a href="product-details.html">
                                <img src="{{url('public/site')}}/assets/img/product/4.jpg" alt="Image">
                            </a>
                            <a href="cart.html" class="add-to-cart-btn">
                               Xem chi tiết
                            </a>
                        </div>
                        <div class="product-content">
                            <h3><a href="product-details.html">Network camera 720p Enigma DS-I100 (2.8 mm)</a></h3>
                            <div class="price">
                                <span class="new">$10.00</span>
                                <span class="old">$20.00</span>
                            </div>
                            <div class="rating">
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-product-box">
                        <div class="product-image">
                            <a href="product-details.html">
                                <img src="{{url('public/site')}}/assets/img/product/5.jpg" alt="Image">
                            </a>
                            <a href="cart.html" class="add-to-cart-btn">
                               Xem chi tiết
                            </a>
                        </div>
                        <div class="product-content">
                            <h3><a href="product-details.html">2.8 Mp IP-camera TR-D234 (3.6 mm)</a></h3>
                            <div class="price">
                                <span class="new">$55.50</span>
                            </div>
                            <div class="rating">
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-product-box">
                        <div class="product-image">
                            <a href="product-details.html">
                                <img src="{{url('public/site')}}/assets/img/product/6.jpg" alt="Image">
                            </a>
                            <a href="cart.html" class="add-to-cart-btn">
                               Xem chi tiết
                            </a>
                        </div>
                        <div class="product-content">
                            <h3><a href="product-details.html">1.3 Mp IP-camera TR-D2111 (3.6 mm) with Wi-Fi</a></h3>
                            <div class="price">
                                <span class="new">$15.00</span>
                                <span class="old">$20.50</span>
                            </div>
                            <div class="rating">
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="page-navigation-area">
                        <nav>
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