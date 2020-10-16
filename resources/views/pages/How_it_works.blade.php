@extends('pages/layouts.lay')


@section('styles')
<style>
    html {
        max-width: 100vw;
        overflow-x: hidden;
    }

    #svg_form_time {
        height: 15px;
        max-width: 80%;
        margin: 40px auto 20px;
        display: block;
    }

    #svg_form_time circle,
    #svg_form_time rect {
        fill: lightgray;
    }

    .button {
        background: green;
        border-radius: 100px;
        padding: 15px 25px;
        display: inline-block;
        margin: 10px;
        font-weight: bold;
        color: white;
        cursor: pointer;
    }

    .disabled {
        display: none;
    }

    aside {
        padding: 50px 100px 70px;
        max-width: 400px;
        margin: 30px auto;
        background: white;
        background: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(10px);
        box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.3);
        border-radius: 10px;
        transition: transform 0.2s ease-in-out;
    }

    input {
        width: 100%;
        margin: 5px 0px;
        display: inline-block;
        padding: 15px 25px;
        box-sizing: border-box;
        border-radius: 50px;
        border: 1px solid lightgrey;
        font-size: 1em;
        font-family: inherit;
        background: white;
    }
</style>

@endsection
@section('content')
      <main>
        <!-- Slider Area Start-->
        <div class="services-area">
            <div class="container">
                <!-- Section-tittle -->
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
{{--                        <div class="section-tittle text-center mb-40">--}}
{{--                            <span> How It Works  </span>--}}
{{--                            <h2>Home</h2>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider Area End-->
        <!-- ======= Services Section ======= -->

        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title">
                    <h2> <span style="color: #CDCDCD;">Planning.</span><span style="color: #999999;"> Execution.</span><span style="color: #1b31a7;"> Success.</span>

                    </h2>
                </div>
            </div>

        </div>
        <div class="bg bg-light p-5">
            <div id="svg_wrap"></div>
            <div class="text-center mb-4">
                <div class="button" id="prev">&larr; Previous</div>
                <div class="button" id="next">Next &rarr;</div>
            </div>

            <section id="services" class="services">
                <div class="container">



                    <div class="row justify-content-center">

                        <div class="col-lg-4 col-md-6 justify-content-center">
                            <div class="icon-boxes d-flex flex-column justify-content-center">
                                <div data-aos="zoom-in" data-aos-delay="100">
                                    <div class="icon-box iconbox-blue">
                                        <div class="icon icon1">
                                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                              <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                            </svg>
                                            <img src="/img/how/icons/teamwork.svg" class="img-fluid" style="width: 80%; z-index: 10;" alt=""> </div>
                                        <h4><a href="">Start</a></h4>
                                        <p>Determine How to Work Together</p>
                                    </div>
                                </div>




                            </div>
                            <!-- End .content-->
                        </div>
                        <div class="content col-lg-5 col-md-6 d-flex flex-column justify-content-center">
                            <img src="/img/how/1.png" class="img-fluid" alt="">
                        </div>

                    </div>



                </div>
            </section>
            <section id="services" class="services">
                <div class="container">



                    <div class="row justify-content-center align-content-center">
                        <div class="content col-lg-5 col-md-6 d-flex flex-column justify-content-center">
                            <img src="/img/how/2.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-4 col-md-6 justify-content-center">
                            <div class="icon-boxes d-flex flex-column justify-content-center">

                                <div class="icon-box iconbox-orange ">
                                    <div class="icon icon2">
                                        <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                              <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                            </svg>
                                        <img src="/img/how/icons/discover.svg" class="img-fluid" style="width: 80%; z-index: 10;" alt="">
                                    </div>
                                    <h4><a href="">Discovery Meeting</a></h4>
                                    <p>

                                        • Learn and understand your situation <br>• Identify, clarify, and prioritize your goals, values, and concerns</p>
                                </div>
                            </div>





                            <!-- End .content-->
                        </div>

                    </div>



                </div>
            </section>



            <section id="services" class="services">
                <div class="container">



                    <div class="row  justify-content-center">

                        <div class="col-lg-4 col-md-6 justify-content-center">
                            <div class="icon-boxes d-flex flex-column justify-content-center">
                                <div class="d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
                                    <div class="icon-box iconbox-pink">
                                        <div class="icon icon3">
                                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                          <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
                        </svg>
                                            <img src="/img/how/icons/policy.svg" class="img-fluid" style="width: 80%; z-index: 10;" alt="">
                                        </div>
                                        <h4><a href="">Develop an Investment Policy Statement</a></h4>
                                        <p>
                                            • Document client investment objectives and constraints. <br> • Provide accountability and structure to portfolio construction.</p>
                                    </div>
                                </div>



                            </div>

                            <!-- End .content-->
                        </div>


                        <div class="content col-lg-5 col-md-6 d-flex flex-column justify-content-center">
                            <img src="/img/how/3.png" class="img-fluid" alt="">
                        </div>
                    </div>



                </div>
            </section>
            <section id="services" class="services">
                <div class="container">



                    <div class="row  justify-content-center">
                        <div class="content col-lg-5 col-md-6 d-flex flex-column justify-content-center">
                            <img src="/img/how/4.png" class="img-fluid" alt="">
                        </div>

                        <div class="col-lg-4 col-md-6 justify-content-center">
                            <div class="icon-boxes d-flex flex-column justify-content-center">
                                <div class="d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
                                    <div class="icon-box iconbox-teal">
                                        <div class="icon icon4">
                                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                      <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813"></path>
                    </svg>
                                            <img src="/img/how/icons/analysing.svg" class="img-fluid" style="width: 80%; z-index: 10;" alt="">
                                        </div>
                                        <h4><a href="">Assess and Analyze</a></h4>
                                        <p>
                                            Analyse all areas of your financial life: <br> • Cash Flow management <br> • Insurance and Protection Planning<br> • Portfolio Construction <br> • Asset Management <br> • Retirement Planning <br> • Education
                                            Planning
                                            <br> • Tax Planning</p>
                                    </div>
                                </div>



                            </div>

                            <!-- End .content-->
                        </div>



                    </div>



                </div>
            </section>



            <section id="services" class="services">
                <div class="container">

                    <div class="section-title">
                        <br>
                    </div>

                    <div class="row  justify-content-center">

                        <div class="col-lg-4 col-md-6 justify-content-center">
                            <div class="icon-boxes d-flex flex-column justify-content-center">

                                <div class="d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                                    <div class="icon-box iconbox-blue">
                                        <div class="icon icon5">
                                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                              <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                            </svg>
                                            <img src="/img/how/icons/strategy.svg" class="img-fluid" style="width: 80%; z-index: 10;" alt="">
                                        </div>
                                        <h4><a href="">Design an Investment Strategy</a></h4>
                                        <p>
                                            • Integrate asset allocation with financial plan • Incorporate capital market expectations and economic outlook • Implement the most appropriate risk management strategy</p>
                                    </div>
                                </div>




                            </div>
                            <!-- End .content-->
                        </div>
                        <div class="content col-lg-5 col-md-6 d-flex flex-column justify-content-center">
                            <img src="/img/how/5.png" class="img-fluid" alt="">
                        </div>

                    </div>



                </div>
            </section>
            <section id="services" class="services">
                <div class="container">

                    <div class="section-title">
                        <br>
                    </div>

                    <div class="row  justify-content-center">
                        <div class="content col-lg-5 col-md-6 d-flex flex-column justify-content-center">
                            <img src="/img/how/6.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-4 col-md-6 justify-content-center">
                            <div class="icon-boxes d-flex flex-column justify-content-center">

                                <div class="d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
                                    <div class="icon-box iconbox-orange ">
                                        <div class="icon icon6">
                                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                          <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                        </svg>
                                            <img src="/img/how/icons/quality.svg" class="img-fluid" style="width: 80%; z-index: 10;" alt="">
                                        </div>
                                        <h4><a href="">Propose Planning and Recommendations</a></h4>
                                        <p>
                                            • Educate and communicate all available options • Evaluate and offer optimal solutions</p>
                                    </div>
                                </div>




                            </div>
                            <!-- End .content-->
                        </div>

                    </div>



                </div>
            </section>


            <section id="services" class="services">
                <div class="container">

                    <div class="section-title">
                        <br>
                    </div>

                    <div class="row justify-content-center">

                        <div class="col-lg-4 col-md-6 ">
                            <div class="icon-boxes d-flex flex-column justify-content-center">
                                <div class="d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                                    <div class="icon-box iconbox-blue">
                                        <div class="icon icon7">
                                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                              <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                            </svg>
                                            <img src="/img/how/icons/strategy.svg" class="img-fluid" style="width: 80%; z-index: 10;" alt="">
                                        </div>
                                        <h4><a href="">Implement Financial Plan and Investment Strategy</a></h4>
                                        <p>
                                            • Establish online access • Open new accounts • Transfer existing assets • Provide written financial plan • Address risk management and protection needs</p>
                                    </div>
                                </div>



                            </div>
                        </div>
                        <!-- End .content-->


                        <div class="content col-lg-5 col-md-6 d-flex flex-column justify-content-center">
                            <img src="/img/how/7.png" class="img-fluid" alt="">
                        </div>
                    </div>



                </div>
            </section>
            <section id="services" class="services">
                <div class="container">

                    <div class="section-title">
                        <br>
                    </div>

                    <div class="row justify-content-center">
                        <div class="content col-lg-5 col-md-6 d-flex flex-column justify-content-center">
                            <img src="/img/how/8.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="icon-boxes d-flex flex-column justify-content-center">
                                <div class="d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
                                    <div class="icon-box iconbox-orange ">
                                        <div class="icon icon8">
                                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                          <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                        </svg>
                                            <img src="/img/how/icons/plan.svg" class="img-fluid" style="width: 80%; z-index: 10;" alt="">
                                        </div>
                                        <h4><a href="">
                                            Monitor and Update Your Financial Plan</a></h4>
                                        <p>

                                            • Revisit goals and client situation • Review investment strategy • Modify and track financial plan & IPS • Facilitate understanding of client statements and online resources</p>
                                    </div>
                                </div>



                            </div>
                        </div>
                        <!-- End .content-->



                    </div>



                </div>
            </section>



            <section id="services" class="services" style="margin-bottom: 60px;">
                <div class="container">

                    <div class="section-title">
                        <br>
                    </div>

                    <div class="row align-items-center justify-content-center">

                        <div class="col-lg-4 col-md-6">
                            <div class="icon-boxes d-flex flex-column justify-content-center">
                                <div class="d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                                    <div class="icon-box iconbox-blue">
                                        <div class="icon icon9">
                                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                              <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                            </svg>
                                            <img src="/img/how/icons/refer.svg" class="img-fluid" style="width: 80%; z-index: 10;" alt="">
                                        </div>
                                        <h4><a href="">Refer friends, Family, and Co-workers</a></h4>
                                        <p>
                                            The best compliment we could ever receive is a new introduction from you .</p>
                                    </div>
                                </div>




                            </div>
                            <!-- End .content-->
                        </div>
                        <div class="content  col-lg-5 col-md-6 d-flex flex-column justify-content-center">
                            <img src="/img/how/9.png" class="img-fluid" alt="">
                        </div>
                    </div>



                </div>
            </section>


        </div>




        <!-- End Services Section -->





    </main>
@endsection
@section('3')
    active
@endsection


    @section('scripts')
    <script>
        
        var base_color = "lightgray";
        var active_color = "green";

        var child = 1;
        var length = $("section").length - 1;
        $("#prev").addClass("disabled");
        $("#submit").addClass("disabled");

        $("section").not("section:nth-of-type(1)").hide();
        $("section").not("section:nth-of-type(1)").css('transform', 'translateX(100px)');

        var svgWidth = length * 200 + 24;
        $("#svg_wrap").html(
            '<svg version="1.1" id="svg_form_time" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 ' +
            svgWidth +
            ' 24" xml:space="preserve"></svg>'
        );

        function makeSVG(tag, attrs) {
            var el = document.createElementNS("http://www.w3.org/2000/svg", tag);
            for (var k in attrs) el.setAttribute(k, attrs[k]);
            return el;
        }

        for (i = 0; i < length; i++) {
            var positionX = 12 + i * 200;
            var rect = makeSVG("rect", {
                x: positionX,
                y: 9,
                width: 200,
                height: 6
            });
            document.getElementById("svg_form_time").appendChild(rect);
            // <g><rect x="12" y="9" width="200" height="6"></rect></g>'
            var circle = makeSVG("circle", {
                cx: positionX,
                cy: 12,
                r: 12,
                width: positionX,
                height: 6
            });
            document.getElementById("svg_form_time").appendChild(circle);
        }

        var circle = makeSVG("circle", {
            cx: positionX + 200,
            cy: 12,
            r: 12,
            width: positionX,
            height: 6
        });
        document.getElementById("svg_form_time").appendChild(circle);

        $("circle:nth-of-type(1)").css("fill", active_color);

        $(".button").click(function() {
            $("#svg_form_time rect").css("fill", active_color);
            $("#svg_form_time circle").css("fill", active_color);
            var id = $(this).attr("id");
            if (id == "next") {
                $("#prev").removeClass("disabled");
                if (child >= length) {
                    $(this).addClass("disabled");
                    $('#submit').removeClass("disabled");
                }
                if (child <= length) {
                    child++;
                }
            } else if (id == "prev") {
                $("#next").removeClass("disabled");
                $('#submit').addClass("disabled");
                if (child <= 2) {
                    $(this).addClass("disabled");
                }
                if (child > 1) {
                    child--;
                }
            }
            var circle_child = child + 1;
            $("#svg_form_time rect:nth-of-type(n + " + child + ")").css(
                "fill",
                base_color
            );
            $("#svg_form_time circle:nth-of-type(n + " + circle_child + ")").css(
                "fill",
                base_color
            );
            var currentSection = $("section:nth-of-type(" + child + ")");
            currentSection.fadeIn();
            currentSection.css('transform', 'translateX(0)');
            currentSection.prevAll('section').css('transform', 'translateX(-100px)');
            currentSection.nextAll('section').css('transform', 'translateX(100px)');
            $('section').not(currentSection).hide();
        });
    </script>
    @endsection

