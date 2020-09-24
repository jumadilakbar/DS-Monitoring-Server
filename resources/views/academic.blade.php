<!-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are in ACADEMIC Dashboard!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection -->
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>RDS Monitoring</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    -->
<!-- <link href="./main.css" rel="stylesheet"></head> -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<link href="{{ asset('template/main.css') }}" rel="stylesheet">

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <h4>RDS Monitoring</h4>
                <!-- <div class="logo-src"></div> -->
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>    <div class="app-header__content">
                <div class="app-header-left">
                    <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Type to search">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div>
                    <ul class="header-menu nav">
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon fa fa-database"> </i>
                                Statistics
                            </a>
                        </li>
                        <!-- <li class="btn-group nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon fa fa-edit"></i>
                                Projects
                            </a>
                        </li> -->
                        <li class="dropdown nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon fa fa-cog"></i>
                                Settings
                            </a>
                        </li>
                    </ul>        </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" class="rounded-circle" src="assets/images/avatars/1.jpg" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <button type="button" tabindex="0" class="dropdown-item">User Account</button>
                                            <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                            <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                            <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                        Alina Mclourd
                                    </div>
                                    <div class="widget-subheading">
                                        VP People Manager
                                    </div>
                                </div>
                                <div class="widget-content-right header-user-info ml-3">
                                    <button type="button" class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example">
                                        <i class="fa text-white fa-calendar pr-1 pl-1"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>        </div>
            </div>
        </div>        
        <div class="app-main">
                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">Menu Dashboard</li>
                                <li>
                                    <a href="index.html" class="mm-active">
                                        <i class="metismenu-icon pe-7s-rocket"></i>
                                        Dashboard 
                                    </a>
                                </li>
                                <li class="app-sidebar__heading">Monitoring</li>
                                <li>
                                    <a href="index.html">
                                        <i class="metismenu-icon pe-7s-rocket"></i>
                                        Host 
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html">
                                        <i class="metismenu-icon pe-7s-rocket"></i>
                                        Notifikasi 
                                    </a>
                                </li>
                                <li class="app-sidebar__heading">Management</li>
                                <li>
                                    <a href="index.html">
                                        <i class="metismenu-icon pe-7s-rocket"></i>
                                        User 
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html">
                                        <i class="metismenu-icon pe-7s-rocket"></i>
                                        Laporan 
                                    </a>
                                </li>
                                
                               
                            </ul>
                        </div>
                    </div>
                </div>    <div class="app-main__outer">
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
                                <div class="page-title-actions">
                                    <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                                        <i class="fa fa-star"></i>
                                    </button>
                                    <div class="d-inline-block dropdown">
                                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                                <i class="fa fa-business-time fa-w-20"></i>
                                            </span>
                                            Buttons
                                        </button>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">
                                                        <i class="nav-link-icon lnr-inbox"></i>
                                                        <span>
                                                            Inbox
                                                        </span>
                                                        <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">
                                                        <i class="nav-link-icon lnr-book"></i>
                                                        <span>
                                                            Book
                                                        </span>
                                                        <div class="ml-auto badge badge-pill badge-danger">5</div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">
                                                        <i class="nav-link-icon lnr-picture"></i>
                                                        <span>
                                                            Picture
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a disabled href="javascript:void(0);" class="nav-link disabled">
                                                        <i class="nav-link-icon lnr-file-empty"></i>
                                                        <span>
                                                            File Disabled
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
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
                    <div class="app-wrapper-footer">
                        <div class="app-footer">
                            <div class="app-footer__inner">
                                <div class="app-footer-left">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                Footer Link 1
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                Footer Link 2
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="app-footer-right">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                Footer Link 3
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                <div class="badge badge-success mr-1 ml-0">
                                                    <small>NEW</small>
                                                </div>
                                                Footer Link 4
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>    </div>
                <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>
    </body>
<!-- <script type="text/javascript" src="template/assets/scripts/main.js"></script> -->
<script src="{{ asset('template/assets/scripts/main.js') }}" defer></script>
<script src="{{ asset('js/app.js') }}" defer></script>


</html>

