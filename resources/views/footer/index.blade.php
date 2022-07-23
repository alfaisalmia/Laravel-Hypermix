@extends('layouts.main')
@section('title', 'Footer Section- HyperMix')
@section('content')

<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="{{ route('home')}} ">Home</a>
                </li>

                <li>
                    <a href="{{route('footer.index')}}">Footer</a>
                </li>
            </ul><!-- /.breadcrumb -->


        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="">
                            @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{session('message')}}
                            </div>
                            @endif
                        </div>
                        <div class="col-xs-12">
                            <h5 class="">Footer Section Setting</h5>
                        </div>

                        <div class="row">
                            <div class="col-sm-9">
                                <div class="tabbable tabs-left">
                                    <ul class="nav nav-tabs" id="myTab3">
                                        <li class="active">
                                            <a data-toggle="tab" href="#usefullink">
                                                <i class="pink ace-icon fa fa-tachometer bigger-110"></i>
                                                Useful Links
                                            </a>
                                        </li>

                                        <li>
                                            <a data-toggle="tab" href="#service">
                                                <i class="blue ace-icon fa fa-user bigger-110"></i>
                                                Our Services
                                            </a>
                                        </li>

                                        <li>
                                            <a data-toggle="tab" href="#contactus">
                                                <i class="ace-icon fa fa-rocket"></i>
                                                Contact Us
                                            </a>
                                        </li>

                                        <li>
                                            <a data-toggle="tab" href="#aboutus">
                                                <i class="ace-icon fa fa-rocket"></i>
                                                About Us
                                            </a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#socialLink">
                                                <i class="ace-icon fa fa-rocket"></i>
                                                Social Links
                                            </a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#copyright">
                                                <i class="ace-icon fa fa-rocket"></i>
                                                Copyright Text
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="tab-content">
                                        <div id="usefullink" class="tab-pane in active">
                                            <form class="" id="formSave">
                                                @csrf
                                                <table id="RcptGroup" class="table" width="100%" border="1">
                                                    <thead>
                                                        <tr>
                                                            <th width="4%"> <button id="addMoreRcpt" type="button" class="btn btn-primary "><i class="fa fa-plus-circle" aria-hidden="true"></i></button></th>
                                                            <th>Title<span class="color">*</span></th>
                                                            <th>Slug (Slug should be a single word like 'about' )<span class="color">*</span></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $z = 1; ?>
                                                        @foreach ($usefulLinks as $ul)
                                                        <tr>
                                                            <td>
                                                                <button type="button" class="deleteRow btn btn-danger btn-sm" style="border-radius: 50%; padding:3.5px 8px; margin:2px 2px;"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                            </td>
                                                            <td>
                                                                <input name="title[{{$z}}]" id="title[{{$z}}]" class="form-control input-sm" value="{{ $ul->title }}" />
                                                            </td>
                                                            <td>
                                                                <input name="link[{{$z}}]" id="link[{{$z}}]" class="form-control input-sm" value="{{ $ul->links }}" />
                                                            </td>
                                                        </tr>
                                                        <?php $z++; ?>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </form>
                                            <div class="col-sm-12 pull-right">
                                                <button type="button" id="updatebutton" class="btn btn-sm btn-primary" onclick="useFulLinkUpdate()">Update <span class="glyphicon glyphicon-floppy-save"></span>
                                            </div>
                                        </div>
                                        <!--    <div id="usefullink" class="tab-pane in active">
                                            <form class="" id="formSave">
                                            @csrf
                                            <table id="RcptGroup" class="table" width="100%" border="1">
                                                <thead>
                                                    <tr>
                                                        <th width="4%"> <button id="addMoreRcpt" type="button" class="btn btn-success "><i class="fa fa-plus-circle" aria-hidden="true"></i></button></th>
                                                        <th>Title<span class="color">*</span></th>
                                                        <th>Link<span class="color">*</span></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <button type="button" class="deleteRow btn btn-danger btn-sm" style="border-radius: 50%; padding:3.5px 8px; margin:2px 2px;"><i class="fa fa-trash-o" aria-hidden="true" ></i></button>
                                                        </td>
                                                        <td>
                                                            <input name="title[1]" id="title[1]" class="form-control input-sm" />
                                                        </td>
                                                        <td>
                                                            <input name="link[1]" id="link[1]" class="form-control input-sm" />
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            </form>
                                            <div class="col-sm-12 pull-right">
                                                <button type="button" id="submist" class="btn btn-sm btn-success" onclick="useFulLinksave()"> Submit <span class="glyphicon glyphicon-floppy-save"></span>
                                            </div>
                                        </div> -->
                                        <!-- Service------------- -->
                                        <div id="service" class="tab-pane in">
                                            <form class="" id="serviceForm">
                                                @csrf
                                                <table id="RcptService" class="table" width="100%" border="1">
                                                    <thead>
                                                        <tr>
                                                            <th width="4%"> <button id="addMoreRcptS" type="button" class="btn btn-primary "><i class="fa fa-plus-circle" aria-hidden="true"></i></button></th>
                                                            <th>Service Title<span class="color">*</span></th>
                                                            <th>Service Link / Slug <span class="color">*</span></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $z = 1; ?>
                                                        @foreach ($serviceLists as $sl)
                                                        <tr>
                                                            <td>
                                                                <button type="button" class="deleteRows btn btn-danger btn-sm" style="border-radius: 50%; padding:3.5px 8px; margin:2px 2px;"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                            </td>
                                                            <td>
                                                                <input name="service_title[{{$z}}]" id="service_title[{{$z}}]" class="form-control input-sm" value="{{ $sl->service_title}}" />
                                                            </td>
                                                            <td>
                                                                <input name="service_link[{{$z}}]" id="service_link[{{$z}}]" class="form-control input-sm" value="{{ $sl->service_link }}" />
                                                            </td>
                                                        </tr>
                                                        <?php $z++; ?>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </form>
                                            <div class="col-sm-12 pull-right">
                                                <button type="button" id="updateServ" class="btn btn-sm btn-primary" onclick="updateServ()">Update <span class="glyphicon glyphicon-floppy-save"></span>
                                            </div>
                                        </div>

                                        <!-- ------ Contact Us Section --------------------- -->
                                        <div id="contactus" class="tab-pane">
                                            @foreach ($contactInfo as $con)
                                            <form class="form-horizontal" role="form" method="POST" action="{{ route('footer.update',$con->id) }}">
                                                @csrf
                                                @method('PUT')
                                                <!-- <form class="form-horizontal" role="form"> -->
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label no-padding-right" for="form-field-1">Address Line 1 </label>
                                                    <div class="col-sm-10">
                                                        <input type="text" id="form-field-1" placeholder="Address" class="col-xs-10 col-sm-5" value="{{ old('address_line1', $con->address_line1) }}" name="address_line1" />
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Address Line 2 </label>

                                                    <div class="col-sm-10">
                                                        <input type="text" id="form-field-1" placeholder="Address Line" class="col-xs-10 col-sm-5" name="address_line2" value="{{ old('address_line2', $con->address_line2) }}" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Address Line 3 </label>

                                                    <div class="col-sm-10">
                                                        <input type="text" id="form-field-1" placeholder="Address Line" class="col-xs-10 col-sm-5" name="address_line3" value="{{ old('address_line3', $con->address_line3) }}" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label no-padding-right" for="form-field-1">Phone</label>

                                                    <div class="col-sm-10">
                                                        <input type="text" id="form-field-1" placeholder="Phone" class="col-xs-10 col-sm-5" name="phone" value="{{ old('phone', $con->phone) }}" />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label no-padding-right" for="form-field-1">Email</label>

                                                    <div class="col-sm-10">
                                                        <input type="text" id="form-field-1" placeholder="Email" class="col-xs-10 col-sm-5" name="email" value="{{ old('email', $con->email) }}" />
                                                    </div>
                                                </div>
                                                <div class="text-center">
                                                    <button class="btn btn-sm btn-primary">Update</button>
                                                </div>
                                            </form>
                                            @endforeach
                                        </div>

                                        <!------ About Us -------->
                                        <div id="aboutus" class="tab-pane">
                                            @foreach ($footer_about as $fa)
                                            <form class="form-horizontal" role="form" method="POST" action="{{URL('dashboard/footer/about/'.$fa->id)}}">
                                                @csrf
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label no-padding-right" for="form-field-1">Title</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" id="form-field-1" placeholder="title" class="col-xs-10 col-sm-5" value="{{ old('title', $fa->title) }}" name="title" />
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label no-padding-right" for="form-field-1">Details</label>
                                                    <div class="col-sm-10">
                                                        <textarea type="text" id="form-field-1" placeholder="Dtails" class="col-xs-10 col-sm-5" value="" name="footer_about_text" style="resize: none; height:140px">{{ old('footer_about_text', $fa->footer_about_text) }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="text-center">
                                                    <button type="submit" id='aboutSave' class="btn btn-sm btn-primary">Update</button>
                                                </div>
                                            </form>
                                            @endforeach
                                        </div>


                                        <div id="socialLink" class="tab-pane">
                                            @foreach ($socialLinks as $sol)
                                            <form id="socialForm" class="form-horizontal" role="form" method="POST" action="">
                                                @csrf
                                                <!-- <form class="form-horizontal" role="form"> -->
                                                <input type="hidden" name="id" value="{{ $sol->id }}">
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label no-padding-right" for="form-field-1">Twitter Link</label>
                                                    <div class="col-sm-10">
                                                        <input type="url" id="form-field-1" placeholder="https://twitter.com" class="col-xs-10 col-sm-5" value="{{ old('twitter', $sol->twitter) }}" name="twitter" />
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label no-padding-right" for="form-field-1">Facebook Link</label>

                                                    <div class="col-sm-10">
                                                        <input type="text" id="form-field-1" placeholder="https://facebook.com" class="col-xs-10 col-sm-5" name="facebook" value="{{ old('facebook', $sol->facebook) }}" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label no-padding-right" for="form-field-1">Instagram Link</label>

                                                    <div class="col-sm-10">
                                                        <input type="url" id="form-field-1" placeholder="https://instagram.com" class="col-xs-10 col-sm-5" name="instagram" value="{{ old('instagram', $sol->instagram) }}" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label no-padding-right" for="form-field-1">Linkedin Link</label>

                                                    <div class="col-sm-10">
                                                        <input type="url" id="form-field-1" placeholder="https://linkedin.com/" class="col-xs-10 col-sm-5" name="linkedin" value="{{ old('linkedin', $sol->linkedin) }}" />
                                                    </div>
                                                </div>

                                                <div class="text-center">
                                                    <button id="sociallink" class="btn btn-sm btn-primary">Update</button>
                                                </div>
                                            </form>
                                            @endforeach
                                        </div>




                                        <div id="copyright" class="tab-pane">
                                            @foreach ($copys as $copy)
                                            <form id="copyrightForm" class="form-horizontal" role="form" method="POST" action="">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $copy->id }}">
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label no-padding-right" for="form-field-1">Copyright Text</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" id="form-field-1" placeholder="Copyright Text" class="col-xs-10 col-sm-5" value="{{ old('copyright', $copy->copyright) }}" name="copyright" />
                                                    </div>
                                                </div>

                                                <div class="text-center">
                                                    <button id="copyrightUpdate" class="btn btn-sm btn-primary">Update</button>
                                                </div>
                                            </form>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.col -->

                            <div class="vspace-6-sm"></div>

                        </div><!-- /.row -->

                    </div>
                </div>




            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>

    <!-- PAGE CONTENT ENDS -->
