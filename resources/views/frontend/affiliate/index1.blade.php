@extends('frontend.fontend-header')

@section('content')


<main id="main">

  <!-- ======= Blog Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Blog</h2>
      </div>

    </div>
  </section><!-- End Blog Section -->

  <!-- ======= Blog Section ======= -->
  <section class="blog" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
    <div class="container">

      <div class="row">

        <div class="col-lg-8 entries">

          <article class="entry entry-single">
            <div class="entry-img">
              <img src="assets/img/blog-post-1.jpg" alt="" class="img-fluid">
            </div>

            <h2 class="entry-title">
              <a href="blog-single.html">Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia reiciendis</a>
            </h2>

            <div class="entry-meta">
              <ul>
                <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">John Doe</a></li>
                <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                <li class="d-flex align-items-center"><i class="icofont-comment"></i> <a href="blog-single.html">12 Comments</a></li>
              </ul>
            </div>

            <div class="entry-content">
              <p>
                Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et
                laboriosam eius aut nostrum quidem aliquid dicta.
                Et eveniet enim. Qui velit est ea dolorem doloremque deleniti aperiam unde soluta. Est cum et quod quos
                aut ut et sit sunt. Voluptate porro consequatur assumenda perferendis dolore.
              </p>

              <p>
                Sit repellat hic cupiditate hic ut nemo. Quis nihil sunt non reiciendis. Sequi in accusamus harum vel
                aspernatur. Excepturi numquam nihil cumque odio. Et voluptate cupiditate.
              </p>

              <blockquote>
                <i class="icofont-quote-left quote-left"></i>
                <p>
                  Et vero doloremque tempore voluptatem ratione vel aut. Deleniti sunt animi aut. Aut eos aliquam
                  doloribus minus autem quos.
                </p>
                <i class="las la-quote-right quote-right"></i>
                <i class="icofont-quote-right quote-right"></i>
              </blockquote>

              <p>
                Sed quo laboriosam qui architecto. Occaecati repellendus omnis dicta inventore tempore provident
                voluptas mollitia aliquid. Id repellendus quia. Asperiores nihil magni dicta est suscipit perspiciatis.
                Voluptate ex rerum assumenda dolores nihil quaerat.
                Dolor porro tempora et quibusdam voluptas. Beatae aut at ad qui tempore corrupti velit quisquam rerum.
                Omnis dolorum exercitationem harum qui qui blanditiis neque.
                Iusto autem itaque. Repudiandae hic quae aspernatur ea neque qui. Architecto voluptatem magni. Vel
                magnam quod et tempora deleniti error rerum nihil tempora.
              </p>

              <h3>Et quae iure vel ut odit alias.</h3>
              <p>
                Officiis animi maxime nulla quo et harum eum quis a. Sit hic in qui quos fugit ut rerum atque. Optio
                provident dolores atque voluptatem rem excepturi molestiae qui. Voluptatem laborum omnis ullam quibusdam
                perspiciatis nulla nostrum. Voluptatum est libero eum nesciunt aliquid qui.
                Quia et suscipit non sequi. Maxime sed odit. Beatae nesciunt nesciunt accusamus quia aut ratione
                aspernatur dolor. Sint harum eveniet dicta exercitationem minima. Exercitationem omnis asperiores natus
                aperiam dolor consequatur id ex sed. Quibusdam rerum dolores sint consequatur quidem ea.
                Beatae minima sunt libero soluta sapiente in rem assumenda. Et qui odit voluptatem. Cum quibusdam
                voluptatem voluptatem accusamus mollitia aut atque aut.
              </p>
              <img src="assets/img/blog-post-4.jpg" class="img-fluid" alt="">

              <h3>Ut repellat blanditiis est dolore sunt dolorum quae.</h3>
              <p>
                Rerum ea est assumenda pariatur quasi et quam. Facilis nam porro amet nostrum. In assumenda quia quae a
                id praesentium. Quos deleniti libero sed occaecati aut porro autem. Consectetur sed excepturi sint non
                placeat quia repellat incidunt labore. Autem facilis hic dolorum dolores vel.
                Consectetur quasi id et optio praesentium aut asperiores eaque aut. Explicabo omnis quibusdam esse. Ex
                libero illum iusto totam et ut aut blanditiis. Veritatis numquam ut illum ut a quam vitae.
              </p>
              <p>
                Alias quia non aliquid. Eos et ea velit. Voluptatem maxime enim omnis ipsa voluptas incidunt. Nulla sit
                eaque mollitia nisi asperiores est veniam.
              </p>

            </div>
            <form method="post" action="{!! URL::to('paypal')!!}"> 
              <div class="form-group">
                <label for="exampleInputEmail1">Total Amount</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Amount" name="amount">
              </div>

              <button type="submit" class="btn btn-primary">Pay with Paypal</button>
            </form>
            <div class="content">
                <table border="0" cellpadding="10" cellspacing="0" align="center"><tr><td align="center"></td></tr><tr><td align="center"><a href="https://www.paypal.com/in/webapps/mpp/paypal-popup" title="How PayPal Works" onclick="javascript:window.open('https://www.paypal.com/in/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;"><img src="https://www.paypalobjects.com/webstatic/mktg/Logo/pp-logo-200px.png" border="0" alt="PayPal Logo"></a></td></tr></table>
  
                <a href="{{ route('payment') }}" class="btn btn-success">Pay $100 from Paypal</a>
  
            </div>
            <div class="entry-footer clearfix">
              <div class="float-left">
                <i class="icofont-folder"></i>
                <ul class="cats">
                  <li><a href="#">Business</a></li>
                </ul>

                <i class="icofont-tags"></i>
                <ul class="tags">
                  <li><a href="#">Creative</a></li>
                  <li><a href="#">Tips</a></li>
                  <li><a href="#">Marketing</a></li>
                </ul>
              </div>

              <div class="float-right share">
                <a href="" title="Share on Twitter"><i class="icofont-twitter"></i></a>
                <a href="" title="Share on Facebook"><i class="icofont-facebook"></i></a>
                <a href="" title="Share on Instagram"><i class="icofont-instagram"></i></a>
              </div>

            </div>

          </article><!-- End blog entry -->

          <div class="blog-author clearfix">
            <img src="assets/img/blog-author.jpg" class="rounded-circle float-left" alt="">
            <h4>Jane Smith</h4>
            <div class="social-links">
              <a href="https://twitters.com/#"><i class="icofont-twitter"></i></a>
              <a href="https://facebook.com/#"><i class="icofont-facebook"></i></a>
              <a href="https://instagram.com/#"><i class="icofont-instagram"></i></a>
            </div>
            <p>
              Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus accusantium. Quas repellat
              voluptatem officia numquam sint aspernatur voluptas. Esse et accusantium ut unde voluptas.
            </p>
          </div><!-- End blog author bio -->


        </div><!-- End blog entries list -->

        <div class="col-lg-4">

          <div class="sidebar">
            <h3 class="sidebar-title">Categories</h3>
            <div class="sidebar-item categories">
              <ul>
                <li><a href="#">General <span>(25)</span></a></li>
                <li><a href="#">Lifestyle <span>(12)</span></a></li>
                <li><a href="#">Travel <span>(5)</span></a></li>
                <li><a href="#">Design <span>(22)</span></a></li>
                <li><a href="#">Creative <span>(8)</span></a></li>
                <li><a href="#">Educaion <span>(14)</span></a></li>
              </ul>

            </div><!-- End sidebar categories-->

            <h3 class="sidebar-title">Recent Posts</h3>
            <div class="sidebar-item recent-posts">
              <div class="post-item clearfix">
                <img src="assets/img/recent-posts-1.jpg" alt="">
                <h4><a href="blog-single.html">Nihil blanditiis at in nihil autem</a></h4>
                <time datetime="2020-01-01">Jan 1, 2020</time>
              </div>

              <div class="post-item clearfix">
                <img src="assets/img/recent-posts-2.jpg" alt="">
                <h4><a href="blog-single.html">Quidem autem et impedit</a></h4>
                <time datetime="2020-01-01">Jan 1, 2020</time>
              </div>

              <div class="post-item clearfix">
                <img src="assets/img/recent-posts-3.jpg" alt="">
                <h4><a href="blog-single.html">Id quia et et ut maxime similique occaecati ut</a></h4>
                <time datetime="2020-01-01">Jan 1, 2020</time>
              </div>

              <div class="post-item clearfix">
                <img src="assets/img/recent-posts-4.jpg" alt="">
                <h4><a href="blog-single.html">Laborum corporis quo dara net para</a></h4>
                <time datetime="2020-01-01">Jan 1, 2020</time>
              </div>

              <div class="post-item clearfix">
                <img src="assets/img/recent-posts-5.jpg" alt="">
                <h4><a href="blog-single.html">Et dolores corrupti quae illo quod dolor</a></h4>
                <time datetime="2020-01-01">Jan 1, 2020</time>
              </div>
            </div><!-- End sidebar recent posts-->

<!--             <h3 class="sidebar-title">Tags</h3>
            <div class="sidebar-item tags">


            </div><!-- End sidebar tags-->

          </div><!-- End sidebar -->

        </div><!-- End blog sidebar -->

      </div><!-- End row -->

    </div><!-- End container -->

  </section><!-- End Blog Section -->

</main><!-- End #main -->

@endsection