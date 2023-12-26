<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <!-- ... other columns in the footer remain the same ... -->
                <div class="col-lg-3 col-md-6">
                    <div class="footer-info">
                        <img src="{{asset('assets/img/Logo/logo.png')}}" class="logo me-auto me-lg-0 mb-5" alt="Your Logo" width="150px">

                        <p>
                            A108 Adam Street <br>
                            NY 535022, USA<br><br>
                            <strong>Phone #1:</strong> +20 100 6215138<br>
                            <strong>Phone #2:</strong> +961 76 326960<br>
                            <strong>Email:</strong> ayma.solutions.co@gmail.com<br>
                        </p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="https://www.instagram.com/ayma_solutions/" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="https://www.linkedin.com/company/ayma-solutions/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>{{ __('footer_msgs.footer_useful_links') }}</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">{{ __('footer_msgs.footer_home') }}</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">{{ __('footer_msgs.footer_about_us') }}</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">{{ __('footer_msgs.footer_services') }}</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">{{ __('footer_msgs.footer_terms_of_service') }}</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">{{ __('footer_msgs.footer_privacy_policy') }}</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>{{ __('footer_msgs.footer_our_services') }}</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">{{ __('footer_msgs.footer_web_design') }}</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">{{ __('footer_msgs.footer_web_development') }}</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">{{ __('footer_msgs.footer_product_management') }}</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">{{ __('footer_msgs.footer_marketing') }}</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">{{ __('footer_msgs.footer_graphic_design') }}</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>{{ __('footer_msgs.footer_our_newsletter') }}</h4>
                    <p>{{ __('footer_msgs.footer_newsletter_description') }}</p>
                    <form action="" method="post">
                        <input type="email" name="email" class="email"><input type="submit" class="submit" value="{{ __('footer_msgs.footer_subscribe') }}">
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            {!! __('footer_msgs.footer_copyright') !!}
        </div>
        <div class="credits">
            {!! __('footer_msgs.footer_credits') !!}
        </div>
    </div>
</footer><!-- End Footer -->
