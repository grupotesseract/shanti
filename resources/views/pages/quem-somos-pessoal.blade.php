@extends('layouts-home.master')

@section('content')

<style type="text/css">
    .navbar-nav li:nth-child(2) a {
        font-weight: 600;
    }
</style>

<div class="container quem-somos-pessoal">
    <h4>QUEM SOMOS ____</h4>
    <div class="row">
        <div class="col-12 col-lg">
            <img class="foto-pessoal" src="holder.js/300x300">
        </div>
        <div class="col col-lg-8">
            <h5>Gabriela do Prado Teixeira</h5>
            <p>Formada em Comunicação pela Unesp – Bauru e Yoga pelo IEPY – Instituto de Ensino e Pesquisas em Yoga (USP/ SP) / Kaivalyadhama Yoga Institute (India), sob coordenação do professor Marcos Rojo, esteve na Índia, onde teve a oportunidade de entrar em contato com as raízes dessa filosofia milenar. Pós graduada em Biopsicologia Ciência Corpo-Mente, sob coordenação da Dr. Susan Andrews. Possui formação de Doula na Tradição pelo Cais da Luz, Cais do Parto e Jardim de Om, ministrado por Marcely Carvalho em Bauru/2015. Ministra aulas de Yoga desde 2010, além de workshops e cursos relacionados à saúde Corpo Mente. É coidealizadora e fundadora do Instituto Shanti.</p>

            <blockquote class="blockquote text-center">
              <p class="mb-1">“Quando o finito entra em contato com o infinito, isto é chamado Yoga.”</p>
              <footer class="blockquote-footer">Sri Sri Anandamurti</footer>
            </blockquote>

            <h6>Aulas - Modalidades</h6>
            <div class="row">
                <li class="col-12 col-md-5">Aulas em grupo e individuais</li>
                <li class="col-12 col-md-5">Aulas em grupo e individuais</li>
                <li class="col-12 col-md-5">Aulas em grupo e individuais</li>
                <li class="col-12 col-md-5">Aulas em grupo e individuais</li>
                <li class="col-12 col-md-5">Aulas em grupo e individuais</li>
                <li class="col-12 col-md-5">Aulas em grupo e individuais</li>
                <li class="col-12 col-md-5">Aulas em grupo e individuais</li>
            </div>

            <h5 class="titulo-borda">Venha fazer uma aula experimental</h5>

            <img class="tabela-horarios" src="images/tabela-horarios.png">
        </div>
    </div>
</div>

@endsection