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
        <div class="col-md-2 col-lg-10">
          <div class="box">
            <div class="img-box">
              <img src="frontend/images/hotel.png" alt="Facility Management Service">
            </div>
            <div class="detail-box">
              <h5>
                Facility Management Services
              </h5>
           
            </div>
          </div>
        </div>
        <div class="col-md-2 col-lg-10">
          <div class="box">
            <div class="img-box">
              <img src="frontend/images/powerplants.png" alt="Mechanized Housekeeping for Industries">
            </div>
            <div class="detail-box">
              <h5>
                Mechanized Housekeeping Services for:
                - Pharmaceutical & Chemical Industries
                - Engineering Units
                - Railway Stations
                - Hospitals
                - Shopping Malls
                - Airports
                        
              </h5>
             
            </div>
          </div>
        </div>
        <div class="col-md-2 col-lg-10">
          <div class="box">
            <div class="img-box">
              <img src="frontend/images/retail.png" alt="Security Services for Commercial Premises">
            </div>
            <div class="detail-box">
              <h5>
                Security Services (Residential, Industrial & Corporate)
              </h5>             
              
            </div>
          </div>
        </div>
        <div class="col-md-2 col-lg-10">
          <div class="box">
            <div class="img-box">
              <img src="frontend/images/staff.png" alt="Catering and Canteen Services">
            </div>
            <div class="detail-box">
              <h5>
                Catering & Canteen Services (Institutions, Corporates, Events, Guest Houses)
              </h5>
             
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-lg-10">
          <div class="box">
            <div class="img-box">
              <img src="frontend/images/guesthouse.png" alt="Guest House Management">
            </div>
            <div class="detail-box">
              <h5>
                Guest House Management Services
              </h5>
             
            </div>
          </div>
        </div>
        <div class="col-md-2 col-lg-10">
          <div class="box">
            <div class="img-box">
              <img src="frontend/images/hotel4.png" alt="Event Management Security">
            </div>
            <div class="detail-box">
              <h5>
                Event Management Security
              </h5>     
            
            </div>
          </div>
        </div>
        <div class="col-md-2 col-lg-10">
          <div class="box">
            <div class="img-box">
              <img src="frontend/images/powerplants1.png"  alt="Courier and Escort Services">
            </div>
            <div class="detail-box">
              <h5>
              Courier & Escort Services      
              </h5>
            
            </div>
          </div>
        </div>
        <div class="col-md-2 col-lg-10">
          <div class="box">
            <div class="img-box">
              <img src="frontend/images/railways.png" alt="Security Gadget Installation">
            </div>
            <div class="detail-box">
              <h5>
                Supply, Installation & Monitoring of Security Gadgets
              </h5>
            
            </div>
          </div>
        </div>
        <div class="col-md-2 col-lg-10">
          <div class="box">
            <div class="img-box">
              <img src="frontend/images/retail.png" alt="Employment Verification Services">
            </div>
            <div class="detail-box">
              <h5>
                Pre-employment / Post-employment Verification
              </h5>
             
            </div>
          </div>
        </div>
        <div class="col-md-2 col-lg-10">
          <div class="box">
            <div class="img-box">
              <img src="frontend/images/retail2.png" alt="Temporary Staffing Solutions">
            </div>
            <div class="detail-box">
              <h5>
               Temporary Staffing Solutions
              </h5>
             
            </div>
          </div>
        </div>
        <div class="col-md-2 col-lg-10">
          <div class="box">
            <div class="img-box">
              <img src="frontend/images/staff.png" alt="Permanent Staffing Solutions">
            </div>
            <div class="detail-box">
              <h5>
                Permanent Staffing Solutions
              </h5>
              
            </div>
          </div>
        </div>
        <div class="col-md-2 col-lg-10">
          <div class="box">
            <div class="img-box">
              <img src="frontend/images/staff3.png" alt="Turnkey Project Execution">
            </div>
            <div class="detail-box">
              <h5>
               Turnkey Base Project Execution (Infrastructure, Security, Maintenance)
              </h5>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-lg-10">
          <div class="box">
            <div class="img-box">
              <img src="frontend/images/staff1.png" alt="Survey Services and Compliance">
            </div>
            <div class="detail-box">
              <h5>
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
  <section class="commitment-section py-5  my-5 bg-light" style="background-image: url('{{ asset('frontend/images/govt&public.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; height: 500px; padding: 50px 20px; color: white; border-radius: 250px 0 250px 0;">
  
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
  

  <section class="about-section py-5 my-5 position-relative" style="background-image: url('{{ asset('frontend/images/training_&_development.png') }}'); 
background-size: cover; background-position: center; margin-bottom: 80px;  border-radius: 250px 0 250px 0;">
    <div class="overlay" style=" border-radius: 250px 0 250px 0;"></div>

    <div class="container position-relative">
        <div class="row align-items-center">

            <div class="col-md-6 text-start mb-4 mb-md-0">
                <h1 id="headingText" class="fw-bold">
                    TRAINING & DEVELOP
                    -MENT
                </h1>
            </div>

            <div class="col-md-6">
                <p id="paraText" class="fs-5">
                    Our training infrastructure equips personnel with both general and role-specific expertise through:
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
 
 