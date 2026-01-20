<?php
/* Template Name: Faq
    Version: 1.0
*/
?> 
<!-- ==== faq section start ==== -->
<section class="faq" id="faqSection">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-8 col-xl-6">
                <div class="faq__content">
                    <div class="section__content" data-aos="fade-up" data-aos-duration="1000">

                        <h2 class="title-animation">Frequently
                            <span>Asked</span>Questions 
                        </h2>
                    </div>
                    <div class="faq__content-inner cta" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="100">
                        <div class="accordion" id="accordion">
                        @foreach(getPostsByType("faq") as $post)
                            <div class="accordion-item">
                                <h6 class="accordion-header" id="headingOne{{$post->id}}">
                                    <button class="accordion-button  {{$post->position == "1" ? 'collapsed':'' }}" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne{{$post->id}}" aria-expanded="true" aria-controls="collapseOne{{$post->id}}">{{$post->title}}

                                    </button>
                                </h6>
                                <div id="collapseOne{{$post->id}}" class="accordion-collapse collapse {{$post->position == "1" ? 'show':'' }}"
                                    aria-labelledby="headingOne{{$post->id}}" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>{!! $post->content !!}

                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-xl-5 offset-xl-1">
                <div class="faq__thumb d-none d-lg-block">
                    <div class="faq__thumb-inner">
                        <div class="thumb-lg" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                            <img src="{{ asset('/public/front/assets/images/gallery/faq-r.jpg')}}" alt="Image">
                        </div>
                        <div class="thumb-sm" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="300">
                            <img src="{{ asset('/public/front/assets/images/faq/thumb-sm.png')}}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape d-none d-lg-block">
        <img src="{{ asset('/public/front/assets/images/faq/shape.png')}}" alt="Image">
    </div>
</section>
<!-- ==== / faq section end ==== -->