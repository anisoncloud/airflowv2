@extends('front.themes.default.layouts.master')
        <!--Main Slider Start-->
        <section class="main-slider-two clearfix">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
                },
                "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                "delay": 8000
                }}'>
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="image-layer-two"
                            style="background-image: url(assets/images/backgrounds/main-slider-2-5.jpg);"></div>
                        <!-- /.image-layer -->

                        <!-- <div class="main-slider-two-shape-1">
                            <img src="assets/images/shapes/main-slider-two-shape-1.png" alt="">
                        </div>
                        <div class="main-slider-two-shape-2">
                            <img src="assets/images/shapes/main-slider-two-shape-2.png" alt="">
                        </div> -->

                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider-two__content">
                                        <p class="main-slider-two__sub-title">We are all part of a shared world</p>
                                        <h2 class="main-slider-two__title">THE AIR EXPERTS, YOU CAN COUNT ON</h2>
                                        <div class="main-slider-two__btn-box">
                                            <a href="#" class="thm-btn main-slider-two__btn"> Discover more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="image-layer-two"
                            style="background-image: url(assets/images/backgrounds/main-slider-2-1.jpg);"></div>
                        <!-- /.image-layer -->

                        <!-- <div class="main-slider-two-shape-1">
                            <img src="assets/images/shapes/main-slider-two-shape-1.png" alt="">
                        </div>
                        <div class="main-slider-two-shape-2">
                            <img src="assets/images/shapes/main-slider-two-shape-2.png" alt="">
                        </div> -->

                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider-two__content">
                                        <p class="main-slider-two__sub-title">We are all part of a shared world</p>
                                        <h2 class="main-slider-two__title">FOR THE WORLD WE SHARE</h2>
                                        <div class="main-slider-two__btn-box">
                                            <a href="#" class="thm-btn main-slider-two__btn"> Discover more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="image-layer-two"
                            style="background-image: url(assets/images/backgrounds/main-slider-2-2.jpg);"></div>
                        <!-- /.image-layer -->

                        <!-- <div class="main-slider-two-shape-1">
                            <img src="assets/images/shapes/main-slider-two-shape-1.png" alt="">
                        </div>
                        <div class="main-slider-two-shape-2">
                            <img src="assets/images/shapes/main-slider-two-shape-2.png" alt="">
                        </div> -->

                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider-two__content">
                                        <p class="main-slider-two__sub-title">HVAC Systems</p>
                                        <h2 class="main-slider-two__title">HVAC is highly vital to worldwide infrastructure</h2>
                                        <div class="main-slider-two__btn-box">
                                            <a href="#" class="thm-btn main-slider-two__btn"> Discover more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="image-layer-two"
                            style="background-image: url(assets/images/backgrounds/main-slider-2-3.jpg);"></div>
                        <!-- /.image-layer -->

                        <!-- <div class="main-slider-two-shape-1">
                            <img src="assets/images/shapes/main-slider-two-shape-1.png" alt="">
                        </div>
                        <div class="main-slider-two-shape-2">
                            <img src="assets/images/shapes/main-slider-two-shape-2.png" alt="">
                        </div> -->

                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider-two__content">
                                        <p class="main-slider-two__sub-title">TICA is a professional company</p>
                                        <h2 class="main-slider-two__title">Integrating R&D, manufacture, sales and service</h2>
                                        <div class="main-slider-two__btn-box">
                                            <a href="#" class="thm-btn main-slider-two__btn"> Discover more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="image-layer-two"
                            style="background-image: url(assets/images/backgrounds/main-slider-2-4.jpg);"></div>
                        <!-- /.image-layer -->

                        <!-- <div class="main-slider-two-shape-1">
                            <img src="assets/images/shapes/main-slider-two-shape-1.png" alt="">
                        </div>
                        <div class="main-slider-two-shape-2">
                            <img src="assets/images/shapes/main-slider-two-shape-2.png" alt="">
                        </div> -->

                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider-two__content">
                                        <p class="main-slider-two__sub-title">Building the future</p>
                                        <h2 class="main-slider-two__title">For Air Distribution System</h2>
                                        <div class="main-slider-two__btn-box">
                                            <a href="#" class="thm-btn main-slider-two__btn"> Discover more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- If we need navigation buttons -->
                <div class="main-slider-two__nav">
                    <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                        <i class="icon-left-arrow"></i>
                    </div>
                    <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                        <i class="icon-right-arrow"></i>
                    </div>
                </div>

            </div>
        </section>
        <!--Main Slider End-->


        <!--About Two Start-->
        <section class="about-two">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-two__left">
                            <div class="about-two__img-box  wow slideInLeft" data-wow-delay="100ms"
                                data-wow-duration="2500ms">
                                <div class="about-two__img">
                                    <img src="assets/images/resources/about-two-img-1.jpg" alt="">
                                </div>
                                <div class="about-two__img-two">
                                    <img src="assets/images/resources/about-two-img-2.jpg" alt="">
                                </div>
                                <div class="about-two__left-title-box">
                                    <h3 class="about-two__left-title">THE AIR EXPERTS</h3>
                                </div>
                                <div class="about-two__shape-1 zoominout">
                                    <img src="assets/images/shapes/about-two-shape-1.png" alt="">
                                </div>
                                <div class="about-two__shape-2 rotate-me">
                                    <img src="assets/images/shapes/about-two-shape-2.png" alt="">
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-two__right">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Get to know about us</span>
                                <h2 class="section-title__title">About Airflow </h2>
                            </div>
                            <p class="about-two__text-1">With over 17 years of experience in the HVAC industry, 
                                we have built a strong reputation for delivering reliable, efficient, 
                                and high-quality heating, ventilation, and air conditioning solutions. 
                                From our early beginnings to where we stand today, our focus has always been on comfort, 
                                performance, and customer satisfaction.</p>
                            <p>We specialize in the design, installation, maintenance, and repair of HVAC systems for residential, commercial, and </p>
                                <a href="about.html" class="thm-btn about-two__btn">Discover More</a>
                            <ul class="list-unstyled about-two__points">
                                <li>
                                    <div class="icon">
                                        <span class="icon-target"></span>
                                    </div>
                                    <div class="text">
                                        <h4>Our mission</h4>
                                        <p>To deliver reliable, energy-efficient HVAC solutions that ensure year-round comfort, safety, and satisfaction for our customers 
                                            through quality workmanship, innovative technology, and honest service.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-solidarity-1"></span>
                                    </div>
                                    <div class="text">
                                        <h4>Our story</h4>
                                        <p>To become a trusted HVAC service provider recognized for excellence, sustainability,
                                             and long-term customer relationships in every community we serve.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About Two End-->
