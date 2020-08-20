

        <!--header-->
     


        @extends('dashboard.layouts.layout')

        @section('styles')
     
        @endsection
        
            @section('content')
                  
            <div class="content container">
                    <div class="container-xl">
                        <!-- Page title -->
                        <div class="page-header mb-5">
                            <div class="row align-items-center ">
                                <div class="page-pretitle d-flex justify-content-between align-items-end w-100 mb-5">
                                    <h3>Tax & PL</h3>
                                <a class="text-primary" style="font-weight: 600" href="" style="text-decoration: none;" onclick="event.preventDefault();
                                        document.getElementById('return-form').submit();">File your Return with us</a>         
                                        
                                        <form id="return-form" action="{{ route('return_file') }}" method="POST" style="display: none;">
                                            @csrf
                                            <input  name="user_id" type="hidden" value="{{Auth::user()->id}}">

                                        </form>                   
                                    </div> 
                                <div class=" col-12">
                                    <!-- Page pre-title -->
            
                                    <form action="">
                                        <div class="d-flex justify-content-around justify-items-start ">
                                            <div class="d-flex flex-column flex-lg-row justify-content-lg-between">
            
                                                {{-- <select style="border: 1px solid rgb(160, 157, 157,0.5);" class=" form-control  mr-5 inp py-2">
                                                    <option value="1">Equity</option>
                                                    <option value="2">Commodity</option>
                                                    <option value="3">Currency</option>
            
                                                    <option value="4">Mutual Funds</option>
            
                                                </select><span class="mr-2">from:</span>
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

                                                <span class="mr-4">Financial Year:</span>
                                                <select style="border: 1px solid rgb(160, 157, 157,0.5);" class=" form-control mr-5  py-2">
                                                    <option value="2015-2016">2015-2016</option>
                                                    <option value="2016-2017">2016-2017</option>
                                                    <option value="2017-2018">2017-2018</option>
            
                                                    <option value="2018-2019">2018-2019</option>
                                                </select>
                                            </div>
                                            <div>
                                                <button type="submit" class="btn btn-primary">View</button>
                                            </div>
            
                                        </div>
            
            
                                    </form>
            
                                </div>
                                <!-- Page title actions -->
            
                            </div>
                        </div>
            
                        <div style="padding-top: 100px;"></div>
                        <div class="row  justify-content-center">
                            <div class="col-10">
            
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link active" id="nav-equity-tab" data-toggle="tab" href="#nav-equity" role="tab" aria-controls="nav-equity" aria-selected="true">Equity</a>
                                        <a class="nav-item nav-link" id="nav-currency-tab" data-toggle="tab" href="#nav-currency" role="tab" aria-controls="nav-currency" aria-selected="false">Currency</a>
            
                                        <a class="nav-item nav-link" id="nav-FO-tab" data-toggle="tab" href="#nav-FO" role="tab" aria-controls="nav-FO" aria-selected="false">F&O</a>
                                        <a class="nav-item nav-link" id="nav-commodity-tab" data-toggle="tab" href="#nav-commodity" role="tab" aria-controls="nav-commodity" aria-selected="false">Commodity</a>
                                
                                    </div>
                                </nav>
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane mr-6 fade show active" id="nav-equity" role="tabpanel" aria-labelledby="nav-equity-tab">
            
                                        <div class="row align-items-start mt-5 justify-content-center">
                                            <div class="col-lg-4 col-6">
                                                <p class="mb-0">Intrady Profit</p>
                                                <P>-1.85</P>
                                            </div>
                                            <div class="col-lg-4 col-6">
                                                <p class="mb-0">Short Term realised profit</p>
                                                <P>0</P>
                                            </div>
                                            <div class="col-lg-4 col-6">
                                                <p class="mb-0">long Term realised profit</p>
                                                <P>0</P>
                                            </div>
                                            <div class="col-lg-4 col-6">
                                                <p class="mb-0">Intrady turnover</p>
                                                <P>1.85</P>
                                            </div>
                                            <div class="col-lg-4 col-6">
                                                <p class="mb-0">Total charges</p>
                                                <P>0.6</P>
                                            </div>
                                            <div class="col-lg-4 col-6">
                                                <p class="mb-0">Other Credits & debits</p>
                                                <P>0</P>
                                            </div>
            
                                        </div>
                                    </div>
                                    <div class="tab-pane  mr-6  fade" id="nav-currency" role="tabpanel" aria-labelledby="nav-currency-tab">
                                        <div class="row align-items-start mt-5 justify-content-start">
                                            <div class="col-lg-4 col-6">
                                                <p class="mb-0">Future profits</p>
                                                <P>-2.12L</P>
                                            </div>
                                            <div class="col-lg-4 col-6">
                                                <p class="mb-0">Options profits</p>
                                                <P>-31.41K</P>
                                            </div>
                                            <div class="col-lg-4 col-6">
                                                <p class="mb-0">Total charges</p>
                                                <P>93.4K</P>
                                            </div>
                                            <div class="col-lg-4 col-6">
                                                <p class="mb-0">Futures turnover</p>
                                                <P>27.61L</P>
                                            </div>
                                            <div class="col-lg-4 col-6">
                                                <p class="mb-0">Options turnover</p>
                                                <P>14.9L</P>
                                            </div>
            
                                            <div class="col-lg-4 col-6">
                                                <p class="mb-0">Other Credits & debits</p>
                                                <P>0</P>
                                            </div>
                                            <div class="col-lg-4 col-6">
                                                <p class="mb-0">Total Gross profit</p>
                                                <P>-2.44L</P>
                                            </div>
            
            
                                        </div>
                                    </div>
                                    <div class="tab-pane  mr-6  fade" id="nav-FO" role="tabpanel" aria-labelledby="nav-FO-tab">
                                        <div class="row align-items-start mt-5 justify-content-start">
                                            <div class="col-lg-4 col-6">
                                                <p class="mb-0">Future profits</p>
                                                <P>-2.12L</P>
                                            </div>
                                            <div class="col-lg-4 col-6">
                                                <p class="mb-0">Options profits</p>
                                                <P>-31.41K</P>
                                            </div>
                                            <div class="col-lg-4 col-6">
                                                <p class="mb-0">Total charges</p>
                                                <P>93.4K</P>
                                            </div>
                                            <div class="col-lg-4 col-6">
                                                <p class="mb-0">Futures turnover</p>
                                                <P>27.61L</P>
                                            </div>
                                            <div class="col-lg-4 col-6">
                                                <p class="mb-0">Options turnover</p>
                                                <P>14.9L</P>
                                            </div>
            
                                            <div class="col-lg-4 col-6">
                                                <p class="mb-0">Other Credits & debits</p>
                                                <P>0</P>
                                            </div>
                                            <div class="col-lg-4 col-6">
                                                <p class="mb-0">Total Gross profit</p>
                                                <P>-2.44L</P>
                                            </div>
            
                                        </div>
                                    </div>
            
                                    <div class="tab-pane mr-6  fade" id="nav-commodity" role="tabpanel" aria-labelledby="nav-commodity-tab">
                                        <div class="row align-items-start mt-5 justify-content-start">
                                            <div class="col-lg-4 col-6">
                                                <p class="mb-0">Future profits</p>
                                                <P>-2.12L</P>
                                            </div>
                                            <div class="col-lg-4 col-6">
                                                <p class="mb-0">Options profits</p>
                                                <P>-31.41K</P>
                                            </div>
                                            <div class="col-lg-4 col-6">
                                                <p class="mb-0">Total charges</p>
                                                <P>93.4K</P>
                                            </div>
                                            <div class="col-lg-4 col-6">
                                                <p class="mb-0">Futures turnover</p>
                                                <P>27.61L</P>
                                            </div>
                                            <div class="col-lg-4 col-6">
                                                <p class="mb-0">Options turnover</p>
                                                <P>14.9L</P>
                                            </div>
            
                                            <div class="col-lg-4 col-6">
                                                <p class="mb-0">Other Credits & debits</p>
                                                <P>0</P>
                                            </div>
                                            <div class="col-lg-4 col-6">
                                                <p class="mb-0">Total Gross profit</p>
                                                <P>-2.44L</P>
                                            </div>
            
                                        </div>
                                    </div>
                                
            
                                </div>
            
                            </div>
            
                        </div>
                    </div>
              
            </div>
            @endsection
            
                  
            
            @section('3')
                active
            @endsection
            
            @section('scripts')
           
          
            <script>
        
                var start = moment().subtract(29, 'days');
                var end = moment();
        
                function cb(start, end) {
                    $('input[name="daterange"]').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                }
        
                $('input[name="daterange"]').daterangepicker({
                    startDate: start,
                    endDate: end,
                    ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    }
                }, cb);
        
                cb(start, end);
               
            </script>
            @endsection
            
           
        
        
        
        
        
                
        
        
        
        
        
           
        

       

    
