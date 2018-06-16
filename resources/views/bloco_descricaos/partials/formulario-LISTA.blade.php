@if (isset($blocosDescricao)) 
    {!! Form::model($blocosDescricao, ['route' => ['blocoDescricaos.update', $blocosDescricao->id], 'method' => 'patch']) !!}
@else
    {!! Form::open(['route' => 'blocoDescricaos.store']) !!}
@endif
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
            @forelse($blocosDescricao->itemsListagem as $key => $item)
                <div data-item="{{$key}}" class="form-group" >
                    {!! Form::text("items[$key]", $item, ['class'=>'form-control item-listagem']) !!}

                    <a href="javascript:removerItemListagem({{$key}})" class='btn btn-default'>
                        <i class="glyphicon glyphicon-trash"></i>
                    </a>
                </div>
            @empty
            <div  data-item="0" class="form-group item-listagem item-0">
                {!! Form::text("items[0]", '', ['class'=>'form-control item-listagem']) !!}
                <a href="#" class='btn btn-default btn-add'>
                    <i class="glyphicon glyphicon-plus"></i>
                </a>
            </div>
            @endforelse
        @else
            <div data-item="0" class="form-group  item-listagem item-0">
                {!! Form::text("items[0]", '', ['class'=>'form-control item-listagem']) !!}
                <a href="#" class='btn btn-default btn-add'>
                    <i class="glyphicon glyphicon-plus"></i>
                </a>
            </div>
        @endif
    </div>
{!! Form::close() !!}

{{-- Linha da lista de exemplo pra ser copiada/colada  --}}
<div class="hide">
    <div data-item="#ID#" class="form-group item-listagem item-modelo">
        {!! Form::text("items[#ID#]", '', ['class'=>'form-control item-listagem']) !!}
        <a href="#" class='btn btn-default btn-add'>
            <i class="glyphicon glyphicon-plus"></i>
        </a>
    </div>
</div>
