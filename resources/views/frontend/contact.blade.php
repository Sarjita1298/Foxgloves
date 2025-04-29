@extends('frontend.master')

@section('content')

<section class="staffing_section my-5" style="background-image: url('{{ asset('frontend/images/railways.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; height: 500px; padding: 50px 20px; color: white;">
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
<section class="turnkey_section my-5" style="background-image: url('{{ asset('frontend/images/railways1.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; height: 500px; padding: 50px 20px; color: white;">
  
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


<section class="contact_section layout_padding">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-5 col-lg-4 offset-md-1">
        <div class="form_container">
          <div class="heading_container">
            <h2>Request A Call back</h2>
          </div>
          <form action="{{ route('contact.store') }}" method="POST">
            @csrf
            <div>
              <input type="text" name="name" placeholder="Full Name" value="{{ old('name') }}" />
              @if($errors->has('name'))
                <div class="alert alert-danger">{{ $errors->first('name') }}</div>
              @endif
            </div>
            <div>
              <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" />
              @if($errors->has('email'))
                <div class="alert alert-danger">{{ $errors->first('email') }}</div>
              @endif
            </div>
            <div>
              <input type="text" name="phone" placeholder="Phone number" value="{{ old('phone') }}" />
              @if($errors->has('phone'))
                <div class="alert alert-danger">{{ $errors->first('phone') }}</div>
              @endif
            </div>
            <div>
              <textarea name="message" placeholder="Message" required style="width: 100%; height: 50px;">{{ old('message') }}</textarea>
              @if($errors->has('message'))
                <div class="alert alert-danger">{{ $errors->first('message') }}</div>
              @endif
            </div>
            <div class="d-flex">
              <button type="submit">SEND</button>
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-6 col-lg-7 px-0">
        <div class="map_container">
          <div class="map" style="width: 100%; height: 500px;">
            <div id="googleMap" style="width: 100%; height: 100%;"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


@endsection

@section('scripts')
<script>
  function initMap() {
    var mapOptions = {
      center: { lat: 28.644800, lng: 77.216721 },
      zoom: 10
    };
    new google.maps.Map(document.getElementById("googleMap"), mapOptions);
  }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=initMap"></script>
@endsection
