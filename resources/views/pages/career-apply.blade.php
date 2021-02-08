

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
            <div class="col-md-8 offset-2">
                <form action="/apply-career" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="career_id" value="{{$career->id}}">
                    <div class="card">
                        <div class="card-header">
                            <h5>{{$career->title}}</h5>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>First Name *</label>
                                <input type="text" name="name" class="form-control" placeholder="First name" value="{{old('name')}}" required>
                            </div>
                            <div class="form-group">
                                <label>Last Name *</label>
                                <input type="text" name="last_name" class="form-control" placeholder="Last name" value="{{old('last_name')}}" required>
                            </div>
                            <div class="form-group">
                                <label>Email *</label>
                                <input type="email" name="email" class="form-control" placeholder="Email" value="{{old('email')}}" required>
                            </div>
                            <div class="form-group">
                                <label>Mobile *</label>
                                <input type="mobile" name="mobile" class="form-control" placeholder="Mobile" value="{{old('mobile')}}" required>
                            </div>
                            <div class="form-group">
                                <label>Address *</label>
                                <textarea class="form-control" name="address" placeholder="Address" required>{{old('address')}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Resume *</label>
                                <input type="file" name="resume" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <hr/>
                                <h5>Education</h5>
                            </div>
                            <div class="education-area">
                                <div class="education-section">
                                    <button type="button" class="btn-danger float-right removeBtn hidden"><i class="fa fa-times-circle"></i></button>
                                    <div class="form-group">
                                        <label>School Name *</label>
                                        <input type="text" name="school[]" class="form-control" placeholder="School Name" value="" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Qualification *</label>
                                        <input type="text" name="qualification[]" class="form-control" placeholder="Qualification" value="" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <a href="javascript:void(0)" class="btn addNewSection">Add New</a>
                                <hr/>
                                <h5>Work experience</h5>
                            </div>
                            <div class="experience_section">
                                <div class="form-group">
                                    <label>Applying for your first job?  *</label><br>
                                    <input type="radio" class="is_first_job" name="is_first_job" value="1" {{old('is_first_job')=="1" ? "checked":""}} required> Yes
                                    <input type="radio" class="is_first_job" name="is_first_job" value="2" {{old('is_first_job')=="2" ? "checked":""}} required> No
                                </div>
                                <div class="main-job-section" style="display:none">
                                    <div class="first-job" >
                                        <div class="form-group">
                                            <label>Employer Name *</label>
                                            <input type="text" name="emp_name[]" class="form-control" placeholder="Employer Name " value="{{old('emp_name')}}" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Job Title *</label>
                                            <input type="text" name="job_title[]" class="form-control" placeholder="Job Title" value="{{old('job_title')}}" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Start Date *</label>
                                            <input type="date" name="start_date[]" class="form-control" value="{{old('start_date')}}" required>
                                        </div>
                                        <div class="form-group">
                                            <hr/>
                                            <label>Is this your current job *</label>
                                            <input type="radio" class="last_job" name="last_job_0" value="1" {{old('start_date') =="1" ? "checked" :""}} checked="" required> Yes
                                            <input type="radio" class="last_job" name="last_job_0" value="2" {{old('start_date') =="2" ? "checked" :""}} required> No
                                        </div>
                                        <div class="last-job" style="display: none">
                                            <div class="form-group">
                                                <label>Leaving Date *</label>
                                                <input type="date" name="end_date[]" class="form-control" value="{{old('end_date')}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="javascript:void(0)" class="btn add_experience" style="display:none">Add New</a>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="form-group">
                                <input type="submit" class="btn btn-sm" value="Apply Now">
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</main>

@endsection  

@section('scripts')
<script>
    $("body").on("change", ".is_first_job", function () {
        if ($(this).val() == "2") {
            $(".main-job-section").css('display', 'block');
            $(".add_experience").css('display', '');
        } else {
            $(".main-job-section").css('display', 'none');
            $(".add_experience").css('display', 'none');
        }
    });
    $("body").on("change", ".last_job", function () {
        $(".last-job").css('display', 'none');
        $(".last-job input").attr('required', false);
        var last_job = $(this).closest(".first-job").find(".last-job");
        var last_job_input = $(this).closest(".first-job").find(".last-job input");
        if ($(this).val() == "1") {
            $(last_job).css('display', 'none');
            $(last_job_input).attr('required', false);
        } else {
            $(last_job).css('display', 'block');
            $(last_job_input).attr('required', true);
        }
    });

    $("body").on("click", ".addNewSection", function () {
        var data = $("body").find(".education-section:first").clone();
        $(data).find(".removeBtn").removeClass('hidden');
        $(".education-area").append(data);
    });
    $("body").on("click", ".add_experience", function () {
        var length= $("body").find(".first-job").length;
        var data = $("body").find(".first-job:first").clone();
        $(data).find(".removeBtn").removeClass('hidden');
//        $(data).find('input').val('');
        $(data).find('.last_job').attr('name','last_job_'+length);
        $(".main-job-section").append(data);
    });
    $("body").on("click", ".removeBtn", function () {
        $(this).closest(".education-section").remove();
    })
</script>
@endsection