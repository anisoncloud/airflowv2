<?php
/* Template Name: Video Gallery
    Version: 1.0
*/
?> 
<!-- ==== banner section start ==== -->
<section class="common-banner">
    <div class="container">
        <div class="row">
            <div class="common-banner__content text-center">

                <h2 class="title-animation">{{getPostTypeBySlug(collect(request()->segments())->last())->name}}</h2>
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

<!-- ==== blog details section start ==== -->
<section class="service-eight-area">
    <div class="container">

        <div class="row">
            @foreach(getPostsByType(collect(request()->segments())->last()) as $post)
           
                

            <div class="col-xl-4 col-lg-6 col-md-6">
                @auth()
                <!--toplabel menu -->
                <div class="navbar-dark bg-dark py-2">
                    <div class="container text-center">
                        <a class="text-white" href="{{url('/dashboard')}}">Dashboard</a>
                        <a class="text-white d-inline-block" href="{{url('/dashboard/posts/posttype/')}}/{{ $post->id }}/edit/{{$post->post_type}}">- Edit Post -</a>
                        <a class="text-white d-inline-block" href="{{ url('/logout') }}">Logout</a>
                    </div>
                </div>
                <!--end top lavel menu-->
                @endauth
                <div class="service-eight-wrapper aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-delay="200">
                    <div class="service-eight-thumb position-relative z-1">

                        <div class="video-btn-wrapper">
                            <a href="{{$post->excerpt}}" target="_blank" title="video Player"
                                class="open-video-popup">
                                <i class="icon-play"></i>
                            </a>
                        </div>
                        <img src="{!! asset('public/uploads/' . $post->thumbnail_path) ?? '' !!}" alt="">
                        <div class="service-eight-wrap">
                            <h4 class="service-eight-title">{{$post->title}}</h4>
                            <p class="service-eight-paragraph">{{$post->option_1}}</p>
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
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">


            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></span>
                </button>
                <!-- 16:9 aspect ratio -->
                <div class="ratio ratio-16x9">
                    <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always"
                        allow="autoplay"></iframe>
                </div>


            </div>

        </div>
    </div>
</div>
<!-- ==== / image gallery section end ==== -->