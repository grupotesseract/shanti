@if (is_array($src))

    <div class="d-flex justify-content-between align-items-center">
    @foreach ($src as $url)
        <img style="max-width:48%; border-radius:10px;" src="{{$url}}">
    @endforeach
    </div>

@else
    <img style="border-radius:10px; max-width: @if(isset($admin)) 250px; @else 100%; @endif" src="{{$src}}">
@endif
