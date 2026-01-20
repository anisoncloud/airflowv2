<?php
/* Template Name: Care Service
    Version: 1.0
*/
?> 
<!-- ==== profit section start ==== -->
<section class="fc-profit pt-120 pb-120 bg-fc">
    <div class="container">
        <div class="row gutter-30 align-items-left">
            <div class="col-12 col-md-12 col-xl-12 mb-5  aos-init" data-aos="fade-up" data-aos-duration="1000"
                data-aos-delay="300">
                <div class="section__header mb-0">
                    <h2 class="title-animation mt-0 fw-7 hb text-left"> VARD Eye Care Services (VARD-ECS):
                    </h2>
                    <span>The goal of VARD-ECS is to contribute to the reduction of avoidable blindness and to promote
                        social inclusion of Visually Impaired (VI) people of program areas. VARD-ECS provided eye health
                        service at field level of four eye hospitals are: </Span>
                </div>
            </div>

        </div>
        <div class="row gutter-40 mt-60">
            <div class="col-12 col-lg-5 col-xl-5">
                <div class="fc-profit__tab-btns">
                @foreach(getPostsByType("care-service") as $post)
                    <button class="profit__tab-btn {{$post->position == '1' ? 'active': ''}}" data-target="#profit-one{{$post->id}}"> {{$post->title}}<i class="fa-solid fa-arrow-right"></i>
                    </button>
                @endforeach 
                    <!-- <button class="profit__tab-btn " data-target="#profit-two"> VARD Eye Hospital, Osmaninagar, Sylhet
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>

                    <button class="profit__tab-btn " data-target="#profit-three"> VARD Eye Hospital, Jatorpur, Sylhet <i
                            class="fa-solid fa-arrow-right"></i>
                    </button>
                    <button class="profit__tab-btn " data-target="#profit-four"> VARD Kamal Eye Hospital, Chauddagram,
                        Cumilla<i class="fa-solid fa-arrow-right"></i></button>
                    <button class="profit__tab-btn " data-target="#profit-five">
                        VARD primary Eye Care Centre, Chattak, Sunamganj <i class="fa-solid fa-arrow-right"></i>
                    </button> -->
                              <div class="open-time"> <ul class="list-unstyled events-one__meta d-flex">
                                        <li><img src="https://devs.ailservers.com/vardbd.org/public/uploads/2026/01/696f5abf03933_time.gif"  width= "40px;"><h5>We are Open</h5></li>
                                        <li><i class="fas fa-clock"></i> 8:00am </li>
                                        <li><i class="fas fa-clock"></i> 9:00pm </li> 
                                    </ul>
                                    </div> 
                </div>
            </div>
            <div class="col-12 col-lg-7 col-xl-7">
                <div class="fc-profit__content">
                    @foreach(getPostsByType("care-service") as $post)
                    <div class="fc-profit-single" id="profit-one{{$post->id}}">
                        <img src="{!! asset('public/uploads/' . $post->thumbnail_path) ?? '' !!}" alt="">
                    </div>
                    @endforeach                     

                </div>
            </div>
        </div>
    </div>
    <div class="shape-left" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
        <img src="{{ asset('/public/front/assets/images/profit-vector.png')}}" alt="Image" class="base-img">
    </div>

    <div class="shape-right" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300">
        <img src="{{ asset('/public/front/assets/images/testimonial/testimonail-seven-shape.png')}}" alt="Image">
    </div>
</section>
<!--  -->