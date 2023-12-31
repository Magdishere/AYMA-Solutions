
@include('FrontEnd.Layouts.head')

<body>

@include('FrontEnd.Layouts.header')

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
            <div class="col-xl-6 col-lg-8">
                <h1>{{ __('messages.hero_section_title') }}</h1>
                <p id="typing-text" style="color: white">{{ __('messages.hero_section_subtitle') }}</p>
            </div>
        </div>

        <div class="row gy-4 mt-1 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
            <div class="col-xl-12 col-md-4">
                <a href="https://wa.me/+96176326960" class="get-started-btn scrollto whatsapp"><i class="fas fa-phone-alt"></i>{{ __('messages.start_button') }}</a>
                <a href="{{url('blog')}}" class="get-started-btn scrollto whatsapp"><i class="fas fa-blog"></i>{{ __('messages.blog_button') }}</a>
            </div>
        </div>

    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-12 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
                    <h3 class="text-center" style="color: #fff">{{ __('messages.about_section_title') }} <span id="typingText" style="color: #E9CC1D"></span></h3>
                    <div class="container-sm">
                        <p class="container-sm col-lg-10 text-center">
                        <p class="mx-auto mx-lg-2 mx-s-3 mt-3 text-center" style="color: #fff">{{ __('messages.about_section_subtitle') }}</p>

                        <hr class="short mx-auto" data-zanim-xs="{&quot;from&quot;:{&quot;opacity&quot;:0,&quot;width&quot;:0},&quot;to&quot;:{&quot;opacity&quot;:1,&quot;width&quot;:&quot;4.20873rem&quot;},&quot;duration&quot;:0.8}" style="width: 4.3em; opacity: 1;">
                    </div>
                    <!-- New boxes with image and paragraph -->
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="feature-box">
                                <div class="icon">
                                    <img src="{{asset('assets/img/icons/uiux.png')}}" style="width: 80px; height: 80px;" alt="Image 1">
                                </div>
                                <p>{{ __('messages.designs_feature_title') }}</p>
                                <p class="hidden-paragraph">{{ __('messages.designs_feature_description') }}</p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="feature-box">
                                <div class="icon">
                                    <img src="{{asset('assets/img/icons/solutions.png')}}" style="width: 80px; height: 80px;" alt="Image 1">
                                </div>
                                <p>{{ __('messages.solutions_feature_title') }}</p>
                                <p class="hidden-paragraph">{{ __('messages.solutions_feature_description') }}</p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="feature-box">
                                <div class="icon">
                                    <img src="{{asset('assets/img/icons/time.png')}}" style="width: 80px; height: 80px;" alt="Image 1">
                                </div>
                                <p>{{ __('messages.timelines_feature_title') }}</p>
                                <p class="hidden-paragraph">{{ __('messages.timelines_feature_description') }}</p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="feature-box">
                                <div class="icon">
                                    <img src="{{asset('assets/img/icons/quality.png')}}" style="width: 80px; height: 80px;" alt="Image 1">
                                </div>
                                <p>{{ __('messages.quality_feature_title') }}</p>
                                <p class="hidden-paragraph">{{ __('messages.quality_feature_description') }}</p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="feature-box">
                                <div class="icon">
                                    <img src="{{asset('assets/img/icons/customer.png')}}" style="width: 80px; height: 80px;" alt="Image 1">
                                </div>
                                <p>{{ __('messages.support_feature_title') }}</p>
                                <p class="hidden-paragraph">{{ __('messages.support_feature_description') }}</p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="feature-box">
                                <div class="icon">
                                    <img src="{{asset('assets/img/icons/prices.png')}}" style="width: 80px; height: 80px;" alt="Image 1">
                                </div>
                                <p>{{ __('messages.prices_feature_title') }}</p>
                                <p class="hidden-paragraph">{{ __('messages.prices_feature_description') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">

            <div class="wrap-home-resources">

                <!-- <script src="./home-resources.js" inline></script> -->

                <section id="services" class="services">
                    <div class="container" data-aos="fade-up">

                        <div class="section-title">
                            <h2>{{ __('messages.services_section_title') }}</h2>
                            <p>{{ __('messages.check_our_services') }} <span style="color: #E9CC1D">{{ __('messages.our_services') }}</span></p>
                        </div>

                        <div class="wrap-home-resources">

                            <!-- <script src="./home-resources.js" inline></script> -->

                            <div class="home-resources-content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="carousel-home-resources" class="carousel-home-resources">
                                                <carousel-3d
                                                    :perspective="30"
                                                    :border="0"
                                                    :width="585"
                                                    :height="370"
                                                    :controls-visible="true"
                                                    :space="1000"
                                                    :clickable="true"
                                                >

                                                    <slide :index="0" class="slide">
                                                        <div class="col-lg-12 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                                                            <div class="icon-box">
                                                                <div class="wvc-icon-holder">
                                                                    <div class="wvc-icon-container wvc-image-icon" style="">
                                                                        <div class="icon">
                                                                            <img loading="lazy" decoding="async" class="wvc-image-icon " src="{{asset('assets/img/icons/pos-9966997-8161231.gif')}}" width="128" height="128" alt="141" title="141">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="wvc-icon-text-holder">
                                                                    <div class="wvc-icon-text-inner">
                                                                        <h4><a href="">{{ __('messages.pos_solutions') }}</a></h4>
                                                                        <p style="">
                                                                            {{ __('messages.pos_solutions_description') }}
                                                                        </p>
                                                                        <div class="count-box">
                                                                            <a href="">
                                                                                <i class="bi bi-arrow-right"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </slide>

                                                    <slide :index="1" class="slide1">
                                                        <div class="col-lg-12 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                                                            <div class="icon-box">
                                                                <div class="wvc-icon-holder">
                                                                    <div class="wvc-icon-container wvc-image-icon" style="">
                                                                        <div class="icon">
                                                                            <img loading="lazy" decoding="async" class="wvc-image-icon " src="{{asset('assets/img/icons/custom.gif')}}" width="128" height="128" alt="141" title="141">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="wvc-icon-text-holder">
                                                                    <div class="wvc-icon-text-inner">
                                                                        <h4><a href="">{{ __('messages.custom_website_development') }}</a></h4>
                                                                        <p style="">
                                                                            {{ __('messages.custom_website_development_description') }}
                                                                        </p>
                                                                        <div class="count-box">
                                                                            <a href="">
                                                                                <i class="bi bi-arrow-right"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </slide>

                                                    <slide :index="2" class="slide2">
                                                        <div class="col-lg-12 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                                                            <div class="icon-box">
                                                                <div class="wvc-icon-holder">
                                                                    <div class="wvc-icon-container wvc-image-icon" style="">
                                                                        <div class="icon">
                                                                            <img loading="lazy" decoding="async" class="wvc-image-icon " src="{{asset('assets/img/icons/ecommerce.gif')}}" width="128" height="128" alt="141" title="141">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="wvc-icon-text-holder">
                                                                    <div class="wvc-icon-text-inner">
                                                                        <h4><a href="">{{ __('messages.ecommerce_solutions') }}</a></h4>
                                                                        <p style="">
                                                                            {{ __('messages.ecommerce_solutions_description') }}
                                                                        </p>
                                                                        <div class="count-box">
                                                                            <a href="">
                                                                                <i class="bi bi-arrow-right"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </slide>
                                                </carousel-3d>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section><!-- End Services Section -->
            </div>
        </div>
    </section>
    <!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>{{ __('messages.portfolio_section_title') }}</h2>
                <p>{!! __('messages.check_our_portfolio') !!}</p>
            </div>

            <div class="projects">
                <h2 class="title">Some words from our costumers</h2>
                <p class="description">We've been helping businesses to do their best since 2003.</p>

                <div class="slider-container">
                    <div class="slider">
                        <div class="slide-box">
                            <img src="{{asset('assets/img/portfolio/project-1.png')}}">
                            <h3 class="name">Albert Sinelly</h3>
                            <h4 class="job">Founder Of Devoker Company</h4>
                        </div>
                        <div class="slide-box">
                            <!-- Testi Two -->
                            <img src="{{asset('assets/img/portfolio/project-1.png')}}">
                            <h3 class="name">Hirok Meryam</h3>
                            <h4 class="job">Full stack Developer, Speaker</h4>
                        </div>
                        <div class="slide-box">
                            <img src="{{asset('assets/img/portfolio/project-1.png')}}">
                            <h3 class="name">Sebastian Sert</h3>
                            <h4 class="job">UX/UI Designer, Phtographer</h4>
                        </div>
                    </div>

                    <a href="#!" class="control-slider btn-left">
                        <i class="fas fa-chevron-left"></i>
                    </a>
                    <a href="#!" class="control-slider btn-right">
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">{{ __('messages.portfolio_filter_all') }}</li>
                        <li data-filter=".filter-app">{{ __('messages.portfolio_filter_app') }}</li>
                        <li data-filter=".filter-card">{{ __('messages.portfolio_filter_card') }}</li>
                        <li data-filter=".filter-web">{{ __('messages.portfolio_filter_web') }}</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="{{('assets/img/portfolio/portfolio-1.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 1</h4>
                            <p>App</p>
                            <div class="portfolio-links">
                                <a href="{{('assets/img/portfolio/portfolio-1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="{{('assets/img/portfolio/portfolio-2.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <div class="portfolio-links">
                                <a href="{{('assets/img/portfolio/portfolio-2.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="{{('assets/img/portfolio/portfolio-3.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 2</h4>
                            <p>App</p>
                            <div class="portfolio-links">
                                <a href="{{('assets/img/portfolio/portfolio-3.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="{{('assets/img/portfolio/portfolio-4.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Card 2</h4>
                            <p>Card</p>
                            <div class="portfolio-links">
                                <a href="{{('assets/img/portfolio/portfolio-4.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="{{('assets/img/portfolio/portfolio-5.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Web 2</h4>
                            <p>Web</p>
                            <div class="portfolio-links">
                                <a href="{{('assets/img/portfolio/portfolio-5.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="{{('assets/img/portfolio/portfolio-6.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 3</h4>
                            <p>App</p>
                            <div class="portfolio-links">
                                <a href="{{('assets/img/portfolio/portfolio-6.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="{{('assets/img/portfolio/portfolio-7.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Card 1</h4>
                            <p>Card</p>
                            <div class="portfolio-links">
                                <a href="{{('assets/img/portfolio/portfolio-7.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="{{('assets/img/portfolio/portfolio-8.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Card 3</h4>
                            <p>Card</p>
                            <div class="portfolio-links">
                                <a href="{{('assets/img/portfolio/portfolio-8.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="{{('assets/img/portfolio/portfolio-9.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <div class="portfolio-links">
                                <a href="{{('assets/img/portfolio/portfolio-9.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Portfolio Section -->

    {{-- <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container" data-aos="fade-up">

            <div class="row no-gutters">
                <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start" data-aos="fade-right" data-aos-delay="100"></div>
                <div class="col-xl-7 ps-4 ps-lg-5 pe-4 pe-lg-1 d-flex align-items-stretch" data-aos="fade-left" data-aos-delay="100">
                    <div class="content d-flex flex-column justify-content-center">
                        <h3>Voluptatem dignissimos provident quasi</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                        </p>
                        <div class="row">
                            <div class="col-md-6 d-md-flex align-items-md-stretch">
                                <div class="count-box">
                                    <i class="bi bi-emoji-smile"></i>
                                    <span data-purecounter-start="0" data-purecounter-end="65" data-purecounter-duration="2" class="purecounter"></span>
                                    <p><strong>Happy Clients</strong> consequuntur voluptas nostrum aliquid ipsam architecto ut.</p>
                                </div>
                            </div>

                            <div class="col-md-6 d-md-flex align-items-md-stretch">
                                <div class="count-box">
                                    <i class="bi bi-journal-richtext"></i>
                                    <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="2" class="purecounter"></span>
                                    <p><strong>Projects</strong> adipisci atque cum quia aspernatur totam laudantium et quia dere tan</p>
                                </div>
                            </div>

                            <div class="col-md-6 d-md-flex align-items-md-stretch">
                                <div class="count-box">
                                    <i class="bi bi-clock"></i>
                                    <span data-purecounter-start="0" data-purecounter-end="35" data-purecounter-duration="4" class="purecounter"></span>
                                    <p><strong>Years of experience</strong> aut commodi quaerat modi aliquam nam ducimus aut voluptate non vel</p>
                                </div>
                            </div>

                            <div class="col-md-6 d-md-flex align-items-md-stretch">
                                <div class="count-box">
                                    <i class="bi bi-award"></i>
                                    <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="4" class="purecounter"></span>
                                    <p><strong>Awards</strong> rerum asperiores dolor alias quo reprehenderit eum et nemo pad der</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- End .content-->
                </div>
            </div>

        </div>
    </section><!-- End Counts Section --> --}}

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container" data-aos="zoom-in">

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                    <!-- Testimonial 1 -->
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{('assets/img/testimonials/marissa.jpg')}}" class="testimonial-img" alt="">
                            <h3>{{ __('messages.marissa_name') }}</h3>
                            <h4>{{ __('messages.marissa_position') }}</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                {{ __('messages.marissa_quote') }}
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <!-- Testimonial 2 -->
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{('assets/img/testimonials/linus.jpeg')}}" class="testimonial-img" alt="">
                            <h3>{{ __('messages.linus_name') }}</h3>
                            <h4>{{ __('messages.linus_position') }}</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                {{ __('messages.linus_quote') }}
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <!-- Testimonial 3 -->
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{('assets/img/testimonials/mark.jpg')}}" class="testimonial-img" alt="">
                            <h3>{{ __('messages.mark_name') }}</h3>
                            <h4>{{ __('messages.mark_position') }}</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                {{ __('messages.mark_quote') }}
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <!-- Testimonial 4 -->
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{('assets/img/testimonials/elon.jpg')}}" class="testimonial-img" alt="">
                            <h3>{{ __('messages.elon_name') }}</h3>
                            <h4>{{ __('messages.elon_position') }}</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                {{ __('messages.elon_quote') }}
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <!-- Testimonial 5 -->
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{('assets/img/testimonials/steve.jpg')}}" class="testimonial-img" alt="">
                            <h3>{{ __('messages.steve_name') }}</h3>
                            <h4>{{ __('messages.steve_position') }}</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                {{ __('messages.steve_quote') }}
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section>
    <!-- End Testimonials Section -->

    <!-- Team Section -->
    <section id="team" class="team">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>{{ __('messages.team') }}</h2>
                <p>{{ __('messages.check_our_team') }} <span style="color: #E9CC1D">{{ __('messages.our_team') }}</span></p>
            </div>

            <div class="row justify-content-center">

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="300">
                        <div class="member-img">
                            <img src="{{('assets/img/team/magd.jpg')}}" class="img-fluid" alt="">
                            <div class="social">
                                <a href="https://www.facebook.com/profile.php?id=61550079144274"><i class="bi bi-facebook"></i></a>
                                <a href="https://www.instagram.com/magdishere/"><i class="bi bi-instagram"></i></a>
                                <a href="https://www.linkedin.com/in/magd-k-el-zalameh-233701275/"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>{{ __('messages.magd_name') }}</h4>
                            <span>{{ __('messages.web_developer') }}</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="400">
                        <div class="member-img">
                            <img src="{{('assets/img/team/team-4.jpg')}}" class="img-fluid" alt="">
                            <div class="social">
                                <a href="https://www.facebook.com/AyaHosnyZ/"><i class="bi bi-facebook"></i></a>
                                <a href="https://www.instagram.com/ayahosni/"><i class="bi bi-instagram"></i></a>
                                <a href="https://linkedin.com/in/ayahosny/"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>{{ __('messages.aya_name') }}</h4>
                            <span>{{ __('messages.web_developer') }}</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Team Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>{{ __('messages.contact') }}</h2>
                <p>{{ __('messages.contact_us') }} <span style="color: #E9CC1D">{{ __('messages.us') }}</span></p>
            </div>

            <div>
                <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
            </div>

            <div class="row mt-5">

                <div class="col-lg-4">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>{{ __('messages.locations') }}:</h4>
                            <p>{{ __('messages.cairo_egypt') }}</p>
                            <p>{{ __('messages.beirut_lebanon') }}</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>{{ __('messages.email') }}:</h4>
                            <p>ayma.solutions.co@gmail.com</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>{{ __('messages.call') }}:</h4>
                            <p>00-20-100-6215138</p>
                            <p>00-961-76-326960</p>
                        </div>

                    </div>

                </div>

                <div class="col-lg-8 mt-5 mt-lg-0">

                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="{{ __('messages.your_name') }}" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="{{ __('messages.your_email') }}" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="{{ __('messages.subject') }}" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="{{ __('messages.message') }}" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">{{ __('messages.loading') }}</div>
                            <div class="error-message"></div>
                            <div class="sent-message">{{ __('messages.message_sent') }}</div>
                        </div>
                        <div class="text-center"><button type="submit">{{ __('messages.send_message') }}</button></div>
                    </form>

                </div>

            </div>

        </div>
    </section>
    <!-- End Contact Section -->



</main><!-- End #main -->
@include('FrontEnd.Layouts.footer')

<div id="preloader">
    <img src="{{asset('assets/img/Logo/ayma-logo.gif')}}">
</div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

@include('FrontEnd.Layouts.foot')
