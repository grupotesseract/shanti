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
        <a class="nav-link active" href="programacao-cursos-agendados">Cursos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="programacao-eventos">Eventos</a>
      </li>
    </ul>

    <ul class="nav justify-content-center nav-bottom">
      <li class="nav-item">
        <a class="nav-link left" href="programacao-cursos-agendados">AGENDADOS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link right active" href="programacao-cursos-nao-agendados">SEM DATA DEFINIDA</a>
      </li>
    </ul>

    <div class="row justify-content-center">
        <div class="col-12 col-lg-5">
            <p class="caption">27/02 | Terça-Feira</p>            
            <img src="images/500x300.png">
        </div>
        <div class="col-12 col-lg-5 align-self-end">            
            <h5>Nome do Evento</h5>
            <p><i class="far fa-clock fa-lg"></i> 16h00 às 20h00</p>
            <a href="https://www.facebook.com/Shanticienciacorpomente" target="_blank">
                <i class="fab fa-facebook-square fa-2x"></i>
            </a>
        </div>
        
        <div class="col-12 col-lg-5">
            <p class="caption">27/02 | Terça-Feira</p>            
            <img src="images/500x300.png">
        </div>
        <div class="col-12 col-lg-5 align-self-end">            
            <h5>Nome do Evento</h5>
            <p><i class="far fa-clock fa-lg"></i> 16h00 às 20h00</p>
            <a href="https://www.facebook.com/Shanticienciacorpomente" target="_blank">
                <i class="fab fa-facebook-square fa-2x"></i>
            </a>
        </div>
        
        <div class="col-12 col-lg-5">
            <p class="caption">27/02 | Terça-Feira</p>            
            <img src="images/500x300.png">
        </div>
        <div class="col-12 col-lg-5 align-self-end">            
            <h5>Nome do Evento</h5>
            <p><i class="far fa-clock fa-lg"></i> 16h00 às 20h00</p>
            <a href="https://www.facebook.com/Shanticienciacorpomente" target="_blank">
                <i class="fab fa-facebook-square fa-2x"></i>
            </a>
        </div>
        
        <div class="col-12 col-lg-5">
            <p class="caption">27/02 | Terça-Feira</p>            
            <img src="images/500x300.png">
        </div>
        <div class="col-12 col-lg-5 align-self-end">            
            <h5>Nome do Evento</h5>
            <p><i class="far fa-clock fa-lg"></i> 16h00 às 20h00</p>
            <a href="https://www.facebook.com/Shanticienciacorpomente" target="_blank">
                <i class="fab fa-facebook-square fa-2x"></i>
            </a>
        </div>
    </div>
</div>

@endsection