@extends('frontend.fontend-header')
@section('title','Hyper Apps')
@section('content')
<style>
  .breadcrumbs {

    background-image: url("{{URL('/')}}/public/uploads/images/apps3.jpg");
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
  .centerImage {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
  max-width: 100%;
  height: auto;
}
.why-us .container {
    box-shadow: 0 5px 25px 0 rgba(214, 215, 216, 0.6);
 background-color: #195273;
}
@media screen and (max-width: 600px) {
  .breadcrumbs h2 {
            font-size: 25px !important;
            font-weight: 700 !important;
        }
        .breadcrumbs{
          height: 109px !important;
          padding: 0 0 !important;
        }
}
</style>
<main id="main" style="background-color: #195273;">

  <!-- ======= Our Services Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2 class="centered">Hyper Apps</h2>
        <ol>
        </ol>
      </div>

    </div>
  </section><!-- End About Us Section -->

  <!-- ======= Why Us Section ======= -->
  @foreach ($apps as $ap)
  @endforeach
  <!-- ======= Service Details Section ======= -->
  <section class="service-details">
    <div class="container">
      <div class="row">
        <div class="col-md-12 d-flex align-items-stretch" data-aos="fade-up">
            <a  href="{{$ap->android_url}}"><img class="centerImage responsive" src="{{URL('/')}}/public/uploads/images/android-app1.png" alt="" style="padding:35px 5px ;"></a>
        </div>
      </div>

    </div>
  </section><!-- End Service Details Section -->
  <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200" style="background-color: #195273;">
    <div class="container" style="border-top: 3px solid #BE290B;">
      @foreach ($apps as $ap)
      <div class="row">
        <div class="col-lg-6 video-box">
          <img src="{{URL('/')}}/public/uploads/images/why-us.jpg" class="img-fluid" alt="" style="width: 100%; height:350px">
          <a href="{{$ap->video_url}}" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
        </div>

        <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
 
              <div class="card-body">
                <h5 class="card-title"><a href="#">Description Text</a></h5>
                <p class="card-text colorWhite" style="text-align: justify; line-height: 30px;">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat 
                Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                </p>
               
              </div>
         
          </div>
      </div>

      @endforeach

    </div>
  </section><!-- End Why Us Section -->
</main><!-- End #main -->

@endsection