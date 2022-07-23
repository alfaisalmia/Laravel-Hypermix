@extends('frontend.fontend-header')

@section('content')
<style>

    .breadcrumbs {

        background-image: url("{{URL('/')}}/public/uploads/images/links.jpg");
        height: 165px;
        background-position: center;
        color: white;
    }

    .breadcrumbs h2 {
        font-size: 62px !important;
        font-weight: 700 !important;
    }

    .container {
        position: relative;
        text-align: center;
        color: white;
    }

    .centered {
        position: absolute;
        top: 60px;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .blog .entry .entry-content .read-more a:hover {
        background-color: #5e2320 !important;
    }

    .blog .entry .entry-content .read-more a {

        border-left: 5px solid #BE290B !important;
        background: #002d2d !important;
    }
    .colorWhite{
        color:white;
    }
  </style>
<main id="main" style="background-color: #195273;">

<!-- ======= Contact Section ======= -->
<section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2 class="centered">Hyper Contact</h2>
        <ol>
        </ol>
      </div>

    </div>
  </section><!-- End About Us Section -->

<!-- ======= Contact Section ======= -->
<section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
  <div class="container">

    <div class="row">

      <div class="col-lg-6">
@foreach ($contactInfo as $con)
<div class="row">
          <div class="col-md-12">
            <div class="info-box">
              <i class="bx bx-map"></i>
              <h3 class="colorWhite" style="color:white">Our Address</h3>
              <p class="colorWhite">{{$con->address_line1}} {{$con->address_line2}} {{$con->address_line3}}</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info-box">
              <i class="bx bx-envelope"></i>
              <h3 style="color:white">Email Us</h3>
              <p class="colorWhite">{{ $con->email}}</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info-box">
              <i class="bx bx-phone-call"></i>
              <h3 style="color: white;">Call Us</h3>
              <p class="colorWhite">{{$con->phone}}</p>
            </div>
          </div>
        </div>
@endforeach
 

      </div>

      <div class="col-lg-6">
        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="form-row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validate"></div>
            </div>
            <div class="col-md-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
            <div class="validate"></div>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
         
        </form>
      </div>


  </div>
</section><!-- End Contact Section -->


</main><!-- End #main -->



@endsection