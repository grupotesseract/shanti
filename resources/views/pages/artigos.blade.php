@extends('layouts-home.master')

@section('content')

<style type="text/css">
    .navbar-nav li:nth-child(6) a {
        font-weight: 600;
    }
</style>

<div class="container artigos">
	<div class="row justify-content-center">
		<div class="col-12 col-lg-9">
			<h4>ARTIGOS ____</h4>

			<div class="tags">
				<a href=""><span class="active">Todos</span></a>
				<a href=""><span>Yoga</span></a>
				<a href=""><span>Terapia</span></a>
				<a href=""><span>Naturologia</span></a>
				<a href=""><span>Medicina</span></a>
				<a href=""><span>Grupos</span></a>
				<a href=""><span>Mantras</span></a>
			</div>

			@for ($i = 1; $i <= 7; $i++)
				<div class="row justify-content-center download">
					<div class="col-auto align-self-center botao-download">
						<a href="">
							<i class="fas fa-arrow-circle-down fa-2x"></i>
						</a>
					</div>

					<div class="col">
						<a href="">
							<p>Nome do Artigo, Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

							<span>#todos</span>
							<span>#yoga</span>
							<span>#terapia</span>
							<span>#naturologia</span>
							<span>#medicina</span>
							<span>#grupos</span>
							<span>#mantras</span>						
						</a>
					</div>
				</div>
				@endfor
		</div>
	</div>
</div>

@endsection