<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bar.css">
    <title>Bar</title>
</head>
<body>
    <section class="navbar">
        <div class="logo">
            <a href="/">
                <img src="/assets/img/principal/logo.png" alt="Logo">
            </a>
        </div>

        @if($usuario == null && $usuario == '')
            <div class="button" id="menu">
                <a href="cadastro">Cadastro</a> |
                <a href="login">Login</a>
            </div>
        @else
            {{$usuario}}
            <div class="button" id="menu">
                <a href="logout" method="POST">Logout</a>
            </div>
        @endif
    </section>

    <div class="titulo">
        <strong>
            <p id="topo">BEM VINDO AOS MELHORES BARES DA CIDADE!</p>
        </strong>
        <p>Aqui você encontra os melhores drinks e petiscos!</p>
    </div>

    <main>
        <section class="itens-principais">
            <a href="#">
                <div class="item-grande">
                    <img src="assets/img/bar//obarão.png" alt="obarao" class="foto-item">
                    <p class="card-title">O BARÃO</p>
                    <p class="descricao">Livre para viver tudo aquilo de melhor que se tem a oferecer!
                        O Barão Music Bar traz um espírito de liberdade e curtição, em um ambiente incrível, com boa música, bebidas e uma ótima experiência gastronômica!</p>
                </div>
            </a>

            <a href="#">
                <div class="item-grande">
                    <img src="assets/img/bar/cascata.png" alt="cascata" class="foto-item">
                    <p class="card-title">CASCATA DO VINHO</p>
                    <p class="descricao">Ambiente familiar, qualidade e preços incriveis.<br>
                        Almoço, Porções, Drinks, Sucos e Chopp etc.<br>
                        Happy Hour | a partir das 17h.<br>
                    </p>
                </div>
            </a>

            <a href="#">
                <div class="item-grande">
                    <img src="assets/img/bar/pirata.jpeg" alt="pirata" class="foto-item">
                    <p class="card-title">O PIRATA</p>
                    <p class="descricao">Temos uma das melhores estruturas de Limeira e região, aqui a cerveja está sempre gelada, o drink no ponto e a porção saborosa e muito bem servida!<br>
                        Sem falar nas maravilhosas pizzas!<br>
                        Vem pro pirata!</p>
                </div>
            </a>

            <a href="seattle">
                <div class="item-grande">
                    <img src="assets/img/bar/SEATTLE.png" alt="Seattle" class="foto-item">
                    <p class="card-title">SEATLLE MUSIC BAR</p>
                    <p class="descricao">Se você ama cerveja, música, esporte e comida boa, seja muito bem-vindo a Seattle!</p>
                </div>
            </a>            
        </section>
    </main>
</body>
</html>