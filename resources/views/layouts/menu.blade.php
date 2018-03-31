
{{-- 
<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>
 --}}

<li class="{{ Request::is('profissionals*') ? 'active' : '' }}">
    <a href="{!! route('profissionals.index') !!}"><i class="fa fa-edit"></i><span>Profissionals</span></a>
</li>

