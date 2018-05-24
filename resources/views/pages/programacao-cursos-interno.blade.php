@extends('layouts-home.master')

@section('content')

<div class="container programacao-geral">
    <h4>PROGRAMAÇÃO ____</h4>

    <ul class="nav justify-content-center nav-top">
      <li class="nav-item">
        <a class="nav-link" href="programacao-geral">Todos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="programacao-cursos-agendados">Cursos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="programacao-eventos">Eventos</a>
      </li>
    </ul>

    <ul class="nav justify-content-center nav-bottom">
      <li class="nav-item">
        <a class="nav-link left active" href="programacao-cursos-agendados">AGENDADOS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link right" href="programacao-cursos-nao-agendados">SEM DATA DEFINIDA</a>
      </li>
    </ul>

    <div class="row justify-content-center">
        
    </div>
</div>

@endsection