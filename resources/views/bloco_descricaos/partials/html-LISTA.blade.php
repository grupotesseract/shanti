
<h6>{{ $titulo }}</h6>
<div class="row">
    @foreach ($items as $item)
        @if ( $item )
            @if(isset($admin))
                <div class="col-12 col-md-5">{{ $item }}</div>
            @else
                <li class="col-12 col-md-5">{{ $item }}</li>
            @endif
        @endif
    @endforeach
</div>
