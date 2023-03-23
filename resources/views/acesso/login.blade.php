<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/login.css">
    <script type="text/javascript" src="/assets/js/script.js"></script>
    <script src="https://kit.fontawesome.com/e6a3d86f14.js" crossorigin="anonymous"></script>
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

        <div class="button" id="menu">
            <a href="cadastro">Cadastro</a> |
            <a href="login">Login</a>
        </div>
    </section>

    <div class="cadastro">
        <form method="POST" action="{{ route('login.conectaUsuario') }}">
            @csrf

            <label>Email</label>
            <input class="campo" type="text" name="email" placeholder="Digite seu email">

            <label>Senha</label>
            <input class="campo" type="text" name="senha" placeholder="Digite sua senha">

            <br>
            <input type="submit" value="login">
        </form>
    </div>
    
</body>
</html>