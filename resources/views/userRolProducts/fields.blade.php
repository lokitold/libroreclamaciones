{{--<!-- Id Field -->--}}
{{--<div class="form-group col-sm-6">--}}
    {{--{!! Form::label('id', 'Id:') !!}--}}
    {{--{!! Form::number('id', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

{{--<!-- Created At Field -->--}}
{{--<div class="form-group col-sm-6">--}}
    {{--{!! Form::label('created_at', 'Created At:') !!}--}}
    {{--{!! Form::date('created_at', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

{{--<!-- Updated At Field -->--}}
{{--<div class="form-group col-sm-6">--}}
    {{--{!! Form::label('updated_at', 'Updated At:') !!}--}}
    {{--{!! Form::date('updated_at', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {{--{!! Form::number('user_id', null, ['class' => 'form-control']) !!}--}}
    {{ Form::select('user_id', $selectUser, $defaultSelectUser, array('class' => 'form-control'))}}
</div>

<!-- Rol Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rol_id', 'Rol Id:') !!}
    {{--{!! Form::number('rol_id', null, ['class' => 'form-control']) !!}--}}
    {{ Form::select('rol_id', $selectRol, $defaultSelectRol, array('class' => 'form-control'))}}
</div>

<!-- Product Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product_id', 'Product Id:') !!}
    {{--{!! Form::number('product_id', null, ['class' => 'form-control']) !!}--}}
    {{ Form::select('product_id', $selectProduct, $defaultSelectProduct, array('class' => 'form-control'))}}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('userRolProducts.index') !!}" class="btn btn-default">Cancel</a>
</div>
