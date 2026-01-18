"use client";
import { Swiper, SwiperSlide } from "swiper/react";
import { Navigation, Pagination, Autoplay, EffectFade } from "swiper/modules";

import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";
import "swiper/css/effect-fade";

import Link from "next/link";
export default function MainSlider() {
  return (
    <section className="main-slider-two clearfix">
      <Swiper className="swiper-container thm-swiper__slider"
        modules={[Navigation, Pagination, Autoplay, EffectFade]}
        slidesPerView={1}
        loop={true}
        effect="fade"
        autoplay={{ delay: 8000 }}
        pagination={{ clickable: true, el: "#main-slider-pagination", type: "bullets"}}
        navigation={{
          nextEl: "#main-slider__swiper-button-next",
          prevEl: "#main-slider__swiper-button-prev",
        }}        
      >
        <div className="swiper-wrapper">
        <SwiperSlide>
          <div
            className="image-layer-two"
            style={{
              backgroundImage: "url('/assets/images/backgrounds/main-slider-2-5.jpg')",
              backgroundSize: "cover",
              backgroundPosition: "center",
            }}
          ></div>
          <div className="container">
            <div className="row">
                <div className="col-xl-12">
                    <div className="main-slider-two__content">
                        <p className="main-slider-two__sub-title">We are all part of a shared world</p>
                        <h2 className="main-slider-two__title">THE AIR EXPERTS, YOU CAN COUNT ON</h2>
                        <div className="main-slider-two__btn-box">
                            <a href="#" className="thm-btn main-slider-two__btn"> Discover more</a>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </SwiperSlide>

        <SwiperSlide>
          <div
            className="image-layer-two"
            style={{
              backgroundImage: "url('/assets/images/backgrounds/main-slider-2-1.jpg')",
              backgroundSize: "cover",
              backgroundPosition: "center",
            }}
          ></div>
          <div className="container">
            <div className="row">
                <div className="col-xl-12">
                    <div className="main-slider-two__content">
                        <p className="main-slider-two__sub-title">We are all part of a shared world</p>
                        <h2 className="main-slider-two__title">THE AIR EXPERTS, YOU CAN COUNT ON</h2>
                        <div className="main-slider-two__btn-box">
                            <a href="#" className="thm-btn main-slider-two__btn"> Discover more</a>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </SwiperSlide>
        </div>
      </Swiper>

      <div className="main-slider-two__nav">
        <div className="swiper-button-prev" id="main-slider__swiper-button-prev"></div>
        <div className="swiper-button-next" id="main-slider__swiper-button-next"></div>
      </div>
    </section>
  )
}
