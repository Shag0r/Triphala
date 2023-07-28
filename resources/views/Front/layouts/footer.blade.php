<footer class="main">
        @include('Front.layouts.advbanner')
     
        <section class="section-padding footer-mid">
            <div class="container pt-15 pb-20">
                <div class="row">
                    <div class="col">
                        <div class="widget-about font-md mb-md-3 mb-lg-3 mb-xl-0 wow animate__animated animate__fadeInUp" data-wow-delay="0">
                            <div class="logo mb-30">
                                <a href="index.html" class="mb-15"><img src="{{asset('Front')}}/assets/imgs/theme/trifola.png" alt="logo" /></a>
                                <p class="font-lg text-heading">Trifola</p>
                            </div>
                            <ul class="contact-infor">
                                <li><img src="{{asset('Front')}}/assets/imgs/theme/icons/icon-location.svg" alt="" /><strong>Address: </strong> <span>Bangladesh</span></li>
                                <li><img src="{{asset('Front')}}/assets/imgs/theme/icons/icon-contact.svg" alt="" /><strong>Call Us:</strong><span>+880 1772621644</span></li>
                                <li><img src="{{asset('Front')}}/assets/imgs/theme/icons/icon-email-2.svg" alt="" /><strong>Email:</strong><span>trifola@gmail.com</span></li>
                               
                            </ul>
                        </div>
                    </div>
                    <div class="footer-link-widget col wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                        <h4 class="widget-title">Tutorial</h4>
                       
                    </div>
                    <div class="footer-link-widget col wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                        <h4 class="widget-title">Blog</h4>
                        
                    </div>
                    <div class="footer-link-widget col wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                        <h4 class="widget-title">Weather</h4>
                        
                    </div>
                    <div class="footer-link-widget col wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                        <h4 class="widget-title">Popular</h4>
                       
                    </div>
                  
                </div>
        </section>
        <div class="container pb-30 wow animate__animated animate__fadeInUp" data-wow-delay="0">
            <div class="row align-items-center">
                <div class="col-12 mb-30">
                    <div class="footer-bottom"></div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <p class="font-sm mb-0">&copy; {{date('Y')}}, <strong class="text-brand">Trifola</strong> - Ecommerce Org. <br />All rights reserved</p>
                </div>
                <div class="col-xl-4 col-lg-6 text-center d-none d-xl-block">
                     
                    <div class="hotline d-lg-inline-flex">
                        <img src="{{asset('Front')}}/assets/imgs/theme/icons/phone-call.svg" alt="hotline" />
                        <p>+880 1772621944<span>24/7 Support Center</span></p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 text-end d-none d-md-block">
                    <div class="mobile-social-icon">
                        <h6>Follow Us</h6>
                        <a href="#"><img src="{{asset('Front')}}/assets/imgs/theme/icons/icon-facebook-white.svg" alt="" /></a>
                        <a href="#"><img src="{{asset('Front')}}/assets/imgs/theme/icons/icon-twitter-white.svg" alt="" /></a>
                        <a href="#"><img src="{{asset('Front')}}/assets/imgs/theme/icons/icon-instagram-white.svg" alt="" /></a>
                        <a href="#"><img src="{{asset('Front')}}/assets/imgs/theme/icons/icon-pinterest-white.svg" alt="" /></a>
                        <a href="#"><img src="{{asset('Front')}}/assets/imgs/theme/icons/icon-youtube-white.svg" alt="" /></a>
                    </div>
                    <p class="font-sm">Up to 15% discount on your first subscribe</p>
                </div>
            </div>
        </div>
    </footer>