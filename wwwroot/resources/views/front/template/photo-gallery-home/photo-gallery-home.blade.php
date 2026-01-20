<?php
/* Template Name: Photo Gallery Home
    Version: 1.0
*/
?> 
<!-- ==== award section start ==== -->
<section class="award" id="eventSection">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10 col-xl-8">
                <div class="section__header text-center" data-aos="fade-up" data-aos-duration="1000">
                    <h6 class="section-eight-subtitle d-inline-block">Our Gallery</h6>
                    <h2 class="title-animation">
                        <span>Photo</span>
                        Gallery
                    </h2>
                </div>
            </div>
        </div>
        <div class="row gutter-24">
        @foreach(getPostsByType("photo-gallery") as $post)
            @if($post->position == "1")
            <div class="col-12 col-lg-8">
                <div class="award__single" data-aos="fade-up" data-aos-duration="1000">
                    <div class="thumb">
                        <a href="{{url($post->post_type, $post->slug)}}">
                            <img src="{!! asset('public/uploads/' . $post->thumbnail_path) ?? '' !!}" alt="Image">
                        </a>
                    </div>
                    <div class="content">
                        <div class="award__content">
                            <h5><a href="{{url($post->post_type, $post->slug)}}">{{$post->title}}</a></h5>
                            <p>{{$post->excerpt}} </p>
                        </div>
                        <div class="award__thumb">
                            <a href="{{url($post->post_type, $post->slug)}}">
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @elseif($post->position == "2")
            <div class="col-12 col-lg-4">
                <div class="award__single" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="thumb">
                        <a href="{{url($post->post_type, $post->slug)}}">
                            <img src="{!! asset('public/uploads/' . $post->thumbnail_path) ?? '' !!}" alt="Image">
                        </a>
                    </div>
                    <div class="content">
                        <div class="award__content">
                            <h5><a href="{{url($post->post_type, $post->slug)}}">{{$post->title}}</a></h5>
                            <p>{{$post->excerpt}} </p>
                        </div>
                        <div class="award__thumb">
                            <a href="{{url($post->post_type, $post->slug)}}">
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @elseif($post->position == "3")
            <div class="col-12 col-lg-5">
                <div class="award__single" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <div class="thumb">
                        <a href="{{url($post->post_type, $post->slug)}}">
                            <img src="{!! asset('public/uploads/' . $post->thumbnail_path) ?? '' !!}" alt="Image">
                        </a>
                    </div>
                    <div class="content">
                        <div class="award__content">
                            <h5><a href="{{url($post->post_type, $post->slug)}}">{{$post->title}}</a></h5>
                            <p>{{$post->excerpt}} </p>
                        </div>
                        <div class="award__thumb">
                            <a href="{{url($post->post_type, $post->slug)}}">
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @elseif($post->position == "4")
            <div class="col-12 col-lg-7">
                <div class="award__single" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                    <div class="thumb">
                        <a href="{{url($post->post_type, $post->slug)}}">
                            <img src="{!! asset('public/uploads/' . $post->thumbnail_path) ?? '' !!}" alt="Image">
                        </a>
                    </div>
                    <div class="content">
                        <div class="award__content">
                            <h5><a href="{{url($post->post_type, $post->slug)}}">{{$post->title}}</a></h5>
                            <p>{{$post->excerpt}} </p>
                        </div>
                        <div class="award__thumb">
                            <a href="{{url($post->post_type, $post->slug)}}">
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        @endforeach 
        </div>
        <div class="row">
            <div class="col-12">
                <div class="section__cta cta text-center">
                    <a href="{{url('/photo-gallery')}}" aria-label="our events" title="our events" class="btn--primary">View
                        All <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="spade">
        <img src="{{ asset('/public/front/assets/images/community/spade.png')}}" alt="Image" class="base-img">
    </div>
</section>
<!-- ==== / award section end ==== -->