<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Dashboard.</title>


    <!-- CSS files -->
    <link href="https://unpkg.com/bootstrap-table@1.17.1/dist/bootstrap-table.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="/css/dashboard/tabler.min.css" rel="stylesheet" />
    @yield('styles')

    <style>
        body {
            display: none;
            
        }
        .page{
            min-height: 100vh;
            position: relative;
        }
        footer {
  position: absolute;
  bottom: 0px;
  left: 0;
  width: 100%;
  margin-bottom: 20px;
}
@media only screen and (max-width: 1200px) {
  footer {
    bottom: -100px;
    margin-bottom: 20px;


  }
}
#profileImage {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  background: #e1b2e2;
  font-size: 35px;
  color: rgb(46, 46, 48);
  text-align: center;
}
    </style>
    </head>
    
    <body class="antialiased">
        <div class="page">
    
            <!--header-->
            <header class="navbar navbar-expand-md navbar-light mb-4">
                <div class="container-xl">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu">
          <span class="navbar-toggler-icon"></span>
        </button>
                    <a href="/" class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pr-0 pr-md-3">
                  Royal Monarch 
              </a>
                    <div class="navbar-nav flex-row order-md-last">
    
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link d-flex justify-content-center align-items-center lh-1 text-reset p-0" data-toggle="dropdown">
                                <div id="profileImage"></div>                                
                                <div class="d-none d-xl-block pl-2 d-flex justify-content-center align-items-center">
                                                <span id="first_name">{{$user->first_name}} </span> <span id="last_name">{{ $user->last_name}}</span>
                                </div>
                                
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" style="position: absolute; z-index:2000;">
                                <a class="dropdown-item" href="/dashboard" class="d-flex flex-column  text-left">
                                    <div class="">
                                        <p>{{$user->email}}</p>

                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
    
                                <a class="dropdown-item" href="/account">
                                                           My account
                          </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/referrals">Reward and referrals
         </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/support">Help
        </a>
                                <div class="dropdown-divider"></div>
            
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            </div>
                        </div>
                    </div>
                    <div class="collapse navbar-collapse" id="navbar-menu" class="mr-5">
                        <div class="d-flex flex-column mr-5 flex-md-row flex-fill  align-items-md-center justify-content-end">
                            <ul class="navbar-nav">
                                <li class="nav-item @yield(1)">
                                    <a class="nav-link " href="/dashboard">
    
                                        <span class="nav-link-title">
                    Dashboard
                  </span>
                                    </a>
                                </li>
                                <li class="nav-item @yield(2)">
                                    <a class="nav-link" href="/services">
    
                                        <span class="nav-link-title">
                    Services
                  </span>
                                    </a>
    
                                </li>
                                <li class="nav-item dropdown @yield(3)">
                                    <a class="nav-link dropdown-toggle" href="#navbar-extra" data-toggle="dropdown" role="button" aria-expanded="false">
    
                                        <span class="nav-link-title">
                    Reports
                  </span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="/tradebook">
                    Tradbook
                  </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="/p&l">
    P & L                    </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="/tax&pl">
                    Tax & PL
                  </a>
                                        </li>
    
                                    </ul>
                                </li>
                                <li class="nav-item dropdown @yield(4)">
                                    <a class="nav-link dropdown-toggle" href="#navbar-extra" data-toggle="dropdown" role="button" aria-expanded="false">
    
                                        <span class="nav-link-title">
                    Funds
                  </span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="/overview">
                    Overview
                  </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="/statement">
    Statement                 </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="/payment_Gateway">
                   Payement Gateway
                  </a>
                                        </li>
    
                                    </ul>
                                </li>
                                <li class="nav-item dropdown @yield(5)">
                                    <a class="nav-link dropdown-toggle" href="#navbar-layout" data-toggle="dropdown" role="button" aria-expanded="false">
    
                                        <span class="nav-link-title">
                    My Account
                  </span>
                                    </a>
                                    <ul class="dropdown-menu">
    
                                        <li>
                                            <a class="dropdown-item" href="/account/#v-pills-personal">
                      Personal
                    </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="/account/#v-pills-bank">
    Bank                      </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="/account/#v-pills-demat">
                      Demat
                    </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="/account/#v-pills-document">
    Document                      </a>
                                        </li>
    
                                    </ul>
                                </li>
    
                            </ul>
    
                        </div>
                    </div>
                </div>
            </header>

            @yield('content')
            <footer class="footer footer-transparent">
                <div class="container">
                    <div class="row text-center align-items-center flex-row-reverse">
                        <div class="col-lg-auto ml-lg-auto">
                            <ul class="list-inline list-inline-dots mb-0">
                                <li class="list-inline-item"><a href="/home" class="link-primary">Home</a></li>
                                <li class="list-inline-item"><a href="/support" class="link-primary">FAQ</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                        
                            <p>
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | <a href="/" class="link-primary">Royal Monarch</a>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

    <!-- Libs JS -->   
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}  "></script>
    <script src="{{ asset('js/pages//popper.min.js') }} "></script>
    <script src="{{ asset('js/pages/Chart.min.js') }}"></script>
        <!-- Tabler Core -->

        <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
        <script src="https://unpkg.com/tableexport.jquery.plugin/tableExport.min.js"></script>
        <script src="https://unpkg.com/tableexport.jquery.plugin/libs/jsPDF/jspdf.min.js"></script>
        <script src="https://unpkg.com/tableexport.jquery.plugin/libs/jsPDF-AutoTable/jspdf.plugin.autotable.js"></script>
        <script src="https://unpkg.com/bootstrap-table@1.17.1/dist/bootstrap-table.min.js"></script>
        <script src="https://unpkg.com/bootstrap-table@1.17.1/dist/extensions/export/bootstrap-table-export.min.js"></script>

    <!-- Tabler Core -->
    <script src="/js/dashboard/tabler.min.js"></script>


@yield('scripts')


    <script>
        document.body.style.display = "block";
        $(document).ready(function(){
  var firstName = $('#first_name').text();
  var lastName = $('#last_name').text();
  var intials = firstName.charAt(0) + lastName.charAt(0);
  var profileImage = $('#profileImage').text(intials);
});
    </script>
    </body>

    </html>