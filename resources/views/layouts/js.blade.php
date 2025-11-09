<script>
window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > 10) {
        navbar.classList.add('shadow');
    } else {
        navbar.classList.remove('shadow');
    }
});
</script>

<!-- Vendor JS Files -->
<script src="{{ asset('asset-guest/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('asset-guest/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('asset-guest/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('asset-guest/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('asset-guest/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('asset-guest/vendor/swiper/swiper-bundle.min.js') }}"></script>

<!-- Main JS File -->
<script src="{{ asset('asset-guest/js/main.js') }}"></script>