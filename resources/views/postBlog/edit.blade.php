@extends('layouts.main')

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
                    <a href="#">Post</a>
                </li>
            </ul><!-- /.breadcrumb -->


        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-xs-12">
                    <h3 class="header smaller lighter blue">Update a Post</h3>
                    <!-- PAGE CONTENT BEGINS -->

                    <form class="form-horizontal" role="form" method="POST" id="postform" enctype="multipart/form-data" action="{{ route('postblog.update',$post->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right" for="form-field-1">Post Title</label>
                            <div class="col-sm-10">
                                <input class="form-control input-mask-phone @error('post_title') is-invalid @enderror" type="text" id="form-field-mask-2 name" name="post_title" value="{{ old('post_title', $post->post_title) }}" required autocomplete="post_title" autofocus />
                                @error('post_title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right" for="form-field-1">Post Short Description</label>
                            <div class="col-sm-10">
                                <input type="text" id="form-field-1-1" placeholder="Post Title" class="form-control" name="post_short_desc" value="{{ old('post_short_desc', $post->post_short_desc) }}" required autocomplete autofocus />
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
                                        <option value="0">Choose a category </option>
                                        @foreach ($categories as $cate)
                                        <option value="{{$cate->id}}" {{ $cate->id == $post->category_id ? 'selected':''}}>{{$cate->category_name}}
                                        </option>
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
                                    
                                    <input class="form-control" type="file" id="formFile" value="{{ old('post_image', $post->post_image) }}" name="post_image" style="width:66%">
                                    <input class="form-control" type="hidden" id="hidden" value="{{ old('post_image', $post->post_image) }}" name="hiddenimage" style="width:66%">
                                    @error('post_image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="sdfa">
                            @if($post->post_image)
                            <img src="{{URL('/')}}/public/uploads/posts/{{$post->post_image}}" class="msg-photo" alt="" style="width: 310px; height:87px;" />
                            @else
                            <img src="{{asset('public/assets/images/no-image.png')}}" class="msg-photo" alt="" style="width: 310px; height:87px;" />
                            @endif
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
                                <textarea type="" type="text" class="col-xs-10 col-sm-5" id="postDescription" name="postDescription">{{$txt}}
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
                                    <button type="submit" class="btn-sm btn btn-success " id="postformSubmit"><i class="ace-icon fa fa-check bigger-110"></i>{{ __('Update') }}</button>
                                    <a href="{{route('postblog.index') }}" class="btn-sm btn btn-primary "><i class="ace-icon fa fa-undo bigger-110"></i>Back </a>
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
      $('#postformSubmit').click(function(e) {
            // e.preventDefault();
            // alert($("#hidden").val());

         });
    });
</script>

@endsection