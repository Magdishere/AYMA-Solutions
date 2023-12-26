

@include('FrontEnd.Layouts.head')

<body>

@include('FrontEnd.Layouts.header')


<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center justify-content-center" style="background: url(/assets/img/Blog/blog-back.jpg) top center; width: 100%; min-height: 100vh; background-size: cover; position: relative;">

    <div class="container" data-aos="fade-up">

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">

            <div class="col-xl-6 col-lg-8">
                <h1>{!! __('blog_msgs.Blog_title') !!}</h1>
                <p id="typing-text" style="color: white">{{ __('blog_msgs.Blog_desc') }}</p>
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
<main id="main">
    <section id="blog" class="blog">
        <div class="blog-container">
            <div class="section-title">
                <h2>Our Blog</h2>
                <p>Check Our Posts</p>
            </div>
            <div class="col-lg-12 d-flex justify-content-center mb-20">
                <div id="myBtnContainer" class="search-blog">
                    <button class="btn active" onclick="filterSelection('all')"> Show all</button>
                    <button class="btn" onclick="filterSelection('ai')"> AI</button>
                    <button class="btn" onclick="filterSelection('frontend')"> Frontend</button>
                    <button class="btn" onclick="filterSelection('backend')"> Backend</button>
                    <button class="btn" onclick="filterSelection('news')"> News</button>
                </div>
            </div>
            <div class="blog-row">
                <div class="blog-image col-md-6">
                    <img src="{{asset('assets/img/Blog/front.jpg')}}" alt="#" />
                </div>
                <div class="col-md-6">
                    <div class="full blog_cont">
                    <h4 style="color: #E9CC1D;">Newest Frontend Technologies</h4>
                    <h5>MAY 14 2019 - Posted By: Admin</h5>
                    <p>Businesses always desire to use the newest and the most trending technologies. Technologies have become trending because they bring something new and more efficient problem-solving solutions to the table. At the same time, there might be better implementation solutions based on a business's needs and goals.
                        Organizations must observe the market and determine the needs and problems they must cater to before experimenting with and implementing the available technologies.
                    </p>
                    <a href="" style="text-decoration: underline; color:#E9CC1D;">Read More</a>
                    </div>

                </div>
            </div>
            <div class="blog-row">
                <div class="blog-image col-md-6">
                    <img src="{{asset('assets/img/Blog/ai.jpg')}}" alt="#" />
                </div>
                <div class="col-md-6">
                    <div class="full blog_cont">
                    <h4 style="color: #E9CC1D;">Is AI A Threat ?</h4>
                    <h5>MAY 14 2019 - Posted By: Admin</h5>
                    <p>Businesses always desire to use the newest and the most trending technologies. Technologies have become trending because they bring something new and more efficient problem-solving solutions to the table. At the same time, there might be better implementation solutions based on a business's needs and goals.
                        Organizations must observe the market and determine the needs and problems they must cater to before experimenting with and implementing the available technologies.
                    </p>
                    <a href="" style="text-decoration: underline; color:#E9CC1D;">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

</body>

@include('FrontEnd.Layouts.footer')

<div id="preloader">
    <img src="{{asset('assets/img/Logo/ayma-logo.gif')}}">
</div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

@include('FrontEnd.Layouts.foot')
