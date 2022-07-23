@extends('layouts.main')

@section('content')


<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="{{ route('home')}}">Home</a>
                </li>

                <li>
                    <a href="{{ route('cities.index')}}">States</a>
                </li>

            </ul><!-- /.breadcrumb -->

            <div class="nav-search" id="nav-search">
                <form class="form-search">
                    <span class="input-icon">
                        <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
                        <i class="ace-icon fa fa-search nav-search-icon"></i>
                    </span>
                </form>
            </div><!-- /.nav-search -->
        </div>

        <div class="page-content">
            <div class="panel panel-primary">
                <div class="panel-heading">Updae a city</div>
                <div class="panel-body ">
                    <div class="row">
                        <div class="col-xs-12">
                            <!-- PAGE CONTENT BEGINS -->
                            <form class="form-horizontal" role="form" method="POST" action="{{ route('cities.store') }}">
                                @csrf

                                <div class="col-sm-3">
                                    <div>
                                    <div>
                                            <label for="form-field-select-3">{{ __('Choose a state') }}</label>

                                            <br />
                                            <select class="chosen-select form-control" id="form-field-select-3" data-placeholder="Choose a State..." name="state_id">
                                            <option value="">Choose a state</option>
                                            @foreach ($states as $state)
                                            <option value="{{$state->id}}">{{$state->name}} </option>
                                            @endforeach
                                            </select>
                                        </div>
                                        @error('state_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                </div>
                                <div class="col-sm-3">
                                    <label for="form-field-mask-2">{{ __('City Name') }}</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="ace-icon fa fa-pencil-square"></i>
                                        </span>
                                        <input class="form-control input-mask-phone @error('name') is-invalid @enderror" type="text" id="form-field-mask-2 name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus />
                                        @error('name')
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
                                            <a href="{{route('cities.index') }}" class="btn-sm btn btn-primary "><i class="ace-icon fa fa-undo bigger-110"></i>Reset/Back </a>
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


@endsection