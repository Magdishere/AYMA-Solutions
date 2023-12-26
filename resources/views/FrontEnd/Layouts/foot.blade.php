<!-- Vendor JS Files -->
<script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
<script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('assets/js/main.js')}}"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.min.js'></script>
<script src='https://wlada.github.io/vue-carousel-3d/js/carousel-3d.umd.js'></script>
<script  src="{{asset('assets/js/script.js')}}"></script>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    $(document).ready(function() {
        // Listen for the checkbox change event
        $('#toggle_checkbox').change(function() {
            // Get the current locale using LaravelLocalization
            var currentLocale = '{{ LaravelLocalization::getCurrentLocale() }}';

            // Determine the target locale based on the current locale
            var targetLocale = (currentLocale === 'en') ? 'ar' : 'en';

            // Set the locale to the target language
            setLocale(targetLocale);
        });

        // Function to set the Laravel localization locale
        function setLocale(locale) {
            // Get the CSRF token from the meta tag
            var csrfToken = $('meta[name="csrf-token"]').attr('content');

            // Send an AJAX request to update the locale
            $.ajax({
                type: 'POST',
                url: '/set-locale', // Update the URL based on your route configuration
                data: {
                    locale: locale,
                    _token: csrfToken // Include the CSRF token in the request
                },
                success: function(response) {
                    // Handle the redirect in JavaScript
                    window.location.href = response.redirectUrl;

                    var currentLocale = '{{ LaravelLocalization::getCurrentLocale() }}';
                    if (currentLocale === 'ar') {
                        $('.label:before').css('background', 'url("../img/flags/lebanon.png")');
                    } else {
                        $('.label').css('background', 'url("../img/flags/lebanon.png")');
                    }
                },
                error: function(error) {
                    console.error('Error setting locale: ' + error.responseText);
                }
            });
        }
    });



</script>


</body>

</html>
