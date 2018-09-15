@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Item Programacao
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($itemProgramacao, ['route' => ['itemProgramacaos.update', $itemProgramacao->id], 'method' => 'patch', 'files' => true]) !!}

                        @include('item_programacaos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
