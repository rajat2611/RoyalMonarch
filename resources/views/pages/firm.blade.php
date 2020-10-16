


@extends('pages/layouts.lay')

@section('content')


<main class="mb-3">
    <!-- Slider Area Start-->
    <div class="services-area">
        <div class="container">
            <!-- Section-tittle -->
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
{{--                    <div class="section-tittle text-center mb-40">--}}
{{--                        <span>Our firm</span>--}}
{{--                        <h2>About us</h2>--}}
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
                    <div class="row d-flex"><!-- remove align-items-center -->
                    <div class="col-md-12 mb-50 ">
                        <h1 class="text-center font-weight-600" data-animation="fadeInRight" data-delay=".4s" class="mb-5"> <span style="color: #CDCDCD;">Mission.</span><span style="color: #999999;"> Vision.</span><span style="color: #1b31a7;"> Promise.</span></h1>
                    </div>
                        <div class="col-lg-2 col-md-9 about_menu_link">
                                @include('/pages.contact_menu')
                        </div>
                        <div class="col-lg-8 col-md-9 offset-lg-1">
                            <div class="hero__caption hero__caption2">
{{--                                <p data-animation="fadeInRight" data-delay=".6s" class="text-lowercase">--}}
{{--                                    ROYAL MONARCH WAS FIRST FOUNDED IN 2015 IN BANGALORE AND WAS SUBSEQUENTLY RESTRUCTURED IN 2019 TO REFLECT CHANGES IN EQUITY HOLDINGS. WE ESTABLISHED ROYAL MONARCH IN RECOGNITION OF FOUR TRENDS DEFINING THE FINANCIAL PLANNING AND ASSET MANAGEMENT INDUSTRIES.--}}
{{--                                </p>--}}
                                <p class="mb-0" data-animation="fadeInRight" data-delay=".6s" >
                                    Royal Monarch was first founded in 2015 in Bangalore and was subsequently restructured in 2019 to reflect changes in equity holdings
                                </p>
                                <p class="mb-2" data-animation="fadeInRight" data-delay=".6s" >
                                    We established Royal Monarch in recognition of four trends defining the financial planning and asset management industries.
                                </p>
                                <div class="mb-10">
                                    <ul class="unordered-list">
                                        <li>The supply and demand imbalance of quality financial planning advice.</li>
                                        <li>Lack of global professional and intellectual development opportunities for today's graduates and tomorrow's industry leaders.</li>
                                        <li>A maturing financial advisor demographic that merits an innovative partnership solution.</li>
                                        <li>Interdependence of our global supply chain with respect to technology, communication, and human capital.</li>
                                    </ul>
                                </div>
                                <p data-animation="fadeInLeft" data-delay=".8s">
                                    Current situation inspired our entrepreneurial vision of developing innovative solution to address these acute challenges. The creators of Royal Monarch, surprisingly, do not use their competition as a benchmark. They follow a different strategic logic called value innovation, which is the foundation of the Royal Monarch. 
                                </p>
                            </div>
                        </div>
