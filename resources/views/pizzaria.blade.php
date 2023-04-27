@extends('templates.navbar')

@section('title', 'Pizzaria')

@section('content')
    <div class="subtitulo">
        <strong><p id="topo">BEM VINDO AS MELHORES PIZZARIAS!</p></strong>
        <p>Aqui você encontra pizza de vários tamanhos e sabores! </p>
    </div>

    <section class="main">
        <div class="opcoes">
            <figure>
                <a href="#">
                    <img src="assets/img/pizzaria/micheluccio.png" alt="Micheluccio" class="foto-item">
                    <figcaption class="legenda">
                        Micheluccio
                    </figcaption>
                </a>
            </figure>
        </div>

        <div class="opcoes">
            <figure>
                <a href="#">
                    <img src="assets/img/pizzaria/ravelly.jpeg" alt="Ravelly" class="foto-item">
                    <figcaption class="legenda">
                        Ravelly
                    </figcaption>
                </a>
            </figure>
        </div>

        <div class="opcoes">
            <figure>
                <a href="#">
                    <img src="assets/img/pizzaria//mook.jpeg" alt="Moonk" class="foto-item">
                    <figcaption class="legenda">
                        Moonk
                    </figcaption>
                </a>
            </figure>
        </div>

        <div class="opcoes">
            <figure>
                <a href="millanos">
                    <img src="assets/img/pizzaria/millanos.png" alt="Millano's" class="foto-item">
                    <figcaption class="legenda">
                        Millano's
                    </figcaption>
                </a>
            </figure>
        </div>
    </section>  
@endsection