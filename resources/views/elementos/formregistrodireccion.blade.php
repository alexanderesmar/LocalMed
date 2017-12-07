<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script>
function call_municipio(value){
  //var n =  document.getElementById("nombre").value;
  //alert(value);

  var url = $("#municipio_addr").val()+'/'+value;
  //alert(url);

  $.post(url, '', function (result){
    alert(result);

  });

  var datos={
                "numinipio": $("#municipio").val(),
              }

        $.ajax({
        type:'post',
        //url: 'prueba_consulta.php',
        url,
        data: datos,
        dataType: 'json',   
        //data: {nombre:n},
        success: function(d){
           $("#respa").val(d[0]);// ID de la 1era caja de texto
           $("#respa2").html('<option value="'+ d[1] +'">'+ d[1] +'</option>'); // ID de la 2da caja de texto

            }

        });
        return false;

  /*
  var datos={
                "numinipio": $("#municipio").val(),
              }

        $.ajax({
        type:'post',
        url: 'prueba_consulta.php',
        data: datos,
        dataType: 'json',   
        //data: {nombre:n},
        success: function(d){
           $("#respa").val(d[0]);// ID de la 1era caja de texto
           $("#respa2").html('<option value="'+ d[1] +'">'+ d[1] +'</option>'); // ID de la 2da caja de texto

            }

        });
        return false;
        */
}
</script>
<br>
<div >Registro de Dirección

    <div id="" class="input-group">

        <input type="text" hidden="hidden" value="{{ url('/municipios') }}" id="municipio_addr">

        <div id="" class="input-group">
        <span class="input-group-addon">Estado</span>
            <select name="estado" id="estado" class="form-control" onchange="call_municipio(this.value)">
                <option value="">Selecione</option>
                @foreach($sql_estados as $iterador_estados)
                <option value="{{$iterador_estados->id}}">{{$iterador_estados->estado}}</option>
                @endforeach
            </select>
        {{-- {!! Form::text('estado', null, ['class' => 'form-control']) !!} --}}

        <span class="input-group-addon">Municipio</span>
        {!! Form::text('municipio', null, ['class' => 'form-control', 'id'=>'municipio']) !!}
    </div>
    <br>

    <div id="" class="input-group">
        <span class="input-group-addon">Parroquia</span>
        {!! Form::text('paroquia', null, ['class' => 'form-control']) !!}
        <span class="input-group-addon">Sector</span>
        {!! Form::text('sector', null, ['class' => 'form-control']) !!}
    </div>
    <br>

    <div>

        <div style="width: 49%;float: left;" >

            <div id="" class="input-group">
                <span class="input-group-addon">Urbanismo</span>
                {!! Form::text('urbanismo', null, ['class' => 'form-control']) !!}
            </div>
            <br>

            <div id="" class="input-group">
                <span class="input-group-addon">Información <br> adicional de <br> ubicación</span>
                {!! Form::textarea('urbanismo', null, ['class' => 'form-control', 'cols'=>'20', 'rows'=>'2' ]) !!}
            </div>
            <br>


        </div>

        <div class="maps" style="width: 49%;">

            {{-- <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script> --}}

           <!--  <script type="text/javascript"
            src="http://maps.googleapis.com/maps/api/js?key=PON_TU_GMAP_KEY_AQUI&sensor=TRUE">
            </script> -->

            {{-- <script type="text/javascript"
            src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBPVKs-jyvVL_RgWuSie4qd4NbI6soS8_4&sensor=TRUE">
            </script> --}}

            {{-- <script type="text/javascript"
            src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBvM_H2uUa4AX6S8hsFuY579mWIuDu5Vtg&sensor=TRUE">
            </script> --}}

            {{-- <script src="{{ asset('js/gmapsalexapi.js') }}"></script> --}}

            {{-- <script src="{{ asset('js/gmaps.js') }}"></script> --}}

            <!-- <form id="google" name="google" action="#"> -->

            <div id="" class="input-group">
                <span class="input-group-addon">Dirección</span>
                {!! Form::text('direccion', 'Coro, Falcón', ['class' => 'form-control', 'id'=>'direccion']) !!}
            <button id="pasar" class="btn btn-info">Pasar al mapa</button>
            </div>
             
            <!-- div donde se dibuja el mapa-->
            <div name="map_canvas" id="map_canvas" style="width:700px;height:400px;"></div>
             

            <div id="" class="input-group">
                <span class="input-group-addon">Coordenadas</span>
                {!! Form::text('lat', null, ['class' => 'form-control', 'id'=>'lat']) !!}
                {!! Form::text('lng', null, ['class' => 'form-control', 'id'=>'long']) !!}
            </div>
            <br>
            
        </div>
           

    </div>
    <br>

    <div>
        
    </div>
</div>
