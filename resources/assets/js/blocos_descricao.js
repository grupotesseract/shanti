/**
 * JS responsavel pelos botoes de controle dos blocos de descricao
 */

/** Smooth replace html **/
(function($){
    $.fn.replace_html = function(html){
        return this.each(function(){
            var el = $(this);
            el.stop(true, true, false);
            var finish = {width: this.style.width, height: this.style.height};
            var cur = {width: el.width() + "px", height: el.height() + "px"};
            el.html(html);
            var next = {width: el.width() + "px", height: el.height() + "px"};
            el.css(cur).animate(next, 350, function(){el.css(finish);});
        });
    };
})(jQuery);

/** function do onclick de alterar ordem dos blocos, esconde linhas, dispara ajax e da redraw após o resultado  **/
function alteraOrdemAjax(anchor, url, variacao) {

    //decide se bota o loading na linha atual e de cima ou de baixo
    if (variacao > 0) {
        $(anchor).parents('.list-group-item').next().remove();
    } else {
        $(anchor).parents('.list-group-item').prev().remove();
    }

    $(anchor).parents('.list-group-item').replace_html(' <i class="fa fa-spin fa-spinner fa-3x text-center"></i>');
    

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });      

    $.ajax({
        url: url,
        type: 'GET',
        success: function (data, textStatus, jqXHR) {
            setTimeout(function() {
                redrawListaBlocos(data.view)
            }, 300);
        }
    });
}


/** Redraw na lista de blocos, por um novo html **/
function redrawListaBlocos(newHtml) {
    $('div#container-blocos-descricao').replace_html(newHtml);
    setTimeout(bindBotoesOrdem, 500);
}

/** Binda os botoes de alterar a ordem de blocos de descricao **/
function bindBotoesOrdem() {
    $('.btn-controle-ordem').off('click');
    $('.btn-controle-ordem').click(function (ev) {

        //Testando se o click foi na anchor ou no 'i'
        var anchor = ev.target.tagName == 'A' ? ev.target : $(ev.target).parent();
        var url = $(anchor).data('url');
        var variacao = $(anchor).data('variacao');

        alteraOrdemAjax(anchor, url, variacao);
    });
}

$(function () {
    bindBotoesOrdem();
});
    



