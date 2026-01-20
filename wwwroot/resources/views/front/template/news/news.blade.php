<?php
/* Template Name: News
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
<!-- ==== / banner section end ==== -->
<!-- ==== blog section start ==== -->
<section class="blog-main blog cm-details">
    <div class="container">
        <div class="row gutter-60">
            <div class="col-12 col-xl-8">
                <div class="row gutter-30">
                    @foreach(getPostsByType(collect(request()->segments())->last()) as $post)
                    <div class="col-12 col-lg-6">
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
                        <div class="blog__single-wrapper" data-aos="fade-up" data-aos-duration="1000">
                            <div class="blog__single van-tilt">
                                <div class="blog__single-thumb">
                                    <a href="{{url($post->post_type, $post->slug)}}">
                                        <img src="{!! asset('public/uploads/' . $post->thumbnail_path) ?? '' !!}" alt="">
                                    </a>
                                    <!-- <div class="tag">
                                        <a href="news-details.php"><i class="fa-solid fa-tags"></i>Health</a>
                                    </div> -->
                                </div>
                                <div class="blog__single-inner">
                                    <!-- <div class="blog__single-meta">
                                        <p><i class="icon-user"></i>Robert Fox</p>
                                        <p><i class="icon-message"></i>Comments (03)</p>
                                    </div> -->
                                    <div class="blog__single-content">
                                        <h5><a href="{{url($post->post_type, $post->slug)}}">{{$post->title}}</a>
                                        </h5>
                                    </div>
                                    <div class="blog__single-cta">
                                        <a href="{{url($post->post_type, $post->slug)}}" aria-label="blog details" title="blog details">Read
                                            More<i class="fa-solid fa-circle-arrow-right"></i></a>
                                    </div>
                                </div>
                                <img src="{{ asset('/public/front/assets/images/blog/spade.png')}}" alt="Image" class="spade-two">
                            </div>
                        </div>
                    </div>
                    @endforeach 
                    {!! getPostsByType(collect(request()->segments())->last())->withQueryString()->links('pagination::bootstrap-5') !!}
                     
                </div>
                <!-- <div class="row">
                    <div class="col-12">
                        <div class="pagination-wrapper" data-aos="fade-up" data-aos-duration="1000">
                            <ul class="pagination main-pagination">
                                <li>
                                    <button>
                                        <i class="fa-solid fa-angles-left"></i>
                                    </button>
                                </li>
                                <li>
                                    <a href="blog-list.html">1</a>
                                </li>
                                <li>
                                    <a href="blog-list.html" class="active">2</a>
                                </li>
                                <li>
                                    <a href="blog-list.html">3</a>
                                </li>
                                <li>
                                    <button>
                                        <i class="fa-solid fa-angles-right"></i>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> -->

            </div>
            <div class="col-12 col-xl-4">

                <div class="cm-details__sidebar">

                    <div class="cm-sidebar-widget" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                        <div class="intro">
                            <h5>Recent Posts</h5>
                        </div>
                        <div class="cm-sidebar-post">
                            @foreach(getPostsByType(collect(request()->segments())->last()) as $post)
                            <div class="single-item">
                                <div class="thumb">
                                    <a href="blog-details.html">
                                        <img src="{!! asset('public/uploads/' . $post->thumbnail_path) ?? '' !!}" alt="Image">
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
<!-- ==== / blog section end ==== -->