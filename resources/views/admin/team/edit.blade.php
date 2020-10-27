@extends('adminlte::page')

@section('title', 'Edit Team')

@section('content_header')
<h1>Edit Team</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit</h3>
            </div>
            <div class="card-body">
                <form class="" method="post" action="/admin/team/update" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="team_id" value="{{$data->id}}">
                    <div class="form-group">
                        <label>Name*</label>
                        <input type="text" class="form-control" name="name" placeholder="Name" value="{{old('name') ? old('name') : $data->name}}">
                    </div>
                    <div class="form-group">
                        <label>Designation*</label>
                        <input type="text" name="designation" class="form-control designation" placeholder="Designation" value="{{old('designation') ? old('designation') : $data->designation}}">
                    </div>
                    <div class="form-group">
                        <label>Display Image*</label>
                        <input type="file" class="form-control" name="image" accept="images.*">
                        @if($data->image)
                        <img src="{{asset('storage/'.$data->image)}}" width="70">
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Cover Image*</label>
                        <input type="file" class="form-control" name="cover_image" accept="images.*">
                        @if($data->cover_image)
                        <img src="{{asset('storage/'.$data->cover_image)}}" width="70">
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Profile Image*</label>
                        <input type="file" class="form-control" name="profile_image" accept="images.*">
                        @if($data->profile_image)
                        <img src="{{asset('storage/'.$data->profile_image)}}" width="70">
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Facebook*</label>
                        <input type="text" name="facebook" class="form-control facebook" placeholder="Facebook" value="{{old('facebook') ? old('facebook') : $data->facebook}}">
                    </div>
                    <div class="form-group">
                        <label>Twitter</label>
                        <input type="text" name="twitter" class="form-control twitter" placeholder="Twitter" value="{{old('twitter') ? old('twitter') : $data->twitter}}">
                    </div>
                    <div class="form-group">
                        <label>Tnstagram*</label>
                        <input type="text" name="instagram" class="form-control instagram" placeholder="Instagram" value="{{old('instagram') ? old('instagram') : $data->instagram}}">
                    </div>
                    <div class="form-group">
                        <label>Skype*</label>
                        <input type="text" name="skype" class="form-control skype" placeholder="Skype" value="{{old('skype') ? old('skype') : $data->skype}}">
                    </div>
                    <div class="form-group">
                        <label>Location*</label>
                        <textarea class="form-control" name="address">{{old('address') ? old('address') : $data->address}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Bio Details</label>
                        <textarea class="form-control summernote" name="bio">{{old('bio') ? old('bio') : $data->bio}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Personal Info</label>
                        <textarea class="form-control summernote" name="personal_info">{{old('personal_info') ? old('personal_info') : $data->personal_info}}</textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-sm" value="Update Team">
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