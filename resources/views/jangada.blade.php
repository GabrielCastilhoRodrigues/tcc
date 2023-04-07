<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/jangada.css">
    <link rel="stylesheet" type="text/css" href="assets/css/body.css">
    <link rel="stylesheet" href="/assets/css/opcoes.css"> 
    <script src="https://kit.fontawesome.com/e6a3d86f14.js" crossorigin="anonymous"></script>
    <title>Jangada</title>
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

    <nav>
        <div class="logo">Jangada</div>

        <div class="menu-btn">
            <i class="fa fa-bars fa-2x"></i>
        </div>

        <ul>

            <li><a href="#sobre">Sobre</a></li>
            <li><a href="#endereco">Endereço</a></li>
            <li><a href="#contato">Contato</a></li>

        </ul>
    </nav>

    <div class="foto-responsiva">
        <img src="assets/img/banner-responsivo/jangada-responsivo.png" alt="">
    </div>

    <div class="foto-bar">
        <img src="assets/img/banners/jangada.png" alt="">
    </div>

    <div class="titulo">
        <h1>Peixes e Frutos do Mar</h1>
    </div>


    <div class="container teste">
        <!--container teste-->
        <div class="foto">
            <img src="assets/img/peixe-frutos/camarao-grelhado.webp" alt="">
            <h2>18,00</h2>
            <h3>Camarão Grelhado</h3>
        </div>

        <div class="foto">
            <img src="assets/img/peixe-frutos/cavala-c-groselha.jpg" alt="">
            <h2>R$18,00</h2>
            <h3>Cavala c/ Groselha</h3>
        </div>

        <div class="foto">
            <img src="assets/img/peixe-frutos/sopa-camarao.webp" alt="">
            <h2>R$20,00</h2>
            <h3>Sopa de Camarão</h3>
        </div>


        <div class="foto">
            <img src="assets/img/peixe-frutos/peixe-com-legumes.webp" alt="">
            <h2>R$20,00</h2>
            <h3>Peixe c/ Legumes</h3>
        </div>

        <div class="foto">
            <img src="assets/img/peixe-frutos/paella-espanhola.webp" alt="">
            <h2>R$19,90</h2>
            <h3>Paella Espanhola</h3>
        </div>

        <div class="foto">
            <img src="assets/img/peixe-frutos/peixe-com-romãs.jpg" alt="">
            <h2>R$18,00</h2>
            <h3>Peixe c/ Romãs </h3>
        </div>
        <div class="foto">
            <img src="assets/img/peixe-frutos/peixe-fatiado.jpg" alt="">
            <h2>R$25,00</h2>
            <h3>Peixe Fatiado</h3>
        </div>
        <div class="foto">
            <img src="assets/img/peixe-frutos/salada-camarao.webp" alt="">
            <h2>R$25,00</h2>
            <h3>Camarão </h3>
        </div>
        <div class="foto">
            <img src="assets/img/peixe-frutos/marisco-c-tomate.jpg" alt="">
            <h2>R$20,00</h2>
            <h3>Mariscos</h3>
        </div>
        <div class="foto">
            <img src="assets/img/peixe-frutos/frango-marinho.jpg" alt="">
            <h2>R$25,00</h2>
            <h3>Frango Marinho</h3>
        </div>
        <div class="foto">
            <img src="assets/img/peixe-frutos/mexilhoes-lagosta.webp" alt="">
            <h2>R$23,00</h2>
            <h3>Mexilhões Lagosta</h3>
        </div>
        <div class="foto">
            <img src="assets/img/peixe-frutos/moqueca-camarao.jpg" alt="">
            <h2>R$28,00</h2>
            <h3>Moqueca Camarão</h3>
        </div>
    </div>
    <!--container teste-->

    <footer>
        <div class="main-content">
            <div class="left box" id="sobre">
                <h2>Sobre nós</h2>
                <div class="content">
                    <p>Lorem ipsum dolor sit amet consectetur adipsicing elit.amet iste facilis harum eos vel incidunt distinctio corrupti iure? rem</p>

                    <div class="social">
                        <a href=""><span class="fab fa-facebook-f"></span></a>
                        <a href=""><span class="fab fa-twitter"></span></a>
                        <a href=""><span class="fab fa-instagram"></span></a>
                    </div>
                </div>
                <!--content-->
            </div>
            <!--Left box-->
            <div class="center box" id="endereco">
                <h2>Endereço</h2>
                <div class="content">
                    <div class="place">
                        <span class="fas fa-map-marker"></span>
                        <span class="text">Av.Brasil, nova capital</span>
                    </div>

                    <div class="phone">
                        <span class="fas fas fa-phone-alt"></span>
                        <span class="text">+55 61 9999-9999</span>
                    </div>

                    <div class="email">
                        <span class="fas fa-envelope"></span>
                        <span class="text">exemplo@exemplo.com</span>
                    </div>
                </div>
            </div>
            <div class="right box" id="contato">
                <h2>Contato</h2>
                <div class="content">
                    <form action="">
                        <div class="email">
                            <div class="text">E-mail</div>
                            <input type="email" required>
                        </div>

                        <div class="msg">
                            <div class="text">Mensagem</div>
                            <textarea rows="2" cols="25" required></textarea>
                        </div>
                        <div class="btn">
                            <button type="submit">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--main-content-->
        <div class="bottom">
            <div class="center">
                <span class="credit">Criado por <a href="#"> João Manduca</a></span>
                <span class="far fa-copyright">2021 Todos os direitos reservados</span>
            </div>
        </div>
    </footer>


</body>

</html>