@extends('frontend.master')

@section('content')
<section class="about-section py-5 position-relative" style="background-image: url('{{ asset('frontend/images/Foxgloves.jpg') }}'); 
background-size: cover; background-position: center; margin-bottom: 80px;">
    <div class="overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-color: rgba(0, 0, 0, 0.6); z-index: 1;"></div>
  
    <div class="container position-relative" style="z-index: 2;">
      <div class="row align-items-center">
        
        <div class="col-md-6 text-start mb-4 mb-md-0">
          <h1 id="headingText" class="fw-bold">
            FoxGloves Manifold<br>Services & Securities Pvt. Ltd.
          </h1>
        </div>
  
        <!-- Right Column: Paragraph -->
        <div class="col-md-6">
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


<style>
    #headingText {
  color: #ecd5d5 !important;       
  font-size: 4rem;                 
  font-family: 'Times New Roman', serif;  
  text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
}

  
    #paraText {
      color: #dbe6db !important;       
      background-color: rgba(0, 0, 0, 0.3);
      padding: 20px;
      border-radius: 10px;
      font-family: 'Arial', sans-serif;
      line-height: 1.8;
    }
  </style>