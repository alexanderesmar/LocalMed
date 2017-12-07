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
                <div class="panel-heading">Listado de Centros Médicos  <a href=" {{ url('/registrar/medcenter') }}"><i class="fa fa-btn fa-sign-out"></i>+registrar nuevo</a> </div>
                
                <div class="panel-body">
                    <table>
                      <tr>
                        <th>Nombre</th>
                        <th>RIF</th>
                        <th>Tel1</th>
                        <th>Tel2</th>
                        <th>Correo</th>
                        <th>Estado</th>
                        <th>Municipio</th>
                        <th>Parroquia</th>
                        <th>Sector</th>
                        <th>Urbanismo</th>

                        <th style="border: 0px;"></th>
                      </tr>
                    @foreach ($consulta as $registro)
                      <tr>
                        <td>{{$registro->nombre}}</td>
                        <td>{{$registro->rif}}</td>
                        <td>{{$registro->tel1}}</td>
                        <td>{{$registro->tel2}}</td>
                        <td>{{$registro->correo}}</td>
                        <td>{{$registro->id_estado}}</td>
                        <td>{{$registro->id_municipio}}</td>
                        <td>{{$registro->id_parroquia}}</td>
                        <td>{{$registro->id_sector}}</td>
                        <td>{{$registro->id_urbanismo}}</td>
                        <td style="border: 0px;background-color: #fff;">

                        {!! Form::open(['action' => ['MedcenterController@editar',$registro->id],'method' => 'POST']) !!}

                        <button type="submit" class="btn btn-warning"> <a href="{{url('/editar/medcenter/'.$registro->id ) }}"></a> Modificar</button>
                        {{-- {!!Form::submit('Modificar',  ['class'=>'btn btn-primary pull-right'])!!} --}}

                        {!! Form::close() !!}
                         

                        {!! Form::open(['action' => ['MedcenterController@borrar',$registro->id],'method' => 'POST']) !!}
                        <button type="submit" class="btn btn-danger"><a href="{{url('/borrar/medcenter/'.$registro->id ) }}"></a>Eliminar</button>
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

