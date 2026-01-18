import Image from "next/image";
import Link from "next/link";

export default function OurServices() {
  return (
    <section className="events-carousel-page causes-two">
            <div className="section-title text-center">
                    <span className="section-title__tagline">What services we are porviding</span>
                    <h2 className="section-title__title">Our Services </h2>
            </div>
            <div className="container">
                <div className="events-carousel thm-owl__carousel owl-theme owl-carousel carousel-dot-style"
                    data-owl-options='{
                    "items": 4,
                    "margin": 30,
                    "smartSpeed": 700,
                    "loop":true,
                    "autoplay": 6000,
                    "nav":false,
                    "dots":true,
                    "navText": ["<span className=\"fa fa-angle-left\"></span>","<span className=\"fa fa-angle-right\"></span>"],
                    "responsive":{
                        "0":{
                            "items":1
                        },
                        "768":{
                            "items":2
                        },
                        "992":{
                            "items": 3
                        }
                    }
                }'>
                    <div className="item">
                        <div className="events-one__single">
                            <div className="events-one__img">
                                <Image src="/assets/images/events/events-page-1-1.jpg" alt="" fill priority/>                                
                                <div className="events-one__content">                                    
                                    <h3 className="events-one__title"><Link href="event-details.html">Chiller Installation</Link></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="item">
                        <div className="events-one__single">
                            <div className="events-one__img">
                                <Image src="/assets/images/events/events-page-1-2.jpg" alt="" fill priority/>                               
                                <div className="events-one__content">                                    
                                    <h3 className="events-one__title"><Link href="event-details.html">VRF Installation</Link></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="item">
                        <div className="events-one__single">
                            <div className="events-one__img">
                                <Image src="/assets/images/events/events-page-1-3.jpg" alt="" fill priority/>                                
                                <div className="events-one__content">                                    
                                    <h3 className="events-one__title"><Link href="event-details.html">Chiller Descaling</Link></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="item">
                        <div className="events-one__single">
                            <div className="events-one__img">
                                <Image src="/assets/images/events/events-page-1-4.jpg" alt="" fill priority/>                                
                                <div className="events-one__content">                                    
                                    <h3 className="events-one__title"><Link href="event-details.html">VRF Health Check</Link></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="item">
                        <div className="events-one__single">
                            <div className="events-one__img">
                                <Image src="/assets/images/events/events-page-1-5.jpg" alt="" fill priority/>                                
                                <div className="events-one__content">                                    
                                    <h3 className="events-one__title"><Link href="event-details.html">Duct Cleaning</Link></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="item">
                        <div className="events-one__single">
                            <div className="events-one__img">
                                <Image src="/assets/images/events/events-page-1-6.jpg" alt="" fill priority/>
                                <div className="events-one__content">
                                    <h3 className="events-one__title"><Link href="event-details.html">FUC Rebuild</Link></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="item">
                        <div className="events-one__single">
                            <div className="events-one__img">
                                <Image src="/assets/images/events/events-page-1-1.jpg" alt="" fill priority/>
                                
                                <div className="events-one__content">
                                    
                                    <h3 className="events-one__title"><Link href="event-details.html">AHU Rebuild</Link></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="item">
                        <div className="events-one__single">
                            <div className="events-one__img">
                                <Image src="/assets/images/events/events-page-1-2.jpg" alt="" fill priority/>
                                <div className="events-one__content">
                                    <h3 className="events-one__title"><Link href="event-details.html">AMC</Link></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
  )
}
