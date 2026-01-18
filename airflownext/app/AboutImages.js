import Link from "next/link";
import Image from "next/image";
import AboutTwoImageOne from "@/public/assets/images/resources/about-two-img-1.jpg";
import AboutTwoImageTwo from "@/public/assets/images/resources/about-two-img-2.jpg";
import AboutTwoShapeOne from "@/public/assets/images/shapes/about-two-shape-1.png";
import AboutTwoShapeTwo from "@/public/assets/images/shapes/about-two-shape-2.png";
import AboutTwoShapeThree from "@/public/assets/images/shapes/about-two-shape-3.png";

export default function AboutImages() {
  return (
        <section className="about-two">
            <div className="container">
                <div className="row">
                    <div className="col-xl-6">
                        <div className="about-two__left">
                            <div className="about-two__img-box  wow slideInLeft" data-wow-delay="100ms"
                                data-wow-duration="2500ms">
                                <div className="about-two__img">
                                    <Image src={AboutTwoImageOne} alt="Shape"/>
                                </div>
                                <div className="about-two__img-two">
                                    < Image src={AboutTwoImageTwo}alt="Shape"/>
                                </div>
                                <div className="about-two__left-title-box">
                                    <h3 className="about-two__left-title">Best HVAC System</h3>
                                </div>
                                <div className="about-two__shape-1 zoominout">
                                    <Image src={AboutTwoShapeOne} alt="Shape" />
                                </div>
                                <div className="about-two__shape-2 rotate-me">
                                    <Image 
                                    src={AboutTwoShapeTwo}
                                    alt="Shape"/>
                                </div>
                                <div className="about-two__shape-3 float-bob-y">
                                    <Image src={AboutTwoShapeThree} alt="Shape"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="col-xl-6">
                        <div className="about-two__right">
                            <div className="section-title text-left">
                                <span className="section-title__tagline">Get to know about us</span>
                                <h2 className="section-title__title">About Airflow </h2>
                            </div>
                            <p className="about-two__text-1">With over 17 years of experience in the HVAC industry, 
                                we have built a strong reputation for delivering reliable, efficient, 
                                and high-quality heating, ventilation, and air conditioning solutions. 
                                From our early beginnings to where we stand today, our focus has always been on comfort, 
                                performance, and customer satisfaction.</p>
                            <p>We specialize in the design, installation, maintenance, and repair of HVAC systems for residential, commercial, and </p>
                                <Link href="/" className="thm-btn about-two__btn">Discover More</Link>
                            <ul className="list-unstyled about-two__points">
                                <li>
                                    <div className="icon">
                                        <span className="icon-target"></span>
                                    </div>
                                    <div className="text">
                                        <h4>Our mission</h4>
                                        <p>To deliver reliable, energy-efficient HVAC solutions that ensure year-round comfort, safety, and satisfaction for our customers 
                                            through quality workmanship, innovative technology, and honest service.</p>
                                    </div>
                                </li>
                                <li>
                                    <div className="icon">
                                        <span className="icon-solidarity-1"></span>
                                    </div>
                                    <div className="text">
                                        <h4>Our story</h4>
                                        <p>To become a trusted HVAC service provider recognized for excellence, sustainability,
                                             and long-term customer relationships in every community we serve.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

  )
}
