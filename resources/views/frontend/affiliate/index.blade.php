@extends('frontend.fontend-header')
@section('title', 'Blog Page')
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

.colorWhite {
color: white;
}

@media screen and (max-width: 600px) {
.responimg {
    width: 100%;
    /* The width is 100%, when the viewport is 800px or smaller */
    height: 140px !important;
}

.breadcrumbs h2 {
    font-size: 25px !important;
    font-weight: 700 !important;
}

.demolink{
    float: left;
    padding-left: 7px;
    padding-bottom: 5px;
    left: 0;
    margin-left: -20px;
}
.read-more a{
    padding:5px 5px !important;
    font-size: 12px !important;
}
.blog .entry .entry-content p{
    text-align: left !important;
    font-size: 13px !important;
    margin-left: -20px !important;
    line-height: 21px !important;
}
.colorWhite{
    margin-left: -24px !important;
    font-size: 13px !important;
}
.blog .entry{
    margin-bottom: 25px !important;
}
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
    <section class="blog" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500" style="background-color: #195273;padding-top: 53px;">
        <div class="container">

            <div class="row">
                @foreach ($posts as $ps)
                <div class="col-sm-6 col-6 entries">

                    <article class="entry">

                        <div class="entry-img">
                            <img src="{{URL('/')}}/public/uploads/posts/{{$ps->post_image}}" class="img-fluid responimg" alt="" style="width: 100%; height:250px">
                        </div>

                        <h2 class="entry-title">
                        </h2>

                        <div class="entry-meta">
                            <ul>
                                <li class="d-flex align-items-center colorWhite"><i class="icofont-user"></i> {{$ps->post_author_name}}</li>
                                <li class="d-flex align-items-center colorWhite list2" style=""><i class="icofont-wall-clock"></i> <time datetime="2020-01-01">{{ $ps->created_at->format('d M, Y')}}</time></li>

                            </ul>
                        </div>

                        <div class="entry-content">
                            <p class="colorWhite" style="text-align: left; ">
                                {{$ps->post_title}}
                            </p>
                            <div class="read-more">
                                <a class="demolink" style="float:left" href="{{$ps->post_short_desc}}" target="_blank">Demo</a>
                                <a href="{{URL('/post-details/')}}/{{$ps->id}}/">Read More</a>
                            </div>
                        </div>

                    </article><!-- End blog entry -->

                </div><!-- End blog entries list -->
                @endforeach
            </div><!-- End .row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="blog-pagination">
                        <ul class="justify-content-center">
                            {{ $posts->links('pagination::bootstrap-4') }}
                        </ul>
                    </div>
                </div>
            </div>

        </div><!-- End .container -->

    </section><!-- End Blog Section -->

</main><!-- End #main -->

@endsection