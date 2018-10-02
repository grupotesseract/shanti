@extends('layouts-home.master')

@section('content')

<style type="text/css">
    .navbar-nav li:nth-child(3) a {
        font-weight: 600;
    }
</style>

<div class="container servicos-interna">
    <div class="row">
        <div class="col-12 col-lg-5 coluna-1">
            <h5 class="indent">{{$grupoServico->titulo}}</h5>

            {!! $grupoServico->descricao_grupo !!}

        </div>

        <div class="col-12 col-lg-7 coluna-2 container-html-dinamico">
            {!! $grupoServico->descricao_servicos !!}
        </div>
    </div>
</div>

@endsection
