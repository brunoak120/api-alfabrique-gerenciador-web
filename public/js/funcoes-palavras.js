function removePalavra(id) {
    var request = $.ajax({
        type: "DELETE",
        url: "/admin/palavras/delete",
        dataType: "json",
        data: {
            id: id
        }
    });

    request.done(function (data) {
        if (data === true) {
            swal("Palavra removida com sucesso", "", "success").then(function (value) {
                location.reload();
            });
        } else {
            swal("Não foi possivel remover a palavra", "", "error");
        }
    });

    request.fail(function (data) {
        console.error(data);
        swal("Não foi possível remover a palavra", "", "error");
    })
}

/**
 * @description listener that gets action to remove a category
 */
$(document).on("click", ".removePalavra", function () {
    var id = $(this).data('id');
    swal({
        title: "Você tem certeza que deseja remover essa palavra?",
        icon: "warning",
        buttons: {
            cancel: {
                text: "Cancelar",
                visible: true,
                value: false
            },
            confirm: {
                text: "Confirmar",
                visible: true,
                value: true
            }
        }
    }).then(function (value) {
        if (value) {
            removePalavra(id);
        }
    });
});

//FUNCOES DE BUSCA DINAMICA
$('#botao_buscar_palavras').on('click', function () {
    var url = $(this).attr('href');
    var palavra = $('#buscar_palavra').val();
    preparaBusca(url, palavra);
});

$("#buscar_palavra").on('keyup', function (e) {
    if (e.keyCode == 13) {
        var url = $(this).attr('href');
        var palavra = $('#buscar_palavra').val();
        preparaBusca(url, palavra);
    }
});

$('body').on('click', '.pagination a', function(e) {
    e.preventDefault();

    var url = $(this).attr('href');
    var palavra = $('#buscar_palavra').val();
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