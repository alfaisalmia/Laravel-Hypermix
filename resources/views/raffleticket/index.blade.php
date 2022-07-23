@extends('layouts.main')
@section('title','Raffle Ticket')
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
                            Results for latest Raffles<div class="pull-right tableTools-container"><a href="{{route('raffleticket.create') }}" class="btn btn-white btn-primary"><i class="fa fa-plus"></i>&nbsp;Add new ticket</a></div>
                        </div>
                        <div>
                            <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                            <thead>
                                    <tr>
                                        <td> Sl N</td>
                                        <td>Ticket Name</td>
                                        <td>Start Date</td>
                                        <td>End Date</t>
                                        <td>Price USD</t>
                                        <td>Status</t>
                                        <td>Start Ticket No</t>
                                        <td>End Ticket no</t>
                                        <td>Manage</td>
                                    </tr>
                                </thead>                               <tbody>
  @foreach ($raffleticket as $index=>$od)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$od->title}}</td>
                                        <td>{{$od->start_date}}</td>
                                        <td>{{$od->end_date}}</t>
                                        <td>{{$od->price}}</t>
                                        <td>{{$od->status}}</t>
                                        <td>{{$od->first_ticket_no}}</td>
                                        <td>{{$od->last_ticket_no}}</td>
                                        <td>
                                            <div class="hidden-sm hidden-xs action-buttons">
                                                <a class="green" href="{{route('raffleticket.edit',$od->id)}}">
                                                    <i class="ace-icon fa fa-pencil bigger-130" title="Edit"></i>
                                                </a>
@if ($od->status == 'Running')

@else
<a class="red" title="Delete" href="{{route('raffleticket.destroy',$od->id)}}" >
                                                    <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                </a>

@endif
                                              
                                            </div>
                                        </td>

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
