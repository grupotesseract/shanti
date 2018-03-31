<!-- Nome Field -->
<div class="form-group col-sm-4">
    {!! Form::label('nome', 'Nome do profissional:') !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>

<!-- Descricao Listagem Field -->
<div class="form-group col-sm-4">
    {!! Form::label('descricao_listagem', 'Função desempenhada') !!}
    {!! Form::text('descricao_listagem', null, ['class' => 'form-control']) !!}
</div>

<!-- Descricao Listagem Field -->
<div class="form-group col-sm-4">
    @include('fotos.partials.fields', [
        'label' => 'Foto de perfil:'
    ])
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('profissionals.index') !!}" class="btn btn-default">Cancelar</a>
</div>
