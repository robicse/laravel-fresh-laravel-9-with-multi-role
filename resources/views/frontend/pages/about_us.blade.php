@extends('frontend.layouts.app')
@section('title', 'IBO | About US')


@section('content')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg"
            style="background-image: url({{ asset('frontend/assets/images/backgrounds/page-header-bg.jpg') }})">
        </div>
        <div class="page-header-shape-1"><img src="{{ asset('frontend/assets/images/shapes/page-header-shape-1.png') }}"
                alt=""></div>
        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li><span>/</span></li>
                    <li>About</li>
                </ul>
                <h2>About us</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--About Four Start-->
    <section class="about-four">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-four__left">
                        <div class="about-four__img-box wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                            <div class="about-four__img">
                                <img src="{{ asset('frontend/assets/images/resources/about-four-img-1.jpg') }}"
                                    alt="">
                            </div>
                            <div class="about-four__img-two">
                                <img src="{{ asset('frontend/assets/images/resources/about-four-img-2.jpg') }}"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-four__right">
                        <div class="section-title text-left">
                            <div class="section-sub-title-box">
                                <p class="section-sub-title">About company</p>
                                <div class="section-title-shape-1">
                                    <img src="{{ asset('frontend/assets/images/shapes/section-title-shape-1.png') }}"
                                        alt="">
                                </div>
                                <div class="section-title-shape-2">
                                    <img src="{{ asset('frontend/assets/images/shapes/section-title-shape-2.png') }}"
                                        alt="">
                                </div>
                            </div>
                            <h2 class="section-title__title">Creating a better future for your loved once</h2>
                        </div>
                        <p class="about-four__text-1">Nullam eu nibh vitae est tempor molest sed ex.</p>
                        <p class="about-four__text-2">Quisque dignissim maximus ipsum, sed rutrum tincidunt et. Sed
                            eget tincidunt ipsum. There are many passages of psum available, but the majority have
                            alteration in some by injected humour, or randomised words look believable.</p>
                        <div class="about-four__founder">
                            <div class="about-four__founder-img">
                                <img src="{{ asset('frontend/assets/images/resources/about-four-founder-img.jpg') }}"
                                    alt="">
                            </div>
                            <div class="about-four__founder-content">
                                <h3 class="about-four__founder-name">David Hardson</h3>
                                <p class="about-four__founder-sub-title">Founder of insur</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About Four End-->

    <!--Brand One Start-->
    <section class="brand-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-3">
                    <div class="brand-one__title">
                        <h2>Trusted and funded by more then 800 companies</h2>
                    </div>
                </div>
                <div class="col-xl-9">
                    <div class="brand-one__main-content">
                        <div class="thm-swiper__slider swiper-container"
                            data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
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
                                    <img src="{{ asset('frontend/assets/images/brand/brand-1-1.png') }}" alt="">
                                </div><!-- /.swiper-slide -->
                                <div class="swiper-slide">
                                    <img src="{{ asset('frontend/assets/images/brand/brand-1-2.png') }}" alt="">
                                </div><!-- /.swiper-slide -->
                                <div class="swiper-slide">
                                    <img src="{{ asset('frontend/assets/images/brand/brand-1-3.png') }}" alt="">
                                </div><!-- /.swiper-slide -->
                                <div class="swiper-slide">
                                    <img src="{{ asset('frontend/assets/images/brand/brand-1-4.png') }}" alt="">
                                </div><!-- /.swiper-slide -->
                                <div class="swiper-slide">
                                    <img src="{{ asset('frontend/assets/images/brand/brand-1-5.png') }}" alt="">
                                </div><!-- /.swiper-slide -->
                                <div class="swiper-slide">
                                    <img src="{{ asset('frontend/assets/') }}images/brand/brand-1-1.png" alt="">
                                </div><!-- /.swiper-slide -->
                                <div class="swiper-slide">
                                    <img src="{{ asset('frontend/assets/') }}images/brand/brand-1-2.png" alt="">
                                </div><!-- /.swiper-slide -->
                                <div class="swiper-slide">
                                    <img src="{{ asset('frontend/assets/') }}images/brand/brand-1-3.png" alt="">
                                </div><!-- /.swiper-slide -->
                                <div class="swiper-slide">
                                    <img src="{{ asset('frontend/assets/') }}images/brand/brand-1-4.png" alt="">
                                </div><!-- /.swiper-slide -->
                                <div class="swiper-slide">
                                    <img src="{{ asset('frontend/assets/') }}images/brand/brand-1-5.png" alt="">
                                </div><!-- /.swiper-slide -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Brand One End-->

    <!--Testimonial Two Start-->
    <section class="testimonial-two">
        <div class="testimonial-two-shape-1"
            style="background-image: url({{ asset('frontend/assets/') }}images/shapes/testimonial-two-shape-1.png);"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="testimonial-two__left">
                        <div class="section-title text-left">
                            <div class="section-sub-title-box">
                                <p class="section-sub-title">testimonials</p>
                                <div class="section-title-shape-1">
                                    <img src="{{ asset('frontend/assets/') }}images/shapes/section-title-shape-1.png"
                                        alt="">
                                </div>
                                <div class="section-title-shape-2">
                                    <img src="{{ asset('frontend/assets/') }}images/shapes/section-title-shape-2.png"
                                        alt="">
                                </div>
                            </div>
                            <h2 class="section-title__title">What our happy customers are talking about our
                                insurance company</h2>
                        </div>
                        <p class="testimonial-two__text">Pellentesque habitant morbi tristique senectus netus et
                            malesuada fames ac turp egestas. Aliquam viverra arcu. Donec aliquet blandit enim
                            feugiat mattis.</p>
                        <div class="testimonial-two__point-box">
                            <ul class="list-unstyled testimonial-two__point">
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick"></span>
                                    </div>
                                    <div class="text">
                                        <p>We promise to respect <br> your time</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick"></span>
                                    </div>
                                    <div class="text">
                                        <p>We promise to provide <br> upfront pricing</p>
                                    </div>
                                </li>
                            </ul>
                            <ul class="list-unstyled testimonial-two__point testimonial-two__point-two">
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick"></span>
                                    </div>
                                    <div class="text">
                                        <p>We hire professionals <br> you can trust</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick"></span>
                                    </div>
                                    <div class="text">
                                        <p>We’re quick and reliable <br> insurance</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="testimonial-two__right">
                        <div class="owl-carousel owl-theme thm-owl__carousel testimonial-two__carousel"
                            data-owl-options='{
                            "loop": true,
                            "autoplay": true,
                            "margin": 0,
                            "nav": false,
                            "dots": true,
                            "smartSpeed": 500,
                            "autoplayTimeout": 10000,
                            "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                            "responsive": {
                                "0": {
                                    "items": 1
                                },
                                "768": {
                                    "items": 1
                                },
                                "992": {
                                    "items": 1
                                },
                                "1200": {
                                    "items": 1
                                }
                            }
                        }'>
                            <div class="testimonial-two__wrap">
                                <div class="testimonial-two__single">
                                    <div class="testimonial-two__single-inner">
                                        <div class="testimonial-two-shape-2">
                                            <img src="{{ asset('frontend/assets/') }}images/shapes/testimonial-two-shape-2.png"
                                                alt="">
                                        </div>
                                        <div class="testimonial-two__content-box">
                                            <h5 class="testimonial-two__client-name">Jessica Brown</h5>
                                            <p class="testimonial-two__text-2">Pellentesque habitant morbi tristique
                                                senectus netus et malesuada fames ac turp egestas.</p>
                                        </div>
                                        <div class="testimonial-two__client-review">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="testimonial-two__founder-box">
                                        <div class="testimonial-two__founder">
                                            <p class="testimonial-two__founder-text">CEO & Co founder</p>
                                            <div class="testimonial-two__founder-shape">
                                                <img src="{{ asset('frontend/assets/') }}images/shapes/testimonial-two-founder-shape.png"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="testimonial-two__client-img-box">
                                            <div class="testimonial-two__client-img">
                                                <img src="{{ asset('frontend/assets/') }}images/testimonial/testimonial-3-1.jpg"
                                                    alt="">
                                            </div>
                                            <div class="testimonial-two__quote">
                                                <img src="{{ asset('frontend/assets/') }}images/testimonial/testimonial-1-quote.png"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-two__single">
                                    <div class="testimonial-two__single-inner">
                                        <div class="testimonial-two-shape-2">
                                            <img src="{{ asset('frontend/assets/') }}images/shapes/testimonial-two-shape-2.png"
                                                alt="">
                                        </div>
                                        <div class="testimonial-two__content-box">
                                            <h5 class="testimonial-two__client-name">Smith Vectoria</h5>
                                            <p class="testimonial-two__text-2">Pellentesque habitant morbi tristique
                                                senectus netus et malesuada fames ac turp egestas.</p>
                                        </div>
                                        <div class="testimonial-two__client-review">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="testimonial-two__founder-box">
                                        <div class="testimonial-two__founder">
                                            <p class="testimonial-two__founder-text">CEO & Co founder</p>
                                            <div class="testimonial-two__founder-shape">
                                                <img src="{{ asset('frontend/assets/') }}images/shapes/testimonial-two-founder-shape.png"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="testimonial-two__client-img-box">
                                            <div class="testimonial-two__client-img">
                                                <img src="{{ asset('frontend/assets/') }}images/testimonial/testimonial-3-2.jpg"
                                                    alt="">
                                            </div>
                                            <div class="testimonial-two__quote">
                                                <img src="{{ asset('frontend/assets/') }}images/testimonial/testimonial-1-quote.png"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-two__wrap">
                                <div class="testimonial-two__single">
                                    <div class="testimonial-two__single-inner">
                                        <div class="testimonial-two-shape-2">
                                            <img src="{{ asset('frontend/assets/') }}images/shapes/testimonial-two-shape-2.png"
                                                alt="">
                                        </div>
                                        <div class="testimonial-two__content-box">
                                            <h5 class="testimonial-two__client-name">Hallen Smith</h5>
                                            <p class="testimonial-two__text-2">Pellentesque habitant morbi tristique
                                                senectus netus et malesuada fames ac turp egestas.</p>
                                        </div>
                                        <div class="testimonial-two__client-review">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="testimonial-two__founder-box">
                                        <div class="testimonial-two__founder">
                                            <p class="testimonial-two__founder-text">CEO & Co founder</p>
                                            <div class="testimonial-two__founder-shape">
                                                <img src="{{ asset('frontend/assets/') }}images/shapes/testimonial-two-founder-shape.png"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="testimonial-two__client-img-box">
                                            <div class="testimonial-two__client-img">
                                                <img src="{{ asset('frontend/assets/') }}images/testimonial/testimonial-3-3.jpg"
                                                    alt="">
                                            </div>
                                            <div class="testimonial-two__quote">
                                                <img src="{{ asset('frontend/assets/') }}images/testimonial/testimonial-1-quote.png"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-two__single">
                                    <div class="testimonial-two__single-inner">
                                        <div class="testimonial-two-shape-2">
                                            <img src="{{ asset('frontend/assets/') }}images/shapes/testimonial-two-shape-2.png"
                                                alt="">
                                        </div>
                                        <div class="testimonial-two__content-box">
                                            <h5 class="testimonial-two__client-name">Kevin Martin</h5>
                                            <p class="testimonial-two__text-2">Pellentesque habitant morbi tristique
                                                senectus netus et malesuada fames ac turp egestas.</p>
                                        </div>
                                        <div class="testimonial-two__client-review">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="testimonial-two__founder-box">
                                        <div class="testimonial-two__founder">
                                            <p class="testimonial-two__founder-text">CEO & Co founder</p>
                                            <div class="testimonial-two__founder-shape">
                                                <img src="{{ asset('frontend/assets/') }}images/shapes/testimonial-two-founder-shape.png"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="testimonial-two__client-img-box">
                                            <div class="testimonial-two__client-img">
                                                <img src="{{ asset('frontend/assets/') }}images/testimonial/testimonial-3-4.jpg"
                                                    alt="">
                                            </div>
                                            <div class="testimonial-two__quote">
                                                <img src="{{ asset('frontend/assets/') }}images/testimonial/testimonial-1-quote.png"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-two__wrap">
                                <div class="testimonial-two__single">
                                    <div class="testimonial-two__single-inner">
                                        <div class="testimonial-two-shape-2">
                                            <img src="{{ asset('frontend/assets/') }}images/shapes/testimonial-two-shape-2.png"
                                                alt="">
                                        </div>
                                        <div class="testimonial-two__content-box">
                                            <h5 class="testimonial-two__client-name">Jessica Brown</h5>
                                            <p class="testimonial-two__text-2">Pellentesque habitant morbi tristique
                                                senectus netus et malesuada fames ac turp egestas.</p>
                                        </div>
                                        <div class="testimonial-two__client-review">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="testimonial-two__founder-box">
                                        <div class="testimonial-two__founder">
                                            <p class="testimonial-two__founder-text">CEO & Co founder</p>
                                            <div class="testimonial-two__founder-shape">
                                                <img src="{{ asset('frontend/assets/') }}images/shapes/testimonial-two-founder-shape.png"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="testimonial-two__client-img-box">
                                            <div class="testimonial-two__client-img">
                                                <img src="{{ asset('frontend/assets/') }}images/testimonial/testimonial-3-1.jpg"
                                                    alt="">
                                            </div>
                                            <div class="testimonial-two__quote">
                                                <img src="{{ asset('frontend/assets/') }}images/testimonial/testimonial-1-quote.png"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-two__single">
                                    <div class="testimonial-two__single-inner">
                                        <div class="testimonial-two-shape-2">
                                            <img src="{{ asset('frontend/assets/') }}images/shapes/testimonial-two-shape-2.png"
                                                alt="">
                                        </div>
                                        <div class="testimonial-two__content-box">
                                            <h5 class="testimonial-two__client-name">Smith Vectoria</h5>
                                            <p class="testimonial-two__text-2">Pellentesque habitant morbi tristique
                                                senectus netus et malesuada fames ac turp egestas.</p>
                                        </div>
                                        <div class="testimonial-two__client-review">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="testimonial-two__founder-box">
                                        <div class="testimonial-two__founder">
                                            <p class="testimonial-two__founder-text">CEO & Co founder</p>
                                            <div class="testimonial-two__founder-shape">
                                                <img src="{{ asset('frontend/assets/') }}images/shapes/testimonial-two-founder-shape.png"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="testimonial-two__client-img-box">
                                            <div class="testimonial-two__client-img">
                                                <img src="{{ asset('frontend/assets/') }}images/testimonial/testimonial-3-2.jpg"
                                                    alt="">
                                            </div>
                                            <div class="testimonial-two__quote">
                                                <img src="{{ asset('frontend/assets/') }}images/testimonial/testimonial-1-quote.png"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Testimonial Two End-->

    <!--CTA One Start-->
    <section class="cta-one cta-four">
        <div class="cta-four-shape-1 float-bob-x">
            <img src="{{ asset('frontend/assets/') }}images/shapes/cta-four-shape-1.png" alt="">
        </div>
        <div class="container">
            <div class="cta-one__content">
                <div class="cta-one__inner">
                    <div class="cta-one__left">
                        <h3 class="cta-one__title">Find a local insurance agent</h3>
                    </div>
                    <div class="cta-one__right">
                        <div class="cta-one__call">
                            <div class="cta-one__call-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="cta-one__call-number">
                                <a href="tel:9200368090">+92 (003) 68-090</a>
                                <p>Call to Our Experts</p>
                            </div>
                        </div>
                        <div class="cta-one__btn-box">
                            <a href="contact.html" class="thm-btn cta-one__btn">Get a Quote</a>
                        </div>
                    </div>
                    <div class="cta-one__img">
                        <img src="{{ asset('frontend/assets/') }}images/resources/cta-one-img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--CTA One End-->

    <!--Team One Start-->
    <section class="team-one team-two">
        <div class="container">
            <div class="section-title text-center">
                <div class="section-sub-title-box">
                    <p class="section-sub-title">Our experts</p>
                    <div class="section-title-shape-1">
                        <img src="{{ asset('frontend/assets/') }}images/shapes/section-title-shape-1.png" alt="">
                    </div>
                    <div class="section-title-shape-2">
                        <img src="{{ asset('frontend/assets/') }}images/shapes/section-title-shape-2.png" alt="">
                    </div>
                </div>
                <h2 class="section-title__title">Meet our experienced <br> team people</h2>
            </div>
            <div class="row">
                <!--Team One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="team-one__single">
                        <div class="team-one__img">
                            <div class="team-one__img-box">
                                <img src="{{ asset('frontend/assets/') }}images/team/team-1-1.jpg" alt="">
                            </div>
                            <ul class="list-unstyled team-one__social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-one__content">
                            <p class="team-one__sub-title">Manager</p>
                            <h3 class="team-one__name"><a href="team-details.html">Thomas Jakson</a></h3>
                            <ul class="list-unstyled team-one__social-two">
                                <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--Team One Single End-->
                <!--Team One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                    <div class="team-one__single">
                        <div class="team-one__img">
                            <div class="team-one__img-box">
                                <img src="{{ asset('frontend/assets/') }}images/team/team-1-2.jpg" alt="">
                            </div>
                            <ul class="list-unstyled team-one__social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-one__content">
                            <p class="team-one__sub-title">Manager</p>
                            <h3 class="team-one__name"><a href="team-details.html">Hallen Smith</a></h3>
                            <ul class="list-unstyled team-one__social-two">
                                <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--Team One Single End-->
                <!--Team One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                    <div class="team-one__single">
                        <div class="team-one__img">
                            <div class="team-one__img-box">
                                <img src="{{ asset('frontend/assets/') }}images/team/team-1-3.jpg" alt="">
                            </div>
                            <ul class="list-unstyled team-one__social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-one__content">
                            <p class="team-one__sub-title">Manager</p>
                            <h3 class="team-one__name"><a href="team-details.html">David Cooper</a></h3>
                            <ul class="list-unstyled team-one__social-two">
                                <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--Team One Single End-->
            </div>
        </div>
    </section>
    <!--Team One End-->

    <!--Counter One Start-->
    <Section class="counter-one">
        <div class="counter-one-shape-1 float-bob-y">
            <img src="{{ asset('frontend/assets/') }}images/shapes/counter-one-shape-1.png" alt="">
        </div>
        <div class="counter-one-shape-2 float-bob-y">
            <img src="{{ asset('frontend/assets/') }}images/shapes/counter-one-shape-2.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <!--Counter One Single Start-->
                <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="counter-one__single">
                        <div class="counter-one__top">
                            <div class="counter-one__icon">
                                <span class="icon-insurance-1"></span>
                            </div>
                            <div class="counter-one__count-box">
                                <div class="counter-one__count-box-inner">
                                    <h3 class="odometer" data-count="2.6">00</h3>
                                    <span class="counter-one__plus">k</span>
                                </div>
                            </div>
                        </div>
                        <p class="counter-one__text">Gave insurances</p>
                    </div>
                </div>
                <!--Counter One Single End-->
                <!--Counter One Single Start-->
                <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="counter-one__single">
                        <div class="counter-one__top">
                            <div class="counter-one__icon">
                                <span class="icon-group"></span>
                            </div>
                            <div class="counter-one__count-box">
                                <div class="counter-one__count-box-inner">
                                    <h3 class="odometer" data-count="89">00</h3>
                                    <span class="counter-one__plus">+</span>
                                </div>
                            </div>
                        </div>
                        <p class="counter-one__text">Professional team</p>
                    </div>
                </div>
                <!--Counter One Single End-->
                <!--Counter One Single Start-->
                <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="counter-one__single">
                        <div class="counter-one__top">
                            <div class="counter-one__icon">
                                <span class="icon-life-insurance"></span>
                            </div>
                            <div class="counter-one__count-box">
                                <div class="counter-one__count-box-inner">
                                    <h3 class="odometer" data-count="2.8">00</h3>
                                    <span class="counter-one__plus">k</span>
                                </div>
                            </div>
                        </div>
                        <p class="counter-one__text">Satisfied customers</p>
                    </div>
                </div>
                <!--Counter One Single End-->
                <!--Counter One Single Start-->
                <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <div class="counter-one__single">
                        <div class="counter-one__top">
                            <div class="counter-one__icon">
                                <span class="icon-success"></span>
                            </div>
                            <div class="counter-one__count-box">
                                <div class="counter-one__count-box-inner">
                                    <h3 class="odometer" data-count="99">00</h3>
                                    <span class="counter-one__plus">%</span>
                                </div>
                            </div>
                        </div>
                        <p class="counter-one__text">Our success rate</p>
                    </div>
                </div>
                <!--Counter One Single End-->
            </div>
        </div>
    </Section>
    <!--Counter One End-->
@endsection
