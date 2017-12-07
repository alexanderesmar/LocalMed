                    @if($errors->has())
                        <div class="alert alert-warning" role="alert">
                            @foreach ($errors->all() as $error)
                            <div>{{ $error }}</div>
                            @endforeach
                        </div>
                    @endif </br> 
                    <div id="" class="input-group">
                        <span class="input-group-addon">Medicamento</span>
                        {!! Form::text('medicamento', null, ['class' => 'form-control']) !!}
                    </div>
                    <br>

                    <div id="" class="input-group">
                        <span class="input-group-addon">Principio Activo</span>
                        {!! Form::text('principio_activo', null, ['class' => 'form-control']) !!}
                    </div>
                    <br>

                    <div id="" class="input-group">
                        <span class="input-group-addon">Presentacion</span>
                        {!!Form::select('id_presentacion', ['1' => 'Pastillas', '2' => 'Capsulas', '3' => 'Jarave', '4' => 'Infusión' ,'5' => 'Ampollas','6' => 'Solución' ], null, ['placeholder' => 'Elija una opcion', 'class' => 'form-control'])!!}
                    </div>
                    <br>

                    <div id="" class="input-group">
                        <span class="input-group-addon">Cantidad mg</span>
                        {!! Form::number('cantidad_mg', null, ['class' => 'form-control']) !!}
                    </div>
                    <br>

                    <div id="" class="input-group">
                        <span class="input-group-addon">Cantidad dosis</span>
                        {!! Form::number('cant_dosis', null, ['class' => 'form-control']) !!}
                    </div>
                    <br>

                    <div id="" class="input-group">
                        <span class="input-group-addon">Marca Laboratorio</span>
                        {!! Form::text('marca_laboratorio', null, ['class' => 'form-control']) !!}
                    </div>
                    <br>

                    