<!-- Nome Field -->
<div class="form-group col-sm-3">
    {!! Form::label('nome', 'Nome do trabalho:') !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>

<!-- Descricao Listagem Field -->
<div class="form-group col-sm-9">
    {!! Form::label('descricao_listagem', 'Descrição que aparece na listagem:') !!}
    {!! Form::text('descricao_listagem', null, ['class' => 'form-control']) !!}
</div>

<!-- Foto da Listagem Field -->
<div class="form-group col-sm-12">
    <div class="col-xs-12 text-center">
        @if (isset($trabalhoPortfolio) && $trabalhoPortfolio->linkFotoListagem)
            {!! Form::label('fotoListagem', 'Foto de listagem atual:') !!}<br>
            <img id="foto-listagem" style="max-width:450px" src="{{$trabalhoPortfolio->linkFotoListagem}}" alt="Foto de listagem do trabalho"/>
        @else
            <strong>Adicione uma foto de listagem utilizando o botão abaixo. </strong>
        @endif
    </div>
    
    <div class="col-xs-12 text-center" style="padding-top:2rem;">
        @if (\Request::is('*edit*'))
            @include('fotos.partials.fields', [
                'label' => 'Foto da listagem:',
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
</div>

<!-- Url Amigavel Field -->
<div class="form-group col-sm-12" style="margin-top:3rem;">
    {!! Form::label('url_amigavel', 'Link Amigavel') !!} <span>Ex: https://institutoshanti.com/portfolio/...</span>
    {!! Form::text('url_amigavel', null, ['class' => 'form-control']) !!}
</div>

{{-- Incluindo o campo ativo_listagem para ja iniciar ativo --}}
{!! Form::hidden('ativo_listagem',true) !!}

<div class="form-group col-sm-12">
    <hr>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('trabalhoPortfolios.index') !!}" class="btn btn-default">Cancelar</a>
</div>
