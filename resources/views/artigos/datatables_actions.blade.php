{!! Form::open(['route' => ['admin-artigos.destroy', $id], 'method' => 'delete']) !!}
<div class='btn-group'>
    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-danger btn-xs',
        'onclick' => "return confirm('Remover essa referência?')"
    ]) !!}
</div>
{!! Form::close() !!}
