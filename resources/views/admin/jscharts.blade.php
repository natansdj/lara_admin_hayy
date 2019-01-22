@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
JS Charts
@parent
@stop

{{-- page level styles --}}
@section('header_styles')

    <link rel="stylesheet" href="{{ asset('assets/css/pages/jscharts.css') }}" />

@stop

{{-- Page content --}}
@section('content')
    <section class="content-header">
        <h1>JSCharts</h1>
        <ol class="breadcrumb">
            <li>
                <a href="index.html">
                    <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                    Dashboard
                </a>
            </li>
            <li><a href="#"> Charts</a></li>
            <li class="active">JS Charts</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-lg-6 col-sm-6 col-md-6 col-12 my-3">
                <!-- Basic charts strats here-->
                <div class="card panel-info">
                    <div class="card-heading">
                        <h4 class="card-title">
                            <i class="livicon" data-name="barchart" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                            Bar Chart
                        </h4>
                                <span class="float-right">
                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                </span>
                    </div>
                    <div class="card-body">
                        <div>
                            <canvas id="bar-chart" width="800" height="300" ></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6 col-12 my-3">
                <!-- Basic charts strats here-->
                <div class="card panel-success">
                    <div class="card-heading">
                        <h4 class="card-title">
                            <i class="livicon" data-name="barchart" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                            Polar Area Chart
                        </h4>
                                <span class="float-right">
                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                </span>
                    </div>
                    <div class="card-body">
                        <div>
                            <canvas id="polar-area-chart" width="800" height="300"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-lg-6 col-sm-6 col-md-6 col-12 my-3">
                <!-- Basic charts strats here-->
                <div class="card panel-primary">
                    <div class="card-heading">
                        <h4 class="card-title">
                            <i class="livicon" data-name="barchart" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                            Line Chart
                        </h4>
                                <span class="float-right">
                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                </span>
                    </div>
                    <div class="card-body">
                        <div>
                            <canvas id="line-chart" width="800" height="300"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6 col-md-6 col-12 my-3">
                <!-- Basic charts strats here-->
                <div class="card panel-warning">
                    <div class="card-heading">
                        <h4 class="card-title">
                            <i class="livicon" data-name="barchart" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                            Radar Chart
                        </h4>
                                <span class="float-right">
                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                </span>
                    </div>
                    <div class="card-body">
                        <div>
                            <canvas id="radar-chart" width="800" height="300" ></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-lg-6 col-sm-6 col-md-6 col-12 my-3">
                <!-- Basic charts strats here-->
                <div class="card panel-danger">
                    <div class="card-heading">
                        <h4 class="card-title">
                            <i class="livicon" data-name="barchart" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                            Donut Chart
                        </h4>
                                <span class="float-right">
                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                </span>
                    </div>
                    <div class="card-body">
                        <div>
                            <canvas id="doughnut-chart" width="800" height="300" ></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6 col-12 my-3">
                <!-- Basic charts strats here-->
                <div class="card panel-default">
                    <div class="card-heading">
                        <h4 class="card-title">
                            <i class="livicon" data-name="barchart" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                            Pie  Charts
                        </h4>
                                <span class="float-right">
                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                </span>
                    </div>
                    <div class="card-body">
                        <div>
                            <canvas id="pie-chart" width="800" height="300"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
    </section>
@stop
{{-- page level scripts --}}
@section('footer_scripts')
    <script src="{{ asset('assets/vendors/chartjs/js/Chart.js') }}"></script>
    <script src="{{ asset('assets/js/pages/chartjs.js') }}" ></script>
@stop