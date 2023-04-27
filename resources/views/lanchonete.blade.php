@extends('templates.navbar')

@section('title', 'Lanchonetes')

@section('content')
    <div class="subtitulo">
        <strong><p id="topo">BEM VINDO AOS MELHORES LANCHES DA CIDADE!</p></strong>
        <p>Aqui você encontra os melhores lanches, porções e bebidas! </p>
    </div>

    <section class="main">
        <div class="opcoes">
            <figure>
                <a href="#">
                    <img src="assets/img/lanchonete/maluca.jpeg" alt="maluca" class="foto-item">
                    <figcaption class="legenda">
                        Maluca Lanches
                    </figcaption>
                </a>
            </figure>
        </div>
        <div class="opcoes">
            <figure>
                <a href="#">
                    <img src="assets/img/lanchonete/brothers.jpeg" alt="brothers" class="foto-item">
                    <figcaption class="legenda">
                        Brothers Lanches
                    </figcaption>
                </a>
            </figure>
        </div>
        <div class="opcoes">
            <figure>
                <a href="#">
                    <img src="assets/img/lanchonete/bravus.png" alt="bravus" class="foto-item">
                    <figcaption class="legenda">
                        Bravus Hamburgueria
                    </figcaption>
                </a>
            </figure>
        </div>
        <div class="opcoes">
            <figure>
                <a href="general">
                    <img src="assets/img/lanchonete/general.png" alt="general" class="foto-item">
                    <figcaption class="legenda">
                        General Hamburgueria
                    </figcaption>
                </a>
            </figure>
        </div>
    </section> 
@endsection