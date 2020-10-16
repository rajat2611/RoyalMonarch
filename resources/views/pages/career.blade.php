

@extends('pages/layouts.lay')

@section('content')

<main>
    <!-- Slider Area Start-->
    <div class="services-area">
        <div class="container">
            <!-- Section-tittle -->
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
{{--                    <div class="section-tittle text-center mb-40">--}}
{{--                        <span>careers</span>--}}
{{--                        <h2>Home</h2>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Area End-->
    <!-- Slider Area Start-->
    <div class="slider-area">
        <div class="">
            <div class="d-flex align-items-center">
                <div class="container">
                    <div class="row d-flex align-items-center mb-150">
                        <div class="col-12 ">
                            <div class="hero__caption hero__caption2 text-center m-auto">
                                <h1 class="font-weight-600 mb-50" data-animation="fadeInRight" data-delay=".4s"> <span style="color: #CDCDCD;">Create.</span><span style="color: #999999;"> Amaze.</span><span style="color: #1b31a7;"> Repeat.</span></h1>
                                <h4 style="text-align: left">We believe in being fair and square</h4> <br>
                                <p style="text-align: left"  data-delay=".6s">
                                    We’re building an inclusive economy where all classes have equal access to opportunity. We strive to live by these same values in all our workplaces. We invest in the personal and professional growth of every member of Royal Monarch. As a company pioneering the future of financial benefits, we also want to be a beacon for people development.
                                </p>
                                <!-- Hero-btn -->
                                <div class="hero__btn" data-animation="fadeInLeft" data-delay=".8s">
                                    <a href="#position" class="btn hero-btn">Open Position</a>
                                </div>
                            </div>
                        </div>
                    </div>
                
                <!--The perks-->
                    <div class="container">
                    <div class="row">
                    <div class="col-md-12 mb-20">
                        <h4><b>The perks</b></h4>
                    </div>
                    <div class="col-md-12 career_perk mb-70">                        
                        <div class="col-md-4 align-self-center pl-0">
                            <img src="{{asset('image/Career/Career-We-are-Flexible.png')}}" width="25" style="float:left">
                            <h5>We’re Flexible</h5>
                        </div>
                        <div class="col-md-4 align-self-center pl-0">
                            <img src="{{asset('image/Career/Carer_Room_To_grow.png')}}" width="25" style="float:left">
                            <h5>Room to grow</h5>
                        </div>
                        <div class="col-md-4 align-self-center pl-0">
                            <img src="{{asset('image/Career/We-have-got-you-covered.png')}}" width="25" style="float:left">
                            <h5>We’ve got you</h5>
                        </div>
                    </div>
                    <div class="col-md-12 career_perk">                        
                        <div class="col-md-4 align-self-center pl-0">
                            <img src="{{asset('image/Career/Everyone-has-a-voice.png')}}" width="25" style="float:left">
                            <h5>Every had a voice positive.</h5>
                        </div>
                        <div class="col-md-4 align-self-center pl-0">
                            <img src="{{asset('image/Career/Make-your-move.png')}}" width="25" style="float:left">
                            <h5>Make your move</h5>
                        </div>
                        <div class="col-md-4 align-self-center pl-0">
                            <img src="{{asset('image/Career/We-are-Positive.png')}}" width="25" style="float:left">
                            <h5>We’re positive. You’ll love it</h5>
                        </div>
                    </div>
                </div>
                </div>
                <!--The perks-->
                <!--All inclusive-->
                <div class="row pt-5 pb-5">
                    <div class="col-md-5">
                        <img src="{{asset('image/Career/All-Inclusive.png')}}" width="100%">
                    </div>
                    <div class="col-md-7">
                        <h4><b>All Inclusive</b></h4>
                        <p>Be yourself. That’s who we’re hiring. Our culture celebrates and supports the difference that make each of us unique. It’s how we build better products for the world...and career growth for you.</p>
                    </div>
                </div>
                <!--All inclusive-->
                
                </div>
            </div>
        </div>
    </div>   
   <?php /*  
    <!-- about shape -->
    <div class="about-shape">
        <div class="shape-left">
            <img src="/img/hero/about_shape1.png" alt="">
        </div>
        <div class="shape-right">
            <img src="/img/hero/about-sharpe2.png" alt="">
        </div>
    </div>
    </div> */ ?>
    <!-- Slider Area End-->

    <!-- image Start -->
    <?php /*
    <div class="image bg-light my-5 py-5">
        <div class="container">
            <div class="testimonial-main">
                <img src="/img/careers/people-meeting-workspace-team-7097.jpg" class="img-fluid" alt="">
            </div>
        </div>
    </div> */ ?>
    <!-- image End -->
    <?php /*
    <!-- What We do start-->
    <div class="what-we-do we-padding">
        <div class="container">
            <!-- Section-tittle -->
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="section-tittle text-center">
                        <h2>Our Benefits</h2>
                        <p>We invest in the personal and professional growth of every member of the Origin team. As a company pioneering the future of financial benefits, we also want to be a beacon for people development.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-do text-center mb-30">
                        <div class="do-icon">
                            <img src="/img/help.svg" alt=""> </div>
                        <div class="do-caption">
                            <h4>Financial Assistance</h4>
                            <small>Be yourself. That’s who we’re hiring. Our culture celebrates and supports the difference that make each of us unique. It’s how we provide better services to the world...and career growth for you </small>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-do  text-center mb-30">
                        <div class="do-icon">
                            <img src="/img/presentation.svg" alt="">
                        </div>
                        <div class="do-caption">
                            <h4>The life you want</h4>
                            <small> Dedicated to helping you Live the life you want, we build our relationship by asking the candid and sometimes difficult questions.</small>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-do text-center mb-30">
                        <div class="do-icon">
                            <img src="/img/friendship.svg" alt="">
                        </div>
                        <div class="do-caption">
                            <h4>Together</h4>
                            <small>Together, we have an honest conversation about money and what Matters most to you and your family, across the generation.</small>
                        </div>

                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-do text-center mb-30">
                        <div class="do-icon">
                            <img src="/img/money.svg" alt="">
                        </div>
                        <div class="do-caption">
                            <h4>Supoort</h4>
                            <small>Your dedicated team of advisors develops a personalized plan, tailored to your Values and life goals.</small>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </div> */ ?>
    <!-- What We do End-->

    <!--position start-->
    <div id="position" class="bg-light p-sm-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 style="font-weight: 600;font-size: 50px;">Join Our Growing Team</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                @forelse ($careers as $career)
                <div class="col-md-10 d-flex justify-content-between job_title">
                <a href="/career/{{$career->id}}">
                    <h5>{{$career->title}}</h5> </a>
                    <a href="/career/{{$career->id}}">
                        <h6 class="text-info"> <span class="new_job_title"><i class="fas fa-map-marker-alt"></i> {{$career->place}}</span> <span class="text-secondary">. {{$career->time}}</span></h6></a>
                </div>

@empty
    <p>No available jobs for now</p>
@endforelse


            </div>

            <div class="row justify-content-center mt-5">
                <div  class="col-md-10">
                    <small style="white-space: normal; word-break: keep-all;">
                       Royal Monarch is proud to be an equal opportunity workplace. All qualified applicants will receive consideration for employment without regard to, and will not be discriminated against based on age, race, gender, colour, religion, national origin, sexual orientation, gender identity, veteran status, disability or any other protected category.
                    </small>
                    <br>
                    <small style="white-space: normal; word-break: keep-all;">
                        Royal Monarch is dedicated to providing an accessible environment for all candidates during the application process and for employees during their employment. If you need accessibility assistance and/or a reasonable accommodation due to a disability, please submit an accommodation request or call +91 909999 4686. Requests/calls received for non-disability related issues, such as following up on an application, will not receive a response.
                    </small>
                </div>
            </div>

        </div>
    </div>

    <!--position end-->


</main>


@endsection




@section('4')
    active
@endsection
