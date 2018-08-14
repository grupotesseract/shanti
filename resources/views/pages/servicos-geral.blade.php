@extends('layouts-home.master')

@section('content')

<style type="text/css">
    .navbar-nav li:nth-child(3) a {
        font-weight: 600;
    }
</style>

<div class="container servicos-geral">
    <h4>SERVIÇOS ____</h4>
    <div class="row">
        @foreach($grupoServicos as $Grupo)
            <div class="col-12 col-lg-6">
                <a href="/servicos/{{$Grupo->id}}">
                    <h5>{{$Grupo->titulo}}</h5>
                    @foreach ($Grupo->arrayServicos as $Servico)
                        <li><i class="fas fa-circle"></i></i>{!! html_entity_decode($Servico) !!}</li>
                    @endforeach
                </a>
            </div>
        @endforeach
        <div class="col-12 col-lg-6">
            <a href="/programacao-cursos-agendados">
                <h5>CURSOS, EVENTOS E OUTROS</h5>
                <li><i class="fas fa-circle"></i></i>Astropsicologia</li>
                <li><i class="fas fa-circle"></i></i>EFT - Técnica de Libertação Emocional</li>
                <li><i class="fas fa-circle"></i></i>Reflexologia</li>
                <li><i class="fas fa-circle"></i></i>Aromaterapia</li>
                <li><i class="fas fa-circle"></i></i>Massoterapia</li>
                <li><i class="fas fa-circle"></i></i>Cristalterapia</li>
                <li><i class="fas fa-circle"></i></i>Florais de Bach</li>
                <li><i class="fas fa-circle"></i></i>Fitoterapia</li>
                <li><i class="fas fa-circle"></i></i>Iridologia</li>
                <li><i class="fas fa-circle"></i></i>Meditação</li>
                <li><i class="fas fa-circle"></i></i>Mantras</li>
                <li><i class="fas fa-circle"></i></i>Curso de Virtudes para Crianças</li>
                <li><i class="fas fa-circle"></i></i>Dragon Dreaming – Design de Projetos</li>
            </a>
        </div>                
    </div>
</div>

@endsection
