<?php
/* Template Name: Programs and Activities
    Version: 1.0
*/
?> 
<section class="fc-profit pt-120 pb-120 bg-fc">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6 col-xl-6 text-center">
                <div class="section__header text-center aos-init" data-aos="fade-up" data-aos-duration="1000">
                    <h6 class="section-eight-subtitle d-inline-block">Program Management</h6>
                    <h2 class="title-animation"><div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">P</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">r</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">o</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">g</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">r</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">a</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">m</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">s</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">a</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">n</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">d</div></div> <span><div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">A</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">c</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">t</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">i</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">v</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">i</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">t</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">i</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">e</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">s</div></div></span>

                    </h2>
                </div>
            </div>
        </div>
        <div class="row  mt-60">
            <div class="col-12 col-lg-5 col-xl-5">
                <div class="fc-profit__tab-btns">
                    @php $cont = 1; @endphp
                    @foreach(getPostsByType("programs-and-activities") as $post)
                    <button class="profit__tab-btn {{$cont == 1 ? 'active':''}}" data-target="#profit-{{$post->id}}" aria-label="fund raised &amp; donations" title="fund raised &amp; donations">{{$post->title}}<i class="fa-solid fa-arrow-right"></i></button>
                    @php $cont++; @endphp    
                    @endforeach                       

                    <!--<div class="text-center mt-30 more-txt">-->
                    <!--    <a href="our-causes.html" title="view all services" aria-label="view all services" class="fw-8">More Services</a>-->
                    <!--    <img src="{{ asset('/public/front/assets/images/arrow.png')}}" alt="Image">-->
                    <!--</div>-->
                </div>
            </div>

            <!-- conten -->
            <div class="col-12 col-lg-7 col-xl-7">
                <div class="fc-profit__content">
                    @php $cont = 1; @endphp
                    @foreach(getPostsByType("programs-and-activities") as $post)
                    <div class="fc-profit-single" id="profit-{{$post->id}}" style="{{$cont == 1 ? 'display: none':''}}">
                        <div class="thumb thumb-lg">
                            <img src="{!! asset('public/uploads/' . $post->thumbnail_path) ?? '' !!}" alt="">
                        </div>
                        <div class="fc-profit-group">
                            <p>{{$post->excerpt}}</p> <a href="{{url($post->post_type, $post->slug)}}" aria-label="our events" title="our events" class="btn--primary">View
                                More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    @php $cont++; @endphp    
                    @endforeach   
                     
                </div>
            </div>
        </div>
    </div>
    <div class="shape-right aos-init" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300">
        <img src="{{ asset('/public/front/assets/images/fc-eleven.png')}}" alt="Image">
    </div>
    </section>