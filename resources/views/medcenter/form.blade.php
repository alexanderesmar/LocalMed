
                    @if($errors->has())
                        <div class="alert alert-warning" role="alert">
                            @foreach ($errors->all() as $error)
                            <div>{{ $error }}</div>
                            @endforeach
                        </div>
                    @endif </br> 
                    <div id="" class="input-group">
                        <span class="input-group-addon">Nombre</span>
                        {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
                    </div>
                    <br>

                    <div id="" class="input-group">
                        <span class="input-group-addon">RIF</span>
                        {!! Form::text('rif', null, ['class' => 'form-control','placeholder'=>'G-12345678-9 (opcional)']) !!}
                    </div>
                    <br>

                    <div id="" class="input-group">
                        <span class="input-group-addon">Telefono 1</span>
                        {!! Form::number('tel1', null, ['class' => 'form-control','placeholder'=>'solo números (opcional)']) !!}
                        <span class="input-group-addon">Telefono 2</span>
                        {!! Form::number('tel2', null, ['class' => 'form-control','placeholder'=>'solo números (opcional)']) !!}
                    </div>
                    <br>                  

                    <div id="" class="input-group">
                        <span class="input-group-addon">Correo</span>
                        {!! Form::text('correo', null, ['class' => 'form-control','placeholder'=>'(opcional)']) !!}
                    </div>
                    <br>

                    <div id="" class="input-group">
                    <span class="input-group-addon">Tipo Centro Médico</span>
                    {!!Form::select('tipo', ['farmacia' => 'FARMACIA', 'HOSPITAL' => 'hospital', 'cdi' => 'CDI'], null, ['placeholder' => 'Elija una opcion', 'class' => 'form-control'])!!}
                    </div>
                    <br>
                    <div id="" class="input-group">
                    @include('elementos.formregistrodireccion')
                    </div>
                    