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

                </div>
            </div>
        </div>
    </div> 

    <div class="row justify-content-center">
        <div class="col-12">
            <div class="section-title">
                <h2 class="font-60"> <span style="color: #CDCDCD;">Planning.</span><span style="color: #999999;"> Execution.</span><span style="color: #1b31a7;"> Success.</span>

                </h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center how_works_section_1">
            <div class="col-md-10 offsetmd-1 row">
                <div class="col-md-5 how_works_heading">
                    <h1>Royal Monarch is here for you. <span class="blue-text">At every stage of life.</span></h1>
                    <p>
                        Royal Monarch combines real financial planning pros with cutting-edge technology to help you gain control of your finances and plan for your future.
                    </p>
                    <a href="#" class="btn" role="button" data-toggle="modal" data-target="#exampleModal">  Get Started  </a>
                </div>  
                <div class="col-md-7 row">
                    <div class="col-md-4">
                        <img src="{{asset('image/How_it_works/how1.png')}}" class="w-100">
                    </div>
                    <div class="col-md-4">
                        <img src="{{asset('image/How_it_works/how2.png')}}" class="w-100">
                    </div>
                    <div class="col-md-4">
                        <img src="{{asset('image/How_it_works/how3.png')}}" class="w-100">
                    </div>
                    <div class="col-md-4">
                        <img src="{{asset('image/How_it_works/how4.png')}}" class="w-100">
                    </div>
                    <div class="col-md-4">
                        <img src="{{asset('image/How_it_works/how5.png')}}" class="w-100">
                    </div>
                    <div class="col-md-4">
                        <img src="{{asset('image/How_it_works/how6.png')}}" class="w-100">
                    </div>
                </div>  
            </div>
        </div>

        <div class="row justify-content-center how_works_section_2 mt-50">
            <div class="col-md-10 offsetmd-1 row">
                <div class="col-md-5 how_works_heading">
                    <h2><span class="blue-text">A plan so good</span>, you’ll brag to your friends and family.</h2>
                </div>
                <div class="col-md-5">
                    <div class="titile-divider"></div>
                    <p>No more seminars or long docs that put you to sleep. Our real financial planners help you figure out where you want to go and give you the tools to get there.</p>
                </div>
                <div class="col-md-5 mt-50">
                    <img src="{{asset('image/How_it_works/benifit.png')}}" class="w-100">
                </div>
                <div class="col-md-7 row">
                    <div class="col-md-5 employee-benifits-items mr-30">
                        <h5 class="">
                            <span class="blue-text">A real financial planner </span>  that works with you 1:1 to define your financial strategy
                        </h5>
                    </div>
                    <div class="col-md-5 employee-benifits-items">
                        <h5 class="employee-benifits-item-content-box">
                            <span class="blue-text">A visual roadmap </span>  with your lifestyle goals and wishes
                        </h5>
                    </div>
                    <div class="col-md-5 employee-benifits-items mr-30">
                        <h5 class="employee-benifits-item-content-box">
                            One place with <span class="blue-text">the tools you need </span> to reach your goals
                        </h5>
                    </div>
                    <div class="col-md-5 employee-benifits-items">
                        <h5 class="employee-benifits-item-content-box">
                            <span class="blue-text">One place to connect and see everything </span> in your life that has to do with money
                        </h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center how_works_section_2 mt-50 mb-50">
            <div class="col-md-10 offsetmd-1 row">
                <div class="col-md-5 how_works_heading">
                    <h2>Royal Monarch <span class="blue-text">answers your questions</span> and <span class="blue-text"> helps you take action </span>  to reach your goals.</h2>
                </div>
                <div class="col-md-5">
                    <div class="titile-divider"></div>
                    <p>You have questions. Our financial planners can help you with the answers. Armed with the knowledge you need, you can conquer your financial future with confidence.</p>
                </div>
                <div class="col-md-12 mt-50 how_work_answer_section">
                    <div class="panel-group row" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default col-md-4">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h5 class="panel-title">
                                    <span class="blue-text mb-0">How much can I afford</span> to spend on a car while paying down my student loans?s
                                </h5>
                                <div class="collapsed accordion-item-trigger" >
                                    <a class="collapsed open-collapse-area" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseTwo">
                                        <div class="accordion-open-btn btn-1">
                                            <div class="plus-btn-row-1"></div>
                                            <div class="plus-btn-row-2"></div>
                                        </div>
                                    </a>
                                </div>
<!--                                <span>
                                <a class="collapsed open-collapse-area" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseTwo">
                                    <i class="more-less fa fa-plus-circle"></i>
                                </a>
                            </span>-->
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <p>We know how paralyzing student loans can feel. Unlike a home loan, student loans can also feel peskier because you don't have a visible asset like a home to support the payments. We are here to tell you that you can take on additional debt if you need to purchase something like a car. However, understanding how much debt is critical to ensuring you live within your means and are still able to save for your future.</p>
                                    <p>Your future isn't just about other goals like buying a home and traveling, it's also about your retirement. In order to understand how much car, you can afford, we would consider your debt relative to your income. We can help you consider financing a car purchase vs. paying cash, and make sure you get a competitive auto loan rate. A Royal Monarch planner is here to make sure you get the right information and guidance to make the right decision for you and your future.</p>
                                    <div class="collapsed click-span accordion-item-trigger" >
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseTwo">
                                            <div class="accordion-open-btn btn-1">
                                                <div class="plus-btn-row-1"></div>
                                                <!--<div class="plus-btn-row-2"></div>-->
                                            </div>
                                        </a>
                                    </div>
<!--                                    <span class="click-span">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseTwo">
                                            <i class="more-less fa fa-minus-circle"></i>
                                        </a>
                                    </span>-->
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default col-md-4">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h5 class="panel-title">
                                    How much can I spend on a house <span class="blue-text">if I also want to have kids?</span>

                                </h5>
                                <div class="collapsed accordion-item-trigger" >
                                    <a class="collapsed open-collapse-area" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <div class="accordion-open-btn btn-1">
                                            <div class="plus-btn-row-1"></div>
                                            <div class="plus-btn-row-2"></div>
                                        </div>
                                    </a>
                                </div>
<!--                                <span>
                                <a class="collapsed open-collapse-area" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <i class="more-less fa fa-plus-circle"></i>
                                </a>
                            </span>-->
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <p>With so many moving pieces to your financial picture, a decision like this can be overwhelming. There’s no one way to answer this question because this decision cannot be made in a vacuum.</p>
                                    <p>As financial planners we consider your income, spending, and saving. We look at the time horizon for buying a house and having children. We’ll need to consider future goals such as retirement and college funding as well. Once we have an idea of the overall picture, then we can adequately recommend a purchase price for your home that will not put your other goals (both short term and long term) at risk. You’re asking the right question- with a little digging, we can get you to the right answer.</p>
                                    <div class="collapsed click-span accordion-item-trigger" >
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <div class="accordion-open-btn btn-1">
                                                <div class="plus-btn-row-1"></div>
                                                <!--<div class="plus-btn-row-2"></div>-->
                                            </div>
                                        </a>
                                    </div>
<!--                                    <span class="click-span">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <i class="more-less fa fa-minus-circle"></i>
                                        </a>
                                    </span>-->
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default col-md-4">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h5 class="panel-title">
                                    I’m 30 and I’m just starting to save ₹ 2,50,000 per year. When <span class="blue-text"> can I comfortably retire?</span>
                                </h5>
                                <div class="collapsed accordion-item-trigger" >
                                    <a class="collapsed open-collapse-area" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <div class="accordion-open-btn btn-1">
                                            <div class="plus-btn-row-1"></div>
                                            <div class="plus-btn-row-2"></div>
                                        </div>
                                    </a>
                                </div>                                
<!--                                <span>
                                <a class="collapsed open-collapse-area" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <i class="more-less fa fa-plus-circle"></i>
                                </a>
                            </span>-->
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    <p>This is a great start to saving! To answer this question, we would want to consider your spending patterns and current account balances (by tax-status).</p>
                                    <p>We would also want to understand future goals that you might be saving for (a home, new car, kids, etc.) as money spent on these goals will not be available to save for retirement. Healthcare also becomes an important consideration when people want to retire early, as purchasing private insurance (after quitting your job but before you are eligible for Medicare) can be expensive. By taking a holistic view of your current financial situation and future financial goals we can provide a more precise answer to how early you could retire.</p>
                                    <div class="collapsed click-span accordion-item-trigger" >
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <div class="accordion-open-btn btn-1">
                                                <div class="plus-btn-row-1"></div>
                                                <!--<div class="plus-btn-row-2"></div>-->
                                            </div>
                                        </a>
                                    </div> 
