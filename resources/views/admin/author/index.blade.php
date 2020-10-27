@extends('adminlte::page')

@section('title', 'Blogs')

@section('content_header')
<h1>Manage Author <a href="/admin/author/add" class="btn btn-primary">Add New</a></h1>
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
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Image</th>
                            <th>Qualification</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $blog)
                        <tr>
                            <td>{{$blog->first_name}}</td>
                            <td>{{$blog->last_name}}</td>
                            <td>{{$blog->qualification}}</td>
                            <td><img src="{{asset("storage/".$blog->image)}}" width="70"></td>
                            <td>
                                <a href="/admin/author/edit/{{$blog->id}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil-alt"></i></a>
                                <form action="/admin/author/delete" method="post" style="display:none">
                                    @csrf
                                    <input type="hidden" value="{{$blog->id}}" name="blog_id">
                                </form>
                                <a href="#" class="btn btn-danger btn-xs deleteCategory" data-value="{{$blog->id}}"><i class="fa fa-trash"></i></a>
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
    var table = $("#faqsTable").dataTable({
        searching: false,
        lengthChange: false,
        info: false,
        destroy: true,
        ordering: false
    });
    $("body").on("click", ".deleteCategory", function () {
        var id = $(this).data('value');
        var tr = $(this).closest("tr");
        if (id && confirm('Are you sure you want to delete')) {
            showLoader();
            $.ajax({
                "type": "get",
                "url": "/admin/author/delete",
                "data": {id: id},
                "dataType": "json",
                success: function (data) {
                    hideLoader();
                    if (data.status) {
                        $(tr).remove();
                        table.ajax.reload(null, false);
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