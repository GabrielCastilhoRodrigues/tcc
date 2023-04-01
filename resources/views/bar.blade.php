<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bar.css">
    <link rel="stylesheet" type="text/css" href="assets/css/body.css">
    <link rel="stylesheet" href="/assets/css/opcoes.css"> 
    <title>Bar</title>
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
            <div class="logado">
                <div class="usuario">
                    {{$usuario}} 
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="button" id="menu">
                    <a href="logout" method="POST">Logout</a>
                </div>
            </div>
        @endif
    </section>

    <div class="titulo">
        <strong>
            <p id="topo">BEM VINDO AOS MELHORES BARES DA CIDADE!</p>
        </strong>
        <p>Aqui você encontra os melhores drinks e petiscos!</p>
    </div>

    <section class="main">
        <div class="opcoes">
            <figure>
                <a href="#">
                    <img src="assets/img/bar//obarão.png" alt="obarao" class="foto-item">
                    <figcaption class="legenda">
                        O Barão
                    </figcaption>
                </a>
            </figure>
        </div>

        <div class="opcoes">
            <figure>
                <a href="#">
                    <img src="assets/img/bar/cascata.png" alt="cascata" class="foto-item">
                    <figcaption class="legenda">
                        Cascata do Vinho
                    </figcaption>
                </a>
            </figure>
        </div>

        <div class="opcoes">
            <figure>
                <a href="#">
                    <img src="assets/img/bar/pirata.jpeg" alt="pirata" class="foto-item">
                    <figcaption class="legenda">
                        O Pirata
                    </figcaption>
                </a>
            </figure>
        </div>

        <div class="opcoes">
            <figure>
                <a href="seattle">
                    <img src="assets/img/bar/SEATTLE.png" alt="Seattle" class="foto-item">
                    <figcaption class="legenda">
                        Seattle Music Bar
                    </figcaption>
                </a>
            </figure>
        </div>       
    </section>
</body>
</html>