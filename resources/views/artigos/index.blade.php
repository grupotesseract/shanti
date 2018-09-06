@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>Listagem de artigos</h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    <div class="col-xs-12">
                        @include('artigos.table')
                    </div>
                    <div class="col-xs-12">
                        <hr>
                    </div>
                    <div class="col-xs-12">
                        <a class="btn btn-default" style="margin-top: 1rem;margin-bottom: 5px" href="{!! route('admin-artigos.create') !!}"> <i class="fa fa-plus"></i> Adicionar um novo artigo</a>
                    </div>
                    
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

