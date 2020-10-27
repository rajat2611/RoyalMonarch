@extends('adminlte::page')

@section('title', 'Contact')

@section('content_header')
<h1>Contact View</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{__('listing')}}</h3>
            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <td>Name</td>
                            <td>{{$data->first_name}} {{$data->last_name}}</td>
                        </tr>
                        <tr>
                            <td>Mobile</td>
                            <td>{{$data->phone}}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{$data->email}}</td>
                        </tr>
                        <tr>
                            <td>Message</td>
                            <td>{{$data->message}}</td>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
@stop

@section('css')

@stop

@section('js')

@stop