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
                    <a href="{{ route('users.index')}}">Users</a>
                </li>
                <li class="active">Create a new User</li>
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
                <div class="panel-heading">Add a new user</div>
                <div class="panel-body ">
                    <div class="row">
                        <div class="col-xs-12">
                            <!-- PAGE CONTENT BEGINS -->
                            <form class="form-horizontal" role="form" method="POST" action="{{ route('users.store') }}">
                                @csrf

                                <div class="col-sm-3">
                                    <label for="form-field-mask-2">{{ __('Username') }}</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="ace-icon fa fa-pencil-square"></i>
                                        </span>
                                        <input class="form-control input-mask-phone @error('username') is-invalid @enderror"  type="text" id="form-field-mask-2 username" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus />
                                        @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                </div>

                                <div class="col-sm-3">
                                    <div>
                                        <label for="form-field-mask-2">{{ __('First Name') }}</label>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="ace-icon fa fa-phone"></i>
                                            </span>
                                            <input class="form-control input-mask-phone @error('first_name') is-invalid @enderror"  type="text" id="form-field-mask-2 first_name" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus />
                                            @error('first_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div>
                                        <label for="form-field-mask-2">{{ __('Last Name') }}</label>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="ace-icon fa fa-text-height"></i>
                                            </span>
                                            <input class="form-control input-mask-phone @error('last_name') is-invalid @enderror"  type="text" id="form-field-mask-2 last_name" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus />
                                            @error('last_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div>
                                        <label for="form-field-mask-2">{{ __('E-Mail Address') }}</label>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="ace-icon fa fa-envelope"></i>
                                            </span>
                                            <input class="form-control input-mask-phone @error('email') is-invalid @enderror"  type="text" id="form-field-mask-2 email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3">

                                    <label for="form-field-mask-2">{{ __('Password') }}</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="ace-icon fa fa-key"></i>
                                        </span>
                                        <input class="form-control input-mask-phone @error('password') is-invalid @enderror"  type="text" id="form-field-mask-2 password" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus />
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-3">

                                    <label for="form-field-mask-2">{{ __('Type') }}</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="ace-icon fa fa-key"></i>
                                        </span>
                                        <select class="form-control" name="type">
                                            <option value="">Select Type</option>
                                            <option value="customer">Customer</option>
                                            <option value="admin">Admin</option>
                                        </select>

                                        @error('type')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>



                                <div class="col-sm-3">
                                    <div class="input-group">
                                        <div class="clearfix button_sytem">
                                            <button type="submit"  class="btn-sm btn btn-success "><i class="ace-icon fa fa-check bigger-110"></i>{{ __('Register') }}</button>
                                            <a href="{{route('users.index') }}" class="btn-sm btn btn-primary "><i class="ace-icon fa fa-undo bigger-110"></i>Reset/Back </a>
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

