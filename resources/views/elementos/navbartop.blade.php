@section('navbartop')
<nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    LocalMed
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Inicio</a></li>
                    @if(!Auth::guest())
                    <!-- <li><a href="{{ url('/registro') }}">Registrar</a></li> -->

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Registrar <span class="caret"></span>
                            </a>

                            <!-- modificar el css de la clase dropdown-menu -->

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/registrar/beneficiarios') }}"><i class="fa fa-btn fa-sign-out"></i>Beneficiarios</a></li>
                                <li><a href="{{ url('/registrar/medicamentos') }}"><i class="fa fa-btn fa-sign-out"></i>Medicamentos</a></li>
                                <li><a href="{{ url('/registrar/doctores') }}"><i class="fa fa-btn fa-sign-out"></i>Doctores</a></li>
                                <li><a href="{{ url('/registrar/medcenter') }}"><i class="fa fa-btn fa-sign-out"></i>Centros Médicos</a></li>
                                <li><a href="{{ url('/registrar/patologias') }}"><i class="fa fa-btn fa-sign-out"></i>Patologias</a></li>
                            </ul>
                        </li>

                    <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Listar <span class="caret"></span>
                            </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('listar/beneficiarios') }}"><i class="fa fa-btn fa-sign-out"></i>Beneficiarios</a>
                            </li>
                            <li><a href="{{ url('/listar/medicamentos') }}"><i class="fa fa-btn fa-sign-out"></i>Medicamentos</a>
                            </li>
                            <li><a href="{{ url('/listar/doctores') }}"><i class="fa fa-btn fa-sign-out"></i>Doctores</a>
                            </li>
                            <li><a href="{{ url('/listar/medcenter') }}"><i class="fa fa-btn fa-sign-out"></i>Centros Médicos</a>
                            </li>
                            <li><a href="{{ url('/listar/patologias') }}"><i class="fa fa-btn fa-sign-out"></i>Patologias</a>
                            </li>
                        </ul>
                    </li>
                @endif
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Entrar</a></li>
                        <li><a href="{{ url('/register') }}">Registrarse</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Cerrar sesión</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
               @yield('breadcrumb1')
        </div>
    </nav>
@stop