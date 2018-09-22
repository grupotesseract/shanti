<!-- Descricao Listagem Field -->
<div class="form-group col-sm-4">
    {!! Form::label('texto_destaque', 'Texto de destaque') !!}
    {!! Form::text('texto_destaque', null, ['class' => 'form-control']) !!}
</div>

<!-- Descricao Listagem Field -->
<div class="form-group col-sm-4">
    @include('fotos.partials.fields', [
        'label' => 'Foto de perfil:'
    ])
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('infoHomepages.index') !!}" class="btn btn-default">Cancel</a>
</div>
