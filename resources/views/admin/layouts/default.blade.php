<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>
        @section('title')
            | Josh Admin Template
        @show
    </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link rel="icon" href="{{ asset('assets/img/logo_small.png') }}" type="image/x-icon">
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet" type="text/css"/>
    <!-- font Awesome -->


    <!-- end of global css -->
    <!--page level css-->
    @yield('header_styles')
            <!--end of page level css-->

<body class="skin-josh">
<header class="header">
    <a href="{{ route('admin.dashboard') }}" class="logo">
        <img src="{{ asset('assets/img/logo.png') }}" alt="logo">
    </a>
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <div>
            <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                <div class="responsive_nav"></div>
            </a>
        </div>
        <div class="navbar-right">
            <ul class="nav navbar-nav">
                @include('admin.layouts._messages')
                @include('admin.layouts._notifications')
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        @if(Sentinel::getUser()->pic)
                            <img src="{!! url('/').'/uploads/users/'.Sentinel::getUser()->pic !!}" alt="img" height="35px" width="35px"
                                 class="img-circle img-responsive pull-left"/>
                        @else
                            <img src="{!! asset('assets/img/authors/avatar3.jpg') !!} " width="35"
                                 class="img-circle img-responsive pull-left" height="35" alt="riot">
                        @endif
                        <div class="riot">
                            <div>
                                <p class="user_name_max" id="user_nav">{{ Sentinel::getUser()->first_name }} {{ Sentinel::getUser()->last_name }}</p>
                                <span>
                                        <i class="caret"></i>
                                    </span>
                            </div>
                        </div>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header bg-light-blue">
                            @if(Sentinel::getUser()->pic)
                                <img src="{!! url('/').'/uploads/users/'.Sentinel::getUser()->pic !!}" alt="img"
                                     class="img-circle img-bor"/>
                            @else
                                <img src="{!! asset('assets/img/authors/avatar3.jpg') !!}"
                                     class=" img-circle" alt="User Image">
                            @endif
                            <p class="topprofiletext">{{ Sentinel::getUser()->first_name }} {{ Sentinel::getUser()->last_name }}</p>
                        </li>
                        <!-- Menu Body -->
                        <li>
                            <a href="{{ URL::route('admin.users.show',Sentinel::getUser()->id) }}">
                                <i class="material-icons">person</i>
                                My Profile
                            </a>
                        </li>
                        <li role="presentation"></li>
                        <li>
                            <a href="{{ route('admin.users.edit', Sentinel::getUser()->id) }}">
                                <i class="material-icons">settings</i>
                                Account Settings
                            </a>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="{{ URL::route('lockscreen',Sentinel::getUser()->id) }}">
                                    <i class="material-icons">lock</i>
                                    Lock
                                </a>
                            </div>
                            <div class="pull-right">
                                <a href="{{ URL::to('admin/logout') }}">
                                    <i class="material-icons">exit_to_app</i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="left-side sidebar-offcanvas">
        <section class="sidebar ">
            <div class="page-sidebar  sidebar-nav">
                <div class="nav_icons">
                    <ul class="sidebar_threeicons">
                        <li>
                            <a href="{{ URL::to('admin/advanced_tables') }}">
                                <i class="material-icons text-info fsize" title="Advanced tables">view_module</i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ URL::to('admin/tasks') }}">
                                <i class="material-icons text-danger fsize" title="Tasks">view_list</i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ URL::to('admin/gallery') }}">
                                <i class="material-icons text-warning fsize" title="Gallery">photo_library</i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ URL::to('admin/users') }}">
                                <i class="material-icons text-success fsize" title="Users List">group</i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
                <!-- BEGIN SIDEBAR MENU -->
                @include('admin.layouts._left_menu')
                <!-- END SIDEBAR MENU -->
            </div>
        </section>
    </aside>
    <aside class="right-side">

        {{--<!-- Notifications -->--}}
        <div id="notification_remove">
            @include('notifications')
        </div>

                <!-- Content -->
        @yield('content')

    </aside>
    <!-- right-side -->
</div>
<a id="back-to-top" href="#" class="btn btn-primary  back-to-top" role="button" title="Return to top"
   data-toggle="tooltip" data-placement="left">
    <i class="material-icons btn_tak fsize">flight_takeoff</i>
</a>
<!-- global js -->
<script src="{{ asset('assets/js/app.js') }}" type="text/javascript"></script>
<!-- end of global js -->
<!-- begin page level js -->
@yield('footer_scripts')
<!-- end page level js -->
</body>
</html>
