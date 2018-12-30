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
    <script type="text/javascript" src="/js/blocos_descricao.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/cropper/2.3.3/cropper.js'></script>
    <script src="{{ asset('js/cropper_config.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.33.1/dist/sweetalert2.all.min.js"></script>
    <script>
$(function () {
    $('input[type=file]').on('change', function(el) {
        swal({
            title: 'Carregando...',
            html: '<br><i class="fa fa-spin fa-spinner fa-3x"></i><br><br><br>',
            showConfirmButton: false
        });
        $(el.target).parents('form').submit();
    })
});
    </script>
    
@endsection
