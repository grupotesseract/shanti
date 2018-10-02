{{-- Essa é a Blade interna de 1 ItemProgramacao --}}


@extends('layouts-home.master')

@section('css')
<style type="text/css">
  .navbar-nav li:nth-child(4) a {
    font-weight: 600;
  }
</style>
@endsection


@section('content')
<div class="container programacao-geral">
  <h4>PROGRAMAÇÃO</h4>

  <ul class="nav justify-content-center nav-top">
    <li class="nav-item">
      <a class="nav-link" href="/programacao-geral">Todos</a>
    </li>
    <li class="nav-item">
        <a class="nav-link @if ($itemProgramacao->tipo == \App\Models\ItemProgramacao::TIPO_CURSO) active @endif" href="/programacao-cursos-agendados">Cursos</a>
    </li>
    <li class="nav-item">
      <a class="nav-link @if ($itemProgramacao->tipo == \App\Models\ItemProgramacao::TIPO_EVENTO) active @endif" href="/programacao-eventos">Eventos</a>
    </li>
  </ul>
    
  @if ($itemProgramacao->tipo != \App\Models\ItemProgramacao::TIPO_EVENTO) 
      <ul class="nav justify-content-center nav-bottom">
        <li class="nav-item">
            <a class="nav-link left @if ($itemProgramacao->tipo == \App\Models\ItemProgramacao::TIPO_CURSO) active @endif" href="/programacao-cursos-agendados">AGENDADOS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link right @if ($itemProgramacao->tipo == \App\Models\ItemProgramacao::TIPO_CURSO_SEM_DATA) active @endif" href="/programacao-cursos-nao-agendados">SEM DATA DEFINIDA</a>
        </li>
      </ul>
  @endif
</div>

<div class="container-fluid w-75 text-center capa-container">
    <img class="capa-programacao" src="{{$itemProgramacao->linkFotoCapa}}" alt="Foto de capa do projeto {{$itemProgramacao->nome}}"/>
</div>

<div class="container w-75 mx-auto programacao-geral">
  <div class="row programacao-interno">
      <div class="col">
          <h5>{{$itemProgramacao->nome}}</h5>


          {!! $itemProgramacao->conteudoPaginaInterna !!}

          {{--
              <p><span class="horario">27/02 | Terça</span><i class="far fa-clock fa-sm"></i> 16h00 às 20h00</p>
      <div class="col-xs-12"> <hr> </div>
      <div class="forms">
        <h5>INSCREVA-SE</h5>
        <p>Deixe seus dados e entraremos em contato.</p>
      </div>
  --}}

      {{ Form::open(['url'=> '/programacao/'.$itemProgramacao->id."/contato", 'class' => 'mt-5'])}}
      <div class="form-group">
          @include('flash::message')
      </div>

      <div class="form-group">
          {!! Form::text('nome', null, ['class' => 'form-control', 'id' => 'nome-input', 'placeholder' => 'Nome']) !!}
      </div>

      <div class="form-group">
          {!! Form::email('email', null, ['class' => 'form-control', "placeholder" => "Email", 'id' => 'email-input', "aria-describedby"=>"emailHelp"]) !!}
      </div>

      <div class="form-group">
          {!! Form::text('telefone', null, ['class' => 'form-control', "placeholder" => "(99) 9 9999-9999", 'id' => 'telefone-input']) !!}
      </div>

      <div class="form-group">
          {!! Form::textarea('observacao', null, ['class' => 'form-control', "placeholder" => "Mensagem", 'id' => 'observacao-input', 'rows' => 3]) !!}
      </div>
      <div class="button">
          <button type="submit" class="btn btn-primary">Enviar</button>
      </div>
      {{ Form::close() }}

  @if ($itemProgramacao->link_facebook)
      <a href="{{$itemProgramacao->link_facebook}}" target="_blank">
          <h5 class="presenca">Confirme sua presença! <i class="fab fa-facebook-square fa-lg"></i></h5>
      </a>
  @endif

      </div>
  </div>
</div>
@endsection
