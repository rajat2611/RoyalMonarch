@extends('dashboard.layouts.layout')

@section('styles')
<style>
.dropdown-submenu {
    position: relative;
}

.multi-level-dropdown a{
    color: black;
}

.dropdown-submenu>.dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -6px;
    margin-left: 1px;
    -webkit-border-radius: 0 6px 6px 6px;
    -moz-border-radius: 0 6px 6px;
    border-radius: 0 6px 6px 6px;
}

.dropdown-submenu:hover>.dropdown-menu {
    display: block;
}

.dropdown-submenu>a:after {
    display: block;
    content: " ";
    float: right;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
    border-width: 5px 0 5px 5px;
    border-left-color: #ccc;
    margin-top: 5px;
    margin-right: -10px;
}

.dropdown-submenu:hover>a:after {
    border-left-color: #fff;
}

.dropdown-submenu.pull-left {
    float: none;
}

.dropdown-submenu.pull-left>.dropdown-menu {
    left: 100%;
    margin-left: 10px;
    -webkit-border-radius: 6px 0 6px 6px;
    -moz-border-radius: 6px 0 6px 6px;
    border-radius: 6px 0 6px 6px;
}
</style>
@endsection
@section('content')


<div class="content container">
    <div class="container-xl">
        <!-- Page title -->
        <div class="page-header mb-5">
            <div class="row align-items-center ">
                <div class="page-pretitle d-flex justify-content-between align-items-end w-100 mb-5">
                    <h3>Services</h3>
                               
                    </div> 
                <div class=" col-12">
                    <!-- Page pre-title -->
                    <div style="padding-top: 100px;"></div>

                    <form action="">
                        <div class="d-flex justify-content-center justify-items-center ">
                            <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center">
                                {{-- <span class="mr-2">Product Wise</span>

                                <select style="border: 1px solid rgb(160, 157, 157,0.5);" class=" form-control  mr-5 inp py-2">
                                    <option value="equity">Equity</option>
                                    <option value="commodity">Commodity</option>
                                    <option value="currency">Currency</option>

                                    <option value="mutual_funds">Mutual Funds</option>
                                    <option value="securities">Securities</option>
                                    <option value="insurance">Insurance</option>
                                    <option value="loans">Loans</option>
                                    <option value="credit_cards">Credit Cards</option>

                                </select> --}}
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Product Wise :               </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="#">Equity</a>
                                      <a class="dropdown-item" href="#">Commodity</a>
                                      <a class="dropdown-item" href="#">Currency</a>
                                      <a class="dropdown-item" href="#">Mutual Funds</a>
                                      <a class="dropdown-item" href="#">Securities</a>
                                      <a class="dropdown-item" href="#">Insurance</a>
                                      <a class="dropdown-item" href="#">Loans</a>
                                      <a class="dropdown-item" href="#">Credit Cards</a>
                                    </div>
                                   

                                  </div>
 {{--
                                <span class="mr-2">from:</span>
                                <select style="border: 1px solid rgb(160, 157, 157,0.5);" class=" form-control  mr-5 inp py-2 my-lg-0 my-4 ">
                                    <option value="1">Q1</option>
                                    <option value="2">Q2</option>
                                    <option value="3">Q3</option>

                                    <option value="4">Q4</option>

                                </select> <span class="mr-2">To:</span>
                                <select style="border: 1px solid rgb(160, 157, 157,0.5);" class=" form-control  mr-5 inp py-2">
                                    <option value="1">Q1</option>
                                    <option value="2">Q2</option>
                                    <option value="3">Q3</option>

                                    <option value="4">Q4</option>
                                </select>
            --}}
      <!-- Dropdown -->
      {{-- <div class="nav-item dropdown multi-level-dropdown">
        <a href="#" id="menu" data-toggle="dropdown" class="nav-link dropdown-toggle w-100">Goal Wise</a>
        <ul class="dropdown-menu mt-2 rounded-0 primary-color border-0 z-depth-1">
          <li class="dropdown-item dropdown-submenu p-0">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle w-100">Marriage </a>
            <ul class="dropdown-menu ml-2 rounded-0 primary-color border-0 z-depth-1">
              <li class="dropdown-item p-0">
                <a href="#" class="w-100">Equity</a>
              </li>
              <li class="dropdown-item p-0">
                <a href="#" class="  w-100">Commodity</a>
              </li>
              <li class="dropdown-item p-0">
                <a href="#" class="  w-100">Currency</a>
              </li> <li class="dropdown-item p-0">
                <a href="#" class="  w-100">Mutual Funds</a>
              </li> <li class="dropdown-item p-0">
                <a href="#" class="  w-100">Securities</a>
              </li> <li class="dropdown-item p-0">
                <a href="#" class="  w-100">Insurance</a>
              </li> <li class="dropdown-item p-0">
                <a href="#" class="  w-100">Loans</a>
              </li>
            </li> <li class="dropdown-item p-0">
                <a href="#" class="  w-100">Credit Cards</a>
              </li>
             
            </ul>

          </li>
          <li class="dropdown-item dropdown-submenu">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle   w-100">Retirement </a>
            <ul class="dropdown-menu mr-2 rounded-0  primary-color border-0 z-depth-1 r-100 ">
               <li class="dropdown-item p-0">
                <a href="#" class="w-100">Equity</a>
              </li>
              <li class="dropdown-item p-0">
                <a href="#" class="  w-100">Commodity</a>
              </li>
              <li class="dropdown-item p-0">
                <a href="#" class="  w-100">Currency</a>
              </li> <li class="dropdown-item p-0">
                <a href="#" class="  w-100">Mutual Funds</a>
              </li> <li class="dropdown-item p-0">
                <a href="#" class="  w-100">Securities</a>
              </li> <li class="dropdown-item p-0">
                <a href="#" class="  w-100">Insurance</a>
              </li> <li class="dropdown-item p-0">
                <a href="#" class="  w-100">Loans</a>
              </li>
            </li> <li class="dropdown-item p-0">
                <a href="#" class="  w-100">Credit Cards</a>
              </li>
            </ul>
          </li>
        </ul>
    </div> --}}
    <div class="ml-5 mt-3 mt-lg-0">
        <a href="#" type="button" id="dropdown" data-toggle="dropdown"class="btn btn-secondary dropdown multi-level-dropdown"
        aria-haspopup="true" aria-expanded="false">Goal Wise:</a>
        <ul  style = "list-style-type:none"class="dropdown-menu mt-2 rounded-0 white border-0 z-depth-1">
          <li class="dropdown-item dropdown-submenu p-0">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle dropdown-item w-100">Marriage </a>
            <ul class="dropdown-menu  rounded-0 white border-0 z-depth-1 pl-3">
                <li class="dropdown-item p-0">
                    <a href="#" class="w-100">Equity</a>
                  </li>
                  <li class="dropdown-item p-0">
                    <a href="#" class="  w-100">Commodity</a>
                  </li>
                  <li class="dropdown-item p-0">
                    <a href="#" class="  w-100">Currency</a>
                  </li> <li class="dropdown-item p-0">
                    <a href="#" class="  w-100">Mutual Funds</a>
                  </li> <li class="dropdown-item p-0">
                    <a href="#" class="  w-100">Securities</a>
                  </li> <li class="dropdown-item p-0">
                    <a href="#" class="  w-100">Insurance</a>
                  </li> <li class="dropdown-item p-0">
                    <a href="#" class="  w-100">Loans</a>
                  </li>
                </li> <li class="dropdown-item p-0">
                    <a href="#" class="  w-100">Credit Cards</a>
                  </li>
            </ul>
          </li>
          <li class="dropdown-item dropdown-submenu p-0">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle dropdown-item w-100">Retirement</a>
            <ul  class="dropdown-menu mr-2 rounded-0  white border-0 z-depth-1 r-100 pl-3">
                <li class="dropdown-item p-0">
                    <a href="#" class="w-100">Equity</a>
                  </li>
                  <li class="dropdown-item p-0">
                    <a href="#" class="  w-100">Commodity</a>
                  </li>
                  <li class="dropdown-item p-0">
                    <a href="#" class="  w-100">Currency</a>
                  </li> <li class="dropdown-item p-0">
                    <a href="#" class="  w-100">Mutual Funds</a>
                  </li> <li class="dropdown-item p-0">
                    <a href="#" class="  w-100">Securities</a>
                  </li> <li class="dropdown-item p-0">
                    <a href="#" class="  w-100">Insurance</a>
                  </li> <li class="dropdown-item p-0">
                    <a href="#" class="  w-100">Loans</a>
                  </li>
                </li> <li class="dropdown-item p-0">
                    <a href="#" class="  w-100">Credit Cards</a>
                  </li>
            </ul>
            </li>
           </ul>
           </li>
        </ul>
        </div>
                            </div>
                            

                        </div>


                    </form>

                </div>
                <!-- Page title actions -->

            </div>
        </div>

        
    </div>

</div>

@endsection

      

@section('2')
    active
@endsection

@section('scripts')
<script>
$('.multi-level-dropdown .dropdown-submenu > a').on("mouseenter", function(e) {
    var submenu = $(this);
    $('.multi-level-dropdown .dropdown-submenu .dropdown-menu').removeClass('show');
    submenu.next('.dropdown-menu').addClass('show');
    e.stopPropagation();
  });

  $('.multi-level-dropdown .dropdown').on("hidden.bs.dropdown", function() {
    // hide any open menus when parent closes
    $('.multi-level-dropdown .dropdown-menu.show').removeClass('show');
  });
</script>
@endsection
    
