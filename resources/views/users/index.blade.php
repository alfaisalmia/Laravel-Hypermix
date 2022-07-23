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
                    <a href="#">Tables</a>
                </li>
                <li class="active">Simple &amp; Dynamic</li>
            </ul><!-- /.breadcrumb -->


        </div>

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
                        </div>
                        <div class="col-xs-12">
                            <h3 class="header smaller lighter blue">List of all Users</h3>

                            <div class="clearfix">
                                <div class="pull-right tableTools-container"></div>
                            </div>
                            <div class="table-header">
                                Results for Latest Registered Users
                                <div class="pull-right tableTools-container"><a href="{{route('users.create') }}" class="btn btn-white btn-primary">Add User</a></div>
                            </div>

                            <!-- div.table-responsive -->

                            <!-- div.dataTables_borderWrap -->
                            <div>
                                <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th> Sl N</th>
                                            <th class="">Username</th>
                                            <th>First Name</th>
                                            <th class="hidden-480">Last name</th>

                                            <th>
                                                <i class="ace-icon fa fa--o bigger-110 hidden-480"></i>
                                                Email
                                            </th>

                                            <th class="hidden-480">Status</th>
                                            <th class="hidden-480">Manage</th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($users as $user)
                                        <tr>
                                            <td class="center">
                                                <span class="lbl"> {{$loop->iteration}}</span>
                                            </td>

                                            <td>{{$user->username }}</td>
                                            <td>{{ $user->first_name }}</td>
                                            <td class="hidden-480">{{ $user->last_name }}</td>
                                            <td>{{ $user->email }}</td>

                                            <td>
                                                @if ($user->type == 'customer')
                                                <span class="label label-sm label-warning">Customer</span>
                                                @else
                                                <span class="label label-sm label-success">Admin</span>
                                                @endif
                                               
                                            </td>

                                            <td>
                                                <div class="hidden-sm hidden-xs action-buttons">
                                                    <a class="green" href="{{route('users.edit',$user->id)}}">
                                                        <i class="ace-icon fa fa-pencil bigger-130" title="Edit"></i>
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