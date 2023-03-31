<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/pizzaria.css">
    <title>Pizzaria</title>
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
        <strong><p id="topo">BEM VINDO AS MELHORES PIZZARIAS!</p></strong>
        <p>Aqui você encontra pizza de vários tamanhos e sabores! </p>
    </div>

    <main>
        <section class="itens-principais">
            <a href="#">
                <div class="item-grande">
                    <img src="assets/img/pizzaria/micheluccio.png" alt="Micheluccio" class="foto-item">
                    <p class="card-title">MICHELUCCIO</p>
                    <p class="descricao">Uma referência em sabor e qualidade, melhor rodízio de pizza.
                     </p>
                </div>
            </a>

            <a href="#">
                <div class="item-grande">
                    <img src="assets/img/pizzaria/ravelly.jpeg" alt="Ravelly" class="foto-item">
                    <p class="card-title">RAVELLY</p>
                    <p class="descricao">Diversas pizzas tradicionais e especiais, além de bebidas geladas, para retirar no balcão ou receber em casa. <br>
                    </p>
                </div>
            </a>

            <a href="#">
                <div class="item-grande">
                    <img src="assets/img/pizzaria//mook.jpeg" alt="Moonk" class="foto-item">
                    <p class="card-title">MOONK</p>
                    <p class="descricao">Nosso diferencial é o formato quadrado com ingredientes de primeira e a nossa entrega que é super rápida!
                    </p>
                </div>
            </a>

            <a href="milanos">
                <div class="item-grande">
                    <img src="assets/img/pizzaria/millanos.png" alt="Millano's" class="foto-item">
                    <p class="card-title">MILLANO'S</p>
                    <p class="descricao">Cardápio variado com diversos tipos de pizzas, opções doces e borda recheada, sanduíches, clima casual.</p>
                </div>
            </a>
            
        </section>  
    </main>
</body>
</html>