<?php
/* Template Name: Programs and Activities Details
    Version: 1.0
*/
?>
 <!-- ==== banner section start ==== -->
<section class="banner-two">
    <div class="banner-two__slider swiper">
        <div class="swiper-wrapper">
            @foreach(getGalleryBySlug(collect(request()->segments())->last()) as $item)  

                <div class="swiper-slide">
                    <div class="banner-two__slider-single">
                        <div class="banner-two__slider-bg" data-background="{{ asset('public/uploads/'.$item['path']) }}">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-md-9 col-lg-7 col-xxl-6">
                                    <div class="banner-two__slider-content">
                                        <h3>{{ $item['caption'] }}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach                     

        </div>
    </div>
    <div class="slider-navigation d-none d-md-flex">
        <button type="button" aria-label="prev slide" title="prev slide" class="prev-banner slider-btn">
            <i class="fa-solid fa-arrow-left"></i>
        </button>
        <button type="button" aria-label="next slide" title="next slide" class="next-banner slider-btn slider-btn-next">
            <i class="fa-solid fa-arrow-right"></i>
        </button>
    </div>

    <div class="bottom-shape">
        <img src="{{ asset('/public/front/assets/images/banner/banner-one-shape.png')}}" alt="Image">
    </div>
</section>
<!-- ==== / banner section end ==== -->