@extends('layouts.main')
@section('title', 'Admin Dashboard')
@section('content')
<!--<style>
    .infobox {
        margin: 3px 7px 5px 1px;
    }
    
</style>-->

<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="#">Home</a>
                </li>
                <li class="active">Dashboard </li>
            </ul><!-- /.breadcrumb -->

        </div>

        @if(Auth::user()->type == 'admin')
        <div class="page-content">
            <div class="ace-settings-container" id="ace-settings-container">
                <div class="row">
                    <div class="col-sm-12 infobox-container">
                        <a href="{{ route('postblog.index') }}">
                            <div class="infobox infobox-blue infobox-small infobox-dark">
                                <div class="infobox-icon">
                                    <i class="ace-icon fa fa-bar-chart"></i>
                                </div>
                                <div class="infobox-data">
                                    <div class="infobox-content">Total Post</div>
                                    <div class="infobox-content">{{$postCount}}</div>
                                </div>
                            </div>
                        </a>

                        <a href="{{ route('users.index') }}">
                            <div class="infobox infobox-green infobox-small infobox-dark">
                                <div class="infobox-icon">
                                    <i class="ace-icon fa fa-users"></i>
                                </div>

                                <div class="infobox-data">
                                    <div class="infobox-content">Total User</div>
                                    <div class="infobox-content">{{$userCount}}</div>
                                </div>
                            </div>
                        </a>
                        <a href="{{ route('users.index') }}">
                        <div class="infobox infobox-green2 infobox-small infobox-dark">
                            <div class="infobox-icon">
                                <i class="ace-icon fa fa-download"></i>
                            </div>

                            <div class="infobox-data">
                                <div class="infobox-content">Total Customers</div>
                                <div class="infobox-content">{{$customerCount}}</div>
                            </div>
                        </div>
</a>
<a href="{{ route('product.index') }}">
                        <div class="infobox infobox-grey infobox-small infobox-dark">
                            <div class="infobox-icon">
                                <i class="ace-icon fa fa-download"></i>
                            </div>

                            <div class="infobox-data">
                                <div class="infobox-content">Products</div>
                                <div class="infobox-content">{{$productsCount}}</div>
                            </div>
                        </div>
</a>
<a href="{{ route('onlineOrder') }}">
                        <div class="infobox infobox-blue infobox-small infobox-dark">
                            <div class="infobox-icon">
                                <i class="ace-icon fa fa-download"></i>
                            </div>

                            <div class="infobox-data">
                                <div class="infobox-content">Total Orders</div>
                                <div class="infobox-content">{{$orderCount}}</div>
                            </div>
                        </div>
</a>
                        <div class="infobox infobox-black infobox-small infobox-dark">
                            <div class="infobox-icon">
                                <i class="ace-icon fa fa-download"></i>
                            </div>

                            <div class="infobox-data">
                                <div class="infobox-content">Downloads</div>
                                <div class="infobox-content">1,205</div>
                            </div>
                        </div>

                    </div>

                    <div class="vspace-12-sm"></div>

                    <div class="col-sm-12">
                        <div class="widget-box">
                            <h5 style="color:#BE290B">Total Orders </h5>
                            <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <td> Sl N</td>
                                        <td>Brandname</td>
                                        <td>ProductCode</td>
                                        <td>ShippingAddress</t>
                                        <td>DeliveryStatus</t>
                                        <td>PaymentMethod</t>
                                        <td>PaymentStatus</t>
                                        <td>Customer Name</t>
                                        <td>Customer Email</t>
                                        <td>Date</t>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $od)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$od->brand_name}}</td>
                                        <td>{{$od->product_code}}</td>
                                        <td>{{$od->shipping_address}}</t>
                                        <td>
                                            @if ($od->status == 'Pending')
                                            <span class="label label-warning">Pending</span>
                                            @else
                                            <span class="label label-inverse arrowed">Complete</span>
                                            @endif
                                            </t>
                                        <td>
                                            {{$od->payment_method}}
                                        </td>
                                        <td>

                                            @if ($od->payment_status == 'Success')
                                            <span class="label label-success arrowed-in arrowed-in-right">Success</span>
                                            @else
                                            <span class="label label-error arrowed-in arrowed-in-right">Unsuccess</span>
                                            @endif
                                        </td>
                                        <td>{{$od->first_name}} {{ $od->last_name}}</t>
                                        <td><a href="mailto:{{$od->email}}">{{$od->email}}</a> </t>
                                        <td>{{ Carbon\Carbon::parse($od->created_at)->format('d M Y') }}</td>
                                    </tr>
                                  
                                    @endforeach
                                </tbody>
                                <tr></tr>
                            </table>
                            <div>
                            <a href="{{route('onlineOrder')}}"class="pull-right" style="color:#BE290B;padding:17px"> <i><b>See Rest Orders</b></i></a>
