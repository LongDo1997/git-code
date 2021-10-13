@extends('master.home')
@section('main')

<div class="page-title-area bg-22">
        <div class="container">
            <div class="page-title-content">
                <h2>Contact</h2>
                <ul>
                    <li>
                        <a href="index-2.html">
                            Home
                        </a>
                    </li>
                    <li class="active">Contact</li>
                </ul>
            </div>
        </div>
    </div>


    <section class="contact-info-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 p-0">
                    <div class="single-contact-info">
                        <i class="bx bx-location-plus"></i>
                        <h3>New York</h3>
                        <p>88 Flower Avenue. Kingdom St. New York</p>
                        <a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#caa2afa6a6a58ab9afa1bf">Email:
                            <span class="__cf_email__"
                                data-cfemail="c9a0a7afa689baaca2bce7aaa6a4">[email&#160;protected]</span></a>
                        <a href="tel:+822456974">+822456974</a>
                    </div>
                </div>
                <div class="col-lg-3 p-0">
                    <div class="single-contact-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.1583091352!2d-74.11976373946234!3d40.69766374859258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1588019781257!5m2!1sen!2sbd"
                            style="border:0;"></iframe>
                    </div>
                </div>
                <div class="col-lg-3 p-0">
                    <div class="single-contact-info">
                        <i class="bx bx-location-plus"></i>
                        <h3>California</h3>
                        <p>658 Lane Drive st Riverside. California</p>
                        <a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#0b636e6767644b786e607e">Email:
                            <span class="__cf_email__"
                                data-cfemail="29414c454546695a4c425c074a4644">[email&#160;protected]</span></a>
                        <a href="tel:+892-569-756">+892-569-756</a>
                    </div>
                </div>
                <div class="col-lg-3 p-0">
                    <div class="single-contact-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6509156.5834578!2d-123.79616103953882!3d37.1931243309143!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb9fe5f285e3d%3A0x8b5109a227086f55!2sCalifornia%2C%20USA!5e0!3m2!1sen!2sbd!4v1591218371520!5m2!1sen!2sbd"
                            style="border:0;"></iframe>
                    </div>
                </div>
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
                                <span class="top-title">Contact Us</span>
                                <h2>Drop us a message for any query</h2>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque quibusdam deleniti
                                    porro praesentium. Aliquam minus quisquam velit in at nam.</p>
                            </div>
                            <form id="contactForm">
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" class="form-control" required
                                                data-error="Please enter your name" placeholder="Your Name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" class="form-control" required
                                                data-error="Please enter your email" placeholder="Your Email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="phone_number" id="phone_number" required
                                                data-error="Please enter your number" class="form-control"
                                                placeholder="Your Phone">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="msg_subject" id="msg_subject" class="form-control"
                                                required data-error="Please enter your subject"
                                                placeholder="Your Subject">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" id="message" cols="30"
                                                rows="8" required data-error="Write your message"
                                                placeholder="Your Message"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn page-btn">
                                            Send Message
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