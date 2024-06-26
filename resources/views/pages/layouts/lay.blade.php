<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Royal Monarch </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<meta name="viewport" content="width=device-width, initial-scale=0.5">-->

        <!-- CSS here -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/pages/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/pages/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('css/pages/slicknav.css') }}">
        <link rel="stylesheet" href="{{ asset('css/pages/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/pages/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('css/pages/fontawesome-all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/pages/themify-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('css/pages/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('css/pages/nice-select.css') }}">
        <link rel="stylesheet" href="{{ asset('css/pages/style.css') }}">
        <link rel="stylesheet" href="{{ asset('rafi/build/css/intlTelInput.css') }}">
                      {{--    <link rel="stylesheet" href="{{ asset('rafi/build/css                      /demo.cs                    s') }}">--}}

        <style>
                #profileImage {
                    width: 50px;
                    height: 50px;
                    border-radius: 50%;
                    background: #e1b2e2;
                    font-size: 25px;
                    color: rgb(46, 46, 48);;
                    text-align: center;



                }
                .form-select .nice-select {
                    padding-left: 20px;

                }

            </style>
            @yield('styles')
        </head>

        <body>

            <!-- Preloader Start -->
            <div id="preloader-active">
                <div class="preloader d-flex align-items-center justify-content-center">
                    <div class="preloader-inner position-relative">
                        <div class="preloader-circle"></div>
                        <div class="preloader-img pere-text">
                            <img src="{{ asset('img/logo/logo.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Preloader end -->

            <header>
                <!-- Header Start -->
                <div class="header-area header-transparrent ">
                    <div class="main-header header-sticky">
                        <div class="container-fluid">
                            <div class="row align-items-center" style="line-height: 1;">
                                <!-- Logo -->
                                <div class="col-xl-2 col-lg-2 col-md-1">
                                    <div class="logo">
                                        <a href="index.php"><img src="{{ asset('img/logo/logo.png') }}" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-xl-10 col-lg-10 col-md-10">
                                    <!-- Main-menu -->
                                    <div class="main-menu f-center d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                                <li><a href="/index" class="active-link @yield(1)"> Home</a>
                                                </li>
                                                <li><a href="/firm" class="@yield(2)">About Us</a>
                                                    <!--                                            <ul class="submenu">
                                                                                                    <li><a href="/firm">our Firm</a></li>
                                                                                                    <li><a href="/culture">our Culture</a></li>
                                                                                                    <li><a href="/approach">our approach</a></li>
                                                                                                    <li><a href="/team">our team</a></li>
                                                    
                                                    
                                                    
                                                                                                </ul>-->
                                                </li>
                                                <li><a href="/How_it_works" class="@yield(3)">How it Works </a></li>
                                                <li><a href="/career" class="@yield(4)">Career</a></li>

                                                <li><a href="/blog" class="@yield(5)">knowldege</a>

                                                </li>
                                                <li><a href="/support" class="@yield(6)">support</a></li>
                                                <li><a href="/partner" class="@yield(7)">Become a Partner</a></li>
                                                <?php /*
                                                <li>
                                                    @auth
                                                    <?php /* @if (auth::user()->join) 
                                                    @if (auth::check())
                                                    @if(auth::user()->role_id == 1)
                                                    <div class="navbar-nav flex-row order-md-last login-dropdown">
                                                        <div class="nav-item dropdown">
                                                            <a href="#" class="nav-link d-flex justify-content-center align-items-center lh-1 text-reset p-0" data-toggle="dropdown">
                                                                <div id="profileImage" class="d-flex justify-content-center align-items-center"> <span id="first_name">{{Auth::user()->join->first_name[0]}} </span><span id="last_name">{{ Auth::user()->join->last_name[0]}}</span></div>
                                                                <div class="pl-2">
                                                                </div>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right "style="position: absolute; z-index:2000;">
                                                                <a class="dropdown-item" href="/admin">
                                                                    <p>{{Auth::user()->join->first_name}} {{ Auth::user()->join->last_name}}</p>
                                                                    <small>{{Auth::user()->join->email}}</small>
                                                                </a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="/admin/category">Category</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="/admin/blogs">Blog</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="/admin/teams">Manage Team</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="/admin/career">Manage Career</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                                    <i class="fa fa-fw fa-power-off"></i>
                                                                    Log Out
                                                                </a>
                                                                <form id="logout-form" action="/logout" method="POST" style="display: none;">
                                                                    @csrf
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @else
                                                    <div class="navbar-nav flex-row order-md-last login-dropdown">
                                                        <div class="nav-item dropdown">
                                                            <a href="#" class="nav-link d-flex justify-content-center align-items-center lh-1 text-reset p-0" data-toggle="dropdown">
                                                                <div id="profileImage" class="d-flex justify-content-center align-items-center"> <span id="first_name">{{Auth::user()->join->first_name[0]}} </span><span id="last_name">{{ Auth::user()->join->last_name[0]}}</span></div>
                                                                <div class="pl-2">
                                                                </div>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right "style="position: absolute; z-index:2000;">
                                                                <a class="dropdown-item" href="/dashboard">
                                                                    <p>{{Auth::user()->join->first_name}} {{ Auth::user()->join->last_name}}</p>
                                                                    <small>{{Auth::user()->join->email}}</small>
                                                                </a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#">
                                                                    My account
                                                                </a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="./layout-fluid-vertical.html">Reward and referrals
                                                                </a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#">Help
                                                                </a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#">Log Out
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endif
                                                    @endif

                                                    @endauth
                                                </li> */ ?>
                                                @guest
                                                <li class="pl-lg-5">
                                                    <div class="header-right-btn">
                                                        <a href="{{ route('login') }}" class="header-btn" role="button" >Log In  <i class="ti-arrow-right"></i></a>
                                                    </div>
                                                </li>
                                                @endguest






                                            </ul>
                                        </nav>
                                    </div>
                                </div>


                                <!-- Mobile Menu -->
                                <div class="col-12 f-right clear">
                                    <div class="mobile_menu d-block d-lg-none"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Header End -->
            </header>

            @yield('content')


            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Join Us</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="section-top-border mt-1">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <form  method="POST" action="{{ route('join') }}">
                                            @csrf

                                            <div  class="mt-10 d-flex align-items-center">
                                                <div class="align-self-center form-select1"> <label for="first_name">First Name: </label></div>
                                                <input type="text" name="first_name" placeholder="First Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" required class="single-input @error('first_name') is-invalid @enderror" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>
                                                @error('first_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="mt-10 d-flex align-items-center">
                                                <div class="align-self-center form-select1"> <label for="last_name">Last Name: </label></div>
                                                <input type="text" name="last_name" placeholder="Last Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required class="single-input  @error('last_name') is-invalid @enderror" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>
                                                @error('last_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div  class="mt-10 d-flex align-items-center">

                                                <div class="align-self-center form-select1"> <label for="email">Email : </label></div>
                                                <input type="email" name="email" placeholder="E-mail" onfocus="this.placeholder = ''" onblur="this.placeholder = 'E-mail'" required class="single-input  @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="mt-10 d-flex align-items-center">
                                                <div class="align-self-center form-select1">
                                                    <label for="phone">Phone Number: </label>
                                                </div>
                                                <div class="form-select  align-self-center" id="default-select">
                                                    <input id="phone" name="phone" type="tel" required class="single-input  @error('phone') is-invalid @enderror" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                                                    @error('phone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>


                                            <div class="input-group-icon mt-10 d-flex align-items-center">
                                                <div class="align-self-center form-select1">
                                                    <label for="gender">Gender: </label>
                                                </div>

                                                <div class="form-select  align-self-center" id="default-select">

                                                    <select required id="gender" name="gender" class=" @error('gender') is-invalid @enderror" value="{{ old('gender') }}" required autocomplete="gender" autofocus>
                                                        <option value="female">Female</option>
                                                        <option value="male">Male</option>
                                                        <option value="other">Other</option>
                                                    </select>
                                                    @error('gender')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="mt-10 d-flex align-items-center">
                                                <div class="align-self-center form-select1"> <label for="date">Birth Date: </label></div>
                                                <input type='date' name="date" placeholder="pick a date" onfocus="this.placeholder = ''" onblur="this.placeholder = 'pick a date'" required class="single-input @error('date') is-invalid @enderror" value="{{ old('date') }}" required autocomplete="date" autofocus />
                                                @error('date')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror

                                            </div>
                                            <div class=" mt-10 d-flex align-items-center">
                                                <div class="align-self-center form-select1"> <label for="Occup">Occupation : </label></div>

                                                <div class="form-select " id="default-select">

                                                    <select required id="Occup" class=" @error('ocuup') is-invalid @enderror" value="{{ old('ocuup') }}" required autocomplete="ocuup" autofocus name="occup">
                                                        <option value="self-employed">Self Employed</option>
                                                        <option value="employed">Employed</option>
                                                        <option value="doctor">Doctor</option>
                                                        <option value="home-maker/house-wife">Home Maker/House Wife</option>
                                                        <option value="student">Student</option>
                                                        <option value="retired">Retired</option>
                                                    </select>
                                                    @error('ocuup')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>


                                            <div class="mt-10  d-flex align-items-center">
                                                <div class="align-self-center form-select1 "> <label for="M-status">Martial Status : </label></div>

                                                <div class="form-select align-self-center" id="default-select">

                                                    <select required id="M-status" class=" @error('M-status') is-invalid @enderror" value="{{ old('M-status') }}" required autocomplete="M-status" autofocus name="M-status">
                                                        <option value="married">Married</option>
                                                        <option value="signle">	Single</option>
                                                        <option value="divorced">Divorced</option>
                                                        <option value="widow">Widow</option>
                                                        <option value="other">Other</option>
                                                    </select>
                                                    @error('M-status')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="mt-10 d-flex align-items-center ">
                                                <div class="align-self-center form-select1"> <label for="dependants">Dependants: </label></div>

                                                <div class="form-select  align-self-center" id="default-select">
                                                    <select required id="dependants" class=" @error('dependants') is-invalid @enderror" value="{{ old('dependants') }}" required autocomplete="dependants" autofocus name="dependants">
                                                        <option value="one">One</option>
                                                        <option value="two">Two</option>
                                                        <option value="three">Three</option>
                                                        <option value="four">Four</option>
                                                        <option value="five">Five</option>
                                                        <option value="six">Six</option>
                                                        <option value="seven">Seven</option>
                                                        <option value="more">More</option>
                                                    </select>
                                                    @error('dependants')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>

                                            </div>
                                            <div class="mt-10   align-items-center"  id = "more_number" >
                                                <div class="align-self-center form-select1"> <label></label></div>

                                                <div class="form-select">
                                                    <input type="text" name="more_number" class="single-input" placeholder="Enter More Number" required>
                                                </div>
                                            </div>




                                            <div class="mt-10  d-flex align-items-center">

                                                <div class="align-self-center form-select1"> <label for="goals">Tell us about your Goal:</label></div>

                                                <div style="width: 95%" class="form-select2 align-self-center join_form">

                                                    <select required id="goals" multiple  class="single-input @error('goals') is-invalid @enderror" value="{{ old('goals') }}" required autocomplete="goals" autofocus name="goals">

                                                        <option value="emergency-fund" data-image="{{asset('image/signup/emergency_fund.png')}}">Emergency Fund</option>
                                                        <option value="paying-off-debt"> Paying off debt</option>
                                                        <option value="marriage">Marriage</option>
                                                        <option value="family-support">Family Support </option>
                                                        <option value="buying-a-home">Buying a Home</option>
                                                        <option value="saving-for-retirement">Saving for Retirement</option>
                                                        <option value="college-private-school">College or Private School</option>
                                                        <option value="new-car">New Car</option>
                                                        <option value="vacation">Vacation</option>
                                                        <option value="charity">Charity</option>
                                                        <option value="own-business">Starting your own Business</option>
                                                        <option value="other">Other</option>


                                                    </select>
                                                    <i class="fa fa-caret-down" aria-hidden="true"></i>
                                                    @error('goals')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="mt-5">
                                                <button type="submit" class="btn btn-primary py-4 px-2">Submit</button>
                                                <button type="button " class="btn btn-secondary py-4 px-2" id="close" data-dismiss="modal">Close</button></div>


                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <!-- Modal2 -->
            <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content container">
                        <div class="modal-header">
                            <h5 class="modal-title text-capitalize" id="exampleModalLabel">about this calculation</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-center">
                            <div class="text-justify">
                                <p>This projection assumes an initial investment of ₹ 10,00,000.00 and Monthly SIP of ₹ 10,000.00. This amount will grow at an annual rate of 27% for 27 year, compounded every year. At the end of 27th year, your wealth becomes ₹ 124,87,59,507.00. The assumption rate which is 27%, is our last 10 years minimum and does not include any fees</p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary py-4 px-3" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer modal -->
            <div class="modal fade" id="impLinksModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Important Links</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="section-top-border mt-1">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <ul class="important-links">
                                            <li><a target="_blank" href="https://www1.nseindia.com/live_market/dynaContent/live_watch/pre_open_market/pre_open_market.htm">PRE OPEN SESSION</a></li>
                                            <li><a target="_blank" href="https://www.nseindia.com/">NSE India</a></li>
                                            <li><a target="_blank" href="https://www.bseindia.com/">BSE India</a></li>
                                            <li><a target="_blank" href="http://www.sebi.gov.in/">SEBI</a></li>
                                            <li><a target="_blank" href="http://www.sebi.gov.in/">RBI</a></li>
                                            <li><a target="_blank" href="https://www.mcxindia.com/">MCX</a></li>
                                            <li><a target="_blank" href="https://www.msei.in/">MSEI</a></li>
                                            <li><a target="_blank" href="https://www.msei.in/">NCDEX</a></li>
                                            <li><a target="_blank" href="https://www.nsdl.co.in/">NSDL</a></li>
                                            <li><a target="_blank" href="http://www.cdslindia.com/">CDSL</a></li>
                                            <li><a target="_blank" href="https://www.msei.in/">MSEI</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <div class="modal fade" id="staySecureModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Stay Secure</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="section-top-border mt-1">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <img src="/image/StaySecure.png" width="100%">
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <!-- Footer modal -->
            <footer>

                <!-- Footer Start-->
                <div class="footer-main footer-bg">
                    <div class="footer-area">
                        <div class="container ">
                            <div class="row d-flex justify-content-between ">
                                <div class="col-lg-2 col-md-4 col-sm-8 ">
                                    <div class="single-footer-caption mb-50 ">
                                        <div class="single-footer-caption mb-30 ">
                                            <!-- logo -->
                                            <div class="footer-logo ">
                                                <a href="/"><img src="/image/footer.png " class="w-100"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-5 ">
                                    <div class="single-footer-caption mb-50 ">
                                        <div class="footer-tittle ">
                                            <h3 class="font-times"><span style="font-size: 40px">R</span>oyal <span style="font-size: 40px">M</span>onarch</h3>
                                            <h5 class="font-times"><i><b style="color:white">A guilt free decisions</b></i></h5>
                                            <p class="mt-3 font-13">+ 91 79 484 666 22</p>
                                            <p class="font-13">care@royalmonarch.in</p>
                                            <p class="font-13">Made with love in India<br/> Copyright © 2020, Royal Monarch</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-5 ">
                                    <div class="single-footer-caption mb-50 ">
                                        <div class="footer-tittle ">
                                            <h5 class="font-weight-bold font-16 font-rubik">COMPANY:</h5>
                                            <ul class="font-13 font-sans">
                                                <li><a href="/firm">Our Firm</a></li>
                                                <li><a href="/culture">Our Culture</a></li>
                                                <li><a href="/approach">Our Approach</a></li>
                                                <li><a href="/team">Our Team</a></li>
                                                <li><a href="/career">Career</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-7 ">
                                    <div class="single-footer-caption mb-50 ">
                                        <div class="footer-tittle ">
                                            <h5 class="font-weight-bold font-16 font-rubik">SUPPORT:</5>
                                            <ul class="font-13 font-sans">
                                                <li><a href="#" data-toggle="modal" data-target="#exampleModal">Get Started</a></li>
                                                <li><a href="/support"> Contact</a></li>
                                                <li><a href="/blog">Blog</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-7 ">
                                    <div class="single-footer-caption mb-50 ">
                                        <div class="footer-tittle ">
                                            <h5 class="font-weight-bold font-16 font-rubik">RESOURCES:</h5>
                                            <ul class="font-13 font-sans">
                                                <li><a href="/blog">Reading Room</a></li>
                                                <li><a href="/How_it_works"> How it Work</a></li>
                                                <li><a href="# ">Calculate Wealth</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- footer-bottom area -->
                    <!--            <div class="footer-bottom-area footer-bg ">
                                    <div class="container ">
                                        <div class="footer-border ">
                                            <div class="row d-flex align-items-center ">
                                                <div class="col-xl-12 ">
                                                    <div class="footer-copy-right text-center ">
                                                        <p>
                                                            Copyright &copy;
                                                            <script>
                                                                document.write(new Date().getFullYear());
                                                            </script> All rights reserved | Royal Monarchy
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>-->
                    <div class="quick-footer">
                        <div class="footer-area">
                            <div class="container">
                                <div class="row d-flex justify-content-between">
                                    <ul>
                                        <li><a href="/privacy-policies">Privacy Policy</a></li>
                                        <li><a href="/copyrights">Copyright</a></li>
                                        <li><a href="/terms">Terms & Condition</a></li>
                                        <li><a href="/research">Research-Disclaimer</a></li>
                                        <li><a href="javascript:void(0)" data-toggle="modal" data-target="#impLinksModal">Important Links</a></li>
                                        <li><a href="/desclaimer">Disclaimer</a></li>
                                        <li><a href="/applicant-privacy">Applicant and Candidate Privacy Policy</a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#staySecureModal">Stay Secure</a></li>
                                        <li><a href="/stay-alert">Stay Alert</a></li>
                                        <li><a href="/ndncr">NDNCR Terms & Consitions</a></li>
                                    </ul>
                                    <p class="mt-2 text-center">Registered Office : Royal Monarch Finserv Private Limited, B1-504 Westgate Business Bay, Near Signature I, Corporate Road, Makarba Crossing, S.G. Highway, Ahmedabad-380051, Gujarat Tel:<a href="tel:079-484 666 22" style="color:#ff5775">079-484 666 22</a></p>
                                    <p class="text-center">Royal Monarch Finserv Private Limited-SEBI Regn No.:BSE/NSE/MSEI/MCX</p>
                                    <p class="text-center"><b>BSE</b> - Cash/FNO/CD | <b>NSE</b> AP2069120373-Cash/FAO/CD | <b>MCX</b> MCX/AP/136488-Commodities</p>
                                    <p>Depository services through:NSDL/CDSL-IN-DP-365-2018</p>
                                    <p>PMS:INP0000005786; Mutual Fund; ARN 20669; Research Analyst:INH00006183</p>
                                    <p>For any complaint email at <span><a href="mailto:care@royalmonarch.in" style="color:#ff5775">care@royalmonarch.in</a></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer End-->

            </footer>



            <!--    <footer>
            
                     Footer Start
                    <div class="footer-main bg-dark2">
                        <div class="footer-area">
                            <div class="container ">
                                <div class="row d-flex justify-content-between ">
                                    <div class="col-lg-3 col-md-4 col-sm-8 ">
                                        <div class="single-footer-caption mb-50 ">
                                            <div class="single-footer-caption mb-30 ">
                                                 logo 
                                                <div class="footer-logo ">
                                                    <a href="index.php "><img src="/img/logo/logo.png " alt=" "></a>
                                                </div>
                                                <div class="footer-tittle ">
                                                    <div class="footer-pera ">
                                                        <p class="info1 "> Cd-100, Sec-1, Salt Lake <br> Kolkata, INDIA - 700064</p>
                                                        <p class="info2 ">example@gmail.com</p>
                                                    </div>
                                                </div>
                                                <div class="footer-social ">
                                                    <a href="# "><i class="fab fa-facebook-f "></i></a>
                                                    <a href="# "><i class="fab fa-twitter "></i></a>
                                                    <a href="# "><i class="fab fa-instagram"></i></a>
                                                    <a href="# "><i class="fab fa-google-plus" ></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-sm-5 ">
                                        <div class="single-footer-caption mb-50 ">
                                            <div class="footer-tittle ">
                                                <h4>Quick Links</h4>
                                                <ul>
                                                    <li><a href="home.html ">Home</a></li>
                                                    <li><a href="team.html ">Team</a></li>
                                                    <li><a href="How_it_works.html">How it works</a></li>
                                                    <li><a href="blog.html ">Blog</a></li>
                                                    <li><a href="support.html">support</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-sm-7 ">
                                        <div class="single-footer-caption mb-50 ">
                                            <div class="footer-tittle ">
                                                <h4>Support</h4>
                                                <ul>
                                                    <li><a href="">Contact Us</a></li>
                                                    <li><a href="# "> Sitemap</a></li>
                                                    <li><a href="# ">FAQs</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-5 ">
                                        <div class="single-footer-caption mb-50 ">
                                            <div class="footer-tittle ">
                                                <h4>Core Features</h4>
                                                <ul>
            
                                                    <li><a href="# ">Lead Generation</a></li>
                                                    <li><a href="# "> 24/7 Support</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         footer-bottom area 
                        <div class="footer-bottom-area footer-bg ">
                            <div class="container ">
                                <div class="footer-border ">
                                    <div class="row d-flex align-items-center ">
                                        <div class="col-xl-12 ">
                                            <div class="footer-copy-right text-center ">
                                                <p>
                                                    Copyright &copy;
                                                    <script>
                                                        document.write(new Date().getFullYear());
                                                    </script> All rights reserved | Royal Monarchy
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     Footer End
            
                </footer>-->

            <!-- JS here -->
            <script src="{{ asset('js/app.js') }}" defer></script>

            <!-- All JS Custom Plugins Link Here here -->
            <script src="{{ asset('js/vendor/modernizr-3.5.0.min.js') }} "></script>
            <!-- Jquery, Popper, Bootstrap -->
            <script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}  "></script>
            <script src="{{ asset('js/pages//popper.min.js') }} "></script>
            <!-- Jquery Mobile Menu -->
            <script src="{{ asset('js/pages/jquery.slicknav.min.js') }}"></script>

            <!-- Jquery Slick , Owl-Carousel Plugins -->
            <script src="{{ asset('js/pages/owl.carousel.min.js') }} "></script>
            <script src="{{ asset('js/pages/slick.min.js') }} "></script>
            <!-- Date Picker -->
            <script src="{{ asset('js/pages/gijgo.min.js') }} "></script>
            <!-- One Page, Animated-HeadLin -->
            <script src="{{ asset('js/pages/wow.min.js') }} "></script>
            <script src="{{ asset('js/pages/animated.headline.js') }} "></script>
            <script src="{{ asset('js/pages/jquery.magnific-popup.js') }} "></script>

            <!-- Scrollup, nice-select, sticky -->
            <script src="{{ asset('js/pages/jquery.scrollUp.min.js') }} "></script>
            <script src="{{ asset('js/pages/jquery.nice-select.min.js') }} "></script>
            <script src="{{ asset('js/pages/jquery.sticky.js') }} "></script>

            <!-- contact js -->
            <script src="{{ asset('js/pages/contact.js') }} "></script>
            <script src="{{ asset('js/pages/jquery.form.js') }}"></script>
            <script src="{{ asset('js/pages/jquery.validate.min.js') }}"></script>
            <script src=" {{ asset('js/pages/mail-script.js') }}"></script>
            <script src="{{ asset('js/pages/jquery.ajaxchimp.min.js') }} "></script>
            <script src="{{ asset('js/pages/Chart.min.js') }}"></script>

            <script src="{{ asset('js/pages/BsMultiSelect.js') }}"></script>

            <script src="{{ asset('js/pages/plugins.js') }}"></script>
            <script src="{{ asset('js/pages/aos.js') }}"></script>

            <script src="{{ asset('js/pages/main.js') }}"></script>


            @yield('scripts')
            <script src="{{ asset('rafi/build/js/intlTelInput.js') }}"></script>

            <script>
                $("#goals").bsMultiSelect({
    cssPatch: {
        choices: {
            columnCount: '3'
        },
    }
});
            </script>
            <script>
                                                    var input = document.querySelector("#phone");
                                                    window.intlTelInput(input, {
                                                        // allowDropdown: false,
                                                        // autoHideDialCode: false,
                                                        // autoPlaceholder: "off",
                                                        // dropdownContainer: document.body,
                                                        // excludeCountries: ["us"],
                                                        // formatOnDisplay: false,
                                                        // geoIpLookup: function(callback) {
                                                        //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
                                                        //     var countryCode = (resp && resp.country) ? resp.country : "";
                                                        //     callback(countryCode);
                                                        //   });
                                                        // },
                                                        // hiddenInput: "full_number",
                                                        // initialCountry: "auto",
                                                        // localizedCountries: { 'de': 'Deutschland' },
                                                        // nationalMode: false,
                                                        // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
                                                        // placeholderNumberType: "MOBILE",
                                                        preferredCountries: ['in', 'us'],
                                                        // separateDialCode: true,
                                                        utilsScript: "rafi/build/js/utils.js",
                                                    });
                                        </script>
                                    
    <script>

        $("#more_number").hide();
        $(document).ready(function () {

            var firstName = $('#first_name').text();
            var lastName = $('#last_name').text();
            var intials = firstName.charAt(0) + lastName.charAt(0);
            var profileImage = $('#profileImage').text("ss");
        });
        $('#dependants').on('change', function () {
            var depends = $('#dependants').val();
            console.log(depends);
            if (depends == "more") {

                $("#more_number").show();
                var more = document.getElementById('more_number');
                more.style.display = "flex";
            } else {
                //more.style.display  = "none";
                $("#more_number").hide();
            }

        })
                                                </script>
                                                </body>
                                                
                                                </html>
