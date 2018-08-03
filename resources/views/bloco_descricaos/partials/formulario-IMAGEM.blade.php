@if (isset($blocosDescricao)) 
    {!! Form::model($blocosDescricao, ['route' => ['blocoDescricaos.update', $blocosDescricao->id], 'method' => 'patch', 'files' => true]) !!}
@else
    {!! Form::open(['route' => 'blocoDescricaos.store', 'files' => true]) !!}
@endif

{{-- Campos para o tipo IMAGEM  --}}
<div class="form-group col-sm-4">
    @include('fotos.partials.fields', [
        'label' => 'Upload da Imagem:'
    ])
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