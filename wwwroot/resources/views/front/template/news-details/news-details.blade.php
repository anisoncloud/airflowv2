<?php
/* Template Name: News Details
    Version: 1.0
*/
?>
<!-- ==== banner section start ==== -->
<section class="common-banner">
    <div class="container">
        <div class="row">
            <div class="common-banner__content text-center">

                <h2 class="title-animation">{{getContentBySlug(collect(request()->segments())->last())->title}}</h2>
            </div>
        </div>
    </div>
    <div class="banner-bg">
        <img src="{{ asset('/public/uploads/')}}/{{getContentBySlug(collect(request()->segments())->last())->thumbnail_path}}" alt="Image">
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
<section class="blog-main cm-details">
    <div class="container">
        <div class="row gutter-60">
            <div class="col-12 col-xl-8">
                <div class="cm-details__content">
                    <div class="cm-details__poster" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                        <img src="{{ asset('/public/uploads/')}}/{{getContentBySlug(collect(request()->segments())->last())->thumbnail_path}}" alt="Image">
                    </div>
                    <!-- <div class="cm-details-meta">
                        <p><i class="fa-solid fa-calendar-days"></i>02 Apr 2021</p>
                        <p><i class="fa-solid fa-location-dot"></i>684 West College St. Sun City, USA</p>
                    </div> -->
                    <div class="cm-group cta">
                        <h3 class="title-animation">{!! getContentBySlug(collect(request()->segments())->last())->title ?? '' !!}</h3>
                        {!! getContentBySlug(collect(request()->segments())->last())->content ?? '' !!}
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-4">
                <div class="blog-main__sidebar">

                    <div class="cm-details__sidebar">

                        <div class="cm-sidebar-widget" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                            <div class="intro">
                                <h5>Recent News</h5>
                            </div>
                            <div class="cm-sidebar-post">
                                @foreach(getPostsByType(getContentBySlug(collect(request()->segments())->last())->post_type) as $post)
                                <div class="single-item">
                                    <div class="thumb">
                                        <a href="blog-details.html">
                                            <img src="{{ asset('/public/uploads/')}}/{{$post->thumbnail_path}}" alt="Image">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <!-- <p><i class="fa-solid fa-calendar-days"></i> <span>November 19, 2024</span>
                                        </p> -->
                                        <p><a href="{{url($post->post_type, $post->slug)}}">{{$post->title}}</a>
                                        </p>
                                    </div>
                                </div>
                                @endforeach 
                            </div>
                        </div>
                        <div class="cm-sidebar-widget" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                            <div class="intro">
                                <h5>Downloads</h5>
                            </div>
                            <div class="cm-categories">
                            @foreach(getPostsByType('download') as $post1)
                                <a href="{{url('/download')}}">
                                    <span>{{$post1->title}}</span> 
                                </a>
                            @endforeach  
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==== / blog details section end ==== -->