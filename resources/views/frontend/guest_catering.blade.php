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
          <h1>Guest House Services</h1>
          <p>Comfortable accommodation & hospitality for guests.</p>
          <a href="#" class="btn1">Learn More</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('frontend/images/guesthouse1.png') }}" class="d-block w-100" alt="Catering">
        <div class="carousel-caption d-none d-md-flex flex-column justify-content-center align-items-center top-50 start-50 translate-middle text-center">
          <h1>Catering Solutions</h1>
          <p>Delicious meals with hygiene and care.</p>
          <a href="#" class="btn1">Explore</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('frontend/images/guesthouse2.png') }}" class="d-block w-100" alt="Canteen">
        <div class="carousel-caption d-none d-md-flex flex-column justify-content-center align-items-center top-50 start-50 translate-middle text-center">
          <h1>Canteen Management</h1>
          <p>Efficient and affordable daily meals.</p>
          <a href="#" class="btn1">Contact Us</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('frontend/images/guesthouse2.png') }}" class="d-block w-100" alt="Canteen">
        <div class="carousel-caption d-none d-md-flex flex-column justify-content-center align-items-center top-50 start-50 translate-middle text-center">
          <h1>Hospitality Excellence</h1>
          <p>We manage it all: guest houses, catering, and canteens with quality and care.</p>
          <a href="#" class="btn1">Contact Us</a>
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



@endsection