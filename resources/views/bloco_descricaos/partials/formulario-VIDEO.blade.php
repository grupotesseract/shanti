@if (isset($blocosDescricao)) 
    {!! Form::model($blocosDescricao, ['route' => ['blocoDescricaos.update', $blocosDescricao->id], 'method' => 'patch']) !!}
@else
    {!! Form::open(['route' => 'blocoDescricaos.store']) !!}
@endif

{{-- Campos para o tipo VIDEO  --}}
<div class="form-group col-sm-12">
    {!! Form::label('url', 'Código do video no youtube. Ex: ') !!} https://www.youtube.com/watch?v=<strong style="color:red">WKK84yEBZoo</strong>
    {!! Form::text('url', isset($blocosDescricao) ? $blocosDescricao->getConteudo('url') : '', ['class' => 'form-control']) !!}
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
