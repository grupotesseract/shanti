<div class='container-controles text-center'>
    <div class="col-xs-6">
        <div>
        <a class="btn btn-info btn-xs btn-controle-ordem" href="javascript:alteraOrdem({{$blocoDescricao->id}}, -1)">
            <i class="fa fa-arrow-up"></i>
        </a>
        </div>
        <br>
        <div>
        <a class="btn btn-info btn-xs btn-controle-ordem" href="javascript:alteraOrdem({{$blocoDescricao->id}}, 1)">
            <i class="fa fa-arrow-down"></i>
        </a>
        </div>
    </div>
    <div class="col-xs-6">
        <div class="item-controle">
            {!! Form::open(['route' => ['blocoDescricaos.destroy', $blocoDescricao->id], 'method' => 'delete']) !!}
            {!! Form::button('<i class="glyphicon glyphicon-trash"></i> Remover', [
                'type' => 'submit',
                'class' => 'btn btn-danger btn-xs',
                'onclick' => "return confirm('Tem certeza?')"
            ]) !!}
            {!! Form::close() !!}
        </div>
        <br>
        <div class="item-controle">
            <a class="btn btn-xs btn-default" href="/profissionals/{{$profissional->id}}/edita-conteudo?tipo={{$blocoDescricao->tipoTexto}}&idBloco={{$blocoDescricao->id}}">
                <i class="fa fa-pencil"></i> Editar
            </a>
        </div>
    </div>
</div>
