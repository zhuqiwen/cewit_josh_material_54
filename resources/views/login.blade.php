<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | Welcome to Josh Frontend</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    <!--global css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/lib.css') }}">
    <!--end of global css-->
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/login.css') }}">
    <!--end of page level css-->
</head>
<body>
<div class="container">
    <!--Content Section Start -->
    <div class="row">
        <div class="box animation flipInX">
            <div class="box1">
            <img src="{{ asset('assets/images/josh-new.png') }}" alt="logo" class="img-responsive mar">
            <h3 class="text-primary">Log In</h3>
                <!-- Notifications -->
                @include('notifications')

                <form action="{{ route('login') }}" class="omb_loginForm"  autocomplete="off" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group label-floating {{ $errors->first('email', 'has-error') }}">
                        <label class="control-label" for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email"
                               value="{!! old('email') !!}">
                    </div>
                    <span class="help-block">{{ $errors->first('email', ':message') }}</span>
                    <div class="form-group label-floating {{ $errors->first('password', 'has-error') }}">
                        <label class="control-label" for="Password">Password</label>
                        <input type="password" class="form-control" name="password" id="Password">
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
            </div>
        <div class="bg-light animation flipInX">
            <a href="{{ route('forgot-password') }}" id="forgot_pwd_title">Forgot Password?</a>
        </div>
        </div>
    </div>
    <!-- //Content Section End -->
</div>
<!--global js starts-->
<script type="text/javascript" src="{{ asset('assets/js/frontend/lib.js') }}"></script>

<script type="text/javascript" src="{{ asset('assets/js/frontend/login_custom.js') }}"></script>
<!--global js end-->
</body>
</html>