<!--                                    <span class="click-span">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="more-less fa fa-minus-circle"></i>
                                        </a>
                                    </span>-->
                                </div>
                            </div>
                        </div>

                    </div><!-- panel-group -->
                </div>
            </div>
        </div>

    </div>
    <div class="container">
        <svg class="desk-roadmap mt-50" width="100%" height="400px" viewBox="0 0 1440 400" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <defs>
        <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="linearGradient-1">
        <stop stop-color="#6CC727" stop-opacity="0" offset="0%"></stop>
        <stop stop-color="#6CC727" offset="100%"></stop>
        </linearGradient>

        <linearGradient id="fadeGrad" x1="0%" y1="50%" x2="100%" y2="50%">
        <stop stop-color="#FFFFFF" stop-opacity="0" offset="0%"></stop>
        <stop stop-color="#FFFFFF" offset="10%"></stop>
        <stop stop-color="#FFFFFF" offset="90%"></stop>
        <stop stop-color="#FFFFFF" stop-opacity="0" offset="100%"></stop>
        </linearGradient>

        <mask id="fade" maskContentUnits="objectBoundingBox">
            <rect width="1" height="1" fill="url(#fadeGrad)"></rect>
        </mask>
        </defs>
        <g id="roadmap" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(0,3)">
        <path mask="url(#fade)" class="roadmap-path-line" d="M1,289 C28.0711977,262 62.904531,248.5 105.5,248.5 C169.393204,248.5 182,276.5 249,269 C316,261.5 366,212 437,212 C508,212 524,227 579,222 C634,217 650,172 721,172 C792,172 817,182 863,182 C909,182 933.87307,132 1005,132 C1076.12693,132 1088,142 1147.5,142 C1207,142 1229.13932,108.718056 1289,82 C1328.90712,64.1879627 1379.57379,47.1879627 1441,31" id="Path-2" stroke="#6CC727" stroke-width="2"></path>
        <g id="flag" transform="translate(1199.000000, -2.000000)">
        <g transform="translate(4.000000, 132.000000)" class="roadmap-path-flag-point-container">
        <circle id="Oval" fill="#6CC727" r="4" class="roadmap-path-flag-point"></circle>
        </g>
        <path class="roadmap-path-flag-line" d="M4,131.5 L4,0" id="Path-3" stroke="#6CC727" stroke-width="2" stroke-linecap="round"></path>
        <g class="roadmap-path-flag-poly">
        <polyline id="Path-4" stroke="#6CC727" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" points="4.5 4 92 4 82 31.5 92 58.5 4.5 58.5"></polyline>
        </g>
        <g transform="translate(-10.000000, 0.000000)">
        <path class="roadmap-path-flag-text" d="M21.56,12.6 L18.74,17.772 L18.74,21 L16.82,21 L16.82,17.772 L14,12.6 L16.184,12.6 L17.78,15.84 L19.376,12.6 L21.56,12.6 Z M26.088,21.168 C23.676,21.168 21.72,19.272 21.72,16.8 C21.72,14.328 23.676,12.432 26.088,12.432 C28.5,12.432 30.456,14.328 30.456,16.8 C30.456,19.272 28.5,21.168 26.088,21.168 Z M26.088,19.296 C27.456,19.296 28.536,18.3 28.536,16.8 C28.536,15.3 27.456,14.304 26.088,14.304 C24.72,14.304 23.64,15.3 23.64,16.8 C23.64,18.3 24.72,19.296 26.088,19.296 Z M35.056,21.168 C33.208,21.168 31.816,20.088 31.816,18.288 L31.816,12.6 L33.736,12.6 L33.736,18.12 C33.736,18.756 34.036,19.296 35.056,19.296 C36.076,19.296 36.376,18.756 36.376,18.12 L36.376,12.6 L38.296,12.6 L38.296,18.288 C38.296,20.088 36.904,21.168 35.056,21.168 Z M44.492,21 L42.908,18.24 L41.996,18.24 L41.996,21 L40.076,21 L40.076,12.6 L43.436,12.6 C45.032,12.6 46.316,13.884 46.316,15.48 C46.316,16.512 45.692,17.448 44.768,17.916 L46.556,21 L44.492,21 Z M41.996,14.4 L41.996,16.56 L43.436,16.56 C43.964,16.56 44.396,16.092 44.396,15.48 C44.396,14.868 43.964,14.4 43.436,14.4 L41.996,14.4 Z M17.66,35.168 C15.896,35.168 14.768,34.328 14.3,33.092 L15.956,32.132 C16.256,32.828 16.772,33.296 17.72,33.296 C18.632,33.296 18.86,32.936 18.86,32.612 C18.86,32.096 18.38,31.892 17.12,31.544 C15.872,31.196 14.648,30.596 14.648,28.988 C14.648,27.368 16.016,26.432 17.468,26.432 C18.848,26.432 19.928,27.092 20.54,28.328 L18.92,29.276 C18.632,28.676 18.236,28.304 17.468,28.304 C16.868,28.304 16.568,28.604 16.568,28.94 C16.568,29.324 16.772,29.588 18.08,29.984 C19.352,30.368 20.78,30.812 20.78,32.588 C20.78,34.208 19.484,35.168 17.66,35.168 Z M25.32,35.168 C23.472,35.168 22.08,34.088 22.08,32.288 L22.08,26.6 L24,26.6 L24,32.12 C24,32.756 24.3,33.296 25.32,33.296 C26.34,33.296 26.64,32.756 26.64,32.12 L26.64,26.6 L28.56,26.6 L28.56,32.288 C28.56,34.088 27.168,35.168 25.32,35.168 Z M34.348,35.168 C31.816,35.168 29.98,33.272 29.98,30.8 C29.98,28.328 31.816,26.432 34.348,26.432 C35.872,26.432 37.216,27.188 37.948,28.376 L36.292,29.336 C35.92,28.688 35.2,28.304 34.348,28.304 C32.86,28.304 31.9,29.3 31.9,30.8 C31.9,32.3 32.86,33.296 34.348,33.296 C35.2,33.296 35.932,32.912 36.292,32.264 L37.948,33.224 C37.228,34.412 35.884,35.168 34.348,35.168 Z M43.136,35.168 C40.604,35.168 38.768,33.272 38.768,30.8 C38.768,28.328 40.604,26.432 43.136,26.432 C44.66,26.432 46.004,27.188 46.736,28.376 L45.08,29.336 C44.708,28.688 43.988,28.304 43.136,28.304 C41.648,28.304 40.688,29.3 40.688,30.8 C40.688,32.3 41.648,33.296 43.136,33.296 C43.988,33.296 44.72,32.912 45.08,32.264 L46.736,33.224 C46.016,34.412 44.672,35.168 43.136,35.168 Z M49.956,33.152 L53.316,33.152 L53.316,35 L48.036,35 L48.036,26.6 L53.256,26.6 L53.256,28.448 L49.956,28.448 L49.956,29.84 L52.956,29.84 L52.956,31.664 L49.956,31.664 L49.956,33.152 Z M57.736,35.168 C55.972,35.168 54.844,34.328 54.376,33.092 L56.032,32.132 C56.332,32.828 56.848,33.296 57.796,33.296 C58.708,33.296 58.936,32.936 58.936,32.612 C58.936,32.096 58.456,31.892 57.196,31.544 C55.948,31.196 54.724,30.596 54.724,28.988 C54.724,27.368 56.092,26.432 57.544,26.432 C58.924,26.432 60.004,27.092 60.616,28.328 L58.996,29.276 C58.708,28.676 58.312,28.304 57.544,28.304 C56.944,28.304 56.644,28.604 56.644,28.94 C56.644,29.324 56.848,29.588 58.156,29.984 C59.428,30.368 60.856,30.812 60.856,32.588 C60.856,34.208 59.56,35.168 57.736,35.168 Z M64.916,35.168 C63.152,35.168 62.024,34.328 61.556,33.092 L63.212,32.132 C63.512,32.828 64.028,33.296 64.976,33.296 C65.888,33.296 66.116,32.936 66.116,32.612 C66.116,32.096 65.636,31.892 64.376,31.544 C63.128,31.196 61.904,30.596 61.904,28.988 C61.904,27.368 63.272,26.432 64.724,26.432 C66.104,26.432 67.184,27.092 67.796,28.328 L66.176,29.276 C65.888,28.676 65.492,28.304 64.724,28.304 C64.124,28.304 63.824,28.604 63.824,28.94 C63.824,29.324 64.028,29.588 65.336,29.984 C66.608,30.368 68.036,30.812 68.036,32.588 C68.036,34.208 66.74,35.168 64.916,35.168 Z M17.66,49.168 C15.896,49.168 14.768,48.328 14.3,47.092 L15.956,46.132 C16.256,46.828 16.772,47.296 17.72,47.296 C18.632,47.296 18.86,46.936 18.86,46.612 C18.86,46.096 18.38,45.892 17.12,45.544 C15.872,45.196 14.648,44.596 14.648,42.988 C14.648,41.368 16.016,40.432 17.468,40.432 C18.848,40.432 19.928,41.092 20.54,42.328 L18.92,43.276 C18.632,42.676 18.236,42.304 17.468,42.304 C16.868,42.304 16.568,42.604 16.568,42.94 C16.568,43.324 16.772,43.588 18.08,43.984 C19.352,44.368 20.78,44.812 20.78,46.588 C20.78,48.208 19.484,49.168 17.66,49.168 Z M27.48,40.6 L27.48,42.448 L25.32,42.448 L25.32,49 L23.4,49 L23.4,42.448 L21.24,42.448 L21.24,40.6 L27.48,40.6 Z M32.248,49.168 C29.836,49.168 27.88,47.272 27.88,44.8 C27.88,42.328 29.836,40.432 32.248,40.432 C34.66,40.432 36.616,42.328 36.616,44.8 C36.616,47.272 34.66,49.168 32.248,49.168 Z M32.248,47.296 C33.616,47.296 34.696,46.3 34.696,44.8 C34.696,43.3 33.616,42.304 32.248,42.304 C30.88,42.304 29.8,43.3 29.8,44.8 C29.8,46.3 30.88,47.296 32.248,47.296 Z M42.512,49 L40.928,46.24 L40.016,46.24 L40.016,49 L38.096,49 L38.096,40.6 L41.456,40.6 C43.052,40.6 44.336,41.884 44.336,43.48 C44.336,44.512 43.712,45.448 42.788,45.916 L44.576,49 L42.512,49 Z M40.016,42.4 L40.016,44.56 L41.456,44.56 C41.984,44.56 42.416,44.092 42.416,43.48 C42.416,42.868 41.984,42.4 41.456,42.4 L40.016,42.4 Z M52.476,40.6 L49.656,45.772 L49.656,49 L47.736,49 L47.736,45.772 L44.916,40.6 L47.1,40.6 L48.696,43.84 L50.292,40.6 L52.476,40.6 Z" id="YOURSUCCESSSTORY" fill="#6CC727" fill-rule="nonzero"></path>
        </g>
        </g>
        <foreignObject class="roadmap-text node" x="210.5000" y="205.0000">
        <div class="roadmap-text">Start</div>                
        </foreignObject>
        <foreignObject class="roadmap-text node" x="274.5" y="170">
        <div class="">Discovery Meeting</div>                
        </foreignObject>
        <foreignObject class="roadmap-text node" x="417" y="119.50000" >
        <div class="roadmap-text">Develop an Investment Policy Statement</div>                
        </foreignObject>
        <foreignObject class="roadmap-text node" x="531" y="97" >
        <div class="roadmap-text">Assess and Analyze</div>                
        </foreignObject>
        <foreignObject class="roadmap-text node" x="644" y="75" >
        <div class="roadmap-text">Design an Investment Strategy</div>                
        </foreignObject>
        <foreignObject class="roadmap-text node" x="737" y="75" >
        <div class="roadmap-text">Propose Planning and Recommendations</div>                
        </foreignObject>
        <foreignObject class="roadmap-text node" x="866.5" y="35.5" >
        <div class="roadmap-text" style="width: 117px;">Implement Financial Plan and Investment Strategy</div>                
        </foreignObject>
        <foreignObject class="roadmap-text node" x="980.5" y="28.5" >
        <div class="roadmap-text">Monitor and Update Your Financial Plan</div>                
        </foreignObject>
        <foreignObject class="roadmap-text node" x="1085.5" y="13.5" >
        <div class="roadmap-text">Refer friends, Family, and Co-workers</div>                
        </foreignObject>

        <g transform="translate(223.5000, 270.0000)" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <circle class="roadmap-dot-click" r="11" cursor="pointer" pointer-events="visible" fill="#6CC727" position="1" data-pos="1"></circle>
        <rect fill="#999999" class="roadmap-desc-line line-1" id="roadmap-desc-line1" width="1" height="100"></rect>
        </g>
        <!-- Click icon -->
        <g transform="translate(196.000000, 239.000000)" id="active-point-container1" class="desc-container container-1">
        <g class="roadmap-active-point" id="active-point1" position="1">
        <circle id="bg" fill="#6CC727" fill-rule="evenodd" cx="28" cy="28" r="28"></circle>
        <g id="atoms/icons/32/roadmap/a-ic-32-roadmap-team-on-same-page" transform="translate(12.000000, 12.000000)" fill="#FFFFFF" fill-rule="nonzero">
        <image width="32px" height="32px" preserveAspectRatio="xMidYMid slice" xlink:href="/image/How_it_works/Start.png"></image>                                
        <!--<path d="M26.5,1 C27.2796961,1 27.9204487,1.59488808 27.9931334,2.35553999 L28,2.5 L28,27.5 C28,29.6801701 27.0351745,30.913139 25.1999568,30.9955789 L25,31 L4.97033286,30.9991191 C3.89756706,30.935355 3.08518362,30.5291632 2.58397485,29.7773501 C2.23095616,29.2478221 2.03165372,28.6752973 1.99070724,28.0674813 C1.95605298,27.5556976 2.31285791,27.1079033 2.80528538,27.0168164 L2.94609317,27.0009216 L6,27 L6,2.5 C6,1.72030388 6.59488808,1.07955132 7.35553999,1.00686658 L7.5,1 L26.5,1 Z M26.5,2 L7.5,2 C7.25454011,2 7.05039163,2.17687516 7.00805567,2.41012437 L7,2.5 L7,27 L22.0173853,27 C22.5415027,26.9999004 22.9767382,27.4045056 23.0148787,27.9272244 C23.1198918,29.3664422 23.7403123,30 25,30 C26.3135734,30 26.9482859,29.3013965 26.9969612,27.7043276 L27,27.5 L27,2.5 C27,2.25454011 26.8231248,2.05039163 26.5898756,2.00805567 L26.5,2 Z M22.0175301,27.9999964 L2.9884342,27.9999964 L3.00775088,28.1833198 C3.06014491,28.5466474 3.19526483,28.8915094 3.41602515,29.2226499 C3.70177717,29.6512779 4.15829173,29.9055127 4.80144048,29.98229 L5,29.9999964 L22.6852998,29.9999964 L22.564057,29.8287411 C22.2561377,29.3546633 22.0716624,28.7418864 22.0175301,27.9999964 Z M13.5,18 C13.7761424,18 14,18.2238576 14,18.5 L14,22.5 C14,22.7761424 13.7761424,23 13.5,23 L9.5,23 C9.22385763,23 9,22.7761424 9,22.5 L9,18.5 C9,18.2238576 9.22385763,18 9.5,18 L13.5,18 Z M13,19 L10,19 L10,22 L13,22 L13,19 Z M24,20 L24,21 L16,21 L16,20 L24,20 Z M13.5,11 C13.7761424,11 14,11.2238576 14,11.5 L14,15.5 C14,15.7761424 13.7761424,16 13.5,16 L9.5,16 C9.22385763,16 9,15.7761424 9,15.5 L9,11.5 C9,11.2238576 9.22385763,11 9.5,11 L13.5,11 Z M13,12 L10,12 L10,15 L13,15 L13,12 Z M24,13 L24,14 L16,14 L16,13 L24,13 Z M13,4 L13,5 L10,5 L10,8 L13,8 L13,7.5 L14,7.5 L14,8.5 C14,8.74545989 13.8231248,8.94960837 13.5898756,8.99194433 L13.5,9 L9.5,9 C9.25454011,9 9.05039163,8.82312484 9.00805567,8.58987563 L9,8.5 L9,4.5 C9,4.25454011 9.17687516,4.05039163 9.41012437,4.00805567 L9.5,4 L13,4 Z M15.1746043,3.6203717 L15.8253957,4.3796283 L12.3253957,7.3796283 C12.1518223,7.52840548 11.903627,7.53830399 11.7205258,7.4146896 L11.6464466,7.35355339 L10.6464466,6.35355339 L11.3535534,5.64644661 L12.0261519,6.31904516 L15.1746043,3.6203717 Z M24,6 L24,7 L16,7 L16,6 L24,6 Z" id="Shape"></path>-->
        </g>
        </g>
        </g>
        <!-- Click icon -->
        <g transform="translate(335.05, 240.00000)" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <circle class="roadmap-dot-click" r="11" cursor="pointer" pointer-events="visible" position="2" data-pos="2"></circle>
        <rect fill="#999999" class="roadmap-desc-line-hide line-2" id="roadmap-desc-line2" width="1" height="100"></rect>
        </g>
        <!-- Click icon -->
        <g transform="translate(307, 205)" class="desc-container container-2">
        <g class="roadmap-active-point-hide" id="active-point2" data-position="2">
        <circle id="bg" fill="#6CC727" fill-rule="evenodd" cx="28" cy="28" r="28"></circle>
        <g id="atoms/icons/32/roadmap/a-ic-32-roadmap-team-on-same-page" transform="translate(12.000000, 12.000000)" fill="#FFFFFF" fill-rule="nonzero">
        <image width="32px" height="32px" preserveAspectRatio="xMidYMid slice" xlink:href="/image/How_it_works/Discovery-Meeting.png"></image>                                
        <!--<path d="M26.5,1 C27.2796961,1 27.9204487,1.59488808 27.9931334,2.35553999 L28,2.5 L28,27.5 C28,29.6801701 27.0351745,30.913139 25.1999568,30.9955789 L25,31 L4.97033286,30.9991191 C3.89756706,30.935355 3.08518362,30.5291632 2.58397485,29.7773501 C2.23095616,29.2478221 2.03165372,28.6752973 1.99070724,28.0674813 C1.95605298,27.5556976 2.31285791,27.1079033 2.80528538,27.0168164 L2.94609317,27.0009216 L6,27 L6,2.5 C6,1.72030388 6.59488808,1.07955132 7.35553999,1.00686658 L7.5,1 L26.5,1 Z M26.5,2 L7.5,2 C7.25454011,2 7.05039163,2.17687516 7.00805567,2.41012437 L7,2.5 L7,27 L22.0173853,27 C22.5415027,26.9999004 22.9767382,27.4045056 23.0148787,27.9272244 C23.1198918,29.3664422 23.7403123,30 25,30 C26.3135734,30 26.9482859,29.3013965 26.9969612,27.7043276 L27,27.5 L27,2.5 C27,2.25454011 26.8231248,2.05039163 26.5898756,2.00805567 L26.5,2 Z M22.0175301,27.9999964 L2.9884342,27.9999964 L3.00775088,28.1833198 C3.06014491,28.5466474 3.19526483,28.8915094 3.41602515,29.2226499 C3.70177717,29.6512779 4.15829173,29.9055127 4.80144048,29.98229 L5,29.9999964 L22.6852998,29.9999964 L22.564057,29.8287411 C22.2561377,29.3546633 22.0716624,28.7418864 22.0175301,27.9999964 Z M13.5,18 C13.7761424,18 14,18.2238576 14,18.5 L14,22.5 C14,22.7761424 13.7761424,23 13.5,23 L9.5,23 C9.22385763,23 9,22.7761424 9,22.5 L9,18.5 C9,18.2238576 9.22385763,18 9.5,18 L13.5,18 Z M13,19 L10,19 L10,22 L13,22 L13,19 Z M24,20 L24,21 L16,21 L16,20 L24,20 Z M13.5,11 C13.7761424,11 14,11.2238576 14,11.5 L14,15.5 C14,15.7761424 13.7761424,16 13.5,16 L9.5,16 C9.22385763,16 9,15.7761424 9,15.5 L9,11.5 C9,11.2238576 9.22385763,11 9.5,11 L13.5,11 Z M13,12 L10,12 L10,15 L13,15 L13,12 Z M24,13 L24,14 L16,14 L16,13 L24,13 Z M13,4 L13,5 L10,5 L10,8 L13,8 L13,7.5 L14,7.5 L14,8.5 C14,8.74545989 13.8231248,8.94960837 13.5898756,8.99194433 L13.5,9 L9.5,9 C9.25454011,9 9.05039163,8.82312484 9.00805567,8.58987563 L9,8.5 L9,4.5 C9,4.25454011 9.17687516,4.05039163 9.41012437,4.00805567 L9.5,4 L13,4 Z M15.1746043,3.6203717 L15.8253957,4.3796283 L12.3253957,7.3796283 C12.1518223,7.52840548 11.903627,7.53830399 11.7205258,7.4146896 L11.6464466,7.35355339 L10.6464466,6.35355339 L11.3535534,5.64644661 L12.0261519,6.31904516 L15.1746043,3.6203717 Z M24,6 L24,7 L16,7 L16,6 L24,6 Z" id="Shape"></path>-->
        </g>
        </g>
        </g>
        <!-- Click icon -->
        <g transform="translate(446.6, 212.50000)" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <circle class="roadmap-dot-click" r="11" cursor="pointer" pointer-events="visible" position="3"  data-pos="3"></circle>
        <rect fill="#999999" class="roadmap-desc-line-hide line-3" id="roadmap-desc-line3" width="1" height="100"></rect>
        </g>
        <!-- Click icon -->
        <g transform="translate(420, 182.5)" class="desc-container container-3">
        <g class="roadmap-active-point-hide" id="active-point3" data-position="3">
        <circle id="bg" fill="#6CC727" fill-rule="evenodd" cx="28" cy="28" r="28"></circle>
        <g id="atoms/icons/32/roadmap/a-ic-32-roadmap-team-on-same-page" transform="translate(12.000000, 12.000000)" fill="#FFFFFF" fill-rule="nonzero">
        <image width="32px" height="32px" preserveAspectRatio="xMidYMid slice" xlink:href="/image/How_it_works/Develop-and-INvestment-Policy-Statement.png"></image>                                
        <!--<path d="M26.5,1 C27.2796961,1 27.9204487,1.59488808 27.9931334,2.35553999 L28,2.5 L28,27.5 C28,29.6801701 27.0351745,30.913139 25.1999568,30.9955789 L25,31 L4.97033286,30.9991191 C3.89756706,30.935355 3.08518362,30.5291632 2.58397485,29.7773501 C2.23095616,29.2478221 2.03165372,28.6752973 1.99070724,28.0674813 C1.95605298,27.5556976 2.31285791,27.1079033 2.80528538,27.0168164 L2.94609317,27.0009216 L6,27 L6,2.5 C6,1.72030388 6.59488808,1.07955132 7.35553999,1.00686658 L7.5,1 L26.5,1 Z M26.5,2 L7.5,2 C7.25454011,2 7.05039163,2.17687516 7.00805567,2.41012437 L7,2.5 L7,27 L22.0173853,27 C22.5415027,26.9999004 22.9767382,27.4045056 23.0148787,27.9272244 C23.1198918,29.3664422 23.7403123,30 25,30 C26.3135734,30 26.9482859,29.3013965 26.9969612,27.7043276 L27,27.5 L27,2.5 C27,2.25454011 26.8231248,2.05039163 26.5898756,2.00805567 L26.5,2 Z M22.0175301,27.9999964 L2.9884342,27.9999964 L3.00775088,28.1833198 C3.06014491,28.5466474 3.19526483,28.8915094 3.41602515,29.2226499 C3.70177717,29.6512779 4.15829173,29.9055127 4.80144048,29.98229 L5,29.9999964 L22.6852998,29.9999964 L22.564057,29.8287411 C22.2561377,29.3546633 22.0716624,28.7418864 22.0175301,27.9999964 Z M13.5,18 C13.7761424,18 14,18.2238576 14,18.5 L14,22.5 C14,22.7761424 13.7761424,23 13.5,23 L9.5,23 C9.22385763,23 9,22.7761424 9,22.5 L9,18.5 C9,18.2238576 9.22385763,18 9.5,18 L13.5,18 Z M13,19 L10,19 L10,22 L13,22 L13,19 Z M24,20 L24,21 L16,21 L16,20 L24,20 Z M13.5,11 C13.7761424,11 14,11.2238576 14,11.5 L14,15.5 C14,15.7761424 13.7761424,16 13.5,16 L9.5,16 C9.22385763,16 9,15.7761424 9,15.5 L9,11.5 C9,11.2238576 9.22385763,11 9.5,11 L13.5,11 Z M13,12 L10,12 L10,15 L13,15 L13,12 Z M24,13 L24,14 L16,14 L16,13 L24,13 Z M13,4 L13,5 L10,5 L10,8 L13,8 L13,7.5 L14,7.5 L14,8.5 C14,8.74545989 13.8231248,8.94960837 13.5898756,8.99194433 L13.5,9 L9.5,9 C9.25454011,9 9.05039163,8.82312484 9.00805567,8.58987563 L9,8.5 L9,4.5 C9,4.25454011 9.17687516,4.05039163 9.41012437,4.00805567 L9.5,4 L13,4 Z M15.1746043,3.6203717 L15.8253957,4.3796283 L12.3253957,7.3796283 C12.1518223,7.52840548 11.903627,7.53830399 11.7205258,7.4146896 L11.6464466,7.35355339 L10.6464466,6.35355339 L11.3535534,5.64644661 L12.0261519,6.31904516 L15.1746043,3.6203717 Z M24,6 L24,7 L16,7 L16,6 L24,6 Z" id="Shape"></path>-->
        </g>
        </g>
        </g>
        <!-- Click icon -->
        <g transform="translate(558.15, 222.50000)" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <circle class="roadmap-dot-click" r="11" cursor="pointer" position="4" pointer-events="visible" data-pos="4"></circle>
        <rect fill="#999999" class="roadmap-desc-line-hide line-4" id="roadmap-desc-line4" width="1" height="100"></rect>
        </g>
        <!-- Click icon -->
        <g transform="translate(530, 191.5)" class="desc-container container-4">
        <g class="roadmap-active-point-hide" id="active-point4" position="4" data-position="4">
        <circle id="bg" fill="#6CC727" fill-rule="evenodd" cx="28" cy="28" r="28"></circle>
        <g id="atoms/icons/32/roadmap/a-ic-32-roadmap-team-on-same-page" transform="translate(12.000000, 12.000000)" fill="#FFFFFF" fill-rule="nonzero">
        <image width="32px" height="32px" preserveAspectRatio="xMidYMid slice" xlink:href="/image/How_it_works/Assess-Analyze.png"></image>                                
        <!--<path d="M26.5,1 C27.2796961,1 27.9204487,1.59488808 27.9931334,2.35553999 L28,2.5 L28,27.5 C28,29.6801701 27.0351745,30.913139 25.1999568,30.9955789 L25,31 L4.97033286,30.9991191 C3.89756706,30.935355 3.08518362,30.5291632 2.58397485,29.7773501 C2.23095616,29.2478221 2.03165372,28.6752973 1.99070724,28.0674813 C1.95605298,27.5556976 2.31285791,27.1079033 2.80528538,27.0168164 L2.94609317,27.0009216 L6,27 L6,2.5 C6,1.72030388 6.59488808,1.07955132 7.35553999,1.00686658 L7.5,1 L26.5,1 Z M26.5,2 L7.5,2 C7.25454011,2 7.05039163,2.17687516 7.00805567,2.41012437 L7,2.5 L7,27 L22.0173853,27 C22.5415027,26.9999004 22.9767382,27.4045056 23.0148787,27.9272244 C23.1198918,29.3664422 23.7403123,30 25,30 C26.3135734,30 26.9482859,29.3013965 26.9969612,27.7043276 L27,27.5 L27,2.5 C27,2.25454011 26.8231248,2.05039163 26.5898756,2.00805567 L26.5,2 Z M22.0175301,27.9999964 L2.9884342,27.9999964 L3.00775088,28.1833198 C3.06014491,28.5466474 3.19526483,28.8915094 3.41602515,29.2226499 C3.70177717,29.6512779 4.15829173,29.9055127 4.80144048,29.98229 L5,29.9999964 L22.6852998,29.9999964 L22.564057,29.8287411 C22.2561377,29.3546633 22.0716624,28.7418864 22.0175301,27.9999964 Z M13.5,18 C13.7761424,18 14,18.2238576 14,18.5 L14,22.5 C14,22.7761424 13.7761424,23 13.5,23 L9.5,23 C9.22385763,23 9,22.7761424 9,22.5 L9,18.5 C9,18.2238576 9.22385763,18 9.5,18 L13.5,18 Z M13,19 L10,19 L10,22 L13,22 L13,19 Z M24,20 L24,21 L16,21 L16,20 L24,20 Z M13.5,11 C13.7761424,11 14,11.2238576 14,11.5 L14,15.5 C14,15.7761424 13.7761424,16 13.5,16 L9.5,16 C9.22385763,16 9,15.7761424 9,15.5 L9,11.5 C9,11.2238576 9.22385763,11 9.5,11 L13.5,11 Z M13,12 L10,12 L10,15 L13,15 L13,12 Z M24,13 L24,14 L16,14 L16,13 L24,13 Z M13,4 L13,5 L10,5 L10,8 L13,8 L13,7.5 L14,7.5 L14,8.5 C14,8.74545989 13.8231248,8.94960837 13.5898756,8.99194433 L13.5,9 L9.5,9 C9.25454011,9 9.05039163,8.82312484 9.00805567,8.58987563 L9,8.5 L9,4.5 C9,4.25454011 9.17687516,4.05039163 9.41012437,4.00805567 L9.5,4 L13,4 Z M15.1746043,3.6203717 L15.8253957,4.3796283 L12.3253957,7.3796283 C12.1518223,7.52840548 11.903627,7.53830399 11.7205258,7.4146896 L11.6464466,7.35355339 L10.6464466,6.35355339 L11.3535534,5.64644661 L12.0261519,6.31904516 L15.1746043,3.6203717 Z M24,6 L24,7 L16,7 L16,6 L24,6 Z" id="Shape"></path>-->
        </g>
        </g>
        </g>
        <!-- Click icon -->
        <g transform="translate(669.7, 181.00000)" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <circle class="roadmap-dot-click" r="11" cursor="pointer" pointer-events="visible" position="5" data-pos="5"></circle>
        <rect fill="#999999" class="roadmap-desc-line-hide line-5" id="roadmap-desc-line5" width="1" height="100"></rect>
        </g>
        <!-- Click icon -->
        <g transform="translate(643, 150)" class="desc-container container-5">
        <g class="roadmap-active-point-hide" id="active-point5" data-position="5">
        <circle id="bg" fill="#6CC727" fill-rule="evenodd" cx="28" cy="28" r="28"></circle>
        <g id="atoms/icons/32/roadmap/a-ic-32-roadmap-team-on-same-page" transform="translate(12.000000, 12.000000)" fill="#FFFFFF" fill-rule="nonzero">
        <image width="32px" height="32px" preserveAspectRatio="xMidYMid slice" xlink:href="/image/How_it_works/Design-an-investment-strategy.png"></image>
        <!--<path d="M26.5,1 C27.2796961,1 27.9204487,1.59488808 27.9931334,2.35553999 L28,2.5 L28,27.5 C28,29.6801701 27.0351745,30.913139 25.1999568,30.9955789 L25,31 L4.97033286,30.9991191 C3.89756706,30.935355 3.08518362,30.5291632 2.58397485,29.7773501 C2.23095616,29.2478221 2.03165372,28.6752973 1.99070724,28.0674813 C1.95605298,27.5556976 2.31285791,27.1079033 2.80528538,27.0168164 L2.94609317,27.0009216 L6,27 L6,2.5 C6,1.72030388 6.59488808,1.07955132 7.35553999,1.00686658 L7.5,1 L26.5,1 Z M26.5,2 L7.5,2 C7.25454011,2 7.05039163,2.17687516 7.00805567,2.41012437 L7,2.5 L7,27 L22.0173853,27 C22.5415027,26.9999004 22.9767382,27.4045056 23.0148787,27.9272244 C23.1198918,29.3664422 23.7403123,30 25,30 C26.3135734,30 26.9482859,29.3013965 26.9969612,27.7043276 L27,27.5 L27,2.5 C27,2.25454011 26.8231248,2.05039163 26.5898756,2.00805567 L26.5,2 Z M22.0175301,27.9999964 L2.9884342,27.9999964 L3.00775088,28.1833198 C3.06014491,28.5466474 3.19526483,28.8915094 3.41602515,29.2226499 C3.70177717,29.6512779 4.15829173,29.9055127 4.80144048,29.98229 L5,29.9999964 L22.6852998,29.9999964 L22.564057,29.8287411 C22.2561377,29.3546633 22.0716624,28.7418864 22.0175301,27.9999964 Z M13.5,18 C13.7761424,18 14,18.2238576 14,18.5 L14,22.5 C14,22.7761424 13.7761424,23 13.5,23 L9.5,23 C9.22385763,23 9,22.7761424 9,22.5 L9,18.5 C9,18.2238576 9.22385763,18 9.5,18 L13.5,18 Z M13,19 L10,19 L10,22 L13,22 L13,19 Z M24,20 L24,21 L16,21 L16,20 L24,20 Z M13.5,11 C13.7761424,11 14,11.2238576 14,11.5 L14,15.5 C14,15.7761424 13.7761424,16 13.5,16 L9.5,16 C9.22385763,16 9,15.7761424 9,15.5 L9,11.5 C9,11.2238576 9.22385763,11 9.5,11 L13.5,11 Z M13,12 L10,12 L10,15 L13,15 L13,12 Z M24,13 L24,14 L16,14 L16,13 L24,13 Z M13,4 L13,5 L10,5 L10,8 L13,8 L13,7.5 L14,7.5 L14,8.5 C14,8.74545989 13.8231248,8.94960837 13.5898756,8.99194433 L13.5,9 L9.5,9 C9.25454011,9 9.05039163,8.82312484 9.00805567,8.58987563 L9,8.5 L9,4.5 C9,4.25454011 9.17687516,4.05039163 9.41012437,4.00805567 L9.5,4 L13,4 Z M15.1746043,3.6203717 L15.8253957,4.3796283 L12.3253957,7.3796283 C12.1518223,7.52840548 11.903627,7.53830399 11.7205258,7.4146896 L11.6464466,7.35355339 L10.6464466,6.35355339 L11.3535534,5.64644661 L12.0261519,6.31904516 L15.1746043,3.6203717 Z M24,6 L24,7 L16,7 L16,6 L24,6 Z" id="Shape"></path>-->
        </g>
        </g>
        </g>
        <!-- Click icon -->
        <g transform="translate(781.25, 174.50000)" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <circle class="roadmap-dot-click" r="11" cursor="pointer" pointer-events="visible" position="6" data-pos="6"></circle>
        <rect fill="#999999" class="roadmap-desc-line-hide line-6" id="roadmap-desc-line6" width="1" height="100"></rect>
        </g>

        <!-- Click icon -->
        <g transform="translate(753, 144.5)" class="desc-container container-6">
        <g class="roadmap-active-point-hide" id="active-point6" data-position="6">
        <circle id="bg" fill="#6CC727" fill-rule="evenodd" cx="28" cy="28" r="28"></circle>
        <g id="atoms/icons/32/roadmap/a-ic-32-roadmap-team-on-same-page" transform="translate(12.000000, 12.000000)" fill="#FFFFFF" fill-rule="nonzero">
        <image width="32px" height="32px" preserveAspectRatio="xMidYMid slice" xlink:href="/image/How_it_works/Propose-Planning-and-Recommendations.png"></image>
        <!--<path d="M26.5,1 C27.2796961,1 27.9204487,1.59488808 27.9931334,2.35553999 L28,2.5 L28,27.5 C28,29.6801701 27.0351745,30.913139 25.1999568,30.9955789 L25,31 L4.97033286,30.9991191 C3.89756706,30.935355 3.08518362,30.5291632 2.58397485,29.7773501 C2.23095616,29.2478221 2.03165372,28.6752973 1.99070724,28.0674813 C1.95605298,27.5556976 2.31285791,27.1079033 2.80528538,27.0168164 L2.94609317,27.0009216 L6,27 L6,2.5 C6,1.72030388 6.59488808,1.07955132 7.35553999,1.00686658 L7.5,1 L26.5,1 Z M26.5,2 L7.5,2 C7.25454011,2 7.05039163,2.17687516 7.00805567,2.41012437 L7,2.5 L7,27 L22.0173853,27 C22.5415027,26.9999004 22.9767382,27.4045056 23.0148787,27.9272244 C23.1198918,29.3664422 23.7403123,30 25,30 C26.3135734,30 26.9482859,29.3013965 26.9969612,27.7043276 L27,27.5 L27,2.5 C27,2.25454011 26.8231248,2.05039163 26.5898756,2.00805567 L26.5,2 Z M22.0175301,27.9999964 L2.9884342,27.9999964 L3.00775088,28.1833198 C3.06014491,28.5466474 3.19526483,28.8915094 3.41602515,29.2226499 C3.70177717,29.6512779 4.15829173,29.9055127 4.80144048,29.98229 L5,29.9999964 L22.6852998,29.9999964 L22.564057,29.8287411 C22.2561377,29.3546633 22.0716624,28.7418864 22.0175301,27.9999964 Z M13.5,18 C13.7761424,18 14,18.2238576 14,18.5 L14,22.5 C14,22.7761424 13.7761424,23 13.5,23 L9.5,23 C9.22385763,23 9,22.7761424 9,22.5 L9,18.5 C9,18.2238576 9.22385763,18 9.5,18 L13.5,18 Z M13,19 L10,19 L10,22 L13,22 L13,19 Z M24,20 L24,21 L16,21 L16,20 L24,20 Z M13.5,11 C13.7761424,11 14,11.2238576 14,11.5 L14,15.5 C14,15.7761424 13.7761424,16 13.5,16 L9.5,16 C9.22385763,16 9,15.7761424 9,15.5 L9,11.5 C9,11.2238576 9.22385763,11 9.5,11 L13.5,11 Z M13,12 L10,12 L10,15 L13,15 L13,12 Z M24,13 L24,14 L16,14 L16,13 L24,13 Z M13,4 L13,5 L10,5 L10,8 L13,8 L13,7.5 L14,7.5 L14,8.5 C14,8.74545989 13.8231248,8.94960837 13.5898756,8.99194433 L13.5,9 L9.5,9 C9.25454011,9 9.05039163,8.82312484 9.00805567,8.58987563 L9,8.5 L9,4.5 C9,4.25454011 9.17687516,4.05039163 9.41012437,4.00805567 L9.5,4 L13,4 Z M15.1746043,3.6203717 L15.8253957,4.3796283 L12.3253957,7.3796283 C12.1518223,7.52840548 11.903627,7.53830399 11.7205258,7.4146896 L11.6464466,7.35355339 L10.6464466,6.35355339 L11.3535534,5.64644661 L12.0261519,6.31904516 L15.1746043,3.6203717 Z M24,6 L24,7 L16,7 L16,6 L24,6 Z" id="Shape"></path>-->
        </g>
        </g>
        </g>
        <!-- Click icon -->

        <g transform="translate(892.8, 173.50000)" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <circle class="roadmap-dot-click" r="11" cursor="pointer" pointer-events="visible" position="7" data-pos="7"></circle>
        <rect fill="#999999" class="roadmap-desc-line-hide line-7" id="roadmap-desc-line7" width="1" height="100"></rect>
        </g>

        <!-- Click icon -->
        <g transform="translate(865.5, 141.5)" class="desc-container container-7">
        <g class="roadmap-active-point-hide" id="active-point7" data-position="7">
        <circle id="bg" fill="#6CC727" fill-rule="evenodd" cx="28" cy="28" r="28"></circle>
        <g id="atoms/icons/32/roadmap/a-ic-32-roadmap-team-on-same-page" transform="translate(12.000000, 12.000000)" fill="#FFFFFF" fill-rule="nonzero">
        <image width="32px" height="32px" preserveAspectRatio="xMidYMid slice" xlink:href="/image/How_it_works/Impletement-Financial-plan-and-investment-Strategy.png"></image>
        <!--<path d="M26.5,1 C27.2796961,1 27.9204487,1.59488808 27.9931334,2.35553999 L28,2.5 L28,27.5 C28,29.6801701 27.0351745,30.913139 25.1999568,30.9955789 L25,31 L4.97033286,30.9991191 C3.89756706,30.935355 3.08518362,30.5291632 2.58397485,29.7773501 C2.23095616,29.2478221 2.03165372,28.6752973 1.99070724,28.0674813 C1.95605298,27.5556976 2.31285791,27.1079033 2.80528538,27.0168164 L2.94609317,27.0009216 L6,27 L6,2.5 C6,1.72030388 6.59488808,1.07955132 7.35553999,1.00686658 L7.5,1 L26.5,1 Z M26.5,2 L7.5,2 C7.25454011,2 7.05039163,2.17687516 7.00805567,2.41012437 L7,2.5 L7,27 L22.0173853,27 C22.5415027,26.9999004 22.9767382,27.4045056 23.0148787,27.9272244 C23.1198918,29.3664422 23.7403123,30 25,30 C26.3135734,30 26.9482859,29.3013965 26.9969612,27.7043276 L27,27.5 L27,2.5 C27,2.25454011 26.8231248,2.05039163 26.5898756,2.00805567 L26.5,2 Z M22.0175301,27.9999964 L2.9884342,27.9999964 L3.00775088,28.1833198 C3.06014491,28.5466474 3.19526483,28.8915094 3.41602515,29.2226499 C3.70177717,29.6512779 4.15829173,29.9055127 4.80144048,29.98229 L5,29.9999964 L22.6852998,29.9999964 L22.564057,29.8287411 C22.2561377,29.3546633 22.0716624,28.7418864 22.0175301,27.9999964 Z M13.5,18 C13.7761424,18 14,18.2238576 14,18.5 L14,22.5 C14,22.7761424 13.7761424,23 13.5,23 L9.5,23 C9.22385763,23 9,22.7761424 9,22.5 L9,18.5 C9,18.2238576 9.22385763,18 9.5,18 L13.5,18 Z M13,19 L10,19 L10,22 L13,22 L13,19 Z M24,20 L24,21 L16,21 L16,20 L24,20 Z M13.5,11 C13.7761424,11 14,11.2238576 14,11.5 L14,15.5 C14,15.7761424 13.7761424,16 13.5,16 L9.5,16 C9.22385763,16 9,15.7761424 9,15.5 L9,11.5 C9,11.2238576 9.22385763,11 9.5,11 L13.5,11 Z M13,12 L10,12 L10,15 L13,15 L13,12 Z M24,13 L24,14 L16,14 L16,13 L24,13 Z M13,4 L13,5 L10,5 L10,8 L13,8 L13,7.5 L14,7.5 L14,8.5 C14,8.74545989 13.8231248,8.94960837 13.5898756,8.99194433 L13.5,9 L9.5,9 C9.25454011,9 9.05039163,8.82312484 9.00805567,8.58987563 L9,8.5 L9,4.5 C9,4.25454011 9.17687516,4.05039163 9.41012437,4.00805567 L9.5,4 L13,4 Z M15.1746043,3.6203717 L15.8253957,4.3796283 L12.3253957,7.3796283 C12.1518223,7.52840548 11.903627,7.53830399 11.7205258,7.4146896 L11.6464466,7.35355339 L10.6464466,6.35355339 L11.3535534,5.64644661 L12.0261519,6.31904516 L15.1746043,3.6203717 Z M24,6 L24,7 L16,7 L16,6 L24,6 Z" id="Shape"></path>-->
        </g>
        </g>
        </g>
        <!-- Click icon -->
        <g transform="translate(1004.35, 131.50000)" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <circle class="roadmap-dot-click" r="11" cursor="pointer" pointer-events="visible" position="8" data-pos="8"></circle>
        <rect fill="#999999" class="roadmap-desc-line-hide line-8" id="roadmap-desc-line8" width="1" height="100"></rect>
        </g>
        <!-- Click icon -->
        <g transform="translate(975.5, 100.5)" class="desc-container container-8">
        <g class="roadmap-active-point-hide" id="active-point8" data-position="8">
        <circle id="bg" fill="#6CC727" fill-rule="evenodd" cx="28" cy="28" r="28"></circle>
        <g id="atoms/icons/32/roadmap/a-ic-32-roadmap-team-on-same-page" transform="translate(12.000000, 12.000000)" fill="#FFFFFF" fill-rule="nonzero">
        <image width="32px" height="32px" preserveAspectRatio="xMidYMid slice" xlink:href="/image/How_it_works/Monitor-and-update-your-financial-plan.png"></image>
        <!--<path d="M26.5,1 C27.2796961,1 27.9204487,1.59488808 27.9931334,2.35553999 L28,2.5 L28,27.5 C28,29.6801701 27.0351745,30.913139 25.1999568,30.9955789 L25,31 L4.97033286,30.9991191 C3.89756706,30.935355 3.08518362,30.5291632 2.58397485,29.7773501 C2.23095616,29.2478221 2.03165372,28.6752973 1.99070724,28.0674813 C1.95605298,27.5556976 2.31285791,27.1079033 2.80528538,27.0168164 L2.94609317,27.0009216 L6,27 L6,2.5 C6,1.72030388 6.59488808,1.07955132 7.35553999,1.00686658 L7.5,1 L26.5,1 Z M26.5,2 L7.5,2 C7.25454011,2 7.05039163,2.17687516 7.00805567,2.41012437 L7,2.5 L7,27 L22.0173853,27 C22.5415027,26.9999004 22.9767382,27.4045056 23.0148787,27.9272244 C23.1198918,29.3664422 23.7403123,30 25,30 C26.3135734,30 26.9482859,29.3013965 26.9969612,27.7043276 L27,27.5 L27,2.5 C27,2.25454011 26.8231248,2.05039163 26.5898756,2.00805567 L26.5,2 Z M22.0175301,27.9999964 L2.9884342,27.9999964 L3.00775088,28.1833198 C3.06014491,28.5466474 3.19526483,28.8915094 3.41602515,29.2226499 C3.70177717,29.6512779 4.15829173,29.9055127 4.80144048,29.98229 L5,29.9999964 L22.6852998,29.9999964 L22.564057,29.8287411 C22.2561377,29.3546633 22.0716624,28.7418864 22.0175301,27.9999964 Z M13.5,18 C13.7761424,18 14,18.2238576 14,18.5 L14,22.5 C14,22.7761424 13.7761424,23 13.5,23 L9.5,23 C9.22385763,23 9,22.7761424 9,22.5 L9,18.5 C9,18.2238576 9.22385763,18 9.5,18 L13.5,18 Z M13,19 L10,19 L10,22 L13,22 L13,19 Z M24,20 L24,21 L16,21 L16,20 L24,20 Z M13.5,11 C13.7761424,11 14,11.2238576 14,11.5 L14,15.5 C14,15.7761424 13.7761424,16 13.5,16 L9.5,16 C9.22385763,16 9,15.7761424 9,15.5 L9,11.5 C9,11.2238576 9.22385763,11 9.5,11 L13.5,11 Z M13,12 L10,12 L10,15 L13,15 L13,12 Z M24,13 L24,14 L16,14 L16,13 L24,13 Z M13,4 L13,5 L10,5 L10,8 L13,8 L13,7.5 L14,7.5 L14,8.5 C14,8.74545989 13.8231248,8.94960837 13.5898756,8.99194433 L13.5,9 L9.5,9 C9.25454011,9 9.05039163,8.82312484 9.00805567,8.58987563 L9,8.5 L9,4.5 C9,4.25454011 9.17687516,4.05039163 9.41012437,4.00805567 L9.5,4 L13,4 Z M15.1746043,3.6203717 L15.8253957,4.3796283 L12.3253957,7.3796283 C12.1518223,7.52840548 11.903627,7.53830399 11.7205258,7.4146896 L11.6464466,7.35355339 L10.6464466,6.35355339 L11.3535534,5.64644661 L12.0261519,6.31904516 L15.1746043,3.6203717 Z M24,6 L24,7 L16,7 L16,6 L24,6 Z" id="Shape"></path>-->
        </g>
        </g>
        </g>
        <!-- Click icon -->
        <g transform="translate(1115.9, 138.50000)" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <circle class="roadmap-dot-click" r="11" cursor="pointer" pointer-events="visible" position="9" data-pos="9"></circle>
        <rect fill="#999999" class="roadmap-desc-line-hide line-9" id="roadmap-desc-line9" width="1" height="100"></rect>
        </g>
        <!-- Click icon -->
        <g transform="translate(1087.5, 109.5)" class="desc-container container-9">
        <g class="roadmap-active-point-hide" id="active-point9" data-position="9">
        <circle id="bg" fill="#6CC727" fill-rule="evenodd" cx="28" cy="28" r="28"></circle>
        <g id="atoms/icons/32/roadmap/a-ic-32-roadmap-team-on-same-page" transform="translate(12.000000, 12.000000)" fill="#FFFFFF" fill-rule="nonzero">
        <image width="32px" height="32px" preserveAspectRatio="xMidYMid slice" xlink:href="/image/How_it_works/Refer-Friend.png"></image>
        <!--<path d="M26.5,1 C27.2796961,1 27.9204487,1.59488808 27.9931334,2.35553999 L28,2.5 L28,27.5 C28,29.6801701 27.0351745,30.913139 25.1999568,30.9955789 L25,31 L4.97033286,30.9991191 C3.89756706,30.935355 3.08518362,30.5291632 2.58397485,29.7773501 C2.23095616,29.2478221 2.03165372,28.6752973 1.99070724,28.0674813 C1.95605298,27.5556976 2.31285791,27.1079033 2.80528538,27.0168164 L2.94609317,27.0009216 L6,27 L6,2.5 C6,1.72030388 6.59488808,1.07955132 7.35553999,1.00686658 L7.5,1 L26.5,1 Z M26.5,2 L7.5,2 C7.25454011,2 7.05039163,2.17687516 7.00805567,2.41012437 L7,2.5 L7,27 L22.0173853,27 C22.5415027,26.9999004 22.9767382,27.4045056 23.0148787,27.9272244 C23.1198918,29.3664422 23.7403123,30 25,30 C26.3135734,30 26.9482859,29.3013965 26.9969612,27.7043276 L27,27.5 L27,2.5 C27,2.25454011 26.8231248,2.05039163 26.5898756,2.00805567 L26.5,2 Z M22.0175301,27.9999964 L2.9884342,27.9999964 L3.00775088,28.1833198 C3.06014491,28.5466474 3.19526483,28.8915094 3.41602515,29.2226499 C3.70177717,29.6512779 4.15829173,29.9055127 4.80144048,29.98229 L5,29.9999964 L22.6852998,29.9999964 L22.564057,29.8287411 C22.2561377,29.3546633 22.0716624,28.7418864 22.0175301,27.9999964 Z M13.5,18 C13.7761424,18 14,18.2238576 14,18.5 L14,22.5 C14,22.7761424 13.7761424,23 13.5,23 L9.5,23 C9.22385763,23 9,22.7761424 9,22.5 L9,18.5 C9,18.2238576 9.22385763,18 9.5,18 L13.5,18 Z M13,19 L10,19 L10,22 L13,22 L13,19 Z M24,20 L24,21 L16,21 L16,20 L24,20 Z M13.5,11 C13.7761424,11 14,11.2238576 14,11.5 L14,15.5 C14,15.7761424 13.7761424,16 13.5,16 L9.5,16 C9.22385763,16 9,15.7761424 9,15.5 L9,11.5 C9,11.2238576 9.22385763,11 9.5,11 L13.5,11 Z M13,12 L10,12 L10,15 L13,15 L13,12 Z M24,13 L24,14 L16,14 L16,13 L24,13 Z M13,4 L13,5 L10,5 L10,8 L13,8 L13,7.5 L14,7.5 L14,8.5 C14,8.74545989 13.8231248,8.94960837 13.5898756,8.99194433 L13.5,9 L9.5,9 C9.25454011,9 9.05039163,8.82312484 9.00805567,8.58987563 L9,8.5 L9,4.5 C9,4.25454011 9.17687516,4.05039163 9.41012437,4.00805567 L9.5,4 L13,4 Z M15.1746043,3.6203717 L15.8253957,4.3796283 L12.3253957,7.3796283 C12.1518223,7.52840548 11.903627,7.53830399 11.7205258,7.4146896 L11.6464466,7.35355339 L10.6464466,6.35355339 L11.3535534,5.64644661 L12.0261519,6.31904516 L15.1746043,3.6203717 Z M24,6 L24,7 L16,7 L16,6 L24,6 Z" id="Shape"></path>-->
        </g>
        </g>
        </g>
        <!-- Click icon -->
        </g>
        </svg>
    </div>
    <div class="p-5 desk-roadmap">
        <div id="" class="services position-1" style="margin-top: -70px;margin-left: -150px;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9 col-md-6 justify-content-center">
                        <div class="d-flex">
                            <div data-aos="zoom-in" data-aos-delay="100">
                                <h4><a href="" class="color-light-green">Start</a></h4>
                                <ul class="unordered-list ml-20">
                                    <li>Determine How to Work Together</li>
                                </ul>
                            </div>
                        </div>
                        <!-- End .content-->
                    </div>
                </div>
            </div>
        </div>
        <div id="" class="services position-2" style="margin-top: -110px;">
            <div class="container">
                <div class="row justify-content-center align-content-center">
                    <div class="col-lg-9 col-md-6 justify-content-center">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                            <h4><a href="" class="color-light-green">Discovery Meeting</a></h4>
                            <ul class="unordered-list ml-20">
                                <li>Learn and understand your situation </li>
                                <li>Identify, clarify, and prioritize your goals, values, and concerns</li>
                            </ul>
                        </div>
                        <!-- End .content-->
                    </div>
                </div>
            </div>
        </div>
        <div id="" class="services position-3"  style="margin-top: -130px;">
            <div class="container">
                <div class="row  justify-content-center">
                    <div class="col-lg-8 col-md-6 justify-content-center">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                            <div class="align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
                                <h4 class="color-light-green">Develop an Investment Policy Statement</h4><br/>
                                <ul class="unordered-list ml-20">
                                    <li>Document client investment objectives and constraints. </li>
                                    <li>Provide accountability and structure to portfolio construction. </li>
                                </ul>

                            </div>
                        </div>
                        <!-- End .content-->
                    </div>
                </div>
            </div>
        </div>
        <div id="" class="services position-4" style="margin-top: -150px;">
            <div class="container">
                <div class="row  justify-content-center">
                    <div class="col-lg-8 col-md-6 justify-content-center">
                        <div class="icon-boxes d-flex justify-content-center">
                            <div class="  align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
                                <h4 class="color-light-green">Assess and Analyze</h4>                                            
                                <ul class="unordered-list ml-20">
                                    <li>Analyse all areas of your financial life</li>
                                    <li>Cash Flow management</li>
                                    <li>Insurance and Protection Planning</li>
                                    <li>Portfolio Construction</li>
                                    <li>Asset Management </li>
                                    <li>Retirement Planning</li>
                                    <li> Education Planning</li>
                                    <li>Tax Planning</li>
                                </ul>
                            </div>
                        </div>
                        <!-- End .content-->
                    </div>
                </div>
            </div>
        </div>
        <div id="" style="margin-top: -165px;" class="services position-5">
            <div class="container">

                <div class="row  justify-content-center">
                    <div class="col-lg-8 col-md-6 justify-content-center">
                        <div class="icon-boxes d-flex 8 justify-content-center">

                            <div class="8align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                                <h4 class="color-light-green">Design an Investment Strategy</h4>
                                <ul class="unordered-list ml-20">
                                    <li>Integrate asset allocation with financial plan </li>
                                    <li>Incorporate capital market expectations and economic outlook </li>
                                    <li>Implement the most appropriate risk management strategy</li>
                                </ul>
                            </div>
                        </div>
                        <!-- End .content-->
                    </div>
                </div>
            </div>
        </div>
        <div id="" class="services position-6" style="margin-top: -174px;">
            <div class="container">
                <div class="row  justify-content-center">
                    <div class="col-lg-8 col-md-6 justify-content-center">
                        <div class="icon-boxes d-flex justify-content-center">
                            <div class="align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
                                <h4 class="color-light-green">Propose Planning and Recommendations</h4>
                                <ul class="unordered-list ml-20">
                                    <li>Educate and communicate all available options</li>
                                    <li>Evaluate and offer optimal solutions</li>
                                </ul>
                            </div>
                        </div>
                        <!-- End .content-->
                    </div>
                </div>
            </div>
        </div>
        <div id="" class="services position-7" style="margin-top: -165px;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="offset-2 col-lg-12 col-md-9">
                        <div class="icon-boxes d-flex justify-content-center">
                            <div class="align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                                <h4 class="color-light-green">Implement Financial Plan and Investment Strategy</h4>
                                <ul class="unordered-list ml-20">
                                    <li>Establish online access </li>
                                    <li>Open new accounts </li>
                                    <li>Transfer existing assets </li>
                                    <li>Provide written financial plan </li>
                                    <li>Address risk management and protection needs</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="" class="services position-8" style="margin-top: -195px;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="offset-4 col-lg-8 col-md-6">
                        <div class="icon-boxes d-flex justify-content-center">
                            <div class="align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
                                <h4 class="color-light-green">Monitor and Update Your Financial Plan</h4>
                                <ul class="unordered-list ml-20">
                                    <li>Revisit goals and client situation </li>
                                    <li>Review investment strategy </li>
                                    <li>Modify and track financial plan & IPS</li>
                                    <li>Facilitate understanding of client statements and online resources</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End .content-->
                </div>
            </div>
        </div>

        <div id="" class="services position-9" style="margin-top: -195px;">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="icon-boxes d-flex justify-content-center">
                            <div class="align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                                <h4 class="color-light-green">Refer friends, Family, and Co-workers</h4>
                                <ul class="unordered-list ml-20">
                                    <li>The best compliment we could ever receive is a new introduction from you </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End .content-->
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="card" style="box-shadow: 0 20px 20px 1px rgba(0,0,0,0.05);border: none;">
                            <div class="card-body">
                                <form class="" action="/save-lead" method="post">
                                    @csrf
                                    <input type="hidden" name="lead_type" value="customer">
                                    <div class="form-group">
                                        <input type="text" name="name" placeholder="Your Name" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="friend_name" placeholder="Your Friend's name" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="mobile" placeholder="Your Friend's Mobile Number*" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Your Friend's Email" class="form-control" required>
                                    </div>                                    
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-sm" value="Submit">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg bg-light p-5 mobile-roadmap">
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
        <section id="services" class="services2">
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
                        <img src="/img/how/6.png" class="img-fluid" alt="">                                                                                                                                                        </div>
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

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 how_works_heading mb-50">
                <h2><span class="blue-text">First time </span> creating a financial plan?</h2>
            </div>
            <div class="col-lg-6 col-md-6 mb-50">
                <h4 class="font-weight-600 mb-20">What does Royal Monarch do?</h4>
                <p>Royal Monarch will help you build and implement a holistic financial plan. We combine cutting edge technology with certified planners to give you personalized recommendations that <span class="blue-text"> help you reach your goals and manage your financial life.</span></p>
            </div>
            <div class="col-lg-6 col-md-6 mb-50">
                <h4 class="font-weight-600 mb-20">Are we on the same side?</h4>
                <p>Yes! <span class="blue-text">Every financial planner at Royal Monarch is a fiduciary.</span> That means we are required by law only to recommend financial plans and products that are in your best interest.</p>
            </div>
            <div class="col-lg-6 col-md-6 mb-50">
                <h4 class="font-weight-600 mb-20">What can you help me with?</h4>
                <p>Got student loans? A baby on the way? Planning to buy a home? Worried whether you’re saving enough?  We give you unlimited access to our financial planners to help answer any question you might have. We can help you <span class="blue-text">plan your savings, student loans and other debt payoff, estate, insurance, retirement and more.</span></p>
            </div>
            <div class="col-lg-6 col-md-6 mb-50">
                <h4 class="font-weight-600 mb-20">How does it work?</h4>
                <p>Think of us like primary care for your financial life. You’ll start with a 1:1 video <span class="blue-text">meeting with one of our (amazing) financial planners.</span> They’ll work hand-in-hand with you to collect some basic information about your life goals and wishes. From there, we use a combination of expert insight and financial technology to develop and implement a financial plan that's tailor-made for you and your family.</p>
            </div>
            <div class="col-lg-6 col-md-6 mb-50">
                <h4 class="font-weight-600 mb-20">Is my information safe?</h4>
                <p>We use best-in-class, <span class="blue-text">bank-level 256-bit AES data encryption and other security protocols</span> to protect your information. We never share your information with your anyone.</p>
            </div>
            <div class="col-lg-12 col-md-12 mb-50">
                Still have questions? Contact us here:
                <p><a class="blue-text" href="mailto:care@royalmonarch.in">care@royalmonarch.in</a></p>
            </div>
        </div>
    </div>

    <div class="container mb-50">
        <div class="row justify-content-center">
            <a href="#" class="btn" role="button" data-toggle="modal" data-target="#exampleModal">  Join us NOW  </a>
        </div>
    </div>



    <!-- End Services Section -->





