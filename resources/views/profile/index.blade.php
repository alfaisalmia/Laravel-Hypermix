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
                    <a href="#">User Profile</a>
                </li>
            </ul><!-- /.breadcrumb -->
        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-xs-12">
                    @if (Session::has('message'))
                    <script>
                        alertify.success('Successfully Updated');
                    </script>
                    @endif

                    <div class="">
                        <div id="user-profile-2" class="user-profile">
                            <div class="tabbable">
                                <ul class="nav nav-tabs padding-18">
                                    <li class="active">
                                        <a data-toggle="tab" href="#home">
                                            <i class="green ace-icon fa fa-user bigger-120"></i>
                                            Profile
                                        </a>
                                    </li>

                                    <li>
                                        <a data-toggle="tab" href="#feed">
                                            <i class="orange ace-icon fa fa-users bigger-120"></i>
                                            Edit Profile
                                        </a>
                                    </li>

                                    <li>
                                        <a data-toggle="tab" href="#friends">
                                            <i class="blue ace-icon fa fa-users bigger-120"></i>
                                            Change Password
                                        </a>
                                    </li>

                                    <li>
                                        <a data-toggle="tab" href="#pictures">
                                            <i class="pink ace-icon fa fa-picture-o bigger-120"></i>
                                            Pictures
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content no-border padding-24">
                                    <div id="home" class="tab-pane in active">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-2 ">


                                                <div>
                                                    <span class="profile-picture">
                                                        <img id="avatar" class="editable img-responsive" alt="{{Auth::user()->username}}" src="{{URL('/')}}/public/uploads/users/{{Auth::user()->picture}}" />
                                                    </span>

                                                    <div class="space-4"></div>

                                                    <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                                                        <div class="inline position-relative">
                                                            <a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
                                                                <i class="ace-icon fa fa-circle light-green"></i>
                                                                &nbsp;
                                                                <span class="white"> {{ Auth::user()->first_name . ' ' . Auth::user()->last_name  }}</span>
                                                            </a>

                                                        </div>
                                                    </div>
                                                </div>



                                            </div>

                                            <div class="col-xs-12 col-sm-10">

                                                <div class="profile-user-info profile-user-info-striped">
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Username </div>

                                                        <div class="profile-info-value">
                                                            <span class="editable" id="username">{{Auth::user()->username}}</span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Location </div>

                                                        <div class="profile-info-value">
                                                            <i class="fa fa-map-marker light-orange bigger-110"></i>
                                                            <span class="editable" id="country">{{Auth::user()->address}}</span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Email </div>

                                                        <div class="profile-info-value">
                                                            <span class="editable" id="age">{{Auth::user()->email}}</span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Joined </div>

                                                        <div class="profile-info-value">
                                                            <span class="editable" id="signup">{{Auth::user()->created_at}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> About Me </div>

                                                        <div class="profile-info-value">
                                                            <span class="editable" id="about">{{Auth::user()->about_me}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name">Website</div>

                                                        <div class="profile-info-value">
                                                            <span class="editable" id="login">{{Auth::user()->user_website}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name">Social Link</div>

                                                        <div class="tools action-buttons profile-info-value">
                                                            <a href="{{Auth::user()->user_facebook_id}}">
                                                                <i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
                                                            </a>

                                                            <a href="{{Auth::user()->user_twitter_id}}">
                                                                <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                                                            </a>
                                                            <a href="{{Auth::user()->user_instagram_id}}">
                                                                <i class="ace-icon fa fa-instagram light-blue bigger-150"></i>
                                                            </a>
                                                            <a href="{{Auth::user()->user_website}}">
                                                                <i class="ace-icon fa fa-globe light-blue bigger-150"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /.col -->


                                        </div><!-- /.row -->

                                        <div class="space-20"></div>

                                        <div class="row">



                                        </div>
                                    </div><!-- /#home -->

                                    <div id="feed" class="tab-pane">
                                        <div class="profile-feed row">
                                            <div class="col-sm-12">
                                                <!-- ------ Contact Us Section --------------------- -->
                                                <div id="contactus" class="tab-pane">
                                                    <form class="form-horizontal" role="form" method="POST" action="{{ route('profile.update',Auth::user()->id) }}">
                                                        @method('put')
                                                        @csrf
                                                        <!-- <form class="form-horizontal" role="form"> -->
                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label no-padding-right" for="form-field-1">Username</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" id="form-field-1" placeholder="Username" class="col-xs-10 col-sm-5" value="{{Auth::user()->username}}" name="username" disabled />
                                                            </div>
                                                        </div>


                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> First Name</label>

                                                            <div class="col-sm-10">
                                                                <input type="text" id="form-field-1" placeholder="First Name" class="col-xs-10 col-sm-5" name="first_name" value="{{Auth::user()->first_name}}" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Last Name</label>

                                                            <div class="col-sm-10">
                                                                <input type="text" id="form-field-1" placeholder="Last Name" class="col-xs-10 col-sm-5" name="last_name" value="{{ Auth::user()->last_name}}" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label no-padding-right" for="form-field-1">Email</label>

                                                            <div class="col-sm-10">
                                                                <input type="text" id="form-field-1" placeholder="Email" class="col-xs-10 col-sm-5" name="email" value="{{ Auth::user()->email }}" disabled />
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label no-padding-right" for="form-field-1">Twiter Url</label>

                                                            <div class="col-sm-10">
                                                                <input type="text" id="form-field-1" placeholder="Twitter Url" class="col-xs-10 col-sm-5" name="user_twitter_id" value="{{ Auth::user()->user_twitter_id }}" />
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label no-padding-right" for="form-field-1">Facebook Url</label>

                                                            <div class="col-sm-10">
                                                                <input type="text" id="form-field-1" placeholder="Facebook Url" class="col-xs-10 col-sm-5" name="user_facebook_id" value="{{ Auth::user()->user_facebook_id }}" />
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label no-padding-right" for="form-field-1">Instagram Url</label>

                                                            <div class="col-sm-10">
                                                                <input type="text" id="form-field-1" placeholder="Instagram Url" class="col-xs-10 col-sm-5" name="user_instagram_id" value="{{ Auth::user()->user_instagram_id }}" />
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label no-padding-right" for="form-field-1">Website</label>

                                                            <div class="col-sm-10">
                                                                <input type="text" id="form-field-1" placeholder="Website" class="col-xs-10 col-sm-5" name="user_website" value="{{ Auth::user()->user_website }}" />
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label no-padding-right" for="form-field-1">About me</label>

                                                            <div class="col-sm-10">
                                                                <textarea id="w3review" name="about_me" rows="4" cols="54">{{Auth::user()->about_me}}
                                                                </textarea>
                                                            </div>

                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label no-padding-right" for="form-field-1">Address</label>

                                                            <div class="col-sm-10">
                                                                <input type="text" id="form-field-1" placeholder="Address" class="col-xs-10 col-sm-5" name="address" value="{{ Auth::user()->address }}" />
                                                            </div>
                                                        </div>
                                                        <div class="text-center">
                                                            <button class="btn btn-sm btn-primary">Update</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div><!-- /.col -->
                                        </div><!-- /.row -->
                                    </div><!-- /#feed -->

                                    <div id="friends" class="tab-pane">
                                        <form class="form-horizontal" role="form" method="POST" action="">
                                            @csrf
                                            <!-- <form class="form-horizontal" role="form"> -->

                                            <div class="form-group">
                                                <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> New Password</label>

                                                <div class="col-sm-10">
                                                    <input type="password" id="newpassword" placeholder="New Password" class="col-xs-10 col-sm-5" name="newpassword" value="" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label no-padding-right" for="form-field-1">Confirm Password</label>

                                                <div class="col-sm-10">
                                                    <input type="password" id="confirm_password" placeholder="Confirm Password" class="col-xs-10 col-sm-5" name="confirm_password" value="" />
                                                </div>
                                                <div class="registrationFormAlert" id="CheckPasswordMatch" style="padding-bottom: 10px;"></div>
                                                </br>
                                                <div class="text-center">
                                                    <button class="btn btn-sm btn-primary" id="changePassword">Update</button>
                                                </div>
                                            </div><!-- /#friends -->
                                        </form>
                                    </div>
                                    <div id="pictures" class="tab-pane">
                                        <form class="form-horizontal" role="form" method="POST" action="{{URL('/profile/updateImage')}}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label no-padding-right" for="form-field-1">Picture</label>

                                                <div class="col-sm-10">
                                                <input class="form-control" type="file" id="image" name="image" style="width:66%">
                                                </div>
                                            </div>
                                         
                                                <div class="text-center">
                                                    <button class="btn btn-sm btn-primary" id="updateImage" style="margin-top:10px">Update</button>
                                                </div>
                                                </form>
                                            </div><!-- /#friends -->

                                    </div><!-- /#pictures -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="hide">
                        <div id="user-profile-3" class="user-profile row">
                            <div class="col-sm-offset-1 col-sm-10">
                                <div class="well well-sm">
                                    <!-- -
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		&nbsp; -->
                                    <div class="inline middle blue bigger-110"> Your profile is 70% complete </div>

                                    &nbsp; &nbsp; &nbsp;
                                    <div style="width:200px;" data-percent="70%" class="inline middle no-margin progress progress-striped active pos-rel">
                                        <div class="progress-bar progress-bar-success" style="width:70%"></div>
                                    </div>
                                </div><!-- /.well -->

                                <div class="space"></div>

                                <form class="form-horizontal">
                                    <div class="tabbable">
                                        <ul class="nav nav-tabs padding-16">
                                            <li class="active">
                                                <a data-toggle="tab" href="#edit-basic">
                                                    <i class="green ace-icon fa fa-pencil-square-o bigger-125"></i>
                                                    Basic Info
                                                </a>
                                            </li>

                                            <li>
                                                <a data-toggle="tab" href="#edit-settings">
                                                    <i class="purple ace-icon fa fa-cog bigger-125"></i>
                                                    Settings
                                                </a>
                                            </li>

                                            <li>
                                                <a data-toggle="tab" href="#edit-password">
                                                    <i class="blue ace-icon fa fa-key bigger-125"></i>
                                                    Password
                                                </a>
                                            </li>
                                        </ul>

                                        <div class="tab-content profile-edit-tab-content">
                                            <div id="edit-basic" class="tab-pane in active">
                                                <h4 class="header blue bolder smaller">General</h4>

                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-4">
                                                        <input type="file" />
                                                    </div>

                                                    <div class="vspace-12-sm"></div>

                                                    <div class="col-xs-12 col-sm-8">
                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label no-padding-right" for="form-field-username">Username</label>

                                                            <div class="col-sm-8">
                                                                <input class="col-xs-12 col-sm-10" type="text" id="form-field-username" placeholder="Username" value="alexdoe" />
                                                            </div>
                                                        </div>

                                                        <div class="space-4"></div>

                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label no-padding-right" for="form-field-first">Name</label>

                                                            <div class="col-sm-8">
                                                                <input class="input-small" type="text" id="form-field-first" placeholder="First Name" value="Alex" />
                                                                <input class="input-small" type="text" id="form-field-last" placeholder="Last Name" value="Doe" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <hr />
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-date">Birth Date</label>

                                                    <div class="col-sm-9">
                                                        <div class="input-medium">
                                                            <div class="input-group">
                                                                <input class="input-medium date-picker" id="form-field-date" type="text" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy" />
                                                                <span class="input-group-addon">
                                                                    <i class="ace-icon fa fa-calendar"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="space-4"></div>

                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label no-padding-right">Gender</label>

                                                    <div class="col-sm-9">
                                                        <label class="inline">
                                                            <input name="form-field-radio" type="radio" class="ace" />
                                                            <span class="lbl middle"> Male</span>
                                                        </label>

                                                        &nbsp; &nbsp; &nbsp;
                                                        <label class="inline">
                                                            <input name="form-field-radio" type="radio" class="ace" />
                                                            <span class="lbl middle"> Female</span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="space-4"></div>

                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-comment">Comment</label>

                                                    <div class="col-sm-9">
                                                        <textarea id="form-field-comment"></textarea>
                                                    </div>
                                                </div>

                                                <div class="space"></div>
                                                <h4 class="header blue bolder smaller">Contact</h4>

                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-email">Email</label>

                                                    <div class="col-sm-9">
                                                        <span class="input-icon input-icon-right">
                                                            <input type="email" id="form-field-email" value="alexdoe@gmail.com" />
                                                            <i class="ace-icon fa fa-envelope"></i>
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="space-4"></div>

                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-website">Website</label>

                                                    <div class="col-sm-9">
                                                        <span class="input-icon input-icon-right">
                                                            <input type="url" id="form-field-website" value="http://www.alexdoe.com/" />
                                                            <i class="ace-icon fa fa-globe"></i>
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="space-4"></div>

                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-phone">Phone</label>

                                                    <div class="col-sm-9">
                                                        <span class="input-icon input-icon-right">
                                                            <input class="input-medium input-mask-phone" type="text" id="form-field-phone" />
                                                            <i class="ace-icon fa fa-phone fa-flip-horizontal"></i>
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="space"></div>
                                                <h4 class="header blue bolder smaller">Social</h4>

                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-facebook">Facebook</label>

                                                    <div class="col-sm-9">
                                                        <span class="input-icon">
                                                            <input type="text" value="facebook_alexdoe" id="form-field-facebook" />
                                                            <i class="ace-icon fa fa-facebook blue"></i>
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="space-4"></div>

                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-twitter">Twitter</label>

                                                    <div class="col-sm-9">
                                                        <span class="input-icon">
                                                            <input type="text" value="twitter_alexdoe" id="form-field-twitter" />
                                                            <i class="ace-icon fa fa-twitter light-blue"></i>
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="space-4"></div>

                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-gplus">Google+</label>

                                                    <div class="col-sm-9">
                                                        <span class="input-icon">
                                                            <input type="text" value="google_alexdoe" id="form-field-gplus" />
                                                            <i class="ace-icon fa fa-google-plus red"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="edit-settings" class="tab-pane">
                                                <div class="space-10"></div>

                                                <div>
                                                    <label class="inline">
                                                        <input type="checkbox" name="form-field-checkbox" class="ace" />
                                                        <span class="lbl"> Make my profile public</span>
                                                    </label>
                                                </div>

                                                <div class="space-8"></div>

                                                <div>
                                                    <label class="inline">
                                                        <input type="checkbox" name="form-field-checkbox" class="ace" />
                                                        <span class="lbl"> Email me new updates</span>
                                                    </label>
                                                </div>

                                                <div class="space-8"></div>

                                                <div>
                                                    <label>
                                                        <input type="checkbox" name="form-field-checkbox" class="ace" />
                                                        <span class="lbl"> Keep a history of my conversations</span>
                                                    </label>

                                                    <label>
                                                        <span class="space-2 block"></span>

                                                        for
                                                        <input type="text" class="input-mini" maxlength="3" />
                                                        days
                                                    </label>
                                                </div>
                                            </div>

                                            <div id="edit-password" class="tab-pane">
                                                <div class="space-10"></div>

                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-pass1">New Password</label>

                                                    <div class="col-sm-9">
                                                        <input type="password" id="form-field-pass1" />
                                                    </div>
                                                </div>

                                                <div class="space-4"></div>

                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-pass2">Confirm Password</label>

                                                    <div class="col-sm-9">
                                                        <input type="password" id="form-field-pass2" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="clearfix form-actions">
                                        <div class="col-md-offset-3 col-md-9">
                                            <button class="btn btn-info" type="button">
                                                <i class="ace-icon fa fa-check bigger-110"></i>
                                                Save
                                            </button>

                                            &nbsp; &nbsp;
                                            <button class="btn" type="reset">
                                                <i class="ace-icon fa fa-undo bigger-110"></i>
                                                Reset
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div><!-- /.span -->
                        </div><!-- /.user-profile -->
                    </div>

                    <!-- PAGE CONTENT ENDS -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->
@endsection
@push('ajax_crud')

<script type="text/javascript">
    $(document).ready(function() {
        $("#changePassword").prop('disabled', true);
        $("#confirm_password").keyup(function() {
            var password = $("#newpassword").val();
            var confirmPassword = $("#confirm_password").val();
            if (password != confirmPassword) {
                $("#CheckPasswordMatch").html("<span style='color:red;'>Passwords does not match!</span>");
            } else {
                $("#CheckPasswordMatch").html("<span style='color:green;'>Passwords  match!</span>");
                $("#changePassword").prop('disabled', false);
            }
        });

        $('#changePassword').click(function(e) {
            e.preventDefault();
            var password = $("#newpassword").val();
            $.ajax({
                type: 'get',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ URL::to('updatePassword')}}",
                data: {
                    'password': password,
                },
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
/* -----------  Picture Update----------- */

    });
</script>
@endpush