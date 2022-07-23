<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>@yield('title')</title>

    <meta name="description" content="Hyper Mix" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <link rel="stylesheet" href="{{ asset('resources/css/app.css') }}" />
    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="{{asset('public/assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('public/assets/font-awesome/4.5.0/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{asset('public/assets/css/fonts.googleapis.com.css')}}" />

    <!-- page specific plugin styles -->
    <link rel="stylesheet" href="{{asset('public/assets/css/jquery-ui.custom.min.css')}}" />
    <link rel="stylesheet" href="{{asset('public/assets/css/chosen.min.css')}}" />
    <link rel="stylesheet" href="{{asset('public/assets/css/bootstrap-datepicker3.min.css')}}" />
  
<!--     <link rel="stylesheet" href="{{asset('public/assets/css/bootstrap-timepicker.min.css')}}" />
    <link rel="stylesheet" href="{{asset('public/assets/css/daterangepicker.min.css')}}" />
    <link rel="stylesheet" href="{{asset('public/assets/css/bootstrap-datetimepicker.min.css')}}" />
    <link rel="stylesheet" href="{{asset('public/assets/css/bootstrap-colorpicker.min.css')}}" /> -->


    <link rel="stylesheet" href="{{asset('public/assets/css/ace.min.css')}}" class="ace-main-stylesheet" id="main-ace-style" />

    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" />
 -->
    <link rel="stylesheet" href="{{asset('public/assets/css/ace-skins.min.css')}}" />
    <link rel="stylesheet" href="{{asset('public/assets/css/ace-rtl.min.css')}}" />

    <link rel="stylesheet" href="{{asset('public/assets/alertify/alertify.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/alertify/bootstrap.rtl.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/alertify/default.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/alertify/default.rtl.css')}}">
    <script src="{{asset('public/assets/alertify/js/alertify.js')}}"></script>
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <script type="text/javascript">
    $(document).ready(function () {
        $('#pickyDate').datepicker({
            format: "dd/mm/yyyy"
        });
    });
</script>

    <style>
        .button_sytem {
            margin-top: 25px;
        }

        .infobox-dark {
            margin: 11px 7px 0 0;
        }

        body {
            overflow-x: hidden;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        }

        .navbar {
            background: #033131;
        }

        .ace-nav>li.light-blue>a {
            background-color: #033131;
        }

        .ace-nav>li.light-blue>a:focus,
        .ace-nav>li.light-blue>a:hover,
        .ace-nav>li.open.light-blue>a {
            background-color: #BE290B
        }

        .invalid-feedback {
            color: red !important;
        }

        .input_resize {
            resize: horizontal;
            width: 200px;
        }

        .page-content {
            padding-bottom: 3px !important;
        }

        .btn-bg {
            color: #033131;
            ;
        }

        .sdfa {
            border: 1px solid red;
            width: 28%;
            float: right;
            padding: 0px 0px;
            margin: unset;
            margin-top: -102px;
            height: 90px;
        }
        .infobox-small {
 width:378px;
 height:74px;
 text-align:left;
 padding-bottom:5px
}
    </style>


</head>

