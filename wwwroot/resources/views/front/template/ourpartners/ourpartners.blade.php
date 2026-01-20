<?php
/* Template Name: Our Partners
    Version: 1.0
*/
?> 
<!-- ==== partner section start ==== -->
<div class="partner">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="partner__slider swiper">
                    <div class="swiper-wrapper">
                        @php $values = explode(",",getContentBySlug('our-partners')->gallery_img); @endphp
                            @php $count = 1; @endphp
                            @foreach($values as $imgid)
                                @if($imgid)                                   
                                
                                <div class="swiper-slide">
                                    <div class="partner__slider-single">
                                        <img src="{{ asset('public/uploads/') }}/{{$imgid }}" alt="Image">
                                    </div>
                                </div>
                                
                                @php $count++; @endphp                                          
                            @endif
                        @endforeach	
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ==== / partner section end ==== -->