</main>
@endsection
@section('3')
active
@endsection


@section('scripts')
<script src="{{asset('js/pages/roadmap.js')}}"></script>
<script>

var currentSection = $("div.services:nth-of-type(1)");
$('div.services').not(currentSection).hide();
$("body").on("click", ".roadmap-dot-click", function () {
    var pos = $(this).data('pos');
    $("body").find("div.services").css('display', 'none');
    var sectionClas = "div.position-" + pos;
    $(sectionClas).fadeIn();
//    $("body").find(".roadmap-desc-line").fadeOut();
//    $(this).closest("g").find("g").show();
//    $(this).fadeOut();
//    $(".desc-container").fadeOut();

//    $(this).closest("g").find(".roadmap-active-point").removeClass('roadmap-active-point');
    var activePoint = $("body").find(".roadmap-active-point-hide");

//    $.each(activePoint,function(index,element){
//        console.log(element);
//        $(element).removeClass("roadmap-active-point-hide");
//        $(element).addClass("roadmap-active-point");
//    })

//    $(this).fadeOut();
//    $("body").find(".line-" + pos).removeClass('roadmap-desc-line-hide');
//    $("body").find(".line-" + pos).addClass('roadmap-desc-line');
})
</script>
<script>

    var base_color = "lightgray";
    var active_color = "#6CC727";

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
        for (var k in attrs)
            el.setAttribute(k, attrs[k]);
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

    $(".button").click(function () {
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
    $("body").on("click", ".open-collapse-area", function () {
        $(this).closest(".accordion-item-trigger").hide();
        $(this).closest(".panel-heading").css("border-bottom-width", "0px");
    });
    $("body").on("click", ".click-span", function () {
        $(this).closest(".panel").find(".accordion-item-trigger").show();
        $(this).closest(".panel").find(".panel-heading").css("border-bottom-width", "10px");
    });
</script>
@endsection

