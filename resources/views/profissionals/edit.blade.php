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
            Editando as informações do profissional
        </h1>
    </section>
    <div class="content">
        @include('flash::message')
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="@if (\Request::get('tab') != 'tab_2') active @endif"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Informações gerais</a></li>
                <li class="@if (\Request::get('tab') == 'tab_2') active @endif"><a href="#tab_2" data-toggle="tab" aria-expanded="false">Página interna</a></li>
                <li class="pull-right"> <a target="_blank" href="/quem-somos/{{$profissional->id}}" class="btn btn-primary"> 
                        <i class="fa fa-eye"></i> Ver página do profissional</a>
                </li>
                <li class="pull-right"> <a href="{!! route('profissionals.index') !!}" class="btn btn-primary"> 
                        <i class="fa fa-angle-left"></i> Voltar</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane @if (\Request::get('tab') != 'tab_2') active @endif" id="tab_1">
                    @include('adminlte-templates::common.errors')
                    <div class="row">
                        {!! Form::model($profissional, ['route' => ['profissionals.update', $profissional->id], 'method' => 'patch', 'files'=> true]) !!}

                        @include('profissionals.fields')

                        {!! Form::close() !!}
                    </div>

                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane @if (\Request::get('tab') == 'tab_2') active @endif" id="tab_2">
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
    <script type="text/javascript" src="/js/blocos_descricao.js"></script>
@endsection
