@extends('admin./layouts/default')

@section('title')
CtMajors
@parent
@stop

@section('content')
<section class="content-header">
    <h1>CtMajors View</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('admin.dashboard') }}"> <i class="material-icons text-primary leftsize">home</i>
                Dashboard
            </a>
        </li>
        <li>CtMajors</li>
        <li class="active">CtMajors View</li>
    </ol>
</section>

<section class="content paddingleft_right15">
    <div class="row">
       <div class="panel panel-primary">
        <div class="panel-heading clearfix">
            <h4 class="panel-title"> <i class="material-icons text-primary leftsize">info</i>
                CtMajors details
            </h4>
        </div>
            <div class="panel-body">
                @include('admin.ctMajors.show_fields')
            </div>
        </div>
    <div class="form-group">
           <a href="{!! route('admin.ctMajors.index') !!}" class="btn btn-default">Back</a>
    </div>
  </div>
</section>
@stop