<body class="no-skin">
    <div id="navbar" class="navbar navbar-default ace-save-state">
        <div class="navbar-container ace-save-state" id="navbar-container">
            <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
                <span class="sr-only">Toggle sidebar</span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>
            </button>

            <div class="navbar-header pull-left">
                <a href="{{route('home')}}" class="navbar-brand">
                    <small>
                        <i class="fa fa-pie-chart"></i> All Thing Hyper Mix
                    </small>
                </a>




            </div>
            <a href="{{URL('/affiliate')}}" target="_blank" style=" display: inline-block;
    vertical-align: top; padding-top:7px"><button class="btn btn-xs">Visit site</button></a>
            <div class="navbar-buttons navbar-header pull-right" role="navigation">
                <ul class="nav ace-nav">
                    <li class="grey dropdown-modal">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="ace-icon fa fa-tasks"></i>
                            <span class="badge badge-grey">4</span>
                        </a>

                        <ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                            <li class="dropdown-header">
                                Software Information
                            </li>

                            <li class="dropdown-content">
                                <ul class="dropdown-menu dropdown-navbar">
                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <span class="pull-left">Software Update</span>
                                                <span class="pull-right">65%</span>
                                            </div>

                                            <div class="progress progress-mini">
                                                <div style="width:65%" class="progress-bar"></div>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <span class="pull-left">Hardware Upgrade</span>
                                                <span class="pull-right">35%</span>
                                            </div>

                                            <div class="progress progress-mini">
                                                <div style="width:35%" class="progress-bar progress-bar-danger"></div>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <span class="pull-left">Unit Testing</span>
                                                <span class="pull-right">15%</span>
                                            </div>

                                            <div class="progress progress-mini">
                                                <div style="width:15%" class="progress-bar progress-bar-warning"></div>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <span class="pull-left">Bug Fixes</span>
                                                <span class="pull-right">90%</span>
                                            </div>

                                            <div class="progress progress-mini progress-striped active">
                                                <div style="width:90%" class="progress-bar progress-bar-success"></div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </li>


                    <li class="light-blue dropdown-modal">
                        <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                            <img class="nav-user-photo" src="{{URL('/')}}/public/uploads/users/{{Auth::user()->picture}}" alt="{{Auth::user()->username}}" />
                            <span class="user-info">
                                <small>Welcome,</small>
                                {{ Auth::user()->username }}
                            </span>

                            <i class="ace-icon fa fa-caret-down"></i>
                        </a>

                        <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                            <li>
                                <a href="{{route('profile.index')}}">
                                    <i class="ace-icon fa fa-user"></i>
                                    Profile
                                </a>
                            </li>



                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
                                    <i class="ace-icon fa fa-power-off"></i>
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div><!-- /.navbar-container -->
    </div>

    <div class="main-container ace-save-state" id="main-container">
        <script type="text/javascript">
            try {
                ace.settings.loadState('main-container')
            } catch (e) {}
        </script>

        <div id="sidebar" class="sidebar responsive ace-save-state">
            <script type="text/javascript">
                try {
                    ace.settings.loadState('sidebar')
                } catch (e) {}
            </script>

            <ul class="nav nav-list">
@if(Auth::user()->type == 'admin')

                <li class="active">
                    <a href="{{route('home')}}">
                        <i class="menu-icon fa fa-tachometer"></i>
                        <span class="menu-text"> Dashboard </span>
                    </a>

                    <b class="arrow"></b>
                </li>
                <li class="">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-arrows-alt"></i>
                        <span class="menu-text">Affiliate Link</span>
                        <b class="arrow fa fa-angle-down"></b>
                    </a>

                    <b class="arrow"></b>
                    <ul class="submenu">

                        <li class="">
                            <a href="{{route('postblog.create')}}">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Create Post
                            </a>

                            <b class="arrow"></b>
                        </li>
                        <li class="">
                            <a href="{{route('postblog.index')}}">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Post Lists
                            </a>

                            <b class="arrow"></b>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-arrows-alt"></i>
                        <span class="menu-text">Raffle Ticket</span>
                        <b class="arrow fa fa-angle-down"></b>
                    </a>

                    <b class="arrow"></b>
                    <ul class="submenu">

                        <li class="">
                            <a href="{{URL('/dashboard/raffleticket/create')}}">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Create new Ticket
                            </a>

                            <b class="arrow"></b>
                        </li>
                        <li class="">
                            <a href="{{route('raffleticket.index')}}">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Ticket Lists
                            </a>

                            <b class="arrow"></b>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-shopping-bag"></i>
                        <span class="menu-text">E-Store</span>
                        <b class="arrow fa fa-angle-down"></b>
                    </a>

                    <b class="arrow"></b>
                    <ul class="submenu">

                        <li class="">
                            <a href="{{URL('/product-categories ')}}">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Product Categories
                            </a>

                            <b class="arrow"></b>
                        </li>
                    </ul>
                    <ul class="submenu">

                        <li class="">
                            <a href="{{route('product.index')}}">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Product Lists
                            </a>

                            <b class="arrow"></b>
                        </li>
                    </ul>
                    <ul class="submenu">

                        <li class="">
                            <a href="{{route('product.create')}}">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Add new Product
                            </a>

                            <b class="arrow"></b>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="{{route('appsection.index')}}">
                        <i class="menu-icon fa fa-android"></i>
                        Apps Section
                    </a>

                    <b class="arrow"></b>
                </li>
                <li class="">
                    <a href="{{route('onlineOrder')}}">
                        <i class="menu-icon fa fa-truck"></i>
                        Online Orders
                    </a>

                    <b class="arrow"></b>
                </li>
                <li class="">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-desktop"></i>
                        <span class="menu-text">
                            System
                        </span>

                        <b class="arrow fa fa-angle-down"></b>
                    </a>

                    <b class="arrow"></b>

                    <ul class="submenu">

                        <li class="">
                            <a href="{{ route('categories.index')}}">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Category
                            </a>

                            <b class="arrow"></b>
                        </li>
                        <li class="">
                            <a href="{{ route('users.index')}}">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Users
                            </a>
                            <b class="arrow"></b>
                        </li>






                    </ul>
                </li>

                <li class="">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-list"></i>
                        <span class="menu-text">Website Setting </span>

                        <b class="arrow fa fa-angle-down"></b>
                    </a>

                    <b class="arrow"></b>

                    <ul class="submenu">

                        <li class="">
                            <a href="{{ route('header.index')}}">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Header Section
                            </a>
                            <b class="arrow"></b>
                        </li>
                        <li class="">
                            <a href="{{ route('footer.index')}}">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Footer Section
                            </a>

                            <b class="arrow"></b>
                        </li>

                    </ul>

                <li class="">
                    <a href="{{route('profile.index')}}">
                        <i class="menu-icon fa fa-gear"></i>
                        Profile Setting
                    </a>

                    <b class="arrow"></b>
                </li>
                <li class="">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
                        <i class="menu-icon fa fa-power-off"></i>
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    <b class="arrow"></b>
                </li>



