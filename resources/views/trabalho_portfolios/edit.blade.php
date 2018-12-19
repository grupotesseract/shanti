@extends('layouts.app')

@section('css')

<!-- Cropper.css -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/cropper/2.3.3/cropper.css'>
<link href="{{ asset('css/cropper-style.css') }}" rel="stylesheet">

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
            Editando as informações de um trabalho do portfólio
        </h1>
    </section>
    <div class="content">
        @include('flash::message')
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="@if (\Request::get('tab') != 'tab_2') active @endif"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Informações gerais</a></li>

                <li class="@if (\Request::get('tab') == 'tab_2') active @endif"><a href="#tab_2" data-toggle="tab" aria-expanded="false">Página interna</a></li>

                <li class="pull-right">
                    <a target="_blank" href="/portfolio/{{$trabalhoPortfolio->id}}" class="btn btn-primary"> 
                        <i class="fa fa-eye"></i> Ver página do trabalho
                    </a>
                </li>

                <li class="pull-right">
                    <a href="{!! route('trabalhoPortfolios.index') !!}" class="btn btn-primary"> 
                        <i class="fa fa-angle-left"></i> Voltar
                    </a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane @if (\Request::get('tab') != 'tab_2') active @endif" id="tab_1">
                    @include('adminlte-templates::common.errors')

                    <div class="row">
                        {!! Form::model($trabalhoPortfolio,
                            [
                                'route' => ['trabalhoPortfolios.update', $trabalhoPortfolio->id],
                                'method' => 'patch',
                                'files'=> true
                            ])
                        !!}

                        @include('trabalho_portfolios.fields')

                        {!! Form::close() !!}
                    </div>
                </div>

                <!-- /.tab-pane -->
                <div class="tab-pane @if (\Request::get('tab') == 'tab_2') active @endif" id="tab_2">
                    @include('trabalho_portfolios.partials.edit-interna')
                </div>
                <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
        </div>
    </div>
@endsection
   
@section('scripts')
    <script type="text/javascript" src="/js/blocos_descricao.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/cropper/2.3.3/cropper.js'></script>
    <script src="{{ asset('js/cropper_config.js') }}"></script>
@endsection
