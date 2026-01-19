"use client";

import { Swiper, SwiperSlide } from "swiper/react";
import { Autoplay, Pagination } from "swiper/modules";
import Image from "next/image";
import Link from "next/link";

import "swiper/css";
import "swiper/css/pagination";

export default function OurPartners() {
  return (
    <section className="events-carousel-page causes-two">
            <div className="section-title text-center">
                    <span className="section-title__tagline">What services we are porviding</span>
                    <h2 className="section-title__title">Our Services </h2>
            </div>
            <div className="container">
                <div className="">
    <Swiper    
      modules={[Autoplay, Pagination]}
      spaceBetween={30}
      loop
      autoplay={{ delay: 1000 }}
      pagination={{ clickable: false }}
      breakpoints={{
        0: { slidesPerView: 1 },
        768: { slidesPerView: 2 },
        992: { slidesPerView: 3 },
        1200: { slidesPerView: 6 },
      }}
      className="events-carousel"
    >

      {[
        { img: "brand-1-1.jpg"},
        { img: "brand-1-2.jpg"},
        { img: "brand-1-3.jpg"},
        { img: "brand-1-4.jpg"},
        { img: "brand-1-5.jpg"},
        { img: "brand-1-6.jpg"},
        { img: "brand-1-7.jpg"},
        { img: "brand-1-8.jpg"},
        { img: "brand-1-9.jpg"},
        { img: "brand-1-10.jpg"},
        { img: "brand-1-11.jpg"},
        { img: "brand-1-12.jpg"},
        { img: "brand-1-13.jpg"},
        { img: "brand-1-14.jpg"},
      ].map((item, i) => (
        <SwiperSlide key={i}>
          <div className="events-one__single">
            <div className="" style={{ position: "relative", height: 100 }}>
              <Image
                src={`/assets/images/brand/${item.img}`}
                alt={item.title}
                fill
              />
              <div className="events-one__content">
                <h3 className="events-one__title">
                  <Link href="/event-details">{item.title}</Link>
                </h3>
              </div>
            </div>
          </div>
        </SwiperSlide>
      ))}
    </Swiper>
          </div>
            </div>
        </section>
  );
}
