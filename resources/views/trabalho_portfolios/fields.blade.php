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

<!-- Descricao Listagem Field -->
<div class="form-group col-sm-12">
    <div class="col-xs-12 text-center">
        @if ($trabalhoPortfolio->linkFotoListagem)
            {!! Form::label('fotoCapa', 'Foto de listagem atual:') !!}<br>
            <img style="max-width:100%"src="{{$trabalhoPortfolio->linkFotoListagem}}" alt="Foto de listagem do trabalho"/>
        @else
            <strong>Adicione uma foto de listagem utilizando os botões abaixo. </strong>
        @endif
    </div>
    
    <p>
        {{-- Campos de upload de foto --}}
        {!! Form::label(isset($name) ? $name : 'file', isset($label) ? $label : 'Foto para listagem:') !!}
        {!! Form::file(isset($name) ? $name : 'file', array(
            'class' => 'btn btn-lg btn-primary',
            'id' => 'fileInput',
            'style' => 'margin-bottom: 10px'))
        !!}

        <div id="myDiv" style="display: none">{{ $trabalhoPortfolio }}</div>

        {{-- <input name="file" type="file" id="file"> --}}

        <!-- Below are a series of inputs which allow file selection and interaction with the cropper api -->
        {{-- <input type="file" name="file" class="btn btn-lg btn-primary" id="fileInput" style="margin-bottom: 10px"/> --}}

        <input type="button" class="btn btn-lg btn-warning" id="btnCrop" value="Cortar Imagem" />

        <input type="button" class="btn btn-lg btn-info" id="btnRestore" value="Desfazer" />
    </p>

    <div>
        <canvas id="canvas">
            Your browser does not support the HTML5 canvas element.
        </canvas>
    </div>

    <div id="result"></div>

    {{-- @include('fotos.partials.fields', [
        'label' => 'Foto da listagem:'
    ]) --}}
</div>

{{-- Incluindo o campo ativo_listagem para ja iniciar ativo --}}
{!! Form::hidden('ativo_listagem',true) !!}

<div class="form-group col-sm-12">
    <hr>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {{-- <input type="button" class="btn btn-lg btn-success" id="btnSave" value="Salvar" /> --}}
    {!! Form::submit('Salvar', ['class' => 'btn btn-lg btn-success']) !!}
    <a href="{!! route('trabalhoPortfolios.index') !!}" class="btn btn-lg btn-default">Cancelar</a>
</div>
