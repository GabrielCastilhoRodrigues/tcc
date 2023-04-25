<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/login.css">
    <link rel="stylesheet" type="text/css" href="assets/css/body.css">
    <script type="text/javascript" src="/assets/js/script.js"></script>
    <script src="https://kit.fontawesome.com/a97d3ea7a7.js" crossorigin="anonymous"></script>
    <title>Login</title>
</head>
<body>
    <nav>
        <a href="/" class="link-logo">
            <img src="/assets/img/principal/logo.png" alt="Logo" class="logo">
        </a>

        <h1 class="title" class="titulo">Aqui você encontra os melhores lugares!</h1>

        <ul class="ul-principal">

            @if(!session()->has('usuario'))
                <li class="li-nav">
                    <a href="#" class="bt-cad">Cadastro</a>
                    <ul class="cadastros">
                        <li><a href="cadastro">Usuário</a></li>
                        <li><a href="#">Cliente</a></li>
                    </ul>
                </li>
                <li class="li-nav">
                    <a href="#" class="bt-log">Login</a>
                    <ul class="logins">
                        <li><a href="login">Usuário</a></li>
                        <li><a href="#">Cliente</a></li>
                    </ul>
                </li>
            @else
                <li class="li-nav">
                    <a href="dados-usuario/{{session()->get('usuario')['nivel']}}" class="dadosUsuario">
                        {{
                            implode(' ', array_slice(explode(' ', session()->get('usuario')['nome']), 0, 2))
                        }} 
                        <i class="fa-solid fa-user"></i>
                    </a>
                </li>
                <li class="li-nav">
                    <a href="/logout">Logout</a>
                </li>
            @endif
        </ul>
    </nav>

    <div class="cadastro">
        @if (session()->has('error-1'))
            <div class="error">
                <strong>{{session('error-1')}}</strong>
            </div>
        @elseif(session()->has('error-2'))
            <div class="error">
                <strong>{{session('error-2')}}</strong>
            </div>
        @endif

        <form method="POST" action="{{ route('login.conectaUsuario') }}">
            @csrf

            <label>Email</label>
            <input class="campo" type="text" name="email" placeholder="Digite seu email">

            <label>Senha</label>
            <input class="campo" type="password" name="senha" placeholder="Digite sua senha">

            <div class="logar">
                <input class="confirma" type="submit" value="Login">
                <a href="esqueceu-senha" class="forgot">Esqueceu sua senha?</a>
            </div>
        </form>
    </div>
    
</body>
<script src="/assets/js/controle-acesso.js"></script>
</html>