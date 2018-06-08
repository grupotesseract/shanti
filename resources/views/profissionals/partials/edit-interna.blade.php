@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>
        Informações do profissional
    </h1>
</section>
<div class="content">
    @include('adminlte-templates::common.errors')
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
                    <ul>
                        <li>{{$blocoDescricao}}</li>
                    </ul>

                    @empty
                    <p> Não existem registros </p>
                    @endforelse
                </div>
                <div class="col-xs-12 hide" >
                    {!! Form::open(['route' => 'blocoDescricaos.store', 'id' => 'form-adicionar-bloco-descricao']) !!}

                    {!! Form::select('tipo', \App\Models\BlocoDescricao::TIPOS) !!} 
                    {!! Form::hidden('profissional_id', $profissional->id) !!} 

                    {!! Form::submit('Adicionar novo bloco de conteudo') !!}

                    {!! Form::close() !!}
                </div>
                <div class="col-xs-12">
                    <hr>
                </div>
                <div class="col-xs-12 text-center container-acoes-blocos-descricao">
                    <button class="btn btn-default"><i class="fa fa-plus"></i> Texto</button>
                    <button class="btn btn-default"><i class="fa fa-plus"></i> Imagem</button>
                    <button class="btn btn-default"><i class="fa fa-plus"></i> Lista</button>
                    <button class="btn btn-default"><i class="fa fa-plus"></i> Citação</button>
                    <button class="btn btn-default"><i class="fa fa-plus"></i> Botão</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@include('ckeditor.builder', ['textAreaClass' =>"textarea-ck"])
@endsection
