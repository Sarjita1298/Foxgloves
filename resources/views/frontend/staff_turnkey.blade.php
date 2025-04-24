@extends('frontend.master')

@section('title', 'Staffing & Turnkey Projects')

@section('content')
<!-- SECTION FOR STAFFING SOLUTIONS -->
<section class="staffing_section">
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
<section class="turnkey_section my-5">
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

@endsection