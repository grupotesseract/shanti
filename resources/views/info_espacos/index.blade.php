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
    .container-form-capa input#file {
        max-width: 49%;
        display: inline-block;
        margin-top: 3rem;
    }
</style>

@endsection

@section('content')
    <section class="content-header">
        <h1>Informações da página O Espaço</h1>
    </section>
    <div class="content">
        @include('flash::message')
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="@if (\Request::get('tab') != 'tab_2') active @endif"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Textos</a></li>
                <li class="@if (\Request::get('tab') == 'tab_2') active @endif"><a href="#tab_2" data-toggle="tab" aria-expanded="false">Fotos</a></li>
                <li class="pull-right"> <a target="_blank" href="/" class="btn btn-primary"> 
                        <i class="fa fa-eye"></i> Ver página</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane @if (\Request::get('tab') != 'tab_2') active @endif" id="tab_1">
                    @include('adminlte-templates::common.errors')
                    <div class="row">
                        <div class="col-xs-6">
                        {!! Form::model($infoEspaco, ['route' => ['infoEspaco.update', $infoEspaco->id], 'method' => 'patch']) !!}

                        @include('info_espacos.fields')

                        {!! Form::close() !!}
                        </div>
                    </div>

                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane @if (\Request::get('tab') == 'tab_2') active @endif" id="tab_2">
                    @include('info_espacos.edit-fotos')
                </div>
                <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
        </div>

    </div>
@endsection


@section('scripts')
    @include('summernote.builder', ['textAreaClass' =>"summernote"])
    <script type="text/javascript" src="/js/blocos_descricao.js"></script>
@endsection
