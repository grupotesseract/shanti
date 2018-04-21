@extends('layouts-home.master')

@section('content')

<div class="container quem-somos">
    <h4>QUEM SOMOS ____</h4>	
    <div class="row">
        @foreach ($profissionais as $Profissional)
        <div class="col">
            <a href="/profissional/{{ $Profissional->id }}">
                <img src="{{ $Profissional->fotoListagem->urlCloudinary }}">
                <h5>{{ $Profissional->nome }}</h5>
                <h6>{{ $Profissional->descricao_listagem }}</h6>
            </a>
        </div>
        @endforeach
    </div>
</div>

@endsection
