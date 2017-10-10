@extends('admin./layouts/default')

@section('title')
CtStudentMajors
@parent
@stop

@section('content')
  @include('core-templates::common.errors')
    <section class="content-header">
     <h1>CtStudentMajors Edit</h1>
     <ol class="breadcrumb">
         <li>
             <a href="{{ route('admin.dashboard') }}"> <i class="material-icons text-primary leftsize">home</i>
                 Dashboard
             </a>
         </li>
         <li>CtStudentMajors</li>
         <li class="active">Edit CtStudentMajors </li>
     </ol>
    </section>
    <section class="content paddingleft_right15">
      <div class="row">
      <div class="panel panel-primary">
            <div class="panel-heading">
                <h4 class="panel-title"> <i class="material-icons text-primary leftsize">edit</i>
                    Edit  CtStudentMajor
                </h4></div>
            <br />
        <div class="panel-body">
        {!! Form::model($ctStudentMajor, ['route' => ['admin.ctStudentMajors.update', $ctStudentMajor->id], 'method' => 'patch']) !!}

        @include('admin.ctStudentMajors.fields')

        {!! Form::close() !!}
        </div>
      </div>
    </div>
   </section>
 @stop
