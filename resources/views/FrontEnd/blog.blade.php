
@include('FrontEnd.Layouts.head')


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
                <a href="#blog" class="get-started-btn scrollto whatsapp"><i class="fas fa-blog"></i>{{ __('messages.blog_button') }}</a>
            </div>
        </div>

    </div>
</section><!-- End Hero -->

@include('FrontEnd.Layouts.footer')

<div id="preloader">
    <img src="{{asset('assets/img/Logo/ayma-logo.gif')}}">
</div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

@include('FrontEnd.Layouts.foot')
