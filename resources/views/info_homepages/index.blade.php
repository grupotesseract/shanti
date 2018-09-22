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
</style>

@endsection

@section('content')
    <section class="content-header">
        <h1>Informações da Homepage</h1>
    </section>
    <div class="content">
        @include('flash::message')
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="@if (\Request::get('tab') != 'tab_2') active @endif"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Texto</a></li>
                <li class="@if (\Request::get('tab') == 'tab_2') active @endif"><a href="#tab_2" data-toggle="tab" aria-expanded="false">Fotos</a></li>
                <li class="pull-right"> <a target="_blank" href="/" class="btn btn-primary"> 
                        <i class="fa fa-eye"></i> Ver homepage</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane @if (\Request::get('tab') != 'tab_2') active @endif" id="tab_1">
                    @include('adminlte-templates::common.errors')
                    <div class="row">
                        {!! Form::model($infoHomepage, ['route' => ['infoHomepage.update', $infoHomepage->id], 'method' => 'patch']) !!}

                        @include('info_homepages.fields')

                        {!! Form::close() !!}
                    </div>

                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane @if (\Request::get('tab') == 'tab_2') active @endif" id="tab_2">
                    @include('info_homepages.edit-fotos')
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
