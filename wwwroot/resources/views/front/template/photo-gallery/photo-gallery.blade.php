<?php
/* Template Name: Photo Gallery
    Version: 1.0
*/
?> 
<!-- ==== banner start ==== -->
<!-- ==== banner section start ==== -->
<section class="common-banner">
    <div class="container">
        <div class="row">
            <div class="common-banner__content text-center">

                <h2 class="title-animation">Phato Gallery</h2>
            </div>
        </div>
    </div>
    <div class="banner-bg">
        <img src="{{ asset('/public/uploads/')}}/{{getPostTypeBySlug(collect(request()->segments())->last())->pt_thumbnail_path}}" alt="Image">
    </div>
    <div class="shape">
        <img src="{{ asset('/public/front/assets/images/banner/banner-one-shape.png')}}" alt="Image">
    </div>
    <div class="sprade" data-aos="zoom-in" data-aos-duration="1000">
        <img src="{{ asset('/public/front/assets/images/sprade-base.png')}}" alt="Image" class="base-img">
    </div>
</section>
<!-- ==== / banner section end ==== -->
<!-- ==== blog details section start ==== -->
<section class="service-eight-area">
    <div class="container">

        <div class="row">
            @foreach(getPostsByType(collect(request()->segments())->last()) as $post)
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="service-eight-wrapper aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-delay="200">
                    <div class="service-eight-thumb position-relative z-1">
                        <a href="{{url($post->post_type, $post->slug)}}"><img src="{!! asset('public/uploads/' . $post->thumbnail_path) ?? '' !!}" alt=""></a>
                        <div class="service-eight-button">
                            <a href="{{url($post->post_type, $post->slug)}}"><i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                        <div class="service-eight-wrap">
                            <h4 class="service-eight-title"><a href="#">{{$post->title}}</a></h4>
                            <p class="service-eight-paragraph">Welcome to Charifund, where we</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach 
            {!! getPostsByType(collect(request()->segments())->last())->withQueryString()->links('pagination::bootstrap-5') !!}
        </div>
    </div>
</section>
<!-- ==== / blog details section end ==== -->
<!-- ==== / image gallery section end ==== -->