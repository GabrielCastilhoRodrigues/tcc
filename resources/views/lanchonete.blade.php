<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/lanchonete.css">
    <title>Lanchonete</title>
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
        <strong><p id="topo">BEM VINDO AOS MELHORES LANCHES DA CIDADE!</p></strong>
        <p>Aqui você encontra os melhores lanches, porções e bebidas! </p>
    </div>

    <main>
        <section class="itens-principais">
            <a href="#">
                <div class="item-grande">
                    <img src="assets/img/lanchonete/maluca.jpeg" alt="maluca" class="foto-item">
                    <p class="card-title">MALUCA LANCHES</p>
                    <p class="descricao"> Somos considerado o mais famoso e mais gostoso da cidade!<br>
                        Toda semana tem novidade no nosso cardápio, tenho certeza que você não vai se arrepender de experimentar nossos lanches!
                     </p>
                </div>
            </a>

            <a href="#">
                <div class="item-grande">
                    <img src="assets/img/lanchonete/brothers.jpeg" alt="brothers" class="foto-item">
                    <p class="card-title">BROTHERS LANCHES</p>
                    <p class="descricao">Aqui você se sente em casa, diversas opções de lanches, porções, bebidas e aquela cerveja trincando! <br>
                    </p>
                </div>
            </a>

            <a href="#">
                <div class="item-grande">
                    <img src="assets/img/lanchonete/bravus.png" alt="bravus" class="foto-item">
                    <p class="card-title">BRAVUS HAMBURGUERIA</p>
                    <p class="descricao">Um ambiente diferenciado e cardápio recheado de novidades!<br>
                    <br>
                    Bora conhecer?
                    </p>
                </div>
            </a>

            <a href="general">
                <div class="item-grande">
                    <img src="assets/img/lanchonete/general.png" alt="general" class="foto-item">
                    <p class="card-title">GENERAL HAMBURGUERIA</p>
                    <p class="descricao">Baseada no conceito americano, trabalha com produtos frescos e regionais.</p>
                </div>
            </a>
            
        </section>  
    </main>
</body>
</html>