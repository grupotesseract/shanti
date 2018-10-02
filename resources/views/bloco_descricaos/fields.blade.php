<!-- Tipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo', 'Tipo:') !!}
    {!! Form::text('tipo', null, ['class' => 'form-control']) !!}
</div>

<!-- Ordem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ordem', 'Ordem:') !!}
    {!! Form::text('ordem', null, ['class' => 'form-control']) !!}
</div>

<!-- Json Conteudo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('json_conteudo', 'Json Conteudo:') !!}
    {!! Form::text('json_conteudo', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('blocoDescricaos.index') !!}" class="btn btn-default">Cancel</a>
</div>
