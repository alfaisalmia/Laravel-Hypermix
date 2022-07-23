<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Hyper Mix</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('public/assets/fontend-assets/favicon.png')}}" rel="icon">
    <!-- Google Fonts -->
    <link href="{{asset('public/assets/fontend-assets/assets/vendor/googleapis/fonts.googleapis.css')}}" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="{{asset('public/assets/fontend-assets/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/assets/fontend-assets/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/assets/fontend-assets/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/assets/fontend-assets/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/assets/fontend-assets/assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
    <link href="{{asset('public/assets/fontend-assets/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/assets/fontend-assets/assets/vendor/aos/aos.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('public/assets/fontend-assets/assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('public/assets/fontend-assets/assets/css/.css')}}" rel="stylesheet">
    <style>
        .blog .entry .entry-title {
            font-size: 18px;
        }

        .addToCart {
            background-color: #BE290B;
            color: white;
            padding: 3px 9px;
            margin: 8px;
        }

        .member {
            border: 1px solid antiquewhite;
            padding: 5px;
        }
        .member:hover {
            border: 3px solid aliceblue;

        }
        body{
            font-size: 14px;
        }
    </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top header-transparent">
        <div class="container">
            <?php

            use Illuminate\Support\Facades\DB;
            use App\Models\Cart;
            use Illuminate\Support\Facades\Auth;

            $totalCart = 0;
            $headers = $data['headers'] = DB::table('headers')->select('*')->get();
            foreach ($headers as $di) {
                $logo = $di->site_logo;
            }
            if (Auth::user()) {
                $totalCart =  Cart::where('user_id', Auth::user()->id)->count();
            }

            ?>
            <div class="logo float-left">
                <!-- Uncomment below if you prefer to use an image logo -->
                @foreach ($headers as $head)
                <a href="{{ URL('/')}}"><img src="{{URL('/')}}/public/uploads/images/{{$head->site_logo}}" alt="{{$head->site_title}}" class="img-fluid"></a>
                @endforeach
            </div>

            <nav class="nav-menu float-right d-none d-lg-block" style="margin-right: -100px;">
                <ul>
                   <!--  <li class=""><a href="{{URL('/')}}">Hyper Home</a></li> -->
                    <li><a href="{{ route('affiliate')}}">Hyper Links</a></li>
                    <li><a href="{{ route('raffle')}}">Hyper Raffle</a></li>
                    <li><a href="{{ route('apps')}}">Hyper Apps</a></li>
                    <li><a href="{{ route('products')}}">Hyper Store</a></li>
                    <li><a href="{{ route('contact.index')}}">Contact</a></li>




                    <li><a href="{{route('cart')}}"><i class='bx bxs-cart-add'></i>Cart ({{$totalCart}})</a></li>
                    @if(Auth::user())
                    <li class="drop-down"><a href="">{{Auth::user()->username}}</a>
                        <ul style="margin-left:;">
                            <li><a href="{{route('home')}}">Dashboard</a></li>
                            <li><a href="{{route('signout')}}">Sign Out</a></li>
                        </ul>
                    </li>

                    @else
                    <li><a href="{{route('login')}}">Signin/Singup</a></li>
                    @endif




                    <!--     @guest
                        @if (Route::has('login'))
                        <li><a href="{{ route('login') }}">Login</a></li>
                        @endif
                     <!--    @if (Route::has('register'))
                        <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @endif -->
                    @else
                    <!--  {{ Auth::user()->username }} -->
                    <!--     <li><a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      <!--       @csrf
                        </form>
                        @endguest 


                    </ul>
                </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->
    <?php

    use App\Models\Category;
    use Illuminate\Http\Request;
    use App\Models\ContactInfo;
    use App\Models\FooterAbout;
    use App\Models\SocialLink;
    use App\Models\Copyright;
    use App\Models\ServiceLists;
    use App\Models\UsefulLinks;
    use App\Models\Post;
    use App\Models\Header;

    $contactInfo = ContactInfo::all();
    $footer_about = FooterAbout::all();
    $socialLinks = SocialLink::all();
    $copys = Copyright::all();
    $servicesLists = ServiceLists::all();
    $usefullinks = UsefulLinks::all();

    $headers = Header::all();
    ?>

    @yield('content')



    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{asset('public/assets/fontend-assets/assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('public/assets/fontend-assets/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('public/assets/fontend-assets/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('public/assets/fontend-assets/assets/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{asset('public/assets/fontend-assets/assets/vendor/venobox/venobox.min.js')}}"></script>
    <script src="{{asset('public/assets/fontend-assets/assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('public/assets/fontend-assets/assets/vendor/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('public/assets/fontend-assets/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('public/assets/fontend-assets/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('public/assets/fontend-assets/assets/vendor/aos/aos.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('public/assets/fontend-assets/assets/js/main.js')}}"></script>

</body>

</html>