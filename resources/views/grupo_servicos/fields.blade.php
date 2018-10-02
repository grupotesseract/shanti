<!-- Titulo Field -->
<div class="form-group col-sm-3">
    {!! Form::label('titulo', 'Titulo:') !!}
    {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
</div>

<!-- Lista Servicos Field -->
<div class="form-group col-sm-9">
    {!! Form::label('lista_servicos', 'Lista de Serviços') !!} (aparecem na listagem. Devem estar separados por vírgula)
    {!! Form::text('lista_servicos', null, ['class' => 'form-control', 'placeholder' => 'Yoga para gestantes,Yoga para crianças,Yoga para casais']) !!}
</div>

<!-- Descricao Grupo Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descricao_grupo', 'Descrição do grupo de serviços') !!} (aparece na coluna da esquerda):
    {!! Form::textarea('descricao_grupo', null, ['class' => 'form-control summernote']) !!}
</div>

<!-- Descricao Servicos Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descricao_servicos', 'Descrição dos serviços') !!}  (aparece na coluna da direita):
    {!! Form::textarea('descricao_servicos', null, ['class' => 'form-control summernote']) !!}
</div>



<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('grupoServicos.index') !!}" class="btn btn-default">Cancelar</a>
</div>
