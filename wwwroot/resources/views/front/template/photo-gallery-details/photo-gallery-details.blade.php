<?php
/* Template Name: Photo Gallery Details
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

<section class="photo-gallery pb-5">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 gallery-grid">
            @php $values = explode(",",getContentBySlug(collect(request()->segments())->last())->gallery_img); @endphp
                @php $count = 1; @endphp
                @foreach($values as $imgid)
                    @if($imgid) 

                    <div class="col">
                        <a class="gallery-item" href="{{ asset('public/uploads/') }}/{{$imgid }}">
                            <img src="{{ asset('public/uploads/') }}/{{$imgid }}" class="img-fluid"
                                alt=" ">
                        </a>
                    </div>
                    
                    @php $count++; @endphp                                          
                @endif
            @endforeach	     
            
             
        </div>
    </div>
</section>
<!-- ==== / image gallery section end ==== -->
<div class="modal fade lightbox-modal" id="lightbox-modal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen">
        <div class="modal-content">
            <button type="button" class="btn-fullscreen-enlarge" aria-label="Enlarge fullscreen">
                <svg class="bi">
                    <use href="#enlarge"></use>
                </svg>
            </button>
            <button type="button" class="btn-fullscreen-exit d-none" aria-label="Exit fullscreen">
                <svg class="bi">
                    <use href="#exit"></use>
                </svg>
            </button>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body">
                <div class="lightbox-content">
                    <!-- JS content here -->
                </div>
            </div>
        </div>
    </div>
</div>