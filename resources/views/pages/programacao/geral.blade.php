@extends('layouts-home.master')

@section('content')

<style type="text/css">
    .navbar-nav li:nth-child(4) a {
        font-weight: 600;
    }
</style>

<div class="container programacao-geral">
    <h4>PROGRAMAÇÃO</h4>

    <ul class="nav justify-content-center nav-top">
      <li class="nav-item">
        <a class="nav-link active" href="/programacao-geral">Todos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/programacao-cursos-agendados">Cursos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/programacao-eventos">Eventos</a>
      </li>
    </ul>

    @foreach(\App\Models\ItemProgramacao::ativos()->get() as $itemProgramacao)
        @if ($itemProgramacao->tipo == \App\Models\ItemProgramacao::TIPO_CURSO)
            @include('pages.programacao.cursos-agendados-cards', [
                'itemProgramacao' => $itemProgramacao
            ])
        @endif
        @if ($itemProgramacao->tipo == \App\Models\ItemProgramacao::TIPO_EVENTO)
            @include('pages.programacao.eventos-cards', [
                'itemProgramacao' => $itemProgramacao
            ])
        @endif
        @if ($itemProgramacao->tipo == \App\Models\ItemProgramacao::TIPO_CURSO_SEM_DATA)
            @include('pages.programacao.cursos-nao-agendados-cards', [
                'itemProgramacao' => $itemProgramacao
            ])
        @endif
    @endforeach
</div>

@endsection
