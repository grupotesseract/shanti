<div class="row">
    <div class="col-xs-12">
        <div class="col-xs-6 text-center">
            <img src="{{$profissional->linkFotoQuemSomos}}" alt="Foto da listagem do profissional"/>
        </div>
        <div class="col-xs-6">
            <h3>{{$profissional->nome}}</h5>
            <p>{{$profissional->descricao_listagem}}</p>

            {{-- 'Escapando' a descricao_interna, pois vem de um editor WYSWYG --}}
            {!! $profissional->descricao_interna !!}
        </div>
    </div>

    <div class="col-xs-12">
        <hr>
    </div>

    {{-- Incluindo listagem de blocos que formam a descricao interna --}}
    <div id="container-blocos-descricao" class="col-xs-12 container-blocos-descricao">
        @include('bloco_descricaos.partials.listagem-blocos-descricao', [
            'owner' => $profissional
        ])
    </div>

    <div class="col-xs-12">
        <hr>
    </div>

    {{-- Incluindo menu inferior de adicionar novos blocos de descricao --}}
    @include ('bloco_descricaos.partials.menu-add', [
        'owner' => $profissional
    ])

</div>