@else
<li class="">
                    <a href="{{URL('/dashboard')}}">
                        <i class="menu-icon fa fa-gear"></i>
                        My Order
                    </a>

                    <b class="arrow"></b>
                </li>
<li class="">
                    <a href="{{route('profile.index')}}">
                        <i class="menu-icon fa fa-gear"></i>
                        Profile Setting
                    </a>

                    <b class="arrow"></b>
                </li>
                <li class="">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
                        <i class="menu-icon fa fa-power-off"></i>
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    <b class="arrow"></b>
                </li>
                @endif

                </li>

            </ul><!-- /.nav-list -->

            <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
                <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
            </div>

        </div>














        @yield('content')












        <div class="footer">
            <div class="footer-inner">
                <div class="footer-content">
                    <span class="bigger-120">
                        <span class="blue bolder">Hyper Mix</span>
                        All Things Hyper Mix &copy; 2020-2021
                    </span>

                    &nbsp; &nbsp;
                    <span class="action-buttons">
                        <a href="#">
                            <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                        </a>

                        <a href="#">
                            <i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
                        </a>

                        <a href="#">
                            <i class="ace-icon fa fa-rss-square orange bigger-150"></i>
                        </a>
                    </span>
                </div>
            </div>
        </div>

        <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
            <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
        </a>
    </div><!-- /.main-container -->
    <script defer src="{{ asset('resources/js/app.js') }}"></script>
    <script src="{{asset('public/assets/js/jquery-2.1.4.min.js')}}"></script>
    <!--     <script src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
    <!-- <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script> -->
    <!-- <script type="text/javascript">
        if ('ontouchstart' in document.documentElement)
            document.write("<script src='assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
    </script> -->
    <script src="{{asset('public/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/assets/js/jquery-ui.custom.min.js')}}"></script>
    <script src="{{asset('public/assets/js/jquery.ui.touch-punch.min.js')}}"></script>
    <script src="{{asset('public/assets/js/chosen.jquery.min.js')}}"></script>
    <script src="{{asset('public/assets/js/spinbox.min.js')}}"></script>
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
    <script type="text/javascript" src="https://www.technicalkeeda.com/js/javascripts/plugin/jquery.validate.js"></script>
    <!-- inline scripts related to this page -->
    <script type="text/javascript">
        var $ = jQuery;
        jQuery(function($) {
            //initiate dataTables plugin
            var myTable =
                $('#dynamic-table')
                //.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
                .DataTable({
                    bAutoWidth: false,
                    "aoColumns": [{
                            "bSortable": false
                        },
                        null, null, null, null, null,
                        {
                            "bSortable": false
                        }
                    ],
                    "aaSorting": [],

                    //"bProcessing": true,
                    //"bServerSide": true,
                    //"sAjaxSource": "http://127.0.0.1/table.php"	,

                    //,
                    //"sScrollY": "200px",
                    //"bPaginate": false,

                    //"sScrollX": "100%",
                    //"sScrollXInner": "120%",
                    //"bScrollCollapse": true,
                    //Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
                    //you may want to wrap the table inside a "div.dataTables_borderWrap" element

                    //"iDisplayLength": 50


                    select: {
                        style: 'multi'
                    }
                });



            $.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';

            /*      new $.fn.dataTable.Buttons(myTable, {
                     buttons: [{
                             "extend": "colvis",
                             "text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
                             "className": "btn btn-white btn-primary btn-bold",
                             columns: ':not(:first):not(:last)'
                         },
                         {
                             "extend": "copy",
                             "text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
                             "className": "btn btn-white btn-primary btn-bold"
                         },
                         {
                             "extend": "csv",
                             "text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
                             "className": "btn btn-white btn-primary btn-bold"
                         },
                         {
                             "extend": "excel",
                             "text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
                             "className": "btn btn-white btn-primary btn-bold"
                         },
                         {
                             "extend": "pdf",
                             "text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
                             "className": "btn btn-white btn-primary btn-bold"
                         },
                         {
                             "extend": "print",
                             "text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
                             "className": "btn btn-white btn-primary btn-bold",
                             autoPrint: false,
                             message: 'This print was produced using the Print button for DataTables'
                         }
                     ]
                 }); */
            myTable.buttons().container().appendTo($('.tableTools-container'));

            //style the message box
            var defaultCopyAction = myTable.button(1).action();
            myTable.button(1).action(function(e, dt, button, config) {
                defaultCopyAction(e, dt, button, config);
                $('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
            });


            var defaultColvisAction = myTable.button(0).action();
            myTable.button(0).action(function(e, dt, button, config) {

                defaultColvisAction(e, dt, button, config);


                if ($('.dt-button-collection > .dropdown-menu').length == 0) {
                    $('.dt-button-collection')
                        .wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
                        .find('a').attr('href', '#').wrap("<li />")
                }
                $('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
            });

            ////

            setTimeout(function() {
                $($('.tableTools-container')).find('a.dt-button').each(function() {
                    var div = $(this).find(' > div').first();
                    if (div.length == 1)
                        div.tooltip({
                            container: 'body',
                            title: div.parent().text()
                        });
                    else
                        $(this).tooltip({
                            container: 'body',
                            title: $(this).text()
                        });
                });
            }, 500);





            myTable.on('select', function(e, dt, type, index) {
                if (type === 'row') {
                    $(myTable.row(index).node()).find('input:checkbox').prop('checked', true);
                }
            });
            myTable.on('deselect', function(e, dt, type, index) {
                if (type === 'row') {
                    $(myTable.row(index).node()).find('input:checkbox').prop('checked', false);
                }
            });




            /////////////////////////////////
            //table checkboxes
            $('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);

            //select/deselect all rows according to table header checkbox
            $('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function() {
                var th_checked = this.checked; //checkbox inside "TH" table header

                $('#dynamic-table').find('tbody > tr').each(function() {
                    var row = this;
                    if (th_checked)
                        myTable.row(row).select();
                    else
                        myTable.row(row).deselect();
                });
            });

            //select/deselect a row when the checkbox is checked/unchecked
            $('#dynamic-table').on('click', 'td input[type=checkbox]', function() {
                var row = $(this).closest('tr').get(0);
                if (this.checked)
                    myTable.row(row).deselect();
                else
                    myTable.row(row).select();
            });



            $(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
                e.stopImmediatePropagation();
                e.stopPropagation();
                e.preventDefault();
            });



            //And for the first simple table, which doesn't have TableTools or dataTables
            //select/deselect all rows according to table header checkbox
            var active_class = 'active';
            $('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function() {
                var th_checked = this.checked; //checkbox inside "TH" table header

                $(this).closest('table').find('tbody > tr').each(function() {
                    var row = this;
                    if (th_checked)
                        $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
                    else
                        $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
                });
            });

            //select/deselect a row when the checkbox is checked/unchecked
            $('#simple-table').on('click', 'td input[type=checkbox]', function() {
                var $row = $(this).closest('tr');
                if ($row.is('.detail-row '))
                    return;
                if (this.checked)
                    $row.addClass(active_class);
                else
                    $row.removeClass(active_class);
            });



            /********************************/
            //add tooltip for small view action buttons in dropdown menu
            $('[data-rel="tooltip"]').tooltip({
                placement: tooltip_placement
            });

            //tooltip placement on right or left
            function tooltip_placement(context, source) {
                var $source = $(source);
                var $parent = $source.closest('table')
                var off1 = $parent.offset();
                var w1 = $parent.width();

                var off2 = $source.offset();
                //var w2 = $source.width();

                if (parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2))
                    return 'right';
                return 'left';
            }




            /***************/
            $('.show-details-btn').on('click', function(e) {
                e.preventDefault();
                $(this).closest('tr').next().toggleClass('open');
                $(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
            });
            /***************/





            /**
             //add horizontal scrollbars to a simple table
             $('#simple-table').css({'width':'2000px', 'max-width': 'none'}).wrap('<div style="width: 1000px;" />').parent().ace_scroll(
             {
             horizontal: true,
             styleClass: 'scroll-top scroll-dark scroll-visible',//show the scrollbars on top(default is bottom)
             size: 2000,
             mouseWheelLock: true
             }
             ).css('padding-top', '12px');
             */


        });
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
    @stack('ajax_crud')
    @stack('ajax_cruds')
    <script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/classic/ckeditor.js"></script>
    @yield('scripts')
</body>

</html>