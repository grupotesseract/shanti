@if (isset($blocosDescricao)) 
    {!! Form::model($blocosDescricao, ['route' => ['blocoDescricaos.update', $blocosDescricao->id], 'method' => 'patch']) !!}
@else
    {!! Form::open(['route' => 'blocoDescricaos.store']) !!}
@endif

{{-- Campos para o tipo TEXTO  --}}
<div class="form-group col-sm-12">
    {!! Form::label('json_conteudo[texto]', 'Conteudo da seção de texto:') !!}
    {!! Form::textarea('json_conteudo[texto]', isset($blocosDescricao) ? $blocosDescricao->conteudoTexto : '', ['class' => 'form-control']) !!}
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
