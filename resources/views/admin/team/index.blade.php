@extends('adminlte::page')

@section('title', 'Teams')

@section('content_header')
<h1>Manage Team <a href="/admin/team/add" class="btn btn-primary">Add New</a></h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Listing</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-stripped" id="teamTable">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Designation</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Created On</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $team)
                        <tr>
                            <td>{{$team->name}}</td>
                            <td>{{$team->designation}}</td>
                            <td><img src='{{asset('storage/'.$team->image)}}' width="65"></td>
                            <td><input type="checkbox" class="changeStatus" data-value="{{$team->id}}" {{$team->status == 1 ? "checked":""}}></td>
                            <td>{{$team->created_at}}</td>
                            <td>
                                <a href="/admin/team/edit/{{$team->id}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil-alt"></i></a>
                                <a href="#" class="btn btn-danger btn-xs deleteRecords" data-value="{{$team->id}}"><i class="fa fa-trash"></i></a>
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
    var table = $("#teamTable").dataTable({
        searching: false,
        lengthChange: false,
        info: false,
        destroy: true,
        ordering: false
    });
    $("body").on("click", ".deleteRecords", function () {
        var id = $(this).data('value');
        var tr = $(this).closest("tr");
        if (id && confirm('Are you sure you want to delete')) {
            showLoader();
            $.ajax({
                "type": "get",
                "url": "/admin/team/delete",
                "data": {id: id},
                "dataType": "json",
                success: function (data) {
                    hideLoader();
                    if (data.status) {
                        $(tr).remove();
                        $("#teamTable").dataTable({
                            searching: false,
                            lengthChange: false,
                            info: false,
                            destroy: true,
                            ordering: false
                        });
                        successMsg(data.msg);
                    } else {
                        errorMsg(data.error);
                    }
                }
            });
        }
    });
    $("body").on("change", ".changeStatus", function () {
        var id = $(this).data('value');
        if (id) {
            showLoader();
            $.ajax({
                "type": "get",
                "url": "/admin/team/status",
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
</script>
@stop