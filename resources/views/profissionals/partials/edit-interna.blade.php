            <div class="row">
                <div class="col-xs-12">
                    <div class="col-xs-6 text-center">
                        <img src="{{$profissional->linkFotoQuemSomos}}" alt="Foto da listagem do profissional"/>
                        <br>
                    </div>
                    <div class="col-xs-6">
                        <h2>{{$profissional->nome}}</h2>
                        <h2>{{$profissional->descricao_listagem}}</h2>
                        {!! $profissional->descricao_interna !!}
                    </div>
                </div>
                <div class="col-xs-12">
                    <hr>
                </div>

                <div class="col-xs-12">
                    <ul class="list-group lista-blocos">
                    @forelse ($profissional->blocosOrdenados as $key => $blocoDescricao)
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-xs-3">
                                    @include('profissionals.partials.controles-blocos-conteudo', [
                                        'blocoDescricao' => $blocoDescricao,
                                        'key' => $key,
                                        'qnt' => count($profissional->blocosOrdenados),
                                    ])
                                </div>
                                <div class="col-xs-1">
                                    {{$blocoDescricao->tipoTexto}}
                                </div>
                                <div class="col-xs-8">
                                    {!! $blocoDescricao->htmlFormatadoAdmin !!}
                                </div>
                            </div>
                        
                        </li>

                    @empty
                    <p> Não existem registros </p>
                    @endforelse
                    </ul>
                </div>
                <div class="col-xs-12">
                    <hr>
                </div>
                <div class="col-xs-12 text-center container-acoes-blocos-descricao">
                    <a href="/profissionals/{{$profissional->id}}/adiciona-conteudo?tipo=texto" data-profissional="{{$profissional->id}}" data-tipo="texto" class="btn btn-default">
                        <i class="fa fa-plus"></i> Texto
                    </a>
                    <a href="/profissionals/{{$profissional->id}}/adiciona-conteudo?tipo=imagem" data-profissional="{{$profissional->id}}" data-tipo="imagem" class="btn btn-default">
                        <i class="fa fa-plus"></i> Imagem 
                    </a>
                    <a href="/profissionals/{{$profissional->id}}/adiciona-conteudo?tipo=lista" data-profissional="{{$profissional->id}}" data-tipo="lista" class="btn btn-default">
                        <i class="fa fa-plus"></i> Lista
                    </a>
                    <a href="/profissionals/{{$profissional->id}}/adiciona-conteudo?tipo=citacao" data-profissional="{{$profissional->id}}" data-tipo="citacao" class="btn btn-default">
                        <i class="fa fa-plus"></i> Citação
                    </a>
                    <a href="/profissionals/{{$profissional->id}}/adiciona-conteudo?tipo=botao" data-profissional="{{$profissional->id}}" data-tipo="botao" class="btn btn-default">
                        <i class="fa fa-plus"></i> Botão
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


