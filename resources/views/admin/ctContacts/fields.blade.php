<!-- First Name Field -->
<div class="form-group col-sm-12">
    {!! Form::label('first_name', 'First Name:') !!}
    {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Last Name Field -->
<div class="form-group col-sm-12">
    {!! Form::label('last_name', 'Last Name:') !!}
    {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Gender Field -->
<div class="form-group col-sm-12">
    {!! Form::label('gender', 'Gender:') !!}
    {!! Form::select('gender', ['MALE' => 'MALE', 'FEMALE' => 'FEMALE', 'UNKNOWN' => 'UNKNOWN'], null, ['class' => 'form-control']) !!}
</div>

<!-- Iu User Field -->
<div class="form-group col-sm-12">
    {!! Form::label('iu_user', 'Iu User:') !!}
    {!! Form::text('iu_user', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Is Test Field -->
<div class="form-group col-sm-12">
    {!! Form::label('is_test', 'Is Test:') !!}
    {!! Form::text('is_test', null, ['class' => 'form-control']) !!}
</div>

<!-- Join Date Field -->
<div class="form-group col-sm-12">
    {!! Form::label('join_date', 'Join Date:') !!}
    {!! Form::date('join_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12 text-center">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.ctContacts.index') !!}" class="btn btn-default">Cancel</a>
</div>
