@extends('dashboard.layouts.layout')
@section('styles')

<link rel="stylesheet" href="{{ asset('css/dashboard/style.css') }}">
@endsection

@section('content')
      <div class="content container">
            <div class="container-xl">
                <!-- Page title -->
                <div class="page-header">
                    <div class="row align-items-center ">
                        <div class="col-auto">
                            <!-- Page pre-title -->
                            <div class="page-pretitle">
                                <h3>Hi <strong class="page-title">{{$user->first_name}}</strong></h3>
                            </div>

                        </div>
                        <!-- Page title actions -->
                        <div class="col-auto ml-auto d-print-none">
                            <span class=" d-sm-inline">
                  
                    Updated on <span class="ml-2 text-info">{{$user->updated_at->format('yy-m-d')}}</span>
                            </span>

                        </div>
                    </div>
                </div>
                <div class="row row-deck row-cards align-items-start justify-content-center align-content-center">
                    <div class="col-6 col-sm-3 col-lg-2">
                        <div class="card">
                            <div class="card-body">
                                <p>Account Value</p>

                                <div class="h1 mb-3">74.5</div>

                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-sm-3 col-lg-2">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p>Balance</p>

                                        <div class="h1 mb-3">74.48</div>
                                    </div>
                                    <div class="ml-auto lh-1">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle text-muted" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <span class="dropdown-item" href="#">Deposit Balance</span>
                                                <span class="dropdown-item" href="#">Demate Holding</span>
                                                <span class="dropdown-item" href="#">Trading balance</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 col-sm-4 justify-items-center">
                        <div class="card">
                            <div class="card-body">
                                <div class="chart chart-xs">
                                    <canvas id="chartjs-dashboard-pie"></canvas>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
                <div style="padding-top: 100px;"></div>
                <div class="row  justify-content-center">
                    <div class="col-10">
                        <div class="row justify-content-between align-items-center mb-4">
                            <div class="col-6"> <h3>Your Goals</h3></div>
                            <div class="col-6 justify-self-end text-right">  <a href="#" class="btn btn-primary"  role="button" data-toggle="modal" data-target="#exampleModal2">Add New Goal</a>
                            </div>

                        </div>
                       
                        <div class="card">

                            <div class="card-header">
                                <ul class="nav nav-tabs card-header-tabs pull-right">
                            @forelse ($goals as $goal)
                            <li class="nav-item p-3">
                                <a class="nav-link" data-toggle="tab" href="#tab-{{$goal->id}}">{{$goal->new_goal}}</a>
                                </li>
                            @empty
                             <li class="nav-item p-3">No goals for now</li>
                           
                            @endforelse
                           
                                  
                                </ul>
                            </div>

                            <div class="card-body">
                                <div class="tab-content">
                            @forelse ($goals as $goal)
                            <div class="tab-pane fade show active" id="tab-{{$goal->id}}" role="tabpanel">
                                <h5 class="card-title">Deatils</h5>
                                <div class="card-text">
                                    <ul>
                                        <li>
                                            Inception: {{$goal->inception->format('d-m-yy')}}
                                        </li>
                                        <li>
                                            Fund Invested : Rs. {{$goal->fund_invested}}

                                        </li>
                                        <li>
                                            Total Fund Required: {{$goal->total_fund_required}}
                                        </li>
                                        <li>
                                            Allocation : {{$goal->allocation}}
                                        </li>
                                        <li>
                                            End Date: {{$goal->end_date->format('d-m-yy')}}
                                        </li>
                                      
                                        <li>
                                            Status: {{$goal->status}}
                                        </li>

                                        <li>
                                            Goal Details: {{$goal->goal_details}}
                                        </li>
                                        <li>
                                            People Involved: {{$goal->people_involved}}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            @empty
                                
                            @endforelse
                            
                                </div>
                            </div> 

                          


                           
                          
                          
                        </div>
                    </div>
                  
                </div>
            </div>

