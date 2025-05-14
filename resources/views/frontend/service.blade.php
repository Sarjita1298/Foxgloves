@extends('frontend.master')
<link rel="stylesheet" href="{{ asset('frontend/css/service.css') }}">

@section('content')


 <!-- service section -->
 <section class="service_section layout_padding" style="background-image: url('{{ asset('frontend/images/.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
  <div class="container ">
      <div class="heading_container">
        <h2>
          Our Services
        </h2>
       
      </div>    
  
 
  <div class="service ">
        <div class="col-md-8 col-lg-10">
          <div class="box">
            <div class="img-box">
              <img src="frontend/images/newone.png" alt="Facility Management Service">
            </div>
            <div class="detail-box">
              <h5 class="text-dark fs-7">
                Facility Management Services
              </h5>
           
            </div>
          </div>
        </div>
        <div class="col-md-8 col-lg-10">
          <div class="box">
            <div class="img-box">
              <img src="frontend/images/newone1.png" alt="Mechanized Housekeeping for Industries">
            </div>
            <div class="detail-box ">
              <h5 class="text-dark fs-7">
                Mechanized Housekeeping Services                   
              </h5>
             
            </div>
          </div>
        </div>
        <div class="col-md-8 col-lg-10">
          <div class="box">
            <div class="img-box">
              <img src="frontend/images/newone2.png" alt="Security Services for Commercial Premises">
            </div>
            <div class="detail-box">
              <h5 class="text-dark fs-7">
                Security Services (Residential, Industrial & Corporate)
              </h5>             
              
            </div>
          </div>
        </div>
        <div class="col-md-8 col-lg-10">
          <div class="box">
            <div class="img-box">
              <img src="frontend/images/newone3.png" alt="Catering and Canteen Services">
            </div>
            <div class="detail-box">
              <h5 class="text-dark fs-7">
                Catering & Canteen Services ( Corporates, Events)
              </h5>
             
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-8 col-lg-10">
          <div class="box">
            <div class="img-box">
              <img src="frontend/images/newone4.png" alt="Guest House Management">
            </div>
            <div class="detail-box">
              <h5 class="text-dark fs-7">
                Guest House Management Services
              </h5>
             
            </div>
          </div>
        </div>
        <div class="col-md-8 col-lg-10">
          <div class="box">
            <div class="img-box">
              <img src="frontend/images/newone5.png" alt="Event Management Security">
            </div>
            <div class="detail-box">
              <h5 class="text-dark fs-7">
                Event Management Security
              </h5>     
            
            </div>
          </div>
        </div>
        <div class="col-md-8 col-lg-10">
          <div class="box">
            <div class="img-box">
              <img src="frontend/images/newone6.png"  alt="Courier and Escort Services">
            </div>
            <div class="detail-box">
              <h5 class="text-dark fs-7" >
              Courier & Escort Services      
              </h5>
            
            </div>
          </div>
        </div>
        <div class="col-md-8 col-lg-10">
          <div class="box">
            <div class="img-box">
              <img src="frontend/images/newone7.png" alt="Security Gadget Installation">
            </div>
            <div class="detail-box">
              <h5>
                Supply, Installation & Monitoring of Security Gadgets
              </h5>
            
            </div>
          </div>
        </div>
        <div class="col-md-8 col-lg-10">
          <div class="box">
            <div class="img-box">
              <img src="frontend/images/newone8.png" alt="Employment Verification Services">
            </div>
            <div class="detail-box">
              <h5 class="text-dark fs-7">
                Pre-employment / Post-employment Verification
              </h5>
             
            </div>
          </div>
        </div>
        <div class="col-md-8 col-lg-10">
          <div class="box">
            <div class="img-box">
              <img src="frontend/images/newone9.png" alt="Temporary Staffing Solutions">
            </div>
            <div class="detail-box">
              <h5 class="text-dark fs-7">
               Temporary Staffing Solutions
              </h5>
             
            </div>
          </div>
        </div>
        <div class="col-md-8 col-lg-10">
          <div class="box">
            <div class="img-box">
              <img src="frontend/images/newone10.png" alt="Permanent Staffing Solutions">
            </div>
            <div class="detail-box">
              <h5 class="text-dark fs-7">
                Permanent Staffing Solutions
              </h5>
              
            </div>
          </div>
        </div>
        <div class="col-md-8 col-lg-10">
          <div class="box">
            <div class="img-box">
              <img src="frontend/images/newone11.png" alt="Turnkey Project Execution">
            </div>
            <div class="detail-box">
              <h5 class="text-dark fs-7">
               Turnkey Base Project Execution (Infrastructure, Security)
              </h5>
            </div>
          </div>
        </div>
        <div class="col-md-8 col-lg-10">
          <div class="box">
            <div class="img-box">
              <img src="frontend/images/newone12.png" alt="Survey Services and Compliance">
            </div>
            <div class="detail-box">
              <h5 class="text-dark fs-7">
                Survey Services (Facility Needs, Compliance, Staffing, etc.)    
              </h5>
             
            </div>
           
          </div>
        </div>
      
      </div>
     
      {{-- <div class="btn-box">
        <a href="">
          View More
        </a>
      </div> --}}
    </div>
  </section>

  <!-- end service section -->
  <section class="commitment-section py-5 my-5 text-white" 
  style="background-image: url('{{ asset('frontend/images/commitment.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; padding: 40px 20px; border-radius: 210px 0 210px 0;">
  
  <div class="container">
    <div class="row align-items-center flex-column flex-md-row">
      
      <!-- IMAGE LEFT COLUMN -->
      <div class="col-md-6 mb-4 mb-md-0">
        <div class="img-wrapper text-center">
          <img src="{{ asset('frontend/images/commitment-quality.png') }}" alt="Commitment to Quality"  class="img-fluid rounded shadow">
        </div>
      </div>

      <!-- TEXT RIGHT COLUMN -->
      <div class="col-md-6 d-flex align-items-center">
        <div class="text-wrapper px-3">
          <h2 class="fw-bold mb-3 text-primary">Our Commitment to Quality</h2>
          <p class="text-dark fs-7" style="line-height: 1.7;">
            At FoxGloves Manifold Services & Securities Pvt. Ltd., quality is not just a goal — it’s our foundation. We strictly adhere to 
            <strong>ISO 9001:2015 certified protocols</strong>. Each project is subjected to 
            <strong>internal audits, client feedback loops, and surprise quality inspections</strong> 
            to ensure continuous improvement and adherence to SLAs.
          </p>
          <p class="text-dark fs-7">
            Every project undergoes structured internal audits, robust client feedback mechanisms, and unannounced quality inspections to ensure continual improvement. This disciplined approach helps us exceed expectations while maintaining adherence to SLAs (Service Level Agreements).
          </p>
        </div>
      </div>

    </div>
  </div>
</section>

  

  <section class="about-section py-5 my-5 position-relative text-white" style="background-image: url('{{ asset('frontend/images/training_&_development.png') }}'); background-size: cover; background-position: center; border-radius: 210px 0 210px 0;">
    <div class="overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0, 0, 0, 0.6); backdrop-filter: blur(2px); border-radius: 210px 0 210px 0; z-index: 1;"></div>
  
    <div class="container position-relative" style="z-index: 2;">
      <div class="row align-items-center">
        <div class="col-md-6 text-start mb-4 mb-md-0">
          <h6 id="headingText" class="fw-bold fs-5">TRAINING & DEVELOPMENT</h6>
        </div>
        <div class="col-md-6">
          <p id="paraText" class="fs-7">
            Our training infrastructure equips personnel with both general and role-specific
             expertise through:
            <br><br>
            • Induction Programs<br>
            • Refresher Courses<br>
            • Emergency Handling (Fire, Bomb Threats, Evacuation)<br>
            • Unarmed Combat Training<br>
            • First Aid & Sanitation<br>
            • Chauffeur Driving Skills for VIP Movements
          </p>
        </div>
      </div>
    </div>
  </section>
  
  @endsection
  <!-- end service section -->
 
 