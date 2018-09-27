<!-- Descricao Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descricao', 'Descricao:') !!}
    {!! Form::textarea('descricao', null, ['class' => 'form-control summernote']) !!}
</div>

<!-- Citacao Field -->
<div class="form-group col-sm-12">
    {!! Form::label('citacao', 'Citacao:') !!}
    {!! Form::textarea('citacao', null, ['class' => 'form-control', 'rows' => 3]) !!}
</div>

<!-- Autor Field -->
<div class="form-group col-sm-12">
    {!! Form::label('autor', 'Autor:') !!}
    {!! Form::text('autor', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="/admin" class="btn btn-default">Cancelar</a>
</div>
