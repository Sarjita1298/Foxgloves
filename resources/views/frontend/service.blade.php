@extends('frontend.master')

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
  <!-- end service section -->
 
 