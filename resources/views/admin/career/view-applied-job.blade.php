@extends('adminlte::page')

@section('title', 'Career')

@section('content_header')
<h1>Career</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Details</h3>
            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered">
                    <tbody>
                        <tr>
                            <td>Name</td>
                            <td>{{$data->name}}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{$data->email}}</td>
                        </tr>
                        <tr>
                            <td>Mobile</td>
                            <td>{{$data->mobile}}</td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td>{{$data->address}}</td>
                        </tr>
                        <tr>
                            <td>Resume</td>
                            <td><a href="{{asset('storage/'.$data->resume)}}">View Resume</a></td>
                        </tr>
                        <tr>
                            <td colspan="2"><h5>Education</h5></td>
                        </tr>
                        <tr>
                            <td>School</td>
                            <td>
                                <ol>
                                    <?php
                                    $schools=json_decode($data->school,true);
//                                    dd($schools);
                                    ?>
                                @foreach($schools as $key => $value)
                                <li>
                                    <br/>
                                    School : {{$value['school']}}<br/>
                                    Qualification : {{$value['qualification']}}
                                </li>
                                @endforeach
                                </ol>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"><h5>Work Experience</h5></td>
                        </tr>
                        <tr>
                            <td>Applying for your first job</td>
                            <td>{{$data->is_first_job==1 ? "Yes":"No"}}</td>
                        </tr>
                        @if($data->is_first_job==1)
                        <tr>
                            <td>Employee Name</td>
                            <td>{{$data->emp_name}}</td>
                        </tr>
                        <tr>
                            <td>Employee Name</td>
                            <td>{{$data->job_title}}</td>
                        </tr>
                        <tr>
                            <td>Start Date</td>
                            <td>{{$data->start_date}}</td>
                        </tr>
                        <tr>
                            <td>Is this current job</td>
                            <td>{{$data->current_job == 1 ? "Yes" : "No" }}</td>
                        </tr>
                        @if($data->current_job == 0)
                        <tr>
                            <td>End Date</td>
                            <td>{{$data->end_date}}</td>
                        </tr>
                        @endif
                        @endif
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