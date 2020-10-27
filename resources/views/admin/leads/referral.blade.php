@extends('adminlte::page')

@section('title', 'Customer Lead')

@section('content_header')
<h1>Customer Lead</h1>
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
                            <th>Name</th>
                            <th>Friend Name</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $blog)
                        <tr>
                            <td>{{$blog->name}}</td>
                            <td>{{$blog->friend_name}}</td>
                            <td>{{$blog->mobile}}</td>
                            <td>{{$blog->email}}</td>
                            <td>
                                <input type="hidden" class="lead_id" value="{{$blog->id}}">
                                <select class="form-control changeStatusLead">
                                    <option value="Answered" {{$blog->status == "Answered" ? "selected":""}}>Answered</option>
                                    <option value="Not Answered" {{$blog->status == "Not Answered" ? "selected":""}}>Not Answered</option>
                                </select>
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
    $("body").on("change", ".changeStatusLead", function () {
        var id = $(this).closest('td').find('.lead_id').val();
        var status = $(this).val();
        if (id) {
            showLoader();
            $.ajax({
                "type": "get",
                "url": "/admin/lead/status",
                "data": {id: id, status: status},
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