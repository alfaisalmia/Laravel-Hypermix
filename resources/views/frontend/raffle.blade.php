@extends('frontend.fontend-header')
@section('title', 'Raffle Page')
@section('content')
<style>
  .breadcrumbs {

    background-image: url("{{URL('/')}}/public/uploads/images/raffle.jpg");
    height: 165px;
    background-position: center;
    color: white;
  }

  .breadcrumbs h2 {
    font-size: 49px;
    font-weight: 700;
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

  .circle {
    border-radius: 50%;
    width: 80px;
    height: 80px;
    padding: 20px;
    background: #fff;
    border: 4px solid #000;
    color: #000;
    text-align: center;
    font: 32px Arial, sans-serif;
    margin-left: 87px;
  }

  .accountSection {
    border-bottom: 4px solid #002d2d;
    border-radius: 106px;
  }

  section {
    padding: 30px 0;
  }

  .img-fluid {
    max-width: 100%;
    height: 100px;
  }

  .bo {
    border: 1px solid #0dcaf0;
    padding: 6px;
    border-radius: 7px;
    color: #0dcaf0;
  }
  #main{
    background-color: #195273;
  }
</style>
<main id="main">

  <!-- ======= About Us Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2 class="centered">Hyper Raffle</h2>
        <ol>
        </ol>
      </div>

    </div>
  </section><!-- End About Us Section -->


  <!-- ======= Facts Section ======= -->
  <section class="facts section-bg accountSection" data-aos="fade-up">
    <div class="container">

      <div class="row counters">

        <div class="col-lg-3 col-6 text-center">
          <div class="circle">1</div>
          <h4 style="color: #5e2320"> Create an Account</h4>
        </div>

        <div class="col-lg-3 col-6 text-center">
          <div class="circle">2</div>
          <h4 style="color: #5e2320"> Chosse Raffle </h4>
        </div>

        <div class="col-lg-3 col-6 text-center">
          <div class="circle">3</div>
          <h4 style="color: #5e2320">Pick Raffle</h4>
        </div>

        <div class="col-lg-3 col-6 text-center">
          <div class="circle">4</div>
          <h4 style="color: #5e2320"> Win Raffle Draw</h4>
        </div>

      </div>

    </div>
  </section><!-- End Facts Section -->


  <section>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <img src="{{URL('/')}}/public/uploads/images/icon.png" class="img-fluid" alt="">
          <h1 class="titleR text-center" style="color:white">Raffle Calendar</h1>
        </div>
        <div class="col-sm-12">
          <table class="table table-hover table-dark ">
            <thead>
              <tr style="background-color:#0dcaf0">
                <th scope="col">Title</th>
                <th scope="col">Start Date</th>
                <th scope="col">End Date</th>
                <th scope="col">Price</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php

              use App\Models\RaffleTicket;

              $totalCart = 0;
              $raffle = RaffleTicket::select('*')->get();
              ?>
              @foreach ($raffle as $rf)
              <tr>
                <th>{{$rf->title}}</th>
                <td>{{$rf->start_date}}</td>
                <td>{{$rf->end_date}}</td>
                <td>{{$rf->price}} USD</td>
                <td>{{$rf->status}}</td>
                <td> <a href="{{URL('buyticket/'.$rf->id)}}" class="bo">Buy Ticket</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>

</main><!-- End #main -->
@endsection