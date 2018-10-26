<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    @include('layouts-home.head')
    <body>
    	@include('layouts-home.nav')

        @yield('content')

        @include('layouts-home.footer')

        @include('layouts-home.scripts')	

        @yield('js')
    </body>
</html>
