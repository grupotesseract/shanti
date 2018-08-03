@if (isset($blocosDescricao)) 
    {!! Form::model($blocosDescricao, ['route' => ['blocoDescricaos.update', $blocosDescricao->id], 'method' => 'patch']) !!}
@else
    {!! Form::open(['route' => 'blocoDescricaos.store']) !!}
@endif

{{-- Campos para o tipo BOTAO  --}}
<div class="form-group col-sm-3">
    {!! Form::label('texto', 'Texto do botão :') !!}
    {!! Form::text('texto', isset($blocosDescricao) ? $blocosDescricao->getConteudo('texto') : '', ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-9">
    {!! Form::label('url', 'Link de destino:') !!}
    {!! Form::text('url', isset($blocosDescricao) ? $blocosDescricao->getConteudo('url') : '', ['class' => 'form-control']) !!}
</div>

{{-- Campos hidden --}}
{{ Form::hidden('profissional_id', $profissionalId) }}
{{ Form::hidden('tipo', $tipo) }}


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="/profissionals/{{$profissionalId}}/informacoes-pagina-interna" class="btn btn-default">Cancelar</a>
</div>

{!! Form::close() !!}
