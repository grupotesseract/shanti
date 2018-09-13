
{{-- 
<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>
 --}}

<li class="{{ Request::is('profissionals*') ? 'active' : '' }}">
    <a href="{!! route('profissionals.index') !!}"><i class="fa fa-group"></i><span>Quem Somos</span></a>
</li>

<li class="{{ Request::is('admin-artigos*') ? 'active' : '' }}">
    <a href="{!! route('admin-artigos.index') !!}"><i class="fa fa-book"></i><span>Artigos</span></a>
</li>

<li class="{{ Request::is('grupoServicos*') ? 'active' : '' }}">
    <a href="{!! route('grupoServicos.index') !!}"><i class="fa fa-wrench"></i><span>Serviços</span></a>
</li>

<li class="{{ Request::is('trabalhoPortfolios*') ? 'active' : '' }}">
    <a href="{!! route('trabalhoPortfolios.index') !!}"><i class="fa fa-briefcase"></i><span>Portfólio</span></a>
</li>

<li class="{{ Request::is('itemProgramacaos*') ? 'active' : '' }}">
    <a href="{!! route('itemProgramacaos.index') !!}"><i class="fa fa-calendar"></i><span>Programação</span></a>
</li>
