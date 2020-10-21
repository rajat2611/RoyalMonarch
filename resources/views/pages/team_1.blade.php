
@extends('pages/layouts.lay')

@section('content')
<main>
    <!-- Slider Area Start-->
    <div class="services-area background-team">
        <div class="container">
            <!-- Section-tittle -->
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8 ">
                    <div class="section-tittle text-left mb-40 text-white">
                        <span class="text-white">Our Team</span>
                        <h2 style="margin-bottom: 0;color: white;">{{$data->name}}
                        </h2>
                        <p class="text-white">{{$data->designation}}</p>
                        <p class="text-white">{{$data->address}}</p>
                        <div class="social_icons1">
                            <ul class="d-flex align-items-center">
                                <li>
                                    <a href="{{$data->facebook}}"> <i class="ti-facebook"></i> </a>
                                </li>
                                <li>
                                    <a href="{{$data->twitter}}"> <i class="ti-twitter-alt"></i> </a>
                                </li>
                                <li>
                                    <a href="{{$data->instagram}}"> <i class="ti-instagram"></i> </a>
                                </li>
                                <li>
                                    <a href="{{$data->skype}}"> <i class="ti-skype"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Area End-->

    <!--::team_part start::-->
    <section class="doctor_part single_page_doctor_part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-3">
                    <div class="section_tittle text-center sticky">
                        <div class="team-image">
                            <img src="{{asset('storage/'.$data->image)}}" class="rounded-circle mb-5" alt="">
                        </div>
<!--                        <div class="image" style="background: url('storage/{{$data->image}}')">
                            <img src="/img/team/1 (1).jpg" style="width: 100%; height: auto;" class="rounded-circle mb-5" alt="">
                        </div>-->
                        <bold class="mt-5">{{$data->name}}</bold>
                        <p>{{$data->designation}}</p>

                    </div>
                </div>
                <div class="col-xl-9">
                    <div class="section_body text-left">
                        <div class="bio">
                            <h2 class="text-info bar-top"> Bio details
                            </h2>
                            <p>{!! $data->bio !!}<p>


                            <span class="text-info">“To get something you never had, you have to do something you never did”</div>
                      <div class="personal-info mt-5">
                          <h2 class="text-info bar-top">Personal Info</h2>
                          {!! $data->personal_info !!}
                        </div>
                    </div>
                </div>

            </div>
    </section>
    <!--::team_part end::-->





</main>


@endsection


   
  
@section('2')
    active
@endsection
