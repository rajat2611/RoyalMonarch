@extends('adminlte::page')

@section('title', 'Blogs')

@section('content_header')
<h1>Contact <a href="/admin/author/add" class="btn btn-primary">Add New</a></h1>
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
                            <th>Mobile No</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $blog)
                        <tr>
                            <td>{{$blog->first_name}} {{$blog->last_name}}</td>
                            <td>{{$blog->phone}}</td>
                            <td>{{$blog->email}}</td>
                            <td>
                                <input type="hidden" class="lead_id" value="{{$blog->id}}">
                                <select class="form-control changeStatusLead">
                                    <option value="Answered" {{$blog->status == "Answered" ? "selected":""}}>Answered</option>
                                    <option value="Not Answered" {{$blog->status == "Not Answered" ? "selected":""}}>Not Answered</option>
                                </select>
                            </td>
                            <td>
                                <a href="/admin/contact/{{$blog->id}}" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></a>
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
                "url": "/admin/contacts/changestatus",
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