<ul class="list-group">
    @forelse ($owner->blocosOrdenados as $key => $blocoDescricao)
        <li class="list-group-item text-center">
            <div class="row center-center">
                <div class="col-xs-3">
                    @include('bloco_descricaos.partials.controles-blocos-conteudo', [
                        'blocoDescricao' => $blocoDescricao,
                        'key' => $key,
                        'qnt' => count($owner->blocosOrdenados),
                        ])
                </div>
                <div class="col-xs-1">
                    {{$blocoDescricao->tipoTexto}}
                </div>
                <div class="col-xs-8">
                    {!! $blocoDescricao->getHtmlFormatado(true) !!}
                </div>
            </div>

        </li>

    @empty
        <li class="list-group-item text-center" style="border:none;margin-top:3rem;">
            <strong> Essa página está sem seções de conteudo interno. Adicione utilizando os botões abaixo. </strong>
        </li>
    @endforelse
</ul>


