@extends('layouts.main')
@section('title', 'Product Categories')
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
                                Results for Latest products
                                <div class="pull-right tableTools-container"><a href="{{URL('/product-categories/create ')}}" class="btn btn-white btn-primary"><i class="fa fa-plus"></i>&nbsp;Add Category</a></div>
                            </div>

                            <!-- div.table-responsive -->

                            <!-- div.dataTables_borderWrap -->
                            <div>
                                <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Sl.No</th>
                                            <th>Category Name</th>
                                            <th>Manage</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($proCategories as $index =>$pa)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$pa->productCategoryName}}</td>

                                            <td>
                                                <div class="hidden-sm hidden-xs action-buttons">
                                                    <a class="green" href="{{URL('/product-categories/edit/'.$pa-> 	productCatId)}}">
                                                        <i class="ace-icon fa fa-pencil bigger-130" title="Edit"></i>
                                                    </a>

<!--                                                     <a class="red" title="Delete" href="">
                                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                    </a> -->
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