@extends('layouts-home.master')

@section('content')

<style type="text/css">
    .navbar-nav li:nth-child(5) a {
        font-weight: 600;
    }
</style>

<div class="container portfolio">
	<h4>PORTFÓLIO ____</h4>
	<div class="row justify-content-center">
		@for ($i = 1; $i <= 6; $i++)
			<div class="col-12 col-lg-5">
				<a href="portfolio-interno">
					<div class="caixa">
						<p>Breve descrição do projeto que irá aparecer quando passar o mouse sobre a caixa. A foto ficará um filtro.</p>
					</div>
					<h5>NOME DO PROJETO</h5>
				</a>
			</div>
		@endfor
	</div>
</div>

@endsection