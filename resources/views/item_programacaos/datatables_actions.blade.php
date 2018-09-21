<div class='btn-group'>
    @if ( !$itemProgramacao->ativo_listagem )
    {!! Form::open(['url' => '/itemProgramacaos/'.$id.'/ativa-listagem']) !!}
        {!! Form::button('<i class="fa fa-eye"></i>', [
            'type' => 'submit',
            'class' => 'btn btn-default btn-xs',
            'onclick' => "return confirm('Ativar a exibição dessa programação?')"
        ]) !!}
    {!! Form::close() !!}
    @else
    {!! Form::open(['url' => '/itemProgramacaos/'.$id.'/remove-listagem']) !!}
        {!! Form::button('<i class="fa fa-eye-slash"></i>', [
            'type' => 'submit',
            'class' => 'btn btn-warning btn-xs',
            'onclick' => "return confirm('Parar a exibição dessa programação?')"
        ]) !!}
    {!! Form::close() !!}
@endif
</div>

{!! Form::open(['route' => ['itemProgramacaos.destroy', $id], 'method' => 'delete']) !!}
<div class='btn-group'>
    <a href="{{ route('itemProgramacaos.edit', $id) }}" class='btn btn-default btn-xs'>
        <i class="glyphicon glyphicon-edit"></i>
    </a>
    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-danger btn-xs',
        'onclick' => "return confirm('Are you sure?')"
    ]) !!}
</div>
{!! Form::close() !!}
