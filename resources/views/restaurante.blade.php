@extends('templates.navbar')

@section('title', 'Restaurantes')

@section('content')
    <div class="subtitulo">
        <strong><p id="topo">BEM VINDO AOS MELHORES RESTAURANTES DA CIDADE!</p></strong>
        <p>Aqui você encontra os restaurantes mais saborosos! </p>
    </div>

    <section class="main">
        <div class="opcoes">
            <figure>
                <a href="#">
                    <img src="assets/img/rastaurantes/outback.jpeg" alt="outback" class="foto-item">
                    <figcaption class="legenda">
                        Outback
                    </figcaption>
                </a>
            </figure>
        </div>

        <div class="opcoes">
            <figure>
                <a href="#">
                    <img src="assets/img/rastaurantes/guaiba.jpeg" alt="Guaiba" class="foto-item">
                    <figcaption class="legenda">
                        Guaíba
                    </figcaption>
                </a>
            </figure>
        </div>

        <div class="opcoes">
            <figure>
                <a href="#">
                    <img src="assets/img/rastaurantes/rei.jpeg" alt="Rei dos Pampas" class="foto-item">
                    <figcaption class="legenda">
                        Rei dos Pampas
                    </figcaption>
                </a>
            </figure>
        </div>

        <div class="opcoes">
            <figure>
                <a href="jangada">
                    <img src="assets/img/rastaurantes/jangada.jpeg" alt="maluca" class="foto-item">
                    <figcaption class="legenda">
                        Jangada
                    </figcaption>
                </a>
            </figure>
        </div>
    </section>  
@endsection