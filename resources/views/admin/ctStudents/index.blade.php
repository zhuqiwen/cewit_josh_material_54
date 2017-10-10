@extends('admin./layouts/default')

@section('title')
CtStudents
@parent
@stop

{{-- Page content --}}
@section('content')
<section class="content-header">
    <h1>CtStudents</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('admin.dashboard') }}"> <i class="material-icons text-primary leftsize">home</i>
                Dashboard
            </a>
        </li>
        <li>CtStudents</li>
        <li class="active">CtStudents List</li>
    </ol>
</section>

<section class="content paddingleft_right15">
    <div class="row">
     @include('flash::message')
        <div class="panel panel-primary ">
            <div class="panel-heading clearfix">
                <h4 class="panel-title pull-left"> <i class="material-icons">list</i>
                    CtStudents List
                </h4>
                <div class="pull-right">
                    <a href="{{ route('admin.ctStudents.create') }}" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-plus"></span> @lang('button.create')</a>
                </div>
            </div>
            <br />
            <div class="panel-body table-responsive">
                 @include('admin.ctStudents.table')
                 
            </div>
        </div>
 </div>
</section>
@stop
