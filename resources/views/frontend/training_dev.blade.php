@extends('frontend.master')

@section('content')
<section class="about-section py-5 position-relative" style="background-image: url('{{ asset('frontend/images/training_&_development.png') }}'); 
background-size: cover; background-position: center; margin-bottom: 80px;">
    <div class="overlay" style="position:absolute;my-5; top: 0; left: 0; right: 0; bottom: 0; background-color: rgba(0, 0, 0, 0.6); z-index: 1;"></div>

    <div class="container position-relative" style="z-index: 2;">
        <div class="row align-items-center">

            <div class="col-md-6 text-start mb-4 mb-md-0">
                <h1 id="headingText" class="fw-bold">
                    TRAINING & DEVELOPMENT
                </h1>
            </div>

            <div class="col-md-6">
                <p id="paraText" class="fs-5">
                    Our training infrastructure equips personnel with both general and role-specific expertise through:
                    <br><br>
                    • Induction Programs<br>
                    • Refresher Courses<br>
                    • Emergency Handling (Fire, Bomb Threats, Evacuation)<br>
                    • Unarmed Combat Training<br>
                    • First Aid & Sanitation<br>
                    • Chauffeur Driving Skills for VIP Movements
                </p>
            </div>
        </div>
    </div>
</section>
@endsection

<style>
    #headingText {
        font-family: 'Montserrat' !important;
        font-size: 4rem !important;
        font-weight: 900;
        color: #eeeaea !important;
        text-transform: uppercase;
        text-shadow: 4px 4px 10px rgba(0, 0, 0, 0.7);
        letter-spacing: 3px;
        line-height: 1.2;
    }

    #paraText {
        color: #dbe6db !important;
        background-color: rgba(0, 0, 0, 0.3);
        padding: 20px;
        border-radius: 10px;
        font-family: 'Arial', sans-serif;
        line-height: 1.8;
    }
</style>
