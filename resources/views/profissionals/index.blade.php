@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>Listagem dos profissionais</h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    <div class="col-xs-12">
                        @include('profissionals.table')
                    </div>
                    <div class="col-xs-12">
                        <hr>
                    </div>
                    <div class="col-xs-12">
                        <a class="btn btn-default" href="/profissionals/create"> <i class="fa fa-plus"></i> &nbsp; Adicionar um novo profissional</a>
                    </div>
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

