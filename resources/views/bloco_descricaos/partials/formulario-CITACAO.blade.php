@if (isset($blocosDescricao)) 
    {!! Form::model($blocosDescricao, ['route' => ['blocoDescricaos.update', $blocosDescricao->id], 'method' => 'patch']) !!}
@else
    {!! Form::open(['route' => 'blocoDescricaos.store']) !!}
@endif

{{-- Campos para o tipo CITACAO  --}}
<div class="form-group col-sm-3">
    {!! Form::label('autor', 'Nome do autor:') !!}
    {!! Form::text('autor', isset($blocosDescricao) ? $blocosDescricao->getConteudo('autor') : '', ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-9">
    {!! Form::label('texto', 'Conteudo da citação:') !!}
    {!! Form::text('texto', isset($blocosDescricao) ? $blocosDescricao->getConteudo('texto') : '', ['class' => 'form-control']) !!}
</div>

{{-- Campos hidden --}}
{{ Form::hidden('owner_id', $owner->id) }}
{{ Form::hidden('owner_type', get_class($owner)) }}
{{ Form::hidden('tipo', $tipo) }}


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="edit" class="btn btn-default">Cancelar</a>
</div>

{!! Form::close() !!}
