
                    @if($errors->has())
                        <div class="alert alert-warning" role="alert">
                            @foreach ($errors->all() as $error)
                            <div>{{ $error }}</div>
                            @endforeach
                        </div>
                    @endif </br> 

                    <div id="" class="input-group">
                        <span class="input-group-addon">Nombres</span>
                        {!! Form::text('nombres', null, ['class' => 'form-control']) !!}
                    </div>
                    <br>

                    <div id="" class="input-group">
                        <span class="input-group-addon">Apellidos</span>
                        {!! Form::text('apellidos', null, ['class' => 'form-control']) !!}
                    </div>
                    <br>

                    <div id="" class="input-group">
                        <span class="input-group-addon">Cedula</span>
                        {!! Form::number('ci', null, ['class' => 'form-control','placeholder'=>'Solo números']) !!}
                        <span class="input-group-addon">Carnet</span>
                        {!! Form::number('carnet', null, ['class' => 'form-control','placeholder'=>'Solo números']) !!}
                    </div>
                    <br>

                    <div id="" class="input-group">
                        <span class="input-group-addon">Telefono 1</span>
                        {!! Form::number('tel1', null, ['class' => 'form-control']) !!}
                        <span class="input-group-addon">Telefono 2</span>
                        {!! Form::number('tel2', null, ['class' => 'form-control', 'placeholder'=>'(opcional)']) !!}
                    </div>
                    <br>                  

                    <div id="" class="input-group">
                        <span class="input-group-addon">Correo</span>
                        {!! Form::text('correo', null, ['class' => 'form-control','placeholder'=>'(opcional)']) !!}
                    </div>
                    <br>

                    <div id="" class="input-group">
                    <span class="input-group-addon">Tipo</span>
                    {!!Form::select('tipo', ['usuario' => 'Usuario', 'admin' => 'Administrador', 'sudo' => 'SuperUsuario'], null, ['placeholder' => 'Elija una opcion', 'class' => 'form-control'])!!}
                    </div>
                    <br>
                    <div id="" class="input-group">
                    @include('elementos.formregistrodireccion')
                    </div>
                    