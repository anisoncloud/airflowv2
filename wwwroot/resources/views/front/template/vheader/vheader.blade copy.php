<?php
/* Template Name: vHeader
    Version: 1.00
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @php
        $slug = collect(request()->segments())->last();
        $titlePart1 = getContentBySlug($slug)->title ?? '';
        $titlePart2 = getPostTypeBySlug($slug)->name ?? '';
        $left = trim($titlePart1.' '.$titlePart2);
    @endphp

    <title>
        {{ $left }} @if(!empty($left)) - @endif @getSetting('site_title')
    </title>

    <!-- favicons Icons --> 
    <link rel="icon" type="image/x-icon" href="{{ getSetting('fav_icon') == null ? asset('packages/larapress/src/Assets/admin/img/fav.png') : asset('public/uploads/').'/'.getSetting('fav_icon') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ getSetting('fav_icon') == null ? asset('packages/larapress/src/Assets/admin/img/fav.png') : asset('public/uploads/').'/'.getSetting('fav_icon') }}" />  
    
    <!-- google fonts ------------------------------------------------------------------------------------->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&amp;family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&amp;family=Nunito:ital,wght@0,200..1000;1,200..1000&amp;family=Outfit:wght@100..900&amp;display=swap"
        rel="stylesheet"> <!-- main css -->
    <link rel="stylesheet" href="{{ asset('/public/front/assets/css/main.css')}}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ asset('/public/front/assets/css/responsive.css')}}">
    <!-- color themes -->
    <link rel="stylesheet" href="{{ asset('/public/front/assets/css/default-theme.css')}}" id="switch-color">
    <!-- want sticky header -->
    <link rel="stylesheet" href="{{ asset('/public/front/assets/css/sticky-header.css')}}">
    <!-- box layout css -->
    <link rel="stylesheet" href="{{ asset('/public/front/assets/css/box-layout.css')}}">
    <!-- dark mode css -->
    <link rel="stylesheet" href="{{ asset('/public/front/assets/css/dark-mode.css')}}">
    <!-- rtl css -->
    <link rel="stylesheet" href="{{ asset('/public/front/assets/css/rtl.css')}}">
    <style>
    /*floting widget*/
        .bg-dark {
            width: 300px;
            left: 41%;
            z-index: 999;
            background: #ec0101 !important;
            border-radius: 10px;
            box-shadow: -2px 13px 18px 0px rgba(0,0,0,0.75);
            -webkit-box-shadow: -2px 13px 18px 0px rgba(0,0,0,0.75);
            -moz-box-shadow: -2px 13px 18px 0px rgba(0,0,0,0.75);
            align-items: center;
            display: flex;
            position: absolute;
        }
        .gallery-item img {
            display: block;
            width: 416px;
            height: 277px;
            object-fit: cover;
        }
        .service-eight-thumb img {
            height: 350px;
        }
        .service-eight-title {
            font-size: 15px!important;
            line-height: 23px!important;
        }

.dot_ete li{
  list-style: none;
  margin: 0.5em 0;
}
.dot_ete li:before {
    content: "\2713";
    display: inline-block;
    position: relative;
    top: -2px;
    width: 20px;
    height: 20px;
    margin-right: 8px;
    padding: 2px;
    font-size: 12px;
    font-weight: bold;
    line-height: 16px;
    color: #ffffff;
    border-radius: 50%;
    text-align: center;
    background: #008136;
}
.open-time {
    width: 100%;
    height: 79px;
    background: #fff;
    padding: 20px;
    margin-top: 20px;
    border-radius: 11px;
}
.open-time .list-unstyled{gap:8px;}

    .award .award__single .thumb img {
    min-height: 472px !important;
    
}
.text-justify{text-align: justify;}


b, strong {
    text-transform: uppercase;
}

@media screen and (min-width: 768px) {
   .common-banner h2 {
    line-height: 0px !important;
}

}

@media (min-width:1025px) { 
    .common-banner h2 {
        line-height: 77px!important;
    }
 }
@media (min-width:1281px) { 
    .common-banner h2 {
        line-height: 77px!important;
    }
 }
 







    </style>

</head>

