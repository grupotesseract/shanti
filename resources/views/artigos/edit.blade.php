@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Artigo
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($artigo, ['route' => ['artigos.update', $artigo->id], 'method' => 'patch']) !!}

                        @include('artigos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection