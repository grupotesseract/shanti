{!! Form::open(['route' => 'contato-send']) !!}

<div class="form-group">
    {!! Form::text('nome', null, ['class' => 'form-control', 'id' => 'nome-input', 'placeholder' => 'Nome']) !!}
</div>

<div class="form-group">
    {!! Form::email('email', null, ['class' => 'form-control', "placeholder" => "Email", 'id' => 'email-input', "aria-describedby"=>"emailHelp"]) !!}
</div>

<div class="form-group">
    {!! Form::text('telefone', null, ['class' => 'form-control', "placeholder" => "(99) 9 9999-9999", 'id' => 'telefone-input']) !!}
</div>

<div class="form-group">
    {!! Form::textarea('observacao', null, ['class' => 'form-control', "placeholder" => "Mensagem", 'id' => 'observacao-input', 'rows' => 3]) !!}
</div>

<div class="button">
    <button type="submit" class="btn btn-primary">Enviar</button>
</div>

{!! Form::close() !!}
