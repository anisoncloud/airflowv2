<?php
/* Template Name: VARD ECS
    Version: 1.0
*/
?> 
<!-- ==== community section start ==== -->
<section class="ff-community counter-four commit pt-3 pb-5">
    <div class="container">
        <div class="row gutter-40 ">
            <div class="col-12 col-xl-12">
                <div class="ff-community__content">
                <!-- <div class="section__header mb-0" data-aos="fade-up" data-aos-duration="1000">
                        <h2 class="title-animation fw-6 mt-0 mt-3">Programs and Activities of VARD</h2>                         
                    </div> -->
                    <div class="mb-0" data-aos="fade-up" data-aos-duration="1000">                        
                        <p class="mt-20 text-gr mx-0">
                        <style>{!! getContentBySlug(collect(request()->segments())->last())->content_css ?? '' !!}</style>
                        {!! getContentBySlug(collect(request()->segments())->last())->content ?? '' !!}                        
                        </p>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</section>
<!-- ==== / community section end ==== -->