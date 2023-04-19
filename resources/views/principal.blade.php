<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/body.css">
    <link rel="stylesheet" href="/assets/css/opcoes.css">
    <script type="text/javascript" src="/assets/js/script.js"></script>
    <script src="https://kit.fontawesome.com/a97d3ea7a7.js" crossorigin="anonymous"></script>
    <title>Limeira QR</title>
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
                            session()->get('usuario')['nome']
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

    <h2 class="subtitulo">O que deseja encontrar?</h2>

    <!--Section main-->
    <section class="main">
        <br>
        <div class="opcoes">
            <figure>
                <a href="lanchonete">
                    <img src="assets/img/principal/lanchenote.jpeg" alt="Foto de Lanchonete" class="imagem">
                    <figcaption class="legenda">Lanchonetes</figcaption>
                </a>
            </figure>
        </div>

        <div class="opcoes">
            <figure>
                <a href="pizzaria">
                    <img src="assets/img/principal/pizzaria.jpeg" alt=" Foto de Pizzarias" class="imagem">
                    <figcaption class="legenda">Pizzarias</figcaption>
                </a>
            </figure>
        </div>

        <div class="opcoes">
            <figure>
                <a href="bar">
                    <img src="assets/img/principal/foto-do-bar.jpeg" alt="Foto de Bares" class="imagem">
                    <figcaption class="legenda">Bares</figcaption>
                </a>
            </figure>
        </div>

        <div class="opcoes">
            <figure>
                <a href="restaurante">
                    <img src="assets/img/principal/restaurante.jpeg" alt="lanchonete" class="imagem">
                    <figcaption class="legenda ">Restaurantes</figcaption>
                </a>
            </figure>
        </div>
    </section>
    <!--Section main-->
</body>
<script src="/assets/js/controle-acesso.js"></script>
</html>