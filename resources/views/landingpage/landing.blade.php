@extends('layouts.LP.app')
@section('content')
@include('layouts.LP.navbar')
        <div class="">
            <section class="main-slider">
                <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
        "effect": "fade",
         "pagination": {
            "el": "#main-slider-pagination",
            "type": "bullets",
            "clickable": true
          },
        "navigation": {
            "nextEl": "#main-slider__swiper-button-next",
            "prevEl": "#main-slider__swiper-button-prev"
        },
        "autoplay": {
            "delay": 5000
        }}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="image-layer"
                                style="background-image: url(assets/images/backgrounds/fotoheader2.jpg);">
                            </div>
    
                            <div class="image-layer-overlay"></div>
                            <div class="main-slider-shape-1"></div>
                            <div class="main-slider-shape-2"></div>
                            <div class="main-slider-shape-3"></div>
                            <div class="main-slider-shape-4"></div>
                            <!-- /.image-layer -->
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="main-slider__content">
                                            <p>Welcome to bienti media crative agency</p>
                                            <h2>A DIGITAL AGENCY <br>WITH A PASSION FOR MARKETING</h2>
                                            <a href="contact.html" class="thm-btn"><span>Let's Collaborate</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="image-layer"
                                style="background-image: url(assets/images/backgrounds/fotoheader.jpg);">
                            </div>
    
                            <div class="image-layer-overlay"></div>
                            <div class="main-slider-shape-1"></div>
                            <div class="main-slider-shape-2"></div>
                            <div class="main-slider-shape-3"></div>
                            <div class="main-slider-shape-4"></div>
                            <!-- /.image-layer -->
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="main-slider__content">
                                            <p>welcome to Moniz Web agency</p>
                                            <h2>BUILD<br>ENGAGEMENT</h2>
                                            <a href="contact.html" class="thm-btn"><span>Free consultation</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="image-layer"
                                style="background-image: url(assets/images/backgrounds/fotoheader3.jpg);">
                            </div>
    
                            <div class="image-layer-overlay"></div>
                            <div class="main-slider-shape-1"></div>
                            <div class="main-slider-shape-2"></div>
                            <div class="main-slider-shape-3"></div>
                            <div class="main-slider-shape-4"></div>
                            <!-- /.image-layer -->
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="main-slider__content">
                                            <p>welcome to Moniz Web agency</p>
                                            <h2>Smart web <br> design agency</h2>
                                            <a href="contact.html" class="thm-btn"><span>Free consultation</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- If we need navigation buttons -->
                    <div class="slider-bottom-box clearfix">
    
                        <div class="main-slider__nav">
                            <div class="swiper-button-prev" id="main-slider__swiper-button-next"><i
                                    class="icon-right-arrow icon-left-arrow"></i>
                            </div>
                            <div class="swiper-button-next" id="main-slider__swiper-button-prev"><i
                                    class="icon-right-arrow"></i>
                            </div>
                        </div>
                        <div class="swiper-pagination" id="main-slider-pagination"></div>
                    </div>
                </div>
            </section>
            <section class="welcome-one">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="welcome-one__left wow fadeInLeft" data-wow-duration="1500ms">
                                <div class="welcome-one__img-box">
                                    <div class="welcome-one__img">
                                        <img src="assets/images/resources/welcome-bienti.png.png" alt="">
                                        <div class="welcome-one__shape-1"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="welcome-one__right">
                                <div class="section-title text-left">
                                    <span class="section-title__tagline">About company</span>
                                    <h2 class="section-title__title">Creatively led,
                                        <br> Result driven,
                                        <br> Experts at what we do,
                                        <br> We make it happen.</h2>
                                </div>
                                <div class="welcome-one__solutions col-md-12">
                                    <div class="welcome-one__solutions-single">
                                        <div class="welcome-one__solutions-icon">
                                            <span class="icon-tick"></span>
                                        </div>
                                        <div class="welcome-one__solutions-text-box">
                                            <p>Solution for small & <br> large businesses</p>
                                        </div>
                                    </div>
                                    <div class="welcome-one__solutions-single">
                                        <div class="welcome-one__solutions-icon">
                                            <span class="icon-tick"></span>
                                        </div>
                                        <div class="welcome-one__solutions-text-box">
                                            <p>Solution for small & <br> large businesses</p>
                                        </div>
                                    </div>
                                </div>
                                <p class="welcome-one__right-text-1">Make is a jakarta-based digital agency. We guarantee results across three key business areas:
                                    web design & build,social media & digital marketing, and creative content.</p>
                                <p class="welcome-one__right-text-2">Start growing your business digitally with our collaboration.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="counters-one">
                <div class="container">
                    <ul class="counters-one__box list-unstyled">
                        <li class="counter-one__single wow fadeInUp" data-wow-delay="100ms">
                            <div class="counter-one__icon">
                                <span class="icon-recommend"></span>
                            </div>
                            <h3 class="odometer" data-count="80">00</h3>
                            <p class="counter-one__text">CAMPAIGN</p>
                        </li>
                        <li class="counter-one__single wow fadeInUp" data-wow-delay="200ms">
                            <div class="counter-one__icon">
                                <span class="icon-recruit"></span>
                            </div>
                            <h3 class="odometer" data-count="50">00</h3>
                            <p class="counter-one__text">CLIENTS</p>
                        </li>
                        <li class="counter-one__single wow fadeInUp" data-wow-delay="300ms">
                            <div class="counter-one__icon">
                                <span class="icon-recruit"></span>
                            </div>
                            <h3 class="odometer" data-count="100">00</h3>
                            <p class="counter-one__text">PROJECTS</p>
                        </li>
                        <li class="counter-one__single wow fadeInUp" data-wow-delay="400ms">
                            <div class="counter-one__icon">
                                <span class="icon-customer-review"></span>
                            </div>
                            <h3 class="odometer" data-count="970">00</h3>
                            <p class="counter-one__text">Happy clients</p>
                        </li>
                        <li class="counter-one__shape wow fadeInUp" data-wow-delay="500ms"></li>
                    </ul>
                </div>
            </section>
                {{-- <section class="we-change">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="we-change__left-faqs">
                                    <div class="section-title text-left">
                                        <span class="section-title__tagline">Frequently asked questions</span>
                                        <h2 class="section-title__title">Professional & Experienced Team</h2>
                                    </div>
                                    <div class="we-change__faqs">
                                        <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                                            <div class="accrodion active">
                                                <div class="accrodion-title">
                                                    <h4>Few resons why you should choose us</h4>
                                                </div>
                                                <div class="accrodion-content">
                                                    <div class="inner">
                                                        <p>Suspendisse finibus urna mauris, vitae consequat quam vel. Vestibulum
                                                            leo ligula, vitae commodo nisl.</p>
                                                    </div><!-- /.inner -->
                                                </div>
                                            </div>
                                            <div class="accrodion">
                                                <div class="accrodion-title">
                                                    <h4>Few resons why you should choose us</h4>
                                                </div>
                                                <div class="accrodion-content">
                                                    <div class="inner">
                                                        <p>Suspendisse finibus urna mauris, vitae consequat quam vel. Vestibulum
                                                            leo ligula, vitae commodo nisl.</p>
                                                    </div><!-- /.inner -->
                                                </div>
                                            </div>
                                            <div class="accrodion last-chiled">
                                                <div class="accrodion-title">
                                                    <h4>Few resons why you should choose us</h4>
                                                </div>
                                                <div class="accrodion-content">
                                                    <div class="inner">
                                                        <p>Suspendisse finibus urna mauris, vitae consequat quam vel. Vestibulum
                                                            leo ligula, vitae commodo nisl.</p>
                                                    </div><!-- /.inner -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 d-flex align-items-center">
                                <div class="we-change__right">
                                    <div class="we-change__right-img rounded-3">
                                        <img src="assets/images/resources/we-change-right-img-1.jpg" alt="">
                                        <div class="we-change__agency border">
                                            <div class="we-change__agency-icon">
                                                <span class="icon-development"></span>
                                            </div>
                                            <div class="we-change__agency-text">
                                                <h3>Our agency is one of the most <br> successful agency.</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> --}}
            <section class="we-make">
                <div class="we-make-bg" style="background-image: url(assets/images/backgrounds/we-make-bg.jpg)"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 col-lg-6">
                            <div class="we-make__left">
                                <div class="section-title text-left">
                                    <span class="section-title__tagline">Corporate business theme</span>
                                    <h2 class="section-title__title">You Cannot Buy Engagement. You Have to Build Engagement</h2>
                                </div>
                                <div class="we-make__person">
                                    <div class="we-make__person-img">
                                        <img src="assets/images/resources/person-img-1.png" alt="">
                                    </div>
                                    <div class="we-make__person-text">
                                        <p>Tara-Nicholle Nelson</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6">
                            <div class="we-make__right">
                                <div class="we-make__progress">
                                    <div class="we-make__progress-single">
                                        <h4 class="we-make__progress-title">Event Management/Event Exhibition</h4>
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="90%">
                                                <div class="count-text">90%</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="we-make__progress-single">
                                        <h4 class="we-make__progress-title">Social Media Management</h4>
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="80%">
                                                <div class="count-text">80%</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="we-make__progress-single">
                                        <h4 class="we-make__progress-title">Influencer KOL's Marketing</h4>
                                        <div class="bar marb-0">
                                            <div class="bar-inner count-bar" data-percent="70%">
                                                <div class="count-text">70%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="services-one">
                <div class="services-one-bg" style="background-image: url(assets/images/backgrounds/services-one-bg.jpg)">
                </div>
                <div class="container">
                    <div class="section-title text-center">
                        <span class="section-title__tagline">Our services list</span>
                        <h2 class="section-title__title">What we’re offering</h2>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-lg-4">
                            <!--Services One Single-->
                            <div class="services-one__single wow fadeInUp" data-wow-delay="100ms">
                                <div class="services-one__icon">
                                    <span class="icon-color-sample"></span>
                                </div>
                                <h3 class="services-one__title"><a href="website-design.html">Social Media Management</a></h3>
                                <p class="services-one__text">Lorem ipsum dolor sit amet, consectetur notted adipisicing
                                    elit sed do.</p>
                                <a href="website-design.html" class="service-one__arrow"><span
                                        class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <!--Services One Single-->
                            <div class="services-one__single wow fadeInUp" data-wow-delay="100ms">
                                <div class="services-one__icon">
                                    <span class="icon-front-end"></span>
                                </div>
                                <h3 class="services-one__title"><a href="web-development.html">Event Management/Exhibition</a></h3>
                                <p class="services-one__text">Lorem ipsum dolor sit amet, consectetur notted adipisicing
                                    elit sed do.</p>
                                <a href="web-development.html" class="service-one__arrow"><span
                                        class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <!--Services One Single-->
                            <div class="services-one__single wow fadeInUp" data-wow-delay="100ms">
                                <div class="services-one__icon">
                                    <span class="icon-online-shopping"></span>
                                </div>
                                <h3 class="services-one__title"><a href="web-application.html">Influencer/KOL's Marketing</a></h3>
                                <p class="services-one__text">Lorem ipsum dolor sit amet, consectetur notted adipisicing
                                    elit sed do.</p>
                                <a href="web-application.html" class="service-one__arrow"><span 
                                        class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <section class="portfolio-one mb-5">
            <div class="portfolio-one__container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Recent work completed</span>
                    <h2 class="section-title__title">Work showcase</h2>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <ul class="portfolio-filter style1 post-filter has-dynamic-filters-counter list-unstyled">
                            <li data-filter=".filter-item" class="active"><span class="filter-text">All</span></li>
                            <li data-filter=".bra"><span class="filter-text">Social Media Management</span></li>
                            <li data-filter=".illus"><span class="filter-text">Event Management</span></li>
                            <li data-filter=".photo"><span class="filter-text">Influencer/KOL's Marketing</span></li>
                            <li data-filter=".web"><span class="filter-text last-pd-none">Digital Video</span></li>
                        </ul>
                    </div>
                </div>
                <div class="d-md-flex align-items-center">
                    <div class="col-xl-3 col-lg-6 col-md-3 filter-item bra illus web photo">
                        <!--Portfolio One Single-->
                        <div class="portfolio-one__single wow fadeInUp" data-wow-delay="100ms">
                            <div class="portfolio-one__img">
                                <img src="assets/images/resources/portfolio-1-1.jpg" alt="">
                                <div class="portfolio-one__experience">
                                    <div class="portfolio-one__web-design">
                                        <p class="portfolio-one__web-design-title">Web design</p>
                                    </div>
                                    <div class="portfolio-one__fimlor">
                                        <p class="portfolio-one__fimlor-title"><a href="portfolio-detail.html">Fimlor
                                                Experience</a></p>
                                    </div>
                                </div>
                                <div class="portfolio-one__arrow">
                                    <a href="portfolio-detail.html"><span class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-4 ms-md-1 filter-item bra photo">
                        <!--Portfolio One Single-->
                        <div class="portfolio-one__single wow fadeInUp" data-wow-delay="200ms">
                            <div class="portfolio-one__img">
                                <img src="assets/images/resources/portfolio-1-2.jpg" alt="">
                                <div class="portfolio-one__experience">
                                    <div class="portfolio-one__web-design">
                                        <p class="portfolio-one__web-design-title">Web design</p>
                                    </div>
                                    <div class="portfolio-one__fimlor">
                                        <p class="portfolio-one__fimlor-title"><a href="portfolio-detail.html">Fimlor
                                                Experience</a></p>
                                    </div>
                                </div>
                                <div class="portfolio-one__arrow">
                                    <a href="portfolio-detail.html"><span class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-4 ms-md-1 filter-item bra illus web">
                        <!--Portfolio One Single-->
                        <div class="portfolio-one__single mar-b-0 margin-bottom-30 wow fadeInUp" data-wow-delay="300ms">
                            <div class="portfolio-one__img">
                                <img src="assets/images/resources/portfolio-1-3.jpg" alt="">
                                <div class="portfolio-one__experience">
                                    <div class="portfolio-one__web-design">
                                        <p class="portfolio-one__web-design-title">Web design</p>
                                    </div>
                                    <div class="portfolio-one__fimlor">
                                        <p class="portfolio-one__fimlor-title"><a href="portfolio-detail.html">Fimlor
                                                Experience</a></p>
                                    </div>
                                </div>
                                <div class="portfolio-one__arrow">
                                    <a href="portfolio-detail.html"><span class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-4  filter-item bra illus photo">
                        <!--Portfolio One Single-->
                        <div class="portfolio-one__single mar-b-0 wow fadeInUp" data-wow-delay="400ms">
                            <div class="portfolio-one__img">
                                <img src="assets/images/resources/portfolio-1-4.jpg" alt="">
                                <div class="portfolio-one__experience">
                                    <div class="portfolio-one__web-design">
                                        <p class="portfolio-one__web-design-title">Web design</p>
                                    </div>
                                    <div class="portfolio-one__fimlor">
                                        <p class="portfolio-one__fimlor-title"><a href="portfolio-detail.html">Fimlor
                                                Experience</a></p>
                                    </div>
                                </div>
                                <div class="portfolio-one__arrow">
                                    <a href="portfolio-detail.html"><span class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- <section class="testimonial-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5">
                        <div class="testimonial-one__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Customer feedback</span>
                                <h2 class="section-title__title">What they are talking about moniz?</h2>
                            </div>
                            <div class="testimonial-one__btn-box">
                                <a href="about.html" class="thm-btn testimonial-one__btn"><span>All feedbacks</span></a>
                                <div class="testimonial-one__btn-shape"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="testimonial-one__slider">
                            <div class="testimonials-one__main-content">
                                <div class="swiper-container" id="testimonials-one__carousel">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="testimonial-one__conent-box">
                                                <p class="testimonial-one__text">This is due to their excellent service,
                                                    competitive pricing and customer support. It’s throughly refresing
                                                    to
                                                    get such a personal touch. Duis aute lorem ipsum is simply.</p>
                                                <div class="testimonial-one__client-details">
                                                    <h4 class="testimonial-one__client-name">Aleesha brown</h4>
                                                    <span class="testimonial-one__clinet-title">Satisfied
                                                        customers</span>
                                                </div>
                                            </div>
                                        </div><!-- /.swiper-slide -->
                                        <div class="swiper-slide">
                                            <div class="testimonial-one__conent-box">
                                                <p class="testimonial-one__text">This is due to their excellent service,
                                                    competitive pricing and customer support. It’s throughly refresing
                                                    to
                                                    get such a personal touch. Duis aute lorem ipsum is simply.</p>
                                                <div class="testimonial-one__client-details">
                                                    <h4 class="testimonial-one__client-name">Aleesha brown</h4>
                                                    <span class="testimonial-one__clinet-title">Satisfied
                                                        customers</span>
                                                </div>
                                            </div>
                                        </div><!-- /.swiper-slide -->
                                        <div class="swiper-slide">
                                            <div class="testimonial-one__conent-box">
                                                <p class="testimonial-one__text">This is due to their excellent service,
                                                    competitive pricing and customer support. It’s throughly refresing
                                                    to
                                                    get such a personal touch. Duis aute lorem ipsum is simply.</p>
                                                <div class="testimonial-one__client-details">
                                                    <h4 class="testimonial-one__client-name">Aleesha brown</h4>
                                                    <span class="testimonial-one__clinet-title">Satisfied
                                                        customers</span>
                                                </div>
                                            </div>
                                        </div><!-- /.swiper-slide -->
                                    </div><!-- /.swiper-wrapper -->
                                    <div id="testimonials-one__carousel-pagination"></div>
                                    <!-- /#testimonials-one__carousel-pagination -->
                                </div><!-- /#testimonials-one__thumb.swiper-container -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <section class="two-boxes mt-5">
            <div class="container">
                <div class="">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 mb-2">
                            <div class="two-boxes__single rounded-2 two-boxes__single-one">
                                <div class="two-boxes__content">
                                    <div class="two-boxes__icon">
                                        <span class="icon-web-design"></span>
                                    </div>
                                    <div class="two-boxes__text">
                                        <p>We’re committed to create <br> a change that matters</p>
                                    </div>
                                </div>
                                <div class="two-boxes__arrow">
                                    <a href="contact.html"><span class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="two-boxes__single rounded-2 two-boxes__single-two">
                                <div class="two-boxes__content">
                                    <div class="two-boxes__icon">
                                        <span class="icon-graphic-design"></span>
                                    </div>
                                    <div class="two-boxes__text">
                                        <p>We’re committed to create <br> a change that matters</p>
                                    </div>
                                </div>
                                <div class="two-boxes__arrow">
                                    <a href="about.html"><span class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="video-one">
            <div class="video-one-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                style="background-image: url(assets/images/backgrounds/video-one-bg.jpg)"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="video-one__inner ">

        <div class = "video1 me-5 me-md-0 object-fit-cover">
            <video controls>
                <source src="./assets/videolow.mp4"/>
            </video>
                <style>
                    video{
                        float: start;
                        margin-top: 50px;
                        margin-bottom: 50px;
                        width: 90%;
                        margin-right: 25px;
                        margin-left: 50px;
                    }
                </style>
            </video>
        </div>
        <!--Video One End-->
                                </a>
                            </div>
                            <h2 class="video-one__text">We’re shaping the perfect <br> web solutions</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
             <section class="">
            <div class="container">
                <div class="row mt-4 ms-4">
                    <div class="col-xl-4">
                        <div class="reasons-one__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Our benefits</span>
                                <h2 class="section-title__title">Reasons why we are best</h2>
                            </div>
                            <ul class="list-unstyled reasons-one__icon-box">
                                <li>
                                    <span class="icon-training"></span>
                                    <p class="reasons-one__text">The best user interfaces</p>
                                </li>
                                <li>
                                    <span class="icon-strategy"></span>
                                    <p class="reasons-one__text">Quick smooth web development</p>
                                </li>
                            </ul>
                            <p class="reasons-one__text-1">Tincidunt elit magnis nulla facilisis sagittis maecenas.
                                sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo
                                orci not dong right.</p>
                            <a href="about.html" class="thm-btn"><span>Discover more</span></a><!-- /.thm-btn -->
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class=" ms-md-5 me-5 me-md-0">
                            <div class="container d-md-flex align-items-center">
                                <div class="col-xl-6 col-lg-6 col-md-6 p-2">
                                    <div class="reasons-one__img-one">
                                        <img src="assets/images/resources/reasons-one-img-1.jpg" alt="">
                                        <div class="reasons-one__shape-1"></div>
                                        <div class="reasons-one__shape-2"></div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 p-2">
                                    <div class="reasons-one__img-two">
                                        <img src="assets/images/resources/reasons-one-img-3.jpg" alt="">
                                    </div>
                                    <div class="reasons-one__img-three reasons-one__img-two">
                                        <img src="assets/images/resources/reasons-one-img-2.jpg" alt="">
                                        <div class="reasons-one__shape-3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="blog-one">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Recent work completed</span>
                    <h2 class="section-title__title">Latest from the blog</h2>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <!--Blog One Single-->
                        <div class="blog-one__single wow fadeInUp" data-wow-delay="100ms">
                            <div class="blog-one__img-box">
                                <div class="blog-one__img">
                                    <img src="assets/images/blog/blog-1-1.jpg" alt="">
                                    <a href="blog-details.html">
                                        <span class="blog-one__plus"></span>
                                    </a>
                                </div>
                                <div class="blog-one__date-box">
                                    <p><span>20</span> May</p>
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <ul class="list-unstyled blog-one__meta">
                                    <li><a href="blog-details.html"><i class="far fa-user-circle"></i> By admin</a></li>
                                    <li><a href="blog-details.html"><i class="far fa-comments"></i> 2 Comments</a>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title">
                                    <a href="blog-details.html">Basic rule of running web agency business</a>
                                </h3>
                                <p class="blog-one__text">Lorem ipsum is simply is text used by copytyping refreshing.
                                </p>
                                <div class="blog-one__bottom">
                                    <div class="blog-one__read-btn">
                                        <a href="blog-details.html">Read more</a>
                                    </div>
                                    <div class="blog-one__arrow">
                                        <a href="blog-details.html"><span class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <!--Blog One Single-->
                        <div class="blog-one__single wow fadeInUp" data-wow-delay="200ms">
                            <div class="blog-one__img-box">
                                <div class="blog-one__img">
                                    <img src="assets/images/blog/blog-1-2.jpg" alt="">
                                    <a href="blog-details.html">
                                        <span class="blog-one__plus"></span>
                                    </a>
                                </div>
                                <div class="blog-one__date-box">
                                    <p><span>20</span> May</p>
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <ul class="list-unstyled blog-one__meta">
                                    <li><a href="blog-details.html"><i class="far fa-user-circle"></i> By admin</a></li>
                                    <li><a href="blog-details.html"><i class="far fa-comments"></i> 2 Comments</a>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title">
                                    <a href="blog-details.html">Leverage frameworks to provide a robust</a>
                                </h3>
                                <p class="blog-one__text">Lorem ipsum is simply is text used by copytyping refreshing.
                                </p>
                                <div class="blog-one__bottom">
                                    <div class="blog-one__read-btn">
                                        <a href="blog-details.html">Read more</a>
                                    </div>
                                    <div class="blog-one__arrow">
                                        <a href="blog-details.html"><span class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <!--Blog One Single-->
                        <div class="blog-one__single wow fadeInUp" data-wow-delay="300ms">
                            <div class="blog-one__img-box">
                                <div class="blog-one__img">
                                    <img src="assets/images/blog/blog-1-3.jpg" alt="">
                                    <a href="blog-details.html">
                                        <span class="blog-one__plus"></span>
                                    </a>
                                </div>
                                <div class="blog-one__date-box">
                                    <p><span>20</span> May</p>
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <ul class="list-unstyled blog-one__meta">
                                    <li><a href="blog-details.html"><i class="far fa-user-circle"></i> By admin</a></li>
                                    <li><a href="blog-details.html"><i class="far fa-comments"></i> 2 Comments</a>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title">
                                    <a href="blog-details.html">Organically grow the holistic world view of</a>
                                </h3>
                                <p class="blog-one__text">Lorem ipsum is simply is text used by copytyping refreshing.
                                </p>
                                <div class="blog-one__bottom">
                                    <div class="blog-one__read-btn">
                                        <a href="blog-details.html">Read more</a>
                                    </div>
                                    <div class="blog-one__arrow">
                                        <a href="blog-details.html"><span class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="brand-one">
            <div class="container">
                <div class="thm-swiper__slider swiper-container cursor-pointer" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
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
                        "slidesPerView": 5
                    }
                }}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand-1-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand-1-2.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand-1-3.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand-1-4.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand-1-5.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand-1-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand-1-2.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand-1-3.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand-1-4.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand-1-5.png" alt="">
                        </div><!-- /.swiper-slide -->
                    </div>
                </div>
            </div>
        </section>

        <section class="cta-one">
            <div class="cta-one-bg" style="background-image: url(assets/images/backgrounds/cta-one-bg.jpg)"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="cta-one__inner">
                            <p class="cta-one__tagline">We can help you stand out your business</p>
                            <h2 class="cta-one__title">Website design services for <br> your businesses</h2>
                            <a href="contact.html" class="thm-btn cta-one__btn thm-btn--dark--light-hover"><span>Free
                                    consultation</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>



@include('layouts.LP.footer')
@endsection