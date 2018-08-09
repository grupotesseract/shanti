@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Profissional
        </h1>
    </section>
    <div class="content">
        @include('flash::message')
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Infos Gerais</a></li>
                <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Conteudo</a></li>
                <li class="pull-right"> <a href="{!! route('profissionals.index') !!}" class="btn btn-primary"> 
                        <i class="fa fa-angle-left"></i> Voltar</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_1">
                    @include('adminlte-templates::common.errors')
                    <div class="row">
                        {!! Form::model($profissional, ['route' => ['profissionals.update', $profissional->id], 'method' => 'patch', 'files'=> true]) !!}

                        @include('profissionals.fields')

                        {!! Form::close() !!}
                    </div>

                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_2">
                    @include('profissionals.partials.edit-interna')
                </div>
                <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
        </div>

    </div>
@endsection


@section('scripts')
    @include('ckeditor.builder', ['textAreaClass' =>"textarea-ck"])

    <script>

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

    </script>

@endsection
