<!-- Tipo Field -->
<div class="form-group col-sm-3">
    {!! Form::label('tipo', 'Tipo:') !!}
    {!! Form::select('tipo', [null => 'Tipo da programação', '1' => 'CURSO', '2' => 'CURSO SEM DATA', '3' => 'EVENTO'], null, ['class' => 'form-control tipo-select']) !!}
</div>

<!-- Nome Field -->
<div class="form-group col-sm-5">
    {!! Form::label('nome', 'Nome:') !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>

<!-- descricao_listagem, Field -->
<div class="form-group col-sm-4 hide campos-data">
    {!! Form::label('descricao_listagem', 'Breve Descrição (dentro da caixa vinho)') !!}
    {!! Form::text('descricao_listagem', null, ['class' => 'form-control']) !!}
</div>

<!-- Link Facebook Field -->
<div class="form-group col-sm-4">
    {!! Form::label('link_facebook', 'Link Facebook (opcional):') !!}
    {!! Form::text('link_facebook', null, ['class' => 'form-control']) !!}
</div>

<!-- Horario Field -->
<div class="form-group col-sm-3 hide campos-data">
    {!! Form::label('horario', 'Horário (opcional)') !!}
    {!! Form::text('horario', null, ['class' => 'form-control']) !!}
</div>

<!-- Breve descricao Field -->
<div class="form-group col-sm-9">
    {!! Form::label('breve_descricao_listagem', 'Descrição (opcional)') !!}
    {!! Form::textarea('breve_descricao_listagem', null, ['class' => 'form-control', 'rows' => 3]) !!}
</div>

<div class="col-xs-12 text-center">
    @if (isset($itemProgramacao) && $itemProgramacao->linkFotoListagem)
        {!! Form::label('fotoListagem', 'Foto da listagem:') !!}<br>
        <img id="foto-listagem" style="max-width:450px" src="{{$itemProgramacao->linkFotoListagem}}" alt="Foto do profissional"/>
    @else
        <strong>Adicione uma foto utilizando o botão abaixo. </strong>
    @endif
</div>

<!-- Foto da listagem Field -->
<div class="col-xs-12 text-center" style="padding-top:2rem;">
    @if (\Request::is('*edit*'))
        @include('fotos.partials.fields', [
            'label' => 'Foto da listagem:',
            'extraAttrs' => [
                'class' =>  'btn btn-primary btn-lg',
                'style' =>  'display:inline;' 
            ],
            'comCropper' => true,
            'aspectRatio' => 1.67,
            'formID' => '#form-geral',
            'previewID' => '#foto-listagem'
        ])
    @else
        @include('fotos.partials.fields', [
            'label' => 'Foto da listagem:',
            'extraAttrs' => [
                'class' =>  'btn btn-primary btn-lg',
                'style' =>  'display:inline;' 
            ]
        ])

    @endif
</div>

<!-- Url Amigavel Field -->
<div class="form-group col-sm-12" style="margin-top:3rem;">
    {!! Form::label('url_amigavel', 'Link Amigavel') !!} <span>Ex: https://institutoshanti.com/programacao/...</span>
    {!! Form::text('url_amigavel', null, ['class' => 'form-control']) !!}
</div>


{{-- Incluindo o campo ativo_listagem para ja iniciar ativo --}}
{!! Form::hidden('ativo_listagem',true) !!}

<div class="form-group col-sm-12">
    <hr>
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('itemProgramacaos.index') !!}" class="btn btn-default">Cancel</a>
</div>