{{-- MOdal --}}
            <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModal2Label" aria-hidden="true">
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
                                        <h3 class="mb-30 mt-0">Your Goals</h3>
                                        <form  method="POST" action="{{ route('new_goal') }}">
                                            @csrf
        
                                            <div class="mt-10">
                                                <input type="text" name="new_goal" placeholder="new_goal" onfocus="this.placeholder = ''" onblur="this.placeholder = 'new_goal'" required class="single-input @error('new_goal') is-invalid @enderror" value="{{ old('new_goal') }}" required autocomplete="new_goal" autofocus>
                                                @error('new_goal')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>
                                            <div class="mt-10">
                                                <label for="start_date"> Start Date :</label>   <input id="start_id" type="date" name="inception" placeholder="Inception (start-date)" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Inception (start-date)''" required class="single-input  @error('inception') is-invalid @enderror" value="{{ old('inception') }}" required autocomplete="inception" autofocus>
                                                @error('inception')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>
                                            <div class="mt-10">
                                                <input type="number" name="fund_invested" placeholder="fund_invested (RS)" onfocus="this.placeholder = ''" onblur="this.placeholder = 'fund_invested'" required class="single-input  @error('fund_invested') is-invalid @enderror" value="{{ old('fund_invested') }}" required autocomplete="fund_invested" autofocus>
                                                @error('fund_invested')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>
                                            <div class="mt-10">
                                                <input type="number" name="total_fund_required" placeholder="total_fund_required (RS)" onfocus="this.placeholder = ''" onblur="this.placeholder = 'total_fund_required'" required class="single-input  @error('total_fund_required') is-invalid @enderror" value="{{ old('total_fund_required') }}" required autocomplete="total_fund_required" autofocus>
                                                @error('total_fund_required')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>
        
        
        
                                            <div class="  mt-10 ">
                                                <input type='text' name="allocation" placeholder="allocation" onfocus="this.placeholder = 'allocation'" onblur="this.placeholder = 'allocation'" required class="single-input @error('allocation') is-invalid @enderror" value="{{ old('allocation') }}" required autocomplete="allocation" autofocus />
                                                @error('allocation')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
        
                                            </div>

                                            <div class="mt-10">
                                                
                                               <label for="end_date"> End Date :</label> <input id="end_date" type="date" name="end_date" placeholder="end_date" onfocus="this.placeholder = ' end _date'" onblur="this.placeholder = 'end_date''" required class="single-input  @error('end_date') is-invalid @enderror" value="{{ old('end_date') }}" required autocomplete="end_date" autofocus>
                                                @error('end_date')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>


                                            <div class="  mt-10 ">
                                                <input type='text' name="status" placeholder="status e.g : ON Track" onfocus="this.placeholder = 'status e.g : ON Track'" onblur="this.placeholder = 'status e.g : ON Track'" required class="single-input @error('status') is-invalid @enderror" value="{{ old('status') }}" required autocomplete="status" autofocus />
                                                @error('status')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
        
                                            </div>

                                            <div class="  mt-10 ">
                                        
                                                <textarea name="goal_details" placeholder="goal_details" onfocus="this.placeholder = 'goal_details'" onblur="this.placeholder = 'goal_details'" required class="single-input @error('goal_details') is-invalid @enderror" value="{{ old('goal_details') }}" required autocomplete="goal_details" autofocus ></textarea>
                                                @error('goal_details')

                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
        
                                            </div>

                                            <div class="  mt-10 ">
                                        
                                                <textarea name="people_involved" placeholder="people_involved" onfocus="this.placeholder = 'people_involved'" onblur="this.placeholder = 'people_involved'" required class="single-input @error('people_involved') is-invalid @enderror" value="{{ old('people_involved') }}" required autocomplete="people_involved" autofocus ></textarea>
                                                @error('people_involved')

                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
        
                                            </div>

                                            <input type="hidden" name="user_id" value="{{auth::user()->id}}">
                                        
                                            <div class="mt-5">
                                                <button type="submit" class="btn btn-primary py-2 px-5">Submit</button>
                                                <button type="button " class="btn btn-secondary py-2 px-5" id="close" data-dismiss="modal">Close</button></div>
        
        
                                        </form>
                                    </div>
                                </div>
        
                            </div>
                        </div>
        
                    </div>
        
                </div>
            </div>
            

@endsection

      

@section('1')
    active
@endsection

@section('scripts')
<script>
    $(function() {
        // Pie chart

        var ctx = document.getElementById('chartjs-dashboard-pie').getContext('2d');

        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ["Deposit Balance", "Demat Holding", "Trading Balance"],
                datasets: [{
                    data: [30, 20, 24.5],
                    backgroundColor: [
                        "red",
                        "green",
                        "blue"
                    ],
                    borderWidth: 5
                }]
            },
            options: {
                responsive: !window.MSInputMethodContext,
                maintainAspectRatio: false,
                legend: {
                    display: false
                },
                cutoutPercentage: 75
            }
        });
    });
</script>
@endsection
    
