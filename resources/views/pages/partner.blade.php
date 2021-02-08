

@extends('pages/layouts.lay')

@section('content')


<main>
    <!-- Slider Area Start-->
    <div class="services-area ">
        <div class="container">
        </div>
    </div>
    <!-- Slider Area End-->
    <!-- ================ contact section start ================= -->
    <section class="contact-section" id="signupform">
        <div class="section-title">
            <h1 class="font-weight-600 font-60"> <span style="color: #CDCDCD;">Clarity.</span><span style="color: #999999;"> Confidence.</span><span style="color: #1b31a7;"> Control.</span></h1>
        </div>
        <div style="">
            <div class="bannerSection">
                <div class="container" >
                    <div class="row">
                        <div class="col-md-10 offset-1 row">
                            <div class="col-md-6 align-self-center">
                                <h1 class="bannerHeading">
                                    Earn over <br><span class="blue-text">₹ 1 lakh/month</span>
                                </h1>
                                <div class="BannerText">
                                    We are one of the fastest growing Financial Planners in the country. Write your own cheque without any unwanted deductions.
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="card">
                                    <div class="card-header" data-gtm-vis-recent-on-screen-2375348_458="1124" data-gtm-vis-first-on-screen-2375348_458="1124" data-gtm-vis-total-visible-time-2375348_458="100" data-gtm-vis-has-fired-2375348_458="1">
                                        <h4>SIGN UP</h4>
                                    </div>
                                    <div class="card-body">
                                        <form class="" action="/save-lead" method="post">
                                            @csrf
                                            <input type="hidden" class="" name="lead_type" value="partner">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="name" placeholder="Name" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email" placeholder="Email" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="number" class="form-control mobile_no" name="mobile" placeholder="Phone No." required>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="city" placeholder="City" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" class="btn btn-sm btn-block submit_btn" value="Submit">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>   
                    </div>
                </div>
            </div>

            <div class="container mt-50 mb-50 pt-10 partner_section_2">
                <div class="row">
                    <div class="col-md-10 offset-1 row pb-40">
                        <h1>
                            Earn in <span class="text-blue">multiple ways</span>
                        </h1>
                    </div>
                    <div class="col-md-10 offset-1 row">
                        <div class="col-md-4">
                            <img src="{{asset('image/Brokerage-Shaeing.svg')}}"><br/>
                            <h3 class="mb-2 mt-2">Revenue sharing</h3>
                            <p>Get a share of the revenue from each client you brought in.</p>
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-4">
                            <img src="{{asset('image/Referal-Incentive.svg')}}"><br/>
                            <h3 class="mb-2 mt-2">Referral incentive</h3>
                            <p>Earn incentives through referrals, the more you refer the more you earn.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-light">
                <div class="container mt-50 partner_section_2">
                    <div class="row">
                        <div class="col-md-10 offset-1 row">
                            <h2 class="font-weight-600">
                                Earning potential <span class="text-blue">around you</span>
                            </h2>
                        </div>
                        <div class="col-md-10 offset-1 row">
                            <div class="col-md-5">
                                <ul class="map-text-left">
                                    <li>
                                        <h2 class="blue-text market_potential" id="market_potential">8,565,000</h2>
                                        <h4>Market Potential</h4>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-7">
                                <div id="myChartMap" class="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-50 pt-10 mb-50">
                <div class="row who_partners text-center">
                    <div class="col-lg-12 col-md-12 justify-content-center text-center">
                        <h2 class="text-center font-weight-600">Who can <span class="text-blue">Partner?</span></h2>
                    </div>
                    <div class="col-md-6">
                        <div class="partnerimg mb-2">
                            <img src="{{asset('image/finance.svg')}}" alt="">
                        </div>
                        <h3 class="mb-2" style="
                            font-size: 20px;
                            font-weight: 600;
                            ">Finance enthusiast</h3>
                        <p class="para-margin">Your interest lies in finance and the stock market. You take great pleasure in guiding others with investment options.</p>
                    </div>
                    <div class="col-md-6">
                        <div class="partnerimg mb-2">
                            <img src="{{asset('image/internet.svg')}}" alt="">
                        </div>
                        <h3 class="mb-2" style="
                            font-size: 20px;
                            font-weight: 600;
                            ">Internet Influencer</h3>
                        <p class="para-margin">Social media is your playground. You have
                            a good number of followers who easily
                            consume all the content you share.</p>
                    </div>
                    <div class="col-md-6">
                        <div class="partnerimg mb-2">
                            <img src="{{asset('image/people.svg')}}" alt="">
                        </div>
                        <h3 class="mb-2" style="
                            font-size: 20px;
                            font-weight: 600;
                            ">People Person</h3>
                        <p class="para-margin">People love you! And you love people!
                            So, by default, marketing comes to you,
                            naturally. You can sell, and do it rather
                            well.</p>
                    </div>
                    <div class="col-md-6">
                        <div class="partnerimg mb-2">
                            <img src="{{asset('image/self.svg')}}" alt="">
                        </div>
                        <h3 class="mb-2" style="
                            font-size: 20px;
                            font-weight: 600;
                            ">Self Starter</h3>
                        <p class="para-margin">"I'm my own boss", that's your mantra.
                            You just want to earn and grow. The
                            desire is powered by your dedication.
                            And that takes you places!</p>
                    </div>
                </div>
            </div>

            <div class="container mt-50 mb-50 pt-30 pb-30">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 offset-1">
                        <div class="rtp-block">
                            <h2 class="font-weight-600">Ready to <span class="text-blue">Partner?</span></h2>
                            <h4 class="rtp-para">Register to jump-start your journey a Royal Monarch Partner.</h4>
                            <a href="#signupform" id="rtp-signup-button" class="btn">Sign up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ contact section end ================= -->

    <!-- ======= F.A.Q Section ======= -->
