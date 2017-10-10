@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Drop Downs
    @parent
    @stop

    {{-- page level styles --}}
    @section('header_styles')

        <link type="text/css" href="{{ asset('assets/vendors/bootstrap-multiselect/css/bootstrap-multiselect.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/vendors/select2/css/select2.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/vendors/select2/css/select2-bootstrap.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/vendors/iCheck/css/all.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/vendors/iCheck/css/line/line.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/css/pages/formelements.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/css/pages/customform_elements.css') }}" rel="stylesheet" />

@stop

{{-- Page content --}}
@section('content')

    <section class="content-header">
        <!--section starts-->
        <h1>
            Drop downs
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="material-icons breadmaterial">home</i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="#">Forms</a>
            </li>
            <li class="active">
                Drop Downs
            </li>
        </ol>
    </section>
    <!--section ends-->
    <section class="content">
        <!--main content-->
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="material-icons">notifications</i> Select2
                        </h3>
                                <span class="pull-right clickable">
                                    <i class="material-icons">keyboard_arrow_up</i>
                                </span>
                    </div>
                    <div class="panel-body adv_select">
                        <div class="form-group">
                            <label for="select21" class="control-label">
                                Select2 single select
                            </label>
                            <select id="select21" class="form-control select2">
                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                    <option value="AK">Alaska</option>
                                    <option value="HI">Hawaii</option>
                                </optgroup>
                                <optgroup label="Pacific Time Zone">
                                    <option value="CA">California</option>
                                    <option value="NV">Nevada</option>
                                    <option value="OR">Oregon</option>
                                    <option value="WA">Washington</option>
                                </optgroup>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="MT">Montana</option>
                                    <option value="NE">Nebraska</option>
                                    <option value="NM">New Mexico</option>
                                    <option value="ND">
                                        North Dakota
                                    </option>
                                    <option value="UT">Utah</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                                <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MS">
                                        Mississippi
                                    </option>
                                    <option value="MO">Missouri</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="SD">
                                        South Dakota
                                    </option>
                                    <option value="TX">Texas</option>
                                    <option value="TN">Tennessee</option>
                                    <option value="WI">Wisconsin</option>
                                </optgroup>
                                <optgroup label="Eastern Time Zone">
                                    <option value="CT">
                                        Connecticut
                                    </option>
                                    <option value="DE">Delaware</option>
                                    <option value="FL">Florida</option>
                                    <option value="GA">Georgia</option>
                                    <option value="IN">Indiana</option>
                                    <option value="ME">Maine</option>
                                    <option value="MD">Maryland</option>
                                    <option value="MA">
                                        Massachusetts
                                    </option>
                                    <option value="MI">Michigan</option>
                                    <option value="NH">
                                        New Hampshire
                                    </option>
                                    <option value="NJ">New Jersey</option>
                                    <option value="NY">New York</option>
                                    <option value="NC">
                                        North Carolina
                                    </option>
                                    <option value="OH">Ohio</option>
                                    <option value="PA">
                                        Pennsylvania
                                    </option>
                                    <option value="RI">
                                        Rhode Island
                                    </option>
                                    <option value="SC">
                                        South Carolina
                                    </option>
                                    <option value="VT">Vermont</option>
                                    <option value="VA">Virginia</option>
                                    <option value="WV">
                                        West Virginia
                                    </option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="select22" class="control-label">
                                Select2 multi select
                            </label>
                            <select id="select22" class="form-control select2" multiple>
                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                    <option value="AK">Alaska</option>
                                    <option value="HI">Hawaii</option>
                                </optgroup>
                                <optgroup label="Pacific Time Zone">
                                    <option value="CA">California</option>
                                    <option value="NV">Nevada</option>
                                    <option value="OR">Oregon</option>
                                    <option value="WA">Washington</option>
                                </optgroup>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="MT">Montana</option>
                                    <option value="NE">Nebraska</option>
                                    <option value="NM">New Mexico</option>
                                    <option value="ND">
                                        North Dakota
                                    </option>
                                    <option value="UT">Utah</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                                <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MS">
                                        Mississippi
                                    </option>
                                    <option value="MO">Missouri</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="SD">
                                        South Dakota
                                    </option>
                                    <option value="TX">Texas</option>
                                    <option value="TN">Tennessee</option>
                                    <option value="WI">Wisconsin</option>
                                </optgroup>
                                <optgroup label="Eastern Time Zone">
                                    <option value="CT">
                                        Connecticut
                                    </option>
                                    <option value="DE">Delaware</option>
                                    <option value="FL">Florida</option>
                                    <option value="GA">Georgia</option>
                                    <option value="IN">Indiana</option>
                                    <option value="ME">Maine</option>
                                    <option value="MD">Maryland</option>
                                    <option value="MA">
                                        Massachusetts
                                    </option>
                                    <option value="MI">Michigan</option>
                                    <option value="NH">
                                        New Hampshire
                                    </option>
                                    <option value="NJ">New Jersey</option>
                                    <option value="NY">New York</option>
                                    <option value="NC">
                                        North Carolina
                                    </option>
                                    <option value="OH">Ohio</option>
                                    <option value="PA">
                                        Pennsylvania
                                    </option>
                                    <option value="RI">
                                        Rhode Island
                                    </option>
                                    <option value="SC">
                                        South Carolina
                                    </option>
                                    <option value="VT">Vermont</option>
                                    <option value="VA">Virginia</option>
                                    <option value="WV">
                                        West Virginia
                                    </option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="select23" class="control-label">
                                Select2 select with country flag
                            </label>
                            <select id="select23" class="form-control select2">
                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                    <option value="AK">Alaska</option>
                                    <option value="HI">Hawaii</option>
                                </optgroup>
                                <optgroup label="Pacific Time Zone">
                                    <option value="CA">California</option>
                                    <option value="NV">Nevada</option>
                                    <option value="OR">Oregon</option>
                                    <option value="WA">Washington</option>
                                </optgroup>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="MT">Montana</option>
                                    <option value="NE">Nebraska</option>
                                    <option value="NM">New Mexico</option>
                                    <option value="ND">
                                        North Dakota
                                    </option>
                                    <option value="UT">Utah</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                                <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MS">
                                        Mississippi
                                    </option>
                                    <option value="MO">Missouri</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="SD">
                                        South Dakota
                                    </option>
                                    <option value="TX">Texas</option>
                                    <option value="TN">Tennessee</option>
                                    <option value="WI">Wisconsin</option>
                                </optgroup>
                                <optgroup label="Eastern Time Zone">
                                    <option value="CT">
                                        Connecticut
                                    </option>
                                    <option value="DE">Delaware</option>
                                    <option value="FL">Florida</option>
                                    <option value="GA">Georgia</option>
                                    <option value="IN">Indiana</option>
                                    <option value="ME">Maine</option>
                                    <option value="MD">Maryland</option>
                                    <option value="MA">
                                        Massachusetts
                                    </option>
                                    <option value="MI">Michigan</option>
                                    <option value="NH">
                                        New Hampshire
                                    </option>
                                    <option value="NJ">New Jersey</option>
                                    <option value="NY">New York</option>
                                    <option value="NC">
                                        North Carolina
                                    </option>
                                    <option value="OH">Ohio</option>
                                    <option value="PA">
                                        Pennsylvania
                                    </option>
                                    <option value="RI">
                                        Rhode Island
                                    </option>
                                    <option value="SC">
                                        South Carolina
                                    </option>
                                    <option value="VT">Vermont</option>
                                    <option value="VA">Virginia</option>
                                    <option value="WV">
                                        West Virginia
                                    </option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="select26" class="control-label">
                                Select2 multi append
                            </label>
                            <div class="input-group select2-bootstrap-append">
                                <select id="select26" class="form-control select2">
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                </select>
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="button" data-select2-open="multi-append">
                                        <span class="glyphicon glyphicon-search"></span>
                                    </button>
                                    <button class="btn btn-default" type="button" data-select2-open="multi-prepend">State</button>
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                        Action
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu action_dropdown">
                                        <li>
                                            <a href="#">Action</a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Another action
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Something else here
                                            </a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="#">
                                                Separated link
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="select24" class="control-label">
                                Select2 append
                            </label>
                            <div class="input-group select2-bootstrap-append">
                                <select id="select24" class="form-control">
                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                        <option value="AK">Alaska</option>
                                        <option value="HI">Hawaii</option>
                                    </optgroup>
                                    <optgroup label="Pacific Time Zone">
                                        <option value="CA">California</option>
                                        <option value="NV">Nevada</option>
                                        <option value="OR">Oregon</option>
                                        <option value="WA">Washington</option>
                                    </optgroup>
                                    <optgroup label="Mountain Time Zone">
                                        <option value="AZ">Arizona</option>
                                        <option value="CO">Colorado</option>
                                        <option value="ID">Idaho</option>
                                        <option value="MT">Montana</option>
                                        <option value="NE">Nebraska</option>
                                        <option value="NM">New Mexico</option>
                                        <option value="ND">
                                            North Dakota
                                        </option>
                                        <option value="UT">Utah</option>
                                        <option value="WY">Wyoming</option>
                                    </optgroup>
                                    <optgroup label="Central Time Zone">
                                        <option value="AL">Alabama</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="IL">Illinois</option>
                                        <option value="IA">Iowa</option>
                                        <option value="KS">Kansas</option>
                                        <option value="KY">Kentucky</option>
                                        <option value="LA">Louisiana</option>
                                        <option value="MN">Minnesota</option>
                                        <option value="MS">
                                            Mississippi
                                        </option>
                                        <option value="MO">Missouri</option>
                                        <option value="OK">Oklahoma</option>
                                        <option value="SD">
                                            South Dakota
                                        </option>
                                        <option value="TX">Texas</option>
                                        <option value="TN">Tennessee</option>
                                        <option value="WI">Wisconsin</option>
                                    </optgroup>
                                    <optgroup label="Eastern Time Zone">
                                        <option value="CT">
                                            Connecticut
                                        </option>
                                        <option value="DE">Delaware</option>
                                        <option value="FL">Florida</option>
                                        <option value="GA">Georgia</option>
                                        <option value="IN">Indiana</option>
                                        <option value="ME">Maine</option>
                                        <option value="MD">Maryland</option>
                                        <option value="MA">
                                            Massachusetts
                                        </option>
                                        <option value="MI">Michigan</option>
                                        <option value="NH">
                                            New Hampshire
                                        </option>
                                        <option value="NJ">New Jersey</option>
                                        <option value="NY">New York</option>
                                        <option value="NC">
                                            North Carolina
                                        </option>
                                        <option value="OH">Ohio</option>
                                        <option value="PA">
                                            Pennsylvania
                                        </option>
                                        <option value="RI">
                                            Rhode Island
                                        </option>
                                        <option value="SC">
                                            South Carolina
                                        </option>
                                        <option value="VT">Vermont</option>
                                        <option value="VA">Virginia</option>
                                        <option value="WV">
                                            West Virginia
                                        </option>
                                    </optgroup>
                                </select>
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button" data-select2-open="single-append-text">
                                        <span class="glyphicon glyphicon-search"></span>
                                    </button>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="select25" class="control-label">
                                Select2 prepend
                            </label>
                            <div class="input-group select2-bootstrap-prepend">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="button" data-select2-open="single-prepend-text">
                                                <span class="glyphicon glyphicon-search"></span>
                                        </button>
                                        </span>
                                <select id="select25" class="form-control">
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                </select>
                            </div>
                        </div>

                        <!--ends-->
                    </div>
                </div>
                <!--select-->
                <!--switch -->
            </div>
            <!--col-md-6 ends-->
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="material-icons">more_vert</i> Bootstrap Multi-select
                        </h3>
                                <span class="pull-right clickable">
                                    <i class="material-icons">keyboard_arrow_up</i>
                                </span>
                    </div>
                    <div class="panel-body adv_select">
                        <div class="box-body">
                            <div class="form-group">
                                <label class="control-label" for="multiselect1">Single Select using Radio:</label>
                                <select id="multiselect1" class="form-control">
                                    <option value="cheese">Cheese</option>
                                    <option value="tomatoes">Tomatoes</option>
                                    <option value="mozarella">Mozzarella</option>
                                    <option value="mushrooms">Mushrooms</option>
                                    <option value="pepperoni">Pepperoni</option>
                                    <option value="onions">Onions</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="multiselect2">Multi Select using checkbox:</label>
                                <select id="multiselect2" multiple="multiple" class="form-control">
                                    <option value="cheese">Cheese</option>
                                    <option value="tomatoes">Tomatoes</option>
                                    <option value="mozarella">Mozzarella</option>
                                    <option value="mushrooms">Mushrooms</option>
                                    <option value="pepperoni">Pepperoni</option>
                                    <option value="onions">Onions</option>
                                </select>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
            </div>
            <!--col-md-6 ends-->
        </div>
        <!--main content ends-->
    </section>
    <!-- content -->

    @stop

    {{-- page level scripts --}}
    @section('footer_scripts')
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/bootstrap-multiselect/js/bootstrap-multiselect.js') }}" ></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/select2/js/select2.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/iCheck/js/icheck.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/bootstrap-switch/js/bootstrap-switch.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/switchery/js/switchery.js') }}" ></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/js/pages/custom_elements.js') }}"></script>

    @stop