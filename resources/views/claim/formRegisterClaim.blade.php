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
                            <div class="panel panel-default">
                                <div class="panel-heading">Identificación del consumidor reclamante</div>
                                <div class="panel-body">

                                    <div class="form-group">
                                        <label for="name" class="col-md-1 control-label"></label>
                                        <div class="col-md-8">
                                            <label><input type="radio" name="radio-tipo" value="persona">
                                                Persona</label>
                                            <label><input type="radio" name="radio-tipo" value="empresa">
                                                Empresa</label>
                                        </div>
                                    </div>

                                    <div class="persona box boxactive">

                                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                            <label for="name" class="col-md-4 control-label">Nombre</label>
                                            <div class="col-md-4">
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
                                            <label for="lastname" class="col-md-4 control-label">Apellido
                                                paterno</label>

                                            <div class="col-md-4">
                                                <input id="lastname" type="text" class="form-control" name="lastname"
                                                       value="{{ old('lastname') }}">

                                                @if ($errors->has('lastname'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('lastname') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('mother_last_name') ? ' has-error' : '' }}">
                                            <label for="mother_last_name" class="col-md-4 control-label">Apellido
                                                materno</label>

                                            <div class="col-md-4">
                                                <input id="mother_last_name" type="text" class="form-control" name="mother_last_name"
                                                       value="{{ old('mother_last_name') }}">

                                                @if ($errors->has('mother_last_name'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('lastname') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="dni_ce">DNI / CE</label>
                                            <div class="col-md-4">
                                                <input id="name_tutor" class="form-control" type="text" value="" name="name_tutor">
                                            </div>
                                        </div>

                                        <div class="checkbox">
                                            <label><input type="checkbox" value="">Soy menor de edad</label>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                Datos de padre madre o tutor

                                                <div class="form-group">
                                                    <label class="col-md-4 control-label" for="dni_ce">Nombres</label>
                                                    <div class="col-md-4">
                                                        <input id="dni_ce" class="form-control" type="text" value="" name="dni_ce">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-4 control-label" for="dni_ce">Apellido Paterno</label>
                                                    <div class="col-md-4">
                                                        <input id="lastname_tutor" class="form-control" type="text" value="" name="lastname_tutor">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-4 control-label" for="dni_ce">Apellido materno</label>
                                                    <div class="col-md-4">
                                                        <input id="mother_last_name_tutor" class="form-control" type="text" value="" name="mother_last_name_tutor">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-4 control-label" for="dni_ce">DNI / CE</label>
                                                    <div class="col-md-4">
                                                        <input id="dni_ce_tutor" class="form-control" type="text" value="" name="dni_ce_tutor">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="dni_ce">Telefono</label>
                                            <div class="col-md-4">
                                                <input id="telefono" class="form-control" type="text" value="" name="telefono">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="email">Email</label>
                                            <div class="col-md-4">
                                                <input id="email" class="form-control" type="text" value="" name="email">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="ruc">Direccion</label>
                                            <div class="col-md-4">
                                                <input id="direccion" class="form-control" type="text" value="" name="direccion">
                                            </div>
                                        </div>


                                    </div>

                                    <div class="empresa box">
                                        
                                        <div class="form-group{{ $errors->has('business_name') ? ' has-error' : '' }}">
                                            <label for="business_name" class="col-md-4 control-label">Razon
                                                social</label>
                                            <div class="col-md-4">
                                                <input id="business_name" type="text" class="form-control"
                                                       name="business_name"
                                                       value="{{ old('business_name') }}">
                                                @if ($errors->has('business_name'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('business_name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="ruc">Ruc</label>
                                            <div class="col-md-4">
                                                <input id="ruc" class="form-control" type="text" value="" name="ruc">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="dni_ce">Telefono</label>
                                            <div class="col-md-4">
                                                <input id="telefono" class="form-control" type="text" value="" name="telefono_empresa">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="email">Email</label>
                                            <div class="col-md-4">
                                                <input id="email_empresa" class="form-control" type="text" value="" name="email_empresa">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Datos de Reclamación</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="email">Detalle del reclamo</label>
                                        <div class="col-md-4">
                                            <textarea class="form-control" rows="3" name="detalle"></textarea>
                                        </div>
                                    </div>
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



<script type="text/javascript">

</script>
