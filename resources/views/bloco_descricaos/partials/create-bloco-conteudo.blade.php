@extends('layouts.app')

@section('css')
    <style>
.tab-content {
    min-height: 35vh;
}
    </style>
@endsection


@section('content')
    <section class="content-header">
        <h1>
            Incluindo bloco de conteudo.    
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        @if (\Request::get('tipo') != 'imagem')
            <div class="box box-primary">
                <div class="box-body">
                    <div class="row">
                        {!! $formulario !!}
                    </div>
                </div>
            </div>
        @else
            <div class="panel">
                {!! $formulario !!}
            </div>
        @endif
    </div>
@endsection

@section('scripts')
@include('ckeditor.builder', ['textAreaClass' =>"textarea-ck"])
@endsection
