<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/restaurante.css">
    <link rel="stylesheet" type="text/css" href="assets/css/body.css">
    <link rel="stylesheet" href="/assets/css/opcoes.css"> 
    <script type="text/javascript" src="/assets/js/script.js"></script>
	<script src="https://kit.fontawesome.com/a97d3ea7a7.js" crossorigin="anonymous"></script>
    <title>Restaurante</title>
</head>
<body>
    <section class="navbar">
        <div class="logo">
            <a href="/">
                <img src="/assets/img/principal/logo.png" alt="Logo">
            </a>
        </div>

        <h1 class="title">Aqui você encontra os melhores lugares!</h1>

        @if(!session()->has('usuario'))
            <div class="button" id="menu">
                <a href="cadastro">Cadastro</a>
                <a href="login">Login</a>
            </div>
        @else
            <div class="logado">
                <div class="usuario">
                    <a href="/dados-usuario/{{session()->get('usuario')['nivel']}}" class="dadosUsuario">
                        {{
                            session()->get('usuario')['nome']
                        }} 
                        <i class="fa-solid fa-user"></i>
                    </a>
                </div>
                <div class="button" id="menu">
                    <a href="/logout">Logout</a>
                </div>
            </div>
        @endif
    </section>

    <div class="titulo">
        <strong><p id="topo">BEM VINDO AOS MELHORES RESTAURANTES DA CIDADE!</p></strong>
        <p>Aqui você encontra os restaurantes mais saborosos! </p>
    </div>

    <section class="main">
        <div class="opcoes">
            <figure>
                <a href="#">
                    <img src="assets/img/rastaurantes/outback.jpeg" alt="outback" class="foto-item">
                    <figcaption class="legenda">
                        Outback
                    </figcaption>
                </a>
            </figure>
        </div>

        <div class="opcoes">
            <figure>
                <a href="#">
                    <img src="assets/img/rastaurantes/guaiba.jpeg" alt="Guaiba" class="foto-item">
                    <figcaption class="legenda">
                        Guaíba
                    </figcaption>
                </a>
            </figure>
        </div>

        <div class="opcoes">
            <figure>
                <a href="#">
                    <img src="assets/img/rastaurantes/rei.jpeg" alt="Rei dos Pampas" class="foto-item">
                    <figcaption class="legenda">
                        Rei dos Pampas
                    </figcaption>
                </a>
            </figure>
        </div>

        <div class="opcoes">
            <figure>
                <a href="jangada">
                    <img src="assets/img/rastaurantes/jangada.jpeg" alt="maluca" class="foto-item">
                    <figcaption class="legenda">
                        Jangada
                    </figcaption>
                </a>
            </figure>
        </div>
    </section>  
</body>
</html>