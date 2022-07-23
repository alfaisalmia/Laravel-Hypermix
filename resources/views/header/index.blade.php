@extends('layouts.main')

@section('content')

<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="{{ route('home')}} ">Home</a>
                </li>

                <li>
                    <a href="#">Header</a>
                </li>
            </ul><!-- /.breadcrumb -->


        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="">
                            @if (Session::has('update'))
                            <script>
                                alertify.success('Successfully Updated');
                            </script>
                            @endif
                        </div>
                        <div class="col-xs-12">
                            <h3 class="header smaller lighter blue">Website Header Section</h3>

                            <div class="clearfix">
                              <!--   <a href="header/create" class="btn btn-white btn-primary">Create State</a> -->
                                <div class="pull-right tableTools-container"></div>
                            </div>
                            <div class="table-header">
                                Showing your site identity. You can change it now.
                            </div>

                            <!-- div.table-responsive -->

                            <!-- div.dataTables_borderWrap -->
                            <div>
                                <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Site Title</th>
                                            <th>Site Tagline</th>
                                            <th>Site Logo</th>
                                            <th>Site favicon</th>
                                            <th>Site Logo Name</th>
                                            <th>Background Image</th>
                                            <th>Manage</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($headers as $head)
                                        <tr>
                                            <td class="center">
                                                <span class="lbl"> {{$head->site_title}}</span>
                                            </td>

                                            <td>{{$head->site_tagline}}</td>
                                            <td><img src="{{asset('public/uploads/images/'.$head->site_logo)}}" class="msg-photo" alt="{{$head->site_logo_name}}" width="100px" height="100px" /></td>
                                            <td><img src="{{asset('public/uploads/images/'.$head->site_icon)}}" class="msg-photo" alt="{{$head->site_logo_name}}" width="100px" height="100px" /></td>
                                            <td>{{$head->site_logo_name}}</td>
                                            <td><img src="{{asset('public/uploads/images/'.$head->background_image)}}" class="msg-photo" alt="{{$head->background_image}}" width="100px" height="100px" /></td>

                                            <td>
                                                <div class="hidden-sm hidden-xs btn-group">
                                                    <a href="{{route('header.edit',$head->id)}}" class="btn btn-xs btn-info" title="Edit">
                                                        <i class="ace-icon fa fa-pencil bigger-120"></i>
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