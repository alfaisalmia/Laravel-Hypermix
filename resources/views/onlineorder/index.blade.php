@extends('layouts.main')
@section('title', 'Order List')
@section('content')
<div class="main-content">
    <div class="main-content-inner">
    <div class="page-content">
        <div class="row">
            <div class="col-xs-12">
                <div class="row">
                    <div class="">
                    @if (Session::has('create'))
                    <script>
                        alertify.success('Successfully Added');
                    </script>
                    @endif
                    @if (Session::has('update'))
                    <script>
                        alertify.success('Successfully Updated');
                    </script>
                    @endif
                    @if (Session::has('delete'))
                    <script>
                        alertify.success('Successfully Deleted');
                    </script>
                    @endif
                    </div>
                    <div class="col-xs-12">
                        <div class="table-header">
                            Results for latest orders
                        </div>
                        <div>
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
                                        <td>Manage</td>
                                    </tr>
                                </thead>                               <tbody>
  @foreach ($orders as $index=>$od)
                                    <tr>
                                        <td>{{ $index+ $orders->firstItem() }}</td>
                                        <td>{{$od->brand_name}}</td>
                                        <td>{{$od->product_code}}</td>
                                        <td>{{$od->shipping_address}}</t>
                                        <td>
                                            @if ($od->status == 'Pending')
                                            <span class="label label-warning">Pending</span>
                                            @else
                                            <span class="label label-inverse arrowed">Delivered</span>
                                            @endif
                                            </td>
                                        <td>
                                            {{$od->payment_method}}
                                        </td>
                                        <td>

                                            @if ($od->payment_status == 'Success')
                                            <span class="label label-success arrowed-in arrowed-in-right">Success</span>
                                            @else
                                            <span class="label label-warning arrowed-in arrowed-in-right">Unsuccess</span>
                                            @endif
                                        </td>
                                        <td>{{$od->first_name}} {{ $od->last_name}}</t>
                                        <td><a href="mailto:{{$od->email}}">{{$od->email}}</a> </t>
                                        <td>{{ Carbon\Carbon::parse($od->created_at)->format('d M Y') }}</td>
                                        <td>
                                        @if ($od->status == 'Pending')
                                           <a href="{{route('delivery',$od->id)}} "> <span class="label label-info">Deliver</span> </a>
                                            @else
                                            <span class="label label-inverse arrowed"></span>
                                            @endif

                                        </td>
                                    </tr>

                                    @endforeach
                                    
                                </tbody>
                            </table>
                            <div class="pull-right">
                            {{ $orders->links('pagination::bootstrap-4') }}
                            </div>
                        </div>
                    </div>
                </div>




            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>

    <!-- PAGE CONTENT ENDS -->
</div><!-- /.col -->
</div><!-- /.row -->
</div><!-- /.page-content -->
</div>
</div><!-- /.main-content -->


@endsection
