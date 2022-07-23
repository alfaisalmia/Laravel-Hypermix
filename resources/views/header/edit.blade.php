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
                    <a href="{{ route('header.index')}}">Hearder</a>
                </li>

            </ul><!-- /.breadcrumb -->

            <div class="nav-search" id="nav-search">
                <form class="form-search">
                    <span class="input-icon">
                        <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input"
                            autocomplete="off" />
                        <i class="ace-icon fa fa-search nav-search-icon"></i>
                    </span>
                </form>
            </div><!-- /.nav-search -->
        </div>

        <div class="page-content">
            <div class="panel panel-primary">
                <div class="panel-heading">Update your site identity</div>
                <div class="panel-body ">
                    <div class="row">
                        <div class="col-xs-12">
                            <!-- PAGE CONTENT BEGINS -->

                            <form class="form-horizontal" role="form" method="POST"
                                action="{{ route('header.update',$header->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1">
                                        {{ __('Site Title') }}</label>

                                    <div class="col-sm-9">
                                        <input type="text" id="form-field-1 site_title" placeholder="Site Title"
                                            class="col-xs-10 col-sm-5 @error('site_title') is-invalid @enderror"
                                            name="site_title" value="{{ old('site_title', $header->site_title) }}"
                                            autocomplete="site_title" autofocus />
                                        @error('site_title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1">
                                        {{ __('Site Tagline') }}</label>

                                    <div class="col-sm-9">
                                        <textarea id="form-field-1 site_tagline" placeholder="Site Tagline"
                                            class="col-xs-10 col-sm-5 @error('site_tagline') is-invalid @enderror"
                                            name="site_tagline" value=""
                                            autocomplete="site_tagline" autofocus>{{$header->site_tagline}}</textarea>
                                        <span class="help-inline col-xs-12 col-sm-7">
                                            <span class="middle"><i><b>If your site have a tagline.</b></i></span>
                                        </span>
                                        @error('site_tagline')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1">
                                        {{ __('Site Logo') }}</label>

                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <input type="file" id="id-input-file-2 " class="col-sm-5 from-control"
                                                    name="site_logo" id="site_logo"
                                                    value="{{ old('site_logo', $header->site_logo) }}"
                                                    autocomplete="site_logo" autofocus />
                                                <span class="help-inline col-xs-12 col-sm-7">
                                                    <span class="middle"><img
                                                            src="{{asset('public/uploads/images/'.$header->site_logo)}}"
                                                            class="msg-photo" alt="{{$header->site_logo_name}}"
                                                            width="70px" height="70px" /></span>
                                                </span>
                                                @error('site_logo')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="space-4"></div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1">
                                        {{ __('Site Logo Name') }}</label>

                                    <div class="col-sm-9">
                                        <input type="text" id="form-field-1 site_logo_name" placeholder="Site Logo Name"
                                            class="col-xs-10 col-sm-5 @error('site_logo_name') is-invalid @enderror"
                                            name="site_logo_name"
                                            value="{{ old('site_logo_name', $header->site_logo_name) }}"
                                            autocomplete="site_logo_name" autofocus />
                                        <span class="help-inline col-xs-12 col-sm-7">
                                            <span class="middle"><i><b>Input site logo name for your site SEO
                                                        Friendly</b></i></span>
                                        </span>
                                        @error('site_logo_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1">
                                        {{ __('Site icon') }}</label>

                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <input type="file" id="id-input-file-2 " class="col-sm-5 from-control"
                                                    name="site_icon" id="site_icon"
                                                    value="{{ old('site_icon', $header->site_icon) }}"
                                                    autocomplete="site_icon" autofocus />
                                                <span class="help-inline col-xs-12 col-sm-7">
                                                    <span class="middle"><img
                                                            src="{{asset('public/uploads/images/'.$header->site_icon)}}"
                                                            class="msg-photo" alt="{{$header->site_icon}}" width="50px"
                                                            height="50px" /></span>
                                                </span>
                                                @error('site_icon')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="form-group">
                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1">
                                        {{ __('Header Background Image') }}</label>

                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <input type="file" id="id-input-file-2 " class="col-sm-5 from-control"
                                                    name="background_image" id="background_image"
                                                    value="{{ old('background_image', $header->background_image) }}"
                                                    autocomplete="background_image" autofocus />
                                                <span class="help-inline col-xs-12 col-sm-7">
                                                    <span class="middle"><img
                                                            src="{{asset('public/uploads/images/'.$header->background_image)}}"
                                                            class="msg-photo" alt="{{$header->site_logo_name}}" width="100px"
                                                            height="70px" /></span>
                                                </span>

                                                @error('background_image')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="space-4"></div>




                                <div class="col-sm-6 col-offset-6">
                                    <div class="input-group">
                                        <div class="clearfix button_sytem">
                                            <button type="submit" class="btn-sm btn btn-success "><i
                                                    class="ace-icon fa fa-check bigger-110"></i>{{ __('Update') }}</button>
                                            <a href="" class="btn-sm btn btn-primary "><i
                                                    class="ace-icon fa fa-undo bigger-110"></i>Reset/Back </a>
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
@push('scripts')
<script>
alert('hi');
</script>
@endpush