@extends('frontend.fontend-header')
@section('title', 'Single Post')
@section('content')
<style>
  .breadcrumbs {

    background-image: url("{{URL('/')}}/public/uploads/images/links.jpg");
    height: 165px;
    background-position: center;
    color: white;
  }

</style>
<main id="main" style="background-color: #195273;">

  <!-- ======= Blog Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2 class="centered">Hyper Links</h2>
        <ol>
        </ol>
      </div>

    </div>
  </section><!-- End About Us Section -->

  <!-- ======= Blog Section ======= -->
  <section class="blog" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
    <div class="container">

      <div class="row">

        <div class="col-lg-8 entries">

          @foreach ($posts as $pos)


          <article class="entry entry-single">
            <div class="entry-img">
              <img src="{{URL('/')}}/public/uploads/posts/{{$pos['post_image']}}" alt="{{$pos->post_title}}" class="img-fluid" style="width: 100%; height:auto">
            </div>

            <h2 class="entry-title colorWhite" style="color:white">{{$pos->post_title}}</h2>

            <div class="entry-meta">
              <ul>
                <li class="d-flex align-items-center" style="color:white;"><i class="icofont-user"></i> {{ $pos->post_author_name}}</li>
                <li class="d-flex align-items-center" style="color:white;"><i class="icofont-wall-clock"></i><time datetime="2020-01-01">{{ $pos->created_at->format('d M, Y')}}</time></li>
                <li class="d-flex align-items-center" style="color:white;"><i class="icofont-comment"></i>{{$pos->categories->category_name}}</li>
              </ul>
            </div>

            <div class="entry-content colorWhite" style="text-align: justify; color:white">
              {!! fgets(fopen(Storage::path("\posts\\" . $pos->postDescription . '"'), 'r')); !!}



            </div>

          </article><!-- End blog entry -->



          <div class="blog-author clearfix">
            <img src="{{URL('/')}}/public/uploads/users/{{$pos->post_image}}" class="rounded-circle float-left" alt="">
            <h4 style="color:white">{{$pos->post_author_name}}</h4>
            <div class="social-links">
              <a href="{{$pos->post_author_twitter}}"><i class="icofont-twitter"></i></a>
              <a href="{{$pos->post_author_facebook}}"><i class="icofont-facebook"></i></a>
              <a href="{{$pos->post_author_instagram}}"><i class="icofont-instagram"></i></a>
            </div>
            <p class="colorWhite" style="color:white">{{$pos->post_author_details}}
            </p>
          </div><!-- End blog author bio -->
          @endforeach
        </div><!-- End blog entries list -->

        <div class="col-lg-4">

          <div class="sidebar">
            <h3 class="sidebar-title"></h3>
            <div class="sidebar-item recent-posts">
              @foreach ($recentposts as $recp)
              <div class="post-item clearfix">
                <img src="{{URL('/')}}/public/uploads/posts/{{$recp->post_image}}" alt="">
                <h4><a href="{{URL('/post-details/')}}/{{$recp->id}}/" style="color:white">{{ Str::limit($recp->post_title,25)}}</a></h4>
                <time datetime="2020-01-01" style="color:white">{{ $recp->created_at->format('d M, Y')}}</time>
              </div>
              @endforeach

            </div><!-- End sidebar recent posts-->



          </div><!-- End sidebar -->

        </div><!-- End blog sidebar -->

      </div><!-- End row -->

    </div><!-- End container -->

  </section><!-- End Blog Section -->

</main><!-- End #main -->