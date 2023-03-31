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
    <section class="navbar">
        <div class="logo">
            <a href="/">
                <img src="/assets/img/principal/logo.png" alt="Logo">
            </a>
        </div>

        <h1 class="title">Aqui você encontra os melhores lugares!</h1>

        @if($usuario == null && $usuario == '')
            <div class="button" id="menu">
                <a href="cadastro">Cadastro</a>
                <a href="login">Login</a>
            </div>
        @else
            {{$usuario}} <i class="fa-solid fa-user"></i>
            <div class="button" id="menu">
                <a href="logout" method="POST">Logout</a>
            </div>
        @endif
    </section>

    <div class="cadastro">
        <form method="POST" action="{{ route('login.conectaUsuario') }}">
            @csrf

            <label>Email</label>
            <input class="campo" type="text" name="email" placeholder="Digite seu email">

            <label>Senha</label>
            <input class="campo" type="password" name="senha" placeholder="Digite sua senha">

            <input class="confirma" type="submit" value="login">
        </form>
    </div>
    
</body>
</html>