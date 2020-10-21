@extends('adminlte::page')

@section('title', 'Blogs')

@section('content_header')
<h1>Manage Blogs <a href="/admin/blog/add" class="btn btn-primary">Add New</a></h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{__('listing')}}</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-stripped" id="faqsTable">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th>Created On</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($blogs as $blog)
                        <tr>
                            <td>{{$blog->title}}</td>
                            <td><img src='{{asset('storage/'.$blog->image)}}' width="65"></td>
                            <td>{{$blog->category_title}}</td>
                            <td><input type="checkbox" class="changeStatus" data-value="{{$blog->id}}" {{$blog->status == 1 ? "checked":""}}></td>
                            <td>{{$blog->created_at}}</td>
                            <td>
                                <a href="/admin/blog/edit/{{$blog->id}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil-alt"></i></a>
                                <form action="/admin/blog/delete" method="post" style="display:none">
                                    @csrf
                                    <input type="hidden" value="{{$blog->id}}" name="blog_id">
                                </form>
                                <a href="#" class="btn btn-danger btn-xs deleteBlog"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer tableFooter"></div>
        </div>
    </div>
</div>
@stop

@section('css')

@stop

@section('js')
<script>
    $("body").on("click", ".deleteBlog", function () {
        if (confirm('Are you sure you want to delete this entry')) {
            $(this).closest('tr').find('form').submit();
        }
    });
    $("body").on("change", ".changeStatus", function () {
        var id = $(this).data('value');
        if (id) {
            showLoader();
            $.ajax({
                "type": "get",
                "url": "/admin/blog/status",
                "data": {blog_id: id},
                "dataType": "json",
                success: function (data) {
                    hideLoader();
                    if (data.status) {
                        successMsg(data.msg);
                    } else {
                        errorMsg(data.error);
                    }
                }
            });
        }
    });
</script>
@stop