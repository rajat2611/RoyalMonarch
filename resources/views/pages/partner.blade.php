

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
    <section class="contact-section">
        <div class="section-title">
            <h1 class="font-weight-600"> <span style="color: #CDCDCD;">Trust.</span><span style="color: #999999;"> Transparency.</span><span style="color: #1b31a7;"> Accountability.</span></h1>
        </div>
        <div style="">
            <div class="bannerSection">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 offset-1 row">
                            <div class="col-md-6 align-self-center">
                                <h1 class="bannerHeading">
                                    Earn over <br><span class="blue-text">₹ 1 lakh/month</span>
                                </h1>
                                <div class="BannerText">
                                    We are one of the fastest growing brokers in the country. Earn commissions without any unwanted deductions.
                                </div>
                            </div>
                            <div class="col-md-6">
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
                                                <input type="text" class="form-control" name="mobile" placeholder="Phone No." required>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="city" placeholder="City" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" class="btn btn-sm btn-block" value="Submit">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>   
                    </div>
                </div>
            </div>

            <div class="container mt-50 pt-10 partner_section_2">
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

            <div class="container mt-50 pt-10 partner_section_2">
                <div class="row">
                    <div class="col-md-10 offset-1 row pb-40">
                        <h1>
                            Earning potential <span class="text-blue">around you</span>
                        </h1>
                    </div>
                    <div class="col-md-10 offset-1 row">
                        <div class="col-md-5">
                            <ul class="map-text-left">
                                <li>
                                    <h2 class="blue-text">3,50,000+</h2>
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
<script src="https://code.highcharts.com/mapdata/countries/in/in-all.js"></script>
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
var data = [
    ['in-py', 0],
    ['in-ld', 1],
    ['in-wb', 2],
    ['in-or', 3],
    ['in-br', 4],
    ['in-sk', 5],
    ['in-ct', 6],
    ['in-tn', 7],
    ['in-mp', 8],
    ['in-2984', 9],
    ['in-ga', 10],
    ['in-nl', 11],
    ['in-mn', 12],
    ['in-ar', 13],
    ['in-mz', 14],
    ['in-tr', 15],
    ['in-3464', 16],
    ['in-dl', 17],
    ['in-hr', 18],
    ['in-ch', 19],
    ['in-hp', 20],
    ['in-jk', 21],
    ['in-kl', 22],
    ['in-ka', 23],
    ['in-dn', 24],
    ['in-mh', 25],
    ['in-as', 26],
    ['in-ap', 27],
    ['in-ml', 28],
    ['in-pb', 29],
    ['in-rj', 30],
    ['in-up', 31],
    ['in-ut', 32],
    ['in-jh', 33]
];

// Create the chart
Highcharts.mapChart('myChartMap', {
    chart: {
        map: 'countries/in/in-all'
    },

    title: {
//        text: 'Highmaps basic demo'
    },

    subtitle: {
//        text: '<a href="http://code.highcharts.com/mapdata/countries/in/in-all.js">India</a>'
    },

    mapNavigation: {
        enabled: false,
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
            data: data,
//        name: 'Random data',
            states: {
                hover: {
//                color: '#BADA55'
                }
            },
            dataLabels: {
                enabled: false,
//            format: '{point.name}'
            }
        }]
});

</script>
@endsection