</main>

@endsection




@section('7')
active
@endsection

@section('scripts')
<script src="https://code.highcharts.com/maps/highmaps.js"></script>
<script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
<script src="https://code.highcharts.com/mapdata/countries/in/custom/in-all-disputed.js"></script>
<script>
let chartConfig = {
    shapes: [
        {
            type: 'zingchart.maps',
            options: {
                bbox: [67.177, 36.494, 98.403, 6.965], // get bbox from zingchart.maps.getItemInfo('world-countries','ind');
                ignore: ['IND'], // ignore India because we are rendering a more specific India map below
                name: 'world.countries',
                panning: false, // turn of zooming. Doesn't work with bounding box
                style: {
                    tooltip: {
                        borderColor: '#000',
                        borderWidth: '2px',
                        fontSize: '18px'
                    },
                    controls: {
                        visible: false // turn of zooming. Doesn't work with bounding box
                    },
                    hoverState: {
                        alpha: .28
                    }
                },
                zooming: false // turn of zooming. Doesn't work with bounding box
            }
        },
        {
            type: 'zingchart.maps',
            options: {
                name: 'ind',
                panning: false, // turn of zooming. Doesn't work with bounding box
                zooming: false,
                scrolling: false,
                style: {
                    tooltip: {
                        borderColor: '#000',
                        borderWidth: '2px',
                        fontSize: '18px'
                    },
                    borderColor: '#000',
                    borderWidth: '2px',
                    controls: {
                        visible: false, // turn of zooming. Doesn't work with bounding box

                    },
                    hoverState: {
                        alpha: .28
                    },
                    items: {
                        KA: {
                            tooltip: {
                                text: 'Karnataka has 2,851 monthly users total',
                                backgroundColor: '#ff5722'
                            },
                            backgroundColor: '#ff5722',
                            label: {
                                visible: true
                            }
                        },
                        MH: {
                            tooltip: {
                                text: 'Maharashtra has 2,683 monthly users total',
                                backgroundColor: '#ff9800'
                            },
                            backgroundColor: '#ff9800',
                            label: {
                                visible: true
                            }
                        },
                        TL: {
                            tooltip: {
                                text: 'Telangana has 1,494 monthly users total',
                                backgroundColor: '#00AE4D'
                            },
                            backgroundColor: '#00AE4D',
                            label: {
                                visible: true
                            }
                        },
                        TN: {
                            tooltip: {
                                text: 'Tamil Nadu has 1,968 monthly users total',
                                backgroundColor: '#00bcd4'
                            },
                            backgroundColor: '#00bcd4',
                            label: {
                                visible: true
                            }
                        }
                    },
                    label: {// text displaying. Like valueBox
                        fontSize: '15px',
                        visible: false
                    }
                },
                zooming: false // turn of zooming. Doesn't work with bounding box
            }
        }
    ]
}

