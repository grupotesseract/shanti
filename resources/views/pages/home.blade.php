@extends('layouts-home.master')

@section('content')

    <style type="text/css">
.footer {
    display: none !important;
}
    </style>

    <div class="capa-home">
        <div class="container">
            <h1>“Você nunca está só ou desamparado. A mesma força que guia as estrelas guia você também.”</h1>
            <h5>P. R. Sarkar</h5>
        </div>
    </div>

    <div class="container footer-home">
        <h4>Instituto de Ciência Corpo Mente</h4>

        <div class="row">
            <div class="col-12 col-lg-8 home-bola">
                <a href="servicos-geral">
                    <img src="http://res.cloudinary.com/tesseract/image/upload/c_crop,h_500,w_500,x_120,y_50/v1536504286/shanti/Servi%C3%A7os.jpg">
                    <h5>SERVIÇOS</h5>
                </a>

                <a href="programacao-cursos-agendados">
                    <img src="http://res.cloudinary.com/tesseract/image/upload/c_crop,h_500,w_500,x_350,y_150/v1536504304/shanti/cursos.jpg">
                    <h5>CURSOS</h5>
                </a>

                <a href="programacao-eventos">
                    <img src="http://res.cloudinary.com/tesseract/image/upload/c_crop,g_south,h_640,w_641/v1536504311/shanti/eventos.jpg">
                    <h5>EVENTOS</h5>
                </a>
            </div>

            <div class="col footer-home-right align-self-center">
                <h6>ONDE NOS ENCONTRAR</h6>

                <a href="https://goo.gl/maps/hQrrviNq4jQ2" target="_blank">
                    <i class="fas fa-map-marker-alt fa-lg"></i>Rua Maria José, 12-17 | Bauru - SP
                </a>

                <a href="tel:14988325849" target="_blank">
                    <i class="fas fa-phone-square fa-lg"></i>(14) 98832-5849
                </a>

                <a href="mailto:contato@institutoshanti.com" target="_blank">
                    <i class="fas fa-envelope fa-lg"></i>contato@institutoshanti.com<br>
                </a>

                <a href="https://www.instagram.com/explore/locations/1014091440/instituto-shanti/?hl=pt-br" target="_blank">
                    <i class="fab fa-instagram fa-lg"></i>@Shanticienciacorpomente
                </a>

                <a href="https://www.facebook.com/Shanticienciacorpomente" target="_blank">
                    <i class="fab fa-facebook-square fa-lg"></i>/Shanticienciacorpomente
                </a>
            </div>
        </div>
    </div>

@endsection
