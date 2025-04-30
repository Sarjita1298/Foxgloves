@extends('frontend.master')

@section('content')
<section class="about-section py-5 my-5 position-relative" style="background-image: url('{{ asset('frontend/images/railways1.png') }}'); 
background-size: cover; background-position: center; margin-bottom: 80px; border-radius: 250px 0 250px 0;">
    <div class="overlay " style="border-radius: 250px 0 250px 0;"></div>

    <div class="container position-relative">
      <div class="row align-items-center">

        <div class="col-md-6 text-start mb-4 mb-md-0">
          <h1 id="headingText" class="fw-bold">
            FoxGloves Manifold<br>Services & Securities Pvt. Ltd.
          </h1>
        </div>

        <div class="col-md-6 ms-auto">
          <p id="paraText" class="fs-5">
            <strong>FoxGloves</strong> is a government-recognized startup and an 
            <strong>ISO 9001:2015 certified company</strong> headquartered in 
            <strong>Bhopal, Madhya Pradesh</strong>.
            <br><br>
            We are one of India’s most trusted names in comprehensive 
            <strong>Facility Management</strong>, <strong>Security Solutions</strong>, 
            <strong>Mechanized Housekeeping</strong>, and <strong>Customized Workforce Solutions</strong>.
            <br><br>
            With a dedicated team and a client-first approach, we offer a broad suite of services 
            tailored to the unique needs of each client across industries and sectors.
          </p>
        </div>

      </div>
    </div>
</section>
@endsection
