@extends('frontend.master')

@section('content')
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