<!--Events Page Start-->
        <section class="events-carousel-page causes-two">
            <div class="section-title text-center">
                    <span class="section-title__tagline">What services we are porviding</span>
                    <h2 class="section-title__title">Our Services </h2>
            </div>
            <div class="container">
                <div class="events-carousel thm-owl__carousel owl-theme owl-carousel carousel-dot-style"
                    data-owl-options='{
                    "items": 4,
                    "margin": 30,
                    "smartSpeed": 700,
                    "loop":true,
                    "autoplay": 6000,
                    "nav":false,
                    "dots":true,
                    "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                    "responsive":{
                        "0":{
                            "items":1
                        },
                        "768":{
                            "items":2
                        },
                        "992":{
                            "items": 3
                        }
                    }
                }'>
                    <div class="item">
                        <!--Events One Single Start-->
                        <div class="events-one__single">
                            <div class="events-one__img">
                                <img src="assets/images/events/events-page-1-1.jpg" alt="">                                
                                <div class="events-one__content">                                    
                                    <h3 class="events-one__title"><a href="event-details.html">Chiller Installation</a></h3>
                                </div>
                            </div>
                        </div>
                        <!--Events One Single End-->
                    </div>
                    <div class="item">
                        <!--Events One Single Start-->
                        <div class="events-one__single">
                            <div class="events-one__img">
                                <img src="assets/images/events/events-page-1-2.jpg" alt="">                               
                                <div class="events-one__content">                                    
                                    <h3 class="events-one__title"><a href="event-details.html">VRF Installation</a></h3>
                                </div>
                            </div>
                        </div>
                        <!--Events One Single End-->
                    </div>
                    <div class="item">
                        <!--Events One Single Start-->
                        <div class="events-one__single">
                            <div class="events-one__img">
                                <img src="assets/images/events/events-page-1-3.jpg" alt="">                                
                                <div class="events-one__content">                                    
                                    <h3 class="events-one__title"><a href="event-details.html">Chiller Descaling</a></h3>
                                </div>
                            </div>
                        </div>
                        <!--Events One Single End-->
                    </div>
                    <div class="item">
                        <!--Events One Single Start-->
                        <div class="events-one__single">
                            <div class="events-one__img">
                                <img src="assets/images/events/events-page-1-4.jpg" alt="">                                
                                <div class="events-one__content">                                    
                                    <h3 class="events-one__title"><a href="event-details.html">VRF Health Check</a></h3>
                                </div>
                            </div>
                        </div>
                        <!--Events One Single End-->
                    </div>
                    <div class="item">
                        <!--Events One Single Start-->
                        <div class="events-one__single">
                            <div class="events-one__img">
                                <img src="assets/images/events/events-page-1-5.jpg" alt="">                                
                                <div class="events-one__content">                                    
                                    <h3 class="events-one__title"><a href="event-details.html">Duct Cleaning</a></h3>
                                </div>
                            </div>
                        </div>
                        <!--Events One Single End-->
                    </div>
                    <div class="item">
                        <!--Events One Single Start-->
                        <div class="events-one__single">
                            <div class="events-one__img">
                                <img src="assets/images/events/events-page-1-6.jpg" alt="">
                                <div class="events-one__content">
                                    <h3 class="events-one__title"><a href="event-details.html">FUC Rebuild</a></h3>
                                </div>
                            </div>
                        </div>
                        <!--Events One Single End-->
                    </div>
                    <div class="item">
                        <!--Events One Single Start-->
                        <div class="events-one__single">
                            <div class="events-one__img">
                                <img src="assets/images/events/events-page-1-1.jpg" alt="">
                                
                                <div class="events-one__content">
                                    
                                    <h3 class="events-one__title"><a href="event-details.html">AHU Rebuild</a></h3>
                                </div>
                            </div>
                        </div>
                        <!--Events One Single End-->
                    </div>
                    <div class="item">
                        <!--Events One Single Start-->
                        <div class="events-one__single">
                            <div class="events-one__img">
                                <img src="assets/images/events/events-page-1-2.jpg" alt="">
                                <div class="events-one__content">
                                    <h3 class="events-one__title"><a href="event-details.html">AMC</a></h3>
                                </div>
                            </div>
                        </div>
                        <!--Events One Single End-->
                    </div>
                    
                </div>
            </div>
        </section>
        <!--Events Page End-->
        <!--Become Volunteer Start-->
        <section class="become-volunteer">
            <div class="container">
                <div class="become-volunteer__inner">
                    <div class="become-volunteer__left">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">Request for quote</span>
                            <h2 class="section-title__title">Request a Personalized Product Price quotation
                            </h2>
                        </div>
                    </div>
                    <div class="become-volunteer__right">
                        <a href="#" class="thm-btn become-volunteer__btn">Click Here</a>
                    </div>
                </div>
            </div>
        </section>
        <!--Become Volunteer End-->
        <!--Google Map Start-->
        <section class="google-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.7574085091046!2d90.41222667589795!3d23.79165148719043!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7a0d9c11b0f%3A0x6ce829f51c6e7bb4!2sOriental%20Arcadia%2C%2027%20Rd%2044%2C%20Dhaka%201212!5e0!3m2!1sen!2sbd!4v1767689246227!5m2!1sen!2sbd"
                class="google-map__one" allowfullscreen></iframe>

        </section>
        <!--Google Map End-->

        <!--Contact One Start-->
        <section class="contact-one">
            <div class="container">
                <div class="contact-one__inne">
                    <ul class="list-unstyled contact-one__list">
                        <li class="contact-one__single">
                            <div class="contact-one__icon">
                                <span class="icon-phone-call"></span>
                            </div>
                            <div class="contact-one__content">
                                <p class="contact-one__sub-title">Helpline</p>
                                <h3 class="contact-one__number"><a href="tel:+8801713107474">+8801713107474</a></h3>
                            </div>
                        </li>
                        <li class="contact-one__single">
                            <div class="contact-one__icon">
                                <span class="icon-message"></span>
                            </div>
                            <div class="contact-one__content">
                                <p class="contact-one__sub-title">Send email</p>
                                <h3 class="contact-one__number"><a
                                        href="mailto:info@airflowhvacbd.com">info@airflowhvacbd.com</a></h3>
                            </div>
                        </li>
                        <li class="contact-one__single">
                            <div class="contact-one__icon">
                                <span class="icon-location"></span>
                            </div>
                            <div class="contact-one__content">
                                <p class="contact-one__sub-title">Oriental Arcadia, Unit A8, Level 4</p>
                                <h3 class="contact-one__number">House 27, Road 44, Gulshan 2
