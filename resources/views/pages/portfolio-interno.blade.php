@extends('layouts-home.master')

@section('content')

<style type="text/css">
    .navbar-nav li:nth-child(5) a {
        font-weight: 600;
    }
</style>

<div class="container portfolio-interno">
	<h4>PORTFÓLIO ____</h4>
</div>

<div class="container-fluid capa-container">
  <div class="capa"></div>
</div>

<div class="container portfolio-interno">
	<h5>Nome do Projeto Aqui Nome do Projeto Aqui</h5>

	<h6>Aqui vai aquela breve descrição do projeto que irá aparecer quando passar o mouse sobre a caixa na página anterior.</h6>

	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut egestas felis, et ullamcorper magna. Integer quis auctor eros. Nam vel augue in mi posuere feugiat. Morbi vestibulum, dui vel dapibus tempor, nibh metus luctus dolor, vitae malesuada orci mi facilisis sem. Donec tincidunt magna et erat bibendum, ac tempor purus tincidunt. Etiam in convallis ligula. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus sodales blandit lorem, ut dapibus elit placerat sed.</p>

	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut egestas felis, et ullamcorper magna. Integer quis auctor eros. Nam vel augue in mi posuere feugiat. Morbi vestibulum, dui vel dapibus tempor, nibh metus luctus dolor, vitae malesuada orci mi facilisis sem. Donec tincidunt magna et erat bibendum, ac tempor purus tincidunt. Etiam in convallis ligula. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus sodales blandit lorem, ut dapibus elit placerat sed. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut egestas felis, et ullamcorper magna. Integer quis auctor eros. Nam vel augue in mi posuere feugiat. Morbi vestibulum, dui vel dapibus tempor, nibh metus luctus dolor, vitae malesuada orci mi facilisis sem. Donec tincidunt magna et erat bibendum, ac tempor purus tincidunt. Etiam in convallis ligula. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus sodales blandit lorem, ut dapibus elit placerat sed.</p>

	<div class="row justify-content-center">
		@for ($i = 1; $i <= 2; $i++)
			<div class="col-12 col-lg-6">
				<div class="imagem-projeto"></div>
			</div>
		@endfor
	</div>

	<div class="videoWrapper">
		<iframe width="1280" height="720" src="https://www.youtube.com/embed/h9nZ7bwLjII" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
	</div>

	<a href="portfolio" class="botao-voltar">
		<p>Voltar para o portifólio</p>
	</a>
</div>

@endsection