@extends('frontend.fontend-header')
@section('title', 'Add to cart')
@section('content')
<style> 
.colorWhite{
        color:white;
    }
</style>
<main id="main" style="background-color: #195273;">

  <!-- ======= Blog Section ======= -->

  <!-- ======= Blog Section ======= -->
  <section class="blog" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
    <div class="container">

      <div class="row">
        @foreach ($productDetails as $prod)
        <div class="col-lg-6 entries">

          <article class="entry entry-single">
            <div class="entry-img">
              <img src="{{URL('/')}}/public/uploads/products/{{$prod->product_image}}" alt="{{$prod->product_title}}" class="img-fluid" style="width: 500px; height:500px">
            </div>
          </article><!-- End blog entry -->
        </div><!-- End blog entries list -->

        <div class="col-lg-6">

          <div class="sidebar">
            <h5 class="colorWhite">{{$prod->product_title}}</h5>
            </hr>
            <p class="colorWhite"> Brand : @if($prod->brand_name)
            {{$prod->brand_name}}
            @else
            No Brand
            @endif
            <P>
              <hr>
              @if ($prod->current_price)
              <h3 class="colorWhite"> {{$prod->current_price}}</h3>
              <p class="colorWhite"> <del> $ {{$prod->regular_price}} </del></p>
              @else
              <h3 class="colorWhite"> {{$prod->regular_price}}</h3>
              @endif
            
            <del>
             
            </del>
            <p style="display:inline-block;" class="colorWhite">Quantity : </p>
            <form action="{{route('add_to_cart')}}" method="POST">
              @csrf
            <input type="number" name="quantity" value="1" class=""> &nbsp;
            <input type="hidden" name="product_id" value="{{$prod->id}}">
            <input type="hidden" name="product_price" value="@if ($prod->current_price)
              {{$prod->current_price}}
            @else
            {{$prod->regular_price}} @endif
            ">

            <button class="addToCart">Add to cart <i class='bx bxs-cart-add'></i> </button>
            </form>
           

            <h6 class="sidebar-title colorWhite" style="color:white">About this item </h6>
            <div class="entry-content colorWhite" style="text-align: justify;">
              <p> {{$prod->product_description}}
              </p>
            </div>
          </div><!-- End sidebar -->

        </div><!-- End blog sidebar -->

        @endforeach

      </div><!-- End row -->

    </div><!-- End container -->

  </section><!-- End Blog Section -->

</main><!-- End #main -->


@endsection