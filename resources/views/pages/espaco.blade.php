@extends('layouts-home.master')

@section('content')

    <style type="text/css">
.navbar-nav li:nth-child(1) a {
    font-weight: 600;
}
    </style>

    <div class="container">
        @if (\Agent::isMobile())
            <div class="espaco-mobile">
                <div id="carouselExampleIndicators" class="carousel slide carousel-espaco" data-ride="carousel">
                    <ol class="carousel-indicators">
                        @forelse( $infoEspaco->ListaFotos as $key => $foto)
                            <li data-target="#carouselExampleIndicators" data-slide-to="{{$key}}" class="@if($key==0) active @endif"></li>
                        @empty
                            <li data-target="#carouselExampleIndicators" data-slide-to="{{$key}}" class="active"></li>
                        @endforelse
                    </ol>
                    <div class="carousel-inner">
                        @forelse( $infoEspaco->ListaFotos as $key => $foto)
                            <div class="carousel-item @if($key==0) active @endif">
                                <img class="d-block w-100" src="{{$foto->urlCloudinary}}">
                            </div>
                        @empty
                            <li data-target="#carouselExampleIndicators" data-slide-to="{{$key}}" class="active"></li>
                        @endforelse
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col-espaco">
                    <h4>O Instituto</h4>
                    {!! $infoEspaco->descricao !!}

                    <blockquote class="blockquote text-center">
                        <p class="mb-1">{{ $infoEspaco->citacao }}</p>
                        <footer class="blockquote-footer">{{ $infoEspaco->autor}}</footer>
                    </blockquote>
                </div>
            </div>

    </div>

@else

    <div class="row">
        <div class="col col-espaco">
            <h4>O INSTITUTO</h4>

            {!! $infoEspaco->descricao !!}

            <blockquote class="blockquote text-center">
                <p class="mb-1">{{ $infoEspaco->citacao }}</p>
                <footer class="blockquote-footer">{{ $infoEspaco->autor}}</footer>
            </blockquote>
        </div>

        <div class="col-8 espaco-pc">
            <div id="carouselExampleIndicators" class="carousel slide carousel-espaco" data-ride="carousel">
                <ol class="carousel-indicators">
                    @forelse( $infoEspaco->listaFotos as $key => $foto)
                        <li data-target="#carouselExampleIndicators" data-slide-to="{{$key}}" class="@if($key==0) active @endif"></li>
                    @empty
                        <li data-target="#carouselExampleIndicators" data-slide-to="{{$key}}" class="active"></li>
                    @endforelse
                </ol>
                <div class="carousel-inner">
                    @forelse( $infoEspaco->listaFotos as $key => $foto)
                        <div class="carousel-item @if($key==0) active @endif">
                            <img class="d-block w-100" src="{{$foto->urlCloudinary}}">
                        </div>
                    @empty
                        <li data-target="#carouselExampleIndicators" data-slide-to="{{$key}}" class="active"></li>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
    </div>
@endif
</div>

@endsection
