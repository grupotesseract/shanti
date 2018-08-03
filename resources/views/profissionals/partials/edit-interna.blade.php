@extends('layouts.app')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
<meta name="csrf-token" content="{{ csrf_token() }}" />
@endsection

@section('content')
<section class="content-header">
    <h1>
        Informações do profissional
    </h1>
</section>
<div class="content">
    @include('adminlte-templates::common.errors')
    @include('flash::message')
    <div class="box box-primary">

        <div class="box-body">
            <div class="row">
                <div class="col-xs-12">
                    <div class="col-xs-6">
                        <div class="col-xs-6 text-center">
                            <img src="{{$profissional->linkFotoQuemSomos}}" alt="Foto da listagem do profissional"/>
                        </div>
                        <div class="col-xs-6">
                            <button class="btn btn-default"><i class="fa fa-crop"></i> Cortar Foto</button>
                            
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <h2>{{$profissional->nome}}</h2>
                        <h2>{{$profissional->descricao_listagem}}</h2>
                        {!! $profissional->descricao_interna !!}
                    </div>
                </div>
                <div class="col-xs-12">
                    <hr>
                </div>

                <div class="col-xs-12">
                    @forelse ($profissional->blocosDescricao as $blocoDescricao)
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-xs-1">
                                    @include('profissionals.partials.controles-blocos-conteudo')
                                </div>
                                <div class="col-xs-1">
                                    {{$blocoDescricao->tipoTexto}}
                                </div>
                                <div class="col-xs-10">
                                    {!! $blocoDescricao->htmlRenderizado !!}
                                </div>
                            </div>
                        
                        </li>
                    </ul>

                    @empty
                    <p> Não existem registros </p>
                    @endforelse
                </div>
                <div class="col-xs-12">
                    <hr>
                </div>
                <div class="col-xs-12 text-center container-acoes-blocos-descricao">
                    <a href="/profissionals/{{$profissional->id}}/adiciona-conteudo?tipo=texto" data-profissional="{{$profissional->id}}" data-tipo="texto" class="btn btn-default">
                        <i class="fa fa-plus"></i> Texto
                    </a>
                    <button data-profissional="{{$profissional->id}}" data-tipo="imagem" class="btn-controle-conteudo btn btn-default">
                        <i class="fa fa-plus"></i> Imagem
                    </button>
                    <button data-profissional="{{$profissional->id}}" data-tipo="lista" class="btn-controle-conteudo btn btn-default">
                        <i class="fa fa-plus"></i> Lista
                    </button>
                    <a href="/profissionals/{{$profissional->id}}/adiciona-conteudo?tipo=citacao" data-profissional="{{$profissional->id}}" data-tipo="citacao" class="btn btn-default">
                        <i class="fa fa-plus"></i> Citação
                    </a>
                    <button data-profissional="{{$profissional->id}}" data-tipo="botao" class="btn-controle-conteudo btn btn-default">
                        <i class="fa fa-plus"></i> Botão
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@include('ckeditor.builder', ['textAreaClass' =>"textarea-ck"])

<script>

function mostrarModal(titulo, body){
    $('.modal-title').html(titulo);
    $('#modalBody').html(body);
    $('#modal').modal('show');
}

function getFormBlocoConteudo(tipo, idProfissional){

    var params = {
        tipo: tipo,
        profissional_id: idProfissional
    };

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });      

    $.ajax({
        url: '/blocoDescricaos',
        type: 'POST',
        dataType: 'json',
        data: params,
        complete: function (jqXHR, textStatus) {
            console.log('complete');
        },
        success: function (data, textStatus, jqXHR) {
            console.log('success');
            console.log(data);
            if (data.formulario){
                mostrarModal(data.titulo, data.formulario);
                bindBtnAddListagem();
            }

        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log('error');
        }
    });

}


function bindBotoesControleConteudo(){
    $('.btn-controle-conteudo').click(function (ev){
        console.log('clicou em um botao de conteudo');
        console.log(ev);
        console.log(ev.target);

        var tipoBloco = $(ev.target).data('tipo');
        var idProfissional = $(ev.target).data('profissional');
       
        getFormBlocoConteudo(tipoBloco, idProfissional);
        

    });

}

bindBotoesControleConteudo();


function bindBtnAddListagem() {
    $('.item-listagem .btn-add').click(function(ev) {
        ev.preventDefault();
        console.log(this); 

        var divItemListagem = $(this).parents('.item-listagem');
        var ordemAtual = divItemListagem.data('item');

        var modelo = $(".item-modelo").clone();
        var html = modelo.html();
        var novo = html.replace('#ID#', ++ordemAtual).replace('item-modelo', '');
        $(novo).insertAfter(divItemListagem);

        $(this).find('i').removeClass('glyphicon-plus').addClass('glyphicon-trash');
        $(this).addClass('btn-danger').removeClass('btn-add').addClass('btn-remover');
    });
}

/**


**/
</script>



@endsection
