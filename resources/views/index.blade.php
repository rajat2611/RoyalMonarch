
@extends('pages.layouts.lay')

@section('content')


<main>

    <!-- Slider Area Start-->
    <div class="slider-area">
        <div class=" slider-height d-flex align-items-center">
            <div class="container" >
                <div class="row">
                    <div class="d-flex align-items-center">
                        <div class="col-lg-7 col-md-9 ">
                            <div class="hero__caption">
                                <h1 data-animation="fadeInLeft" data-delay=".4s">Taking care of what's important. so you can focus on what matters most to you .</h1>
                                <h4 class="" style="color:gray" data-animation="fadeInLeft" data-delay=".6s">We give you clarity, confidence and control over your financial decision.</h4>
                                <!-- Hero-btn -->
                                <div class="hero__btn" data-animation="fadeInLeft" data-delay=".8s">
                                    <a href="#" role="button" data-toggle="modal" data-target="#exampleModal" class="btn hero-btn">Get Started</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="hero__img d-none d-lg-block about-main" data-animation="fadeInRight" data-delay="1s">
                                <img src="{{asset('image/about-main.svg')}}" alt="" width="100%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Area End-->

    <!-- We Create Start -->
    <div class="we-create-area create-padding my-4">
        <div class="container">
            <div class="row d-flex align-items-center">

                <div class="col-lg-6 col-md-12">
                    <div class="we-create-cap">
                        <h3>Make your money work for you </h3>
                        <h4>Making ₹ 100 Crores is not a myth </h4>
                        <p class="mt-4">Have you ever imagined to be the <b class="text-blue">wealthiest 1% of the world?</b>
                            <!--<br>The calculator is for the illustrative purposes only and may not apply to your individual circumstances. </p>-->

                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div style="height: auto; width : 100%"> <canvas id="myChart" height="300" width="400"></canvas></div>
                        </div>
                    </div>
                </div>
            </div>
            <p class="text-center mt-4">
                The calculator is for illustrative purposes only and may not apply to your individual circumstances. <a href="#" style="color: blue;" role="button" data-toggle="modal" data-target="#exampleModal2">Learn about our assumptions.</a>


            </p>
        </div>

    </div>
    <!-- We Create End -->


    <!-- We Create Start-dynamiqye -->
    <div class="we-create-area create-padding" style="padding-top: 50px;">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="section-tittle text-center">
                        <h2>Let’s see how much You can make with your savings</h2>
                        <form action="#" class="invest" validated>
                            <p style="line-height: 1.5;margin-bottom: 50px;"> Hey My Name is <input type="text" class="text" name="name" value="Rahul"> and I am <input type="text" class="age" name="age" value="30" required> years young . I can invest    <i class="fa fa-rupee-sign"></i> <input type="text" class="text" name="invest"
                                                                                                                                                                                                        value="5,00,000" required> today and save  <i class="fa fa-rupee-sign"></i> <input type="text" class="te" value="5,000" name="monthly" required> every month.</p>
                            <button type="submit" href="#chart" class=" btn btn2 py-4 px-2">Check Your Wealth</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row d-flex align-items-center mt-60">
                <div class="col-lg-6 col-md-12" id="chart">
                    <div class="card">
                    <div class="card-body">
                        <div style="height: auto; width : 100%"> <canvas id="myChart2" height="300" width="400"></canvas></div>
                    </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="we-create-cap">
                        <p>“Congratulations!! <strong class="inp1 color_light_green">Rahul</strong>, You can make  <i class="fa fa-rupee-sign color_light_green"></i> <strong class="inp2 color_light_green">   4,74,85,20,901  </strong> in <span class="color_light_green"> </span><strong class="inp3 color_light_green">35</strong> <span class="color_light_green">Years</span>, If you start today. </p>
                        <!-- Hero-btn -->
                        <div class="hero__btn text-center text-lg-left" data-animation="fadeInLeft" data-delay=".8s">
                            <a href="#" role="button" data-toggle="modal" data-target="#exampleModal" class="btn hero-btn">Get Started</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <!-- We Create End -->
    <!-- What We do start-->
    <div class="what-we-do we-padding">
        <div class="container">
            <!-- Section-tittle -->
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="section-tittle text-center">
                        <h2>“Live your life by design, not by default.”</h2>
                        <h4 class="font-weight-600 blue-text">Why do you need us?</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-do text-center mb-30">
                        <div class="do-icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" style="width: 150px;height: 150px;position: absolute;top: 20px;left: 119px;" xmlns="http://www.w3.org/2000/svg">
                            <path stroke="none" stroke-width="0" fill="#ffff0017" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                            </svg>
                            <img src=" {{asset('rafi/Royal_Icons_3/Home/Financial Assistance.png')}}" alt=""> </div>
                        <div class="do-caption">
                            <h4>Financial Assistance</h4>
                            <p>Though making 100 crores is not a myth, you need someone to take you there. </p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-do  text-center mb-30">
                        <div class="do-icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" style="width: 150px;height: 150px;position: absolute;top: 20px;left: 119px;" xmlns="http://www.w3.org/2000/svg">
                            <path stroke="none" stroke-width="0" fill="#5c74ff12" d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813"></path>
                            </svg>
                            <img src="{{asset('rafi/Royal_Icons_3/Home/The Life you want.png')}}" alt="">
                        </div>
                        <div class="do-caption">
                            <h4>The life you want</h4>
                            <p> Dedicated to helping you Live the life you want, we build our relationship by asking the candid and sometimes difficult questions.</p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-do text-center mb-30">
                        <div class="do-icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" style="width: 150px;height: 150px;position: absolute;top: 20px;left: 119px;" xmlns="http://www.w3.org/2000/svg">
                            <path stroke="none" stroke-width="0" fill="rgba(255, 192, 203, 0.09)" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
                            </svg>
                            <img src="{{asset('rafi/Royal_Icons_3/Home/Together.png')}}" alt="">
                        </div>
                        <div class="do-caption">
                            <h4>Together</h4>
                            <p>Together, we have an honest conversation about money and what Matters most to you and your family, across the generation.</p>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-do text-center mb-30">
                        <div class="do-icon">
                            <svg width="100" height="100" style="width: 150px;height: 150px;position: absolute;top: 20px;left: 119px;" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                            <path stroke="none" stroke-width="0" fill="#0078f50a" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                            </svg>
                            <img src="{{asset('rafi/Royal_Icons_3/Home/Support - Team Of Advisors (1).png')}}" alt="">
                        </div>

                        <div class="do-caption">
                            <h4>Support</h4>
                            <p>Your dedicated team of advisors develops a personalized plan, tailored to your Values and life goals.</p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-do  text-center mb-30">
                        <div class="do-icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" style="width: 150px;height: 150px;position: absolute;top: 20px;left: 119px;" xmlns="http://www.w3.org/2000/svg">
                            <path stroke="none" stroke-width="0" fill="#ffa50017" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                            </svg>
                            <img src="{{asset('rafi/Royal_Icons_3/Home/Partnership.png')}}" alt="">
                        </div>
                        <div class="do-caption">
                            <h4>Partnership</h4>
                            <p>This is a lifelong partnership backed by 15 years of expertise, providing unparalleled Consistency, perspective, and access. </p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- What We do End-->
    <!-- feature_part start-->
    <section class="feature_part single_feature_page">
        <div class="container">
            <div class="row justify-content-center" style="margin-bottom: 100px;">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <h2>Let’s see who have you been until now and who you could have been now,</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="single_feature">
                                <div class="single_feature_part">
                                    <span class="single_feature_icon"><img src="{{asset('rafi/Royal_Icons_3/Home/Confused.png')}}" alt=""></span>
                                    <h4 class="blue-text">Confused</h4>

                                </div>
                            </div>
                            <div class="single_feature">
                                <div class="single_feature_part">
                                    <span class="single_feature_icon"><img src="{{asset('rafi/Royal_Icons_3/Home/No savings.png')}}" style="width:50px;" alt=""></span>
                                    <h4 class="blue-text">No savings</h4>
                                </div>
                            </div>
                            <div class="single_feature">
                                <div class="single_feature_part">
                                    <span class="single_feature_icon"><img src="{{asset('rafi/Royal_Icons_3/Home/Financial Issues.png')}}" alt=""></span>
                                    <h4 class="blue-text">Financial Issues</h4>
                                </div>
                            </div>
                            <div class="single_feature">
                                <div class="single_feature_part">
                                    <span class="single_feature_icon"><img src="{{asset('rafi/Royal_Icons_3/Home/Dreaming.png')}}" alt=""></span>
                                    <h4 class="blue-text">Only Dreaming</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h5 class="text-center mb-2">Without Us</h5>
                            <div class="single_feature_img">
                                <img src="/image/Home/comparison_LEFT.png" alt="" style="max-width: 100%;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="text-center mb-2">With Us</h5>
                            <div class="single_feature_img">
                                <img src="/image/Home/comparison_RIGHT.png" alt="" style="max-width: 100%;">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single_feature">
                                <div class="single_feature_part">
                                    <span class="single_feature_icon"><img src="{{asset('rafi/Royal_Icons_3/Home/Goal Oriented.png')}}" alt=""></span>
                                    <h4 class="blue-text">Goal oriented</h4>

                                </div>
                            </div>
                            <div class="single_feature">
                                <div class="single_feature_part">
                                    <span class="single_feature_icon"><img src="{{asset('rafi/Royal_Icons_3/Home/Saving and Investment.png')}}" alt=""></span>
                                    <h4 class="blue-text">Saving + Investment</h4>

                                </div>
                            </div>
                            <div class="single_feature">
                                <div class="single_feature_part">
                                    <span class="single_feature_icon"><img src="{{asset('rafi/Royal_Icons_3/Home/Financial Secured.png')}}" alt=""></span>
                                    <h4 class="blue-text">Financially Secured</h4>

                                </div>
                            </div>
                            <div class="single_feature">
                                <div class="single_feature_part">
                                    <span class="single_feature_icon"><img src="{{asset('rafi/Royal_Icons_3/Home/Chasing Dreams.png')}}" alt=""></span>
                                    <h4 class="blue-text">Chasing Dreams</h4>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>
    <!-- feature_part start-->

    <!-- Generating Start -->
    <div class="generating-area ">
        <div class="container">
            <!-- Section-tittle -->
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="section-tittle text-center">
                        <h2>Who We Are​​</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="single-generating d-flex flex-column text-center mb-30">
                        <div class="generating-icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" style="width: 150px;height: 125px;position: absolute;top: 20px;left: 119px;" xmlns="http://www.w3.org/2000/svg">
                            <path stroke="none" stroke-width="0" fill="#ffa50017" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                            </svg>
                            <img src="{{asset('rafi/Royal_Icons_3/Home/Helping you Realize the Possibilities.png')}}" alt="">
                        </div>

                        <div class="generating-cap">
                            <h4> Helping you realize The possibilities
                            </h4>
                            <p> There’s always a possibility of a fiasco. But, there’s also the possibility of bliss. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="single-generating d-flex flex-column text-center mb-30">
                        <div class="generating-icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" style="width: 150px;height: 125px;position: absolute;top: 20px;left: 119px;" xmlns="http://www.w3.org/2000/svg">
                            <path stroke="none" stroke-width="0" fill="#5c74ff12" d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813"></path>
                            </svg>
                            <img src="{{asset('rafi/Royal_Icons_3/Home/Passion for Providing solutions.png')}}" alt=""> </div>
                        <div class="generating-cap">
                            <h4>A passion for providing Solutions
                            </h4>
                            <p>understand your needs and create tailored solutions to help meet your goals. </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4">
                    <div class="single-generating d-flex flex-column text-center mb-30">
                        <div class="generating-icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" style="width: 150px;height: 125px;position: absolute;top: 20px;left: 119px;" xmlns="http://www.w3.org/2000/svg">
                            <path stroke="none" stroke-width="0" fill="#80008012" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
                            </svg>
                            <img src="{{asset('rafi/Royal_Icons_3/Home/A specialist approach.png')}}" alt=""> </div>
                        <div class="generating-cap">
                            <h4>A Specialist approach</h4>
                            <p>Our focused teams are led by industry veterans with decades of experience </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Generating End -->


    <!-- Generating Start 1 -->
    <div class="generating-area ">
        <div class="container">
            <!-- Section-tittle -->
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="section-tittle text-center">
                        <h2>Data Security and Privacy </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="single-generating d-flex flex-column text-center mb-30 text-center">
                        <div class="generating-icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" style="width: 150px;height: 150px;position: absolute;top: 20px;left: 201px;;" xmlns="http://www.w3.org/2000/svg">
                            <path stroke="none" stroke-width="0" fill="#0080000f" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                            </svg>
                            <img src="{{asset('rafi/Royal_Icons_3/Home/Security.png')}}" alt=""> </div>
                        <div class="generating-cap">
                            <h4> Security
                            </h4>
                            <p> We use 128-bit encryption to protect the transmission of your data to our site. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single-generating d-flex flex-column text-center mb-30">
                        <div class="generating-icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" style="width: 178px;height: 150px;position: absolute;top: 20px;left: 201px;;" xmlns="http://www.w3.org/2000/svg">
                            <path stroke="none" stroke-width="0" fill="#ffc0cb2e" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
                            </svg>
                            <img src="{{asset('rafi/Royal_Icons_3/Home/Privacy (2).png')}}" alt=""> </div>
                        <div class="generating-cap">
                            <h4>Privacy
                            </h4>
                            <p>We do not share your personal information with unaffiliated third parties for their own marketing purposes. </p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- Generating End -->

    <!--Testimonials-->
    <div class="generating-area ">
        <div class="container">
            <!-- Section-tittle -->
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="section-tittle text-center">
                        <h2>Customer Testimonials </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="owl-carousel testimonial-carousel">
                    <div class="col-lg-12 col-md-12">
                        <div class="single-generating d-flex flex-column text-center mb-30 text-center p-5">
                            <p>“Simple, reliable, scalable, and consistent - that’s what I look for in passive investments and Royal Monarch to deliver.  Royal Monarch do the heavy lifting, generating competitive returns for investors in the form of both cash and peace of mind.” </p>
                            <b class="blue-text"> Mr. Akash Patel, Ahmedabad</b>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="single-generating d-flex flex-column text-center mb-30 p-5">
                            <p>"Since my first investment with Royal Monarch, team has taken the time to meet and explain every detail and question I have had.  Over the years, I have invested a significant part of my retirement with them. They have delivered more than I have expected. I hope for many more good years."</p>
                            <b class="blue-text">Mr. & Mrs. Shah, Mumbai</b>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="single-generating d-flex flex-column text-center mb-30 p-5">
                            <p>“Royal Monarch has a great mix of creativity and common sense in choosing and managing assets. Because of their thoroughness and ingenuity, they look at investment properties differently. They leave no stone unturned in finding ways to maximize the value of their ventures. In keeping investors informed, they give accurate and timely assessments and all. They have no hidden agenda.”</p>
                            <b class="blue-text">Mrs. Ranjan Patel, Bangaluru </b>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="single-generating d-flex flex-column text-center mb-30 p-5">
                            <p>“Royal Monarch has demonstrated integrity over the long term. When many investment firms appear just long enough to make a quick buck and leave. Royal Monarch, they always find ways to make good investments—even when it's not easy.”</p>
                            <b class="blue-text">Ms. Urvashi, New Delhi</b>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="single-generating d-flex flex-column text-center mb-30 p-5">
                            <p>Living overseas, it is important to me that I have peace of mind with my investment.  I have been using Royal Monarch for many years now and they have been exceptional in all aspects from onboarding to client service and generating welath.</p>
                            <b class="blue-text"> Mr. Jagat Puri, CA, USA</b>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Testimonials-->
    <!-- data security and privacy start -->
    <div class="we-create-area create-padding mb-5">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">

                <div class="col-lg-6 col-md-12 mb-5">
                    <div class="we-create-cap">
                        <h3>It's not Luck!! But, the Right decision at the Right Time. </h3>
                        <p class="font-22">
                            So, are you ready to make a guilt free decision? </p>
                        <a href="#" class="btn" role="button" data-toggle="modal" data-target="#exampleModal">  Join us NOW  </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-6 align-content-center">
                    <div class="we-create-img">
                        <img src="{{asset('rafi/Royal_Icons_3/Home/Its not luck but right decision (2).png')}}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- data security and privacy end -->





</main>
@endsection

@section('1')
active
@endsection

@section('styles')
<link rel="stylesheet" href="{{asset('css/pages/owl.carousel.min')}}">
@endsection
@section('scripts')
<script src="{{asset('js/pages/owl.carousel.min.js')}}"></script>
<script>
//$("#goals").bsMultiSelect({
//    cssPatch: {
//        choices: {
//            columnCount: '3'
//        },
//    }
//});
$(".owl-carousel").owlCarousel({
    loop: true,
//            stagePadding: 15,
//            margin: 30,
            nav: true,
//            center:true,
            navText: ['<span class=""><i class="fa fa-arrow-left"></i></span>', '<span <i class="fa fa-arrow-right"></i></span>'],
            responsive: {
                0: {
                    items: 1
                },
                1200: {
                    items: 2
                }
            }
});
//$("form.invest").submit();
</script>
@endsection


