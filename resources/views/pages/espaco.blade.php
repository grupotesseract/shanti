@extends('layouts-home.master')

@section('content')

<style type="text/css">
	.navbar-nav li:nth-child(1) a {
		font-weight: 600;
	}
</style>

<div class="container">
    @if (\Agent::isMobile())
        <div class="espaco-mobile">
            <div id="carouselExampleIndicators" class="carousel slide carousel-espaco" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="https://res.cloudinary.com/tesseract/image/upload/v1536362064/shanti/_DSC1122.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://res.cloudinary.com/tesseract/image/upload/v1536362063/shanti/_DSC1181.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://res.cloudinary.com/tesseract/image/upload/v1536362063/shanti/_DSC1139.jpg" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://res.cloudinary.com/tesseract/image/upload/v1536362062/shanti/39296912_1792701990798438_3132007516519530496_n.jpg" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://res.cloudinary.com/tesseract/image/upload/v1536362061/shanti/39265655_1792700344131936_7233709693745496064_n.jpg" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://res.cloudinary.com/tesseract/image/upload/v1536362061/shanti/39211756_1792700267465277_1230123142320488448_n.jpg" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://res.cloudinary.com/tesseract/image/upload/v1536362061/shanti/39253540_1792701227465181_7228503295734579200_n.jpg" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://res.cloudinary.com/tesseract/image/upload/v1536362061/shanti/39252900_1792701087465195_1242835678580965376_n.jpg" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://res.cloudinary.com/tesseract/image/upload/v1536362061/shanti/39208334_1792701450798492_1808732078351581184_n.jpg" alt="Third slide">
                    </div>
                </div>
            </div>
        <div class="row">
            <div class="col col-espaco">
                <h4>O ESPAÇO __</h4>
                <p>Shanti, palavra sânscrita que significa PAZ, tornou-se uma síntese do objetivo deste Instituto, idealizado e fundado em fevereiro de 2015 pela professora de Yoga Gabriela Teixeira e pelo naturólogo João G. G. Maciel.</p>
                <p>O Instituto Shanti oferece serviços voltados para a saúde integral, promoção da cultura de paz, do desenvolvimento sustentável e expansão da consciência.</p>

                <blockquote class="blockquote text-center">
                    <p class="mb-1">“A parte mais doce do jogo da Consciência Infinita é que Ela está escondida em cada um e cada um está procurando por ela.”</p>
                    <footer class="blockquote-footer">Sri Sri Anandamurti</footer>
                </blockquote>
            </div>
        </div>
            
        </div>

    @else
        <div class="row">
            <div class="col col-espaco">
                <h4>O ESPAÇO __</h4>
                <p>Shanti, palavra sânscrita que significa PAZ, tornou-se uma síntese do objetivo deste Instituto, idealizado e fundado em fevereiro de 2015 pela professora de Yoga Gabriela Teixeira e pelo naturólogo João G. G. Maciel.</p>
                <p>O Instituto Shanti oferece serviços voltados para a saúde integral, promoção da cultura de paz, do desenvolvimento sustentável e expansão da consciência.</p>

                <blockquote class="blockquote text-center">
                    <p class="mb-1">“A parte mais doce do jogo da Consciência Infinita é que Ela está escondida em cada um e cada um está procurando por ela.”</p>
                    <footer class="blockquote-footer">Sri Sri Anandamurti</footer>
                </blockquote>
            </div>

            <div class="col-8 espaco-pc">
                <div id="carouselExampleIndicators" class="carousel slide carousel-espaco" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="https://res.cloudinary.com/tesseract/image/upload/v1536362064/shanti/_DSC1122.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://res.cloudinary.com/tesseract/image/upload/v1536362063/shanti/_DSC1181.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://res.cloudinary.com/tesseract/image/upload/v1536362063/shanti/_DSC1139.jpg" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://res.cloudinary.com/tesseract/image/upload/v1536362062/shanti/39296912_1792701990798438_3132007516519530496_n.jpg" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://res.cloudinary.com/tesseract/image/upload/v1536362061/shanti/39265655_1792700344131936_7233709693745496064_n.jpg" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://res.cloudinary.com/tesseract/image/upload/v1536362061/shanti/39211756_1792700267465277_1230123142320488448_n.jpg" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://res.cloudinary.com/tesseract/image/upload/v1536362061/shanti/39253540_1792701227465181_7228503295734579200_n.jpg" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://res.cloudinary.com/tesseract/image/upload/v1536362061/shanti/39252900_1792701087465195_1242835678580965376_n.jpg" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://res.cloudinary.com/tesseract/image/upload/v1536362061/shanti/39208334_1792701450798492_1808732078351581184_n.jpg" alt="Third slide">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>

@endsection
