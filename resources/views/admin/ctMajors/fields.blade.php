<!-- Major Field -->
<div class="form-group col-sm-12">
    {!! Form::label('major', 'Major:') !!}
    {!! Form::text('major', null, ['class' => 'form-control']) !!}
</div>

<!-- Major Type -->
<div class="form-group col-sm-12">
    {!! Form::label('type', 'Type:') !!}
    {!! Form::select('major', ['STEM' => 'STEM', 'NON-STEM' => 'NON-STEM'], null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12 text-center">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.ctMajors.index') !!}" class="btn btn-default">Cancel</a>
</div>
