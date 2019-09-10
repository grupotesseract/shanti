@extends('layouts-home.master')

@section('content')

    <style type="text/css">
        .footer {
            display: none !important;
        }
        
    </style>

	
    <div class="capa-home" style="background-image: url('{{$infoHomepage->linkFotoFundo}}')">
        <div class="container-textos">
            {!! $infoHomepage->texto_destaque !!}
        </div>
    </div>

    <div class="container footer-home">
        <h4>Instituto de Ciência Corpo Mente</h4>

        <div class="row">
            <div class="col-12 col-lg-8 home-bola">
                <a href="/servicos">
                    <img src="{{$infoHomepage->linkFotoServicos}}">
                    <h5>SERVIÇOS</h5>
                </a>

                <a href="/programacao-cursos-agendados">
                    <img src="{{$infoHomepage->linkFotoCursos}}">
                    <h5>CURSOS</h5>
                </a>

                <a href="/programacao-eventos">
                    <img src="{{$infoHomepage->linkFotoEventos}}">
                    <h5>EVENTOS</h5>
                </a>
            </div>

            <div class="col footer-home-right align-self-center">
                <h6>ONDE NOS ENCONTRAR</h6>

                <a href="https://goo.gl/maps/hQrrviNq4jQ2" target="_blank">
                    <i class="fas fa-map-marker-alt fa-lg"></i>Rua Maria José, 12-71 | Bauru - SP
                </a>


                <a href="mailto:contato@institutoshanti.com" target="_blank">
                    <i class="fas fa-envelope fa-lg"></i>contato@institutoshanti.com<br>
                </a>

                <a href="https://www.instagram.com/institutoshanti/" target="_blank">
                    <i class="fab fa-instagram fa-lg"></i>@InstitutoShanti
                </a>

                <a href="https://www.facebook.com/Shanticienciacorpomente" target="_blank">
                    <i class="fab fa-facebook-square fa-lg"></i>/Shanticienciacorpomente
                </a>
            </div>
        </div>
    </div>

@endsection
