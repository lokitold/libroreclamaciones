<!-- Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id', 'Id:') !!}
    {!! Form::number('id', null, ['class' => 'form-control']) !!}
</div>

<!-- Created At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('created_at', 'Created At:') !!}
    {!! Form::date('created_at', null, ['class' => 'form-control']) !!}
</div>

<!-- Updated At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('updated_at', 'Updated At:') !!}
    {!! Form::date('updated_at', null, ['class' => 'form-control']) !!}
</div>

<!-- Rol Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rol_id', 'Rol Id:') !!}
    {!! Form::number('rol_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Permission Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('permission_id', 'Permission Id:') !!}
    {!! Form::number('permission_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('permissionRoles.index') !!}" class="btn btn-default">Cancel</a>
</div>
