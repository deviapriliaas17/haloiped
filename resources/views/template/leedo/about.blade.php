@extends('template/leedo/main') 

@section('content') 
    <main class="vlt-main">
        <!--Page Title-->
        @if($content->section_1_show == 1)
        <section>
            <!--Page Title Hero-->
            <div class="vlt-page-title-hero vlt-page-title-hero--page vlt-page-title-hero--lg jarallax">
                <div class="vlt-page-title-hero__overlay"></div><img class="jarallax-img" src="{{ $content->section_1_image ? asset('uploads/uploads/'.$content->section_1_image) : asset('template/leedo/assets/img/attachment-73.jpg')}}" alt="">
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
        @endif
        <div id="content"></div>
        <!--About Us 02-->
        @if($content->section_3_show == 1)
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
        @endif
        <!--Core Features 01-->
        @if($content->section_2_show == 1)
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
                    @foreach($jobtypes as $j)
                    <div class="col-md-4">
                        <!--Animation Block-->
                        <div class="vlt-animation-block" data-aos="fade" data-aos-delay="0">
                            <!--Services Item-->
                            <div class="vlt-services vlt-services--left">
                                <div class="vlt-services__icon"><i class="leedo-paint-bucket"></i></div>
                                <div class="vlt-services__content">
                                    <h4 class="vlt-services__title"><span class="vlt-highlight">{{ $j->name }}</span>
                                    </h4>
                                    <p class="vlt-services__text">{{ $j->description }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="vlt-gap-60"></div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="vlt-gap-120"></div>
        </section>
        @endif
    </main>
    <!--Back to Top--><a class="vlt-btn vlt-btn--secondary vlt-btn--effect vlt-btn--go-top hidden" href="#"><span><i class="leedo-chevron-up"></i></span></a>
@endsection