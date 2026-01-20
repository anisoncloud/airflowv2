<?php
/* Template Name: About us
    Version: 1.0
*/
?> 
@auth()
<!--toplabel menu -->
<div class="navbar-dark bg-dark py-2">
    <div class="container text-center">
        <a class="text-white" href="{{url('/dashboard')}}">Dashboard</a>
        <a class="text-white d-inline-block" href="{{url('/dashboard/posts/posttype/')}}/{{ getContentBySlug('aboutus')->id }}/edit/{{getContentBySlug('aboutus')->post_type}}">- Edit Post -</a>
        <a class="text-white d-inline-block" href="{{ url('/logout') }}">Logout</a>
    </div>
</div>
<!--end top lavel menu-->
@endauth

 <div class="ztc-preloader">
            <div class="ztc-loading-container">
                <div class="ztc-loading"></div>
                <div id="ztc-loading-icon">
                    <img src="{{ getSetting('site_logo') == null ? asset('packages/larapress/src/Assets/admin/img/larapress.png') : asset('public/uploads/').'/'.getSetting('site_logo') }}" alt="@getSetting('site_title')">
                </div>
            </div>
        </div>
        <script>
        window.addEventListener('load', () => {
            const preloader = document.querySelector('.ztc-preloader');
            // Move to corner
            setTimeout(() => {
                preloader.classList.add('ztc-loaded');
                // Hide immediately after animation completes (1.5s transition)
                setTimeout(() => {
                    preloader.classList.add('ztc-hidden');
                }, 1000);
            }, 1500);
        });
        </script>
        <!-- ==== / preloader end ==== -->


<!-- ==== help section start ==== -->
<section class="help-two" id="aboutSection">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-5 col-xxl-6 ">
                <div class="help-two__thumb d-none d-lg-block">
                    <div class="help-two__thumb-inner">
                        <div class="thumb-lg" data-aos="fade-up" data-aos-duration="1000">
                            <img src="{!! getContentBySlug('aboutus')->option_3 !!}" alt="Image">
                        </div>
                        <div class="thumb-sm" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">
                            <img src="{!! getContentBySlug('aboutus')->option_4 !!}" alt="Image">
                        </div>
                        <div class="thumb-md" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                            <img src="{!! getContentBySlug('aboutus')->more_option_1 !!}" alt="Image">
                        </div>
                        <div class="help-two__thumb-content">
                            <div class="thumb">
                                <i class="icon-donation"></i>
                            </div>
                            <div class="content">
                                <h2><span class="odometer" data-odometer-final="{!! getContentBySlug('aboutus')->more_option_2 !!}"></span><span>+</span>
                                </h2>
                                <p>Services we Provide</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-7 col-xxl-6">
                <div class="help-two__content">
                    <div class="section__content">

                        <h2 class="title-animation">The Story <span>Behind</span> Us
                        </h2>
                        <p>{!! getContentBySlug('aboutus')->excerpt !!}<span class="more_tex"><a href="{{url('/pages/back-ground')}}">More</a></span></p>
                    </div>
                    <div class="help-two__inner cta">
                        <div class="help-two__inner-content">
                            <div class="help__content-icon-group">
                                <a href="{{ url(getContentBySlug('aboutus')->post_type,getContentBySlug('aboutus')->slug)}}">
                                    <div class="help__content-icon">
                                        <div class="thumb">
                                            <i class="icon-make-donation"></i>
                                        </div>
                                        <div class="content">
                                            <h6>Vision of VARD</h6>
                                            <p>{!! getContentBySlug('aboutus')->option_1 !!}</p>
                                        </div>
                                    </div>
                                </a>
                                <hr>
                                <a href="{{ url(getContentBySlug('aboutus')->post_type,getContentBySlug('aboutus')->slug)}}">
                                    <div class="help__content-icon">
                                        <div class="thumb">
                                            <i class="icon-support-heart"></i>
                                        </div>
                                        <div class="content">
                                            <h6>Mission of VARD</h6>
                                            <p>{!! getContentBySlug('aboutus')->option_2 !!}</p>
                                        </div>
                                </a>
                            </div>

                        </div>

                    </div>
                    <div class="help-two-card-wrapper">
                        <a href="{{url('/posts/message-from-founder')}}">
                            <div class="help-two__card van-tilt">
                                <div class="help-card-thumb">
                                    <img src="{{ asset('/public/front/assets/images/md-ph.png')}}" alt="Image">

                                </div>
                                <div class="help-card-content">
                                    <h6>Message from Founder and Executive Director</h6>
                                    <p>Voluntary Association for Rural Development (VARD) was established in 1988.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- ==== / help section end ==== -->