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
		<div class="col home-bola">
			<img src="images/300x300.jpg">
			<h5>SERVIÇOS</h5>
		</div>

		<div class="col home-bola">
			<img src="images/300x300.jpg">
			<h5>CURSOS</h5>
		</div>

		<div class="col home-bola">
			<img src="images/300x300.jpg">
			<h5>EVENTOS</h5>
		</div>
		
		<div class="col footer-home-right">
			<h6>ONDE NOS ENCONTRAR</h6>
			<a href="" target="_blank">
				<i class="fa fa-map-marker" aria-hidden="true"></i>Rua Maria José, 12-17 | Bauru - SP
			</a>
			<a href="" target="_blank">
				<i class="fa fa-phone" aria-hidden="true"></i>(14) 98832-5849
			</a>
			<a href="" target="_blank">
				<i class="fa fa-envelope" aria-hidden="true"></i>contato@institutoshanti.com<br>
			</a>
			<a href="https://www.instagram.com/explore/locations/1014091440/instituto-shanti/?hl=pt-br" target="_blank">
				<i class="fa fa-instagram" aria-hidden="true"></i>@Shanticienciacorpomente
			</a>
			<a href="https://www.facebook.com/Shanticienciacorpomente" target="_blank">
				<i class="fa fa-facebook-square" aria-hidden="true"></i>/Shanticienciacorpomente
			</a>
		</div>
	</div>
</div>

@endsection