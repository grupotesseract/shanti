
<h2>Uma pessoa entrou em contato pelo formulário do site!</h2>

<p><strong>Programação:</strong> <a href="{{ route('programacao.interna', $idProgramacao) }}">{{$nomeProgramacao}}</a></p>

<hr>

<p><strong>Nome:</strong> {{$nome}}</p>
<p><strong>Email:</strong> {{$email}}</p>
<p><strong>Telefone:</strong> {{$telefone}}</p>
<p><strong>Mensagem:</strong> {{$observacao}}</p>

<hr>

<p><strong>Horario em que foi preenchido o formulario no site:</strong>
&nbsp; {{\Carbon\Carbon::now()->format('d/m/Y H:i:s')}}
</p>

<hr>

