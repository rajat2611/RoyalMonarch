@extends('adminlte::page')

@section('title', 'Blogs')

@section('content_header')
<h1>Add Blog</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{__('listing')}}</h3>
            </div>
            <div class="card-body">
                <form class="" method="post" action="/admin/author/update/{{$data->id}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>First Name*</label>
                        <input type="text" class="form-control" name="first_name" placeholder="First Name" value="{{old('first_name',$data->first_name)}}" required>
                    </div>
                    <div class="form-group">
                        <label>Last Name*</label>
                        <input type="text" class="form-control" name="last_name" placeholder="Last Name" value="{{old('last_name',$data->last_name)}}" required>
                    </div>
                    <div class="form-group">
                        <label>Image*</label>
                        <input type="file" class="form-control" name="image" required>
                        @if($data->image)
                        <img src="{{asset('storage/'.$data->image)}}" width="70">
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Qualification*</label>
                        <input type="text" class="form-control" name="qualification" placeholder="Qualification" value="{{old('qualification',$data->qualification)}}" required>
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

        @stop

        @section('js')

        @stop