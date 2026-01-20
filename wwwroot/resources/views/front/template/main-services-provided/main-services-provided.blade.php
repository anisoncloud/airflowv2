<?php
/* Template Name: Main Services provided
    Version: 1.0
*/
?> 


<!-- ==== testimonial section start ==== -->
<section class="testimonial-seven-area project-panel-area position-relative z-1">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-4">
                <div class=" project-panel">
                    <img src="{{ asset('/public/front/assets/images/testimonial-seven-thumb.jpg')}}" alt="thumb">

                </div>


            </div>
            <div class="col-xl-7 col-lg-8">
                <div class="row">
                    <div class="col-xl-12 project-panel">
                        <div class="testimonial-seven-wrapper">
                            <h4 class="testimonial-seven-title">Main Services provided by VARD Eye Hospital’s</h4>
                            <ul>
                                <li><i class="fa-solid fa-circle-check"></i> Provide prescriptions for all eye diseases
                                </li>
                                <li><i class="fa-solid fa-circle-check"></i> Vision correction with glasses or contact
                                    lenses for both pediatric and adult
                                    patients</li>
                                <li><i class="fa-solid fa-circle-check"></i> Phaco Surgery for both adult and pediatric
                                    patients</li>
                                <li><i class="fa-solid fa-circle-check"></i> Small Incision Cataract Surgery (SICS)</li>
                                <li><i class="fa-solid fa-circle-check"></i> Free of cost Cataract Surgery for patients
                                </li>
                                <li><i class="fa-solid fa-circle-check"></i> Yag Laser capsulotomy</li>
                                <li><i class="fa-solid fa-circle-check"></i> Yag Laser Peripheral Iridectomy</li>
                                <li><i class="fa-solid fa-circle-check"></i> Dacryo Cysto Rhinostomy ( DCR) Surgery</li>
                                <li><i class="fa-solid fa-circle-check"></i> Dacryo Cystectomy (DCT) Surgery</li>
                                <li><i class="fa-solid fa-circle-check"></i> Glaucoma surgery</li>
                                <li><i class="fa-solid fa-circle-check"></i> Pterygium (Normal) Surgery</li>
                                <li><i class="fa-solid fa-circle-check"></i> Pterygium (Grafting) Surgery</li>
                                <li><i class="fa-solid fa-circle-check"></i> Other minor Surgery</li>
                                <li><i class="fa-solid fa-circle-check"></i> Eye dressing</li>
                                <li><i class="fa-solid fa-circle-check"></i> Saline Wash</li>
                                <li><i class="fa-solid fa-circle-check"></i> Eye Pad Bandage </li>
                                <li><i class="fa-solid fa-circle-check"></i> Foren Body Removal</li>

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 project-panel">
                        <div class="testimonial-seven-wrapper">
                            <h4 class="testimonial-seven-title">Our Diagnostic services:</h4>
                            <ul>
                                <li><i class="fa-solid fa-circle-check"></i> Biometric Scan </li>
                                <li><i class="fa-solid fa-circle-check"></i> Identification of Intra Ocular Pressure
                                    (IOP) </li>
                                <li><i class="fa-solid fa-circle-check"></i> Sec test (SPT)</li>
                                <li><i class="fa-solid fa-circle-check"></i> Random Blood Sugar (RBS) test</li>
                                <li><i class="fa-solid fa-circle-check"></i> Urine Sugar test</li>
                                <li><i class="fa-solid fa-circle-check"></i> Schirmer’s test</li>
                                <li><i class="fa-solid fa-circle-check"></i> ECG</li>
                                <li><i class="fa-solid fa-circle-check"></i> Corneal Scraping</li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 project-panel">
                        <div class="testimonial-seven-wrapper">
                            <h4 class="testimonial-seven-title">Our distinctiveness</h4>
                            <ul>
                                <li><i class="fa-solid fa-circle-check"></i> Low cost but standard and quality services
                                </li>
                                <li><i class="fa-solid fa-circle-check"></i> Sperate Male and Female General Ward</li>
                                <li><i class="fa-solid fa-circle-check"></i> Cabin facilities with Air Condition </li>
                                <li><i class="fa-solid fa-circle-check"></i> Free cataract surgery with IOL for poor and
                                    hardcore poor in the project areas and
                                    free accommodation, food, transport, medicine black spectacles etc.</li>
                                <li><i class="fa-solid fa-circle-check"></i> Experienced and expert doctors for
                                    diagnosis and treatment</li>
                                <li><i class="fa-solid fa-circle-check"></i> Well decorated operation theatre with
                                    ultra-modern equipment’s</li>
                                <li><i class="fa-solid fa-circle-check"></i> Well accommodation and food facilities for
                                    operated patients</li>
                                <li><i class="fa-solid fa-circle-check"></i> Well-equipped Spectacle Corner </li>
                                <li><i class="fa-solid fa-circle-check"></i> Model Pharmacy for dispense medicine with
                                    fair price</li>
                                <li><i class="fa-solid fa-circle-check"></i> Separate prayer place</li>
                                <li><i class="fa-solid fa-circle-check"></i> Uninterrupted electric supply from its own
                                    generator </li>
                                <li><i class="fa-solid fa-circle-check"></i> Restaurant facilities with quality and
                                    affordable food for patient attendant. </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="testimonial-seven-shape">
        <img src="{{ asset('/public/front/assets/images/testimonial/testimonail-seven-shape.png')}}" alt="shape">
    </div>
