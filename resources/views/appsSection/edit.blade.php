@extends('layouts.main')
@section('title', 'Apps Section Edit')
@section('content')
<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="#">Home</a>
                </li>

                <li>
                    <a href="#">Apps Section</a>
                </li>
            </ul><!-- /.breadcrumb -->


        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-xs-12">
                    <h3 class="header smaller lighter blue">Update apps section</h3>
                    <!-- PAGE CONTENT BEGINS -->

                    <form class="form-horizontal" role="form" method="POST" id="postform" action="{{ route('appsection.update',$apps->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right" for="form-field-1">Video Url</label>
                            <div class="col-sm-10">
                                <input class="form-control input-mask-phone @error('video_url') is-invalid @enderror" type="text" id="form-field-mask-2 name" name="video_url" value="{{ old('video_url', $apps->video_url) }}" required autocomplete="video_url" autofocus />
                                @error('video_url')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right" for="form-field-1">Android Apps Url</label>
                            <div class="col-sm-10">
                                <input type="text" id="form-field-1-1" placeholder="Android url" class="form-control" name="android_url" value="{{ old('android_url', $apps->android_url) }}" required autocomplete autofocus />
                                @error('android_url')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="space-4"></div>

                        
                        <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right" for="form-field-1">iOS Apps Url</label>
                            <div class="col-sm-10">
                                <input type="text" id="form-field-1-1" placeholder="iOS Apps url" class="form-control" name="ios_url" value="{{ old('ios_url', $apps->ios_url) }}" required autocomplete autofocus />
                                @error('ios_url')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="space-4"></div>

                        <div class="col-sm-3">
                            <div class="input-group">
                                <div class="clearfix button_sytem">
                                    <button type="submit" class="btn-sm btn btn-success " id="postformSubmit"><i class="ace-icon fa fa-check bigger-110"></i>{{ __('Update') }}</button>
                                    <a href="{{route('appsection.index') }}" class="btn-sm btn btn-primary "><i class="ace-icon fa fa-undo bigger-110"></i>Back </a>
                                </div>
                            </div>
                        </div>

                        <div class="hr hr-24"></div>
                    </form>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->

@endsection

@section('scripts')

<script type="text/javascript">
    $(document).ready(function() {
      $('#postformSubmit').click(function(e) {
            // e.preventDefault();
            // alert($("#hidden").val());

         });
    });
</script>

@endsection