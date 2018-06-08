@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Bloco Descricao
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($blocoDescricao, ['route' => ['blocoDescricaos.update', $blocoDescricao->id], 'method' => 'patch']) !!}

                        @include('bloco_descricaos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection