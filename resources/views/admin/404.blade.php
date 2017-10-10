<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>404 page | Josh Admin Template</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- global level js-->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- end of global level js-->
    <!-- page level styles-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pages/404.css') }}"/>
    <!-- end of page level styles-->
</head>

<body>

    <div id="animate" class="row">
        <div class="col-md-5 col-md-offset-6">
            <div class="number">4</div>
            <div class="number">0</div>
            <div class="number">4</div>
        </div>
    </div>
    <div class="hgroup">
        <h1>Page Not Found</h1>
        <h2>It seems that page you are looking for no longer exists.</h2>
        <a href="{{ route('admin.dashboard') }}"  class="btn btn-responsive btn-default">Home</a>
    </div>
    <!-- global js -->
    <script src="{{ asset('assets/js/app.js') }}" type="text/javascript"></script>
    <!-- end of global js -->
    <!-- begining of page level js-->
    <script src="{{ asset('assets/js/404.js') }}"></script>
    <!-- end of page level js-->

</body>
</html>
