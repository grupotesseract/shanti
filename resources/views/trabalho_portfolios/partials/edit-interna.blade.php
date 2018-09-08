<div class="row">
    <div class="col-xs-12">
        <div class="col-xs-12 text-center">
            {!! Form::label('fotoCapa', 'Foto de capa:') !!}<br>
            <img src="{{$trabalhoPortfolio->linkFotoListagem}}" alt="Foto de capa do trabalho"/>
        </div>
        <div class="col-xs-12 text-center">
           {!! Form::model($trabalhoPortfolio, ['route' => ['trabalhoPortfolios.trocaFotoCapa', $trabalhoPortfolio->id], 'files'=> true]) !!}

           {{-- Campo para upload da foto de capa--}}
            <div class="container-form-capa">
                @include('fotos.partials.fields', [
                    'label' => ' ',
                    'extraAttrs' => ['required']
                ])

                {!! Form::submit('Trocar Foto', ['class' => 'btn btn-primary']) !!}
                
            </div>
           
           
            {!! Form::close() !!}

        </div>


        <div class="col-xs-6">
            <h3>{{$trabalhoPortfolio->nome}}</h5>
            <p>{{$trabalhoPortfolio->descricao_listagem}}</p>
        </div>
    </div>

    <div class="col-xs-12">
        <hr>
    </div>

    {{-- Incluindo listagem de blocos que formam a descricao interna --}}
    <div id="container-blocos-descricao" class="col-xs-12 container-blocos-descricao">
        @include('bloco_descricaos.partials.listagem-blocos-descricao', [
            'owner' => $trabalhoPortfolio
        ])
    </div>

    <div class="col-xs-12">
        <hr>
    </div>

    {{-- Incluindo menu inferior de adicionar novos blocos de descricao --}}
    @include ('bloco_descricaos.partials.menu-add', [
        'owner' => $trabalhoPortfolio
    ])

</div>


