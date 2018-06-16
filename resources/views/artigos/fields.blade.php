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
	{{ Form::select('tags[]', ['#yoga', '#terapia', '#naturologia', '#medicina', '#grupos', '#mantras'], null, ['class' => 'select2', 'multiple' => 'multiple']) }}
</div>
<div class="clearfix"></div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('artigos.index') !!}" class="btn btn-default">Cancel</a>
</div>
