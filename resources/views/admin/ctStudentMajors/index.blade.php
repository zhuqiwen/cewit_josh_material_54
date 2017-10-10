@extends('admin./layouts/default')

@section('title')
CtStudentMajors
@parent
@stop

{{-- Page content --}}
@section('content')
<section class="content-header">
    <h1>CtStudentMajors</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('admin.dashboard') }}"> <i class="material-icons text-primary leftsize">home</i>
                Dashboard
            </a>
        </li>
        <li>CtStudentMajors</li>
        <li class="active">CtStudentMajors List</li>
    </ol>
</section>

<section class="content paddingleft_right15">
    <div class="row">
     @include('flash::message')
        <div class="panel panel-primary ">
            <div class="panel-heading clearfix">
                <h4 class="panel-title pull-left"> <i class="material-icons">list</i>
                    CtStudentMajors List
                </h4>
                <div class="pull-right">
                    <a href="{{ route('admin.ctStudentMajors.create') }}" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-plus"></span> @lang('button.create')</a>
                </div>
            </div>
            <br />
            <div class="panel-body table-responsive">
                 @include('admin.ctStudentMajors.table')
                 
            </div>
        </div>
 </div>
</section>
@stop
