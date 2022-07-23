@extends('layouts.main')

@section('content')


<div class="main-content">
    <div class="main-content-inner">
        <div class="page-content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="">
                            @if (Session::has('message'))
                            <script>
                                alertify.success('Successfully Added');
                            </script>
                            @endif
                            @if (Session::has('message1'))
                            <script>
                                alertify.success('Successfully Updated');
                            </script>
                            @endif
                        </div>
                        <div class="col-xs-12">
                            <h3 class="header smaller lighter blue">List of all Categories</h3>
                            <div class="table-header">
                                Results for Latest categories
                                <div class="pull-right tableTools-container"><a href="{{route('categories.create') }}" class="btn btn-white btn-primary">Add Category</a></div>

                            </div>

                            <!-- div.table-responsive -->

                            <!-- div.dataTables_borderWrap -->
                            <div>
                                <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Sr.No</th>
                                            <th class="">Category Name</th>
                                            <th class="hidden-480">Manage</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($categories as $cate)
                                        <tr>
                                            <td class="">{{$cate->id}}</td>

                                            <td>{{$cate->category_name }}</td>
                                            <td>
                                                <div class="hidden-sm hidden-xs btn-group">
                                                    <a href="{{route('categories.edit',$cate->id)}}" class="btn btn-xs btn-info" title="Edit">
                                                        <i class="ace-icon fa fa-pencil bigger-120"></i>
                                                    </a>
                                                </div>

                                                <div class="hidden-md hidden-lg">
                                                    <div class="inline pos-rel">
                                                        <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                            <i class="ace-icon fa fa-cog icon-only bigger-110"></i>dfg
                                                        </button>

                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                            <li>
                                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                    <span class="blue">
                                                                        <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                    </span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                    <span class="green">
                                                                        <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                    </span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                    <span class="red">
                                                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
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