@extends('layouts-home.master')

@section('content')

<div class="container quem-somos-pessoal">
    <h4>QUEM SOMOS ____</h4>
    <div class="row">
        <div class="col-12 col-lg">
            <img class="foto-pessoal" src="{{ $profissional->linkFotoQuemSomos }}">
        </div>
        <div class="col col-lg-8">
            <h5> {{ $profissional->nome }}</h5>

            <div class="col-xs-12">
               {!! $profissional->descricao_interna !!}
            </div>

            {{-- Para cada bloco de conteudo dinamico, renderiza o html  --}}
            @foreach ($profissional->blocosDescricao as $blocoDescricao)
                <div class="col-xs-12">
                    {!! $blocoDescricao->htmlRenderizado !!}
                </div>
            @endforeach

        </div>
    </div>
</div>

@endsection