</section>
<!-- ==== testimonial section end ==== -->


<!-- ==== cause slider two section start ==== -->
<section class="cause-two">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="cause-two__inner">
                    <div class="slider-navigation">
                        <button type="button" aria-label="prev slide" title="prev slide"
                            class="prev-cause-two slider-btn">
                            <i class="fa-solid fa-arrow-left"></i>
                        </button>
                        <button type="button" aria-label="next slide" title="next slide"
                            class="next-cause-two slider-btn slider-btn-next">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                    <div class="cause-two__slider swiper">
                        <div class="swiper-wrapper">
                        @foreach(getPostsByType("eye-care-gallery") as $post)
                            <div class="swiper-slide">
                                <div class="cause-two__slider-single">
                                    <div class="cause-thumb">
                                        <img src="{!! asset('public/uploads/' . $post->thumbnail_path) ?? '' !!}" alt="Image">

                                    </div>
                                </div>
                            </div>
                        @endforeach 
                        </div>
                    </div>
                </div>
                <div class="cause-two__content-slider swiper">
                    <div class="swiper-wrapper">
                    @foreach(getPostsByType("eye-care-gallery") as $post)
                        <div class="swiper-slide">
                            <div class="cause-content">
                                <h4>{{$post->title}}</h4>
                                <p>{{$post->excerpt}}</p>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==== / cause slider two section end ==== -->




<!-- ==== / profit section end ==== -->
<section class="pt-120 pb-120 bg-fc cat_offic_ad">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-3 col-xl-3">
                <div class="contact-main__single aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-delay="200">
                    <div class="content">
                        <h6><i class="fa-solid fa-location-dot"></i> VARD Head Office</h6>
                        <p>
                            <a href="#" target="_blank">
                                House-554(3rd floor), Road-9
                                Baitul Aman Housing Society
                                Adabor, Dhaka-1207.<br>
                                Phone: 88-02-48110165, 48112791<br>
                                Fax: 88-02-48113262<br>
                                E-mail: vardho@vardbd.org<br>
                                Web: www.vardbd.org



                            </a>
                        </p>

                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 col-xl-3">
                <div class="contact-main__single  aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-delay="200">
                    <div class="content">
                        <h6><i class="fa-solid fa-location-dot"></i> VARD Eye Hospital</h6>
                        <p>
                            <a href="#" target="_blank">
                                Osmaninagar, Sylhet<br>
                                (Opposite of Osmaninagar Thana)<br>
                                Cell: 01729-711278,<br> 01779-031703
                                E-mail: vard.ehb@gmail.com
                            </a>
                        </p>

                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 col-xl-3">
                <div class="contact-main__single aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-delay="200">
                    <div class="content">
                        <h6><i class="fa-solid fa-location-dot"></i> VARD Eye Hospital</h6>
                        <p>
                            <a href="#" target="_blank">
                                Iqbalnagar, Sunamganj<br>
                                Cell: 01745-387851,<br> 01795-709604<br>
                                E-mail: vardehsunam@gmail.com

                            </a>
                        </p>

                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 col-xl-3">
                <div class="contact-main__single aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-delay="200">
                    <div class="content">
                        <h6><i class="fa-solid fa-location-dot"></i> VARD Eye Hospital</h6>
                        <p>
                            <a href="#" target="_blank">
                                61 Nabopushpo, Jatorpur,<br> Sylhet<br>
                                Cell: 01729-737160, <br>01739-618422 <br>
                                E-mail: vardehjatarpursylhet@gmail.com

                            </a>
                        </p>

                    </div>
                </div>
            </div>
         
            <div class="col-12 col-lg-3 col-xl-3">
                <div class="contact-main__single aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-delay="200">
                    <div class="content">
                        <h6><i class="fa-solid fa-location-dot"></i> VARD Eye Hospital</h6>
                        <p>
                            <a href="#" target="_blank">
                                Pannara, Dhorkora, <br>Chauddagram, Cumilla<br>
                                Cell: 01729-338613,<br> 01317-162669<br>
                                E-mail: vardkamaleh@gmail.com

                            </a>
                        </p>

                    </div>
                </div>
            </div>




        </div>
    </div>
</section>