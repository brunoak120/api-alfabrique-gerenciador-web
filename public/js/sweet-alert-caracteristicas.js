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