</div>
                        </div><!-- /.widget-box -->
                    </div><!-- /.col -->
                </div><!-- /.row -->

                <div class="hr hr32 hr-dotted"></div>


            </div><!-- /.col -->
        </div><!-- /.row -->
        @else


        <div class="col-sm-12">
                        <div class="widget-box">
                            <h5 style="color:#BE290B">My Orders </h5>
                            <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                    <td>Sl</td>
                                            <td>Product Title</td>
                                            <td>Product Image</td>
                                            <td>Shipping Address</td>
                                            <td>Delivery Status</td>
                                            <td>Payment Method</td>
                                            <td>Payment Status</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($customerorders as $or)
                                    <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$or->product_title}}</td>
                                            <td><img src="{{URL('/')}}/public/uploads/products/{{$or->product_image}}" class="msg-photo" alt="" style="width: 70px; height:40px;" /></td>
                                            <td>{{$or->shipping_address}}</td>
                                            <td>{{$or->status}}</td>
                                            <td>{{$or->payment_method}}</td>
                                            <td>{{$or->payment_status}}</td>
                                        </tr> 
                                    @endforeach
                                </tbody>
                                <tr></tr>
                            </table>
                            <div>
                           
</div>
                        </div><!-- /.widget-box -->
                    </div><!-- /.col -->
        @endif













    </div><!-- /.page-content -->
</div>















