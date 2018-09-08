<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $trabalhoPortfolio->id !!}</p>
</div>

<!-- Nome Field -->
<div class="form-group">
    {!! Form::label('nome', 'Nome:') !!}
    <p>{!! $trabalhoPortfolio->nome !!}</p>
</div>

<!-- Descricao Listagem Field -->
<div class="form-group">
    {!! Form::label('descricao_listagem', 'Descricao Listagem:') !!}
    <p>{!! $trabalhoPortfolio->descricao_listagem !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $trabalhoPortfolio->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $trabalhoPortfolio->updated_at !!}</p>
</div>

