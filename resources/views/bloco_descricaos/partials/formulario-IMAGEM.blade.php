@include('flash::message')

<div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
        <li class="@if (\Request::get('tab') != 'tab_2') active @endif"><a href="#tab_1" data-toggle="tab" aria-expanded="true">1 Imagem</a></li>
        <li class="@if (\Request::get('tab') == 'tab_2') active @endif"><a href="#tab_2" data-toggle="tab" aria-expanded="false">2 Imagens</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane @if (\Request::get('tab') != 'tab_2') active @endif" id="tab_1">
            @if (isset($blocosDescricao)) 
                {!! Form::model($blocosDescricao, ['route' => ['blocoDescricaos.update', $blocosDescricao->id], 'method' => 'patch', 'files' => true]) !!}
            @else
                {!! Form::open(['route' => 'blocoDescricaos.store', 'files' => true]) !!}
            @endif


            {{-- Campos para o tipo IMAGEM  --}}
            <div class="form-group col-sm-6">
                @include('fotos.partials.fields', [
                    'label' => 'Selecione a foto:',
                    'name' => 'file'
                ])
            </div>

            {{-- Campos hidden --}}
            {{ Form::hidden('owner_id', $owner->id) }}
            {{ Form::hidden('owner_type', get_class($owner)) }}
            {{ Form::hidden('tipo', $tipo) }}


            <!-- Submit Field -->
            <div class="form-group col-sm-12">
                {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
                <a href="edit" class="btn btn-default">Cancelar</a>
            </div>

            {!! Form::close() !!}


        </div>
        <!-- /.tab-pane -->
        <div class="tab-pane @if (\Request::get('tab') == 'tab_2') active @endif" id="tab_2">
            @if (isset($blocosDescricao)) 
                {!! Form::model($blocosDescricao, ['route' => ['blocoDescricaos.update', $blocosDescricao->id], 'method' => 'patch', 'files' => true]) !!}
            @else
                {!! Form::open(['route' => 'blocoDescricaos.store', 'files' => true]) !!}
            @endif

            {{-- Campos para o tipo IMAGEM  --}}
            <div class="form-group col-sm-6">
                @include('fotos.partials.fields', [
                    'label' => 'Foto da esquerda:',
                    'name' => 'file[]'
                ])
            </div>

            {{-- Campos para o tipo IMAGEM  --}}
            <div class="form-group col-sm-6">
                @include('fotos.partials.fields', [
                    'label' => 'Foto da direita:',
                    'name' => 'file[]'
                ])
            </div>

            {{-- Campos hidden --}}
            {{ Form::hidden('owner_id', $owner->id) }}
            {{ Form::hidden('owner_type', get_class($owner)) }}
            {{ Form::hidden('tipo', $tipo) }}


            <!-- Submit Field -->
            <div class="form-group col-sm-12">
                {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
                <a href="edit" class="btn btn-default">Cancelar</a>
            </div>

            {!! Form::close() !!}


        </div>
        <!-- /.tab-pane -->
    </div>
    <!-- /.tab-content -->
</div>

