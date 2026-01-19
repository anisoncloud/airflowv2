"use client";

import { Swiper, SwiperSlide } from "swiper/react";
import { Autoplay, Pagination } from "swiper/modules";
import Image from "next/image";
import Link from "next/link";

import "swiper/css";
import "swiper/css/pagination";

export default function EventsCarousel() {
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
      autoplay={{ delay: 4000 }}
      pagination={{ clickable: true }}
      breakpoints={{
        0: { slidesPerView: 1 },
        768: { slidesPerView: 2 },
        992: { slidesPerView: 3 },
        1200: { slidesPerView: 4 },
      }}
      className="events-carousel"
    >


                    
          

      {[
        { img: "events-page-1-1.jpg", title: "Chiller Installation" },
        { img: "events-page-1-2.jpg", title: "VRF Installation" },
        { img: "events-page-1-3.jpg", title: "Chiller Descaling" },
        { img: "events-page-1-4.jpg", title: "VRF Health Check" },
        { img: "events-page-1-5.jpg", title: "VRF Health Check" },
        { img: "events-page-1-6.jpg", title: "VRF Health Check" },
      ].map((item, i) => (
        <SwiperSlide key={i}>
          <div className="events-one__single">
            <div className="events-one__img" style={{ position: "relative", height: 280 }}>
              <Image
                src={`/assets/images/events/${item.img}`}
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
