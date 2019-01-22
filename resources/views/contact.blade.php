@extends('layouts/default')

{{-- Page title --}}
@section('title')
Contact
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/contact.css') }}">
    <!--end of page level css-->
@stop

{{-- breadcrumb --}}
@section('top')
    <div class="breadcum">
        <div class="container">
            <div class="row">
                <div class="col-12">
            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('home') }}"> <i class="livicon icon3 icon4" data-name="home" data-size="18" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i>Dashboard
                    </a>
                </li>
                <li class="d-none d-lg-block d-sm-block d-md-block">
                    <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                    <a href="#">Contact</a>
                </li>
            </ol>
            <div class="float-right breadcrum_adjust">
                <i class="livicon icon3" data-name="cellphone" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> Contact
            </div>
        </div>
    </div>
        </div>
    </div>
@stop


{{-- Page content --}}
@section('content')
    <!-- Map Section Start -->
    <div class="">
        <div id="map" style="width:100%; height:400px;"></div>
    </div>
    <!-- //map Section End -->
    <!-- Container Section Start -->
    <div class="container">
        <div class="row">
            <!-- Contact form Section Start -->
            <div class="col-md-6 col-lg-6 col-12 my-3">
                <h2>Contact Form</h2>
                <!-- Notifications -->
                <div id="notific">
                @include('notifications')
                </div>
                <form class="contact" id="contact" action="{{route('contact')}}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <div class="form-group">
                        <input type="text" name="contact-name" class="form-control input-lg" placeholder="Your name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="contact-email" class="form-control input-lg" placeholder="Your email address" required>
                    </div>
                    <div class="form-group">
                        <textarea name="contact-msg" class="form-control input-lg no-resize resize_vertical" rows="6" placeholder="Your comment" required></textarea>
                    </div>
                    <div class="input-group">
                        <button class="btn btn-primary mr-1" type="submit">submit</button>
                        <button class="btn btn-danger" type="reset">Reset</button>
                    </div>
                </form>
            </div>
            <!-- //Conatc Form Section End -->
            <!-- Address Section Start -->
            <div class="col-md-6 col-sm-6" id="address_margt">
                <div class="media media-top media-right">
                    <a href="#">
                    <div class="box-icon">
                    <i class="livicon" data-name="home" data-size="22" data-loop="true" data-c="#fff" data-hc="#fff"></i>
                    </div>
                    </a>
                    <div class="media-body ml-3">
                        <h4 class="media-heading">Address:</h4>
                        <div class="danger">Jyostna</div>
                        <address>
                        Pediatric Surgeons of Alaska
                        <br> 3340 Providence Drive #565
                        <br> Anchorage, AK(Alaska)
                        <br> North Las Vegas, NV
                        </address>
                    </div>
                </div>
                <div class="media media-top">
                    <a href="#">
                    <div class="box-icon">
                    <i class="livicon" data-name="phone" data-size="22" data-loop="true" data-c="#fff" data-hc="#fff"></i>
                    </div>
                    </a>
                    <div class="media-body ml-3">
                        <h4 class="media-heading">Telephone:</h4> (703) 717-4200
                        <br /> Fax:400 423 1456
                    </div>
                </div>
            </div>
            <!-- //Address Section End -->
        </div>
    </div>
    
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <!-- page level js starts-->
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyADWjiTRjsycXf3Lo0ahdc7dDxcQb475qw&libraries=places"></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/gmaps/js/gmaps.min.js') }}" ></script>
    <!--page level js ends-->
    <script>

        $(document).ready(function() {
            var map = new GMaps({
                el: '#map',
                lat: 38.8921021,
                lng: -77.0260358
            });
            map.addMarker({
                lat: 38.8921021,
                lng: -77.0260358,
                title: 'Washington'
            });
        });
    </script>

@stop
