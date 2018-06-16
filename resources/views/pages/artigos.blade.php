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
				<a href="/artigosindex/todos"><span class="active">Todos</span></a>
				<a href="/artigosindex/yoga"><span>Yoga</span></a>
				<a href="/artigosindex/terapia"><span>Terapia</span></a>
				<a href="/artigosindex/naturologia"><span>Naturologia</span></a>
				<a href="/artigosindex/medicina"><span>Medicina</span></a>
				<a href="/artigosindex/grupos"><span>Grupos</span></a>
				<a href="/artigosindex/mantras"><span>Mantras</span></a>
			</div>

			@foreach($artigos as $artigo)
				<div class="row justify-content-center download">
					<div class="col-auto align-self-center botao-download">
						<a href="/download/artigos/{{ $artigo->id }}">
							<i class="fas fa-arrow-circle-down fa-2x"></i>
						</a>
					</div>

					<div class="col">
						<a href="">
							<p>{{ $artigo->nome }}</p>

							@foreach($artigo->tags as $tag)
								<span>{{ $tag->name }}</span>
							@endforeach						
						</a>
					</div>
				</div>
			@endforeach
		</div>
	</div>
</div>

@endsection