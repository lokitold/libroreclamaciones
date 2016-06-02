@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Libro de reclamacion de {{ $productName  }}</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/reclamo') }}">
                            {{ csrf_field() }}


                            <fieldset>
                                <input type="radio" name="radio-tipo" data-toggle="tab" data-target="#login-tab" value="persona"/>
                                <label for="login">Persona Natural</label>

                                <input type="radio" name="radio-tipo" data-toggle="tab" data-target="#register-tab" value="empresa"/>
                                <label for="register">Empresa</label>
                            </fieldset>

                            <div class="tab-content">
                                <div class="tab-pane" id="login-tab">

                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label for="name" class="col-md-4 control-label">Nombre</label>

                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control" name="name"
                                                   value="{{ old('name') }}">
                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                                        <label for="lastname" class="col-md-4 control-label">Apellido paterno</label>

                                        <div class="col-md-6">
                                            <input id="lastname" type="text" class="form-control" name="lastname"
                                                   value="{{ old('lastname') }}">

                                            @if ($errors->has('lastname'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="register-tab">
                                    Empresa
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-user"></i> Enviar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
