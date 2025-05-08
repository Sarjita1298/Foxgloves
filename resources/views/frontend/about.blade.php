@extends('frontend.master')

@section('content')


  <section class="about_section layout_padding layout_margin" >
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
            <img src="{{ asset('frontend/images/about-img.png') }}" alt="Team working on facility management project">
          </div>
        </div>

      </div>
    </div>
  </section>

 
<section class="about-section py-5 my-5 position-relative" style="background-image: url('{{ asset('frontend/images/hotel2.png') }}'); 
 background-size: cover; background-position: center; margin-bottom: 80px; border-radius: 210px 0 210px 0;">
    <div class="overlay" style=" border-radius: 210px 0 210px 0; position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-color: rgba(0, 0, 0, 0.6); z-index: 4;"></div>
  
    <div class="container position-relative" style="z-index: 4;">
      <div class="row align-items-center">
        
        <div class="col-md-6 text-start mb-4 mb-md-0">
          <h5 id="headingText" class="fw-bold">
           OUR MISSION
          </h5>
        </div>
  
        <div class="col-md-6">
          <p id="paraText" class="fs-5">
            To deliver <strong>consistent</strong>, quality-driven <strong>facility</strong> and workforce <strong>management solutions</strong>,
            while building long-term, <strong>transparent</strong>, and <strong>ethical partnerships</strong> with our clients.
            We aim to be the benchmark for <strong>Total Facility Management</strong> across India.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="industries-section" style="background: url('{{ asset('frontend/images/guest.png') }}') no-repeat center center; background-size: cover; over-flow:hidden; border-radius: 210px 0 210px 0; ">
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

<!-- BOOTSTRAP SLIDER START -->
<section class="slider_section my-5" style="border-radius: clamp(80px, 15vw, 270px) 0 clamp(80px, 15vw, 270px) 0;">
  <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0, 0, 0, 0.5); backdrop-filter: blur(2px); z-index: 4; pointer-events: none; border-radius: clamp(80px, 15vw, 270px) 0 clamp(80px, 15vw, 270px) 0;" ></div>
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1500">
    <ol class="carousel-indicators">
      <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
      <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
      <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
      <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('frontend/images/guesthouse.png') }}" class="d-block w-100" alt="Guest House">
        <div class="carousel-caption d-block d-md-flex flex-column justify-content-center align-items-center top-50 start-50 translate-middle text-center">
          <h2 > Guest House Services</h2>
      <p style="color:#ffffff">
        We provide well-maintained guest house management services that offer comfort, security, and a homely environment for your guests and staff. From regular housekeeping to round-the-clock support, we ensure a hassle-free and welcoming stay. Our trained staff takes care of cleanliness, linen, food arrangements, and visitor protocols, making your guest house operate like a professional hospitality unit.
      </p>
       {{-- <a href="service" class="btn1">Learn More</a> --}}
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('frontend/images/guesthouse1.png') }}" class="d-block w-100" alt="Catering">
        <div class="carousel-caption d-block d-md-flex flex-column justify-content-center align-items-center top-50 start-50 translate-middle text-center">
          <h2> Catering Solutions</h2>
          <p style="color:#ffffff">
            Our catering services are tailored to meet diverse culinary preferences with a focus on hygiene, quality, and timely delivery. Whether it's for corporate events, daily office meals, or special occasions, our team delivers delicious, nutritious, and well-balanced meals. We use fresh ingredients, maintain kitchen safety standards, and offer flexible menu planning for all dietary needs.
          </p>
          {{-- <a href="service" class="btn1">Explore</a> --}}
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('frontend/images/guesthouse2.png') }}" class="d-block w-100" alt="Canteen">
        <div class="carousel-caption d-block d-md-flex flex-column justify-content-center align-items-center top-50 start-50 translate-middle text-center">
          <h2> Canteen Management</h2>
          <p style="color:#ffffff">
            We offer end-to-end canteen management solutions for corporate offices, factories, educational institutions, and more. From staff deployment to kitchen operations and inventory control, we handle everything. Our goal is to deliver healthy meals in a clean and efficient environment while ensuring cost control and satisfaction for all stakeholders.
          </p>
          {{-- <a href="service" class="btn1">Contact Us</a> --}}
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('frontend/images/guesthouse2.png') }}" class="d-block w-100" alt="Canteen">
        <div class="carousel-caption d-block d-md-flex flex-column justify-content-center align-items-center top-50 start-50 translate-middle text-center">
          <h2>Hospitality Excellence</h2>
          <p style="color:#ffffff">
            With a deep understanding of the hospitality sector, we deliver high-standard services that make your premises guest-ready at all times. Our hospitality excellence program includes trained personnel, personalized guest handling, housekeeping, and concierge services that enhance your organization's reputation and ensure lasting impressions.
          </p>
          {{-- <a href="service" class="btn1">Contact Us</a> --}}
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </a>
  </div>
</section>
<!-- BOOTSTRAP SLIDER END -->


<section class="housekeeping-section" style="position: relative; margin-bottom: 80px; height: 550px; border-radius: clamp(80px, 15vw, 270px) 0 clamp(80px, 15vw, 270px) 0; overflow: hidden;">
  <!-- Background Image with Blur -->
  <div style="background: url('{{ asset('frontend/images/housekeeping1.png') }}') no-repeat center center;background-size: cover;filter: blur(5px) brightness(50%);position: absolute;top: 0; left: 0; right: 0; bottom: 0;z-index: 4; "></div>

  <!-- Overlay Content -->
  <div class="housekeeping-box" style="position: relative; z-index: 4; color: white; padding: 50px;">
    <h2>Specialized Housekeeping Services</h2>
    <p>Our mechanized housekeeping solutions cater to high-traffic and high-standard environments, including:</p>
    <ul class="housekeeping-list">
      <li>Railway Platforms, Waiting Areas & Offices</li>
      <li>Hospitals (ICU, OT, General Ward Sanitation)</li>
      <li>Shopping Malls (Food Courts, Toilets, Escalator Areas, Parking)</li>
      <li>Educational Campuses</li>
      <li>Office Complexes</li>
    </ul>
    <p>Using state-of-the-art machinery, certified chemicals, and highly trained personnel, we ensure superior hygiene and safety.</p>
  </div>
</section>

@endsection
  <!-- end about section -->
