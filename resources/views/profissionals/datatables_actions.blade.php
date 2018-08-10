<div class='btn-group'>
    @if ( !$profissional->ativo_listagem )
    {!! Form::open(['url' => '/profissionals/'.$id.'/ativa-listagem']) !!}
        {!! Form::button('<i class="fa fa-eye"></i>', [
            'type' => 'submit',
            'class' => 'btn btn-default btn-xs',
            'onclick' => "return confirm('Ativar a exibição desse profissional?')"
        ]) !!}
    {!! Form::close() !!}
    @else
    {!! Form::open(['url' => '/profissionals/'.$id.'/remove-listagem']) !!}
        {!! Form::button('<i class="fa fa-eye-slash"></i>', [
            'type' => 'submit',
            'class' => 'btn btn-warning btn-xs',
            'onclick' => "return confirm('Parar a exibição desse profissional?')"
        ]) !!}
    {!! Form::close() !!}
@endif
</div>
<div class='btn-group'>
    <a href="{{ route('profissionals.edit', $id) }}" class='btn btn-default btn-xs'>
        <i class="glyphicon glyphicon-edit"></i>
    </a>
</div>
<div class='btn-group'>
{!! Form::open(['route' => ['profissionals.destroy', $id], 'method' => 'delete']) !!}
    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-danger btn-xs',
        'onclick' => "return confirm('Tem certeza?')"
    ]) !!}
{!! Form::close() !!}
</div>
