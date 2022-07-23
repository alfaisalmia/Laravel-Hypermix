@extends('layouts.main')
@section('title', 'Post Page-Hyper Mix')
@section('content')


<div class="main-content">
    <div class="main-content-inner">

    <div class="page-content">
        <div class="row">
            <div class="col-xs-12">
                <div class="row">
                    <div class="">
                    @if (Session::has('create'))
                    <script>
                        alertify.success('Successfully Added');
                    </script>
                    @endif
                    @if (Session::has('update'))
                    <script>
                        alertify.success('Successfully Updated');
                    </script>
                    @endif
                    @if (Session::has('delete'))
                    <script>
                        alertify.success('Successfully Deleted');
                    </script>
                    @endif
                    </div>
                    <div class="col-xs-12">
                        <h3 class="header smaller lighter blue">List of all affiliate posts</h3>
                        <div class="table-header">
                            Results for Latest Registered Users
                            <div class="pull-right tableTools-container"><a href="{{route('postblog.create') }}" class="btn btn-white btn-primary">Post new</a></div>
                        </div>

                        <!-- div.table-responsive -->

                        <!-- div.dataTables_borderWrap -->
                        <div>
                            <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Sr.No</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Category</th>
                                        <th>Image</th>
                                        <th>Author Name</th>
                                        <th   style="width: 8%;">Manage</th>
                                    </tr>
                                </thead>                           <tbody>
                                    @foreach ($posts as $post)
                                    <tr>
                                        <td>{{$post->id}}</td>
                                        <td style="width: 22%;">{{$post->post_title}}</td>
                                        <td>
                                       To read description click on <a class="btnbtn-primary"><i>Read more</i></a>
                                        </td>
                                        <td>{{$post->categories->category_name}}</td>
                                        <td> <img src="{{URL('/')}}/public/uploads/posts/{{$post->post_image}}" class="msg-photo" alt="" style="width: 70px; height:40px;" /></td>
                                        <td>{{$post->post_author_name}}</td>


                                        <td>
                                            <div class="hidden-sm hidden-xs action-buttons">
                                                <a class="blue" href="#">
                                                    <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                </a>

                                                <a class="green" href="{{route('postblog.edit',$post->id)}}">
                                                    <i class="ace-icon fa fa-pencil bigger-130" title="Edit"></i>
                                                </a>

                                                <a class="red" title="Delete" href="{{route('postblog.destroy',$post->id)}}" >
                                                    <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>




            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>

    <!-- PAGE CONTENT ENDS -->
</div><!-- /.col -->
</div><!-- /.row -->
</div><!-- /.page-content -->
</div>
</div><!-- /.main-content -->


@endsection
