@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Adicionando nova referência
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'admin-artigos.store', 'files' => true]) !!}

                        @include('artigos.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

<script charset="utf-8">
    //Quando trocar o select, esconde os campos condidicionais e mostra o da opcao selecionada
    $('.tipo').change(function() {
        var selected = $(this).find('option:selected');
        $('.tipo-condicional').hide();
        $('.show-'+selected.text()).show();
    });
</script>

@endsection
