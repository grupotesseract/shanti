<!-- Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome', 'Nome:') !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Field -->
<div class="form-group col-sm-3">
    {!! Form::label('tipo', 'Tipo:') !!}
    {!! Form::select('tipo', [null => 'Tipo da programação', '1' => 'CURSO', '2' => 'CURSO SEM DATA', '3' => 'EVENTO'], null, ['class' => 'form-control tipo-select']) !!}
</div>

<!-- Data Field -->
<div class="form-group col-sm-2 hide campos-data">
    {!! Form::label('data', 'Data:') !!}
    {!! Form::date('data', null, ['class' => 'form-control']) !!}
</div>

<!-- Horario Field -->
<div class="form-group col-sm-2 hide campos-data">
    {!! Form::label('horario', 'Horario:') !!}
    {!! Form::text('horario', null, ['class' => 'form-control']) !!}
</div>

<!-- Link Facebook Field -->
<div class="form-group col-sm-4">
    {!! Form::label('link_facebook', 'Link Facebook:') !!}
    {!! Form::text('link_facebook', null, ['class' => 'form-control']) !!}
</div>



<!-- Descricao Listagem Field -->
<div class="form-group col-sm-6">
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
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('itemProgramacaos.index') !!}" class="btn btn-default">Cancel</a>
</div>

