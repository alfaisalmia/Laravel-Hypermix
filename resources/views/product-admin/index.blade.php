@extends('layouts.main')
@section('title', 'Product List - Hyper mix')
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
                        <h3 class="header smaller lighter blue">List of all products</h3>
                        <div class="table-header">
                            Results for Latest products
                            <div class="pull-right tableTools-container"><a href="{{route('product.create') }}" class="btn btn-white btn-primary"><i class="fa fa-plus"></i>&nbsp;Add new product</a></div>
                        </div>

                        <!-- div.table-responsive -->

                        <!-- div.dataTables_borderWrap -->
                        <div>
                            <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Sr.No</th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Brand Name</th>
                                        <th>Image</th>
                                        <th>Price ($)</th>
                                        <th   style="width: 8%;">Manage</th>
                                    </tr>
                                </thead>                           <tbody>
                                    @foreach ($productsAll as $index =>$pa)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td style="width: 22%;">{{$pa->product_title}}</td>
                                        <td>{{$pa->product_availablity}}</td>
                                        <td>{{$pa->brand_name}}</td>
                                        <td> <img src="{{URL('/')}}/public/uploads/products/{{$pa->product_image}}" class="msg-photo" alt="" style="width: 70px; height:40px;" /></td>
                                        <td>Regular Price : &nbsp;{{$pa->regular_price}}<br>
                                    Current Prict  : &nbsp;{{$pa->current_price}}</td>
                                        <td>
                                            <div class="hidden-sm hidden-xs action-buttons">
                                                <a class="blue" href="#">
                                                    <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                </a>

                                                <a class="green" href="{{route('product.edit',$pa->id)}}">
                                                    <i class="ace-icon fa fa-pencil bigger-130" title="Edit"></i>
                                                </a>

                                                <a class="red" title="Delete" href="{{route('product.destroy',$pa->id)}}" >
                                                    <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
