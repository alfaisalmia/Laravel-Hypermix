@extends('layouts.main')
@section('title', 'Edit New Product')
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
                    <h3 class="header smaller lighter blue">Update this product</h3>
                    <!-- PAGE CONTENT BEGINS -->

                    <form class="form-horizontal" role="form" method="POST" id="postform" enctype="multipart/form-data" action="{{ route('product.update',$product->id) }}">
                        @csrf
                        @method('PUT')


                        <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right" for="form-field-1">Product Title</label>
                            <div class="col-sm-10">
                                <input class="form-control input-mask-phone @error('product_title') is-invalid @enderror" type="text" id="form-field-mask-2 name" name="product_title" value="{{ old('product_title', $product->product_title) }}" required autocomplete="product_title" autofocus />
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
                                <input class="form-control input-mask-phone @error('brand_name') is-invalid @enderror" type="text" id="form-field-mask-2 name" name="brand_name" value="{{ old('brand_name', $product->brand_name) }}" required autocomplete="brand_name" autofocus style="width: 66%;" />
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
                                <input class="form-control input-mask-phone @error('regular_price') is-invalid @enderror" type="text" id="form-field-mask-2 name" name="regular_price" value="{{ old('regular_price', $product->regular_price) }}" required autocomplete="regular_price" autofocus style="width: 66%;" />
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
                                <input class="form-control input-mask-phone @error('current_price') is-invalid @enderror" type="text" id="form-field-mask-2 name" name="current_price" value="{{ old('current_price', $product->current_price) }}" required autocomplete="current_price" autofocus style="width: 66%;" />
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
                                <input class="form-control input-mask-phone @error('product_code') is-invalid @enderror" type="text" id="form-field-mask-2 name" name="product_code" value="{{ old('product_code', $product->product_code) }}" required autocomplete="product_code" autofocus style="width: 66%;" />
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
                                    <select class="chosen-select form-control" id="form-field-select-3" data-placeholder="" name="product_availablity" style="width: 66%;" required style="width: 66%;">

                                    @foreach ($product_category as $cate)
                                        <option value="{{$cate->productCatId}}" {{ $cate->productCatId == $product->product_category ? 'selected':''}}>{{$cate->productCategoryName}}
                                        </option>
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
                                    <input class="form-control" type="file" id="formFile" value="{{ old('product_image', $product->product_image) }}" name="product_image" style="width:66%">
                                    <input class="form-control" type="hidden" id="hidden" value="{{ old('product_image', $product->product_image) }}" name="hiddenimage" style="width:66%">
                                    @error('product_image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="sdfa">
                            @if($product->product_image)
                            <img src="{{URL('/')}}/public/uploads/products/{{$product->product_image}}" class="msg-photo" alt="" style="width: 310px; height:87px;" />
                            @else
                            <img src="{{asset('public/assets/images/no-image.png')}}" class="msg-photo" alt="" style="width: 310px; height:87px;" />
                            @endif
                        </div>


                        <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right" for="form-input-"> Product Description </label>

                            <div class="col-sm-10">
                                <textarea type="" type="text" class="col-xs-10 col-sm-5" id="product_description" value="!" name="product_description" style="width: 100%; resize: none;">{{$product->product_description}}
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