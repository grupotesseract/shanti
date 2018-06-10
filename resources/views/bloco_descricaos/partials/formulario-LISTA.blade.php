
<div class="col-xs-12">
    <div class="form-group">
        {!! Form::label('titulo', 'Titulo da lista:') !!}
        {!! Form::text('titulo', isset($blocosDescricao) ? $blocosDescricao->titulo : '', ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
    <hr></hr>
    </div>
    <div class="form-group">
        {!! Form::label('items', 'Items da lista:') !!}
    </div>
    @if (isset($blocosDescricao))
        @foreach($blocosDescricao->itemsListagem as $key => $item)
            <div class="form-group item-{{$key}}" >
                {!! Form::text("items[$key]", $item, ['class'=>'form-control item-listagem']) !!}

                <a href="javascript:removerItemListagem({{$key}})" class='btn btn-default'>
                    <i class="glyphicon glyphicon-trash"></i>
                </a>
            </div>
        @endforeach
    @else
        <div class="form-group item-0">
            {!! Form::text("items[0]", '', ['class'=>'form-control item-listagem']) !!}
            <a href="javascript:addItemListagem()" class='btn btn-default'>
                <i class="glyphicon glyphicon-plus"></i>
            </a>
        </div>
    @endif
    <div class="form-group">
    </div>
</div>
