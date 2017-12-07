@extends('elementos.basicos')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Doctor(a): {{ $doctor->nombres.', '.$doctor->apellidos }} </div>

                <div class="panel-body">
                    {!! Form::model($doctor, ['action' => ['DoctorController@update',$doctor->id],'method' => 'PUT']) !!}

					@include('doctor.form')
					<div class="form-group">
                    <div class="input-group">
                    <span class="input-group-btn">
                    {{-- {!!Form::button('Limpiar Formulario', ['type' => 'reset', 'class'=>'btn btn-danger'])!!} --}}
                    </span>
                    {!!Form::submit('actualizar', ['class'=>'btn btn-primary pull-right'])!!}
                    </div>
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
