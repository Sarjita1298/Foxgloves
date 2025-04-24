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
       <ol class="carousel-indicators">
        <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
        <li data-target="#customCarousel1" data-slide-to="1"></li>
        <li data-target="#customCarousel1" data-slide-to="2"></li>
      </ol>
    </div>
  </section>
  
  <!-- slider section end -->

  

<!-- service section -->
<section class="service_section layout_padding">
  <div class="container">
    <div class="heading_container">
      <h2>Our Services</h2>
      <p>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div class="row">
      @foreach([
        ['icon' => 's1.png', 'title' => 'Mechanized...'],
        ['icon' => 's2.png', 'title' => 'Security Serv...'],
        ['icon' => 's3.png', 'title' => ' Catering & Can...'],
        ['icon' => 's4.png', 'title' => ' Guest House ...']
      ] as $service)
      <div class="col-md-6 col-lg-3">
        <div class="box">
          <div class="img-box">
            <img src="{{ asset('frontend/images/' . $service['icon']) }}" alt="">
          </div>
          <div class="detail-box">
            <h5>{{ $service['title'] }}</h5>
            {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</p> --}}
            <a href="">
              <span>Read More</span>
              <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <div class="btn-box">
      <a href="">View More</a>
    </div>
  </div>
</section>
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
          <a href="">Read More</a>
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
          'title' => 'Our Commitment to Quality',
          'para' => 'With ISO 9001:2015 standards at our core, we ensure every project meets rigorous quality benchmarks through audits and feedback.',
          'link' => 'our_commitment'
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
      <h2>GUEST SERVICES</h2>
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
                      <h5>Guest & Catering</h5>
                    </div>
                    {{-- <i class="fa fa-quote-left" aria-hidden="true"></i> --}}
                  </div>
                  <a href="guest-catering-canteen">
                    <span>Read More</span>
                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
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
