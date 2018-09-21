<div class="row justify-content-center mt-5">
        <div class="col-12 col-lg-5">
            <a href="/programacao/{{$itemProgramacao->id}}">           
                <p class="caption">{{$itemProgramacao->descricao_listagem}}</p>            
                <img src="{{ $itemProgramacao->fotoListagem->first()->urlCloudinary }}">
            </a>
        </div>
        <div class="col-12 col-lg-5 align-self-end">            
            <h5>{{$itemProgramacao->nome}}</h5>
            @if ($itemProgramacao->breve_descricao_listagem)
                <p class="mt-3">{{$itemProgramacao->breve_descricao_listagem}}</p>
            @endif
            @if ($itemProgramacao->horario)
                <p class="mt-3"><i class="far fa-clock fa-sm" style=" font-size: 1.1rem; margin-right: 5px; margin-left: 3px;"></i> {{$itemProgramacao->horario}}</p>
            @endif
            @if ($itemProgramacao->link_facebook)
                <a href="{{$itemProgramacao->link_facebook}}" target="_blank">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAC4ElEQVRIS7VVTUhUURQ+57436bQxW/SD46YgDGwlpTMKGbgqilzMOGNuihktW0h/y2RS2qREtpCcN5BQ6YxDPxBEBMFA+caIwIWQ28ifhEoz6HfePd37TB2ZeW/GsLd5P/e75zvn+849D+E/X5gvflXrgMP5FaqJlP1EVAYMVXH/BEATCksnXw61z9vFsCSo8g6UbFLxPBp4GhhsyxmEw29i8BAJu/V4cCIXJidBjS/SoDC8QwA78lUo1zlwAxGvutJbuhIJn5G5J4vAE9BaOPFBBkwpJPiaYAgJx+x0czIZTi9/X0MgMwdGT/8l+AoRYb+Q62wWgdS8WGGTeWR5LTZGiXBe+LIViW7l1J3BkdGh0BO5tlKBOxC5IszqtJSF87mf32HXm8dt3ySm+oTmUgx4nxvP3+oVs5UQDnOTQLZi0QKbsuwWCSJ6pMdbG+WjO6BdA84rENlRq4QIsCEVCz43CeoCA3Wc2At7U3lcj7X5JabGp31mDEpt8Rxu6iOhDpOg1h89R0DXLbNB6IF0ui+VODNtJtQU2SO82k2Ips65Lg4wNhYLuU0CT5PWK9y4YFPuJVFub+a68Oyg8Cxp7RlMiQrKlwgC0RtC4w5rMJ8DZHf1eOiiKZFfSzHgZQCs3GqPCPxhNBbaaRK4/dpl8dBVqAcev7YgsCV58BPCs31/CSKNCPhgQwkQY/pwMLDURc39pTztmBNt6rAmWe2igiogOCUkvb160PxaXLz4NoSA06Lh2Fz+6l7L4gqBpylaydEYt55DhVcgWrgzFQt1y2TXDLt840KOZbnJbhgaBONOp+pODp78kUXg9Y4oM+qXYSLw2htucbg4n2Gq4tGHgu+WEVn/g/r6sPpru6sPkNrXQyIzVxQ8nhk8q4LMgLXN2mHiXJxetteWSBhKDHuLitWeZVky8fY//XCYuSddh5DTMc7gAOPgQgYqAf8IqEwAp2eG6rwvu8XmRK9HiPVj/wDSGC0oCcCllwAAAABJRU5ErkJggg==" style='width:21px;' alt="facebook icon">
                </a>
            @endif
        </div>
</div>
