<!-- Nome Field -->
<div class="form-group col-sm-4">
    {!! Form::label('nome', 'Nome do profissional:') !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>

<!-- Descricao Listagem Field -->
<div class="form-group col-sm-8">
    {!! Form::label('descricao_listagem', 'Função desempenhada') !!}
    {!! Form::text('descricao_listagem', null, ['class' => 'form-control']) !!}
</div>

<!-- Url Amigavel Field -->
<div class="form-group col-sm-8">
    {!! Form::label('url_amigavel', 'Link Amigavel') !!} <span>Ex: https://institutoshanti.com/quem-somos/...</span>
    {!! Form::text('url_amigavel', null, ['class' => 'form-control']) !!}
</div>

{{-- Incluindo o campo ativo_listagem para ja iniciar ativo --}}
{!! Form::hidden('ativo_listagem',true) !!}

<div class="col-xs-12 form-group">
{!! Form::label('descricao_interna', 'Descrição interna:') !!}
{{ Form::textarea('descricao_interna', old('descricao_interna'), ['class' => 'form-control summernote']) }}

</div>

<div class="col-xs-12 text-center">
    @if (isset($profissional) && $profissional->linkFotoQuemSomos)
        {!! Form::label('fotoListagem', 'Foto de perfil:') !!}<br>
        <img id="foto-listagem" style="max-width:450px" src="{{$profissional->linkFotoQuemSomos}}" alt="Foto do profissional"/>
    @else
        <strong>Adicione uma foto utilizando o botão abaixo. </strong>
    @endif
</div>

<!-- Foto da listagem Field -->
<div class="col-xs-12 text-center" style="padding-top:2rem;">
    @if (\Request::is('*edit*'))
        @include('fotos.partials.fields', [
            'label' => 'Foto de perfil:',
            'extraAttrs' => [
                'class' =>  'btn btn-primary btn-lg',
                'style' =>  'display:inline;' 
            ],
            'comCropper' => true,
            'aspectRatio' => 1,
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


<div class="form-group col-sm-12">
    <hr>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="" class="btn btn-default">Cancelar</a>
</div>
