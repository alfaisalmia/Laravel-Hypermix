<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title>Hyper Mix - Login </title>

        <meta name="description" content="Static &amp; Dynamic Tables" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

        <!-- bootstrap & fontawesome -->
        <link rel="stylesheet" href="{{asset('public/assets/css/bootstrap.min.css')}}" />
        <link rel="stylesheet" href="{{asset('public/assets/font-awesome/4.5.0/css/font-awesome.min.css')}}" />
        <link rel="stylesheet" href="{{asset('public/assets/css/fonts.googleapis.com.css')}}" />
        <link rel="stylesheet" href="{{asset('public/assets/css/ace.min.css')}}" class="ace-main-stylesheet" id="main-ace-style" />
        <link rel="stylesheet" href="{{asset('public/assets/css/ace-skins.min.css')}}" />
        <link rel="stylesheet" href="{{asset('public/assets/css/ace-rtl.min.css')}}" />
        <style>
             body {
            overflow-x: hidden;
            font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
        }

            .button_sytem{
                margin-top: 25px;
            }
        </style>
        <script src="{{asset('public/assets/js/ace-extra.min.js')}}"></script>

    </head>


<body class="login-layout login-layout blur-login">
		<div class="main-container">
                    
                    
                     @yield('content')
                    
                </div>

        <script src="{{asset('public/assets/js/jquery-2.1.4.min.js')}}"></script>
        <script type="text/javascript">
                    if ('ontouchstart' in document.documentElement)
                        document.write("<script src='assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
        </script>
        <script src="{{asset('public/assets/js/bootstrap.min.js')}}"></script>

        <!-- page specific plugin scripts -->
        <script src="{{asset('public/assets/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('public/assets/js/jquery.dataTables.bootstrap.min.js')}}"></script>
        <script src="{{asset('public/assets/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('public/assets/js/buttons.flash.min.js')}}"></script>
        <script src="{{asset('public/assets/js/buttons.html5.min.js')}}"></script>
        <script src="{{asset('public/assets/js/buttons.print.min.js')}}"></script>
        <script src="{{asset('public/assets/js/buttons.colVis.min.js')}}"></script>
        <script src="{{asset('public/assets/js/dataTables.select.min.js')}}"></script>

        <!-- ace scripts -->
        <script src="{{asset('public/assets/js/ace-elements.min.js')}}"></script>
        <script src="{{asset('public/assets/js/ace.min.js')}}"></script>

     <script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
			 $(document).on('click', '.toolbar a[data-target]', function(e) {
				e.preventDefault();
				var target = $(this).data('target');
				$('.widget-box.visible').removeClass('visible');//hide others
				$(target).addClass('visible');//show target
			 });
			});
			
			
			
			//you don't need this, just used for changing background
			jQuery(function($) {
			 $('#btn-login-dark').on('click', function(e) {
				$('body').attr('class', 'login-layout');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'blue');
				
				e.preventDefault();
			 });
			 $('#btn-login-light').on('click', function(e) {
				$('body').attr('class', 'login-layout light-login');
				$('#id-text2').attr('class', 'grey');
				$('#id-company-text').attr('class', 'blue');
				
				e.preventDefault();
			 });
			 $('#btn-login-blur').on('click', function(e) {
				$('body').attr('class', 'login-layout blur-login');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'light-blue');
				
				e.preventDefault();
			 });
			 
			});
		</script>
    </body>
</html>
