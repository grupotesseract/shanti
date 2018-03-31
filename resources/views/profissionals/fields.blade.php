<!-- Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome', 'Nome:') !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>

<!-- Descricao Listagem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descricao_listagem', 'Descricao Listagem:') !!}
    {!! Form::text('descricao_listagem', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('profissionals.index') !!}" class="btn btn-default">Cancel</a>
</div>
