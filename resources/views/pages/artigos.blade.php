@extends('layouts-home.master')

@section('content')

    <style type="text/css">
.navbar-nav li:nth-child(6) a {
    font-weight: 600;
}
    </style>

    <div class="container artigos">
        <h4>REFERÊNCIAS</h4>
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">

                <div class="tags">
                    <a href="/referencias/todos">
                        <span class="{{ Request::is('referencias/todos') ? 'active' : '' }}">Todos</span>
                    </a>
                    <a href="/referencias/yoga">
                        <span class="{{ Request::is('referencias/yoga') ? 'active' : '' }}">Yoga</span>
                    </a>
                    <a href="/referencias/meditacao">
                        <span class="{{ Request::is('referencias/meditacao') ? 'active' : '' }}">Meditação</span>
                    </a>
                    <a href="/referencias/naturologia">
                        <span class="{{ Request::is('referencias/naturologia') ? 'active' : '' }}">Naturologia</span>
                    </a>
                    <a href="/referencias/psicanalise">
                        <span class="{{ Request::is('referencias/psicanalise') ? 'active' : '' }}">Psicanálise</span>
                    </a>
                </div>

                @foreach($artigos as $artigo)
                    <div class="row justify-content-center download">
                        <div class="col-auto align-self-center botao-download">
                            @if ($artigo->tipo == \App\Models\Artigo::TIPO_ARQUIVO)
                            <a href="/download/artigos/{{ $artigo->id }}">
                                <i class="fas fa-arrow-circle-down fa-2x"></i>
                            </a>
                            @else
                            <a target="_blank" href="{{ $artigo->link }}">
                                <i class="fas fa-external-link-alt fa-2x"></i>
                            </a>
                            @endif
                        </div>
                        <div class="col">
                            @if ($artigo->tipo == \App\Models\Artigo::TIPO_ARQUIVO)
                            <a href="/download/artigos/{{ $artigo->id }}">
                                <p>{{ $artigo->nome }}</p>

                                @foreach($artigo->tags as $tag)
                                    <span>{{ $tag->name }}</span>
                                @endforeach						
                            </a>
                            @else
                            <a target="_blank" href="{{ $artigo->link }}">
                                <p>{{ $artigo->nome }}</p>

                                @foreach($artigo->tags as $tag)
                                    <span>{{ $tag->name }}</span>
                                @endforeach						
                            </a>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
