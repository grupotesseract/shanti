<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $grupoServico->id !!}</p>
</div>

<!-- Titulo Field -->
<div class="form-group">
    {!! Form::label('titulo', 'Titulo:') !!}
    <p>{!! $grupoServico->titulo !!}</p>
</div>

<!-- Descricao Grupo Field -->
<div class="form-group">
    {!! Form::label('descricao_grupo', 'Descricao Grupo:') !!}
    <p>{!! $grupoServico->descricao_grupo !!}</p>
</div>

<!-- Descricao Servicos Field -->
<div class="form-group">
    {!! Form::label('descricao_servicos', 'Descricao Servicos:') !!}
    <p>{!! $grupoServico->descricao_servicos !!}</p>
</div>

<!-- Lista Servicos Field -->
<div class="form-group">
    {!! Form::label('lista_servicos', 'Lista Servicos:') !!}
    <p>{!! $grupoServico->lista_servicos !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $grupoServico->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $grupoServico->updated_at !!}</p>
</div>

