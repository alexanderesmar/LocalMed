
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
                        {!! Form::number('ci', null, ['class' => 'form-control']) !!}
                    </div>
                    <br>

                    <div id="" class="input-group">
                        <span class="input-group-addon">Telefono</span>
                        {!! Form::number('tel', null, ['class' => 'form-control']) !!}
                    </div>
                    <br>

                    <div id="" class="input-group">
                        <span class="input-group-addon">Correo</span>
                        {!! Form::text('correo', null, ['class' => 'form-control']) !!}
                    </div>
                    <br>

                    <div id="" class="input-group">
                    <span class="input-group-addon">Especialidad</span>
                    {!!Form::select('especialidad', ['1' => 'Traumatologo', '2' => 'Medicina General', '3' => 'Neurologo'], null, ['placeholder' => 'Especifique una Especialidad', 'class' => 'form-control'])!!}
                    </div>
                    <br>
                    