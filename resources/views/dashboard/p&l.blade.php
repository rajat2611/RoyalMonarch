
@extends('dashboard.layouts.layout')


@section('content')
<div class="content container">
    <div class="container-xl">
        <!-- Page title -->
        <div class="page-header">
            <div class="row align-items-center ">
                <div class="page-pretitle">
                    <h3>P&L</h3>
                </div>
                <div class=" col-12">
                    <!-- Page pre-title -->

                    <form action="">
                        <div class="d-flex justify-content-around justify-items-start ">
                            <div class="d-flex flex-column flex-lg-row justify-content-lg-between">

                                <select style="border: 1px solid rgb(160, 157, 157,0.5);" class="form-control mr-5 inp py-2">
                                    <option value="1">Equity</option>
                                    <option value="2">Commodity</option>
                                    <option value="3">Currency</option>

                                    <option value="4">Mutual Funds</option>

                                  </select>
                                <select style="border: 1px solid rgb(160, 157, 157,0.5);" class="form-control mr-5 inp py-2 mt-4 mt-lg-0">
                                    <option value="1">Combined</option>
                                    <option value="2">Commodity</option>
                                    <option value="3">Currency</option>

                                    <option value="4">Mutual Funds</option>

                                  </select>

                                <input style="border: 1px solid rgb(160, 157, 157,0.5);" class="mr-5 p-2 my-lg-0 my-4 inp" type="text" name="symbol" placeholder="e.g: Reliance" />

                                <input style="border: 1px solid rgb(160, 157, 157,0.5);" class="mr-5 py-2 inp" type="text" name="daterange" value="01/01/2018 - 01/15/2018" />
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
        <div class="row  justify-content-around mb-4">
            <div class="col-10">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-5 mr-2">
                        <p class="mb-0">Profit</p>
                        <P >130.85</P>
                    </div>
                    <div class="col-lg-3 col-5 mr-2">
                        <p class="mb-0">charges</p>
                        <P class="text-danger">0.89</P>
                    </div>
                    <div class="col-lg-3 col-5 mr-2">
                        <p class="mb-0">Net profit</p>
                        <P>126.7</P>
                    </div>
                    

                </div>

            </div>

        </div>

        <div class="row  justify-content-center">
            <div class="col-10">
                <div id="toolbar" class="select">
                    <select class="form-control">
              <option value="">Export Basic</option>
              <option value="all">Export All</option>
              <option value="selected">Export Selected</option>
            </select>
                </div>
                <table class="table table-striped" id="table" data-show-export="true" data-pagination="true" data-side-pagination="server" data-click-to-select="true" data-toolbar="#toolbar" data-show-toggle="true" data-show-columns="true">
                    <thead>
                        <tr>
                            <th></th>
                            <th scope="col">symbol</th>
                            <th scope="col">Qty</th>
                            <th scope="col">Buy avg</th>
                            <th scope="col">Buy Value</th>
                            <th scope="col">sell avg</th>
                            <th scope="col">Sell Value</th>
                            <th scope="col">Charges</th>
                            <th scope="col">Net profit</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td>Reliance</td>
                            <td>1</td>
                            <td>1,571.00</td>
                            <td>1,571.00</td>
                            <td>1,981.00</td>
                            <td>1,981.00</td>
                            <td class="text-danger">-1.85</td>

                            <td>128.89</td>

                        </tr>

                    </tbody>
                </table>

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
    var $table = $('#table')

    $(function() {
        $('#toolbar').find('select').change(function() {
            $table.bootstrapTable('destroy').bootstrapTable({
                exportDataType: $(this).val(),
                exportTypes: ['csv', 'excel', 'pdf'],
                columns: [{
                    field: 'state',
                    checkbox: true,
                    visible: $(this).val() === 'selected'
                }]
            })
        }).trigger('change')
    })
</script>
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

       
