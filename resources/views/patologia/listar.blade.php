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
                <div class="panel-heading">Listado Patologias  <a href=" {{ url('/') }}/registrar/patologiaes"><i class="fa fa-btn fa-sign-out"></i>+registrar nuevo</a> </div>
                
                <div class="panel-body">
                    <table>
                      <tr>
                        <th>Patologia</th>
                        <th>Abreviación</th>
                        <th>Ideopatia</th>
                        <th>Risesgo Contagio</th>
                        <th>Transmisión</th>
                        <th style="border: 0px;"></th>
                      </tr>
                    @foreach ($consulta as $registro)
                      <tr>
                        <td>{{$registro->patologia}}</td>
                        <td>{{$registro->abreviacion}}</td>
                        <td>{{$registro->ideopatia}}</td>
                        <td>{{$registro->riesgo_contagio}}</td>
                        <td>{{$registro->transmision}}</td>
                        <td style="border: 0px;background-color: #fff;">
                        
                        {!! Form::open(['action' => ['PatologiaController@editar',$registro->id],'method' => 'POST']) !!}

                        <button type="submit" class="btn btn-warning"> <a href="{{url('/editar/patologia/'.$registro->id ) }}"></a> Modificar</button>
                        {{-- {!!Form::submit('Modificar',  ['class'=>'btn btn-primary pull-right'])!!} --}}

                        {!! Form::close() !!}

 
                        {!! Form::open(['action' => ['PatologiaController@borrar',$registro->id],'method' => 'POST']) !!}
                        <button type="submit" class="btn btn-danger"><a href="{{url('/borrar/patologia/'.$registro->id ) }}"></a>Eliminar</button>
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