<!--                        <div class="col-lg-5 d-none d-lg-block">
                            <div class="hero__img hero__img2 " data-animation="fadeInLeft" data-delay="1s">
                                <img src="/img/hero/about_hero.jpg" alt="">
                            </div>

                        </div>-->

                    </div>
                </div>
            </div>

        </div>
        <!-- about shape -->
        <div class="about-shape">
            <div class="shape-left">
                <img src="/img/hero/about_shape1.png" alt="">
            </div>
            <div class="shape-right">
                <img src="/img/hero/about-sharpe2.png" alt="">
            </div>
        </div>
    </div>
    <!-- Slider Area End-->

    <!-- section Area start-->

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-4">
{{--                <div class="col-md-7 text-center heading-section ftco-animate">--}}
{{--                    <span class="subheading">-- Our Firm</span>--}}
{{--                    <h2 class="mb-4">How it works</h2>--}}
{{--                </div>--}}
            </div>
            <div class="row">
                <!-- new code -->
                <div class="col-md-8 offset-lg-2 align-items-center ftco-animate">
                    <div class="d-md-flex mb-4">
                        <div class="one-forth align-self-center">
                            
                            <img src="/image/firm/Mission.png" class="" alt="">
                        </div>
                        <div class="one-half ml-md-5 align-self-center">
                            <h2 class="mb-4">OUR MISSION</h2>
                            <p>To have a positive impact on the lives of our clients by helping them achieve their goals and obtain peace of mind over their finances. We will do this by providing financial services tailored to the specific needs
                            of each client, based on their goals and values.</p>
                            <p>Our mission is to continue to grow and protect our clients’ assets and to help them achieve their dreams and life goals. We aim to do this in such a way as to become the trusted source of knowledge and leadership
                            to our clients, our staff and to the wider community.</p>
                        </div>
                    </div>
                <!--2-->
                <div class="d-md-flex mb-4">
                    <div class="one-forth order-last align-self-center">
                        
                        <!--<img src="/img/firm/vision.png" class="" alt="">-->
                        <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                              <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                            </svg>
                        <img src="/image/firm/Vision.png" class="" alt="">
                    </div>
                    <div class="one-half order-first mr-md-5 align-self-center">
                        <h2 class="mb-4">OUR VISION</h2>
                        <p>Our vision as a firm focuses on helping others achieve financial goals, as well as understanding of each client’s unique purpose, mission and values. We strive to empower clients by offering education, tools and
                        resources aimed at facilitating clear communication and bringing definition to their ambitions and objectives. Each client has different ideas about what makes life great. </p>
                        <p>We take the burden out of managing the financial details so clients can enjoy life’s journey and live out their unique purpose. We strive to be a force of calm, a navigator in the face of anxiety and uncertainty
                        that all too often accompany financial success.
                        </p>
                    </div>
                </div>
                <!--3-->
                <div class="d-md-flex">
                    <div class="one-forth align-self-center">
                        <!--<img src="/img/firm/promise.png" class="" alt="">-->
                        <img src="/image/firm/Promise.png" class="" alt="">
                    </div>
                    <div class="one-half ml-md-5 align-self-center">
                        <h2 class="mb-4">OUR PROMISE</h2>
                        <p>As public policy stewards, Royal Monarch is held to the highest fiduciary standard. Financial planning advice and wealth management services must be delivered to the public with objectivity, accountability, and
                        transparency. We place client interests above those of our firm, employees, and shareholders.</p>
                    </div>
                </div>
                </div>
                <!-- new code -->
                <?php /*                
                <div class="col-md-12 nav-link-wrap mb-5 pb-md-5 pb-sm-1 ftco-animate">
                    <div class="nav ftco-animate nav-pills justify-content-center text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active text-capitalize" id="v-pills-nextgen-tab" data-toggle="pill" href="#v-pills-nextgen" role="tab" aria-controls="v-pills-nextgen" aria-selected="true" style="color: black !important;">Our Mission
                        </a>

                        <a class="nav-link text-capitalize" id="v-pills-performance-tab" data-toggle="pill" href="#v-pills-performance" role="tab" aria-controls="v-pills-performance" aria-selected="false" style="color: black !important;">Our Vision
                        </a>

                        <a class="nav-link text-capitalize" id="v-pills-effect-tab" data-toggle="pill" href="#v-pills-effect" role="tab" aria-controls="v-pills-effect" aria-selected="false" style="color: black !important;">Our Promise
                        </a>
                    </div>
                </div>
                <div class="col-md-12 align-items-center ftco-animate">

                    <div class="tab-content ftco-animate" id="v-pills-tabContent">

                        <div class="tab-pane fade show active" id="v-pills-nextgen" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
                            <div class="d-md-flex">
                                <div class="one-forth align-self-center">
                                    <img src="/img/firm/mission.png" class="" alt="">
                                </div>
                                <div class="one-half ml-md-5 align-self-center">
                                    <h2 class="mb-4">OUR MISSION</h2>
                                    <p>To have a positive impact on the lives of our clients by helping them achieve their goals and obtain peace of mind over their finances. We will do this by providing financial services tailored to the specific needs
                                        of each client, based on their goals and values.</p>
                                    <p>Our mission is to continue to grow and protect our clients’ assets and to help them achieve their dreams and life goals. We aim to do this in such a way as to become the trusted source of knowledge and leadership
                                        to our clients, our staff and to the wider community.</p>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="v-pills-performance" role="tabpanel" aria-labelledby="v-pills-performance-tab">
                            <div class="d-md-flex">
                                <div class="one-forth order-last align-self-center">
                                    <img src="/img/firm/vision.png" class="" alt="">
                                </div>
                                <div class="one-half order-first mr-md-5 align-self-center">
                                    <h2 class="mb-4">OUR VISION
                                    </h2>
                                    <p>Our vision as a firm focuses on helping others achieve financial goals, as well as understanding of each client’s unique purpose, mission and values. We strive to empower clients by offering education, tools and
                                        resources aimed at facilitating clear communication and bringing definition to their ambitions and objectives. Each client has different ideas about what makes life great. </p>
                                    <p>We take the burden out of managing the financial details so clients can enjoy life’s journey and live out their unique purpose. We strive to be a force of calm, a navigator in the face of anxiety and uncertainty
                                        that all too often accompany financial success.
                                    </p>


                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="v-pills-effect" role="tabpanel" aria-labelledby="v-pills-effect-tab">
                            <div class="d-md-flex">
                                <div class="one-forth align-self-center">
                                    <img src="/img/firm/promise.png" class="" alt="">
                                </div>
                                <div class="one-half ml-md-5 align-self-center">
                                    <h2 class="mb-4">OUR PROMISE
                                    </h2>
                                    <p>As public policy stewards, Royal Monarch is held to the highest fiduciary standard. Financial planning advice and wealth management services must be delivered to the public with objectivity, accountability, and
                                        transparency. We place client interests above those of our firm, employees, and shareholders.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> */ ?>
            </div>
        </div>
    </section>

    <!-- section Area end-->




</main>
@endsection




@section('2')
    active
@endsection