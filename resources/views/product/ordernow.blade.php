@extends('frontend.fontend-header')
@section('title', 'Cart List')
@section('content')

<main id="main">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header " style="display: inline;">
                        <h4 style="color:#0d2735" class="text-center"> {{ __('Order Now Details ') }}</h4>
                        <hr>
                        <table class="table table-bordered">
                            <tbody>

                                <tr>
                                    <th scope="">Total Price</th>
                                    <td class="pull-right text-right">$ {{$total}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Tax</th>
                                    <td class="text-right">$ 0</td>
                                </tr>
                                <tr>
                                    <th scope="row">Delivery Charge</th>
                                    <td class="text-right">$ 10</td>
                                </tr>

                                <tr>
                                    <th scope="row"></th>
                                    <td class="text-right"></td>
                                </tr>
                                <tr>
                                    <th scope="row">Total Payable Amount</th>
                                    <td class="text-right" style="background-color: #0d2700;
color: white;">$ {{$total+10}}</td>
                                </tr>
                            </tbody>
                        </table>

                        <table class="table table-bordered">
                            <form method="POST" action="{{route('paypal')}}">
                                @csrf
                                <tr>

                                    <td>Shipping Address</td>
                                    <td colspan="2">
                                        <input type="hidden" name="total_price" value="{{$total}}"/>
                                        <input type="hidden" name="total_payable_amount" value="{{$total+10}}"/>
                                        <textarea name="shipping_address" class="form-control" placeholder="Write your address" required></textarea>
                                    </td>

                                </tr>
                                <tr>
                                    <td colspan="3" class="text-center" style="background-color: #BE290B; color:white">Payment Method</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <div class="radio">
                                            <label><input type="radio" name="payment_method" checked value="paypal">
                                                <img src="{{URL('/')}}/public/assets/fontend-assets/paypal.jpg" class="img-fluid" alt="Paypal" style="width:40% ; height:auto"> </label>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td><button type="submit" class="btn btn-primary pull-right">Pay Now</button></td>
                                </tr>
                            </form>
                        </table>
                    </div>

                    <div class="card-body">


                    </div>
                </div>
            </div>




        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</main>


@endsection