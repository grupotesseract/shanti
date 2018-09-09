@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Trabalho Portfolio
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'trabalhoPortfolios.store', 'files' => true]) !!}

                        @include('trabalho_portfolios.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@include('ckeditor.builder', ['textAreaClass' =>"textarea-ck"])
@endsection