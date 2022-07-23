@extends('layouts.main')

@section('content')
<div class="main-content">
    <div class="main-content-inner">

        <div class="page-content">
            <div class="row">
                <div class="col-xs-12">
                    <h3 class="header smaller lighter blue">Create a new Post</h3>
                    <!-- PAGE CONTENT BEGINS -->

                    <form class="form-horizontal" role="form" id="postform" enctype="multipart/form-data" action="{{ route('postblog.store') }}" method="POST">
                        @csrf


                        <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right" for="form-field-1">Post Title/Description</label>
                            <div class="col-sm-10">
                                <input type="text" id="form-field-1-1" placeholder="Post Title" class="form-control" name="post_title" required autocomplete="post_title" autofocus />
                                @error('post_title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right" for="form-field-1">Shartable Link</label>
                            <div class="col-sm-10">
                                <input type="text" id="form-field-1-1" placeholder="Post Title" class="form-control" name="post_short_desc" required autocomplete="post_short_desc" autofocus />
                                @error('post_short_desc')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="space-4"></div>

                        <div class="">

                            <div class="form-group">
                                <label class="col-sm-2 control-label no-padding-right" for="form-field-2"> Post Category </label>
                                <div class="col-sm-10">
                                    <select class="chosen-select form-control" id="form-field-select-3" data-placeholder="Choose a State..." name="category_id" style="width: 66%;" required>
                                        <option value="0" selected>Choose category</option>
                                        @foreach ($categories as $cate)
                                        <option value="{{$cate->id}}">{{$cate->category_name}}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="space-4"></div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label no-padding-right" for="form-input-">Post Image</label>

                                <div class="col-sm-10">
                                    <input class="form-control" type="file" id="formFile" name="post_image" style="width:66%">
                                    @error('post_image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <span style="font-style: italic; color:red">Image size should be (550px x 250px) for better uses.</span>
                                </div>
                            </div>
                            
                        </div>
                        <div class="sdfa">
                            <img src="{{asset('public/assets/images/no-image.png')}}" class="msg-photo" alt="" style="width: 315px; height:87px;" />
                        </div>


                        <div class="space-4"></div>
                        <!--                         <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right" for="form-input-"> Post Secondary Image </label>

                            <div class="col-sm-10">
                                <div class="mb-3">
                                    <input class="form-control" type="file" id="formFile">
                                </div>

                            </div>
                        </div> -->


                        <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right" for="form-input-"> Post Description </label>

                            <div class="col-sm-10">
                                <textarea type="" type="text" class="col-xs-10 col-sm-5" id="postDescription" value="!" name="postDescription">
</textarea>@error('postDescription')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                        </div>



                        <div class="col-sm-3">
                            <div class="input-group">
                                <div class="clearfix button_sytem">
                                    <button type="submit" class="btn-sm btn btn-success " id="postformSubmit"><i class="ace-icon fa fa-check bigger-110"></i>{{ __('Submit') }}</button>
                                    <a href="{{route('postblog.index') }}" class="btn-sm btn btn-primary "><i class="ace-icon fa fa-undo bigger-110"></i>Reset/Back </a>
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
<script>
    ClassicEditor
        .create(document.querySelector('#postDescription'))
        .catch(error => {
            console.error(error);
        });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        /*  $('#postformSubmit').click(function(e) {
             e.preventDefault();
             alert($("#postform").serialize());
             console.log($("#postform").serialize());
         }); */
    });
</script>

@endsection