<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/restaurante.css">
    <title>Restaurante</title>
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
        <strong><p id="topo">BEM VINDO AOS MELHORES RESTAURANTES DA CIDADE!</p></strong>
        <p>Aqui você encontra os restaurantes mais saborosos! </p>
    </div>

    <main>
        <section class="itens-principais">
            <a href="jangada">
                <div class="item-grande">
                    <img src="assets/img/rastaurantes/jangada.jpeg" alt="maluca" class="foto-item">
                    <p class="card-title">JANGADA</p>
                    <p class="descricao"> Tinhamos como proposta oferecer o "melhor da culinária caiçara",
                         ao decorrer dos anos, os planos mudaram e transformamos o Jangada como uma rede especializada em peixe e frutos do mar.<br>
                     </p>
                </div>
            </a>

            <a href="#">
                <div class="item-grande">
                    <img src="assets/img/rastaurantes/outback.jpeg" alt="outback" class="foto-item">
                    <p class="card-title">OUTBACK</p>
                    <p class="descricao">Rede de restaurantes em estilo australiano que serve vários cortes de carne e frutos do mar em porções fartas.<br>
                    </p>
                </div>
            </a>

            <a href="#">
                <div class="item-grande">
                    <img src="assets/img/rastaurantes/guaiba.jpeg" alt="Guaiba" class="foto-item">
                    <p class="card-title">GUAIBA</p>
                    <p class="descricao">Ambiente familiar climatizado e estacionamento coberto.<br>
                         Nossa casa oferece conforto tanto no salão de Rodízio quanto no Self-service.
                    </p>
                </div>
            </a>

            <a href="#">
                <div class="item-grande">
                    <img src="assets/img/rastaurantes/rei.jpeg" alt="Rei dos Pampas" class="foto-item">
                    <p class="card-title">REI DOS PAMPAS</p>
                    <p class="descricao">Steakhouse ampla e familiar de grelhados nobres com buffet variado, iguarias japonesas, saladas e sobremesas.</p>
                </div>
            </a>
            
        </section>  
    </main>
</body>
</html>