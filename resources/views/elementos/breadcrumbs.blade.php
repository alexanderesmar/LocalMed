@section('breadcrumb1')
<?php 

$navegador=  str_replace('/index.php', '', $_SERVER['PHP_SELF']);
$navegador= explode('/', $navegador);

?>
<style>
ul.breadcrumb {
    padding: 10px 16px;
    list-style: none;
    /*background-color: #eee;*/
}
ul.breadcrumb li {
    display: inline;
    font-size: 14px;
}
ul.breadcrumb li+li:before {
    padding: 8px;
    color: black;
    content: "/\00a0";
}
ul.breadcrumb li a {
    color: #0275d8;
    text-decoration: none;
}
ul.breadcrumb li a:hover {
    color: #01447e;
    text-decoration: underline;
}
</style>

<ul class="breadcrumb">
    <li><a href="{{ url('/') }} ">Inicio</a></li>
    <?php $surf='http://'.$_SERVER['HTTP_HOST'].'/index.php/'; ?>
        @for ($i=0; $i < sizeof($navegador)-1 ; $i++)
            @if($i>0)
            <?php $surf.=$navegador[$i]; ?>
              <li><a href="{{ $surf }} ">{{$navegador[$i]}}</a></li>
            @endif
        @endfor
    <li>{{$navegador[$i]}}</li>
</ul>
@stop