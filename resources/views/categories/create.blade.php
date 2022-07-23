@extends('layouts.main')

@section('content')


<div class="main-content">
    <div class="main-content-inner">
            <div class="nav-search" id="nav-search">
            </div><!-- /.nav-search -->
        </div>

        <div class="page-content">
            <div class="panel panel-primary">
                <div class="panel-heading">Add a category</div>
                <div class="panel-body ">
                    <div class="row">
                        <div class="col-xs-12">
                            <!-- PAGE CONTENT BEGINS -->
                            <form class="form-horizontal" role="form" method="POST" action="{{ route('categories.store') }}">
                                @csrf

                                <div class="col-sm-3">
                                    <label for="form-field-mask-2">{{ __('Category Name') }}</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="ace-icon fa fa-pencil-square"></i>
                                        </span>
                                        <input class="form-control input-mask-phone @error('category_name') is-invalid @enderror"  type="text" id="form-field-mask-2 category_name" name="category_name" value="{{ old('category_name') }}" required autocomplete="category_name" autofocus />
                                        @error('category_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                </div>

                                <div class="col-sm-3">
                                    <div class="input-group">
                                        <div class="clearfix button_sytem">
                                            <button type="submit"  class="btn-sm btn btn-success "><i class="ace-icon fa fa-check bigger-110"></i>{{ __('Store') }}</button>
                                            <a href="{{route('categories.index') }}" class="btn-sm btn btn-primary "><i class="ace-icon fa fa-undo bigger-110"></i>Reset/Back </a>
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

