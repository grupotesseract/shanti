@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Grupo Servico
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($grupoServico, ['route' => ['grupoServicos.update', $grupoServico->id], 'method' => 'patch']) !!}

                        @include('grupo_servicos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection

@section('scripts')
@include('ckeditor.builder', ['textAreaClass' =>"textarea-ck"])
@endsection
