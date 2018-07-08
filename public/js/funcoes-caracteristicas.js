function removeCaracteristica(id) {
    var request = $.ajax({
        type: "DELETE",
        url: "/admin/caracteristicas/delete",
        dataType: "json",
        data: {
            id: id
        }
    });

    request.done(function (data) {
        if (data === true) {
            swal("Caracteristicas removida com sucesso", "", "success").then(function (value) {
                location.reload();
            });
        } else {
            swal("Não foi possivel remover a caracteristicas", "", "error");
        }
    });

    request.fail(function (data) {
        console.error(data);
        swal("Não foi possível remover a caracteristicas", "", "error");
    })
}


$(document).on("click", ".removeCaracteristica", function () {
    var id = $(this).data('id');
    swal({
        title: "Você tem certeza que deseja remover essa caracteristica?",
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
            removeCaracteristica(id);
        }
    });
});

//FUNCOES DE BUSCA DINAMICA
$('#botao_buscar_caracteristicas').on('click', function () {
    var url = $(this).attr('href');
    var caracteristica = $('#buscar_caracteristica').val();
    preparaBusca(url, caracteristica);
});

$("#buscar_caracteristica").on('keyup', function (e) {
    if (e.keyCode == 13) {
        var url = $(this).attr('href');
        var caracteristica = $('#buscar_caracteristica').val();
        preparaBusca(url, caracteristica);
    }
});

$('body').on('click', '.pagination a', function(e) {
    e.preventDefault();

    var url = $(this).attr('href');
    var caracteristica = $('#buscar_caracteristica').val();
    preparaBusca(url, caracteristica);
});

function preparaBusca(url, caracteristica){
    buscarCaracteristicas(url, caracteristica);
    window.history.pushState("", "", url);
}

function buscarCaracteristicas(url, caracteristica) {
    $.ajax({
        url : url,
        data: {
            caracteristica: caracteristica
        }
    }).done(function (data) {
        $('#caracteristicas_renderiza').html(data);
        $('#buscar_caracteristica').val(caracteristica);
    }).fail(function (data) {
        console.log(data);
    });
}