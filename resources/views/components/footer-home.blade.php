<?php 
if(isset($mainContact)){
    $accs = explode(' end_Of_The_Link, ',$mainContact->summary);
    $fblink= !empty($accs[0])?substr($accs[0],strpos($accs[0],'Facebook: ')+10):"";
    $instalink= !empty($accs[1])?substr($accs[1],strpos($accs[1],'Instagram: ')+11):"";
    $twiterlink= !empty($accs[2])?substr($accs[2],strpos($accs[2],'Twiter: ')+8):"";
    $anotherlink= !empty($accs[3])?substr($accs[3],strpos($accs[3],'Another: ')+9):"";
    $info = explode(' end_of_contact, ',$mainContact->description);
    $emailInfo= !empty($info[0])?substr($info[0],strpos($info[0],'Email: ')+7):"";
    $phoneInfo= !empty($info[1])?substr($info[1],strpos($info[1],'Phone: ')+7):"";
    $addInfo= !empty($info[2])?substr($info[2],strpos($info[2],'Address: ')+9):"";
    $mapInfo= !empty($info[2])?substr($info[3],strpos($info[3],'Map: ')+5):"";
}
?>
<footer class="footer-top-area pt-100 pb-70 jarallax">
        <div class="container">
            <div class="row">
                @if(isset($mainContact))
                <div class="col-lg-6 col-md-6">
                    
                    <div class="single-widget contact">
                        <h3>{{$mainContact->get_cat->meta_keyword}}</h3>
                        <ul>
                            <li class="pl-0">
                                <a href="tel:Phone:{{$phoneInfo}}">
                                    <i class="bx bx-phone-call"></i>
                                    <span>Hotline: {{$phoneInfo}}</span>
                                </a>
                            </li>
                            <li class="pl-0">
                                <a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#5b333e3737341b283e302e75383436">
                                    <i class="bx bx-envelope"></i>
                                    <span>Email: {{$emailInfo}}</span>
                                </a>
                            </li>
                            <li>
                                <i class="bx bx-location-plus"></i>
                                <span>Địa chỉ: {{$mainContact->tittle}} - {{$addInfo}}</span>
                            </li>
                           
                        </ul>
                    </div>
                    <div >
                        <iframe src="{{$mapInfo}}" style="border:1" width="100%"></iframe>
                    </div>
                
                </div>
                @endif
                @if(isset($footerService))
                <div class="col-lg-3 col-md-6">
                    <div class="single-widget">
                        <h3>Dịch vụ</h3>
                        <ul>
                            @foreach($footerService as $fs)
                            <li>
                                <a href="{{route('home.serviceDetail',$fs->slug)}}">
                                    <i class="bx bx-chevrons-right"></i>
                                    {{$fs->tittle}}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endif
                @if(isset($support))
                <div class="col-lg-3 col-md-6">
                    <div class="single-widget">
                        <h3>Hỗ trợ</h3>
                        <ul>
                            @foreach($support as $sp)
                            <li>
                                <a href="{{route('home.about')}}">
                                    <i class="bx bx-chevrons-right"></i>
                                    {{$sp->tittle}}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </footer>


    <footer class="footer-bottom-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="copy-right">
                        <p>
                            @2021 AFD. Thiết kế bởi: Nhóm sinh viên BKAP
                        </p>
                    </div>
                </div>
                
            </div>
        </div>
    </footer>


    <div class="go-top">
        <i class='bx bx-chevrons-up'></i>
        <i class='bx bx-chevrons-up'></i>
    </div>


    <script data-cfasync="false" src="{{url('public/site')}}/assets/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{url('public/site')}}/assets/js/jquery.min.js"></script>

    <script src="{{url('public/site')}}/assets/js/bootstrap.bundle.min.js"></script>

    <script src="{{url('public/site')}}/assets/js/meanmenu.min.js"></script>

    <script src="{{url('public/site')}}/assets/js/owl.carousel.min.js"></script>

    <script src="{{url('public/site')}}/assets/js/carousel-thumbs.min.js"></script>

    <script src="{{url('public/site')}}/assets/js/wow.min.js"></script>

    <script src="{{url('public/site')}}/assets/js/nice-select.min.js"></script>

    <script src="{{url('public/site')}}/assets/js/magnific-popup.min.js"></script>

    <script src="{{url('public/site')}}/assets/js/ofi.min.js"></script>

    <script src="{{url('public/site')}}/assets/js/jarallax.min.js"></script>

    <script src="{{url('public/site')}}/assets/js/appear.min.js"></script>

    <script src="{{url('public/site')}}/assets/js/odometer.min.js"></script>

    <script src="{{url('public/site')}}/assets/js/form-validator.min.js"></script>

    <script src="{{url('public/site')}}/assets/js/contact-form-script.js"></script>

    <script src="{{url('public/site')}}/assets/js/ajaxchimp.min.js"></script>

    <script src="{{url('public/site')}}/assets/js/custom.js"></script>
    @yield('js')
</body>

<!-- Mirrored from templates.envytheme.com/seku/default/index-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Oct 2021 14:01:23 GMT -->

</html>