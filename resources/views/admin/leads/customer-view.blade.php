@extends('adminlte::page')

@section('title', 'Customer Lead')

@section('content_header')
<h1>View Customer Lead</h1>
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
                    <tbody>
                        <tr>
                            <td> Name : </td>
                            <td>{{$data->first_name}} {{$data->last_name}}</td>
                        </tr>
                        <tr>
                            <td> Mobile : </td>
                            <td>{{$data->phone}}</td>
                        </tr>
                        <tr>
                            <td> Email : </td>
                            <td>{{$data->email}}</td>
                        </tr>
                        <tr>
                            <td> Gender : </td>
                            <td>{{ucfirst($data->email)}}</td>
                        </tr>
                        <tr>
                            <td> Occupation : </td>
                            <td>{{ucfirst($data->occupation)}}</td>
                        </tr>
                        <tr>
                            <td> Dependants : </td>
                            <td>{{ucfirst($data->dependants)}}</td>
                        </tr>
                        <tr>
                            <td> Goals : </td>
                            <td>{{$data->goals}}</td>
                        </tr>
                        <tr>
                            <td> Created On : </td>
                            <td>{{date('Y-m-d',strtotime($data->created_at))}}</td>
                        </tr>
                    </tbody>
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