@extends('frontend.fontend-header')
@section('title', 'Products')
@section('content')
<style>
    .member-img img {
        border: 10px solid whitesmoke;
        width: 100%;
        height: 195px
    }

    #eshop-button {
        border-radius: 28px;
    }

    a h6 {
        padding: 6px;
    }

    .priceLine {
        padding: 3px 7px;
    }

    .blog .sidebar {
        padding: 26px;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
    }

    .btn-success {
        background-color: #0d2735;
        border: none;
    }

    .btn-info {
        float: right;
        background-color: #be290b;
        border: none;
    }

    .team {
        background-color: #195273;
    }

    .hovering-issue:hover {
        transform: scale(1.03);
        object-fit: cover;
    }

    /* Three image containers (use 25% for four, and 50% for two, etc) */
    .column {
        float: left;
        width: 25%;
        padding: 5px;
        padding: 18px;
        box-shadow: 0 1px 7px rgba(0, 0, 0, 0.1);
        padding-bottom: 2px;
    }

    /* Clear floats after image containers */
    .row::after {
        content: "";
        clear: both;
        display: table;
    }

    .breadcrumbs {
        background-color: #002d2d;
        color: white;
    }

    .vertical-menu {
        width: 200px;
        /* Set a width if you like */
    }

    .vertical-menu a {
        /* background-color: #eee;  */
        /* Grey background color */
        color: white;
        /* Black text color */
        display: block;
        /* Make the links appear below each other */
        padding: 5px;
        /* Add some padding */
        text-decoration: none;
        /* Remove underline from links */
        font-size: 14px;
    }

    .vertical-menu a:hover {
        background-color: #ccc;
        /* Dark grey background on mouse-over */
    }

    .vertical-menu a.active {
        background-color: #04AA6D;
        /* Add a green color to the "active/current" link */
        color: white;
    }

    ul {
        list-style: none;
    }

    section {
        padding: 10px 0;
    }
    .active{
        background-color: #5e2320;
border-left: 1px solid aliceblue;
    }
    @media screen and (max-width: 600px) {
  .column {
    float: left;
    width: 50%;
    padding: 5px;
    padding: 18px;
    box-shadow: 0 1px 7px rgba(0, 0, 0, 0.1);
    padding-bottom: 2px;
  }
}
</style>

<main id="main">

    <!-- ======= Blog Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Hyper E-Shop </h2>

                <ol>
                    <li>Our Online E-shop</li>
                </ol>
            </div>

        </div>
    </section><!-- End Blog Section -->

    <!-- ======= Blog Section ======= -->
    <section class="team" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-2">
                    <div class="sidebar">
                        <?php

                        use App\Models\ProductCategory;

                        $categories = ProductCategory::all();

                        ?>

                        <div class="sidebar-item categories vertical-menu">
                            <ul>
                                @foreach ($categories as $cat)
                                <li class="no-bullets {{ (request()->segment(2) == $cat->slug) ? 'active' : '' }}"><a href="{{URL('/category/'.$cat->slug)}}" style="color:white">{{$cat->productCategoryName}}</a></li>
                                @endforeach
                            </ul>
                        </div><!-- End sidebar categories-->
                    </div><!-- End sidebar -->
                </div><!-- End blog sidebar -->

                <div class="col-lg-10 entries">
                    <div class="row">
                        <div class="col-sm-12">
                        <?php  
                        foreach($productsAll as $pro){
                            $cat_name = $pro->productCategoryName;
                        }
                        ?>
                        @if (count($productsAll) != 0)
                        <span style="color:white">{{$cat_name}} </span>
                        @else
                        <span style="color:white">There is no product in this category</span>
                        @endif
                       
                       
                        </div>

                        @foreach ($productsAll as $pro)
                        <div class="column">
                            <img src="{{URL('/')}}/public/uploads/products/{{$pro->product_image}}" alt="Snow" style="width:100%; height:175px">
                            <a href="{{route('product-details', $pro->id)}}">
                                <p style="color:white">{{$pro->product_title}}</p>
                            </a>
                            @if ($pro->regular_price)
                            <div class="priceLine">

                                <span style="color:red; font-size: 18px; display: inline;">
                                    <a href="{{route('product-details', $pro->id)}}"><button type="button" class="btn btn-success" id="eshop-button"> Details </button></a>

                                    <button type="button" class="btn btn-info" style="float: right;" id="eshop-button"> $ {{$pro->current_price}}</button>
                                </span>

                                <span style="color:white; font-size: 14px; display:inline; padding-left:30px;"> <del>$ {{$pro->regular_price}} </del></span>
                                @else

                                <span style="color:black; font-size: 14px; display:inline; padding-left:30px;"> <del>$ {{$pro->regular_price}} </del></span>
                                @endif
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="blog-pagination">
                            <ul class="justify-content-center">
                                {{ $productsAll->links('pagination::bootstrap-4') }}
                            </ul>
                        </div>



                    </div>

                </div>


            </div>



























        </div><!-- End .row -->



    </section><!-- End Blog Section -->

</main><!-- End #main -->



@endsection