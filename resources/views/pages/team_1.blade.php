
@extends('pages/layouts.lay')

@section('content')
<main>
    <!-- Slider Area Start-->
    <div class="background-team">
        <div class="container">
            <!-- Section-tittle -->
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 mt-50">
                    <div class="section-tittle text-left mb-40 text-white">
                        <span class="text-white">Our Team</span>
                        <h2 style="margin-bottom: 0;color: white;">{{$data->name}}
                        </h2>
                        <p class="text-white">{{$data->designation}}</p>
                        <p class="text-white">{{$data->address}}</p>
                        <div class="social_icons1">
                            <ul class="d-flex align-items-center">
                                <li>
                                    <a href="{{$data->facebook}}" target="_blank"> <i class="ti-facebook"></i> </a>
                                </li>
                                <li>
                                    <a href="{{$data->twitter}}" target="_blank"> <i class="ti-twitter-alt"></i> </a>
                                </li>
                                <li>
                                    <a href="{{$data->instagram}}" target="_blank"> <i class="ti-instagram"></i> </a>
                                </li>
                                <li>
                                    <a href="{{$data->skype}}" target="_blank"> <i class="ti-skype"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="team-image-wrapper">
                        
                    </div>
                    <img src="{{asset('storage/'.$data->cover_image)}}" style="width:100%">
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Area End-->

    <!--::team_part start::-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content container">
                <div class="modal-header">
                    <h5 class="modal-title text-capitalize" id="exampleModalLabel">Note from {{$data->name}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <div class="text-center" style="text-align: justify">
                        <p>{!! $data->bio !!}</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary py-4 px-3" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>

    <section class="doctor_part single_page_doctor_part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-3">
                    <div class="section_tittle text-center sticky">
                        <div class="team-image">
                            <img src="{{asset('storage/'.$data->profile_image)}}" class="rounded-circle mb-5" alt="">
                        </div>
                        <!--                        <div class="image" style="background: url('storage/{{$data->image}}')">
                                                    <img src="/img/team/1 (1).jpg" style="width: 100%; height: auto;" class="rounded-circle mb-5" alt="">
                                                </div>-->
                        <bold class="mt-5">{{$data->name}}</bold>
                        <p>{{$data->designation}}</p>
                        <button type="button" role="button" data-toggle="modal" data-target="#exampleModal" class="btn" style="line-height: 1;padding: 13px 44px;">Letter from {{$data->name}}</button>
                    </div>
                </div>
                <div class="col-xl-9">
                    <div class="section_body text-left">
                        
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
