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
                    <a href="{{route('cities.index')}}">City</a>
                </li>
            </ul><!-- /.breadcrumb -->


        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="">
                            @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{session('message')}}
                            </div>
                            @endif
                        </div>
                        <div class="col-xs-12">
                            <h3 class="header smaller lighter blue">List of all citites</h3>

                            <div class="clearfix">
                                <a href="{{route('cities.create')}}" class="btn btn-white btn-primary">Create City</a>
                                <div class="pull-right tableTools-container"></div>
                            </div>
                            <div class="table-header">
                                Results for Latest Cities
                            </div>

                            <!-- div.table-responsive -->

                            <!-- div.dataTables_borderWrap -->
                            <div>
                                <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Sr.No</th>
                                            <th class="">State Name</th>
                                            <th>City Name</th>
                                            <th class="hidden-480">Created at</th>
                                            <th class="hidden-480">Manage</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($cities as $city)
                                        <tr>
                                            <td class="center">
                                                <span class="lbl"> {{$city->id}}</span>
                                            </td> 

                                            <td>
                                                <a>{{$city->state->name }}</a>
                                            </td>
                                            <td>{{ $city->name }}</td>
                                            <td class="hidden-480">{{ $city->created_at }}</td>
                                            <td>
														<div class="hidden-sm hidden-xs btn-group">
															<button class="btn btn-xs btn-success">
																<i class="ace-icon fa fa-check bigger-120"></i>
															</button>

															<a href="{{route('cities.edit',$city->id)}}" class="btn btn-xs btn-info" title="Edit">
																<i class="ace-icon fa fa-pencil bigger-120"></i>
															</a>

															<button class="btn btn-xs btn-danger">
																<i class="ace-icon fa fa-trash-o bigger-120"></i>
															</button>

															<button class="btn btn-xs btn-warning">
																<i class="ace-icon fa fa-flag bigger-120"></i>
															</button>
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