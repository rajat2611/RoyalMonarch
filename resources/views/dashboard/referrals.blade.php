

        <!--header-->
   



       

      
        @extends('dashboard.layouts.layout')


        @section('content')
        <div class="content container">
            <div class="container-xl">
                <!-- Page title -->
                <div class="page-header mb-3">
                    <div class="row align-items-center ">
                        <div class="col-auto">
                            <!-- Page pre-title -->
                            <div class="page-pretitle">
                                <h3>Rewards and Refferals</h3>
                            </div>

                        </div>
                        <!-- Page title actions -->

                    </div>
                </div>
                <div class="row row-deck row-cards align-items-end justify-content-center justify-content-md-end align-content-end">
                    <div class="col-6 col-lg-5">
                        <form action="." method="get">
                            <div class="input-icon d-flex flex-lg-row flex-column justify-content-center align-items-center">
                                <input type="text" class="" placeholder="your Refrrals link">

                                <span class="input-icon-addon">
                           <button class="btn btn-primary mt-md-0 mt-2 ml-md-2">Copy</button>
                          </span>
                            </div>
                        </form>
                    </div>
                </div>
                <div style="padding-top: 130px;"></div>
                <div class="row  justify-content-center">
                    <div class="col-10">
                        <div class="d-flex">
                            <h3 class="mr-3">Reffer a Friend</h3>
                            <a class="" href='' data-toggle="modal" data-target="#referralsModal">View referrals</a>
                        </div>
                    <form action="{{route('referrals')}}" method="POST" class="d-flex flex-lg-row flex-column">
                            @csrf
                            <input type="text" name="name" placeholder="name" class="mr-5 py-1 mb-3 mb-lg-0">
                            <input type="email" name="email" placeholder="E-mail" class="mr-5 py-1 mb-3 mb-lg-0">
                            <input type="phone" name="phone" placeholder="+91 Mobile" class="mr-5 py-1 mb-3 mb-lg-0">
                    <input  name="user_id" type="hidden" value="{{Auth::user()->id}}">

                            <button type="submit" class="btn btn-primary w-50">Submit</button>


                        </form>

                    </div>

                </div>
            </div>

        </div>
        <!-- Modal -->
<div class="modal fade" id="referralsModal" tabindex="-1" role="dialog" aria-labelledby="referralsModalTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="referralsModalTitle">Your Referrals</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         @forelse ($referrals as $item)
             <div>
                 <p>
                     name : {{$item->name}}
                 </p>
                 <p>
                    email : {{$item->email}}
                </p>   <p>
                    phone : {{$item->phone}}
                </p>
             </div>
             <hr style="width: 60%">
         @empty
             <p>No Referrals for now</p>
         @endforelse
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

        
        @endsection
        
              
        
  
        
        @section('scripts')
        
        @endsection
            