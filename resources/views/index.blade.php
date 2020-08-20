
@extends('pages.layouts.lay')

@section('content')


<main>

    <!-- Slider Area Start-->
    <div class="slider-area">
        <div class="slider-active">
            <div class="single-slider slider-height d-flex align-items-center" >
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-7 col-md-9 ">
                            <div class="hero__caption">
                                <h1 data-animation="fadeInLeft" data-delay=".4s">Taking care of what's important. so you can focus on what matters most to you .</h1>
                                <p data-animation="fadeInLeft" data-delay=".6s">we give you clarity, confidence and control over your financial decision.</p>
                                <!-- Hero-btn -->
                                <div class="hero__btn" data-animation="fadeInLeft" data-delay=".8s">
                                    <a href="#" role="button" data-toggle="modal" data-target="#exampleModal" class="btn hero-btn">Get Started</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="hero__img d-none d-lg-block" data-animation="fadeInRight" data-delay="1s">
                            <img src="{{asset('img/hero/hero_right.png ')}}" alt="">
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
                        <h5>Making 100 Crores is not a myth </h5>
                        <p>Have you ever imagined to be the wealthiest 1% of the world?
                            <br>The calculator is for the illustrative purposes only and may not apply to your individual circumstances. </p>

                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div style="height: auto; width : 100%"> <canvas id="myChart" height="300" width="400"></canvas></div>
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
                            <p style="line-height: 1.5;"> hey my name is <input type="text" class="text" name="name" value="Rahul"> and i am <input type="number" class="age" name="age" value="30" required> years young . i can invest R.s <input type="number" class="text" name="invest"
                                    value="500000" required> today and save R.s <input type="number" class="te" value="5000" name="monthly" required>every month.</p>
                            <button type="submit" href="#chart" class=" btn btn2 py-4 px-2">Calculate SIP</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 col-md-12" id="chart">
                    <div style="height: auto; width : 100%"> <canvas id="myChart2" height="300" width="400"></canvas></div>

                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="we-create-cap">
                        <p>“Congratulations!! <strong class="inp1">Rahul</strong>, You can make <strong class="inp2">Rs. 78</strong> Crores in <strong class="inp3">30</strong> Years, If you start today”s. </p>
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
                        <h4>Why do you need us?</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-do text-center mb-30">
                        <div class="do-icon">
                            <img src="/img/help.svg" alt=""> </div>
                        <div class="do-caption">
                            <h4>Financial Assistance</h4>
                            <p>Though making 100 crores is not a myth, you need someone to take you there. </p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-do  text-center mb-30">
                        <div class="do-icon">
                            <img src="/img/presentation.svg" alt="">
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
                            <img src="/img/friendship.svg" alt="">
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
                            <img src="/img/money.svg" alt="">
                        </div>
                        <div class="do-caption">
                            <h4>Supoort</h4>
                            <p>Your dedicated team of advisors develops a personalized plan, tailored to your Values and life goals.</p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-do active text-center mb-30">
                        <div class="do-icon">
                            <img src="/img/partnership-handshake.svg" alt="">
                        </div>
                        <div class="do-caption">
                            <h4>partnership</h4>
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

                        <div class="col-6">
                            <div class="single_feature">
                                <div class="single_feature_part">
                                    <span class="single_feature_icon"><img src="/img/icon/confusion.svg" alt=""></span>
                                    <h4>Confused</h4>

                                </div>
                            </div>
                            <div class="single_feature">
                                <div class="single_feature_part">
                                    <span class="single_feature_icon"><img src="/img/icon/money.svg" alt=""></span>
                                    <h4>No savings</h4>
                                </div>
                            </div>
                            <div class="single_feature">
                                <div class="single_feature_part">
                                    <span class="single_feature_icon"><img src="/img/icon/risk.svg" alt=""></span>
                                    <h4>Financial Issues</h4>
                                </div>
                            </div>
                            <div class="single_feature">
                                <div class="single_feature_part">
                                    <span class="single_feature_icon"><img src="/img/icon/dream.svg" alt=""></span>
                                    <h4>Only Dreaming</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="single_feature_img">
                                <img src="/img/icon/feature_1.jpg" alt="" style="max-width: 100%;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-6">
                            <div class="single_feature_img">
                                <img src="/img/icon/feature_2.jpg" alt="" style="max-width: 100%;">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="single_feature">
                                <div class="single_feature_part">
                                    <span class="single_feature_icon"><img src="/img/icon/success.svg" alt=""></span>
                                    <h4>Goal oriented</h4>

                                </div>
                            </div>
                            <div class="single_feature">
                                <div class="single_feature_part">
                                    <span class="single_feature_icon"><img src="/img/icon/money (1).svg" alt=""></span>
                                    <h4>Saving + Investment</h4>

                                </div>
                            </div>
                            <div class="single_feature">
                                <div class="single_feature_part">
                                    <span class="single_feature_icon"><img src="/img/icon/money-bag.svg" alt=""></span>
                                    <h4>Financially Secured</h4>

                                </div>
                            </div>
                            <div class="single_feature">
                                <div class="single_feature_part">
                                    <span class="single_feature_icon"><img src="/img/icon/dream (1).svg" alt=""></span>
                                    <h4>Chasing Dreams</h4>

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
                            <img src="/img/icon/report.svg" alt="">
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
                            <img src="/img/icon/solution.svg" alt=""> </div>
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
                            <img src="/img/icon/approach.svg" alt=""> </div>
                        <div class="generating-cap">
                            <h4>A Specialist approach</h4>
                            <p>• Our focused teams are led by industry veterans with decades of experience </p>
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
                        <h2>data security and privacy </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="single-generating d-flex flex-column text-center mb-30">
                        <div class="generating-icon">
                            <img src="/img/icon/login.svg" alt=""> </div>
                        <div class="generating-cap">
                            <h4> security
                            </h4>
                            <p> We use 128-bit encryption to protect the transmission of your data to our site. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single-generating d-flex flex-column text-center mb-30">
                        <div class="generating-icon">
                            <img src="/img/icon/password.svg" alt=""> </div>
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


    <!-- data security and privacy start -->
    <div class="we-create-area create-padding mb-5">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">

                <div class="col-lg-6 col-md-12 mb-5">
                    <div class="we-create-cap">
                        <h3>It's not Luck!! But, the Right decision at the Right Time. </h3>
                        <p>
                            So, are you ready to make a guilt free decision? </p>
                        <a href="#" class="btn" role="button" data-toggle="modal" data-target="#exampleModal">  Join us NOW  </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-6 align-content-center">
                    <div class="we-create-img">
                        <img src="/img/service/teamwork.svg" class="img-fluid" alt="">
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

@section('scripts')
        <script>
              $("#goals").bsMultiSelect({
            cssPatch: {
                choices: {
                    columnCount: '3'
                },
            }
        });
        </script>
@endsection
      

