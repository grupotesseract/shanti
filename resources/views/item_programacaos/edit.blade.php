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

@section('scripts')
<script>
$('.tipo-select').change(function() {
    var valor = $(this).val();
    if (valor == 1) {
        $('.campos-data').removeClass('hide');
    }

    if (valor == 2) {
        $('.campos-data').addClass('hide');
    }

    if (valor == 3) {
        $('.campos-data').removeClass('hide');
    }
});

setTimeout(function(){
    $('.tipo-select').trigger("change");
}, 50);

</script>
@endsection
