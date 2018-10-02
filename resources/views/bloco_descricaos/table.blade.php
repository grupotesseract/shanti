<table class="table table-responsive" id="blocoDescricaos-table">
    <thead>
        <tr>
            <th>Tipo</th>
        <th>Ordem</th>
        <th>Json Conteudo</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($blocoDescricaos as $blocoDescricao)
        <tr>
            <td>{!! $blocoDescricao->tipo !!}</td>
            <td>{!! $blocoDescricao->ordem !!}</td>
            <td>{!! $blocoDescricao->json_conteudo !!}</td>
            <td>
                {!! Form::open(['route' => ['blocoDescricaos.destroy', $blocoDescricao->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('blocoDescricaos.show', [$blocoDescricao->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('blocoDescricaos.edit', [$blocoDescricao->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>