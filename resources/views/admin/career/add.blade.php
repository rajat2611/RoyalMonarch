@extends('adminlte::page')

@section('title', 'Career')

@section('content_header')
<h1>Post New Job</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Add</h3>
            </div>
            <div class="card-body">
                <form class="" method="post" action="/admin/career/post">
                    @csrf
                    <div class="form-group">
                        <label>Title*</label>
                        <input type="text" class="form-control" name="title" placeholder="Title" value="{{old('title')}}">
                    </div>
                    <div class="form-group">
                        <label>Location*</label>
                        <input type="text" class="form-control" name="place" placeholder="Place" value="{{old('place')}}">
                    </div>
                    <div class="form-group">
                        <label>Time*</label>
                        <select class="form-control" name="time">
                            <option value="">Select Category</option>
                            <option value="Full Time">Full Time</option>
                            <option value="Part Time">Part Time</option>
                            
                        </select>
                    </div>
                    <div class="form-group">
                        <label>About Role</label>
                        <textarea class="form-control summernote" name="about_role">{{old('about_role')}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <input type="checkbox" name="status" value="1" {{old('status') == 1 ? "checked" :""}}>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-sm" value="Add Blog">
                    </div>
                </form>
            </div>
            <div class="card-footer tableFooter"></div>
        </div>
    </div>
</div>
@stop

@section('css')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@stop

@section('js')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
$(".summernote").summernote({height: 200});
</script>
@stop