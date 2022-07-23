@extends('auth.main-auth')
@section('title', 'Login ')
@section('content')
<?php

use Illuminate\Support\Facades\DB;

$headers = $data['headers'] = DB::table('headers')->select('*')->get();
foreach ($headers as $di) {
    $logo = $di->site_logo;
}
?>
<style>
    /* .login-layout .widget-box .widget-main{ */
    .blur {
        background-image: url("{{URL('/')}}/public/uploads/images/<?php echo $logo; ?>") !important;
        background-position: center;
        opacity: 0.5;
        /* Add the blur effect */
        filter: blur(8px);
        -webkit-filter: blur(8px);

        /* Full height */
        height: 100%;

        /* Center and scale the image nicely */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        z-index: 1;
    }

    .texdt {
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4);
        /* Black w/opacity/see-through */
        color: white;
        font-weight: bold;
        border: 3px solid #f1f1f1;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 2;
        width: 80%;
        padding: 20px;
        text-align: center;
    }

    .login-layout .widget-box {
        padding: 10px;
        background: none;
    }
    .login-layout .widget-box .widget-main {
        /* The image used */
        background-image: url("{{URL('/')}}/public/uploads/images/image.png") !important;
        /* Add the blur effect */
        /* Full height */
        height: 100%;
        /* Center and scale the image nicely */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .colorWhite {
        color: white;
    }

    .login-box .toolbar {
        background-color: #002d2d;
        ;
    }
    .customButton{
        background-color: #BE290B !important;
        border-color: none !important;
        border:none !important;
    }
</style>
<div class="main-content">
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="login-container">


                <div class="space-6"></div>

                <div class="position-relative">
                    <div id="login-box" class="login-box visible widget-box no-border">
                        <div class="widget-body">
                            <div class="bg-image"></div>
                            <div class="widget-main ">
                                <h1 class="center">
                                    <img src="{{URL('/')}}/public/uploads/images/<?php echo $logo; ?>" class="img-fluid" style="width:15%">
                                    <span class="red center" style="color:red;font-size:35px"><b>Hyper Mix</b></span>
                                    <h4 class="header blue lighter bigger colorWhite" style="color:white !important">
                                        <i class="ace-icon fa fa-coffee green text colorWhite"></i>
                                        {{ __('Login') }}
                                    </h4>
                                    @if (session('message'))
                                    <div class="alert alert-danger errorMes text-center" role="alert">
                                        {{ session('message') }}
                                    </div>
                                    @endif
                                    <div class="space-6"></div>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <fieldset>
                                            <label class="block clearfix">
                                                <span class="block input-icon input-icon-right">

                                                    <input id="email" type="email" class="text form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                    <i class="ace-icon fa fa-user"></i>
                                                </span>
                                            </label>

                                            <label class="block clearfix">
                                                <span class="block input-icon input-icon-right">
                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                    <i class="ace-icon fa fa-lock"></i>
                                                </span>
                                            </label>

                                            <div class="space"></div>

                                            <div class="clearfix">
                                                <label class="inline">

                                                    <input class="form-check-input ace" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                    <span class="lbl text colorWhite"> {{ __('Remember Me') }}</span>
                                                </label>

                                                <button type="submit" class="width-35 pull-right btn btn-sm btn-primary customButton">
                                                    <i class="ace-icon fa fa-key"></i>
                                                    <span class="bigger-110 text"> {{ __('Login') }}</span>
                                                </button>
                                            </div>

                                            <div class="space-4"></div>
                                        </fieldset>
                                    </form>



                                    <div class="space-6"></div>


                            </div><!-- /.widget-main -->

                            <div class="toolbar clearfix">
                                <div>
                                    @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" data-target="#forgot-box" class="forgot-password-link colorWhite" style="color:white">
                                        <i class="ace-icon fa fa-arrow-left"></i>
                                        {{ __('Forgot Password?') }}
                                    </a>
                                    @endif
                                </div>
                                <div>
                                    <a href="#" data-target="#signup-box" class="user-signup-link" style="color:white">
                                        I want to register
                                        <i class="ace-icon fa fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div><!-- /.widget-body -->
                    </div><!-- /.login-box -->

                    <div id="forgot-box" class="forgot-box widget-box no-border">
                        <div class="widget-body">
                            <div class="widget-main">
                                <h4 class="header red lighter bigger">
                                    <i class="ace-icon fa fa-key"></i>
                                    Retrieve Password
                                </h4>

                                <div class="space-6"></div>
                                <p class="colorWhite" style="color:white !important"> 
                                    Enter your email and to receive instructions
                                </p>

                                <form>
                                    <fieldset>
                                        <label class="block clearfix">
                                            <span class="block input-icon input-icon-right">
                                                <input type="email" class="form-control" placeholder="Email" />
                                                <i class="ace-icon fa fa-envelope"></i>
                                            </span>
                                        </label>

                                        <div class="clearfix">
                                            <button type="button" class="width-35 pull-right btn btn-sm btn-danger">
                                                <i class="ace-icon fa fa-lightbulb-o"></i>
                                                <span class="bigger-110">Send Me!</span>
                                            </button>
                                        </div>
                                    </fieldset>
                                </form>
                            </div><!-- /.widget-main -->

                            <div class="toolbar center">
                                <a href="#" data-target="#login-box" class="back-to-login-link">
                                    Back to login
                                    <i class="ace-icon fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div><!-- /.widget-body -->
                    </div><!-- /.forgot-box -->

                    <div id="signup-box" class="signup-box widget-box no-border">
                        <div class="widget-body">
                            <div class="widget-main">
                                <h4 class="header green lighter bigger" style="color:white !important">
                                    <i class="ace-icon fa fa-users blue"></i>
                                    New User Registration
                                </h4>

                                <div class="space-6"></div>
                                <p style="color:white"> Enter your details to begin: </p>
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <fieldset>
                                        <label class="block clearfix">
                                            <span class="block input-icon input-icon-right">
                                                <input type="text" class="form-control" placeholder="Username" id="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus />
                                                <i class="ace-icon fa fa-users"></i>
                                                @error('username')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </span>
                                        </label>
                                        <label class="block clearfix">
                                            <span class="block input-icon input-icon-right">
                                                <input type="text" class="form-control" placeholder="First Name" id="first_name" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus />
                                                <i class="ace-icon fa fa-pencil"></i>
                                                @error('first_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </span>
                                        </label>

                                        <label class="block clearfix">
                                            <span class="block input-icon input-icon-right">
                                                <input type="text" class="form-control" placeholder="Last Name" id="last_name" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus />
                                                <i class="ace-icon fa fa-pencil"></i>
                                                @error('last_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </span>
                                        </label>
                                        <label class="block clearfix">
                                            <span class="block input-icon input-icon-right">
                                                <input type="email" class="form-control" placeholder="Email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                                                <i class="ace-icon fa fa-envelope"></i>
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </span>
                                        </label>



                                        <label class="block clearfix">
                                            <span class="block input-icon input-icon-right">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                                <i class="ace-icon fa fa-lock"></i>
                                            </span>
                                        </label>

                                        <label class="block clearfix">
                                            <span class="block input-icon input-icon-right">
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Retype Password">
                                                <i class="ace-icon fa fa-retweet"></i>
                                            </span>
                                        </label>

                                        <div class="clearfix">
                                            <button type="reset" class="width-30 pull-left btn btn-sm customButton">
                                                <i class="ace-icon fa fa-refresh"></i>
                                                <span class="bigger-110 ">Reset</span>
                                            </button>

                                            <button type="submit" class="width-65 pull-right btn btn-sm btn-success customButton">
                                                <span class="bigger-110 ">Register</span>

                                                <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
                                            </button>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>

                            <div class="toolbar center">
                                <a href="#" data-target="#login-box" class="back-to-login-link ">
                                    <i class="ace-icon fa fa-arrow-left"></i>
                                    Back to login
                                </a>
                            </div>
                        </div><!-- /.widget-body -->
                    </div><!-- /.signup-box -->
                </div><!-- /.position-relative -->

                <div class="navbar-fixed-top align-right">
                    <br />
                    &nbsp;
                    <a id="btn-login-dark" href="#">Dark</a>
                    &nbsp;
                    <span class="blue">/</span>
                    &nbsp;
                    <a id="btn-login-blur" href="#">Blur</a>
                    &nbsp;
                    <span class="blue">/</span>
                    &nbsp;
                    <a id="btn-login-light" href="#">Light</a>
                    &nbsp; &nbsp; &nbsp;
                </div>
            </div>
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.main-content -->
@endsection