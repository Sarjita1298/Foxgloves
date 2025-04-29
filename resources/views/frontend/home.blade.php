@extends('frontend.master')

@section('content')

  <!-- slider section start -->
  <section class="slider_section">
    <div id="customCarousel1" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        @for($i = 0; $i < 3; $i++)
        <div class="carousel-item {{ $i == 0 ? 'active' : '' }}">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div class="img-box">
                  <img src="{{ asset('frontend/images/slider-img.png') }}" alt="">
                </div>
              </div>
              <div class="col-md-6">
                <div class="detail-box">
                  <h3>Welcome to FoxGloves Manifold Services & Securities Pvt. Ltd.</h3>
                  <p>FoxGloves Manifold Services & Securities Pvt. Ltd. is a ...</p>
                  <div class="btn-box">
                    <a href="our_profile" class="btn1">Read More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endfor
      </div>
  
      <!-- 👇 Carousel Indicators -->
       {{-- <ol class="carousel-indicators">
        <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
        <li data-target="#customCarousel1" data-slide-to="1"></li>
        <li data-target="#customCarousel1" data-slide-to="2"></li>
      </ol> --}}
    </div>
  </section>
  
  <!-- slider section end -->

 <!-- service section -->
 <section class="service_section layout_padding">
    <div class="container ">
      <div class="heading_container">
        <h2>
          Our Services
        </h2>

      </div>    
  
 
  <div class="service-carousel owl-carousel">
        <div class="col-md-2 col-lg-10">
          <div class="box">
            <div class="img-box">
              <img src="frontend/images/hotel.png" alt="Facility Management Service">
            </div>
            <div class="detail-box">
              <h5>
                Facility Man...
              </h5>
              <a href="service">
                <span>
                  Read More
                </span>
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
              </a>
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
                Mechanized...            
              </h5>
              <a href="service">
                <span>
                  Read More
                </span>
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
              </a>
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
                Security Serv...
              </h5>             
              <a href="service">
                <span>
                  Read More
                </span>
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
              </a>
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
                Catering & Can...
              </h5>
              <a href="service">
                <span>
                  Read More
                </span>
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
                Guest House ...
              </h5>
              <a href="service">
                <span>
                  Read More
                </span>
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
              </a>
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
                Event Manage... 
              </h5>     
              <a href="service">
                <span>
                  Read More
                </span>
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
              </a>
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
                 Courier & Es...       
              </h5>
              <a href="service">
                <span>
                  Read More
                </span>
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
              </a>
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
                Supply, Instal...
              </h5>
              <a href="service">
                <span>
                  Read More
                </span>
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
              </a>
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
                Pre-employ... 
              </h5>
              <a href="service">
                <span>
                  Read More
                </span>
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
              </a>
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
                Temporary Staf...
              </h5>
              <a href="service">
                <span>
                  Read More
                </span>
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
              </a>
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
                Permanent Staf...
              </h5>
              <a href="service">
                <span>
                  Read More
                </span>
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
              </a>
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
                Turnkey Base...
              </h5>
              <a href="service">
                <span>
                  Read More
                </span>
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
              </a>
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
                Survey Servi...     
              </h5>
              <a href="service">
                <span>
                  Read More
                </span>
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
              </a>
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

 
  

<script>
  $(document).ready(function(){
    $('.owl-carousel').owlCarousel({
      loop:true,
      margin:10,
      nav:true,
      items:1, // or change to items:3 for multi-slide
      autoplay:true,
      autoplayTimeout:3000,
      autoplayHoverPause:true
    });
  });
</script>

<!-- end service section -->

<!-- about section -->
<section class="about_section layout_padding">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="detail-box">
          <div class="heading_container">
            <h2>About Us</h2>
          </div>
          <p>
            Founded in 2018 by Mr. Neelesh Pandey and Mr. Sunil Kumar Chaurasiya, 
            our company has evolved into a multi-disciplinary service provider 
            trusted by government agencies, large corporations, and public 
            infrastructure bodies. With extensive expertise in labor laws,
            security operations, civil engineering, and IT systems, our 
            leadership drives us towards sustainable, tech-enabled, an
            people-centric operations.
            </p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="img-box">
          <img src="{{ asset('frontend/images/about-img.png') }}" alt="">
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end about section -->

<!-- case section -->
<section class="case_section layout_padding">
  <div class="container">
    <div class="heading_container">
      <h2>Our Case Studies</h2>
    </div>
    <div class="row">
      @foreach([
        [
          'image' => 'case-1.jpg',
          'title' => 'Staffing & Turnkey Projects',
          'para' => 'We offer reliable staffing solutions across various domains and manage end-to-end turnkey projects with precision—from planning to execution.',
          'link' => 'staff_turnkey'
        ],
        [
          'image' => 'case-2.jpg',
          'title' => 'Guest House, Catering & Canteen Management',
          'para' => 'Our professional catering and canteen services are designed to ensure hygienic, nutritious,and timely meal delivery for employees and guests.',
          'link' => 'guest-catering-canteen'
        ]
      ] as $case)
      <div class="col-md-6">
        <div class="box">
          <div class="img-box">
            <img src="{{ asset('frontend/images/' . $case['image']) }}" alt="">
          </div>
          <div class="detail-box">
            <h5>{{ $case['title'] }}</h5>
            <p style="color: rgb(22, 8, 8);">{{ $case['para'] }}</p>
            <a href="{{ url($case['link']) }}">
              <span>Read More</span>
              <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
<!-- end case section -->

<!-- client section -->
<section class="client_section">
  <div class="container">
    <div class="heading_container heading_center">
      <h1>Our Client Support</h1>
    </div>
  </div>
  <div id="customCarousel2" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="container">
          <div class="row">
            <div class="col-md-10 mx-auto">
              <div class="box">
                <div class="img-box">
                  <img src="{{ asset('frontend/images/guest1.png') }}" alt="">
                </div>
                <div class="detail-box">
                  <div class="client_info">
                    <div class="client_name">
                      <h2>Our Client Support</h2>
                    </div>
                    {{-- <i class="fa fa-quote-left" aria-hidden="true"></i> --}}
                  </div>
                  <a href="client_operation">
                    <span style="color: white;">Read More</span>
                    <i class="fa fa-long-arrow-right" aria-hidden="true" style="color: white;"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- /.carousel-item -->
    </div>
  </div>
</section>
<!-- end client section -->


@endsection
