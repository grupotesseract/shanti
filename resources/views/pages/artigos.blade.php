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
                    <a href="/artigos/todos">
                        <span class="{{ Request::is('artigos/todos') ? 'active' : '' }}">Todos</span>
                    </a>
                    <a href="/artigos/yoga">
                        <span class="{{ Request::is('artigos/yoga') ? 'active' : '' }}">Yoga</span>
                    </a>
                    <a href="/artigos/meditacao">
                        <span class="{{ Request::is('artigos/meditacao') ? 'active' : '' }}">Meditação</span>
                    </a>
                    <a href="/artigos/naturologia">
                        <span class="{{ Request::is('artigos/naturologia') ? 'active' : '' }}">Naturologia</span>
                    </a>
                    <a href="/artigos/psicologia">
                        <span class="{{ Request::is('artigos/psicologia') ? 'active' : '' }}">Psicologia</span>
                    </a>
                    <a href="/artigos/terapias">
                        <span class="{{ Request::is('artigos/terapias') ? 'active' : '' }}">Terapias</span>
                    </a>
                    <a href="/artigos/outros">
                        <span class="{{ Request::is('artigos/outros') ? 'active' : '' }}">Outros</span>
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
