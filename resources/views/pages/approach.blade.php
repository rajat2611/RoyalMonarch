

@extends('pages/layouts.lay')

@section('content')
<main>
    <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content container">
                        <div class="modal-header"  style="border-bottom: 0px">
                            <h5 class="modal-title text-capitalize" id="successModalLabel"></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-center successDescription" style="min-height: 325px;">
                            <ul class="nav nav-tabs mb-20 justify-content-center" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#nav-mission" role="tab" aria-controls="home" aria-selected="true">Trust</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#nav-vision" role="tab" aria-controls="profile" aria-selected="false">Transaparancy</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#nav-promise" role="tab" aria-controls="contact" aria-selected="false">Accountability</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-mission" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <p class="trust-desc succes-description text-justify">
                                        You can be confident that we will make decisions that are in your best interest – and based on your financial goals and objectives. When it comes to managing your hard-earned wealth, let your trusted advisor help you every step of the way.
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="nav-vision" role="tabpanel" aria-labelledby="nav-profile-tab">
                                    <p class="transaparancy-desc succes-description text-justify">
                                        It’s important for us to communicate in a clear, straightforward way, giving our clients insight into why we make certain decisions and what the impact will be. Whether it’s disclosing all of the fees associated with your account, providing detailed trade notifications, or taking the time to discuss major economic events with you, we proactively educate clients through open and honest communication.
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="nav-promise" role="tabpanel" aria-labelledby="nav-contact-tab">
                                    <p class="accountability-desc succes-description text-justify">
                                        When we set out to accomplish something, we do it – with integrity and teamwork. We hold ourselves accountable no matter what, which gives our clients financial confidence knowing the team that manages their wealth follows through on their word. And, in turn, when we create your financial plan, we will hold you accountable, too. That mutual sense of responsibility is one of the most important ways we help you pursue your goals.
                                    </p>
                                </div>
                            </div>
                            </div>
                        <div class="modal-footer"  style="border-top: 0px">
                            <button type="button" class="btn btn-secondary py-4 px-3" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>
    
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
                        <div class="col-md-12 mb-50">
                            <h1 class="text-center font-weight-600 font-60" data-animation="fadeInRight" data-delay=".4s" class="mb-5"> <span style="color: #CDCDCD;">Precise.</span><span style="color: #999999;"> Personalised.</span><span style="color: #1b31a7;"> Defined.</span></h1>
                        </div>
                        <div class="col-lg-2 col-md-9 about_menu_link">
                            @include('/pages.contact_menu')
                        </div>
                        <div class="col-9 ml-3">
                            <div class="hero__caption hero__caption2">
                                <p data-animation="fadeInRight" data-delay=".6s">
                                    When we talk about the ways that wealth and financial stability can define the individual, it has little to do with a <span class="text-blue">balance sheet</span>, and more to do with a <span class="text-blue">balanced life.</span> True Wealth is all that money can’t buy and death can’t take away. It takes far more than financial planning. It requires a comprehensive approach with as much imagination as innovation – creativity paired with careful calculation.</p>
                                <div class="mb-10">
                                    <p>As your trusted advisor, we are wholly dedicated to helping you reach a <span class="text-blue">higher purpose for your wealth and design a lasting legacy for your family.</span> We leverage deep industry knowledge, a vast network of specialized services, proven investment strategies and a passion for serving you.</p>

                                </div>
                                <h2 class="color-light-blue text-center font-weight-600" data-animation="fadeInLeft" data-delay=".8s"> "Live your life by design, not by default."</h2>

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
    <div class="testimonial-area py-5">
        <div class="container">
            <div class="testimonial-main">
                <!-- Section-tittle -->
                <div class="row d-flex justify-content-center">
                    <div class="col-md-8 offset-lg-2 align-items-center">
                        <div class="section-tittle text-center">
                            <h2 style="margin-bottom: 5px !important;">The Values That Inspire Us
                            </h2>
                            <p style="">
                                Part of what makes our firm unique is our dedication to delivering trust, transparency and accountability. These three words serve as a source of inspiration for everyone on our staff – and they drive what we seek to accomplish for our clients on a daily basis.
                            </p>
                        </div>
                        <div id="bm">
                        <svg viewBox="0 0 600 600" class="firm-process">
                            <g class="">
                            <g class="" transform="matrix(0.9999980926513672,0,0,0.9999980926513672,150.499634,197.499268)">
                                <image width="65px" height="65px" preserveAspectRatio="xMidYMid slice" xlink:href="/image/approach/Trust.png"></image>
                                <Text transform="matrix(0.9999980926513672,0,0,0.9999980926513672,12,90.499268)">Trust</Text>
                            </g>
                            <circle cx="230" cy="271" r="145" stroke="#6cc727" stroke-width="1" fill="#ffffff00" onclick="showModalPopup('trust')"></circle>
                            </g>
                            <g class="">
                            <g class="" transform="matrix(0.9999980926513672,0,0,0.9999980926513672,421.499634,197.499268)">
                                <image width="65px" height="65px" preserveAspectRatio="xMidYMid slice" xlink:href="/image/approach/Transparancy.png"></image>
                                <text transform="matrix(0.9999980926513672,0,0,0.9999980926513672,-12,90.499268)">Transaparancy</text>
                            </g>
                                <circle cx="400" cy="271" r="145" stroke="#6cc727" stroke-width="1" fill="#ffffff00" onclick="showModalPopup('transaparancy')"></circle>
                            </g>
                            <g class="">
                            <g class="" transform="matrix(0.9999980926513672,0,0,0.9999980926513672,280.499634,435.499268)">
                                <image width="65px" height="65px" preserveAspectRatio="xMidYMid slice" xlink:href="/image/approach/Acountability.png"></image>
                                <text transform="matrix(0.9999980926513672,0,0,0.9999980926513672,-15,90.499268)">Accountability</text>
                            </g>
                                <circle cx="310" cy="434" r="145" stroke="#6cc727" stroke-width="1" fill="#ffffff00" onclick="showModalPopup('accountability')"></circle>
                            </g>
                            <g transform="matrix(1,0,0,1,128.7,155)" opacity="1" style="display: block;">
                                <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                                    <path fill="rgb(108,199,39)" fill-opacity="1" d="M 128 144 C 136 186 168 220 187 234 C 207 219 236 193 244 146 C 234 140 211 137 193 135 C 157 133 146 138 136 141 z"></path>
                                </g>
                            </g>
                            <g transform="matrix(1,0,0,1,290.7,300)" opacity="1"">
                                <image width="50px" height="50px" preserveAspectRatio="xMidYMid slice" xlink:href="/image/firm/success.svg"></image>
                            </g>
                        </svg>
                    </div>
                    </div>
                </div>
                <?php /* <div class="what-we-do we-padding">
                    <div class="container">
                        <!-- Section-tittle -->
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-8">

                            </div>
                        </div>
                        <!-- New code -->
                        <div class="row">
                            <!-- new code -->
                            <div class="col-md-10 offset-lg-2 align-items-center ftco-animate">
                                <div class="d-md-flex mb-4">
                                    <div class="one-forth align-self-center">
                                        <!--<img src="/img/help.svg" alt="">-->
                                        <svg width="100" height="100" viewBox="0 0 600 600" style="width: 150px;height: 125px;position: absolute;left: 0;" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke="none" stroke-width="0" fill="#1b31a721" d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813"></path>
                                        </svg>
                                        <img src="/image/approach/Trust.png" alt="" style="width:65%">
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
                                        <svg width="100" height="100" viewBox="0 0 600 600" style="width: 150px;height: 125px;position:absolute;right: 26px;margin-top: -24px;" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke="none" stroke-width="0" fill="#ff00ff2e" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                                        </svg>
                                        <img src="/image/approach/Transparancy.png" alt="" style="width:65%">
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
                                        <svg width="100" height="100" style="width: 150px;height: 150px;position: absolute;left:-15px;margin-top:-35px;" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#ff000021" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                                    </svg>
                                        <img src="/image/approach/Acountability.png" alt="" style="width:65%">
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
                        </div> 
                    </div>
                </div> */ ?>
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
@section('scripts')
<script>
function showModalPopup(type){
$("#successModal").modal();
}
</script>
@endsection
@section('2')
active
@endsection
