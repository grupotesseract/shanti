@extends('layouts-home.master')

@section('content')

    <style type="text/css">
.navbar-nav li:nth-child(5) a {
    font-weight: 600;
}
    </style>

    <div class="container portfolio">
        <h4>PORTFÓLIO</h4>
        <div class="row justify-content-center">
            @foreach (\App\Models\TrabalhoPortfolio::ativos()->get() as $trabalhoPortfolio)
                <div class="col-12 col-lg-5">
                    <a href="/portfolio/{{$trabalhoPortfolio->id}}">
                        <div class="caixa" style="background-image:url('{{$trabalhoPortfolio->linkFotoListagem}}')">
                            <p>{{$trabalhoPortfolio->descricao_listagem}}</p>

                        </div>
                        <h5>{{$trabalhoPortfolio->nome}}</h5>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

@endsection
