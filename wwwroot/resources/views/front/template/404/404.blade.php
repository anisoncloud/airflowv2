<?php
/* Template Name: 404 Pages
    Version: 1.0
*/
?> 

<!-- ==== banner section start ==== -->
<div class="page-wrapper ">
    <!-- ==== preloader start ==== -->
    <div class="preloader">
        <i class="icon-donation"></i>
        <p>CHARIFUND</p>
    </div>
    <!-- ==== / preloader end ==== -->
    <!-- ==== error section start ==== -->
    <section class="error pt-120 pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-7">
                    <div class="error__content text-center" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="300">
                        <div class="thumb">
                            <img src="{{ asset('/public/front/assets/images/error.png')}}" alt="Image">
                        </div>
                        <!-- <h2 class="title-animation">404</h2> -->
                        <h3 class="title-animation">Page Not Found</h3>
                        <p>It could have been removed, renamed, or temporarily unavailable. Try searching for what
                            you're
                            looking for.</p>
                        <div class="cta">
                            <a href="index.html" aria-label="back to home" title="back to home"
                                class="btn--primary">Back To
                                Home <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="spade">
            <img src="{{ asset('/public/front/assets/images/blog/spade-base.png')}}" alt="Image" class="base-img">
        </div>
        <div class="spade-green">
            <img src="{{ asset('/public/front/assets/images/sprade-green.png')}}" alt="Image">
        </div>
    </section>
    <!-- ==== / error section end ==== -->
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

</div>
<!-- ==== / contact section end ==== -->