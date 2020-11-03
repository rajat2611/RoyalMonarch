
@extends('pages/layouts.lay')

@section('content')
<main>
    <!-- Slider Area Start-->
    <div class="services-area">
        <div class="container">
            <!-- Section-tittle -->
            <div class="row d-flex justify-content-center">
                {{--                <div class=                "col-lg-8">--}}
                {{--                    <div class="section                -tittle text-center mb-40">--}}
                {{--                        <span>                                Our                                 Team</span>--}}
                                {{--                                      <h2>About us</h2>                                --}}
                                {{--                    </div>--}}
                                {{--                </div>--}}
                                   </div>
      </div>
    </div>
    <!-- Sli                    der Area End-->

    <!--::team_part start::-->
                                <sec                tion class="doctor_part">
                                        <div class="container">
                                            <div class="row d-flex justify-content-center">
                                                <div class="col-md-12 mb-50">
                                                    <h1 class="text-center font-weight-600 font-60"> <span style="color: #CDCDCD;">Collaboration.</span><span style="color: #999999;"> Innovation.</span><span style="color: #1b31a7;"> Diversity.</span></h1>
                                                </div>
                                                <div class="col-lg-2 col-md-9 about_menu_link">
                                                    @include('/pages.contact_menu')
                                                </div>
                                                <div class="col-md-8 ml-3">
                                                    <div class="section_tittle text-center mb-5">
                                                        <h5 class="mb-3 text-center">
                                                            We’ve been in this business for years, and have built an operation predicated on <span class="blue-text">constant refinement </span>and <span class="blue-text">relentless growth.</span>
                                                        </h5>
                                                        <p>
                                                            We're still collaborating, educating ourselves and each other, playing on the floor with dogs, eating pizzas, and lovingly forcing people to cut and serve cake to everyone on their birthdays. We power through intense strategy sessions, pool our collective brainpower to conceptualize innovative solutions, support each other when it’s crunch time, and come back the next day to do it all over again.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-5">
                                                <div class="col-md-12 text-center mb-5">
                                                    <h4 class="text-center font-weight-600">
                                                        Faces of people truly passionate about reinventing <span class="blue-text">financial planning</span>
                                                    </h4>
                                                </div>
                                                <?php
                                                $teams = \App\Team::where('status', 1)->get();
                                                ?>
                                                @foreach($teams as $key => $team)
                                                <div class="col-sm-6 col-lg-3">
                                                    <div class="single_blog_item">
                                                        <div class="single_blog_img">
                                                            <a href="/team/{{$team->id}}">
                                                                <img src="{{asset('storage/'.$team->image)}}" alt="doctor"></a>
                                                            <div class="social_icon">
                                                                <ul>
                                                                    <li>
                                                                        <a href="{{$team->facebook}}" target="_blank"> <i class="ti-facebook"></i> </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="{{$team->twitter}}" target="_blank"> <i class="ti-twitter-alt"></i> </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="{{$team->instagram}}" target="_blank"> <i class="ti-instagram"></i> </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="{{$team->skype}}" target="_blank"> <i class="ti-skype"></i> </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="team-name">
                                                                <h3><a href="">{{$team->name}}</a></h3>
                                                            </div>
                                                        </div>
                                                        <div class="single_text">
                                                            <div class="mt-2">
                                                                <a href="/team/{{$team->id}}" >
                                                                    <h5 class="font-weight-600">{{$team->designation}}</h5>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                                <div class="col-xl-3 col-6 team-member-card">
                                                    <div class="team-jobs">
                                                        <h3 class="apply">Apply for job</h3>
                                                        <a href="/career" class="team-member-btn-href white">
                                                            READ MORE <i class="fa fa-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <!--                                                <div class="col-sm-6 col-lg-3">
                                                                                                    <div class="" style="height: 78%;background: #5c74ff;background-image: linear-gradient(#0026ff, #fffffff5);">
                                                                                                        <div class="single_blog_img apply-job">
                                                                                                            <h2 class="mb-20">Apply For Job</h2>
                                                                                                            <a href="/career" class="btn">Read More <i class="fa fa-arrow-right"></i></a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>-->

                                            </div>
                                        </div>
                                        </section>
                                        <!--::team_part end::-->





                                        </main>


                                        @endsection




                                        @section('2')
                                        active
                                        @endsection
