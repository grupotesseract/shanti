<div class="row">
    <div class="col-xs-12">
        
        <div class="col-xs-12 text-center">
            @if ($infoEspaco->fotos)
                {!! Form::label('fotos', 'Fotos do carrossel:') !!}<br>
                @foreach($infoEspaco->fotos as $foto) 

                    <div class="col-xs-3" style="margin-top: 1rem;">
                        <div class="col-xs-12" style="padding: 10px; border: 1px solid #ccc;">
                            <img class="img-responsive" src="{{$foto->urlCloudinary}}" alt="Foto do carrossel da pagina O Espaco"/>
                            <br>
                            
                            {!! Form::open(['route' => ['fotos.destroy', $foto->id], 'method' => 'delete']) !!}
                            {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', [
                                'type' => 'submit',
                                'class' => 'btn btn-danger btn-xs',
                                'onclick' => "return confirm('Tem certeza? vai deletar a foto!')"
                            ]) !!}
                            {!! Form::close() !!}


                        </div>
                    </div>
                    
                @endforeach
            @else
                <strong>Adicione uma foto de fundo utilizando os botões abaixo. </strong>
            @endif


        </div>
        <div class="col-xs-12 text-center">
            {!! Form::open(['route' => ['fotos.store'], 'files'=> true]) !!}

           {{-- Campo para upload da foto de capa--}}
            <div class="container-form-capa text-center">
                @include('fotos.partials.fields', [
                    'label' => ' ',
                    'extraAttrs' => ['required', 'style="display:inline-block"']
                ])

                {!! Form::hidden("owner_id", $infoEspaco->id) !!}
                {!! Form::hidden("owner_type", \App\Models\InfoEspaco::class) !!}
                {!! Form::submit("Adicionar nova Foto", ['class' => 'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
        <div class="col-xs-12">
            <hr>
        </div>
    </div>

</div>



