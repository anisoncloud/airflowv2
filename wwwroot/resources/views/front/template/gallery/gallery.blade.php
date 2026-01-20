<?php
/* Template Name: gallery
    Version: 1.0
*/
?> 
<!-- ==== image gallery section start ==== -->
<div class="gallery">
    <div class="gallery__inner">
        <div class="gallery__slider">
            @php $values = explode(",",getContentBySlug('gallery')->gallery_img); @endphp
                @php $count = 1; @endphp
                @foreach($values as $imgid)
                    @if($imgid)    

                    <div class="gallery__single">
                        <img src="{{ asset('public/uploads/') }}/{{$imgid }}" alt="Image">
                         
                    </div>
                    
                    @php $count++; @endphp                                          
                @endif
            @endforeach	           
            
 
        </div>
    </div>
</div>
<!-- ==== / image gallery section end ==== -->