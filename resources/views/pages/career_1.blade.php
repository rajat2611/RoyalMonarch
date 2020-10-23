

@extends('pages/layouts.lay')
@section('styles')
<style>
     header{
position: static !important;
}
.sec-title{
position: relative;
}
.sec-title::before{
/*    content: "";
    position: absolute;
    width: 150px;
    height: 2px;
    border: 2px solid black;
    top: 120%;
    left: 5px;*/
    background-color: #1b31a7;
    content: "";
    display: inline-block;
    height: 3px;
    position: relative;
    vertical-align: middle;
    width: 20%;
}
.abt_RM p{
    text-transform: lowercase;
}
</style>
   
@endsection
@section('content')


<main class="mb-5">
    <div style="margin-top: 150px">
        <div class="container">
        <a href="/career">
            <h6>
                <i class="ti-arrow-left"></i> Back to Careers
            </h6>
            </a>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
            <h1>{{$career->title}}</h1>
            <h4 class="text-info my-5"><span class="color-light-blue"><i class="fas fa-map-marker-alt"></i> {{$career->place}}</span><span class="text-secondary">. {{$career->time}}</span></h4>
            <a class="btn btn-primary" href="/careers/apply/{{$career->id}}">Apply Now</a>
                    </div>
            <div class="col-md-6 my-md-0 my-5">
                <h3 class="sec-title mb-5 color-light-blue job-details-role">About The role</h3>
                <div class="abt_RM">
                    <h5 class="bold">About Royal Monarch</h5>
                    <p>
                        ROYAL MONARCH WAS FIRST FOUNDED IN 2015 IN BANGALORE AND WAS SUBSEQUENTLY RESTRUCTURED IN 2019 TO REFLECT CHANGES IN EQUITY HOLDINGS. WE ESTABLISHED ROYAL MONARCH IN RECOGNITION OF FOUR TRENDS DEFINING THE FINANCIAL PLANNING AND ASSET MANAGEMENT INDUSTRIES.</p>
                </div>
                <div class="abt_R">
                    <h5 class="bold">About the Role</h5>
                    <p>
                        {{$career->about_role}}.</p>
                </div>
               
            </div>
        </div>
    </div>
</main>

@endsection


   
  
@section('4')
    active
@endsection
