<!-- Titulo Field -->
<div class="form-group col-sm-3">
    {!! Form::label('titulo', 'Titulo:') !!}
    {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
</div>

<!-- Lista Servicos Field -->
<div class="form-group col-sm-9">
    {!! Form::label('lista_servicos', 'Lista Servicos (separados por virgula):') !!}
    {!! Form::text('lista_servicos', null, ['class' => 'form-control', 'placeholder' => 'Yoga para gestantes,Yoga para crianças,Yoga para casais']) !!}
</div>

<!-- Descricao Grupo Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descricao_grupo', 'Descricao Grupo:') !!}
    {!! Form::textarea('descricao_grupo', null, ['class' => 'form-control textarea-ck']) !!}
</div>

<!-- Descricao Servicos Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descricao_servicos', 'Descricao Servicos:') !!}
    {!! Form::textarea('descricao_servicos', null, ['class' => 'form-control textarea-ck']) !!}
</div>



<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('grupoServicos.index') !!}" class="btn btn-default">Cancel</a>
</div>