Dhaka -1212</h3>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Contact One End-->
        <!--Brand One Start-->
        <section class="brand-one brand-two">
            <div class="section-title text-center">
                    <span class="section-title__tagline">We value our clients</span>
                    <h2 class="section-title__title">Our Clients </h2>
            </div>
            <div class="brand-two-shape-1" style="background-image: url(assets/images/shapes/brand-two-shape-1.png);">
            </div>
            <div class="container">
                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                            "0": {
                                "spaceBetween": 30,
                                "slidesPerView": 2
                            },
                            "375": {
                                "spaceBetween": 30,
                                "slidesPerView": 2
                            },
                            "575": {
                                "spaceBetween": 30,
                                "slidesPerView": 3
                            },
                            "767": {
                                "spaceBetween": 50,
                                "slidesPerView": 4
                            },
                            "991": {
                                "spaceBetween": 50,
                                "slidesPerView": 5
                            },
                            "1199": {
                                "spaceBetween": 100,
                                "slidesPerView": 6
                            }
                        }}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand-1-1.jpg" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand-1-2.jpg" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand-1-3.jpg" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand-1-4.jpg" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand-1-5.jpg" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand-1-6.jpg" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand-1-7.jpg" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand-1-8.jpg" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand-1-9.jpg" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand-1-10.jpg" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand-1-11.jpg" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand-1-12.jpg" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand-1-13.jpg" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand-1-14.jpg" alt="">
                        </div><!-- /.swiper-slide -->
                    </div>
                </div>
            </div>
        </section>
        <!--Brand One End-->
