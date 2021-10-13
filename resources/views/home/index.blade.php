@extends('master.home')
@section('title',$title)
@section('description', $description)
@section('keywords', $keywords)
@section('main')

<section class="hero-slider-area">
        <div class="hero-slider-wrap owl-carousel owl-theme">
            <div class="slider-item slider-item-bg-1">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-9">
                                    <div class="slider-text one">
                                        <h1>Cyber Security & IT Management</h1>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil architecto
                                            laborum eaque! Deserunt maxime, minus quas molestiae reiciendis esse natus
                                            nisi iure.</p>
                                        <div class="slider-btn">
                                            <a class="default-btn" href="contact.html">
                                                Contact Us
                                            </a>
                                            <a class="default-btn active" href="about.html">
                                                Learn More
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
            <div class="slider-item slider-item-bg-2">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-9">
                                    <div class="slider-text two">
                                        <h1>Cyber Security Is Not Optional</h1>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil architecto
                                            laborum eaque! Deserunt maxime, minus quas molestiae reiciendis esse natus
                                            nisi iure.</p>
                                        <div class="slider-btn">
                                            <a class="default-btn" href="contact.html">
                                                Contact Us
                                            </a>
                                            <a class="default-btn active" href="about.html">
                                                Learn More
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="video-btn-animat two">
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
        </div>
    </section>


    <div class="partner-area bg-color-f9f9f9 ptb-100">
        <div class="container">
            <div class="row">
                <div class="partner-slider-six owl-carousel owl-theme">
                    <div class="partner-item">
                        <a href="#">
                            <img src="{{url('public/site')}}/assets/img/home-six/partner/partner-1.png" alt="Image">
                        </a>
                    </div>
                    <div class="partner-item">
                        <a href="#">
                            <img src="{{url('public/site')}}/assets/img/home-six/partner/partner-2.png" alt="Image">
                        </a>
                    </div>
                    <div class="partner-item">
                        <a href="#">
                            <img src="{{url('public/site')}}/assets/img/home-six/partner/partner-3.png" alt="Image">
                        </a>
                    </div>
                    <div class="partner-item">
                        <a href="#">
                            <img src="{{url('public/site')}}/assets/img/home-six/partner/partner-4.png" alt="Image">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="performance-area bg-none pb-70">
        <div class="container">
            <div class="section-title">
                <h2>High-Performance Solutions</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus quam neque quibusdam corrupti
                    aspernatur corporis alias nisi dolorum expedita veritatis voluptates minima.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-security">
                        <i class="flaticon-website"></i>
                        <h3>Confidential Information</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor sit amet,
                            dolor consectetur</p>
                        <a href="#" class="read-more">
                            Read More
                        </a>
                        <img src="{{url('public/site')}}/assets/img/shape/6.png" alt="Image">
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-security">
                        <i class="flaticon-profile"></i>
                        <h3>Mobile Security</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor sit amet,
                            dolor consectetur</p>
                        <a href="#" class="read-more">
                            Read More
                        </a>
                        <img src="{{url('public/site')}}/assets/img/shape/6.png" alt="Image">
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-security">
                        <i class="flaticon-content"></i>
                        <h3>Website Protection</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor sit amet,
                            dolor consectetur</p>
                        <a href="#" class="read-more">
                            Read More
                        </a>
                        <img src="{{url('public/site')}}/assets/img/shape/6.png" alt="Image">
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-security">
                        <i class="flaticon-cyber"></i>
                        <h3>Hacking Protection</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor sit amet,
                            dolor consectetur</p>
                        <a href="#" class="read-more">
                            Read More
                        </a>
                        <img src="{{url('public/site')}}/assets/img/shape/6.png" alt="Image">
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-security">
                        <i class="flaticon-profile"></i>
                        <h3>Mobile Security</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor sit amet,
                            dolor consectetur</p>
                        <a href="#" class="read-more">
                            Read More
                        </a>
                        <img src="{{url('public/site')}}/assets/img/shape/6.png" alt="Image">
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-security">
                        <i class="flaticon-profile"></i>
                        <h3>Mobile Security</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor sit amet,
                            dolor consectetur</p>
                        <a href="#" class="read-more">
                            Read More
                        </a>
                        <img src="{{url('public/site')}}/assets/img/shape/6.png" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="transform-area-five pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="transform-img">
                        <img src="{{url('public/site')}}/assets/img/transform-img.jpg" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="transform-content  transform-content-five">
                        <h2>Transform Your Digital Workflow Be productive Reduce risk</h2>
                        <p>Lorem ipsum dolor sit elit amet, consectetur adipiscing elit, sed do eiusmod tempor incidiunt
                            labore et dolore magna aliqua. Quis ipsum suspendisse Workflow Be productive consectetur
                            adipiscing</p>
                        <div class="skill-bar" data-percentage="50%">
                            <h4 class="progress-title-holder">
                                <span class="progress-title">Development</span>
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
                        <div class="skill-bar" data-percentage="75%">
                            <h4 class="progress-title-holder clearfix">
                                <span class="progress-title">Design</span>
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
                        <div class="skill-bar mb-0" data-percentage="95%">
                            <h4 class="progress-title-holder clearfix">
                                <span class="progress-title">Marketing</span>
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
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="pricing-area">
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
    </section>


    <section class="choose-area-four ptb-100">
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
    </section>


    <section class="team-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>Our Expert Team</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidiunt labore et
                    dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-team">
                        <div class="image">
                            <img src="{{url('public/site')}}/assets/img/team/1.jpg" alt="image">
                            <ul class="social">
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="bx bxl-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="bx bxl-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="bx bxl-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="bx bxl-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="content">
                            <h3>Peter Pers</h3>
                            <span>Director</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-team">
                        <div class="image">
                            <img src="{{url('public/site')}}/assets/img/team/2.jpg" alt="image">
                            <ul class="social">
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="bx bxl-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="bx bxl-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="bx bxl-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="bx bxl-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="content">
                            <h3>Sarah Swift</h3>
                            <span>Executive</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-team">
                        <div class="image">
                            <img src="{{url('public/site')}}/assets/img/team/3.jpg" alt="image">
                            <ul class="social">
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="bx bxl-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="bx bxl-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="bx bxl-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="bx bxl-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="content">
                            <h3>Alita Scot</h3>
                            <span>Programmer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-team">
                        <div class="image">
                            <img src="{{url('public/site')}}/assets/img/team/4.jpg" alt="image">
                            <ul class="social">
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="bx bxl-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="bx bxl-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="bx bxl-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="bx bxl-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="content">
                            <h3>Denial James</h3>
                            <span>CEO</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="project-area pb-100">
        <div class="container-fluid p-0">
            <div class="section-title">
                <h2>Seku Recent Project Case</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus quam neque quibusdam corrupti
                    aspernatur corporis alias nisi dolorum expedita veritatis voluptates minima.</p>
            </div>
            <div class="row">
                <div class="solutions-wrap owl-carousel owl-theme">
                    <div class="single-solutions solutions-time-bg-7">
                        <div class="solutions-content">
                            <h3>Hacking Parotection Software</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia, obcaecati praesentium.
                                Labore sint recusandae perspiciatis laudantium, deleniti non</p>
                            <a href="#" class="read-more">
                                Read More
                            </a>
                        </div>
                    </div>
                    <div class="single-solutions solutions-time-bg-8">
                        <div class="solutions-content">
                            <h3>Security Awarness Training</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia, obcaecati praesentium.
                                Labore sint recusandae perspiciatis laudantium, deleniti non</p>
                            <a href="#" class="read-more">
                                Read More
                            </a>
                        </div>
                    </div>
                    <div class="single-solutions solutions-time-bg-9">
                        <div class="solutions-content">
                            <h3>Cyber Security Manged IT</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia, obcaecati praesentium.
                                Labore sint recusandae perspiciatis laudantium, deleniti non</p>
                            <a href="#" class="read-more">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="grph-area bg-color ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="grph-img">
                        <img src="{{url('public/site')}}/assets/img/graph-img.png" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="graph-content">
                        <h2>Cyber security Satistics Graph</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Quis ipsumv</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                            viverra maecenas accumsan lacus vel. </p>
                        <h3>15 Ways To protect Your Bussiness From A Cyber Attack</h3>
                        <a href="#" class="default-btn">
                            Download
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="faq-area ptb-100">
        <div class="container">
            <div class="section-title">
                <h2>Frequently Asked Questions</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A facilis vel consequatur tempora atque
                    blanditiis exercitationem incidunt, alias corporis quam assumenda dicta.</p>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="faq-img-four">
                        <img src="{{url('public/site')}}/assets/img/faq-img.jpg" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="faq-accordion">
                        <ul class="accordion">
                            <li class="accordion-item">
                                <a class="accordion-title active" href="javascript:void(0)">
                                    <i class="bx bx-plus"></i>
                                    What's The Difference Between IDS And IBS?
                                </a>
                                <div class="accordion-content show">
                                    <p>Lorem, ipsum dolor sit amet How do you Startup? consectetur adipisicing elit.
                                        Accusamus ipsa error, excepturi, obcaecati aliquid veniam blanditiis quas
                                        voluptates maxime unde, iste minima dolores dolor perferendis facilis. How do
                                        you Startup blanditiis voluptates Lorem, ipsum dolor sit amet How do you Startup
                                        amet How do.</p>
                                </div>
                            </li>
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class="bx bx-plus"></i>
                                    How Is Encryption Different From Hacking
                                </a>
                                <div class="accordion-content">
                                    <p>Lorem, ipsum dolor sit amet How do you Startup? consectetur adipisicing elit.
                                        Accusamus ipsa error, excepturi, obcaecati aliquid veniam blanditiis quas
                                        voluptates maxime unde, iste minima dolores dolor perferendis facilis. How do
                                        you Startup blanditiis voluptates Lorem, ipsum dolor sit amet How do you Startup
                                        amet How do.</p>
                                </div>
                            </li>
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class="bx bx-plus"></i>
                                    What Is Firewall And Why It Is Used?
                                </a>
                                <div class="accordion-content">
                                    <p>Lorem, ipsum dolor sit amet How do you Startup? consectetur adipisicing elit.
                                        Accusamus ipsa error, excepturi, obcaecati aliquid veniam blanditiis quas
                                        voluptates maxime unde, iste minima dolores dolor perferendis facilis. How do
                                        you Startup blanditiis voluptates Lorem, ipsum dolor sit amet How do you Startup
                                        amet How do.</p>
                                </div>
                            </li>
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class="bx bx-plus"></i>
                                    What Steps Will You Take To Secure server
                                </a>
                                <div class="accordion-content">
                                    <p>Lorem, ipsum dolor sit amet How do you Startup? consectetur adipisicing elit.
                                        Accusamus ipsa error, excepturi, obcaecati aliquid veniam blanditiis quas
                                        voluptates maxime unde, iste minima dolores dolor perferendis facilis. How do
                                        you Startup blanditiis voluptates Lorem, ipsum dolor sit amet How do you Startup
                                        amet How do.</p>
                                </div>
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


    <section class="blog-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>Latest News From Blog</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus quam neque quibusdam corrupti
                    aspernatur corporis alias nisi dolorum expedita veritatis voluptates minima.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
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
                <div class="col-lg-4 col-md-6">
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
                <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
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
            </div>
        </div>
    </section>
@stop()