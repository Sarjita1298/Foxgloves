@extends('frontend.master')

@section('title', 'Staffing & Turnkey Projects')

@section('content')
<!-- SECTION FOR STAFFING SOLUTIONS -->
<section class="staffing_section my-5" style="background-image: url('{{ asset('frontend/images/railways.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; height: 500px; padding: 50px 20px; color: white;">
  <div class="container bg-warning text-danger">
    <h1 class="text-center">Well-Trained Staffing Solutions</h1>
    <p class="text-center text-dark bg-warning">Providing skilled professionals for your project needs.</p>
    <div class="row">
      <!-- Example of staffing solution cards -->
      <div class="col-md-4">
        <div class="card text-white">
          <img src="{{ asset('frontend/images/staff.png') }}" class="card-img-top" alt="Staffing Solution 1">
          <div class="card-body">
            <h5 class="card-title">Expert Staffing</h5>
            <p class="card-text">We connect you with industry experts to ensure project success.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card text-white">
          <img src="{{ asset('frontend/images/staff1.png') }}" class="card-img-top" alt="Staffing Solution 2">
          <div class="card-body">
            <h5 class="card-title">Tailored Solutions</h5>
            <p class="card-text">Customized staffing solutions to meet your specific project requirements.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card text-white">
          <img src="{{ asset('frontend/images/staff3.png') }}" class="card-img-top" alt="Staffing Solution 3">
          <div class="card-body">
            <h5 class="card-title">Ongoing Support</h5>
            <p class="card-text">Continuous support and training for our staff to ensure quality performance.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SECTION FOR TURNKEY PROJECTS -->
<section class="turnkey_section my-5" style="background-image: url('{{ asset('frontend/images/railways1.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; height: 500px; padding: 50px 20px; color: white;">
  
  <div class="container bg-warning text-danger">
    <h1 class="text-center">Turnkey Project Management</h1>
    <p class="text-center">Comprehensive management from start to finish.</p>
    <div class="row">
      <!-- Example of turnkey project cards -->
      <div class="col-md-4">
        <div class="card text-muted">
          <img src="{{ asset('frontend/images/railways1.png') }}" class="card-img-top" alt="Turnkey Project 1">
          <div class="card-body">
            <h5 class="card-title">Full-Service Management</h5>
            <p class="card-text">We handle every aspect of your project for seamless execution.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card text-muted">
          <img src="{{ asset('frontend/images/railways2.png') }}" class="card-img-top" alt="Turnkey Project 2">
          <div class="card-body">
            <h5 class="card-title">Quality Assurance</h5>
            <p class="card-text">Ensuring high standards and quality control throughout the project lifecycle.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card text-muted">
          <img src="{{ asset('frontend/images/railways1.png') }}" class="card-img-top" alt="Turnkey Project 3">
          <div class="card-body">
            <h5 class="card-title">Timely Delivery</h5>
            <p class="card-text">Commitment to delivering projects on time and within budget.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="commitment-section py-5 my-5 bg-light" style="background-image: url('{{ asset('frontend/images/govt&public.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; height: 500px; padding: 50px 20px; color: white;">
  
  <div class="container">
    <div class="row align-items-center">
      <!-- IMAGE COLUMN -->
      <div class="col-md-6 mb-4 mb-md-0">
        <div class="img-wrapper">
          <img src="{{ asset('frontend/images/commitment-quality.png') }}" alt="Commitment to Quality" class="img-fluid rounded shadow">
        </div>
      </div>

      <!-- TEXT COLUMN -->
      <div class="col-md-6">
        <div class="text-wrapper px-3">
          <h2 class="fw-bold mb-3 text-primary">Our Commitment to Quality</h2>
          <p class="text-dark fs-5" style="line-height: 1.7;">
            At FoxGloves Manifold Services & Securities Pvt. Ltd., quality is not just a goal — it’s our foundation. We strictly adhere to 
            <strong>ISO 9001:2015 certified protocols</strong>. . Each project is subjected to <strong> internal audits, client feedback loops, and surprise quality inspections</strong> to ensure continuous improvement and adherence to SLAs.
          </p>
          <p class="text-warning fs-6">
            Every project undergoes structured internal audits, robust client feedback mechanisms, and unannounced quality inspections to ensure continual improvement. This disciplined approach helps us exceed expectations while maintaining adherence to SLAs (Service Level Agreements).
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

