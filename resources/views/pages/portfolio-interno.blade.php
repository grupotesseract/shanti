@extends('layouts-home.master')

@section('content')

    <style type="text/css">
.navbar-nav li:nth-child(5) a {
    font-weight: 600;
}
    </style>

    <div class="container portfolio-interno">
        <h4>PORTFÓLIO ____</h4>
    </div>

    <div class="container-fluid w-75 text-center capa-container">
        <img class="capa-portfolio" src="{{$trabalhoPortfolio->linkFotoCapa}}" alt="Foto de capa do projeto {{$trabalhoPortfolio->nome}}"/>
    </div>

    <div class="container portfolio-interno">
        <div class="wrapper w-75 mx-auto">

            <h5>{{$trabalhoPortfolio->nome}}</h5>
            <h6>{{$trabalhoPortfolio->descricao_listagem}}</h6>

            {!! $trabalhoPortfolio->conteudoPaginaInterna !!}

            <a href="/portfolio" class="botao-voltar">
                <p>Voltar para o portifólio</p>
            </a>

        </div>

    </div>

@endsection
