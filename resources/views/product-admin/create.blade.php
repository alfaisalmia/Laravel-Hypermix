@extends('layouts.main')
@section('title', 'Add New Product')
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
                    <a href="#">Products</a>
                </li>
            </ul><!-- /.breadcrumb -->


        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-xs-12">
                    <h3 class="header smaller lighter blue">Add new product</h3>
                    <!-- PAGE CONTENT BEGINS -->

                    <form class="form-horizontal" role="form" id="postform" enctype="multipart/form-data" action="{{ route('product.store') }}" method="POST">
                        @csrf


                        <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right" for="form-field-1">Product Title</label>
                            <div class="col-sm-10">
                                <input type="text" id="form-field-1-1" placeholder="Product Title" class="form-control" name="product_title" required autocomplete="product_title" autofocus />
                                @error('product_title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right" for="form-field-1">Brand Name</label>
                            <div class="col-sm-10">
                                <input type="text" id="form-field-1-1" placeholder="Brand Name" class="form-control" name="brand_name" required autocomplete="brand_name" autofocus />
                                @error('brand_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="space-4"></div>
                        <div class="form-group">
                                <label class="col-sm-2 control-label no-padding-right" for="form-input-">Regular Price ($)</label>

                                <div class="col-sm-10">
                                    <input class="form-control" type="text" id="regular_price" name="regular_price" style="width:66%"  required autocomplete="regular_price" autofocus>
                                    @error('regular_price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        <div class="form-group">
                                <label class="col-sm-2 control-label no-padding-right" for="form-input-">Current Price ($)</label>

                                <div class="col-sm-10">
                                    <input class="form-control" type="text" id="current_price" name="current_price" style="width:66%"  autocomplete="current_price" autofocus>
                                    @error('current_price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        <div class="form-group">
                                <label class="col-sm-2 control-label no-padding-right" for="form-input-">Product Code</label>

                                <div class="col-sm-10">
                                    <input class="form-control" type="text" id="product_code" name="product_code" style="width:66%" required autocomplete="product_code" autofocus>
                                    @error('product_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        <div class="">

                            <div class="form-group">
                                <label class="col-sm-2 control-label no-padding-right" for="form-field-2">Product Category </label>
                                <div class="col-sm-10">
                                    <select class="chosen-select form-control" id="form-field-select-3" data-placeholder="" name="product_availablity" style="width: 66%;" required>
                                    @foreach ($product_category as $cate)
                                        <option value="{{$cate->productCatId}}">{{$cate->productCategoryName}}</option>
                                        @endforeach

                                    </select>
                                    @error('product_availablity')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="space-4"></div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label no-padding-right" for="form-input-">Product Image</label>

                                <div class="col-sm-10">
                                    <input class="form-control" type="file" id="formFile" name="product_image" style="width:66%">
                                    @error('product_image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="sdfa">
                            <img src="{{asset('public/assets/images/no-image.png')}}" class="msg-photo" alt="" style="width: 315px; height:87px;" />
                        </div>


                        <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right" for="form-input-"> Product Description </label>

                            <div class="col-sm-10">
                                <textarea type="" type="text" class="col-xs-10 col-sm-5" id="product_description" value="!" name="product_description" style="width: 100%; resize: none;">
</textarea>@error('product_description')
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
                                    <a href="{{route('product.index') }}" class="btn-sm btn btn-primary "><i class="ace-icon fa fa-undo bigger-110"></i>Reset/Back </a>
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
   /*  ClassicEditor
        .create(document.querySelector('#postDescription'))
        .catch(error => {
            console.error(error);
        }); */
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