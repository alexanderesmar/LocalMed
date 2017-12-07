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
                <div class="panel-heading">Listado Doctores  <a href=" {{ url('/') }}/registrar/doctores"><i class="fa fa-btn fa-sign-out"></i>+registrar nuevo</a> </div>
                
                <div class="panel-body">
                    <table>
                      <tr>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Cedula</th>
                        <th>Telefono</th>
                        <th>Correo</th>
                        <th style="border: 0px;"></th>
                      </tr>
                    @foreach ($consulta as $registro)
                      <tr>
                        <td>{{$registro->nombres}}</td>
                        <td>{{$registro->apellidos}}</td>
                        <td>{{$registro->ci}}</td>
                        <td>{{$registro->tel}}</td>
                        <td>{{$registro->correo}}</td>
                        <td style="border: 0px;background-color: #fff;">
                        
                        {!! Form::open(['action' => ['DoctorController@editar',$registro->id],'method' => 'POST']) !!}

                        <button type="submit" class="btn btn-warning"> <a href="{{url('/editar/doctor/'.$registro->id ) }}"></a> Modificar</button>
                        {{-- {!!Form::submit('Modificar',  ['class'=>'btn btn-primary pull-right'])!!} --}}

                        {!! Form::close() !!}

                        {!! Form::open(['action' => ['DoctorController@borrar',$registro->id],'method' => 'POST']) !!}
                        <button type="submit" class="btn btn-danger"><a href="{{url('/borrar/doctor/'.$registro->id ) }}"></a>Eliminar</button>
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

