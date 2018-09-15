@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>{{ \Request::get('tipo') ? \Request::get('tipo') : 'Itens' }} da Programação</h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>
        @include('flash::message')
        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <div class="col-xs-12">
                    @include('item_programacaos.table')
                </div>
                <div class="col-xs-12">
                    <hr>
                </div>
                <div class="col-xs-12">
                    <a class="btn btn-default" href="/itemProgramacaos/create"> <i class="fa fa-plus"></i> &nbsp; Adicionar uma nova programação</a>
                </div>
            </div>
        </div>
    </div>
@endsection

