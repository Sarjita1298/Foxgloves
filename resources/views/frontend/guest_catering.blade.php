@extends('frontend.master')

@section('title', 'Guest House, Catering & Canteen Management')

@section('content')
<!-- BOOTSTRAP SLIDER START -->
<section class="slider_section my-5">
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1500">
    <ol class="carousel-indicators">
      <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
      <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
      <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
      <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('frontend/images/guesthouse.png') }}" class="d-block w-100" alt="Guest House">
        <div class="carousel-caption d-none d-md-flex flex-column justify-content-center align-items-center top-50 start-50 translate-middle text-center">
          <h2 > Guest House Services</h2>
      <p style="color:#ffffff">
        We provide well-maintained guest house management services that offer comfort, security, and a homely environment for your guests and staff. From regular housekeeping to round-the-clock support, we ensure a hassle-free and welcoming stay. Our trained staff takes care of cleanliness, linen, food arrangements, and visitor protocols, making your guest house operate like a professional hospitality unit.
      </p>
       {{-- <a href="service" class="btn1">Learn More</a> --}}
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('frontend/images/guesthouse1.png') }}" class="d-block w-100" alt="Catering">
        <div class="carousel-caption d-none d-md-flex flex-column justify-content-center align-items-center top-50 start-50 translate-middle text-center">
          <h2> Catering Solutions</h2>
          <p style="color:#ffffff">
            Our catering services are tailored to meet diverse culinary preferences with a focus on hygiene, quality, and timely delivery. Whether it's for corporate events, daily office meals, or special occasions, our team delivers delicious, nutritious, and well-balanced meals. We use fresh ingredients, maintain kitchen safety standards, and offer flexible menu planning for all dietary needs.
          </p>
          {{-- <a href="service" class="btn1">Explore</a> --}}
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('frontend/images/guesthouse2.png') }}" class="d-block w-100" alt="Canteen">
        <div class="carousel-caption d-none d-md-flex flex-column justify-content-center align-items-center top-50 start-50 translate-middle text-center">
          <h2> Canteen Management</h2>
          <p style="color:#ffffff">
            We offer end-to-end canteen management solutions for corporate offices, factories, educational institutions, and more. From staff deployment to kitchen operations and inventory control, we handle everything. Our goal is to deliver healthy meals in a clean and efficient environment while ensuring cost control and satisfaction for all stakeholders.
          </p>
          {{-- <a href="service" class="btn1">Contact Us</a> --}}
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('frontend/images/guesthouse2.png') }}" class="d-block w-100" alt="Canteen">
        <div class="carousel-caption d-none d-md-flex flex-column justify-content-center align-items-center top-50 start-50 translate-middle text-center">
          <h2>Hospitality Excellence</h2>
          <p style="color:#ffffff">
            With a deep understanding of the hospitality sector, we deliver high-standard services that make your premises guest-ready at all times. Our hospitality excellence program includes trained personnel, personalized guest handling, housekeeping, and concierge services that enhance your organization's reputation and ensure lasting impressions.
          </p>
          {{-- <a href="service" class="btn1">Contact Us</a> --}}
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </a>
  </div>
</section>
<!-- BOOTSTRAP SLIDER END -->


<section class="housekeeping-section" style="background: url('{{ asset('frontend/images/housekeeping.png') }}') no-repeat center center; background-size: cover;">
  <div class="housekeeping-box">
    <h2>Specialized Housekeeping Services</h2>
    <p>Our mechanized housekeeping solutions cater to high-traffic and high-standard environments, including:</p>
    <ul class="housekeeping-list">
      <li>Railway Platforms, Waiting Areas & Offices</li>
      <li>Hospitals (ICU, OT, General Ward Sanitation)</li>
      <li>Shopping Malls (Food Courts, Toilets, Escalator Areas, Parking)</li>
      <li>Educational Campuses</li>
      <li>Office Complexes</li>
    </ul>
    <p>Using state-of-the-art machinery, certified chemicals, and highly trained personnel, we ensure superior hygiene and safety.</p>
  </div>
</section>



@endsection