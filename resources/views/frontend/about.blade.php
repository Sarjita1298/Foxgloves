@extends('frontend.master')

@section('content')


  <section class="about_section layout_padding layout_margin">
    <div class="container  ">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About Us
              </h2>
            </div>
            <p>
              Founded in 2018 by Mr. Neelesh Pandey and Mr. Sunil Kumar Chaurasiya, our company has evolved
              into a multi-disciplinary service provider trusted by government agencies, large corporations,
              and public infrastructure bodies. With extensive expertise in labor laws, security operations,
              civil engineering, and IT systems, our leadership drives us towards sustainable, tech-enabled,
              and people-centric operations.
            </p>
            {{-- <a href="about">
              Read More
            </a> --}}
          </div>
        </div>
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="frontend/images/about-img.png" alt="">
          </div>
        </div>

      </div>
    </div>
  </section>

 
<section class="about-section py-5 my-5 position-relative" style="background-image: url('{{ asset('frontend/images/hotel2.png') }}'); 
background-size: cover; background-position: center; margin-bottom: 80px;">
    <div class="overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-color: rgba(0, 0, 0, 0.6); z-index: 1;"></div>
  
    <div class="container position-relative" style="z-index: 2;">
      <div class="row align-items-center">
        
        <div class="col-md-6 text-start mb-4 mb-md-0">
          <h1 id="headingText" class="fw-bold">
           OUR MISSION
          </h1>
        </div>
  
        <div class="col-md-6">
          <p id="paraText" class="fs-5">
            To deliver<strong>consistent</strong>quality-driven 
            <strong>facility</strong>workforce 
            <strong>management solutions</strong>
            <br><br>
            while building long-term, transparent,   
         <strong>transparent</strong>,and <strong> ethical partnerships</strong>with our clients. We aim to be the benchmark for
            <strong>MTotal Facility
                Management</strong>across India..
            <br><br>
            To deliver consistent, quality-driven facility and workforce management solutions while building 
            long-term, transparent,
             and ethical partnerships with our clients. We aim to be the benchmark for Total Facility
              Management across India.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="industries-section" style="background: url('{{ asset('frontend/images/guest.png') }}') no-repeat center center; background-size: cover; ">
    <div class="industries-box">
        <h2>Industries We Serve</h2>
        <ul class="industries-list">
          
            <li>Automobiles</li>
            <li>Manufacturing Units</li>
            <li>Engineering & Infrastructure</li>
            <li>IT & ITES</li>
            <li>Telecom</li>
            <li>Educational Institutions</li>
            <li>Hospitality (Hotels & Resorts)</li>
            <li>Hospitals & Clinics</li>
            <li>Power Plants & Mines</li>
            <li>Government & Public Sector</li>
            <li>Airports</li>
            <li>Shopping Malls</li>
            <li>Railways</li>
            <li>Guest Houses</li>
            <li>Retail & Multiplex</li>
            <li>... and more.</li>
        </ul>
    </div>
  </section>



@endsection
  <!-- end about section -->

  
   

  

  
</body>

</html>