<?php
/* Template Name: Single Page
    Version: 1.0
*/
?>
<section class="common-banner">
    <div class="container">
        <div class="row">
            <div class="common-banner__content text-center">
                <h2 class="title-animation">{!! getContentBySlug(collect(request()->segments())->last())->title ?? '' !!}</h2>
            </div>
        </div>
    </div>
    <div class="banner-bg">
        <img src="{!! asset('public/uploads/' . getContentBySlug(collect(request()->segments())->last())->thumbnail_path) ?? '' !!}" alt="Image">
    </div>
    <div class="shape">
        <img src="{{ asset('/public/front/assets/images/banner/banner-one-shape.png')}}" alt="Image">
    </div>
    <div class="sprade aos-init aos-animate" data-aos="zoom-in" data-aos-duration="1000">
        <img src="{{ asset('/public/front/assets/images/sprade-base.png')}}" alt="Image" class="base-img">
    </div>
</section>


 
<section class="contact-main volunteer">
    <div class="container">
         <style>{!! getContentBySlug(collect(request()->segments())->last())->content_css ?? '' !!}</style>
        {!! getContentBySlug(collect(request()->segments())->last())->content ?? '' !!}
    </div>
</section>    