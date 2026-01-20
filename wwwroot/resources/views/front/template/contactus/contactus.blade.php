<?php
/* Template Name: Contact us
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

<!-- ==== contact section start ==== -->
<section class="contact-main volunteer">
    <div class="container">
        <div class="row gutter-40">
            <div class="col-12 col-xl-6">
                <div class="contact__content">
                    <div class="section__content" data-aos="fade-up"
                        data-aos-duration="1000">

                        <h2 class="title-animation">{!! getContentBySlug(collect(request()->segments())->last())->title ?? '' !!}</h2>
                        <p>{!! getContentBySlug(collect(request()->segments())->last())->excerpt ?? '' !!}</p>
                    </div>
                    <div class="contact-main__inner cta">
                        <style>{!! getContentBySlug(collect(request()->segments())->last())->content_css ?? '' !!}</style>
                        {!! getContentBySlug(collect(request()->segments())->last())->content ?? '' !!}                        
                        </p>
                    </div>
                    <div class="contact-main__thumb cta">
                        <img src="{{ asset('/public/front/assets/images/agriculture.jpg')}}"
                            alt="Image">
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-6">
                <div
                    class="contact__form volunteer__form checkout__form"
                    data-aos="fade-up" data-aos-duration="1000"
                    data-aos-delay="100">
                    <div class="volunteer__form-content">
                        <h4 class="title-animation">Fill Up The
                            Form</h4>
                        <p>Your email address will not be published.
                            Required fields are marked *</p>
                    </div>
                    <form action="{{ url('/feedbacks') }}" method="post" class="cta">
                    @csrf
                    <input type="hidden" placeholder="Your name" name="form_name" value="Contact Us">
                        <div class="input-single">
                            <input type="text" name="Full Name"
                                id="fullName"
                                placeholder="Enter Name" required>
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <div class="input-single">
                            <input type="email" name="Email"
                                id="cEmail"
                                placeholder="Enter Email" required>
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="input-single">
                            <input type="text" name="phone-number"
                                id="phoneNumber"
                                placeholder="Phone Number" required>
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="input-single alter-input">
                            <textarea name="contact-message"
                                id="contactMessage"
                                placeholder="Your Message..."></textarea>
                            <i class="fa-solid fa-comments"></i>
                        </div>

                        <div class="mb-3 form-check">
                            @if(session()->has('message'))
                                
                                <div class="alert alert-success" role="alert">
                                    {{session('message')}}
                                </div>
                                @endif
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                        </div>

                        <div class="form-cta">
                            <button type="submit"
                                aria-label="submit message"
                                title="submit message"
                                class="btn--primary">Get A Quote <i
                                    class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==== / contact section end ==== -->