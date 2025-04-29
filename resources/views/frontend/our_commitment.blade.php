@extends('frontend.master')

@section('content')
<section class="commitment-section py-5 my-5 bg-light" style="background-image: url('{{ asset('frontend/images/commitment.png') }}');
background-size: cover; background-position: center; background-repeat: no-repeat; height: 600px; padding: 40px 20px; color: white; border-radius: 250px 0 250px 0;">
 <div class="container h-140">
   <div class="row h-100 align-items-center">
     
     <!-- IMAGE COLUMN -->
     <div class="col-md-6 mb-4 mb-md-0">
       <div class="img-wrapper">
         <img src="{{ asset('frontend/images/commitment-quality.png') }}" alt="Commitment to Quality" class="img-fluid rounded shadow">
       </div>
     </div>

     <!-- TEXT COLUMN -->
     <div class="col-md-6 d-flex align-items-center h-100">
       <div class="text-wrapper px-3">
         <h2 class="fw-bold mb-3 text-primary">Our Commitment to Quality</h2>
         <p class="text-dark fs-5" style="line-height: 1.7;">
           At FoxGloves Manifold Services & Securities Pvt. Ltd., quality is not just a goal — it’s our foundation. We strictly adhere to 
           <strong>ISO 9001:2015 certified protocols</strong>. Each project is subjected to <strong>internal audits, client feedback loops, and surprise quality inspections</strong> to ensure continuous improvement and adherence to SLAs.
         </p>
         <p class="text-dark fs-5">
           Every project undergoes structured internal audits, robust client feedback mechanisms, and unannounced quality inspections to ensure continual improvement. This disciplined approach helps us exceed expectations while maintaining adherence to SLAs (Service Level Agreements).
         </p>
       </div>
     </div>

   </div>
 </div>
</section>
@endsection
