<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>FoxGloves Manifold Services & Securities PVt. LTD.</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="frontend/css/bootstrap.css" />

  <!-- font awesome style -->
  <link href="frontend/css/font-awesome.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet">

<!-- Swiper CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

<link rel="stylesheet" href="{{ asset('frontend/css/service-slider.css') }}">

  <!-- Custom styles for this template -->
  <link href="frontend/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="frontend/css/responsive.css" rel="stylesheet" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Owl Carousel CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
</head>
<body>

  <!-- jQery -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <!-- bootstrap js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
  crossorigin="anonymous">
</script>  <script src="frontend/js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->

  <!-- Owl Carousel JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<!-- ✅ OwlCarousel Initialization -->
<script>
  $(document).ready(function() {
    console.log("OwlCarousel Type:", typeof $.fn.owlCarousel); // ✅ Debug

    $('.service-carousel').owlCarousel({
      loop: true,
      margin: 20,
      nav: false,
      dots: false,
      autoplay: true,
      autoplayTimeout: 1500,
      responsive: {
        0: { items: 1 },
        600: { items: 2 },
        1000: { items: 4 }
      }
    });

    $('.popuar-course-carusel').owlCarousel({
      loop: true,
      margin: 30,
      nav: false,
      dots: false,
      autoplay: true,
      autoplayTimeout: 4000,
      responsive: {
        0: { items: 1 },
        600: { items: 2 },
        1000: { items: 3 }
      }
    });

    // ✅ Tab switcher
    $('.services__item').on('click', function() {
      var target = $(this).data('service');
      $('.services__tab__inner__single').hide();
      $('#' + target).fadeIn();
      $('.services__item').removeClass('active');
      $(this).addClass('active');
    });

    // ✅ Show first tab by default
    $('.services__tab__inner__single').hide();
    $('#service_1').show();
  });
</script>
<script>
  $(document).ready(function () {
    console.log("jQuery is working!");
  });
</script>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const wrapper = document.querySelector('.service-dropdown-wrapper');
    const dropdown = document.querySelector('.custom-dropdown-menu');

    wrapper.addEventListener('mouseenter', () => {
      dropdown.style.display = 'block';
    });

    wrapper.addEventListener('mouseleave', () => {
      dropdown.style.display = 'none';
    });
  });
</script>
