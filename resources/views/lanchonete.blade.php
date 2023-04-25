<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/lanchonete.css">
    <link rel="stylesheet" type="text/css" href="assets/css/body.css">
    <link rel="stylesheet" href="/assets/css/opcoes.css">
    <script type="text/javascript" src="/assets/js/script.js"></script>
	<script src="https://kit.fontawesome.com/a97d3ea7a7.js" crossorigin="anonymous"></script>
    <title>Lanchonete</title>
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
                        <li><a href="#">Usuário</a></li>
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

    <div class="subtitulo">
        <strong><p id="topo">BEM VINDO AOS MELHORES LANCHES DA CIDADE!</p></strong>
        <p>Aqui você encontra os melhores lanches, porções e bebidas! </p>
    </div>

    <section class="main">
        <div class="opcoes">
            <figure>
                <a href="#">
                    <img src="assets/img/lanchonete/maluca.jpeg" alt="maluca" class="foto-item">
                    <figcaption class="legenda">
                        Maluca Lanches
                    </figcaption>
                </a>
            </figure>
        </div>
        <div class="opcoes">
            <figure>
                <a href="#">
                    <img src="assets/img/lanchonete/brothers.jpeg" alt="brothers" class="foto-item">
                    <figcaption class="legenda">
                        Brothers Lanches
                    </figcaption>
                </a>
            </figure>
        </div>
        <div class="opcoes">
            <figure>
                <a href="#">
                    <img src="assets/img/lanchonete/bravus.png" alt="bravus" class="foto-item">
                    <figcaption class="legenda">
                        Bravus Hamburgueria
                    </figcaption>
                </a>
            </figure>
        </div>
        <div class="opcoes">
            <figure>
                <a href="general">
                    <img src="assets/img/lanchonete/general.png" alt="general" class="foto-item">
                    <figcaption class="legenda">
                        General Hamburgueria
                    </figcaption>
                </a>
            </figure>
        </div>
    </section> 
</body>
</html>