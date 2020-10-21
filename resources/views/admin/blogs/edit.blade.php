@extends('adminlte::page')

@section('title', 'Blogs')

@section('content_header')
<h1>Edit Blog</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit</h3>
            </div>
            <div class="card-body">
                <form class="" method="post" action="/admin/blog/update" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="blog_id" value="{{$data->id}}">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Title" value="{{old('title') ? old('title') : $data->title}}">
                    </div>
                    <div class="form-group">
                        <label>Category</label>
                        <select class="form-control" name="category">
                            <option value="">Select Category</option>
                            @foreach($category as $cate)
                            <option value="{{$cate->id}}" {{$cate->id == $data->category ? "selected" :""}}>{{$cate->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" class="form-control" name="image">
                        @if($data->image)
                        <img src="{{asset('storage/'.$data->image)}}" width="70"> 
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control summernote" name="description">{{old('description') ? old('description') : $data->resume}}</textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-sm" value="Update Blog">
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