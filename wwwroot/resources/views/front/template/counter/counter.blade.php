<?php
/* Template Name: Counter
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

<section class="counter">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="counter__inner">
                    <div class="counter__single" data-aos="fade-up" data-aos-duration="1000">
                        <div class="thumb">
                            <i class="icon-support-hand"></i>
                        </div>
                        <div class="counter__content">
                            <h2><span class="odometer" data-odometer-final="38"></span><span class="prefix">+</span>
                            </h2>
                            <h5>Years of Service</h5>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="counter__single" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                        <div class="thumb">
                            <i class="icon-review"></i>
                        </div>
                        <div class="counter__content">
                            <h2><span class="odometer" data-odometer-final="6"></span><span class="prefix">+</span>
                            </h2>
                            <h5>VARD Program</h5>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="counter__single" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                        <div class="thumb">
                            <i class="icon-documents"></i>
                        </div>
                        <div class="counter__content">
                            <h2><span class="odometer" data-odometer-final="7"></span><span class="prefix">+</span>
                            </h2>
                            <h5>Districts Reached</h5>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="counter__single" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="900">
                        <div class="thumb">
                            <i class="icon-award"></i>
                        </div>
                        <div class="counter__content">
                            <h2><span class="odometer" data-odometer-final="5"></span><span class="prefix">+</span>
                            </h2>
                            <h5>Eye Care Facilities</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="poor">
        <img src="{{ asset('/public/front/assets/images/counter.jpg')}}" alt="Image" class="parallax-image">
    </div>
    <div class="shape-left aos-init aos-animate" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="300">
        <img src="{{ asset('/public/front/assets/images/cta/shape-left.png')}}" alt="Image" class="base-img">
    </div>
</section>