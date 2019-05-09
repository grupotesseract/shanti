@extends('layouts-home.master')

@section('css')
<style type="text/css">
    .navbar-nav li:nth-child(7) a {
        font-weight: 600;
    }
</style>
@endsection

@section('content')
    <div class="container programacao-geral contato">
        <h4>CONTATO</h4>

        <div class="row programacao-interno justify-content-center">
            <div class="col col-lg-9">
                <h5>VENHA NOS CONHECER</h5>
                <div id="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3690.504459721608!2d-49.0631905474795!3d-22.334573359865384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94bf6741fd90f38d%3A0xc796b1b60139c03b!2sInstituto+Shanti+de+Ci%C3%AAncia+Corpo+Mente+-+Yoga%2C+Naturologia+e+Terapias!5e0!3m2!1spt-BR!2sbr!4v1557080333564!5m2!1spt-BR!2sbr" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <footer class="footer footer-pc">
                    <a href="https://goo.gl/maps/hQrrviNq4jQ2" target="_blank">
                        <i class="fas fa-map-marker-alt fa-lg"></i>Rua Maria José, 12-71 | Bauru - SP
                    </a>

                    <br>

                    <a href="https://wa.me/5514996042081" target="_blank">
                        <i class="fab fa-whatsapp fa-lg"></i>(14) 99604-2081 - João Maciel
                    </a>

                    <a href="https://wa.me/5514981434456" target="_blank">
                        <i class="fab fa-whatsapp fa-lg"></i>(14) 98143-4456 - Fernanda Vasconcelos
                    </a>

                </footer>

                <footer class="footer footer-mobile">
                    <h6>INSTITUTO SHANTI</h6>
                    <a href="https://goo.gl/maps/hQrrviNq4jQ2" target="_blank">
                        <i class="fas fa-map-marker-alt fa-lg"></i>Rua Maria José, 12-71 | Bauru - SP
                    </a>

                    <a href="https://wa.me/5514996042081" target="_blank">
                        <i class="fab fa-whatsapp fa-lg"></i>(14) 99604-2081 - João Maciel
                    </a>

                    <a href="https://wa.me/5514981434456" target="_blank">
                        <i class="fab fa-whatsapp fa-lg"></i>(14) 98143-4456 - Fernanda Vasconcelos
                    </a>

                    <a href="mailto:contato@institutoshanti.com" target="_blank">
                        <i class="fas fa-envelope fa-lg"></i>contato@institutoshanti.com<br>
                    </a>
                </footer>

                <div class="forms">
                    <p>Se preferir, entre em contato pelo email ou deixe sua mensagem abaixo:</p>
                </div>

                @include('flash::message')

                @include('pages.partials.formulario-contato')


                <a href="https://www.facebook.com/Shanticienciacorpomente" target="_blank">
                    <h5 class="presenca">Acompanhe nossa página no Facebook! <i class="fab fa-facebook-square fa-lg"></i></h5>
                </a>
            </div>
        </div>
    </div>

@endsection

