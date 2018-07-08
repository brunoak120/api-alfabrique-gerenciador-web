$('#busca_tabela_palavras').on('keyup', function () {
    var url = $(this).attr('href');
    var palavra = $(this).val();
    preparaBusca(url, palavra);
});

$('body').on('click', '.pagination a', function(e) {
    e.preventDefault();

    var url = $(this).attr('href');
    var palavra = $('#busca_tabela_palavras').val();
    preparaBusca(url, palavra);
});

function preparaBusca(url, palavra){
    buscarPalavras(url, palavra);
    window.history.pushState("", "", url);
}

function buscarPalavras(url, palavra) {
    $.ajax({
        url : url,
        data: {
            palavra: palavra
        }
    }).done(function (data) {
        $('#palavras_renderiza').html(data);
        $('#busca_tabela_palavras').val(palavra);
    }).fail(function (data) {
        console.log(data);
    });
}