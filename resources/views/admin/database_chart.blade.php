@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Database Charts
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')


@stop

{{-- Page content --}}
@section('content')

    <section class="content-header">
        <!--section starts-->
        <h1>Database Charts</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="#">Laravel Charts</a>
            </li>
            <li class="active">Database Charts</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12 my-3">
                <div class="card panel-primary">
                    <div class="card-heading">
                        <h3 class="card-title">
                            <i class="livicon" data-name="barchart" data-size="16" data-loop="true" data-c="#fff" data-hc="#fff"></i> Google bar chart
                        </h3>
                        <span class="float-right">
                        <i class="fa fa-chevron-up showhide clickable"></i>
                        <i class="fa fa-remove removepanel clickable"></i>
                    </span>
                    </div>
                    <div class="card-body">
                        {!! $google->html() !!}
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-12 my-3">
                <!-- Stack charts strats here-->
                <div class="card panel-primary">
                    <div class="card-heading">
                        <h3 class="card-title">
                            <i class="livicon" data-name="barchart" data-size="16" data-loop="true" data-c="#fff" data-hc="#fff"></i> Database Chart
                        </h3>
                        <span class="float-right">
                        <i class="fa fa-chevron-up showhide clickable"></i>
                        <i class="fa fa-remove removepanel clickable"></i>
                    </span>
                    </div>
                    <div class="card-body">
                        <div class="app">

                            {!! $db_chart->html() !!}

                        </div>
                        <!-- End Of Main Application -->

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12 my-3">
                <div class="card panel-primary">
                    <div class="card-heading">
                        <h3 class="card-title">
                            <i class="livicon" data-name="barchart" data-size="16" data-loop="true" data-c="#fff" data-hc="#fff"></i> Bar Chart
                        </h3>
                        <span class="float-right">
                        <i class="fa fa-chevron-up showhide clickable"></i>
                        <i class="fa fa-remove removepanel clickable"></i>
                    </span>
                    </div>
                    <div class="card-body">
                        {!! $multi_db->html() !!}
                    </div>
                </div>
            </div>
            <div class="col-lg-12 my-3">
                <div class="card panel-primary">
                    <div class="card-heading">
                        <h3 class="card-title">
                            <i class="livicon" data-name="barchart" data-size="16" data-loop="true" data-c="#fff" data-hc="#fff"></i> Pie chart
                        </h3>
                        <span class="float-right">
                        <i class="fa fa-chevron-up showhide clickable"></i>
                        <i class="fa fa-remove removepanel clickable"></i>
                    </span>
                    </div>
                    <div class="card-body">
                        {!! $group_chart->html() !!}
                    </div>
                </div>
            </div>
            <div class="col-lg-12 my-3">
                <div class="card panel-primary">
                    <div class="card-heading">
                        <h3 class="card-title">
                            <i class="livicon" data-name="barchart" data-size="16" data-loop="true" data-c="#fff" data-hc="#fff"></i> Area Chart
                        </h3>
                        <span class="float-right">
                        <i class="fa fa-chevron-up showhide clickable"></i>
                        <i class="fa fa-remove removepanel clickable"></i>
                    </span>
                    </div>
                    <div class="card-body">
                        {!! $area->html() !!}
                    </div>
                </div>
            </div>
            <div class="col-lg-12 my-3">
                <div class="card panel-primary">
                    <div class="card-heading">
                        <h3 class="card-title">
                            <i class="livicon" data-name="barchart" data-size="16" data-loop="true" data-c="#fff" data-hc="#fff"></i> Line Chart
                        </h3>
                        <span class="float-right">
                        <i class="fa fa-chevron-up showhide clickable"></i>
                        <i class="fa fa-remove removepanel clickable"></i>
                    </span>
                    </div>
                    <div class="card-body">
                        {!! $material->html() !!}
                    </div>
                </div>
            </div>
            <div class="col-lg-12 my-3">
                <div class="card panel-primary">
                    <div class="card-heading">
                        <h3 class="card-title">
                            <i class="livicon" data-name="barchart" data-size="16" data-loop="true" data-c="#fff" data-hc="#fff"></i> Donut Chart
                        </h3>
                        <span class="float-right">
                        <i class="fa fa-chevron-up showhide clickable"></i>
                        <i class="fa fa-remove removepanel clickable"></i>
                    </span>
                    </div>
                    <div class="card-body">
                        {!! $donut->html() !!}
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- content -->
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    {!! Charts::scripts() !!}
    {!! $db_chart->script() !!}
    {!! $multi_db->script() !!}
    {!! $group_chart->script() !!}
    {!! $material->script() !!}
    {!! $google->script() !!}
    {!! $area->script() !!}
    {!! $donut->script() !!}


@stop