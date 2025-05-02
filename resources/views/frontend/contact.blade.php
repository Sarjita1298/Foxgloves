@extends('frontend.master')

@section('content')

<!-- STAFFING SECTION -->
<section class="turnkey_section my-5" style="background: url('{{ asset('frontend/images/railways1.png') }}') center center / cover no-repeat; height: 700px; padding: 50px 20px; color: white; position: relative;border-radius: 250px 0 250px 0;">
  <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;backdrop-filter: blur(2px); background-color: rgba(0, 0, 0, 0.5); z-index: 1;border-radius: 250px 0 250px 0;">
  </div>

  <div class="container text-center p-4" style="position: relative; z-index: 1;">
    <div class="p-4 rounded bg-white bg-opacity-75 shadow-lg" style="backdrop-filter: blur(8px);">
      <h1 class="text-center text-dark">Well-Trained Staffing Solutions</h1>
      <p class="text-center text-dark">Providing skilled professionals for your project needs.</p>
      
      <div class="row justify-content-center">
        <div class="col-md-4">
          <div class="card text-dark bg-white shadow-sm">
            <img src="{{ asset('frontend/images/newone.png') }}" class="card-img-top" alt="Staffing Solution 1">
            <div class="card-body">
              <h5 class="card-title">Expert Staffing</h5>
              <p class="card-text">We connect you with industry experts to ensure project success.</p>
            </div>
          </div>
        </div>
        
        <div class="col-md-4">
          <div class="card text-dark bg-white shadow-sm">
            <img src="{{ asset('frontend/images/newone1.png') }}" class="card-img-top" alt="Staffing Solution 2">
            <div class="card-body">
              <h5 class="card-title">Tailored Solutions</h5>
              <p class="card-text">Customized staffing solutions to meet your specific project requirements.</p>
            </div>
          </div>
        </div>
        
        <div class="col-md-4">
          <div class="card text-dark bg-white shadow-sm">
            <img src="{{ asset('frontend/images/newone5.png') }}" class="card-img-top" alt="Staffing Solution 3">
            <div class="card-body">
              <h5 class="card-title">Ongoing Support</h5>
              <p class="card-text">Continuous support and training for our staff to ensure quality performance.</p>
            </div>
          </div>
        </div>    
      </div>
    </div>
  </div>
  
</section>

<!-- TURNKEY SECTION -->
<section class="turnkey_section my-5" style="background: url('{{ asset('frontend/images/railways1.png') }}') center center / cover no-repeat; height: 700px; padding: 50px 20px; color: white; position: relative;border-radius: 250px 0 250px 0;">
  <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; backdrop-filter: blur(2px); background-color: rgba(0, 0, 0, 0.5); z-index: 1;border-radius: 250px 0 250px 0;">
  </div>

  <!-- Foreground content -->
  <div class="container text-center p-4" style="position: relative; z-index: 1;">
    <div class="p-4 rounded bg-white bg-opacity-75">
      <h1 class="text-center text-dark">Turnkey Project Management</h1>
      <p class="text-center text-dark">Comprehensive management from start to finish.</p>
      <div class="row justify-content-center">
        <div class="col-md-4">
          <div class="card text-dark bg-white">
            <img src="{{ asset('frontend/images/newone3.png') }}" class="card-img-top" alt="Turnkey Project 1">
            <div class="card-body">
              <h5 class="card-title">Full-Service Management</h5>
              <p class="card-text">We handle every aspect of your project for seamless execution.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card text-dark bg-white">
            <img src="{{ asset('frontend/images/newone4.png') }}" class="card-img-top" alt="Turnkey Project 2">
            <div class="card-body">
              <h5 class="card-title">Quality Assurance</h5>
              <p class="card-text">Ensuring high standards and quality control throughout the project lifecycle.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card text-dark bg-white">
            <img src="{{ asset('frontend/images/newone9.png') }}" class="card-img-top" alt="Turnkey Project 3">
            <div class="card-body">
              <h5 class="card-title">Timely Delivery</h5>
              <p class="card-text">Commitment to delivering projects on time and within budget.</p>
            </div>
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
    <div class="map-gap" style="width: 95%; height: 500px;">
      <iframe
        src="https://www.google.com/maps?q=6303,+Block-06,+Soumya+Parklands,+Awadhpuri,+Bhopal+(M.P.)+–+462022&output=embed"
        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
  </div>
</div>

@endsection