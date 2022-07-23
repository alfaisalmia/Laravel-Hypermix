@extends('layouts.main')
@section('title', 'Raffle ticket')
@section('content')


<div class="main-content">
    <div class="main-content-inner">
        <div class="page-content">
            <div class="panel panel-primary">
                <div class="panel-heading">Add new raffle</div>
                <div class="panel-body ">
                    <div class="row">
                        <div class="col-xs-12">
                            <!-- PAGE CONTENT BEGINS -->
                            <form class="form-horizontal" role="form" method="POST" action="{{ route('raffleticket.store') }}">
                                @csrf

                                <div class="col-sm-3">
                                    <label for="form-field-mask-2">{{ __('Title Name') }}</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="ace-icon fa fa-pencil-square"></i>
                                        </span>
                                        <input class="form-control input-mask-phone @error('title') is-invalid @enderror" type="text" id="form-field-mask-2 title" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus />
                                        @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                </div>

                                <div class="col-sm-3">
                                    <div>
                                        <label for="form-field-mask-2">{{ __('Start Date') }}<span style="color:red">YYYY-MM-DD</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="ace-icon fa fa-calendar"></i>
                                            </span>
                                            <input class="form-control input-mask-phone @error('start_date') is-invalid @enderror" type="text" id="form-field-mask-2 date" name="start_date" value="{{ old('start_date') }}" required autocomplete="start_date" autofocus />
                                            @error('start_date')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div>
                                        <label for="form-field-mask-2">{{ __('End Date') }} <span style="color:red">YYYY-MM-DD</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="ace-icon fa fa-calendar"></i>
                                            </span>
                                            <input class="form-control input-mask-phone @error('end_date') is-invalid @enderror" type="text" id="form-field-mask-2 end_date datetimepicker1" name="end_date" value="{{ old('end_date') }}" required autocomplete="end_date" autofocus />
                                            @error('end_date')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div>
                                        <label for="form-field-mask-2">{{ __('Price') }}</label>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="ace-icon fa fa-money"></i>
                                            </span>
                                            <input class="form-control input-mask-phone @error('price') is-invalid @enderror" type="text" id="form-field-mask-2 price" name="price" value="{{ old('price') }}" required autocomplete="price" autofocus />
                                            @error('price')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">

                                    <label for="form-field-mask-2">{{ __('Status') }}</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="ace-icon fa fa-key"></i>
                                        </span>
                                        <select class="form-control" name="status">
                                            <option value="Running">Running</option>
                                            <option value="Raffle Drawed">Raffle Drawed</option>
                                            <option value="Waiting For Draw">Waiting For Draw </option>
                                            <option value="Raffle Closed">Raffle Closed </option>
                                        </select>

                                        @error('type')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-3">

                                    <label for="form-field-mask-2">{{ __('First Ticket  No') }}</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="ace-icon fa fa-ticket"></i>
                                        </span>
                                        <input class="form-control input-mask-phone @error('first_ticket_no') is-invalid @enderror" type="text" id="form-field-mask-2 first_ticket_no" name="first_ticket_no" value="{{ old('first_ticket_no') }}" required autocomplete="first_ticket_no" autofocus />
                                        @error('first_ticket_no')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-3">

                                    <label for="form-field-mask-2">{{ __('Last Ticket  No') }}</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="ace-icon fa fa-ticket"></i>
                                        </span>
                                        <input class="form-control input-mask-phone @error('last_ticket_no') is-invalid @enderror" type="text" id="form-field-mask-2 last_ticket_no" name="last_ticket_no" value="{{ old('last_ticket_no') }}" required autocomplete="last_ticket_no" autofocus />
                                        @error('last_ticket_no')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>




                                <div class="col-sm-3">
                                    <div class="input-group">
                                        <div class="clearfix button_sytem">
                                            <button type="submit" class="btn-sm btn btn-success "><i class="ace-icon fa fa-check bigger-110"></i>{{ __('Save') }}</button>
                                            <a href="{{ url()->previous() }}" class="btn-sm btn btn-primary "><i class="ace-icon fa fa-undo bigger-110"></i>Reset/Back </a>
                                        </div>
                                    </div>
                                </div>


                            </form>
                        </div><!-- /.col -->
                    </div><!-- /.row -->

                </div>
            </div>

            <div class="page-header">
            </div><!-- /.page-header -->


        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->

<script type="text/javascript">
         $(function () {
             $('#datetimepicker1').datetimepicker();
         });
      </script>
@endsection