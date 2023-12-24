<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-lg-between">

        <img src="{{ asset('assets/img/Logo/logo3.png') }}" class="logo me-auto me-lg-0" alt="Your Logo" width="150px">

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">{{ __('navbar_msgs.home') }}</a></li>
                <li><a class="nav-link scrollto" href="#about">{{ __('navbar_msgs.about') }}</a></li>
                <li><a class="nav-link scrollto" href="#services">{{ __('navbar_msgs.services') }}</a></li>
                <li><a class="nav-link scrollto " href="#portfolio">{{ __('navbar_msgs.portfolio') }}</a></li>
                <li><a class="nav-link scrollto" href="#team">{{ __('navbar_msgs.team') }}</a></li>
                <li class="dropdown">
                    <a href="#"><span>{{ __('navbar_msgs.drop_down') }}</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#"><span>{{ __('navbar_msgs.drop_down_1') }}</span></a></li>
                        <li class="dropdown">
                            <a href="#"><span>{{ __('navbar_msgs.deep_drop_down') }}</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#"><span>{{ __('navbar_msgs.deep_drop_down_1') }}</span></a></li>
                                <li><a href="#"><span>{{ __('navbar_msgs.deep_drop_down_2') }}</span></a></li>
                                <li><a href="#"><span>{{ __('navbar_msgs.deep_drop_down_3') }}</span></a></li>
                                <li><a href="#"><span>{{ __('navbar_msgs.deep_drop_down_4') }}</span></a></li>
                                <li><a href="#"><span>{{ __('navbar_msgs.deep_drop_down_5') }}</span></a></li>
                            </ul>
                        </li>
                        <li><a href="#"><span>{{ __('navbar_msgs.drop_down_2') }}</span></a></li>
                        <li><a href="#"><span>{{ __('navbar_msgs.drop_down_3') }}</span></a></li>
                        <li><a href="#"><span>{{ __('navbar_msgs.drop_down_4') }}</span></a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="#contact">{{ __('navbar_msgs.contact') }}</a></li>
            </ul>
        </nav><!-- .navbar -->

        <div>
            <input type="checkbox" id="toggle_checkbox">
            <label for="toggle_checkbox" class="nav-link scrollto"></label>
        </div>
    </div>
</header><!-- End Header -->
