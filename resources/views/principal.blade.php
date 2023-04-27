@extends('templates.navbar')

@section('title', 'Limeira QR')

@section('content')
    <h2 class="subtitulo">O que deseja encontrar?</h2>

    <!--Section main-->
    <section class="main">
        <br>
        <div class="opcoes">
            <figure>
                <a href="lanchonete">
                    <img src="assets/img/principal/lanchenote.jpeg" alt="Foto de Lanchonete" class="imagem">
                    <figcaption class="legenda">Lanchonetes</figcaption>
                </a>
            </figure>
        </div>

        <div class="opcoes">
            <figure>
                <a href="pizzaria">
                    <img src="assets/img/principal/pizzaria.jpeg" alt=" Foto de Pizzarias" class="imagem">
                    <figcaption class="legenda">Pizzarias</figcaption>
                </a>
            </figure>
        </div>

        <div class="opcoes">
            <figure>
                <a href="bar">
                    <img src="assets/img/principal/foto-do-bar.jpeg" alt="Foto de Bares" class="imagem">
                    <figcaption class="legenda">Bares</figcaption>
                </a>
            </figure>
        </div>

        <div class="opcoes">
            <figure>
                <a href="restaurante">
                    <img src="assets/img/principal/restaurante.jpeg" alt="lanchonete" class="imagem">
                    <figcaption class="legenda ">Restaurantes</figcaption>
                </a>
            </figure>
        </div>
    </section>
@endsection