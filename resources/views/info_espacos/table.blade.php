<table class="table table-responsive" id="infoEspacos-table">
    <thead>
        <tr>
            <th>Citacao</th>
        <th>Autor</th>
        <th>Descricao</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($infoEspacos as $infoEspaco)
        <tr>
            <td>{!! $infoEspaco->citacao !!}</td>
            <td>{!! $infoEspaco->autor !!}</td>
            <td>{!! $infoEspaco->descricao !!}</td>
            <td>
                {!! Form::open(['route' => ['infoEspacos.destroy', $infoEspaco->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('infoEspacos.show', [$infoEspaco->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('infoEspacos.edit', [$infoEspaco->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>