<body>  

        <div class="page-wrapper">
        <!-- ==== preloader start ==== -->
        <!-- <div class="preloader">
           <img  src="{{ asset('/public/front/assets/images/logo-01.png')}}" alt="">
            <p>Voluntary Association for Rural Development (VARD)</p>
         </div> -->

       
        <!-- ==== topbar start ==== -->
        <div class="topbar d-none d-lg-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6">
                        <div class="topbar__list-wrapper">
                            <ul class="topbar__list">
                                <li><a href="mailto:vardho@vardbd.org"><i
                                            class="fa-regular fa-envelope"></i>vardho@vardbd.org</a>
                                </li>
                                <li><a href="tel:880-2-9133590"><i class="fa-solid fa-phone"></i>880-2-9133590,
                                        9124410</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="topbar__items justify-content-end">
                            <div class="social">
                                <a href="https://www.facebook.com/" target="_blank" aria-label="share us on facebook"
                                    title="facebook">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                                <a href="https://vimeo.com/" target="_blank" aria-label="share us on vimeo"
                                    title="vimeo">
                                    <i class="fa-brands fa-vimeo-v"></i>
                                </a>
                                <a href="https://x.com/" target="_blank" aria-label="share us on twitter"
                                    title="twitter">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                                <a href="https://www.linkedin.com/" target="_blank" aria-label="share us on linkedin"
                                    title="linkedin">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ==== / topbar end ==== -->
        <!-- ==== header start ==== -->
        <header class="header header-primary">
            <div class="container">
                <div class="row">
                    <div class="col-12 h-0">
                        <div class="main-header__menu-box">
                            <nav class="navbar p-0">
                                <div class="navbar-logo">
                                    <a href="{{ url('/') }}">
                                        <img src="{{ getSetting('site_logo') == null ? asset('packages/larapress/src/Assets/admin/img/larapress.png') : asset('public/uploads/').'/'.getSetting('site_logo') }}" alt="@getSetting('site_title')">
                                    </a>
                                </div>
                                <div class="navbar__menu d-none d-xl-block">
                                    <ul class="navbar__list">                                    

                                    @foreach(getMenus() as $menu)
                                        @if($menu->sub_menu_id == 0) 

                                        <!-- finddin dropdown for arraw  -->
                                        @foreach(getMenus() as $menuDopdown)                                    
                                            @if($menu->id == $menuDopdown->sub_menu_id)
                                                @php $dropdowntoggle = 'dropdown-toggle'; @endphp
                                            @break
                                            @else
                                                @php $dropdowntoggle = ''; @endphp
                                            @endif
                                        @endforeach    

                                            <li class="{{$dropdowntoggle == 'dropdown-toggle' ? 'dropdown navbar__item--has-children':''}} navbar__item nav-fade">  
                                                <!-- finddin dropdown for arraw  -->
                                                <a href="{{ $menu->target == 'external_link' ? $menu->url : url('/') . $menu->url }}" target="{{$menu->target}}" class="{{$dropdowntoggle == 'dropdown-toggle' ? 'navbar__dropdown-label dropdown-label-alter':''}} ">{{$menu->title}}
                                                </a>                                                  

                                                @if($dropdowntoggle == 'dropdown-toggle')
                                                <ul class="navbar__sub-menu">
                                                    @foreach(getMenus() as $menuDopdown)                                    
                                                        @if($menu->id == $menuDopdown->sub_menu_id) 

                                                        <!-- finddin dropdown for arraw  -->
                                                        @foreach(getMenus() as $menuDopdown2)                                    
                                                            @if($menuDopdown->id == $menuDopdown2->sub_menu_id)
                                                                @php $dropdowntoggle2 = 'dropdown-toggle2'; @endphp
                                                            @break
                                                            @else
                                                                @php $dropdowntoggle2 = ''; @endphp
                                                            @endif
                                                        @endforeach  

                                                        <li class="{{$dropdowntoggle2 == 'dropdown-toggle2' ? 'dropdown navbar__item--has-children':''}}">  
                                                            <!-- finddin dropdown for arraw  -->
                                                            <a href="{{ $menuDopdown->target == 'external_link' ? $menuDopdown->url : url('/') . $menuDopdown->url }}" target="{{$menuDopdown->target}}" class="{{$dropdowntoggle2 == 'dropdown-toggle2' ? 'navbar__dropdown-label dropdown-label-alter':''}} ">{{$menuDopdown->title}}</a>    

                                                            @if($dropdowntoggle2 == 'dropdown-toggle2')
                                                            <ul class="navbar__sub-menu">
                                                                @foreach(getMenus() as $menuDopdown2)                                    
                                                                    @if($menuDopdown->id == $menuDopdown2->sub_menu_id) 

                                                                        <li class="{{$dropdowntoggle2 == 'dropdown-toggle2' ? 'dropdown navbar__item--has-children':''}}">  
                                                                            <!-- finddin dropdown for arraw  -->
                                                                            <a href="{{ $menuDopdown2->target == 'external_link' ? $menuDopdown2->url : url('/') . $menuDopdown2->url }}" target="{{$menuDopdown2->target}}" class="{{$dropdowntoggle2 == 'dropdown-toggle2' ? 'navbar__dropdown-label dropdown-label-alter':''}} ">{{$menuDopdown2->title}}</a> 
                                                                        </li>  

                                                                    @endif
                                                                @endforeach
                                                            </ul>
                                                            @endif

                                                        </li>
                                                    @endif
                                                    @endforeach 
                                                    </ul>
                                                @endif                                            
                                            </li>
                                        @endif
                                        @endforeach    

                                    </ul>
                                </div>
                                <div class="navbar__options">
                                    <div class="navbar__mobile-options ">
                                        <div class="contact-btn butto_vijual d-xxl-flex">

                                            <div class="contact-content">
                                                <a href="{{ url('/posts/donation')}}" class="btn--secondary d-none d-md-flex">Donate
                                                    Now </a>
                                            </div>
                                        </div>
                                        <!-- <div class="search-box">
                                    <button class="open-search"
                                       aria-label="search products"
                                       title="open search box">
                                       <i
                                          class="fa-solid fa-magnifying-glass"></i>
                                    </button>
                                 </div> -->
                                        <div class="text-center ecs_logo"><img src="{{ asset('/public/front/assets/images/VARD-ECS-Logo.png')}}"
                                                alt=""></div>

                                    </div>
                                    <button class="open-offcanvas-nav d-flex d-xl-none" aria-label="toggle mobile menu"
                                        title="open offcanvas menu">
                                        <span class="icon-bar top-bar"></span>
                                        <span class="icon-bar middle-bar"></span>
                                        <span class="icon-bar bottom-bar"></span>
                                    </button>
                                </div>
                            </nav>
                        </div>
                        <div class="top_header_under_paper">
                            <img src="{{ asset('/public/front/assets/images/banner/banner-seven-bottom.png')}}" alt="Image">
                        </div>
                    </div>
                </div>

            </div>
        </header>
        <!-- ==== / header end ==== -->
        <!-- ==== mobile menu start ==== -->
        <div class="mobile-menu d-block d-xl-none">
            <nav class="mobile-menu__wrapper">
                <div class="mobile-menu__header nav-fade">
                    <div class="logo">
                        <a href="index.php" aria-label="home page" title="logo">
                            <img src="{{ asset('/public/front/assets/images/logo-01.png')}}" alt="Image">
                        </a>
                    </div>
                    <button aria-label="close mobile menu" class="close-mobile-menu">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="mobile-menu__list"></div>
                <div class="mobile-menu__cta nav-fade d-block d-md-none">
                    <a href="{{ url('/posts/donation')}}" class="btn--primary btn--primary-alt">Donate Now <i
                            class="icon-circle-arrow"></i></a>
                </div>
                <div class="mobile-menu__social social nav-fade">
                    <a href="https://www.facebook.com/" target="_blank" aria-label="share us on facebook"
                        title="facebook">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                    <a href="https://vimeo.com/" target="_blank" aria-label="share us on vimeo" title="vimeo">
                        <i class="fa-brands fa-vimeo-v"></i>
                    </a>
                    <a href="https://x.com/" target="_blank" aria-label="share us on twitter" title="twitter">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                    <a href="https://www.linkedin.com/" target="_blank" aria-label="share us on linkedin"
                        title="linkedin">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                </div>
            </nav>
        </div>
        <div class="mobile-menu__backdrop"></div>
        <!-- ==== / mobile menu end ==== -->
        <!-- ==== search popup start ==== -->
        <div class="search-popup">
            <button class="close-search" aria-label="close search box" title="close search box">
                <i class="fa-solid fa-xmark"></i>
            </button>
            <form action="#" method="post">
                <div class="search-popup__group">
                    <input type="text" name="search-field" id="searchField" placeholder="Search...." required>
                    <button type="submit" aria-label="search" title="search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
            </form>
        </div>
        <!-- ==== / search popup end ==== -->