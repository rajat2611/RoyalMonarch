
    @extends('dashboard.layouts.layout')

@section('styles')
<style>
    #toolbar {
        margin: 0;
    }
</style>
@endsection

    @section('content')
          
    <div class="content container">
        <div class="container-xl">
            <!-- Page title -->
            <div class="page-header">
                <div class="row align-items-center ">
                    <div class="page-pretitle">
                        <h3>TradeBook</h3>
                    </div>
                    <div class=" col-12">
                        <!-- Page pre-title -->

                        <form action="">
                            <div class="d-flex justify-content-around justify-items-start ">
                                <div class="d-flex flex-column flex-lg-row justify-content-lg-between">

                                    <select style="border: 1px solid rgb(160, 157, 157,0.5);" class="form-control  mr-5 inp py-2">
                                  <option value="equity">Equity</option>
                                  <option value="comodity">Commodity</option>
                                  <option value="currency">Currency</option>

                                  <option value="mutual_funds">Mutual Funds</option>

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
                                <th scope="col">Symbol</th>
                                <th scope="col">Trade time</th>
                                <th scope="col">Order Id</th>
                                <th scope="col">Trade Id</th>
                                <th scope="col">Type</th>
                                <th scope="col">Qty</th>
                                <th scope="col">Price</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                <td>Larry</td>

                            </tr>
                            <tr>
                                <td></td>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                                <td>Mark</td>

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
    
   





        





   
