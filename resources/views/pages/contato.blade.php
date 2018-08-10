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
        <h4>CONTATO ____</h4>

        <div class="row programacao-interno justify-content-center">
            <div class="col col-lg-9">
                <h5>VENHA NOS CONHECER</h5>
                <div id="map"></div>

                <footer class="footer footer-pc">
                    <a href="https://goo.gl/maps/hQrrviNq4jQ2" target="_blank">
                        <i class="fas fa-map-marker-alt fa-lg"></i>Rua Maria José, 12-17 | Bauru - SP
                    </a>

                    <br>

                    <a href="+55-14-98832-5849" target="_blank">
                        <i class="fas fa-phone-square fa-lg"></i>(14) 98832-5849
                    </a>

                    <a href="mailto:contato@institutoshanti.com" target="_blank">
                        <i class="fas fa-envelope fa-lg"></i>contato@institutoshanti.com<br>
                    </a>
                </footer>

                <footer class="footer footer-mobile">
                    <h6>INSTITUTO SHANTI</h6>
                    <a href="https://goo.gl/maps/hQrrviNq4jQ2" target="_blank">
                        <i class="fas fa-map-marker-alt fa-lg"></i>Rua Maria José, 12-17 | Bauru - SP
                    </a>

                    <a href="+55-14-98832-5849" target="_blank">
                        <i class="fas fa-phone-square fa-lg"></i>(14) 98832-5849
                    </a>

                    <a href="mailto:contato@institutoshanti.com" target="_blank">
                        <i class="fas fa-envelope fa-lg"></i>contato@institutoshanti.com<br>
                    </a>
                </footer>

                <div class="forms">
                    <p>Ou se preferir, entre em contato pelo email ou deixe sua mensagem abaixo:</p>
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


@section('js')

<script>
function initMap() {
    var uluru = {lat: -22.334729, lng: -49.0641347};
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 17,
        center: uluru
    });
    var marker = new google.maps.Marker({
        position: uluru,
        map: map
    });
}
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDqg43-3D-GvpudhaLobCBf4GRrJUOMTIs&callback=initMap">
</script>
    
@endsection
