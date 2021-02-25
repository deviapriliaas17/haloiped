@extends('template/leedo/main') 

@section('content') 
    <main class="vlt-main">
        <!--Page Title-->
        <section>
            <!--Page Title Hero-->
            <div class="vlt-page-title-hero vlt-page-title-hero--page vlt-page-title-hero--lg jarallax">
                <div class="vlt-page-title-hero__overlay"></div><img class="jarallax-img" src="assets/img/attachment-73.jpg" alt="">
                <div class="vlt-page-title-hero__content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <h1 class="vlt-page-title-hero__title">
                                    {{ $content->section_1_title }}
                                </h1>
                            </div>
                        </div>
                    </div>
                </div><a class="vlt-scroll-to-arrow" href="#content"><i class="leedo-download-arrow"></i></a>
            </div>
        </section>
        <div id="content"></div>
        <!--About Us 02-->
        <section>
            <div class="vlt-gap-120"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 position-relative">
                        <!--Particle-->
                        <div class="vlt-particle" data-jarallax-element="-100 0" style="bottom: 0; left: calc(-45px - 15px); max-width: 150px;"><img src="assets/img/root/particle-02.png" alt=""></div>
                        <!--Animation Block-->
                        <div class="vlt-animation-block" data-aos="fade" data-aos-delay="0">
                            <!--Simple Image-->
                            <div class="vlt-simple-image"><img src="{{ asset('uploads/uploads/'.$content->section_3_image)}}" alt="">
                            </div>
                        </div>
                        <div class="vlt-gap-60--sm"></div>
                    </div>
                    <div class="col-md-5 offset-md-1">
                        <!--Animation Block-->
                        <div class="vlt-animation-block" data-aos="fade" data-aos-delay="0">
                        </div>
                        <h3 class="vlt-first-color text-lowercase m-0">{{ $content->section_3_title }}</h3>
                        <div class="vlt-gap-30"></div>
                        <!--Animation Block-->
                        <div class="vlt-animation-block" data-aos="fade" data-aos-delay="100">
                            <p>{{ $content->section_3_description }}</p>
                        </div>
                        <div class="vlt-gap-35"></div>
                        <!--Animation Block-->
                        <div class="vlt-animation-block" data-aos="fade" data-aos-delay="200">
                            <!--Button--><a class="vlt-btn vlt-btn--primary vlt-btn--md vlt-btn--effect" href="contact-us-01.html" target="_self"><span>Contact Us</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vlt-gap-120"></div>
        </section>
        <!--Our Team 02-->
        <section>
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-md-3">
                        <!--Animation Block-->
                        <div class="vlt-animation-block" data-aos="fade" data-aos-delay="0">
                            <!--Team Member-->
                            <div class="vlt-team-member vlt-team-member--style-2">
                                <div class="vlt-team-member__avatar"><img src="assets/img/team-01.jpg" alt="">
                                </div>
                                <div class="vlt-team-member__info">
                                    <h4>Patricia Parsons
                                    </h4>
                                    <p>Art Director
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <!--Animation Block-->
                        <div class="vlt-animation-block" data-aos="fade" data-aos-delay="100">
                            <!--Team Member-->
                            <div class="vlt-team-member vlt-team-member--style-2">
                                <div class="vlt-team-member__avatar"><img src="assets/img/team-02.jpg" alt="">
                                </div>
                                <div class="vlt-team-member__info">
                                    <h4>Paul O’Brien
                                    </h4>
                                    <p>Senior Designer
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <!--Animation Block-->
                        <div class="vlt-animation-block" data-aos="fade" data-aos-delay="200">
                            <!--Team Member-->
                            <div class="vlt-team-member vlt-team-member--style-2">
                                <div class="vlt-team-member__avatar"><img src="assets/img/team-03.jpg" alt="">
                                </div>
                                <div class="vlt-team-member__info">
                                    <h4>Victoria Floyd
                                    </h4>
                                    <p>Lead Developer
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <!--Animation Block-->
                        <div class="vlt-animation-block" data-aos="fade" data-aos-delay="300">
                            <!--Team Member-->
                            <div class="vlt-team-member vlt-team-member--style-2">
                                <div class="vlt-team-member__avatar"><img src="assets/img/team-04.jpg" alt="">
                                </div>
                                <div class="vlt-team-member__info">
                                    <h4>Joseph Bridges
                                    </h4>
                                    <p>Developer
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Core Features 01-->
        <section class="position-relative overflow-hidden">
            <!--Particle-->
            <div class="vlt-particle" data-jarallax-element="-100 0" style="top: -30px; right: -40px; max-width: 250px;"><img src="assets/img/root/particle-01--black.png" alt=""></div>
            <div class="vlt-gap-120"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <!--Animation Block-->
                        <div class="vlt-animation-block" data-aos="fade" data-aos-delay="0">
                            <!--Section Title-->
                            <div class="vlt-section-title text-center">
                                <h2>Core Features.
                                </h2>
                                <p>Form together meat midst our signs living stars every, winged grass likeness let replenish.
                                </p>
                            </div>
                        </div>
                        <div class="vlt-gap-70"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <!--Animation Block-->
                        <div class="vlt-animation-block" data-aos="fade" data-aos-delay="0">
                            <!--Services Item-->
                            <div class="vlt-services vlt-services--left">
                                <div class="vlt-services__icon"><i class="leedo-paint-bucket"></i></div>
                                <div class="vlt-services__content">
                                    <h4 class="vlt-services__title"><span class="vlt-highlight">Creative Design</span>
                                    </h4>
                                    <p class="vlt-services__text">Creepeth and so us land greater, dry have god called. He seas subdue waters you two saying day.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="vlt-gap-60"></div>
                    </div>
                    <div class="col-md-4">
                        <!--Animation Block-->
                        <div class="vlt-animation-block" data-aos="fade" data-aos-delay="100">
                            <!--Services Item-->
                            <div class="vlt-services vlt-services--left">
                                <div class="vlt-services__icon"><i class="leedo-view"></i></div>
                                <div class="vlt-services__content">
                                    <h4 class="vlt-services__title"><span class="vlt-highlight">Clean Code</span>
                                    </h4>
                                    <p class="vlt-services__text">Divided their the brought blessed moving brought the called Brought so face place herb wherein.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="vlt-gap-60"></div>
                    </div>
                    <div class="col-md-4">
                        <!--Animation Block-->
                        <div class="vlt-animation-block" data-aos="fade" data-aos-delay="200">
                            <!--Services Item-->
                            <div class="vlt-services vlt-services--left">
                                <div class="vlt-services__icon"><i class="leedo-email"></i></div>
                                <div class="vlt-services__content">
                                    <h4 class="vlt-services__title"><span class="vlt-highlight">Support 24/7</span>
                                    </h4>
                                    <p class="vlt-services__text">Subdue Days wherein beginning blessed fifth tree give, green winged female blessed Is face face.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="vlt-gap-60"></div>
                    </div>
                    <div class="col-md-4">
                        <!--Animation Block-->
                        <div class="vlt-animation-block" data-aos="fade" data-aos-delay="300">
                            <!--Services Item-->
                            <div class="vlt-services vlt-services--left">
                                <div class="vlt-services__icon"><i class="leedo-image"></i></div>
                                <div class="vlt-services__content">
                                    <h4 class="vlt-services__title"><span class="vlt-highlight">Retina Ready</span>
                                    </h4>
                                    <p class="vlt-services__text">Appear appear rule. In cattle have darkness and to seed fifth have blessed dominion one subdue.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="vlt-gap-60--sm"></div>
                    </div>
                    <div class="col-md-4">
                        <!--Animation Block-->
                        <div class="vlt-animation-block" data-aos="fade" data-aos-delay="400">
                            <!--Services Item-->
                            <div class="vlt-services vlt-services--left">
                                <div class="vlt-services__icon"><i class="leedo-monitor"></i></div>
                                <div class="vlt-services__content">
                                    <h4 class="vlt-services__title"><span class="vlt-highlight">100% Responsive</span>
                                    </h4>
                                    <p class="vlt-services__text">Darkness kind likeness said give male shall first creepeth moved, fruit whose third dry one.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="vlt-gap-60--sm"></div>
                    </div>
                    <div class="col-md-4">
                        <!--Animation Block-->
                        <div class="vlt-animation-block" data-aos="fade" data-aos-delay="500">
                            <!--Services Item-->
                            <div class="vlt-services vlt-services--left">
                                <div class="vlt-services__icon"><i class="leedo-resources"></i></div>
                                <div class="vlt-services__content">
                                    <h4 class="vlt-services__title"><span class="vlt-highlight">Easy Customization</span>
                                    </h4>
                                    <p class="vlt-services__text">Third male deep creepeth they're dry said for fly have made, divide that every can't seed gathering.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vlt-gap-120"></div>
        </section>
        <!--Partners 01-->
        <section style="background-color: #00bec5;">
            <div class="vlt-gap-70"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md">
                        <!--Animation Block-->
                        <div class="vlt-animation-block" data-aos="fade" data-aos-delay="0">
                            <!--Partner Logo-->
                            <div class="vlt-partner-logo" style="opacity:1; height:75px;"><img src="assets/img/root/client-1--sm--white.png" alt="Handmade" style="height:65px;"></div>
                        </div>
                        <div class="vlt-gap-40--sm"></div>
                    </div>
                    <div class="col-md">
                        <!--Animation Block-->
                        <div class="vlt-animation-block" data-aos="fade" data-aos-delay="100">
                            <!--Partner Logo-->
                            <div class="vlt-partner-logo" style="opacity:1; height:75px;"><img src="assets/img/root/client-2--sm--white.png" alt="Mountain" style="height:58px;"></div>
                        </div>
                        <div class="vlt-gap-40--sm"></div>
                    </div>
                    <div class="col-md">
                        <!--Animation Block-->
                        <div class="vlt-animation-block" data-aos="fade" data-aos-delay="200">
                            <!--Partner Logo-->
                            <div class="vlt-partner-logo" style="opacity:1; height:75px;"><img src="assets/img/root/client-3--sm--white.png" alt="Collection" style="height:72px;"></div>
                        </div>
                        <div class="vlt-gap-40--sm"></div>
                    </div>
                    <div class="col-md">
                        <!--Animation Block-->
                        <div class="vlt-animation-block" data-aos="fade" data-aos-delay="300">
                            <!--Partner Logo-->
                            <div class="vlt-partner-logo" style="opacity:1; height:75px;"><img src="assets/img/root/client-4--sm--white.png" alt="Mountainbike" style="height:72px;"></div>
                        </div>
                        <div class="vlt-gap-40--sm"></div>
                    </div>
                    <div class="col-md">
                        <!--Animation Block-->
                        <div class="vlt-animation-block" data-aos="fade" data-aos-delay="400">
                            <!--Partner Logo-->
                            <div class="vlt-partner-logo" style="opacity:1; height:75px;"><img src="assets/img/root/client-5--sm--white.png" alt="Woody" style="height:62px;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vlt-gap-70"></div>
        </section>
        <!--Testimonial 04-->
        <section class="overflow-hidden">
            <div class="vlt-gap-120"></div>
            <div class="container position-relative">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <!--Animation Block-->
                        <div class="vlt-animation-block" data-aos="fade" data-aos-delay="0">
                            <!--Section Title-->
                            <div class="vlt-section-title text-center">
                                <h2>What Clients Say.
                                </h2>
                            </div>
                        </div>
                        <div class="vlt-gap-70"></div>
                    </div>
                </div>
                <!--Particle-->
                <div class="vlt-particle" data-jarallax-element="-100 0" style="top: 75px; left: calc(-75px + 15px); max-width: 150px;"><img src="assets/img/root/particle-02.png" alt=""></div>
                <!--Particle-->
                <div class="vlt-particle" data-jarallax-element="100 0" style="top: 70px; right: calc(-160px + 15px); max-width: 250px;"><img src="assets/img/root/particle-01--black.png" alt=""></div>
                <!--Testimonial Slider-->
                <div class="vlt-testimonial-slider vlt-testimonial-slider--style-2 " data-dots="false" data-nav="false">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <!--Testimonial Item-->
                            <div class="vlt-testimonial-item vlt-testimonial-item--style-2">
                                <div class="vlt-testimonial-item__content">
                                    <p>His fruit unto the. Midst cattle seed us every bearing fill grass face every seed night don't, that gathered set.
                                    </p>
                                </div>
                                <div class="vlt-testimonial-item__metas">
                                    <div class="avatar"><img src="assets/img/avatar-03.jpg" alt=""></div>
                                    <h5 class="vlt-display-1">Paul Jefferson
                                    </h5><span>envato.com</span>
                                </div>
                            </div>
                            <!--Testimonial Item-->
                            <div class="vlt-testimonial-item vlt-testimonial-item--style-2">
                                <div class="vlt-testimonial-item__content">
                                    <p>Together so you're land him. Is air together years female our herb third darkness fish. Male. Upon appear void very.
                                    </p>
                                </div>
                                <div class="vlt-testimonial-item__metas">
                                    <div class="avatar"><img src="assets/img/avatar-05.jpg" alt=""></div>
                                    <h5 class="vlt-display-1">Helen Reeves
                                    </h5><span>envato.com</span>
                                </div>
                            </div>
                            <!--Testimonial Item-->
                            <div class="vlt-testimonial-item vlt-testimonial-item--style-2">
                                <div class="vlt-testimonial-item__content">
                                    <p>Two years sixth life over bearing his be from whose Void there tree of dry, our that image open give.
                                    </p>
                                </div>
                                <div class="vlt-testimonial-item__metas">
                                    <div class="avatar"><img src="assets/img/avatar-04.jpg" alt=""></div>
                                    <h5 class="vlt-display-1">Oliver Dixon
                                    </h5><span>envato.com</span>
                                </div>
                            </div>
                            <!--Testimonial Item-->
                            <div class="vlt-testimonial-item vlt-testimonial-item--style-2">
                                <div class="vlt-testimonial-item__content">
                                    <p>Set creepeth seasons dominion moving their lesser over above the i was good. Meat is without he were beginning, our him male.
                                    </p>
                                </div>
                                <div class="vlt-testimonial-item__metas">
                                    <div class="avatar"><img src="assets/img/avatar-06.jpg" alt=""></div>
                                    <h5 class="vlt-display-1">Joseph Bridges
                                    </h5><span>envato.com</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vlt-gap-120"></div>
        </section>
    </main>
    <!--Back to Top--><a class="vlt-btn vlt-btn--secondary vlt-btn--effect vlt-btn--go-top hidden" href="#"><span><i class="leedo-chevron-up"></i></span></a>
@endsection