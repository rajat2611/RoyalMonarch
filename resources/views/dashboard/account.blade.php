
@extends('dashboard.layouts.layout')

@section('styles')
    
<style>#profileImage {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background:#e1b2e2;
    font-size: 35px;
    color:  rgb(46, 46, 48);
    text-align: center;
  padding-bottom: 10px;}
  
  .row.p div p:first-child{
      font-weight: 500;
      font-size: 1.00rem;
  }
  </style>

@endsection
    

@section('content')
      
<div class="content">
    <div class="container">

        <div class="row ">
            <div class="col-l-6 col-md-8 col-12">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters align-items-center
                    ml-5">
                        <div class="col-4">
                            <div id="profileImage"><span id="first_name">{{$user->first_name[0]}}</span><span id="last_name">{{ $user->last_name[0]}}</span></div>                                
                        </div>
                        <div class="col-4">
                            <div class="card-body">
                                <h5 class="card-title">Name</h5>
                                <p class="card-text"><span id="first_name">{{$user->first_name}} </span> <span id="last_name">{{ $user->last_name}}</span></p>

                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card-body">
                                <h5 class="card-title">Client ID</h5>
                                <p class="card-text">{{Auth::user()->id}}</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="margin-bottom:60px;"></div>
        <div class="row mt-6">
            <div class="col-5 ">
                <ul style="list-style: none;" class="nav flex-column nav-pills tabx" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <li> <a class="nav-link active" id="v-pills-personal-tab" data-toggle="pill" href="#v-pills-personal" role="tab" aria-controls="v-pills-personal" aria-selected="true">Personal</a>
                    </li>
                    <hr>
                    <li> <a class="nav-link" id="v-pills-bank-tab" data-toggle="pill" href="#v-pills-bank" role="tab" aria-controls="v-pills-bank" aria-selected="false">Bank</a>
                    </li>
                    <hr>
                    <li> <a class="nav-link" id="v-pills-services-tab" data-toggle="pill" href="#v-pills-services" role="tab" aria-controls="v-pills-services" aria-selected="false">My Services</a>
                    </li>
                    <hr>
                    <li> <a class="nav-link" id="v-pills-demat-tab" data-toggle="pill" href="#v-pills-demat" role="tab" aria-controls="v-pills-demat" aria-selected="false">Demat</a>
                    </li>
                    <hr>
                    <li> <a class="nav-link" id="v-pills-document-tab" data-toggle="pill" href="#v-pills-document" role="tab" aria-controls="v-pills-document" aria-selected="false">Document</a>
                    </li>
                </ul>
            </div>
            <div class="col-7">
                <div class="tab-content" id="v-pills-tabContent">

                    <div class="tab-pane fade show active" id="v-pills-personal" role="tabpanel" aria-labelledby="v-pills-personal-tab">
                        <div class="mb-4">
                            <h2 class="mb-5" style="font-weight: 700">Personal</h2>

                            <p style="background-color: #faf0af;" class="px-3 py-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, quam recusandae. Qui minima cumque excepturi et animi ducimus sint pariatur temporibus.
                            </p>
                        </div>


                        <div class="row align-items-start p">
                            <div class="col-6">
                                <p class="mb-0">date of Birth</p>
                                <P>1998-10-13</P>
                            </div>
                            <div class="col-6">
                                <p class="mb-0">Gender</p>
                                <P>Male</P>
                            </div>
                            <div class="col-6">
                                <p class="mb-0">E-mail</p>
                                <P>xample@gmail.com</P>
                            </div>
                            <div class="col-6">
                                <p class="mb-0">Mobile</p>
                                <P>232123434</P>
                            </div>
                            <div class="col-6">
                                <p class="mb-0">PAN</p>
                                <P>*****23434</P>
                            </div>
                            <div class="col-6">
                                <p class="mb-0">Aadhaar</p>
                                <P>Lorem, ipsum.</P>
                            </div>
                            <div class="col-6">
                                <p class="mb-0">PAN</p>
                                <P>*****23434</P>
                            </div>
                            <div class="col-6">
                                <p class="mb-0">Nominee</p>
                                <ul> INtroducer
                                    <li> <p class="mb-0">name :<span>lorem</span></p>
                                        </li>

                                        <li>
                                            <p class="mb-0">ID :<span>1327</span>
                                            </p>
                                        </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade show" id="v-pills-bank" role="tabpanel" aria-labelledby="v-pills-bank-tab">

                        <div class="mb-4">
                            <h2 class="mb-5" style="font-weight: 700">Bank</h2>

                            <p style="background-color: #faf0af;" class="w-90 px-3 py-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo a autem distinctio quasi eligendi aut rerum, exercitationem odit praesentium ex nobis quos itaque consequuntur dignissimos nihil eveniet deserunt sit?
                                Ducimus in quia porro voluptatem quod?
                            </p>
                        </div>
                        <div class="row align-items-start p">
                            <div class="col-6">
                                <p class="mb-0">Bank</p>
                                <P>Lorem, ipsum.</P>
                            </div>
                            <div class="col-6">
                                <p class="mb-0">Account Number</p>
                                <P>123456</P>
                            </div>
                            <div class="col-6">
                                <p class="mb-0">Branch</p>
                                <P>Lorem, ipsum dolor.</P>
                            </div>
                            <div class="col-6">
                                <p class="mb-0">IFSC</p>
                                <P>232123434</P>
                            </div>
                            <div class="col-6">
                                <p class="mb-0">MICR Code</p>
                                <P>*****23434</P>
                            </div>

                        </div>
                    </div>

                    <div class="tab-pane fade show" id="v-pills-services" role="tabpanel" aria-labelledby="v-pills-services-tab">

                        <h2 class="mb-5" style="font-weight: 700">My services</h2>
                        <div class="row align-items-start p">
                            <div class="col-6">
                                <p class="mb-0">Bank</p>
                                <P>Lorem, ipsum.</P>
                            </div>
                            <div class="col-6">
                                <p class="mb-0">Account Number</p>
                                <P>123456</P>
                            </div>
                            <div class="col-6">
                                <p class="mb-0">Branch</p>
                                <P>Lorem, ipsum dolor.</P>
                            </div>
                            <div class="col-6">
                                <p class="mb-0">IFSC</p>
                                <P>232123434</P>
                            </div>
                            <div class="col-6">
                                <p class="mb-0">MICR Code</p>
                                <P>*****23434</P>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade show" id="v-pills-demat" role="tabpanel" aria-labelledby="v-pills-demat-tab">

                        <h2 class="mb-5" style="font-weight: 700">Demat</h2>
                        <div class="row align-items-start p">
                            <div class="col-6">
                                <p class="mb-0">Depository Name</p>
                                <P>Lorem, ipsum.</P>
                            </div>
                            <div class="col-6">
                                <p class="mb-0">Demat Account ID</p>
                                <P>123456</P>
                            </div>
                            <div class="col-6">
                                <p class="mb-0">Demat Account number</p>
                                <P>22345</P>
                            </div>
                         

                        </div>
                    </div>
                    <div class="tab-pane fade show" id="v-pills-document" role="tabpanel" aria-labelledby="v-pills-document-tab">

                        <h2 class="mb-5 "style="font-weight: 700">Document</h2>
                        <div class="row align-items-start p">
                            <div class="col-6 ">
                                <a class="mb-0">Address Proof</a>
                            </div>
                            <div class="col-6">
                                <a class="mb-0">PAN</a>
                            </div>
                            <div class="col-6 mt-3">
                                <a class="mb-0">Photo</a>
                            </div>

                            <div class="col-6 mt-3">
                                <a class="mb-0">Aadhaar</a>
                            </div>
                            <div class="col-6 mt-3">
                                <a class="mb-0">Signature</a>
                            </div>
                         

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

  
</div>
@endsection

      

@section('4')
    active
@endsection

@section('scripts')


<script>     
  
  </script>

@endsection
    




       




