

@extends('pages/layouts.lay')

@section('content')
<main>
    <!-- Slider Area Start-->
    <div class="services-area">
        <div class="container">
            <!-- Section-tittle -->
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">

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
                    <div class="row d-flex">
                        <div class="col-md-12">
                            <h1 class="text-center mb-4" data-animation="fadeInRight" data-delay=".4s" class="mb-5"> <span style="color: #CDCDCD;">Precise.</span><span style="color: #999999;"> Personalised.</span><span style="color: #1b31a7;"> Defined.</span></h1>
                        </div>
                        <div class="col-lg-2 col-md-9 about_menu_link">
                            @include('/pages.contact_menu')
                        </div>
                        <div class="col-10 ">
                            <div class="hero__caption hero__caption2">
                                <p data-animation="fadeInRight" data-delay=".6s">
                                    When we talk about the ways that wealth and financial stability can define the individual, it has little to do with a balance sheet, and more to do with a balanced life. True Wealth is all that money can’t buy and death can’t take away. It takes far more than financial planning. It requires a comprehensive approach with as much imagination as innovation – creativity paired with careful calculation.</p>
                                <div class="mb-10">
                                    <p>As your trusted advisor, we are wholly dedicated to helping you reach a higher purpose for your wealth and design a lasting legacy for your family. We leverage deep industry knowledge, a vast network of specialized services, proven investment strategies and a passion for serving you.</p>

                                </div>
                                <p data-animation="fadeInLeft" data-delay=".8s"> "Live your life by design, not by default."

                                </p>

                            </div>
                        </div>


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

    <!-- Testimonial Start -->
    <div class="testimonial-area bg-light my-5 py-5">
        <div class="container">
            <div class="testimonial-main">
                <!-- Section-tittle -->
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-12  col-md-12 pr-0">
                        <div class="section-tittle text-center">
                            <h2 style="margin-bottom: 5px !important;">The Values That Inspire Us
                            </h2>
                            <p style="margin-bottom: 50px !important;">
                                Part of what makes our firm unique is our dedication to delivering trust, transparency and accountability. These three words serve as a source of inspiration for everyone on our staff – and they drive what we seek to accomplish for our clients on a daily basis.
                            </p>
                        </div>
                        <div>

                        </div>
                    </div>
                </div>
                <div class="what-we-do we-padding">
                    <div class="container">
                        <!-- Section-tittle -->
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-8">

                            </div>
                        </div>
                        <!-- New code -->
                        <div class="row">
                            <!-- new code -->
                            <div class="col-md-12 align-items-center ftco-animate">
                                <div class="d-md-flex mb-4">
                                    <div class="one-forth align-self-center">
                                        <!--<img src="/img/help.svg" alt="">-->
                                        <img src="/image/approach/Trust.png" alt="">
                                    </div>
                                    <div class="one-half ml-md-5 align-self-center">
                                        <h2 class="mb-4">Trust</h2>
                                        <p>You can be confident that we will make decisions that are in your best interest – and based on your financial goals and objectives. When it comes to managing your hard-earned wealth, let your trusted advisor
                                            help you every step of the way. </p>
                                    </div>
                                </div>
                                <div class="d-md-flex mb-4">
                                    <div class="one-forth order-last align-self-center">
                                        <!--<img src="/img/presentation.svg" alt="">-->
                                        <img src="/image/approach/Transparancy.png" alt="">
                                    </div>
                                    <div class="one-half order-first mr-md-5 align-self-center">
                                        <h2 class="mb-4">Transaparancy</h2>
                                        <p> It’s important for us to communicate in a clear, straightforward way, giving our clients insight into why we make certain decisions and what the impact will be. Whether it’s disclosing all of the fees associated
                                            with your account, providing detailed trade notifications, or taking the time to discuss major economic events with you, we proactively educate clients through open and honest communication.</p>
                                    </div>
                                </div>
                                <div class="d-md-flex mb-5">
                                    <div class="one-forth align-self-center">
                                        <!--<img src="/img/firm/promise.png" class="" alt="">-->
                                        <img src="/image/approach/Acountability.png" alt="">
                                    </div>
                                    <div class="one-half ml-md-5 align-self-center">
                                        <h2 class="mb-4">Accountability</h2>
                                        <p>
                                            When we set out to accomplish something, we do it – with integrity and teamwork. We hold ourselves accountable no matter what, which gives our clients financial confidence knowing the team that manages their
                                            wealth follows through on their word. And, in turn, when we create your financial plan, we will hold you accountable, too. That mutual sense of responsibility is one of the most important ways we help you
                                            pursue your goals.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- New code -->
                        <?php /*
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="single-do text-center mb-30">
                                    <div class="do-icon">
                                        <img src="/img/help.svg" alt=""> </div>
                                    <div class="do-caption">
                                        <h4>Trust</h4>
                                        <p>You can be confident that we will make decisions that are in your best interest – and based on your financial goals and objectives. When it comes to managing your hard-earned wealth, let your trusted advisor
                                            help you every step of the way. </p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single-do  text-center mb-30">
                                    <div class="do-icon">
                                        <img src="/img/presentation.svg" alt="">
                                    </div>
                                    <div class="do-caption">
                                        <h4>Transaparancy</h4>
                                        <p> It’s important for us to communicate in a clear, straightforward way, giving our clients insight into why we make certain decisions and what the impact will be. Whether it’s disclosing all of the fees associated
                                            with your account, providing detailed trade notifications, or taking the time to discuss major economic events with you, we proactively educate clients through open and honest communication.</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single-do text-center mb-30">
                                    <div class="do-icon">
                                        <img src="/img/friendship.svg" alt="">
                                    </div>
                                    <div class="do-caption">
                                        <h4>Accountability</h4>
                                        <p>
                                            When we set out to accomplish something, we do it – with integrity and teamwork. We hold ourselves accountable no matter what, which gives our clients financial confidence knowing the team that manages their
                                            wealth follows through on their word. And, in turn, when we create your financial plan, we will hold you accountable, too. That mutual sense of responsibility is one of the most important ways we help you
                                            pursue your goals.
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div> */?>
                    </div>
                </div>
                {{--                <div class="row d-flex justify-content-center">--}}
                {{--                    <div class="col-lg-10 col-md-9">--}}
                {{--                        <div class="h1-testimonial-active">--}}
                {{--                            <!-- Single Testimonial -->--}}
                {{--                            <div class="single-testimonial text-center">--}}
                {{--                                <div class="testimonial-caption ">--}}
                {{--                                    <div class="testimonial-founder d-flex align-items-center justify-content-center">--}}

                {{--                                        <div class="founder-text " style="margin-bottom: 15px;">--}}
                {{--                                            <span>Trust</span>--}}
                {{--                                        </div>--}}
                {{--                                    </div>--}}
                {{--                                    <div class="testimonial-top-cap">--}}
                {{--                                        <p>You can be confident that we will make decisions that are in your best interest – and based on your financial goals and objectives. When it comes to managing your hard-earned wealth, let your trusted advisor--}}
                {{--                                            help you every step of the way.</p>--}}
                {{--                                    </div>--}}
                {{--                                    <!-- founder -->--}}

                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                            <!-- Single Testimonial -->--}}
                {{--                            <div class="single-testimonial text-center">--}}
                {{--                                <div class="testimonial-caption ">--}}
                {{--                                    <div class="testimonial-founder d-flex align-items-center justify-content-center">--}}

                {{--                                        <div class="founder-text " style="margin-bottom: 15px;">--}}
                {{--                                            <span>Transaparancy</span>--}}
                {{--                                        </div>--}}
                {{--                                    </div>--}}
                {{--                                    <div class="testimonial-top-cap">--}}
                {{--                                        <p>It’s important for us to communicate in a clear, straightforward way, giving our clients insight into why we make certain decisions and what the impact will be. Whether it’s disclosing all of the fees associated--}}
                {{--                                            with your account, providing detailed trade notifications, or taking the time to discuss major economic events with you, we proactively educate clients through open and honest communication.</p>--}}
                {{--                                    </div>--}}


                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                            <!-- Single Testimonial -->--}}
                {{--                            <div class="single-testimonial text-center">--}}
                {{--                                <div class="testimonial-caption ">--}}
                {{--                                    <div class="testimonial-founder d-flex align-items-center justify-content-center">--}}

                {{--                                        <div class="founder-text " style="margin-bottom: 15px;">--}}
                {{--                                            <span>Accountability</span>--}}
                {{--                                        </div>--}}
                {{--                                    </div>--}}
                {{--                                    <div class="testimonial-top-cap">--}}
                {{--                                        <p>When we set out to accomplish something, we do it – with integrity and teamwork. We hold ourselves accountable no matter what, which gives our clients financial confidence knowing the team that manages their--}}
                {{--                                            wealth follows through on their word. And, in turn, when we create your financial plan, we will hold you accountable, too. That mutual sense of responsibility is one of the most important ways we help you--}}
                {{--                                            pursue your goals.</p>--}}
                {{--                                    </div>--}}
                {{--                                    <!-- founder -->--}}

                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
            </div>
        </div>
    </div>
    <!-- Testimonial End -->




</main>
@endsection




@section('2')
active
@endsection
