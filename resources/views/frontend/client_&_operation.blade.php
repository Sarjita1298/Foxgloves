@extends('frontend.master')

@section('title', 'State Information')

@section('content')
<div class="container">
    <h1 class="text-center mt-4 mb-4">States of India</h1>

    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('frontend/images/india_map.svg') }}" alt="India Map" style="width: 100%; max-width: 600px; height: auto;" />
        </div>

        <div class="col-md-6 d-flex justify-content-center align-items-center">
            <div class="text-center">
                <h4>Our Clients & Operational Reach:</h4>
                <ul class="list-group">
                    @foreach ($states as $key => $state)
                    <li class="list-group-item">
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



@endsection
