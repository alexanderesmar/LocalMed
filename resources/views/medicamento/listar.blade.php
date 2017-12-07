@extends('elementos.basicos')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                @if(Session::has('message'))
                <div class="alert alert-success alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <STRONG>{{Session::get('message')}}</STRONG>
                </div>
                @endif
                <div class="panel-heading">Listado de Medicamentos  <a href=" {{ url('/registrar/medicamentos') }}"><i class="fa fa-btn fa-sign-out"></i>+registrar nuevo</a> </div>
                
                <div class="panel-body">
                    <table>
                      <tr>
                        <th>Medicamento</th>
                        <th>Principio Activo</th>
                        <th>Presentación</th>
                        <th>Cantidad mg</th>
                        <th>Cantidad dosis</th>
                        <th>Marca/laboratorio</th>
                        <th style="border: 0px;"></th>
                      </tr>
                    @foreach ($consulta as $registro)
                      <tr>
                        <td>{{$registro->medicamento}}</td>
                        <td>{{$registro->principio_activo}}</td>
                        <td>{{$registro->id_presentacion}}</td>
                        <td>{{$registro->cantidad_mg}}</td>
                        <td>{{$registro->cant_dosis}}</td>
                        <td>{{$registro->marca_laboratorio}}</td>
                        <td style="border: 0px;background-color: #fff;">

                        {!! Form::open(['action' => ['MedicamentoController@editar',$registro->id],'method' => 'POST']) !!}

                        <button type="submit" class="btn btn-warning"> <a href="{{url('/editar/medicamento/'.$registro->id ) }}"></a> Modificar</button>
                        {{-- {!!Form::submit('Modificar',  ['class'=>'btn btn-primary pull-right'])!!} --}}

                        {!! Form::close() !!}

                        {!! Form::open(['action' => ['MedicamentoController@borrar',$registro->id],'method' => 'POST']) !!}
                        <button type="submit" class="btn btn-danger"><a href="{{url('/borrar/medicamento/'.$registro->id ) }}"></a>Eliminar</button>
                        {!! Form::close() !!}
                        </td>
                      </tr>
                    @endforeach
                    </table>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

