<div class="row">
    <div class="col-xs-12">
        <div class="col-xs-12 text-center">
            @if ($itemProgramacao->linkFotoCapa)
                {!! Form::label('fotoCapa', 'Foto de capa:') !!}<br>
                <img style="max-width:100%"src="{{$itemProgramacao->linkFotoCapa}}" alt="Foto de capa do trabalho" id="foto-capa"/>
            @else
                <strong>Adicione uma foto de capa utilizando os botões abaixo. </strong>
            @endif


        </div>
        <div class="col-xs-12 text-center">
            {!! Form::model($itemProgramacao, ['route' => ['itemProgramacaos.trocaFotoCapa', $itemProgramacao->id], 'files'=> true, 'id'=>"form-foto-capa"]) !!}

           {{-- Campo para upload da foto de capa--}}
            <div class="container-form-capa">
                @include('fotos.partials.fields', [
                    'label' => ' ',
                    'extraAttrs' => [
                        'class' =>  'btn btn-primary btn-lg',
                        'style' =>  'display:inline;',
                        'required' =>  '' 
                    ],
                    'comCropper' => true,
                    'aspectRatio' => 2.18,
                    'formID' => '#form-foto-capa',
                    'previewID' => '#foto-capa'
                ])
            </div>

           
           
            {!! Form::close() !!}

        </div>


        <div class="col-xs-3"></div>
        <div class="col-xs-6 text-center">
            <h3>{{$itemProgramacao->nome}}</h3>
            <p><span class="horario">27/02 | Terça</span><i class="far fa-clock fa-sm"></i> 16h00 às 20h00</p>
        </div>
        <div class="col-xs-3"></div>
    </div>

    <div class="col-xs-12">
        <hr>
    </div>

    {{-- Incluindo listagem de blocos que formam a descricao interna --}}
    <div id="container-blocos-descricao" class="col-xs-12 container-blocos-descricao">
        @include('bloco_descricaos.partials.listagem-blocos-descricao', [
            'owner' => $itemProgramacao
        ])
    </div>

    <div class="col-xs-12">
        <hr>
    </div>

    {{-- Incluindo menu inferior de adicionar novos blocos de descricao --}}
    @include ('bloco_descricaos.partials.menu-add', [
        'owner' => $itemProgramacao
    ])

</div>


