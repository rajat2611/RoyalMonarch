@extends('adminlte::page')

@section('title', 'Blogs')

@section('content_header')
<h1>Add Author</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{__('listing')}}</h3>
            </div>
            <div class="card-body">
                <form class="" method="post" action="/admin/author/post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>First Name*</label>
                        <input type="text" class="form-control" name="first_name" placeholder="First Name" value="{{old('first_name')}}" required>
                    </div>
                    <div class="form-group">
                        <label>Last Name*</label>
                        <input type="text" class="form-control" name="last_name" placeholder="Last Name" value="{{old('last_name')}}" required>
                    </div>
                    <div class="form-group">
                        <label>Image*</label>
                        <input type="file" class="form-control" name="image" required>
                    </div>
                    <div class="form-group">
                        <label>Qualification*</label>
                        <input type="text" class="form-control" name="qualification" placeholder="Qualification" value="{{old('qualification')}}" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-sm" value="Add Author">
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