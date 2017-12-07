
@if($errors->has())
    <div class="alert alert-warning" role="alert">
        @foreach ($errors->all() as $error)
        <div>{{ $error }}</div>
        @endforeach
    </div>
@endif </br> 
<div id="" class="input-group">
    <span class="input-group-addon">Patologia</span>
    {!! Form::text('patologia', null, ['class' => 'form-control']) !!}
    <span class="input-group-addon">Abreviación</span>
    {!! Form::text('apellidos', null, ['class' => 'form-control']) !!}
</div>
<br>

<div id="" class="input-group">
    <span class="input-group-addon">Medicamentos</span>
    {!! Form::text('id_medicamentos', null, ['class' => 'form-control']) !!}
</div>
<br>

<div id="" class="input-group">
    <span class="input-group-addon">Ideopatia</span>
    <table>
    <tr>
        <th>Bacterial {!! Form::checkbox('ideopatia[]', 'bacteria') !!}</th>
        <th>Viral {!! Form::checkbox('ideopatia[]', 'virus') !!}</th>
        <th>Hongos {!! Form::checkbox('ideopatia[]', 'hongos') !!}</th>
        <th>Parasitos {!! Form::checkbox('ideopatia[]', 'parasitos') !!}</th>
        <th>Genética {!! Form::checkbox('ideopatia[]', 'hereditaria') !!}</th>

    </tr>   
        
    </table>
</div>
<br>

<div id="" class="input-group">
    <span class="input-group-addon">Urgencia</span>
    {{-- {!! Form::select('urgencia', ['1' => 'baja', '2' => 'media', '3' => 'alta'], null, ['placeholder' => 'Especifique una Especialidad', 'class' => 'form-control'])!!} --}}

    {!!Form::select('urgencia', ['1' => 'Control','2' => 'Baja', '3' => 'Media', '4' => 'Alta', '5'=>'Emergencia'], null, array('multiple' => true))!!}

    <span class="input-group-addon">Riesgo Contagio</span>
    {!!Form::select('riesgo_contagio', ['1' => 'Bajo', '2' => 'Medio', '3' => 'Alto'], null, array('multiple' => true))!!}
</div>
<br>

<div id="" class="input-group">
    <span class="input-group-addon">Transmisión</span>

    <table>
    <tr>
        <th>Aire {!! Form::checkbox('transmision[]', 'Aire') !!}</th>
        <th>Agua {!! Form::checkbox('transmision[]', 'Agua') !!}</th>
        <th>Animales {!! Form::checkbox('transmision[]', 'animales') !!}</th>
        <th>Fluidos {!! Form::checkbox('transmision[]', 'fluidos') !!}</th>
        <th>Comida {!! Form::checkbox('transmision[]', 'comida') !!}</th>
        <th>Genética {!! Form::checkbox('transmision[]', 'hereditaria') !!}</th>

    </tr>
    <tr>
        <td>
            {!! Form::label('flemas', 'Flemas') !!}
            {!! Form::checkbox('transmision[]', 'flemas') !!}
        </td>
        <td>
            {!! Form::label('agua_contaminada', 'Agua Contaminada') !!}
            {!! Form::checkbox('transmision[]', 'agua_contaminada') !!}
        </td>
        <td>
            {!! Form::label('mosquito', 'Mosquito') !!}
            {!! Form::checkbox('transmision[]', 'mosquito') !!}
        </td>
        <td>
            {!! Form::label('sudor', 'Sudor') !!}
            {!! Form::checkbox('transmision[]', 'sudor') !!}
            {!! Form::label('pustulas', 'Pustulas') !!}
            {!! Form::checkbox('transmision[]', 'pustulas') !!}
        </td>
        <td>
            {!! Form::label('comida_contaminada', 'Comida Contaminada / Mal Preparada') !!}
            {!! Form::checkbox('transmision[]', 'comida_contaminada') !!}
        </td>
        <td>
            {!! Form::label('hereditaria', 'Hereditaria') !!}
            {!! Form::checkbox('transmision[]', 'hereditaria') !!}
        </td>
    </tr>
    <tr>
        <td>
            
        </td>
        <td>
            
        </td>
        <td>

        </td>
        <td>
            {!! Form::label('sangre', 'Sangre') !!}
            {!! Form::checkbox('transmision[]', 'sangre') !!}
        </td>
        <td>
            
        </td>
        <td>
            {!! Form::label('desorden_genetico', 'Desorden Genético') !!}
            {!! Form::checkbox('transmision[]', 'desorden_genetico') !!}
        </td>
    </tr>
        
    </table>

<br>

</div>
<br>

<div id="" class="input-group">
    <span class="input-group-addon">Tiempo</span>
    <table>
    <tr>
        <th>Temporal(curable) {!! Form::checkbox('tiempo[]', 'bacteria') !!}</th>
        <th>Permanente (control) {!! Form::checkbox('tiempo[]', 'virus') !!}</th>


    </tr>   
        
    </table>
</div>
<br>

