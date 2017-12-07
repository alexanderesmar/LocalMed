<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LocalMed | @yield('title')</title>

    <!-- Fonts -->
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous"> --}}

    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

    {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700"> --}}

    <link rel="stylesheet" href="{{ asset('css/lato.css') }}">

    <!-- Styles -->

    {{-- <link rel="stylesheet" href="{{ asset('css/twitter-bootstrap3.3.6.css') }}"> --}}

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    @yield('navbartop')

    <?php $ok=array_search( 'login', explode('/', $_SERVER['PHP_SELF']) );

    if ($ok==false) { $ok=array_search( 'register', explode('/', $_SERVER['PHP_SELF']) ); } ?>

    @if (Auth::guest() && $ok==false )
    @yield('no_logued')
    @else
    @yield('content')
    @endif 

    <!-- JavaScripts -->
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script> --}}

    <script src="{{ asset('js/jquery.min.js') }}" ></script>

    <script src="{{ asset('js/bootstrap.min.js') }}" ></script>


    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script> --}}
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
