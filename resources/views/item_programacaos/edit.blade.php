@extends('layouts.app')

@section('css')
<style>
    ul.nav li.active a {
        font-weight:bold;
    }

    div.tab-content {
        margin-top: 1rem;
    }

    .center-center {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .container-form-capa {
        display: flex;
        padding: 2rem;
        justify-content: center;
        align-items: center;
    }
</style>

@endsection

@section('content')
    <section class="content-header">
        <h1>
            Editando as informaçoes de uma Programacão
        </h1>
   </section>
   <div class="content">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="@if (\Request::get('tab') != 'tab_2') active @endif"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Informações gerais</a></li>
                <li class="@if (\Request::get('tab') == 'tab_2') active @endif"><a href="#tab_2" data-toggle="tab" aria-expanded="false">Página interna</a></li>
                <li class="pull-right"> <a target="_blank" href="/programacao/{{$itemProgramacao->id}}" class="btn btn-primary"> 
                        <i class="fa fa-eye"></i> Ver página da programação</a>
                </li>
                <li class="pull-right"> <a href="{!! route('itemProgramacaos.index') !!}" class="btn btn-primary"> 
                        <i class="fa fa-angle-left"></i> Voltar</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane @if (\Request::get('tab') != 'tab_2') active @endif" id="tab_1">
                    @include('adminlte-templates::common.errors')
                    <div class="row">
                   {!! Form::model($itemProgramacao, ['route' => ['itemProgramacaos.update', $itemProgramacao->id], 'method' => 'patch', 'files'=> true]) !!}

                        @include('item_programacaos.fields')

                   {!! Form::close() !!}
                    </div>

                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane @if (\Request::get('tab') == 'tab_2') active @endif" id="tab_2">
                    @include('item_programacaos.partials.edit-interna')
                </div>
                <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
        </div>

   </div>
@endsection

@section('scripts')
<script>
$('.tipo-select').change(function() {
    var valor = $(this).val();
    if (valor == 1) {
        $('.campos-data').removeClass('hide');
    }

    if (valor == 2) {
        $('.campos-data').addClass('hide');
    }

    if (valor == 3) {
        $('.campos-data').removeClass('hide');
    }
});

setTimeout(function(){
    $('.tipo-select').trigger("change");
}, 50);

</script>
@endsection
