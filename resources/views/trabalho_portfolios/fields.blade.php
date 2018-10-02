<!-- Nome Field -->
<div class="form-group col-sm-3">
    {!! Form::label('nome', 'Nome do trabalho:') !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>

<!-- Descricao Listagem Field -->
<div class="form-group col-sm-9">
    {!! Form::label('descricao_listagem', 'Descrição que aparece na listagem:') !!}
    {!! Form::text('descricao_listagem', null, ['class' => 'form-control']) !!}
</div>

<!-- Descricao Listagem Field -->
<div class="form-group col-sm-12">
    @include('fotos.partials.fields', [
        'label' => 'Foto da listagem:'
    ])
</div>

{{-- Incluindo o campo ativo_listagem para ja iniciar ativo --}}
{!! Form::hidden('ativo_listagem',true) !!}

<div class="form-group col-sm-12">
    <hr>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('trabalhoPortfolios.index') !!}" class="btn btn-default">Cancelar</a>
</div>
