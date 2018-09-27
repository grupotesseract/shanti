<li class="{{ Request::is('informacoes-homepage*') ? 'active' : '' }}">
    <a href="{!! route('infoHomepage.index') !!}"><i class="fa fa-globe"></i><span>Home</span></a>
</li>

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
<li class="{{ Request::is('infoEspacos*') ? 'active' : '' }}">
    <a href="{!! route('infoEspacos.index') !!}"><i class="fa fa-edit"></i><span>Info Espacos</span></a>
</li>

<li class="{{ Request::is('infoEspacos*') ? 'active' : '' }}">
    <a href="{!! route('infoEspacos.index') !!}"><i class="fa fa-edit"></i><span>Info Espacos</span></a>
</li>

