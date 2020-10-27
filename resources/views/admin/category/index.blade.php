@extends('adminlte::page')

@section('title',__('Category'))

@section('content_header')
<h1>Category <a href="#" data-toggle="modal" data-target="#myModal" class="btn btn-primary btn-sm">Add New</a></h1>
@stop

@section('content')
<!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">New Category</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="/admin/category/add" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Title" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Submit">
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<div class="modal" id="editModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Edit Category</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="/admin/category/update" method="post">
                    @csrf
                    <input type="hidden" name="id" class="category_id">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control category_title" placeholder="Title" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Update">
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Listing</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-stripped" id="cateTable">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Create On</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($category as $key => $value)
                        <tr>
                            <td><span>{{$value->title}}</span></td>
                            <td><input type="checkbox" class="changeStatus" data-value="{{$value->id}}" {{$value->status == 1 ? "checked":""}}></td>
                            <td>{{$value->created_at}}</td>
                            <td>
                                <a href="#" class="btn btn-primary btn-xs editCategory" data-value="{{$value->id}}"><i class="fa fa-pencil-alt"></i></a>
                                <a href="#" class="btn btn-danger btn-xs deleteCategory" data-value="{{$value->id}}"><i class="fa fa-trash"></i></a>
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
    var table = $("#cateTable").dataTable({
        searching: false,
        lengthChange: false,
        info: false,
        destroy: true,
        ordering: false
    });
    $("body").on("change", ".changeStatus", function () {
        var id = $(this).data('value');
        if (id) {
            showLoader();
            $.ajax({
                "type": "get",
                "url": "/admin/category/status",
                "data": {id: id},
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
    $("body").on("click", ".deleteCategory", function () {
        var id = $(this).data('value');
        var tr = $(this).closest("tr");
        if (id && confirm('Are you sure you want to delete')) {
            showLoader();
            $.ajax({
                "type": "get",
                "url": "/admin/category/delete",
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
    $("body").on("click", ".editCategory", function () {
        var id = $(this).data('value');
        var category_title = $(this).closest("tr").find('span').text();
        $(".category_id").val(id);
        $(".category_title").val(category_title);
        $("#editModal").modal();
    })
</script>
@stop