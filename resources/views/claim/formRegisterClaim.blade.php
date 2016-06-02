@extends('layouts.app')

@section('content')
    <style type="text/css">
        .box{
            display: none;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Libro de reclamacion de {{ $productName  }}</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/reclamo') }}">
                            {{ csrf_field() }}

                            <div>
                                <label><input type="radio" name="radio-tipo" value="persona"> Persona</label>
                                <label><input type="radio" name="radio-tipo" value="empresa"> Empresa</label>
                            </div>

                            <div class="persona box">
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
                            <div class="empresa box">
                                Empresa 
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


<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('input[type="radio"]').click(function(){
            if($(this).attr("value")=="persona"){
                $(".box").not(".persona").hide();
                $(".persona").show();
            }
            if($(this).attr("value")=="empresa"){
                $(".box").not(".empresa").hide();
                $(".empresa").show();
            }
        });
    });
</script>
