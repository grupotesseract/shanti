<!-- Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome', 'Nome:') !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('Categorias', 'Categorias da referência:') !!}
    {{ Form::select('tags[]', [
        '#yoga' => '#yoga',
        '#meditacao' => '#meditação',
        '#naturologia' => '#naturologia',
        '#psicologia' => '#psicologia',
        '#espiritualidade' => '#espiritualidade',
    ], null, ['class' => 'select2 form-control', 'multiple' => 'multiple']) }}
</div>
<div class="clearfix"></div>

<div class="form-group col-sm-6">
    {!! Form::label('tipo', 'Tipo da referência:') !!}
    {{ Form::select('tipo', [
        '' => '',
        1 => 'Arquivo',
        2 => 'Link',
    ], null, ['class' => 'tipo form-control']) }}
</div>

<!-- Arquivo Field -->
<div class="form-group col-sm-6 tipo-condicional show-Arquivo" style="display:none">
    {!! Form::label('arquivo', 'Arquivo:') !!}
    {!! Form::file('arquivo') !!}
</div>

<!-- Arquivo Field -->
<div class="form-group col-sm-6 tipo-condicional show-Link" style="display:none">
    {!! Form::label('link', 'Link da referencia:') !!}
    {!! Form::text('link', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin-artigos.index') !!}" class="btn btn-default">Cancelar</a>
</div>
