<!-- Descricao Listagem Field -->
<div class="form-group col-sm-12">
    {!! Form::label('texto_destaque', 'Texto de destaque') !!} <span> (cor de fundo não funciona na Home, pode ser utilizada aqui para facilitar a visualização durante a edição)</span>
    <div class="col-xs-4" style="margin-left:-15px;">
    {!! Form::textarea('texto_destaque', $infoHomepage->texto_destaque, ['class' => 'form-control summernote']) !!}
    </div>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="/" class="btn btn-default">Cancelar</a>
</div>
