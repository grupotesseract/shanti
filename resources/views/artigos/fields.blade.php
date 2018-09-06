<!-- Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome', 'Nome:') !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>

<!-- Arquivo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('arquivo', 'Arquivo:') !!}
    {!! Form::file('arquivo') !!}
</div>
<div class="clearfix"></div>

<div class="form-group col-sm-6">
    {!! Form::label('Tags', 'Tags:') !!}
    {{ Form::select('tags[]', ['#yoga' => '#yoga', '#terapia' => '#terapia', '#naturologia' => '#naturologia', '#medicina' =>'#medicina', '#grupos' =>'#grupos', '#mantras' =>'#mantras'], null, ['class' => 'select2 form-control', 'multiple' => 'multiple']) }}
</div>
<div class="clearfix"></div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin-artigos.index') !!}" class="btn btn-default">Cancelar</a>
</div>
