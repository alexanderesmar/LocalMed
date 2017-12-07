@extends('elementos.basicos')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Registar Nuevo Medicamento</div>

                <div class="panel-body">
                    {!! Form::open(['action' => 'MedicamentoController@store', 'method' => 'POST']) !!}

                    @if($errors->has())
                        <div class="alert alert-warning" role="alert">
                            @foreach ($errors->all() as $error)
                            <div>{{ $error }}</div>
                            @endforeach
                        </div>
                    @endif </br> 
					@include('medicamento.form')
					<div class="form-group">
                    <div class="input-group">
                    <span class="input-group-btn">
                    {!!Form::button('Limpiar Formulario', ['type' => 'reset', 'class'=>'btn btn-danger'])!!}
                    </span>
                    {!!Form::submit('Guardar', ['class'=>'btn btn-primary pull-right'])!!}
                    </div>
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