// Prepare demo data
// Data is joined to map using value of 'hc-key' property by default.
// See API docs for 'joinBy' for more info on linking data and map.
//var data = [
//    ['madhya pradesh', 0],
//    ['uttar pradesh', 1],
//    ['karnataka', 2],
//    ['nagaland', 3],
//    ['bihar', 4],
//    ['lakshadweep', 5],
//    ['andaman and nicobar', 6],
//    ['assam', 7],
//    ['west bengal', 8],
//    ['puducherry', 9],
//    ['daman and diu', 10],
//    ['gujarat', 11],
//    ['rajasthan', 12],
//    ['dadara and nagar havelli', 13],
//    ['chhattisgarh', 14],
//    ['tamil nadu', 15],
//    ['chandigarh', 16],
//    ['punjab', 17],
//    ['haryana', 18],
//    ['andhra pradesh', 19],
//    ['maharashtra', 20],
//    ['himachal pradesh', 21],
//    ['meghalaya', 22],
//    ['kerala', 23],
//    ['telangana', 24],
//    ['mizoram', 25],
//    ['tripura', 26],
//    ['manipur', 27],
//    ['arunanchal pradesh', 28],
//    ['jharkhand', 29],
//    ['goa', 30],
//    ['nct of delhi', 31],
//    ['odisha', 32],
//    ['jammu and kashmir', 33],
//    ['sikkim', 34],
//    ['uttarakhand', 35]
//];
var data = [
    ['madhya pradesh', 9078000],
    ['uttar pradesh', 16650000],
    ['karnataka', 10200000],
    ['nagaland', 570000],
    ['bihar', 8675000],
    ['lakshadweep', 14500],
    ['andaman and nicobar', 143000],
    ['assam', 5200000],
    ['west bengal', 11410000],
    ['puducherry', 852000],
    ['daman and diu', 10],
    ['gujarat', 10075000],
    ['rajasthan', 11425000],
    ['dadara and nagar havelli', 342000],
    ['chhattisgarh', 4250000],
    ['tamil nadu', 12025000],
    ['chandigarh', 1025000],
    ['punjab', 4625000],
    ['haryana', 4225000],
    ['andhra pradesh', 8565000],
    ['maharashtra', 18729000],
    ['himachal pradesh', 688000],
    ['meghalaya', 595000],
    ['kerala', 5565000],
    ['telangana', 5850000],
    ['mizoram', 571000],
    ['tripura', 961000],
    ['manipur', 775000],
    ['arunanchal pradesh', 315000],
    ['jharkhand', 5550000],
    ['goa', 905000],
    ['nct of delhi', 3350000],
    ['odisha', 6995000],
    ['jammu and kashmir', 2048000],
    ['sikkim', 152000],
    ['uttarakhand', 3050000]
];

// Create the chart
//Highcharts.mapChart('myChartMap1', {
//    chart: {
//        map: 'countries/in/in-all'
//    },
//
//    title: {
////        text: 'Highmaps basic demo'
//    },
//
//    subtitle: {
////        text: '<a href="http://code.highcharts.com/mapdata/countries/in/in-all.js">India</a>'
//    },
//
//    mapNavigation: {
//        enabled: false,
//        buttonOptions: {
//            verticalAlign: 'bottom'
//        }
//    },
//
//    colorAxis: {
//        min: 0
//    },
//    tooltip: {
//        useHTML: true,
//        formatter: function () {
//            return this.key;
//        }
//    },
//    series: [{
//            data: data,
////        name: 'Random data',
//            states: {
//                hover: {
////                color: '#BADA55'
//                }
//            },
//            dataLabels: {
//                enabled: false,
////            format: '{point.name}'
//            }
//        }]
//});

Highcharts.mapChart('myChartMap', {
    chart: {
        zoomType: "",
        map: 'countries/in/custom/in-all-disputed'
    },
    navigator: {
        enabled: false
    },
    title: {
//        text: 'Highmaps basic demo'
    },

    subtitle: {
//        text: 'Source map: <a href="http://code.highcharts.com/mapdata/countries/in/custom/in-all-disputed.js">India with disputed territories</a>'
    },

    mapNavigation: {
        enabled: true,
        buttonOptions: {
            verticalAlign: 'bottom'
        }
    },

    colorAxis: {
        min: 0
    },
    tooltip: {
        useHTML: true,
        formatter: function () {
            return this.key;
        }
    },
    series: [{
            point: {
                events: {
                    mouseOver: function () {
                        var value = this.value;
                        if (parseInt(value) >= 1000) {
                            value = value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        }
                        document.getElementById("market_potential").innerHTML = value;
                    }
                }
            },
            data: data,
            states: {
                hover: {
                    color: '#BADA55'
                }
            },
            dataLabels: {
                enabled: false,
                format: '{point.name}'
            },

        }],

});
//Highcharts.each(Highcharts.charts, function (p, i) {
//    $(p.renderTo).mouseover(function () {
//        console.log(p)
//    })
//})

$("body").on("keyup",".mobile_no",function(){
    var value=$(this).val().length;
    if(value > 10){
        $(this).closest("form").find(".submit_btn").attr('disabled',true);
    }else{
        $(this).closest("form").find(".submit_btn").attr('disabled',false);
    }
});
</script>
@endsection