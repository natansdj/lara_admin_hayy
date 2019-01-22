<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | Welcome to Josh Frontend</title>
    <!--global css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    <!--end of global css-->
    <!--page level css starts-->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/iCheck/css/all.css')}}" />
    <link href="{{ asset('assets/vendors/bootstrapvalidator/css/bootstrapValidator.min.css') }}" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pages/advbuttons.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/login.css') }}">
    <!--end of page level css-->
</head>
<body>
<div class="container">
    <!--Content Section Start -->
    <div class="row">
        <div class="box animation flipInX font_size ">
            <div class="box1">
                <div class="text-center">
            <img src="{{ asset('assets/images/josh-new.png') }}" alt="logo" class="img-fluid mar"></div>
            <h3 class="text-primary">Log In</h3>
                <!-- Notifications -->
                <div id="notific">
                @include('notifications')
                </div>
                <form action="{{ route('login') }}" class="omb_loginForm"  autocomplete="off" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group {{ $errors->first('email', 'has-error') }}">
                        <label class="sr-only">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Email"
                               value="{!! old('email') !!}">
                        <span class="help-block">{{ $errors->first('email', ':message') }}</span>
                    </div>
                    <div class="form-group {{ $errors->first('password', 'has-error') }}">
                        <label class="sr-only">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <span class="help-block">{{ $errors->first('password', ':message') }}</span>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Remember Password
                        </label>

                    </div>
                    <input type="submit" class="btn btn-block btn-primary" value="Log In">
                    Don't have an account? <a href="{{ route('register') }}"><strong> Sign Up</strong></a>
                </form>
                <br/>
                <div class="row">
                    <div class="col-lg-12 text-center social_login m-t-10 mb-3">
                        <a class="btn btn-block btn-social btn-facebook" href="{{ url('/facebook') }}">
                            <i class="fa fa-facebook"></i> Sign in with Facebook
                        </a>
                        <a class="btn btn-block btn-social btn-google-plus" href="{{ url('/google') }}">
                            <i class="fa fa-google-plus"></i> Sign in with Google
                        </a>
                        <a class="btn btn-block btn-social btn-linkedin" href="{{ url('/linkedin') }}">
                            <i class="fa fa-linkedin"></i> Sign in with LinkedIn
                        </a>
                    </div>
                </div>
            </div>
        <div class="bg-light animation flipInX">
            <a href="{{ route('forgot-password') }}" id="forgot_pwd_title">Forgot Password?</a>
        </div>
        </div>
    </div>
    <!-- //Content Section End -->
</div>
<!--global js starts-->
<script type="text/javascript" src="{{ asset('assets/js/frontend/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/frontend/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js') }}" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('assets/vendors/iCheck/js/icheck.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/frontend/login_custom.js') }}"></script>
<!--global js end-->
</body>
</html>
