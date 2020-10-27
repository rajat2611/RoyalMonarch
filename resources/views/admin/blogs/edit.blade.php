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
                        <?php
                        $oldCategpry = explode(",", $data->category);
                        ?>
                        <select class="form-control category" name="category[]" multiple>
                            <option value="">Select Category</option>
                            @foreach($category as $cate)
                            <?php
                            $selected = "";
                            ?>
                            @foreach($oldCategpry as $key => $value)
                            @if($cate->id == $value)
                            <?php $selected = "selected"; ?>
                            @endif
                            @endforeach
                            <option value="{{$cate->id}}" {{$cate->id == $data->category ? "selected" :""}} {{$selected}}>{{$cate->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Category</label>
                        <select class="form-control" name="author_id">
                            <option value="">Select Author</option>
                            @foreach($authors as $cate)
                            <option value="{{$cate->id}}" {{$cate->id == $data->author_id ? "selected" :""}}>{{$cate->first_name}} {{$cate->last_name}}</option>
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
                        <label>Published Date</label>
                        <input type="date" class="form-control" name="published_date" value="<?php echo date('Y-m-d',strtotime($data->published_date))?>">
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
<link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css" rel="stylesheet">
@stop

@section('js')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script>
$(".summernote").summernote({height: 200});
$(".category").select2({
    multiple: true
});
</script>
@stop