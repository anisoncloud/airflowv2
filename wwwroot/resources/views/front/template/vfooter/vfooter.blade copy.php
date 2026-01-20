<?php
/* Template Name: vFooter
    Version: 1.0
*/
//insertDummyData('Post Type Name' , 'Number of post', 'Post title', 'Content')
?>

<!-- ==== footer start ==== -->
<footer class="footer">
    <div class="foot_under_paper">
        <img src="{{ asset('/public/front/assets/images/ffotter.png')}}" alt="Image">
    </div>
    <div class="footer__inner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer__intro">
                        <div class="row align-items-center justify-content-center gutter-30">
                            <div class="col-12 col-sm-8 col-lg-5 col-xl-6">
                                <div class="footer__content">
                                    <h3 class="title-animation">children need
                                        your help
                                        start <span>donating</span> today
                                    </h3>
                                </div>
                            </div>
                            <div class="col-12 col-lg-7 col-xl-6">
                                <div class="footer__support" data-aos="fade-up" data-aos-duration="1000"
                                    data-aos-delay="300">
                                    <a href="https://dev.ailservers.com/vardbd.org/posts/contact">
                                        for Any Inquiry <span>@VARD</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gutter-60">

                <div class="col-12 col-md-6 col-xl-2 ">
                    <div class="footer__list" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                        <div class="footer__list-intro">
                            <h5 class="title-animation">The VARD</h5>
                        </div>
                        <div class="footer__list-items">
                            <ul>
                                <li><a href="{{url('/posts/aboutus')}}"><i class="fa-solid fa-angles-right"></i>About
                                        Us</a>
                                </li>
                                <li><a href="{{url("/posts/where-we-work")}}"><i class="fa-solid fa-angles-right"></i>Where We Work
                                    </a>
                                </li>
                                <li><a href="{{url('/pages/management-structure')}}"><i class="fa-solid fa-angles-right"></i>Management Structure
                                    </a>
                                </li>
                                <li><a href="{{url('/news')}}"><i class="fa-solid fa-angles-right"></i>News</a>
                                </li>
                              
                               
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-2 ">
                    <div class="footer__list" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                        <div class="footer__list-intro">
                            <h5 class="title-animation">Services</h5>
                        </div>
                        <div class="footer__list-items">
                            <ul>
                                <li><a href="https://dev.ailservers.com/vardbd.org/posts/aboutus"><i class="fa-solid fa-angles-right"></i>Our Donors</a>
                                </li>
                                <li><a href="{{url('/photo-gallery')}}"><i class="fa-solid fa-angles-right"></i>Photo Gallery</a>
                                </li>
                                <li><a href="{{url('/video_gallery')}}"><i class="fa-solid fa-angles-right"></i>Video Gallery</a>
                                </li>
                                <li><a href="{{url('/posts/contact')}}"><i class="fa-solid fa-angles-right"></i>Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="footer__list" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                        <div class="footer__list-group">
                            <div class="footer__list-intro">
                                <h5 class="title-animation">Head Office Address</h5>
                            </div>
                            <div class="content">
                                <p>
                                    <a href="#" target="_blank">House # 554 (3rd floor), Road # 09, Baitul Aman Housing
                                        Society, Adabor,
                                        Dhaka-1207, Bangladesh
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="footer__list-group">
                            <div class="footer__list-intro">
                                <h5 class="title-animation">Contact</h5>
                            </div>
                            <div class="content">
                                <p>
                                    <a href="mailto:vardho@vardbd.org">vardho@vardbd.org </a>
                                </p>
                                <p><a href="tel:880-2-48110165, 48112791">880-2-48110165, 48112791</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="footer__list" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d645.4718563800012!2d90.35369225929048!3d23.77089649402835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c09877020211%3A0x659eedef50a532ae!2sBaitul%20Aman%20Housing%20Society!5e0!3m2!1sen!2sbd!4v1763280043215!5m2!1sen!2sbd"
                            width="600" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div>
                </div>
            </div>
            <div class="footer__copyright">

                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="footer__copyright-inner">
                                <div class="row align-items-center gutter-24">

                                    <div class="col-12 col-xl-8">
                                        <div class="footer__bottom-right text-left">
                                            <p>Copyright &copy; <span id="copyrightYear"></span> <a href="#"
                                                    target="_blank">Valuntary Association for Rural Development</a>.
                                                All rights
                                                reserved.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-4">
                                        <div class="footer__bottom-left">
                                            <ul
                                                class="footer__bottom-list justify-content-center justify-content-xl-end">
                                                <li><a href="#">Powered by <img
                                                            src="{{ asset('/public/front/assets/images/poweredby-aamra-white.png')}}" alt=""> |
                                                        infotainment ltd.</a></li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ==== / footer end ==== -->
<!-- ==== custom cursor start ==== -->
<div class="mouseCursor cursor-outer"></div>
<div class="mouseCursor cursor-inner"></div>
<!-- ==== / custom cursor end ==== -->
<!-- ==== scroll to top start ==== -->
<button class="progress-wrap" aria-label="scroll indicator" title="back to top">
    <span></span>
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</button>
<!-- ==== / scroll to top end ==== -->
<!-- ==== color switcher start ==== -->

<!-- ==== / color switcher end ==== -->
</div>
<!-- ==== js dependencies start ==== -->
<!-- jquery -->
<script src="{{ asset('/public/front/assets/js/jquery-3.7.1.min.js')}}"></script>
<!-- bootstrap five js -->
<script src="{{ asset('/public/front/assets/js/bootstrap.bundle.min.js')}}"></script>
<!-- nice select js -->
<script src="{{ asset('/public/front/assets/js/jquery.nice-select.min.js')}}"></script>
<!-- magnific popup js -->
<script src="{{ asset('/public/front/assets/js/jquery.magnific-popup.min.js')}}"></script>
<!-- swiper slider js -->
<script src="{{ asset('/public/front/assets/js/swiper-bundle.min.js')}}"></script>
<!-- viewport js -->
<script src="{{ asset('/public/front/assets/js/viewport.jquery.js')}}"></script>
<!-- odometer js -->
<script src="{{ asset('/public/front/assets/js/odometer.min.js')}}"></script>
<!-- vanilla tilt js -->
<script src="{{ asset('/public/front/assets/js/vanilla-tilt.min.js')}}"></script>
<!-- aos js -->
<script src="{{ asset('/public/front/assets/js/aos.js')}}"></script>

<!-- splittext js -->
<script src="{{ asset('/public/front/assets/js/SplitText.min.js')}}"></script>
<!-- scrollto js -->
<script src="{{ asset('/public/front/assets/js/ScrollToPlugin.min.js')}}"></script>
<!-- scrolltrigger js -->
<script src="{{ asset('/public/front/assets/js/ScrollTrigger.min.js')}}"></script>
<!-- gsap js -->
<script src="{{ asset('/public/front/assets/js/gsap.min.js')}}"></script>
<!-- ==== / js dependencies end ==== -->
<!-- template settings js -->
<script src="{{ asset('/public/front/assets/js/template-settings.js')}}"></script>
<!-- main js -->
<script src="{{ asset('/public/front/assets/js/custom.js')}}"></script>
</body>

</html>