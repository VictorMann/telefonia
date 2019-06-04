<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>Telefonia 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/libraries/bootstrap4.3.1.min.css') }}" rel="stylesheet">

    <link href="{{ asset('fonts/fontawesome/css/solid.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/template.css') }}" rel="stylesheet">
    <link href="{{ asset('css/geral.css') }}" rel="stylesheet">
    @yield('styles')
</head>
<body>

    <div class="ctn-base">

        <!-- Menu de navegação -->
        @include('partials.menu')

        <div class="ctn-content-base">
            <div class="topo-site d-flex">
                <div class="topo-logo"><img src="{{ asset('imgs/geral/logotw-flat.png') }}"></div> <!-- logo -->
                <div class="d-flex align-items-center"><a href="https://www.twsolutions.com.br/"><i class="fas fa-globe-americas icon-topo"></i> Site: <b>www.twsolutions.com.br</b></a></div> <!-- logo -->
                <div class="d-flex align-items-center"><a href="javascript:;"><i class="fas fa-phone icon-topo"></i> Atendimento: <b>(11) 3230-1933</b></a></div> <!-- logo -->
                <div class="d-flex align-items-center"><a href="mailto:contato@twsolutions.com.br?Subject=Contato%20via%20Site"><i class="fas fa-envelope icon-topo"></i> contato@twsolutions.com.br</a></div> <!-- logo -->
                <div class="d-flex align-items-center ml-auto position-relative ctn-user-config">
                    <span class="avatar" style="background-image: url({{ asset('imgs/geral/avatar.png') }})"></span>
                    <span class="nome-user">{{ Auth::user()->name ?? 'Usuário' }}</span>
                    <ul class="list-unstyled user-menu">
                        <li><a href="{{ route('admin.users.perfil') }}">Meu Perfil</a></li>
                        <li><a href="{{ route('logout') }}">Sair</a></li>
                    </ul>
                </div> <!-- logo -->
                <div class="d-flex align-items-center"><i class="fas fa-bell icon-topo"></i></div> <!-- logo -->
            </div>
            <div class="pag-title">

                <!-- Breadcrumb -->
                @include('partials.breadcrumb')

            </div>

            <div class="content-site">

                @yield('content')

            </div>
        </div>
    </div>

    <script src="{{ asset('js/libraries/jquery.min.js') }}"></script>
    <script src="{{ asset('js/libraries/popper.min.js') }}"></script>
    <script src="{{ asset('js/libraries/bootstrap4.3.1.min.js') }}"></script>
    <script src="{{ asset('fonts/fontawesome/js/fontawesome.min.js') }}"></script> <!-- font -->
    <script src="{{ asset('fonts/fontawesome/js/solid.min.js') }}"></script> <!-- font -->
    <script src="{{ asset('js/geral.js') }}"></script>
    @yield('scripts')
</body>
</html>
