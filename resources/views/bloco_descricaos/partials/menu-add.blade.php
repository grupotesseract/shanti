{{-- Blade com os links de adicionar novos blocos de conteudo --}}
<div class="col-xs-12 text-center container-acoes-blocos-descricao">
    <a href="adiciona-conteudo?tipo=texto" data-owner="{{$owner->id}}" data-tipo="texto" class="btn btn-primary">
        <i class="fa fa-plus"></i> Texto
    </a>
    <a href="adiciona-conteudo?tipo=imagem" data-owner="{{$owner->id}}" data-tipo="imagem" class="btn btn-primary">
        <i class="fa fa-plus"></i> Imagem 
    </a>
    <a href="adiciona-conteudo?tipo=lista" data-owner="{{$owner->id}}" data-tipo="lista" class="btn btn-primary">
        <i class="fa fa-plus"></i> Lista
    </a>
    <a href="adiciona-conteudo?tipo=citacao" data-owner="{{$owner->id}}" data-tipo="citacao" class="btn btn-primary">
        <i class="fa fa-plus"></i> Citação
    </a>
    <a href="adiciona-conteudo?tipo=botao" data-owner="{{$owner->id}}" data-tipo="botao" class="btn btn-primary">
        <i class="fa fa-plus"></i> Botão
    </a>
</div>
