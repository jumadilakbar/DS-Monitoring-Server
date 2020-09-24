@extends('master_layouts.app')
@section('content')
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-car icon-gradient bg-mean-fruit">
                        </i>
                    </div>
                    <div>Analytics Dashboard
                        <div class="page-title-subheading">This is an example dashboard created using build-in elements and components.
                        </div>
                    </div>
                </div>
                
            </div>
        </div> 
        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-header">Host Monitoring
                        <div class="btn-actions-pane-right">
                            <div role="group" class="btn-group-sm btn-group">
                                <button class="active btn btn-focus">Last Week</button>
                                <button class="btn btn-focus">All Month</button>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                            <thead>
                            <tr>
                                <th class="text-center">Host</th>
                                <th class="text-center">Value</th>
                                <th class="text-center">Status</th>
                                
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="text-center text-muted">Host -1</td>
                                
                                <td class="text-center"></td>
                                <td class="text-center">
                                    <!-- <div class="badge badge-warning">Pending</div> -->
                                </td>
                            </tr>
                            
                            <tr>
                                <td class="text-center text-muted">CPU</td>
                                
                                <td class="text-center">40 %</td>
                                <td class="text-center">
                                    <div class="badge badge-success">OK</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center text-muted">HARDISK</td>
                                
                                <td class="text-center">63 %</td>
                                <td class="text-center">
                                    <div class="badge badge-warning">WARNING</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center text-muted">RAM</td>
                                
                                <td class="text-center">45 %</td>
                                <td class="text-center">
                                    <div class="badge badge-success">OK</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center text-muted">SERVICE-1</td>
                                
                                <td class="text-center">ON </td>
                                <td class="text-center">
                                    <div class="badge badge-success">OK</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center text-muted">SERVICE-2</td>
                                
                                <td class="text-center">OFF</td>
                                <td class="text-center">
                                    <div class="badge badge-danger">DANGER</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center text-muted">SERVICE-3</td>
                                
                                <td class="text-center">ON</td>
                                <td class="text-center">
                                    <div class="badge badge-success">OK</div>
                                </td>
                            </tr>
                            
                            </tbody>
                        </table>
                    </div>
                    <div class="d-block text-center card-footer">
                        <!-- <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"> </i></button>
                        <button class="btn-wide btn btn-success">Save</button> -->
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/series-label.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/modules/export-data.js"></script>
        <script src="https://code.highcharts.com/modules/accessibility.js"></script>
        

        <div class="row">
            <div class="col-md-6 col-xl-12">
                <figure class="highcharts-figure">
                    <div id="container"></div>
                    
                </figure>
                <script>
                    Highcharts.chart('container', {
                        title: {
                            text: 'Host Consumption'
                        },
                        xAxis: {
                            categories: ['Januari', 'Februari', 'Maret', 'April', 'Mei']
                        },
                        labels: {
                            items: [{
                                html: 'Total  consumption',
                                style: {
                                    left: '50px',
                                    top: '18px',
                                    color: ( // theme
                                        Highcharts.defaultOptions.title.style &&
                                        Highcharts.defaultOptions.title.style.color
                                    ) || 'black'
                                }
                            }]
                        },
                        series: [{
                            type: 'column',
                            name: 'CPU',
                            data: [3, 2, 1, 3, 4]
                        }, {
                            type: 'column',
                            name: 'RAM',
                            data: [2, 3, 5, 7, 6]
                        }, {
                            type: 'column',
                            name: 'Hardisk',
                            data: [4, 3, 3, 9, 1]
                        }, {
                            type: 'spline',
                            name: 'Average',
                            data: [3, 2.67, 3, 6.33, 3.33],
                            marker: {
                                lineWidth: 2,
                                lineColor: Highcharts.getOptions().colors[3],
                                fillColor: 'white'
                            }
                        }, {
                            type: 'pie',
                            name: 'Total consumption',
                            data: [{
                                name: 'CPU',
                                y: 13,
                                color: Highcharts.getOptions().colors[0] // Jane's color
                            }, {
                                name: 'RAM',
                                y: 23,
                                color: Highcharts.getOptions().colors[1] // John's color
                            }, {
                                name: 'Hardisk',
                                y: 19,
                                color: Highcharts.getOptions().colors[2] // Joe's color
                            }],
                            center: [100, 80],
                            size: 100,
                            showInLegend: false,
                            dataLabels: {
                                enabled: false
                            }
                        }]
                    });

                </script>
                
            </div>
            
        </div>
        
    </div>
    <hr>
</div>
@endsection