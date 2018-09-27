<!-- Citacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('citacao', 'Citacao:') !!}
    {!! Form::text('citacao', null, ['class' => 'form-control']) !!}
</div>

<!-- Autor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('autor', 'Autor:') !!}
    {!! Form::text('autor', null, ['class' => 'form-control']) !!}
</div>

<!-- Descricao Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descricao', 'Descricao:') !!}
    {!! Form::textarea('descricao', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('infoEspacos.index') !!}" class="btn btn-default">Cancel</a>
</div>
