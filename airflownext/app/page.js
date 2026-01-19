import Image from "next/image";
import Logo from "@/public/assets/images/resources/logo-2.png"
import Link from "next/link";
import MainSlider from "./MainSlider";
import AboutImages from "./AboutImages";
import OurService from "./OurService";
import OurPartners from "./OurPartners";

export default function Home() {
  return (
    <div>
      <div className="custom-cursor__cursor"></div>
    <div className="custom-cursor__cursor-two"></div>





    {/* <div className="preloader">
        <div className="preloader__image"></div>
    </div> */}
    


    <div className="page-wrapper">
        <header className="main-header-two">
            <nav className="main-menu main-menu-two">
                <div className="main-menu-two__wrapper">
                    <div className="main-menu-two__wrapper-inner">
                        <div className="main-menu-two__left">
                            <div className="main-menu-two__logo">
                                <Link href="/"><Image src={Logo} alt="Air Flow Hvac System" /></Link>
                            </div>
                            <div className="main-menu-two__shape-1 float-bob-x">
                                <Image src="/assets/images/shapes/main-menu-shape-1.png" alt="" fill priority/>
                            </div>
                        </div>
                        <div className="main-menu-two__right">
                            <div className="main-menu-two__right-top">
                                <div className="main-menu-two__right-top-left">
                                    <div className="main-menu-two__volunteers">
                                        <div className="main-menu-two__volunteers-icon">
                                            <Image src="/assets/images/icon/main-menu-heart-icon.png" alt="" fill priority/>
                                        </div>
                                        <div className="main-menu-two__volunteers-text-box">
                                            <p className="main-menu-two__volunteers-text"><Link
                                                    href="become-volunteer.html">Become a
                                                    <span>Delear</span></Link>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div className="main-menu-two__right-top-right">
                                    <div className="main-menu-two__right-top-address">
                                        <ul className="list-unstyled main-menu-two__right-top-address-list">
                                            <li>
                                                <div className="icon">
                                                    <span className="icon-phone-call"></span>
                                                </div>
                                                <div className="content">
                                                    <p>Helpline</p>
                                                    <h5><Link href="tel:+880 1713107474">+880 1713107474</Link></h5>
                                                </div>
                                            </li>
                                            <li>
                                                <div className="icon">
                                                    <span className="icon-message"></span>
                                                </div>
                                                <div className="content">
                                                    <p>Send email</p>
                                                    <h5><Link href="mailto:info@airflowhvacbd.com">info@airflowhvacbd.com</Link>
                                                    </h5>
                                                </div>
                                            </li>
                                            <li>
                                                <div className="icon">
                                                    <span className="icon-location"></span>
                                                </div>
                                                <div className="content">
                                                    <p>Gulshan</p>
                                                    <h5>Dhaka, Bangladesh</h5>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div className="main-menu-two__right-bottom">
                                <div className="main-menu-two__main-menu-box">
                                    <Link href="#" className="mobile-nav__toggler"><i className="fa fa-bars"></i></Link>
                                    <ul className="main-menu__list">
                                        <li className="dropdown current megamenu">
                                            <Link href="index.html">Home </Link>
                                            
                                        </li>
                                        <li className="dropdown">
                                            <Link href="#">About</Link>
                                            <ul>
                                                <li><Link href="#">Who we are</Link></li>
                                                <li><Link href="#">Mission & Vission</Link></li>
                                            </ul>
                                        </li>
                                        <li className="dropdown">
                                            <Link href="#">Services</Link>
                                            <ul>
                                                <li><Link href="#">Chiller Installation</Link></li>
                                                <li><Link href="#">VRF Installation</Link></li>
                                                <li><Link href="#">Chiller Descaling</Link></li>
                                                <li><Link href="#">VRF Health Check</Link></li>
                                                <li><Link href="#">Duct Cleaning</Link></li>
                                                <li><Link href="#">FCU Rebuild</Link></li>
                                                <li><Link href="#">AHU Rebuild</Link></li>
                                                <li><Link href="#">AMC</Link></li>
                                                <li><Link href="#">Electrical Services</Link></li>
                                            </ul>
                                        </li>
                                        
                                        <li className="dropdown">
                                            <Link href="#">Business Unit</Link>
                                            <ul>
                                                <li><Link href="#">Best Express</Link></li>
                                                <li><Link href="#">Big O Solution</Link></li>                                               
                                            </ul>
                                        </li>
                                        <li className="dropdown">
                                            <Link href="#">Our Brands</Link>
                                            <ul>
                                                <li><Link href="#">Carrier</Link></li>
                                                <li><Link href="#">Toshiba</Link></li>
                                                <li><Link href="#">TICA</Link></li>
                                                <li><Link href="#">Dyn air</Link></li>
                                                <li><Link href="#">AEROFOAM</Link></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <Link href="#">Clients</Link>
                                        </li>                                        
                                        <li>
                                            <Link href="#">Contact</Link>
                                        </li>
                                        <li>
                                            <Link href="#">Carrer</Link>
                                        </li>
                                    </ul>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div className="stricky-header stricked-menu main-menu main-menu-two">
            <div className="sticky-header__content"></div>
        </div>
<MainSlider/>
       
        
<AboutImages/>

        
        <OurService/>
        <section className="become-volunteer">
            <div className="container">
                <div className="become-volunteer__inner">
                    <div className="become-volunteer__left">
                        <div className="section-title text-left">
                            <span className="section-title__tagline">Request for quote</span>
                            <h2 className="section-title__title">Request a Personalized Product Price quotation
                            </h2>
                        </div>
                    </div>
                    <div className="become-volunteer__right">
                        <Link href="#" className="thm-btn become-volunteer__btn">Click Here</Link>
                    </div>
                </div>
            </div>
        </section>
        <section className="google-map">
            
                <iframe
  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.7574085091046!2d90.41222667589795!3d23.79165148719043!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7a0d9c11b0f%3A0x6ce829f51c6e7bb4!2sOriental%20Arcadia%2C%2027%20Rd%2044%2C%20Dhaka%201212!5e0!3m2!1sen!2sbd!4v1767689246227!5m2!1sen!2sbd"
  className="google-map__one"
  allowFullScreen
  loading="lazy"
  referrerPolicy="no-referrer-when-downgrade"
></iframe>


        </section>

        <section className="contact-one">
            <div className="container">
                <div className="contact-one__inne">
                    <ul className="list-unstyled contact-one__list">
                        <li className="contact-one__single">
                            <div className="contact-one__icon">
                                <span className="icon-phone-call"></span>
                            </div>
                            <div className="contact-one__content">
                                <p className="contact-one__sub-title">Helpline</p>
                                <h3 className="contact-one__number"><Link href="tel:+8801713107474">+8801713107474</Link></h3>
                            </div>
                        </li>
                        <li className="contact-one__single">
                            <div className="contact-one__icon">
                                <span className="icon-message"></span>
                            </div>
                            <div className="contact-one__content">
                                <p className="contact-one__sub-title">Send email</p>
                                <h3 className="contact-one__number"><Link
                                        href="mailto:info@airflowhvacbd.com">info@airflowhvacbd.com</Link></h3>
                            </div>
                        </li>
                        <li className="contact-one__single">
                            <div className="contact-one__icon">
                                <span className="icon-location"></span>
                            </div>
                            <div className="contact-one__content">
                                <p className="contact-one__sub-title">Oriental Arcadia, Unit A8, Level 4</p>
                                <h3 className="contact-one__number">House 27, Road 44, Gulshan 2
Dhaka -1212</h3>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <OurPartners/>
        <section className="brand-one brand-two">
            <div className="section-title text-center">
                    <span className="section-title__tagline">We value our clients</span>
                    <h2 className="section-title__title">Our Clients </h2>
            </div>
            <div className="brand-two-shape-1" style={{backgroundImage: "url('/assets/images/shapes/brand-two-shape-1.png')",
                                backgroundSize: "cover",
                                backgroundPosition: "center",
                                backgroundRepeat: "no-repeat"
                            }}> 
            </div>
            <div className="container">
                <div className="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                            "0": {
                                "spaceBetween": 30,
                                "slidesPerView": 2
                            },
                            "375": {
                                "spaceBetween": 30,
                                "slidesPerView": 2
                            },
                            "575": {
                                "spaceBetween": 30,
                                "slidesPerView": 3
                            },
                            "767": {
                                "spaceBetween": 50,
                                "slidesPerView": 4
                            },
                            "991": {
                                "spaceBetween": 50,
                                "slidesPerView": 5
                            },
                            "1199": {
                                "spaceBetween": 100,
                                "slidesPerView": 6
                            }
                        }}'>
                    <div className="swiper-wrapper">
                        <div className="swiper-slide">
                            <Image src="/assets/images/brand/brand-1-1.jpg" alt="" fill priority/>
                        </div>
                        <div className="swiper-slide">
                            <Image src="/assets/images/brand/brand-1-2.jpg" alt="" fill priority/>
                        </div>
                        <div className="swiper-slide">
                            <Image src="/assets/images/brand/brand-1-3.jpg" alt="" fill priority/>
                        </div>
                        <div className="swiper-slide">
                            <Image src="/assets/images/brand/brand-1-4.jpg" alt="" fill priority/>
                        </div>
                        <div className="swiper-slide">
                            <Image src="/assets/images/brand/brand-1-5.jpg" alt="" fill priority/>
                        </div>
                        <div className="swiper-slide">
                            <Image src="/assets/images/brand/brand-1-6.jpg" alt="" fill priority/>
                        </div>
                        <div className="swiper-slide">
                            <Image src="/assets/images/brand/brand-1-7.jpg" alt="" fill priority/>
                        </div>
                        <div className="swiper-slide">
                            <Image src="/assets/images/brand/brand-1-8.jpg" alt="" fill priority/>
                        </div>
                        <div className="swiper-slide">
                            <Image src="/assets/images/brand/brand-1-9.jpg" alt="" fill priority/>
                        </div>
                        <div className="swiper-slide">
                            <Image src="/assets/images/brand/brand-1-10.jpg" alt="" fill priority/>
                        </div>
                        <div className="swiper-slide">
                            <Image src="/assets/images/brand/brand-1-11.jpg" alt="" fill priority/>
                        </div>
                        <div className="swiper-slide">
                            <Image src="/assets/images/brand/brand-1-12.jpg" alt="" fill priority/>
                        </div>
                        <div className="swiper-slide">
                            <Image src="/assets/images/brand/brand-1-13.jpg" alt="" fill priority/>
                        </div>
                        <div className="swiper-slide">
                            <Image src="/assets/images/brand/brand-1-14.jpg" alt="" fill priority/>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer className="site-footer">
            <div className="site-footer-bg" style={{backgroundImage: "url('/assets/images/backgrounds/site-footer-bg.jpg')",
                                backgroundSize: "cover",
                                backgroundPosition: "center",
                                backgroundRepeat: "no-repeat"
                            }}>
            </div>
            <div className="site-footer__top">
                <div className="container">
                    <div className="row">
                        <div className="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div className="footer-widget__column footer-widget__about">
                                <div className="footer-widget__about-logo">
                                    <Link href="/"><Image src="/assets/images/resources/logo-2.png"  alt="" fill priority/></Link>
                                </div>
                                <div className="footer-widget__about-text-box">
                                    <p className="footer-widget__about-text">With over 17 years of experience in the HVAC industry, we have built a strong
                                         reputation for delivering reliable, efficient, 
                                         and high-quality heating, ventilation, and air conditioning solutions. </p>
                                </div>
                                <div className="footer-widget__btn">
                                    <Link href="#"> <span className="fa fa-book"></span>Discover More</Link>
                                </div>
                            </div>
                        </div>
                        <div className="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div className="footer-widget__column footer-widget__links clearfix">
                                <h3 className="footer-widget__title">Links</h3>
                                <ul className="footer-widget__links-list list-unstyled clearfix">
                                    <li><Link href="#">About us</Link></li>
                                    <li><Link href="#">Contact</Link></li>
                                    <li><Link href="#">Services</Link></li>
                                    <li><Link href="#">Brands</Link></li>
                                    <li><Link href="#">Location</Link></li>
                                </ul>
                            </div>
                        </div>
                        <div className="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <div className="footer-widget__column footer-widget__non-profit clearfix">
                                <h3 className="footer-widget__title">Our Brands</h3>
                                <ul className="footer-widget__non-profit-list list-unstyled clearfix">
                                    <li><Link href="#">Carrier</Link></li>
                                    <li><Link href="#">TOSHIBA</Link></li>
                                    <li><Link href="#">Dyn Air</Link></li>
                                    <li><Link href="#">Tica</Link></li>
                                    <li><Link href="#">Aerofoam</Link></li>
                                </ul>
                            </div>
                        </div>
                        <div className="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                            <div className="footer-widget__column footer-widget__contact">
                                <h3 className="footer-widget__title">Contact</h3>
                                <p className="footer-widget__contact-text">Oriental Arcadia, Unit A8, Level 4

 <br/> House 27, Road 44, Gulshan 2 Dhaka -1212
                                </p>
                                <ul className="list-unstyled footer-widget__contact-list">
                                    <li>
                                        <div className="icon">
                                            <i className="fa fa-envelope"></i>
                                        </div>
                                        <div className="text">
                                            <p><Link href="mailto:info@airflowhvacbd.com">info@airflowhvacbd.com</Link></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div className="icon">
                                            <i className="fas fa-phone-alt"></i>
                                        </div>
                                        <div className="text">
                                            <p><Link href="tel:980009630">+8801713107474</Link></p>
                                        </div>
                                    </li>
                                </ul>
                                <div className="site-footer__social">
                                    <Link href="#"><i className="fab fa-twitter"></i></Link>
                                    <Link href="#"><i className="fab fa-facebook"></i></Link>
                                    <Link href="#"><i className="fab fa-pinterest-p"></i></Link>
                                    <Link href="#"><i className="fab fa-instagram"></i></Link>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div className="site-footer__bottom">
                <div className="container">
                    <div className="row">
                        <div className="col-xl-12">
                            <div className="site-footer__bottom-inner">
                                <p className="site-footer__bottom-text">© All Copyright 2026 by <Link href="#">Airflow</Link>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


    </div>


    <div className="mobile-nav__wrapper">
        <div className="mobile-nav__overlay mobile-nav__toggler"></div>
        <div className="mobile-nav__content">
            <span className="mobile-nav__close mobile-nav__toggler"><i className="fa fa-times"></i></span>

            <div className="logo-box">
                <Link href="/" aria-label="logo image"><Image src="/assets/images/resources/logo-2.png"
                        alt="" fill priority/></Link>
            </div>
            <div className="mobile-nav__container"></div>

            <ul className="mobile-nav__contact list-unstyled">
                <li>
                    <i className="fa fa-envelope"></i>
                    <Link href="mailto:info@airflowhvacbd.com">info@airflowhvacbd.com</Link>
                </li>
                <li>
                    <i className="fa fa-phone-alt"></i>
                    <Link href="tel:+8801713107474">+8801713107474</Link>
                </li>
            </ul>
            <div className="mobile-nav__top">
                <div className="mobile-nav__social">
                    <Link href="#" className="fab fa-twitter"></Link>
                    <Link href="#" className="fab fa-facebook-square"></Link>
                    <Link href="#" className="fab fa-pinterest-p"></Link>
                    <Link href="#" className="fab fa-instagram"></Link>
                </div>
            </div>


        </div>
    </div>

    <div className="search-popup">
        <div className="search-popup__overlay search-toggler"></div>
        <div className="search-popup__content">
            <form action="#">
                <label htmlFor="search" className="sr-only">search here</label>
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" className="thm-btn">
                    <i className="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
    </div>

    <Link href="#" data-target="html" className="scroll-to-target scroll-to-top"><i className="icon-up-arrow"></i></Link>
    </div>
  );
}
