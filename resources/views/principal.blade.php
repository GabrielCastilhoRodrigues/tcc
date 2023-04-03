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
    <!--section navbar-->
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
                    {{
                        session()->get('usuario')['nome']
                    }} 
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="button" id="menu">
                    <a href="logout" method="POST">Logout</a>
                </div>
            </div>
        @endif
    </section>
    <!--section-->

    <h2 class="subtitulo">O que deseja encontrar?</h2>

    <!--Section main-->
    <section class="main">
        <div class="opcoes">
            <figure>
                <a href="lanchonete">
                    <img src="assets/img/principal/lanchenote.jpeg" alt="Foto de Lanchonete">
                    <figcaption class="legenda">Lanchonetes</figcaption>
                </a>
            </figure>
        </div>

        <div class="opcoes">
            <figure>
                <a href="pizzaria">
                    <img src="assets/img/principal/pizzaria.jpeg" alt=" Foto de Pizzarias">
                    <figcaption class="legenda">Pizzarias</figcaption>
                </a>
            </figure>
        </div>

        <div class="opcoes">
            <figure>
                <a href="bar">
                    <img src="assets/img/principal/foto-do-bar.jpeg" alt="Foto de Bares">
                    <figcaption class="legenda">Bares</figcaption>
                </a>
            </figure>
        </div>

        <div class="opcoes">
            <figure>
                <a href="restaurante">
                    <img src="assets/img/principal/restaurante.jpeg" alt=" lanchonete ">
                    <figcaption class="legenda ">Restaurantes</figcaption>
                </a>
            </figure>
        </div>
    </section>
    <!--Section main-->
</body>
</html>