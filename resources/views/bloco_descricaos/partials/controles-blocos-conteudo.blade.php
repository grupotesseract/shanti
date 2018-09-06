<div class='container-controles text-center'>
    <div class="col-xs-6">
        @if ($qnt > 1)
            @if ($key != 0)
            <div>
                <a class="btn btn-info btn-xs btn-controle-ordem" href="javascript:void(0);" data-url="{{ route('bloco_descricaos.altera-ordem', ['id' => $blocoDescricao->id, 'variacao' => -1]) }}" data-variacao="-1">
                    <i class="fa fa-arrow-up"></i>
                </a>
            </div>
            @endif
            <br>
            @if ($key != ($qnt-1))
            <div>
                <a class="btn btn-info btn-xs btn-controle-ordem" href="javascript:void(0);" data-url="{{ route('bloco_descricaos.altera-ordem', ['id' => $blocoDescricao->id, 'variacao' => 1]) }}" data-variacao="1">
                    <i class="fa fa-arrow-down"></i>
                </a>
            </div>
            @endif        
        @endif        
    </div>
    <div class="col-xs-6">
        <div class="item-controle">
            {!! Form::open(['route' => ['blocoDescricaos.destroy', $blocoDescricao->id], 'method' => 'delete', 'class' => 'form-delete']) !!}
            {!! Form::button('<i class="glyphicon glyphicon-trash"></i> Remover', [
                'type' => 'submit',
                'class' => 'btn btn-danger btn-xs'
            ]) !!}
            {!! Form::close() !!}
        </div>
        <br>
        <div class="item-controle">
            <a class="btn btn-xs btn-default" href="edita-conteudo?tipo={{$blocoDescricao->tipoTexto}}&idBloco={{$blocoDescricao->id}}">
                <i class="fa fa-pencil"></i> Editar
            </a>
        </div>
    </div>
</div>
