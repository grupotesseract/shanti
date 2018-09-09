<div class="text-center container-video-youtube">

    @if (!isset($admin)) 
        <iframe height="300" width="300" src="http://youtube.com/embed/{{$url}}" style="border-radius: 10px; max-width: @if(isset($admin)) 250px; @else 100%; @endif" class="mx-auto"></iframe>

    @else
        <a target="_blank" href="http://youtube.com/embed/{{$url}}">http://youtube.com/embed/{{$url}}</a>
    @endif
</div>
