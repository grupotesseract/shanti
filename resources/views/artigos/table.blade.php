<table class="table table-responsive" id="artigos-table">
    <thead>
        <tr>
            <th>Nome</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($artigos as $artigo)
        <tr>
            <td>{!! $artigo->nome !!}</td>
            <td>
                {!! Form::open(['route' => ['artigos.destroy', $artigo->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('artigos.show', [$artigo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('artigos.edit', [$artigo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>