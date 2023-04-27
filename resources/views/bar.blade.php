@extends('templates.navbar')

@section('title', 'Bares')

@section('content')
    <div class="subtitulo">
        <strong>
            <p id="topo">BEM VINDO AOS MELHORES BARES DA CIDADE!</p>
        </strong>
        <p>Aqui você encontra os melhores drinks e petiscos!</p>
    </div>

    <section class="main">
        <div class="opcoes">
            <figure>
                <a href="#">
                    <img src="assets/img/bar//obarão.png" alt="obarao" class="foto-item">
                    <figcaption class="legenda">
                        O Barão
                    </figcaption>
                </a>
            </figure>
        </div>

        <div class="opcoes">
            <figure>
                <a href="#">
                    <img src="assets/img/bar/cascata.png" alt="cascata" class="foto-item">
                    <figcaption class="legenda">
                        Cascata do Vinho
                    </figcaption>
                </a>
            </figure>
        </div>

        <div class="opcoes">
            <figure>
                <a href="#">
                    <img src="assets/img/bar/pirata.jpeg" alt="pirata" class="foto-item">
                    <figcaption class="legenda">
                        O Pirata
                    </figcaption>
                </a>
            </figure>
        </div>

        <div class="opcoes">
            <figure>
                <a href="seattle">
                    <img src="assets/img/bar/SEATTLE.png" alt="Seattle" class="foto-item">
                    <figcaption class="legenda">
                        Seattle Music Bar
                    </figcaption>
                </a>
            </figure>
        </div>       
    </section>
@endsection