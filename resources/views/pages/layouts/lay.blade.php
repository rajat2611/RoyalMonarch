<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Royal Monarch </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


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
{{--    <link rel="stylesheet" href="{{ asset('rafi/build/css/demo.css') }}">--}}

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
                <div class="container">
                    <div class="row align-items-center" style="line-height: 1;">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-1">
                            <div class="logo">
                                <a href="index.html"><img src="{{ asset('img/logo/logo.png') }}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="/index" class="active-link @yield(1)"> Home</a>
                                        </li>
                                        <li><a href="#" class="unclickable @yield(2)">About Us</a>
                                            <ul class="submenu">
                                                <li><a href="/firm">our Firm</a></li>
                                                <li><a href="/culture">our Culture</a></li>
                                                <li><a href="/approach">our approach</a></li>
                                                <li><a href="/team">our team</a></li>



                                            </ul>
                                        </li>
                                        <li><a href="/How_it_works" class="@yield(3)">How it Works </a></li>
                                        <li><a href="/career" class="@yield(4)">Career</a></li>

                                        <li><a href="/blog" class="@yield(5)">knowldege</a>

                                        </li>
                                        <li><a href="/support" class="@yield(6)">support</a></li>
                                        <li>
                                        @auth
                                                @if (auth::user()->join)


                                                            <div class="navbar-nav flex-row order-md-last">

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

                                        @endauth
                                    </li>
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
                    <h5 class="modal-title" id="exampleModalLabel">Form</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
                </div>
                <div class="modal-body">
                    <div class="section-top-border mt-1">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <h3 class="mb-30 mt-0">Join Us</h3>
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

                                        <div style="width: 95%" class="form-select2 align-self-center">

                                            <select required id="goals" multiple  class="single-input @error('goals') is-invalid @enderror" value="{{ old('goals') }}" required autocomplete="goals" autofocus name="goals">

                                            <option value="emergency-fund" style="background-image:url(rafi/Signup Form/Emergency Fund.png);">     Emergency Fund</option>
                                            <option value="paying-off-debt"> Paying off debt &#xf042;</option>
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
                    <h5 class="modal-title text-capitalize" id="exampleModalLabel">about this calculations</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
                </div>
                <div class="modal-body text-center">
                    <p>This chart is showing you a lifelong financial planning which can make you Rs. 100 crores.</p>
                </div>
                <div class="text-center">
                    <h3>How Royal Monarch makes this projection</h3>
                    <p>This projection assumes an initial investment of Rs. 10,00,000.00 and Monthly SIP of Rs. 10,000.00 This amount will grow at an annual rate of 42%, compounded every year. This is our last 10 years average and does not include any fees.</p>
                </div>



                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary py-4 px-3" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>

    <footer>

        <!-- Footer Start-->
        <div class="footer-main bg-dark2">
            <div class="footer-area">
                <div class="container ">
                    <div class="row d-flex justify-content-between ">
                        <div class="col-lg-3 col-md-4 col-sm-8 ">
                            <div class="single-footer-caption mb-50 ">
                                <div class="single-footer-caption mb-30 ">
                                    <!-- logo -->
                                    <div class="footer-logo ">
                                        <a href="index.html "><img src="/img/logo/logo.png " alt=" "></a>
                                    </div>
                                    <div class="footer-tittle ">
                                        <div class="footer-pera ">
                                            <p class="info1 "> B1 - 504 Westgate Business Bay, <br> Near Vodafone House, Corporate Road, SG highway, Ahmedabad - 380051</p>
                                            <p class="info2 ">   +91 79 484 666 22</p>
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
            <!-- footer-bottom area -->
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
                                        </script> All rights reserved | Royal Monarch
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->

    </footer>

    <!-- JS here -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- All JS Custom Plugins Link Here here -->
    <script src="{{ asset('js/vendor/ modernizr-3.5.0.min.js') }} "></script>
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

     $(document).ready(function(){

  var firstName = $('#first_name').text();
  var lastName = $('#last_name').text();
  var intials = firstName.charAt(0) + lastName.charAt(0);
  var profileImage = $('#profileImage').text("ss");



});
     $('#dependants').on('change', function () {
         var depends=   $('#dependants').val();
         console.log(depends);
         if (depends == "more"){

             $("#more_number").show();
            var more = document.getElementById('more_number');
            more.style.display="flex";

         }else{
             //more.style.display ="none";
             $("#more_number").hide();
         }

     })
</script>
</body>

</html>
