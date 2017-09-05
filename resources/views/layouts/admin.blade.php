<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        {{ config('app.name', 'MktCCRep') }} :: @yield('title', 'MktCCRep')
    </title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/otros.css" rel="stylesheet">
    <link href="http://cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
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
                        {{ config('app.name', 'MktCCRep') }} 
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Ingresar</a></li>
                            <!--
                            <li><a href="{{ url('/register') }}">Register</a></li>
                            -->
                        @else
                            <li {{{ (Request::is('home') ? 'class=active' : '') }}}><a href="{{ url('/home') }}">Dashboard</a></li>
                            <li {{{ (Request::is('reportes') ? 'class=active' : '') }}}><a href="{{ url('/reportes') }}">Reportes</a></li>
                            <li {{{ (Request::is('ayuda') ? 'class=active' : '') }}}><a href="{{ url('/ayuda') }}">Ayuda</a></li>
                            <li {{{ (Request::is('about') ? 'class=active' : '') }}}><a href="{{ url('/about') }}">Acerca de..</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3 col-md-2 sidebar">
                    <ul class="nav nav-sidebar">
                        <li {{{ (Request::is('reportes') ? 'class=active' : '') }}}>
                            <a href="/reportes">Últimas 100</a>
                        </li>
                        <li {{{ (Request::is('reportes/dia') ? 'class=active' : '') }}}>
                            <a href="/reportes/dia">Último día</a>
                        </li>
                        <li {{{ (Request::is('reportes/semana') ? 'class=active' : '') }}}>
                            <a href="/reportes/semana">Semana pasada</a>
                        </li>
                        <li {{{ (Request::is('reportes/mes') ? 'class=active' : '') }}}>
                            <a href="/reportes/mes">Mes pasado</a>
                        </li>
                        <li {{{ (Request::is('reportes/personalizado') ? 'class=active' : '') }}}>
                            <a href="/reportes/personalizado">Personalizado</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-1.12.4.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="/js/app.js"></script>
    @stack('scripts')
</body>
</html>
