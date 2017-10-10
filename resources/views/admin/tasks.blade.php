@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Tasks
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')

    <link rel="stylesheet" href="{{ asset('assets/css/pages/todolist.css') }}"/>
    <meta name="_token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datetimepicker/css/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/pages/todolist.css') }}"/>
    <!-- end of page level css -->

@stop

{{-- Page content --}}
@section('content')

    <section class="content-header">
        <!--section starts-->
        <h1>Tasks</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="material-icons">home</i>
                    Dashboard
                </a>
            </li>
            <li>Tasks</li>
        </ol>
    </section>
    <!--section ends-->
    <section class="content">
        <div class="row">
            <!-- To do list -->
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="panel panel-primary todolist">
                    <div class="panel-heading border-light">
                        <h4 class="panel-title">
                            <i class="material-icons">card_giftcard</i>
                            To Do List
                        </h4>
                    </div>
                    <div class="panel-body nopadmar">
                        <div class="panel-body">
                            <div class="row list_of_items">
                                                        
                            </div>               
                            <div class="todolist_list adds">
                                {!! Form::open(['class'=>'form', 'id'=>'main_input_box']) !!}
                                <div class="form-group label-floating">
                                    {!! Form::text('task_description', null, ['class' => 'form-control','placeholder'=>'Add List item here','id'=>'task_description', 'required' => 'required']) !!}                            
                                </div>                           
                                <div class="form-group label-floating">
                                    {!! Form::text('task_deadline', null, ['class' => 'form-control datepicker','placeholder'=>'Deadline', 'id'=>'task_deadline', 'data-date-format'=> 'YYYY/MM/DD', 'required' => 'required']) !!}                            
                                </div>                        
                                <button type="submit" class="btn btn-primary add_button">Add Task</button>
                                {!! Form::close() !!}                 
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

    <script type="text/javascript" src="{{ asset('assets/vendors/moment/js/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script>
        $(function () {
            $(".datepicker").datetimepicker({
                format: 'YYYY/MM/DD',
                widgetPositioning:{
                    vertical:'top'
                },
                keepOpen:false,
                useCurrent: false,
                minDate:new Date().setHours(0,0,0,0)
            });
            var date = new Date();
            date.setDate(date.getDate()-1);
            $('#datepicker').datetimepicker({
                startDate: date
            });
        });
    </script>

    <script type="text/javascript" src="{{ asset('assets/js/pages/tasks_list.js') }}"></script>
@stop
