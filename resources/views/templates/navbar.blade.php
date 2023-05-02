@extends('templates.master')

@section('navbar')
    <nav>
        <a href="/" class="link-logo">
            <img src="/assets/img/principal/logo.png" alt="Logo" class="logo">
        </a>

        <h1 class="title" class="titulo">Aqui você encontra os melhores lugares!</h1>

        <ul class="ul-principal">

            @if(!session()->has('usuario') &&
                !session()->has('cliente'))
                <li class="li-nav">
                    <a href="#" class="bt-cad">Cadastro</a>
                    <ul class="cadastros">
                        <li><a href="cadastro">Usuário</a></li>
                        <li><a href="cadastro-cliente">Cliente</a></li>
                    </ul>
                </li>
                <li class="li-nav">
                    <a href="#" class="bt-log">Login</a>
                    <ul class="logins">
                        <li><a href="login">Usuário</a></li>
                        <li><a href="login-cliente">Cliente</a></li>
                    </ul>
                </li>
            @elseif(session()->has('usuario'))
                <li class="li-nav">
                    <a href="/dados-usuario/{{session()->get('usuario')['nivel']}}" class="dadosUsuario">
                        {{
                            implode(' ', array_slice(explode(' ', session()->get('usuario')['nome']), 0, 2))
                        }} 
                        <i class="fa-solid fa-user"></i>
                    </a>
                </li>
                <li class="li-nav">
                    <a href="/logout">Logout</a>
                </li>
            @else
                <li class="li-nav">
                    <a href="/dados-usuario/{{session()->get('cliente')['ativo']}}" class="dadosUsuario">
                        {{
                            implode(' ', array_slice(explode(' ', session()->get('cliente')['nome']), 0, 2))
                        }} 
                        <i class="fa-solid fa-user"></i>
                    </a>
                </li>
                <li class="li-nav">
                    <a href="/logout-cliente">Logout</a>
                </li>
            @endif
        </ul>
    </nav>


    @yield('content')

    <script src="/assets/js/controle-acesso.js"></script>
@endsection