@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editando um bloco de conteudo.    
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! $formulario !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@include('ckeditor.builder', ['textAreaClass' =>"textarea-ck"])
@endsection
