@extends('layouts-home.master')

@section('content')

<style type="text/css">
  .navbar-nav li:nth-child(4) a {
    font-weight: 600;
  }
</style>

<div class="container programacao-geral">
    <h4>PROGRAMAÇÃO ____</h4>

    <ul class="nav justify-content-center nav-top">
      <li class="nav-item">
        <a class="nav-link" href="programacao-geral">Todos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="programacao-cursos-agendados">Cursos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="programacao-eventos">Eventos</a>
      </li>
    </ul>
</div>

<div class="container-fluid capa-container">
  <div class="capa"></div>
</div>

<div class="container programacao-geral">
    <div class="row programacao-interno">
      <div class="col">
        <h5>Nome do Evento Aqui Nome do Evento Aqui</h5>

        <p><span class="horario">27/02 | Terça</span><i class="far fa-clock fa-sm"></i> 16h00 às 20h00</p>

        <p><span>Número de Vagas:</span> 30</p>

        <p><span>Investimento:</span> R$200,00</p>

        <p><span>Observação:</span> Coloque uma observação aqui, coloque uma observação aqui.</p>

        <p class="sobre"><span>Sobre o evento</span></p>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut egestas felis, et ullamcorper magna. Integer quis auctor eros. Nam vel augue in mi posuere feugiat. Morbi vestibulum, dui vel dapibus tempor, nibh metus luctus dolor, vitae malesuada orci mi facilisis sem. Donec tincidunt magna et erat bibendum, ac tempor purus tincidunt. Etiam in convallis ligula. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus sodales blandit lorem, ut dapibus elit placerat sed.</p>
        
        <a href="https://www.facebook.com/Shanticienciacorpomente" target="_blank">
          <h5 class="presenca">Confirme sua presença! <i class="fab fa-facebook-square fa-lg"></i></h5>
        </a>
      </div>
    </div>
</div>

@endsection