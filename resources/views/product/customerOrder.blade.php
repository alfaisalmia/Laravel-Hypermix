@extends('frontend.fontend-header')
@section('title', 'Customer Order')
@section('content')
<main id="main">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-right">Welcome {{ Auth::user()->username }} !</div>
                    <div class="card-body">
                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <a class="navbar-brand" href="#">Home</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{route('customer-order')}}">Order <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Profile</a>
                                    </li>


                                </ul>
                            </div>
                        </nav>
                        <div class="row">
                            <div class="col-sm-12">


                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td>Sl</td>
                                            <td>Product Title</td>
                                            <td>Product Image</td>
                                            <td>Shipping Address</td>
                                            <td>Delivery Status</td>
                                            <td>Payment Method</td>
                                            <td>Payment Status</td>
                                        </tr>
                                        @foreach ( $orders as $or)
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
                                </table>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>

    @endsection