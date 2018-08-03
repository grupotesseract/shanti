@if (isset($blocosDescricao)) 
    {!! Form::model($blocosDescricao, ['route' => ['blocoDescricaos.update', $blocosDescricao->id], 'method' => 'patch']) !!}
@else
    {!! Form::open(['route' => 'blocoDescricaos.store']) !!}
@endif
<div class="col-xs-12">
    <div class="form-group">
        {!! Form::label('titulo', 'Titulo da lista:') !!}
        {!! Form::text('titulo', isset($blocosDescricao) ? $blocosDescricao->getConteudo('titulo') : '', ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        <hr></hr>
    </div>
    <div class="form-group">
        {!! Form::label('items', 'Items da lista:') !!}
    </div>
    @if (isset($blocosDescricao))
            <div class="form-group col-xs-6">
                {!! Form::text("items[0]", $blocosDescricao->getConteudo('items')[0], ['class'=>'form-control item-listagem']) !!} <br>
                {!! Form::text("items[1]", $blocosDescricao->getConteudo('items')[1], ['class'=>'form-control item-listagem']) !!} <br>
                {!! Form::text("items[2]", $blocosDescricao->getConteudo('items')[2], ['class'=>'form-control item-listagem']) !!} <br>
                {!! Form::text("items[3]", $blocosDescricao->getConteudo('items')[3], ['class'=>'form-control item-listagem']) !!} <br>
                {!! Form::text("items[4]", $blocosDescricao->getConteudo('items')[4], ['class'=>'form-control item-listagem']) !!} <br>
            </div>
            <div class="form-group col-xs-6">
                {!! Form::text("items[5]", $blocosDescricao->getConteudo('items')[5], ['class'=>'form-control item-listagem']) !!} <br>
                {!! Form::text("items[6]", $blocosDescricao->getConteudo('items')[6], ['class'=>'form-control item-listagem']) !!} <br>
                {!! Form::text("items[7]", $blocosDescricao->getConteudo('items')[7], ['class'=>'form-control item-listagem']) !!} <br>
                {!! Form::text("items[8]", $blocosDescricao->getConteudo('items')[8], ['class'=>'form-control item-listagem']) !!} <br>
                {!! Form::text("items[9]", $blocosDescricao->getConteudo('items')[9], ['class'=>'form-control item-listagem']) !!} <br>
            </div>
    @else
        <div class="form-group col-xs-6">
            {!! Form::text("items[0]", '', ['class'=>'form-control item-listagem']) !!} <br>
            {!! Form::text("items[1]", '', ['class'=>'form-control item-listagem']) !!} <br>
            {!! Form::text("items[2]", '', ['class'=>'form-control item-listagem']) !!} <br>
            {!! Form::text("items[3]", '', ['class'=>'form-control item-listagem']) !!} <br>
            {!! Form::text("items[4]", '', ['class'=>'form-control item-listagem']) !!} <br>
        </div>
        <div class="form-group col-xs-6">
            {!! Form::text("items[5]", '', ['class'=>'form-control item-listagem']) !!} <br>
            {!! Form::text("items[6]", '', ['class'=>'form-control item-listagem']) !!} <br>
            {!! Form::text("items[7]", '', ['class'=>'form-control item-listagem']) !!} <br>
            {!! Form::text("items[8]", '', ['class'=>'form-control item-listagem']) !!} <br>
            {!! Form::text("items[9]", '', ['class'=>'form-control item-listagem']) !!} <br>
        </div>
    @endif


    {{-- Campos hidden --}}
    {{ Form::hidden('profissional_id', $profissionalId) }}
    {{ Form::hidden('tipo', $tipo) }}


    <!-- Submit Field -->
    <div class="form-group col-sm-12">
        {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
        <a href="/profissionals/{{$profissionalId}}/informacoes-pagina-interna" class="btn btn-default">Cancelar</a>
    </div>



</div>




{!! Form::close() !!}
