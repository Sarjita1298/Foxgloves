@extends('frontend.master')

@section('title', 'State Information')

@section('content')
<section class="client&operational-reach" style="background: #ffff; backdrop-filter: blur(8px); color: white; padding: 20px;">
    <div class="container">
    <h1 class="text-center mt-4 mb-4 text-dark">Our Client Support</h1>

    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('frontend/images/india_map.svg') }}" alt="India Map" style="width: 100%; max-width: 600px; height: auto;" />
        </div>

        <div class="col-md-6 d-flex justify-content-center align-items-center">
            <div class="text-center">
                <h4 class="text-center mt-4 mb-4 text-dark">Our Clients & Operational Reach:</h4>
                <ul class="list-group ">
                    @foreach ($states as $key => $state)
                    <li class="list-group-item bg-mute">
                        <a href="{{ route('contact', $key) }}">
                            {{ $state }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
</section>



@endsection
