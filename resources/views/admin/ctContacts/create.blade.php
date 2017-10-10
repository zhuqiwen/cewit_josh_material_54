@extends('admin./layouts/default')

@section('title')
CtContacts
@parent
@stop

@section('content')
@include('core-templates::common.errors')
<section class="content-header">
    <h1>CtContacts</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('admin.dashboard') }}"> <i class="material-icons text-primary leftsize">home</i>
                Dashboard
            </a>
        </li>
        <li>CtContacts</li>
        <li class="active">Create CtContacts </li>
    </ol>
</section>
<section class="content paddingleft_right15">
<div class="row">
 <div class="panel panel-primary">
        <div class="panel-heading">
            <h4 class="panel-title"> <i class="material-icons text-primary leftsize">add_circle</i>
                Create New  CtContact
            </h4></div>
        <br />
        <div class="panel-body">
        {!! Form::open(['route' => 'admin.ctContacts.store']) !!}

            @include('admin.ctContacts.fields')

        {!! Form::close() !!}
    </div>
  </div>
 </div>
</section>
 @stop
