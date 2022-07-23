@extends('layouts.main')
@section('title', 'Apps Section')
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
                        <h3 class="header smaller lighter blue">Apps Section Details </h3>
                        <div class="table-header">
                            Results for Apps section details
                        
                        </div>

                        <!-- div.table-responsive -->

                        <!-- div.dataTables_borderWrap -->
                        <div>
                            <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Sr.No</th>
                                        <th>Video Url</th>
                                        <th>Android Apps Url</th>
                                        <th>iOS Apps Url</th>
                                        <th   style="width: 8%;">Manage</th>
                                    </tr>
                                </thead>                           <tbody>
                                    @foreach ($apps as $ap)
                                    <tr>
                                        <td>{{$ap->id}}</td>
                                        <td style="width: 22%;">{{$ap->video_url}}</td>
                                        <td>{{$ap->android_url}}
                                        </td>
                                        <td>{{$ap->ios_url}}</td>
                                        <td>
                                            <div class="hidden-sm hidden-xs action-buttons">
                                                <a class="green" href="{{route('appsection.edit',$ap->id)}}">
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
