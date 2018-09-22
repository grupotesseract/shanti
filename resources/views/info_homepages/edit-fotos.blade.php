<div class="row">
    <div class="col-xs-12">
        <div class="col-xs-12 text-center">
            @if ($infoHomepage->linkFotoFundo)
                {!! Form::label('fundo', 'Foto de fundo:') !!}<br>
                <img style="max-width:75%"src="{{$infoHomepage->linkFotoFundo}}" alt="Foto de fundo da home"/>
            @else
                <strong>Adicione uma foto de fundo utilizando os botões abaixo. </strong>
            @endif


        </div>
        <div class="col-xs-12 text-center">
            {!! Form::open(['route' => ['fotos.trocaFoto', $infoHomepage->fotoFundo->first()->id], 'files'=> true]) !!}

           {{-- Campo para upload da foto de capa--}}
            <div class="container-form-capa">
                @include('fotos.partials.fields', [
                    'label' => ' ',
                    'extraAttrs' => ['required']
                ])

                {!! Form::hidden("tipo", \App\Models\Foto::TIPO_HOME_BG)!!}
                {!! Form::hidden("owner_id", $infoHomepage->id) !!}
                {!! Form::hidden("owner_type", \App\Models\InfoHomepage::class) !!}
                {!! Form::submit("Trocar Foto", ['class' => 'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
        <div class="col-xs-12">
            <hr>
        </div>
        <div class="col-xs-4 text-center">
            <div class="col-xs-12 text-center">
                @if ($infoHomepage->fotoServicos)
                    {!! Form::label('fundo', 'Foto de serviços:') !!}<br>
                    <img style="width: 160px; border-radius: 50%; height: 160px;"src="{{$infoHomepage->linkFotoServicos}}" alt="Foto de fundo da home"/>
                @else
                    <strong>Adicione uma foto de fundo utilizando os botões abaixo. </strong>
                @endif
            </div>
            <hr>
            {!! Form::open(['route' => ['fotos.trocaFoto', $infoHomepage->fotoServicos->first()->id], 'files'=> true]) !!}
            {!! Form::hidden("tipo", \App\Models\Foto::TIPO_HOME_SERVICOS)!!}
            {!! Form::hidden("owner_id", $infoHomepage->id) !!}
            {!! Form::hidden("owner_type", \App\Models\InfoHomepage::class) !!}

            {{-- Campo para upload da foto --}}
            <div class="container-form-capa">
                @include('fotos.partials.fields', [
                    'label' => ' ',
                    'extraAttrs' => ['required']
                ])
                {!! Form::submit("Trocar Foto", ['class' => 'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>

        <div class="col-xs-4 text-center">
            <div class="col-xs-12 text-center">
                @if ($infoHomepage->fotoCursos)
                    {!! Form::label('fundo', 'Foto de cursos:') !!}<br>
                    <img style="width: 160px; border-radius: 50%; height: 160px;"src="{{$infoHomepage->linkFotoCursos}}" alt="Foto de fundo da home"/>
                @else
                    <strong>Adicione uma foto de fundo utilizando os botões abaixo. </strong>
                @endif
            </div>
            <hr>
            {!! Form::open(['route' => ['fotos.trocaFoto', $infoHomepage->fotoCursos->first()->id], 'files'=> true]) !!}
            {!! Form::hidden("tipo", \App\Models\Foto::TIPO_HOME_CURSOS)!!}
            {!! Form::hidden("owner_id", $infoHomepage->id) !!}
            {!! Form::hidden("owner_type", \App\Models\InfoHomepage::class) !!}

            {{-- Campo para upload da foto --}}
            <div class="container-form-capa">
                @include('fotos.partials.fields', [
                    'label' => ' ',
                    'extraAttrs' => ['required']
                ])
                {!! Form::submit("Trocar Foto", ['class' => 'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>


        <div class="col-xs-4 text-center">
            <div class="col-xs-12 text-center">
                @if ($infoHomepage->linkFotoEventos)
                    {!! Form::label('fundo', 'Foto de Eventos:') !!}<br>
                    <img style="width: 160px; border-radius: 50%; height: 160px;"src="{{$infoHomepage->linkFotoEventos}}" alt="Foto de fundo da home"/>
                @else
                    <strong>Adicione uma foto de fundo utilizando os botões abaixo. </strong>
                @endif
            </div>
            <hr>
            {!! Form::open(['route' => ['fotos.trocaFoto', $infoHomepage->fotoEventos->first()->id], 'files'=> true]) !!}
            {!! Form::hidden("tipo", \App\Models\Foto::TIPO_HOME_EVENTOS)!!}
            {!! Form::hidden("owner_id", $infoHomepage->id) !!}
            {!! Form::hidden("owner_type", \App\Models\InfoHomepage::class) !!}

            {{-- Campo para upload da foto --}}
            <div class="container-form-capa">
                @include('fotos.partials.fields', [
                    'label' => ' ',
                    'extraAttrs' => ['required']
                ])
                {!! Form::submit("Trocar Foto", ['class' => 'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>

</div>



