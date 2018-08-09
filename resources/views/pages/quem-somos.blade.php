@extends('layouts-home.master')

@section('content')

<style type="text/css">
    .navbar-nav li:nth-child(2) a {
        font-weight: 600;
    }
</style>

<div class="container quem-somos">
    <h4>QUEM SOMOS ____</h4>	
    <div class="row">
        @foreach ($profissionais as $Profissional)
        <div class="col">
            {{-- Voltar esse link após a página "quem-somos-pessoal" ficar pronta na área admin.
            <a href="/profissional/{{ $Profissional->id }}"> --}}
            <a href="/quem-somos/{{$Profissional->id}}">
                <img src="{{ $Profissional->linkFotoQuemSomos }}">
                <h5>{{ $Profissional->nome }}</h5>
                <h6>{{ $Profissional->descricao_listagem }}</h6>
            </a>
        </div>
        @endforeach
    </div>
</div>

@endsection
