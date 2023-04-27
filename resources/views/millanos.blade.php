@extends('templates.navbar')

@section('title', 'Millanos')

@section('content')
    <nav class="navegacao">
        <div class="logo-bar">Milanos</div>

        <div class="menu-btn">
            <i class="fa fa-bars fa-2x"></i>
        </div>

        <ul>

            <li><a href="#sobre ">Sobre</a></li>
            <li><a href="#endereco ">Endereço</a></li>
            <li><a href="#contato ">Contato</a></li>

        </ul>
    </nav>

    <div class="foto-responsiva ">
        <img src="assets/img/banner-responsivo/ravielly-responsivo.png" alt=" ">
    </div>

    <div class="foto-bar ">
        <img src="assets/img/banners/ravielly.png" alt=" ">
    </div>

    <div class="titulo ">
        <h1>Sabores de Pizza</h1>
    </div>


    <div class="container teste ">
        <!--container teste-->
        <div class="foto ">
            <img src="assets/img/Pizzas/Bacon.jpeg " alt=" ">
            <h2>R$35,00</h2>
            <h3>Bacon</h3>
        </div>

        <div class="foto ">
            <img src="assets/img/Pizzas/Brócolis.jpeg " alt=" ">
            <h2>R$35,00</h2>
            <h3>Brócolis</h3>
        </div>

        <div class="foto ">
            <img src="assets/img/Pizzas/Calabresa.jpeg " alt=" ">
            <h2>R$35,00</h2>
            <h3>Calabresa</h3>
        </div>


        <div class="foto ">
            <img src="assets/img/Pizzas/Frango.jpeg " alt=" ">
            <h2>R$35,00</h2>
            <h3>Frango</h3>
        </div>

        <div class="foto ">
            <img src="assets/img/Pizzas/Marguerita.jpeg " alt=" ">
            <h2>R$35,00</h2>
            <h3>Marguerita</h3>
        </div>

        <div class="foto ">
            <img src="assets/img/Pizzas/pizzza-milho.jpg " alt=" ">
            <h2>R$35,00</h2>
            <h3>Milho</h3>
        </div>
        <div class="foto ">
            <img src="assets/img/Pizzas/Mussarela.jpeg " alt=" ">
            <h2>R$35,00</h2>
            <h3>Mussarela</h3>
        </div>
        <div class="foto ">
            <img src="assets/img/Pizzas/Palmito.jpeg " alt=" ">
            <h2>R$35,00</h2>
            <h3>Palmito</h3>
        </div>
        <div class="foto ">
            <img src="assets/img/Pizzas/Portuguesa.jpeg " alt=" ">
            <h2>R$35,00</h2>
            <h3>Portuguesa</h3>
        </div>
        <div class="foto ">
            <img src="assets/img/Pizzas/Presunto.jpeg " alt=" ">
            <h2>R$35,00</h2>
            <h3>Presunto</h3>
        </div>
        <div class="foto ">
            <img src="assets/img/Pizzas/Quatro-Queijos.jpeg " alt=" ">
            <h2>R$35,00</h2>
            <h3>4 Queijos</h3>
        </div>
        <div class="foto ">
            <img src="assets/img/Pizzas/Toamte-Seco.jpeg " alt=" ">
            <h2>R$35,00</h2>
            <h3>Tomate seco</h3>
        </div>
    </div>
    <!--container teste-->

    <footer>
        <div class="main-content ">
            <div class="left box " id="sobre ">
                <h2>Sobre nós</h2>
                <div class="content ">
                    <p>Lorem ipsum dolor sit amet consectetur adipsicing elit.amet iste facilis harum eos vel incidunt distinctio corrupti iure? rem</p>

                    <div class="social ">
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
@endsection