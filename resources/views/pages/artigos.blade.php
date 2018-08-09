@extends('layouts-home.master')

@section('content')

    <style type="text/css">
.navbar-nav li:nth-child(6) a {
    font-weight: 600;
}
    </style>

    <div class="container artigos">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <h4>ARTIGOS ____</h4>

                <div class="tags">
                    <a href="/artigos/todos">
                        <span class="{{ Request::is('artigos/todos') ? 'active' : '' }}">Todos</span>
                    </a>
                    <a href="/artigos/yoga">
                        <span class="{{ Request::is('artigos/yoga') ? 'active' : '' }}">Yoga</span>
                    </a>
                    <a href="/artigos/terapia">
                        <span class="{{ Request::is('artigos/terapia') ? 'active' : '' }}">Terapia</span>
                    </a>
                    <a href="/artigos/naturologia">
                        <span class="{{ Request::is('artigos/naturologia') ? 'active' : '' }}">Naturologia</span>
                    </a>
                    <a href="/artigos/medicina">
                        <span class="{{ Request::is('artigos/medicina') ? 'active' : '' }}">Medicina</span>
                    </a>
                    <a href="/artigos/grupos">
                        <span class="{{ Request::is('artigos/grupos') ? 'active' : '' }}">Grupos</span>
                    </a>
                    <a href="/artigos/mantras">
                        <span class="{{ Request::is('artigos/mantras') ? 'active' : '' }}">Mantras</span>
                    </a>
                </div>

                @foreach($artigos as $artigo)
                    <div class="row justify-content-center download">
                        <div class="col-auto align-self-center botao-download">
                            <a href="/download/artigos/{{ $artigo->id }}">
                                <i class="fas fa-arrow-circle-down fa-2x"></i>
                            </a>
                        </div>

                        <div class="col">
                            <a href="">
                                <p>{{ $artigo->nome }}</p>

                                @foreach($artigo->tags as $tag)
                                    <span>{{ $tag->name }}</span>
                                @endforeach						
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
