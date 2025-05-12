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
        <div class="col-md-4 col-lg-10">
          <div class="box margin-left:5px">
            <div class="img-box">
              <img src="frontend/images/newone.png" alt="Facility Management Service">
            </div>
            <div class="detail-box">
              <h5 class="text-dark fs-7">
                Facility Management...
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
        <div class="col-md-4 col-lg-10">
          <div class="box">
            <div class="img-box">
              <img src="frontend/images/newone1.png" alt="Mechanized Housekeeping for Industries">
            </div>
            <div class="detail-box">
              <h5 class="text-dark fs-7">
                Mechanized Housekeeping...            
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
        <div class="col-md-4 col-lg-10">
          <div class="box">
            <div class="img-box">
              <img src="frontend/images/newone2.png" alt="Security Services for Commercial Premises">
            </div>
            <div class="detail-box">
              <h5 class="text-dark fs-7">
                Security Services...
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
        <div class="col-md-4 col-lg-10">
          <div class="box">
            <div class="img-box">
              <img src="frontend/images/newone3.png" alt="Catering and Canteen Services">
            </div>
            <div class="detail-box">
              <h5 class="text-dark fs-7">
                Catering & Canteen ...
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
        <div class="col-md-4 col-lg-10">
          <div class="box">
            <div class="img-box">
              <img src="frontend/images/newone4.png" alt="Guest House Management">
            </div>
            <div class="detail-box">
              <h5 class="text-dark fs-7">
                Guest House Manage...
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
        <div class="col-md-4 col-lg-10">
          <div class="box">
            <div class="img-box">
              <img src="frontend/images/newone5.png" alt="Event Management Security">
            </div>
            <div class="detail-box">
              <h5 class="text-dark fs-7">
                Event Management... 
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
        <div class="col-md-4 col-lg-10">
          <div class="box">
            <div class="img-box">
              <img src="frontend/images/newone6.png"  alt="Courier and Escort Services">
            </div>
            <div class="detail-box">
              <h5 class="text-dark fs-7">
                 Courier & Escort ...       
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
        <div class="col-md-4 col-lg-10">
          <div class="box">
            <div class="img-box">
              <img src="frontend/images/newone7.png" alt="Security Gadget Installation">
            </div>
            <div class="detail-box">
              <h5 class="text-dark fs-7">
                Supply Monitoring
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
        <div class="col-md-4 col-lg-10">
          <div class="box">
            <div class="img-box">
              <img src="frontend/images/newone8.png" alt="Employment Verification Services">
            </div>
            <div class="detail-box">
              <h5 class="text-dark fs-7">
                Pre-employment 
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
        <div class="col-md-4 col-lg-10">
          <div class="box">
            <div class="img-box">
              <img src="frontend/images/newone9.png" alt="Temporary Staffing Solutions">
            </div>
            <div class="detail-box">
              <h5 class="text-dark fs-7">
                Temporary Staffing ...
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
        <div class="col-md-4 col-lg-10">
          <div class="box">
            <div class="img-box">
              <img src="frontend/images/newone10.png" alt="Permanent Staffing Solutions">
            </div>
            <div class="detail-box">
              <h5 class="text-dark fs-7">
                Permanent Staffing ...
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
        <div class="col-md-4 col-lg-10">
          <div class="box">
            <div class="img-box">
              <img src="frontend/images/newone11.png" alt="Turnkey Project Execution">
            </div>
            <div class="detail-box">
              <h5 class="text-dark fs-7">
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
        <div class="col-md-4 col-lg-10">
          <div class="box">
            <div class="img-box">
              <img src="frontend/images/newone12.png" alt="Survey Services and Compliance">
            </div>
            <div class="detail-box">
              <h5 class="text-dark fs-7">
                Survey Services...     
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
  </div>
  </section>
  <!-- end service section -->

 
  



<!-- end service section -->

<!-- about section -->
<section class="about_section layout_padding" >
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
          'image' => 'stafff.png',
          'title' => 'Staffing & Turnkey Projects',
          'para' => 'We offer reliable staffing solutions across various domains and manage end-to-end turnkey projects with precision—from planning to execution.',
          'link' => 'about'
        ],
        [
          'image' => 'guesttt.png',
          'title' => 'Guest House, Catering & Canteen Management',
          'para' => 'Our professional catering and canteen services are designed to ensure hygienic, nutritious,and timely meal delivery for employees and guests.',
          'link' => 'contact'
        ]
      ]
       as $case)
      <div class="col-md-6">
        <div class="box">
          <div class="img-box">
            <img src="{{ asset('frontend/images/' . $case['image']) }}" alt="">
          </div>
          <div class="detail-box">
            <div class="center-wrapper">
            <h5>{{ $case['title'] }}</h5>
            <p style="color: #0b0a0a;">{{ $case['para'] }}</p>
            <a href="{{ url($case['link']) }}">
              <span style="color: #0b0a0a;">Read More</span>
              <i class="fa fa-long-arrow-right" aria-hidden="true" style="color: #0b0a0a"></i>
            </a>
          </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
<!-- end case section -->
@endsection

@section('scripts')
<script>
  $(document).ready(function(){
    $('.service-carousel').owlCarousel({
  loop: true,
  margin: 30,
  nav: true,
  dots: true,
  autoplay: true,
  autoplayTimeout: 3000,
  responsive: {
    0: { items: 1 },
    768: { items: 2 },
    992: { items: 3 }
  }
});
  });
</script>
@endsection
