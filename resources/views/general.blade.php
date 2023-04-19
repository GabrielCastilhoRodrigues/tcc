<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/estabelecimento-comida.css">
    <link rel="stylesheet" type="text/css" href="assets/css/body.css">
    <link rel="stylesheet" href="/assets/css/opcoes.css"> 
    <script src="https://kit.fontawesome.com/e6a3d86f14.js" crossorigin="anonymous"></script>
    <title>General Hamburgueria</title>
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

    <nav class="navegacao">
        <div class="logo-bar">
            General Burgues
        </div>

        <div class="menu-btn">
            <i class="fa fa-bars fa-2x"></i>
        </div>

        <ul class="menu-ul">
            <li><a href="#sobre ">Sobre</a></li>
            <li><a href="#endereco ">Endereço</a></li>
            <li><a href="#contato ">Contato</a></li>
        </ul>
    </nav>

    <div class="foto-responsiva ">
        <img src="assets/img/banner-responsivo/general-responsivo.png " alt=" ">
    </div>

    <div class="foto-bar ">
        <img src="assets/img/banners/general-burguer.png " alt=" ">
    </div>

    <div class="titulo">
        <h1>Hamburguers e Sanduiches</h1>
    </div>


    <div class="container teste ">
        <!--container teste-->
        <div class="foto ">
            <img src="assets/img/Lanches/Bacon.jpeg " alt=" ">
            <h2>R$15,00</h2>
            <h3>Bacon</h3>
        </div>

        <div class="foto ">
            <img src="assets/img/Lanches/Bauru.jpeg " alt=" ">
            <h2>R$15,00</h2>
            <h3>Bauru</h3>
        </div>

        <div class="foto ">
            <img src="assets/img/Lanches/Coração-de-Galinha.jpeg " alt=" ">
            <h2>R$16,00</h2>
            <h3>Coração Galinha</h3>
        </div>


        <div class="foto ">
            <img src="assets/img/Lanches/Carne.jpeg " alt=" ">
            <h2>R$18,00</h2>
            <h3>Carne</h3>
        </div>

        <div class="foto ">
            <img src="assets/img/Lanches/Lombo.jpeg " alt=" ">
            <h2>R$15,00</h2>
            <h3>Lombo</h3>
        </div>

        <div class="foto ">
            <img src="assets/img/Lanches/Peito-de-Peru.jpeg " alt=" ">
            <h2>R$17,00</h2>
            <h3>Peito de Peru</h3>
        </div>
        <div class="foto ">
            <img src="assets/img/Lanches/Pão-de-Alho.jpeg " alt=" ">
            <h2>R$25,00</h2>
            <h3>Pão de Alho</h3>
        </div>
        <div class="foto ">
            <img src="assets/img/Lanches/Queijo.jpeg " alt=" ">
            <h2>R$16,00</h2>
            <h3>Queijo</h3>
        </div>
        <div class="foto ">
            <img src="assets/img/Lanches/Linguiça.jpeg " alt=" ">
            <h2>R$18,00</h2>
            <h3>Linguiça</h3>
        </div>
        <div class="foto ">
            <img src="assets/img/Lanches/Pernil.jpeg " alt=" ">
            <h2>R$15,00</h2>
            <h3>Pernil</h3>
        </div>
        <div class="foto ">
            <img src="assets/img/Lanches/Integral.jpeg " alt=" ">
            <h2>R$16,00</h2>
            <h3>Integral</h3>
        </div>
        <div class="foto ">
            <img src="assets/img/Lanches/Natural.jpeg " alt=" ">
            <h2>R$16,00</h2>
            <h3>Natural</h3>
        </div>
    </div>
    <!--container teste-->

    <footer>
        <div class="main-content ">
            <div class="left box " id="sobre ">
                <h2>Sobre nós</h2>
                <div class="content ">
                    <p>Lorem ipsum dolor sit amet consectetur adipsicing elit.amet iste facilis harum eos vel incidunt distinctio corrupti iure? rem</p>

                    <div class="social">
                        <a href=" "><span class="fab fa-facebook-f "></span></a>
                        <a href=" "><span class="fab fa-twitter "></span></a>
                        <a href=" "><span class="fab fa-instagram "></span></a>
                    </div>
                </div>
                <!--content-->
            </div>
            <!--Left box-->
            <div class="center box " id="endereco ">
                <h2>Endereço</h2>
                <div class="content ">
                    <div class="place ">
                        <span class="fas fa-map-marker "></span>
                        <span class="text ">Av.Brasil, nova capital</span>
                    </div>

                    <div class="phone ">
                        <span class="fas fas fa-phone-alt "></span>
                        <span class="text ">+55 61 9999-9999</span>
                    </div>

                    <div class="email ">
                        <span class="fas fa-envelope "></span>
                        <span class="text ">exemplo@exemplo.com</span>
                    </div>
                </div>
            </div>
            <div class="right box " id="contato ">
                <h2>Contato</h2>
                <div class="content ">
                    <form action=" ">
                        <div class="email ">
                            <div class="text ">E-mail</div>
                            <input type="email " required>
                        </div>

                        <div class="msg ">
                            <div class="text ">Mensagem</div>
                            <textarea rows="2 " cols="25 " required></textarea>
                        </div>
                        <div class="btn ">
                            <button type="submit ">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--main-content-->
        <div class="bottom ">
            <div class="center ">
                <span class="credit ">Criado por <a href="# "> João Manduca</a></span>
                <span class="far fa-copyright ">2021 Todos os direitos reservados</span>
            </div>
        </div>
    </footer>


</body>
<script src="/assets/js/controle-acesso.js"></script>
</html>