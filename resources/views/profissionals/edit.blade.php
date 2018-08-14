@extends('layouts.app')

@section('css')
<style>
    ul.nav li.active a {
        font-weight:bold;
    }

    div.tab-content {
        margin-top: 3.5rem;
    }

    .center-center {
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>

@endsection

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
                <li class="pull-right"> <a target="_blank" href="/quem-somos/{{$profissional->id}}" class="btn btn-primary"> 
                        <i class="fa fa-eye"></i> Ver página do profissional</a>
                </li>
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

/** Smooth replace html **/
(function($){
    $.fn.replace_html = function(html){
        return this.each(function(){
            var el = $(this);
            el.stop(true, true, false);
            var finish = {width: this.style.width, height: this.style.height};
            var cur = {width: el.width() + "px", height: el.height() + "px"};
            el.html(html);
            var next = {width: el.width() + "px", height: el.height() + "px"};
            el.css(cur).animate(next, 300, function(){el.css(finish);});
        });
    };
})(jQuery);


function alteraOrdemAjax(anchor, url, variacao) {

    //decide se bota o loading na linha atual e de cima ou de baixo
    if (variacao) {
        $(anchor).parents('.list-group-item').next().remove();
    } else {
        $(anchor).parents('.list-group-item').prev().remove();
    }

    $(anchor).parents('.list-group-item').replace_html(' <i class="fa fa-spin fa-spinner fa-3x text-center"></i>');
    

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });      

    $.ajax({
        url: url,
        type: 'GET',
        success: function (data, textStatus, jqXHR) {
            setTimeout(redrawListaBlocos(data.view), 1000);
        }
    });
}

function redrawListaBlocos(html) {
    $('.container-blocos-descricao').replace_html(html);
}

</script>

@endsection