<script type="text/javascript">
    jQuery(function($) {
        $('.easy-pie-chart.percentage').each(function() {
            var $box = $(this).closest('.infobox');
            var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');
            var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
            var size = parseInt($(this).data('size')) || 50;
            $(this).easyPieChart({
                barColor: barColor,
                trackColor: trackColor,
                scaleColor: false,
                lineCap: 'butt',
                lineWidth: parseInt(size / 10),
                animate: ace.vars['old_ie'] ? false : 1000,
                size: size
            });
        })

        $('.sparkline').each(function() {
            var $box = $(this).closest('.infobox');
            var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
            $(this).sparkline('html', {
                tagValuesAttribute: 'data-values',
                type: 'bar',
                barColor: barColor,
                chartRangeMin: $(this).data('min') || 0
            });
        });


        //flot chart resize plugin, somehow manipulates default browser resize event to optimize it!
        //but sometimes it brings up errors with normal resize event handlers
        $.resize.throttleWindow = false;

        var placeholder = $('#piechart-placeholder').css({
            'width': '90%',
            'min-height': '150px'
        });
        var data = [{
                label: "social networks",
                data: 38.7,
                color: "#68BC31"
            },
            {
                label: "search engines",
                data: 24.5,
                color: "#2091CF"
            },
            {
                label: "ad campaigns",
                data: 8.2,
                color: "#AF4E96"
            },
            {
                label: "direct traffic",
                data: 18.6,
                color: "#DA5430"
            },
            {
                label: "other",
                data: 10,
                color: "#FEE074"
            }
        ]

        function drawPieChart(placeholder, data, position) {
            $.plot(placeholder, data, {
                series: {
                    pie: {
                        show: true,
                        tilt: 0.8,
                        highlight: {
                            opacity: 0.25
                        },
                        stroke: {
                            color: '#fff',
                            width: 2
                        },
                        startAngle: 2
                    }
                },
                legend: {
                    show: true,
                    position: position || "ne",
                    labelBoxBorderColor: null,
                    margin: [-30, 15]
                },
                grid: {
                    hoverable: true,
                    clickable: true
                }
            })
        }
        drawPieChart(placeholder, data);

        /**
         we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
         so that's not needed actually.
         */
        placeholder.data('chart', data);
        placeholder.data('draw', drawPieChart);


        //pie chart tooltip example
        var $tooltip = $("<div class='tooltip top in'><div class='tooltip-inner'></div></div>").hide().appendTo('body');
        var previousPoint = null;

        placeholder.on('plothover', function(event, pos, item) {
            if (item) {
                if (previousPoint != item.seriesIndex) {
                    previousPoint = item.seriesIndex;
                    var tip = item.series['label'] + " : " + item.series['percent'] + '%';
                    $tooltip.show().children(0).text(tip);
                }
                $tooltip.css({
                    top: pos.pageY + 10,
                    left: pos.pageX + 10
                });
            } else {
                $tooltip.hide();
                previousPoint = null;
            }

        });

        /////////////////////////////////////
        $(document).one('ajaxloadstart.page', function(e) {
            $tooltip.remove();
        });




        var d1 = [];
        for (var i = 0; i < Math.PI * 2; i += 0.5) {
            d1.push([i, Math.sin(i)]);
        }

        var d2 = [];
        for (var i = 0; i < Math.PI * 2; i += 0.5) {
            d2.push([i, Math.cos(i)]);
        }

        var d3 = [];
        for (var i = 0; i < Math.PI * 2; i += 0.2) {
            d3.push([i, Math.tan(i)]);
        }


        var sales_charts = $('#sales-charts').css({
            'width': '100%',
            'height': '220px'
        });
        $.plot("#sales-charts", [{
                label: "Domains",
                data: d1
            },
            {
                label: "Hosting",
                data: d2
            },
            {
                label: "Services",
                data: d3
            }
        ], {
            hoverable: true,
            shadowSize: 0,
            series: {
                lines: {
                    show: true
                },
                points: {
                    show: true
                }
            },
            xaxis: {
                tickLength: 0
            },
            yaxis: {
                ticks: 10,
                min: -2,
                max: 2,
                tickDecimals: 3
            },
            grid: {
                backgroundColor: {
                    colors: ["#fff", "#fff"]
                },
                borderWidth: 1,
                borderColor: '#555'
            }
        });


        $('#recent-box [data-rel="tooltip"]').tooltip({
            placement: tooltip_placement
        });

        function tooltip_placement(context, source) {
            var $source = $(source);
            var $parent = $source.closest('.tab-content')
            var off1 = $parent.offset();
            var w1 = $parent.width();

            var off2 = $source.offset();
            //var w2 = $source.width();

            if (parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2))
                return 'right';
            return 'left';
        }


        $('.dialogs,.comments').ace_scroll({
            size: 300
        });


        //Android's default browser somehow is confused when tapping on label which will lead to dragging the task
        //so disable dragging when clicking on label
        var agent = navigator.userAgent.toLowerCase();
        if (ace.vars['touch'] && ace.vars['android']) {
            $('#tasks').on('touchstart', function(e) {
                var li = $(e.target).closest('#tasks li');
                if (li.length == 0)
                    return;
                var label = li.find('label.inline').get(0);
                if (label == e.target || $.contains(label, e.target))
                    e.stopImmediatePropagation();
            });
        }

        $('#tasks').sortable({
            opacity: 0.8,
            revert: true,
            forceHelperSize: true,
            placeholder: 'draggable-placeholder',
            forcePlaceholderSize: true,
            tolerance: 'pointer',
            stop: function(event, ui) {
                //just for Chrome!!!! so that dropdowns on items don't appear below other items after being moved
                $(ui.item).css('z-index', 'auto');
            }
        });
        $('#tasks').disableSelection();
        $('#tasks input:checkbox').removeAttr('checked').on('click', function() {
            if (this.checked)
                $(this).closest('li').addClass('selected');
            else
                $(this).closest('li').removeClass('selected');
        });


        //show the dropdowns on top or bottom depending on window height and menu position
        $('#task-tab .dropdown-hover').on('mouseenter', function(e) {
            var offset = $(this).offset();

            var $w = $(window)
            if (offset.top > $w.scrollTop() + $w.innerHeight() - 100)
                $(this).addClass('dropup');
            else
                $(this).removeClass('dropup');
        });

    })
</script>
@endsection