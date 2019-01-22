@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Advanced Date and Time pickers
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<link href="{{ asset('assets/vendors/sweetalert/css/sweetalert2.css') }}" rel="stylesheet" type="text/css"/>
<style>
    .button-alignment {
        margin-top: 5px;
    }

</style>
@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
    <!--section starts-->
    <h1>Sweet Alert</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('admin.dashboard') }}">
                <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                Dashboard
            </a>
        </li>
        <li>
            <a href="#">UI Features</a>
        </li>
        <li class="active">Sweet Alert</li>
    </ol>
</section>
<!--section ends-->
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-6 col-lg-6 col-12 my-3">
            <div class="card panel-info">
                <div class="card-heading">
                    <h3 class="card-title">
                        <i class="livicon" data-name="bell" data-size="16" data-loop="true" data-c="#fff"
                           data-hc="white"></i> Basic Sweet Alerts
                    </h3>
                    <span class="float-right ">
                                    <i class="fa  fa-chevron-up clickable"></i>
                                </span>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-4">
                            <button type="button" class="btn btn-responsive button-alignment btn-primary" id="btn1">
                                Simple Alert
                            </button>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-4">
                            <button type="button" class="btn btn-responsive button-alignment btn-success" id="btn2">Some
                                Large Text
                            </button>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-4">
                            <button type="button" class="btn btn-responsive button-alignment btn-info" id="btn3">Success
                                Alert
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="col-md-6 col-lg-6 col-12 my-3">
                <div class="card panel-primary">
                    <div class="card-heading">
                        <h3 class="card-title">
                            <i class="livicon" data-name="bell" data-size="16" data-loop="true" data-c="#fff"
                               data-hc="white"></i> Advanced Sweet Alerts
                        </h3>
                        <span class="float-right ">
                                    <i class="fa fa-chevron-up clickable"></i>
                                </span>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-5 col-sm-6">
                                <button type="button" class="btn btn-responsive button-alignment btn-warning" id="btn4">
                                    Submit action
                                </button>
                            </div>
                            <div class="col-md-7 col-sm-6">
                                <button type="button" class="btn btn-responsive button-alignment btn-danger" id="btn5">
                                    Both Submit and Cancel
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix visible-md"></div>
    <div class="row my-3">
        <div class="col-md-6 col-lg-6 col-12 my-3">
            <div class="card panel-success">
                <div class="card-heading">
                    <h3 class="card-title">
                        <i class="livicon" data-name="bell" data-size="16" data-loop="true" data-c="#fff"
                           data-hc="white"></i> Sweet Alerts with images
                    </h3>
                    <span class="float-right ">
                                    <i class="fa fa-chevron-up clickable"></i>
                                </span>
                </div>
                <div class="card-body">
                    <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <button type="button" class="btn btn-responsive button-alignment btn-info" id="btn6">Simple
                            Image
                        </button>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <button type="button" class="btn btn-responsive button-alignment btn-success" id="btn7">Simple
                            Image2
                        </button>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6 col-12 my-3">
            <div class="card panel-danger">
                <div class="card-heading">
                    <h3 class="card-title">
                        <i class="livicon" data-name="bell" data-size="16" data-loop="true" data-c="#fff"
                           data-hc="white"></i> Sweet Alerts with closing time
                    </h3>
                    <span class="float-right ">
                                    <i class="fa fa-chevron-up clickable"></i>
                                </span>
                </div>
                <div class="card-body">
                    <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <button type="button" class="btn btn-responsive button-alignment btn-warning" id="btn8">Auto
                            Close
                        </button>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <button type="button" class="btn btn-responsive button-alignment btn-primary" id="btn9">Ajax
                            usage
                        </button>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- content -->
@stop

{{-- page level scripts --}}
@section('footer_scripts')
<!-- begining of page level js -->
<script src="{{ asset('assets/vendors/sweetalert/js/sweetalert2.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/pages/custom_sweetalert.js') }}" type="text/javascript"></script>
<script>
var image="{{ asset('assets/images/c1.jpg') }}";
var image1="{{ asset('assets/images/c2.jpg') }}";

    {{--$('#btn6').on('click', function () {--}}
        {{--swal({title: "Sweet!", text: "Here's a custom image.", imageUrl:"{!!asset('assets/images/c1.jpg')!!}"});--}}
    {{--});--}}

    {{--$('#btn7').on('click', function () {--}}
        {{--swal({title: "Sweet!", text: "Here's a custom image.", imageUrl:"{!!asset('assets/images/c2.jpg')!!}"});--}}
    {{--});--}}
</script>
@stop
