@extends('frontend.fontend-header')

@section('content')

<main id="main">

<!-- ======= Our Services Section ======= -->
<section class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">

    </div>

  </div>
</section><!-- End Our Services Section -->

<!-- ======= Why Us Section ======= -->
<section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
  <div class="container">

<div class="row">
      <div class="col-lg-6 video-box">
        <h3>Your Order has been placed </h3>
        <p> Your Order Number is {{Session::get('order_id')}} and total payable amount is $ {{Session::get('grand_total')}}</p>
        <p> Please make payment by clicking on below payment button </p>

      </div>

    </div>

   
  </div>
</section><!-- End Why Us Section -->


</main><!-- End #main -->

@endsection

<?php

?>