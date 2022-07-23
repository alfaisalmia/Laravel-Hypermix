@extends('frontend.fontend-header')
@section('title', 'Cart List')
@section('content')

<main id="main">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: inline;">{{ __('Cart Listed Products') }}


                    </div>

                    <div class="card-body">

                        <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                            <tr>
                                <th>Sr.No</th>
                                <th>Title</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th style="width: 8%;">Manage</th>
                            </tr>

                            @foreach ($products as $index =>$pa)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td style="width: 52%;">{{$pa->product_title}}</td>
                                <td>{{$pa->product_price}}</td>
                                <td> <img src="{{URL('/')}}/public/uploads/products/{{$pa->product_image}}" class="msg-photo" alt="" style="width: 70px; height:40px;" /></td>

                                <td>
                                    <div class="hidden-sm hidden-xs action-buttons">
                                        <a class="red" title="Delete" href="{{route('removeCart',$pa->cart_id)}}" style="color:red">
                                            <i class="ace-icon fa fa-trash-o bigger-130" style="color:red"></i>
                                            Remove</a>
                                    </div>
                                </td>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tr>
                            @endforeach
                            <tr>
                                <td colspan="5"><a href="{{route('ordernow') }}" class="btn btn-primary pull-right">Order Now</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>




        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</main>

@endsection