</div><!-- /.col -->




@endsection
@push('ajax_crud')

<script type="text/javascript">
    $(document).ready(function() {
        $('#sociallink').click(function(e) {
            e.preventDefault();
            $.ajax({
                type: 'post',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ URL::to('updateSocialLink')}}",
                data: $("#socialForm").serialize(), //$("#modal_form").serialize(),
                success: function(response) {
                    if (response.status == 1) {
                        alertify.success('Successfully Added');
                        location.reload();
                    }
                },
                error: function() {
                    alertify.error('Update Failed');
                }
            });

        });
        /* ---------------------------- */
        $('#copyrightUpdate').click(function(e) {
            e.preventDefault();
            $.ajax({
                type: 'post',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ URL::to('copyrightUpdate')}}",
                data: $("#copyrightForm").serialize(), //$("#modal_form").serialize(),
                success: function(response) {
                    if (response.status == 1) {
                        alertify.success('Successfully Updated');
                        location.reload();
                    }
                },
                error: function() {
                    alertify.error('Update Failed');
                }
            });

        });

        /* ---------------------------- ADD MORE BUTTOn ------------------------- */
        var counterx = 102;
        var counter = 102;
        $("#addMoreRcpt").click(function() {
            var newTextBoxRow = $(document.createElement('tr')).attr("id", 'RcptEml_' + counter);
            newTextBoxRow.append('<td><button type="button" class="deleteRow btn btn-danger btn-sm" style="border-radius: 50%; padding:3.5px 8px; margin:2px 2px;"><i class="fa fa-trash-o" aria-hidden="true" style=""></i></button></td> <td><input name="title[' + counter + ']" id="link[' + counter + ']" class="form-control input-sm" /></td><td><input name="link[' + counter + ']" id="link[' + counter + ']" class="form-control input-sm" /></td>');
            newTextBoxRow.appendTo("#RcptGroup");
            counter++;
            counterx++;
        });
        $("#RcptGroup").on("click", "button.deleteRow", function() {
            if ($("#RcptGroup tr").length > 2)
                $(this).closest("tr").remove();
        });

        $("#submist").click(function() {
            $.ajax({
                type: 'post',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ URL::to('insertUsefulLink')}}",
                data: $("#formSave").serialize(), //$("#modal_form").serialize(),
                success: function(response) {
                    if (response.status == 1) {
                        alertify.success('Successfully Updated');
                        location.reload();
                    }
                },
                error: function() {
                    alertify.error('Update Failed');
                }
            });
        });
        $("#updatebutton").click(function() {
            $.ajax({
                type: 'post',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ URL::to('insertUsefulLink')}}",
                data: $("#formSave").serialize(), //$("#modal_form").serialize(),
                success: function(response) {
                    if (response.status == 1) {
                        alertify.success('Successfully Updated');
                        location.reload();
                    }
                },
                error: function() {
                    alertify.error('Update Failed');
                }
            });
        });


      /*  --------------- Our Serveice---------- */
      var countx = 102;
        var counte = 102;
        $("#addMoreRcptS").click(function() {
            var newTextBoxRow = $(document.createElement('tr')).attr("id", 'RcptEml_' + counter);
            newTextBoxRow.append('<td><button type="button" class="deleteRows btn btn-danger btn-sm" style="border-radius: 50%; padding:3.5px 8px; margin:2px 2px;"><i class="fa fa-trash-o" aria-hidden="true" style=""></i></button></td> <td><input name="service_title[' + counte + ']" id="service_title[' + counte + ']" class="form-control input-sm" /></td><td><input name="service_link[' + counte + ']" id="service_link[' + counte + ']" class="form-control input-sm" /></td>');
            newTextBoxRow.appendTo("#RcptService");
            counte++;
            countx++;
        });
        $("#RcptService").on("click", "button.deleteRows", function() {
            if ($("#RcptService tr").length > 1)
                $(this).closest("tr").remove();
        });

        $("#updateServ").click(function() {
            $.ajax({
                type: 'post',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ URL::to('updateServiceList')}}",
                data: $("#serviceForm").serialize(), //$("#modal_form").serialize(),
                success: function(response) {
                    if (response.status == 1) {
                        alertify.success('Successfully Updated');
                        location.reload();
                    }
                },
                error: function() {
                    alertify.error('Update Failed');
                }
            });
        });

    });
</script>

@endpush