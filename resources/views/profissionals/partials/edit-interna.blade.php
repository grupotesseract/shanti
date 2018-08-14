<div class="row">
    <div class="col-xs-12">
        <div class="col-xs-6 text-center">
            <img src="{{$profissional->linkFotoQuemSomos}}" alt="Foto da listagem do profissional"/>
            <br>
        </div>
        <div class="col-xs-6">
            <h3>{{$profissional->nome}}</h5>
            <p>{{$profissional->descricao_listagem}}</p>
            {!! $profissional->descricao_interna !!}
        </div>
    </div>
    <div class="col-xs-12">
        <hr>
    </div>

    <div class="col-xs-12 container-blocos-descricao">
        @include('profissionals.partials.listagem-blocos-descricao')

    </div>
    <div class="col-xs-12">
        <hr>
    </div>
    <div class="col-xs-12 text-center container-acoes-blocos-descricao">
        <a href="/profissionals/{{$profissional->id}}/adiciona-conteudo?tipo=texto" data-profissional="{{$profissional->id}}" data-tipo="texto" class="btn btn-primary">
            <i class="fa fa-plus"></i> Texto
        </a>
        <a href="/profissionals/{{$profissional->id}}/adiciona-conteudo?tipo=imagem" data-profissional="{{$profissional->id}}" data-tipo="imagem" class="btn btn-primary">
            <i class="fa fa-plus"></i> Imagem 
        </a>
        <a href="/profissionals/{{$profissional->id}}/adiciona-conteudo?tipo=lista" data-profissional="{{$profissional->id}}" data-tipo="lista" class="btn btn-primary">
            <i class="fa fa-plus"></i> Lista
        </a>
        <a href="/profissionals/{{$profissional->id}}/adiciona-conteudo?tipo=citacao" data-profissional="{{$profissional->id}}" data-tipo="citacao" class="btn btn-primary">
            <i class="fa fa-plus"></i> Citação
        </a>
        <a href="/profissionals/{{$profissional->id}}/adiciona-conteudo?tipo=botao" data-profissional="{{$profissional->id}}" data-tipo="botao" class="btn btn-primary">
            <i class="fa fa-plus"></i> Botão
        </a>
    </div>
</div>


